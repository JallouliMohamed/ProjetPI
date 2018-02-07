<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_a0abf6accdf231f13605cb3bd946867afd77b083316e2ca4687ab3cc533c80fe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_0a16bb8956baf84dc67315dd06eb319a8089ab0a19cebc3f0d39deb0c61a3412 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a16bb8956baf84dc67315dd06eb319a8089ab0a19cebc3f0d39deb0c61a3412->enter($__internal_0a16bb8956baf84dc67315dd06eb319a8089ab0a19cebc3f0d39deb0c61a3412_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $__internal_35fa07a83b7edde22660b3861d6e603a43e266cc706c6bc9e1aebbc490f540b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35fa07a83b7edde22660b3861d6e603a43e266cc706c6bc9e1aebbc490f540b2->enter($__internal_35fa07a83b7edde22660b3861d6e603a43e266cc706c6bc9e1aebbc490f540b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0a16bb8956baf84dc67315dd06eb319a8089ab0a19cebc3f0d39deb0c61a3412->leave($__internal_0a16bb8956baf84dc67315dd06eb319a8089ab0a19cebc3f0d39deb0c61a3412_prof);

        
        $__internal_35fa07a83b7edde22660b3861d6e603a43e266cc706c6bc9e1aebbc490f540b2->leave($__internal_35fa07a83b7edde22660b3861d6e603a43e266cc706c6bc9e1aebbc490f540b2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_58a8d3de49018e6ae89ac313ea70d5f5c8746ca8ac41a91d8caeaa771cea1f25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58a8d3de49018e6ae89ac313ea70d5f5c8746ca8ac41a91d8caeaa771cea1f25->enter($__internal_58a8d3de49018e6ae89ac313ea70d5f5c8746ca8ac41a91d8caeaa771cea1f25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_371369df7eebff2c3cfded8a12a0aa461adf7fcbc65779df0d7f799bee654ca9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_371369df7eebff2c3cfded8a12a0aa461adf7fcbc65779df0d7f799bee654ca9->enter($__internal_371369df7eebff2c3cfded8a12a0aa461adf7fcbc65779df0d7f799bee654ca9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_371369df7eebff2c3cfded8a12a0aa461adf7fcbc65779df0d7f799bee654ca9->leave($__internal_371369df7eebff2c3cfded8a12a0aa461adf7fcbc65779df0d7f799bee654ca9_prof);

        
        $__internal_58a8d3de49018e6ae89ac313ea70d5f5c8746ca8ac41a91d8caeaa771cea1f25->leave($__internal_58a8d3de49018e6ae89ac313ea70d5f5c8746ca8ac41a91d8caeaa771cea1f25_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:new.html.twig", "C:\\wamp64\\www\\ProjetPiDev\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Group/new.html.twig");
    }
}
