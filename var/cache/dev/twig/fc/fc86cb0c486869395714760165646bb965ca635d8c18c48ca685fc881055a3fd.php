<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_95d2666dfcf4911c73788ab6d3ea37c50361150e4bed5e5495c50692d4ea08aa extends Twig_Template
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
        $__internal_a2fa26b2c60e609fc16b199852b340e48b2ac381308e5e290cef9b6b11ce59d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2fa26b2c60e609fc16b199852b340e48b2ac381308e5e290cef9b6b11ce59d2->enter($__internal_a2fa26b2c60e609fc16b199852b340e48b2ac381308e5e290cef9b6b11ce59d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        $__internal_257d939e20bbfa2b5f9e15cb3f5471ca1a5c6ae059a6abf71dedaa0c4512e531 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_257d939e20bbfa2b5f9e15cb3f5471ca1a5c6ae059a6abf71dedaa0c4512e531->enter($__internal_257d939e20bbfa2b5f9e15cb3f5471ca1a5c6ae059a6abf71dedaa0c4512e531_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_a2fa26b2c60e609fc16b199852b340e48b2ac381308e5e290cef9b6b11ce59d2->leave($__internal_a2fa26b2c60e609fc16b199852b340e48b2ac381308e5e290cef9b6b11ce59d2_prof);

        
        $__internal_257d939e20bbfa2b5f9e15cb3f5471ca1a5c6ae059a6abf71dedaa0c4512e531->leave($__internal_257d939e20bbfa2b5f9e15cb3f5471ca1a5c6ae059a6abf71dedaa0c4512e531_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "@Twig/Exception/error.xml.twig", "C:\\wamp64\\www\\ProjetPiDev\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.xml.twig");
    }
}
