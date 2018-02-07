<?php

/* ::back.html.twig */
class __TwigTemplate_b8a5df6d637f9039f4c01f19f0035304278b14ac4d4887cfc27a16f26e1249f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'pro' => array($this, 'block_pro'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_447c73f5e70035ab6bb384185cf31ff27260b3f42ad244e2e7ad83df72123ae6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_447c73f5e70035ab6bb384185cf31ff27260b3f42ad244e2e7ad83df72123ae6->enter($__internal_447c73f5e70035ab6bb384185cf31ff27260b3f42ad244e2e7ad83df72123ae6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::back.html.twig"));

        $__internal_095f5aaef5e2968ee523b8140c0c2956321e2897d08372baf2877019763a0ac7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_095f5aaef5e2968ee523b8140c0c2956321e2897d08372baf2877019763a0ac7->enter($__internal_095f5aaef5e2968ee523b8140c0c2956321e2897d08372baf2877019763a0ac7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::back.html.twig"));

        // line 1
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 2
            echo "
<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>Gestion Stagaires - Dashboard</title>

    <link href=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
            echo "\" rel=\"stylesheet\">
    <link href=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/datepicker3.css"), "html", null, true);
            echo "\" rel=\"stylesheet\">
    <link href=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/styles.css"), "html", null, true);
            echo "\" rel=\"stylesheet\">

    <!--Icons-->
    <script src=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/lumino.glyphs.js"), "html", null, true);
            echo "\"></script>

    <!--[if lt IE 9]>

    <![endif]-->

</head>

<body>
<nav class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
    <div class=\"container-fluid\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#sidebar-collapse\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"#\"><span>Gestion Stagaires</span>Admin</a>
            <ul class=\"user-menu\">
                <li class=\"dropdown pull-right\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><svg class=\"glyph stroked male-user\"><use xlink:href=\"#stroked-male-user\"></use></svg> ";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " | <span class=\"caret\"></span></a>
                    <ul class=\"dropdown-menu\" role=\"menu\">
                        <li><a href=\"";
            // line 38
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_profile");
            echo "\"> Profile</a></li>
                        <li><a href=\"#\"><svg class=\"glyph stroked gear\"><use xlink:href=\"#stroked-gear\"></use></svg> Settings</a></li>
                        <li><a href=\"";
            // line 40
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\"><svg class=\"glyph stroked cancel\"><use xlink:href=\"#stroked-cancel\"></use></svg> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Deconnexion", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></li>
                    </ul>
                </li>
            </ul>
        </div>

    </div><!-- /.container-fluid -->
</nav>

<div id=\"sidebar-collapse\" class=\"col-sm-3 col-lg-2 sidebar\">
    <form role=\"search\">
        <div class=\"form-group\">
            <input type=\"text\" class=\"form-control\" placeholder=\"Search\">
        </div>
    </form>
    <ul class=\"nav menu\">
        <li class=\"active\"><a href=\"index.html\"><svg class=\"glyph stroked dashboard-dial\"><use xlink:href=\"#stroked-dashboard-dial\"></use></svg> Dashboard</a></li>
        <li><a href=\"widgets.html\"><svg class=\"glyph stroked calendar\"><use xlink:href=\"#stroked-calendar\"></use></svg> Widgets</a></li>
        <li><a href=\"charts.html\"><svg class=\"glyph stroked line-graph\"><use xlink:href=\"#stroked-line-graph\"></use></svg> Charts</a></li>
        <li><a href=\"tables.html\"><svg class=\"glyph stroked table\"><use xlink:href=\"#stroked-table\"></use></svg> Tables</a></li>
        <li><a href=\"forms.html\"><svg class=\"glyph stroked pencil\"><use xlink:href=\"#stroked-pencil\"></use></svg> Forms</a></li>
        <li><a href=\"panels.html\"><svg class=\"glyph stroked app-window\"><use xlink:href=\"#stroked-app-window\"></use></svg> Alerts &amp; Panels</a></li>
        <li><a href=\"icons.html\"><svg class=\"glyph stroked star\"><use xlink:href=\"#stroked-star\"></use></svg> Icons</a></li>
        <li class=\"parent \">
            <a href=\"#\">
                <span data-toggle=\"collapse\" href=\"#sub-item-1\"><svg class=\"glyph stroked chevron-down\"><use xlink:href=\"#stroked-chevron-down\"></use></svg></span> Dropdown
            </a>
            <ul class=\"children collapse\" id=\"sub-item-1\">
                <li>
                    <a class=\"\" href=\"#\">
                        <svg class=\"glyph stroked chevron-right\"><use xlink:href=\"#stroked-chevron-right\"></use></svg> Sub Item 1
                    </a>
                </li>
                <li>
                    <a class=\"\" href=\"#\">
                        <svg class=\"glyph stroked chevron-right\"><use xlink:href=\"#stroked-chevron-right\"></use></svg> Sub Item 2
                    </a>
                </li>
                <li>
                    <a class=\"\" href=\"#\">
                        <svg class=\"glyph stroked chevron-right\"><use xlink:href=\"#stroked-chevron-right\"></use></svg> Sub Item 3
                    </a>
                </li>
            </ul>
        </li>
        <li role=\"presentation\" class=\"divider\"></li>
        <li><a href=\"login.html\"><svg class=\"glyph stroked male-user\"><use xlink:href=\"#stroked-male-user\"></use></svg> Login Page</a></li>
    </ul>

</div><!--/.sidebar-->

<div class=\"col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main\">
    <div class=\"row\">
        <ol class=\"breadcrumb\">
            <li><a href=\"#\"><svg class=\"glyph stroked home\"><use xlink:href=\"#stroked-home\"></use></svg></a></li>
            <li class=\"active\">Icons</li>
        </ol>
    </div><!--/.row-->
    ";
            // line 98
            $this->displayBlock('pro', $context, $blocks);
            // line 101
            echo "
</div>

<script src=\"";
            // line 104
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-1.11.1.min.js"), "html", null, true);
            echo "\"></script>
<script src=\"";
            // line 105
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
            echo "\"></script>
<script src=\"";
            // line 106
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/chart.min.js"), "html", null, true);
            echo "\"></script>
<script src=\"";
            // line 107
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/chart-data.js"), "html", null, true);
            echo "\"></script>
<script src=\"";
            // line 108
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/easypiechart.js"), "html", null, true);
            echo "\"></script>
<script src=\"";
            // line 109
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/easypiechart-data.js"), "html", null, true);
            echo "\"></script>
<script src=\"";
            // line 110
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap-datepicker.js"), "html", null, true);
            echo "\"></script>
<script>
    \$('#calendar').datepicker({
    });

    !function (\$) {
        \$(document).on(\"click\",\"ul.nav li.parent > a > span.icon\", function(){
            \$(this).find('em:first').toggleClass(\"glyphicon-minus\");
        });
        \$(\".sidebar span.icon\").find('em:first').addClass(\"glyphicon-plus\");
    }(window.jQuery);

    \$(window).on('resize', function () {
        if (\$(window).width() > 768) \$('#sidebar-collapse').collapse('show')
    })
    \$(window).on('resize', function () {
        if (\$(window).width() <= 767) \$('#sidebar-collapse').collapse('hide')
    })
</script>

</body>

</html>


";
        }
        
        $__internal_447c73f5e70035ab6bb384185cf31ff27260b3f42ad244e2e7ad83df72123ae6->leave($__internal_447c73f5e70035ab6bb384185cf31ff27260b3f42ad244e2e7ad83df72123ae6_prof);

        
        $__internal_095f5aaef5e2968ee523b8140c0c2956321e2897d08372baf2877019763a0ac7->leave($__internal_095f5aaef5e2968ee523b8140c0c2956321e2897d08372baf2877019763a0ac7_prof);

    }

    // line 98
    public function block_pro($context, array $blocks = array())
    {
        $__internal_eb5cac1975a52c2e5811b98c2dc518d91c46481cd64a2ab4b27be428c354b93c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb5cac1975a52c2e5811b98c2dc518d91c46481cd64a2ab4b27be428c354b93c->enter($__internal_eb5cac1975a52c2e5811b98c2dc518d91c46481cd64a2ab4b27be428c354b93c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pro"));

        $__internal_e14596809e23f29bf1ddd80ae5c61fefef1ebff5d232c3a465ccce272898b4e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e14596809e23f29bf1ddd80ae5c61fefef1ebff5d232c3a465ccce272898b4e9->enter($__internal_e14596809e23f29bf1ddd80ae5c61fefef1ebff5d232c3a465ccce272898b4e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pro"));

        // line 99
        echo "
";
        
        $__internal_e14596809e23f29bf1ddd80ae5c61fefef1ebff5d232c3a465ccce272898b4e9->leave($__internal_e14596809e23f29bf1ddd80ae5c61fefef1ebff5d232c3a465ccce272898b4e9_prof);

        
        $__internal_eb5cac1975a52c2e5811b98c2dc518d91c46481cd64a2ab4b27be428c354b93c->leave($__internal_eb5cac1975a52c2e5811b98c2dc518d91c46481cd64a2ab4b27be428c354b93c_prof);

    }

    public function getTemplateName()
    {
        return "::back.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 99,  217 => 98,  180 => 110,  176 => 109,  172 => 108,  168 => 107,  164 => 106,  160 => 105,  156 => 104,  151 => 101,  149 => 98,  86 => 40,  81 => 38,  76 => 36,  52 => 15,  46 => 12,  42 => 11,  38 => 10,  28 => 2,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}

<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>Gestion Stagaires - Dashboard</title>

    <link href=\"{{ asset('css/bootstrap.min.css')}}\" rel=\"stylesheet\">
    <link href=\"{{ asset('css/datepicker3.css')}}\" rel=\"stylesheet\">
    <link href=\"{{ asset('css/styles.css')}}\" rel=\"stylesheet\">

    <!--Icons-->
    <script src=\"{{ asset('js/lumino.glyphs.js')}}\"></script>

    <!--[if lt IE 9]>

    <![endif]-->

</head>

<body>
<nav class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
    <div class=\"container-fluid\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#sidebar-collapse\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"#\"><span>Gestion Stagaires</span>Admin</a>
            <ul class=\"user-menu\">
                <li class=\"dropdown pull-right\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><svg class=\"glyph stroked male-user\"><use xlink:href=\"#stroked-male-user\"></use></svg> {{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }} | <span class=\"caret\"></span></a>
                    <ul class=\"dropdown-menu\" role=\"menu\">
                        <li><a href=\"{{ path('admin_profile') }}\"> Profile</a></li>
                        <li><a href=\"#\"><svg class=\"glyph stroked gear\"><use xlink:href=\"#stroked-gear\"></use></svg> Settings</a></li>
                        <li><a href=\"{{ path('fos_user_security_logout') }}\"><svg class=\"glyph stroked cancel\"><use xlink:href=\"#stroked-cancel\"></use></svg> {{ 'Deconnexion'|trans({}, 'FOSUserBundle') }}</a></li>
                    </ul>
                </li>
            </ul>
        </div>

    </div><!-- /.container-fluid -->
</nav>

<div id=\"sidebar-collapse\" class=\"col-sm-3 col-lg-2 sidebar\">
    <form role=\"search\">
        <div class=\"form-group\">
            <input type=\"text\" class=\"form-control\" placeholder=\"Search\">
        </div>
    </form>
    <ul class=\"nav menu\">
        <li class=\"active\"><a href=\"index.html\"><svg class=\"glyph stroked dashboard-dial\"><use xlink:href=\"#stroked-dashboard-dial\"></use></svg> Dashboard</a></li>
        <li><a href=\"widgets.html\"><svg class=\"glyph stroked calendar\"><use xlink:href=\"#stroked-calendar\"></use></svg> Widgets</a></li>
        <li><a href=\"charts.html\"><svg class=\"glyph stroked line-graph\"><use xlink:href=\"#stroked-line-graph\"></use></svg> Charts</a></li>
        <li><a href=\"tables.html\"><svg class=\"glyph stroked table\"><use xlink:href=\"#stroked-table\"></use></svg> Tables</a></li>
        <li><a href=\"forms.html\"><svg class=\"glyph stroked pencil\"><use xlink:href=\"#stroked-pencil\"></use></svg> Forms</a></li>
        <li><a href=\"panels.html\"><svg class=\"glyph stroked app-window\"><use xlink:href=\"#stroked-app-window\"></use></svg> Alerts &amp; Panels</a></li>
        <li><a href=\"icons.html\"><svg class=\"glyph stroked star\"><use xlink:href=\"#stroked-star\"></use></svg> Icons</a></li>
        <li class=\"parent \">
            <a href=\"#\">
                <span data-toggle=\"collapse\" href=\"#sub-item-1\"><svg class=\"glyph stroked chevron-down\"><use xlink:href=\"#stroked-chevron-down\"></use></svg></span> Dropdown
            </a>
            <ul class=\"children collapse\" id=\"sub-item-1\">
                <li>
                    <a class=\"\" href=\"#\">
                        <svg class=\"glyph stroked chevron-right\"><use xlink:href=\"#stroked-chevron-right\"></use></svg> Sub Item 1
                    </a>
                </li>
                <li>
                    <a class=\"\" href=\"#\">
                        <svg class=\"glyph stroked chevron-right\"><use xlink:href=\"#stroked-chevron-right\"></use></svg> Sub Item 2
                    </a>
                </li>
                <li>
                    <a class=\"\" href=\"#\">
                        <svg class=\"glyph stroked chevron-right\"><use xlink:href=\"#stroked-chevron-right\"></use></svg> Sub Item 3
                    </a>
                </li>
            </ul>
        </li>
        <li role=\"presentation\" class=\"divider\"></li>
        <li><a href=\"login.html\"><svg class=\"glyph stroked male-user\"><use xlink:href=\"#stroked-male-user\"></use></svg> Login Page</a></li>
    </ul>

</div><!--/.sidebar-->

<div class=\"col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main\">
    <div class=\"row\">
        <ol class=\"breadcrumb\">
            <li><a href=\"#\"><svg class=\"glyph stroked home\"><use xlink:href=\"#stroked-home\"></use></svg></a></li>
            <li class=\"active\">Icons</li>
        </ol>
    </div><!--/.row-->
    {% block pro %}

{% endblock %}

</div>

<script src=\"{{ asset('js/jquery-1.11.1.min.js')}}\"></script>
<script src=\"{{ asset('js/bootstrap.min.js')}}\"></script>
<script src=\"{{ asset('js/chart.min.js')}}\"></script>
<script src=\"{{ asset('js/chart-data.js')}}\"></script>
<script src=\"{{ asset('js/easypiechart.js')}}\"></script>
<script src=\"{{ asset('js/easypiechart-data.js')}}\"></script>
<script src=\"{{ asset('js/bootstrap-datepicker.js')}}\"></script>
<script>
    \$('#calendar').datepicker({
    });

    !function (\$) {
        \$(document).on(\"click\",\"ul.nav li.parent > a > span.icon\", function(){
            \$(this).find('em:first').toggleClass(\"glyphicon-minus\");
        });
        \$(\".sidebar span.icon\").find('em:first').addClass(\"glyphicon-plus\");
    }(window.jQuery);

    \$(window).on('resize', function () {
        if (\$(window).width() > 768) \$('#sidebar-collapse').collapse('show')
    })
    \$(window).on('resize', function () {
        if (\$(window).width() <= 767) \$('#sidebar-collapse').collapse('hide')
    })
</script>

</body>

</html>


{% endif %}
", "::back.html.twig", "C:\\wamp64\\www\\ProjetPiDev\\app/Resources\\views/back.html.twig");
    }
}
