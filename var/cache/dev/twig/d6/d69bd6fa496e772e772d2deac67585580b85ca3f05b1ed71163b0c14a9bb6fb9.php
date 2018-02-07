<?php

/* piBundle:Default:profileUser.html.twig */
class __TwigTemplate_a1978da9fbdb9e1d97ab71b0a83c5350c8f8067cf1c7d1ba87d6ae8f50c4837a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("profile.html.twig", "piBundle:Default:profileUser.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "profile.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e0e8644e3648bdc6d2be27bbdca6ffbcdeb00b83ad63a9a8ad30a49641ba9b13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0e8644e3648bdc6d2be27bbdca6ffbcdeb00b83ad63a9a8ad30a49641ba9b13->enter($__internal_e0e8644e3648bdc6d2be27bbdca6ffbcdeb00b83ad63a9a8ad30a49641ba9b13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "piBundle:Default:profileUser.html.twig"));

        $__internal_bc4520718e610bfb937744eff34a70b13e7606b7a9d15b097b3255bd8e9b37bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc4520718e610bfb937744eff34a70b13e7606b7a9d15b097b3255bd8e9b37bd->enter($__internal_bc4520718e610bfb937744eff34a70b13e7606b7a9d15b097b3255bd8e9b37bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "piBundle:Default:profileUser.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e0e8644e3648bdc6d2be27bbdca6ffbcdeb00b83ad63a9a8ad30a49641ba9b13->leave($__internal_e0e8644e3648bdc6d2be27bbdca6ffbcdeb00b83ad63a9a8ad30a49641ba9b13_prof);

        
        $__internal_bc4520718e610bfb937744eff34a70b13e7606b7a9d15b097b3255bd8e9b37bd->leave($__internal_bc4520718e610bfb937744eff34a70b13e7606b7a9d15b097b3255bd8e9b37bd_prof);

    }

    public function getTemplateName()
    {
        return "piBundle:Default:profileUser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"profile.html.twig\" %}
", "piBundle:Default:profileUser.html.twig", "C:\\wamp64\\www\\ProjetPiDev\\src\\piBundle\\Resources\\views\\Default\\profileUser.html.twig");
    }
}
