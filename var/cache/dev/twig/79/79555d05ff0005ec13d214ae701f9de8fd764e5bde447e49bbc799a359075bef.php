<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_ce5e298ea7c566ba912d0cb4d5695f690b63e95c6189996a45de6c3ac1516709 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
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
        $__internal_09b6085a468761e1e538209969a6efddcdd98dd1f4bd8abc0d6dbe33a9f4f36f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09b6085a468761e1e538209969a6efddcdd98dd1f4bd8abc0d6dbe33a9f4f36f->enter($__internal_09b6085a468761e1e538209969a6efddcdd98dd1f4bd8abc0d6dbe33a9f4f36f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_3dd51cf3888ae4202ca498f053f6f6d781007117a7b41956e3fa1561e45c1a37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3dd51cf3888ae4202ca498f053f6f6d781007117a7b41956e3fa1561e45c1a37->enter($__internal_3dd51cf3888ae4202ca498f053f6f6d781007117a7b41956e3fa1561e45c1a37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_09b6085a468761e1e538209969a6efddcdd98dd1f4bd8abc0d6dbe33a9f4f36f->leave($__internal_09b6085a468761e1e538209969a6efddcdd98dd1f4bd8abc0d6dbe33a9f4f36f_prof);

        
        $__internal_3dd51cf3888ae4202ca498f053f6f6d781007117a7b41956e3fa1561e45c1a37->leave($__internal_3dd51cf3888ae4202ca498f053f6f6d781007117a7b41956e3fa1561e45c1a37_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5224ffb0b03701a2fb765b96ad26b9aa91982598ec127f18bf2554542b9eac5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5224ffb0b03701a2fb765b96ad26b9aa91982598ec127f18bf2554542b9eac5e->enter($__internal_5224ffb0b03701a2fb765b96ad26b9aa91982598ec127f18bf2554542b9eac5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_37144b4aa17b6119fb70ea62fd0ad9e46c4042b605846c923923cdab053f2401 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37144b4aa17b6119fb70ea62fd0ad9e46c4042b605846c923923cdab053f2401->enter($__internal_37144b4aa17b6119fb70ea62fd0ad9e46c4042b605846c923923cdab053f2401_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_37144b4aa17b6119fb70ea62fd0ad9e46c4042b605846c923923cdab053f2401->leave($__internal_37144b4aa17b6119fb70ea62fd0ad9e46c4042b605846c923923cdab053f2401_prof);

        
        $__internal_5224ffb0b03701a2fb765b96ad26b9aa91982598ec127f18bf2554542b9eac5e->leave($__internal_5224ffb0b03701a2fb765b96ad26b9aa91982598ec127f18bf2554542b9eac5e_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7168c25d84d56bc87f3c2340401d023f22ce4597125dcf1d8994cc99945b0227 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7168c25d84d56bc87f3c2340401d023f22ce4597125dcf1d8994cc99945b0227->enter($__internal_7168c25d84d56bc87f3c2340401d023f22ce4597125dcf1d8994cc99945b0227_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_01f9c259dc0bbd75f666b16fae90dd793fecad0b084bca714ea5691da115de0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01f9c259dc0bbd75f666b16fae90dd793fecad0b084bca714ea5691da115de0d->enter($__internal_01f9c259dc0bbd75f666b16fae90dd793fecad0b084bca714ea5691da115de0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_01f9c259dc0bbd75f666b16fae90dd793fecad0b084bca714ea5691da115de0d->leave($__internal_01f9c259dc0bbd75f666b16fae90dd793fecad0b084bca714ea5691da115de0d_prof);

        
        $__internal_7168c25d84d56bc87f3c2340401d023f22ce4597125dcf1d8994cc99945b0227->leave($__internal_7168c25d84d56bc87f3c2340401d023f22ce4597125dcf1d8994cc99945b0227_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_22085da646ef344e8b6b3a3b34e15da0bae61ee473011724b1b28dd5077c9edc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22085da646ef344e8b6b3a3b34e15da0bae61ee473011724b1b28dd5077c9edc->enter($__internal_22085da646ef344e8b6b3a3b34e15da0bae61ee473011724b1b28dd5077c9edc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c3ac23f4189416fec5825f295a081ab5c940ca6a921e010958cb7adf825aab74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3ac23f4189416fec5825f295a081ab5c940ca6a921e010958cb7adf825aab74->enter($__internal_c3ac23f4189416fec5825f295a081ab5c940ca6a921e010958cb7adf825aab74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_c3ac23f4189416fec5825f295a081ab5c940ca6a921e010958cb7adf825aab74->leave($__internal_c3ac23f4189416fec5825f295a081ab5c940ca6a921e010958cb7adf825aab74_prof);

        
        $__internal_22085da646ef344e8b6b3a3b34e15da0bae61ee473011724b1b28dd5077c9edc->leave($__internal_22085da646ef344e8b6b3a3b34e15da0bae61ee473011724b1b28dd5077c9edc_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
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
", "@WebProfiler/Collector/exception.html.twig", "C:\\wamp64\\www\\ProjetPiDev\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
