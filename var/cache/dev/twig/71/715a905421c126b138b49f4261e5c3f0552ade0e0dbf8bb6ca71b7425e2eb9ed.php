<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_d93f1f00ca8276a9f906eb87a1aaea3ff3fa4956fa843d1d1f3c3762a5e1a1f6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("login.html.twig", "@FOSUser/layout.html.twig", 1);
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
        $__internal_4cd6aaa28b298e49a78168457cae2237516a360ba2cf808d3489fa84bbb6db55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4cd6aaa28b298e49a78168457cae2237516a360ba2cf808d3489fa84bbb6db55->enter($__internal_4cd6aaa28b298e49a78168457cae2237516a360ba2cf808d3489fa84bbb6db55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $__internal_d1f298bb39814a5924eff3c256938ae96f04370495c0931b3f3b0f275379a8c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1f298bb39814a5924eff3c256938ae96f04370495c0931b3f3b0f275379a8c4->enter($__internal_d1f298bb39814a5924eff3c256938ae96f04370495c0931b3f3b0f275379a8c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4cd6aaa28b298e49a78168457cae2237516a360ba2cf808d3489fa84bbb6db55->leave($__internal_4cd6aaa28b298e49a78168457cae2237516a360ba2cf808d3489fa84bbb6db55_prof);

        
        $__internal_d1f298bb39814a5924eff3c256938ae96f04370495c0931b3f3b0f275379a8c4->leave($__internal_d1f298bb39814a5924eff3c256938ae96f04370495c0931b3f3b0f275379a8c4_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_422b3d9a170e56993a5a9afa0428284776f4ac77262f6bb3c98bb9a8d4f3ce29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_422b3d9a170e56993a5a9afa0428284776f4ac77262f6bb3c98bb9a8d4f3ce29->enter($__internal_422b3d9a170e56993a5a9afa0428284776f4ac77262f6bb3c98bb9a8d4f3ce29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2da9ef4fa4a5e6c4d05421b3f350171b439f0022bf84af09cac9d6ea26c0c200 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2da9ef4fa4a5e6c4d05421b3f350171b439f0022bf84af09cac9d6ea26c0c200->enter($__internal_2da9ef4fa4a5e6c4d05421b3f350171b439f0022bf84af09cac9d6ea26c0c200_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_2da9ef4fa4a5e6c4d05421b3f350171b439f0022bf84af09cac9d6ea26c0c200->leave($__internal_2da9ef4fa4a5e6c4d05421b3f350171b439f0022bf84af09cac9d6ea26c0c200_prof);

        
        $__internal_422b3d9a170e56993a5a9afa0428284776f4ac77262f6bb3c98bb9a8d4f3ce29->leave($__internal_422b3d9a170e56993a5a9afa0428284776f4ac77262f6bb3c98bb9a8d4f3ce29_prof);

    }

    // line 34
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5ec0c0cb8ba9be98f7924b7b8cfb1ce9afe9c878625f01a3400daa8a9731c725 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ec0c0cb8ba9be98f7924b7b8cfb1ce9afe9c878625f01a3400daa8a9731c725->enter($__internal_5ec0c0cb8ba9be98f7924b7b8cfb1ce9afe9c878625f01a3400daa8a9731c725_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_ab0befc897e1c16bf1cc0bb071afefe71f0ce7a231e4a07cceffdc30f63997b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab0befc897e1c16bf1cc0bb071afefe71f0ce7a231e4a07cceffdc30f63997b1->enter($__internal_ab0befc897e1c16bf1cc0bb071afefe71f0ce7a231e4a07cceffdc30f63997b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 35
        echo "            ";
        
        $__internal_ab0befc897e1c16bf1cc0bb071afefe71f0ce7a231e4a07cceffdc30f63997b1->leave($__internal_ab0befc897e1c16bf1cc0bb071afefe71f0ce7a231e4a07cceffdc30f63997b1_prof);

        
        $__internal_5ec0c0cb8ba9be98f7924b7b8cfb1ce9afe9c878625f01a3400daa8a9731c725->leave($__internal_5ec0c0cb8ba9be98f7924b7b8cfb1ce9afe9c878625f01a3400daa8a9731c725_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/layout.html.twig";
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
", "@FOSUser/layout.html.twig", "C:\\wamp64\\www\\ProjetPiDev\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\layout.html.twig");
    }
}
