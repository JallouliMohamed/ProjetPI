<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_80ad8cc3115ab5e6b37bdf968cca3160b83fb067ebb30427bb22387485243f49 extends Twig_Template
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
        $__internal_29a2e810b05237d204818a94a537c31876d2a94e6bd2b6a32c9609fe6e1b6855 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29a2e810b05237d204818a94a537c31876d2a94e6bd2b6a32c9609fe6e1b6855->enter($__internal_29a2e810b05237d204818a94a537c31876d2a94e6bd2b6a32c9609fe6e1b6855_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_1acadd2febfb3581adc89397c1bd1f34cfe0582a746acff035bf1a4f6b213d08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1acadd2febfb3581adc89397c1bd1f34cfe0582a746acff035bf1a4f6b213d08->enter($__internal_1acadd2febfb3581adc89397c1bd1f34cfe0582a746acff035bf1a4f6b213d08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_29a2e810b05237d204818a94a537c31876d2a94e6bd2b6a32c9609fe6e1b6855->leave($__internal_29a2e810b05237d204818a94a537c31876d2a94e6bd2b6a32c9609fe6e1b6855_prof);

        
        $__internal_1acadd2febfb3581adc89397c1bd1f34cfe0582a746acff035bf1a4f6b213d08->leave($__internal_1acadd2febfb3581adc89397c1bd1f34cfe0582a746acff035bf1a4f6b213d08_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "C:\\wamp64\\www\\ProjetPiDev\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\textarea_widget.html.php");
    }
}
