<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_79478a27cc13b04b200946321f90e1df12aa534f525211dd8b76ab1e55cbf98d extends Twig_Template
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
        $__internal_8bd4c4ca895d4952e63259766de481439436f4f8e7781bc5db46dea13eea82e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8bd4c4ca895d4952e63259766de481439436f4f8e7781bc5db46dea13eea82e6->enter($__internal_8bd4c4ca895d4952e63259766de481439436f4f8e7781bc5db46dea13eea82e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $__internal_5081163231b7085e2068025a6890b08ae909a538e33f2cbd89f28048cf5bffb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5081163231b7085e2068025a6890b08ae909a538e33f2cbd89f28048cf5bffb1->enter($__internal_5081163231b7085e2068025a6890b08ae909a538e33f2cbd89f28048cf5bffb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        // line 1
        echo "
";
        // line 2
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_8bd4c4ca895d4952e63259766de481439436f4f8e7781bc5db46dea13eea82e6->leave($__internal_8bd4c4ca895d4952e63259766de481439436f4f8e7781bc5db46dea13eea82e6_prof);

        
        $__internal_5081163231b7085e2068025a6890b08ae909a538e33f2cbd89f28048cf5bffb1->leave($__internal_5081163231b7085e2068025a6890b08ae909a538e33f2cbd89f28048cf5bffb1_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e818ad071ebe15e821051a78261576443b25801f7c64ea9e83d8c96da5c42e24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e818ad071ebe15e821051a78261576443b25801f7c64ea9e83d8c96da5c42e24->enter($__internal_e818ad071ebe15e821051a78261576443b25801f7c64ea9e83d8c96da5c42e24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_d97a8076c4e5ddc02f13e584dd5550f57ce61fd9c0f669380e602db3469efaa4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d97a8076c4e5ddc02f13e584dd5550f57ce61fd9c0f669380e602db3469efaa4->enter($__internal_d97a8076c4e5ddc02f13e584dd5550f57ce61fd9c0f669380e602db3469efaa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 3
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 3)->display($context);
        
        $__internal_d97a8076c4e5ddc02f13e584dd5550f57ce61fd9c0f669380e602db3469efaa4->leave($__internal_d97a8076c4e5ddc02f13e584dd5550f57ce61fd9c0f669380e602db3469efaa4_prof);

        
        $__internal_e818ad071ebe15e821051a78261576443b25801f7c64ea9e83d8c96da5c42e24->leave($__internal_e818ad071ebe15e821051a78261576443b25801f7c64ea9e83d8c96da5c42e24_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  47 => 3,  29 => 2,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% block fos_user_content %}
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:edit.html.twig", "C:\\wamp64\\www\\ProjetPiDev\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Profile/edit.html.twig");
    }
}
