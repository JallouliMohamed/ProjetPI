<?php

/* @FOSUser/Profile/show_content.html.twig */
class __TwigTemplate_89f53452f19f6a831b152667d059d1cc54ccb7df36813ace8314bed60881f54c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "@FOSUser/Profile/show_content.html.twig", 2);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_93a9ae6cb5ae6d6a1b58ee4a4f2f56d9082c1d6720c15a95e1209cae7993055d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93a9ae6cb5ae6d6a1b58ee4a4f2f56d9082c1d6720c15a95e1209cae7993055d->enter($__internal_93a9ae6cb5ae6d6a1b58ee4a4f2f56d9082c1d6720c15a95e1209cae7993055d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show_content.html.twig"));

        $__internal_675e51d49c7681b159bd6d417904c8a37f727a0f6e3d50d3b592bedc49956700 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_675e51d49c7681b159bd6d417904c8a37f727a0f6e3d50d3b592bedc49956700->enter($__internal_675e51d49c7681b159bd6d417904c8a37f727a0f6e3d50d3b592bedc49956700_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show_content.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_93a9ae6cb5ae6d6a1b58ee4a4f2f56d9082c1d6720c15a95e1209cae7993055d->leave($__internal_93a9ae6cb5ae6d6a1b58ee4a4f2f56d9082c1d6720c15a95e1209cae7993055d_prof);

        
        $__internal_675e51d49c7681b159bd6d417904c8a37f727a0f6e3d50d3b592bedc49956700->leave($__internal_675e51d49c7681b159bd6d417904c8a37f727a0f6e3d50d3b592bedc49956700_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_a7b0f47c36e0123a051292b53f8f59d09a3905ecc9d21771811e0d7ccc7a1090 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7b0f47c36e0123a051292b53f8f59d09a3905ecc9d21771811e0d7ccc7a1090->enter($__internal_a7b0f47c36e0123a051292b53f8f59d09a3905ecc9d21771811e0d7ccc7a1090_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4933b91b28e61bb1b364cfd1064b0e98a694d594f4612422e6d2f8c0f62a4c23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4933b91b28e61bb1b364cfd1064b0e98a694d594f4612422e6d2f8c0f62a4c23->enter($__internal_4933b91b28e61bb1b364cfd1064b0e98a694d594f4612422e6d2f8c0f62a4c23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<div class=\"row\">
    <div class=\"col-md-12 col-sm-12 col-xs-12\">
        <div class=\"x_panel\">
            <div class=\"x_title\">

                <ul class=\"nav navbar-right panel_toolbox\">
                </ul>
                <div class=\"clearfix\"></div>
            </div>
            <div class=\"x_content\">
                <br />

                <div class=\"col-md-2\"></div>
                <div class=\"container\">
                    <div class=\"col-md-8\">

                    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
        <p>";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

";
        
        $__internal_4933b91b28e61bb1b364cfd1064b0e98a694d594f4612422e6d2f8c0f62a4c23->leave($__internal_4933b91b28e61bb1b364cfd1064b0e98a694d594f4612422e6d2f8c0f62a4c23_prof);

        
        $__internal_a7b0f47c36e0123a051292b53f8f59d09a3905ecc9d21771811e0d7ccc7a1090->leave($__internal_a7b0f47c36e0123a051292b53f8f59d09a3905ecc9d21771811e0d7ccc7a1090_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 22,  67 => 21,  49 => 5,  40 => 4,  11 => 2,);
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
{% extends 'base.html.twig' %}

{% block body %}
<div class=\"row\">
    <div class=\"col-md-12 col-sm-12 col-xs-12\">
        <div class=\"x_panel\">
            <div class=\"x_title\">

                <ul class=\"nav navbar-right panel_toolbox\">
                </ul>
                <div class=\"clearfix\"></div>
            </div>
            <div class=\"x_content\">
                <br />

                <div class=\"col-md-2\"></div>
                <div class=\"container\">
                    <div class=\"col-md-8\">

                    <p>{{ 'profile.show.username'|trans }}: {{ user.username }}</p>
        <p>{{ 'profile.show.email'|trans }}: {{ user.email }}</p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{% endblock %}

", "@FOSUser/Profile/show_content.html.twig", "C:\\wamp64\\www\\ProjetPiDev\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Profile\\show_content.html.twig");
    }
}
