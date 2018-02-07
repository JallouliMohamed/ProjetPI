<?php

/* piBundle:Default:homeAdmin.html.twig */
class __TwigTemplate_7984f31530b4d0e335bb060486c23e4b69c76093723cd54656a413f41bb5da54 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::back.html.twig", "piBundle:Default:homeAdmin.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::back.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2bc9df932902fbc6dc45ead6696babad5d4de32508aa36d592aa82eb79900942 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2bc9df932902fbc6dc45ead6696babad5d4de32508aa36d592aa82eb79900942->enter($__internal_2bc9df932902fbc6dc45ead6696babad5d4de32508aa36d592aa82eb79900942_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "piBundle:Default:homeAdmin.html.twig"));

        $__internal_bb764409807454c573d793dae43d0d5701fe4ec3e3d3222e53892cf859a2c8c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb764409807454c573d793dae43d0d5701fe4ec3e3d3222e53892cf859a2c8c0->enter($__internal_bb764409807454c573d793dae43d0d5701fe4ec3e3d3222e53892cf859a2c8c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "piBundle:Default:homeAdmin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2bc9df932902fbc6dc45ead6696babad5d4de32508aa36d592aa82eb79900942->leave($__internal_2bc9df932902fbc6dc45ead6696babad5d4de32508aa36d592aa82eb79900942_prof);

        
        $__internal_bb764409807454c573d793dae43d0d5701fe4ec3e3d3222e53892cf859a2c8c0->leave($__internal_bb764409807454c573d793dae43d0d5701fe4ec3e3d3222e53892cf859a2c8c0_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_df24c34dbb8240907e7bf6766bfeb3e1c8da5c282ecf71b70b7c0df5e2eed80f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df24c34dbb8240907e7bf6766bfeb3e1c8da5c282ecf71b70b7c0df5e2eed80f->enter($__internal_df24c34dbb8240907e7bf6766bfeb3e1c8da5c282ecf71b70b7c0df5e2eed80f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5f8f1732e3127be0017e9df580c18b9f45ad77b58eb4a55030fbc13ee9eed6f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f8f1732e3127be0017e9df580c18b9f45ad77b58eb4a55030fbc13ee9eed6f6->enter($__internal_5f8f1732e3127be0017e9df580c18b9f45ad77b58eb4a55030fbc13ee9eed6f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <h1>hello</h1>
";
        
        $__internal_5f8f1732e3127be0017e9df580c18b9f45ad77b58eb4a55030fbc13ee9eed6f6->leave($__internal_5f8f1732e3127be0017e9df580c18b9f45ad77b58eb4a55030fbc13ee9eed6f6_prof);

        
        $__internal_df24c34dbb8240907e7bf6766bfeb3e1c8da5c282ecf71b70b7c0df5e2eed80f->leave($__internal_df24c34dbb8240907e7bf6766bfeb3e1c8da5c282ecf71b70b7c0df5e2eed80f_prof);

    }

    public function getTemplateName()
    {
        return "piBundle:Default:homeAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 3,  40 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::back.html.twig\" %}
{% block body %}
    <h1>hello</h1>
{% endblock %}", "piBundle:Default:homeAdmin.html.twig", "C:\\wamp64\\www\\ProjetPiDev\\src\\piBundle\\Resources\\views\\Default\\homeAdmin.html.twig");
    }
}
