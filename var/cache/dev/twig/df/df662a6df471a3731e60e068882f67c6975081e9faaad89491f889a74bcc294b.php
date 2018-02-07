<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_5bbf62872a324e4d3c772b5a37634c0fdd3a83d3f812c3f5a6845483d8c23e6d extends Twig_Template
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
        $__internal_83a2a4ef7739803022782a8f71f0812089671f4ea72fa32aef7f0dc05330c795 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83a2a4ef7739803022782a8f71f0812089671f4ea72fa32aef7f0dc05330c795->enter($__internal_83a2a4ef7739803022782a8f71f0812089671f4ea72fa32aef7f0dc05330c795_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_f6df293e85d65f00fe4d579432572b148ab9013719afacfce9a4b807ecaf3bd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6df293e85d65f00fe4d579432572b148ab9013719afacfce9a4b807ecaf3bd4->enter($__internal_f6df293e85d65f00fe4d579432572b148ab9013719afacfce9a4b807ecaf3bd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_83a2a4ef7739803022782a8f71f0812089671f4ea72fa32aef7f0dc05330c795->leave($__internal_83a2a4ef7739803022782a8f71f0812089671f4ea72fa32aef7f0dc05330c795_prof);

        
        $__internal_f6df293e85d65f00fe4d579432572b148ab9013719afacfce9a4b807ecaf3bd4->leave($__internal_f6df293e85d65f00fe4d579432572b148ab9013719afacfce9a4b807ecaf3bd4_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
", "TwigBundle:Exception:exception.atom.twig", "C:\\wamp64\\www\\ProjetPiDev\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
