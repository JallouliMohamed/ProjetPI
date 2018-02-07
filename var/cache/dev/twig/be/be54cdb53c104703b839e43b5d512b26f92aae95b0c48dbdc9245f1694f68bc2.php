<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_e8f8063ac6bd260ef6c0a28aa3322274ca59c2982db7b9d4765d55e558ca1d60 extends Twig_Template
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
        $__internal_685084297502e904c6681fb11067b6d46408405aef9d870504f457f4ca756133 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_685084297502e904c6681fb11067b6d46408405aef9d870504f457f4ca756133->enter($__internal_685084297502e904c6681fb11067b6d46408405aef9d870504f457f4ca756133_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_bebfd7aa0ed08530909422db9ccd8069eddc9d3650679a51b3073f47295cf9cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bebfd7aa0ed08530909422db9ccd8069eddc9d3650679a51b3073f47295cf9cb->enter($__internal_bebfd7aa0ed08530909422db9ccd8069eddc9d3650679a51b3073f47295cf9cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_685084297502e904c6681fb11067b6d46408405aef9d870504f457f4ca756133->leave($__internal_685084297502e904c6681fb11067b6d46408405aef9d870504f457f4ca756133_prof);

        
        $__internal_bebfd7aa0ed08530909422db9ccd8069eddc9d3650679a51b3073f47295cf9cb->leave($__internal_bebfd7aa0ed08530909422db9ccd8069eddc9d3650679a51b3073f47295cf9cb_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
", "TwigBundle:Exception:exception.rdf.twig", "C:\\wamp64\\www\\ProjetPiDev\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
