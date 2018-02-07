<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_e305e74764a95fdebe096370f0e8a09be754001336d9654205d14fc3c8cf81af extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3b4bb4ad470323da60c9a6cd39cf7e7ae2cc136ad4ca928fa051caecb58d1e63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b4bb4ad470323da60c9a6cd39cf7e7ae2cc136ad4ca928fa051caecb58d1e63->enter($__internal_3b4bb4ad470323da60c9a6cd39cf7e7ae2cc136ad4ca928fa051caecb58d1e63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_1b00f3bb9a61106111572d34751678d0b937faab9b0cc8ea8056430b2d8cad6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b00f3bb9a61106111572d34751678d0b937faab9b0cc8ea8056430b2d8cad6e->enter($__internal_1b00f3bb9a61106111572d34751678d0b937faab9b0cc8ea8056430b2d8cad6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3b4bb4ad470323da60c9a6cd39cf7e7ae2cc136ad4ca928fa051caecb58d1e63->leave($__internal_3b4bb4ad470323da60c9a6cd39cf7e7ae2cc136ad4ca928fa051caecb58d1e63_prof);

        
        $__internal_1b00f3bb9a61106111572d34751678d0b937faab9b0cc8ea8056430b2d8cad6e->leave($__internal_1b00f3bb9a61106111572d34751678d0b937faab9b0cc8ea8056430b2d8cad6e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3c9fb700d84e8ca3b04f8533a525628cf81dfd56c2bb773e873add5009904719 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c9fb700d84e8ca3b04f8533a525628cf81dfd56c2bb773e873add5009904719->enter($__internal_3c9fb700d84e8ca3b04f8533a525628cf81dfd56c2bb773e873add5009904719_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_437230a656c5597e3ada3ec3fdb97b87df4a6b9bcfdeec5bd1f5411051088b40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_437230a656c5597e3ada3ec3fdb97b87df4a6b9bcfdeec5bd1f5411051088b40->enter($__internal_437230a656c5597e3ada3ec3fdb97b87df4a6b9bcfdeec5bd1f5411051088b40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_437230a656c5597e3ada3ec3fdb97b87df4a6b9bcfdeec5bd1f5411051088b40->leave($__internal_437230a656c5597e3ada3ec3fdb97b87df4a6b9bcfdeec5bd1f5411051088b40_prof);

        
        $__internal_3c9fb700d84e8ca3b04f8533a525628cf81dfd56c2bb773e873add5009904719->leave($__internal_3c9fb700d84e8ca3b04f8533a525628cf81dfd56c2bb773e873add5009904719_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "WebProfilerBundle:Collector:ajax.html.twig", "C:\\wamp64\\www\\ProjetPiDev\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
