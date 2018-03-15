<?php

/* FPCMSBundle:template:index.html.twig */
class __TwigTemplate_f5bc5b2883abc97538541383df94a2f6b5dbfd821c24a34f014323104ec4fcbc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "FPCMSBundle:template:index.html.twig", 1);
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
        $__internal_8ae378a2bd0453d213e865cba6b2fc73a481009da14d89b0ba02ce8de69e368b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ae378a2bd0453d213e865cba6b2fc73a481009da14d89b0ba02ce8de69e368b->enter($__internal_8ae378a2bd0453d213e865cba6b2fc73a481009da14d89b0ba02ce8de69e368b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FPCMSBundle:template:index.html.twig"));

        $__internal_ab014e496a2d4a0e7e6f64932b4f7329f9d9848d87497328f7acb5dbdfb78c3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab014e496a2d4a0e7e6f64932b4f7329f9d9848d87497328f7acb5dbdfb78c3f->enter($__internal_ab014e496a2d4a0e7e6f64932b4f7329f9d9848d87497328f7acb5dbdfb78c3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FPCMSBundle:template:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8ae378a2bd0453d213e865cba6b2fc73a481009da14d89b0ba02ce8de69e368b->leave($__internal_8ae378a2bd0453d213e865cba6b2fc73a481009da14d89b0ba02ce8de69e368b_prof);

        
        $__internal_ab014e496a2d4a0e7e6f64932b4f7329f9d9848d87497328f7acb5dbdfb78c3f->leave($__internal_ab014e496a2d4a0e7e6f64932b4f7329f9d9848d87497328f7acb5dbdfb78c3f_prof);

    }

    // line 2
    public function block_header($context, array $blocks = array())
    {
        $__internal_7fa609622caad3592ab17e26d26a60df61db2730bdbe78fc114e649f85d683cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7fa609622caad3592ab17e26d26a60df61db2730bdbe78fc114e649f85d683cc->enter($__internal_7fa609622caad3592ab17e26d26a60df61db2730bdbe78fc114e649f85d683cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_4a1185fc087e569e00d640c13505c2556828ae518c55cabcec99708eaf56b2c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a1185fc087e569e00d640c13505c2556828ae518c55cabcec99708eaf56b2c9->enter($__internal_4a1185fc087e569e00d640c13505c2556828ae518c55cabcec99708eaf56b2c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 3
        echo "    ";
        $this->loadTemplate("FPCMSBundle:layout:header.html.twig", "FPCMSBundle:template:index.html.twig", 3)->display($context);
        
        $__internal_4a1185fc087e569e00d640c13505c2556828ae518c55cabcec99708eaf56b2c9->leave($__internal_4a1185fc087e569e00d640c13505c2556828ae518c55cabcec99708eaf56b2c9_prof);

        
        $__internal_7fa609622caad3592ab17e26d26a60df61db2730bdbe78fc114e649f85d683cc->leave($__internal_7fa609622caad3592ab17e26d26a60df61db2730bdbe78fc114e649f85d683cc_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_153bbe52250a8c495ca3b2fc13bc5bd7fc9f8c91cbd099da0ee0f9d6253cfa6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_153bbe52250a8c495ca3b2fc13bc5bd7fc9f8c91cbd099da0ee0f9d6253cfa6b->enter($__internal_153bbe52250a8c495ca3b2fc13bc5bd7fc9f8c91cbd099da0ee0f9d6253cfa6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2d1706d00b22c4a04e2466cd55d2da44645ee6466548dbc6646ea367fdec03d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d1706d00b22c4a04e2466cd55d2da44645ee6466548dbc6646ea367fdec03d0->enter($__internal_2d1706d00b22c4a04e2466cd55d2da44645ee6466548dbc6646ea367fdec03d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        // line 7
        echo "
    <div id=\"page-wrapper\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">
                </h1>
                ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "Profil"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 14
            echo "                    <div id=\"message\" class=\"alert alert-success alert-dismissible\" role=\"alert\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span
                                    aria-hidden=\"true\">&times;</span></button>
                        ";
            // line 17
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "droitConsultation"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 21
            echo "                    <div id=\"message\" class=\"alert alert-danger alert-dismissible\" role=\"alert\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span
                                    aria-hidden=\"true\">&times;</span></button>
                        <strong>Attention:</strong> ";
            // line 24
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class=\"row\">
            <div class=\"col-lg-4 col-md-6\">
                <div class=\"panel panel-primary\">
                    <div class=\"panel-heading\">
                        <div class=\"row\">
                            <div class=\"col-xs-3\">
                                <i class=\"fa fa-users fa-5x\"></i>
                            </div>
                            <div class=\"col-xs-9 text-right\">
                                ";
        // line 40
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "typeuser", array()), "profil", array()) == "Administrateur")) {
            // line 41
            echo "                                    <div class=\"huge\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "nbpatients", array()), "html", null, true);
            echo "</div>
                                    <div>Patients</div>
                                ";
        } else {
            // line 44
            echo "                                    ";
            if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "typeuser", array()), "profil", array()) != "Laborantin")) {
                // line 45
                echo "                                        <div class=\"huge\">";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "nbpatientM", array()), "html", null, true);
                echo "</div>
                                        <div>Patients</div>
                                    ";
            } else {
                // line 48
                echo "                                        <div class=\"huge\">";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "nbpatientexam", array()), "html", null, true);
                echo "</div>
                                        <div>Patients</div>
                                    ";
            }
            // line 51
            echo "                                ";
        }
        // line 52
        echo "                            </div>
                        </div>
                    </div>
                    <a href=\"";
        // line 55
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("indexpatient");
        echo "\">
                        <div class=\"panel-footer\">
                            <span class=\"pull-left\"></span>
                            <span class=\"pull-right\"><i class=\"fa fa-arrow-circle-right\"></i></span>
                            <div class=\"clearfix\"></div>
                        </div>
                    </a>
                </div>
            </div>
            <div class=\"col-lg-4 col-md-6\">
                <div class=\"panel panel-yellow\">
                    <div class=\"panel-heading\">
                        <div class=\"row\">
                            <div class=\"col-xs-3\">
                                <i class=\"fa fa-user-md fa-5x\"></i>
                            </div>
                            <div class=\"col-xs-9 text-right\">
                                ";
        // line 72
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "typeuser", array()), "profil", array()) == "Administrateur")) {
            // line 73
            echo "                                    <div class=\"huge\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "nbconsultations", array()), "html", null, true);
            echo "</div>
                                    <div>Consultations</div>
                                ";
        } else {
            // line 76
            echo "                                    ";
            if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "typeuser", array()), "profil", array()) != "Laborantin")) {
                // line 77
                echo "                                        <div class=\"huge\">";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "nbconsultationM", array()), "html", null, true);
                echo "</div>
                                        <div>Consultations</div>
                                    ";
            } else {
                // line 80
                echo "                                        <div class=\"huge\">";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "nbexamens", array()), "html", null, true);
                echo "</div>
                                        <div>Examens</div>
                                    ";
            }
            // line 83
            echo "                                ";
        }
        // line 84
        echo "                            </div>
                        </div>
                    </div>
                    ";
        // line 87
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "typeuser", array()), "profil", array()) != "Laborantin")) {
            // line 88
            echo "                        <a href=\"#\">
                            <div class=\"panel-footer\">
                                <span class=\"pull-left\"></span>
                                <span class=\"pull-right\"><i class=\"fa fa-arrow-circle-right\"></i></span>
                                <div class=\"clearfix\"></div>
                            </div>
                        </a>
                    ";
        } else {
            // line 96
            echo "                        <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("examen_lastest");
            echo "\">
                            <div class=\"panel-footer\">
                                <span class=\"pull-left\"></span>
                                <span class=\"pull-right\"><i class=\"fa fa-arrow-circle-right\"></i></span>
                                <div class=\"clearfix\"></div>
                            </div>
                        </a>
                    ";
        }
        // line 104
        echo "                </div>
            </div>
            <div class=\"col-lg-4 col-md-6\">
                <div class=\"panel panel-green\">
                    <div class=\"panel-heading\">
                        <div class=\"row\">
                            <div class=\"col-xs-3\">
                                <i class=\"fa fa-calendar fa-5x\"></i>
                            </div>
                            <div class=\"col-xs-9 text-right\">
                                ";
        // line 114
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "typeuser", array()), "profil", array()) == "Administrateur")) {
            // line 115
            echo "                                    <div class=\"huge\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "nbrdv", array()), "html", null, true);
            echo "</div>
                                    <div>Mes rendez-vous</div>
                                ";
        } else {
            // line 118
            echo "                                    ";
            if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "typeuser", array()), "profil", array()) != "Laborantin")) {
                // line 119
                echo "                                        <div class=\"huge\">";
                echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["rdv"] ?? $this->getContext($context, "rdv"))), "html", null, true);
                echo "</div>
                                        <div>Mes rendez-vous</div>
                                    ";
            } else {
                // line 122
                echo "                                        <div class=\"huge\">";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "nbexamattente", array()), "html", null, true);
                echo "</div>
                                        <div>Examens en attente</div>
                                    ";
            }
            // line 125
            echo "                                ";
        }
        // line 126
        echo "                            </div>
                        </div>
                    </div>
                    ";
        // line 129
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "typeuser", array()), "profil", array()) != "Laborantin")) {
            // line 130
            echo "                        <a href=\"#\">
                            <div class=\"panel-footer\">
                                <span class=\"pull-left\"></span>
                                <span class=\"pull-right\"><i class=\"fa fa-arrow-circle-right\"></i></span>
                                <div class=\"clearfix\"></div>
                            </div>
                        </a>
                    ";
        } else {
            // line 138
            echo "                        <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("examen_index");
            echo "\">
                            <div class=\"panel-footer\">
                                <span class=\"pull-left\"></span>
                                <span class=\"pull-right\"><i class=\"fa fa-arrow-circle-right\"></i></span>
                                <div class=\"clearfix\"></div>
                            </div>
                        </a>
                    ";
        }
        // line 146
        echo "                </div>
            </div>
        </div>
        <!-- /.row -->
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <div class=\"panel panel-primary\">
                    <div class=\"panel-heading\">
                        <i class=\"fa fa-bar-chart-o fa-fw\"></i> Courbe d'évolution des
                        ";
        // line 155
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "typeuser", array()), "profil", array()) == "Laborantin")) {
            // line 156
            echo "                            examens
                        ";
        } else {
            // line 158
            echo "                            consultations
                        ";
        }
        // line 160
        echo "                        <div class=\"pull-right\">

                        </div>
                    </div>
                    <!-- /.panel-heading -->
                    <div class=\"panel-body\">
                        <div id=\"morris-area-chart-consultation\"></div>
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-8 -->
            <div class=\"col-lg-4\">
                <div class=\"panel panel-primary\">
                    <div class=\"panel-heading\">
                        <i class=\"fa fa-calendar fa-fw\"></i>
                        ";
        // line 177
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "typeuser", array()), "profil", array()) != "Laborantin")) {
            // line 178
            echo "                            <strong> Vos prochains Rendez-vous </strong>
                        ";
        } else {
            // line 180
            echo "                            <strong> Examen en attente </strong>
                        ";
        }
        // line 182
        echo "                    </div>
                    <!-- /.panel-heading -->
                    <div class=\"panel-body\">
                        <ul class=\"list-group\">
                            ";
        // line 186
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "typeuser", array()), "profil", array()) != "Laborantin")) {
            // line 187
            echo "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["rdv"] ?? $this->getContext($context, "rdv")));
            $context['_iterated'] = false;
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["rv"]) {
                // line 188
                echo "                                    <li class=\"list-group-item\">
                                        <i class=\"fa fa-hand-o-right\" aria-hidden=\"true\"></i>
                                        <a href=\"";
                // line 190
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("detailpatient", array("id" => $this->getAttribute($this->getAttribute($context["rv"], "patient", array()), "id", array()))), "html", null, true);
                echo "\">
                                            ";
                // line 191
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["rv"], "dateRDV", array()), "j/M/Y H:i:s"), "html", null, true);
                echo "
                                        </a>
                                    </li>
                                    ";
                // line 194
                $context["nbrdv"] = $this->getAttribute($context["loop"], "length", array());
                // line 195
                echo "                                ";
                $context['_iterated'] = true;
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            if (!$context['_iterated']) {
                // line 196
                echo "                                    <li class=\"list-group-item\">
                                        Vous ne disposez pas de rendez-vous.
                                    </li>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rv'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 200
            echo "                            ";
        } else {
            // line 201
            echo "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "groupexam", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["consult"]) {
                // line 202
                echo "                                    <li class=\"list-group-item\">
                                        <i class=\"fa fa-hand-o-right\" aria-hidden=\"true\"></i>
                                        ";
                // line 204
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["consult"], 0, array(), "array"), "prenom_patient", array(), "array"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["consult"], 0, array(), "array"), "nom_patient", array(), "array"), "html", null, true);
                echo "
                                        <a href=\"";
                // line 205
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("createexams", array("numeroconsult" => $this->getAttribute($this->getAttribute($context["consult"], 0, array(), "array"), "numeroconsultation", array()))), "html", null, true);
                echo "\"
                                           title=\"Examiner\">
                                            ";
                // line 207
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["consult"]);
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["typeexam"]) {
                    // line 208
                    echo "                                                ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["typeexam"], "nomTypeExamen", array()), "html", null, true);
                    echo "
                                                ";
                    // line 209
                    if ( !$this->getAttribute($context["loop"], "last", array())) {
                        // line 210
                        echo "                                                    -
                                                ";
                    }
                    // line 212
                    echo "                                            ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['typeexam'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 213
                echo "                                        </a>
                                    </li>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['consult'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 216
            echo "                                ";
            if (($this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "groupexam", array()) == array())) {
                // line 217
                echo "                                    <li class=\"list-group-item\">
                                        Pas d'examen en attente
                                    </li>
                                ";
            }
            // line 221
            echo "                            ";
        }
        // line 222
        echo "                        </ul>
                    </div>
                    <!-- /.panel-body -->
                </div>
            </div>
            <!-- /.col-lg-4 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /#page-wrapper -->
    ";
        // line 233
        echo "    <!-- /#page-wrapper -->

";
        
        $__internal_2d1706d00b22c4a04e2466cd55d2da44645ee6466548dbc6646ea367fdec03d0->leave($__internal_2d1706d00b22c4a04e2466cd55d2da44645ee6466548dbc6646ea367fdec03d0_prof);

        
        $__internal_153bbe52250a8c495ca3b2fc13bc5bd7fc9f8c91cbd099da0ee0f9d6253cfa6b->leave($__internal_153bbe52250a8c495ca3b2fc13bc5bd7fc9f8c91cbd099da0ee0f9d6253cfa6b_prof);

    }

    public function getTemplateName()
    {
        return "FPCMSBundle:template:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  526 => 233,  514 => 222,  511 => 221,  505 => 217,  502 => 216,  494 => 213,  480 => 212,  476 => 210,  474 => 209,  469 => 208,  452 => 207,  447 => 205,  441 => 204,  437 => 202,  432 => 201,  429 => 200,  420 => 196,  407 => 195,  405 => 194,  399 => 191,  395 => 190,  391 => 188,  372 => 187,  370 => 186,  364 => 182,  360 => 180,  356 => 178,  354 => 177,  335 => 160,  331 => 158,  327 => 156,  325 => 155,  314 => 146,  302 => 138,  292 => 130,  290 => 129,  285 => 126,  282 => 125,  275 => 122,  268 => 119,  265 => 118,  258 => 115,  256 => 114,  244 => 104,  232 => 96,  222 => 88,  220 => 87,  215 => 84,  212 => 83,  205 => 80,  198 => 77,  195 => 76,  188 => 73,  186 => 72,  166 => 55,  161 => 52,  158 => 51,  151 => 48,  144 => 45,  141 => 44,  134 => 41,  132 => 40,  117 => 27,  108 => 24,  103 => 21,  98 => 20,  89 => 17,  84 => 14,  80 => 13,  72 => 7,  70 => 6,  61 => 5,  50 => 3,  41 => 2,  11 => 1,);
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
    {# <div id=\"wrapper\"> #}

    <div id=\"page-wrapper\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">
                </h1>
                {% for flashMessage in app.session.flashbag.get('Profil') %}
                    <div id=\"message\" class=\"alert alert-success alert-dismissible\" role=\"alert\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span
                                    aria-hidden=\"true\">&times;</span></button>
                        {{ flashMessage }}
                    </div>
                {% endfor %}
                {% for flashMessage in app.session.flashbag.get('droitConsultation') %}
                    <div id=\"message\" class=\"alert alert-danger alert-dismissible\" role=\"alert\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span
                                    aria-hidden=\"true\">&times;</span></button>
                        <strong>Attention:</strong> {{ flashMessage }}
                    </div>
                {% endfor %}
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class=\"row\">
            <div class=\"col-lg-4 col-md-6\">
                <div class=\"panel panel-primary\">
                    <div class=\"panel-heading\">
                        <div class=\"row\">
                            <div class=\"col-xs-3\">
                                <i class=\"fa fa-users fa-5x\"></i>
                            </div>
                            <div class=\"col-xs-9 text-right\">
                                {% if app.user.typeuser.profil == 'Administrateur' %}
                                    <div class=\"huge\">{{ data.nbpatients }}</div>
                                    <div>Patients</div>
                                {% else %}
                                    {% if app.user.typeuser.profil != 'Laborantin' %}
                                        <div class=\"huge\">{{ data.nbpatientM }}</div>
                                        <div>Patients</div>
                                    {% else %}
                                        <div class=\"huge\">{{ data.nbpatientexam }}</div>
                                        <div>Patients</div>
                                    {% endif %}
                                {% endif %}
                            </div>
                        </div>
                    </div>
                    <a href=\"{{ path('indexpatient') }}\">
                        <div class=\"panel-footer\">
                            <span class=\"pull-left\"></span>
                            <span class=\"pull-right\"><i class=\"fa fa-arrow-circle-right\"></i></span>
                            <div class=\"clearfix\"></div>
                        </div>
                    </a>
                </div>
            </div>
            <div class=\"col-lg-4 col-md-6\">
                <div class=\"panel panel-yellow\">
                    <div class=\"panel-heading\">
                        <div class=\"row\">
                            <div class=\"col-xs-3\">
                                <i class=\"fa fa-user-md fa-5x\"></i>
                            </div>
                            <div class=\"col-xs-9 text-right\">
                                {% if app.user.typeuser.profil == 'Administrateur' %}
                                    <div class=\"huge\">{{ data.nbconsultations }}</div>
                                    <div>Consultations</div>
                                {% else %}
                                    {% if app.user.typeuser.profil != 'Laborantin' %}
                                        <div class=\"huge\">{{ data.nbconsultationM }}</div>
                                        <div>Consultations</div>
                                    {% else %}
                                        <div class=\"huge\">{{ data.nbexamens }}</div>
                                        <div>Examens</div>
                                    {% endif %}
                                {% endif %}
                            </div>
                        </div>
                    </div>
                    {% if app.user.typeuser.profil != 'Laborantin' %}
                        <a href=\"#\">
                            <div class=\"panel-footer\">
                                <span class=\"pull-left\"></span>
                                <span class=\"pull-right\"><i class=\"fa fa-arrow-circle-right\"></i></span>
                                <div class=\"clearfix\"></div>
                            </div>
                        </a>
                    {% else %}
                        <a href=\"{{ path('examen_lastest') }}\">
                            <div class=\"panel-footer\">
                                <span class=\"pull-left\"></span>
                                <span class=\"pull-right\"><i class=\"fa fa-arrow-circle-right\"></i></span>
                                <div class=\"clearfix\"></div>
                            </div>
                        </a>
                    {% endif %}
                </div>
            </div>
            <div class=\"col-lg-4 col-md-6\">
                <div class=\"panel panel-green\">
                    <div class=\"panel-heading\">
                        <div class=\"row\">
                            <div class=\"col-xs-3\">
                                <i class=\"fa fa-calendar fa-5x\"></i>
                            </div>
                            <div class=\"col-xs-9 text-right\">
                                {% if app.user.typeuser.profil == 'Administrateur' %}
                                    <div class=\"huge\">{{ data.nbrdv }}</div>
                                    <div>Mes rendez-vous</div>
                                {% else %}
                                    {% if app.user.typeuser.profil != 'Laborantin' %}
                                        <div class=\"huge\">{{ rdv | length }}</div>
                                        <div>Mes rendez-vous</div>
                                    {% else %}
                                        <div class=\"huge\">{{ data.nbexamattente }}</div>
                                        <div>Examens en attente</div>
                                    {% endif %}
                                {% endif %}
                            </div>
                        </div>
                    </div>
                    {% if app.user.typeuser.profil != 'Laborantin' %}
                        <a href=\"#\">
                            <div class=\"panel-footer\">
                                <span class=\"pull-left\"></span>
                                <span class=\"pull-right\"><i class=\"fa fa-arrow-circle-right\"></i></span>
                                <div class=\"clearfix\"></div>
                            </div>
                        </a>
                    {% else %}
                        <a href=\"{{ path('examen_index') }}\">
                            <div class=\"panel-footer\">
                                <span class=\"pull-left\"></span>
                                <span class=\"pull-right\"><i class=\"fa fa-arrow-circle-right\"></i></span>
                                <div class=\"clearfix\"></div>
                            </div>
                        </a>
                    {% endif %}
                </div>
            </div>
        </div>
        <!-- /.row -->
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <div class=\"panel panel-primary\">
                    <div class=\"panel-heading\">
                        <i class=\"fa fa-bar-chart-o fa-fw\"></i> Courbe d'évolution des
                        {% if app.user.typeuser.profil == 'Laborantin' %}
                            examens
                        {% else %}
                            consultations
                        {% endif %}
                        <div class=\"pull-right\">

                        </div>
                    </div>
                    <!-- /.panel-heading -->
                    <div class=\"panel-body\">
                        <div id=\"morris-area-chart-consultation\"></div>
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-8 -->
            <div class=\"col-lg-4\">
                <div class=\"panel panel-primary\">
                    <div class=\"panel-heading\">
                        <i class=\"fa fa-calendar fa-fw\"></i>
                        {% if app.user.typeuser.profil != 'Laborantin' %}
                            <strong> Vos prochains Rendez-vous </strong>
                        {% else %}
                            <strong> Examen en attente </strong>
                        {% endif %}
                    </div>
                    <!-- /.panel-heading -->
                    <div class=\"panel-body\">
                        <ul class=\"list-group\">
                            {% if app.user.typeuser.profil != 'Laborantin' %}
                                {% for rv in rdv %}
                                    <li class=\"list-group-item\">
                                        <i class=\"fa fa-hand-o-right\" aria-hidden=\"true\"></i>
                                        <a href=\"{{ path('detailpatient', {id: rv.patient.id}) }}\">
                                            {{ rv.dateRDV | date('j/M/Y H:i:s') }}
                                        </a>
                                    </li>
                                    {% set nbrdv = loop.length %}
                                {% else %}
                                    <li class=\"list-group-item\">
                                        Vous ne disposez pas de rendez-vous.
                                    </li>
                                {% endfor %}
                            {% else %}
                                {% for consult in data.groupexam %}
                                    <li class=\"list-group-item\">
                                        <i class=\"fa fa-hand-o-right\" aria-hidden=\"true\"></i>
                                        {{ consult[0]['prenom_patient'] }} {{ consult[0]['nom_patient'] }}
                                        <a href=\"{{ path('createexams', {numeroconsult: consult[0].numeroconsultation}) }}\"
                                           title=\"Examiner\">
                                            {% for typeexam in consult %}
                                                {{ typeexam.nomTypeExamen }}
                                                {% if not loop.last %}
                                                    -
                                                {% endif %}
                                            {% endfor %}
                                        </a>
                                    </li>
                                {% endfor %}
                                {% if data.groupexam == [] %}
                                    <li class=\"list-group-item\">
                                        Pas d'examen en attente
                                    </li>
                                {% endif %}
                            {% endif %}
                        </ul>
                    </div>
                    <!-- /.panel-body -->
                </div>
            </div>
            <!-- /.col-lg-4 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /#page-wrapper -->
    {# </div> #}
    <!-- /#page-wrapper -->

{% endblock %}
", "FPCMSBundle:template:index.html.twig", "/var/www/html/CMSFP/src/FP/CMSBundle/Resources/views/template/index.html.twig");
    }
}
