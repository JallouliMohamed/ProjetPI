<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_ad3fa144b1bf2eb634e7bba0fe3de7bc5b7f81b32c15336c2bd01fda66383bff extends Twig_Template
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
        $__internal_05e61012e1bc447ca73105ef550ebeebd3cd613daf60ed3b6ed6be383753114a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05e61012e1bc447ca73105ef550ebeebd3cd613daf60ed3b6ed6be383753114a->enter($__internal_05e61012e1bc447ca73105ef550ebeebd3cd613daf60ed3b6ed6be383753114a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_f516013718f79779f28ff6f18caabac7d1c124bccec6e446966181fb8669660b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f516013718f79779f28ff6f18caabac7d1c124bccec6e446966181fb8669660b->enter($__internal_f516013718f79779f28ff6f18caabac7d1c124bccec6e446966181fb8669660b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_05e61012e1bc447ca73105ef550ebeebd3cd613daf60ed3b6ed6be383753114a->leave($__internal_05e61012e1bc447ca73105ef550ebeebd3cd613daf60ed3b6ed6be383753114a_prof);

        
        $__internal_f516013718f79779f28ff6f18caabac7d1c124bccec6e446966181fb8669660b->leave($__internal_f516013718f79779f28ff6f18caabac7d1c124bccec6e446966181fb8669660b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "C:\\wamp64\\www\\ProjetPiDev\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\container_attributes.html.php");
    }
}
