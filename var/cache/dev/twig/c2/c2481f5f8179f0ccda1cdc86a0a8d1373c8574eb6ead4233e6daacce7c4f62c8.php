<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_9c4df629ea4f9bdf1e345c8ffa02c50f97fb79a4acba0778cabf2c9e6ae68a1a extends Twig_Template
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
        $__internal_20a17d8a8eb4aa8fe25b1c780a893414465e4b269e290d179c7f380cc63f0f9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20a17d8a8eb4aa8fe25b1c780a893414465e4b269e290d179c7f380cc63f0f9c->enter($__internal_20a17d8a8eb4aa8fe25b1c780a893414465e4b269e290d179c7f380cc63f0f9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_8adc4a39cd2aeddac9df624cecba4974003aac7a44c991fa22016385e66a564c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8adc4a39cd2aeddac9df624cecba4974003aac7a44c991fa22016385e66a564c->enter($__internal_8adc4a39cd2aeddac9df624cecba4974003aac7a44c991fa22016385e66a564c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_20a17d8a8eb4aa8fe25b1c780a893414465e4b269e290d179c7f380cc63f0f9c->leave($__internal_20a17d8a8eb4aa8fe25b1c780a893414465e4b269e290d179c7f380cc63f0f9c_prof);

        
        $__internal_8adc4a39cd2aeddac9df624cecba4974003aac7a44c991fa22016385e66a564c->leave($__internal_8adc4a39cd2aeddac9df624cecba4974003aac7a44c991fa22016385e66a564c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "C:\\wamp64\\www\\ProjetPiDev\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\checkbox_widget.html.php");
    }
}
