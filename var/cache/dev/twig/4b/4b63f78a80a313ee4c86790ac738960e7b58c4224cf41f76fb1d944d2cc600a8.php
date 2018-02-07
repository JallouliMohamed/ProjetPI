<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_228e8ac46aaaa0126db04bb93c2a70e5dc7b0abefc42b49737269282dc917e0d extends Twig_Template
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
        $__internal_4bc01366b6b82ad76f3573aa2e3c04c5c3b8009fcdb184a5cf88944d8c8edd73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4bc01366b6b82ad76f3573aa2e3c04c5c3b8009fcdb184a5cf88944d8c8edd73->enter($__internal_4bc01366b6b82ad76f3573aa2e3c04c5c3b8009fcdb184a5cf88944d8c8edd73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_ebce54f80f46578869751b0030bc0c00f78233838901e57fb94fc9a7ed5c6dcb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebce54f80f46578869751b0030bc0c00f78233838901e57fb94fc9a7ed5c6dcb->enter($__internal_ebce54f80f46578869751b0030bc0c00f78233838901e57fb94fc9a7ed5c6dcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_4bc01366b6b82ad76f3573aa2e3c04c5c3b8009fcdb184a5cf88944d8c8edd73->leave($__internal_4bc01366b6b82ad76f3573aa2e3c04c5c3b8009fcdb184a5cf88944d8c8edd73_prof);

        
        $__internal_ebce54f80f46578869751b0030bc0c00f78233838901e57fb94fc9a7ed5c6dcb->leave($__internal_ebce54f80f46578869751b0030bc0c00f78233838901e57fb94fc9a7ed5c6dcb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "C:\\wamp64\\www\\ProjetPiDev\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget.html.php");
    }
}
