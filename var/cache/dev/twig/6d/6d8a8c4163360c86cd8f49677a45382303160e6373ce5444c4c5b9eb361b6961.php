<?php

/* ::base.html.twig */
class __TwigTemplate_ef6a598e82a5011af52d5b328f0cd2f8830bea5f4c88506ad9e23671aec9697a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_edaab14c0ae09c25ddd1ce1cd35fc15bbd3790ff4291a8dd7d4bd70c8cf1acef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_edaab14c0ae09c25ddd1ce1cd35fc15bbd3790ff4291a8dd7d4bd70c8cf1acef->enter($__internal_edaab14c0ae09c25ddd1ce1cd35fc15bbd3790ff4291a8dd7d4bd70c8cf1acef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_38fb1e81eab642f776761f13243dd7f7c9356f91fd54c28b9b18df84ea718b55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38fb1e81eab642f776761f13243dd7f7c9356f91fd54c28b9b18df84ea718b55->enter($__internal_38fb1e81eab642f776761f13243dd7f7c9356f91fd54c28b9b18df84ea718b55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">

<head>

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>Centre Medico-Social</title>
    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.png"), "html", null, true);
        echo "\"/>
    <link href=\"https://fonts.googleapis.com/css?family=Montserrat\" rel=\"stylesheet\">
    <!-- Bootstrap Core CSS -->
    <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- MetisMenu CSS -->
    <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/vendor/metisMenu/metisMenu.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Custom CSS -->
    <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/dist/css/sb-admin-2.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Morris Charts CSS -->
    <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/vendor/morrisjs/morris.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Custom Fonts -->
    <link href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/vendor/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"https://fonts.googleapis.com/css?family=Sacramento\" rel=\"stylesheet\">
    <link href=\"https://fonts.googleapis.com/css?family=Merriweather\" rel=\"stylesheet\">
    <link href=\"https://fonts.googleapis.com/css?family=Courgette|Merriweather\" rel=\"stylesheet\">
    <link href=\"https://fonts.googleapis.com/css?family=Courgette|Indie+Flower|Merriweather\" rel=\"stylesheet\">
    <!--Datatables-->
    <link href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/vendor/datatables/css/dataTables.bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"
          type=\"text/css\">

    <link rel=\"stylesheet\"
          href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/css/bootstrap-select.min.css\">

    <!-- DATEPICKER CSS -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/dist/css/bootstrap-datepicker3.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/dist/css/bootstrap-datepicker.standalone.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/dist/css/bootstrap-datetimepicker.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/dist/css/ourStyle.css"), "html", null, true);
        echo "\">
    ";
        // line 46
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/tagsinput/bootstrap-tagsinput.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/dist/css/select2/select2-bootstrap.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/dist/css/select2/select2.css"), "html", null, true);
        echo "\">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"), "html", null, true);
        echo "\"></script>
    <![endif]-->
</head>

<body>
<div id=\"wrapper\">
    ";
        // line 59
        $this->displayBlock('header', $context, $blocks);
        // line 60
        echo "    ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 61
        echo "    ";
        $this->displayBlock('body', $context, $blocks);
        // line 62
        echo "</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>

<!-- jQuery datatable -->
<script src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/vendor/datatables/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>

<!-- Bootstrap Core JavaScript -->
<script src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/vendor/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/vendor/metisMenu/metisMenu.min.js"), "html", null, true);
        echo "\"></script>

<!-- Morris Charts JavaScript -->
<script src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/vendor/raphael/raphael.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/vendor/morrisjs/morris.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/data/morris-data.js"), "html", null, true);
        echo "\"></script>

<!-- Custom Theme JavaScript -->
<script src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/dist/js/sb-admin-2.js"), "html", null, true);
        echo "\"></script>

<!-- dataTablesJavaScript -->
<script src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/vendor/datatables/js/dataTables.bootstrap.min.js"), "html", null, true);
        echo "\"></script>

<!-- sweetAlert -->
<script src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/js/sweetalert.min.js"), "html", null, true);
        echo "\"></script>
<!-- datepicker -->
<script src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/dist/js/bootstrap-datepicker.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/bootstrap-select.min.js\"></script>
<script src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/dist/js/moment.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/dist/js/fr.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/dist/js/bootstrap-datetimepicker.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/tagsinput/bootstrap-tagsinput.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/dist/js/typeahead.bundle.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/dist/js/jquery.masked-input.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/dist/js/select2/select2.min.js"), "html", null, true);
        echo "\"></script>
";
        // line 103
        echo "
<script>

    \$(document).ready(function () {

        // typehead
        // constructs the suggestion engine
        var pathologies = new Bloodhound({
            prefetch: \"../../../tags.json\",
            datumTokenizer: Bloodhound.tokenizers.obj.whitespace('nom'),
            queryTokenizer: Bloodhound.tokenizers.whitespace
            // `states` is an array of state names defined in \"The Basics\"
//            local: states
        });

        \$('.tag-input').tagsinput({
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
            prefetch: \"../../../typeexam.json\",
            datumTokenizer: Bloodhound.tokenizers.obj.whitespace('nomTypeExamen'),
            queryTokenizer: Bloodhound.tokenizers.whitespace
            // `states` is an array of state names defined in \"The Basics\"
//            local: states
        });
        \$('.tag-input-type').tagsinput({
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
        \$(\"#typePatient\").change(function () {
            // alert(\$(\"#decision\").val() );
            if (\$(\"#typePatient\").val() == '2') {
                \$('#selectstruc').val(null);
                \$('#statutPatient').hide();
                \$('#structure').hide();
                \$('#matriculePatient').hide();
                \$('#matricule').val('neant');
                \$('#statut').val('neant');
            } else {
                \$('#statutPatient').show();
                \$('#matriculePatient').show();
                \$('#structure').show();
                \$('#matricule').val('');
                \$('#statut').val('');
            }
        });

        \$(\".datepicker\").datepicker({
            regional: 'fr',
            dateFormat: 'dd-MM-yyyy'
        });
        \$('#rdv').datetimepicker({
            locale: 'fr',
            minDate: new Date()
        });
//            \$(\".datepickerRDV\").datepicker({
//                regional: 'fr',
//                dateFormat: 'dd/MM/yyyy HH:mm'
//            });
        \$(\"#dataTables-example\").dataTable();
        \$(\"#dataTables-example-utilisateur\").dataTable();
        //\"suppression service en ajax :)
        \$(\".btn-delete-service\").click(function (event) {

            //
            event.preventDefault(); //Annuler l'action par défaut

            var boutton = \$(event.target).closest('button');
            var id = \$(boutton).attr('data-id');
            var message = \$(boutton).data('confirm');
            //afficher la popup SweetAlert
            swal({
                title: \"Êtes-vous sûr?\",
                text: message, //Utiliser la valeur de data-confirm comme text
                icon: \"warning\",
                dangerMode: true,
                buttons: true,
                cancel: {
                    text: \"Cancel\",
                    value: null,
                    visible: false,
                    className: \"\",
                    closeModal: true,
                },
                confirm: {
                    text: \"OK\",
                    value: true,
                    visible: true,
                    className: \"\",
                    closeModal: true
                }
            }).then(function (willDelete) {
                    if (willDelete) {
                        //swal(\"Deleted!\", \"Your imaginary file has been deleted!\", \"success\");

                        var url = \"";
        // line 227
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("deleteservice", array("id" => 0));
        echo "\";
                        \$.ajax({
                            url: url.replace(\"0\", id),
                            type: \"delete\",
                            data: {
                                action: 'deleteservice',
                                id: id
                            },
                            dataType: 'json',
                            success: function (data) {
                                \$.each(data, function (item, value) {
                                    if (value === 'ok') {
                                        \$(boutton).closest('tr').fadeOut(500, function () {
                                            \$(this).remove();
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

        //\"suppression medicament en ajax :)
        \$(\".btn-delete-medicament\").click(function (event) {

            //
            event.preventDefault(); //Annuler l'action par défaut

            var boutton = \$(event.target).closest('button');
            var id = \$(boutton).attr('data-id');
            var message = \$(boutton).data('confirm');
            //Afficher la popup SweetAlert
            swal({
                title: \"Êtes-vous sûr?\",
                text: message, //Utiliser la valeur de data-confirm comme text
                icon: \"warning\",
                dangerMode: true,
                buttons: true,
                cancel: {
                    text: \"Cancel\",
                    value: null,
                    visible: false,
                    className: \"\",
                    closeModal: true,
                },
                confirm: {
                    text: \"OK\",
                    value: true,
                    visible: true,
                    className: \"\",
                    closeModal: true
                }
            }).then(function (willDelete) {
                    if (willDelete) {
                        //swal(\"Deleted!\", \"Your imaginary file has been deleted!\", \"success\");

                        var url = \"";
        // line 290
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("deletemedicament", array("id" => 0));
        echo "\";
                        \$.ajax({
                            url: url.replace(\"0\", id),
                            type: \"delete\",
                            data: {
                                action: 'deletemedicament',
                                id: id
                            },
                            dataType: 'json',
                            success: function (data) {
                                console.log('data', data)
                                \$.each(data, function (item, value) {
                                    if (value === 'ok') {
                                        \$(boutton).closest('tr').fadeOut(500, function () {
                                            \$(this).remove();
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
        \$(\"#decision\").change(function () {
            // alert(\$(\"#decision\").val() );
            if (\$(\"#decision\").val() === 'RDV') {
                \$('#daterdv').show();
            } else {
                \$('#daterdv').hide();
            }
        });

        // select
        \$(\"#typeantecedent\").change(function () {
            // alert(\$(\"#decision\").val() );
            if (\$(\"#typeantecedent\").val() === '2') {
                \$('#allergies').hide();
                \$('#traitements').hide();
                \$('#chirurgicaux').hide();
            } else {
                \$('#allergies').show();
                \$('#traitements').show();
                \$('#chirurgicaux').show();
            }
        });


        \$(\"#messageOrdonnance\").hide();
        \$('#messageSuccess').hide();
        \$('#messageError').hide();
        var nbMedic = 0;
        //\"Affichage PopUp pour l'ajout de medicament
        \$(\"#addMedic\").click(function (event) {

            event.preventDefault(); //Annuler l'action par défaut
            var boutton = \$(event.target).closest('button');
            var id = \$(boutton).attr('data-id');
            var medicSelected = \$(\"#medicSelected\").val();
            var url = \"";
        // line 357
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ordonnance_new");
        echo "\";
            var quantite = \$(\"#quantite\").val();
            var indication = \$(\"#indication option:selected\").text();
            var unite = \$(\"#unite\").val();
            console.log('unite', unite)
            console.log('unite', indication)
            if (quantite !== 'Choisissez la quantité' && indication !== 'Posologie' &&
                medicSelected !== '') {
                \$.ajax({
                    url: url,
                    type: \"POST\",
                    data: {
                        id: id,
                        action: 'new',
                        idMedoc: medicSelected,
                        quantite: quantite,
                        unite: unite,
                        indication: indication
                    },
                    dataType: 'json',
                    success: function (data) {
                        \$.each(data, function (item, value) {
                            if (value === 'ok') {
                                \$(\"#quantite\").val('0');
                                \$(\"#unite\").val('0');
                                \$(\"#indication\").val('0');
                                \$(\"#medicSelected\").val('');
                                \$('#messageSuccess').show();
                                \$('#messageSuccess').fadeOut(3500);
                            }
                            if (item === 'newMedic') {

                                nbMedic++;
                                \$('#medicamentList')
                                    .append(`
                                        <li class=\"list-group-item ordonnanc\">
                                        \${value.medic} \${value.indication}  \${value.quantite} prise(s) \${value.unite} unité(s)
                                        <button type=\"button\" data-id=\"\${value.ordonnance_id}\"
                                        data-confirm=\"Voulez-vous supprimer le medicament?\"
                                        class=\"fa fa-trash pull-right btn btn-danger btn-outline delete-medic\"></button>
                                        </li>
                                    `)
                            }
                        });
                    },
                    error: function (x, y, z) {
                        alert(x + ' ' + y + ' ' + z);
                    }
                });
            } else {
                \$('#messageError').show();
                \$('#messageError').fadeOut(5000);
            }
        });

        //\"suppression un medicament d'une ordonnance en ajax :)
        \$('body').on('click', '.delete-medic', function (event) {
            //
            event.preventDefault(); //Annuler l'action par défaut

            var button = \$(event.target).closest('button');

            var id = \$(button).attr('data-id');
            var message = \$(button).data('confirm');
            console.log('ko', button, id, message);
            //Afficher la popup SweetAlert
            swal({
                title: \"Êtes-vous sûr?\",
                text: message, //Utiliser la valeur de data-confirm comme text
                icon: \"warning\",
                dangerMode: true,
                buttons: true,
                cancel: {
                    text: \"Cancel\",
                    value: null,
                    visible: false,
                    className: \"\",
                    closeModal: true,
                },
                confirm: {
                    text: \"OK\",
                    value: true,
                    visible: true,
                    className: \"\",
                    closeModal: true
                }
            }).then(function (willDelete) {
                    if (willDelete) {
                        //swal(\"Deleted!\", \"Your imaginary file has been deleted!\", \"success\");

                        var url = \"";
        // line 447
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ordonnance_delete", array("id" => 0));
        echo "\";
                        \$.ajax({
                            url: url.replace(\"0\", id),
                            type: \"delete\",
                            data: {
                                action: 'deletemedic',
                                id: id
                            },
                            dataType: 'json',
                            success: function (data) {
                                console.log('data', data)
                                \$.each(data, function (item, value) {
                                    if (value === 'ok') {
                                        \$(button).closest('li').fadeOut(500, function () {
                                            \$(this).remove();
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
            prefetch: \"../../../medicaments.json\",
            datumTokenizer: Bloodhound.tokenizers.obj.whitespace('nomMedicament'),
            queryTokenizer: Bloodhound.tokenizers.whitespace
            // `states` is an array of state names defined in \"The Basics\"
//            local: states
        });

        \$('.tag-input-medic').typeahead({
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
            var urlp = \"";
        // line 499
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("getterrain", array("id" => 0));
        echo "\";
            \$.ajax({
                url: urlp.replace(\"0\", id),
                type: \"post\",
                data: {
                    action: 'getterrain'
                },
                dataType: 'json',
                success: function (data) {
                    \$.each(data, function (item, value) {
                        if (value === 'ok') {
                            if (data.terrain !== null) {
                                swal({
                                    title: \"Le patient est \" + data.terrain,
                                    icon: \"warning\",
                                    showCancelButton: true,
                                    confirmButtonClass: \"btn-danger\",
                                    confirmButtonText: \"ok!\",
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


        \$(\"#numerodossierpatient\").change(function () {
            if (\$(\"#numerodossierpatient\").val() !== \"\") {
                var numerodossierpatient = \$(\"#numerodossierpatient\").val();
                var url = \"";
        // line 533
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("getpatient");
        echo "\";
                \$.ajax({
                    url: url,
                    data: {
                        action: \"getpatient\",
                        numerodossierpatient: numerodossierpatient
                    },
                    type: \"POST\",
                    dataType: \"json\",
                    success: function (data) {
                        \$.each(data, function (item, valeur) {

                            if (data.output === 'ok') {
                                \$(\"#tp\").val(data.typepatient);
                                \$(\"#np\").val(data.nom);
                                \$(\"#te\").val(\"\");
                                \$(\"#pr\").val('');
                            } else {
                                \$(\"#tp\").val(\"\");
                                \$(\"#np\").val(\"\");
                                \$(\"#te\").val('');
                                \$(\"#pr\").val('');
                            }

                        });

                    },
                    error: function (x, y, z) {
                        alert(x + ' ' + y + ' ' + z);
                    }

                });
            }
        });

        \$(\"#te\").change(function () {
            if (\$(\"#te\").val() !== \"\") {
                if (\$(\"#tp\").val() !== '') {
                    \$('#patientrequis').hide();
                    var te = \$(\"#te\").val();
                    console.log(te)
                    var url = \"";
        // line 574
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gettypeexamen");
        echo "\";
                    \$.ajax({
                        url: url,
                        data: {
                            action: \"gettypeexamen\",
                            te: te
                        },
                        type: \"POST\",
                        dataType: \"json\",
                        success: function (data) {
                            // \$.each(data, function (item, valeur) {
                            console.log(data)
                            if (data.output === 'ok') {
                                \$('#createnewexamens').attr('data-idte', te);
                                // \$('#createnewexamens').attr('data-listechampsid', data.champs);
                                \$('#createnewexamens').attr('data-matriculepatient', \$('#numerodossierpatient').val());
                                \$(\"#resultsection\").children(\"div\").remove();
                                data.champs.forEach(function (element) {
                                    if (element.valeurminf == null) {
                                        \$('#resultsection').append(`
                                    <div class=\"col-md-6\">
                                        <div class=\"form-group\">
                                            <label for=\"\${element.id}\"> \${element.libelle} </label>
                                            <input required=\"true\" type=\"text\" class=\"form-control\" id=\"\${element.id}\"
                                            placeholder=\"\${element.valeurmin} <> \${element.valeurmax} (\${element.unite})\">
                                        </div>
                                    </div>
                                        `);
                                    } else {

                                        \$('#sectionResultat')
                                            .append(`
                                                <div class=\"form-group\">
                                                    <label for=\"\${element.id}\"> \${element.libelle} </label>
                                                    <input required=\"true\" type=\"text\" class=\"form-control\" id=\"\${element.id}\"
                                                    placeholder=\"Homme \${element.valeurmin} <> \${element.valeurmax} (\${element.unite})
                                                    Femme \${element.valeurminf} <> \${element.valeurmaxf} (\${element.unite})\">
                                                </div>
                                            `)
                                    }
                                });
                                if (\$('#tp').val() === 'Ayant droit') {
                                    \$(\"#pr\").val(data.prix - (data.prix * 0.8));
                                } else {
                                    \$(\"#pr\").val(data.prix);
                                }

                            } else {
                                \$('#createnewexamens').attr('data-idte', null);
                                \$('#createnewexamens').attr('data-listechampsid', null);
                                \$('#createnewexamens').attr('data-matriculepatient', null);
                                \$(\"#pr\").val(\"\");
                            }

                            // });
                        },
                        error: function (x, y, z) {
                            alert(x + ' ' + y + ' ' + z);
                        }

                    });
                } else {
                    \$('#createnewexamens').attr('data-listechampsid', null);
                    \$('#createnewexamens').attr('data-idte', null);
                    \$('#createnewexamens').attr('data-matriculepatient', null);
                    \$('#patientrequis').show();
                    \$(\"#te\").val(\"\");
                    \$(\"#resultsection\").children(\"div\").remove();
                }
            } else {
                \$(\"#resultsection\").children(\"div\").remove();
            }
        });

        ";
        // line 649
        echo "        ";
        // line 650
        echo "        ";
        // line 651
        echo "        if ('";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method"), "html", null, true);
        echo "' === 'index') {

            \$.ajax({
                url: \"";
        // line 654
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("apiconsultation");
        echo "\",
                data: {
                    action: \"getstat\"
                },
                type: \"get\",
                dataType: \"json\",
                success: function (data) {
                    if (data[0].labo) {
                        Morris.Line({
                            element: 'morris-area-chart-consultation',
                            data: data,
                            xkey: 'period',
                            ykeys: ['examen'],
                            labels: ['examen'],
                            pointSize: 4,
                            hideHover: 'auto',
                            resize: true
                        });
                    } else {
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
                    }
                },
                error: function (x, y, z) {
                    alert(x + ' ' + y + ' ' + z);
                }

            });
        }

        \$('#nbjrrepos').mask('999');
        \$('#telpatient').mask('99-999-99-99');
        \$(\"#selectstruc\").select2({
            theme: \"bootstrap\"
        });


        if (window.location.href.includes('examen/new/consultation=') || window.location.href.includes('examen/edit/')) {

            var bttn = \$('#createexamens').closest('button');
            var idte = \$(bttn).attr('data-idte');
            var idconsult = \$(bttn).attr('data-idconsult');
            console.log(idte, idconsult);

            // var medicSelected = \$(\"#medicSelected\").val();
            var urlexamen = \"";
        // line 707
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("examen_new1", array("consultationid" => 0, "typeexamenid" => 2)), "html", null, true);
        echo "\";
            var url0 = urlexamen.replace(\"2\", idte);
            var url1 = url0.replace(\"0\", idconsult);
            \$.ajax({
                url: url1,
                type: \"GET\",
                data: {},
                dataType: 'json',
                success: function (data) {
                    \$.each(data.champsTE, function (item, value) {
                        if (value.valeurminf == null) {
                            \$('#sectionResultat')
                                .append(`
                                <div class=\"form-group col-md-6\">
                                    <label for=\"\${value.id}\"> \${value.libelle} </label>
                                    <input required=\"true\" type=\"text\" class=\"form-control\" id=\"\${value.id}\"
                                    placeholder=\"\${value.valeurmin} <> \${value.valeurmax} (\${value.unite}) \">
                                </div>
                            `)
                        } else {
                            \$('#sectionResultat')
                                .append(`
                                <div class=\"form-group col-md-6\">
                                    <label for=\"\${value.id}\"> \${value.libelle} </label>
                                    <input required=\"true\" type=\"text\" class=\"form-control\" id=\"\${value.id}\"
                                    placeholder=\"Homme \${value.valeurmin} <> \${value.valeurmax} (\${value.unite})
                                    Femme \${value.valeurminf} <> \${value.valeurmaxf} (\${value.unite})\">
                                </div>
                            `)
                        }


                        \$('body').on('click', '#createexamens', function (event) {

                            var resultat = \$('#' + value.id).val();
                            if (resultat !== '') {

                                // pour l'ajout

                                var urlajoutexam = \"";
        // line 746
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("examen_new", array("consultationid" => 2, "typeexamenid" => 0)), "html", null, true);
        echo "\";
                                var urlte = urlajoutexam.replace(\"0\", idte);
                                var urlexamajout = urlte.replace(\"2\", idconsult);
                                var datepre = \$('#datepre').val();
                                console.log(datepre)
                                \$.ajax({
                                    url: urlexamajout,
                                    type: \"POST\",
                                    data: {
                                        idconsult: idconsult,
                                        action: 'new',
                                        idte: idte,
                                        resultat: resultat,
                                        champid: value.id,
                                        datepre: datepre
                                    },
                                    dataType: 'json',
                                    success: function (data) {
                                        console.log(data.output)
                                        var goto = \"";
        // line 765
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("examen_show", array("id" => 0));
        echo "\";
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


        \$('#createexams').click(function () {
            var bttn = \$('#createexams').closest('button');
            var idconsult = \$(bttn).attr('data-idconsult');
            var datepre = \$('#datepre').val();
            var urlexamen = \"";
        // line 793
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("createexams", array("numeroconsult" => 0));
        echo "\";
            var url1 = urlexamen.replace(\"0\", idconsult);
            var ok = true;
            \$('.resultattoAdd').each(function (i) {
                if (!\$(this).val()) {
                    ok = false;
                }
            });

            if (ok) {
                \$('.resultattoAdd').each(function (i) {
                    if (\$(this).val() !== '') {
                        \$.ajax({
                            url: url1,
                            type: \"POST\",
                            data: {
                                idconsult: idconsult,
                                action: 'new',
                                idte: \$(this).attr('id-te'),
                                resultat: \$(this).val(),
                                champid: \$(this).attr('id'),
                                datepre: datepre
                            },
                            dataType: 'json',
                            success: function (data) {
                                var goto = \"";
        // line 818
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("examen_show_all", array("id" => 0));
        echo "\";
                                window.location.href = goto.replace('0', data.output);
                            },
                            error: function (x, y, z) {
                                alert(x + ' ' + y + ' ' + z);
                            }
                        });
                    }
                });
            } else {
                \$('#alert-new-exam').show();
                \$('#alert-new-exam').empty();
                \$('#alert-new-exam').append('veuillez remplir tous les champs');
                setTimeout(function () {
                    \$('#alert-new-exam').fadeOut('slow');
                    \$('#alert-new-exam').empty();
                }, 4000)
            }


        });

//        UPDATE RESULTAT EXAMEN
        \$('.updateResult').click(function (event) {
            event.preventDefault();
            let btneditresult = \$(event.target).closest('button');
            let p = \$(event.target).closest('p')
            let libelletoedit = \$(btneditresult).attr('data-libelle');
            let restoedit = \$(btneditresult).attr('data-res');
            let chtypeexamtoedit = \$(btneditresult).attr('data-chtypeex');
            let idconsult = \$(btneditresult).attr('data-idconsult');
            let idte = \$(btneditresult).attr('data-idte');
            console.log(chtypeexamtoedit)
            console.log(idconsult)
            console.log(idte)
            p.hide();
            let url = \"";
        // line 854
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oneresultexamen", array("idconsult" => "aaaa", "idresult" => "bbbb", "idte" => "cccc")), "html", null, true);
        echo "\";
            let ur = url.replace(\"aaaa\", idconsult);
            let u = ur.replace(\"bbbb\", chtypeexamtoedit);
            let l = u.replace(\"cccc\", idte);
            console.log(l)
            \$.ajax({
                url: l,
                type: \"get\",
                data: {},
                dataType: 'json',
                success: function (data) {
                    console.log(data)
                    let sectionresult = \$('#sectionresult');
                    sectionresult.append(`
                       <p>
                        <label> \${data.libelle} </label>
                        <input required=\"true\" type=\"text\" class=\"\" value=\"\${ data.resultat }\" id=\"id\${data.id}\">
                        <button data-idexam=\"\${data.id}\" class=\"createupdateResult btn btn-success btn-outline btn-xs pull-right\"><i class=\"fa fa-save\"></i></button>
                       </p>
            `);
                },
                error: function (x, y, z) {
                    alert(x + ' ' + y + ' ' + z);
                }
            });
        })

        //      CREATE UPDATE RESULTAT EXAMEN
        \$('body').on('click', '.createupdateResult', function (event) {
            event.preventDefault();
            let btneditresult = \$(event.target).closest('button');
            let idexamtoedit = \$(btneditresult).attr('data-idexam');
            let url = \"";
        // line 886
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("examen_edit", array("id" => 0));
        echo "\";
            let ur = url.replace(\"0\", idexamtoedit);
            let value = \$(\"#id\" + idexamtoedit).val();
            console.log(value)
            \$.ajax({
                url: ur,
                type: \"POST\",
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


        \$('#alert-new-exam').hide();
        \$('#createnewexamens').click(function (e) {
            e.preventDefault();
            var idte = \$('#createnewexamens').attr('data-idte')
            var matriculepatient = \$('#createnewexamens').attr('data-matriculepatient')
            if (idte !== null || matriculepatient != null) {

                // pour l'ajout
                var urlajoutexam = \"";
        // line 919
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("examen_new", array("consultationid" => 0, "typeexamenid" => 111)), "html", null, true);
        echo "\";
                var urlexamajout = urlajoutexam.replace(111, idte);
                var datepre = \$('#datepre').val();
                var ok = true;
                \$('#resultsection input').each(function (i) {
                    // console.log(!\$(this).val())
                    if (!\$(this).val()) {
                        ok = false;
                        \$('#alert-new-exam').show();
                        \$('#alert-new-exam').empty();
                        \$('#alert-new-exam').append('veuillez remplir tous les champs');
                        setTimeout(function () {
                            \$('#alert-new-exam').fadeOut('slow');
                            \$('#alert-new-exam').empty();
                        }, 4000)
                    }
                });

                if (ok) {
                    \$('#resultsection input').each(function (i) {
                        if (\$(this).val() !== '') {
                            \$.ajax({
                                url: urlexamajout,
                                type: \"POST\",
                                data: {
                                    idconsult: 0,
                                    action: 'new',
                                    matriculepatient: matriculepatient,
                                    idte: idte,
                                    resultat: \$(this).val(),
                                    champid: \$(this).attr('id'),
                                    datepre: datepre
                                },
                                dataType: 'json',
                                success: function (data) {
                                    var goto = \"";
        // line 954
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("examen_show", array("id" => 0));
        echo "\";
                                    window.location.href = goto.replace('0', data.output);
                                },
                                error: function (x, y, z) {
                                    alert(x + ' ' + y + ' ' + z);
                                }
                            });
                        }
                    });
                }


            }
        })


        \$('.approuver').click(function (\$event) {
//            console.log(\$(this))
//            console.log(\$('.approuver').closest('button'))
            var bttn = \$(this);
            var idconsult = \$(bttn).attr('data-idconsult');
            var urlexamen = \"";
        // line 975
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("examen_approuver", array("numeroconsult" => 0));
        echo "\";
            var url1 = urlexamen.replace(\"0\", idconsult);

            \$.ajax({
                url: url1,
                type: 'POST',
                data: {},
                dataType: 'json',
                success: function (data) {
                    console.log(data)
                    if (data.output === 'ok') {
                        location.reload();
                    }

                },
                error: function (x, y, z) {
                    alert(x + ' ' + y + ' ' + z);
                }

            });

        })

        \$('.desapprouver').click(function (\$event) {
            var bttn = \$(this);
            var idconsult = \$(bttn).attr('data-idconsult');
            var urlexamen = \"";
        // line 1001
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("examen_desapprouver", array("numeroconsult" => 0));
        echo "\";
            var url1 = urlexamen.replace(\"0\", idconsult);

            \$.ajax({
                url: url1,
                type: 'POST',
                data: {},
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

        });
    });
</script>
</body>

</html>

";
        
        $__internal_edaab14c0ae09c25ddd1ce1cd35fc15bbd3790ff4291a8dd7d4bd70c8cf1acef->leave($__internal_edaab14c0ae09c25ddd1ce1cd35fc15bbd3790ff4291a8dd7d4bd70c8cf1acef_prof);

        
        $__internal_38fb1e81eab642f776761f13243dd7f7c9356f91fd54c28b9b18df84ea718b55->leave($__internal_38fb1e81eab642f776761f13243dd7f7c9356f91fd54c28b9b18df84ea718b55_prof);

    }

    // line 59
    public function block_header($context, array $blocks = array())
    {
        $__internal_1dbd3a48fb716ea357729c6e80d3d857a0bcd0a8f2f495aa18b0a5f44cf9bf67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1dbd3a48fb716ea357729c6e80d3d857a0bcd0a8f2f495aa18b0a5f44cf9bf67->enter($__internal_1dbd3a48fb716ea357729c6e80d3d857a0bcd0a8f2f495aa18b0a5f44cf9bf67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_0f7fb30f30ea0ab294f6907d11d1c1da35b8af920dec8541ba7bef488d4f72e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f7fb30f30ea0ab294f6907d11d1c1da35b8af920dec8541ba7bef488d4f72e1->enter($__internal_0f7fb30f30ea0ab294f6907d11d1c1da35b8af920dec8541ba7bef488d4f72e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        echo " ";
        
        $__internal_0f7fb30f30ea0ab294f6907d11d1c1da35b8af920dec8541ba7bef488d4f72e1->leave($__internal_0f7fb30f30ea0ab294f6907d11d1c1da35b8af920dec8541ba7bef488d4f72e1_prof);

        
        $__internal_1dbd3a48fb716ea357729c6e80d3d857a0bcd0a8f2f495aa18b0a5f44cf9bf67->leave($__internal_1dbd3a48fb716ea357729c6e80d3d857a0bcd0a8f2f495aa18b0a5f44cf9bf67_prof);

    }

    // line 60
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_be5d25c8733051de2e5aef7698152d06d8caab09951897c715fe713b64de7e69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be5d25c8733051de2e5aef7698152d06d8caab09951897c715fe713b64de7e69->enter($__internal_be5d25c8733051de2e5aef7698152d06d8caab09951897c715fe713b64de7e69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_f079336fe75c05066c488f43180652497f4ac19c9c3a553a5e253c471df72c85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f079336fe75c05066c488f43180652497f4ac19c9c3a553a5e253c471df72c85->enter($__internal_f079336fe75c05066c488f43180652497f4ac19c9c3a553a5e253c471df72c85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        
        $__internal_f079336fe75c05066c488f43180652497f4ac19c9c3a553a5e253c471df72c85->leave($__internal_f079336fe75c05066c488f43180652497f4ac19c9c3a553a5e253c471df72c85_prof);

        
        $__internal_be5d25c8733051de2e5aef7698152d06d8caab09951897c715fe713b64de7e69->leave($__internal_be5d25c8733051de2e5aef7698152d06d8caab09951897c715fe713b64de7e69_prof);

    }

    // line 61
    public function block_body($context, array $blocks = array())
    {
        $__internal_3e53fe781ad66f5b5da339c62a902cabda43c4c22d3294b989fa0be0d0811fd7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e53fe781ad66f5b5da339c62a902cabda43c4c22d3294b989fa0be0d0811fd7->enter($__internal_3e53fe781ad66f5b5da339c62a902cabda43c4c22d3294b989fa0be0d0811fd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0657a75b5923ad3a827240dee2ca6c3de78d9cc0995ff3ae0116fb6f08f43c77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0657a75b5923ad3a827240dee2ca6c3de78d9cc0995ff3ae0116fb6f08f43c77->enter($__internal_0657a75b5923ad3a827240dee2ca6c3de78d9cc0995ff3ae0116fb6f08f43c77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo " ";
        
        $__internal_0657a75b5923ad3a827240dee2ca6c3de78d9cc0995ff3ae0116fb6f08f43c77->leave($__internal_0657a75b5923ad3a827240dee2ca6c3de78d9cc0995ff3ae0116fb6f08f43c77_prof);

        
        $__internal_3e53fe781ad66f5b5da339c62a902cabda43c4c22d3294b989fa0be0d0811fd7->leave($__internal_3e53fe781ad66f5b5da339c62a902cabda43c4c22d3294b989fa0be0d0811fd7_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1269 => 61,  1252 => 60,  1234 => 59,  1197 => 1001,  1168 => 975,  1144 => 954,  1106 => 919,  1070 => 886,  1035 => 854,  996 => 818,  968 => 793,  937 => 765,  915 => 746,  873 => 707,  817 => 654,  810 => 651,  808 => 650,  806 => 649,  729 => 574,  685 => 533,  648 => 499,  593 => 447,  500 => 357,  430 => 290,  364 => 227,  238 => 103,  234 => 99,  230 => 98,  226 => 97,  222 => 96,  218 => 95,  214 => 94,  210 => 93,  205 => 91,  200 => 89,  194 => 86,  188 => 83,  182 => 80,  178 => 79,  174 => 78,  168 => 75,  162 => 72,  156 => 69,  150 => 66,  144 => 62,  141 => 61,  138 => 60,  136 => 59,  127 => 53,  123 => 52,  116 => 48,  112 => 47,  107 => 46,  103 => 44,  99 => 43,  95 => 42,  91 => 41,  81 => 34,  72 => 28,  66 => 25,  60 => 22,  54 => 19,  48 => 16,  42 => 13,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"fr\">

<head>

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>Centre Medico-Social</title>
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.png') }}\"/>
    <link href=\"https://fonts.googleapis.com/css?family=Montserrat\" rel=\"stylesheet\">
    <!-- Bootstrap Core CSS -->
    <link href=\"{{ asset('templates/vendor/bootstrap/css/bootstrap.min.css') }}\" rel=\"stylesheet\">

    <!-- MetisMenu CSS -->
    <link href=\"{{ asset('templates/vendor/metisMenu/metisMenu.min.css') }}\" rel=\"stylesheet\">

    <!-- Custom CSS -->
    <link href=\"{{ asset('templates/dist/css/sb-admin-2.css') }}\" rel=\"stylesheet\">

    <!-- Morris Charts CSS -->
    <link href=\"{{ asset('templates/vendor/morrisjs/morris.css') }}\" rel=\"stylesheet\">

    <!-- Custom Fonts -->
    <link href=\"{{ asset('templates/vendor/font-awesome/css/font-awesome.min.css') }}\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"https://fonts.googleapis.com/css?family=Sacramento\" rel=\"stylesheet\">
    <link href=\"https://fonts.googleapis.com/css?family=Merriweather\" rel=\"stylesheet\">
    <link href=\"https://fonts.googleapis.com/css?family=Courgette|Merriweather\" rel=\"stylesheet\">
    <link href=\"https://fonts.googleapis.com/css?family=Courgette|Indie+Flower|Merriweather\" rel=\"stylesheet\">
    <!--Datatables-->
    <link href=\"{{ asset('templates/vendor/datatables/css/dataTables.bootstrap.min.css') }}\" rel=\"stylesheet\"
          type=\"text/css\">

    <link rel=\"stylesheet\"
          href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/css/bootstrap-select.min.css\">

    <!-- DATEPICKER CSS -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('templates/dist/css/bootstrap-datepicker3.css') }}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('templates/dist/css/bootstrap-datepicker.standalone.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('templates/dist/css/bootstrap-datetimepicker.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('templates/dist/css/ourStyle.css') }}\">
    {#<link rel=\"stylesheet\" href=\"{{ asset('templates/dist/css/widget.css') }}\">#}
    <link rel=\"stylesheet\" href=\"{{ asset('templates/tagsinput/bootstrap-tagsinput.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('templates/dist/css/select2/select2-bootstrap.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('templates/dist/css/select2/select2.css') }}\">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src=\"{{ asset('https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js') }}\"></script>
    <script src=\"{{ asset('https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js') }}\"></script>
    <![endif]-->
</head>

<body>
<div id=\"wrapper\">
    {% block header %} {% endblock %}
    {% block fos_user_content %}{% endblock fos_user_content %}
    {% block body %} {% endblock %}
</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src=\"{{ asset('templates/vendor/jquery/jquery.min.js') }}\"></script>

<!-- jQuery datatable -->
<script src=\"{{ asset('templates/vendor/datatables/js/jquery.dataTables.min.js') }}\"></script>

<!-- Bootstrap Core JavaScript -->
<script src=\"{{ asset('templates/vendor/bootstrap/js/bootstrap.min.js') }}\"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src=\"{{ asset('templates/vendor/metisMenu/metisMenu.min.js') }}\"></script>

<!-- Morris Charts JavaScript -->
<script src=\"{{ asset('templates/vendor/raphael/raphael.min.js') }}\"></script>
<script src=\"{{ asset('templates/vendor/morrisjs/morris.min.js') }}\"></script>
<script src=\"{{ asset('templates/data/morris-data.js') }}\"></script>

<!-- Custom Theme JavaScript -->
<script src=\"{{ asset('templates/dist/js/sb-admin-2.js') }}\"></script>

<!-- dataTablesJavaScript -->
<script src=\"{{ asset('templates/vendor/datatables/js/dataTables.bootstrap.min.js') }}\"></script>

<!-- sweetAlert -->
<script src=\"{{ asset('templates/js/sweetalert.min.js') }}\"></script>
<!-- datepicker -->
<script src=\"{{ asset('templates/dist/js/bootstrap-datepicker.min.js') }}\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/bootstrap-select.min.js\"></script>
<script src=\"{{ asset('templates/dist/js/moment.js') }}\"></script>
<script src=\"{{ asset('templates/dist/js/fr.js') }}\"></script>
<script src=\"{{ asset('templates/dist/js/bootstrap-datetimepicker.js') }}\"></script>
<script src=\"{{ asset('templates/tagsinput/bootstrap-tagsinput.min.js') }}\"></script>
<script src=\"{{ asset('templates/dist/js/typeahead.bundle.js') }}\"></script>
<script src=\"{{ asset('templates/dist/js/jquery.masked-input.min.js') }}\"></script>
<script src=\"{{ asset('templates/dist/js/select2/select2.min.js') }}\"></script>
{#<script src=\"{{ asset('bundles/fosjsrouting/js/router.min.js') }}\"></script>#}
{#<script src=\"{{ path('fos_js_routing_js', { callback: 'fos.Router.setData' }) }}\"></script>#}
{#<script src=\"{{ asset('templates/js/main.js') }}\"></script>#}

<script>

    \$(document).ready(function () {

        // typehead
        // constructs the suggestion engine
        var pathologies = new Bloodhound({
            prefetch: \"../../../tags.json\",
            datumTokenizer: Bloodhound.tokenizers.obj.whitespace('nom'),
            queryTokenizer: Bloodhound.tokenizers.whitespace
            // `states` is an array of state names defined in \"The Basics\"
//            local: states
        });

        \$('.tag-input').tagsinput({
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
            prefetch: \"../../../typeexam.json\",
            datumTokenizer: Bloodhound.tokenizers.obj.whitespace('nomTypeExamen'),
            queryTokenizer: Bloodhound.tokenizers.whitespace
            // `states` is an array of state names defined in \"The Basics\"
//            local: states
        });
        \$('.tag-input-type').tagsinput({
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
        \$(\"#typePatient\").change(function () {
            // alert(\$(\"#decision\").val() );
            if (\$(\"#typePatient\").val() == '2') {
                \$('#selectstruc').val(null);
                \$('#statutPatient').hide();
                \$('#structure').hide();
                \$('#matriculePatient').hide();
                \$('#matricule').val('neant');
                \$('#statut').val('neant');
            } else {
                \$('#statutPatient').show();
                \$('#matriculePatient').show();
                \$('#structure').show();
                \$('#matricule').val('');
                \$('#statut').val('');
            }
        });

        \$(\".datepicker\").datepicker({
            regional: 'fr',
            dateFormat: 'dd-MM-yyyy'
        });
        \$('#rdv').datetimepicker({
            locale: 'fr',
            minDate: new Date()
        });
//            \$(\".datepickerRDV\").datepicker({
//                regional: 'fr',
//                dateFormat: 'dd/MM/yyyy HH:mm'
//            });
        \$(\"#dataTables-example\").dataTable();
        \$(\"#dataTables-example-utilisateur\").dataTable();
        //\"suppression service en ajax :)
        \$(\".btn-delete-service\").click(function (event) {

            //
            event.preventDefault(); //Annuler l'action par défaut

            var boutton = \$(event.target).closest('button');
            var id = \$(boutton).attr('data-id');
            var message = \$(boutton).data('confirm');
            //afficher la popup SweetAlert
            swal({
                title: \"Êtes-vous sûr?\",
                text: message, //Utiliser la valeur de data-confirm comme text
                icon: \"warning\",
                dangerMode: true,
                buttons: true,
                cancel: {
                    text: \"Cancel\",
                    value: null,
                    visible: false,
                    className: \"\",
                    closeModal: true,
                },
                confirm: {
                    text: \"OK\",
                    value: true,
                    visible: true,
                    className: \"\",
                    closeModal: true
                }
            }).then(function (willDelete) {
                    if (willDelete) {
                        //swal(\"Deleted!\", \"Your imaginary file has been deleted!\", \"success\");

                        var url = \"{{ path('deleteservice', {id:0}) }}\";
                        \$.ajax({
                            url: url.replace(\"0\", id),
                            type: \"delete\",
                            data: {
                                action: 'deleteservice',
                                id: id
                            },
                            dataType: 'json',
                            success: function (data) {
                                \$.each(data, function (item, value) {
                                    if (value === 'ok') {
                                        \$(boutton).closest('tr').fadeOut(500, function () {
                                            \$(this).remove();
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

        //\"suppression medicament en ajax :)
        \$(\".btn-delete-medicament\").click(function (event) {

            //
            event.preventDefault(); //Annuler l'action par défaut

            var boutton = \$(event.target).closest('button');
            var id = \$(boutton).attr('data-id');
            var message = \$(boutton).data('confirm');
            //Afficher la popup SweetAlert
            swal({
                title: \"Êtes-vous sûr?\",
                text: message, //Utiliser la valeur de data-confirm comme text
                icon: \"warning\",
                dangerMode: true,
                buttons: true,
                cancel: {
                    text: \"Cancel\",
                    value: null,
                    visible: false,
                    className: \"\",
                    closeModal: true,
                },
                confirm: {
                    text: \"OK\",
                    value: true,
                    visible: true,
                    className: \"\",
                    closeModal: true
                }
            }).then(function (willDelete) {
                    if (willDelete) {
                        //swal(\"Deleted!\", \"Your imaginary file has been deleted!\", \"success\");

                        var url = \"{{ path('deletemedicament', {id:0}) }}\";
                        \$.ajax({
                            url: url.replace(\"0\", id),
                            type: \"delete\",
                            data: {
                                action: 'deletemedicament',
                                id: id
                            },
                            dataType: 'json',
                            success: function (data) {
                                console.log('data', data)
                                \$.each(data, function (item, value) {
                                    if (value === 'ok') {
                                        \$(boutton).closest('tr').fadeOut(500, function () {
                                            \$(this).remove();
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
        \$(\"#decision\").change(function () {
            // alert(\$(\"#decision\").val() );
            if (\$(\"#decision\").val() === 'RDV') {
                \$('#daterdv').show();
            } else {
                \$('#daterdv').hide();
            }
        });

        // select
        \$(\"#typeantecedent\").change(function () {
            // alert(\$(\"#decision\").val() );
            if (\$(\"#typeantecedent\").val() === '2') {
                \$('#allergies').hide();
                \$('#traitements').hide();
                \$('#chirurgicaux').hide();
            } else {
                \$('#allergies').show();
                \$('#traitements').show();
                \$('#chirurgicaux').show();
            }
        });


        \$(\"#messageOrdonnance\").hide();
        \$('#messageSuccess').hide();
        \$('#messageError').hide();
        var nbMedic = 0;
        //\"Affichage PopUp pour l'ajout de medicament
        \$(\"#addMedic\").click(function (event) {

            event.preventDefault(); //Annuler l'action par défaut
            var boutton = \$(event.target).closest('button');
            var id = \$(boutton).attr('data-id');
            var medicSelected = \$(\"#medicSelected\").val();
            var url = \"{{ path('ordonnance_new') }}\";
            var quantite = \$(\"#quantite\").val();
            var indication = \$(\"#indication option:selected\").text();
            var unite = \$(\"#unite\").val();
            console.log('unite', unite)
            console.log('unite', indication)
            if (quantite !== 'Choisissez la quantité' && indication !== 'Posologie' &&
                medicSelected !== '') {
                \$.ajax({
                    url: url,
                    type: \"POST\",
                    data: {
                        id: id,
                        action: 'new',
                        idMedoc: medicSelected,
                        quantite: quantite,
                        unite: unite,
                        indication: indication
                    },
                    dataType: 'json',
                    success: function (data) {
                        \$.each(data, function (item, value) {
                            if (value === 'ok') {
                                \$(\"#quantite\").val('0');
                                \$(\"#unite\").val('0');
                                \$(\"#indication\").val('0');
                                \$(\"#medicSelected\").val('');
                                \$('#messageSuccess').show();
                                \$('#messageSuccess').fadeOut(3500);
                            }
                            if (item === 'newMedic') {

                                nbMedic++;
                                \$('#medicamentList')
                                    .append(`
                                        <li class=\"list-group-item ordonnanc\">
                                        \${value.medic} \${value.indication}  \${value.quantite} prise(s) \${value.unite} unité(s)
                                        <button type=\"button\" data-id=\"\${value.ordonnance_id}\"
                                        data-confirm=\"Voulez-vous supprimer le medicament?\"
                                        class=\"fa fa-trash pull-right btn btn-danger btn-outline delete-medic\"></button>
                                        </li>
                                    `)
                            }
                        });
                    },
                    error: function (x, y, z) {
                        alert(x + ' ' + y + ' ' + z);
                    }
                });
            } else {
                \$('#messageError').show();
                \$('#messageError').fadeOut(5000);
            }
        });

        //\"suppression un medicament d'une ordonnance en ajax :)
        \$('body').on('click', '.delete-medic', function (event) {
            //
            event.preventDefault(); //Annuler l'action par défaut

            var button = \$(event.target).closest('button');

            var id = \$(button).attr('data-id');
            var message = \$(button).data('confirm');
            console.log('ko', button, id, message);
            //Afficher la popup SweetAlert
            swal({
                title: \"Êtes-vous sûr?\",
                text: message, //Utiliser la valeur de data-confirm comme text
                icon: \"warning\",
                dangerMode: true,
                buttons: true,
                cancel: {
                    text: \"Cancel\",
                    value: null,
                    visible: false,
                    className: \"\",
                    closeModal: true,
                },
                confirm: {
                    text: \"OK\",
                    value: true,
                    visible: true,
                    className: \"\",
                    closeModal: true
                }
            }).then(function (willDelete) {
                    if (willDelete) {
                        //swal(\"Deleted!\", \"Your imaginary file has been deleted!\", \"success\");

                        var url = \"{{ path('ordonnance_delete', {id:0}) }}\";
                        \$.ajax({
                            url: url.replace(\"0\", id),
                            type: \"delete\",
                            data: {
                                action: 'deletemedic',
                                id: id
                            },
                            dataType: 'json',
                            success: function (data) {
                                console.log('data', data)
                                \$.each(data, function (item, value) {
                                    if (value === 'ok') {
                                        \$(button).closest('li').fadeOut(500, function () {
                                            \$(this).remove();
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
            prefetch: \"../../../medicaments.json\",
            datumTokenizer: Bloodhound.tokenizers.obj.whitespace('nomMedicament'),
            queryTokenizer: Bloodhound.tokenizers.whitespace
            // `states` is an array of state names defined in \"The Basics\"
//            local: states
        });

        \$('.tag-input-medic').typeahead({
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
            var urlp = \"{{ path('getterrain', {id:0}) }}\";
            \$.ajax({
                url: urlp.replace(\"0\", id),
                type: \"post\",
                data: {
                    action: 'getterrain'
                },
                dataType: 'json',
                success: function (data) {
                    \$.each(data, function (item, value) {
                        if (value === 'ok') {
                            if (data.terrain !== null) {
                                swal({
                                    title: \"Le patient est \" + data.terrain,
                                    icon: \"warning\",
                                    showCancelButton: true,
                                    confirmButtonClass: \"btn-danger\",
                                    confirmButtonText: \"ok!\",
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


        \$(\"#numerodossierpatient\").change(function () {
            if (\$(\"#numerodossierpatient\").val() !== \"\") {
                var numerodossierpatient = \$(\"#numerodossierpatient\").val();
                var url = \"{{ path('getpatient') }}\";
                \$.ajax({
                    url: url,
                    data: {
                        action: \"getpatient\",
                        numerodossierpatient: numerodossierpatient
                    },
                    type: \"POST\",
                    dataType: \"json\",
                    success: function (data) {
                        \$.each(data, function (item, valeur) {

                            if (data.output === 'ok') {
                                \$(\"#tp\").val(data.typepatient);
                                \$(\"#np\").val(data.nom);
                                \$(\"#te\").val(\"\");
                                \$(\"#pr\").val('');
                            } else {
                                \$(\"#tp\").val(\"\");
                                \$(\"#np\").val(\"\");
                                \$(\"#te\").val('');
                                \$(\"#pr\").val('');
                            }

                        });

                    },
                    error: function (x, y, z) {
                        alert(x + ' ' + y + ' ' + z);
                    }

                });
            }
        });

        \$(\"#te\").change(function () {
            if (\$(\"#te\").val() !== \"\") {
                if (\$(\"#tp\").val() !== '') {
                    \$('#patientrequis').hide();
                    var te = \$(\"#te\").val();
                    console.log(te)
                    var url = \"{{ path('gettypeexamen') }}\";
                    \$.ajax({
                        url: url,
                        data: {
                            action: \"gettypeexamen\",
                            te: te
                        },
                        type: \"POST\",
                        dataType: \"json\",
                        success: function (data) {
                            // \$.each(data, function (item, valeur) {
                            console.log(data)
                            if (data.output === 'ok') {
                                \$('#createnewexamens').attr('data-idte', te);
                                // \$('#createnewexamens').attr('data-listechampsid', data.champs);
                                \$('#createnewexamens').attr('data-matriculepatient', \$('#numerodossierpatient').val());
                                \$(\"#resultsection\").children(\"div\").remove();
                                data.champs.forEach(function (element) {
                                    if (element.valeurminf == null) {
                                        \$('#resultsection').append(`
                                    <div class=\"col-md-6\">
                                        <div class=\"form-group\">
                                            <label for=\"\${element.id}\"> \${element.libelle} </label>
                                            <input required=\"true\" type=\"text\" class=\"form-control\" id=\"\${element.id}\"
                                            placeholder=\"\${element.valeurmin} <> \${element.valeurmax} (\${element.unite})\">
                                        </div>
                                    </div>
                                        `);
                                    } else {

                                        \$('#sectionResultat')
                                            .append(`
                                                <div class=\"form-group\">
                                                    <label for=\"\${element.id}\"> \${element.libelle} </label>
                                                    <input required=\"true\" type=\"text\" class=\"form-control\" id=\"\${element.id}\"
                                                    placeholder=\"Homme \${element.valeurmin} <> \${element.valeurmax} (\${element.unite})
                                                    Femme \${element.valeurminf} <> \${element.valeurmaxf} (\${element.unite})\">
                                                </div>
                                            `)
                                    }
                                });
                                if (\$('#tp').val() === 'Ayant droit') {
                                    \$(\"#pr\").val(data.prix - (data.prix * 0.8));
                                } else {
                                    \$(\"#pr\").val(data.prix);
                                }

                            } else {
                                \$('#createnewexamens').attr('data-idte', null);
                                \$('#createnewexamens').attr('data-listechampsid', null);
                                \$('#createnewexamens').attr('data-matriculepatient', null);
                                \$(\"#pr\").val(\"\");
                            }

                            // });
                        },
                        error: function (x, y, z) {
                            alert(x + ' ' + y + ' ' + z);
                        }

                    });
                } else {
                    \$('#createnewexamens').attr('data-listechampsid', null);
                    \$('#createnewexamens').attr('data-idte', null);
                    \$('#createnewexamens').attr('data-matriculepatient', null);
                    \$('#patientrequis').show();
                    \$(\"#te\").val(\"\");
                    \$(\"#resultsection\").children(\"div\").remove();
                }
            } else {
                \$(\"#resultsection\").children(\"div\").remove();
            }
        });

        {#console.log('path')#}
        {#console.log('{{ path('index') }}')#}
        {#console.log(\"{{ app.request.attributes.get('_route') }}\")#}
        if ('{{ app.request.attributes.get('_route') }}' === 'index') {

            \$.ajax({
                url: \"{{ path('apiconsultation') }}\",
                data: {
                    action: \"getstat\"
                },
                type: \"get\",
                dataType: \"json\",
                success: function (data) {
                    if (data[0].labo) {
                        Morris.Line({
                            element: 'morris-area-chart-consultation',
                            data: data,
                            xkey: 'period',
                            ykeys: ['examen'],
                            labels: ['examen'],
                            pointSize: 4,
                            hideHover: 'auto',
                            resize: true
                        });
                    } else {
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
                    }
                },
                error: function (x, y, z) {
                    alert(x + ' ' + y + ' ' + z);
                }

            });
        }

        \$('#nbjrrepos').mask('999');
        \$('#telpatient').mask('99-999-99-99');
        \$(\"#selectstruc\").select2({
            theme: \"bootstrap\"
        });


        if (window.location.href.includes('examen/new/consultation=') || window.location.href.includes('examen/edit/')) {

            var bttn = \$('#createexamens').closest('button');
            var idte = \$(bttn).attr('data-idte');
            var idconsult = \$(bttn).attr('data-idconsult');
            console.log(idte, idconsult);

            // var medicSelected = \$(\"#medicSelected\").val();
            var urlexamen = \"{{ path('examen_new1', {consultationid: 0, typeexamenid: 2}) }}\";
            var url0 = urlexamen.replace(\"2\", idte);
            var url1 = url0.replace(\"0\", idconsult);
            \$.ajax({
                url: url1,
                type: \"GET\",
                data: {},
                dataType: 'json',
                success: function (data) {
                    \$.each(data.champsTE, function (item, value) {
                        if (value.valeurminf == null) {
                            \$('#sectionResultat')
                                .append(`
                                <div class=\"form-group col-md-6\">
                                    <label for=\"\${value.id}\"> \${value.libelle} </label>
                                    <input required=\"true\" type=\"text\" class=\"form-control\" id=\"\${value.id}\"
                                    placeholder=\"\${value.valeurmin} <> \${value.valeurmax} (\${value.unite}) \">
                                </div>
                            `)
                        } else {
                            \$('#sectionResultat')
                                .append(`
                                <div class=\"form-group col-md-6\">
                                    <label for=\"\${value.id}\"> \${value.libelle} </label>
                                    <input required=\"true\" type=\"text\" class=\"form-control\" id=\"\${value.id}\"
                                    placeholder=\"Homme \${value.valeurmin} <> \${value.valeurmax} (\${value.unite})
                                    Femme \${value.valeurminf} <> \${value.valeurmaxf} (\${value.unite})\">
                                </div>
                            `)
                        }


                        \$('body').on('click', '#createexamens', function (event) {

                            var resultat = \$('#' + value.id).val();
                            if (resultat !== '') {

                                // pour l'ajout

                                var urlajoutexam = \"{{ path('examen_new', {consultationid: 2, typeexamenid: 0}) }}\";
                                var urlte = urlajoutexam.replace(\"0\", idte);
                                var urlexamajout = urlte.replace(\"2\", idconsult);
                                var datepre = \$('#datepre').val();
                                console.log(datepre)
                                \$.ajax({
                                    url: urlexamajout,
                                    type: \"POST\",
                                    data: {
                                        idconsult: idconsult,
                                        action: 'new',
                                        idte: idte,
                                        resultat: resultat,
                                        champid: value.id,
                                        datepre: datepre
                                    },
                                    dataType: 'json',
                                    success: function (data) {
                                        console.log(data.output)
                                        var goto = \"{{ path('examen_show', {id:0}) }}\";
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


        \$('#createexams').click(function () {
            var bttn = \$('#createexams').closest('button');
            var idconsult = \$(bttn).attr('data-idconsult');
            var datepre = \$('#datepre').val();
            var urlexamen = \"{{ path('createexams', {numeroconsult: 0}) }}\";
            var url1 = urlexamen.replace(\"0\", idconsult);
            var ok = true;
            \$('.resultattoAdd').each(function (i) {
                if (!\$(this).val()) {
                    ok = false;
                }
            });

            if (ok) {
                \$('.resultattoAdd').each(function (i) {
                    if (\$(this).val() !== '') {
                        \$.ajax({
                            url: url1,
                            type: \"POST\",
                            data: {
                                idconsult: idconsult,
                                action: 'new',
                                idte: \$(this).attr('id-te'),
                                resultat: \$(this).val(),
                                champid: \$(this).attr('id'),
                                datepre: datepre
                            },
                            dataType: 'json',
                            success: function (data) {
                                var goto = \"{{ path('examen_show_all', {id:0}) }}\";
                                window.location.href = goto.replace('0', data.output);
                            },
                            error: function (x, y, z) {
                                alert(x + ' ' + y + ' ' + z);
                            }
                        });
                    }
                });
            } else {
                \$('#alert-new-exam').show();
                \$('#alert-new-exam').empty();
                \$('#alert-new-exam').append('veuillez remplir tous les champs');
                setTimeout(function () {
                    \$('#alert-new-exam').fadeOut('slow');
                    \$('#alert-new-exam').empty();
                }, 4000)
            }


        });

//        UPDATE RESULTAT EXAMEN
        \$('.updateResult').click(function (event) {
            event.preventDefault();
            let btneditresult = \$(event.target).closest('button');
            let p = \$(event.target).closest('p')
            let libelletoedit = \$(btneditresult).attr('data-libelle');
            let restoedit = \$(btneditresult).attr('data-res');
            let chtypeexamtoedit = \$(btneditresult).attr('data-chtypeex');
            let idconsult = \$(btneditresult).attr('data-idconsult');
            let idte = \$(btneditresult).attr('data-idte');
            console.log(chtypeexamtoedit)
            console.log(idconsult)
            console.log(idte)
            p.hide();
            let url = \"{{ path('oneresultexamen', {idconsult:'aaaa', idresult:'bbbb', idte:'cccc'}) }}\";
            let ur = url.replace(\"aaaa\", idconsult);
            let u = ur.replace(\"bbbb\", chtypeexamtoedit);
            let l = u.replace(\"cccc\", idte);
            console.log(l)
            \$.ajax({
                url: l,
                type: \"get\",
                data: {},
                dataType: 'json',
                success: function (data) {
                    console.log(data)
                    let sectionresult = \$('#sectionresult');
                    sectionresult.append(`
                       <p>
                        <label> \${data.libelle} </label>
                        <input required=\"true\" type=\"text\" class=\"\" value=\"\${ data.resultat }\" id=\"id\${data.id}\">
                        <button data-idexam=\"\${data.id}\" class=\"createupdateResult btn btn-success btn-outline btn-xs pull-right\"><i class=\"fa fa-save\"></i></button>
                       </p>
            `);
                },
                error: function (x, y, z) {
                    alert(x + ' ' + y + ' ' + z);
                }
            });
        })

        //      CREATE UPDATE RESULTAT EXAMEN
        \$('body').on('click', '.createupdateResult', function (event) {
            event.preventDefault();
            let btneditresult = \$(event.target).closest('button');
            let idexamtoedit = \$(btneditresult).attr('data-idexam');
            let url = \"{{ path('examen_edit', {id:0}) }}\";
            let ur = url.replace(\"0\", idexamtoedit);
            let value = \$(\"#id\" + idexamtoedit).val();
            console.log(value)
            \$.ajax({
                url: ur,
                type: \"POST\",
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


        \$('#alert-new-exam').hide();
        \$('#createnewexamens').click(function (e) {
            e.preventDefault();
            var idte = \$('#createnewexamens').attr('data-idte')
            var matriculepatient = \$('#createnewexamens').attr('data-matriculepatient')
            if (idte !== null || matriculepatient != null) {

                // pour l'ajout
                var urlajoutexam = \"{{ path('examen_new', {consultationid: 0, typeexamenid: 111}) }}\";
                var urlexamajout = urlajoutexam.replace(111, idte);
                var datepre = \$('#datepre').val();
                var ok = true;
                \$('#resultsection input').each(function (i) {
                    // console.log(!\$(this).val())
                    if (!\$(this).val()) {
                        ok = false;
                        \$('#alert-new-exam').show();
                        \$('#alert-new-exam').empty();
                        \$('#alert-new-exam').append('veuillez remplir tous les champs');
                        setTimeout(function () {
                            \$('#alert-new-exam').fadeOut('slow');
                            \$('#alert-new-exam').empty();
                        }, 4000)
                    }
                });

                if (ok) {
                    \$('#resultsection input').each(function (i) {
                        if (\$(this).val() !== '') {
                            \$.ajax({
                                url: urlexamajout,
                                type: \"POST\",
                                data: {
                                    idconsult: 0,
                                    action: 'new',
                                    matriculepatient: matriculepatient,
                                    idte: idte,
                                    resultat: \$(this).val(),
                                    champid: \$(this).attr('id'),
                                    datepre: datepre
                                },
                                dataType: 'json',
                                success: function (data) {
                                    var goto = \"{{ path('examen_show', {id:0}) }}\";
                                    window.location.href = goto.replace('0', data.output);
                                },
                                error: function (x, y, z) {
                                    alert(x + ' ' + y + ' ' + z);
                                }
                            });
                        }
                    });
                }


            }
        })


        \$('.approuver').click(function (\$event) {
//            console.log(\$(this))
//            console.log(\$('.approuver').closest('button'))
            var bttn = \$(this);
            var idconsult = \$(bttn).attr('data-idconsult');
            var urlexamen = \"{{ path('examen_approuver', {numeroconsult: 0}) }}\";
            var url1 = urlexamen.replace(\"0\", idconsult);

            \$.ajax({
                url: url1,
                type: 'POST',
                data: {},
                dataType: 'json',
                success: function (data) {
                    console.log(data)
                    if (data.output === 'ok') {
                        location.reload();
                    }

                },
                error: function (x, y, z) {
                    alert(x + ' ' + y + ' ' + z);
                }

            });

        })

        \$('.desapprouver').click(function (\$event) {
            var bttn = \$(this);
            var idconsult = \$(bttn).attr('data-idconsult');
            var urlexamen = \"{{ path('examen_desapprouver', {numeroconsult: 0}) }}\";
            var url1 = urlexamen.replace(\"0\", idconsult);

            \$.ajax({
                url: url1,
                type: 'POST',
                data: {},
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

        });
    });
</script>
</body>

</html>

", "::base.html.twig", "/var/www/html/CMSFP/app/Resources/views/base.html.twig");
    }
}
