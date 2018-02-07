<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_b05456bab55f98fa9aec2d2469c1431bddf47ae3b15c315e456f5da94854fd04 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("login.html.twig", "FOSUserBundle::layout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "login.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_650c8b2b224df640b1b83a156ac1c04a5a21950942273b0c1776055ac39773f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_650c8b2b224df640b1b83a156ac1c04a5a21950942273b0c1776055ac39773f6->enter($__internal_650c8b2b224df640b1b83a156ac1c04a5a21950942273b0c1776055ac39773f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $__internal_43ef5b5c9e45027396a80ff647bf76e7fcc2bd7d3063ed75b38ea30ff1541fe0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43ef5b5c9e45027396a80ff647bf76e7fcc2bd7d3063ed75b38ea30ff1541fe0->enter($__internal_43ef5b5c9e45027396a80ff647bf76e7fcc2bd7d3063ed75b38ea30ff1541fe0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_650c8b2b224df640b1b83a156ac1c04a5a21950942273b0c1776055ac39773f6->leave($__internal_650c8b2b224df640b1b83a156ac1c04a5a21950942273b0c1776055ac39773f6_prof);

        
        $__internal_43ef5b5c9e45027396a80ff647bf76e7fcc2bd7d3063ed75b38ea30ff1541fe0->leave($__internal_43ef5b5c9e45027396a80ff647bf76e7fcc2bd7d3063ed75b38ea30ff1541fe0_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_40b82083715c5fc0d33720a441e78bd073e548a313df8f4a3a4199ae0ec53c25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40b82083715c5fc0d33720a441e78bd073e548a313df8f4a3a4199ae0ec53c25->enter($__internal_40b82083715c5fc0d33720a441e78bd073e548a313df8f4a3a4199ae0ec53c25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f4a59217831bfec35b1df7fb26028fd499ec69d0cfd3c23c292620f24dffe7c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4a59217831bfec35b1df7fb26028fd499ec69d0cfd3c23c292620f24dffe7c3->enter($__internal_f4a59217831bfec35b1df7fb26028fd499ec69d0cfd3c23c292620f24dffe7c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
    </head>
    <body>
    <div class=\"entry-content\">
        <div>
            ";
        // line 13
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 14
            echo "                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " |
                <a href=\"";
            // line 15
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">
                    ";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                </a>
            ";
        } else {
            // line 19
            echo "                <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
            ";
        }
        // line 21
        echo "        </div>

        ";
        // line 23
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 24
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 25
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 26
                    echo "                    <div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                        ";
                    // line 27
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                    </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 30
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "        ";
        }
        // line 32
        echo "
        <div>
            ";
        // line 34
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 36
        echo "        </div>
    </div>
    </body>
</html>
";
        
        $__internal_f4a59217831bfec35b1df7fb26028fd499ec69d0cfd3c23c292620f24dffe7c3->leave($__internal_f4a59217831bfec35b1df7fb26028fd499ec69d0cfd3c23c292620f24dffe7c3_prof);

        
        $__internal_40b82083715c5fc0d33720a441e78bd073e548a313df8f4a3a4199ae0ec53c25->leave($__internal_40b82083715c5fc0d33720a441e78bd073e548a313df8f4a3a4199ae0ec53c25_prof);

    }

    // line 34
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_22dad609796d0f87f4a7d11e729cbda503b41f7c921aa513bf8645055e8fada3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22dad609796d0f87f4a7d11e729cbda503b41f7c921aa513bf8645055e8fada3->enter($__internal_22dad609796d0f87f4a7d11e729cbda503b41f7c921aa513bf8645055e8fada3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_1f1eb63d0aeb9bab25fd9b97c1029936a4e08f3b2e2a18d11bc48f7f173c53da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f1eb63d0aeb9bab25fd9b97c1029936a4e08f3b2e2a18d11bc48f7f173c53da->enter($__internal_1f1eb63d0aeb9bab25fd9b97c1029936a4e08f3b2e2a18d11bc48f7f173c53da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 35
        echo "            ";
        
        $__internal_1f1eb63d0aeb9bab25fd9b97c1029936a4e08f3b2e2a18d11bc48f7f173c53da->leave($__internal_1f1eb63d0aeb9bab25fd9b97c1029936a4e08f3b2e2a18d11bc48f7f173c53da_prof);

        
        $__internal_22dad609796d0f87f4a7d11e729cbda503b41f7c921aa513bf8645055e8fada3->leave($__internal_22dad609796d0f87f4a7d11e729cbda503b41f7c921aa513bf8645055e8fada3_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 35,  145 => 34,  131 => 36,  129 => 34,  125 => 32,  122 => 31,  116 => 30,  107 => 27,  102 => 26,  97 => 25,  92 => 24,  90 => 23,  86 => 21,  78 => 19,  72 => 16,  68 => 15,  63 => 14,  61 => 13,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'login.html.twig' %}

{% block body %}

<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
    </head>
    <body>
    <div class=\"entry-content\">
        <div>
            {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                {{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }} |
                <a href=\"{{ path('fos_user_security_logout') }}\">
                    {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}
                </a>
            {% else %}
                <a href=\"{{ path('fos_user_security_login') }}\">{{ 'layout.login'|trans({}, 'FOSUserBundle') }}</a>
            {% endif %}
        </div>

        {% if app.request.hasPreviousSession %}
            {% for type, messages in app.session.flashbag.all() %}
                {% for message in messages %}
                    <div class=\"flash-{{ type }}\">
                        {{ message }}
                    </div>
                {% endfor %}
            {% endfor %}
        {% endif %}

        <div>
            {% block fos_user_content %}
            {% endblock fos_user_content %}
        </div>
    </div>
    </body>
</html>
{% endblock %}
", "FOSUserBundle::layout.html.twig", "C:\\wamp64\\www\\ProjetPiDev\\vendor\\friendsofsymfony\\user-bundle/Resources/views/layout.html.twig");
    }
}
