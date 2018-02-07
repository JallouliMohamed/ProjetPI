<?php

/* @FOSUser/Registration/check_email.html.twig */
class __TwigTemplate_2a09d7848e102269770ff1b57c867b212badcb80d631ef949c2f9f044a09ef63 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/check_email.html.twig", 1);
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
        $__internal_49967da66f860005126cb90199cfbbdcdc0d7bff20b9abfc8e180a89b82dba9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49967da66f860005126cb90199cfbbdcdc0d7bff20b9abfc8e180a89b82dba9d->enter($__internal_49967da66f860005126cb90199cfbbdcdc0d7bff20b9abfc8e180a89b82dba9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/check_email.html.twig"));

        $__internal_11eb399c26830b3596d8cd35350fb2ea8318bed359ff6b5e148a25f97a16314e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11eb399c26830b3596d8cd35350fb2ea8318bed359ff6b5e148a25f97a16314e->enter($__internal_11eb399c26830b3596d8cd35350fb2ea8318bed359ff6b5e148a25f97a16314e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_49967da66f860005126cb90199cfbbdcdc0d7bff20b9abfc8e180a89b82dba9d->leave($__internal_49967da66f860005126cb90199cfbbdcdc0d7bff20b9abfc8e180a89b82dba9d_prof);

        
        $__internal_11eb399c26830b3596d8cd35350fb2ea8318bed359ff6b5e148a25f97a16314e->leave($__internal_11eb399c26830b3596d8cd35350fb2ea8318bed359ff6b5e148a25f97a16314e_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4b3396d4e8e942ff3e080f93200c1a590262af1a38584ca5a5fd54f39b370a91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b3396d4e8e942ff3e080f93200c1a590262af1a38584ca5a5fd54f39b370a91->enter($__internal_4b3396d4e8e942ff3e080f93200c1a590262af1a38584ca5a5fd54f39b370a91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_6ac462c99406aedbb5b684e2783a868dbba664731e0916cdd6300d518b9a998c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ac462c99406aedbb5b684e2783a868dbba664731e0916cdd6300d518b9a998c->enter($__internal_6ac462c99406aedbb5b684e2783a868dbba664731e0916cdd6300d518b9a998c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_6ac462c99406aedbb5b684e2783a868dbba664731e0916cdd6300d518b9a998c->leave($__internal_6ac462c99406aedbb5b684e2783a868dbba664731e0916cdd6300d518b9a998c_prof);

        
        $__internal_4b3396d4e8e942ff3e080f93200c1a590262af1a38584ca5a5fd54f39b370a91->leave($__internal_4b3396d4e8e942ff3e080f93200c1a590262af1a38584ca5a5fd54f39b370a91_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  40 => 5,  11 => 1,);
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
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "@FOSUser/Registration/check_email.html.twig", "C:\\wamp64\\www\\ProjetPiDev\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Registration\\check_email.html.twig");
    }
}
