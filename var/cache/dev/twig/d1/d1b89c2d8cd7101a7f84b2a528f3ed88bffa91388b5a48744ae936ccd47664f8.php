<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_0714226eb598172c6df150972fc839567e21a75121d37690b60d95aa14468277 extends Twig_Template
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
        $__internal_80afe9b452d1d1efcb1f7767516eb58b3d6d26835657270b14630b6a41317a28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80afe9b452d1d1efcb1f7767516eb58b3d6d26835657270b14630b6a41317a28->enter($__internal_80afe9b452d1d1efcb1f7767516eb58b3d6d26835657270b14630b6a41317a28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_c1d896ae797e30825a5e5581f554c7b9aad277008df9024f6f68e741d554f5fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1d896ae797e30825a5e5581f554c7b9aad277008df9024f6f68e741d554f5fe->enter($__internal_c1d896ae797e30825a5e5581f554c7b9aad277008df9024f6f68e741d554f5fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_80afe9b452d1d1efcb1f7767516eb58b3d6d26835657270b14630b6a41317a28->leave($__internal_80afe9b452d1d1efcb1f7767516eb58b3d6d26835657270b14630b6a41317a28_prof);

        
        $__internal_c1d896ae797e30825a5e5581f554c7b9aad277008df9024f6f68e741d554f5fe->leave($__internal_c1d896ae797e30825a5e5581f554c7b9aad277008df9024f6f68e741d554f5fe_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "C:\\wamp64\\www\\ProjetPiDev\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\search_widget.html.php");
    }
}
