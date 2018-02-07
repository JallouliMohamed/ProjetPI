<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_7fed83a189ac8ecc4f59499ae3beae955cad5fc3b079652135b129017bf4c7d1 extends Twig_Template
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
        $__internal_66e0671cf78b0c8fb266e4aa115d9ddd41baaa437aadf2d190e552460f626d73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66e0671cf78b0c8fb266e4aa115d9ddd41baaa437aadf2d190e552460f626d73->enter($__internal_66e0671cf78b0c8fb266e4aa115d9ddd41baaa437aadf2d190e552460f626d73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_1bce938519a0153cafb8786c3dc35440baa1afe208046b87b03dff4de785d4fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bce938519a0153cafb8786c3dc35440baa1afe208046b87b03dff4de785d4fc->enter($__internal_1bce938519a0153cafb8786c3dc35440baa1afe208046b87b03dff4de785d4fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_66e0671cf78b0c8fb266e4aa115d9ddd41baaa437aadf2d190e552460f626d73->leave($__internal_66e0671cf78b0c8fb266e4aa115d9ddd41baaa437aadf2d190e552460f626d73_prof);

        
        $__internal_1bce938519a0153cafb8786c3dc35440baa1afe208046b87b03dff4de785d4fc->leave($__internal_1bce938519a0153cafb8786c3dc35440baa1afe208046b87b03dff4de785d4fc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
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
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "C:\\wamp64\\www\\ProjetPiDev\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_attributes.html.php");
    }
}
