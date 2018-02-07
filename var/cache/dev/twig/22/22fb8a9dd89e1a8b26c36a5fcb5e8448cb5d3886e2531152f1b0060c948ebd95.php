<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_d3afc29d157b6d6dbdafe5bee47b4fc34fd39e214e43486a07b61d94362a0e09 extends Twig_Template
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
        $__internal_174ac9cdce452657346c06c160e8b9c92783095c2120d546bb2c140cc4b36a4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_174ac9cdce452657346c06c160e8b9c92783095c2120d546bb2c140cc4b36a4c->enter($__internal_174ac9cdce452657346c06c160e8b9c92783095c2120d546bb2c140cc4b36a4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_666ac6288209a682692e74d9a61dbc6140e9e7ffa8698e848269d9dd028a339d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_666ac6288209a682692e74d9a61dbc6140e9e7ffa8698e848269d9dd028a339d->enter($__internal_666ac6288209a682692e74d9a61dbc6140e9e7ffa8698e848269d9dd028a339d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_174ac9cdce452657346c06c160e8b9c92783095c2120d546bb2c140cc4b36a4c->leave($__internal_174ac9cdce452657346c06c160e8b9c92783095c2120d546bb2c140cc4b36a4c_prof);

        
        $__internal_666ac6288209a682692e74d9a61dbc6140e9e7ffa8698e848269d9dd028a339d->leave($__internal_666ac6288209a682692e74d9a61dbc6140e9e7ffa8698e848269d9dd028a339d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
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
", "@Twig/Exception/exception.rdf.twig", "C:\\wamp64\\www\\ProjetPiDev\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.rdf.twig");
    }
}
