<?php

/* @FOSUser/Registration/email.txt.twig */
class __TwigTemplate_c3d852ff6032b433de15d0cf0b96428d6943b1f806a59e31955754a2953ec5cf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_72f4f27fe314591e27236c62b5be9b3ff19f753c3e346e02f7d49b31a82ef219 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72f4f27fe314591e27236c62b5be9b3ff19f753c3e346e02f7d49b31a82ef219->enter($__internal_72f4f27fe314591e27236c62b5be9b3ff19f753c3e346e02f7d49b31a82ef219_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        $__internal_4a80e3225c6e38f62a679db3166ce5c53850d30ef014ed8281d574c51c012252 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a80e3225c6e38f62a679db3166ce5c53850d30ef014ed8281d574c51c012252->enter($__internal_4a80e3225c6e38f62a679db3166ce5c53850d30ef014ed8281d574c51c012252_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_72f4f27fe314591e27236c62b5be9b3ff19f753c3e346e02f7d49b31a82ef219->leave($__internal_72f4f27fe314591e27236c62b5be9b3ff19f753c3e346e02f7d49b31a82ef219_prof);

        
        $__internal_4a80e3225c6e38f62a679db3166ce5c53850d30ef014ed8281d574c51c012252->leave($__internal_4a80e3225c6e38f62a679db3166ce5c53850d30ef014ed8281d574c51c012252_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_ec1fb889e4f015778b06035ee73c8288a1e88405e8b59d30ebcd1d6c2cc821af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec1fb889e4f015778b06035ee73c8288a1e88405e8b59d30ebcd1d6c2cc821af->enter($__internal_ec1fb889e4f015778b06035ee73c8288a1e88405e8b59d30ebcd1d6c2cc821af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_b945fb8bebe70efab089803b41218fbc307ac2e8ee96134c9a8833148adf9f19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b945fb8bebe70efab089803b41218fbc307ac2e8ee96134c9a8833148adf9f19->enter($__internal_b945fb8bebe70efab089803b41218fbc307ac2e8ee96134c9a8833148adf9f19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_b945fb8bebe70efab089803b41218fbc307ac2e8ee96134c9a8833148adf9f19->leave($__internal_b945fb8bebe70efab089803b41218fbc307ac2e8ee96134c9a8833148adf9f19_prof);

        
        $__internal_ec1fb889e4f015778b06035ee73c8288a1e88405e8b59d30ebcd1d6c2cc821af->leave($__internal_ec1fb889e4f015778b06035ee73c8288a1e88405e8b59d30ebcd1d6c2cc821af_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_f81d7ad17e69f783212191d569fad01100fa8c47bf8f54cfabf8938a06210f7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f81d7ad17e69f783212191d569fad01100fa8c47bf8f54cfabf8938a06210f7e->enter($__internal_f81d7ad17e69f783212191d569fad01100fa8c47bf8f54cfabf8938a06210f7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_da56cf603154b6ac4d1a5fd4147f3d446a38a5799d9007ca578f37b8a7001c15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da56cf603154b6ac4d1a5fd4147f3d446a38a5799d9007ca578f37b8a7001c15->enter($__internal_da56cf603154b6ac4d1a5fd4147f3d446a38a5799d9007ca578f37b8a7001c15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_da56cf603154b6ac4d1a5fd4147f3d446a38a5799d9007ca578f37b8a7001c15->leave($__internal_da56cf603154b6ac4d1a5fd4147f3d446a38a5799d9007ca578f37b8a7001c15_prof);

        
        $__internal_f81d7ad17e69f783212191d569fad01100fa8c47bf8f54cfabf8938a06210f7e->leave($__internal_f81d7ad17e69f783212191d569fad01100fa8c47bf8f54cfabf8938a06210f7e_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_4f9a89532600da05cc8680926961c9cc8dcd03c996223fb51c414d6e1085eb9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f9a89532600da05cc8680926961c9cc8dcd03c996223fb51c414d6e1085eb9d->enter($__internal_4f9a89532600da05cc8680926961c9cc8dcd03c996223fb51c414d6e1085eb9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_105560f5cb7148f2fc0c1e5eebc5ad25b2e29f9551b7a35cb7cf41e2e2653d6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_105560f5cb7148f2fc0c1e5eebc5ad25b2e29f9551b7a35cb7cf41e2e2653d6a->enter($__internal_105560f5cb7148f2fc0c1e5eebc5ad25b2e29f9551b7a35cb7cf41e2e2653d6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_105560f5cb7148f2fc0c1e5eebc5ad25b2e29f9551b7a35cb7cf41e2e2653d6a->leave($__internal_105560f5cb7148f2fc0c1e5eebc5ad25b2e29f9551b7a35cb7cf41e2e2653d6a_prof);

        
        $__internal_4f9a89532600da05cc8680926961c9cc8dcd03c996223fb51c414d6e1085eb9d->leave($__internal_4f9a89532600da05cc8680926961c9cc8dcd03c996223fb51c414d6e1085eb9d_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  85 => 13,  73 => 10,  64 => 8,  54 => 4,  45 => 2,  35 => 13,  33 => 8,  30 => 7,  28 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{%- autoescape false -%}
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "@FOSUser/Registration/email.txt.twig", "C:\\wamp64\\www\\ProjetPiDev\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Registration\\email.txt.twig");
    }
}
