<?php

/* @FPCMS/utilisateur/ajout.html.twig */
class __TwigTemplate_4175a73ba353ad3017c093869346f308070ef167c6f05b8ec528da3cd14edc3e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@FPCMS/utilisateur/ajout.html.twig", 1);
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
        $__internal_14667a5613b358feae6bcf6eac6065cd66dd25cb5a0e020fd546ce6b1103a1f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14667a5613b358feae6bcf6eac6065cd66dd25cb5a0e020fd546ce6b1103a1f8->enter($__internal_14667a5613b358feae6bcf6eac6065cd66dd25cb5a0e020fd546ce6b1103a1f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FPCMS/utilisateur/ajout.html.twig"));

        $__internal_b3485ffdbde1f85ef5577752882056ee753bc0fb7d9b82c90656cc2e8ea4872a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3485ffdbde1f85ef5577752882056ee753bc0fb7d9b82c90656cc2e8ea4872a->enter($__internal_b3485ffdbde1f85ef5577752882056ee753bc0fb7d9b82c90656cc2e8ea4872a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FPCMS/utilisateur/ajout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_14667a5613b358feae6bcf6eac6065cd66dd25cb5a0e020fd546ce6b1103a1f8->leave($__internal_14667a5613b358feae6bcf6eac6065cd66dd25cb5a0e020fd546ce6b1103a1f8_prof);

        
        $__internal_b3485ffdbde1f85ef5577752882056ee753bc0fb7d9b82c90656cc2e8ea4872a->leave($__internal_b3485ffdbde1f85ef5577752882056ee753bc0fb7d9b82c90656cc2e8ea4872a_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_ea0defe3e298dd2fe62f3eada89715564574c047e345b67163886b2ceaf00c78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea0defe3e298dd2fe62f3eada89715564574c047e345b67163886b2ceaf00c78->enter($__internal_ea0defe3e298dd2fe62f3eada89715564574c047e345b67163886b2ceaf00c78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_66fd771338ac83b798f523ee8f0001e329a726a546258ced1bdbec94f2f09779 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66fd771338ac83b798f523ee8f0001e329a726a546258ced1bdbec94f2f09779->enter($__internal_66fd771338ac83b798f523ee8f0001e329a726a546258ced1bdbec94f2f09779_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 4
        echo "    ";
        $this->loadTemplate("FPCMSBundle:layout:header.html.twig", "@FPCMS/utilisateur/ajout.html.twig", 4)->display($context);
        
        $__internal_66fd771338ac83b798f523ee8f0001e329a726a546258ced1bdbec94f2f09779->leave($__internal_66fd771338ac83b798f523ee8f0001e329a726a546258ced1bdbec94f2f09779_prof);

        
        $__internal_ea0defe3e298dd2fe62f3eada89715564574c047e345b67163886b2ceaf00c78->leave($__internal_ea0defe3e298dd2fe62f3eada89715564574c047e345b67163886b2ceaf00c78_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_e6f8e6da438dc8d776e96fdf387f4630d3b36d1b477f4106bf5b8776d00ca05e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6f8e6da438dc8d776e96fdf387f4630d3b36d1b477f4106bf5b8776d00ca05e->enter($__internal_e6f8e6da438dc8d776e96fdf387f4630d3b36d1b477f4106bf5b8776d00ca05e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5e7c695bb2a8261e9641c563ee0b06ce61354f34f44e2e01f5f68d489d5fc521 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e7c695bb2a8261e9641c563ee0b06ce61354f34f44e2e01f5f68d489d5fc521->enter($__internal_5e7c695bb2a8261e9641c563ee0b06ce61354f34f44e2e01f5f68d489d5fc521_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "
    ";
        // line 18
        echo "


    <div id=\"page-wrapper\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">
                    <strong style=\"font-family: 'Montserrat', sans-serif;\">Ajouter un utilisateur</strong>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"panel panel-primary\">
                    <div class=\"panel-heading\">
                        ";
        // line 36
        echo "                    </div>
                    <div class=\"panel-body\">
                        <div class=\"row\">

                            ";
        // line 45
        echo "
                            <div class=\"col-lg-6\">
                                ";
        // line 47
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("method" => "post", "attr" => array("class" => "fos_user_registration_register")));
        echo "
                                <div class=\"form-group\">
                                    ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "type_user", array()), 'label', array("label" => "Type utilisateur"));
        echo "
                                    ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "type_user", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                    ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "type_user", array()), 'errors');
        echo "
                                </div>
                                <div class=\"form-group\">
                                    ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "username", array()), 'label');
        echo "
                                    ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "username", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                    ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "username", array()), 'errors');
        echo "
                                </div>
                                <div class=\"form-group\">
                                    ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'label');
        echo "
                                    ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                    ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'errors');
        echo "
                                </div>
                                <div class=\"form-group\">
                                    ";
        // line 65
        echo "                                    <label class=\"required\">Nom</label>
                                    ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                </div>
                            </div>
                            <div class=\"col-lg-6\">
                                <div class=\"form-group\">
                                    ";
        // line 72
        echo "                                    <label class=\"required\">Prenom</label>
                                    ";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "prenom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                </div>
                                <div class=\"form-group\">
                                    ";
        // line 77
        echo "                                    <label class=\"required\">Genre</label>
                                    ";
        // line 78
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "genre", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                </div>
                                <div class=\"form-group\">
                                    ";
        // line 81
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "service", array()), 'label');
        echo "
                                    ";
        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "service", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                </div>
                                ";
        // line 85
        echo "                                    ";
        // line 86
        echo "                                    ";
        // line 87
        echo "                                ";
        // line 88
        echo "                                <div class=\"col-md-4 pull-right\">
                                    <input class=\"btn btn-success btn-block\" type=\"submit\"
                                           value=\"Enregistrer\"/>
                                </div>
                                <a href=\"";
        // line 92
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("indexuser");
        echo "\" class=\"btn btn-outline btn-danger pull-right\">
                                    <i class=\"fa fa-ban\"></i> Annuler
                                </a>
                            </div>

                            ";
        // line 97
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
                            ";
        // line 99
        echo "                        </div>
                        <!-- /.row (nested) -->
                    </div>
                    <!-- /.panel-body -->
                </div>


                <!-- /.panel -->
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /#page-wrapper -->

";
        
        $__internal_5e7c695bb2a8261e9641c563ee0b06ce61354f34f44e2e01f5f68d489d5fc521->leave($__internal_5e7c695bb2a8261e9641c563ee0b06ce61354f34f44e2e01f5f68d489d5fc521_prof);

        
        $__internal_e6f8e6da438dc8d776e96fdf387f4630d3b36d1b477f4106bf5b8776d00ca05e->leave($__internal_e6f8e6da438dc8d776e96fdf387f4630d3b36d1b477f4106bf5b8776d00ca05e_prof);

    }

    public function getTemplateName()
    {
        return "@FPCMS/utilisateur/ajout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  211 => 99,  207 => 97,  199 => 92,  193 => 88,  191 => 87,  189 => 86,  187 => 85,  182 => 82,  178 => 81,  172 => 78,  169 => 77,  163 => 73,  160 => 72,  152 => 66,  149 => 65,  143 => 61,  139 => 60,  135 => 59,  129 => 56,  125 => 55,  121 => 54,  115 => 51,  111 => 50,  107 => 49,  102 => 47,  98 => 45,  92 => 36,  73 => 18,  70 => 7,  61 => 6,  50 => 4,  41 => 3,  11 => 1,);
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
{% trans_default_domain 'FOSUserBundle' %}
{% block header %}
    {% include 'FPCMSBundle:layout:header.html.twig' %}
{% endblock %}
{% block body %}

    {#

    {% trans_default_domain 'FOSUserBundle' %}

    {{ form_start(form, {'method': 'post', 'action': path('fos_user_registration_register'), 'attr': {'class': 'fos_user_registration_register'}}) }}
        {{ form_widget(form) }}
        <div>
            <input type=\"submit\" value=\"{{ 'registration.submit'|trans }}\" />
        </div>
    {{ form_end(form) }} #}



    <div id=\"page-wrapper\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">
                    <strong style=\"font-family: 'Montserrat', sans-serif;\">Ajouter un utilisateur</strong>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"panel panel-primary\">
                    <div class=\"panel-heading\">
                        {#Médecin#}
                    </div>
                    <div class=\"panel-body\">
                        <div class=\"row\">

                            {# {{ include ('FPCMSBundle:form_utils:form_medecin.html.twig', {
                            form: form,
                            button_label: 'Ajouter',
                            nouveau_medecin: true,
                             }) }} #}

                            <div class=\"col-lg-6\">
                                {{ form_start(form, {'method': 'post', 'attr': {'class': 'fos_user_registration_register'}}) }}
                                <div class=\"form-group\">
                                    {{ form_label(form.type_user, \"Type utilisateur\") }}
                                    {{ form_widget(form.type_user, {'attr': {'class': 'form-control'}}) }}
                                    {{ form_errors(form.type_user) }}
                                </div>
                                <div class=\"form-group\">
                                    {{ form_label(form.username) }}
                                    {{ form_widget(form.username, {'attr': {'class': 'form-control'}}) }}
                                    {{ form_errors(form.username) }}
                                </div>
                                <div class=\"form-group\">
                                    {{ form_label(form.email) }}
                                    {{ form_widget(form.email, {'attr': {'class': 'form-control'}}) }}
                                    {{ form_errors(form.email) }}
                                </div>
                                <div class=\"form-group\">
                                    {# {{ form_label(form.nom) }} #}
                                    <label class=\"required\">Nom</label>
                                    {{ form_widget(form.nom, {'attr': {'class': 'form-control'}}) }}
                                </div>
                            </div>
                            <div class=\"col-lg-6\">
                                <div class=\"form-group\">
                                    {# {{ form_label(form.prenom) }} #}
                                    <label class=\"required\">Prenom</label>
                                    {{ form_widget(form.prenom, {'attr': {'class': 'form-control'}}) }}
                                </div>
                                <div class=\"form-group\">
                                    {# {{ form_label(form.genre) }} #}
                                    <label class=\"required\">Genre</label>
                                    {{ form_widget(form.genre, {'attr': {'class': 'form-control'}}) }}
                                </div>
                                <div class=\"form-group\">
                                    {{ form_label(form.service) }}
                                    {{ form_widget(form.service, {'attr': {'class': 'form-control'}}) }}
                                </div>
                                {#<div class=\"form-group\">#}
                                    {#{{ form_label(form.specialite) }}#}
                                    {#{{ form_widget(form.specialite, {'attr': {'class': 'form-control'}}) }}#}
                                {#</div>#}
                                <div class=\"col-md-4 pull-right\">
                                    <input class=\"btn btn-success btn-block\" type=\"submit\"
                                           value=\"Enregistrer\"/>
                                </div>
                                <a href=\"{{ path('indexuser') }}\" class=\"btn btn-outline btn-danger pull-right\">
                                    <i class=\"fa fa-ban\"></i> Annuler
                                </a>
                            </div>

                            {{ form_end(form) }}
                            {# </form> #}
                        </div>
                        <!-- /.row (nested) -->
                    </div>
                    <!-- /.panel-body -->
                </div>


                <!-- /.panel -->
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /#page-wrapper -->

{% endblock %}
", "@FPCMS/utilisateur/ajout.html.twig", "/var/www/html/CMSFP/src/FP/CMSBundle/Resources/views/utilisateur/ajout.html.twig");
    }
}
