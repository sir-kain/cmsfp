<?php

/* FPCMSBundle:utilisateur:index.html.twig */
class __TwigTemplate_ad8e9ae50e9515d9080f740b8df4712084e7a6bda21a35c4cba3ae22bcd40fc1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "FPCMSBundle:utilisateur:index.html.twig", 1);
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
        $__internal_ecc5cad8223c2f93db8d038f6ae15b2b9e720efe1b43f33c76161b942a32acdf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ecc5cad8223c2f93db8d038f6ae15b2b9e720efe1b43f33c76161b942a32acdf->enter($__internal_ecc5cad8223c2f93db8d038f6ae15b2b9e720efe1b43f33c76161b942a32acdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FPCMSBundle:utilisateur:index.html.twig"));

        $__internal_d2fbed8d0342c22a83dde721792484e1531fb3bccbf8b503d09cc509ebbaa1a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2fbed8d0342c22a83dde721792484e1531fb3bccbf8b503d09cc509ebbaa1a5->enter($__internal_d2fbed8d0342c22a83dde721792484e1531fb3bccbf8b503d09cc509ebbaa1a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FPCMSBundle:utilisateur:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ecc5cad8223c2f93db8d038f6ae15b2b9e720efe1b43f33c76161b942a32acdf->leave($__internal_ecc5cad8223c2f93db8d038f6ae15b2b9e720efe1b43f33c76161b942a32acdf_prof);

        
        $__internal_d2fbed8d0342c22a83dde721792484e1531fb3bccbf8b503d09cc509ebbaa1a5->leave($__internal_d2fbed8d0342c22a83dde721792484e1531fb3bccbf8b503d09cc509ebbaa1a5_prof);

    }

    // line 2
    public function block_header($context, array $blocks = array())
    {
        $__internal_55972ebe4d7da7be5cdacf618e20150744deab451392e127d8f93841ed47ac10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55972ebe4d7da7be5cdacf618e20150744deab451392e127d8f93841ed47ac10->enter($__internal_55972ebe4d7da7be5cdacf618e20150744deab451392e127d8f93841ed47ac10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_61cec1d27a9105428e1de7a40cf0e233e931011bce1dc3d11816bda4bb3f4505 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61cec1d27a9105428e1de7a40cf0e233e931011bce1dc3d11816bda4bb3f4505->enter($__internal_61cec1d27a9105428e1de7a40cf0e233e931011bce1dc3d11816bda4bb3f4505_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 3
        echo "    ";
        $this->loadTemplate("FPCMSBundle:layout:header.html.twig", "FPCMSBundle:utilisateur:index.html.twig", 3)->display($context);
        
        $__internal_61cec1d27a9105428e1de7a40cf0e233e931011bce1dc3d11816bda4bb3f4505->leave($__internal_61cec1d27a9105428e1de7a40cf0e233e931011bce1dc3d11816bda4bb3f4505_prof);

        
        $__internal_55972ebe4d7da7be5cdacf618e20150744deab451392e127d8f93841ed47ac10->leave($__internal_55972ebe4d7da7be5cdacf618e20150744deab451392e127d8f93841ed47ac10_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_7e7637a369cbb1eec0d9f27250fd4221644eaae219af45b90fa5cb9db22f2ccb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e7637a369cbb1eec0d9f27250fd4221644eaae219af45b90fa5cb9db22f2ccb->enter($__internal_7e7637a369cbb1eec0d9f27250fd4221644eaae219af45b90fa5cb9db22f2ccb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_80b2bac7793fadc0a274117bdd233bc942186aef05c04f1f0dbf0c605d9e8571 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80b2bac7793fadc0a274117bdd233bc942186aef05c04f1f0dbf0c605d9e8571->enter($__internal_80b2bac7793fadc0a274117bdd233bc942186aef05c04f1f0dbf0c605d9e8571_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        // line 7
        echo "
    <div id=\"page-wrapper\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">Liste des utilisateurs</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"panel panel-primary\">
                    <div class=\"panel-heading\">
                        Liste des utilisateurs
                    </div>
                    <!-- /.panel-heading -->
                    <div class=\"panel-body\">
                        <div class=\"row\">
                            ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "user"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 26
            echo "                                <div id=\"message\" class=\"alert alert-info alert-dismissible\" role=\"alert\">
                                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span
                                                aria-hidden=\"true\">&times;</span></button>
                                    ";
            // line 29
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
                                </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "                        </div>
                        <br>
                        <div class=\"table-responsive\">
                            <table width=\"100%\" class=\"table table-striped table-bordered table-hover\"
                                   id=\"dataTables-example-utilisateur\">
                                <thead>
                                <tr>
                                    <th>Type</th>
                                    <th>Nom</th>
                                    <th>Prénom</th>
                                    <th>Email</th>
                                    <th>Username</th>
                                    <th>Service</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["utilisateurs"] ?? $this->getContext($context, "utilisateurs")));
        foreach ($context['_seq'] as $context["_key"] => $context["utilisateur"]) {
            // line 50
            echo "                                    ";
            $context["color"] = "";
            // line 51
            echo "                                    ";
            $context["style"] = "";
            // line 52
            echo "                                    ";
            if (($this->getAttribute($this->getAttribute($context["utilisateur"], "typeuser", array()), "profil", array()) == "Medecin")) {
                // line 53
                echo "                                        ";
                $context["style"] = "background-color:#FF6B5B;";
                // line 54
                echo "                                    ";
            }
            // line 55
            echo "                                    ";
            if (($this->getAttribute($this->getAttribute($context["utilisateur"], "typeuser", array()), "profil", array()) == "Infirmier")) {
                // line 56
                echo "                                        ";
                $context["style"] = "background-color:#FC6F6F;";
                // line 57
                echo "                                    ";
            }
            // line 58
            echo "                                    ";
            if (($this->getAttribute($this->getAttribute($context["utilisateur"], "typeuser", array()), "profil", array()) == "Secretaire")) {
                // line 59
                echo "                                        ";
                $context["color"] = "default";
                // line 60
                echo "                                    ";
            }
            // line 61
            echo "                                    ";
            if (($this->getAttribute($this->getAttribute($context["utilisateur"], "typeuser", array()), "profil", array()) == "Chirurgie dentaire")) {
                // line 62
                echo "                                        ";
                $context["style"] = "background-color:#9246b2;";
                // line 63
                echo "                                    ";
            }
            // line 64
            echo "                                    ";
            if (($this->getAttribute($this->getAttribute($context["utilisateur"], "typeuser", array()), "profil", array()) == "Sage femme")) {
                // line 65
                echo "                                        ";
                $context["style"] = "background-color:#FFB0DA;";
                // line 66
                echo "                                    ";
            }
            // line 67
            echo "                                    ";
            if (($this->getAttribute($this->getAttribute($context["utilisateur"], "typeuser", array()), "profil", array()) == "Laborantin")) {
                // line 68
                echo "                                        ";
                $context["color"] = "default";
                // line 69
                echo "                                    ";
            }
            // line 70
            echo "                                    ";
            if (($this->getAttribute($this->getAttribute($context["utilisateur"], "typeuser", array()), "profil", array()) == "Pharmacien")) {
                // line 71
                echo "                                        ";
                $context["style"] = "background-color:#97D093;";
                // line 72
                echo "                                    ";
            }
            // line 73
            echo "                                    <tr style=";
            echo twig_escape_filter($this->env, ($context["style"] ?? $this->getContext($context, "style")), "html", null, true);
            echo " class=";
            echo twig_escape_filter($this->env, ($context["color"] ?? $this->getContext($context, "color")), "html", null, true);
            echo ">
                                        <td>";
            // line 74
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["utilisateur"], "typeuser", array()), "profil", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 75
            echo twig_escape_filter($this->env, $this->getAttribute($context["utilisateur"], "nom", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 76
            echo twig_escape_filter($this->env, $this->getAttribute($context["utilisateur"], "prenom", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute($context["utilisateur"], "email", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 78
            echo twig_escape_filter($this->env, $this->getAttribute($context["utilisateur"], "username", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 79
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["utilisateur"], "service", array()), "nomService", array()), "html", null, true);
            echo "</td>
                                        <td class=\"center\">
                                            <a href=\"";
            // line 81
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_update", array("id" => $this->getAttribute($context["utilisateur"], "id", array()))), "html", null, true);
            echo "\"
                                               title=\"Modifier\">
                                                <i class=\"fa fa-edit btn btn-sm btn-primary\" aria-hidden=\"true\"></i>
                                            </a>
                                            ";
            // line 86
            echo "                                            ";
            // line 87
            echo "                                               ";
            // line 88
            echo "                                                ";
            // line 89
            echo "                                            ";
            // line 90
            echo "                                        </td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['utilisateur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 93
        echo "                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-12 -->
        </div>
    </div>
    <!-- /#page-wrapper -->

";
        
        $__internal_80b2bac7793fadc0a274117bdd233bc942186aef05c04f1f0dbf0c605d9e8571->leave($__internal_80b2bac7793fadc0a274117bdd233bc942186aef05c04f1f0dbf0c605d9e8571_prof);

        
        $__internal_7e7637a369cbb1eec0d9f27250fd4221644eaae219af45b90fa5cb9db22f2ccb->leave($__internal_7e7637a369cbb1eec0d9f27250fd4221644eaae219af45b90fa5cb9db22f2ccb_prof);

    }

    public function getTemplateName()
    {
        return "FPCMSBundle:utilisateur:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  257 => 93,  249 => 90,  247 => 89,  245 => 88,  243 => 87,  241 => 86,  234 => 81,  229 => 79,  225 => 78,  221 => 77,  217 => 76,  213 => 75,  209 => 74,  202 => 73,  199 => 72,  196 => 71,  193 => 70,  190 => 69,  187 => 68,  184 => 67,  181 => 66,  178 => 65,  175 => 64,  172 => 63,  169 => 62,  166 => 61,  163 => 60,  160 => 59,  157 => 58,  154 => 57,  151 => 56,  148 => 55,  145 => 54,  142 => 53,  139 => 52,  136 => 51,  133 => 50,  129 => 49,  110 => 32,  101 => 29,  96 => 26,  92 => 25,  72 => 7,  70 => 6,  61 => 5,  50 => 3,  41 => 2,  11 => 1,);
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
                <h1 class=\"page-header\">Liste des utilisateurs</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"panel panel-primary\">
                    <div class=\"panel-heading\">
                        Liste des utilisateurs
                    </div>
                    <!-- /.panel-heading -->
                    <div class=\"panel-body\">
                        <div class=\"row\">
                            {% for flashMessage in app.session.flashbag.get('user') %}
                                <div id=\"message\" class=\"alert alert-info alert-dismissible\" role=\"alert\">
                                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span
                                                aria-hidden=\"true\">&times;</span></button>
                                    {{ flashMessage }}
                                </div>
                            {% endfor %}
                        </div>
                        <br>
                        <div class=\"table-responsive\">
                            <table width=\"100%\" class=\"table table-striped table-bordered table-hover\"
                                   id=\"dataTables-example-utilisateur\">
                                <thead>
                                <tr>
                                    <th>Type</th>
                                    <th>Nom</th>
                                    <th>Prénom</th>
                                    <th>Email</th>
                                    <th>Username</th>
                                    <th>Service</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                {% for utilisateur in utilisateurs %}
                                    {% set color = '' %}
                                    {% set style = '' %}
                                    {% if utilisateur.typeuser.profil == 'Medecin' %}
                                        {% set style = 'background-color:#FF6B5B;' %}
                                    {% endif %}
                                    {% if utilisateur.typeuser.profil == 'Infirmier' %}
                                        {% set style = 'background-color:#FC6F6F;' %}
                                    {% endif %}
                                    {% if utilisateur.typeuser.profil == 'Secretaire' %}
                                        {% set color = 'default' %}
                                    {% endif %}
                                    {% if utilisateur.typeuser.profil == 'Chirurgie dentaire' %}
                                        {% set style = 'background-color:#9246b2;' %}
                                    {% endif %}
                                    {% if utilisateur.typeuser.profil == 'Sage femme' %}
                                        {% set style = 'background-color:#FFB0DA;' %}
                                    {% endif %}
                                    {% if utilisateur.typeuser.profil == 'Laborantin' %}
                                        {% set color = 'default' %}
                                    {% endif %}
                                    {% if utilisateur.typeuser.profil == 'Pharmacien' %}
                                        {% set style = 'background-color:#97D093;' %}
                                    {% endif %}
                                    <tr style={{ style }} class={{ color }}>
                                        <td>{{ utilisateur.typeuser.profil }}</td>
                                        <td>{{ utilisateur.nom }}</td>
                                        <td>{{ utilisateur.prenom }}</td>
                                        <td>{{ utilisateur.email }}</td>
                                        <td>{{ utilisateur.username }}</td>
                                        <td>{{ utilisateur.service.nomService }}</td>
                                        <td class=\"center\">
                                            <a href=\"{{ path('fos_user_registration_update', {id:utilisateur.id}) }}\"
                                               title=\"Modifier\">
                                                <i class=\"fa fa-edit btn btn-sm btn-primary\" aria-hidden=\"true\"></i>
                                            </a>
                                            {#/#}
                                            {#<a href=\"\"#}
                                               {#class=\"btn btn-sm btn-danger\" title=\"visualiser\">#}
                                                {#<i class=\"fa fa-eye\" aria-hidden=\"true\"></i>#}
                                            {#</a>#}
                                        </td>
                                    </tr>
                                {% endfor %}
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-12 -->
        </div>
    </div>
    <!-- /#page-wrapper -->

{% endblock %}", "FPCMSBundle:utilisateur:index.html.twig", "/var/www/html/CMSFP/src/FP/CMSBundle/Resources/views/utilisateur/index.html.twig");
    }
}
