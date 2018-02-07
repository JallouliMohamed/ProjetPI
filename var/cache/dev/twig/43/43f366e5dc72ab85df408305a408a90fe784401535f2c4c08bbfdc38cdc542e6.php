<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_03f16f7935efc3b1571bcde34bde9ba802edc11a2c7439350b6aca1ef39ef8a5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_e086d247d0461d8ba44745c0dbbc1531c22fe08f85f51e0ff3d30f5419f8f194 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e086d247d0461d8ba44745c0dbbc1531c22fe08f85f51e0ff3d30f5419f8f194->enter($__internal_e086d247d0461d8ba44745c0dbbc1531c22fe08f85f51e0ff3d30f5419f8f194_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_29470d7db822398013d03c96c93fff12e1e986dd5e2ba93a19681893131f9507 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29470d7db822398013d03c96c93fff12e1e986dd5e2ba93a19681893131f9507->enter($__internal_29470d7db822398013d03c96c93fff12e1e986dd5e2ba93a19681893131f9507_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e086d247d0461d8ba44745c0dbbc1531c22fe08f85f51e0ff3d30f5419f8f194->leave($__internal_e086d247d0461d8ba44745c0dbbc1531c22fe08f85f51e0ff3d30f5419f8f194_prof);

        
        $__internal_29470d7db822398013d03c96c93fff12e1e986dd5e2ba93a19681893131f9507->leave($__internal_29470d7db822398013d03c96c93fff12e1e986dd5e2ba93a19681893131f9507_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c59c540ad75ee8dcbe34e4baed0160b990be935a6e7a4d82ed61842b482d7445 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c59c540ad75ee8dcbe34e4baed0160b990be935a6e7a4d82ed61842b482d7445->enter($__internal_c59c540ad75ee8dcbe34e4baed0160b990be935a6e7a4d82ed61842b482d7445_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_22f1c122c01ddf2c98d9976f252a3397f197655dde0b5775490a200c18314aac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22f1c122c01ddf2c98d9976f252a3397f197655dde0b5775490a200c18314aac->enter($__internal_22f1c122c01ddf2c98d9976f252a3397f197655dde0b5775490a200c18314aac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_22f1c122c01ddf2c98d9976f252a3397f197655dde0b5775490a200c18314aac->leave($__internal_22f1c122c01ddf2c98d9976f252a3397f197655dde0b5775490a200c18314aac_prof);

        
        $__internal_c59c540ad75ee8dcbe34e4baed0160b990be935a6e7a4d82ed61842b482d7445->leave($__internal_c59c540ad75ee8dcbe34e4baed0160b990be935a6e7a4d82ed61842b482d7445_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_f49ded536c021423182e9473ac7f4b5e25e3f11f351dbbfb083f57c020ee37f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f49ded536c021423182e9473ac7f4b5e25e3f11f351dbbfb083f57c020ee37f4->enter($__internal_f49ded536c021423182e9473ac7f4b5e25e3f11f351dbbfb083f57c020ee37f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c8cc349c9caffcbd5bb478b55a5f1b41eabe74555324c03e02d1a56a00860b2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8cc349c9caffcbd5bb478b55a5f1b41eabe74555324c03e02d1a56a00860b2e->enter($__internal_c8cc349c9caffcbd5bb478b55a5f1b41eabe74555324c03e02d1a56a00860b2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_c8cc349c9caffcbd5bb478b55a5f1b41eabe74555324c03e02d1a56a00860b2e->leave($__internal_c8cc349c9caffcbd5bb478b55a5f1b41eabe74555324c03e02d1a56a00860b2e_prof);

        
        $__internal_f49ded536c021423182e9473ac7f4b5e25e3f11f351dbbfb083f57c020ee37f4->leave($__internal_f49ded536c021423182e9473ac7f4b5e25e3f11f351dbbfb083f57c020ee37f4_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "C:\\wamp64\\www\\ProjetPiDev\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}
