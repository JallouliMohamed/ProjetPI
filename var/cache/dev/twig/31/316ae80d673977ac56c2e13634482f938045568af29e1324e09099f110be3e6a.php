<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_351bf3cd346d5b4ab11ba2c773d123344dec44f40a7794368f4f3e092c73b167 extends Twig_Template
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
        $__internal_4cf08a3dda4e169a8cca09d828786ca1b58c54c349516c21032a27af3af5a66d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4cf08a3dda4e169a8cca09d828786ca1b58c54c349516c21032a27af3af5a66d->enter($__internal_4cf08a3dda4e169a8cca09d828786ca1b58c54c349516c21032a27af3af5a66d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_33a879e9566d75b31720bbcab4f589c722fb61965a2e9b2c6041019885d1a8b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33a879e9566d75b31720bbcab4f589c722fb61965a2e9b2c6041019885d1a8b2->enter($__internal_33a879e9566d75b31720bbcab4f589c722fb61965a2e9b2c6041019885d1a8b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_4cf08a3dda4e169a8cca09d828786ca1b58c54c349516c21032a27af3af5a66d->leave($__internal_4cf08a3dda4e169a8cca09d828786ca1b58c54c349516c21032a27af3af5a66d_prof);

        
        $__internal_33a879e9566d75b31720bbcab4f589c722fb61965a2e9b2c6041019885d1a8b2->leave($__internal_33a879e9566d75b31720bbcab4f589c722fb61965a2e9b2c6041019885d1a8b2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
", "TwigBundle:Exception:exception.js.twig", "C:\\wamp64\\www\\ProjetPiDev\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
