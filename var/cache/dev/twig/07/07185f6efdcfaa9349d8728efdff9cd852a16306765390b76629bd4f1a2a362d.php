<?php

/* TwigBundle::layout.html.twig */
class __TwigTemplate_47fe85e48b7877cae90b7bc41541ebe4fc5c0d766d0bf2abc739005784095bb7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e991701204813c04c04bbb0750a417c3bb7e40d3a0f389551379b4fed18993d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e991701204813c04c04bbb0750a417c3bb7e40d3a0f389551379b4fed18993d5->enter($__internal_e991701204813c04c04bbb0750a417c3bb7e40d3a0f389551379b4fed18993d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        $__internal_67823feddb1418aff37480e8c7a34eaadbae4caf40e42adf9335873d9f5dfe9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67823feddb1418aff37480e8c7a34eaadbae4caf40e42adf9335873d9f5dfe9c->enter($__internal_67823feddb1418aff37480e8c7a34eaadbae4caf40e42adf9335873d9f5dfe9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_e991701204813c04c04bbb0750a417c3bb7e40d3a0f389551379b4fed18993d5->leave($__internal_e991701204813c04c04bbb0750a417c3bb7e40d3a0f389551379b4fed18993d5_prof);

        
        $__internal_67823feddb1418aff37480e8c7a34eaadbae4caf40e42adf9335873d9f5dfe9c->leave($__internal_67823feddb1418aff37480e8c7a34eaadbae4caf40e42adf9335873d9f5dfe9c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_8551fa9a2e57f3fe7580df186a1a6c22b1e99484e678ae1aade45b32712f8392 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8551fa9a2e57f3fe7580df186a1a6c22b1e99484e678ae1aade45b32712f8392->enter($__internal_8551fa9a2e57f3fe7580df186a1a6c22b1e99484e678ae1aade45b32712f8392_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_930d4138f38b31c311353c01e28ac80b56b99914e2480a73f7b6a5fac22e5274 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_930d4138f38b31c311353c01e28ac80b56b99914e2480a73f7b6a5fac22e5274->enter($__internal_930d4138f38b31c311353c01e28ac80b56b99914e2480a73f7b6a5fac22e5274_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_930d4138f38b31c311353c01e28ac80b56b99914e2480a73f7b6a5fac22e5274->leave($__internal_930d4138f38b31c311353c01e28ac80b56b99914e2480a73f7b6a5fac22e5274_prof);

        
        $__internal_8551fa9a2e57f3fe7580df186a1a6c22b1e99484e678ae1aade45b32712f8392->leave($__internal_8551fa9a2e57f3fe7580df186a1a6c22b1e99484e678ae1aade45b32712f8392_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_5e76b2b44853b3530ef905316ff9fa8986ab03ee6693b5b64db5ff4196901d7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e76b2b44853b3530ef905316ff9fa8986ab03ee6693b5b64db5ff4196901d7c->enter($__internal_5e76b2b44853b3530ef905316ff9fa8986ab03ee6693b5b64db5ff4196901d7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_66a0804b9469c82d6d05ac457b06e59a84a4b3e5f64885c5b8528c9b7db3e1d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66a0804b9469c82d6d05ac457b06e59a84a4b3e5f64885c5b8528c9b7db3e1d8->enter($__internal_66a0804b9469c82d6d05ac457b06e59a84a4b3e5f64885c5b8528c9b7db3e1d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_66a0804b9469c82d6d05ac457b06e59a84a4b3e5f64885c5b8528c9b7db3e1d8->leave($__internal_66a0804b9469c82d6d05ac457b06e59a84a4b3e5f64885c5b8528c9b7db3e1d8_prof);

        
        $__internal_5e76b2b44853b3530ef905316ff9fa8986ab03ee6693b5b64db5ff4196901d7c->leave($__internal_5e76b2b44853b3530ef905316ff9fa8986ab03ee6693b5b64db5ff4196901d7c_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_9cb058dedf4f0ba8543fee20b9b5b44a0df29a2548a3bedacd4b036603672d3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9cb058dedf4f0ba8543fee20b9b5b44a0df29a2548a3bedacd4b036603672d3f->enter($__internal_9cb058dedf4f0ba8543fee20b9b5b44a0df29a2548a3bedacd4b036603672d3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ece468dc55fa251391ffba2604be097e2bf8ea1230f29f109eddf66bd3616008 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ece468dc55fa251391ffba2604be097e2bf8ea1230f29f109eddf66bd3616008->enter($__internal_ece468dc55fa251391ffba2604be097e2bf8ea1230f29f109eddf66bd3616008_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ece468dc55fa251391ffba2604be097e2bf8ea1230f29f109eddf66bd3616008->leave($__internal_ece468dc55fa251391ffba2604be097e2bf8ea1230f29f109eddf66bd3616008_prof);

        
        $__internal_9cb058dedf4f0ba8543fee20b9b5b44a0df29a2548a3bedacd4b036603672d3f->leave($__internal_9cb058dedf4f0ba8543fee20b9b5b44a0df29a2548a3bedacd4b036603672d3f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "TwigBundle::layout.html.twig", "C:\\wamp64\\www\\ProjetPiDev\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/layout.html.twig");
    }
}
