<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_a257871ca6ba481fc6f894714a522744290b5da65afb1537e1d69907df0dd611 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_219e5e5640ad13c23402c7348efef90b53eab21a57016b52fc87229e8cbd27d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_219e5e5640ad13c23402c7348efef90b53eab21a57016b52fc87229e8cbd27d3->enter($__internal_219e5e5640ad13c23402c7348efef90b53eab21a57016b52fc87229e8cbd27d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        $__internal_109316e5facde330cfd75eb070916af7e9881a07a01284c6aba3e9854b1c9f89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_109316e5facde330cfd75eb070916af7e9881a07a01284c6aba3e9854b1c9f89->enter($__internal_109316e5facde330cfd75eb070916af7e9881a07a01284c6aba3e9854b1c9f89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_219e5e5640ad13c23402c7348efef90b53eab21a57016b52fc87229e8cbd27d3->leave($__internal_219e5e5640ad13c23402c7348efef90b53eab21a57016b52fc87229e8cbd27d3_prof);

        
        $__internal_109316e5facde330cfd75eb070916af7e9881a07a01284c6aba3e9854b1c9f89->leave($__internal_109316e5facde330cfd75eb070916af7e9881a07a01284c6aba3e9854b1c9f89_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_9bb52e8d493856e24ccc87b17191f409876e1cfe83e2a21bc3e98dd973fda1c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9bb52e8d493856e24ccc87b17191f409876e1cfe83e2a21bc3e98dd973fda1c7->enter($__internal_9bb52e8d493856e24ccc87b17191f409876e1cfe83e2a21bc3e98dd973fda1c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_2039fda21311a97ae8f7bec47c81ca70bc6e20a509127aca9399114f359e5f95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2039fda21311a97ae8f7bec47c81ca70bc6e20a509127aca9399114f359e5f95->enter($__internal_2039fda21311a97ae8f7bec47c81ca70bc6e20a509127aca9399114f359e5f95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_2039fda21311a97ae8f7bec47c81ca70bc6e20a509127aca9399114f359e5f95->leave($__internal_2039fda21311a97ae8f7bec47c81ca70bc6e20a509127aca9399114f359e5f95_prof);

        
        $__internal_9bb52e8d493856e24ccc87b17191f409876e1cfe83e2a21bc3e98dd973fda1c7->leave($__internal_9bb52e8d493856e24ccc87b17191f409876e1cfe83e2a21bc3e98dd973fda1c7_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_1921b435b759f1497f542494f610452f418f137da69a9ac95ab3a82740119c0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1921b435b759f1497f542494f610452f418f137da69a9ac95ab3a82740119c0f->enter($__internal_1921b435b759f1497f542494f610452f418f137da69a9ac95ab3a82740119c0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_cdd68b93c3271bf3c2641ccf77c47db49e3ff7e1827865b574eb6cee8b9785f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdd68b93c3271bf3c2641ccf77c47db49e3ff7e1827865b574eb6cee8b9785f4->enter($__internal_cdd68b93c3271bf3c2641ccf77c47db49e3ff7e1827865b574eb6cee8b9785f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_cdd68b93c3271bf3c2641ccf77c47db49e3ff7e1827865b574eb6cee8b9785f4->leave($__internal_cdd68b93c3271bf3c2641ccf77c47db49e3ff7e1827865b574eb6cee8b9785f4_prof);

        
        $__internal_1921b435b759f1497f542494f610452f418f137da69a9ac95ab3a82740119c0f->leave($__internal_1921b435b759f1497f542494f610452f418f137da69a9ac95ab3a82740119c0f_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_617a5ea28d94e510989fe214ee661dcd65317429e847beba3e0e12373f21825c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_617a5ea28d94e510989fe214ee661dcd65317429e847beba3e0e12373f21825c->enter($__internal_617a5ea28d94e510989fe214ee661dcd65317429e847beba3e0e12373f21825c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_f58f1cd19688973909644319a55b90660f1dc674ac4a6afad5875a66d8122b3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f58f1cd19688973909644319a55b90660f1dc674ac4a6afad5875a66d8122b3d->enter($__internal_f58f1cd19688973909644319a55b90660f1dc674ac4a6afad5875a66d8122b3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_f58f1cd19688973909644319a55b90660f1dc674ac4a6afad5875a66d8122b3d->leave($__internal_f58f1cd19688973909644319a55b90660f1dc674ac4a6afad5875a66d8122b3d_prof);

        
        $__internal_617a5ea28d94e510989fe214ee661dcd65317429e847beba3e0e12373f21825c->leave($__internal_617a5ea28d94e510989fe214ee661dcd65317429e847beba3e0e12373f21825c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  85 => 13,  73 => 10,  64 => 8,  54 => 4,  45 => 2,  35 => 13,  33 => 8,  30 => 7,  28 => 2,);
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
{% block subject %}
{%- autoescape false -%}
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Registration:email.txt.twig", "C:\\wamp64\\www\\ProjetPiDev\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Registration/email.txt.twig");
    }
}
