<?php

/* @FOSUser/Resetting/email.txt.twig */
class __TwigTemplate_b71c46e7c2bfe7d3122145a1a459fc74f6954533b7e1d54f3bb5ee4d1236560d extends Twig_Template
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
        $__internal_31a754be33ce06be00bf2c726686dba87feb2443c8163737fb2eb315bcc2fc43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31a754be33ce06be00bf2c726686dba87feb2443c8163737fb2eb315bcc2fc43->enter($__internal_31a754be33ce06be00bf2c726686dba87feb2443c8163737fb2eb315bcc2fc43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        $__internal_a38eeb11f232a53df7a15bfe86a7d2c2dc762cb6dfad3ba883871201439d6e57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a38eeb11f232a53df7a15bfe86a7d2c2dc762cb6dfad3ba883871201439d6e57->enter($__internal_a38eeb11f232a53df7a15bfe86a7d2c2dc762cb6dfad3ba883871201439d6e57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_31a754be33ce06be00bf2c726686dba87feb2443c8163737fb2eb315bcc2fc43->leave($__internal_31a754be33ce06be00bf2c726686dba87feb2443c8163737fb2eb315bcc2fc43_prof);

        
        $__internal_a38eeb11f232a53df7a15bfe86a7d2c2dc762cb6dfad3ba883871201439d6e57->leave($__internal_a38eeb11f232a53df7a15bfe86a7d2c2dc762cb6dfad3ba883871201439d6e57_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_cf917c73f3c468743c0bd377e3f78a46b9c8cf0895d7a273b8211cafd2d558c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf917c73f3c468743c0bd377e3f78a46b9c8cf0895d7a273b8211cafd2d558c1->enter($__internal_cf917c73f3c468743c0bd377e3f78a46b9c8cf0895d7a273b8211cafd2d558c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_9861ef26fe2de9f7badf4f2cb431b53e928cbc3f8f408ff693f5e097d01f7622 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9861ef26fe2de9f7badf4f2cb431b53e928cbc3f8f408ff693f5e097d01f7622->enter($__internal_9861ef26fe2de9f7badf4f2cb431b53e928cbc3f8f408ff693f5e097d01f7622_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_9861ef26fe2de9f7badf4f2cb431b53e928cbc3f8f408ff693f5e097d01f7622->leave($__internal_9861ef26fe2de9f7badf4f2cb431b53e928cbc3f8f408ff693f5e097d01f7622_prof);

        
        $__internal_cf917c73f3c468743c0bd377e3f78a46b9c8cf0895d7a273b8211cafd2d558c1->leave($__internal_cf917c73f3c468743c0bd377e3f78a46b9c8cf0895d7a273b8211cafd2d558c1_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_286eb7ef29915ca7d46bc7944a93570789183f838269df2183b37020b071a156 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_286eb7ef29915ca7d46bc7944a93570789183f838269df2183b37020b071a156->enter($__internal_286eb7ef29915ca7d46bc7944a93570789183f838269df2183b37020b071a156_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_034168e409c53496575d8bf54eef266a643bac1b13ab7d06e2fc42431e0de2d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_034168e409c53496575d8bf54eef266a643bac1b13ab7d06e2fc42431e0de2d9->enter($__internal_034168e409c53496575d8bf54eef266a643bac1b13ab7d06e2fc42431e0de2d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_034168e409c53496575d8bf54eef266a643bac1b13ab7d06e2fc42431e0de2d9->leave($__internal_034168e409c53496575d8bf54eef266a643bac1b13ab7d06e2fc42431e0de2d9_prof);

        
        $__internal_286eb7ef29915ca7d46bc7944a93570789183f838269df2183b37020b071a156->leave($__internal_286eb7ef29915ca7d46bc7944a93570789183f838269df2183b37020b071a156_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_046b3e6cfe00fa4599482d4b9256f52c68e4c177509522dc67afbcac5b86c862 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_046b3e6cfe00fa4599482d4b9256f52c68e4c177509522dc67afbcac5b86c862->enter($__internal_046b3e6cfe00fa4599482d4b9256f52c68e4c177509522dc67afbcac5b86c862_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_818195245d382c5ceba4324b9ccdb280993173bf87ecc71e0579ca585c13fd26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_818195245d382c5ceba4324b9ccdb280993173bf87ecc71e0579ca585c13fd26->enter($__internal_818195245d382c5ceba4324b9ccdb280993173bf87ecc71e0579ca585c13fd26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_818195245d382c5ceba4324b9ccdb280993173bf87ecc71e0579ca585c13fd26->leave($__internal_818195245d382c5ceba4324b9ccdb280993173bf87ecc71e0579ca585c13fd26_prof);

        
        $__internal_046b3e6cfe00fa4599482d4b9256f52c68e4c177509522dc67afbcac5b86c862->leave($__internal_046b3e6cfe00fa4599482d4b9256f52c68e4c177509522dc67afbcac5b86c862_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/email.txt.twig";
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
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "@FOSUser/Resetting/email.txt.twig", "C:\\wamp64\\www\\ProjetPiDev\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Resetting\\email.txt.twig");
    }
}
