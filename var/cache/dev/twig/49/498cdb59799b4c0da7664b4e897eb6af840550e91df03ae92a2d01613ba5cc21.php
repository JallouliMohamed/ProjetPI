<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_406d9de659f640c6ee2abdf4cb0aab3422053b2c7d2b921870d58cfa8843ceda extends Twig_Template
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
        $__internal_471f106dffdead83b33faa03f95433f182020fbe805d55405755f2cd52462f1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_471f106dffdead83b33faa03f95433f182020fbe805d55405755f2cd52462f1b->enter($__internal_471f106dffdead83b33faa03f95433f182020fbe805d55405755f2cd52462f1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_57af29e0de89056b0c2e23e22835d07c6ba90f01c44cdd81bb71baef4755089c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57af29e0de89056b0c2e23e22835d07c6ba90f01c44cdd81bb71baef4755089c->enter($__internal_57af29e0de89056b0c2e23e22835d07c6ba90f01c44cdd81bb71baef4755089c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_471f106dffdead83b33faa03f95433f182020fbe805d55405755f2cd52462f1b->leave($__internal_471f106dffdead83b33faa03f95433f182020fbe805d55405755f2cd52462f1b_prof);

        
        $__internal_57af29e0de89056b0c2e23e22835d07c6ba90f01c44cdd81bb71baef4755089c->leave($__internal_57af29e0de89056b0c2e23e22835d07c6ba90f01c44cdd81bb71baef4755089c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "C:\\wamp64\\www\\ProjetPiDev\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
