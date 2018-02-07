<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_9c89f10cb6bf51da95570ca3bd60a41f7ad1521ff9b1c997966bb939d5b6447e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4560cf6fe794843a968d15731aa2975c4d127348614da5f41388f2e1cec6ea33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4560cf6fe794843a968d15731aa2975c4d127348614da5f41388f2e1cec6ea33->enter($__internal_4560cf6fe794843a968d15731aa2975c4d127348614da5f41388f2e1cec6ea33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_24c088e8bd30dfb5af63902b8662babda41d808d203aad4bc5c4b3ab1ff711bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24c088e8bd30dfb5af63902b8662babda41d808d203aad4bc5c4b3ab1ff711bb->enter($__internal_24c088e8bd30dfb5af63902b8662babda41d808d203aad4bc5c4b3ab1ff711bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_4560cf6fe794843a968d15731aa2975c4d127348614da5f41388f2e1cec6ea33->leave($__internal_4560cf6fe794843a968d15731aa2975c4d127348614da5f41388f2e1cec6ea33_prof);

        
        $__internal_24c088e8bd30dfb5af63902b8662babda41d808d203aad4bc5c4b3ab1ff711bb->leave($__internal_24c088e8bd30dfb5af63902b8662babda41d808d203aad4bc5c4b3ab1ff711bb_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_735aacd5421ca4d25d64d941ec6f8904597deceb015feeec9bad33665b713f82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_735aacd5421ca4d25d64d941ec6f8904597deceb015feeec9bad33665b713f82->enter($__internal_735aacd5421ca4d25d64d941ec6f8904597deceb015feeec9bad33665b713f82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_94d126b014dee95e85203179b8c627ac968b41edf047ebcec4617a13b8b6f485 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94d126b014dee95e85203179b8c627ac968b41edf047ebcec4617a13b8b6f485->enter($__internal_94d126b014dee95e85203179b8c627ac968b41edf047ebcec4617a13b8b6f485_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_94d126b014dee95e85203179b8c627ac968b41edf047ebcec4617a13b8b6f485->leave($__internal_94d126b014dee95e85203179b8c627ac968b41edf047ebcec4617a13b8b6f485_prof);

        
        $__internal_735aacd5421ca4d25d64d941ec6f8904597deceb015feeec9bad33665b713f82->leave($__internal_735aacd5421ca4d25d64d941ec6f8904597deceb015feeec9bad33665b713f82_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "@WebProfiler/Profiler/ajax_layout.html.twig", "C:\\wamp64\\www\\ProjetPiDev\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\ajax_layout.html.twig");
    }
}
