<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_9f576521e4b13ae2774aeff939f2420d5283424a40b0bf38a30655851eae58fd extends Twig_Template
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
        $__internal_a56948936ea341f46c71ccb1880dd723add8ac8bb05f6ad8015d32b188e45f1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a56948936ea341f46c71ccb1880dd723add8ac8bb05f6ad8015d32b188e45f1a->enter($__internal_a56948936ea341f46c71ccb1880dd723add8ac8bb05f6ad8015d32b188e45f1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_27b3959ee15aab4461e140ac2316887b9647397422f2a991682373de4f46ea65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27b3959ee15aab4461e140ac2316887b9647397422f2a991682373de4f46ea65->enter($__internal_27b3959ee15aab4461e140ac2316887b9647397422f2a991682373de4f46ea65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_a56948936ea341f46c71ccb1880dd723add8ac8bb05f6ad8015d32b188e45f1a->leave($__internal_a56948936ea341f46c71ccb1880dd723add8ac8bb05f6ad8015d32b188e45f1a_prof);

        
        $__internal_27b3959ee15aab4461e140ac2316887b9647397422f2a991682373de4f46ea65->leave($__internal_27b3959ee15aab4461e140ac2316887b9647397422f2a991682373de4f46ea65_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
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
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "C:\\wamp64\\www\\ProjetPiDev\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\widget_attributes.html.php");
    }
}
