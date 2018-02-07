<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_d547fad0deeda39c521fdfaa7901bbb200b18e123bf57b0818ce44cec12bb378 extends Twig_Template
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
        $__internal_4bed93a55389bda85086532bfa96b374783bb59e7bb709ec30d9a6c92d3e49e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4bed93a55389bda85086532bfa96b374783bb59e7bb709ec30d9a6c92d3e49e2->enter($__internal_4bed93a55389bda85086532bfa96b374783bb59e7bb709ec30d9a6c92d3e49e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_5fbf80935aa743461cf3f66ca50316b8e21855eee9f0e6a2290e838ce01dba41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fbf80935aa743461cf3f66ca50316b8e21855eee9f0e6a2290e838ce01dba41->enter($__internal_5fbf80935aa743461cf3f66ca50316b8e21855eee9f0e6a2290e838ce01dba41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_4bed93a55389bda85086532bfa96b374783bb59e7bb709ec30d9a6c92d3e49e2->leave($__internal_4bed93a55389bda85086532bfa96b374783bb59e7bb709ec30d9a6c92d3e49e2_prof);

        
        $__internal_5fbf80935aa743461cf3f66ca50316b8e21855eee9f0e6a2290e838ce01dba41->leave($__internal_5fbf80935aa743461cf3f66ca50316b8e21855eee9f0e6a2290e838ce01dba41_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "C:\\wamp64\\www\\ProjetPiDev\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_attributes.html.php");
    }
}
