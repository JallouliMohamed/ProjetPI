<?php

/* @FOSUser/Group/edit.html.twig */
class __TwigTemplate_0e2cf3fe1d5de92ae41a2ed8f3382c4030e31367364785923f02e678b34e83f5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/edit.html.twig", 1);
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
        $__internal_bb32e9804c34d47c15f61dd8c02b9eb256316fa99deba56aa902935004984873 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb32e9804c34d47c15f61dd8c02b9eb256316fa99deba56aa902935004984873->enter($__internal_bb32e9804c34d47c15f61dd8c02b9eb256316fa99deba56aa902935004984873_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $__internal_0d3ec68a73d785dc94b04a1cb4bc676a71fedbfbebab816d461633420a79c8f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d3ec68a73d785dc94b04a1cb4bc676a71fedbfbebab816d461633420a79c8f1->enter($__internal_0d3ec68a73d785dc94b04a1cb4bc676a71fedbfbebab816d461633420a79c8f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bb32e9804c34d47c15f61dd8c02b9eb256316fa99deba56aa902935004984873->leave($__internal_bb32e9804c34d47c15f61dd8c02b9eb256316fa99deba56aa902935004984873_prof);

        
        $__internal_0d3ec68a73d785dc94b04a1cb4bc676a71fedbfbebab816d461633420a79c8f1->leave($__internal_0d3ec68a73d785dc94b04a1cb4bc676a71fedbfbebab816d461633420a79c8f1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8e3d92f476626dda4c09296968695c0d5336112fb19bd82e98773ae329ec9477 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e3d92f476626dda4c09296968695c0d5336112fb19bd82e98773ae329ec9477->enter($__internal_8e3d92f476626dda4c09296968695c0d5336112fb19bd82e98773ae329ec9477_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_62621de2e4c3fa168cac67bb71d088cd10b57f0f61386e7a05066f18f6728012 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62621de2e4c3fa168cac67bb71d088cd10b57f0f61386e7a05066f18f6728012->enter($__internal_62621de2e4c3fa168cac67bb71d088cd10b57f0f61386e7a05066f18f6728012_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_62621de2e4c3fa168cac67bb71d088cd10b57f0f61386e7a05066f18f6728012->leave($__internal_62621de2e4c3fa168cac67bb71d088cd10b57f0f61386e7a05066f18f6728012_prof);

        
        $__internal_8e3d92f476626dda4c09296968695c0d5336112fb19bd82e98773ae329ec9477->leave($__internal_8e3d92f476626dda4c09296968695c0d5336112fb19bd82e98773ae329ec9477_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/edit.html.twig";
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
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/edit.html.twig", "C:\\wamp64\\www\\ProjetPiDev\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\edit.html.twig");
    }
}
