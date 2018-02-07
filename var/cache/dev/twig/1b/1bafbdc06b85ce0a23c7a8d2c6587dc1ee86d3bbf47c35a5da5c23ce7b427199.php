<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_658af35f236e78afe30a6a2c6fd9748577d7500fbecccb8a937eb5ccfb97a111 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_9c1ed4ebbd2d59d76dc03c0c343203c08b591a822476990a726793f75c2e2862 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c1ed4ebbd2d59d76dc03c0c343203c08b591a822476990a726793f75c2e2862->enter($__internal_9c1ed4ebbd2d59d76dc03c0c343203c08b591a822476990a726793f75c2e2862_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $__internal_d151f554f9da05518fc0af565277978d2fe6d660ac7a29fdc01405ed1169fad4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d151f554f9da05518fc0af565277978d2fe6d660ac7a29fdc01405ed1169fad4->enter($__internal_d151f554f9da05518fc0af565277978d2fe6d660ac7a29fdc01405ed1169fad4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9c1ed4ebbd2d59d76dc03c0c343203c08b591a822476990a726793f75c2e2862->leave($__internal_9c1ed4ebbd2d59d76dc03c0c343203c08b591a822476990a726793f75c2e2862_prof);

        
        $__internal_d151f554f9da05518fc0af565277978d2fe6d660ac7a29fdc01405ed1169fad4->leave($__internal_d151f554f9da05518fc0af565277978d2fe6d660ac7a29fdc01405ed1169fad4_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5e8a37aaf4896c71fa1e49fcbddde4d6e46e118105b1f34702d5867edd38945d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e8a37aaf4896c71fa1e49fcbddde4d6e46e118105b1f34702d5867edd38945d->enter($__internal_5e8a37aaf4896c71fa1e49fcbddde4d6e46e118105b1f34702d5867edd38945d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_82eb1442712ca3924a50f03cef0277e55640d7d3d6d0bb3119aa6dbba6d6a931 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82eb1442712ca3924a50f03cef0277e55640d7d3d6d0bb3119aa6dbba6d6a931->enter($__internal_82eb1442712ca3924a50f03cef0277e55640d7d3d6d0bb3119aa6dbba6d6a931_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_82eb1442712ca3924a50f03cef0277e55640d7d3d6d0bb3119aa6dbba6d6a931->leave($__internal_82eb1442712ca3924a50f03cef0277e55640d7d3d6d0bb3119aa6dbba6d6a931_prof);

        
        $__internal_5e8a37aaf4896c71fa1e49fcbddde4d6e46e118105b1f34702d5867edd38945d->leave($__internal_5e8a37aaf4896c71fa1e49fcbddde4d6e46e118105b1f34702d5867edd38945d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
", "FOSUserBundle:Resetting:reset.html.twig", "C:\\wamp64\\www\\ProjetPiDev\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Resetting/reset.html.twig");
    }
}
