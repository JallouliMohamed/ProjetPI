<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_7777822de53ec48cde1e6b1498729b3ec5f3b2a103f56987a7f61b6302817298 extends Twig_Template
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
        $__internal_66fe5bae1a1eb0db1b4d6d06aa8c7467e42182dbc5ad4d397d82e88d1cf7ccdd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66fe5bae1a1eb0db1b4d6d06aa8c7467e42182dbc5ad4d397d82e88d1cf7ccdd->enter($__internal_66fe5bae1a1eb0db1b4d6d06aa8c7467e42182dbc5ad4d397d82e88d1cf7ccdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_fffd70068945deb4330d4e8e4ef28b6f3f431a470a72d8f4e9cc0325eb8adda6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fffd70068945deb4330d4e8e4ef28b6f3f431a470a72d8f4e9cc0325eb8adda6->enter($__internal_fffd70068945deb4330d4e8e4ef28b6f3f431a470a72d8f4e9cc0325eb8adda6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_66fe5bae1a1eb0db1b4d6d06aa8c7467e42182dbc5ad4d397d82e88d1cf7ccdd->leave($__internal_66fe5bae1a1eb0db1b4d6d06aa8c7467e42182dbc5ad4d397d82e88d1cf7ccdd_prof);

        
        $__internal_fffd70068945deb4330d4e8e4ef28b6f3f431a470a72d8f4e9cc0325eb8adda6->leave($__internal_fffd70068945deb4330d4e8e4ef28b6f3f431a470a72d8f4e9cc0325eb8adda6_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
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
", "@Twig/Exception/error.atom.twig", "C:\\wamp64\\www\\ProjetPiDev\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.atom.twig");
    }
}
