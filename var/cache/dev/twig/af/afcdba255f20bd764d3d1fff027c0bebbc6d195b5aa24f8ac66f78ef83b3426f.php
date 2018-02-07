<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_9f031815d94eb64aefa5483339ca6f40c9251b1c74f220e5d8dbeab6700e70d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
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
        $__internal_6344af14b1812fdfcf1ee96e6f66ce6c4494359c8d73c6c161aa1e4158c65696 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6344af14b1812fdfcf1ee96e6f66ce6c4494359c8d73c6c161aa1e4158c65696->enter($__internal_6344af14b1812fdfcf1ee96e6f66ce6c4494359c8d73c6c161aa1e4158c65696_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $__internal_04f5575a4906f6502e03003032e719b6fed2c518949ec96e037a64cb19bd540c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04f5575a4906f6502e03003032e719b6fed2c518949ec96e037a64cb19bd540c->enter($__internal_04f5575a4906f6502e03003032e719b6fed2c518949ec96e037a64cb19bd540c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6344af14b1812fdfcf1ee96e6f66ce6c4494359c8d73c6c161aa1e4158c65696->leave($__internal_6344af14b1812fdfcf1ee96e6f66ce6c4494359c8d73c6c161aa1e4158c65696_prof);

        
        $__internal_04f5575a4906f6502e03003032e719b6fed2c518949ec96e037a64cb19bd540c->leave($__internal_04f5575a4906f6502e03003032e719b6fed2c518949ec96e037a64cb19bd540c_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3746c31b106b2d86abae02b468a2399dbaa23a7c8983e53a23839bc56187d111 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3746c31b106b2d86abae02b468a2399dbaa23a7c8983e53a23839bc56187d111->enter($__internal_3746c31b106b2d86abae02b468a2399dbaa23a7c8983e53a23839bc56187d111_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_81f9f250e2df986979e1ac3258ade94b00a945483bb13d3152e70519945578bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81f9f250e2df986979e1ac3258ade94b00a945483bb13d3152e70519945578bd->enter($__internal_81f9f250e2df986979e1ac3258ade94b00a945483bb13d3152e70519945578bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_81f9f250e2df986979e1ac3258ade94b00a945483bb13d3152e70519945578bd->leave($__internal_81f9f250e2df986979e1ac3258ade94b00a945483bb13d3152e70519945578bd_prof);

        
        $__internal_3746c31b106b2d86abae02b468a2399dbaa23a7c8983e53a23839bc56187d111->leave($__internal_3746c31b106b2d86abae02b468a2399dbaa23a7c8983e53a23839bc56187d111_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
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
", "FOSUserBundle:Registration:confirmed.html.twig", "C:\\wamp64\\www\\ProjetPiDev\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Registration/confirmed.html.twig");
    }
}
