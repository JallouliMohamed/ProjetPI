<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_e2d81854e0f2b4224b6fa5b73e4718848477fea0e157b9426de63eb5e51e4dae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ed9ffd282817352d81adfa4c7efb48bd0ce1aedb54e1bca640382b3a207f26e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed9ffd282817352d81adfa4c7efb48bd0ce1aedb54e1bca640382b3a207f26e6->enter($__internal_ed9ffd282817352d81adfa4c7efb48bd0ce1aedb54e1bca640382b3a207f26e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_86ddedcc11e28019b48e9445daa619d95c4f6da44d7c0fc542872a60e772bf91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86ddedcc11e28019b48e9445daa619d95c4f6da44d7c0fc542872a60e772bf91->enter($__internal_86ddedcc11e28019b48e9445daa619d95c4f6da44d7c0fc542872a60e772bf91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ed9ffd282817352d81adfa4c7efb48bd0ce1aedb54e1bca640382b3a207f26e6->leave($__internal_ed9ffd282817352d81adfa4c7efb48bd0ce1aedb54e1bca640382b3a207f26e6_prof);

        
        $__internal_86ddedcc11e28019b48e9445daa619d95c4f6da44d7c0fc542872a60e772bf91->leave($__internal_86ddedcc11e28019b48e9445daa619d95c4f6da44d7c0fc542872a60e772bf91_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e78d59ffae2bb02a5362afa325572b993abaf98a96e05cd29988d92fc8409e06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e78d59ffae2bb02a5362afa325572b993abaf98a96e05cd29988d92fc8409e06->enter($__internal_e78d59ffae2bb02a5362afa325572b993abaf98a96e05cd29988d92fc8409e06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_7b92719f691593f2462e23d782a3abe131c022f192a203988f44f8aaa72ad6ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b92719f691593f2462e23d782a3abe131c022f192a203988f44f8aaa72ad6ba->enter($__internal_7b92719f691593f2462e23d782a3abe131c022f192a203988f44f8aaa72ad6ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_7b92719f691593f2462e23d782a3abe131c022f192a203988f44f8aaa72ad6ba->leave($__internal_7b92719f691593f2462e23d782a3abe131c022f192a203988f44f8aaa72ad6ba_prof);

        
        $__internal_e78d59ffae2bb02a5362afa325572b993abaf98a96e05cd29988d92fc8409e06->leave($__internal_e78d59ffae2bb02a5362afa325572b993abaf98a96e05cd29988d92fc8409e06_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_06b82e64944c6c37afc3fc8f5603338e5a5417c04e1f6a5a2940373df5916733 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06b82e64944c6c37afc3fc8f5603338e5a5417c04e1f6a5a2940373df5916733->enter($__internal_06b82e64944c6c37afc3fc8f5603338e5a5417c04e1f6a5a2940373df5916733_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_744105570fd463c1223d76cbba9fde712ed521038fa31199c5115f3b56b03128 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_744105570fd463c1223d76cbba9fde712ed521038fa31199c5115f3b56b03128->enter($__internal_744105570fd463c1223d76cbba9fde712ed521038fa31199c5115f3b56b03128_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_744105570fd463c1223d76cbba9fde712ed521038fa31199c5115f3b56b03128->leave($__internal_744105570fd463c1223d76cbba9fde712ed521038fa31199c5115f3b56b03128_prof);

        
        $__internal_06b82e64944c6c37afc3fc8f5603338e5a5417c04e1f6a5a2940373df5916733->leave($__internal_06b82e64944c6c37afc3fc8f5603338e5a5417c04e1f6a5a2940373df5916733_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_85c09c2607288d8cdb99b9e67f4ee77c2b4751ddf042e661729e225c86c2dd17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85c09c2607288d8cdb99b9e67f4ee77c2b4751ddf042e661729e225c86c2dd17->enter($__internal_85c09c2607288d8cdb99b9e67f4ee77c2b4751ddf042e661729e225c86c2dd17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9de11c45d3a75859cbe462d99251387332e6182683729a522944fc6e83d30aa6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9de11c45d3a75859cbe462d99251387332e6182683729a522944fc6e83d30aa6->enter($__internal_9de11c45d3a75859cbe462d99251387332e6182683729a522944fc6e83d30aa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_9de11c45d3a75859cbe462d99251387332e6182683729a522944fc6e83d30aa6->leave($__internal_9de11c45d3a75859cbe462d99251387332e6182683729a522944fc6e83d30aa6_prof);

        
        $__internal_85c09c2607288d8cdb99b9e67f4ee77c2b4751ddf042e661729e225c86c2dd17->leave($__internal_85c09c2607288d8cdb99b9e67f4ee77c2b4751ddf042e661729e225c86c2dd17_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\wamp64\\www\\ProjetPiDev\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
