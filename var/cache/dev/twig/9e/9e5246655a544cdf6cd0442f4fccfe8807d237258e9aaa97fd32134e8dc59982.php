<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_284ac1007ef3f4882e150d904edbe2fdd396431939016f7d6f1b3dd169b8207c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:check_email.html.twig", 1);
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
        $__internal_cd5bd9648651002a49f2b1c874afc01a0bdfc77773f3d4cd2f9a13ea37f3ea7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd5bd9648651002a49f2b1c874afc01a0bdfc77773f3d4cd2f9a13ea37f3ea7b->enter($__internal_cd5bd9648651002a49f2b1c874afc01a0bdfc77773f3d4cd2f9a13ea37f3ea7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $__internal_a876bf95488871cfb766754044d13667378a5fe78b1cc63bc9ab666912d46d8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a876bf95488871cfb766754044d13667378a5fe78b1cc63bc9ab666912d46d8c->enter($__internal_a876bf95488871cfb766754044d13667378a5fe78b1cc63bc9ab666912d46d8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cd5bd9648651002a49f2b1c874afc01a0bdfc77773f3d4cd2f9a13ea37f3ea7b->leave($__internal_cd5bd9648651002a49f2b1c874afc01a0bdfc77773f3d4cd2f9a13ea37f3ea7b_prof);

        
        $__internal_a876bf95488871cfb766754044d13667378a5fe78b1cc63bc9ab666912d46d8c->leave($__internal_a876bf95488871cfb766754044d13667378a5fe78b1cc63bc9ab666912d46d8c_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1435b5aa42f5cf027ea48321c7d78921f35cdcc9d34503aff8a9fa6b4d58eec8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1435b5aa42f5cf027ea48321c7d78921f35cdcc9d34503aff8a9fa6b4d58eec8->enter($__internal_1435b5aa42f5cf027ea48321c7d78921f35cdcc9d34503aff8a9fa6b4d58eec8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_013fe4d4db8186529a1a941cd1a457306d99cad39eee029543a60d2156db7fa1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_013fe4d4db8186529a1a941cd1a457306d99cad39eee029543a60d2156db7fa1->enter($__internal_013fe4d4db8186529a1a941cd1a457306d99cad39eee029543a60d2156db7fa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_013fe4d4db8186529a1a941cd1a457306d99cad39eee029543a60d2156db7fa1->leave($__internal_013fe4d4db8186529a1a941cd1a457306d99cad39eee029543a60d2156db7fa1_prof);

        
        $__internal_1435b5aa42f5cf027ea48321c7d78921f35cdcc9d34503aff8a9fa6b4d58eec8->leave($__internal_1435b5aa42f5cf027ea48321c7d78921f35cdcc9d34503aff8a9fa6b4d58eec8_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:check_email.html.twig";
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
", "FOSUserBundle:Registration:check_email.html.twig", "C:\\wamp64\\www\\ProjetPiDev\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Registration/check_email.html.twig");
    }
}
