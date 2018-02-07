<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_a32a2300229e65097bb9c052c2988d133c1507631ac9bb906f431e2ec968fcfa extends Twig_Template
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
        $__internal_c42021be29fa11baed0578dd1fd8137bd1dee61e6d923088fb2062039c1928a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c42021be29fa11baed0578dd1fd8137bd1dee61e6d923088fb2062039c1928a7->enter($__internal_c42021be29fa11baed0578dd1fd8137bd1dee61e6d923088fb2062039c1928a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_20ea656eb921eeebdaec22c2ff6b8d1836cdb47184371e91499cf3aa7a47179e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20ea656eb921eeebdaec22c2ff6b8d1836cdb47184371e91499cf3aa7a47179e->enter($__internal_20ea656eb921eeebdaec22c2ff6b8d1836cdb47184371e91499cf3aa7a47179e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_c42021be29fa11baed0578dd1fd8137bd1dee61e6d923088fb2062039c1928a7->leave($__internal_c42021be29fa11baed0578dd1fd8137bd1dee61e6d923088fb2062039c1928a7_prof);

        
        $__internal_20ea656eb921eeebdaec22c2ff6b8d1836cdb47184371e91499cf3aa7a47179e->leave($__internal_20ea656eb921eeebdaec22c2ff6b8d1836cdb47184371e91499cf3aa7a47179e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "C:\\wamp64\\www\\ProjetPiDev\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\reset_widget.html.php");
    }
}
