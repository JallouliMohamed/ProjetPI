<?php

/* FOSUserBundle:Security:login_content.html.twig */
class __TwigTemplate_cb19697cfd8232aaa3465a10ce10ed2b4f4bfbb533ce4f92026bbb232e6c04ec extends Twig_Template
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
        $__internal_9e3efbd836bc1a46a2220e659f51f2a15a0f6d7f8b2f35b27ed0480bb06d1d57 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e3efbd836bc1a46a2220e659f51f2a15a0f6d7f8b2f35b27ed0480bb06d1d57->enter($__internal_9e3efbd836bc1a46a2220e659f51f2a15a0f6d7f8b2f35b27ed0480bb06d1d57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login_content.html.twig"));

        $__internal_de9d18817a6c559851da26f3d9c48ecfc57158410d1446781527204e2584c6da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de9d18817a6c559851da26f3d9c48ecfc57158410d1446781527204e2584c6da->enter($__internal_de9d18817a6c559851da26f3d9c48ecfc57158410d1446781527204e2584c6da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 4
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 6
        echo "
<form action=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
    <article id=\"post-11\" class=\"post-11 page type-page status-publish hentry\">
        <div class=\"entry-content\">
            <div class=\"tml tml-login\" id=\"theme-my-login\">
    ";
        // line 11
        if ((isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token"))) {
            // line 12
            echo "        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
            echo "\" />
    ";
        }
        // line 14
        echo "
    <label for=\"username\">";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" />

    <label for=\"password\">";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
    <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />

                <div class=\"tml-rememberme-submit-wrap\">
                    <p class=\"tml-rememberme-wrap\">
                    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
                    <label for=\"remember_me\">";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                    </p>
                </div>

    <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
                <ul class=\"tml-action-links\">
                    <li><a href=\"";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo "\" rel=\"nofollow\">Register</a></li>
                    <li><a href=\"../lostpassword/index.html\" rel=\"nofollow\">Lost Password</a></li>
                </ul>
            </div>
        </div>
    </article>
</form>
";
        
        $__internal_9e3efbd836bc1a46a2220e659f51f2a15a0f6d7f8b2f35b27ed0480bb06d1d57->leave($__internal_9e3efbd836bc1a46a2220e659f51f2a15a0f6d7f8b2f35b27ed0480bb06d1d57_prof);

        
        $__internal_de9d18817a6c559851da26f3d9c48ecfc57158410d1446781527204e2584c6da->leave($__internal_de9d18817a6c559851da26f3d9c48ecfc57158410d1446781527204e2584c6da_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 30,  82 => 28,  75 => 24,  66 => 18,  61 => 16,  57 => 15,  54 => 14,  48 => 12,  46 => 11,  39 => 7,  36 => 6,  30 => 4,  28 => 3,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

{% if error %}
    <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
{% endif %}

<form action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\">
    <article id=\"post-11\" class=\"post-11 page type-page status-publish hentry\">
        <div class=\"entry-content\">
            <div class=\"tml tml-login\" id=\"theme-my-login\">
    {% if csrf_token %}
        <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />
    {% endif %}

    <label for=\"username\">{{ 'security.login.username'|trans }}</label>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" required=\"required\" />

    <label for=\"password\">{{ 'security.login.password'|trans }}</label>
    <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />

                <div class=\"tml-rememberme-submit-wrap\">
                    <p class=\"tml-rememberme-wrap\">
                    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
                    <label for=\"remember_me\">{{ 'security.login.remember_me'|trans }}</label>
                    </p>
                </div>

    <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"{{ 'security.login.submit'|trans }}\" />
                <ul class=\"tml-action-links\">
                    <li><a href=\"{{ path('fos_user_registration_register')}}\" rel=\"nofollow\">Register</a></li>
                    <li><a href=\"../lostpassword/index.html\" rel=\"nofollow\">Lost Password</a></li>
                </ul>
            </div>
        </div>
    </article>
</form>
", "FOSUserBundle:Security:login_content.html.twig", "C:\\wamp64\\www\\ProjetPiDev\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Security/login_content.html.twig");
    }
}
