$(document).ready(function () {

    // typehead
    // constructs the suggestion engine
    var pathologies = new Bloodhound({
        prefetch: "../../../tags.json",
        datumTokenizer: Bloodhound.tokenizers.obj.whitespace('nom'),
        queryTokenizer: Bloodhound.tokenizers.whitespace
        // `states` is an array of state names defined in "The Basics"
//            local: states
    });

    $('.tag-input').tagsinput({
        typeaheadjs:
            [{
//                    hint: true,
                highlight: true,
//                    minLength: 1
            },
                {
                    name: 'nom',
                    display: 'nom',
                    value: 'nom',
                    source: pathologies
                }]
    });


    //pour type exam
    // typehead
    // constructs the suggestion engine
    var typeexam = new Bloodhound({
        prefetch: "../../../typeexam.json",
        datumTokenizer: Bloodhound.tokenizers.obj.whitespace('nomTypeExamen'),
        queryTokenizer: Bloodhound.tokenizers.whitespace
        // `states` is an array of state names defined in "The Basics"
//            local: states
    });
    $('.tag-input-type').tagsinput({
        typeaheadjs:
            [{
//                    hint: true,
                highlight: true,
//                    minLength: 1
            },
                {
                    name: 'nomTypeExamen',
                    display: 'nomTypeExamen',
                    value: 'nomTypeExamen',
                    source: typeexam
                }]
    });

//    affichage des champs statuts et Matricules pour les agents
    // select
    $("#typePatient").change(function () {
        // alert($("#decision").val() );
        if ($("#typePatient").val() == '2') {
            $('#selectstruc').val(null);
            $('#statutPatient').hide();
            $('#structure').hide();
            $('#matriculePatient').hide();
            $('#matricule').val('neant');
            $('#statut').val('neant');
        } else {
            $('#statutPatient').show();
            $('#matriculePatient').show();
            $('#structure').show();
            $('#matricule').val('');
            $('#statut').val('');
        }
    });

    $(".datepicker").datepicker({
        regional: 'fr',
        dateFormat: 'dd-MM-yyyy'
    });
    $('#rdv').datetimepicker({
        locale: 'fr',
        minDate: new Date()
    });
//            $(".datepickerRDV").datepicker({
//                regional: 'fr',
//                dateFormat: 'dd/MM/yyyy HH:mm'
//            });
    $("#dataTables-example").dataTable();
    $("#dataTables-example-utilisateur").dataTable();
    //"suppression service en ajax :)
    $(".btn-delete-service").click(function (event) {

        //
        event.preventDefault(); //Annuler l'action par défaut

        var boutton = $(event.target).closest('button');
        var id = $(boutton).attr('data-id');
        var message = $(boutton).data('confirm');
        //afficher la popup SweetAlert
        swal({
            title: "Êtes-vous sûr?",
            text: message, //Utiliser la valeur de data-confirm comme text
            icon: "warning",
            dangerMode: true,
            buttons: true,
            cancel: {
                text: "Cancel",
                value: null,
                visible: false,
                className: "",
                closeModal: true,
            },
            confirm: {
                text: "OK",
                value: true,
                visible: true,
                className: "",
                closeModal: true
            }
        }).then(function (willDelete) {
                if (willDelete) {
                    //swal("Deleted!", "Your imaginary file has been deleted!", "success");

                    var url = "{{ path('deleteservice', {id:0}) }}";
                    $.ajax({
                        url: url.replace("0", id),
                        type: "delete",
                        data: {
                            action: 'deleteservice',
                            id: id
                        },
                        dataType: 'json',
                        success: function (data) {
                            $.each(data, function (item, value) {
                                if (value === 'ok') {
                                    $(boutton).closest('tr').fadeOut(500, function () {
                                        $(this).remove();
                                    });
                                }
                            });
                        },
                        error: function (x, y, z) {
                            alert(x + ' ' + y + ' ' + z);
                        }
                    });
                }
            }
        )
        ;
        //----------------------
    });

    //"suppression medicament en ajax :)
    $(".btn-delete-medicament").click(function (event) {

        //
        event.preventDefault(); //Annuler l'action par défaut

        var boutton = $(event.target).closest('button');
        var id = $(boutton).attr('data-id');
        var message = $(boutton).data('confirm');
        //Afficher la popup SweetAlert
        swal({
            title: "Êtes-vous sûr?",
            text: message, //Utiliser la valeur de data-confirm comme text
            icon: "warning",
            dangerMode: true,
            buttons: true,
            cancel: {
                text: "Cancel",
                value: null,
                visible: false,
                className: "",
                closeModal: true,
            },
            confirm: {
                text: "OK",
                value: true,
                visible: true,
                className: "",
                closeModal: true
            }
        }).then(function (willDelete) {
                if (willDelete) {
                    //swal("Deleted!", "Your imaginary file has been deleted!", "success");

                    var url = "{{ path('deletemedicament', {id:0}) }}";
                    $.ajax({
                        url: url.replace("0", id),
                        type: "delete",
                        data: {
                            action: 'deletemedicament',
                            id: id
                        },
                        dataType: 'json',
                        success: function (data) {
                            console.log('data', data)
                            $.each(data, function (item, value) {
                                if (value === 'ok') {
                                    $(boutton).closest('tr').fadeOut(500, function () {
                                        $(this).remove();
                                        location.reload();
                                    });
                                }
                            });
                        },
                        error: function (x, y, z) {
                            alert(x + ' ' + y + ' ' + z);
                        }
                    });
                }
            }
        )
        ;
        //----------------------
    });

    // select
    $("#decision").change(function () {
        // alert($("#decision").val() );
        if ($("#decision").val() === 'RDV') {
            $('#daterdv').show();
        } else {
            $('#daterdv').hide();
        }
    });

    // select
    $("#typeantecedent").change(function () {
        // alert($("#decision").val() );
        if ($("#typeantecedent").val() === '2') {
            $('#allergies').hide();
            $('#traitements').hide();
            $('#chirurgicaux').hide();
        } else {
            $('#allergies').show();
            $('#traitements').show();
            $('#chirurgicaux').show();
        }
    });


    $("#messageOrdonnance").hide();
    $('#messageSuccess').hide();
    $('#messageError').hide();
    var nbMedic = 0;
    //"Affichage PopUp pour l'ajout de medicament
    $("#addMedic").click(function (event) {

        event.preventDefault(); //Annuler l'action par défaut
        var boutton = $(event.target).closest('button');
        var id = $(boutton).attr('data-id');
        var medicSelected = $("#medicSelected").val();
        var url = "{{ path('ordonnance_new') }}";
        var quantite = $("#quantite option:selected").text();
        var indication = $("#indication option:selected").text();
        if (quantite !== 'Choisissez la quantité' && indication !== 'Posologie' &&
            medicSelected !== '') {
            $.ajax({
                url: url,
                type: "POST",
                data: {
                    id: id,
                    action: 'new',
                    idMedoc: medicSelected,
                    quantite: quantite,
                    indication: indication
                },
                dataType: 'json',
                success: function (data) {
                    $.each(data, function (item, value) {
                        if (value === 'ok') {
                            $("#quantite").val('0');
                            $("#indication").val('0');
                            $("#medicSelected").val('');
                            $('#messageSuccess').show();
                            $('#messageSuccess').fadeOut(3500);
                        }
                        if (item === 'newMedic') {
                            nbMedic++;
                            $('#medicamentList')
                                .append("<li class='list-group-item ordonnanc'>" + value.medic + "      " +
                                    value.indication + "  " +
                                    value.quantite +
                                    " <button type='button' data-id='" + value.ordonnance_id + "' " +
                                    "data-confirm='Voulez-vous supprimer le medicament?' " +
                                    "class='fa fa-trash pull-right btn btn-danger " +
                                    "btn-outline delete-medic'>" +
                                    "</button>" +
                                    "</li>")
                        }
                    });
                },
                error: function (x, y, z) {
                    alert(x + ' ' + y + ' ' + z);
                }
            });
        } else {
            $('#messageError').show();
            $('#messageError').fadeOut(5000);
        }
    });

    //"suppression un medicament d'une ordonnance en ajax :)
    $('body').on('click', '.delete-medic', function (event) {
        //
        event.preventDefault(); //Annuler l'action par défaut

        var button = $(event.target).closest('button');

        var id = $(button).attr('data-id');
        var message = $(button).data('confirm');
        console.log('ko', button, id, message);
        //Afficher la popup SweetAlert
        swal({
            title: "Êtes-vous sûr?",
            text: message, //Utiliser la valeur de data-confirm comme text
            icon: "warning",
            dangerMode: true,
            buttons: true,
            cancel: {
                text: "Cancel",
                value: null,
                visible: false,
                className: "",
                closeModal: true,
            },
            confirm: {
                text: "OK",
                value: true,
                visible: true,
                className: "",
                closeModal: true
            }
        }).then(function (willDelete) {
                if (willDelete) {
                    //swal("Deleted!", "Your imaginary file has been deleted!", "success");

                    var url = "{{ path('ordonnance_delete', {id:0}) }}";
                    $.ajax({
                        url: url.replace("0", id),
                        type: "delete",
                        data: {
                            action: 'deletemedic',
                            id: id
                        },
                        dataType: 'json',
                        success: function (data) {
                            console.log('data', data)
                            $.each(data, function (item, value) {
                                if (value === 'ok') {
                                    $(button).closest('li').fadeOut(500, function () {
                                        $(this).remove();
                                    });
                                }
                            });
                        },
                        error: function (x, y, z) {
                            alert(x + ' ' + y + ' ' + z);
                        }
                    });
                }
            }
        )
        ;
        //----------------------
    });

    var medicaments = new Bloodhound({
        prefetch: "../../../medicaments.json",
        datumTokenizer: Bloodhound.tokenizers.obj.whitespace('nomMedicament'),
        queryTokenizer: Bloodhound.tokenizers.whitespace
        // `states` is an array of state names defined in "The Basics"
//            local: states
    });

    $('.tag-input-medic').typeahead({
            highlight: true
        },
        {
            name: 'nomMedicament',
            display: 'nomMedicament',
            value: 'nomMedicament',
            source: medicaments
        });
    if (window.location.href.includes('detailpatient/')) {
        var arrayUrl = window.location.href.split('/');
        var id = arrayUrl[arrayUrl.length - 1];
//        console.log(window.location.href.split('/'));
//        console.log(window.location.href.split('/').length);
        var urlp = "{{ path('getterrain', {id:0}) }}";
        $.ajax({
            url: urlp.replace("0", id),
            type: "post",
            data: {
                action: 'getterrain'
            },
            dataType: 'json',
            success: function (data) {
                $.each(data, function (item, value) {
                    if (value === 'ok') {
                        if (data.terrain !== null) {
                            swal({
                                title: "Le patient est " + data.terrain,
                                icon: "warning",
                                showCancelButton: true,
                                confirmButtonClass: "btn-danger",
                                confirmButtonText: "ok!",
                                closeOnConfirm: false
                            });
                        }
                    }
                });
            },
            error: function (x, y, z) {
                alert(x + ' ' + y + ' ' + z);
            }
        });
    }


    $("#numerodossierpatient").change(function () {
        if ($("#numerodossierpatient").val() !== "") {
            var numerodossierpatient = $("#numerodossierpatient").val();
            var url = "{{ path('getpatient') }}";
            $.ajax({
                url: url,
                data: {
                    action: "getpatient",
                    numerodossierpatient: numerodossierpatient
                },
                type: "POST",
                dataType: "json",
                success: function (data) {
                    $.each(data, function (item, valeur) {

                        if (data.output === 'ok') {
                            $("#tp").val(data.typepatient);
                            $("#np").val(data.nom);
                            $("#te").val("");
                            $("#pr").val('');
                        } else {
                            $("#tp").val("");
                            $("#np").val("");
                            $("#te").val('');
                            $("#pr").val('');
                        }

                    });

                },
                error: function (x, y, z) {
                    alert(x + ' ' + y + ' ' + z);
                }

            });
        }
    });

    $("#te").change(function () {
        if ($("#te").val() !== "") {
            if ($("#tp").val() !== '') {
                $('#patientrequis').hide();
                var te = $("#te").val();
                var url = "{{ path('gettypeexamen') }}";
                $.ajax({
                    url: url,
                    data: {
                        action: "gettypeexamen",
                        te: te
                    },
                    type: "POST",
                    dataType: "json",
                    success: function (data) {
                        $.each(data, function (item, valeur) {
                            console.log(data)
                            if (data.output === 'ok') {
                                if ($('#tp').val() === 'Ayant droit') {
                                    $("#pr").val(data.prix - (data.prix * 0.8));
                                } else {
                                    $("#pr").val(data.prix);
                                }
                            } else {
                                $("#pr").val("");
                            }

                        });
                    },
                    error: function (x, y, z) {
                        alert(x + ' ' + y + ' ' + z);
                    }

                });
            } else {
                $('#patientrequis').show();
                $("#te").val("");
            }
        }
    });

    console.log(window.location.href)
    if (window.location.href === 'http://localhost:8000/') {

        $.ajax({
            url: "http://localhost:8000/getresultat",
            data: {
                action: "getstat"
            },
            type: "get",
            dataType: "json",
            success: function (data) {
                Morris.Line({
                    element: 'morris-area-chart-consultation',
                    data: data,
                    xkey: 'period',
                    ykeys: ['consultation'],
                    labels: ['consultation'],
                    pointSize: 4,
                    hideHover: 'auto',
                    resize: true
                });
            },
            error: function (x, y, z) {
                alert(x + ' ' + y + ' ' + z);
            }

        });
    }

    $('#nbjrrepos').mask('999');
    $('#telpatient').mask('99-999-99-99');
    $("#selectstruc").select2({
        theme: "bootstrap"
    });


    if (window.location.href.includes('examen/new/consultation=') || window.location.href.includes('examen/edit/')) {

        var bttn = $('#createexamens').closest('button');
        console.log(bttn);
        var idte = $(bttn).attr('data-idte');
        var idconsult = $(bttn).attr('data-idconsult');
        console.log(idte, idconsult);

        // var medicSelected = $("#medicSelected").val();
        var urlexamen = "{{ path('examen_new1', {consultationid: zzzz, typeexamenid: vvvv})|escape('js') }}";
        var url0 = urlexamen.replace("vvvv", idte);
        var url1 = url0.replace("zzzz", idconsult);
        $.ajax({
            url: url1,
            type: "GET",
            data: {},
            dataType: 'json',
            success: function (data) {
                $.each(data.champsTE, function (item, value) {
                    $('#sectionResultat')
                        .append(`
                                <div class="form-group">
                                    <label for="${value.id}"> ${value.libelle} </label>
                                    <input type="text" class="form-control" id="${value.id}"
                                    placeholder="${value.valeurmin} <> ${value.valeurmax} (${value.unite}) ">
                                </div>
                            `)


                    $('body').on('click', '#createexamens', function (event) {

                        var resultat = $('#' + value.id).val();
                        if (resultat !== '') {

                            // pour l'ajout

                            var urlajoutexam = "{{ path('examen_new', {consultationid: 2, typeexamenid: 0}) }}";
                            var urlte = urlajoutexam.replace("0", idte);
                            var urlexamajout = urlte.replace("2", idconsult);
                            console.log(idte, idconsult, resultat, value.id)
                            $.ajax({
                                url: urlexamajout,
                                type: "POST",
                                data: {
                                    idconsult: idconsult,
                                    action: 'new',
                                    idte: idte,
                                    resultat: resultat,
                                    champid: value.id
                                },
                                dataType: 'json',
                                success: function (data) {
                                    console.log(data.output)
                                    var goto = "{{ path('examen_show', {id:0}) }}";
                                    window.location.href = goto.replace('0', data.output);
                                },
                                error: function (x, y, z) {
                                    alert(x + ' ' + y + ' ' + z);
                                }
                            });


                        }
                    });

                });


            },
            error: function (x, y, z) {
                alert(x + ' ' + y + ' ' + z);
            }
        });

    }


//        UPDATE RESULTAT EXAMEN
    $('.updateResult').click(function (event) {
        event.preventDefault();
        let btneditresult = $(event.target).closest('button');
        let p = $(event.target).closest('p')
        let libelletoedit = $(btneditresult).attr('data-libelle');
        let restoedit = $(btneditresult).attr('data-res');
        let chtypeexamtoedit = $(btneditresult).attr('data-chtypeex');
        let idconsult = $(btneditresult).attr('data-idconsult');
        let idte = $(btneditresult).attr('data-idte');
        console.log(chtypeexamtoedit)
        console.log(idconsult)
        console.log(idte)
        p.hide();
        let url = "{{ path('oneresultexamen', {idconsult:'aaaa', idresult:'bbbb', idte:'cccc'}) }}";
        let ur = url.replace("aaaa", idconsult);
        let u = ur.replace("bbbb", chtypeexamtoedit);
        let l = u.replace("cccc", idte);
        console.log(l)
        $.ajax({
            url: l,
            type: "get",
            data: {},
            dataType: 'json',
            success: function (data) {
                console.log(data)
                let sectionresult = $('#sectionresult');
                sectionresult.append(`
                       <p>
                        <label> ${data.libelle} </label>
                        <input type="text" class="" value="${ data.resultat }" id="id${data.id}">
                        <button data-idexam="${data.id}" class="createupdateResult btn btn-success btn-outline btn-xs pull-right"><i class="fa fa-save"></i></button>
                       </p>
            `);
            },
            error: function (x, y, z) {
                alert(x + ' ' + y + ' ' + z);
            }
        });
    })

    //      CREATE  UPDATE RESULTAT EXAMEN
    $('body').on('click', '.createupdateResult', function (event) {
        event.preventDefault();
        let btneditresult = $(event.target).closest('button');
        let idexamtoedit = $(btneditresult).attr('data-idexam');
        let url = "{{ path('examen_edit', {id:0}) }}";
        let ur = url.replace("0", idexamtoedit);
        let value = $("#id" + idexamtoedit).val();
        console.log(value)
        $.ajax({
            url: ur,
            type: "POST",
            data: {
                id: idexamtoedit,
                value: value,
                action: 'update'
            },
            dataType: 'json',
            success: function (data) {
                if (data.output === 'ok') {
                    location.reload();
                }
            },
            error: function (x, y, z) {
                alert(x + ' ' + y + ' ' + z);
            }
        });
    })
});