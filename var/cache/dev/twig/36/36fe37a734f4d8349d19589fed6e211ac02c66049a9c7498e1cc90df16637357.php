<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_5f766dc1ba623aa00771436ea30ac7826055479f6629570edd362d5ce775847d extends Twig_Template
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
        $__internal_e820c80af9a19ced42ebd51023991d65417ae41f8687ab0733ec37caff82de84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e820c80af9a19ced42ebd51023991d65417ae41f8687ab0733ec37caff82de84->enter($__internal_e820c80af9a19ced42ebd51023991d65417ae41f8687ab0733ec37caff82de84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_b0189eb0d85bf3b3d1f1682e44d7ecf05c7d993131a4ffb940bb58f77483405f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0189eb0d85bf3b3d1f1682e44d7ecf05c7d993131a4ffb940bb58f77483405f->enter($__internal_b0189eb0d85bf3b3d1f1682e44d7ecf05c7d993131a4ffb940bb58f77483405f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_e820c80af9a19ced42ebd51023991d65417ae41f8687ab0733ec37caff82de84->leave($__internal_e820c80af9a19ced42ebd51023991d65417ae41f8687ab0733ec37caff82de84_prof);

        
        $__internal_b0189eb0d85bf3b3d1f1682e44d7ecf05c7d993131a4ffb940bb58f77483405f->leave($__internal_b0189eb0d85bf3b3d1f1682e44d7ecf05c7d993131a4ffb940bb58f77483405f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "C:\\wamp64\\www\\ProjetPiDev\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\integer_widget.html.php");
    }
}
