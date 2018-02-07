<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_2f805ed0ea5a886395841240631b61cde7e66b9701e50a8f84c4a5a6ca62d44c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:check_email.html.twig", 1);
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
        $__internal_3a22e6aa38ff509fa689b37f9daf04b730f37f567577ec0524dbc39b026b0ee5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a22e6aa38ff509fa689b37f9daf04b730f37f567577ec0524dbc39b026b0ee5->enter($__internal_3a22e6aa38ff509fa689b37f9daf04b730f37f567577ec0524dbc39b026b0ee5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $__internal_6c1658a6f281b10c9b444e9dca408efe8f4c3bc0f725f111116c151c3019e4e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c1658a6f281b10c9b444e9dca408efe8f4c3bc0f725f111116c151c3019e4e3->enter($__internal_6c1658a6f281b10c9b444e9dca408efe8f4c3bc0f725f111116c151c3019e4e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3a22e6aa38ff509fa689b37f9daf04b730f37f567577ec0524dbc39b026b0ee5->leave($__internal_3a22e6aa38ff509fa689b37f9daf04b730f37f567577ec0524dbc39b026b0ee5_prof);

        
        $__internal_6c1658a6f281b10c9b444e9dca408efe8f4c3bc0f725f111116c151c3019e4e3->leave($__internal_6c1658a6f281b10c9b444e9dca408efe8f4c3bc0f725f111116c151c3019e4e3_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fa707f7cc21ba27a1b84aa9e19859f8d6bb446cf19c83b515813edc6cda57f72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa707f7cc21ba27a1b84aa9e19859f8d6bb446cf19c83b515813edc6cda57f72->enter($__internal_fa707f7cc21ba27a1b84aa9e19859f8d6bb446cf19c83b515813edc6cda57f72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_9cf39fd0efd5cbeaed86de0d6330b2aabd60ba4f1911e76125e86144e62ee480 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cf39fd0efd5cbeaed86de0d6330b2aabd60ba4f1911e76125e86144e62ee480->enter($__internal_9cf39fd0efd5cbeaed86de0d6330b2aabd60ba4f1911e76125e86144e62ee480_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) ? $context["tokenLifetime"] : $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_9cf39fd0efd5cbeaed86de0d6330b2aabd60ba4f1911e76125e86144e62ee480->leave($__internal_9cf39fd0efd5cbeaed86de0d6330b2aabd60ba4f1911e76125e86144e62ee480_prof);

        
        $__internal_fa707f7cc21ba27a1b84aa9e19859f8d6bb446cf19c83b515813edc6cda57f72->leave($__internal_fa707f7cc21ba27a1b84aa9e19859f8d6bb446cf19c83b515813edc6cda57f72_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:check_email.html.twig";
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
", "FOSUserBundle:Resetting:check_email.html.twig", "C:\\wamp64\\www\\ProjetPiDev\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Resetting/check_email.html.twig");
    }
}
