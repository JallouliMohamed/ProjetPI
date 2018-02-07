<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_2b6812fd5dddd7c16fd5b0ff3bd4953081133ec3857e768bed0ae3e117a51fb3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_4b3067f7d3ba9230acf7c030547e882989e8d83c8bf1b1224b130602f7c65555 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b3067f7d3ba9230acf7c030547e882989e8d83c8bf1b1224b130602f7c65555->enter($__internal_4b3067f7d3ba9230acf7c030547e882989e8d83c8bf1b1224b130602f7c65555_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $__internal_b1e578e6ebc244e6ed40c76126bc8a4f34aad6929a2e2fb380b36dab02703e96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1e578e6ebc244e6ed40c76126bc8a4f34aad6929a2e2fb380b36dab02703e96->enter($__internal_b1e578e6ebc244e6ed40c76126bc8a4f34aad6929a2e2fb380b36dab02703e96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4b3067f7d3ba9230acf7c030547e882989e8d83c8bf1b1224b130602f7c65555->leave($__internal_4b3067f7d3ba9230acf7c030547e882989e8d83c8bf1b1224b130602f7c65555_prof);

        
        $__internal_b1e578e6ebc244e6ed40c76126bc8a4f34aad6929a2e2fb380b36dab02703e96->leave($__internal_b1e578e6ebc244e6ed40c76126bc8a4f34aad6929a2e2fb380b36dab02703e96_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d98eeb0bb68953d7506738982b25a31df7a26017caaefde00686b7543dc635bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d98eeb0bb68953d7506738982b25a31df7a26017caaefde00686b7543dc635bf->enter($__internal_d98eeb0bb68953d7506738982b25a31df7a26017caaefde00686b7543dc635bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_226afafee1859e9aa4720beec14ff30b949d9769946d3a41c575d7131d40d8a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_226afafee1859e9aa4720beec14ff30b949d9769946d3a41c575d7131d40d8a8->enter($__internal_226afafee1859e9aa4720beec14ff30b949d9769946d3a41c575d7131d40d8a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_226afafee1859e9aa4720beec14ff30b949d9769946d3a41c575d7131d40d8a8->leave($__internal_226afafee1859e9aa4720beec14ff30b949d9769946d3a41c575d7131d40d8a8_prof);

        
        $__internal_d98eeb0bb68953d7506738982b25a31df7a26017caaefde00686b7543dc635bf->leave($__internal_d98eeb0bb68953d7506738982b25a31df7a26017caaefde00686b7543dc635bf_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:register.html.twig", "C:\\wamp64\\www\\ProjetPiDev\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Registration/register.html.twig");
    }
}
