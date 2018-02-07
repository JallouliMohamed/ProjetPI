<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_3a9b015d9bac6065cec79bd972bc36a29f8140d77aa36df53fb75a32c7bc6ac8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_66acbaf634acaa4d46974e09c0f32c0719a8d6726aad944276a47415b0e0669c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66acbaf634acaa4d46974e09c0f32c0719a8d6726aad944276a47415b0e0669c->enter($__internal_66acbaf634acaa4d46974e09c0f32c0719a8d6726aad944276a47415b0e0669c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_cc0ff849359b2b5b2e87157d58fc0c30a74fdb5adde52960fdb885fe77b2c019 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc0ff849359b2b5b2e87157d58fc0c30a74fdb5adde52960fdb885fe77b2c019->enter($__internal_cc0ff849359b2b5b2e87157d58fc0c30a74fdb5adde52960fdb885fe77b2c019_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_66acbaf634acaa4d46974e09c0f32c0719a8d6726aad944276a47415b0e0669c->leave($__internal_66acbaf634acaa4d46974e09c0f32c0719a8d6726aad944276a47415b0e0669c_prof);

        
        $__internal_cc0ff849359b2b5b2e87157d58fc0c30a74fdb5adde52960fdb885fe77b2c019->leave($__internal_cc0ff849359b2b5b2e87157d58fc0c30a74fdb5adde52960fdb885fe77b2c019_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.atom.twig", "C:\\wamp64\\www\\ProjetPiDev\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
