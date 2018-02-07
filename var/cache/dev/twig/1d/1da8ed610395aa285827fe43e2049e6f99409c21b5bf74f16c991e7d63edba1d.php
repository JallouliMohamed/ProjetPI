<?php

/* piBundle:Default:homeUser.html.twig */
class __TwigTemplate_c082b6f9c4c8b9968cc532f86c3159e399abe2d7131404146dd236cfc2f64a3f extends Twig_Template
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
        $__internal_a624a04be5f728f3138812986dbf19bbd3ddfa7547d8f3621ae22d2ed8f9d98e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a624a04be5f728f3138812986dbf19bbd3ddfa7547d8f3621ae22d2ed8f9d98e->enter($__internal_a624a04be5f728f3138812986dbf19bbd3ddfa7547d8f3621ae22d2ed8f9d98e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "piBundle:Default:homeUser.html.twig"));

        $__internal_ac1fab8d015a5265e38b10640d81df19b09fb085dc60f955c830f884cf504c1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac1fab8d015a5265e38b10640d81df19b09fb085dc60f955c830f884cf504c1c->enter($__internal_ac1fab8d015a5265e38b10640d81df19b09fb085dc60f955c830f884cf504c1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "piBundle:Default:homeUser.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a624a04be5f728f3138812986dbf19bbd3ddfa7547d8f3621ae22d2ed8f9d98e->leave($__internal_a624a04be5f728f3138812986dbf19bbd3ddfa7547d8f3621ae22d2ed8f9d98e_prof);

        
        $__internal_ac1fab8d015a5265e38b10640d81df19b09fb085dc60f955c830f884cf504c1c->leave($__internal_ac1fab8d015a5265e38b10640d81df19b09fb085dc60f955c830f884cf504c1c_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_be8b4eba18768c185c145a0244df98e928d9db122dc2fb7a260e2f0108d2e7fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be8b4eba18768c185c145a0244df98e928d9db122dc2fb7a260e2f0108d2e7fc->enter($__internal_be8b4eba18768c185c145a0244df98e928d9db122dc2fb7a260e2f0108d2e7fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_55847dfe8514b0508055d5197fcfdc0c75e296a683a8529e2817ab323cd5dd3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55847dfe8514b0508055d5197fcfdc0c75e296a683a8529e2817ab323cd5dd3c->enter($__internal_55847dfe8514b0508055d5197fcfdc0c75e296a683a8529e2817ab323cd5dd3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div class=\"content\">
        <h1>";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "</h1>
    </div>
";
        
        $__internal_55847dfe8514b0508055d5197fcfdc0c75e296a683a8529e2817ab323cd5dd3c->leave($__internal_55847dfe8514b0508055d5197fcfdc0c75e296a683a8529e2817ab323cd5dd3c_prof);

        
        $__internal_be8b4eba18768c185c145a0244df98e928d9db122dc2fb7a260e2f0108d2e7fc->leave($__internal_be8b4eba18768c185c145a0244df98e928d9db122dc2fb7a260e2f0108d2e7fc_prof);

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
{% endblock %}", "piBundle:Default:homeUser.html.twig", "C:\\wamp64\\www\\ProjetPiDev\\src\\piBundle/Resources/views/Default/homeUser.html.twig");
    }
}
