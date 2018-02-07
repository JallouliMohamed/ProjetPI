<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_e6289e41785ac8db89ea2a6f75286fe9c2b1fe6d7f478261187483f5f2932dcc extends Twig_Template
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
        $__internal_0e5979068f36338f7ba3c7550a805f5fb3723c6f2908cfb65d3681ef0e27c0a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e5979068f36338f7ba3c7550a805f5fb3723c6f2908cfb65d3681ef0e27c0a1->enter($__internal_0e5979068f36338f7ba3c7550a805f5fb3723c6f2908cfb65d3681ef0e27c0a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_c38b13d54e662767aedb36a2ff86f90f22741623602bf0a4f34ad96b55d97bf4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c38b13d54e662767aedb36a2ff86f90f22741623602bf0a4f34ad96b55d97bf4->enter($__internal_c38b13d54e662767aedb36a2ff86f90f22741623602bf0a4f34ad96b55d97bf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_0e5979068f36338f7ba3c7550a805f5fb3723c6f2908cfb65d3681ef0e27c0a1->leave($__internal_0e5979068f36338f7ba3c7550a805f5fb3723c6f2908cfb65d3681ef0e27c0a1_prof);

        
        $__internal_c38b13d54e662767aedb36a2ff86f90f22741623602bf0a4f34ad96b55d97bf4->leave($__internal_c38b13d54e662767aedb36a2ff86f90f22741623602bf0a4f34ad96b55d97bf4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
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
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "C:\\wamp64\\www\\ProjetPiDev\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\widget_container_attributes.html.php");
    }
}
