<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_fbda6df7dabc6d7cb1865f14da0992c28d76c87f2f60f9e13c5ac9f514428579 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_b82f890e75f88181f63ac68afa379ac28ee9e88f95edae38e3a24b6ed9dac803 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b82f890e75f88181f63ac68afa379ac28ee9e88f95edae38e3a24b6ed9dac803->enter($__internal_b82f890e75f88181f63ac68afa379ac28ee9e88f95edae38e3a24b6ed9dac803_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $__internal_47cdc8c53c4fe32ef9b63585398f6e0718171c68306ec16006d18babd6a2b9b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47cdc8c53c4fe32ef9b63585398f6e0718171c68306ec16006d18babd6a2b9b6->enter($__internal_47cdc8c53c4fe32ef9b63585398f6e0718171c68306ec16006d18babd6a2b9b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b82f890e75f88181f63ac68afa379ac28ee9e88f95edae38e3a24b6ed9dac803->leave($__internal_b82f890e75f88181f63ac68afa379ac28ee9e88f95edae38e3a24b6ed9dac803_prof);

        
        $__internal_47cdc8c53c4fe32ef9b63585398f6e0718171c68306ec16006d18babd6a2b9b6->leave($__internal_47cdc8c53c4fe32ef9b63585398f6e0718171c68306ec16006d18babd6a2b9b6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f577f6f89a6996c86cfd41b686246a86526a64454a6987aa928896d97523ee73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f577f6f89a6996c86cfd41b686246a86526a64454a6987aa928896d97523ee73->enter($__internal_f577f6f89a6996c86cfd41b686246a86526a64454a6987aa928896d97523ee73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_df898c9620a22e10e56156202258dd778a027fd9cff92155a69b2c1c057282aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df898c9620a22e10e56156202258dd778a027fd9cff92155a69b2c1c057282aa->enter($__internal_df898c9620a22e10e56156202258dd778a027fd9cff92155a69b2c1c057282aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_df898c9620a22e10e56156202258dd778a027fd9cff92155a69b2c1c057282aa->leave($__internal_df898c9620a22e10e56156202258dd778a027fd9cff92155a69b2c1c057282aa_prof);

        
        $__internal_f577f6f89a6996c86cfd41b686246a86526a64454a6987aa928896d97523ee73->leave($__internal_f577f6f89a6996c86cfd41b686246a86526a64454a6987aa928896d97523ee73_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:edit.html.twig", "C:\\wamp64\\www\\ProjetPiDev\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Group/edit.html.twig");
    }
}
