<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_9031c61f3e133b058821d6b81eeca85d849bbfb76eda7cf7842683c1bd3360b0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "FOSUserBundle:Profile:show_content.html.twig", 2);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_19d3c09a94fc0337eebad4c3ea1d76e2733ca62545a498d061a6d5c6a498d162 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19d3c09a94fc0337eebad4c3ea1d76e2733ca62545a498d061a6d5c6a498d162->enter($__internal_19d3c09a94fc0337eebad4c3ea1d76e2733ca62545a498d061a6d5c6a498d162_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        $__internal_25508fff55ab17c7f8f2f8c4b1ed99327b8bdf2b6bc16afecd35c1d64d3230ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25508fff55ab17c7f8f2f8c4b1ed99327b8bdf2b6bc16afecd35c1d64d3230ab->enter($__internal_25508fff55ab17c7f8f2f8c4b1ed99327b8bdf2b6bc16afecd35c1d64d3230ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_19d3c09a94fc0337eebad4c3ea1d76e2733ca62545a498d061a6d5c6a498d162->leave($__internal_19d3c09a94fc0337eebad4c3ea1d76e2733ca62545a498d061a6d5c6a498d162_prof);

        
        $__internal_25508fff55ab17c7f8f2f8c4b1ed99327b8bdf2b6bc16afecd35c1d64d3230ab->leave($__internal_25508fff55ab17c7f8f2f8c4b1ed99327b8bdf2b6bc16afecd35c1d64d3230ab_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_516c46fd577ff71969bf8128df6e70dcf01a056f365c95d3923970cbb72e796d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_516c46fd577ff71969bf8128df6e70dcf01a056f365c95d3923970cbb72e796d->enter($__internal_516c46fd577ff71969bf8128df6e70dcf01a056f365c95d3923970cbb72e796d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_699c3edd79a5f11abeb31f1eabb0bb00e4f9bb0b69bde807466a309ad9e921e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_699c3edd79a5f11abeb31f1eabb0bb00e4f9bb0b69bde807466a309ad9e921e7->enter($__internal_699c3edd79a5f11abeb31f1eabb0bb00e4f9bb0b69bde807466a309ad9e921e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<div class=\"row\">
    <div class=\"col-md-12 col-sm-12 col-xs-12\">
        <div class=\"x_panel\">
            <div class=\"x_title\">

                <ul class=\"nav navbar-right panel_toolbox\">
                </ul>
                <div class=\"clearfix\"></div>
            </div>
            <div class=\"x_content\">
                <br />

                <div class=\"col-md-2\"></div>
                <div class=\"container\">
                    <div class=\"col-md-8\">

                    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
        <p>";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

";
        
        $__internal_699c3edd79a5f11abeb31f1eabb0bb00e4f9bb0b69bde807466a309ad9e921e7->leave($__internal_699c3edd79a5f11abeb31f1eabb0bb00e4f9bb0b69bde807466a309ad9e921e7_prof);

        
        $__internal_516c46fd577ff71969bf8128df6e70dcf01a056f365c95d3923970cbb72e796d->leave($__internal_516c46fd577ff71969bf8128df6e70dcf01a056f365c95d3923970cbb72e796d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 22,  67 => 21,  49 => 5,  40 => 4,  11 => 2,);
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
{% extends 'base.html.twig' %}

{% block body %}
<div class=\"row\">
    <div class=\"col-md-12 col-sm-12 col-xs-12\">
        <div class=\"x_panel\">
            <div class=\"x_title\">

                <ul class=\"nav navbar-right panel_toolbox\">
                </ul>
                <div class=\"clearfix\"></div>
            </div>
            <div class=\"x_content\">
                <br />

                <div class=\"col-md-2\"></div>
                <div class=\"container\">
                    <div class=\"col-md-8\">

                    <p>{{ 'profile.show.username'|trans }}: {{ user.username }}</p>
        <p>{{ 'profile.show.email'|trans }}: {{ user.email }}</p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{% endblock %}

", "FOSUserBundle:Profile:show_content.html.twig", "C:\\wamp64\\www\\ProjetPiDev\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Profile/show_content.html.twig");
    }
}
