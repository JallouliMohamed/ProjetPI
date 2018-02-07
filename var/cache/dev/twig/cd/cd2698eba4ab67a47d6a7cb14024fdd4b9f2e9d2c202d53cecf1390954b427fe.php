<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_8b42721c6d63495c3ed30c44c0ebfeb47d1976a128a198b05586dfed7d3f3f4d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dda47828f74ab92abcea148ebe5262a2a26759206885abb017bfda1e758d4181 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dda47828f74ab92abcea148ebe5262a2a26759206885abb017bfda1e758d4181->enter($__internal_dda47828f74ab92abcea148ebe5262a2a26759206885abb017bfda1e758d4181_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_916ed9c2c8d7cb474a5c882c0a14fa79bfd5c3894b4cc943975bf70458e90eec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_916ed9c2c8d7cb474a5c882c0a14fa79bfd5c3894b4cc943975bf70458e90eec->enter($__internal_916ed9c2c8d7cb474a5c882c0a14fa79bfd5c3894b4cc943975bf70458e90eec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_dda47828f74ab92abcea148ebe5262a2a26759206885abb017bfda1e758d4181->leave($__internal_dda47828f74ab92abcea148ebe5262a2a26759206885abb017bfda1e758d4181_prof);

        
        $__internal_916ed9c2c8d7cb474a5c882c0a14fa79bfd5c3894b4cc943975bf70458e90eec->leave($__internal_916ed9c2c8d7cb474a5c882c0a14fa79bfd5c3894b4cc943975bf70458e90eec_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "@Twig/Exception/exception.atom.twig", "C:\\wamp64\\www\\ProjetPiDev\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.atom.twig");
    }
}
