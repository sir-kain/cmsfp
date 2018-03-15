<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_5ace0514ac51dddf7015e278581d1ccbc34e9ce9c04fa0c5adac0bc55a3fad5b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_75e52b9b0cf61aac6c15a93299f38eb515aacdfdc385ade481ff228044b48bf7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75e52b9b0cf61aac6c15a93299f38eb515aacdfdc385ade481ff228044b48bf7->enter($__internal_75e52b9b0cf61aac6c15a93299f38eb515aacdfdc385ade481ff228044b48bf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_a371d252741e39c3fbd4a4a6d5cb951182272f02a87823fdb8497d71b1cb63ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a371d252741e39c3fbd4a4a6d5cb951182272f02a87823fdb8497d71b1cb63ec->enter($__internal_a371d252741e39c3fbd4a4a6d5cb951182272f02a87823fdb8497d71b1cb63ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_75e52b9b0cf61aac6c15a93299f38eb515aacdfdc385ade481ff228044b48bf7->leave($__internal_75e52b9b0cf61aac6c15a93299f38eb515aacdfdc385ade481ff228044b48bf7_prof);

        
        $__internal_a371d252741e39c3fbd4a4a6d5cb951182272f02a87823fdb8497d71b1cb63ec->leave($__internal_a371d252741e39c3fbd4a4a6d5cb951182272f02a87823fdb8497d71b1cb63ec_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b1bc582c00b99e6f8766d0363494024ad7a44acfa3b6b09f65a1131d9e13d2f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1bc582c00b99e6f8766d0363494024ad7a44acfa3b6b09f65a1131d9e13d2f0->enter($__internal_b1bc582c00b99e6f8766d0363494024ad7a44acfa3b6b09f65a1131d9e13d2f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d432203d90a2c9823a35334595c8282ef9b3d045949f8cefb75e0323711dac1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d432203d90a2c9823a35334595c8282ef9b3d045949f8cefb75e0323711dac1d->enter($__internal_d432203d90a2c9823a35334595c8282ef9b3d045949f8cefb75e0323711dac1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_d432203d90a2c9823a35334595c8282ef9b3d045949f8cefb75e0323711dac1d->leave($__internal_d432203d90a2c9823a35334595c8282ef9b3d045949f8cefb75e0323711dac1d_prof);

        
        $__internal_b1bc582c00b99e6f8766d0363494024ad7a44acfa3b6b09f65a1131d9e13d2f0->leave($__internal_b1bc582c00b99e6f8766d0363494024ad7a44acfa3b6b09f65a1131d9e13d2f0_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_546648817c81a0c596cddc650e0afae4035c3052a1ed1c116d0b653e67060f76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_546648817c81a0c596cddc650e0afae4035c3052a1ed1c116d0b653e67060f76->enter($__internal_546648817c81a0c596cddc650e0afae4035c3052a1ed1c116d0b653e67060f76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_82a88f8c13665c9351ba92feb3f546d6fc6ae49e184389faa0c28bef95dc2ab5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82a88f8c13665c9351ba92feb3f546d6fc6ae49e184389faa0c28bef95dc2ab5->enter($__internal_82a88f8c13665c9351ba92feb3f546d6fc6ae49e184389faa0c28bef95dc2ab5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_82a88f8c13665c9351ba92feb3f546d6fc6ae49e184389faa0c28bef95dc2ab5->leave($__internal_82a88f8c13665c9351ba92feb3f546d6fc6ae49e184389faa0c28bef95dc2ab5_prof);

        
        $__internal_546648817c81a0c596cddc650e0afae4035c3052a1ed1c116d0b653e67060f76->leave($__internal_546648817c81a0c596cddc650e0afae4035c3052a1ed1c116d0b653e67060f76_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_d4d3e7d0a1f2f03c74b519b64859f684e8966a8b4b26e38e448b5ea6a9cac2c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4d3e7d0a1f2f03c74b519b64859f684e8966a8b4b26e38e448b5ea6a9cac2c2->enter($__internal_d4d3e7d0a1f2f03c74b519b64859f684e8966a8b4b26e38e448b5ea6a9cac2c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_36503b2893e30d247df9813ec08cefef36e305052da24936c6790c6df98e7bf2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36503b2893e30d247df9813ec08cefef36e305052da24936c6790c6df98e7bf2->enter($__internal_36503b2893e30d247df9813ec08cefef36e305052da24936c6790c6df98e7bf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_36503b2893e30d247df9813ec08cefef36e305052da24936c6790c6df98e7bf2->leave($__internal_36503b2893e30d247df9813ec08cefef36e305052da24936c6790c6df98e7bf2_prof);

        
        $__internal_d4d3e7d0a1f2f03c74b519b64859f684e8966a8b4b26e38e448b5ea6a9cac2c2->leave($__internal_d4d3e7d0a1f2f03c74b519b64859f684e8966a8b4b26e38e448b5ea6a9cac2c2_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/var/www/html/CMSFP/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
