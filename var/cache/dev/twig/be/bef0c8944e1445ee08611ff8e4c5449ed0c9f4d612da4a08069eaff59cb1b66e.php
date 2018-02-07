<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_ce92e9ff632d23a8124d6f3c9913552e588320e10026530b34f962ac1d8df186 extends Twig_Template
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
        $__internal_1b7484f747e9028f76d37d470a8a48e3fb755996c0b1754c4c7e68362a7e4227 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b7484f747e9028f76d37d470a8a48e3fb755996c0b1754c4c7e68362a7e4227->enter($__internal_1b7484f747e9028f76d37d470a8a48e3fb755996c0b1754c4c7e68362a7e4227_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_702e632bbd2d619cda49ccb0388156fdaf5d381e5d185b6297a2d0ae2998f3c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_702e632bbd2d619cda49ccb0388156fdaf5d381e5d185b6297a2d0ae2998f3c3->enter($__internal_702e632bbd2d619cda49ccb0388156fdaf5d381e5d185b6297a2d0ae2998f3c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_1b7484f747e9028f76d37d470a8a48e3fb755996c0b1754c4c7e68362a7e4227->leave($__internal_1b7484f747e9028f76d37d470a8a48e3fb755996c0b1754c4c7e68362a7e4227_prof);

        
        $__internal_702e632bbd2d619cda49ccb0388156fdaf5d381e5d185b6297a2d0ae2998f3c3->leave($__internal_702e632bbd2d619cda49ccb0388156fdaf5d381e5d185b6297a2d0ae2998f3c3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "C:\\wamp64\\www\\ProjetPiDev\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_row.html.php");
    }
}
