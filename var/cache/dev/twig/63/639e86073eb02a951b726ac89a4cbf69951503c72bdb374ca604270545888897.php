<?php

/* piBundle:Default:homeAdmin.html.twig */
class __TwigTemplate_1ba31a357f80b84b73816fe6474bff3037ffb8f7488ee75cff43b8f357e59301 extends Twig_Template
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
        $__internal_8747d05264f8d366e89bfd2c87b5e38faecc4e31e5242d77f08f55717a65fe07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8747d05264f8d366e89bfd2c87b5e38faecc4e31e5242d77f08f55717a65fe07->enter($__internal_8747d05264f8d366e89bfd2c87b5e38faecc4e31e5242d77f08f55717a65fe07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "piBundle:Default:homeAdmin.html.twig"));

        $__internal_1fc28a1be388dbf25b1462a30dcec9debcb6567dea8f58e109a67c2faa8db361 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fc28a1be388dbf25b1462a30dcec9debcb6567dea8f58e109a67c2faa8db361->enter($__internal_1fc28a1be388dbf25b1462a30dcec9debcb6567dea8f58e109a67c2faa8db361_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "piBundle:Default:homeAdmin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8747d05264f8d366e89bfd2c87b5e38faecc4e31e5242d77f08f55717a65fe07->leave($__internal_8747d05264f8d366e89bfd2c87b5e38faecc4e31e5242d77f08f55717a65fe07_prof);

        
        $__internal_1fc28a1be388dbf25b1462a30dcec9debcb6567dea8f58e109a67c2faa8db361->leave($__internal_1fc28a1be388dbf25b1462a30dcec9debcb6567dea8f58e109a67c2faa8db361_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_7aa42732949cb9bc0834e84489db0231176b0f8d94416175d55fda9d6445f15a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7aa42732949cb9bc0834e84489db0231176b0f8d94416175d55fda9d6445f15a->enter($__internal_7aa42732949cb9bc0834e84489db0231176b0f8d94416175d55fda9d6445f15a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2e5c93721a1e99f76e10cb482758517874874cb163c601e0e75ba305ad0dd4fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e5c93721a1e99f76e10cb482758517874874cb163c601e0e75ba305ad0dd4fa->enter($__internal_2e5c93721a1e99f76e10cb482758517874874cb163c601e0e75ba305ad0dd4fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <h1>hello</h1>
";
        
        $__internal_2e5c93721a1e99f76e10cb482758517874874cb163c601e0e75ba305ad0dd4fa->leave($__internal_2e5c93721a1e99f76e10cb482758517874874cb163c601e0e75ba305ad0dd4fa_prof);

        
        $__internal_7aa42732949cb9bc0834e84489db0231176b0f8d94416175d55fda9d6445f15a->leave($__internal_7aa42732949cb9bc0834e84489db0231176b0f8d94416175d55fda9d6445f15a_prof);

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
{% endblock %}", "piBundle:Default:homeAdmin.html.twig", "C:\\wamp64\\www\\ProjetPiDev\\src\\piBundle/Resources/views/Default/homeAdmin.html.twig");
    }
}
