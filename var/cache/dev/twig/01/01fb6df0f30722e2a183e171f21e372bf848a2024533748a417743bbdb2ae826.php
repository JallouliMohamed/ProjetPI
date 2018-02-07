<?php

/* piBundle:Default:profileUser.html.twig */
class __TwigTemplate_f5a8f8a957083c6da831026cbc8a46f4649bf623a72caf724be14d4e35ced3da extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "piBundle:Default:profileUser.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_be32277feae8b93758348677aebbdf7da3cf533f49a62bb57b997555fe17b6ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be32277feae8b93758348677aebbdf7da3cf533f49a62bb57b997555fe17b6ae->enter($__internal_be32277feae8b93758348677aebbdf7da3cf533f49a62bb57b997555fe17b6ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "piBundle:Default:profileUser.html.twig"));

        $__internal_e4bd099ed3d087cf0395d6f958d248eac51330e75c744f694c4e7ebca9cebf06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4bd099ed3d087cf0395d6f958d248eac51330e75c744f694c4e7ebca9cebf06->enter($__internal_e4bd099ed3d087cf0395d6f958d248eac51330e75c744f694c4e7ebca9cebf06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "piBundle:Default:profileUser.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_be32277feae8b93758348677aebbdf7da3cf533f49a62bb57b997555fe17b6ae->leave($__internal_be32277feae8b93758348677aebbdf7da3cf533f49a62bb57b997555fe17b6ae_prof);

        
        $__internal_e4bd099ed3d087cf0395d6f958d248eac51330e75c744f694c4e7ebca9cebf06->leave($__internal_e4bd099ed3d087cf0395d6f958d248eac51330e75c744f694c4e7ebca9cebf06_prof);

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
        return new Twig_Source("{% extends \"base.html.twig\" %}
", "piBundle:Default:profileUser.html.twig", "C:\\wamp64\\www\\ProjetPiDev\\src\\piBundle/Resources/views/Default/profileUser.html.twig");
    }
}
