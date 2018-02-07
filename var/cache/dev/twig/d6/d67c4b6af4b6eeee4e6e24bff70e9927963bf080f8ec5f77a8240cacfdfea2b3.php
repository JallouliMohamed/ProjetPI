<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_c00d31d1deae9319bcc36b9aed717f814b25e360889bca79261d7d4ea8f639ca extends Twig_Template
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
        $__internal_612c2ad3bd22080fe2f0b5823a171bf2e1eb583b7e3630b1974a6b969947c775 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_612c2ad3bd22080fe2f0b5823a171bf2e1eb583b7e3630b1974a6b969947c775->enter($__internal_612c2ad3bd22080fe2f0b5823a171bf2e1eb583b7e3630b1974a6b969947c775_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_25a24cafb8f9e92090bc15aa250e6392a805353b8f1301df61dd520fcf95e092 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25a24cafb8f9e92090bc15aa250e6392a805353b8f1301df61dd520fcf95e092->enter($__internal_25a24cafb8f9e92090bc15aa250e6392a805353b8f1301df61dd520fcf95e092_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_612c2ad3bd22080fe2f0b5823a171bf2e1eb583b7e3630b1974a6b969947c775->leave($__internal_612c2ad3bd22080fe2f0b5823a171bf2e1eb583b7e3630b1974a6b969947c775_prof);

        
        $__internal_25a24cafb8f9e92090bc15aa250e6392a805353b8f1301df61dd520fcf95e092->leave($__internal_25a24cafb8f9e92090bc15aa250e6392a805353b8f1301df61dd520fcf95e092_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "@Twig/Exception/exception.js.twig", "C:\\wamp64\\www\\ProjetPiDev\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.js.twig");
    }
}
