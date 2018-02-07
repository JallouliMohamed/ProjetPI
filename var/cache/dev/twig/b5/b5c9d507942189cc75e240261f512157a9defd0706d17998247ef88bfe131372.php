<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_a9176dd160aec8e1de333faee3904b041a2b8330e7a830cb611afa27ae1af28b extends Twig_Template
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
        $__internal_c617090e3dd2f81fd411d90bbabfc1630d491b870e62ab21d46b8727ebfd858c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c617090e3dd2f81fd411d90bbabfc1630d491b870e62ab21d46b8727ebfd858c->enter($__internal_c617090e3dd2f81fd411d90bbabfc1630d491b870e62ab21d46b8727ebfd858c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_7a8707b58ab399952e5d02032405f25541bb6b5e0d6752ea9b48cb63728e768f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a8707b58ab399952e5d02032405f25541bb6b5e0d6752ea9b48cb63728e768f->enter($__internal_7a8707b58ab399952e5d02032405f25541bb6b5e0d6752ea9b48cb63728e768f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_c617090e3dd2f81fd411d90bbabfc1630d491b870e62ab21d46b8727ebfd858c->leave($__internal_c617090e3dd2f81fd411d90bbabfc1630d491b870e62ab21d46b8727ebfd858c_prof);

        
        $__internal_7a8707b58ab399952e5d02032405f25541bb6b5e0d6752ea9b48cb63728e768f->leave($__internal_7a8707b58ab399952e5d02032405f25541bb6b5e0d6752ea9b48cb63728e768f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "C:\\wamp64\\www\\ProjetPiDev\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\radio_widget.html.php");
    }
}
