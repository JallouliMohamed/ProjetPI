<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_30be0fe86ffa5f3099298ae7a47303ac85c441ddc35681af77320db64acb1ad1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
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
        $__internal_99ce65bc516247e2c3bb22ebaeeb2232e478dc9dbadec4563e0603bc434d0a72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99ce65bc516247e2c3bb22ebaeeb2232e478dc9dbadec4563e0603bc434d0a72->enter($__internal_99ce65bc516247e2c3bb22ebaeeb2232e478dc9dbadec4563e0603bc434d0a72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $__internal_9370b9db3da0049829efb89bc74f64547b95ad8bb451bdbc470fbd3172ff548c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9370b9db3da0049829efb89bc74f64547b95ad8bb451bdbc470fbd3172ff548c->enter($__internal_9370b9db3da0049829efb89bc74f64547b95ad8bb451bdbc470fbd3172ff548c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_99ce65bc516247e2c3bb22ebaeeb2232e478dc9dbadec4563e0603bc434d0a72->leave($__internal_99ce65bc516247e2c3bb22ebaeeb2232e478dc9dbadec4563e0603bc434d0a72_prof);

        
        $__internal_9370b9db3da0049829efb89bc74f64547b95ad8bb451bdbc470fbd3172ff548c->leave($__internal_9370b9db3da0049829efb89bc74f64547b95ad8bb451bdbc470fbd3172ff548c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3d47e5bb5c3edac450ecc573914503d5218a5b7e69423363bcf902763f80a94b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d47e5bb5c3edac450ecc573914503d5218a5b7e69423363bcf902763f80a94b->enter($__internal_3d47e5bb5c3edac450ecc573914503d5218a5b7e69423363bcf902763f80a94b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_99b10b9da6e7fca65a305ef2a63a8566b1d3d55b18566f294e483334a9c152b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99b10b9da6e7fca65a305ef2a63a8566b1d3d55b18566f294e483334a9c152b2->enter($__internal_99b10b9da6e7fca65a305ef2a63a8566b1d3d55b18566f294e483334a9c152b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_99b10b9da6e7fca65a305ef2a63a8566b1d3d55b18566f294e483334a9c152b2->leave($__internal_99b10b9da6e7fca65a305ef2a63a8566b1d3d55b18566f294e483334a9c152b2_prof);

        
        $__internal_3d47e5bb5c3edac450ecc573914503d5218a5b7e69423363bcf902763f80a94b->leave($__internal_3d47e5bb5c3edac450ecc573914503d5218a5b7e69423363bcf902763f80a94b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
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
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "FOSUserBundle:Security:login.html.twig", "C:\\wamp64\\www\\ProjetPiDev\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Security/login.html.twig");
    }
}
