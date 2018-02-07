<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_0830aa1cfcb3bea7c64844792c4dcf556a6ce4f5cab5e15a2239fd94f87c5184 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Resetting/reset.html.twig", 1);
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
        $__internal_20e19aebd72023ca3d22ba046abfd5c1a5f4eaaf45733955ce8802d720a95614 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20e19aebd72023ca3d22ba046abfd5c1a5f4eaaf45733955ce8802d720a95614->enter($__internal_20e19aebd72023ca3d22ba046abfd5c1a5f4eaaf45733955ce8802d720a95614_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $__internal_16e394ec546e0c7e1dfdf0d605d1bf84f7fcc562119b7b77c2b7bacdc1bf7548 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16e394ec546e0c7e1dfdf0d605d1bf84f7fcc562119b7b77c2b7bacdc1bf7548->enter($__internal_16e394ec546e0c7e1dfdf0d605d1bf84f7fcc562119b7b77c2b7bacdc1bf7548_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_20e19aebd72023ca3d22ba046abfd5c1a5f4eaaf45733955ce8802d720a95614->leave($__internal_20e19aebd72023ca3d22ba046abfd5c1a5f4eaaf45733955ce8802d720a95614_prof);

        
        $__internal_16e394ec546e0c7e1dfdf0d605d1bf84f7fcc562119b7b77c2b7bacdc1bf7548->leave($__internal_16e394ec546e0c7e1dfdf0d605d1bf84f7fcc562119b7b77c2b7bacdc1bf7548_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f7185607941cbb7ac54358bc6f592d36921324466496515e355e2df45a0fd4d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7185607941cbb7ac54358bc6f592d36921324466496515e355e2df45a0fd4d1->enter($__internal_f7185607941cbb7ac54358bc6f592d36921324466496515e355e2df45a0fd4d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_fc03c7b697ee7a6f9a8f9f1379703eb592b3cee46fe1d4ee40af5e1ffe7ca127 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc03c7b697ee7a6f9a8f9f1379703eb592b3cee46fe1d4ee40af5e1ffe7ca127->enter($__internal_fc03c7b697ee7a6f9a8f9f1379703eb592b3cee46fe1d4ee40af5e1ffe7ca127_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_fc03c7b697ee7a6f9a8f9f1379703eb592b3cee46fe1d4ee40af5e1ffe7ca127->leave($__internal_fc03c7b697ee7a6f9a8f9f1379703eb592b3cee46fe1d4ee40af5e1ffe7ca127_prof);

        
        $__internal_f7185607941cbb7ac54358bc6f592d36921324466496515e355e2df45a0fd4d1->leave($__internal_f7185607941cbb7ac54358bc6f592d36921324466496515e355e2df45a0fd4d1_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset.html.twig";
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
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Resetting/reset.html.twig", "C:\\wamp64\\www\\ProjetPiDev\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Resetting\\reset.html.twig");
    }
}
