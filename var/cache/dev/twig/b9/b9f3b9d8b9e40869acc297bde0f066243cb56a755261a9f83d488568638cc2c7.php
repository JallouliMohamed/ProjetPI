<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_e3ed5c2c098b8ccca625018a53a10d9f2c1936203c88ea0aa75a8bde50dbc910 extends Twig_Template
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
        $__internal_3560ee866db8bf5848629f59d3aae6d3137fda1df658d0bed1f69b8c4d2bb8a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3560ee866db8bf5848629f59d3aae6d3137fda1df658d0bed1f69b8c4d2bb8a6->enter($__internal_3560ee866db8bf5848629f59d3aae6d3137fda1df658d0bed1f69b8c4d2bb8a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_c137e926fabdfa62569e84948266426190984b027f3f9f03403b5024b4397c8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c137e926fabdfa62569e84948266426190984b027f3f9f03403b5024b4397c8c->enter($__internal_c137e926fabdfa62569e84948266426190984b027f3f9f03403b5024b4397c8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_3560ee866db8bf5848629f59d3aae6d3137fda1df658d0bed1f69b8c4d2bb8a6->leave($__internal_3560ee866db8bf5848629f59d3aae6d3137fda1df658d0bed1f69b8c4d2bb8a6_prof);

        
        $__internal_c137e926fabdfa62569e84948266426190984b027f3f9f03403b5024b4397c8c->leave($__internal_c137e926fabdfa62569e84948266426190984b027f3f9f03403b5024b4397c8c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "C:\\wamp64\\www\\ProjetPiDev\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
