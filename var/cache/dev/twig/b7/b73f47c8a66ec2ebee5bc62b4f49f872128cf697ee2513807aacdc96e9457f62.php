<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_c90c635dc75b7be14e501a18a88de31e1da2920e2104a84ee79128cd18df06ce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_e4875a24d018f09b37148c78524e9efb3a8db15db0b70bf83996995c44fcb00c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4875a24d018f09b37148c78524e9efb3a8db15db0b70bf83996995c44fcb00c->enter($__internal_e4875a24d018f09b37148c78524e9efb3a8db15db0b70bf83996995c44fcb00c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_07e98aa859fffc2c21a727cef57af6e3eb42bfc3615ba9284088655ac97edd02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07e98aa859fffc2c21a727cef57af6e3eb42bfc3615ba9284088655ac97edd02->enter($__internal_07e98aa859fffc2c21a727cef57af6e3eb42bfc3615ba9284088655ac97edd02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e4875a24d018f09b37148c78524e9efb3a8db15db0b70bf83996995c44fcb00c->leave($__internal_e4875a24d018f09b37148c78524e9efb3a8db15db0b70bf83996995c44fcb00c_prof);

        
        $__internal_07e98aa859fffc2c21a727cef57af6e3eb42bfc3615ba9284088655ac97edd02->leave($__internal_07e98aa859fffc2c21a727cef57af6e3eb42bfc3615ba9284088655ac97edd02_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_878ae6f9ec7173b211c0bdae0ec9f7785b00dfe329dc082caccf2ed311d6d653 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_878ae6f9ec7173b211c0bdae0ec9f7785b00dfe329dc082caccf2ed311d6d653->enter($__internal_878ae6f9ec7173b211c0bdae0ec9f7785b00dfe329dc082caccf2ed311d6d653_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_94ad8f760342de14a9d9d176be119b89de2dc9265c6e192b680c75fc46ca385a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94ad8f760342de14a9d9d176be119b89de2dc9265c6e192b680c75fc46ca385a->enter($__internal_94ad8f760342de14a9d9d176be119b89de2dc9265c6e192b680c75fc46ca385a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_94ad8f760342de14a9d9d176be119b89de2dc9265c6e192b680c75fc46ca385a->leave($__internal_94ad8f760342de14a9d9d176be119b89de2dc9265c6e192b680c75fc46ca385a_prof);

        
        $__internal_878ae6f9ec7173b211c0bdae0ec9f7785b00dfe329dc082caccf2ed311d6d653->leave($__internal_878ae6f9ec7173b211c0bdae0ec9f7785b00dfe329dc082caccf2ed311d6d653_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b8233881bb08fe4c0e5394bb2707bad25e862a55b3e3f505cbef21ea7440efbc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8233881bb08fe4c0e5394bb2707bad25e862a55b3e3f505cbef21ea7440efbc->enter($__internal_b8233881bb08fe4c0e5394bb2707bad25e862a55b3e3f505cbef21ea7440efbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_36c5098aa6aa62e3648943d75006d2a7b34b9c784925d0f63623a04276e7c60c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36c5098aa6aa62e3648943d75006d2a7b34b9c784925d0f63623a04276e7c60c->enter($__internal_36c5098aa6aa62e3648943d75006d2a7b34b9c784925d0f63623a04276e7c60c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_36c5098aa6aa62e3648943d75006d2a7b34b9c784925d0f63623a04276e7c60c->leave($__internal_36c5098aa6aa62e3648943d75006d2a7b34b9c784925d0f63623a04276e7c60c_prof);

        
        $__internal_b8233881bb08fe4c0e5394bb2707bad25e862a55b3e3f505cbef21ea7440efbc->leave($__internal_b8233881bb08fe4c0e5394bb2707bad25e862a55b3e3f505cbef21ea7440efbc_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_efc7570f676e5cde4c956103acdfb32710d776383f316a09ddd07980caf4a4b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_efc7570f676e5cde4c956103acdfb32710d776383f316a09ddd07980caf4a4b0->enter($__internal_efc7570f676e5cde4c956103acdfb32710d776383f316a09ddd07980caf4a4b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_0c06d643be2cd52662ffeb2ddf56ded94ed513f7cf08a3a22cc00ee07ba716f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c06d643be2cd52662ffeb2ddf56ded94ed513f7cf08a3a22cc00ee07ba716f3->enter($__internal_0c06d643be2cd52662ffeb2ddf56ded94ed513f7cf08a3a22cc00ee07ba716f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_0c06d643be2cd52662ffeb2ddf56ded94ed513f7cf08a3a22cc00ee07ba716f3->leave($__internal_0c06d643be2cd52662ffeb2ddf56ded94ed513f7cf08a3a22cc00ee07ba716f3_prof);

        
        $__internal_efc7570f676e5cde4c956103acdfb32710d776383f316a09ddd07980caf4a4b0->leave($__internal_efc7570f676e5cde4c956103acdfb32710d776383f316a09ddd07980caf4a4b0_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp64\\www\\ProjetPiDev\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
