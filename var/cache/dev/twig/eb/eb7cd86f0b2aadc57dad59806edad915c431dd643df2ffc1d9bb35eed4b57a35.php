<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_1fe37e7333fa2302574a681f9e5e027d2256d8d096a297ce8f660b3bf5fbc0d8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
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
        $__internal_a0e2e0b938419e37fb50078b3bd92c05f423cbe1386c6855b55983d62100176d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0e2e0b938419e37fb50078b3bd92c05f423cbe1386c6855b55983d62100176d->enter($__internal_a0e2e0b938419e37fb50078b3bd92c05f423cbe1386c6855b55983d62100176d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_d25dca58b411b67920645ed7b0cd808a23e5df0da315425ca18d8843d9153f63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d25dca58b411b67920645ed7b0cd808a23e5df0da315425ca18d8843d9153f63->enter($__internal_d25dca58b411b67920645ed7b0cd808a23e5df0da315425ca18d8843d9153f63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a0e2e0b938419e37fb50078b3bd92c05f423cbe1386c6855b55983d62100176d->leave($__internal_a0e2e0b938419e37fb50078b3bd92c05f423cbe1386c6855b55983d62100176d_prof);

        
        $__internal_d25dca58b411b67920645ed7b0cd808a23e5df0da315425ca18d8843d9153f63->leave($__internal_d25dca58b411b67920645ed7b0cd808a23e5df0da315425ca18d8843d9153f63_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9345538b9ed5e8aa3eb60e9fcd487e49ff186f34133e989cc5d68688b1e2ec63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9345538b9ed5e8aa3eb60e9fcd487e49ff186f34133e989cc5d68688b1e2ec63->enter($__internal_9345538b9ed5e8aa3eb60e9fcd487e49ff186f34133e989cc5d68688b1e2ec63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_9d0d092cedddd26b291842531bc697918bbf67d7463c36ee6992cdbec2f049d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d0d092cedddd26b291842531bc697918bbf67d7463c36ee6992cdbec2f049d5->enter($__internal_9d0d092cedddd26b291842531bc697918bbf67d7463c36ee6992cdbec2f049d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_9d0d092cedddd26b291842531bc697918bbf67d7463c36ee6992cdbec2f049d5->leave($__internal_9d0d092cedddd26b291842531bc697918bbf67d7463c36ee6992cdbec2f049d5_prof);

        
        $__internal_9345538b9ed5e8aa3eb60e9fcd487e49ff186f34133e989cc5d68688b1e2ec63->leave($__internal_9345538b9ed5e8aa3eb60e9fcd487e49ff186f34133e989cc5d68688b1e2ec63_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_98bdbd250ec867c909170ded14b7d6b83d9d7897607842bfb8ab753816438e2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98bdbd250ec867c909170ded14b7d6b83d9d7897607842bfb8ab753816438e2b->enter($__internal_98bdbd250ec867c909170ded14b7d6b83d9d7897607842bfb8ab753816438e2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_05eaca5a9c66cc39f73f8cd377fdda4a71e2bc2ae3f43f8a9d1674e37774d35a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05eaca5a9c66cc39f73f8cd377fdda4a71e2bc2ae3f43f8a9d1674e37774d35a->enter($__internal_05eaca5a9c66cc39f73f8cd377fdda4a71e2bc2ae3f43f8a9d1674e37774d35a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_05eaca5a9c66cc39f73f8cd377fdda4a71e2bc2ae3f43f8a9d1674e37774d35a->leave($__internal_05eaca5a9c66cc39f73f8cd377fdda4a71e2bc2ae3f43f8a9d1674e37774d35a_prof);

        
        $__internal_98bdbd250ec867c909170ded14b7d6b83d9d7897607842bfb8ab753816438e2b->leave($__internal_98bdbd250ec867c909170ded14b7d6b83d9d7897607842bfb8ab753816438e2b_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
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
", "@WebProfiler/Profiler/open.html.twig", "C:\\wamp64\\www\\ProjetPiDev\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\open.html.twig");
    }
}
