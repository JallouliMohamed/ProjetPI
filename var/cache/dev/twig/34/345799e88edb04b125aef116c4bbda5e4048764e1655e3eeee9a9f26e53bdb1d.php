<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_e553e5341e2b5910cc4594d832bf477c8db691a3beca95d8393a645631b516d3 extends Twig_Template
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
        $__internal_ff50ba400a9870d7b4770ae08bfe8de79f830aa443fb87f7e519b6a5ddd4f69b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff50ba400a9870d7b4770ae08bfe8de79f830aa443fb87f7e519b6a5ddd4f69b->enter($__internal_ff50ba400a9870d7b4770ae08bfe8de79f830aa443fb87f7e519b6a5ddd4f69b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        $__internal_7c12d638aeac1795d1ff817d5829af918c6ef5670c0c82ed913525e6495c3f0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c12d638aeac1795d1ff817d5829af918c6ef5670c0c82ed913525e6495c3f0e->enter($__internal_7c12d638aeac1795d1ff817d5829af918c6ef5670c0c82ed913525e6495c3f0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_ff50ba400a9870d7b4770ae08bfe8de79f830aa443fb87f7e519b6a5ddd4f69b->leave($__internal_ff50ba400a9870d7b4770ae08bfe8de79f830aa443fb87f7e519b6a5ddd4f69b_prof);

        
        $__internal_7c12d638aeac1795d1ff817d5829af918c6ef5670c0c82ed913525e6495c3f0e->leave($__internal_7c12d638aeac1795d1ff817d5829af918c6ef5670c0c82ed913525e6495c3f0e_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_b5d027f88a293216c25c92aa9d5b46914a1e83a720d0ebb1c8199c487fdd70f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5d027f88a293216c25c92aa9d5b46914a1e83a720d0ebb1c8199c487fdd70f5->enter($__internal_b5d027f88a293216c25c92aa9d5b46914a1e83a720d0ebb1c8199c487fdd70f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_f0f44e82c57fa652e04e396f4385d044731ed3b7bb90f68d54d6226d042f0bf5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0f44e82c57fa652e04e396f4385d044731ed3b7bb90f68d54d6226d042f0bf5->enter($__internal_f0f44e82c57fa652e04e396f4385d044731ed3b7bb90f68d54d6226d042f0bf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_f0f44e82c57fa652e04e396f4385d044731ed3b7bb90f68d54d6226d042f0bf5->leave($__internal_f0f44e82c57fa652e04e396f4385d044731ed3b7bb90f68d54d6226d042f0bf5_prof);

        
        $__internal_b5d027f88a293216c25c92aa9d5b46914a1e83a720d0ebb1c8199c487fdd70f5->leave($__internal_b5d027f88a293216c25c92aa9d5b46914a1e83a720d0ebb1c8199c487fdd70f5_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_b7ec5d26385c2f66bd25a8d35a73589108c536f9ee2c239981b7e5b8cc8bec92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7ec5d26385c2f66bd25a8d35a73589108c536f9ee2c239981b7e5b8cc8bec92->enter($__internal_b7ec5d26385c2f66bd25a8d35a73589108c536f9ee2c239981b7e5b8cc8bec92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_4f5549147ced7afc382b3e5e48586d774c99fe71f4b051170517e69e607833b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f5549147ced7afc382b3e5e48586d774c99fe71f4b051170517e69e607833b8->enter($__internal_4f5549147ced7afc382b3e5e48586d774c99fe71f4b051170517e69e607833b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_4f5549147ced7afc382b3e5e48586d774c99fe71f4b051170517e69e607833b8->leave($__internal_4f5549147ced7afc382b3e5e48586d774c99fe71f4b051170517e69e607833b8_prof);

        
        $__internal_b7ec5d26385c2f66bd25a8d35a73589108c536f9ee2c239981b7e5b8cc8bec92->leave($__internal_b7ec5d26385c2f66bd25a8d35a73589108c536f9ee2c239981b7e5b8cc8bec92_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_74c8279a5c2277bec1ee30d805d342cadb59b0aef94054f1cdb88617a8f6bb97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74c8279a5c2277bec1ee30d805d342cadb59b0aef94054f1cdb88617a8f6bb97->enter($__internal_74c8279a5c2277bec1ee30d805d342cadb59b0aef94054f1cdb88617a8f6bb97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_dd6ef4851ea4af8f4f1397a4469b8ee2233e1a2ecae789fdc888aa017a671294 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd6ef4851ea4af8f4f1397a4469b8ee2233e1a2ecae789fdc888aa017a671294->enter($__internal_dd6ef4851ea4af8f4f1397a4469b8ee2233e1a2ecae789fdc888aa017a671294_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_dd6ef4851ea4af8f4f1397a4469b8ee2233e1a2ecae789fdc888aa017a671294->leave($__internal_dd6ef4851ea4af8f4f1397a4469b8ee2233e1a2ecae789fdc888aa017a671294_prof);

        
        $__internal_74c8279a5c2277bec1ee30d805d342cadb59b0aef94054f1cdb88617a8f6bb97->leave($__internal_74c8279a5c2277bec1ee30d805d342cadb59b0aef94054f1cdb88617a8f6bb97_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
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
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Resetting:email.txt.twig", "C:\\wamp64\\www\\ProjetPiDev\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Resetting/email.txt.twig");
    }
}
