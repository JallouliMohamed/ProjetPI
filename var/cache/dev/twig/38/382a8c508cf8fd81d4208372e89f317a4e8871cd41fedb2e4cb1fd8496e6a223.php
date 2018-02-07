<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_cb3970c44b3e49571b2edb4726397250c693bb0d7336781ba45c6f8c238612b4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c0fedc465e502a7774385543b7b096549a08855d1432d388af85a0dcb912687c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0fedc465e502a7774385543b7b096549a08855d1432d388af85a0dcb912687c->enter($__internal_c0fedc465e502a7774385543b7b096549a08855d1432d388af85a0dcb912687c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $__internal_ba23a6727ae765c5e18aceb84e82f380b204b0e40c78ee97e1447be7243bedfe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba23a6727ae765c5e18aceb84e82f380b204b0e40c78ee97e1447be7243bedfe->enter($__internal_ba23a6727ae765c5e18aceb84e82f380b204b0e40c78ee97e1447be7243bedfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c0fedc465e502a7774385543b7b096549a08855d1432d388af85a0dcb912687c->leave($__internal_c0fedc465e502a7774385543b7b096549a08855d1432d388af85a0dcb912687c_prof);

        
        $__internal_ba23a6727ae765c5e18aceb84e82f380b204b0e40c78ee97e1447be7243bedfe->leave($__internal_ba23a6727ae765c5e18aceb84e82f380b204b0e40c78ee97e1447be7243bedfe_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_65d47f2493e538108b6b9fe46e012bb04b06a5b86b41d03b20d79e79f653c3ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65d47f2493e538108b6b9fe46e012bb04b06a5b86b41d03b20d79e79f653c3ba->enter($__internal_65d47f2493e538108b6b9fe46e012bb04b06a5b86b41d03b20d79e79f653c3ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_be496f957b16b2088b89d6618c65d7b032793b0853b6b0b4f284a4cbf7a5fa0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be496f957b16b2088b89d6618c65d7b032793b0853b6b0b4f284a4cbf7a5fa0d->enter($__internal_be496f957b16b2088b89d6618c65d7b032793b0853b6b0b4f284a4cbf7a5fa0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_be496f957b16b2088b89d6618c65d7b032793b0853b6b0b4f284a4cbf7a5fa0d->leave($__internal_be496f957b16b2088b89d6618c65d7b032793b0853b6b0b4f284a4cbf7a5fa0d_prof);

        
        $__internal_65d47f2493e538108b6b9fe46e012bb04b06a5b86b41d03b20d79e79f653c3ba->leave($__internal_65d47f2493e538108b6b9fe46e012bb04b06a5b86b41d03b20d79e79f653c3ba_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:ChangePassword:change_password.html.twig", "C:\\wamp64\\www\\ProjetPiDev\\vendor\\friendsofsymfony\\user-bundle/Resources/views/ChangePassword/change_password.html.twig");
    }
}
