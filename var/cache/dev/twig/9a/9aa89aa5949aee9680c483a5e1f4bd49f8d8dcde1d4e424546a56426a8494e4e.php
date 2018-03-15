<?php

/* FPCMSBundle:patient:indexpatient.html.twig */
class __TwigTemplate_c1c969e57f20e727074dd82b775feb79d073de2a4197fdb5a831c75dfee7f517 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "FPCMSBundle:patient:indexpatient.html.twig", 1);
        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bbdae8d60b3688587de799b4f09689ed6bbc4668c9daa718bf6e5ab99dfeaede = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bbdae8d60b3688587de799b4f09689ed6bbc4668c9daa718bf6e5ab99dfeaede->enter($__internal_bbdae8d60b3688587de799b4f09689ed6bbc4668c9daa718bf6e5ab99dfeaede_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FPCMSBundle:patient:indexpatient.html.twig"));

        $__internal_ec5e9e78d768643a9c8db67396ca3c9f6f3275ffc5dc3e8996e10ea177ad9eb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec5e9e78d768643a9c8db67396ca3c9f6f3275ffc5dc3e8996e10ea177ad9eb9->enter($__internal_ec5e9e78d768643a9c8db67396ca3c9f6f3275ffc5dc3e8996e10ea177ad9eb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FPCMSBundle:patient:indexpatient.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bbdae8d60b3688587de799b4f09689ed6bbc4668c9daa718bf6e5ab99dfeaede->leave($__internal_bbdae8d60b3688587de799b4f09689ed6bbc4668c9daa718bf6e5ab99dfeaede_prof);

        
        $__internal_ec5e9e78d768643a9c8db67396ca3c9f6f3275ffc5dc3e8996e10ea177ad9eb9->leave($__internal_ec5e9e78d768643a9c8db67396ca3c9f6f3275ffc5dc3e8996e10ea177ad9eb9_prof);

    }

    // line 2
    public function block_header($context, array $blocks = array())
    {
        $__internal_bbdf4b339fab3f35b66673d79bab84fd477677ac7400efee4c22dfe669a76d4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bbdf4b339fab3f35b66673d79bab84fd477677ac7400efee4c22dfe669a76d4d->enter($__internal_bbdf4b339fab3f35b66673d79bab84fd477677ac7400efee4c22dfe669a76d4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_90adde012e115cd055fe8cec5028f017961283aaa1d1b7c978bc54102dfd0ebe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90adde012e115cd055fe8cec5028f017961283aaa1d1b7c978bc54102dfd0ebe->enter($__internal_90adde012e115cd055fe8cec5028f017961283aaa1d1b7c978bc54102dfd0ebe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 3
        echo "    ";
        $this->loadTemplate("FPCMSBundle:layout:header.html.twig", "FPCMSBundle:patient:indexpatient.html.twig", 3)->display($context);
        
        $__internal_90adde012e115cd055fe8cec5028f017961283aaa1d1b7c978bc54102dfd0ebe->leave($__internal_90adde012e115cd055fe8cec5028f017961283aaa1d1b7c978bc54102dfd0ebe_prof);

        
        $__internal_bbdf4b339fab3f35b66673d79bab84fd477677ac7400efee4c22dfe669a76d4d->leave($__internal_bbdf4b339fab3f35b66673d79bab84fd477677ac7400efee4c22dfe669a76d4d_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_5a45ef78f55753a150f7c19f24a0b87baae2678b641172530bc4723120f44d44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a45ef78f55753a150f7c19f24a0b87baae2678b641172530bc4723120f44d44->enter($__internal_5a45ef78f55753a150f7c19f24a0b87baae2678b641172530bc4723120f44d44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f6f3d3ff4f388f3a5b2266eea92597db4efe53f6c54bb53aec7fe0d074b39ebf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6f3d3ff4f388f3a5b2266eea92597db4efe53f6c54bb53aec7fe0d074b39ebf->enter($__internal_f6f3d3ff4f388f3a5b2266eea92597db4efe53f6c54bb53aec7fe0d074b39ebf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        // line 7
        echo "
    <div id=\"page-wrapper\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">
                    Liste des patients
                </h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"panel panel-primary\">
                    <div class=\"panel-heading\">
                        Liste des patients
                    </div>
                    <!-- /.panel-heading -->
                    <div class=\"panel-body\">
                        <div class=\"row\">
                            ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "droitConsultation"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 28
            echo "                                <div id=\"message\" class=\"alert alert-danger alert-dismissible\" role=\"alert\">
                                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span
                                                aria-hidden=\"true\">&times;</span></button>
                                    <strong>Attention:</strong> ";
            // line 31
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
                                </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "modifPatient"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 35
            echo "                                <div id=\"message\" class=\"alert alert-success alert-dismissible\" role=\"alert\">
                                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span
                                                aria-hidden=\"true\">&times;</span></button>
                                    <strong>Succes:</strong> ";
            // line 38
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
                                </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "ajoutPatient"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 42
            echo "                                <div id=\"message\" class=\"alert alert-success alert-dismissible\" role=\"alert\">
                                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span
                                                aria-hidden=\"true\">&times;</span></button>
                                    <strong>Succes:</strong> ";
            // line 45
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
                                </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "                        </div>
                        <div class=\"row\">
                            <!-- Single button -->
                            <div class=\"btn-group pull-right\">
                                <button type=\"button\" class=\"btn btn-success dropdown-toggle\" data-toggle=\"dropdown\"
                                        aria-haspopup=\"true\" aria-expanded=\"false\">
                                    <span class=\"fa fa-cog\"></span> Selectionner une action <span class=\"caret\"></span>
                                </button>
                                <ul class=\"dropdown-menu\">
                                    <li data-toggle=\"modal\" data-target=\"#searchModal\"><a href=\"#\"> <span
                                                    class=\"fa fa-search\"></span> Recherche avancée</a></li>
                                    <li role=\"separator\" class=\"divider\"></li>
                                    <li><a href=\"";
        // line 60
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajoutpatient");
        echo "\"><span class=\"fa fa-plus\"></span>
                                            Ajouter</a></li>
                                    <li role=\"separator\" class=\"divider\"></li>
                                    <li><a href=\"#\"><span class=\"fa fa-trash-o\"></span> Supprimer</a></li>

                                </ul>
                            </div>
                        </div>
                        <br>
                        ";
        // line 70
        echo "                        <table width=\"100%\" class=\"table table-striped table-bordered table-hover\"
                               id=\"dataTables-example\">
                            <thead>
                            <tr>
                                <th>Matricule</th>
                                <th>Photo</th>
                                <th>Prenom et Nom</th>
                                <th> Age</th>
                                ";
        // line 79
        echo "                                <th>Genre</th>
                                <th>Telephone</th>
                                ";
        // line 82
        echo "                                <th>Date d'ajout</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            ";
        // line 87
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["patients"] ?? $this->getContext($context, "patients")));
        foreach ($context['_seq'] as $context["_key"] => $context["patient"]) {
            // line 88
            echo "                                <tr class=\"gradeA\">
                                    <td> ";
            // line 89
            echo twig_escape_filter($this->env, $this->getAttribute($context["patient"], "matricule", array()), "html", null, true);
            echo "</td>
                                    ";
            // line 90
            if (($this->getAttribute($context["patient"], "filename", array()) != null)) {
                // line 91
                echo "                                        <td>
                                            <img src=\"";
                // line 92
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/" . $this->getAttribute($context["patient"], "filename", array()))), "html", null, true);
                echo "\" alt=\"\" width=\"65\"
                                                 height=\"50\">
                                        </td>
                                    ";
            } else {
                // line 96
                echo "                                        ";
                if (($this->getAttribute($context["patient"], "genrePatient", array()) == "Masculin")) {
                    // line 97
                    echo "                                            <td>
                                                <img src=\"";
                    // line 98
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/Patient-avatar-M.jpeg"), "html", null, true);
                    echo "\" alt=\"\"
                                                     width=\"65\" height=\"50\">
                                            </td>
                                        ";
                } else {
                    // line 102
                    echo "                                            <td>
                                                <img src=\"";
                    // line 103
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/Patient-avatar-F.png"), "html", null, true);
                    echo "\" alt=\"\" width=\"65\"
                                                     height=\"50\">
                                            </td>
                                        ";
                }
                // line 107
                echo "                                    ";
            }
            // line 108
            echo "                                    <td> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["patient"], "prenomPatient", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["patient"], "nomPatient", array()), "html", null, true);
            echo "</td>
                                    <td>
                                        ";
            // line 110
            echo twig_escape_filter($this->env, $this->getAttribute($context["patient"], "age", array()), "html", null, true);
            echo "
                                    </td>
                                    ";
            // line 113
            echo "                                    <td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["patient"], "genrePatient", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 114
            echo twig_escape_filter($this->env, $this->getAttribute($context["patient"], "telPatient", array()), "html", null, true);
            echo "</td>
                                    ";
            // line 116
            echo "                                    <td>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["patient"], "dateAjout", array()), "m/d/Y"), "html", null, true);
            echo "</td>
                                    <td class=\"center\">
                                        <a class=\"btn btn-xs btn-primary\"
                                           href=\"";
            // line 119
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editpatient", array("id" => $this->getAttribute($context["patient"], "id", array()))), "html", null, true);
            echo "\" title=\"Modifier\">
                                            <i class=\"fa fa-edit\" aria-hidden=\"true\"></i></a> /
                                        ";
            // line 121
            if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "typeUser", array()), "profil", array()) != "Secretaire")) {
                // line 122
                echo "                                            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("detailpatient", array("id" => $this->getAttribute($context["patient"], "id", array()))), "html", null, true);
                echo "\"
                                               class=\"btn btn-xs btn-success\" title=\"visualiser\">
                                                <i class=\"fa fa-eye\" aria-hidden=\"true\"></i> </a>
                                        ";
            } else {
                // line 126
                echo "                                            <a class=\"btn btn-xs btn-success\"
                                               href=\"";
                // line 127
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajoutconsultationinf", array("id" => $this->getAttribute($context["patient"], "id", array()))), "html", null, true);
                echo "\"
                                               title=\"Examen\">
                                                <i class=\"fa fa-flask\" aria-hidden=\"true\"></i></a>
                                        ";
            }
            // line 131
            echo "                                    </td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['patient'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 134
        echo "                            </tbody>
                        </table>
                        <!-- /.table-responsive -->
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /#page-wrapper -->


";
        
        $__internal_f6f3d3ff4f388f3a5b2266eea92597db4efe53f6c54bb53aec7fe0d074b39ebf->leave($__internal_f6f3d3ff4f388f3a5b2266eea92597db4efe53f6c54bb53aec7fe0d074b39ebf_prof);

        
        $__internal_5a45ef78f55753a150f7c19f24a0b87baae2678b641172530bc4723120f44d44->leave($__internal_5a45ef78f55753a150f7c19f24a0b87baae2678b641172530bc4723120f44d44_prof);

    }

    public function getTemplateName()
    {
        return "FPCMSBundle:patient:indexpatient.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  308 => 134,  300 => 131,  293 => 127,  290 => 126,  282 => 122,  280 => 121,  275 => 119,  268 => 116,  264 => 114,  259 => 113,  254 => 110,  246 => 108,  243 => 107,  236 => 103,  233 => 102,  226 => 98,  223 => 97,  220 => 96,  213 => 92,  210 => 91,  208 => 90,  204 => 89,  201 => 88,  197 => 87,  190 => 82,  186 => 79,  176 => 70,  164 => 60,  150 => 48,  141 => 45,  136 => 42,  131 => 41,  122 => 38,  117 => 35,  112 => 34,  103 => 31,  98 => 28,  94 => 27,  72 => 7,  70 => 6,  61 => 5,  50 => 3,  41 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::base.html.twig' %}
{% block header %}
    {% include 'FPCMSBundle:layout:header.html.twig' %}
{% endblock %} 
{% block body %}
    {#<div id=\"wrapper\"> #}

    <div id=\"page-wrapper\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">
                    Liste des patients
                </h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"panel panel-primary\">
                    <div class=\"panel-heading\">
                        Liste des patients
                    </div>
                    <!-- /.panel-heading -->
                    <div class=\"panel-body\">
                        <div class=\"row\">
                            {% for flashMessage in app.session.flashbag.get('droitConsultation') %}
                                <div id=\"message\" class=\"alert alert-danger alert-dismissible\" role=\"alert\">
                                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span
                                                aria-hidden=\"true\">&times;</span></button>
                                    <strong>Attention:</strong> {{ flashMessage }}
                                </div>
                            {% endfor %}
                            {% for flashMessage in app.session.flashbag.get('modifPatient') %}
                                <div id=\"message\" class=\"alert alert-success alert-dismissible\" role=\"alert\">
                                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span
                                                aria-hidden=\"true\">&times;</span></button>
                                    <strong>Succes:</strong> {{ flashMessage }}
                                </div>
                            {% endfor %}
                            {% for flashMessage in app.session.flashbag.get('ajoutPatient') %}
                                <div id=\"message\" class=\"alert alert-success alert-dismissible\" role=\"alert\">
                                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span
                                                aria-hidden=\"true\">&times;</span></button>
                                    <strong>Succes:</strong> {{ flashMessage }}
                                </div>
                            {% endfor %}
                        </div>
                        <div class=\"row\">
                            <!-- Single button -->
                            <div class=\"btn-group pull-right\">
                                <button type=\"button\" class=\"btn btn-success dropdown-toggle\" data-toggle=\"dropdown\"
                                        aria-haspopup=\"true\" aria-expanded=\"false\">
                                    <span class=\"fa fa-cog\"></span> Selectionner une action <span class=\"caret\"></span>
                                </button>
                                <ul class=\"dropdown-menu\">
                                    <li data-toggle=\"modal\" data-target=\"#searchModal\"><a href=\"#\"> <span
                                                    class=\"fa fa-search\"></span> Recherche avancée</a></li>
                                    <li role=\"separator\" class=\"divider\"></li>
                                    <li><a href=\"{{ path('ajoutpatient') }}\"><span class=\"fa fa-plus\"></span>
                                            Ajouter</a></li>
                                    <li role=\"separator\" class=\"divider\"></li>
                                    <li><a href=\"#\"><span class=\"fa fa-trash-o\"></span> Supprimer</a></li>

                                </ul>
                            </div>
                        </div>
                        <br>
                        {# ------------ #}
                        <table width=\"100%\" class=\"table table-striped table-bordered table-hover\"
                               id=\"dataTables-example\">
                            <thead>
                            <tr>
                                <th>Matricule</th>
                                <th>Photo</th>
                                <th>Prenom et Nom</th>
                                <th> Age</th>
                                {# <th>Email</th> #}
                                <th>Genre</th>
                                <th>Telephone</th>
                                {# <th>Situation Familiale</th> #}
                                <th>Date d'ajout</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            {% for patient in patients %}
                                <tr class=\"gradeA\">
                                    <td> {{ patient.matricule }}</td>
                                    {% if patient.filename != null %}
                                        <td>
                                            <img src=\"{{ asset(\"uploads/\" ~ patient.filename) }}\" alt=\"\" width=\"65\"
                                                 height=\"50\">
                                        </td>
                                    {% else %}
                                        {% if patient.genrePatient == 'Masculin' %}
                                            <td>
                                                <img src=\"{{ asset(\"uploads/Patient-avatar-M.jpeg\") }}\" alt=\"\"
                                                     width=\"65\" height=\"50\">
                                            </td>
                                        {% else %}
                                            <td>
                                                <img src=\"{{ asset(\"uploads/Patient-avatar-F.png\") }}\" alt=\"\" width=\"65\"
                                                     height=\"50\">
                                            </td>
                                        {% endif %}
                                    {% endif %}
                                    <td> {{ patient.prenomPatient }} {{ patient.nomPatient }}</td>
                                    <td>
                                        {{ patient.age }}
                                    </td>
                                    {# <td>{{patient.email}}</td>                                     #}
                                    <td>{{ patient.genrePatient }}</td>
                                    <td>{{ patient.telPatient }}</td>
                                    {# <td>{{patient.situationFamiliale}}</td> #}
                                    <td>{{ patient.dateAjout | date(\"m/d/Y\") }}</td>
                                    <td class=\"center\">
                                        <a class=\"btn btn-xs btn-primary\"
                                           href=\"{{ path('editpatient', {id:patient.id}) }}\" title=\"Modifier\">
                                            <i class=\"fa fa-edit\" aria-hidden=\"true\"></i></a> /
                                        {% if app.user.typeUser.profil != 'Secretaire' %}
                                            <a href=\"{{ path('detailpatient', {id:patient.id}) }}\"
                                               class=\"btn btn-xs btn-success\" title=\"visualiser\">
                                                <i class=\"fa fa-eye\" aria-hidden=\"true\"></i> </a>
                                        {% else %}
                                            <a class=\"btn btn-xs btn-success\"
                                               href=\"{{ path('ajoutconsultationinf', {id:patient.id}) }}\"
                                               title=\"Examen\">
                                                <i class=\"fa fa-flask\" aria-hidden=\"true\"></i></a>
                                        {% endif %}
                                    </td>
                                </tr>
                            {% endfor %}
                            </tbody>
                        </table>
                        <!-- /.table-responsive -->
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /#page-wrapper -->


{% endblock %}", "FPCMSBundle:patient:indexpatient.html.twig", "/var/www/html/CMSFP/src/FP/CMSBundle/Resources/views/patient/indexpatient.html.twig");
    }
}
