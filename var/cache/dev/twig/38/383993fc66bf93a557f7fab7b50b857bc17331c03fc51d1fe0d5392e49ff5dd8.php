<?php

/* piBundle:Default:homeUser.html.twig */
class __TwigTemplate_2673eea8f492c31078cee18478374c613f44c0df822a08edc85aa277c24c9320 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "piBundle:Default:homeUser.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a15672811ea6d11d1d2483ed9e1b5f88805908825c0c46d4a804a19a12e342cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a15672811ea6d11d1d2483ed9e1b5f88805908825c0c46d4a804a19a12e342cc->enter($__internal_a15672811ea6d11d1d2483ed9e1b5f88805908825c0c46d4a804a19a12e342cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "piBundle:Default:homeUser.html.twig"));

        $__internal_240832b67ad4b8642cf108d074118b0d327ca5afca36633de035bbd6e8aa6939 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_240832b67ad4b8642cf108d074118b0d327ca5afca36633de035bbd6e8aa6939->enter($__internal_240832b67ad4b8642cf108d074118b0d327ca5afca36633de035bbd6e8aa6939_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "piBundle:Default:homeUser.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a15672811ea6d11d1d2483ed9e1b5f88805908825c0c46d4a804a19a12e342cc->leave($__internal_a15672811ea6d11d1d2483ed9e1b5f88805908825c0c46d4a804a19a12e342cc_prof);

        
        $__internal_240832b67ad4b8642cf108d074118b0d327ca5afca36633de035bbd6e8aa6939->leave($__internal_240832b67ad4b8642cf108d074118b0d327ca5afca36633de035bbd6e8aa6939_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_cdf948c151bf53bd10db550a3f9b99eb87940c8d86555b4f54d9b88b38fc568e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cdf948c151bf53bd10db550a3f9b99eb87940c8d86555b4f54d9b88b38fc568e->enter($__internal_cdf948c151bf53bd10db550a3f9b99eb87940c8d86555b4f54d9b88b38fc568e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6b4f76558911a7fb702b3ae30044c05b92c829c333c59bf56b1f488b9e2ee123 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b4f76558911a7fb702b3ae30044c05b92c829c333c59bf56b1f488b9e2ee123->enter($__internal_6b4f76558911a7fb702b3ae30044c05b92c829c333c59bf56b1f488b9e2ee123_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div class=\"content\">
        <h1>";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "</h1>
    </div>
";
        
        $__internal_6b4f76558911a7fb702b3ae30044c05b92c829c333c59bf56b1f488b9e2ee123->leave($__internal_6b4f76558911a7fb702b3ae30044c05b92c829c333c59bf56b1f488b9e2ee123_prof);

        
        $__internal_cdf948c151bf53bd10db550a3f9b99eb87940c8d86555b4f54d9b88b38fc568e->leave($__internal_cdf948c151bf53bd10db550a3f9b99eb87940c8d86555b4f54d9b88b38fc568e_prof);

    }

    public function getTemplateName()
    {
        return "piBundle:Default:homeUser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 4,  49 => 3,  40 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %}
{% block body %}
    <div class=\"content\">
        <h1>{{ app.user.username }}</h1>
    </div>
{% endblock %}", "piBundle:Default:homeUser.html.twig", "C:\\wamp64\\www\\ProjetPiDev\\src\\piBundle\\Resources\\views\\Default\\homeUser.html.twig");
    }
}
