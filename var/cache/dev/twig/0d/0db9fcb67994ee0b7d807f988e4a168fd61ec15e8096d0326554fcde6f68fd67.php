<?php

/* @FOSUser/Group/show_content.html.twig */
class __TwigTemplate_8cb067fab8952f50f4bf5d82c9eec2096954155e4f4228629234efcd9de2cbb3 extends Twig_Template
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
        $__internal_7d82c75d1ee0af9c71676d171695143a5de027c8e6e5f535460e0ade69477666 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d82c75d1ee0af9c71676d171695143a5de027c8e6e5f535460e0ade69477666->enter($__internal_7d82c75d1ee0af9c71676d171695143a5de027c8e6e5f535460e0ade69477666_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show_content.html.twig"));

        $__internal_c763b6c22d3b6dcc626024ec1553e5baf39b4dab478192982e0dd9791692e12e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c763b6c22d3b6dcc626024ec1553e5baf39b4dab478192982e0dd9791692e12e->enter($__internal_c763b6c22d3b6dcc626024ec1553e5baf39b4dab478192982e0dd9791692e12e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_7d82c75d1ee0af9c71676d171695143a5de027c8e6e5f535460e0ade69477666->leave($__internal_7d82c75d1ee0af9c71676d171695143a5de027c8e6e5f535460e0ade69477666_prof);

        
        $__internal_c763b6c22d3b6dcc626024ec1553e5baf39b4dab478192982e0dd9791692e12e->leave($__internal_c763b6c22d3b6dcc626024ec1553e5baf39b4dab478192982e0dd9791692e12e_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 4,  25 => 2,);
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

<div class=\"fos_user_group_show\">
    <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>
</div>
", "@FOSUser/Group/show_content.html.twig", "C:\\wamp64\\www\\ProjetPiDev\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\show_content.html.twig");
    }
}
