<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_3a14654ba20886865bfb4fc268dccda008689c6f7cc12fd9bb3482afc47e917d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1e51bb969f87f49a344948c0bfd1ad8c25686e82aa11fdbab2a66174f47c4b05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e51bb969f87f49a344948c0bfd1ad8c25686e82aa11fdbab2a66174f47c4b05->enter($__internal_1e51bb969f87f49a344948c0bfd1ad8c25686e82aa11fdbab2a66174f47c4b05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_70c38c559af72ad07eab31559b944f73b137017bce63deb14221c63c8526c4f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70c38c559af72ad07eab31559b944f73b137017bce63deb14221c63c8526c4f9->enter($__internal_70c38c559af72ad07eab31559b944f73b137017bce63deb14221c63c8526c4f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1e51bb969f87f49a344948c0bfd1ad8c25686e82aa11fdbab2a66174f47c4b05->leave($__internal_1e51bb969f87f49a344948c0bfd1ad8c25686e82aa11fdbab2a66174f47c4b05_prof);

        
        $__internal_70c38c559af72ad07eab31559b944f73b137017bce63deb14221c63c8526c4f9->leave($__internal_70c38c559af72ad07eab31559b944f73b137017bce63deb14221c63c8526c4f9_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_80dba1c95a041b5a0c7a49cf3e42c8b5952c8c2881255226f4d9dfe94656cc2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80dba1c95a041b5a0c7a49cf3e42c8b5952c8c2881255226f4d9dfe94656cc2e->enter($__internal_80dba1c95a041b5a0c7a49cf3e42c8b5952c8c2881255226f4d9dfe94656cc2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_705d57b4792f608e316141141195e77e19eedcb4b957cc6e73ffad8e5faa8e36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_705d57b4792f608e316141141195e77e19eedcb4b957cc6e73ffad8e5faa8e36->enter($__internal_705d57b4792f608e316141141195e77e19eedcb4b957cc6e73ffad8e5faa8e36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_705d57b4792f608e316141141195e77e19eedcb4b957cc6e73ffad8e5faa8e36->leave($__internal_705d57b4792f608e316141141195e77e19eedcb4b957cc6e73ffad8e5faa8e36_prof);

        
        $__internal_80dba1c95a041b5a0c7a49cf3e42c8b5952c8c2881255226f4d9dfe94656cc2e->leave($__internal_80dba1c95a041b5a0c7a49cf3e42c8b5952c8c2881255226f4d9dfe94656cc2e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_5e0672bf7984116a4f71a5b1b076b601c6604a8691d7aa6a13446eb391d81ced = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e0672bf7984116a4f71a5b1b076b601c6604a8691d7aa6a13446eb391d81ced->enter($__internal_5e0672bf7984116a4f71a5b1b076b601c6604a8691d7aa6a13446eb391d81ced_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_836ab7b701a5a63e96339dbde30302d74b2a6fffd6b59136bf9b4a758da624d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_836ab7b701a5a63e96339dbde30302d74b2a6fffd6b59136bf9b4a758da624d1->enter($__internal_836ab7b701a5a63e96339dbde30302d74b2a6fffd6b59136bf9b4a758da624d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_836ab7b701a5a63e96339dbde30302d74b2a6fffd6b59136bf9b4a758da624d1->leave($__internal_836ab7b701a5a63e96339dbde30302d74b2a6fffd6b59136bf9b4a758da624d1_prof);

        
        $__internal_5e0672bf7984116a4f71a5b1b076b601c6604a8691d7aa6a13446eb391d81ced->leave($__internal_5e0672bf7984116a4f71a5b1b076b601c6604a8691d7aa6a13446eb391d81ced_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "C:\\wamp64\\www\\ProjetPiDev\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
