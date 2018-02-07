<?php

/* @FOSUser/Resetting/check_email.html.twig */
class __TwigTemplate_ceb5d99ece68a82a83a739112504d5aeb4b85194add5cab95a05f5333556678d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Resetting/check_email.html.twig", 1);
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
        $__internal_c6f4e12ffe7c304504e50118eaadd74c1447113de66b4b322c0f4fbf29ae0588 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6f4e12ffe7c304504e50118eaadd74c1447113de66b4b322c0f4fbf29ae0588->enter($__internal_c6f4e12ffe7c304504e50118eaadd74c1447113de66b4b322c0f4fbf29ae0588_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/check_email.html.twig"));

        $__internal_bc5af8fca67bbd21dc767104311fd293ac7afed20831c9503f037cc43cc1787a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc5af8fca67bbd21dc767104311fd293ac7afed20831c9503f037cc43cc1787a->enter($__internal_bc5af8fca67bbd21dc767104311fd293ac7afed20831c9503f037cc43cc1787a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c6f4e12ffe7c304504e50118eaadd74c1447113de66b4b322c0f4fbf29ae0588->leave($__internal_c6f4e12ffe7c304504e50118eaadd74c1447113de66b4b322c0f4fbf29ae0588_prof);

        
        $__internal_bc5af8fca67bbd21dc767104311fd293ac7afed20831c9503f037cc43cc1787a->leave($__internal_bc5af8fca67bbd21dc767104311fd293ac7afed20831c9503f037cc43cc1787a_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7d2fb5b3f4be5e3deb6779b01625cfb93782d6f0227b0ec68750301272e5badf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d2fb5b3f4be5e3deb6779b01625cfb93782d6f0227b0ec68750301272e5badf->enter($__internal_7d2fb5b3f4be5e3deb6779b01625cfb93782d6f0227b0ec68750301272e5badf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_cb5d3ac8b41de59f81a45b48defe703b9ed8767292d9fe6f681219ef9dde5250 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb5d3ac8b41de59f81a45b48defe703b9ed8767292d9fe6f681219ef9dde5250->enter($__internal_cb5d3ac8b41de59f81a45b48defe703b9ed8767292d9fe6f681219ef9dde5250_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) ? $context["tokenLifetime"] : $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_cb5d3ac8b41de59f81a45b48defe703b9ed8767292d9fe6f681219ef9dde5250->leave($__internal_cb5d3ac8b41de59f81a45b48defe703b9ed8767292d9fe6f681219ef9dde5250_prof);

        
        $__internal_7d2fb5b3f4be5e3deb6779b01625cfb93782d6f0227b0ec68750301272e5badf->leave($__internal_7d2fb5b3f4be5e3deb6779b01625cfb93782d6f0227b0ec68750301272e5badf_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 7,  49 => 6,  40 => 5,  11 => 1,);
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

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}
</p>
{% endblock %}
", "@FOSUser/Resetting/check_email.html.twig", "C:\\wamp64\\www\\ProjetPiDev\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Resetting\\check_email.html.twig");
    }
}
