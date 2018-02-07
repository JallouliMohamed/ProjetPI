<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_3892d89617b06f9b0dbf43ae52f066ff9d0dcd458dc93d966d62c3793086e0b3 extends Twig_Template
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
        $__internal_d9eac6e30a82fd290b394839e81c2f17134b6ee467628c7b978f03432a0f8549 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9eac6e30a82fd290b394839e81c2f17134b6ee467628c7b978f03432a0f8549->enter($__internal_d9eac6e30a82fd290b394839e81c2f17134b6ee467628c7b978f03432a0f8549_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_88ac42d0a0d8fd117e0cc6516cb36f98d982cd93e409e24ae652dacaaada88eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88ac42d0a0d8fd117e0cc6516cb36f98d982cd93e409e24ae652dacaaada88eb->enter($__internal_88ac42d0a0d8fd117e0cc6516cb36f98d982cd93e409e24ae652dacaaada88eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_d9eac6e30a82fd290b394839e81c2f17134b6ee467628c7b978f03432a0f8549->leave($__internal_d9eac6e30a82fd290b394839e81c2f17134b6ee467628c7b978f03432a0f8549_prof);

        
        $__internal_88ac42d0a0d8fd117e0cc6516cb36f98d982cd93e409e24ae652dacaaada88eb->leave($__internal_88ac42d0a0d8fd117e0cc6516cb36f98d982cd93e409e24ae652dacaaada88eb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "C:\\wamp64\\www\\ProjetPiDev\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\collection_widget.html.php");
    }
}
