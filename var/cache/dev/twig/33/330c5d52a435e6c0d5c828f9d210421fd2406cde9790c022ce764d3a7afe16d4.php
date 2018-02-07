<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_31921a778c2d69716c12892e3066a675698d7b08735a99118bfc8e4a67c2c459 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5185a9df01fc3ac47fd1ce025cc517d2edc3a33a57995aa05a736d9e6c625455 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5185a9df01fc3ac47fd1ce025cc517d2edc3a33a57995aa05a736d9e6c625455->enter($__internal_5185a9df01fc3ac47fd1ce025cc517d2edc3a33a57995aa05a736d9e6c625455_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        $__internal_ebb00af68d1cd7de58bb73f557a5265ae020f502c4749f0ae3ebd152024e9069 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebb00af68d1cd7de58bb73f557a5265ae020f502c4749f0ae3ebd152024e9069->enter($__internal_ebb00af68d1cd7de58bb73f557a5265ae020f502c4749f0ae3ebd152024e9069_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_5185a9df01fc3ac47fd1ce025cc517d2edc3a33a57995aa05a736d9e6c625455->leave($__internal_5185a9df01fc3ac47fd1ce025cc517d2edc3a33a57995aa05a736d9e6c625455_prof);

        
        $__internal_ebb00af68d1cd7de58bb73f557a5265ae020f502c4749f0ae3ebd152024e9069->leave($__internal_ebb00af68d1cd7de58bb73f557a5265ae020f502c4749f0ae3ebd152024e9069_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "@Twig/Exception/error.css.twig", "C:\\wamp64\\www\\ProjetPiDev\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.css.twig");
    }
}
