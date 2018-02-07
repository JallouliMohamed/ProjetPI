<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_a46878681bbf088ea526b8ae59cab7c8dcd48daad4236878bdc82d6d9f1dbd8c extends Twig_Template
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
        $__internal_d1e679839d615a199cbfe816cdd49261d3f4030056e046dfb967a4577aa2f49c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1e679839d615a199cbfe816cdd49261d3f4030056e046dfb967a4577aa2f49c->enter($__internal_d1e679839d615a199cbfe816cdd49261d3f4030056e046dfb967a4577aa2f49c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_6a644262527c4bd05927b8d7ad1fb0f9ca1397da2625d7d382d6fffa520d9754 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a644262527c4bd05927b8d7ad1fb0f9ca1397da2625d7d382d6fffa520d9754->enter($__internal_6a644262527c4bd05927b8d7ad1fb0f9ca1397da2625d7d382d6fffa520d9754_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_d1e679839d615a199cbfe816cdd49261d3f4030056e046dfb967a4577aa2f49c->leave($__internal_d1e679839d615a199cbfe816cdd49261d3f4030056e046dfb967a4577aa2f49c_prof);

        
        $__internal_6a644262527c4bd05927b8d7ad1fb0f9ca1397da2625d7d382d6fffa520d9754->leave($__internal_6a644262527c4bd05927b8d7ad1fb0f9ca1397da2625d7d382d6fffa520d9754_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "C:\\wamp64\\www\\ProjetPiDev\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\percent_widget.html.php");
    }
}
