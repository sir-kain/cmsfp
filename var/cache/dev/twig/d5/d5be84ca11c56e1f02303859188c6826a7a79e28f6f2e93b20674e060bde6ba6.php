<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_4e3271903e33ece75271e854a17246dc43a169ac90a69a863843468c5ada6dd1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_76efb0b1ea397bac1e0103f61f5ad53ae08321089b7929b4aa12d9b9aa76c2ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76efb0b1ea397bac1e0103f61f5ad53ae08321089b7929b4aa12d9b9aa76c2ba->enter($__internal_76efb0b1ea397bac1e0103f61f5ad53ae08321089b7929b4aa12d9b9aa76c2ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_1f2b9f6e93760aaf968de39180a698aa4b6280941ee2688d5df25e9dd893f880 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f2b9f6e93760aaf968de39180a698aa4b6280941ee2688d5df25e9dd893f880->enter($__internal_1f2b9f6e93760aaf968de39180a698aa4b6280941ee2688d5df25e9dd893f880_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_76efb0b1ea397bac1e0103f61f5ad53ae08321089b7929b4aa12d9b9aa76c2ba->leave($__internal_76efb0b1ea397bac1e0103f61f5ad53ae08321089b7929b4aa12d9b9aa76c2ba_prof);

        
        $__internal_1f2b9f6e93760aaf968de39180a698aa4b6280941ee2688d5df25e9dd893f880->leave($__internal_1f2b9f6e93760aaf968de39180a698aa4b6280941ee2688d5df25e9dd893f880_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f822f48e0c1dab993f5ae8c5a837f362a778b0729a498b2b9af83061fe223be8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f822f48e0c1dab993f5ae8c5a837f362a778b0729a498b2b9af83061fe223be8->enter($__internal_f822f48e0c1dab993f5ae8c5a837f362a778b0729a498b2b9af83061fe223be8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_5149d9581ecdffa95cb803ae67a9a1d8c84e96854c82db77c823fe18f96a2dc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5149d9581ecdffa95cb803ae67a9a1d8c84e96854c82db77c823fe18f96a2dc9->enter($__internal_5149d9581ecdffa95cb803ae67a9a1d8c84e96854c82db77c823fe18f96a2dc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_5149d9581ecdffa95cb803ae67a9a1d8c84e96854c82db77c823fe18f96a2dc9->leave($__internal_5149d9581ecdffa95cb803ae67a9a1d8c84e96854c82db77c823fe18f96a2dc9_prof);

        
        $__internal_f822f48e0c1dab993f5ae8c5a837f362a778b0729a498b2b9af83061fe223be8->leave($__internal_f822f48e0c1dab993f5ae8c5a837f362a778b0729a498b2b9af83061fe223be8_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7a4ad3a8a1c5e966d0e3b14c9d0870301ccdede28a8fd50f9bc7d50b35b586b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a4ad3a8a1c5e966d0e3b14c9d0870301ccdede28a8fd50f9bc7d50b35b586b2->enter($__internal_7a4ad3a8a1c5e966d0e3b14c9d0870301ccdede28a8fd50f9bc7d50b35b586b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_688b9b7e59fb11990637875a234dbb27b723c33f0f120dc97966454bd1b9dc8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_688b9b7e59fb11990637875a234dbb27b723c33f0f120dc97966454bd1b9dc8a->enter($__internal_688b9b7e59fb11990637875a234dbb27b723c33f0f120dc97966454bd1b9dc8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_688b9b7e59fb11990637875a234dbb27b723c33f0f120dc97966454bd1b9dc8a->leave($__internal_688b9b7e59fb11990637875a234dbb27b723c33f0f120dc97966454bd1b9dc8a_prof);

        
        $__internal_7a4ad3a8a1c5e966d0e3b14c9d0870301ccdede28a8fd50f9bc7d50b35b586b2->leave($__internal_7a4ad3a8a1c5e966d0e3b14c9d0870301ccdede28a8fd50f9bc7d50b35b586b2_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d8923123eeee6326e2b079c74777af93b1363c90abf14855cb7c1611d31b9f3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8923123eeee6326e2b079c74777af93b1363c90abf14855cb7c1611d31b9f3f->enter($__internal_d8923123eeee6326e2b079c74777af93b1363c90abf14855cb7c1611d31b9f3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_07d47b0a0c92ac58678b73b65fffd405e6d102c71c5901c924fbeea76d17b38c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07d47b0a0c92ac58678b73b65fffd405e6d102c71c5901c924fbeea76d17b38c->enter($__internal_07d47b0a0c92ac58678b73b65fffd405e6d102c71c5901c924fbeea76d17b38c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_07d47b0a0c92ac58678b73b65fffd405e6d102c71c5901c924fbeea76d17b38c->leave($__internal_07d47b0a0c92ac58678b73b65fffd405e6d102c71c5901c924fbeea76d17b38c_prof);

        
        $__internal_d8923123eeee6326e2b079c74777af93b1363c90abf14855cb7c1611d31b9f3f->leave($__internal_d8923123eeee6326e2b079c74777af93b1363c90abf14855cb7c1611d31b9f3f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/var/www/html/CMSFP/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
