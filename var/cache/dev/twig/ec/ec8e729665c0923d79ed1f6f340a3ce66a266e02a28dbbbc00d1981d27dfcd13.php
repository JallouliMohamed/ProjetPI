<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_7321a682799f4fdc22a8777b35422ff73062c4d4b308bc852c1ce434b6475982 extends Twig_Template
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
        $__internal_e7bbc1627e4bec001cfa0c14a6b99e5c319adbd15bd1a7805e59dfd41f874e6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7bbc1627e4bec001cfa0c14a6b99e5c319adbd15bd1a7805e59dfd41f874e6c->enter($__internal_e7bbc1627e4bec001cfa0c14a6b99e5c319adbd15bd1a7805e59dfd41f874e6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_ab0b08062a98d663e72b6c3c4e00d68a5d4c242f51960d0f0e090ba91edfc39e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab0b08062a98d663e72b6c3c4e00d68a5d4c242f51960d0f0e090ba91edfc39e->enter($__internal_ab0b08062a98d663e72b6c3c4e00d68a5d4c242f51960d0f0e090ba91edfc39e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
";
        
        $__internal_e7bbc1627e4bec001cfa0c14a6b99e5c319adbd15bd1a7805e59dfd41f874e6c->leave($__internal_e7bbc1627e4bec001cfa0c14a6b99e5c319adbd15bd1a7805e59dfd41f874e6c_prof);

        
        $__internal_ab0b08062a98d663e72b6c3c4e00d68a5d4c242f51960d0f0e090ba91edfc39e->leave($__internal_ab0b08062a98d663e72b6c3c4e00d68a5d4c242f51960d0f0e090ba91edfc39e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
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
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "C:\\wamp64\\www\\ProjetPiDev\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_widget_compound.html.php");
    }
}
