<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_5b38ae81796688ef03d9ccccf2cf7ca0c794007ccdc62429a738ff5e7e75a7a9 extends Twig_Template
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
        $__internal_0d0993ba1e78a26e3a54d7370d7c0e61760b47eebd6d1d6f98bec61fa7062c7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d0993ba1e78a26e3a54d7370d7c0e61760b47eebd6d1d6f98bec61fa7062c7f->enter($__internal_0d0993ba1e78a26e3a54d7370d7c0e61760b47eebd6d1d6f98bec61fa7062c7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_6c7bd8080a674c394404380f435d35b75ba62a4c139784787bc6715d22358256 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c7bd8080a674c394404380f435d35b75ba62a4c139784787bc6715d22358256->enter($__internal_6c7bd8080a674c394404380f435d35b75ba62a4c139784787bc6715d22358256_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_0d0993ba1e78a26e3a54d7370d7c0e61760b47eebd6d1d6f98bec61fa7062c7f->leave($__internal_0d0993ba1e78a26e3a54d7370d7c0e61760b47eebd6d1d6f98bec61fa7062c7f_prof);

        
        $__internal_6c7bd8080a674c394404380f435d35b75ba62a4c139784787bc6715d22358256->leave($__internal_6c7bd8080a674c394404380f435d35b75ba62a4c139784787bc6715d22358256_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "C:\\wamp64\\www\\ProjetPiDev\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\button_row.html.php");
    }
}
