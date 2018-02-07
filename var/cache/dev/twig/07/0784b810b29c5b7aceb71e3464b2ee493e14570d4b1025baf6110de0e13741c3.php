<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_b92b510ad15e43217efec13c3d5adc9a9cb2aaddff263dde4ff37c7cf648f6aa extends Twig_Template
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
        $__internal_ae3d5ccc1852b0ab01aab2d59c00992054739d2522205419047e6fdfc94d0c7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae3d5ccc1852b0ab01aab2d59c00992054739d2522205419047e6fdfc94d0c7a->enter($__internal_ae3d5ccc1852b0ab01aab2d59c00992054739d2522205419047e6fdfc94d0c7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_972d0dae9c5193c483a4aadfc31a8f30b7239acc6cf888db61f7b27becb7615f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_972d0dae9c5193c483a4aadfc31a8f30b7239acc6cf888db61f7b27becb7615f->enter($__internal_972d0dae9c5193c483a4aadfc31a8f30b7239acc6cf888db61f7b27becb7615f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_ae3d5ccc1852b0ab01aab2d59c00992054739d2522205419047e6fdfc94d0c7a->leave($__internal_ae3d5ccc1852b0ab01aab2d59c00992054739d2522205419047e6fdfc94d0c7a_prof);

        
        $__internal_972d0dae9c5193c483a4aadfc31a8f30b7239acc6cf888db61f7b27becb7615f->leave($__internal_972d0dae9c5193c483a4aadfc31a8f30b7239acc6cf888db61f7b27becb7615f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "C:\\wamp64\\www\\ProjetPiDev\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\number_widget.html.php");
    }
}
