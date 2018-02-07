<?php

/* piBundle:Default:index.html.twig */
class __TwigTemplate_768b3831a9129f2427fb118524b05c4d4fdf057fa9c4f34490404a502492191b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "piBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a429d3c48e33d301d8793b678bc9542b99d688ada8127ec67544525dab17df86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a429d3c48e33d301d8793b678bc9542b99d688ada8127ec67544525dab17df86->enter($__internal_a429d3c48e33d301d8793b678bc9542b99d688ada8127ec67544525dab17df86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "piBundle:Default:index.html.twig"));

        $__internal_a449daddc3830fc53843aab648ff689cc65649e583e9bd35ac377e3a8d1fc058 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a449daddc3830fc53843aab648ff689cc65649e583e9bd35ac377e3a8d1fc058->enter($__internal_a449daddc3830fc53843aab648ff689cc65649e583e9bd35ac377e3a8d1fc058_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "piBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a429d3c48e33d301d8793b678bc9542b99d688ada8127ec67544525dab17df86->leave($__internal_a429d3c48e33d301d8793b678bc9542b99d688ada8127ec67544525dab17df86_prof);

        
        $__internal_a449daddc3830fc53843aab648ff689cc65649e583e9bd35ac377e3a8d1fc058->leave($__internal_a449daddc3830fc53843aab648ff689cc65649e583e9bd35ac377e3a8d1fc058_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_3e93ca6d2c4d6f270b6487522e88ff104617d55d1d91d432339224e1820a1ab4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e93ca6d2c4d6f270b6487522e88ff104617d55d1d91d432339224e1820a1ab4->enter($__internal_3e93ca6d2c4d6f270b6487522e88ff104617d55d1d91d432339224e1820a1ab4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b77573266b937cf570bdac2dfe504e0271f0f632c5a529d6a1cfa8d3cad75c97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b77573266b937cf570bdac2dfe504e0271f0f632c5a529d6a1cfa8d3cad75c97->enter($__internal_b77573266b937cf570bdac2dfe504e0271f0f632c5a529d6a1cfa8d3cad75c97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <h1>hello</h1>
";
        
        $__internal_b77573266b937cf570bdac2dfe504e0271f0f632c5a529d6a1cfa8d3cad75c97->leave($__internal_b77573266b937cf570bdac2dfe504e0271f0f632c5a529d6a1cfa8d3cad75c97_prof);

        
        $__internal_3e93ca6d2c4d6f270b6487522e88ff104617d55d1d91d432339224e1820a1ab4->leave($__internal_3e93ca6d2c4d6f270b6487522e88ff104617d55d1d91d432339224e1820a1ab4_prof);

    }

    public function getTemplateName()
    {
        return "piBundle:Default:index.html.twig";
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
        return new Twig_Source("{% extends \"::base.html.twig\" %}
{% block body %}
    <h1>hello</h1>
{% endblock %}", "piBundle:Default:index.html.twig", "C:\\wamp64\\www\\ProjetPiDev\\src\\piBundle/Resources/views/Default/index.html.twig");
    }
}
