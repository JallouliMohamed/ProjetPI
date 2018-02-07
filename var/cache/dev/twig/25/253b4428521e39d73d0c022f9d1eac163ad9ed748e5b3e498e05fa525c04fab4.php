<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_14c5c3e2a8d2238710b24b953a2a526855ac3efc3e3818fe88e685307d0e4a18 extends Twig_Template
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
        $__internal_98a24ffce2df2d536c9a8076bb674daebc315596e3b6ba26296b2dcbf48e65f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98a24ffce2df2d536c9a8076bb674daebc315596e3b6ba26296b2dcbf48e65f8->enter($__internal_98a24ffce2df2d536c9a8076bb674daebc315596e3b6ba26296b2dcbf48e65f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_4522b3c9518491098264220b0df587973792b55087ac48e78db9924178b75307 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4522b3c9518491098264220b0df587973792b55087ac48e78db9924178b75307->enter($__internal_4522b3c9518491098264220b0df587973792b55087ac48e78db9924178b75307_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_98a24ffce2df2d536c9a8076bb674daebc315596e3b6ba26296b2dcbf48e65f8->leave($__internal_98a24ffce2df2d536c9a8076bb674daebc315596e3b6ba26296b2dcbf48e65f8_prof);

        
        $__internal_4522b3c9518491098264220b0df587973792b55087ac48e78db9924178b75307->leave($__internal_4522b3c9518491098264220b0df587973792b55087ac48e78db9924178b75307_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
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
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "C:\\wamp64\\www\\ProjetPiDev\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_widget.html.php");
    }
}
