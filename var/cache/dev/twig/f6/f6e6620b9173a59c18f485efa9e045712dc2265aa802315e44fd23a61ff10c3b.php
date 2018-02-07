<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_6c92e0b42a2a05960cef5d73d386c91ad371492542ec05e25d0fa01206ccd916 extends Twig_Template
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
        $__internal_2bf14dfd6b03aeb8d8e7ddc65442495fc1de01fdd394d76080dff0ee05b6e844 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2bf14dfd6b03aeb8d8e7ddc65442495fc1de01fdd394d76080dff0ee05b6e844->enter($__internal_2bf14dfd6b03aeb8d8e7ddc65442495fc1de01fdd394d76080dff0ee05b6e844_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_6ec70d4bfc96365e2b5bb36876ed17eb40b0782693f23ce00cee739d499bec65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ec70d4bfc96365e2b5bb36876ed17eb40b0782693f23ce00cee739d499bec65->enter($__internal_6ec70d4bfc96365e2b5bb36876ed17eb40b0782693f23ce00cee739d499bec65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_2bf14dfd6b03aeb8d8e7ddc65442495fc1de01fdd394d76080dff0ee05b6e844->leave($__internal_2bf14dfd6b03aeb8d8e7ddc65442495fc1de01fdd394d76080dff0ee05b6e844_prof);

        
        $__internal_6ec70d4bfc96365e2b5bb36876ed17eb40b0782693f23ce00cee739d499bec65->leave($__internal_6ec70d4bfc96365e2b5bb36876ed17eb40b0782693f23ce00cee739d499bec65_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "C:\\wamp64\\www\\ProjetPiDev\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_row.html.php");
    }
}
