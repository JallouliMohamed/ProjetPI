<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_e22e3af53fc7c2d9c5ca576798121fd8b33fefbfe2a169b716247adddb525434 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_eff29e9235a37be67229fce8f97cbaa5903d95f9580fbe2dd9e65e95f7789ad7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eff29e9235a37be67229fce8f97cbaa5903d95f9580fbe2dd9e65e95f7789ad7->enter($__internal_eff29e9235a37be67229fce8f97cbaa5903d95f9580fbe2dd9e65e95f7789ad7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_1c3c6bd5d695de15e6107c6e93bbb02646263bad1cb0c0042a04aae81c2f1291 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c3c6bd5d695de15e6107c6e93bbb02646263bad1cb0c0042a04aae81c2f1291->enter($__internal_1c3c6bd5d695de15e6107c6e93bbb02646263bad1cb0c0042a04aae81c2f1291_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eff29e9235a37be67229fce8f97cbaa5903d95f9580fbe2dd9e65e95f7789ad7->leave($__internal_eff29e9235a37be67229fce8f97cbaa5903d95f9580fbe2dd9e65e95f7789ad7_prof);

        
        $__internal_1c3c6bd5d695de15e6107c6e93bbb02646263bad1cb0c0042a04aae81c2f1291->leave($__internal_1c3c6bd5d695de15e6107c6e93bbb02646263bad1cb0c0042a04aae81c2f1291_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4f52c8f7341917b878eb779cdeeeb4296f703ada478956167b0abdce3843e045 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f52c8f7341917b878eb779cdeeeb4296f703ada478956167b0abdce3843e045->enter($__internal_4f52c8f7341917b878eb779cdeeeb4296f703ada478956167b0abdce3843e045_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_6177227b3cdd0daae65d01dd58eb2d9c93c9359dcc08708c0eae6a93c1334a7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6177227b3cdd0daae65d01dd58eb2d9c93c9359dcc08708c0eae6a93c1334a7c->enter($__internal_6177227b3cdd0daae65d01dd58eb2d9c93c9359dcc08708c0eae6a93c1334a7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_6177227b3cdd0daae65d01dd58eb2d9c93c9359dcc08708c0eae6a93c1334a7c->leave($__internal_6177227b3cdd0daae65d01dd58eb2d9c93c9359dcc08708c0eae6a93c1334a7c_prof);

        
        $__internal_4f52c8f7341917b878eb779cdeeeb4296f703ada478956167b0abdce3843e045->leave($__internal_4f52c8f7341917b878eb779cdeeeb4296f703ada478956167b0abdce3843e045_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7591b1d09ccb88d2d8643439d496c7194cc1a83538aaf869df1f5056932ba89c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7591b1d09ccb88d2d8643439d496c7194cc1a83538aaf869df1f5056932ba89c->enter($__internal_7591b1d09ccb88d2d8643439d496c7194cc1a83538aaf869df1f5056932ba89c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_14883f0bbac23d21d588cbb0f7ff11b83b9c499f012f1de9aeabd4cc418e9035 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14883f0bbac23d21d588cbb0f7ff11b83b9c499f012f1de9aeabd4cc418e9035->enter($__internal_14883f0bbac23d21d588cbb0f7ff11b83b9c499f012f1de9aeabd4cc418e9035_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_14883f0bbac23d21d588cbb0f7ff11b83b9c499f012f1de9aeabd4cc418e9035->leave($__internal_14883f0bbac23d21d588cbb0f7ff11b83b9c499f012f1de9aeabd4cc418e9035_prof);

        
        $__internal_7591b1d09ccb88d2d8643439d496c7194cc1a83538aaf869df1f5056932ba89c->leave($__internal_7591b1d09ccb88d2d8643439d496c7194cc1a83538aaf869df1f5056932ba89c_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_715fccabc173a150d2782a39066311b733adf0807d47319910212eeea6b39629 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_715fccabc173a150d2782a39066311b733adf0807d47319910212eeea6b39629->enter($__internal_715fccabc173a150d2782a39066311b733adf0807d47319910212eeea6b39629_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_65fff285de7158af14af1931a7166db4df5cca6cc8006dcb69fd41956607e15f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65fff285de7158af14af1931a7166db4df5cca6cc8006dcb69fd41956607e15f->enter($__internal_65fff285de7158af14af1931a7166db4df5cca6cc8006dcb69fd41956607e15f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_65fff285de7158af14af1931a7166db4df5cca6cc8006dcb69fd41956607e15f->leave($__internal_65fff285de7158af14af1931a7166db4df5cca6cc8006dcb69fd41956607e15f_prof);

        
        $__internal_715fccabc173a150d2782a39066311b733adf0807d47319910212eeea6b39629->leave($__internal_715fccabc173a150d2782a39066311b733adf0807d47319910212eeea6b39629_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "WebProfilerBundle:Collector:exception.html.twig", "C:\\wamp64\\www\\ProjetPiDev\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
