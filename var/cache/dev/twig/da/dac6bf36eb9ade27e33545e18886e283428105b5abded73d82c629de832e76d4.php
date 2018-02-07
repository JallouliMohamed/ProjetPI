<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_022531b4d07e2816f01f5e6cfde6981d4604168fb71cbb53f0107b47618bb1b0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_58b3f20ec9f6d531911b7e1b1d0247496ae94ca971944867755c607bdd3ece2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58b3f20ec9f6d531911b7e1b1d0247496ae94ca971944867755c607bdd3ece2e->enter($__internal_58b3f20ec9f6d531911b7e1b1d0247496ae94ca971944867755c607bdd3ece2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $__internal_1b90f91bc55097f9f6ac049e3b5da16d19e9e7676b298874259a56f58c6698c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b90f91bc55097f9f6ac049e3b5da16d19e9e7676b298874259a56f58c6698c2->enter($__internal_1b90f91bc55097f9f6ac049e3b5da16d19e9e7676b298874259a56f58c6698c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_58b3f20ec9f6d531911b7e1b1d0247496ae94ca971944867755c607bdd3ece2e->leave($__internal_58b3f20ec9f6d531911b7e1b1d0247496ae94ca971944867755c607bdd3ece2e_prof);

        
        $__internal_1b90f91bc55097f9f6ac049e3b5da16d19e9e7676b298874259a56f58c6698c2->leave($__internal_1b90f91bc55097f9f6ac049e3b5da16d19e9e7676b298874259a56f58c6698c2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f1322b9ba1adfe603c08b4887c401897303eafef2b25e9cc4aa8f134306d4ea2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1322b9ba1adfe603c08b4887c401897303eafef2b25e9cc4aa8f134306d4ea2->enter($__internal_f1322b9ba1adfe603c08b4887c401897303eafef2b25e9cc4aa8f134306d4ea2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_c180573a00810425a0f153b46da64fbd2d99833acf71c9cf2a1762e30ea20c8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c180573a00810425a0f153b46da64fbd2d99833acf71c9cf2a1762e30ea20c8d->enter($__internal_c180573a00810425a0f153b46da64fbd2d99833acf71c9cf2a1762e30ea20c8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_c180573a00810425a0f153b46da64fbd2d99833acf71c9cf2a1762e30ea20c8d->leave($__internal_c180573a00810425a0f153b46da64fbd2d99833acf71c9cf2a1762e30ea20c8d_prof);

        
        $__internal_f1322b9ba1adfe603c08b4887c401897303eafef2b25e9cc4aa8f134306d4ea2->leave($__internal_f1322b9ba1adfe603c08b4887c401897303eafef2b25e9cc4aa8f134306d4ea2_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "C:\\wamp64\\www\\ProjetPiDev\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Group/list.html.twig");
    }
}
