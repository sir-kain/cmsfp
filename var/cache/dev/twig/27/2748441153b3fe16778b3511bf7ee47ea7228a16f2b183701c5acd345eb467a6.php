<?php

/* @FOSUser/Security/login_content.html.twig */
class __TwigTemplate_94edea42e096cbfb9e6fe8b4678da9c6031625d60e65ceaa6cc55c1ce04b6fc1 extends Twig_Template
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
        $__internal_593c05ae69e917d7ee508b66ae0a8c87a25eb018b833ffe40780b820466f68a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_593c05ae69e917d7ee508b66ae0a8c87a25eb018b833ffe40780b820466f68a0->enter($__internal_593c05ae69e917d7ee508b66ae0a8c87a25eb018b833ffe40780b820466f68a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login_content.html.twig"));

        $__internal_72b3209c6338f4b6dd669e6660cbba2403be45cc8837f2dd403b1ed67e5e2771 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72b3209c6338f4b6dd669e6660cbba2403be45cc8837f2dd403b1ed67e5e2771->enter($__internal_72b3209c6338f4b6dd669e6660cbba2403be45cc8837f2dd403b1ed67e5e2771_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login_content.html.twig"));

        // line 2
        echo "<div class=\"col-sm-8 col-sm-offset-2 main\">
    <div class=\"col-sm-6 left-side\">
        <img class=\"img-responsive\" src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("templates/images/logo.JPG"), "html", null, true);
        echo "\" alt=\"\">
        <h1>Centre <br> Médico-social<br>de la Fonction publique</h1>
    </div><!--col-sm-6-->

    <div class=\"col-sm-6 right-side\">
        <h1>Connexion</h1>
        <!--Form with header-->
        <div class=\"form\">
            <form action=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
                ";
        // line 13
        if (($context["csrf_token"] ?? $this->getContext($context, "csrf_token"))) {
            // line 14
            echo "                    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, ($context["csrf_token"] ?? $this->getContext($context, "csrf_token")), "html", null, true);
            echo "\"/>
                ";
        }
        // line 16
        echo "

                <div class=\"form-group\">
                    <label for=\"username\">";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                    <input class=\"form-control\" type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, ($context["last_username"] ?? $this->getContext($context, "last_username")), "html", null, true);
        echo "\"
                           required=\"required\"/>

                </div>

                <div class=\"form-group\">
                    <label for=\"password\">";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                    <input type=\"password\" id=\"password\" name=\"_password\" class=\"form-control\" required=\"required\"/>

                </div>

                <div class=\"\">
                    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\"/>
                    <label for=\"remember_me\">";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                </div>

                <br>
                <div class=\"text-xs-center\">
                    <input type=\"submit\" class=\"btn btn-deep-purple\" id=\"_submit\" name=\"_submit\"
                           value=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\"/>
                </div>
                ";
        // line 41
        if (($context["error"] ?? $this->getContext($context, "error"))) {
            // line 42
            echo "                    <br><br>
                    <div class=\"alert alert-danger\">";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
                ";
        }
        // line 45
        echo "            </form>
        </div>
        <!--/Form with header-->

    </div><!--col-sm-6-->


</div><!--col-sm-8-->

<style>


    #playground-container {
        height: 500px;
        overflow: hidden !important;

    }
    .main{margin-top:70px;
        -webkit-box-shadow: 0px 0px 14px 0px rgba(0,0,0,0.24);
        -moz-box-shadow: 0px 0px 14px 0px rgba(0,0,0,0.24);
        box-shadow: 0px 0px 14px 0px rgba(0,0,0,0.24);
        padding:0px;
    }
    .fb:focus, .fb:hover{color:FFF !important;}
    body{
        font-family: 'Raleway', sans-serif;
    }

    .left-side{
        padding:0px 0px 100px;
        background: #5bb55b;
        background-size:cover;
    }
    .left-side img {
        padding-top: 35px;
        display: block; /*for the img inside your div */
        margin-left: auto;
        margin-right: auto
    }
    .left-side h1{
        text-align: center;
        font-size: 35px;
        font-weight: 900;
        color:#FFF;
        padding: 50px 30px 0px 10px;
    }

    .left-side p{
        font-weight:600;
        color:#FFF;
        padding:10px 10px 10px 26px;
    }


    .fb{background: #2d6bb7;
        color: #FFF;
        padding: 10px 15px;
        border-radius: 18px;
        font-size: 12px;
        font-weight: 600;
        margin-right: 15px;
        margin-left:26px;-webkit-box-shadow: 0px 0px 14px 0px rgba(0,0,0,0.24);
        -moz-box-shadow: 0px 0px 14px 0px rgba(0,0,0,0.24);
        box-shadow: 0px 0px 14px 0px rgba(0,0,0,0.24);}
    .tw{background: #20c1ed;
        color: #FFF;
        padding: 10px 15px;
        border-radius: 18px;
        font-size: 12px;
        font-weight: 600;
        margin-right: 15px;-webkit-box-shadow: 0px 0px 14px 0px rgba(0,0,0,0.24);
        -moz-box-shadow: 0px 0px 14px 0px rgba(0,0,0,0.24);
        box-shadow: 0px 0px 14px 0px rgba(0,0,0,0.24);}

    .right-side{
        padding:30px 0px 100px;
        background:#FFF;
        background-size:cover;
        min-height:514px;
    }
    .right-side h1{
        font-size: 30px;
        font-weight: 700;
        color:#84d14e;
        padding: 50px 10px 00px 50px;
    }
    .right-side p{
        font-weight:600;
        color:#000;
        padding:10px 50px 10px 50px;
    }
    .form{padding:10px 50px 10px 50px;}
    .form-control{box-shadow: none !important;
        border-radius: 0px !important;
        border-bottom: 1px solid #84d14e !important;
        border-top: none !important;
        border-left: none !important;
        border-right: none !important;}
    .btn-deep-purple {
        background: #84d14e;
        border-radius: 18px;
        padding: 5px 19px;
        color: #FFF;
        font-weight: 600;
        float: right;
        -webkit-box-shadow: 0px 0px 14px 0px rgba(0,0,0,0.24);
        -moz-box-shadow: 0px 0px 14px 0px rgba(0,0,0,0.24);
        box-shadow: 0px 0px 14px 0px rgba(0,0,0,0.24);
    }
</style>
";
        
        $__internal_593c05ae69e917d7ee508b66ae0a8c87a25eb018b833ffe40780b820466f68a0->leave($__internal_593c05ae69e917d7ee508b66ae0a8c87a25eb018b833ffe40780b820466f68a0_prof);

        
        $__internal_72b3209c6338f4b6dd669e6660cbba2403be45cc8837f2dd403b1ed67e5e2771->leave($__internal_72b3209c6338f4b6dd669e6660cbba2403be45cc8837f2dd403b1ed67e5e2771_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 45,  99 => 43,  96 => 42,  94 => 41,  89 => 39,  80 => 33,  70 => 26,  61 => 20,  57 => 19,  52 => 16,  46 => 14,  44 => 13,  40 => 12,  29 => 4,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
<div class=\"col-sm-8 col-sm-offset-2 main\">
    <div class=\"col-sm-6 left-side\">
        <img class=\"img-responsive\" src=\"{{ asset('templates/images/logo.JPG') }}\" alt=\"\">
        <h1>Centre <br> Médico-social<br>de la Fonction publique</h1>
    </div><!--col-sm-6-->

    <div class=\"col-sm-6 right-side\">
        <h1>Connexion</h1>
        <!--Form with header-->
        <div class=\"form\">
            <form action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\">
                {% if csrf_token %}
                    <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\"/>
                {% endif %}


                <div class=\"form-group\">
                    <label for=\"username\">{{ 'security.login.username'|trans }}</label>
                    <input class=\"form-control\" type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\"
                           required=\"required\"/>

                </div>

                <div class=\"form-group\">
                    <label for=\"password\">{{ 'security.login.password'|trans }}</label>
                    <input type=\"password\" id=\"password\" name=\"_password\" class=\"form-control\" required=\"required\"/>

                </div>

                <div class=\"\">
                    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\"/>
                    <label for=\"remember_me\">{{ 'security.login.remember_me'|trans }}</label>
                </div>

                <br>
                <div class=\"text-xs-center\">
                    <input type=\"submit\" class=\"btn btn-deep-purple\" id=\"_submit\" name=\"_submit\"
                           value=\"{{ 'security.login.submit'|trans }}\"/>
                </div>
                {% if error %}
                    <br><br>
                    <div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
                {% endif %}
            </form>
        </div>
        <!--/Form with header-->

    </div><!--col-sm-6-->


</div><!--col-sm-8-->

<style>


    #playground-container {
        height: 500px;
        overflow: hidden !important;

    }
    .main{margin-top:70px;
        -webkit-box-shadow: 0px 0px 14px 0px rgba(0,0,0,0.24);
        -moz-box-shadow: 0px 0px 14px 0px rgba(0,0,0,0.24);
        box-shadow: 0px 0px 14px 0px rgba(0,0,0,0.24);
        padding:0px;
    }
    .fb:focus, .fb:hover{color:FFF !important;}
    body{
        font-family: 'Raleway', sans-serif;
    }

    .left-side{
        padding:0px 0px 100px;
        background: #5bb55b;
        background-size:cover;
    }
    .left-side img {
        padding-top: 35px;
        display: block; /*for the img inside your div */
        margin-left: auto;
        margin-right: auto
    }
    .left-side h1{
        text-align: center;
        font-size: 35px;
        font-weight: 900;
        color:#FFF;
        padding: 50px 30px 0px 10px;
    }

    .left-side p{
        font-weight:600;
        color:#FFF;
        padding:10px 10px 10px 26px;
    }


    .fb{background: #2d6bb7;
        color: #FFF;
        padding: 10px 15px;
        border-radius: 18px;
        font-size: 12px;
        font-weight: 600;
        margin-right: 15px;
        margin-left:26px;-webkit-box-shadow: 0px 0px 14px 0px rgba(0,0,0,0.24);
        -moz-box-shadow: 0px 0px 14px 0px rgba(0,0,0,0.24);
        box-shadow: 0px 0px 14px 0px rgba(0,0,0,0.24);}
    .tw{background: #20c1ed;
        color: #FFF;
        padding: 10px 15px;
        border-radius: 18px;
        font-size: 12px;
        font-weight: 600;
        margin-right: 15px;-webkit-box-shadow: 0px 0px 14px 0px rgba(0,0,0,0.24);
        -moz-box-shadow: 0px 0px 14px 0px rgba(0,0,0,0.24);
        box-shadow: 0px 0px 14px 0px rgba(0,0,0,0.24);}

    .right-side{
        padding:30px 0px 100px;
        background:#FFF;
        background-size:cover;
        min-height:514px;
    }
    .right-side h1{
        font-size: 30px;
        font-weight: 700;
        color:#84d14e;
        padding: 50px 10px 00px 50px;
    }
    .right-side p{
        font-weight:600;
        color:#000;
        padding:10px 50px 10px 50px;
    }
    .form{padding:10px 50px 10px 50px;}
    .form-control{box-shadow: none !important;
        border-radius: 0px !important;
        border-bottom: 1px solid #84d14e !important;
        border-top: none !important;
        border-left: none !important;
        border-right: none !important;}
    .btn-deep-purple {
        background: #84d14e;
        border-radius: 18px;
        padding: 5px 19px;
        color: #FFF;
        font-weight: 600;
        float: right;
        -webkit-box-shadow: 0px 0px 14px 0px rgba(0,0,0,0.24);
        -moz-box-shadow: 0px 0px 14px 0px rgba(0,0,0,0.24);
        box-shadow: 0px 0px 14px 0px rgba(0,0,0,0.24);
    }
</style>
", "@FOSUser/Security/login_content.html.twig", "/var/www/html/CMSFP/vendor/friendsofsymfony/user-bundle/Resources/views/Security/login_content.html.twig");
    }
}
