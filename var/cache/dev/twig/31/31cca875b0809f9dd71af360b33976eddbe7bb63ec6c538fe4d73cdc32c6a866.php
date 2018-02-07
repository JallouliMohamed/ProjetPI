<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_e417fa1a479f19689a6d1220bb445e6ec30ca4d2cc20d2b6aefe577657a084f3 extends Twig_Template
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
        $__internal_5d8ce5878b21564a07ad47284fa8164810224372801ab293400559d17410190e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d8ce5878b21564a07ad47284fa8164810224372801ab293400559d17410190e->enter($__internal_5d8ce5878b21564a07ad47284fa8164810224372801ab293400559d17410190e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        $__internal_f258e682319c24d5c7acd1e1bf0198ae0efb9da7d52056fb9766654116eb86f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f258e682319c24d5c7acd1e1bf0198ae0efb9da7d52056fb9766654116eb86f2->enter($__internal_f258e682319c24d5c7acd1e1bf0198ae0efb9da7d52056fb9766654116eb86f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

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
        
        $__internal_5d8ce5878b21564a07ad47284fa8164810224372801ab293400559d17410190e->leave($__internal_5d8ce5878b21564a07ad47284fa8164810224372801ab293400559d17410190e_prof);

        
        $__internal_f258e682319c24d5c7acd1e1bf0198ae0efb9da7d52056fb9766654116eb86f2->leave($__internal_f258e682319c24d5c7acd1e1bf0198ae0efb9da7d52056fb9766654116eb86f2_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
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
", "FOSUserBundle:Group:show_content.html.twig", "C:\\wamp64\\www\\ProjetPiDev\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Group/show_content.html.twig");
    }
}
