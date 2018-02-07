<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_e82cc42191a1c86f995f004beed851b22f45804bbcc1c170d0d2c5fa1e9ac6be extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_1460b550eea8ff73dd0228828c2d2abc92537c6beb1fd0664aa40d4df959fa12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1460b550eea8ff73dd0228828c2d2abc92537c6beb1fd0664aa40d4df959fa12->enter($__internal_1460b550eea8ff73dd0228828c2d2abc92537c6beb1fd0664aa40d4df959fa12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $__internal_6b97b563542fc813a4302b08ba09fea63045ad7e7442a0adcd543fa180cd212f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b97b563542fc813a4302b08ba09fea63045ad7e7442a0adcd543fa180cd212f->enter($__internal_6b97b563542fc813a4302b08ba09fea63045ad7e7442a0adcd543fa180cd212f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1460b550eea8ff73dd0228828c2d2abc92537c6beb1fd0664aa40d4df959fa12->leave($__internal_1460b550eea8ff73dd0228828c2d2abc92537c6beb1fd0664aa40d4df959fa12_prof);

        
        $__internal_6b97b563542fc813a4302b08ba09fea63045ad7e7442a0adcd543fa180cd212f->leave($__internal_6b97b563542fc813a4302b08ba09fea63045ad7e7442a0adcd543fa180cd212f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c1828dbe299c9357c248d4ca1eb1317eea7ae0b14e0eb97cbff865b86712d694 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1828dbe299c9357c248d4ca1eb1317eea7ae0b14e0eb97cbff865b86712d694->enter($__internal_c1828dbe299c9357c248d4ca1eb1317eea7ae0b14e0eb97cbff865b86712d694_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_e72f84875ba6ef4e98a4512f9eaf2431303e242903c311d7d7c788cc07b4c58c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e72f84875ba6ef4e98a4512f9eaf2431303e242903c311d7d7c788cc07b4c58c->enter($__internal_e72f84875ba6ef4e98a4512f9eaf2431303e242903c311d7d7c788cc07b4c58c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_e72f84875ba6ef4e98a4512f9eaf2431303e242903c311d7d7c788cc07b4c58c->leave($__internal_e72f84875ba6ef4e98a4512f9eaf2431303e242903c311d7d7c788cc07b4c58c_prof);

        
        $__internal_c1828dbe299c9357c248d4ca1eb1317eea7ae0b14e0eb97cbff865b86712d694->leave($__internal_c1828dbe299c9357c248d4ca1eb1317eea7ae0b14e0eb97cbff865b86712d694_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:show.html.twig", "C:\\wamp64\\www\\ProjetPiDev\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Group/show.html.twig");
    }
}
