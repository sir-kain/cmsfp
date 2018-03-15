<?php

/* FPCMSBundle:patient:ajoutpatient.html.twig */
class __TwigTemplate_6a71577918466310c25fae6122987ca94b2a4db08f627b4c78d0c5be71595d62 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "FPCMSBundle:patient:ajoutpatient.html.twig", 1);
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
        $__internal_f6913608217b2dc9dc963027a1c3a0251a11bc657756d81cb28841dd6f57c34e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6913608217b2dc9dc963027a1c3a0251a11bc657756d81cb28841dd6f57c34e->enter($__internal_f6913608217b2dc9dc963027a1c3a0251a11bc657756d81cb28841dd6f57c34e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FPCMSBundle:patient:ajoutpatient.html.twig"));

        $__internal_d6d81315109f2bd58943a779f7a53f13347fd000042077569ca01a5a30f74417 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6d81315109f2bd58943a779f7a53f13347fd000042077569ca01a5a30f74417->enter($__internal_d6d81315109f2bd58943a779f7a53f13347fd000042077569ca01a5a30f74417_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FPCMSBundle:patient:ajoutpatient.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f6913608217b2dc9dc963027a1c3a0251a11bc657756d81cb28841dd6f57c34e->leave($__internal_f6913608217b2dc9dc963027a1c3a0251a11bc657756d81cb28841dd6f57c34e_prof);

        
        $__internal_d6d81315109f2bd58943a779f7a53f13347fd000042077569ca01a5a30f74417->leave($__internal_d6d81315109f2bd58943a779f7a53f13347fd000042077569ca01a5a30f74417_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_c2530763495f3ba66a34e125f1c43ed9b1106bb363644df0131fd1da921bb89b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2530763495f3ba66a34e125f1c43ed9b1106bb363644df0131fd1da921bb89b->enter($__internal_c2530763495f3ba66a34e125f1c43ed9b1106bb363644df0131fd1da921bb89b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_50968ba3ca298115d15c7abbb2227c436f5e8e9e5f19b092a6326433178fa9b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50968ba3ca298115d15c7abbb2227c436f5e8e9e5f19b092a6326433178fa9b1->enter($__internal_50968ba3ca298115d15c7abbb2227c436f5e8e9e5f19b092a6326433178fa9b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        echo " 

        ";
        // line 5
        $this->loadTemplate("FPCMSBundle:layout:header.html.twig", "FPCMSBundle:patient:ajoutpatient.html.twig", 5)->display($context);
        
        $__internal_50968ba3ca298115d15c7abbb2227c436f5e8e9e5f19b092a6326433178fa9b1->leave($__internal_50968ba3ca298115d15c7abbb2227c436f5e8e9e5f19b092a6326433178fa9b1_prof);

        
        $__internal_c2530763495f3ba66a34e125f1c43ed9b1106bb363644df0131fd1da921bb89b->leave($__internal_c2530763495f3ba66a34e125f1c43ed9b1106bb363644df0131fd1da921bb89b_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_f62bbe18020fdb9896a0417f70d561e894a074672dee630305cc0122f6597b20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f62bbe18020fdb9896a0417f70d561e894a074672dee630305cc0122f6597b20->enter($__internal_f62bbe18020fdb9896a0417f70d561e894a074672dee630305cc0122f6597b20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c63f673c6e9fcde9bcc35b95a48835307099c69e296d31ba4fa0d7e220433b0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c63f673c6e9fcde9bcc35b95a48835307099c69e296d31ba4fa0d7e220433b0a->enter($__internal_c63f673c6e9fcde9bcc35b95a48835307099c69e296d31ba4fa0d7e220433b0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
        <div id=\"page-wrapper\">

            ";
        // line 11
        echo twig_include($this->env, $context, "FPCMSBundle:form_utils:form_patient.html.twig", array("form" =>         // line 12
($context["form"] ?? $this->getContext($context, "form")), "button_label" => "Enregistrer", "nouveau_patient" => true));
        // line 15
        echo "
        </div>
        <!-- /#page-wrapper -->

";
        
        $__internal_c63f673c6e9fcde9bcc35b95a48835307099c69e296d31ba4fa0d7e220433b0a->leave($__internal_c63f673c6e9fcde9bcc35b95a48835307099c69e296d31ba4fa0d7e220433b0a_prof);

        
        $__internal_f62bbe18020fdb9896a0417f70d561e894a074672dee630305cc0122f6597b20->leave($__internal_f62bbe18020fdb9896a0417f70d561e894a074672dee630305cc0122f6597b20_prof);

    }

    public function getTemplateName()
    {
        return "FPCMSBundle:patient:ajoutpatient.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 15,  78 => 12,  77 => 11,  72 => 8,  63 => 7,  53 => 5,  41 => 3,  11 => 1,);
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

        <div id=\"page-wrapper\">

            {{ include ('FPCMSBundle:form_utils:form_patient.html.twig', {
            form: form,
            button_label: 'Enregistrer',
            nouveau_patient: true,
            }) }}
        </div>
        <!-- /#page-wrapper -->

{% endblock %}
", "FPCMSBundle:patient:ajoutpatient.html.twig", "/var/www/html/CMSFP/src/FP/CMSBundle/Resources/views/patient/ajoutpatient.html.twig");
    }
}
