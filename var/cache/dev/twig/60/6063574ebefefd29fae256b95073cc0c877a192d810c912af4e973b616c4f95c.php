<?php

/* @FOSUser/Registration/confirmed.html.twig */
class __TwigTemplate_be2c0dc4792edc946e0dd84057ee419940788424bab4fa0b16bf573d4834e00e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/confirmed.html.twig", 1);
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
        $__internal_2a1ad38c70387e0b2603fc82f3eab9fa3f4fb54118d5d5ebefa3320ffb1ce4c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a1ad38c70387e0b2603fc82f3eab9fa3f4fb54118d5d5ebefa3320ffb1ce4c1->enter($__internal_2a1ad38c70387e0b2603fc82f3eab9fa3f4fb54118d5d5ebefa3320ffb1ce4c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $__internal_65c179061ead7597f1afdd7819b4c1adf01af7187984cee793b7ea257b34756c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65c179061ead7597f1afdd7819b4c1adf01af7187984cee793b7ea257b34756c->enter($__internal_65c179061ead7597f1afdd7819b4c1adf01af7187984cee793b7ea257b34756c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2a1ad38c70387e0b2603fc82f3eab9fa3f4fb54118d5d5ebefa3320ffb1ce4c1->leave($__internal_2a1ad38c70387e0b2603fc82f3eab9fa3f4fb54118d5d5ebefa3320ffb1ce4c1_prof);

        
        $__internal_65c179061ead7597f1afdd7819b4c1adf01af7187984cee793b7ea257b34756c->leave($__internal_65c179061ead7597f1afdd7819b4c1adf01af7187984cee793b7ea257b34756c_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_cd7ac6117341242f8bc70d989c87b0278aed4ca93ecfa8f7183e9bca8c24ed7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd7ac6117341242f8bc70d989c87b0278aed4ca93ecfa8f7183e9bca8c24ed7e->enter($__internal_cd7ac6117341242f8bc70d989c87b0278aed4ca93ecfa8f7183e9bca8c24ed7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_12d114bb0504a02758238ee6a7a880390a1b01b1fc15669d3b5db5953522540a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12d114bb0504a02758238ee6a7a880390a1b01b1fc15669d3b5db5953522540a->enter($__internal_12d114bb0504a02758238ee6a7a880390a1b01b1fc15669d3b5db5953522540a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_12d114bb0504a02758238ee6a7a880390a1b01b1fc15669d3b5db5953522540a->leave($__internal_12d114bb0504a02758238ee6a7a880390a1b01b1fc15669d3b5db5953522540a_prof);

        
        $__internal_cd7ac6117341242f8bc70d989c87b0278aed4ca93ecfa8f7183e9bca8c24ed7e->leave($__internal_cd7ac6117341242f8bc70d989c87b0278aed4ca93ecfa8f7183e9bca8c24ed7e_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 8,  54 => 7,  49 => 6,  40 => 5,  11 => 1,);
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

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
    {% if targetUrl %}
    <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
    {% endif %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/confirmed.html.twig", "C:\\wamp64\\www\\ProjetPiDev\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Registration\\confirmed.html.twig");
    }
}
