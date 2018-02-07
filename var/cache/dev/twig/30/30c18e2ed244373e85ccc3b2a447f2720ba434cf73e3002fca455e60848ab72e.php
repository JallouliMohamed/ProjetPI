<?php

/* @FOSUser/Group/show.html.twig */
class __TwigTemplate_f6ea08e3c4f190f065f46b2e65ad516762f7ed413e69a830f9d987140b9c98a1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/show.html.twig", 1);
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
        $__internal_4014713745e8cfc10809dad74d5d1292bc13d13ebf64634844d493ba45da6d5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4014713745e8cfc10809dad74d5d1292bc13d13ebf64634844d493ba45da6d5e->enter($__internal_4014713745e8cfc10809dad74d5d1292bc13d13ebf64634844d493ba45da6d5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $__internal_2535925339b6dc82190a9cd25a3f6bad17330e0a44d39e83ca6bd2d54cc4ea03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2535925339b6dc82190a9cd25a3f6bad17330e0a44d39e83ca6bd2d54cc4ea03->enter($__internal_2535925339b6dc82190a9cd25a3f6bad17330e0a44d39e83ca6bd2d54cc4ea03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4014713745e8cfc10809dad74d5d1292bc13d13ebf64634844d493ba45da6d5e->leave($__internal_4014713745e8cfc10809dad74d5d1292bc13d13ebf64634844d493ba45da6d5e_prof);

        
        $__internal_2535925339b6dc82190a9cd25a3f6bad17330e0a44d39e83ca6bd2d54cc4ea03->leave($__internal_2535925339b6dc82190a9cd25a3f6bad17330e0a44d39e83ca6bd2d54cc4ea03_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5e750025b1d94a890ce3a32e7c1fe1675bdd043a186acae08cddf30e9bd1bfde = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e750025b1d94a890ce3a32e7c1fe1675bdd043a186acae08cddf30e9bd1bfde->enter($__internal_5e750025b1d94a890ce3a32e7c1fe1675bdd043a186acae08cddf30e9bd1bfde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_b38fb908f966200a1de55e3818d1fbf35c4f6a2ba29a87494691c8546010607e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b38fb908f966200a1de55e3818d1fbf35c4f6a2ba29a87494691c8546010607e->enter($__internal_b38fb908f966200a1de55e3818d1fbf35c4f6a2ba29a87494691c8546010607e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_b38fb908f966200a1de55e3818d1fbf35c4f6a2ba29a87494691c8546010607e->leave($__internal_b38fb908f966200a1de55e3818d1fbf35c4f6a2ba29a87494691c8546010607e_prof);

        
        $__internal_5e750025b1d94a890ce3a32e7c1fe1675bdd043a186acae08cddf30e9bd1bfde->leave($__internal_5e750025b1d94a890ce3a32e7c1fe1675bdd043a186acae08cddf30e9bd1bfde_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show.html.twig";
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
", "@FOSUser/Group/show.html.twig", "C:\\wamp64\\www\\ProjetPiDev\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\show.html.twig");
    }
}
