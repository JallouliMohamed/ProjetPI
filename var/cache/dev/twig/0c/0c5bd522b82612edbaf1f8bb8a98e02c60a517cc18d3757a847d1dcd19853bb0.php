<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_1ae000f938c8163b8847f1ac54717129310b9703b4f2aad0903e29403e895574 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_59d6fed1d2bdf8467f739480ee7147b7d9f721985c5fbf1eff1808b96b19850e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59d6fed1d2bdf8467f739480ee7147b7d9f721985c5fbf1eff1808b96b19850e->enter($__internal_59d6fed1d2bdf8467f739480ee7147b7d9f721985c5fbf1eff1808b96b19850e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $__internal_c5a95e910f4b55e6b4196a5817c063ca3ad396cc2632f5aa58385b060aafcde3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5a95e910f4b55e6b4196a5817c063ca3ad396cc2632f5aa58385b060aafcde3->enter($__internal_c5a95e910f4b55e6b4196a5817c063ca3ad396cc2632f5aa58385b060aafcde3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_59d6fed1d2bdf8467f739480ee7147b7d9f721985c5fbf1eff1808b96b19850e->leave($__internal_59d6fed1d2bdf8467f739480ee7147b7d9f721985c5fbf1eff1808b96b19850e_prof);

        
        $__internal_c5a95e910f4b55e6b4196a5817c063ca3ad396cc2632f5aa58385b060aafcde3->leave($__internal_c5a95e910f4b55e6b4196a5817c063ca3ad396cc2632f5aa58385b060aafcde3_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5f2b460f604d3bacce5b6561630170f4beeec209e08e366b7e521c15bc4b64c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f2b460f604d3bacce5b6561630170f4beeec209e08e366b7e521c15bc4b64c2->enter($__internal_5f2b460f604d3bacce5b6561630170f4beeec209e08e366b7e521c15bc4b64c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_f44aa21d60a65a9a00167906263109be91f142a2dee2d3bc8c1633933ab39d9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f44aa21d60a65a9a00167906263109be91f142a2dee2d3bc8c1633933ab39d9e->enter($__internal_f44aa21d60a65a9a00167906263109be91f142a2dee2d3bc8c1633933ab39d9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_f44aa21d60a65a9a00167906263109be91f142a2dee2d3bc8c1633933ab39d9e->leave($__internal_f44aa21d60a65a9a00167906263109be91f142a2dee2d3bc8c1633933ab39d9e_prof);

        
        $__internal_5f2b460f604d3bacce5b6561630170f4beeec209e08e366b7e521c15bc4b64c2->leave($__internal_5f2b460f604d3bacce5b6561630170f4beeec209e08e366b7e521c15bc4b64c2_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:request.html.twig", "C:\\wamp64\\www\\ProjetPiDev\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Resetting/request.html.twig");
    }
}
