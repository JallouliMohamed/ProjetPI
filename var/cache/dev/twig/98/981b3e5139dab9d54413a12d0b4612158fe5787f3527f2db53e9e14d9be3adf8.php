<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_f1436766ee8e4529b0d11de669c5abc28238e99cf16e3a19291d8ccc3863b601 extends Twig_Template
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
        $__internal_1560275c90c62696669d6c74767060037873d219050bd19474fa655fccb6b8a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1560275c90c62696669d6c74767060037873d219050bd19474fa655fccb6b8a4->enter($__internal_1560275c90c62696669d6c74767060037873d219050bd19474fa655fccb6b8a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_168b6422af324e349d769e7c5607850800a2e60d10558f1373b4f0f9662ea1cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_168b6422af324e349d769e7c5607850800a2e60d10558f1373b4f0f9662ea1cc->enter($__internal_168b6422af324e349d769e7c5607850800a2e60d10558f1373b4f0f9662ea1cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_1560275c90c62696669d6c74767060037873d219050bd19474fa655fccb6b8a4->leave($__internal_1560275c90c62696669d6c74767060037873d219050bd19474fa655fccb6b8a4_prof);

        
        $__internal_168b6422af324e349d769e7c5607850800a2e60d10558f1373b4f0f9662ea1cc->leave($__internal_168b6422af324e349d769e7c5607850800a2e60d10558f1373b4f0f9662ea1cc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "C:\\wamp64\\www\\ProjetPiDev\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\email_widget.html.php");
    }
}
