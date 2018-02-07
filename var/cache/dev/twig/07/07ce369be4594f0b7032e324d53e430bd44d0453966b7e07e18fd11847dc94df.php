<?php

/* form_table_layout.html.twig */
class __TwigTemplate_4c7c579ffaf263d349b109fe83f2224a9e01ec67b0e37386703b3cceac8c8b88 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "form_table_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'hidden_row' => array($this, 'block_hidden_row'),
                'form_widget_compound' => array($this, 'block_form_widget_compound'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_488983474519dfce9905f8090d54fc5224e3a84b37936f42159fab043f49444f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_488983474519dfce9905f8090d54fc5224e3a84b37936f42159fab043f49444f->enter($__internal_488983474519dfce9905f8090d54fc5224e3a84b37936f42159fab043f49444f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        $__internal_babca53b02deb6dbfa5ee2788e97e89d674133ac977250df35f4881b34e92a4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_babca53b02deb6dbfa5ee2788e97e89d674133ac977250df35f4881b34e92a4b->enter($__internal_babca53b02deb6dbfa5ee2788e97e89d674133ac977250df35f4881b34e92a4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        // line 3
        $this->displayBlock('form_row', $context, $blocks);
        // line 15
        $this->displayBlock('button_row', $context, $blocks);
        // line 24
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 32
        $this->displayBlock('form_widget_compound', $context, $blocks);
        
        $__internal_488983474519dfce9905f8090d54fc5224e3a84b37936f42159fab043f49444f->leave($__internal_488983474519dfce9905f8090d54fc5224e3a84b37936f42159fab043f49444f_prof);

        
        $__internal_babca53b02deb6dbfa5ee2788e97e89d674133ac977250df35f4881b34e92a4b->leave($__internal_babca53b02deb6dbfa5ee2788e97e89d674133ac977250df35f4881b34e92a4b_prof);

    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_7e84f66dfa5cd01b4b09902ec520790b46c0141fbd4a523b7fc9d42857c5e330 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e84f66dfa5cd01b4b09902ec520790b46c0141fbd4a523b7fc9d42857c5e330->enter($__internal_7e84f66dfa5cd01b4b09902ec520790b46c0141fbd4a523b7fc9d42857c5e330_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_323c0a66d2ffe31c6f7f9eda553101763706c2e099691f3c26bb35ed844d8c93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_323c0a66d2ffe31c6f7f9eda553101763706c2e099691f3c26bb35ed844d8c93->enter($__internal_323c0a66d2ffe31c6f7f9eda553101763706c2e099691f3c26bb35ed844d8c93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 4
        echo "<tr>
        <td>";
        // line 6
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label');
        // line 7
        echo "</td>
        <td>";
        // line 9
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 11
        echo "</td>
    </tr>";
        
        $__internal_323c0a66d2ffe31c6f7f9eda553101763706c2e099691f3c26bb35ed844d8c93->leave($__internal_323c0a66d2ffe31c6f7f9eda553101763706c2e099691f3c26bb35ed844d8c93_prof);

        
        $__internal_7e84f66dfa5cd01b4b09902ec520790b46c0141fbd4a523b7fc9d42857c5e330->leave($__internal_7e84f66dfa5cd01b4b09902ec520790b46c0141fbd4a523b7fc9d42857c5e330_prof);

    }

    // line 15
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_964b6f688e415a083e93373b7c0faab68015c3b6b4de9d914dd7e2f2ee1cd2c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_964b6f688e415a083e93373b7c0faab68015c3b6b4de9d914dd7e2f2ee1cd2c4->enter($__internal_964b6f688e415a083e93373b7c0faab68015c3b6b4de9d914dd7e2f2ee1cd2c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_551bfce0b764d8941f58e9acd23c83c626dce4794d6200bdd5d6311bc1da0d65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_551bfce0b764d8941f58e9acd23c83c626dce4794d6200bdd5d6311bc1da0d65->enter($__internal_551bfce0b764d8941f58e9acd23c83c626dce4794d6200bdd5d6311bc1da0d65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 16
        echo "<tr>
        <td></td>
        <td>";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 20
        echo "</td>
    </tr>";
        
        $__internal_551bfce0b764d8941f58e9acd23c83c626dce4794d6200bdd5d6311bc1da0d65->leave($__internal_551bfce0b764d8941f58e9acd23c83c626dce4794d6200bdd5d6311bc1da0d65_prof);

        
        $__internal_964b6f688e415a083e93373b7c0faab68015c3b6b4de9d914dd7e2f2ee1cd2c4->leave($__internal_964b6f688e415a083e93373b7c0faab68015c3b6b4de9d914dd7e2f2ee1cd2c4_prof);

    }

    // line 24
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_a8f2f296ae961c1e438bb77f090477819c0bf84be70657d4ece9c73f3ebef753 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8f2f296ae961c1e438bb77f090477819c0bf84be70657d4ece9c73f3ebef753->enter($__internal_a8f2f296ae961c1e438bb77f090477819c0bf84be70657d4ece9c73f3ebef753_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        $__internal_f8cc8a6d3989d9ed259440b76ac0ba29ae7901f2a71c95485bc903a734fecfbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8cc8a6d3989d9ed259440b76ac0ba29ae7901f2a71c95485bc903a734fecfbd->enter($__internal_f8cc8a6d3989d9ed259440b76ac0ba29ae7901f2a71c95485bc903a734fecfbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 25
        echo "<tr style=\"display: none\">
        <td colspan=\"2\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 28
        echo "</td>
    </tr>";
        
        $__internal_f8cc8a6d3989d9ed259440b76ac0ba29ae7901f2a71c95485bc903a734fecfbd->leave($__internal_f8cc8a6d3989d9ed259440b76ac0ba29ae7901f2a71c95485bc903a734fecfbd_prof);

        
        $__internal_a8f2f296ae961c1e438bb77f090477819c0bf84be70657d4ece9c73f3ebef753->leave($__internal_a8f2f296ae961c1e438bb77f090477819c0bf84be70657d4ece9c73f3ebef753_prof);

    }

    // line 32
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_e8ca6ed4d33e03afdabba0bb9c96d0cbc5b5dd68eb43723af54bca0e6dd9f796 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8ca6ed4d33e03afdabba0bb9c96d0cbc5b5dd68eb43723af54bca0e6dd9f796->enter($__internal_e8ca6ed4d33e03afdabba0bb9c96d0cbc5b5dd68eb43723af54bca0e6dd9f796_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_9cd33905f20ea8d0fadf151ad89b571f0f03d6bb13ccd900378829108c1b803a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cd33905f20ea8d0fadf151ad89b571f0f03d6bb13ccd900378829108c1b803a->enter($__internal_9cd33905f20ea8d0fadf151ad89b571f0f03d6bb13ccd900378829108c1b803a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 33
        echo "<table ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 34
        if ((Symfony\Bridge\Twig\Extension\twig_is_root_form((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form"))) && (twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0))) {
            // line 35
            echo "<tr>
            <td colspan=\"2\">";
            // line 37
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
            // line 38
            echo "</td>
        </tr>";
        }
        // line 41
        $this->displayBlock("form_rows", $context, $blocks);
        // line 42
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        // line 43
        echo "</table>";
        
        $__internal_9cd33905f20ea8d0fadf151ad89b571f0f03d6bb13ccd900378829108c1b803a->leave($__internal_9cd33905f20ea8d0fadf151ad89b571f0f03d6bb13ccd900378829108c1b803a_prof);

        
        $__internal_e8ca6ed4d33e03afdabba0bb9c96d0cbc5b5dd68eb43723af54bca0e6dd9f796->leave($__internal_e8ca6ed4d33e03afdabba0bb9c96d0cbc5b5dd68eb43723af54bca0e6dd9f796_prof);

    }

    public function getTemplateName()
    {
        return "form_table_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  168 => 43,  166 => 42,  164 => 41,  160 => 38,  158 => 37,  155 => 35,  153 => 34,  149 => 33,  140 => 32,  129 => 28,  127 => 27,  124 => 25,  115 => 24,  104 => 20,  102 => 19,  98 => 16,  89 => 15,  78 => 11,  76 => 10,  74 => 9,  71 => 7,  69 => 6,  66 => 4,  57 => 3,  47 => 32,  45 => 24,  43 => 15,  41 => 3,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"form_div_layout.html.twig\" %}

{%- block form_row -%}
    <tr>
        <td>
            {{- form_label(form) -}}
        </td>
        <td>
            {{- form_errors(form) -}}
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock form_row -%}

{%- block button_row -%}
    <tr>
        <td></td>
        <td>
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock button_row -%}

{%- block hidden_row -%}
    <tr style=\"display: none\">
        <td colspan=\"2\">
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock hidden_row -%}

{%- block form_widget_compound -%}
    <table {{ block('widget_container_attributes') }}>
        {%- if form is rootform and errors|length > 0 -%}
        <tr>
            <td colspan=\"2\">
                {{- form_errors(form) -}}
            </td>
        </tr>
        {%- endif -%}
        {{- block('form_rows') -}}
        {{- form_rest(form) -}}
    </table>
{%- endblock form_widget_compound -%}
", "form_table_layout.html.twig", "C:\\wamp64\\www\\ProjetPiDev\\vendor\\symfony\\symfony\\src\\Symfony\\Bridge\\Twig\\Resources\\views\\Form\\form_table_layout.html.twig");
    }
}
