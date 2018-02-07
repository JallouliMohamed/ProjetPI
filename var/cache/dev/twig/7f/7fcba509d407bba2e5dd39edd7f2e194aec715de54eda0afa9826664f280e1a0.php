<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_ec3ac6b739e785c8aef676a8943024fd86c75767a041f0f1b05816b8d359aa2f extends Twig_Template
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
        $__internal_cc133adb65afab0e8e7c1cb074d4e933a0441b4befd18e0dd7465b3299e2c9b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc133adb65afab0e8e7c1cb074d4e933a0441b4befd18e0dd7465b3299e2c9b9->enter($__internal_cc133adb65afab0e8e7c1cb074d4e933a0441b4befd18e0dd7465b3299e2c9b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_cbf37d08e830dcbebc81902bc05dbc344f24ddc99364af719449903c98a0f548 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbf37d08e830dcbebc81902bc05dbc344f24ddc99364af719449903c98a0f548->enter($__internal_cbf37d08e830dcbebc81902bc05dbc344f24ddc99364af719449903c98a0f548_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_cc133adb65afab0e8e7c1cb074d4e933a0441b4befd18e0dd7465b3299e2c9b9->leave($__internal_cc133adb65afab0e8e7c1cb074d4e933a0441b4befd18e0dd7465b3299e2c9b9_prof);

        
        $__internal_cbf37d08e830dcbebc81902bc05dbc344f24ddc99364af719449903c98a0f548->leave($__internal_cbf37d08e830dcbebc81902bc05dbc344f24ddc99364af719449903c98a0f548_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "C:\\wamp64\\www\\ProjetPiDev\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\submit_widget.html.php");
    }
}
