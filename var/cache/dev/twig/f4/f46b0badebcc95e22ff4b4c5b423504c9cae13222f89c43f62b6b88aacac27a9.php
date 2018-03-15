<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_03320899d56cb4e84f72f53ca5a53d50b63937c60e8184c60a8481af118f140e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@FOSUser/layout.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b79d0cf91421b32210e9f4ae6b3dcf47c0aa9a9e727a4d516f9ef521b652cebf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b79d0cf91421b32210e9f4ae6b3dcf47c0aa9a9e727a4d516f9ef521b652cebf->enter($__internal_b79d0cf91421b32210e9f4ae6b3dcf47c0aa9a9e727a4d516f9ef521b652cebf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $__internal_ce7278f69cdad4e5715ddec34335d4322d4c370a8bf808ca90bfd2d62530ff76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce7278f69cdad4e5715ddec34335d4322d4c370a8bf808ca90bfd2d62530ff76->enter($__internal_ce7278f69cdad4e5715ddec34335d4322d4c370a8bf808ca90bfd2d62530ff76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b79d0cf91421b32210e9f4ae6b3dcf47c0aa9a9e727a4d516f9ef521b652cebf->leave($__internal_b79d0cf91421b32210e9f4ae6b3dcf47c0aa9a9e727a4d516f9ef521b652cebf_prof);

        
        $__internal_ce7278f69cdad4e5715ddec34335d4322d4c370a8bf808ca90bfd2d62530ff76->leave($__internal_ce7278f69cdad4e5715ddec34335d4322d4c370a8bf808ca90bfd2d62530ff76_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 1,);
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
", "@FOSUser/layout.html.twig", "/var/www/html/CMSFP/src/FP/CMSBundle/Resources/views/layout.html.twig");
    }
}
