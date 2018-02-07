<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_a45ee52b07c68062bb7c1d25b901ce3826b0aedfe8d86f29e84a4567016cd32e extends Twig_Template
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
        $__internal_06607f296df9728e0386d344ed1589b34503f944eafd44a163ea9d12d46c34ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06607f296df9728e0386d344ed1589b34503f944eafd44a163ea9d12d46c34ca->enter($__internal_06607f296df9728e0386d344ed1589b34503f944eafd44a163ea9d12d46c34ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_6db99132fd84edc43c4efbe81968d5042fed650f2b9941c1f68479e709c53f18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6db99132fd84edc43c4efbe81968d5042fed650f2b9941c1f68479e709c53f18->enter($__internal_6db99132fd84edc43c4efbe81968d5042fed650f2b9941c1f68479e709c53f18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_06607f296df9728e0386d344ed1589b34503f944eafd44a163ea9d12d46c34ca->leave($__internal_06607f296df9728e0386d344ed1589b34503f944eafd44a163ea9d12d46c34ca_prof);

        
        $__internal_6db99132fd84edc43c4efbe81968d5042fed650f2b9941c1f68479e709c53f18->leave($__internal_6db99132fd84edc43c4efbe81968d5042fed650f2b9941c1f68479e709c53f18_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "C:\\wamp64\\www\\ProjetPiDev\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rest.html.php");
    }
}
