<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_d8bbf82a64c75f31028b970d0e833c49f0bb3447e90cbbdf8e7b2f9ce14e40e4 extends Twig_Template
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
        $__internal_cec0204aeb8965e444e5bc679d39ee08c619c2565ad2a23b682b1b4c33622eb8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cec0204aeb8965e444e5bc679d39ee08c619c2565ad2a23b682b1b4c33622eb8->enter($__internal_cec0204aeb8965e444e5bc679d39ee08c619c2565ad2a23b682b1b4c33622eb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_4feae778cc6044fe4f2fe4d2dee08e6e0984c13e6acc1cac0312ebb28a8de41a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4feae778cc6044fe4f2fe4d2dee08e6e0984c13e6acc1cac0312ebb28a8de41a->enter($__internal_4feae778cc6044fe4f2fe4d2dee08e6e0984c13e6acc1cac0312ebb28a8de41a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_cec0204aeb8965e444e5bc679d39ee08c619c2565ad2a23b682b1b4c33622eb8->leave($__internal_cec0204aeb8965e444e5bc679d39ee08c619c2565ad2a23b682b1b4c33622eb8_prof);

        
        $__internal_4feae778cc6044fe4f2fe4d2dee08e6e0984c13e6acc1cac0312ebb28a8de41a->leave($__internal_4feae778cc6044fe4f2fe4d2dee08e6e0984c13e6acc1cac0312ebb28a8de41a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "C:\\wamp64\\www\\ProjetPiDev\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_row.html.php");
    }
}
