<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_39378a91bc76bf2218218abfde964cb335d601ac4effa8db10d5fa86c85d3f18 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Resetting/request.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_93c35f18bb647cec389ecc338f220d41f2a242d27e3a91041dec3853577a02c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93c35f18bb647cec389ecc338f220d41f2a242d27e3a91041dec3853577a02c1->enter($__internal_93c35f18bb647cec389ecc338f220d41f2a242d27e3a91041dec3853577a02c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $__internal_8fa2ca3dbfc8596cfa22921d9f0222b19975faa3876f54039a28e984ec0ff9df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fa2ca3dbfc8596cfa22921d9f0222b19975faa3876f54039a28e984ec0ff9df->enter($__internal_8fa2ca3dbfc8596cfa22921d9f0222b19975faa3876f54039a28e984ec0ff9df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_93c35f18bb647cec389ecc338f220d41f2a242d27e3a91041dec3853577a02c1->leave($__internal_93c35f18bb647cec389ecc338f220d41f2a242d27e3a91041dec3853577a02c1_prof);

        
        $__internal_8fa2ca3dbfc8596cfa22921d9f0222b19975faa3876f54039a28e984ec0ff9df->leave($__internal_8fa2ca3dbfc8596cfa22921d9f0222b19975faa3876f54039a28e984ec0ff9df_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d4b9eb8d9a3f4ee8468f8baf5d069320e75f07c37f8f6d41d642a68b4ac02cd0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4b9eb8d9a3f4ee8468f8baf5d069320e75f07c37f8f6d41d642a68b4ac02cd0->enter($__internal_d4b9eb8d9a3f4ee8468f8baf5d069320e75f07c37f8f6d41d642a68b4ac02cd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_cee89b5162a0ae72ce32d3d95c8fe1d2cbdea06435608ec462ce897a115a7df6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cee89b5162a0ae72ce32d3d95c8fe1d2cbdea06435608ec462ce897a115a7df6->enter($__internal_cee89b5162a0ae72ce32d3d95c8fe1d2cbdea06435608ec462ce897a115a7df6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_cee89b5162a0ae72ce32d3d95c8fe1d2cbdea06435608ec462ce897a115a7df6->leave($__internal_cee89b5162a0ae72ce32d3d95c8fe1d2cbdea06435608ec462ce897a115a7df6_prof);

        
        $__internal_d4b9eb8d9a3f4ee8468f8baf5d069320e75f07c37f8f6d41d642a68b4ac02cd0->leave($__internal_d4b9eb8d9a3f4ee8468f8baf5d069320e75f07c37f8f6d41d642a68b4ac02cd0_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Resetting/request.html.twig", "C:\\wamp64\\www\\ProjetPiDev\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Resetting\\request.html.twig");
    }
}
