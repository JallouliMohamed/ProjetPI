<?php

/* @FOSUser/Group/new.html.twig */
class __TwigTemplate_c2b6acc8746dde9b5b3242ced9dc30f363b59e1cf3b84eea8d7c8ccd4054d38e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/new.html.twig", 1);
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
        $__internal_3dc4c8d7d308fe73b9e42247d8c04f47ea5b412e4f425926a81db8567aaab36b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3dc4c8d7d308fe73b9e42247d8c04f47ea5b412e4f425926a81db8567aaab36b->enter($__internal_3dc4c8d7d308fe73b9e42247d8c04f47ea5b412e4f425926a81db8567aaab36b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $__internal_a041fdb907fec574598e8df207c7b60d0858ab077afe09b5bcd8ca8fd94f8a3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a041fdb907fec574598e8df207c7b60d0858ab077afe09b5bcd8ca8fd94f8a3d->enter($__internal_a041fdb907fec574598e8df207c7b60d0858ab077afe09b5bcd8ca8fd94f8a3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3dc4c8d7d308fe73b9e42247d8c04f47ea5b412e4f425926a81db8567aaab36b->leave($__internal_3dc4c8d7d308fe73b9e42247d8c04f47ea5b412e4f425926a81db8567aaab36b_prof);

        
        $__internal_a041fdb907fec574598e8df207c7b60d0858ab077afe09b5bcd8ca8fd94f8a3d->leave($__internal_a041fdb907fec574598e8df207c7b60d0858ab077afe09b5bcd8ca8fd94f8a3d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f23c0a73020d462726b3bb9d1e410e0e46c010e7686bd538551f58c718cff593 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f23c0a73020d462726b3bb9d1e410e0e46c010e7686bd538551f58c718cff593->enter($__internal_f23c0a73020d462726b3bb9d1e410e0e46c010e7686bd538551f58c718cff593_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_5f86221a62f874d8cb1ab918b5f1fb5289f61f94ea667ac16ae56b0702884873 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f86221a62f874d8cb1ab918b5f1fb5289f61f94ea667ac16ae56b0702884873->enter($__internal_5f86221a62f874d8cb1ab918b5f1fb5289f61f94ea667ac16ae56b0702884873_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_5f86221a62f874d8cb1ab918b5f1fb5289f61f94ea667ac16ae56b0702884873->leave($__internal_5f86221a62f874d8cb1ab918b5f1fb5289f61f94ea667ac16ae56b0702884873_prof);

        
        $__internal_f23c0a73020d462726b3bb9d1e410e0e46c010e7686bd538551f58c718cff593->leave($__internal_f23c0a73020d462726b3bb9d1e410e0e46c010e7686bd538551f58c718cff593_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/new.html.twig";
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
", "@FOSUser/Group/new.html.twig", "C:\\wamp64\\www\\ProjetPiDev\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\new.html.twig");
    }
}
