<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_c609787acd24ec0b4b1a361d4531bbba377252f376fc0c3641ca193572b7906f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cb354e5bd787a893fad05d07b1ab82dd9bf392f4449a23bf6b196db1c69a295a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb354e5bd787a893fad05d07b1ab82dd9bf392f4449a23bf6b196db1c69a295a->enter($__internal_cb354e5bd787a893fad05d07b1ab82dd9bf392f4449a23bf6b196db1c69a295a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_276a98bb231c8f3622534d73f719137464d12cdcb78fa73ca6661a27ec7e2d73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_276a98bb231c8f3622534d73f719137464d12cdcb78fa73ca6661a27ec7e2d73->enter($__internal_276a98bb231c8f3622534d73f719137464d12cdcb78fa73ca6661a27ec7e2d73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cb354e5bd787a893fad05d07b1ab82dd9bf392f4449a23bf6b196db1c69a295a->leave($__internal_cb354e5bd787a893fad05d07b1ab82dd9bf392f4449a23bf6b196db1c69a295a_prof);

        
        $__internal_276a98bb231c8f3622534d73f719137464d12cdcb78fa73ca6661a27ec7e2d73->leave($__internal_276a98bb231c8f3622534d73f719137464d12cdcb78fa73ca6661a27ec7e2d73_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f82a36cf6543614743610cf5cfcdfd62641e45397ac3ab95810354710f206a6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f82a36cf6543614743610cf5cfcdfd62641e45397ac3ab95810354710f206a6f->enter($__internal_f82a36cf6543614743610cf5cfcdfd62641e45397ac3ab95810354710f206a6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_521abd099e7abec52467e6587a846a9fcaad2bafcde1c7628122c1497693dbba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_521abd099e7abec52467e6587a846a9fcaad2bafcde1c7628122c1497693dbba->enter($__internal_521abd099e7abec52467e6587a846a9fcaad2bafcde1c7628122c1497693dbba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_521abd099e7abec52467e6587a846a9fcaad2bafcde1c7628122c1497693dbba->leave($__internal_521abd099e7abec52467e6587a846a9fcaad2bafcde1c7628122c1497693dbba_prof);

        
        $__internal_f82a36cf6543614743610cf5cfcdfd62641e45397ac3ab95810354710f206a6f->leave($__internal_f82a36cf6543614743610cf5cfcdfd62641e45397ac3ab95810354710f206a6f_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "@FOSUser/Security/login.html.twig", "/var/www/html/CMSFP/vendor/friendsofsymfony/user-bundle/Resources/views/Security/login.html.twig");
    }
}
