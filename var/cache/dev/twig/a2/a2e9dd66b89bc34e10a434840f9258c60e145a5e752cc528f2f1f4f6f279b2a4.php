<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_ded63a06244dac38f4caf2e3298ac4a45c5293af9901d6cd75d5abceec7ce429 extends Twig_Template
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
        $__internal_28c6313c532162b5616548079fb1cf981cc9d894221159b262aac72f4f9c29eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28c6313c532162b5616548079fb1cf981cc9d894221159b262aac72f4f9c29eb->enter($__internal_28c6313c532162b5616548079fb1cf981cc9d894221159b262aac72f4f9c29eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_ab046e19019b3f551aaae83eefcde9a33848a7987f91c38dc2b39803e4b759de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab046e19019b3f551aaae83eefcde9a33848a7987f91c38dc2b39803e4b759de->enter($__internal_ab046e19019b3f551aaae83eefcde9a33848a7987f91c38dc2b39803e4b759de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_28c6313c532162b5616548079fb1cf981cc9d894221159b262aac72f4f9c29eb->leave($__internal_28c6313c532162b5616548079fb1cf981cc9d894221159b262aac72f4f9c29eb_prof);

        
        $__internal_ab046e19019b3f551aaae83eefcde9a33848a7987f91c38dc2b39803e4b759de->leave($__internal_ab046e19019b3f551aaae83eefcde9a33848a7987f91c38dc2b39803e4b759de_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "C:\\wamp64\\www\\ProjetPiDev\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_options.html.php");
    }
}
