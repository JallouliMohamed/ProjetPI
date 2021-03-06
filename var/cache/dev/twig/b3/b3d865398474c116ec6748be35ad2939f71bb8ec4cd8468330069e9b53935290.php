<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_8a4cf1fb090a8f763fd87066ab0e24c55984b2913749932d4ad361d0327e0591 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
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
        $__internal_c69e6130d4a8d4beddd6afca85078617cea3635dc33570da71a934522cdd0996 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c69e6130d4a8d4beddd6afca85078617cea3635dc33570da71a934522cdd0996->enter($__internal_c69e6130d4a8d4beddd6afca85078617cea3635dc33570da71a934522cdd0996_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_19bbd8313df354f572d6e323811321a715f08f531f82ffc20b7fd7842aca0374 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19bbd8313df354f572d6e323811321a715f08f531f82ffc20b7fd7842aca0374->enter($__internal_19bbd8313df354f572d6e323811321a715f08f531f82ffc20b7fd7842aca0374_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c69e6130d4a8d4beddd6afca85078617cea3635dc33570da71a934522cdd0996->leave($__internal_c69e6130d4a8d4beddd6afca85078617cea3635dc33570da71a934522cdd0996_prof);

        
        $__internal_19bbd8313df354f572d6e323811321a715f08f531f82ffc20b7fd7842aca0374->leave($__internal_19bbd8313df354f572d6e323811321a715f08f531f82ffc20b7fd7842aca0374_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2691c78807dc9663b24c3e2268a4c3e0a3fbd40e611358ad0d649fc08babbd14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2691c78807dc9663b24c3e2268a4c3e0a3fbd40e611358ad0d649fc08babbd14->enter($__internal_2691c78807dc9663b24c3e2268a4c3e0a3fbd40e611358ad0d649fc08babbd14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_d742fe038aa097afb8a65c76b89e231bdfcd2652b0407e7c7d75786360ef0b15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d742fe038aa097afb8a65c76b89e231bdfcd2652b0407e7c7d75786360ef0b15->enter($__internal_d742fe038aa097afb8a65c76b89e231bdfcd2652b0407e7c7d75786360ef0b15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_d742fe038aa097afb8a65c76b89e231bdfcd2652b0407e7c7d75786360ef0b15->leave($__internal_d742fe038aa097afb8a65c76b89e231bdfcd2652b0407e7c7d75786360ef0b15_prof);

        
        $__internal_2691c78807dc9663b24c3e2268a4c3e0a3fbd40e611358ad0d649fc08babbd14->leave($__internal_2691c78807dc9663b24c3e2268a4c3e0a3fbd40e611358ad0d649fc08babbd14_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
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
", "@WebProfiler/Collector/ajax.html.twig", "C:\\wamp64\\www\\ProjetPiDev\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
