<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_c40a4471ffb33781106e144e5f763040aae3214c8a5fe29f57e27b719ba8467d extends Twig_Template
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
        $__internal_5c447ed0af3406dd1a9b98ed2203cc21bd7907f56c00b75e6ff51935348a611c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c447ed0af3406dd1a9b98ed2203cc21bd7907f56c00b75e6ff51935348a611c->enter($__internal_5c447ed0af3406dd1a9b98ed2203cc21bd7907f56c00b75e6ff51935348a611c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_4ebfd83d6c572acefb5ff1627060c9155ee85bf1e65d0eff15ab433432e70b38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ebfd83d6c572acefb5ff1627060c9155ee85bf1e65d0eff15ab433432e70b38->enter($__internal_4ebfd83d6c572acefb5ff1627060c9155ee85bf1e65d0eff15ab433432e70b38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_5c447ed0af3406dd1a9b98ed2203cc21bd7907f56c00b75e6ff51935348a611c->leave($__internal_5c447ed0af3406dd1a9b98ed2203cc21bd7907f56c00b75e6ff51935348a611c_prof);

        
        $__internal_4ebfd83d6c572acefb5ff1627060c9155ee85bf1e65d0eff15ab433432e70b38->leave($__internal_4ebfd83d6c572acefb5ff1627060c9155ee85bf1e65d0eff15ab433432e70b38_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "C:\\wamp64\\www\\ProjetPiDev\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\money_widget.html.php");
    }
}
