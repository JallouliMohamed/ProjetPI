<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_07620a6e2f468ccb7d65774c0025d4848029e379e68da8cde83bd90ab25b4fb2 extends Twig_Template
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
        $__internal_e1083dd72e49e68d0df7f8d939a1d8968878c746f7ebae25b4c22d16f8441862 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1083dd72e49e68d0df7f8d939a1d8968878c746f7ebae25b4c22d16f8441862->enter($__internal_e1083dd72e49e68d0df7f8d939a1d8968878c746f7ebae25b4c22d16f8441862_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_82da8da8ada83952ba72b5b02a186c631822e42734e2a95bb8165876ce06a385 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82da8da8ada83952ba72b5b02a186c631822e42734e2a95bb8165876ce06a385->enter($__internal_82da8da8ada83952ba72b5b02a186c631822e42734e2a95bb8165876ce06a385_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_e1083dd72e49e68d0df7f8d939a1d8968878c746f7ebae25b4c22d16f8441862->leave($__internal_e1083dd72e49e68d0df7f8d939a1d8968878c746f7ebae25b4c22d16f8441862_prof);

        
        $__internal_82da8da8ada83952ba72b5b02a186c631822e42734e2a95bb8165876ce06a385->leave($__internal_82da8da8ada83952ba72b5b02a186c631822e42734e2a95bb8165876ce06a385_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "@Twig/Exception/error.rdf.twig", "C:\\wamp64\\www\\ProjetPiDev\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.rdf.twig");
    }
}
