<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_8dec9c0b97fb699b82dce6b9533d4a69599b781c87f13690cfdb39277b72e8ab extends Twig_Template
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
        $__internal_93aa2f3a7e4eedaae675bac37bf04495433dbc3d63bd6e4d71b8acf9fbd6c229 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93aa2f3a7e4eedaae675bac37bf04495433dbc3d63bd6e4d71b8acf9fbd6c229->enter($__internal_93aa2f3a7e4eedaae675bac37bf04495433dbc3d63bd6e4d71b8acf9fbd6c229_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_247286950ec638a1db5c704fceeb46bec70c6270bb6b634a540449d9b6a8d96a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_247286950ec638a1db5c704fceeb46bec70c6270bb6b634a540449d9b6a8d96a->enter($__internal_247286950ec638a1db5c704fceeb46bec70c6270bb6b634a540449d9b6a8d96a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_93aa2f3a7e4eedaae675bac37bf04495433dbc3d63bd6e4d71b8acf9fbd6c229->leave($__internal_93aa2f3a7e4eedaae675bac37bf04495433dbc3d63bd6e4d71b8acf9fbd6c229_prof);

        
        $__internal_247286950ec638a1db5c704fceeb46bec70c6270bb6b634a540449d9b6a8d96a->leave($__internal_247286950ec638a1db5c704fceeb46bec70c6270bb6b634a540449d9b6a8d96a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "C:\\wamp64\\www\\ProjetPiDev\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\password_widget.html.php");
    }
}
