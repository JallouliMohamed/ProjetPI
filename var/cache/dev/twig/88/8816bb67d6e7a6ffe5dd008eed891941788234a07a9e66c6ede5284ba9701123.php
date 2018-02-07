<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_412930169cab5812e4c6f9ba98c814a7b0977534048d3ddfcdd45ed6e523db62 extends Twig_Template
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
        $__internal_c15d7d53963fa3a16a135ef3601fc25fc700b8937d1da3740e8a1b85df83c2a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c15d7d53963fa3a16a135ef3601fc25fc700b8937d1da3740e8a1b85df83c2a0->enter($__internal_c15d7d53963fa3a16a135ef3601fc25fc700b8937d1da3740e8a1b85df83c2a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_b3411f847cc170c8b4bcfac8b982c6de513045ad1474b4e7efd1dd6131c0c288 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3411f847cc170c8b4bcfac8b982c6de513045ad1474b4e7efd1dd6131c0c288->enter($__internal_b3411f847cc170c8b4bcfac8b982c6de513045ad1474b4e7efd1dd6131c0c288_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_c15d7d53963fa3a16a135ef3601fc25fc700b8937d1da3740e8a1b85df83c2a0->leave($__internal_c15d7d53963fa3a16a135ef3601fc25fc700b8937d1da3740e8a1b85df83c2a0_prof);

        
        $__internal_b3411f847cc170c8b4bcfac8b982c6de513045ad1474b4e7efd1dd6131c0c288->leave($__internal_b3411f847cc170c8b4bcfac8b982c6de513045ad1474b4e7efd1dd6131c0c288_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_8cf7921656cab3ce0d39259264372c60a60dcfffbadb752ef8bc1711c2819da3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8cf7921656cab3ce0d39259264372c60a60dcfffbadb752ef8bc1711c2819da3->enter($__internal_8cf7921656cab3ce0d39259264372c60a60dcfffbadb752ef8bc1711c2819da3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4a11e5114a97037befb118ddda1d870fb3ff9ccbfbf6b77944dd682d39926c78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a11e5114a97037befb118ddda1d870fb3ff9ccbfbf6b77944dd682d39926c78->enter($__internal_4a11e5114a97037befb118ddda1d870fb3ff9ccbfbf6b77944dd682d39926c78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_4a11e5114a97037befb118ddda1d870fb3ff9ccbfbf6b77944dd682d39926c78->leave($__internal_4a11e5114a97037befb118ddda1d870fb3ff9ccbfbf6b77944dd682d39926c78_prof);

        
        $__internal_8cf7921656cab3ce0d39259264372c60a60dcfffbadb752ef8bc1711c2819da3->leave($__internal_8cf7921656cab3ce0d39259264372c60a60dcfffbadb752ef8bc1711c2819da3_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_e09be1a247b7af4a7e3285723f31a68b43d050fe3ccee6df70b0aa65b9d1c025 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e09be1a247b7af4a7e3285723f31a68b43d050fe3ccee6df70b0aa65b9d1c025->enter($__internal_e09be1a247b7af4a7e3285723f31a68b43d050fe3ccee6df70b0aa65b9d1c025_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_7bfc655bc1f6490d67119f84bdbb51301f2e0ca72f12490bb0de1a5e9e0a2c0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bfc655bc1f6490d67119f84bdbb51301f2e0ca72f12490bb0de1a5e9e0a2c0e->enter($__internal_7bfc655bc1f6490d67119f84bdbb51301f2e0ca72f12490bb0de1a5e9e0a2c0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_7bfc655bc1f6490d67119f84bdbb51301f2e0ca72f12490bb0de1a5e9e0a2c0e->leave($__internal_7bfc655bc1f6490d67119f84bdbb51301f2e0ca72f12490bb0de1a5e9e0a2c0e_prof);

        
        $__internal_e09be1a247b7af4a7e3285723f31a68b43d050fe3ccee6df70b0aa65b9d1c025->leave($__internal_e09be1a247b7af4a7e3285723f31a68b43d050fe3ccee6df70b0aa65b9d1c025_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_23f5dff7af0a1f0c7ac389b5445c3c68a003fdc47f1920f7934f651c4f77c49f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23f5dff7af0a1f0c7ac389b5445c3c68a003fdc47f1920f7934f651c4f77c49f->enter($__internal_23f5dff7af0a1f0c7ac389b5445c3c68a003fdc47f1920f7934f651c4f77c49f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3d5b620dc10eca6067300a9c8703fbc826363105f649ffd5df7d30a3d9157312 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d5b620dc10eca6067300a9c8703fbc826363105f649ffd5df7d30a3d9157312->enter($__internal_3d5b620dc10eca6067300a9c8703fbc826363105f649ffd5df7d30a3d9157312_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_3d5b620dc10eca6067300a9c8703fbc826363105f649ffd5df7d30a3d9157312->leave($__internal_3d5b620dc10eca6067300a9c8703fbc826363105f649ffd5df7d30a3d9157312_prof);

        
        $__internal_23f5dff7af0a1f0c7ac389b5445c3c68a003fdc47f1920f7934f651c4f77c49f->leave($__internal_23f5dff7af0a1f0c7ac389b5445c3c68a003fdc47f1920f7934f651c4f77c49f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
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
", "@Twig/layout.html.twig", "C:\\wamp64\\www\\ProjetPiDev\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}
