<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_bcc2518aea8cb9ab80d94fdf8c1fb361d7b01c3da59b314863ad98fc79d6f4b1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
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
        $__internal_f8e2685adf87c9961147e1f910072fff467ab69f925affcf38d5062dd0085323 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8e2685adf87c9961147e1f910072fff467ab69f925affcf38d5062dd0085323->enter($__internal_f8e2685adf87c9961147e1f910072fff467ab69f925affcf38d5062dd0085323_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_16db59f7c3ff7434b6bd5dcb52f71eacdc1eae26543b5e59b43facb3a90752cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16db59f7c3ff7434b6bd5dcb52f71eacdc1eae26543b5e59b43facb3a90752cd->enter($__internal_16db59f7c3ff7434b6bd5dcb52f71eacdc1eae26543b5e59b43facb3a90752cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f8e2685adf87c9961147e1f910072fff467ab69f925affcf38d5062dd0085323->leave($__internal_f8e2685adf87c9961147e1f910072fff467ab69f925affcf38d5062dd0085323_prof);

        
        $__internal_16db59f7c3ff7434b6bd5dcb52f71eacdc1eae26543b5e59b43facb3a90752cd->leave($__internal_16db59f7c3ff7434b6bd5dcb52f71eacdc1eae26543b5e59b43facb3a90752cd_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_30660645dd9bab2267f8650a602042b9869d6feaa65ba8994a589cef0928f09a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30660645dd9bab2267f8650a602042b9869d6feaa65ba8994a589cef0928f09a->enter($__internal_30660645dd9bab2267f8650a602042b9869d6feaa65ba8994a589cef0928f09a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_c2483246a84daa3ab7c731dfa875b0175af7c1389536fcdf0025ea718022bc18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2483246a84daa3ab7c731dfa875b0175af7c1389536fcdf0025ea718022bc18->enter($__internal_c2483246a84daa3ab7c731dfa875b0175af7c1389536fcdf0025ea718022bc18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_c2483246a84daa3ab7c731dfa875b0175af7c1389536fcdf0025ea718022bc18->leave($__internal_c2483246a84daa3ab7c731dfa875b0175af7c1389536fcdf0025ea718022bc18_prof);

        
        $__internal_30660645dd9bab2267f8650a602042b9869d6feaa65ba8994a589cef0928f09a->leave($__internal_30660645dd9bab2267f8650a602042b9869d6feaa65ba8994a589cef0928f09a_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_bb7e2dd9ff7e229e3ffa2e83c0e0c2d99a3b3efc2854d0d371dde73c08083eaf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb7e2dd9ff7e229e3ffa2e83c0e0c2d99a3b3efc2854d0d371dde73c08083eaf->enter($__internal_bb7e2dd9ff7e229e3ffa2e83c0e0c2d99a3b3efc2854d0d371dde73c08083eaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d5016b9a4aabc62f61fdea7da2f5069df998d2b0e5f7d1d36ea010e749c1e592 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5016b9a4aabc62f61fdea7da2f5069df998d2b0e5f7d1d36ea010e749c1e592->enter($__internal_d5016b9a4aabc62f61fdea7da2f5069df998d2b0e5f7d1d36ea010e749c1e592_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_d5016b9a4aabc62f61fdea7da2f5069df998d2b0e5f7d1d36ea010e749c1e592->leave($__internal_d5016b9a4aabc62f61fdea7da2f5069df998d2b0e5f7d1d36ea010e749c1e592_prof);

        
        $__internal_bb7e2dd9ff7e229e3ffa2e83c0e0c2d99a3b3efc2854d0d371dde73c08083eaf->leave($__internal_bb7e2dd9ff7e229e3ffa2e83c0e0c2d99a3b3efc2854d0d371dde73c08083eaf_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
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
", "WebProfilerBundle:Profiler:info.html.twig", "C:\\wamp64\\www\\ProjetPiDev\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
