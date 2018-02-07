<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_d30c65a1bc4b21f10af81526c191d08b54981eddd8d6dd888feb19566e927cf9 extends Twig_Template
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
        $__internal_5bd219af9bc2f47244ad61a33a6119b2ce51b28ecae86222c5c9c6d16907c2c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5bd219af9bc2f47244ad61a33a6119b2ce51b28ecae86222c5c9c6d16907c2c4->enter($__internal_5bd219af9bc2f47244ad61a33a6119b2ce51b28ecae86222c5c9c6d16907c2c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $__internal_50a49dbed646bb3ed25b8bf24a8882ef27a28513d0960c8347e8cd9761317d0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50a49dbed646bb3ed25b8bf24a8882ef27a28513d0960c8347e8cd9761317d0b->enter($__internal_50a49dbed646bb3ed25b8bf24a8882ef27a28513d0960c8347e8cd9761317d0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        // line 1
        echo "
";
        // line 2
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_5bd219af9bc2f47244ad61a33a6119b2ce51b28ecae86222c5c9c6d16907c2c4->leave($__internal_5bd219af9bc2f47244ad61a33a6119b2ce51b28ecae86222c5c9c6d16907c2c4_prof);

        
        $__internal_50a49dbed646bb3ed25b8bf24a8882ef27a28513d0960c8347e8cd9761317d0b->leave($__internal_50a49dbed646bb3ed25b8bf24a8882ef27a28513d0960c8347e8cd9761317d0b_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_815baa87d12f2d4c057bade95116646a72a1b599298cc537de16782c2e02ccfb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_815baa87d12f2d4c057bade95116646a72a1b599298cc537de16782c2e02ccfb->enter($__internal_815baa87d12f2d4c057bade95116646a72a1b599298cc537de16782c2e02ccfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_78322b254914c66ba95a02eedb6ee05754e29dec92d15b124ec64872fa3e1079 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78322b254914c66ba95a02eedb6ee05754e29dec92d15b124ec64872fa3e1079->enter($__internal_78322b254914c66ba95a02eedb6ee05754e29dec92d15b124ec64872fa3e1079_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 3
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 3)->display($context);
        
        $__internal_78322b254914c66ba95a02eedb6ee05754e29dec92d15b124ec64872fa3e1079->leave($__internal_78322b254914c66ba95a02eedb6ee05754e29dec92d15b124ec64872fa3e1079_prof);

        
        $__internal_815baa87d12f2d4c057bade95116646a72a1b599298cc537de16782c2e02ccfb->leave($__internal_815baa87d12f2d4c057bade95116646a72a1b599298cc537de16782c2e02ccfb_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
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
", "@FOSUser/Profile/edit.html.twig", "C:\\wamp64\\www\\ProjetPiDev\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Profile\\edit.html.twig");
    }
}
