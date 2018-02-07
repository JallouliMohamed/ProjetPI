<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_39522ff2f11238a43a458b542059abf4b1c583f17a738cff1783dad86ba997a4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8046f86c5cc47e52e1598b0f8b7d9a3b3b28c85238f5b068bc5272545ae9330b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8046f86c5cc47e52e1598b0f8b7d9a3b3b28c85238f5b068bc5272545ae9330b->enter($__internal_8046f86c5cc47e52e1598b0f8b7d9a3b3b28c85238f5b068bc5272545ae9330b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_cce033b2007973a99177e63503ea0ea09f2fcb2bec57486229a99304a829c9a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cce033b2007973a99177e63503ea0ea09f2fcb2bec57486229a99304a829c9a7->enter($__internal_cce033b2007973a99177e63503ea0ea09f2fcb2bec57486229a99304a829c9a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8046f86c5cc47e52e1598b0f8b7d9a3b3b28c85238f5b068bc5272545ae9330b->leave($__internal_8046f86c5cc47e52e1598b0f8b7d9a3b3b28c85238f5b068bc5272545ae9330b_prof);

        
        $__internal_cce033b2007973a99177e63503ea0ea09f2fcb2bec57486229a99304a829c9a7->leave($__internal_cce033b2007973a99177e63503ea0ea09f2fcb2bec57486229a99304a829c9a7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b114ca5fd41bd6d85f1f6a7a68929f0439044146e4a25f76bca446a3c44d31c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b114ca5fd41bd6d85f1f6a7a68929f0439044146e4a25f76bca446a3c44d31c3->enter($__internal_b114ca5fd41bd6d85f1f6a7a68929f0439044146e4a25f76bca446a3c44d31c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_9c1f7e5f9e91a6fe3374ec6de0bb5a843dfe772dc43b142a6b71eedc8c425e0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c1f7e5f9e91a6fe3374ec6de0bb5a843dfe772dc43b142a6b71eedc8c425e0d->enter($__internal_9c1f7e5f9e91a6fe3374ec6de0bb5a843dfe772dc43b142a6b71eedc8c425e0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_9c1f7e5f9e91a6fe3374ec6de0bb5a843dfe772dc43b142a6b71eedc8c425e0d->leave($__internal_9c1f7e5f9e91a6fe3374ec6de0bb5a843dfe772dc43b142a6b71eedc8c425e0d_prof);

        
        $__internal_b114ca5fd41bd6d85f1f6a7a68929f0439044146e4a25f76bca446a3c44d31c3->leave($__internal_b114ca5fd41bd6d85f1f6a7a68929f0439044146e4a25f76bca446a3c44d31c3_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_b0c57a35d57299c1514f87a87c8d4c77d3aaed2f96c6a2b4781ad46b4eb7362d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0c57a35d57299c1514f87a87c8d4c77d3aaed2f96c6a2b4781ad46b4eb7362d->enter($__internal_b0c57a35d57299c1514f87a87c8d4c77d3aaed2f96c6a2b4781ad46b4eb7362d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_10c1f79becfeb71c59c073d92ee81a9f58aa910399ba5cac2d571c88ca2a34c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10c1f79becfeb71c59c073d92ee81a9f58aa910399ba5cac2d571c88ca2a34c8->enter($__internal_10c1f79becfeb71c59c073d92ee81a9f58aa910399ba5cac2d571c88ca2a34c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) ? $context["filename"] : $this->getContext($context, "filename")), (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_10c1f79becfeb71c59c073d92ee81a9f58aa910399ba5cac2d571c88ca2a34c8->leave($__internal_10c1f79becfeb71c59c073d92ee81a9f58aa910399ba5cac2d571c88ca2a34c8_prof);

        
        $__internal_b0c57a35d57299c1514f87a87c8d4c77d3aaed2f96c6a2b4781ad46b4eb7362d->leave($__internal_b0c57a35d57299c1514f87a87c8d4c77d3aaed2f96c6a2b4781ad46b4eb7362d_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "C:\\wamp64\\www\\ProjetPiDev\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
