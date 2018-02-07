<?php

/* @FOSUser/ChangePassword/change_password.html.twig */
class __TwigTemplate_764399fb868d4954748218e3742284a3995ebcc7c7f654ac5fc3615b5898281c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 1);
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
        $__internal_00c7f2e1b27b1ac946b458c1d05be70cb11e30329b0d1c60f7996f92b42cd31a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00c7f2e1b27b1ac946b458c1d05be70cb11e30329b0d1c60f7996f92b42cd31a->enter($__internal_00c7f2e1b27b1ac946b458c1d05be70cb11e30329b0d1c60f7996f92b42cd31a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password.html.twig"));

        $__internal_200ff8019c8005b769d3a781e8911be92f802b71bcae373e63ba2ee0638f965b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_200ff8019c8005b769d3a781e8911be92f802b71bcae373e63ba2ee0638f965b->enter($__internal_200ff8019c8005b769d3a781e8911be92f802b71bcae373e63ba2ee0638f965b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_00c7f2e1b27b1ac946b458c1d05be70cb11e30329b0d1c60f7996f92b42cd31a->leave($__internal_00c7f2e1b27b1ac946b458c1d05be70cb11e30329b0d1c60f7996f92b42cd31a_prof);

        
        $__internal_200ff8019c8005b769d3a781e8911be92f802b71bcae373e63ba2ee0638f965b->leave($__internal_200ff8019c8005b769d3a781e8911be92f802b71bcae373e63ba2ee0638f965b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f836620a9196ed47e59031ba19c904b9a9ed884b122c037453143b714342dd68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f836620a9196ed47e59031ba19c904b9a9ed884b122c037453143b714342dd68->enter($__internal_f836620a9196ed47e59031ba19c904b9a9ed884b122c037453143b714342dd68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_852f01d8038f9b0a34f357cf41fb75081dfb7b30852efc495e789b8c81fabefd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_852f01d8038f9b0a34f357cf41fb75081dfb7b30852efc495e789b8c81fabefd->enter($__internal_852f01d8038f9b0a34f357cf41fb75081dfb7b30852efc495e789b8c81fabefd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 4)->display($context);
        
        $__internal_852f01d8038f9b0a34f357cf41fb75081dfb7b30852efc495e789b8c81fabefd->leave($__internal_852f01d8038f9b0a34f357cf41fb75081dfb7b30852efc495e789b8c81fabefd_prof);

        
        $__internal_f836620a9196ed47e59031ba19c904b9a9ed884b122c037453143b714342dd68->leave($__internal_f836620a9196ed47e59031ba19c904b9a9ed884b122c037453143b714342dd68_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/change_password.html.twig";
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
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/ChangePassword/change_password.html.twig", "C:\\wamp64\\www\\ProjetPiDev\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\ChangePassword\\change_password.html.twig");
    }
}
