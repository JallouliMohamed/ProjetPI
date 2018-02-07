<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_d3e7f3e20c37d8e0875f013100a41064bd469efd8b232cfd89924093d3d65924 extends Twig_Template
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
        $__internal_5e50e921dc13224e550474f2b6ba43609dace72fb33521b512c5b5b50b6375fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e50e921dc13224e550474f2b6ba43609dace72fb33521b512c5b5b50b6375fc->enter($__internal_5e50e921dc13224e550474f2b6ba43609dace72fb33521b512c5b5b50b6375fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_e7db8969d111f1465b7f85cf50d0ed1a2e9c77464f7068008c1c6e2276785262 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7db8969d111f1465b7f85cf50d0ed1a2e9c77464f7068008c1c6e2276785262->enter($__internal_e7db8969d111f1465b7f85cf50d0ed1a2e9c77464f7068008c1c6e2276785262_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_5e50e921dc13224e550474f2b6ba43609dace72fb33521b512c5b5b50b6375fc->leave($__internal_5e50e921dc13224e550474f2b6ba43609dace72fb33521b512c5b5b50b6375fc_prof);

        
        $__internal_e7db8969d111f1465b7f85cf50d0ed1a2e9c77464f7068008c1c6e2276785262->leave($__internal_e7db8969d111f1465b7f85cf50d0ed1a2e9c77464f7068008c1c6e2276785262_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "C:\\wamp64\\www\\ProjetPiDev\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\url_widget.html.php");
    }
}
