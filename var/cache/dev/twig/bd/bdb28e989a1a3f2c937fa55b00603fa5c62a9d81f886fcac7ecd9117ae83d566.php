<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_dec466c5d18acebf247e34e08811746c77e4e5360f4531985058bfeaa2425141 extends Twig_Template
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
        $__internal_db4d509e421b2e7d8d00a999a3dc37eecb3baaf23ad8bcccc0072ea7d3817e92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db4d509e421b2e7d8d00a999a3dc37eecb3baaf23ad8bcccc0072ea7d3817e92->enter($__internal_db4d509e421b2e7d8d00a999a3dc37eecb3baaf23ad8bcccc0072ea7d3817e92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_4fbb64abdc7fe43051afd5ceee184eff05d5229cdcb8e57582fbba5f64dc7b12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fbb64abdc7fe43051afd5ceee184eff05d5229cdcb8e57582fbba5f64dc7b12->enter($__internal_4fbb64abdc7fe43051afd5ceee184eff05d5229cdcb8e57582fbba5f64dc7b12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_db4d509e421b2e7d8d00a999a3dc37eecb3baaf23ad8bcccc0072ea7d3817e92->leave($__internal_db4d509e421b2e7d8d00a999a3dc37eecb3baaf23ad8bcccc0072ea7d3817e92_prof);

        
        $__internal_4fbb64abdc7fe43051afd5ceee184eff05d5229cdcb8e57582fbba5f64dc7b12->leave($__internal_4fbb64abdc7fe43051afd5ceee184eff05d5229cdcb8e57582fbba5f64dc7b12_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "C:\\wamp64\\www\\ProjetPiDev\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_enctype.html.php");
    }
}
