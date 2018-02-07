<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_0ec15115cbc7bccd896f1b1f70dd7ad14850ab40a967e402d122caa980a41ea8 extends Twig_Template
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
        $__internal_d25697e9bb1835bcffe7642896491e5d32b44499560ed5549d96ca5b816e1f43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d25697e9bb1835bcffe7642896491e5d32b44499560ed5549d96ca5b816e1f43->enter($__internal_d25697e9bb1835bcffe7642896491e5d32b44499560ed5549d96ca5b816e1f43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_4945b2a719a5d67d3b8465f8cad49e5b185c00f9e3c9645e860c75444df67685 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4945b2a719a5d67d3b8465f8cad49e5b185c00f9e3c9645e860c75444df67685->enter($__internal_4945b2a719a5d67d3b8465f8cad49e5b185c00f9e3c9645e860c75444df67685_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_d25697e9bb1835bcffe7642896491e5d32b44499560ed5549d96ca5b816e1f43->leave($__internal_d25697e9bb1835bcffe7642896491e5d32b44499560ed5549d96ca5b816e1f43_prof);

        
        $__internal_4945b2a719a5d67d3b8465f8cad49e5b185c00f9e3c9645e860c75444df67685->leave($__internal_4945b2a719a5d67d3b8465f8cad49e5b185c00f9e3c9645e860c75444df67685_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
", "TwigBundle:Exception:exception.css.twig", "C:\\wamp64\\www\\ProjetPiDev\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
