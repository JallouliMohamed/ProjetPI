<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_b9fb65bc72493479c7f51c7aad99331a6c6d374b8dd94b349df4986ec64e83dd extends Twig_Template
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
        $__internal_9949b5c31c313046f7691e3dde6858d146581be9aa78812f020a9d4f991616b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9949b5c31c313046f7691e3dde6858d146581be9aa78812f020a9d4f991616b6->enter($__internal_9949b5c31c313046f7691e3dde6858d146581be9aa78812f020a9d4f991616b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_07eab5127239912739419cdb7f0bd6abdd79e78089b8bec1be235af44c609a15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07eab5127239912739419cdb7f0bd6abdd79e78089b8bec1be235af44c609a15->enter($__internal_07eab5127239912739419cdb7f0bd6abdd79e78089b8bec1be235af44c609a15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_9949b5c31c313046f7691e3dde6858d146581be9aa78812f020a9d4f991616b6->leave($__internal_9949b5c31c313046f7691e3dde6858d146581be9aa78812f020a9d4f991616b6_prof);

        
        $__internal_07eab5127239912739419cdb7f0bd6abdd79e78089b8bec1be235af44c609a15->leave($__internal_07eab5127239912739419cdb7f0bd6abdd79e78089b8bec1be235af44c609a15_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.css.twig", "C:\\wamp64\\www\\ProjetPiDev\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
