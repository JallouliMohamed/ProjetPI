<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_b6bdf9b39a6b88486f44de228d2c1505520296a8297e7b1f4bd9d5136c9b3fd9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7faf571603c564002508144047fbaca58fde390274204a4cea114459fc553878 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7faf571603c564002508144047fbaca58fde390274204a4cea114459fc553878->enter($__internal_7faf571603c564002508144047fbaca58fde390274204a4cea114459fc553878_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_d6309588d5b5c1e945c3bfbdd5e9e589a265b4f66b30fd84695411c69d6da9cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6309588d5b5c1e945c3bfbdd5e9e589a265b4f66b30fd84695411c69d6da9cb->enter($__internal_d6309588d5b5c1e945c3bfbdd5e9e589a265b4f66b30fd84695411c69d6da9cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7faf571603c564002508144047fbaca58fde390274204a4cea114459fc553878->leave($__internal_7faf571603c564002508144047fbaca58fde390274204a4cea114459fc553878_prof);

        
        $__internal_d6309588d5b5c1e945c3bfbdd5e9e589a265b4f66b30fd84695411c69d6da9cb->leave($__internal_d6309588d5b5c1e945c3bfbdd5e9e589a265b4f66b30fd84695411c69d6da9cb_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a8f364c96adc65b08aff79f0218c22407c437e0a1fac51d171ec13a447a0ea44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8f364c96adc65b08aff79f0218c22407c437e0a1fac51d171ec13a447a0ea44->enter($__internal_a8f364c96adc65b08aff79f0218c22407c437e0a1fac51d171ec13a447a0ea44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_ed7586e3179f99455fb170887da232dad29c2736024fd8d5b00ceb1f4c38c836 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed7586e3179f99455fb170887da232dad29c2736024fd8d5b00ceb1f4c38c836->enter($__internal_ed7586e3179f99455fb170887da232dad29c2736024fd8d5b00ceb1f4c38c836_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ed7586e3179f99455fb170887da232dad29c2736024fd8d5b00ceb1f4c38c836->leave($__internal_ed7586e3179f99455fb170887da232dad29c2736024fd8d5b00ceb1f4c38c836_prof);

        
        $__internal_a8f364c96adc65b08aff79f0218c22407c437e0a1fac51d171ec13a447a0ea44->leave($__internal_a8f364c96adc65b08aff79f0218c22407c437e0a1fac51d171ec13a447a0ea44_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_900c0a68a0c2e3f0351513b97ebb4ef8e3dc2bf0bf00ed7b98a0a657dc46c1aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_900c0a68a0c2e3f0351513b97ebb4ef8e3dc2bf0bf00ed7b98a0a657dc46c1aa->enter($__internal_900c0a68a0c2e3f0351513b97ebb4ef8e3dc2bf0bf00ed7b98a0a657dc46c1aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_210228a37dff9cde8ac227b8ccb21d0130137c2965cfb59809cfcce631ba04ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_210228a37dff9cde8ac227b8ccb21d0130137c2965cfb59809cfcce631ba04ec->enter($__internal_210228a37dff9cde8ac227b8ccb21d0130137c2965cfb59809cfcce631ba04ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_210228a37dff9cde8ac227b8ccb21d0130137c2965cfb59809cfcce631ba04ec->leave($__internal_210228a37dff9cde8ac227b8ccb21d0130137c2965cfb59809cfcce631ba04ec_prof);

        
        $__internal_900c0a68a0c2e3f0351513b97ebb4ef8e3dc2bf0bf00ed7b98a0a657dc46c1aa->leave($__internal_900c0a68a0c2e3f0351513b97ebb4ef8e3dc2bf0bf00ed7b98a0a657dc46c1aa_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d4a56e58ec1deecafcf4e3bfe33faf2e7edba3b0267b76bfbae3cf9187610101 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4a56e58ec1deecafcf4e3bfe33faf2e7edba3b0267b76bfbae3cf9187610101->enter($__internal_d4a56e58ec1deecafcf4e3bfe33faf2e7edba3b0267b76bfbae3cf9187610101_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_10a865a05d82ac43f642147a0a1ca7c46256b09d5598dfceedca5b16966eef1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10a865a05d82ac43f642147a0a1ca7c46256b09d5598dfceedca5b16966eef1c->enter($__internal_10a865a05d82ac43f642147a0a1ca7c46256b09d5598dfceedca5b16966eef1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_10a865a05d82ac43f642147a0a1ca7c46256b09d5598dfceedca5b16966eef1c->leave($__internal_10a865a05d82ac43f642147a0a1ca7c46256b09d5598dfceedca5b16966eef1c_prof);

        
        $__internal_d4a56e58ec1deecafcf4e3bfe33faf2e7edba3b0267b76bfbae3cf9187610101->leave($__internal_d4a56e58ec1deecafcf4e3bfe33faf2e7edba3b0267b76bfbae3cf9187610101_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "C:\\wamp64\\www\\ProjetPiDev\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
