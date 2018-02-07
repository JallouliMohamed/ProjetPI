<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_4f0793fc4b0888fa842a89754f2a0556a272e7f2049a48ce1f0866dae79babcd extends Twig_Template
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
        $__internal_df3d11a62e528b8452b8d9565bde43a286f015eb7c83a301d984f0e667729420 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df3d11a62e528b8452b8d9565bde43a286f015eb7c83a301d984f0e667729420->enter($__internal_df3d11a62e528b8452b8d9565bde43a286f015eb7c83a301d984f0e667729420_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_597fe7b2b448dee1b545677952d054762d0726e1872861a8df519bd8ce92f693 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_597fe7b2b448dee1b545677952d054762d0726e1872861a8df519bd8ce92f693->enter($__internal_597fe7b2b448dee1b545677952d054762d0726e1872861a8df519bd8ce92f693_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_df3d11a62e528b8452b8d9565bde43a286f015eb7c83a301d984f0e667729420->leave($__internal_df3d11a62e528b8452b8d9565bde43a286f015eb7c83a301d984f0e667729420_prof);

        
        $__internal_597fe7b2b448dee1b545677952d054762d0726e1872861a8df519bd8ce92f693->leave($__internal_597fe7b2b448dee1b545677952d054762d0726e1872861a8df519bd8ce92f693_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
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
", "@Twig/Exception/exception.css.twig", "C:\\wamp64\\www\\ProjetPiDev\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.css.twig");
    }
}
