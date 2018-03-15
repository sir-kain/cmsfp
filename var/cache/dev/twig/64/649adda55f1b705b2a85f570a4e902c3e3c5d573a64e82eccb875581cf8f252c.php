<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_6c775e4c4ccdb3af11f3aa2031a382d5c0ed87f26f326c1f292fdbc62fcd4060 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1a54dd6958818cf7c4f83de846a3eaf45ba2f3b90a1ec374607b8cd0ae58038b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a54dd6958818cf7c4f83de846a3eaf45ba2f3b90a1ec374607b8cd0ae58038b->enter($__internal_1a54dd6958818cf7c4f83de846a3eaf45ba2f3b90a1ec374607b8cd0ae58038b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_ca6b1afc98e41ed8e7330e6a9e8f627803e20d7ba02bcc78d3eff4ad5cc2a95d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca6b1afc98e41ed8e7330e6a9e8f627803e20d7ba02bcc78d3eff4ad5cc2a95d->enter($__internal_ca6b1afc98e41ed8e7330e6a9e8f627803e20d7ba02bcc78d3eff4ad5cc2a95d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1a54dd6958818cf7c4f83de846a3eaf45ba2f3b90a1ec374607b8cd0ae58038b->leave($__internal_1a54dd6958818cf7c4f83de846a3eaf45ba2f3b90a1ec374607b8cd0ae58038b_prof);

        
        $__internal_ca6b1afc98e41ed8e7330e6a9e8f627803e20d7ba02bcc78d3eff4ad5cc2a95d->leave($__internal_ca6b1afc98e41ed8e7330e6a9e8f627803e20d7ba02bcc78d3eff4ad5cc2a95d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_73e8e371a63b1026dc49507570e02e576004144a06fa1d28e695e25620000c83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73e8e371a63b1026dc49507570e02e576004144a06fa1d28e695e25620000c83->enter($__internal_73e8e371a63b1026dc49507570e02e576004144a06fa1d28e695e25620000c83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_72d19d491e8ab5954793284795eb1e4fa844f17e8e9f1708dc6bfc546fb9d8af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72d19d491e8ab5954793284795eb1e4fa844f17e8e9f1708dc6bfc546fb9d8af->enter($__internal_72d19d491e8ab5954793284795eb1e4fa844f17e8e9f1708dc6bfc546fb9d8af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_72d19d491e8ab5954793284795eb1e4fa844f17e8e9f1708dc6bfc546fb9d8af->leave($__internal_72d19d491e8ab5954793284795eb1e4fa844f17e8e9f1708dc6bfc546fb9d8af_prof);

        
        $__internal_73e8e371a63b1026dc49507570e02e576004144a06fa1d28e695e25620000c83->leave($__internal_73e8e371a63b1026dc49507570e02e576004144a06fa1d28e695e25620000c83_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6eac98d9425bd98f544ec8804c2f60037ed390197e9bb87328027776420320da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6eac98d9425bd98f544ec8804c2f60037ed390197e9bb87328027776420320da->enter($__internal_6eac98d9425bd98f544ec8804c2f60037ed390197e9bb87328027776420320da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_a49f3ee74bb92256d8c8484bc177f41459973e42b56be6a38c4fe532023153af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a49f3ee74bb92256d8c8484bc177f41459973e42b56be6a38c4fe532023153af->enter($__internal_a49f3ee74bb92256d8c8484bc177f41459973e42b56be6a38c4fe532023153af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_a49f3ee74bb92256d8c8484bc177f41459973e42b56be6a38c4fe532023153af->leave($__internal_a49f3ee74bb92256d8c8484bc177f41459973e42b56be6a38c4fe532023153af_prof);

        
        $__internal_6eac98d9425bd98f544ec8804c2f60037ed390197e9bb87328027776420320da->leave($__internal_6eac98d9425bd98f544ec8804c2f60037ed390197e9bb87328027776420320da_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4e3c42da3e07ab3a4c15dd6a532237e6a45b4c8aca288e786670fa578a66bbf7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e3c42da3e07ab3a4c15dd6a532237e6a45b4c8aca288e786670fa578a66bbf7->enter($__internal_4e3c42da3e07ab3a4c15dd6a532237e6a45b4c8aca288e786670fa578a66bbf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_04d90a0777cc08044a8f97f613ddcf8c8e6a3336acdc6190245e9e1810c586ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04d90a0777cc08044a8f97f613ddcf8c8e6a3336acdc6190245e9e1810c586ea->enter($__internal_04d90a0777cc08044a8f97f613ddcf8c8e6a3336acdc6190245e9e1810c586ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_04d90a0777cc08044a8f97f613ddcf8c8e6a3336acdc6190245e9e1810c586ea->leave($__internal_04d90a0777cc08044a8f97f613ddcf8c8e6a3336acdc6190245e9e1810c586ea_prof);

        
        $__internal_4e3c42da3e07ab3a4c15dd6a532237e6a45b4c8aca288e786670fa578a66bbf7->leave($__internal_4e3c42da3e07ab3a4c15dd6a532237e6a45b4c8aca288e786670fa578a66bbf7_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/CMSFP/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
