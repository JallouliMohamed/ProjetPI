<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_a0654b23622c230108bc66893b5ef160399ded2c68b732315054e9936a0f07fe extends Twig_Template
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
        $__internal_7837ab0c3a78b150bdc26d3cd6366fc56166eb0ad4492f6628b683adc98bc34b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7837ab0c3a78b150bdc26d3cd6366fc56166eb0ad4492f6628b683adc98bc34b->enter($__internal_7837ab0c3a78b150bdc26d3cd6366fc56166eb0ad4492f6628b683adc98bc34b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_3918e326a41eda1b095e9d5e4417ee43cf60f301ad87fae141013f056a7e4dcf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3918e326a41eda1b095e9d5e4417ee43cf60f301ad87fae141013f056a7e4dcf->enter($__internal_3918e326a41eda1b095e9d5e4417ee43cf60f301ad87fae141013f056a7e4dcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_7837ab0c3a78b150bdc26d3cd6366fc56166eb0ad4492f6628b683adc98bc34b->leave($__internal_7837ab0c3a78b150bdc26d3cd6366fc56166eb0ad4492f6628b683adc98bc34b_prof);

        
        $__internal_3918e326a41eda1b095e9d5e4417ee43cf60f301ad87fae141013f056a7e4dcf->leave($__internal_3918e326a41eda1b095e9d5e4417ee43cf60f301ad87fae141013f056a7e4dcf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "C:\\wamp64\\www\\ProjetPiDev\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_errors.html.php");
    }
}
