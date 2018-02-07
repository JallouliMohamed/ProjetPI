<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_a479f576687760fca43de0bc0ee69cd28de436190998a516551b7faac7be4ed7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ba24eb5204fb55b156e2054098bb2aa185a7b27496a87eaf4280746926bd32e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba24eb5204fb55b156e2054098bb2aa185a7b27496a87eaf4280746926bd32e8->enter($__internal_ba24eb5204fb55b156e2054098bb2aa185a7b27496a87eaf4280746926bd32e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $__internal_fefd8eb6b5af4f2f75d91f24c4bd143672447b1356af8315f41bf340f00d8638 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fefd8eb6b5af4f2f75d91f24c4bd143672447b1356af8315f41bf340f00d8638->enter($__internal_fefd8eb6b5af4f2f75d91f24c4bd143672447b1356af8315f41bf340f00d8638_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_ba24eb5204fb55b156e2054098bb2aa185a7b27496a87eaf4280746926bd32e8->leave($__internal_ba24eb5204fb55b156e2054098bb2aa185a7b27496a87eaf4280746926bd32e8_prof);

        
        $__internal_fefd8eb6b5af4f2f75d91f24c4bd143672447b1356af8315f41bf340f00d8638->leave($__internal_fefd8eb6b5af4f2f75d91f24c4bd143672447b1356af8315f41bf340f00d8638_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4c8dbfee38e01d48d5c21035aa591c101f21b78b4867722970075349f2a1c521 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c8dbfee38e01d48d5c21035aa591c101f21b78b4867722970075349f2a1c521->enter($__internal_4c8dbfee38e01d48d5c21035aa591c101f21b78b4867722970075349f2a1c521_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_dd67def9b965c0e26d48fef832bf389c30132afd964305667f502fd875aef99c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd67def9b965c0e26d48fef832bf389c30132afd964305667f502fd875aef99c->enter($__internal_dd67def9b965c0e26d48fef832bf389c30132afd964305667f502fd875aef99c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_dd67def9b965c0e26d48fef832bf389c30132afd964305667f502fd875aef99c->leave($__internal_dd67def9b965c0e26d48fef832bf389c30132afd964305667f502fd875aef99c_prof);

        
        $__internal_4c8dbfee38e01d48d5c21035aa591c101f21b78b4867722970075349f2a1c521->leave($__internal_4c8dbfee38e01d48d5c21035aa591c101f21b78b4867722970075349f2a1c521_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  47 => 4,  29 => 3,  26 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:show.html.twig", "C:\\wamp64\\www\\ProjetPiDev\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Profile/show.html.twig");
    }
}
