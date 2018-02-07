<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_091f12fae68396494ab15e639d7bc3c31d66940779c9232e08298119a8694d9c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4ae7d0dc2a195241c61bdc216e4c4bda83d8d0006c92fab2e0e406c299d948cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ae7d0dc2a195241c61bdc216e4c4bda83d8d0006c92fab2e0e406c299d948cb->enter($__internal_4ae7d0dc2a195241c61bdc216e4c4bda83d8d0006c92fab2e0e406c299d948cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_b1ad87a996867c8bb8e4db637e34914cc4f6f1a5d03682243838d1d8ecd8efa1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1ad87a996867c8bb8e4db637e34914cc4f6f1a5d03682243838d1d8ecd8efa1->enter($__internal_b1ad87a996867c8bb8e4db637e34914cc4f6f1a5d03682243838d1d8ecd8efa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_4ae7d0dc2a195241c61bdc216e4c4bda83d8d0006c92fab2e0e406c299d948cb->leave($__internal_4ae7d0dc2a195241c61bdc216e4c4bda83d8d0006c92fab2e0e406c299d948cb_prof);

        
        $__internal_b1ad87a996867c8bb8e4db637e34914cc4f6f1a5d03682243838d1d8ecd8efa1->leave($__internal_b1ad87a996867c8bb8e4db637e34914cc4f6f1a5d03682243838d1d8ecd8efa1_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_aca8b585f9b87f153e7f28d1ab3b9e89303ff766810f9c28b2e468276ec2286c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aca8b585f9b87f153e7f28d1ab3b9e89303ff766810f9c28b2e468276ec2286c->enter($__internal_aca8b585f9b87f153e7f28d1ab3b9e89303ff766810f9c28b2e468276ec2286c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_011ae786c6f2d4c587e69f7dcb10431a6a3e83fc1c2e7c76eb2d6738fca1cf85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_011ae786c6f2d4c587e69f7dcb10431a6a3e83fc1c2e7c76eb2d6738fca1cf85->enter($__internal_011ae786c6f2d4c587e69f7dcb10431a6a3e83fc1c2e7c76eb2d6738fca1cf85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_011ae786c6f2d4c587e69f7dcb10431a6a3e83fc1c2e7c76eb2d6738fca1cf85->leave($__internal_011ae786c6f2d4c587e69f7dcb10431a6a3e83fc1c2e7c76eb2d6738fca1cf85_prof);

        
        $__internal_aca8b585f9b87f153e7f28d1ab3b9e89303ff766810f9c28b2e468276ec2286c->leave($__internal_aca8b585f9b87f153e7f28d1ab3b9e89303ff766810f9c28b2e468276ec2286c_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "C:\\wamp64\\www\\ProjetPiDev\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
