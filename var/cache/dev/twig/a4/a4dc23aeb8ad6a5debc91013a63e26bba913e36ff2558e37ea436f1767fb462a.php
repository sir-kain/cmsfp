<?php

/* FPCMSBundle::form_utils/bootstrap_4_layout.html.twig */
class __TwigTemplate_0de3624141d06e449c81ddca4c21aed208e26e6665cdbc69a57990bb592cd82e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_base_layout.html.twig", "FPCMSBundle::form_utils/bootstrap_4_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."bootstrap_base_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'money_widget' => array($this, 'block_money_widget'),
                'datetime_widget' => array($this, 'block_datetime_widget'),
                'date_widget' => array($this, 'block_date_widget'),
                'time_widget' => array($this, 'block_time_widget'),
                'dateinterval_widget' => array($this, 'block_dateinterval_widget'),
                'percent_widget' => array($this, 'block_percent_widget'),
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'widget_attributes' => array($this, 'block_widget_attributes'),
                'button_widget' => array($this, 'block_button_widget'),
                'checkbox_widget' => array($this, 'block_checkbox_widget'),
                'radio_widget' => array($this, 'block_radio_widget'),
                'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
                'form_label' => array($this, 'block_form_label'),
                'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
                'form_row' => array($this, 'block_form_row'),
                'form_errors' => array($this, 'block_form_errors'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ae20b8c1b7a219459c231f3f6754a275d6b3a95b0b7536fa03a12f011998e874 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae20b8c1b7a219459c231f3f6754a275d6b3a95b0b7536fa03a12f011998e874->enter($__internal_ae20b8c1b7a219459c231f3f6754a275d6b3a95b0b7536fa03a12f011998e874_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FPCMSBundle::form_utils/bootstrap_4_layout.html.twig"));

        $__internal_0ad77a3b07e40fad2d11e9839b69507b8fdb3e94bcf2eded5bc05cd2901ed052 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ad77a3b07e40fad2d11e9839b69507b8fdb3e94bcf2eded5bc05cd2901ed052->enter($__internal_0ad77a3b07e40fad2d11e9839b69507b8fdb3e94bcf2eded5bc05cd2901ed052_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FPCMSBundle::form_utils/bootstrap_4_layout.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('money_widget', $context, $blocks);
        // line 12
        echo "
";
        // line 13
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 20
        echo "
";
        // line 21
        $this->displayBlock('date_widget', $context, $blocks);
        // line 28
        echo "
";
        // line 29
        $this->displayBlock('time_widget', $context, $blocks);
        // line 36
        echo "
";
        // line 37
        $this->displayBlock('dateinterval_widget', $context, $blocks);
        // line 44
        echo "
";
        // line 45
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 52
        echo "
";
        // line 53
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 60
        $this->displayBlock('widget_attributes', $context, $blocks);
        // line 67
        $this->displayBlock('button_widget', $context, $blocks);
        // line 71
        echo "
";
        // line 72
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 83
        echo "
";
        // line 84
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 95
        echo "
";
        // line 96
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 120
        echo "
";
        // line 122
        echo "
";
        // line 123
        $this->displayBlock('form_label', $context, $blocks);
        // line 132
        echo "
";
        // line 133
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 158
        echo "
";
        // line 160
        echo "
";
        // line 161
        $this->displayBlock('form_row', $context, $blocks);
        // line 171
        echo "
";
        // line 173
        echo "
";
        // line 174
        $this->displayBlock('form_errors', $context, $blocks);
        
        $__internal_ae20b8c1b7a219459c231f3f6754a275d6b3a95b0b7536fa03a12f011998e874->leave($__internal_ae20b8c1b7a219459c231f3f6754a275d6b3a95b0b7536fa03a12f011998e874_prof);

        
        $__internal_0ad77a3b07e40fad2d11e9839b69507b8fdb3e94bcf2eded5bc05cd2901ed052->leave($__internal_0ad77a3b07e40fad2d11e9839b69507b8fdb3e94bcf2eded5bc05cd2901ed052_prof);

    }

    // line 5
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_df83214e93b80b97e87bb7e00e543fbc0dc5a2407f1ef683698d752cf0725a26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df83214e93b80b97e87bb7e00e543fbc0dc5a2407f1ef683698d752cf0725a26->enter($__internal_df83214e93b80b97e87bb7e00e543fbc0dc5a2407f1ef683698d752cf0725a26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_8b94e8b387bfe222c465748c529b701cae31c59277156387070cfb1a8cb9bb94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b94e8b387bfe222c465748c529b701cae31c59277156387070cfb1a8cb9bb94->enter($__internal_8b94e8b387bfe222c465748c529b701cae31c59277156387070cfb1a8cb9bb94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 6
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            // line 7
            echo "        ";
            $context["group_class"] = " form-control is-invalid";
            // line 8
            echo "        ";
            $context["valid"] = true;
            // line 9
            echo "    ";
        }
        // line 10
        $this->displayParentBlock("money_widget", $context, $blocks);
        
        $__internal_8b94e8b387bfe222c465748c529b701cae31c59277156387070cfb1a8cb9bb94->leave($__internal_8b94e8b387bfe222c465748c529b701cae31c59277156387070cfb1a8cb9bb94_prof);

        
        $__internal_df83214e93b80b97e87bb7e00e543fbc0dc5a2407f1ef683698d752cf0725a26->leave($__internal_df83214e93b80b97e87bb7e00e543fbc0dc5a2407f1ef683698d752cf0725a26_prof);

    }

    // line 13
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_0fff164201583010209475848fb709159bb77305ddb71a0e8cb51f98f7b5b17f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0fff164201583010209475848fb709159bb77305ddb71a0e8cb51f98f7b5b17f->enter($__internal_0fff164201583010209475848fb709159bb77305ddb71a0e8cb51f98f7b5b17f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_efe6f35ded5982ed9d04bba31299f5d4bfee33932c16d8fe11475b0964a03aaf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efe6f35ded5982ed9d04bba31299f5d4bfee33932c16d8fe11475b0964a03aaf->enter($__internal_efe6f35ded5982ed9d04bba31299f5d4bfee33932c16d8fe11475b0964a03aaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 14
        if (((($context["widget"] ?? $this->getContext($context, "widget")) != "single_text") &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            // line 15
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control is-invalid"))));
            // line 16
            $context["valid"] = true;
        }
        // line 18
        $this->displayParentBlock("datetime_widget", $context, $blocks);
        
        $__internal_efe6f35ded5982ed9d04bba31299f5d4bfee33932c16d8fe11475b0964a03aaf->leave($__internal_efe6f35ded5982ed9d04bba31299f5d4bfee33932c16d8fe11475b0964a03aaf_prof);

        
        $__internal_0fff164201583010209475848fb709159bb77305ddb71a0e8cb51f98f7b5b17f->leave($__internal_0fff164201583010209475848fb709159bb77305ddb71a0e8cb51f98f7b5b17f_prof);

    }

    // line 21
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_bd136a2e35d03680e2bb9cf1d085b7dad6f14c59964cb9ad7b07f784dd11aecb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd136a2e35d03680e2bb9cf1d085b7dad6f14c59964cb9ad7b07f784dd11aecb->enter($__internal_bd136a2e35d03680e2bb9cf1d085b7dad6f14c59964cb9ad7b07f784dd11aecb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_7df215603e713c50f2682a5adcea12cecd7a8df4663b3d202e2e52ccb9de81c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7df215603e713c50f2682a5adcea12cecd7a8df4663b3d202e2e52ccb9de81c0->enter($__internal_7df215603e713c50f2682a5adcea12cecd7a8df4663b3d202e2e52ccb9de81c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 22
        if (((($context["widget"] ?? $this->getContext($context, "widget")) != "single_text") &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            // line 23
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control is-invalid"))));
            // line 24
            $context["valid"] = true;
        }
        // line 26
        $this->displayParentBlock("date_widget", $context, $blocks);
        
        $__internal_7df215603e713c50f2682a5adcea12cecd7a8df4663b3d202e2e52ccb9de81c0->leave($__internal_7df215603e713c50f2682a5adcea12cecd7a8df4663b3d202e2e52ccb9de81c0_prof);

        
        $__internal_bd136a2e35d03680e2bb9cf1d085b7dad6f14c59964cb9ad7b07f784dd11aecb->leave($__internal_bd136a2e35d03680e2bb9cf1d085b7dad6f14c59964cb9ad7b07f784dd11aecb_prof);

    }

    // line 29
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_7c3a9e6706062879b3f5603b3a1b1b8a42c9c9c1b3488cfbcb5b103b8412c3a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c3a9e6706062879b3f5603b3a1b1b8a42c9c9c1b3488cfbcb5b103b8412c3a7->enter($__internal_7c3a9e6706062879b3f5603b3a1b1b8a42c9c9c1b3488cfbcb5b103b8412c3a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_778b16b16f192831aaaab7802984b84531ce2c536278570b86c7baedcf4560a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_778b16b16f192831aaaab7802984b84531ce2c536278570b86c7baedcf4560a4->enter($__internal_778b16b16f192831aaaab7802984b84531ce2c536278570b86c7baedcf4560a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 30
        if (((($context["widget"] ?? $this->getContext($context, "widget")) != "single_text") &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            // line 31
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control is-invalid"))));
            // line 32
            $context["valid"] = true;
        }
        // line 34
        $this->displayParentBlock("time_widget", $context, $blocks);
        
        $__internal_778b16b16f192831aaaab7802984b84531ce2c536278570b86c7baedcf4560a4->leave($__internal_778b16b16f192831aaaab7802984b84531ce2c536278570b86c7baedcf4560a4_prof);

        
        $__internal_7c3a9e6706062879b3f5603b3a1b1b8a42c9c9c1b3488cfbcb5b103b8412c3a7->leave($__internal_7c3a9e6706062879b3f5603b3a1b1b8a42c9c9c1b3488cfbcb5b103b8412c3a7_prof);

    }

    // line 37
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_298c83e566d3a6769c1693822a0baf34a2b1741ea12f603a921800a6784c762e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_298c83e566d3a6769c1693822a0baf34a2b1741ea12f603a921800a6784c762e->enter($__internal_298c83e566d3a6769c1693822a0baf34a2b1741ea12f603a921800a6784c762e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_3d2ccaeb07a4d27f4f08ec5cedaf06bfe27fcfe62476fb15ac8d9c70be7f752a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d2ccaeb07a4d27f4f08ec5cedaf06bfe27fcfe62476fb15ac8d9c70be7f752a->enter($__internal_3d2ccaeb07a4d27f4f08ec5cedaf06bfe27fcfe62476fb15ac8d9c70be7f752a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        // line 38
        if (((($context["widget"] ?? $this->getContext($context, "widget")) != "single_text") &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            // line 39
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control is-invalid"))));
            // line 40
            $context["valid"] = true;
        }
        // line 42
        $this->displayParentBlock("dateinterval_widget", $context, $blocks);
        
        $__internal_3d2ccaeb07a4d27f4f08ec5cedaf06bfe27fcfe62476fb15ac8d9c70be7f752a->leave($__internal_3d2ccaeb07a4d27f4f08ec5cedaf06bfe27fcfe62476fb15ac8d9c70be7f752a_prof);

        
        $__internal_298c83e566d3a6769c1693822a0baf34a2b1741ea12f603a921800a6784c762e->leave($__internal_298c83e566d3a6769c1693822a0baf34a2b1741ea12f603a921800a6784c762e_prof);

    }

    // line 45
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_3c6728e23465c3f0b52577bcbf672a657d3d89a9e1290837807bd0de5ca7f713 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c6728e23465c3f0b52577bcbf672a657d3d89a9e1290837807bd0de5ca7f713->enter($__internal_3c6728e23465c3f0b52577bcbf672a657d3d89a9e1290837807bd0de5ca7f713_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_a698750b3de938c43ab76d279d1f55f6be9c1c1a99bada15aff820fc48573cda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a698750b3de938c43ab76d279d1f55f6be9c1c1a99bada15aff820fc48573cda->enter($__internal_a698750b3de938c43ab76d279d1f55f6be9c1c1a99bada15aff820fc48573cda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 46
        echo "<div class=\"input-group";
        echo (( !($context["valid"] ?? $this->getContext($context, "valid"))) ? (" form-control is-invalid") : (""));
        echo "\">
        ";
        // line 47
        $context["valid"] = true;
        // line 48
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 49
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_a698750b3de938c43ab76d279d1f55f6be9c1c1a99bada15aff820fc48573cda->leave($__internal_a698750b3de938c43ab76d279d1f55f6be9c1c1a99bada15aff820fc48573cda_prof);

        
        $__internal_3c6728e23465c3f0b52577bcbf672a657d3d89a9e1290837807bd0de5ca7f713->leave($__internal_3c6728e23465c3f0b52577bcbf672a657d3d89a9e1290837807bd0de5ca7f713_prof);

    }

    // line 53
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_73bdcf720367d7298324b6781f3c7470ef91844a159eeeadf108a4e1c64c09f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73bdcf720367d7298324b6781f3c7470ef91844a159eeeadf108a4e1c64c09f0->enter($__internal_73bdcf720367d7298324b6781f3c7470ef91844a159eeeadf108a4e1c64c09f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_3ccf423f8126329682207739a8f31a446b84c58222db037bf9bd41c70c29f55e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ccf423f8126329682207739a8f31a446b84c58222db037bf9bd41c70c29f55e->enter($__internal_3ccf423f8126329682207739a8f31a446b84c58222db037bf9bd41c70c29f55e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 54
        if (( !array_key_exists("type", $context) || (($context["type"] ?? $this->getContext($context, "type")) != "hidden"))) {
            // line 55
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter((((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control") . (((((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "")) : ("")) == "file")) ? ("-file") : (""))))));
        }
        // line 57
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_3ccf423f8126329682207739a8f31a446b84c58222db037bf9bd41c70c29f55e->leave($__internal_3ccf423f8126329682207739a8f31a446b84c58222db037bf9bd41c70c29f55e_prof);

        
        $__internal_73bdcf720367d7298324b6781f3c7470ef91844a159eeeadf108a4e1c64c09f0->leave($__internal_73bdcf720367d7298324b6781f3c7470ef91844a159eeeadf108a4e1c64c09f0_prof);

    }

    // line 60
    public function block_widget_attributes($context, array $blocks = array())
    {
        $__internal_55f3f7acd9bbfbeabed0fd7b48741ac64acaf60b15ac679a6550448efa4c2ace = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55f3f7acd9bbfbeabed0fd7b48741ac64acaf60b15ac679a6550448efa4c2ace->enter($__internal_55f3f7acd9bbfbeabed0fd7b48741ac64acaf60b15ac679a6550448efa4c2ace_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_attributes"));

        $__internal_7298336df6821f5db2d5a32ff243e4e40511f17bb0755e5b7dea09359326a8da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7298336df6821f5db2d5a32ff243e4e40511f17bb0755e5b7dea09359326a8da->enter($__internal_7298336df6821f5db2d5a32ff243e4e40511f17bb0755e5b7dea09359326a8da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_attributes"));

        // line 61
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            // line 62
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control is-invalid"))));
            // line 63
            echo "    ";
        }
        // line 64
        $this->displayParentBlock("widget_attributes", $context, $blocks);
        
        $__internal_7298336df6821f5db2d5a32ff243e4e40511f17bb0755e5b7dea09359326a8da->leave($__internal_7298336df6821f5db2d5a32ff243e4e40511f17bb0755e5b7dea09359326a8da_prof);

        
        $__internal_55f3f7acd9bbfbeabed0fd7b48741ac64acaf60b15ac679a6550448efa4c2ace->leave($__internal_55f3f7acd9bbfbeabed0fd7b48741ac64acaf60b15ac679a6550448efa4c2ace_prof);

    }

    // line 67
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_326e4781f9d7026f6328120ff423660685d57e30ef3ca23cec30019e3928e683 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_326e4781f9d7026f6328120ff423660685d57e30ef3ca23cec30019e3928e683->enter($__internal_326e4781f9d7026f6328120ff423660685d57e30ef3ca23cec30019e3928e683_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_226724a9fa46211a42a4ed162b3e40b23c35f5f6585ad6a4c294a79bfa2b2a55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_226724a9fa46211a42a4ed162b3e40b23c35f5f6585ad6a4c294a79bfa2b2a55->enter($__internal_226724a9fa46211a42a4ed162b3e40b23c35f5f6585ad6a4c294a79bfa2b2a55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 68
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "btn-secondary")) : ("btn-secondary")) . " btn"))));
        // line 69
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_226724a9fa46211a42a4ed162b3e40b23c35f5f6585ad6a4c294a79bfa2b2a55->leave($__internal_226724a9fa46211a42a4ed162b3e40b23c35f5f6585ad6a4c294a79bfa2b2a55_prof);

        
        $__internal_326e4781f9d7026f6328120ff423660685d57e30ef3ca23cec30019e3928e683->leave($__internal_326e4781f9d7026f6328120ff423660685d57e30ef3ca23cec30019e3928e683_prof);

    }

    // line 72
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_9291729e5d3b47a70873a7004ac592252a6d12c2d8afb5ce3565ab0fb2e9dcc5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9291729e5d3b47a70873a7004ac592252a6d12c2d8afb5ce3565ab0fb2e9dcc5->enter($__internal_9291729e5d3b47a70873a7004ac592252a6d12c2d8afb5ce3565ab0fb2e9dcc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_2a72c5c3016f1b51eab80f3342763cbd7f60a74d1e7634d7f4cb0263bce88339 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a72c5c3016f1b51eab80f3342763cbd7f60a74d1e7634d7f4cb0263bce88339->enter($__internal_2a72c5c3016f1b51eab80f3342763cbd7f60a74d1e7634d7f4cb0263bce88339_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 73
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 74
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-check-input"))));
        // line 75
        if (twig_in_filter("checkbox-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 76
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 78
            echo "<div class=\"form-check";
            echo (( !($context["valid"] ?? $this->getContext($context, "valid"))) ? (" form-control is-invalid") : (""));
            echo "\">";
            // line 79
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 80
            echo "</div>";
        }
        
        $__internal_2a72c5c3016f1b51eab80f3342763cbd7f60a74d1e7634d7f4cb0263bce88339->leave($__internal_2a72c5c3016f1b51eab80f3342763cbd7f60a74d1e7634d7f4cb0263bce88339_prof);

        
        $__internal_9291729e5d3b47a70873a7004ac592252a6d12c2d8afb5ce3565ab0fb2e9dcc5->leave($__internal_9291729e5d3b47a70873a7004ac592252a6d12c2d8afb5ce3565ab0fb2e9dcc5_prof);

    }

    // line 84
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_f263e657035c6e07a2c7bf5ad0a021f74b0a76323cf976bcd797e88343ebee25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f263e657035c6e07a2c7bf5ad0a021f74b0a76323cf976bcd797e88343ebee25->enter($__internal_f263e657035c6e07a2c7bf5ad0a021f74b0a76323cf976bcd797e88343ebee25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_35d4e311c3f664ca166a1acf0e232bdb34d6e88b51394435351183e3b7456080 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35d4e311c3f664ca166a1acf0e232bdb34d6e88b51394435351183e3b7456080->enter($__internal_35d4e311c3f664ca166a1acf0e232bdb34d6e88b51394435351183e3b7456080_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 85
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 86
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-check-input"))));
        // line 87
        if (twig_in_filter("radio-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 88
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 90
            echo "<div class=\"form-check";
            echo (( !($context["valid"] ?? $this->getContext($context, "valid"))) ? (" form-control is-invalid") : (""));
            echo "\">";
            // line 91
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 92
            echo "</div>";
        }
        
        $__internal_35d4e311c3f664ca166a1acf0e232bdb34d6e88b51394435351183e3b7456080->leave($__internal_35d4e311c3f664ca166a1acf0e232bdb34d6e88b51394435351183e3b7456080_prof);

        
        $__internal_f263e657035c6e07a2c7bf5ad0a021f74b0a76323cf976bcd797e88343ebee25->leave($__internal_f263e657035c6e07a2c7bf5ad0a021f74b0a76323cf976bcd797e88343ebee25_prof);

    }

    // line 96
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_ecec016ca77d0f4b433ff56951e5e2277154d1020f751ad76065e1cadace6f80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ecec016ca77d0f4b433ff56951e5e2277154d1020f751ad76065e1cadace6f80->enter($__internal_ecec016ca77d0f4b433ff56951e5e2277154d1020f751ad76065e1cadace6f80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_00846f6ae170718c0678df094f9286bc27c0197d521198ba357116dcd14ee823 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00846f6ae170718c0678df094f9286bc27c0197d521198ba357116dcd14ee823->enter($__internal_00846f6ae170718c0678df094f9286bc27c0197d521198ba357116dcd14ee823_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 97
        if (twig_in_filter("-inline", (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) {
            // line 98
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 99
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 100
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 101
($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain")), "valid" =>                 // line 102
($context["valid"] ?? $this->getContext($context, "valid"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 106
            if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
                // line 107
                $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control is-invalid"))));
            }
            // line 109
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 110
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 111
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 112
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 113
($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain")), "valid" => true));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 117
            echo "</div>";
        }
        
        $__internal_00846f6ae170718c0678df094f9286bc27c0197d521198ba357116dcd14ee823->leave($__internal_00846f6ae170718c0678df094f9286bc27c0197d521198ba357116dcd14ee823_prof);

        
        $__internal_ecec016ca77d0f4b433ff56951e5e2277154d1020f751ad76065e1cadace6f80->leave($__internal_ecec016ca77d0f4b433ff56951e5e2277154d1020f751ad76065e1cadace6f80_prof);

    }

    // line 123
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_9d81bc9c920f858b6e155b88fb3a4d1bee393087a0a08b141833918703e62974 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d81bc9c920f858b6e155b88fb3a4d1bee393087a0a08b141833918703e62974->enter($__internal_9d81bc9c920f858b6e155b88fb3a4d1bee393087a0a08b141833918703e62974_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_1ba622daf9b952bb2b0fa1187a1bdb3599b0b4eb9719260f03ed6428ff9a407b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ba622daf9b952bb2b0fa1187a1bdb3599b0b4eb9719260f03ed6428ff9a407b->enter($__internal_1ba622daf9b952bb2b0fa1187a1bdb3599b0b4eb9719260f03ed6428ff9a407b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 124
        if ((array_key_exists("compound", $context) && ($context["compound"] ?? $this->getContext($context, "compound")))) {
            // line 125
            $context["element"] = "legend";
            // line 126
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " col-form-legend"))));
        } else {
            // line 128
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " form-control-label"))));
        }
        // line 130
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_1ba622daf9b952bb2b0fa1187a1bdb3599b0b4eb9719260f03ed6428ff9a407b->leave($__internal_1ba622daf9b952bb2b0fa1187a1bdb3599b0b4eb9719260f03ed6428ff9a407b_prof);

        
        $__internal_9d81bc9c920f858b6e155b88fb3a4d1bee393087a0a08b141833918703e62974->leave($__internal_9d81bc9c920f858b6e155b88fb3a4d1bee393087a0a08b141833918703e62974_prof);

    }

    // line 133
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_5620d2a6b7d8cbd23cbd29cd08cfc102db2d9235bdff0b0f55d0176b84456f2f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5620d2a6b7d8cbd23cbd29cd08cfc102db2d9235bdff0b0f55d0176b84456f2f->enter($__internal_5620d2a6b7d8cbd23cbd29cd08cfc102db2d9235bdff0b0f55d0176b84456f2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_8f5cfecb0889fc131638de1203b6a04b2b612fe1d221607c391bcd59849a334e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f5cfecb0889fc131638de1203b6a04b2b612fe1d221607c391bcd59849a334e->enter($__internal_8f5cfecb0889fc131638de1203b6a04b2b612fe1d221607c391bcd59849a334e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 135
        if (array_key_exists("widget", $context)) {
            // line 136
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " form-check-label"))));
            // line 137
            if (($context["required"] ?? $this->getContext($context, "required"))) {
                // line 138
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
            }
            // line 140
            if (array_key_exists("parent_label_class", $context)) {
                // line 141
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") . ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class"))))));
            }
            // line 143
            if (( !(($context["label"] ?? $this->getContext($context, "label")) === false) && twig_test_empty(($context["label"] ?? $this->getContext($context, "label"))))) {
                // line 144
                if ( !twig_test_empty(($context["label_format"] ?? $this->getContext($context, "label_format")))) {
                    // line 145
                    $context["label"] = twig_replace_filter(($context["label_format"] ?? $this->getContext($context, "label_format")), array("%name%" =>                     // line 146
($context["name"] ?? $this->getContext($context, "name")), "%id%" =>                     // line 147
($context["id"] ?? $this->getContext($context, "id"))));
                } else {
                    // line 150
                    $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(($context["name"] ?? $this->getContext($context, "name")));
                }
            }
            // line 153
            echo "<label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["label_attr"] ?? $this->getContext($context, "label_attr")));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            // line 154
            echo ($context["widget"] ?? $this->getContext($context, "widget"));
            echo " ";
            echo twig_escape_filter($this->env, (( !(($context["label"] ?? $this->getContext($context, "label")) === false)) ? ((((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["label"] ?? $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain")))))) : ("")), "html", null, true);
            // line 155
            echo "</label>";
        }
        
        $__internal_8f5cfecb0889fc131638de1203b6a04b2b612fe1d221607c391bcd59849a334e->leave($__internal_8f5cfecb0889fc131638de1203b6a04b2b612fe1d221607c391bcd59849a334e_prof);

        
        $__internal_5620d2a6b7d8cbd23cbd29cd08cfc102db2d9235bdff0b0f55d0176b84456f2f->leave($__internal_5620d2a6b7d8cbd23cbd29cd08cfc102db2d9235bdff0b0f55d0176b84456f2f_prof);

    }

    // line 161
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_c7cca499d6d673e5a0ce84fd9fd919028f84718314d1bf84ae0b3bd40fc70b6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7cca499d6d673e5a0ce84fd9fd919028f84718314d1bf84ae0b3bd40fc70b6e->enter($__internal_c7cca499d6d673e5a0ce84fd9fd919028f84718314d1bf84ae0b3bd40fc70b6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_c1f5fcb35a338d40a97648f2406e57a14e66a5880a1e51bd49160ddcbb6e0eef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1f5fcb35a338d40a97648f2406e57a14e66a5880a1e51bd49160ddcbb6e0eef->enter($__internal_c1f5fcb35a338d40a97648f2406e57a14e66a5880a1e51bd49160ddcbb6e0eef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 162
        if ((array_key_exists("compound", $context) && ($context["compound"] ?? $this->getContext($context, "compound")))) {
            // line 163
            $context["element"] = "fieldset";
        }
        // line 165
        echo "<";
        echo twig_escape_filter($this->env, ((array_key_exists("element", $context)) ? (_twig_default_filter(($context["element"] ?? $this->getContext($context, "element")), "div")) : ("div")), "html", null, true);
        echo " class=\"form-group\">";
        // line 166
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 167
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 168
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 169
        echo "</";
        echo twig_escape_filter($this->env, ((array_key_exists("element", $context)) ? (_twig_default_filter(($context["element"] ?? $this->getContext($context, "element")), "div")) : ("div")), "html", null, true);
        echo ">";
        
        $__internal_c1f5fcb35a338d40a97648f2406e57a14e66a5880a1e51bd49160ddcbb6e0eef->leave($__internal_c1f5fcb35a338d40a97648f2406e57a14e66a5880a1e51bd49160ddcbb6e0eef_prof);

        
        $__internal_c7cca499d6d673e5a0ce84fd9fd919028f84718314d1bf84ae0b3bd40fc70b6e->leave($__internal_c7cca499d6d673e5a0ce84fd9fd919028f84718314d1bf84ae0b3bd40fc70b6e_prof);

    }

    // line 174
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_e58b1d52dcacea456b2281564814655eda1abec2660b15915742f275b1f2fdd3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e58b1d52dcacea456b2281564814655eda1abec2660b15915742f275b1f2fdd3->enter($__internal_e58b1d52dcacea456b2281564814655eda1abec2660b15915742f275b1f2fdd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_3a7dfc52458a69ba47fe5bc4ab1f3002775e51e67aebdd6cda24d6a2dc747b03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a7dfc52458a69ba47fe5bc4ab1f3002775e51e67aebdd6cda24d6a2dc747b03->enter($__internal_3a7dfc52458a69ba47fe5bc4ab1f3002775e51e67aebdd6cda24d6a2dc747b03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 175
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 176
            echo "<div class=\"";
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? $this->getContext($context, "form")))) {
                echo "invalid-feedback";
            } else {
                echo "alert alert-danger";
            }
            echo "\">
        <ul class=\"list-unstyled mb-0\">";
            // line 178
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 179
                echo "<li class=\"text-danger\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 181
            echo "</ul>
    </div>";
        }
        
        $__internal_3a7dfc52458a69ba47fe5bc4ab1f3002775e51e67aebdd6cda24d6a2dc747b03->leave($__internal_3a7dfc52458a69ba47fe5bc4ab1f3002775e51e67aebdd6cda24d6a2dc747b03_prof);

        
        $__internal_e58b1d52dcacea456b2281564814655eda1abec2660b15915742f275b1f2fdd3->leave($__internal_e58b1d52dcacea456b2281564814655eda1abec2660b15915742f275b1f2fdd3_prof);

    }

    public function getTemplateName()
    {
        return "FPCMSBundle::form_utils/bootstrap_4_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  672 => 181,  664 => 179,  660 => 178,  651 => 176,  649 => 175,  640 => 174,  628 => 169,  626 => 168,  624 => 167,  622 => 166,  618 => 165,  615 => 163,  613 => 162,  604 => 161,  593 => 155,  589 => 154,  574 => 153,  570 => 150,  567 => 147,  566 => 146,  565 => 145,  563 => 144,  561 => 143,  558 => 141,  556 => 140,  553 => 138,  551 => 137,  549 => 136,  547 => 135,  538 => 133,  528 => 130,  525 => 128,  522 => 126,  520 => 125,  518 => 124,  509 => 123,  498 => 117,  492 => 113,  491 => 112,  490 => 111,  486 => 110,  482 => 109,  479 => 107,  477 => 106,  470 => 102,  469 => 101,  468 => 100,  467 => 99,  463 => 98,  461 => 97,  452 => 96,  441 => 92,  439 => 91,  435 => 90,  432 => 88,  430 => 87,  428 => 86,  426 => 85,  417 => 84,  406 => 80,  404 => 79,  400 => 78,  397 => 76,  395 => 75,  393 => 74,  391 => 73,  382 => 72,  372 => 69,  370 => 68,  361 => 67,  351 => 64,  348 => 63,  345 => 62,  343 => 61,  334 => 60,  324 => 57,  321 => 55,  319 => 54,  310 => 53,  299 => 49,  297 => 48,  295 => 47,  290 => 46,  281 => 45,  271 => 42,  268 => 40,  266 => 39,  264 => 38,  255 => 37,  245 => 34,  242 => 32,  240 => 31,  238 => 30,  229 => 29,  219 => 26,  216 => 24,  214 => 23,  212 => 22,  203 => 21,  193 => 18,  190 => 16,  188 => 15,  186 => 14,  177 => 13,  167 => 10,  164 => 9,  161 => 8,  158 => 7,  156 => 6,  147 => 5,  137 => 174,  134 => 173,  131 => 171,  129 => 161,  126 => 160,  123 => 158,  121 => 133,  118 => 132,  116 => 123,  113 => 122,  110 => 120,  108 => 96,  105 => 95,  103 => 84,  100 => 83,  98 => 72,  95 => 71,  93 => 67,  91 => 60,  89 => 53,  86 => 52,  84 => 45,  81 => 44,  79 => 37,  76 => 36,  74 => 29,  71 => 28,  69 => 21,  66 => 20,  64 => 13,  61 => 12,  59 => 5,  56 => 4,  53 => 2,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"bootstrap_base_layout.html.twig\" %}

{# Widgets #}

{% block money_widget -%}
    {% if not valid %}
        {% set group_class = ' form-control is-invalid' %}
        {% set valid = true %}
    {% endif %}
    {{- parent() -}}
{%- endblock money_widget %}

{% block datetime_widget -%}
    {%- if widget != 'single_text' and not valid -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control is-invalid')|trim}) -%}
        {% set valid = true %}
    {%- endif -%}
    {{- parent() -}}
{%- endblock datetime_widget %}

{% block date_widget -%}
    {%- if widget != 'single_text' and not valid -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control is-invalid')|trim}) -%}
        {% set valid = true %}
    {%- endif -%}
    {{- parent() -}}
{%- endblock date_widget %}

{% block time_widget -%}
    {%- if widget != 'single_text' and not valid -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control is-invalid')|trim}) -%}
        {% set valid = true %}
    {%- endif -%}
    {{- parent() -}}
{%- endblock time_widget %}

{% block dateinterval_widget -%}
    {%- if widget != 'single_text' and not valid -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control is-invalid')|trim}) -%}
        {% set valid = true %}
    {%- endif -%}
    {{- parent() -}}
{%- endblock dateinterval_widget %}

{% block percent_widget -%}
    <div class=\"input-group{{ not valid ? ' form-control is-invalid' }}\">
        {% set valid = true %}
        {{- block('form_widget_simple') -}}
        <span class=\"input-group-addon\">%</span>
    </div>
{%- endblock percent_widget %}

{% block form_widget_simple -%}
    {% if type is not defined or type != 'hidden' %}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control' ~ (type|default('') == 'file' ? '-file' : ''))|trim}) -%}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{%- block widget_attributes -%}
    {%- if not valid %}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control is-invalid')|trim}) %}
    {% endif -%}
    {{ parent() }}
{%- endblock widget_attributes -%}

{% block button_widget -%}
    {%- set attr = attr|merge({class: (attr.class|default('btn-secondary') ~ ' btn')|trim}) -%}
    {{- parent() -}}
{%- endblock button_widget %}

{% block checkbox_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-check-input')|trim}) -%}
    {% if 'checkbox-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"form-check{{ not valid ? ' form-control is-invalid' }}\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif -%}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-check-input')|trim}) -%}
    {%- if 'radio-inline' in parent_label_class -%}
        {{- form_label(form, null, { widget: parent() }) -}}
    {%- else -%}
        <div class=\"form-check{{ not valid ? ' form-control is-invalid' }}\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif -%}
{%- endblock radio_widget %}

{% block choice_widget_expanded -%}
    {% if '-inline' in label_attr.class|default('') -%}
        {%- for child in form %}
            {{- form_widget(child, {
                parent_label_class: label_attr.class|default(''),
                translation_domain: choice_translation_domain,
                valid: valid,
            }) -}}
        {% endfor -%}
    {%- else -%}
        {%- if not valid -%}
            {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control is-invalid')|trim}) %}
        {%- endif -%}
        <div {{ block('widget_container_attributes') }}>
            {%- for child in form %}
                {{- form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                    translation_domain: choice_translation_domain,
                    valid: true,
                }) -}}
            {% endfor -%}
        </div>
    {%- endif %}
{%- endblock choice_widget_expanded %}

{# Labels #}

{% block form_label -%}
    {%- if compound is defined and compound -%}
        {%- set element = 'legend' -%}
        {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' col-form-legend')|trim}) -%}
    {%- else -%}
        {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' form-control-label')|trim}) -%}
    {%- endif -%}
    {{- parent() -}}
{%- endblock form_label %}

{% block checkbox_radio_label -%}
    {#- Do not display the label if widget is not defined in order to prevent double label rendering -#}
    {%- if widget is defined -%}
        {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' form-check-label')|trim}) -%}
        {%- if required -%}
            {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) -%}
        {%- endif -%}
        {%- if parent_label_class is defined -%}
            {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ parent_label_class)|trim}) -%}
        {%- endif -%}
        {%- if label is not same as(false) and label is empty -%}
            {%- if label_format is not empty -%}
                {%- set label = label_format|replace({
                    '%name%': name,
                    '%id%': id,
                }) -%}
            {%- else -%}
                {%- set label = name|humanize -%}
            {%- endif -%}
        {%- endif -%}
        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
            {{- widget|raw }} {{ label is not same as(false) ? (translation_domain is same as(false) ? label : label|trans({}, translation_domain)) -}}
        </label>
    {%- endif -%}
{%- endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    {%- if compound is defined and compound -%}
        {%- set element = 'fieldset' -%}
    {%- endif -%}
    <{{ element|default('div') }} class=\"form-group\">
        {{- form_label(form) -}}
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </{{ element|default('div') }}>
{%- endblock form_row %}

{# Errors #}

{% block form_errors -%}
    {%- if errors|length > 0 -%}
    <div class=\"{% if form is not rootform %}invalid-feedback{% else %}alert alert-danger{% endif %}\">
        <ul class=\"list-unstyled mb-0\">
            {%- for error in errors -%}
                <li class=\"text-danger\">{{ error.message }}</li>
            {%- endfor -%}
        </ul>
    </div>
    {%- endif %}
{%- endblock form_errors %}
", "FPCMSBundle::form_utils/bootstrap_4_layout.html.twig", "/var/www/html/CMSFP/src/FP/CMSBundle/Resources/views/form_utils/bootstrap_4_layout.html.twig");
    }
}
