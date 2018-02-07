<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_30fbfa0eebcbaf63faaaf4393d0733c5e8182cd913dc2b5df4e7ff06d45c3529 extends Twig_Template
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
        $__internal_4819e3b5a09a313d4572780f8b8b5f2e097d487c62e87ec61f30784d224880ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4819e3b5a09a313d4572780f8b8b5f2e097d487c62e87ec61f30784d224880ed->enter($__internal_4819e3b5a09a313d4572780f8b8b5f2e097d487c62e87ec61f30784d224880ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_bd4b2678e6552df108e6af89aef4015bb9aa0a20383af34f2a8ba7d0b16b8b76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd4b2678e6552df108e6af89aef4015bb9aa0a20383af34f2a8ba7d0b16b8b76->enter($__internal_bd4b2678e6552df108e6af89aef4015bb9aa0a20383af34f2a8ba7d0b16b8b76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_4819e3b5a09a313d4572780f8b8b5f2e097d487c62e87ec61f30784d224880ed->leave($__internal_4819e3b5a09a313d4572780f8b8b5f2e097d487c62e87ec61f30784d224880ed_prof);

        
        $__internal_bd4b2678e6552df108e6af89aef4015bb9aa0a20383af34f2a8ba7d0b16b8b76->leave($__internal_bd4b2678e6552df108e6af89aef4015bb9aa0a20383af34f2a8ba7d0b16b8b76_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "C:\\wamp64\\www\\ProjetPiDev\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form.html.php");
    }
}
