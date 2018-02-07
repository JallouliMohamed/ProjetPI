<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_68f76abea6118cea5736d0f52a0fd202a265b257092251a30bf572abe1978c33 extends Twig_Template
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
        $__internal_60c19c9c170dcb670a21361ef355d2d009eaa1279d09a1033c44dc433467fb7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60c19c9c170dcb670a21361ef355d2d009eaa1279d09a1033c44dc433467fb7c->enter($__internal_60c19c9c170dcb670a21361ef355d2d009eaa1279d09a1033c44dc433467fb7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_6d03ea1313dec355f3f0a40963c83dfbf61e514e2f2fc2a1d4cba641319c84e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d03ea1313dec355f3f0a40963c83dfbf61e514e2f2fc2a1d4cba641319c84e5->enter($__internal_6d03ea1313dec355f3f0a40963c83dfbf61e514e2f2fc2a1d4cba641319c84e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_60c19c9c170dcb670a21361ef355d2d009eaa1279d09a1033c44dc433467fb7c->leave($__internal_60c19c9c170dcb670a21361ef355d2d009eaa1279d09a1033c44dc433467fb7c_prof);

        
        $__internal_6d03ea1313dec355f3f0a40963c83dfbf61e514e2f2fc2a1d4cba641319c84e5->leave($__internal_6d03ea1313dec355f3f0a40963c83dfbf61e514e2f2fc2a1d4cba641319c84e5_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
", "TwigBundle:Exception:error.rdf.twig", "C:\\wamp64\\www\\ProjetPiDev\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
