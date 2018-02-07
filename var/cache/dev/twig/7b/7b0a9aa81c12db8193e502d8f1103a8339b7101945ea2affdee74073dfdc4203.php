<?php

/* @FOSUser/Profile/edit_content.html.twig */
class __TwigTemplate_0a838493546d3e0828de413ef900053ddec18136fbdd9852b2db29f8ea3c8c5d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "@FOSUser/Profile/edit_content.html.twig", 2);
        $this->blocks = array(
            'traitement' => array($this, 'block_traitement'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_14d72c327b779618c5f2224cf34c3fc5b69a8ee81046b458db22b7a2755af821 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14d72c327b779618c5f2224cf34c3fc5b69a8ee81046b458db22b7a2755af821->enter($__internal_14d72c327b779618c5f2224cf34c3fc5b69a8ee81046b458db22b7a2755af821_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit_content.html.twig"));

        $__internal_8a3553b4bcc948d71ed9bdc3a23f9b966dca371987939a2485b359ed24144130 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a3553b4bcc948d71ed9bdc3a23f9b966dca371987939a2485b359ed24144130->enter($__internal_8a3553b4bcc948d71ed9bdc3a23f9b966dca371987939a2485b359ed24144130_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit_content.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "bootstrap_3_horizontal_layout.html.twig"));
        // line 2
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_14d72c327b779618c5f2224cf34c3fc5b69a8ee81046b458db22b7a2755af821->leave($__internal_14d72c327b779618c5f2224cf34c3fc5b69a8ee81046b458db22b7a2755af821_prof);

        
        $__internal_8a3553b4bcc948d71ed9bdc3a23f9b966dca371987939a2485b359ed24144130->leave($__internal_8a3553b4bcc948d71ed9bdc3a23f9b966dca371987939a2485b359ed24144130_prof);

    }

    // line 4
    public function block_traitement($context, array $blocks = array())
    {
        $__internal_fbe3863a0b80245648c98bbf973073b4718ba02681d9e2f920a7a0f795c5a29b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fbe3863a0b80245648c98bbf973073b4718ba02681d9e2f920a7a0f795c5a29b->enter($__internal_fbe3863a0b80245648c98bbf973073b4718ba02681d9e2f920a7a0f795c5a29b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "traitement"));

        $__internal_3cc0773a3a15511bddab4cafd83471656cbbf2734c032bb588384ae57bfe7f71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cc0773a3a15511bddab4cafd83471656cbbf2734c032bb588384ae57bfe7f71->enter($__internal_3cc0773a3a15511bddab4cafd83471656cbbf2734c032bb588384ae57bfe7f71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "traitement"));

        // line 5
        echo "    ";
        
        $__internal_3cc0773a3a15511bddab4cafd83471656cbbf2734c032bb588384ae57bfe7f71->leave($__internal_3cc0773a3a15511bddab4cafd83471656cbbf2734c032bb588384ae57bfe7f71_prof);

        
        $__internal_fbe3863a0b80245648c98bbf973073b4718ba02681d9e2f920a7a0f795c5a29b->leave($__internal_fbe3863a0b80245648c98bbf973073b4718ba02681d9e2f920a7a0f795c5a29b_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_69a50f6e8de0e67ca2a210dbc481c42adfd32d98fee29663c58b5a836de979e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69a50f6e8de0e67ca2a210dbc481c42adfd32d98fee29663c58b5a836de979e1->enter($__internal_69a50f6e8de0e67ca2a210dbc481c42adfd32d98fee29663c58b5a836de979e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_45f7396c45bba6062e6bb743eaec43834253ce6805676fe126a14dfb73e8f731 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45f7396c45bba6062e6bb743eaec43834253ce6805676fe126a14dfb73e8f731->enter($__internal_45f7396c45bba6062e6bb743eaec43834253ce6805676fe126a14dfb73e8f731_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <div class=\"row\">
    <div class=\"col-md-12 col-sm-12 col-xs-12\">
    <div class=\"x_panel\">
    <div class=\"x_title\">
        <center><h3>Modifier mon profil</h3></center>
        <ul class=\"nav navbar-right panel_toolbox\">
        </ul>
        <div class=\"clearfix\"></div>
    </div>
    <div class=\"x_content\">
    <br />

    <div class=\"col-md-2\"></div>
    <div class=\"container\">
    <div class=\"col-md-8\">

    ";
        // line 23
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit"), "attr" => array("class" => "fos_user_profile_edit")));
        echo "
    ";
        // line 24
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.edit.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
";
        // line 28
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
";
        
        $__internal_45f7396c45bba6062e6bb743eaec43834253ce6805676fe126a14dfb73e8f731->leave($__internal_45f7396c45bba6062e6bb743eaec43834253ce6805676fe126a14dfb73e8f731_prof);

        
        $__internal_69a50f6e8de0e67ca2a210dbc481c42adfd32d98fee29663c58b5a836de979e1->leave($__internal_69a50f6e8de0e67ca2a210dbc481c42adfd32d98fee29663c58b5a836de979e1_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 28,  99 => 26,  94 => 24,  90 => 23,  72 => 7,  63 => 6,  53 => 5,  44 => 4,  34 => 2,  32 => 3,  11 => 2,);
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
{% extends \"base.html.twig\" %}
{% form_theme form 'bootstrap_3_horizontal_layout.html.twig' %}
{% block traitement %}
    {% endblock %}
{% block body %}
    <div class=\"row\">
    <div class=\"col-md-12 col-sm-12 col-xs-12\">
    <div class=\"x_panel\">
    <div class=\"x_title\">
        <center><h3>Modifier mon profil</h3></center>
        <ul class=\"nav navbar-right panel_toolbox\">
        </ul>
        <div class=\"clearfix\"></div>
    </div>
    <div class=\"x_content\">
    <br />

    <div class=\"col-md-2\"></div>
    <div class=\"container\">
    <div class=\"col-md-8\">

    {{ form_start(form, { 'action': path('fos_user_profile_edit'), 'attr': { 'class': 'fos_user_profile_edit' } }) }}
    {{ form_widget(form) }}
    <div>
        <input type=\"submit\" value=\"{{ 'profile.edit.submit'|trans }}\" />
    </div>
{{ form_end(form) }}
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
{% endblock %}", "@FOSUser/Profile/edit_content.html.twig", "C:\\wamp64\\www\\ProjetPiDev\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Profile\\edit_content.html.twig");
    }
}
