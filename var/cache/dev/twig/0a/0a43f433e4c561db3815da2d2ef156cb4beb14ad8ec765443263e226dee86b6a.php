<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_1150906dbea88cad3c73edad53f454f977691b3cf296008d3800b990fb93a975 extends Twig_Template
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
        $__internal_3e212273ef3e63b4984e6414e5dbcca6dc678538a0386df233919a416beae807 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e212273ef3e63b4984e6414e5dbcca6dc678538a0386df233919a416beae807->enter($__internal_3e212273ef3e63b4984e6414e5dbcca6dc678538a0386df233919a416beae807_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_f82035bcec18de83ecb15a6a86d98ca117b535266185e02559c479e24be5eec3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f82035bcec18de83ecb15a6a86d98ca117b535266185e02559c479e24be5eec3->enter($__internal_f82035bcec18de83ecb15a6a86d98ca117b535266185e02559c479e24be5eec3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_3e212273ef3e63b4984e6414e5dbcca6dc678538a0386df233919a416beae807->leave($__internal_3e212273ef3e63b4984e6414e5dbcca6dc678538a0386df233919a416beae807_prof);

        
        $__internal_f82035bcec18de83ecb15a6a86d98ca117b535266185e02559c479e24be5eec3->leave($__internal_f82035bcec18de83ecb15a6a86d98ca117b535266185e02559c479e24be5eec3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "C:\\wamp64\\www\\ProjetPiDev\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_row.html.php");
    }
}
