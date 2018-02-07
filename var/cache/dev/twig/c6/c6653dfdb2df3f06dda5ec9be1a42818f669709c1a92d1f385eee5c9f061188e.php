<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_9c839e6962e475e969c71bbadc33b9411369e900382837047407bdd785cd15cb extends Twig_Template
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
        $__internal_092a2c0df6915a7d367e1a8b44c6377ce06409929b1bfde8031e4b871908662b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_092a2c0df6915a7d367e1a8b44c6377ce06409929b1bfde8031e4b871908662b->enter($__internal_092a2c0df6915a7d367e1a8b44c6377ce06409929b1bfde8031e4b871908662b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_8ab9f4f0afdc215b2786031d3eca46102df1dae35158602c2f8c422b5682cbb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ab9f4f0afdc215b2786031d3eca46102df1dae35158602c2f8c422b5682cbb4->enter($__internal_8ab9f4f0afdc215b2786031d3eca46102df1dae35158602c2f8c422b5682cbb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_092a2c0df6915a7d367e1a8b44c6377ce06409929b1bfde8031e4b871908662b->leave($__internal_092a2c0df6915a7d367e1a8b44c6377ce06409929b1bfde8031e4b871908662b_prof);

        
        $__internal_8ab9f4f0afdc215b2786031d3eca46102df1dae35158602c2f8c422b5682cbb4->leave($__internal_8ab9f4f0afdc215b2786031d3eca46102df1dae35158602c2f8c422b5682cbb4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "C:\\wamp64\\www\\ProjetPiDev\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_widget.html.php");
    }
}
