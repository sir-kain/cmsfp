<?php

/* FPCMSBundle:layout:header.html.twig */
class __TwigTemplate_592095df97ed7306e027d97e10b8621bd3b290c08120f6f545daae764abd5c9a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e6ed9165fba46dd0ffc934150f52e66ed366f2dcf95c6904598a8391ee87cf4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6ed9165fba46dd0ffc934150f52e66ed366f2dcf95c6904598a8391ee87cf4d->enter($__internal_e6ed9165fba46dd0ffc934150f52e66ed366f2dcf95c6904598a8391ee87cf4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FPCMSBundle:layout:header.html.twig"));

        $__internal_4d3bf04bcec75016ff4429d908ed7daff8d85ae63d70fcb07506c3cc88adebcc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d3bf04bcec75016ff4429d908ed7daff8d85ae63d70fcb07506c3cc88adebcc->enter($__internal_4d3bf04bcec75016ff4429d908ed7daff8d85ae63d70fcb07506c3cc88adebcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FPCMSBundle:layout:header.html.twig"));

        // line 1
        echo "<!-- Navigation -->
<nav class=\"navbar navbar- navbar-static-top\" role=\"navigation\" style=\"margin-bottom: 0; background-color: #5bb55b\">
    <div class=\"navbar-header\">
        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
        </button>

    </div>
    <!-- /.navbar-header -->

    <ul class=\"nav navbar-top-links navbar-right\">
        <li class=\"dropdown\">
            <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                ";
        // line 17
        $context["nbrdvdemain"] = 0;
        // line 18
        echo "                ";
        // line 19
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rdvUser"] ?? $this->getContext($context, "rdvUser")));
        foreach ($context['_seq'] as $context["_key"] => $context["rdv"]) {
            // line 20
            echo "                    ";
            if (((twig_date_format_filter($this->env, $this->getAttribute($context["rdv"], "dateRDV", array()), "d-m-y") == twig_date_format_filter($this->env, ($context["demain"] ?? $this->getContext($context, "demain")), "d-m-y")) || (twig_date_format_filter($this->env, $this->getAttribute($context["rdv"], "dateRDV", array()), "d-m-y") == twig_date_format_filter($this->env, "now", "d-m-y")))) {
                // line 21
                echo "                        ";
                $context["nbrdvdemain"] = (($context["nbrdvdemain"] ?? $this->getContext($context, "nbrdvdemain")) + 1);
                // line 22
                echo "                    ";
            }
            // line 23
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rdv'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "                ";
        if ((($context["nbrdvdemain"] ?? $this->getContext($context, "nbrdvdemain")) > 0)) {
            // line 25
            echo "                    <i style=\"color: #dd1155;\">(";
            echo twig_escape_filter($this->env, ($context["nbrdvdemain"] ?? $this->getContext($context, "nbrdvdemain")), "html", null, true);
            echo ")</i>
                    <i class=\"fa fa-bell fa-fw\" style=\"color: #dd1155;\"></i> <i style=\"color:#d1204c;\"
                                                                                class=\"fa fa-caret-down\"></i>
                ";
        } else {
            // line 29
            echo "                    <i class=\"fa fa-bell-slash fa-fw\"></i> <i class=\"fa fa-caret-down\"></i>
                ";
        }
        // line 31
        echo "            </a>
            <ul class=\"dropdown-menu dropdown-alerts\">
                ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rdvUser"] ?? $this->getContext($context, "rdvUser")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["rdv"]) {
            // line 34
            echo "                    ";
            if (((twig_date_format_filter($this->env, $this->getAttribute($context["rdv"], "dateRDV", array()), "d-m-y") == twig_date_format_filter($this->env, ($context["demain"] ?? $this->getContext($context, "demain")), "d-m-y")) || (twig_date_format_filter($this->env, $this->getAttribute($context["rdv"], "dateRDV", array()), "d-m-y") == twig_date_format_filter($this->env, "now", "d-m-y")))) {
                // line 35
                echo "                        <li class=\"inbox-item clearfix\">
                            <a href=\"";
                // line 36
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("detailpatient", array("id" => $this->getAttribute($this->getAttribute($context["rdv"], "patient", array()), "id", array()))), "html", null, true);
                echo "\">
                                <div class=\"media\">
                                    <div class=\"media-left\">
                                        ";
                // line 39
                if (($this->getAttribute($this->getAttribute($context["rdv"], "patient", array()), "filename", array()) != null)) {
                    // line 40
                    echo "                                            <img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/" . $this->getAttribute($this->getAttribute($context["rdv"], "patient", array()), "filename", array()))), "html", null, true);
                    echo "\" alt=\"\" width=\"40\">
                                        ";
                } else {
                    // line 42
                    echo "                                            ";
                    if (($this->getAttribute($this->getAttribute($context["rdv"], "patient", array()), "genrePatient", array()) == "Masculin")) {
                        // line 43
                        echo "                                                <img src=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/Patient-avatar-M.jpeg"), "html", null, true);
                        echo "\" alt=\"\"
                                                     width=\"40\">
                                            ";
                    } else {
                        // line 46
                        echo "                                                <img src=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/Patient-avatar-F.png"), "html", null, true);
                        echo "\" alt=\"\"
                                                     width=\"40\">
                                            ";
                    }
                    // line 49
                    echo "                                        ";
                }
                // line 50
                echo "                                    </div>
                                    <div class=\"media-body\">
                                        <h5 class=\"media-heading name\">
                                            <strong>
                                                ";
                // line 54
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["rdv"], "patient", array()), "prenomPatient", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["rdv"], "patient", array()), "nomPatient", array()), "html", null, true);
                echo "
                                            </strong>
                                        </h5>
                                        <p class=\"text\"> ";
                // line 57
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["rdv"], "dateRDV", array()), "d-m-y h:i"), "html", null, true);
                echo "</p>
                                        ";
                // line 59
                echo "                                    </div>
                                </div>
                            </a>
                        </li>
                    ";
            }
            // line 64
            echo "                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 65
            echo "                    <li>
                        <a>
                            <div>
                                <i class=\"fa fa-hand-grab-o fa-fw\"></i> Aucun RDV prévu pour demain
                            </div>
                        </a>
                    </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rdv'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "            </ul>
            <!-- /.dropdown-alerts -->
        </li>
        <!-- /.dropdown -->
        <li class=\"dropdown\">
            <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                ";
        // line 79
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array())), "html", null, true);
        echo " <i class=\"fa fa-user fa-fw\"></i> <i class=\"fa fa-caret-down\"></i>
            </a>
            <ul class=\"dropdown-menu dropdown-user\">
                <li><a href=\"";
        // line 82
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index");
        echo "\"><i class=\"fa fa-user fa-fw\"></i>
                        ";
        // line 83
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array())), "html", null, true);
        echo "
                    </a>
                </li>
                <li class=\"divider\"></li>
                <li><a><i class=\"fa fa-user fa-fw\"></i>
                        ";
        // line 88
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "typeuser", array()), "profil", array()), "html", null, true);
        echo "
                    </a>
                </li>
                <li class=\"divider\"></li>
                <li><a href=\"";
        // line 92
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_change_password");
        echo "\"><i class=\"fa fa-key fa-fw\"></i>
                        Modifier mon mot de passe
                    </a>
                </li>
                <li class=\"divider\"></li>
                <li>
                    <a href=\"";
        // line 98
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
        echo "\"><i class=\"fa fa-sign-out fa-fw\"></i>
                        Se deconnecter</a>
                </li>
            </ul>
            <!-- /.dropdown-user -->
        </li>
        <!-- /.dropdown -->
    </ul>
    <!-- /.navbar-top-links -->
    <br>
    <div class=\"navbar-default sidebar\" role=\"navigation\">
        <div class=\"sidebar-nav navbar-collapse\">
            <ul class=\"nav\" id=\"side-menu\">
                <li class=\"sidebar-search\">
                    <div class=\"input-group custom-search-form\">
                        <input type=\"text\" class=\"form-control\" placeholder=\"Rechercher...\">
                        <span class=\"input-group-btn\">
                            <button class=\"btn btn-default\" type=\"button\">
                                <i class=\"fa fa-search\"></i>
                            </button>
                        </span>
                    </div>
                    <!-- /input-group -->
                </li>

                <li>
                    <a href=\"";
        // line 124
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index");
        echo "\"><i class=\"fa fa-dashboard fa-fw\"></i> Tableau de bord</a>
                </li>
                ";
        // line 126
        if (((((($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "typeuser", array()), "profil", array()) == "Administrateur") || ($this->getAttribute($this->getAttribute($this->getAttribute(        // line 127
($context["app"] ?? $this->getContext($context, "app")), "user", array()), "typeuser", array()), "profil", array()) == "Medecin")) || ($this->getAttribute($this->getAttribute($this->getAttribute(        // line 128
($context["app"] ?? $this->getContext($context, "app")), "user", array()), "typeuser", array()), "profil", array()) == "Chirurgie dentaire")) || ($this->getAttribute($this->getAttribute($this->getAttribute(        // line 129
($context["app"] ?? $this->getContext($context, "app")), "user", array()), "typeuser", array()), "profil", array()) == "Sage femme")) || ($this->getAttribute($this->getAttribute($this->getAttribute(        // line 130
($context["app"] ?? $this->getContext($context, "app")), "user", array()), "typeuser", array()), "profil", array()) == "Infirmier"))) {
            // line 131
            echo "                    <li>
                        <a href=\"";
            // line 132
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("indexpatient");
            echo "\"><i class=\"fa fa-user fa-fw\"></i> Patients <span
                                    class=\"fa arrow\"></span></a>
                        <ul class=\"nav nav-second-level\">
                            <li>
                                <a href=\"";
            // line 136
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajoutpatient");
            echo "\">Ajout patient</a>
                            </li>
                            <li>
                                <a href=\"";
            // line 139
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("indexpatient");
            echo "\">Liste patients</a>
                            </li>
                        </ul>
                    </li>
                ";
        }
        // line 144
        echo "                ";
        if ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "typeuser", array()), "profil", array()) == "Administrateur") || ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "typeuser", array()), "profil", array()) == "Pharmacien"))) {
            // line 145
            echo "                    <li>
                        <a href=\"";
            // line 146
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("medicament_index");
            echo "\"><i class=\"fa fa-medkit fa-fw\"></i>
                            Medicaments <span class=\"fa arrow\"></span></a>
                        <ul class=\"nav nav-second-level\">
                            <li>
                                <a href=\"";
            // line 150
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("medicament_new");
            echo "\">Ajout medicament</a>
                            </li>
                            <li>
                                <a href=\"";
            // line 153
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("medicament_index");
            echo "\">Liste medicaments</a>
                            </li>
                        </ul>
                    </li>
                ";
        }
        // line 158
        echo "                ";
        if (((((($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "typeuser", array()), "profil", array()) == "Medecin") || ($this->getAttribute($this->getAttribute($this->getAttribute(        // line 159
($context["app"] ?? $this->getContext($context, "app")), "user", array()), "typeuser", array()), "profil", array()) == "Chirurgie dentaire")) || ($this->getAttribute($this->getAttribute($this->getAttribute(        // line 160
($context["app"] ?? $this->getContext($context, "app")), "user", array()), "typeuser", array()), "profil", array()) == "Sage femme")) || ($this->getAttribute($this->getAttribute($this->getAttribute(        // line 161
($context["app"] ?? $this->getContext($context, "app")), "user", array()), "typeuser", array()), "profil", array()) == "Laborantin")) || ($this->getAttribute($this->getAttribute($this->getAttribute(        // line 162
($context["app"] ?? $this->getContext($context, "app")), "user", array()), "typeuser", array()), "profil", array()) == "Infirmier"))) {
            // line 163
            echo "                    <li>
                        <a><i class=\"fa fa-flask fa-fw\"></i> Examen <span class=\"fa arrow\"></span></a>
                        <ul class=\"nav nav-second-level\">
                            <li>
                                <a href=\"";
            // line 167
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("examen_index");
            echo "\"><i class=\"fa fa-flask fa-fw\"></i>
                                    Examens en attente</a>
                            </li>
                            ";
            // line 170
            if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "typeuser", array()), "profil", array()) == "Laborantin")) {
                // line 171
                echo "                                <li>
                                    <a href=\"";
                // line 172
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("examen_lastest");
                echo "\"><i class=\"fa fa-flask fa-fw\"></i>
                                        Examens</a>
                                </li>
                            ";
            }
            // line 176
            echo "                        </ul>
                    </li>
                ";
        }
        // line 179
        echo "                ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "typeuser", array()), "profil", array()) == "Secretaire")) {
            // line 180
            echo "                    <li>
                        <a><i class=\"fa fa-flask fa-fw\"></i> Facturation <span class=\"fa arrow\"></span></a>
                        <ul class=\"nav nav-second-level\">
                            <li>
                                <a href=\"";
            // line 184
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("examen_index");
            echo "\"><i class=\"fa fa-flask fa-fw\"></i>
                                    Examens en attente</a>
                            </li>
                            <li>
                                <a href=\"";
            // line 188
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajoutpatient");
            echo "\"><i class=\"fa fa-user fa-fw\"></i>Ajout patient</a>
                            </li>
                            <li>
                                <a href=\"";
            // line 191
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("indexpatient");
            echo "\"> <i class=\"fa fa-user fa-fw\"></i>Liste patients</a>
                            </li>
                        </ul>
                    </li>
                ";
        }
        // line 196
        echo "                ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 197
            echo "                    <li>
                        <a href=\"";
            // line 198
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("indexservice");
            echo "\"><i class=\"fa fa-dashboard fa-fw\"></i> Unité
                            <span class=\"fa arrow\"></span></a>
                        <ul class=\"nav nav-second-level\">
                            <li>
                                <a href=\"";
            // line 202
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajoutservice");
            echo "\">Ajout unité</a>
                            </li>
                            <li>
                                <a href=\"";
            // line 205
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("indexservice");
            echo "\">Liste unités</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href=\"";
            // line 210
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("indexuser");
            echo "\"><i class=\"fa fa-user-md fa-fw\" aria-hidden=\"true\"></i>
                            Utilisateur <span class=\"fa arrow\"></span></a>
                        <ul class=\"nav nav-second-level\">
                            <li>
                                <a href=\"";
            // line 214
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
            echo "\">Ajout utilisateur</a>
                            </li>
                            <li>
                                <a href=\"";
            // line 217
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("indexuser");
            echo "\">Liste utilisateurs</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a><i class=\"fa fa-dashboard fa-fw\"></i> Examen
                            <span class=\"fa arrow\"></span></a>
                        <ul class=\"nav nav-second-level\">
                            <li>
                                <a href=\"";
            // line 226
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("typeexamen_new");
            echo "\">Ajout examen</a>
                            </li>
                            <li>
                                <a href=\"";
            // line 229
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("typeexamen_index");
            echo "\">Liste examens</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a><i class=\"fa fa-dashboard fa-fw\"></i> Type examen
                            <span class=\"fa arrow\"></span></a>
                        <ul class=\"nav nav-second-level\">
                            <li>
                                <a href=\"";
            // line 238
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("supertypeexamen_new");
            echo "\">Ajout type examen</a>
                            </li>
                            <li>
                                <a href=\"";
            // line 241
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("supertypeexamen_index");
            echo "\">Liste des types d'examen</a>
                            </li>
                        </ul>
                    </li>
                ";
        }
        // line 246
        echo "            </ul>
        </div>
        <!-- /.sidebar-collapse -->
    </div>
    <!-- /.navbar-static-side -->
</nav>
";
        
        $__internal_e6ed9165fba46dd0ffc934150f52e66ed366f2dcf95c6904598a8391ee87cf4d->leave($__internal_e6ed9165fba46dd0ffc934150f52e66ed366f2dcf95c6904598a8391ee87cf4d_prof);

        
        $__internal_4d3bf04bcec75016ff4429d908ed7daff8d85ae63d70fcb07506c3cc88adebcc->leave($__internal_4d3bf04bcec75016ff4429d908ed7daff8d85ae63d70fcb07506c3cc88adebcc_prof);

    }

    public function getTemplateName()
    {
        return "FPCMSBundle:layout:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  457 => 246,  449 => 241,  443 => 238,  431 => 229,  425 => 226,  413 => 217,  407 => 214,  400 => 210,  392 => 205,  386 => 202,  379 => 198,  376 => 197,  373 => 196,  365 => 191,  359 => 188,  352 => 184,  346 => 180,  343 => 179,  338 => 176,  331 => 172,  328 => 171,  326 => 170,  320 => 167,  314 => 163,  312 => 162,  311 => 161,  310 => 160,  309 => 159,  307 => 158,  299 => 153,  293 => 150,  286 => 146,  283 => 145,  280 => 144,  272 => 139,  266 => 136,  259 => 132,  256 => 131,  254 => 130,  253 => 129,  252 => 128,  251 => 127,  250 => 126,  245 => 124,  216 => 98,  207 => 92,  200 => 88,  192 => 83,  188 => 82,  182 => 79,  174 => 73,  161 => 65,  156 => 64,  149 => 59,  145 => 57,  137 => 54,  131 => 50,  128 => 49,  121 => 46,  114 => 43,  111 => 42,  105 => 40,  103 => 39,  97 => 36,  94 => 35,  91 => 34,  86 => 33,  82 => 31,  78 => 29,  70 => 25,  67 => 24,  61 => 23,  58 => 22,  55 => 21,  52 => 20,  47 => 19,  45 => 18,  43 => 17,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- Navigation -->
<nav class=\"navbar navbar- navbar-static-top\" role=\"navigation\" style=\"margin-bottom: 0; background-color: #5bb55b\">
    <div class=\"navbar-header\">
        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
        </button>

    </div>
    <!-- /.navbar-header -->

    <ul class=\"nav navbar-top-links navbar-right\">
        <li class=\"dropdown\">
            <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                {% set nbrdvdemain = 0 %}
                {#{% if rdvUser != null %}#}
                {% for rdv in rdvUser %}
                    {% if rdv.dateRDV | date('d-m-y') ==  demain | date('d-m-y') or rdv.dateRDV | date('d-m-y') == \"now\" | date('d-m-y') %}
                        {% set nbrdvdemain = nbrdvdemain + 1 %}
                    {% endif %}
                {% endfor %}
                {% if nbrdvdemain > 0 %}
                    <i style=\"color: #dd1155;\">({{ nbrdvdemain }})</i>
                    <i class=\"fa fa-bell fa-fw\" style=\"color: #dd1155;\"></i> <i style=\"color:#d1204c;\"
                                                                                class=\"fa fa-caret-down\"></i>
                {% else %}
                    <i class=\"fa fa-bell-slash fa-fw\"></i> <i class=\"fa fa-caret-down\"></i>
                {% endif %}
            </a>
            <ul class=\"dropdown-menu dropdown-alerts\">
                {% for rdv in rdvUser %}
                    {% if rdv.dateRDV | date('d-m-y') ==  demain | date('d-m-y') or rdv.dateRDV | date('d-m-y') == \"now\" | date('d-m-y') %}
                        <li class=\"inbox-item clearfix\">
                            <a href=\"{{ path('detailpatient', {id: rdv.patient.id}) }}\">
                                <div class=\"media\">
                                    <div class=\"media-left\">
                                        {% if rdv.patient.filename != null %}
                                            <img src=\"{{ asset(\"uploads/\" ~ rdv.patient.filename) }}\" alt=\"\" width=\"40\">
                                        {% else %}
                                            {% if rdv.patient.genrePatient == 'Masculin' %}
                                                <img src=\"{{ asset(\"uploads/Patient-avatar-M.jpeg\") }}\" alt=\"\"
                                                     width=\"40\">
                                            {% else %}
                                                <img src=\"{{ asset(\"uploads/Patient-avatar-F.png\") }}\" alt=\"\"
                                                     width=\"40\">
                                            {% endif %}
                                        {% endif %}
                                    </div>
                                    <div class=\"media-body\">
                                        <h5 class=\"media-heading name\">
                                            <strong>
                                                {{ rdv.patient.prenomPatient }} {{ rdv.patient.nomPatient }}
                                            </strong>
                                        </h5>
                                        <p class=\"text\"> {{ rdv.dateRDV | date('d-m-y h:i') }}</p>
                                        {#<span class=\"timestamp\">4 minutes ago</span>#}
                                    </div>
                                </div>
                            </a>
                        </li>
                    {% endif %}
                {% else %}
                    <li>
                        <a>
                            <div>
                                <i class=\"fa fa-hand-grab-o fa-fw\"></i> Aucun RDV prévu pour demain
                            </div>
                        </a>
                    </li>
                {% endfor %}
            </ul>
            <!-- /.dropdown-alerts -->
        </li>
        <!-- /.dropdown -->
        <li class=\"dropdown\">
            <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                {{ app.user.username  |capitalize }} <i class=\"fa fa-user fa-fw\"></i> <i class=\"fa fa-caret-down\"></i>
            </a>
            <ul class=\"dropdown-menu dropdown-user\">
                <li><a href=\"{{ path('index') }}\"><i class=\"fa fa-user fa-fw\"></i>
                        {{ app.user.username |capitalize }}
                    </a>
                </li>
                <li class=\"divider\"></li>
                <li><a><i class=\"fa fa-user fa-fw\"></i>
                        {{ app.user.typeuser.profil }}
                    </a>
                </li>
                <li class=\"divider\"></li>
                <li><a href=\"{{ path('fos_user_change_password') }}\"><i class=\"fa fa-key fa-fw\"></i>
                        Modifier mon mot de passe
                    </a>
                </li>
                <li class=\"divider\"></li>
                <li>
                    <a href=\"{{ path('fos_user_security_logout') }}\"><i class=\"fa fa-sign-out fa-fw\"></i>
                        Se deconnecter</a>
                </li>
            </ul>
            <!-- /.dropdown-user -->
        </li>
        <!-- /.dropdown -->
    </ul>
    <!-- /.navbar-top-links -->
    <br>
    <div class=\"navbar-default sidebar\" role=\"navigation\">
        <div class=\"sidebar-nav navbar-collapse\">
            <ul class=\"nav\" id=\"side-menu\">
                <li class=\"sidebar-search\">
                    <div class=\"input-group custom-search-form\">
                        <input type=\"text\" class=\"form-control\" placeholder=\"Rechercher...\">
                        <span class=\"input-group-btn\">
                            <button class=\"btn btn-default\" type=\"button\">
                                <i class=\"fa fa-search\"></i>
                            </button>
                        </span>
                    </div>
                    <!-- /input-group -->
                </li>

                <li>
                    <a href=\"{{ path('index') }}\"><i class=\"fa fa-dashboard fa-fw\"></i> Tableau de bord</a>
                </li>
                {% if app.user.typeuser.profil == 'Administrateur' or
                    app.user.typeuser.profil == 'Medecin' or
                    app.user.typeuser.profil == 'Chirurgie dentaire' or
                    app.user.typeuser.profil == 'Sage femme' or
                    app.user.typeuser.profil == 'Infirmier' %}
                    <li>
                        <a href=\"{{ path('indexpatient') }}\"><i class=\"fa fa-user fa-fw\"></i> Patients <span
                                    class=\"fa arrow\"></span></a>
                        <ul class=\"nav nav-second-level\">
                            <li>
                                <a href=\"{{ path('ajoutpatient') }}\">Ajout patient</a>
                            </li>
                            <li>
                                <a href=\"{{ path('indexpatient') }}\">Liste patients</a>
                            </li>
                        </ul>
                    </li>
                {% endif %}
                {% if app.user.typeuser.profil == 'Administrateur'  or app.user.typeuser.profil == 'Pharmacien' %}
                    <li>
                        <a href=\"{{ path('medicament_index') }}\"><i class=\"fa fa-medkit fa-fw\"></i>
                            Medicaments <span class=\"fa arrow\"></span></a>
                        <ul class=\"nav nav-second-level\">
                            <li>
                                <a href=\"{{ path('medicament_new') }}\">Ajout medicament</a>
                            </li>
                            <li>
                                <a href=\"{{ path('medicament_index') }}\">Liste medicaments</a>
                            </li>
                        </ul>
                    </li>
                {% endif %}
                {% if app.user.typeuser.profil == 'Medecin' or
                    app.user.typeuser.profil == 'Chirurgie dentaire' or
                    app.user.typeuser.profil == 'Sage femme' or
                    app.user.typeuser.profil == 'Laborantin' or
                    app.user.typeuser.profil == 'Infirmier' %}
                    <li>
                        <a><i class=\"fa fa-flask fa-fw\"></i> Examen <span class=\"fa arrow\"></span></a>
                        <ul class=\"nav nav-second-level\">
                            <li>
                                <a href=\"{{ path('examen_index') }}\"><i class=\"fa fa-flask fa-fw\"></i>
                                    Examens en attente</a>
                            </li>
                            {% if app.user.typeuser.profil == 'Laborantin' %}
                                <li>
                                    <a href=\"{{ path('examen_lastest') }}\"><i class=\"fa fa-flask fa-fw\"></i>
                                        Examens</a>
                                </li>
                            {% endif %}
                        </ul>
                    </li>
                {% endif %}
                {% if app.user.typeuser.profil == 'Secretaire' %}
                    <li>
                        <a><i class=\"fa fa-flask fa-fw\"></i> Facturation <span class=\"fa arrow\"></span></a>
                        <ul class=\"nav nav-second-level\">
                            <li>
                                <a href=\"{{ path('examen_index') }}\"><i class=\"fa fa-flask fa-fw\"></i>
                                    Examens en attente</a>
                            </li>
                            <li>
                                <a href=\"{{ path('ajoutpatient') }}\"><i class=\"fa fa-user fa-fw\"></i>Ajout patient</a>
                            </li>
                            <li>
                                <a href=\"{{ path('indexpatient') }}\"> <i class=\"fa fa-user fa-fw\"></i>Liste patients</a>
                            </li>
                        </ul>
                    </li>
                {% endif %}
                {% if is_granted('ROLE_ADMIN') %}
                    <li>
                        <a href=\"{{ path('indexservice') }}\"><i class=\"fa fa-dashboard fa-fw\"></i> Unité
                            <span class=\"fa arrow\"></span></a>
                        <ul class=\"nav nav-second-level\">
                            <li>
                                <a href=\"{{ path('ajoutservice') }}\">Ajout unité</a>
                            </li>
                            <li>
                                <a href=\"{{ path('indexservice') }}\">Liste unités</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href=\"{{ path('indexuser') }}\"><i class=\"fa fa-user-md fa-fw\" aria-hidden=\"true\"></i>
                            Utilisateur <span class=\"fa arrow\"></span></a>
                        <ul class=\"nav nav-second-level\">
                            <li>
                                <a href=\"{{ path('fos_user_registration_register') }}\">Ajout utilisateur</a>
                            </li>
                            <li>
                                <a href=\"{{ path('indexuser') }}\">Liste utilisateurs</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a><i class=\"fa fa-dashboard fa-fw\"></i> Examen
                            <span class=\"fa arrow\"></span></a>
                        <ul class=\"nav nav-second-level\">
                            <li>
                                <a href=\"{{ path('typeexamen_new') }}\">Ajout examen</a>
                            </li>
                            <li>
                                <a href=\"{{ path('typeexamen_index') }}\">Liste examens</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a><i class=\"fa fa-dashboard fa-fw\"></i> Type examen
                            <span class=\"fa arrow\"></span></a>
                        <ul class=\"nav nav-second-level\">
                            <li>
                                <a href=\"{{ path('supertypeexamen_new') }}\">Ajout type examen</a>
                            </li>
                            <li>
                                <a href=\"{{ path('supertypeexamen_index') }}\">Liste des types d'examen</a>
                            </li>
                        </ul>
                    </li>
                {% endif %}
            </ul>
        </div>
        <!-- /.sidebar-collapse -->
    </div>
    <!-- /.navbar-static-side -->
</nav>
", "FPCMSBundle:layout:header.html.twig", "/var/www/html/CMSFP/src/FP/CMSBundle/Resources/views/layout/header.html.twig");
    }
}
