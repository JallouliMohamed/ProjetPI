<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_e264665c5ffa0bd4847fcdd496abe2526e39ad509e757cc7e5b70add14fa1c46 extends Twig_Template
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
        $__internal_3534e9a4f718c0d3185daa980907ef55b6e4c738c03a572413d74bf1c6b3f85b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3534e9a4f718c0d3185daa980907ef55b6e4c738c03a572413d74bf1c6b3f85b->enter($__internal_3534e9a4f718c0d3185daa980907ef55b6e4c738c03a572413d74bf1c6b3f85b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_74080f1e34fbf8f84a45250c4ddb9e5e0dc848db9650ce2332ad80bfb22e41f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74080f1e34fbf8f84a45250c4ddb9e5e0dc848db9650ce2332ad80bfb22e41f9->enter($__internal_74080f1e34fbf8f84a45250c4ddb9e5e0dc848db9650ce2332ad80bfb22e41f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_3534e9a4f718c0d3185daa980907ef55b6e4c738c03a572413d74bf1c6b3f85b->leave($__internal_3534e9a4f718c0d3185daa980907ef55b6e4c738c03a572413d74bf1c6b3f85b_prof);

        
        $__internal_74080f1e34fbf8f84a45250c4ddb9e5e0dc848db9650ce2332ad80bfb22e41f9->leave($__internal_74080f1e34fbf8f84a45250c4ddb9e5e0dc848db9650ce2332ad80bfb22e41f9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "C:\\wamp64\\www\\ProjetPiDev\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
