<?php

/* @WebProfiler/Profiler/info.html.twig */
class __TwigTemplate_6dd5fde8c04f95064acde6414427ce19f673a4f093528a1d70952c8ae57addfe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Profiler/info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8949870696eff823b7d09f52945e4ea6c37bb6c70a60989a4ddfd546b9854e51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8949870696eff823b7d09f52945e4ea6c37bb6c70a60989a4ddfd546b9854e51->enter($__internal_8949870696eff823b7d09f52945e4ea6c37bb6c70a60989a4ddfd546b9854e51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_4b40b49a137d00240b6c62eca384ed04ddb9667000bc40a9383fa3f4ba632520 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b40b49a137d00240b6c62eca384ed04ddb9667000bc40a9383fa3f4ba632520->enter($__internal_4b40b49a137d00240b6c62eca384ed04ddb9667000bc40a9383fa3f4ba632520_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8949870696eff823b7d09f52945e4ea6c37bb6c70a60989a4ddfd546b9854e51->leave($__internal_8949870696eff823b7d09f52945e4ea6c37bb6c70a60989a4ddfd546b9854e51_prof);

        
        $__internal_4b40b49a137d00240b6c62eca384ed04ddb9667000bc40a9383fa3f4ba632520->leave($__internal_4b40b49a137d00240b6c62eca384ed04ddb9667000bc40a9383fa3f4ba632520_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_7ef529b941d03db5ff528c743e3028cb82ff0ac56033c58f499bc43858e07233 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ef529b941d03db5ff528c743e3028cb82ff0ac56033c58f499bc43858e07233->enter($__internal_7ef529b941d03db5ff528c743e3028cb82ff0ac56033c58f499bc43858e07233_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_123c58a5bf11bb67f243d761d022203d87342777eeb3e9c41925ad30c9a3b6be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_123c58a5bf11bb67f243d761d022203d87342777eeb3e9c41925ad30c9a3b6be->enter($__internal_123c58a5bf11bb67f243d761d022203d87342777eeb3e9c41925ad30c9a3b6be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 12
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 14
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_123c58a5bf11bb67f243d761d022203d87342777eeb3e9c41925ad30c9a3b6be->leave($__internal_123c58a5bf11bb67f243d761d022203d87342777eeb3e9c41925ad30c9a3b6be_prof);

        
        $__internal_7ef529b941d03db5ff528c743e3028cb82ff0ac56033c58f499bc43858e07233->leave($__internal_7ef529b941d03db5ff528c743e3028cb82ff0ac56033c58f499bc43858e07233_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4253473490c9f5abbbaac63f22619c066df8f7c3595626c9705f791c959d1041 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4253473490c9f5abbbaac63f22619c066df8f7c3595626c9705f791c959d1041->enter($__internal_4253473490c9f5abbbaac63f22619c066df8f7c3595626c9705f791c959d1041_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_db17b90ce42eda0280e475080a004893d2736ec8b51f5841b603d946951a5962 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db17b90ce42eda0280e475080a004893d2736ec8b51f5841b603d946951a5962->enter($__internal_db17b90ce42eda0280e475080a004893d2736ec8b51f5841b603d946951a5962_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_db17b90ce42eda0280e475080a004893d2736ec8b51f5841b603d946951a5962->leave($__internal_db17b90ce42eda0280e475080a004893d2736ec8b51f5841b603d946951a5962_prof);

        
        $__internal_4253473490c9f5abbbaac63f22619c066df8f7c3595626c9705f791c959d1041->leave($__internal_4253473490c9f5abbbaac63f22619c066df8f7c3595626c9705f791c959d1041_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 21,  84 => 20,  75 => 19,  61 => 14,  55 => 12,  46 => 11,  36 => 1,  34 => 7,  33 => 6,  32 => 3,  11 => 1,);
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

{% set messages = {
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "@WebProfiler/Profiler/info.html.twig", "C:\\wamp64\\www\\ProjetPiDev\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\info.html.twig");
    }
}
