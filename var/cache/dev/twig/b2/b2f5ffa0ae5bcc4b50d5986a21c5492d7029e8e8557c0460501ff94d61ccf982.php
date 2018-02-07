<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_7c5b9065500a5389b18c52d5579df957534858362bda2fc8dbd1b42e7d402f98 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_d7c99418259d0b9b630e2dcbe618e658c44089e82702d496c8cfec08eac385bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7c99418259d0b9b630e2dcbe618e658c44089e82702d496c8cfec08eac385bb->enter($__internal_d7c99418259d0b9b630e2dcbe618e658c44089e82702d496c8cfec08eac385bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $__internal_6491268c585c49439e7def9226c458e821b1d331560f5e90a9e8d5afc75c72f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6491268c585c49439e7def9226c458e821b1d331560f5e90a9e8d5afc75c72f8->enter($__internal_6491268c585c49439e7def9226c458e821b1d331560f5e90a9e8d5afc75c72f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d7c99418259d0b9b630e2dcbe618e658c44089e82702d496c8cfec08eac385bb->leave($__internal_d7c99418259d0b9b630e2dcbe618e658c44089e82702d496c8cfec08eac385bb_prof);

        
        $__internal_6491268c585c49439e7def9226c458e821b1d331560f5e90a9e8d5afc75c72f8->leave($__internal_6491268c585c49439e7def9226c458e821b1d331560f5e90a9e8d5afc75c72f8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_814fa71aa6ed0b31a0923de91baf3e0388385a9dabd7e92785080296bf17e848 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_814fa71aa6ed0b31a0923de91baf3e0388385a9dabd7e92785080296bf17e848->enter($__internal_814fa71aa6ed0b31a0923de91baf3e0388385a9dabd7e92785080296bf17e848_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_a9c9aef41b8c02797e2a2ea362ebe9aa5ec82250bb14ab6de4f9b5c4c9e0ba18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9c9aef41b8c02797e2a2ea362ebe9aa5ec82250bb14ab6de4f9b5c4c9e0ba18->enter($__internal_a9c9aef41b8c02797e2a2ea362ebe9aa5ec82250bb14ab6de4f9b5c4c9e0ba18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_a9c9aef41b8c02797e2a2ea362ebe9aa5ec82250bb14ab6de4f9b5c4c9e0ba18->leave($__internal_a9c9aef41b8c02797e2a2ea362ebe9aa5ec82250bb14ab6de4f9b5c4c9e0ba18_prof);

        
        $__internal_814fa71aa6ed0b31a0923de91baf3e0388385a9dabd7e92785080296bf17e848->leave($__internal_814fa71aa6ed0b31a0923de91baf3e0388385a9dabd7e92785080296bf17e848_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
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

{% block fos_user_content %}
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/register.html.twig", "C:\\wamp64\\www\\ProjetPiDev\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Registration\\register.html.twig");
    }
}
