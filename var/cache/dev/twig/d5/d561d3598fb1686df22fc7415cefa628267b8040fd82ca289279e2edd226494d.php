<?php

/* examen/index.html.twig */
class __TwigTemplate_74814f7d7341badebf20f8113e36b07912435dc91dc9543c005c99cbbc1da3c2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "examen/index.html.twig", 1);
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
        $__internal_d836b7217f5841f47ecec29dcb634bf4c1dd6fea4524631ca097166132e9caa7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d836b7217f5841f47ecec29dcb634bf4c1dd6fea4524631ca097166132e9caa7->enter($__internal_d836b7217f5841f47ecec29dcb634bf4c1dd6fea4524631ca097166132e9caa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "examen/index.html.twig"));

        $__internal_b4c813fb4fcb9cd820a1318404f5fbe97dff35656a441c2729129499a770379e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4c813fb4fcb9cd820a1318404f5fbe97dff35656a441c2729129499a770379e->enter($__internal_b4c813fb4fcb9cd820a1318404f5fbe97dff35656a441c2729129499a770379e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "examen/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d836b7217f5841f47ecec29dcb634bf4c1dd6fea4524631ca097166132e9caa7->leave($__internal_d836b7217f5841f47ecec29dcb634bf4c1dd6fea4524631ca097166132e9caa7_prof);

        
        $__internal_b4c813fb4fcb9cd820a1318404f5fbe97dff35656a441c2729129499a770379e->leave($__internal_b4c813fb4fcb9cd820a1318404f5fbe97dff35656a441c2729129499a770379e_prof);

    }

    // line 2
    public function block_header($context, array $blocks = array())
    {
        $__internal_1e6fd70f4497a054ea9f1ba6eafc7436f0d30bc7bfe7cb3e3fb09e0bf5aaa385 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e6fd70f4497a054ea9f1ba6eafc7436f0d30bc7bfe7cb3e3fb09e0bf5aaa385->enter($__internal_1e6fd70f4497a054ea9f1ba6eafc7436f0d30bc7bfe7cb3e3fb09e0bf5aaa385_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_f6f7f3386cd1a8714fdcc145b3e1f4fd8c52c8bd3f54ffbb28910517889180d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6f7f3386cd1a8714fdcc145b3e1f4fd8c52c8bd3f54ffbb28910517889180d5->enter($__internal_f6f7f3386cd1a8714fdcc145b3e1f4fd8c52c8bd3f54ffbb28910517889180d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 3
        echo "    ";
        $this->loadTemplate("FPCMSBundle:layout:header.html.twig", "examen/index.html.twig", 3)->display($context);
        
        $__internal_f6f7f3386cd1a8714fdcc145b3e1f4fd8c52c8bd3f54ffbb28910517889180d5->leave($__internal_f6f7f3386cd1a8714fdcc145b3e1f4fd8c52c8bd3f54ffbb28910517889180d5_prof);

        
        $__internal_1e6fd70f4497a054ea9f1ba6eafc7436f0d30bc7bfe7cb3e3fb09e0bf5aaa385->leave($__internal_1e6fd70f4497a054ea9f1ba6eafc7436f0d30bc7bfe7cb3e3fb09e0bf5aaa385_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_d1d9054af98fba1b1cc4cfe4b2816527ebe3f33387207d861ad56528d425dfb0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1d9054af98fba1b1cc4cfe4b2816527ebe3f33387207d861ad56528d425dfb0->enter($__internal_d1d9054af98fba1b1cc4cfe4b2816527ebe3f33387207d861ad56528d425dfb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_10a55ecf288fbf4eef9d4f70f14e2c98c30abca7d45471697804e85c6a580076 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10a55ecf288fbf4eef9d4f70f14e2c98c30abca7d45471697804e85c6a580076->enter($__internal_10a55ecf288fbf4eef9d4f70f14e2c98c30abca7d45471697804e85c6a580076_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        // line 7
        echo "
    <div id=\"page-wrapper\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">
                    Liste des examens en attente
                </h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"panel panel-primary\">
                    <div class=\"panel-heading\">
                        Liste des examens
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
                        <br>
                        ";
        // line 51
        echo "                        <table width=\"100%\"
                               class=\"table table-striped table-bordered table-hover\" id=\"dataTables-example\">
                            <thead>
                            <tr>
                                <th>Code consultation</th>
                                ";
        // line 57
        echo "                                <th>Type Examen</th>
                                ";
        // line 59
        echo "                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>

                            ";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tabconsult"] ?? $this->getContext($context, "tabconsult")));
        foreach ($context['_seq'] as $context["_key"] => $context["consult"]) {
            // line 65
            echo "                                <tr class=\"gradeA\">

                                    <td> ";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute($context["consult"], "numeroconsultation", array()), "html", null, true);
            echo "</td>
                                    <td>
                                        ";
            // line 69
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["examsByConsult"] ?? $this->getContext($context, "examsByConsult")));
            foreach ($context['_seq'] as $context["_key"] => $context["byconsult"]) {
                // line 70
                echo "                                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["byconsult"]);
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 71
                    echo "                                                ";
                    if (($this->getAttribute($context["consult"], "numeroconsultation", array()) == $this->getAttribute($context["item"], "numeroconsultation", array()))) {
                        // line 72
                        echo "                                                    ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "nomTypeExamen", array()), "html", null, true);
                        echo " <br>
                                                ";
                    }
                    // line 74
                    echo "                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 75
                echo "                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['byconsult'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 76
            echo "                                    </td>

                                    ";
            // line 79
            echo "                                    ";
            // line 80
            echo "                                    <td class=\"center\">
                                        ";
            // line 81
            if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "typeuser", array()), "profil", array()) != "Secretaire")) {
                // line 82
                echo "                                            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("createexams", array("numeroconsult" => $this->getAttribute(                // line 83
$context["consult"], "numeroconsultation", array()))), "html", null, true);
                echo "\"
                                               title=\"Examiner\">
                                                <i class=\"fa fa-flask btn btn-sm btn-warning\" aria-hidden=\"true\"></i>
                                            </a>
                                        ";
            } else {
                // line 88
                echo "                                            ";
                if (($this->getAttribute($context["consult"], "actif", array()) == null)) {
                    // line 89
                    echo "                                                <button data-idconsult=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["consult"], "numeroconsultation", array()), "html", null, true);
                    echo "\"
                                                        class=\"btn btn-danger approuver\"><i
                                                            class=\"fa fa-thumbs-down\"></i> En attente
                                                </button>
                                            ";
                } else {
                    // line 94
                    echo "                                                <button data-idconsult=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["consult"], "numeroconsultation", array()), "html", null, true);
                    echo "\"
                                                         class=\"btn btn-success desapprouver\">
                                                    <i class=\"fa fa-thumbs-up\"></i>  Valider
                                                </button>
                                                <a href=\"";
                    // line 98
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("printrecuexam", array("numconsult" => $this->getAttribute($context["consult"], "numeroconsultation", array()))), "html", null, true);
                    echo "\"
                                                        class=\"btn btn-xs btn-warning\" title=\"Imprimer\">
                                                    <i class=\"fa fa-print\"></i>
                                                </a>
                                            ";
                }
                // line 103
                echo "                                        ";
            }
            // line 104
            echo "                                    </td>

                                    ";
            // line 107
            echo "                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['consult'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 109
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
        
        $__internal_10a55ecf288fbf4eef9d4f70f14e2c98c30abca7d45471697804e85c6a580076->leave($__internal_10a55ecf288fbf4eef9d4f70f14e2c98c30abca7d45471697804e85c6a580076_prof);

        
        $__internal_d1d9054af98fba1b1cc4cfe4b2816527ebe3f33387207d861ad56528d425dfb0->leave($__internal_d1d9054af98fba1b1cc4cfe4b2816527ebe3f33387207d861ad56528d425dfb0_prof);

    }

    public function getTemplateName()
    {
        return "examen/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  277 => 109,  270 => 107,  266 => 104,  263 => 103,  255 => 98,  247 => 94,  238 => 89,  235 => 88,  227 => 83,  225 => 82,  223 => 81,  220 => 80,  218 => 79,  214 => 76,  208 => 75,  202 => 74,  196 => 72,  193 => 71,  188 => 70,  184 => 69,  179 => 67,  175 => 65,  171 => 64,  164 => 59,  161 => 57,  154 => 51,  150 => 48,  141 => 45,  136 => 42,  131 => 41,  122 => 38,  117 => 35,  112 => 34,  103 => 31,  98 => 28,  94 => 27,  72 => 7,  70 => 6,  61 => 5,  50 => 3,  41 => 2,  11 => 1,);
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
                    Liste des examens en attente
                </h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"panel panel-primary\">
                    <div class=\"panel-heading\">
                        Liste des examens
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
                        <br>
                        {# ------------ #}
                        <table width=\"100%\"
                               class=\"table table-striped table-bordered table-hover\" id=\"dataTables-example\">
                            <thead>
                            <tr>
                                <th>Code consultation</th>
                                {# <th>Email</th> #}
                                <th>Type Examen</th>
                                {#<th>Prenom et nom patient</th>#}
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>

                            {% for consult in tabconsult %}
                                <tr class=\"gradeA\">

                                    <td> {{ consult.numeroconsultation }}</td>
                                    <td>
                                        {% for byconsult in examsByConsult %}
                                            {% for item in byconsult %}
                                                {% if consult.numeroconsultation == item.numeroconsultation %}
                                                    {{ item.nomTypeExamen }} <br>
                                                {% endif %}
                                            {% endfor %}
                                        {% endfor %}
                                    </td>

                                    {#<td> {{dump(ok)}}</td>#}
                                    {#<td>{{exam.nomTypeExamen}}</td>#}
                                    <td class=\"center\">
                                        {% if app.user.typeuser.profil != 'Secretaire' %}
                                            <a href=\"{{ path('createexams',
                                                {'numeroconsult': consult.numeroconsultation}) }}\"
                                               title=\"Examiner\">
                                                <i class=\"fa fa-flask btn btn-sm btn-warning\" aria-hidden=\"true\"></i>
                                            </a>
                                        {% else %}
                                            {% if consult.actif == null %}
                                                <button data-idconsult=\"{{ consult.numeroconsultation }}\"
                                                        class=\"btn btn-danger approuver\"><i
                                                            class=\"fa fa-thumbs-down\"></i> En attente
                                                </button>
                                            {% else %}
                                                <button data-idconsult=\"{{ consult.numeroconsultation }}\"
                                                         class=\"btn btn-success desapprouver\">
                                                    <i class=\"fa fa-thumbs-up\"></i>  Valider
                                                </button>
                                                <a href=\"{{ path('printrecuexam', {'numconsult': consult.numeroconsultation}) }}\"
                                                        class=\"btn btn-xs btn-warning\" title=\"Imprimer\">
                                                    <i class=\"fa fa-print\"></i>
                                                </a>
                                            {% endif %}
                                        {% endif %}
                                    </td>

                                    {#{{ dump(byconsult) }}#}
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


{% endblock %}", "examen/index.html.twig", "/var/www/html/CMSFP/app/Resources/views/examen/index.html.twig");
    }
}
