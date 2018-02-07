<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_fce39efea6c0d6d0d78ea7f3bb491204efd73a555f678e7ad8cc4e02974c9c3e extends Twig_Template
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
        $__internal_c219e53b94c17d22f578ebd5bc2d4d3dd0940c59488a577ab95e9ac68b33b4c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c219e53b94c17d22f578ebd5bc2d4d3dd0940c59488a577ab95e9ac68b33b4c7->enter($__internal_c219e53b94c17d22f578ebd5bc2d4d3dd0940c59488a577ab95e9ac68b33b4c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        $__internal_e169744b663ac9e10abd32a278e8a687b862cae663ccc5ada40910c1d2dfd5fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e169744b663ac9e10abd32a278e8a687b862cae663ccc5ada40910c1d2dfd5fa->enter($__internal_e169744b663ac9e10abd32a278e8a687b862cae663ccc5ada40910c1d2dfd5fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_c219e53b94c17d22f578ebd5bc2d4d3dd0940c59488a577ab95e9ac68b33b4c7->leave($__internal_c219e53b94c17d22f578ebd5bc2d4d3dd0940c59488a577ab95e9ac68b33b4c7_prof);

        
        $__internal_e169744b663ac9e10abd32a278e8a687b862cae663ccc5ada40910c1d2dfd5fa->leave($__internal_e169744b663ac9e10abd32a278e8a687b862cae663ccc5ada40910c1d2dfd5fa_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "@Twig/Exception/error.txt.twig", "C:\\wamp64\\www\\ProjetPiDev\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.txt.twig");
    }
}
