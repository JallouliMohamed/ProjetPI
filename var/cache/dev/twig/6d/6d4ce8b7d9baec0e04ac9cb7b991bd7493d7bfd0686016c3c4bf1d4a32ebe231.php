<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_a3befd5d08ceb339cb7d06b906f646730360c7ea0efc9092049009f640a48f14 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_07cbd94625922bd8fc04fca08f58064660b34fd159ddbef45ee80dc0a3de0012 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07cbd94625922bd8fc04fca08f58064660b34fd159ddbef45ee80dc0a3de0012->enter($__internal_07cbd94625922bd8fc04fca08f58064660b34fd159ddbef45ee80dc0a3de0012_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $__internal_115ed5bcac941d67e8af1653aee6f924297084685ff2f8c0a1902096e04a414f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_115ed5bcac941d67e8af1653aee6f924297084685ff2f8c0a1902096e04a414f->enter($__internal_115ed5bcac941d67e8af1653aee6f924297084685ff2f8c0a1902096e04a414f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_07cbd94625922bd8fc04fca08f58064660b34fd159ddbef45ee80dc0a3de0012->leave($__internal_07cbd94625922bd8fc04fca08f58064660b34fd159ddbef45ee80dc0a3de0012_prof);

        
        $__internal_115ed5bcac941d67e8af1653aee6f924297084685ff2f8c0a1902096e04a414f->leave($__internal_115ed5bcac941d67e8af1653aee6f924297084685ff2f8c0a1902096e04a414f_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f92cb22659e6c65c850adc7229a8509cf0bf281524787e1582756f18f72a17df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f92cb22659e6c65c850adc7229a8509cf0bf281524787e1582756f18f72a17df->enter($__internal_f92cb22659e6c65c850adc7229a8509cf0bf281524787e1582756f18f72a17df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_87166be39d963d994cd91792aeb4d7e376b62ce855ed4d12885cae6f4d9809da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87166be39d963d994cd91792aeb4d7e376b62ce855ed4d12885cae6f4d9809da->enter($__internal_87166be39d963d994cd91792aeb4d7e376b62ce855ed4d12885cae6f4d9809da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_87166be39d963d994cd91792aeb4d7e376b62ce855ed4d12885cae6f4d9809da->leave($__internal_87166be39d963d994cd91792aeb4d7e376b62ce855ed4d12885cae6f4d9809da_prof);

        
        $__internal_f92cb22659e6c65c850adc7229a8509cf0bf281524787e1582756f18f72a17df->leave($__internal_f92cb22659e6c65c850adc7229a8509cf0bf281524787e1582756f18f72a17df_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  47 => 4,  29 => 3,  26 => 2,);
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

{% block fos_user_content %}
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Profile/show.html.twig", "C:\\wamp64\\www\\ProjetPiDev\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Profile\\show.html.twig");
    }
}
