<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_2867206b76ebf5b7bfb8b1a11c64c11726dde62a2420441a86e55cdda0040bc7 extends Twig_Template
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
        $__internal_ebd239d290c04a1d8bbafa10b56f67010d52bb9c4ff7d029d44c378adba19228 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ebd239d290c04a1d8bbafa10b56f67010d52bb9c4ff7d029d44c378adba19228->enter($__internal_ebd239d290c04a1d8bbafa10b56f67010d52bb9c4ff7d029d44c378adba19228_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_a48a28632e61b7eaf7a99da5a228e0d43e44b33a70b1fe4b9176f04966ebcb9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a48a28632e61b7eaf7a99da5a228e0d43e44b33a70b1fe4b9176f04966ebcb9e->enter($__internal_a48a28632e61b7eaf7a99da5a228e0d43e44b33a70b1fe4b9176f04966ebcb9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_ebd239d290c04a1d8bbafa10b56f67010d52bb9c4ff7d029d44c378adba19228->leave($__internal_ebd239d290c04a1d8bbafa10b56f67010d52bb9c4ff7d029d44c378adba19228_prof);

        
        $__internal_a48a28632e61b7eaf7a99da5a228e0d43e44b33a70b1fe4b9176f04966ebcb9e->leave($__internal_a48a28632e61b7eaf7a99da5a228e0d43e44b33a70b1fe4b9176f04966ebcb9e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "C:\\wamp64\\www\\ProjetPiDev\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget.html.php");
    }
}
