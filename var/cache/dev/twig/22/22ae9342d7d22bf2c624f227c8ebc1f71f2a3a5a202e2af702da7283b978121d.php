<?php

/* @FOSUser/Group/list.html.twig */
class __TwigTemplate_0f9eef197d1a39704077227565208a91f878a89d43fa4e46f087b53c1abf0ef8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/list.html.twig", 1);
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
        $__internal_74f349ec02428c68f259b80b28bf8a4732e4b4ddc10592fcfa5d204840f178c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74f349ec02428c68f259b80b28bf8a4732e4b4ddc10592fcfa5d204840f178c8->enter($__internal_74f349ec02428c68f259b80b28bf8a4732e4b4ddc10592fcfa5d204840f178c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $__internal_b008d357f5cbb0fac087ea47176e1809a65fe7266a303e97bc9902d3bf5f11df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b008d357f5cbb0fac087ea47176e1809a65fe7266a303e97bc9902d3bf5f11df->enter($__internal_b008d357f5cbb0fac087ea47176e1809a65fe7266a303e97bc9902d3bf5f11df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_74f349ec02428c68f259b80b28bf8a4732e4b4ddc10592fcfa5d204840f178c8->leave($__internal_74f349ec02428c68f259b80b28bf8a4732e4b4ddc10592fcfa5d204840f178c8_prof);

        
        $__internal_b008d357f5cbb0fac087ea47176e1809a65fe7266a303e97bc9902d3bf5f11df->leave($__internal_b008d357f5cbb0fac087ea47176e1809a65fe7266a303e97bc9902d3bf5f11df_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_27e7bdf1d0e71c7fb470c123b7b58ba3fc152eab23cf8c7cc77d1b7903eb5c6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27e7bdf1d0e71c7fb470c123b7b58ba3fc152eab23cf8c7cc77d1b7903eb5c6e->enter($__internal_27e7bdf1d0e71c7fb470c123b7b58ba3fc152eab23cf8c7cc77d1b7903eb5c6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_d27d7d2199b4fb945df775f7e67e0bbedfa480a85de63ae19fc6829b517d8135 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d27d7d2199b4fb945df775f7e67e0bbedfa480a85de63ae19fc6829b517d8135->enter($__internal_d27d7d2199b4fb945df775f7e67e0bbedfa480a85de63ae19fc6829b517d8135_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_d27d7d2199b4fb945df775f7e67e0bbedfa480a85de63ae19fc6829b517d8135->leave($__internal_d27d7d2199b4fb945df775f7e67e0bbedfa480a85de63ae19fc6829b517d8135_prof);

        
        $__internal_27e7bdf1d0e71c7fb470c123b7b58ba3fc152eab23cf8c7cc77d1b7903eb5c6e->leave($__internal_27e7bdf1d0e71c7fb470c123b7b58ba3fc152eab23cf8c7cc77d1b7903eb5c6e_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/list.html.twig";
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
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/list.html.twig", "C:\\wamp64\\www\\ProjetPiDev\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\list.html.twig");
    }
}
