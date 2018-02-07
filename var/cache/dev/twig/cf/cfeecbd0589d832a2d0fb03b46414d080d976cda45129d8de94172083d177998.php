<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_20529d079b6463059d8454991ce531d22911166bf8332281ab27aa7c8a702fd9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
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
        $__internal_b6b73b1a312f1875335906809d6d475a74d2396dde3ad8d451fc5d754623a125 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6b73b1a312f1875335906809d6d475a74d2396dde3ad8d451fc5d754623a125->enter($__internal_b6b73b1a312f1875335906809d6d475a74d2396dde3ad8d451fc5d754623a125_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_3a8d09e3b8b70b29610fdf0e3bad423db86ae0b1e9c511c9f2bc840a72c290b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a8d09e3b8b70b29610fdf0e3bad423db86ae0b1e9c511c9f2bc840a72c290b6->enter($__internal_3a8d09e3b8b70b29610fdf0e3bad423db86ae0b1e9c511c9f2bc840a72c290b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b6b73b1a312f1875335906809d6d475a74d2396dde3ad8d451fc5d754623a125->leave($__internal_b6b73b1a312f1875335906809d6d475a74d2396dde3ad8d451fc5d754623a125_prof);

        
        $__internal_3a8d09e3b8b70b29610fdf0e3bad423db86ae0b1e9c511c9f2bc840a72c290b6->leave($__internal_3a8d09e3b8b70b29610fdf0e3bad423db86ae0b1e9c511c9f2bc840a72c290b6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1357486ee2b9e2858cc9b214076a12da19b835590ae7425dc61acacdf92b96cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1357486ee2b9e2858cc9b214076a12da19b835590ae7425dc61acacdf92b96cf->enter($__internal_1357486ee2b9e2858cc9b214076a12da19b835590ae7425dc61acacdf92b96cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_563d70bfed8cb9c0cf8a1a35a8909dad7e4903e413e7dae7652e83b5bac1ceed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_563d70bfed8cb9c0cf8a1a35a8909dad7e4903e413e7dae7652e83b5bac1ceed->enter($__internal_563d70bfed8cb9c0cf8a1a35a8909dad7e4903e413e7dae7652e83b5bac1ceed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_563d70bfed8cb9c0cf8a1a35a8909dad7e4903e413e7dae7652e83b5bac1ceed->leave($__internal_563d70bfed8cb9c0cf8a1a35a8909dad7e4903e413e7dae7652e83b5bac1ceed_prof);

        
        $__internal_1357486ee2b9e2858cc9b214076a12da19b835590ae7425dc61acacdf92b96cf->leave($__internal_1357486ee2b9e2858cc9b214076a12da19b835590ae7425dc61acacdf92b96cf_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
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
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "@FOSUser/Security/login.html.twig", "C:\\wamp64\\www\\ProjetPiDev\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Security\\login.html.twig");
    }
}
