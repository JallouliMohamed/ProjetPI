<?php

/* @pi/Default/index.html.twig */
class __TwigTemplate_b33bded3af415a7386111e309c72f4d87bb125ed2eff4fa06960449ca6c6eedf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@pi/Default/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_03911c1fcea26c718b41502ffc619dac903b113f5f419ee74fd245638835fb44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03911c1fcea26c718b41502ffc619dac903b113f5f419ee74fd245638835fb44->enter($__internal_03911c1fcea26c718b41502ffc619dac903b113f5f419ee74fd245638835fb44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@pi/Default/index.html.twig"));

        $__internal_bb09c4320ac281f8cdfd107ca5a04242e504127c02a81fd1d19f8fd5a775fc54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb09c4320ac281f8cdfd107ca5a04242e504127c02a81fd1d19f8fd5a775fc54->enter($__internal_bb09c4320ac281f8cdfd107ca5a04242e504127c02a81fd1d19f8fd5a775fc54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@pi/Default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_03911c1fcea26c718b41502ffc619dac903b113f5f419ee74fd245638835fb44->leave($__internal_03911c1fcea26c718b41502ffc619dac903b113f5f419ee74fd245638835fb44_prof);

        
        $__internal_bb09c4320ac281f8cdfd107ca5a04242e504127c02a81fd1d19f8fd5a775fc54->leave($__internal_bb09c4320ac281f8cdfd107ca5a04242e504127c02a81fd1d19f8fd5a775fc54_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_7780cb875c03e1f1c3c3cd54393076b5b83b62748841ce820590c33153862b68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7780cb875c03e1f1c3c3cd54393076b5b83b62748841ce820590c33153862b68->enter($__internal_7780cb875c03e1f1c3c3cd54393076b5b83b62748841ce820590c33153862b68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f4ae8974237987428b67e49f6e15c87bdb0744f6dd15a7a8b794281f2e8135ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4ae8974237987428b67e49f6e15c87bdb0744f6dd15a7a8b794281f2e8135ee->enter($__internal_f4ae8974237987428b67e49f6e15c87bdb0744f6dd15a7a8b794281f2e8135ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <h1>hello</h1>
";
        
        $__internal_f4ae8974237987428b67e49f6e15c87bdb0744f6dd15a7a8b794281f2e8135ee->leave($__internal_f4ae8974237987428b67e49f6e15c87bdb0744f6dd15a7a8b794281f2e8135ee_prof);

        
        $__internal_7780cb875c03e1f1c3c3cd54393076b5b83b62748841ce820590c33153862b68->leave($__internal_7780cb875c03e1f1c3c3cd54393076b5b83b62748841ce820590c33153862b68_prof);

    }

    public function getTemplateName()
    {
        return "@pi/Default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 3,  40 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %}
{% block body %}
    <h1>hello</h1>
{% endblock %}", "@pi/Default/index.html.twig", "C:\\wamp64\\www\\ProjetPiDev\\src\\piBundle\\Resources\\views\\Default\\index.html.twig");
    }
}
