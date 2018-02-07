<?php

/* FOSUserBundle:Profile:edit_content.html.twig */
class __TwigTemplate_0fabf51a6ebe70e10ec5db1d2f1fd23797b637fa911e76bd2c27f1fd718b8cf2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "FOSUserBundle:Profile:edit_content.html.twig", 2);
        $this->blocks = array(
            'traitement' => array($this, 'block_traitement'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a3ac7131a25046819ddf3095b0967035fd1b506f541f72bb6c617f08a94ab707 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3ac7131a25046819ddf3095b0967035fd1b506f541f72bb6c617f08a94ab707->enter($__internal_a3ac7131a25046819ddf3095b0967035fd1b506f541f72bb6c617f08a94ab707_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit_content.html.twig"));

        $__internal_7b7225ca3a25667306adfcd487bd6ced3f87aec9270e09fa2a0e262d803301f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b7225ca3a25667306adfcd487bd6ced3f87aec9270e09fa2a0e262d803301f6->enter($__internal_7b7225ca3a25667306adfcd487bd6ced3f87aec9270e09fa2a0e262d803301f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit_content.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "bootstrap_3_horizontal_layout.html.twig"));
        // line 2
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a3ac7131a25046819ddf3095b0967035fd1b506f541f72bb6c617f08a94ab707->leave($__internal_a3ac7131a25046819ddf3095b0967035fd1b506f541f72bb6c617f08a94ab707_prof);

        
        $__internal_7b7225ca3a25667306adfcd487bd6ced3f87aec9270e09fa2a0e262d803301f6->leave($__internal_7b7225ca3a25667306adfcd487bd6ced3f87aec9270e09fa2a0e262d803301f6_prof);

    }

    // line 4
    public function block_traitement($context, array $blocks = array())
    {
        $__internal_6fe494df4707adbb493ee90d2b3a28d49eda6447590aa82253dbbb4187f50219 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6fe494df4707adbb493ee90d2b3a28d49eda6447590aa82253dbbb4187f50219->enter($__internal_6fe494df4707adbb493ee90d2b3a28d49eda6447590aa82253dbbb4187f50219_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "traitement"));

        $__internal_a09484777b9d096c05e578e33db28244e7b9297d73f2d9122a653e748ca47662 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a09484777b9d096c05e578e33db28244e7b9297d73f2d9122a653e748ca47662->enter($__internal_a09484777b9d096c05e578e33db28244e7b9297d73f2d9122a653e748ca47662_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "traitement"));

        // line 5
        echo "    ";
        
        $__internal_a09484777b9d096c05e578e33db28244e7b9297d73f2d9122a653e748ca47662->leave($__internal_a09484777b9d096c05e578e33db28244e7b9297d73f2d9122a653e748ca47662_prof);

        
        $__internal_6fe494df4707adbb493ee90d2b3a28d49eda6447590aa82253dbbb4187f50219->leave($__internal_6fe494df4707adbb493ee90d2b3a28d49eda6447590aa82253dbbb4187f50219_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_d1fc64b8d530af5e77cbe8072a00286e8213b9ffbf9a9d622403ad97fae2dece = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1fc64b8d530af5e77cbe8072a00286e8213b9ffbf9a9d622403ad97fae2dece->enter($__internal_d1fc64b8d530af5e77cbe8072a00286e8213b9ffbf9a9d622403ad97fae2dece_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_730b0a3c5479d054aede91d90e216e935a8347b6fe8499688f031d7b8fd23b04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_730b0a3c5479d054aede91d90e216e935a8347b6fe8499688f031d7b8fd23b04->enter($__internal_730b0a3c5479d054aede91d90e216e935a8347b6fe8499688f031d7b8fd23b04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <div class=\"row\">
    <div class=\"col-md-12 col-sm-12 col-xs-12\">
    <div class=\"x_panel\">
    <div class=\"x_title\">
        <center><h3>Modifier mon profil</h3></center>
        <ul class=\"nav navbar-right panel_toolbox\">
        </ul>
        <div class=\"clearfix\"></div>
    </div>
    <div class=\"x_content\">
    <br />

    <div class=\"col-md-2\"></div>
    <div class=\"container\">
    <div class=\"col-md-8\">

    ";
        // line 23
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit"), "attr" => array("class" => "fos_user_profile_edit")));
        echo "
    ";
        // line 24
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.edit.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
";
        // line 28
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
";
        
        $__internal_730b0a3c5479d054aede91d90e216e935a8347b6fe8499688f031d7b8fd23b04->leave($__internal_730b0a3c5479d054aede91d90e216e935a8347b6fe8499688f031d7b8fd23b04_prof);

        
        $__internal_d1fc64b8d530af5e77cbe8072a00286e8213b9ffbf9a9d622403ad97fae2dece->leave($__internal_d1fc64b8d530af5e77cbe8072a00286e8213b9ffbf9a9d622403ad97fae2dece_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 28,  99 => 26,  94 => 24,  90 => 23,  72 => 7,  63 => 6,  53 => 5,  44 => 4,  34 => 2,  32 => 3,  11 => 2,);
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
{% extends \"base.html.twig\" %}
{% form_theme form 'bootstrap_3_horizontal_layout.html.twig' %}
{% block traitement %}
    {% endblock %}
{% block body %}
    <div class=\"row\">
    <div class=\"col-md-12 col-sm-12 col-xs-12\">
    <div class=\"x_panel\">
    <div class=\"x_title\">
        <center><h3>Modifier mon profil</h3></center>
        <ul class=\"nav navbar-right panel_toolbox\">
        </ul>
        <div class=\"clearfix\"></div>
    </div>
    <div class=\"x_content\">
    <br />

    <div class=\"col-md-2\"></div>
    <div class=\"container\">
    <div class=\"col-md-8\">

    {{ form_start(form, { 'action': path('fos_user_profile_edit'), 'attr': { 'class': 'fos_user_profile_edit' } }) }}
    {{ form_widget(form) }}
    <div>
        <input type=\"submit\" value=\"{{ 'profile.edit.submit'|trans }}\" />
    </div>
{{ form_end(form) }}
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
{% endblock %}", "FOSUserBundle:Profile:edit_content.html.twig", "C:\\wamp64\\www\\ProjetPiDev\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Profile/edit_content.html.twig");
    }
}
