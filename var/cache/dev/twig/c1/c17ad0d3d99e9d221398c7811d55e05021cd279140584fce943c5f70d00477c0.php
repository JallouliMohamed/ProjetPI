<?php

/* login.html.twig */
class __TwigTemplate_845d1c185e88f4b4cbeaed0ac85c669a449ba1f94476b36f0138a5d007aaf190 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_56dc937e222b8eb0b92611356688e64fb6483235cdccb01bb4b5416cca176699 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56dc937e222b8eb0b92611356688e64fb6483235cdccb01bb4b5416cca176699->enter($__internal_56dc937e222b8eb0b92611356688e64fb6483235cdccb01bb4b5416cca176699_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "login.html.twig"));

        $__internal_3109e5c8194ed624f7f471485d78f9d21bda6ab6fac1aaeee96607b1a8ddb431 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3109e5c8194ed624f7f471485d78f9d21bda6ab6fac1aaeee96607b1a8ddb431->enter($__internal_3109e5c8194ed624f7f471485d78f9d21bda6ab6fac1aaeee96607b1a8ddb431_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "login.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en-US\">

<!-- Mirrored from bright.wpbranch.com/login/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 01 Feb 2018 08:28:47 GMT -->
<!-- Added by HTTrack --><meta http-equiv=\"content-type\" content=\"text/html;charset=UTF-8\" /><!-- /Added by HTTrack -->
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link rel=\"profile\" href=\"http://gmpg.org/xfn/11\">
    <link rel=\"pingback\" href=\"../xmlrpc.php\">

    <title>Log In &#8211; Bright</title>
    <meta name='robots' content='noindex,follow' />
    <link rel='dns-prefetch' href='http://fonts.googleapis.com/' />
    <link rel='dns-prefetch' href='http://s.w.org/' />
    <link rel=\"alternate\" type=\"text/calendar\" title=\"Bright &raquo; iCal Feed\" href=\"../events/indexedf3.html?ical=1\" />
    <script type=\"text/javascript\">
        window._wpemojiSettings = {\"baseUrl\":\"https:\\/\\/s.w.org\\/images\\/core\\/emoji\\/2.3\\/72x72\\/\",\"ext\":\".png\",\"svgUrl\":\"https:\\/\\/s.w.org\\/images\\/core\\/emoji\\/2.3\\/svg\\/\",\"svgExt\":\".svg\",\"source\":{\"concatemoji\":\"http:\\/\\/bright.wpbranch.com\\/wp-includes\\/js\\/wp-emoji-release.min.js?ver=4.9.2\"}};
        !function(a,b,c){function d(a,b){var c=String.fromCharCode;l.clearRect(0,0,k.width,k.height),l.fillText(c.apply(this,a),0,0);var d=k.toDataURL();l.clearRect(0,0,k.width,k.height),l.fillText(c.apply(this,b),0,0);var e=k.toDataURL();return d===e}function e(a){var b;if(!l||!l.fillText)return!1;switch(l.textBaseline=\"top\",l.font=\"600 32px Arial\",a){case\"flag\":return!(b=d([55356,56826,55356,56819],[55356,56826,8203,55356,56819]))&&(b=d([55356,57332,56128,56423,56128,56418,56128,56421,56128,56430,56128,56423,56128,56447],[55356,57332,8203,56128,56423,8203,56128,56418,8203,56128,56421,8203,56128,56430,8203,56128,56423,8203,56128,56447]),!b);case\"emoji\":return b=d([55358,56794,8205,9794,65039],[55358,56794,8203,9794,65039]),!b}return!1}function f(a){var c=b.createElement(\"script\");c.src=a,c.defer=c.type=\"text/javascript\",b.getElementsByTagName(\"head\")[0].appendChild(c)}var g,h,i,j,k=b.createElement(\"canvas\"),l=k.getContext&&k.getContext(\"2d\");for(j=Array(\"flag\",\"emoji\"),c.supports={everything:!0,everythingExceptFlag:!0},i=0;i<j.length;i++)c.supports[j[i]]=e(j[i]),c.supports.everything=c.supports.everything&&c.supports[j[i]],\"flag\"!==j[i]&&(c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&c.supports[j[i]]);c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&!c.supports.flag,c.DOMReady=!1,c.readyCallback=function(){c.DOMReady=!0},c.supports.everything||(h=function(){c.readyCallback()},b.addEventListener?(b.addEventListener(\"DOMContentLoaded\",h,!1),a.addEventListener(\"load\",h,!1)):(a.attachEvent(\"onload\",h),b.attachEvent(\"onreadystatechange\",function(){\"complete\"===b.readyState&&c.readyCallback()})),g=c.source||{},g.concatemoji?f(g.concatemoji):g.wpemoji&&g.twemoji&&(f(g.twemoji),f(g.wpemoji)))}(window,document,window._wpemojiSettings);
    </script>
    <style type=\"text/css\">
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;ar
        height: 1em !important;
            width: 1em !important;
            margin: 0 .07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style>
    <link rel='stylesheet' id='dashicons-css'  href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("wp-includes/css/dashicons.min20fd.css?ver=4.9.2"), "html", null, true);
        echo "\" type='text/css' media='all' />
    <link rel='stylesheet' id='theme-my-login-css'  href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("wp-content/plugins/theme-my-login/theme-my-login9d94.css?ver=6.4.10"), "html", null, true);
        echo "\" type='text/css' media='all' />
    <link rel='stylesheet' id='education-icon-collection-css'  href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("wp-content/themes/bright/assets/css/education-icon-collection5152.css?ver=1.0"), "html", null, true);
        echo "\" type='text/css' media='all' />
    <link rel='stylesheet' id='bbp-default-css'  href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("wp-content/plugins/bbpress/templates/default/css/bbpress01c4.css?ver=2.5.14-6684"), "html", null, true);
        echo "\" type='text/css' media='screen' />
    <link rel='stylesheet' id='contact-form-7-css'  href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("wp-content/plugins/contact-form-7/includes/css/styles20fd.css?ver=4.9.2"), "html", null, true);
        echo "\" type='text/css' media='all' />
    <link rel='stylesheet' id='searchandfilter-css'  href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("wp-content/plugins/search-filter/style68b3.css?ver=1"), "html", null, true);
        echo "\" type='text/css' media='all' />
    <link rel='stylesheet' id='woocommerce-layout-css'  href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("wp-content/plugins/woocommerce/assets/css/woocommerce-layoutc169.css?ver=3.2.6"), "html", null, true);
        echo "\" type='text/css' media='all' />
    <link rel='stylesheet' id='woocommerce-smallscreen-css'  href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("wp-content/plugins/woocommerce/assets/css/woocommerce-smallscreenc169.css?ver=3.2.6"), "html", null, true);
        echo "\" type='text/css' media='only screen and (max-width: 768px)' />
    <link rel='stylesheet' id='woocommerce-general-css'  href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("wp-content/plugins/woocommerce/assets/css/woocommercec169.css?ver=3.2.6"), "html", null, true);
        echo "\" type='text/css' media='all' />
    <link rel='stylesheet' id='course-wishlist-style-css'  href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("wp-content/plugins/learnpress-wishlist/source/wishlist20fd.css?ver=4.9.2"), "html", null, true);
        echo "\" type='text/css' media='all' />
    <link rel='stylesheet' id='bright-style-css'  href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("wp-content/themes/bright/style20fd.css?ver=4.9.2"), "html", null, true);
        echo "\" type='text/css' media='all' />
    <link rel='stylesheet' id='bootstrap-css'  href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("wp-content/themes/bright/css/bootstrap.min7433.css?ver=3.3.7"), "html", null, true);
        echo "\" type='text/css' media='all' />
    <link rel='stylesheet' id='owl-carousel-css'  href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("wp-content/themes/bright/css/owl.carousel3ba1.css?ver=1.3.3"), "html", null, true);
        echo "\" type='text/css' media='all' />
    <link rel='stylesheet' id='font-awesoume-css'  href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("wp-content/themes/bright/assets/css/font-awesome.min4698.css?ver=4.6.3"), "html", null, true);
        echo "\" type='text/css' media='all' />
    <link rel='stylesheet' id='animate-css'  href=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("wp-content/themes/bright/assets/css/animate4698.css?ver=4.6.3"), "html", null, true);
        echo "\" type='text/css' media='all' />
    <link rel='stylesheet' id='bright-main-style-css'  href=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("wp-content/themes/bright/css/main.min5152.css?ver=1.0"), "html", null, true);
        echo "\" type='text/css' media='all' />
    <link rel='stylesheet' id='bright-color-css'  href=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("wp-content/themes/bright/css/color5152.css?ver=1.0"), "html", null, true);
        echo "\" type='text/css' media='all' />
    <link rel='stylesheet' id='bright-custom-css'  href=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("wp-content/themes/bright/css/custom5152.css?ver=1.0"), "html", null, true);
        echo "\" type='text/css' media='all' />
    <style id='bright-custom-inline-css' type='text/css'>
        .logo-wrapper img { max-height: 70px; }.navbar.navbar-bright .affix .logo-wrapper .custom-logo-link img { max-width: 121px; }.navbar.navbar-bright .affix .logo-wrapper .custom-logo-link img { max-height: 70px; }
        .logo-wrapper .custom-logo-link {
            margin-top: 0px;
            margin-bottom: 0px;
        }
        @media (min-width: 768px){
            .navbar.navbar-bright .navbar-nav>li>a {
                padding-top: 25px;
                padding-bottom: 25px;
                padding-left: 20px;
                padding-right: 20px;
            }
        }
        h1, h2, h3, h4, h5, h6,
        .teacher.bright-instructor-content-type-grid .teacher-item .teacher-desc a h3,
        .teacher.bright-instructor-content-type-slider .teacher-item .teacher-desc a h3,
        .courses-wrap .course-detail-wrap .course-content h3 a,
        .bright_vc_row-color-white .ep_sign_up_now h2,
        .bright_vc_row-color-white .ep_sign_up_now h4 {
            color: #212121;
        }
        .footer-widgets {
            padding-top: 75px;
            padding-bottom: 75px;
            background: #22272b;
            color: #aaaaaa;
        }
        .footer-widgets .widget-title {
            color: #ffffff;
        }
        .footer-widgets a,
        .footer-widgets .news-grid-item .news-title a,
        .footer-widgets .teacher-item .teacher-desc h3,
        .footer-widgets .courses-wrap .course-detail-wrap .course-content h3 a {
            color: #aaaaaa;
        }
        .site-info {
            padding-top: 15px;
            padding-bottom: 15px;
            background: #1d2023;
            color: #999;
        }
        .site-info a {
            color: #fff;
        }
        .bright-course-slider .bright-course-item figcaption {
            min-height: 170px;
        }
        .navbar.navbar-bright {
            background: #ffffff;
        }
        body.page .navbar.navbar-bright.header-transparent .site-header-wrapper, body.bright-global-page-header-transparent .navbar.navbar-bright .site-header-wrapper {
            background: rgba(0, 0, 0, 0.7)!important;
        }
        .navbar-default .navbar-nav>li>a {
            color: #656565;
        }
        .navbar-default .navbar-nav>li>a:focus, .navbar-default .navbar-nav>li>a:hover, .navbar-bright .bright-main-menu-wrapper .navbar-nav li.current-menu-ancestor>a {
            color: #ff4f57;
        }
        .navbar-bright .bright-main-menu-wrapper .dropdown-menu li>a:hover {
            color: #ffffff;
        }
        .header-transparent.navbar-bright .navbar-nav>li>a, body.bright-global-page-header-transparent .navbar-bright .navbar-nav>li>a, .logo-wrapper .site-title.site-title-transparent a {
            color: #dadada;
        }
        .header-transparent.navbar-bright .navbar-nav>li>a:hover, body.bright-global-page-header-transparent .navbar-bright .navbar-nav>li>a:hover {
            color: #ffffff;
        }
        .navbar-bright .bright-main-menu-wrapper .dropdown-menu {
            background: #ffffff;
        }
        .navbar-bright .bright-main-menu-wrapper .dropdown-menu li>a {
            color: #656565;
        }
        @media (min-width: 768px){
            .navbar-bright .bright-main-menu-wrapper .dropdown-menu {
                min-width: 260px;
            }
        }
        .bright-page-title-area:before {
            background: rgba(0, 0, 0, 0.7);
        }
        .bright-page-title-area {
            padding-top: 69px;
            padding-bottom: 69px;
        }
        #bbpress-forums,
        #bbpress-forums .bbp-forum-info .bbp-forum-content,
        #bbpress-forums p.bbp-topic-meta,
        .ep_sign_up_now,
        .bright_vc_row-color-white .testimonial-item,
        body {
            color: #444444;
            line-height: 25px;
            font-size: 15px;
        }
        body {
            background: #f3f3f3;
        }
        .bright-pre-header {
            background: #ff4f57;
            color: #ffffff;
        }
        .bright-pre-header a {
            color: #ffffff;
        }
    </style>
    <link rel='stylesheet' id='bright-main-fonts-css'  href='https://fonts.googleapis.com/css?family=Roboto%3A300%2C400%2C400i%2C500%2C500i%2C700%2C900%7CMontserrat%3A300%2C400%2C500%2C600%2C700%2C800%2C900&amp;subset' type='text/css' media='all' />
    <link rel='stylesheet' id='bright-woocommerce-main-css'  href='../wp-content/themes/bright/css/woocommerce-main.min5152.css?ver=1.0' type='text/css' media='all' />
    <link rel='stylesheet' id='learn-press-jalerts-css'  href='../wp-content/plugins/learnpress/assets/css/jalert3ea8.css?ver=2.1.9.6' type='text/css' media='all' />
    <link rel='stylesheet' id='learn-press-style-css'  href='../wp-content/plugins/learnpress/assets/css/learnpress3ea8.css?ver=2.1.9.6' type='text/css' media='all' />

    <script type=\"text/template\" id=\"learn-press-template-block-content\">
        <div id=\"learn-press-block-content\" class=\"popup-block-content\">
            <span></span>
        </div>
    </script><script type='text/javascript'>
        /* <![CDATA[ */
        var wc_add_to_cart_params = {\"ajax_url\":\"\\/wp-admin\\/admin-ajax.php\",\"wc_ajax_url\":\"http:\\/\\/bright.wpbranch.com\\/?wc-ajax=%%endpoint%%\",\"i18n_view_cart\":\"View cart\",\"cart_url\":\"http:\\/\\/bright.wpbranch.com\\/cart\\/\",\"is_cart\":\"\",\"cart_redirect_after_add\":\"no\"};
        /* ]]> */
    </script>

    <script type='text/javascript'>
        /* <![CDATA[ */
        var userSettings = {\"url\":\"\\/\",\"uid\":\"0\",\"time\":\"1517472756\",\"secure\":\"\"};/* ]]> */
    </script>
    <script type='text/javascript' src=\"";
        // line 181
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("wp-admin/load-scripts40cc.php?c=0&amp;load%5B%5D=jquery-core,jquery-migrate,utils&amp;ver=4.9.2"), "html", null, true);
        echo "\"></script>
    <script type='text/javascript' src=\"";
        // line 182
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.minc169.js?ver=3.2.6"), "html", null, true);
        echo "\"></script>
    <script type='text/javascript' src=\"";
        // line 183
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("wp-content/plugins/learnpress-wishlist/source/wishlist20fd.js?ver=4.9.2"), "html", null, true);
        echo "\"></script>
    <script type='text/javascript' src=\"";
        // line 184
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("wp-content/plugins/js_composer/assets/js/vendors/woocommerce-add-to-cart5243.js?ver=5.4.5"), "html", null, true);
        echo "\"></script>
    <link rel='https://api.w.org/' href=\"";
        // line 185
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("wp-json/index.html"), "html", null, true);
        echo "\" />
    <meta name=\"generator\" content=\"WordPress 4.9.2\" />
    <meta name=\"generator\" content=\"WooCommerce 3.2.6\" />
    <link rel='shortlink' href=\"";
        // line 188
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("index5757.html?p=11"), "html", null, true);
        echo "\" />
    <link rel=\"alternate\" type=\"application/json+oembed\" href=\"";
        // line 189
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("wp-json/oembed/1.0/embedc8dd.json?url=http%3A%2F%2Fbright.wpbranch.com%2Flogin%2F"), "html", null, true);
        echo "\" />
    <link rel=\"alternate\" type=\"text/xml+oembed\" href=\"";
        // line 190
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("wp-json/oembed/1.0/embed4548?url=http%3A%2F%2Fbright.wpbranch.com%2Flogin%2F&amp;format=xml"), "html", null, true);
        echo "\" />
    <link rel='dns-prefetch' href='http://fonts.googleapis.com/' />
    <link rel='dns-prefetch' href='http://s.w.org/' />
    <meta name='robots' content='noindex,follow' />
    <link rel=\"icon\" href=\"";
        // line 194
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("wp-content/uploads/2017/08/cropped-university-graduate-hat-1-32x32.png"), "html", null, true);
        echo "\" sizes=\"32x32\" />
    <link rel=\"icon\" href=\"";
        // line 195
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("wp-content/uploads/2017/08/cropped-university-graduate-hat-1-192x192.png"), "html", null, true);
        echo "\" sizes=\"192x192\" />
    <link rel=\"apple-touch-icon-precomposed\" href=\"";
        // line 196
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("wp-content/uploads/2017/08/cropped-university-graduate-hat-1-180x180.png"), "html", null, true);
        echo "\" />
    <meta name=\"msapplication-TileImage\" content=\"http://bright.wpbranch.com/wp-content/uploads/2017/08/cropped-university-graduate-hat-1-270x270.png')}}\" />
    <meta name=\"tec-api-version\" content=\"v1\"><meta name=\"tec-api-origin\" content=\"http://bright.wpbranch.com\"><link rel=\"https://theeventscalendar.com/\" href=\"";
        // line 198
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/wp-json/tribe/events/v1/index.html"), "html", null, true);
        echo "\" />\t<noscript><style>.woocommerce-product-gallery{ opacity: 1 !important; }</style></noscript>
    <!--[if lte IE 9]><link rel=\"stylesheet\" type=\"text/css\" href=\"http://bright.wpbranch.com/wp-content/plugins/js_composer/assets/css/vc_lte_ie9.min.css\" media=\"screen\"><![endif]--><link rel=\"icon\" href=\"";
        // line 199
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/wp-content/uploads/2017/08/cropped-university-graduate-hat-1-32x32.png\" sizes=\"32x32"), "html", null, true);
        echo "\" />
    <link rel=\"icon\" href=\"";
        // line 200
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("wp-content/uploads/2017/08/cropped-university-graduate-hat-1-192x192.png"), "html", null, true);
        echo "\" sizes=\"192x192\" />
    <link rel=\"apple-touch-icon-precomposed\" href=\"";
        // line 201
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("wp-content/uploads/2017/08/cropped-university-graduate-hat-1-180x180.png"), "html", null, true);
        echo "\" />
    <meta name=\"msapplication-TileImage\" content=\"http://bright.wpbranch.com/wp-content/uploads/2017/08/cropped-university-graduate-hat-1-270x270.png\" />
    <noscript><style type=\"text/css\"> .wpb_animate_when_almost_visible { opacity: 1; }</style></noscript></head>

<body class=\"page-template page-template-page-templates page-template-login-register-page page-template-page-templateslogin-register-page-php page page-id-11 wp-custom-logo tribe-no-js bright-page-layout-grid bright-has-page-title bright-no-page-sidebar bright-page-header-default xt-site-loading wpb-js-composer js-comp-ver-5.4.5 vc_responsive\">
<div id=\"page\" class=\"site\">
    <a class=\"skip-link screen-reader-text\" href=\"#content\">Skip to content</a>


    <header id=\"masthead\" class=\"site-header-type-default site-header navbar navbar-default navbar-bright\">
        <div class=\"bright-pre-header bright-pre-header-mobile-disable\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-sm-5 bright-pre-header-item-left\">

                        <div class=\"pull-left\">
                            <i class=\"fa fa-map-marker\" aria-hidden=\"true\"></i> Sydney NSW 2052, Australia\t\t\t\t                </div>
                    </div>
                    <div class=\"col-sm-7 bright-pre-header-item-right text-right\">
                        <div class=\"quick-contacts pull-right\">

                            <span class=\"bright-top-bar-mobile\"><i class=\"fa fa-phone\"></i> <a href=\"tel:+61 2 9385 1000\">+61 2 9385 1000</a></span>
                            <span class=\"bright-top-bar-email\"><i class=\"fa fa-envelope\"></i><a href=\"../cdn-cgi/l/email-protection.html#84eca2a7b5b4b5bfa2a7b5b4bcbfa1b2e7eba1b0b4a2a7bdbcbfa1b3b6ede3a2a7b5b4b0bff0f1a2a7b5b5b4bfa2a7b5b4b1bfa1b3b2a2a7b5b4b5bff6a1b3b7a1b2bda1b3b0fda2a7b0b2bfa2a7b5b4b5bfa1b2b0a1b3b1\">h&#101;l&#108;&#111;&#64;&#98;&#114;&#105;g&#104;&#116;&#117;ni&#118;&#101;&#114;s&#105;&#116;y&#46;&#101;du</a></span>

                            <span><a href=\"";
        // line 225
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
        echo "\"><i class=\"fa fa-user\"></i> Login</a> / <a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo "\">Register</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"site-header-wrapper\" data-spy=\"affix\" data-offset-top=\"50\">
            <div class=\"container\">
                <div class=\"site-header-inner clearfix\">
                    <div class=\"site-branding navbar-header\">
                        <div class=\"logo-wrapper\" itemscope itemtype=\"http://schema.org/Brand\">
                            <a href=\"../index.html\" class=\"custom-logo-link\" rel=\"home\" itemprop=\"url\"><img width=\"300\" height=\"140\" src=\"../wp-content/uploads/2017/08/bright-logo-new.png\" class=\"custom-logo\" alt=\"Bright\" itemprop=\"logo\" /></a>
                        </div>
                    </div><!-- .site-branding -->

                    <div class=\"header-search pull-right hidden-xs\">
                        <a class=\"open-search\">
                            <i class=\"fa fa-search\"></i>
                        </a>
                    </div>
                    <form class=\"full-search\" role=\"search\" method=\"get\" action=\"http://bright.wpbranch.com/\">
                        <div class=\"container\">
                            <div class=\"row\">
                                <input class=\"form-control\" type=\"search\" placeholder=\"Search\" value=\"\" name=\"s\">
                                <a class=\"close-search\">
\t\t\t\t\t                  \t<span class=\"fa fa-times\">
\t\t\t\t\t                  \t</span>
                                </a>
                            </div>
                        </div>
                    </form>

                    <div class=\"bright-main-menu-wrapper\">
                        <div id=\"bright-site-navigation\" class=\"collapse navbar-collapse\"><ul id=\"menu-main-menu\" class=\"nav navbar-nav navbar-right bright-main-menu bright-megamenu bright-menu-has-search bright-menu-no-profile\"><li id=\"menu-item-4527\" class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-has-children menu-item-4527 dropdown\"><a title=\"Home\" href=\"../index.html\" class=\"dropdown-toggle\" aria-haspopup=\"true\">Home <span class=\"fa fa-angle-down\"></span></a>
                                    <ul role=\"menu\" class=\" dropdown-menu\">
                                        <li id=\"menu-item-4148\" class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-4148\"><a title=\"Home 1 (University)\" href=\"../index.html\">Home 1 (University)</a></li>
                                        <li id=\"menu-item-4417\" class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-4417\"><a title=\"Home 2 (LMS)\" href=\"../home-2/index.html\">Home 2 (LMS)</a></li>
                                        <li id=\"menu-item-5107\" class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-5107\"><a title=\"Home 3 (Minimal)\" href=\"../home-3/index.html\">Home 3 (Minimal)</a></li>
                                    </ul>
                                </li>
                                <li id=\"menu-item-4202\" class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-4202 dropdown\"><a title=\"Courses\" href=\"../all-courses/index.html\" class=\"dropdown-toggle\" aria-haspopup=\"true\">Courses <span class=\"fa fa-angle-down\"></span></a>
                                    <ul role=\"menu\" class=\" dropdown-menu\">
                                        <li id=\"menu-item-4206\" class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-4206\"><a title=\"Courses Grid\" href=\"../courses-grid/index.html\">Courses Grid</a></li>
                                        <li id=\"menu-item-4205\" class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-4205\"><a title=\"Courses Slider\" href=\"../courses-slider/index.html\">Courses Slider</a></li>
                                        <li id=\"menu-item-4204\" class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-4204\"><a title=\"Courses List\" href=\"../courses-list/index.html\">Courses List</a></li>
                                        <li id=\"menu-item-4454\" class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-4454\"><a title=\"Course Details\" href=\"../courses/become-a-php-master-and-make-money-fast/index.html\">Course Details</a></li>
                                        <li id=\"menu-item-4569\" class=\"menu-item menu-item-type-taxonomy menu-item-object-course_category menu-item-4569\"><a title=\"Course Category\" href=\"../course-category/bachelors-programs/index.html\">Course Category</a></li>
                                        <li id=\"menu-item-4575\" class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-4575\"><a title=\"Our Teachers\" href=\"../our-teachers/index.html\">Our Teachers</a></li>
                                    </ul>
                                </li>
                                <li id=\"menu-item-4124\" class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-4124 dropdown\"><a title=\"Pages\" href=\"#\" class=\"dropdown-toggle\" aria-haspopup=\"true\">Pages <span class=\"fa fa-angle-down\"></span></a>
                                    <ul role=\"menu\" class=\" dropdown-menu\">
                                        <li id=\"menu-item-4127\" class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-4127 dropdown-submenu\"><a title=\"About\" href=\"../about/index.html\">About</a>
                                            <ul role=\"menu\" class=\" dropdown-menu\">
                                                <li id=\"menu-item-5109\" class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-5109\"><a title=\"About 1\" href=\"../about/index.html\">About 1</a></li>
                                                <li id=\"menu-item-5108\" class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-5108\"><a title=\"About 2\" href=\"../about-2/index.html\">About 2</a></li>
                                            </ul>
                                        </li>
                                        <li id=\"menu-item-4120\" class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-4120\"><a title=\"Our Gallery\" href=\"../our-gallery/index.html\">Our Gallery</a></li>
                                        <li id=\"menu-item-5111\" class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-5111\"><a title=\"Album\" href=\"../album/index.html\">Album</a></li>
                                        <li id=\"menu-item-5110\" class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-5110\"><a title=\"Notice\" href=\"../notice/index.html\">Notice</a></li>
                                        <li id=\"menu-item-4137\" class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-4137\"><a title=\"FAQ\" href=\"../faq/index.html\">FAQ</a></li>
                                        <li id=\"menu-item-4873\" class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-4873 dropdown-submenu\"><a title=\"bbPress Forums\" href=\"../forums/index.html\">bbPress Forums</a>
                                            <ul role=\"menu\" class=\" dropdown-menu\">
                                                <li id=\"menu-item-4874\" class=\"menu-item menu-item-type-post_type menu-item-object-forum menu-item-4874\"><a title=\"Single Forum\" href=\"../forums/forum/test-forum-forum-with-one-topic-with-loads-of-replies-for-reply-pagination/index.html\">Single Forum</a></li>
                                                <li id=\"menu-item-4875\" class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-4875\"><a title=\"Single Topic\" href=\"../forums/topic/test-topic-with-loads-of-replies/index.html\">Single Topic</a></li>
                                            </ul>
                                        </li>
                                        <li id=\"menu-item-4138\" class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-4138\"><a title=\"404\" href=\"../404.html\">404</a></li>
                                    </ul>
                                </li>
                                <li id=\"menu-item-4159\" class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-4159 dropdown\"><a title=\"Events\" href=\"../events/index.html\" class=\"dropdown-toggle\" aria-haspopup=\"true\">Events <span class=\"fa fa-angle-down\"></span></a>
                                    <ul role=\"menu\" class=\" dropdown-menu\">
                                        <li id=\"menu-item-4157\" class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-4157\"><a title=\"Events Grid\" href=\"../events-grid/index.html\">Events Grid</a></li>
                                        <li id=\"menu-item-4158\" class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-4158\"><a title=\"Events Slider\" href=\"../events-slider/index.html\">Events Slider</a></li>
                                    </ul>
                                </li>
                                <li id=\"menu-item-4867\" class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-4867 dropdown\"><a title=\"Shop\" href=\"../shop/index.html\" class=\"dropdown-toggle\" aria-haspopup=\"true\">Shop <span class=\"fa fa-angle-down\"></span></a>
                                    <ul role=\"menu\" class=\" dropdown-menu\">
                                        <li id=\"menu-item-4868\" class=\"menu-item menu-item-type-post_type menu-item-object-product menu-item-4868\"><a title=\"Single Product\" href=\"../product/patient-ninja/index.html\">Single Product</a></li>
                                        <li id=\"menu-item-4869\" class=\"menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-4869\"><a title=\"Product Category\" href=\"../product-category/clothing/index.html\">Product Category</a></li>
                                        <li id=\"menu-item-4872\" class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-4872\"><a title=\"Account\" href=\"../my-account/index.html\">Account</a></li>
                                    </ul>
                                </li>
                                <li id=\"menu-item-4149\" class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-4149 dropdown\"><a title=\"Blog\" href=\"../blog/index.html\" class=\"dropdown-toggle\" aria-haspopup=\"true\">Blog <span class=\"fa fa-angle-down\"></span></a>
                                    <ul role=\"menu\" class=\" dropdown-menu\">
                                        <li id=\"menu-item-4568\" class=\"menu-item menu-item-type-post_type menu-item-object-post menu-item-4568\"><a title=\"Blog Single\" href=\"../how-to-improve-your-communication-skill/index.html\">Blog Single</a></li>
                                        <li id=\"menu-item-4566\" class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-4566\"><a title=\"Blog Author\" href=\"../author/zabid/index.html\">Blog Author</a></li>
                                        <li id=\"menu-item-4567\" class=\"menu-item menu-item-type-taxonomy menu-item-object-category menu-item-4567\"><a title=\"Blog Category\" href=\"../category/programming/index.html\">Blog Category</a></li>
                                    </ul>
                                </li>
                                <li id=\"menu-item-4141\" class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-4141\"><a title=\"Contact\" href=\"../contact/index.html\">Contact</a></li>
                            </ul></div>\t\t\t\t\t\t</div>


                    <div class=\"bright-mobile-menu-wrapper\">
                        <ul id=\"primary-menu\" class=\"bright-mobile-menu\"><li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-has-children menu-item-4527\"><a href=\"../index.html\">Home</a>
                                <ul class=\"sub-menu\">
                                    <li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-4148\"><a href=\"../index.html\">Home 1 (University)</a></li>
                                    <li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-4417\"><a href=\"../home-2/index.html\">Home 2 (LMS)</a></li>
                                    <li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-5107\"><a href=\"../home-3/index.html\">Home 3 (Minimal)</a></li>
                                </ul>
                            </li>
                            <li class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-4202\"><a href=\"../all-courses/index.html\">Courses</a>
                                <ul class=\"sub-menu\">
                                    <li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-4206\"><a href=\"../courses-grid/index.html\">Courses Grid</a></li>
                                    <li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-4205\"><a href=\"../courses-slider/index.html\">Courses Slider</a></li>
                                    <li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-4204\"><a href=\"../courses-list/index.html\">Courses List</a></li>
                                    <li class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-4454\"><a href=\"../courses/become-a-php-master-and-make-money-fast/index.html\">Course Details</a></li>
                                    <li class=\"menu-item menu-item-type-taxonomy menu-item-object-course_category menu-item-4569\"><a href=\"../course-category/bachelors-programs/index.html\">Course Category</a></li>
                                    <li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-4575\"><a href=\"../our-teachers/index.html\">Our Teachers</a></li>
                                </ul>
                            </li>
                            <li class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-4124\"><a href=\"#\">Pages</a>
                                <ul class=\"sub-menu\">
                                    <li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-4127\"><a href=\"../about/index.html\">About</a>
                                        <ul class=\"sub-menu\">
                                            <li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-5109\"><a href=\"../about/index.html\">About 1</a></li>
                                            <li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-5108\"><a href=\"../about-2/index.html\">About 2</a></li>
                                        </ul>
                                    </li>
                                    <li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-4120\"><a href=\"../our-gallery/index.html\">Our Gallery</a></li>
                                    <li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-5111\"><a href=\"../album/index.html\">Album</a></li>
                                    <li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-5110\"><a href=\"../notice/index.html\">Notice</a></li>
                                    <li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-4137\"><a href=\"../faq/index.html\">FAQ</a></li>
                                    <li class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-4873\"><a href=\"../forums/index.html\">bbPress Forums</a>
                                        <ul class=\"sub-menu\">
                                            <li class=\"menu-item menu-item-type-post_type menu-item-object-forum menu-item-4874\"><a href=\"../forums/forum/test-forum-forum-with-one-topic-with-loads-of-replies-for-reply-pagination/index.html\">Single Forum</a></li>
                                            <li class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-4875\"><a href=\"../forums/topic/test-topic-with-loads-of-replies/index.html\">Single Topic</a></li>
                                        </ul>
                                    </li>
                                    <li class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-4138\"><a href=\"../404.html\">404</a></li>
                                </ul>
                            </li>
                            <li class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-4159\"><a href=\"../events/index.html\">Events</a>
                                <ul class=\"sub-menu\">
                                    <li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-4157\"><a href=\"../events-grid/index.html\">Events Grid</a></li>
                                    <li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-4158\"><a href=\"../events-slider/index.html\">Events Slider</a></li>
                                </ul>
                            </li>
                            <li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-4867\"><a href=\"../shop/index.html\">Shop</a>
                                <ul class=\"sub-menu\">
                                    <li class=\"menu-item menu-item-type-post_type menu-item-object-product menu-item-4868\"><a href=\"../product/patient-ninja/index.html\">Single Product</a></li>
                                    <li class=\"menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-4869\"><a href=\"../product-category/clothing/index.html\">Product Category</a></li>
                                    <li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-4872\"><a href=\"../my-account/index.html\">Account</a></li>
                                </ul>
                            </li>
                            <li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-4149\"><a href=\"../blog/index.html\">Blog</a>
                                <ul class=\"sub-menu\">
                                    <li class=\"menu-item menu-item-type-post_type menu-item-object-post menu-item-4568\"><a href=\"../how-to-improve-your-communication-skill/index.html\">Blog Single</a></li>
                                    <li class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-4566\"><a href=\"../author/zabid/index.html\">Blog Author</a></li>
                                    <li class=\"menu-item menu-item-type-taxonomy menu-item-object-category menu-item-4567\"><a href=\"../category/programming/index.html\">Blog Category</a></li>
                                </ul>
                            </li>
                            <li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-4141\"><a href=\"../contact/index.html\">Contact</a></li>
                        </ul>\t\t\t\t\t\t</div>



                </div>
            </div>
        </div>
    </header><!-- #masthead -->

    <div class=\"bright-page-title-area\">
        <div class=\"bright-page-title\">
            <div class=\"container\">
                <h1 class=\"entry-title\">Log In</h1>
            </div>
        </div>
        <div class=\"bright-breadcrumb-wrapper\">
            <div class=\"container\">
                <nav class=\"breadcrumb-trail breadcrumbs\"><div class=\"bright-breadcrumb\"><ul class=\"trail-items\"><li class=\"trail-item trail-begin\"><a href=\"../index.html\" rel=\"home\"><span>Home</span></a></li><li class=\"trail-item trail-end\"><span>Log In</span></li></ul></div></nav>\t\t\t\t\t\t\t</div>
        </div>
    </div>

    <div id=\"content\" class=\"site-content container\">
        <div class=\"bright-main-content-inner\">

            <div id=\"primary\" class=\"content-area col-md-6 col-md-offset-3\">
                <main id=\"main\" class=\"site-main\">
                    <article id=\"post-11\" class=\"post-11 page type-page status-publish hentry\">
                    ";
        // line 407
        $this->displayBlock('body', $context, $blocks);
        // line 409
        echo "

</article>
                </main><!-- #main -->
            </div><!-- #primary -->

        </div>
    </div><!-- #content -->

    <footer id=\"colophon\" class=\"site-footer\">
        <div class=\"footer-widgets\">
            <div class=\"container\">
                <div id=\"footer-wrapper\">
                    <div class=\"row\">
                        <div id=\"text-2\" class=\"col-md-3 col-sm-6 col-xs-12 widget widget_text\"><h4 class=\"widget-title footer-widget-title\">Contact Info</h4>\t\t\t<div class=\"textwidget\"><p>A powerhouse of cutting-edge education, research &amp; teaching in The World</p>
                                <ul class=\"address\">
                                    <li><i class=\"fa fa-home\"></i> Sydney NSW 2052, Australia</li>
                                    <li><i class=\"fa fa-phone\"></i> +61 2 9385 1000</li>
                                    <li><i class=\"fa fa-envelope\"></i> <a href=\"../cdn-cgi/l/email-protection.html\" class=\"__cf_email__\" data-cfemail=\"d0b8b5bcbcbf90b2a2b9b7b8a4a5beb9a6b5a2a3b9a4a9feb5b4a5\">[email&#160;protected]</a></li>
                                </ul>
                            </div>
                        </div><div id=\"bright_blog_post_list_widget-3\" class=\"col-md-3 col-sm-6 col-xs-12 widget widget_bright_blog_post_list_widget\"><h4 class=\"widget-title footer-widget-title\">Latest News</h4>
                            <div class=\"bright-post-list slider-nav-true\" data-autoplay=\"true\" data-items=\"2\" data-desktopsmall=\"2\" data-tablet=\"2\" data-mobile=\"1\" data-navigation=\"true\" data-pagination=\"false\" data-direction=\"false\">
                                <div class=\" post-2756 post type-post status-publish format-standard has-post-thumbnail hentry category-online-education category-uncategorized tag-online-courses tag-study\">

                                    <div class=\"news-grid-item\">
                                        <div class=\"news-grid-small-img\">
                                            <div class=\"row\">
                                                <div class=\"col-xs-4\">
                                                    <a href=\"../how-to-study-online-courses-effectively/index.html\">
                                                        <img width=\"300\" height=\"300\" src=\"../wp-content/uploads/2017/07/study-300x300.jpg\" class=\"attachment-bright-course-thumb-small size-bright-course-thumb-small wp-post-image\" alt=\"How to Study Online Courses Effectively\" srcset=\"http://bright.wpbranch.com/wp-content/uploads/2017/07/study-300x300.jpg 300w, http://bright.wpbranch.com/wp-content/uploads/2017/07/study-150x150.jpg 150w, http://bright.wpbranch.com/wp-content/uploads/2017/07/study-180x180.jpg 180w, http://bright.wpbranch.com/wp-content/uploads/2017/07/study-600x600.jpg 600w, http://bright.wpbranch.com/wp-content/uploads/2017/07/study-480x480.jpg 480w\" sizes=\"(max-width: 300px) 100vw, 300px\" />\t\t\t\t\t\t\t\t\t</a>
                                                </div>
                                                <div class=\"col-xs-8\">
                                                    <div class=\"news-content\">
                                                        <h3 class=\"news-title\"><a href=\"../how-to-study-online-courses-effectively/index.html\">How to Study Online Courses Effectively</a></h3>
                                                        <div class=\"meta\">
                                                            <span class=\"meta-part\"><i class=\"fa fa-calendar-o\"></i> November 15, 2016</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\" post-1932 post type-post status-publish format-standard has-post-thumbnail hentry category-uncategorized category-university tag-online-courses tag-study\">

                                    <div class=\"news-grid-item\">
                                        <div class=\"news-grid-small-img\">
                                            <div class=\"row\">
                                                <div class=\"col-xs-4\">
                                                    <a href=\"../how-to-learn-a-foreign-language-in-3-steps/index.html\">
                                                        <img width=\"300\" height=\"300\" src=\"../wp-content/uploads/2017/07/student-2052868_1280-300x300.jpg\" class=\"attachment-bright-course-thumb-small size-bright-course-thumb-small wp-post-image\" alt=\"How to Learn a Foreign Language in 3 Steps\" srcset=\"http://bright.wpbranch.com/wp-content/uploads/2017/07/student-2052868_1280-300x300.jpg 300w, http://bright.wpbranch.com/wp-content/uploads/2017/07/student-2052868_1280-150x150.jpg 150w, http://bright.wpbranch.com/wp-content/uploads/2017/07/student-2052868_1280-180x180.jpg 180w, http://bright.wpbranch.com/wp-content/uploads/2017/07/student-2052868_1280-600x600.jpg 600w, http://bright.wpbranch.com/wp-content/uploads/2017/07/student-2052868_1280-480x480.jpg 480w\" sizes=\"(max-width: 300px) 100vw, 300px\" />\t\t\t\t\t\t\t\t\t</a>
                                                </div>
                                                <div class=\"col-xs-8\">
                                                    <div class=\"news-content\">
                                                        <h3 class=\"news-title\"><a href=\"../how-to-learn-a-foreign-language-in-3-steps/index.html\">How to Learn a Foreign Language in 3 Steps</a></h3>
                                                        <div class=\"meta\">
                                                            <span class=\"meta-part\"><i class=\"fa fa-calendar-o\"></i> January 11, 2017</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><div id=\"bright_course_list_widget-4\" class=\"col-md-3 col-sm-6 col-xs-12 widget widget_bright_course_list_widget\"><h4 class=\"widget-title footer-widget-title\">Course List</h4>\t\t\t\t\t\t<div class=\"bright-course-list slider-nav-true\" data-autoplay=\"true\" data-loop=\"false\" data-items=\"3\" data-desktopsmall=\"3\" data-tablet=\"2\" data-mobile=\"1\" data-navigation=\"true\" data-pagination=\"false\" data-direction=\"false\">
                                <div class=\"bright-course-item  bright-course-price-on bright-course-enroll-btn-on bright-course-students-on bright-course-review-on bright-show-course-meta- post-4464 lp_course type-lp_course status-publish has-post-thumbnail hentry course_category-bachelors-programs course\">

                                    <div class=\"courses-wrap\">

                                        <div class=\"bright-course-details\">
                                            <div class=\"course-detail-wrap\">

                                                <div class=\"course-content\">
                                                    <h3>
                                                        <a href=\"../courses/health-sciences/index.html\">Health Sciences</a>
                                                    </h3>


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"bright-course-item  bright-course-price-on bright-course-enroll-btn-on bright-course-students-on bright-course-review-on bright-show-course-meta- post-1910 lp_course type-lp_course status-publish has-post-thumbnail hentry course_category-backend-programming course_category-web-development course_tag-introduction-to-javascript course\">

                                    <div class=\"courses-wrap\">

                                        <div class=\"bright-course-details\">
                                            <div class=\"course-detail-wrap\">

                                                <div class=\"course-content\">
                                                    <h3>
                                                        <a href=\"../courses/introduction-to-javascript/index.html\">Advance Javascript &#8211; ES6</a>
                                                    </h3>


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"bright-course-item  bright-course-price-on bright-course-enroll-btn-on bright-course-students-on bright-course-review-on bright-show-course-meta- post-1940 lp_course type-lp_course status-publish has-post-thumbnail hentry course_category-apps-development course_tag-introduction-to-javascript course\">

                                    <div class=\"courses-wrap\">

                                        <div class=\"bright-course-details\">
                                            <div class=\"course-detail-wrap\">

                                                <div class=\"course-content\">
                                                    <h3>
                                                        <a href=\"../courses/android-n-app-development-with-java/index.html\">Android App Development</a>
                                                    </h3>


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"bright-course-item  bright-course-price-on bright-course-enroll-btn-on bright-course-students-on bright-course-review-on bright-show-course-meta- post-1996 lp_course type-lp_course status-publish has-post-thumbnail hentry course_category-graphic-design course\">

                                    <div class=\"courses-wrap\">

                                        <div class=\"bright-course-details\">
                                            <div class=\"course-detail-wrap\">

                                                <div class=\"course-content\">
                                                    <h3>
                                                        <a href=\"";
        // line 539
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/courses/advanced-photoshop-skills/index.html"), "html", null, true);
        echo "\">Photoshop Design Like A PRO</a>
                                                    </h3>


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"bright-course-item  bright-course-price-on bright-course-enroll-btn-on bright-course-students-on bright-course-review-on bright-show-course-meta- post-2007 lp_course type-lp_course status-publish has-post-thumbnail hentry course_category-web-development course_category-wordpress course\">

                                    <div class=\"courses-wrap\">

                                        <div class=\"bright-course-details\">
                                            <div class=\"course-detail-wrap\">

                                                <div class=\"course-content\">
                                                    <h3>
                                                        <a href=\"";
        // line 557
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/courses/wordpress-for-beginners/index.html"), "html", null, true);
        echo "\">WordPress for Intermediate</a>
                                                    </h3>


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"bright-course-item  bright-course-price-on bright-course-enroll-btn-on bright-course-students-on bright-course-review-on bright-show-course-meta- post-2013 lp_course type-lp_course status-publish has-post-thumbnail hentry course_category-apps-development course\">

                                    <div class=\"courses-wrap\">

                                        <div class=\"bright-course-details\">
                                            <div class=\"course-detail-wrap\">

                                                <div class=\"course-content\">
                                                    <h3>
                                                        <a href=\"";
        // line 575
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/courses/ios-app-development-with-swift/index.html"), "html", null, true);
        echo "\">iOS App Development with Swift</a>
                                                    </h3>


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><div id=\"bright_theme_gallery_widget-3\" class=\"col-md-3 col-sm-6 col-xs-12 widget widget_bright_theme_gallery_widget\"><h4 class=\"widget-title footer-widget-title\">Image Gallery</h4>
                            <div class=\"bright-portfolio row\">



                                <div class=\"portfolio-list\">

                                    <div class=\"mix col-md-4 col-sm-4 col-xs-4 post-3368 bright_gallery type-bright_gallery status-publish has-post-thumbnail hentry bright_gallery_cat-branding bright_gallery_cat-business\">
                                        <div class=\"portfolio-item\">
                                            <div class=\"portfolio-img\">
                                                <a class=\"lightbox\" href=\"";
        // line 595
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("wp-content/uploads/2017/06/img1.jpg"), "html", null, true);
        echo "\"><img width=\"462\" height=\"380\" src=\"../wp-content/uploads/2017/06/img1.jpg\" class=\"attachment-bright-gallery-thumb size-bright-gallery-thumb wp-post-image\" alt=\"One\" srcset=\"http://bright.wpbranch.com/wp-content/uploads/2017/06/img1.jpg 462w, http://bright.wpbranch.com/wp-content/uploads/2017/06/img1-300x247.jpg 300w\" sizes=\"(max-width: 462px) 100vw, 462px\" /></a>
                                            </div>

                                        </div>
                                    </div>
                                    <div class=\"mix col-md-4 col-sm-4 col-xs-4 post-3370 bright_gallery type-bright_gallery status-publish has-post-thumbnail hentry bright_gallery_cat-blog bright_gallery_cat-branding\">
                                        <div class=\"portfolio-item\">
                                            <div class=\"portfolio-img\">
                                                <a class=\"lightbox\" href=\"";
        // line 603
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("wp-content/uploads/2017/06/img2.jpg"), "html", null, true);
        echo "\"><img width=\"462\" height=\"380\" src=\"../wp-content/uploads/2017/06/img2.jpg\" class=\"attachment-bright-gallery-thumb size-bright-gallery-thumb wp-post-image\" alt=\"Two\" srcset=\"http://bright.wpbranch.com/wp-content/uploads/2017/06/img2.jpg 462w, http://bright.wpbranch.com/wp-content/uploads/2017/06/img2-300x247.jpg 300w\" sizes=\"(max-width: 462px) 100vw, 462px\" /></a>
                                            </div>

                                        </div>
                                    </div>
                                    <div class=\"mix col-md-4 col-sm-4 col-xs-4 post-3371 bright_gallery type-bright_gallery status-publish has-post-thumbnail hentry bright_gallery_cat-business bright_gallery_cat-design\">
                                        <div class=\"portfolio-item\">
                                            <div class=\"portfolio-img\">
                                                <a class=\"lightbox\" href=\"";
        // line 611
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("wp-content/uploads/2017/06/img3.jpg"), "html", null, true);
        echo "\"><img width=\"462\" height=\"380\" src=\"../wp-content/uploads/2017/06/img3.jpg\" class=\"attachment-bright-gallery-thumb size-bright-gallery-thumb wp-post-image\" alt=\"Three\" srcset=\"http://bright.wpbranch.com/wp-content/uploads/2017/06/img3.jpg 462w, http://bright.wpbranch.com/wp-content/uploads/2017/06/img3-300x247.jpg 300w\" sizes=\"(max-width: 462px) 100vw, 462px\" /></a>
                                            </div>

                                        </div>
                                    </div>
                                    <div class=\"mix col-md-4 col-sm-4 col-xs-4 post-3372 bright_gallery type-bright_gallery status-publish has-post-thumbnail hentry bright_gallery_cat-design\">
                                        <div class=\"portfolio-item\">
                                            <div class=\"portfolio-img\">
                                                <a class=\"lightbox\" href=\"";
        // line 619
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("wp-content/uploads/2017/06/img4.jpg"), "html", null, true);
        echo "\"><img width=\"462\" height=\"380\" src=\"../wp-content/uploads/2017/06/img4.jpg\" class=\"attachment-bright-gallery-thumb size-bright-gallery-thumb wp-post-image\" alt=\"Four\" srcset=\"http://bright.wpbranch.com/wp-content/uploads/2017/06/img4.jpg 462w, http://bright.wpbranch.com/wp-content/uploads/2017/06/img4-300x247.jpg 300w\" sizes=\"(max-width: 462px) 100vw, 462px\" /></a>
                                            </div>

                                        </div>
                                    </div>
                                    <div class=\"mix col-md-4 col-sm-4 col-xs-4 post-3373 bright_gallery type-bright_gallery status-publish has-post-thumbnail hentry bright_gallery_cat-blog bright_gallery_cat-design\">
                                        <div class=\"portfolio-item\">
                                            <div class=\"portfolio-img\">
                                                <a class=\"lightbox\" href=\"";
        // line 627
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("wp-content/uploads/2017/06/img5.jpg"), "html", null, true);
        echo "\"><img width=\"462\" height=\"380\" src=\"../wp-content/uploads/2017/06/img5.jpg\" class=\"attachment-bright-gallery-thumb size-bright-gallery-thumb wp-post-image\" alt=\"Five\" srcset=\"http://bright.wpbranch.com/wp-content/uploads/2017/06/img5.jpg 462w, http://bright.wpbranch.com/wp-content/uploads/2017/06/img5-300x247.jpg 300w\" sizes=\"(max-width: 462px) 100vw, 462px\" /></a>
                                            </div>

                                        </div>
                                    </div>
                                    <div class=\"mix col-md-4 col-sm-4 col-xs-4 post-3399 bright_gallery type-bright_gallery status-publish has-post-thumbnail hentry bright_gallery_cat-branding bright_gallery_cat-business\">
                                        <div class=\"portfolio-item\">
                                            <div class=\"portfolio-img\">
                                                <a class=\"lightbox\" href=\"";
        // line 635
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("wp-content/uploads/2017/06/img6.jpg"), "html", null, true);
        echo "\"><img width=\"462\" height=\"380\" src=\"../wp-content/uploads/2017/06/img6.jpg\" class=\"attachment-bright-gallery-thumb size-bright-gallery-thumb wp-post-image\" alt=\"Six\" srcset=\"http://bright.wpbranch.com/wp-content/uploads/2017/06/img6.jpg 462w, http://bright.wpbranch.com/wp-content/uploads/2017/06/img6-300x247.jpg 300w\" sizes=\"(max-width: 462px) 100vw, 462px\" /></a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>\t\t\t\t\t\t</div> <!-- end .row -->
                </div> <!-- end #footer-wrapper -->
            </div> <!-- end .container -->
        </div> <!-- end .footer-widgets -->

        <div class=\"site-info\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-6 col-sm-6 left-side\">
                        <p>© Copyright Bright 2017</p>
                    </div>

                    <div class=\"col-md-6 col-sm-6 text-right\">
                        <div class=\"bottom-social-icons pull-right\">
                            <a href=\"#\" target=\"_blank\"><i class=\"fa fa-twitter\"></i></a><a href=\"#\" target=\"_blank\"><i class=\"fa fa-facebook\"></i></a><a href=\"#\" target=\"_blank\"><i class=\"fa fa-google-plus\"></i></a><a href=\"#\" target=\"_blank\"><i class=\"fa fa-linkedin\"></i></a><a href=\"#\" target=\"_blank\"><i class=\"fa fa-youtube-play\"></i></a>\t\t\t\t\t\t            </div>
                    </div>
                </div>
            </div>
        </div><!-- .site-info -->
    </footer><!-- #colophon -->
</div><!-- #page -->
<script data-cfasync=\"false\" src=\"../cdn-cgi/scripts/d07b1474/cloudflare-static/email-decode.min.js\"></script><script>
    ( function ( body ) {
        'use strict';
        body.className = body.className.replace( /\\btribe-no-js\\b/, 'tribe-js' );
    } )( document.body );
</script>
<a href=\"#\" class=\"back-to-top\">
    <i class=\"fa fa-arrow-up\"></i>
</a>

<div class=\"loader bright-page-loader\">
    <div class=\"preloader2\">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
    </div>
</div>
<script type='text/javascript'> /* <![CDATA[ */var tribe_l10n_datatables = {\"aria\":{\"sort_ascending\":\": activate to sort column ascending\",\"sort_descending\":\": activate to sort column descending\"},\"length_menu\":\"Show _MENU_ entries\",\"empty_table\":\"No data available in table\",\"info\":\"Showing _START_ to _END_ of _TOTAL_ entries\",\"info_empty\":\"Showing 0 to 0 of 0 entries\",\"info_filtered\":\"(filtered from _MAX_ total entries)\",\"zero_records\":\"No matching records found\",\"search\":\"Search:\",\"all_selected_text\":\"All items on this page were selected. \",\"select_all_link\":\"Select all pages\",\"clear_selection\":\"Clear Selection.\",\"pagination\":{\"all\":\"All\",\"next\":\"Next\",\"previous\":\"Previous\"},\"select\":{\"rows\":{\"0\":\"\",\"_\":\": Selected %d rows\",\"1\":\": Selected 1 row\"}},\"datepicker\":{\"dayNames\":[\"Sunday\",\"Monday\",\"Tuesday\",\"Wednesday\",\"Thursday\",\"Friday\",\"Saturday\"],\"dayNamesShort\":[\"Sun\",\"Mon\",\"Tue\",\"Wed\",\"Thu\",\"Fri\",\"Sat\"],\"dayNamesMin\":[\"S\",\"M\",\"T\",\"W\",\"T\",\"F\",\"S\"],\"monthNames\":[\"January\",\"February\",\"March\",\"April\",\"May\",\"June\",\"July\",\"August\",\"September\",\"October\",\"November\",\"December\"],\"monthNamesShort\":[\"January\",\"February\",\"March\",\"April\",\"May\",\"June\",\"July\",\"August\",\"September\",\"October\",\"November\",\"December\"],\"nextText\":\"Next\",\"prevText\":\"Prev\",\"currentText\":\"Today\",\"closeText\":\"Done\"}};/* ]]> */ </script><script type='text/javascript'>
    /* <![CDATA[ */
    var wpcf7 = {\"apiSettings\":{\"root\":\"http:\\/\\/bright.wpbranch.com\\/wp-json\\/contact-form-7\\/v1\",\"namespace\":\"contact-form-7\\/v1\"},\"recaptcha\":{\"messages\":{\"empty\":\"Please verify that you are not a robot.\"}},\"cached\":\"1\"};
    /* ]]> */
</script>
<script type='text/javascript'>
    /* <![CDATA[ */
    var woocommerce_params = {\"ajax_url\":\"\\/wp-admin\\/admin-ajax.php\",\"wc_ajax_url\":\"http:\\/\\/bright.wpbranch.com\\/?wc-ajax=%%endpoint%%\"};
    /* ]]> */
</script>
<script type='text/javascript'>
    /* <![CDATA[ */
    var wc_cart_fragments_params = {\"ajax_url\":\"\\/wp-admin\\/admin-ajax.php\",\"wc_ajax_url\":\"http:\\/\\/bright.wpbranch.com\\/?wc-ajax=%%endpoint%%\",\"fragment_name\":\"wc_fragments_3de78db83a55e8e6cedbbde6b0c8e716\"};
    /* ]]> */
</script>
<script type='text/javascript'>
    /* <![CDATA[ */
    var jalerts_text = {\"okButton\":\"Ok\",\"cancelButton\":\"Cancel\"};
    /* ]]> */
</script>

<script type='text/javascript' src=\"";
        // line 704
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("wp-admin/load-scriptsf2de.php?c=0&amp;load%5B%5D=underscore,backbone,wp-embed&amp;ver=4.9.2"), "html", null, true);
        echo "\"></script>
<script type='text/javascript' src=\"";
        // line 705
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("wp-content/plugins/bbpress/templates/default/js/editor01c4.js?ver=2.5.14-6684"), "html", null, true);
        echo "\"></script>
<script type='text/javascript' src=\"";
        // line 706
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("wp-content/plugins/contact-form-7/includes/js/scripts20fd.js?ver=4.9.2"), "html", null, true);
        echo "\"></script>
<script type='text/javascript' src=\"";
        // line 707
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min44fd.js?ver=2.70"), "html", null, true);
        echo "\"></script>
<script type='text/javascript' src=\"";
        // line 708
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min6b25.js?ver=2.1.4"), "html", null, true);
        echo "\"></script>
<script type='text/javascript' src=\"";
        // line 709
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.minc169.js?ver=3.2.6"), "html", null, true);
        echo "\"></script>
<script type='text/javascript' src=\"";
        // line 710
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("wp-content/plugins/woocommerce/assets/js/frontend/cart-fragments.minc169.js?ver=3.2.6"), "html", null, true);
        echo "\"></script>
<script type='text/javascript' src=\"";
        // line 711
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("wp-content/themes/bright/js/bootstrap.min7433.js?ver=3.3.7"), "html", null, true);
        echo "\"></script>
<script type='text/javascript' src=\"";
        // line 712
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("wp-content/themes/bright/js/jquery.slicknav.min4b68.js?ver=1.0.4"), "html", null, true);
        echo "\"></script>
<script type='text/javascript' src=\"";
        // line 713
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("wp-content/themes/bright/js/owl.carousele7f0.js?ver=1.3.1"), "html", null, true);
        echo "\"></script>
<script type='text/javascript' src=\"";
        // line 714
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("wp-content/themes/bright/js/jquery.countdown3601.js?ver=2.2.0"), "html", null, true);
        echo "\"></script>
<script type='text/javascript' src=\"";
        // line 715
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("wp-content/themes/bright/js/jquery.magnific-popup.min4963.js?ver=1.1"), "html", null, true);
        echo "\"></script>
<script type='text/javascript' src=\"";
        // line 716
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("wp-content/themes/bright/js/jquery.matchHeight-min5152.js?ver=1.0"), "html", null, true);
        echo "\"></script>
<script type='text/javascript' src=\"";
        // line 717
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("wp-content/plugins/js_composer/assets/lib/waypoints/waypoints.min5243.js?ver=5.4.5"), "html", null, true);
        echo "\"></script>
<script type='text/javascript' src=\"";
        // line 718
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("wp-content/themes/bright/js/jquery.counterup.min5152.js?ver=1.0"), "html", null, true);
        echo "\"></script>
<script type='text/javascript' src=\"";
        // line 719
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("wp-content/themes/bright/js/jquery.mixitup.minc3e6.js?ver=2.1.11"), "html", null, true);
        echo "\"></script>
<script type='text/javascript' src=\"";
        // line 720
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("wp-content/themes/bright/js/main5152.js?ver=1.0"), "html", null, true);
        echo "\"></script>
<script type='text/javascript'>
    (function(\$) {
        'use strict';
    })(jQuery);
</script>
<script type='text/javascript' src=\"";
        // line 726
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("wp-content/themes/bright/js/skip-link-focus-fix4a7d.js?ver=20151215"), "html", null, true);
        echo "\"></script>
<script type='text/javascript' src=\"";
        // line 727
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("wp-content/plugins/learnpress/assets/js/jquery.alert3ea8.js?ver=2.1.9.6"), "html", null, true);
        echo "\"></script>
<script type='text/javascript' src=\"";
        // line 728
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("wp-content/plugins/learnpress/assets/js/global3ea8.js?ver=2.1.9.6"), "html", null, true);
        echo "\"></script>
<script type='text/javascript' src=\"";
        // line 729
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("wp-content/plugins/learnpress/assets/js/frontend/learnpress3ea8.js?ver=2.1.9.6"), "html", null, true);
        echo "\"></script>
<script type='text/javascript' src=\"";
        // line 730
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("wp-content/plugins/learnpress/assets/js/frontend/become-teacher3ea8.js?ver=2.1.9.6"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\">
    function wp_attempt_focus() {
        setTimeout( function() {
            try {
                d = document.getElementById('user_login');
                d.focus();
                d.select();
            } catch(e){}
        }, 200 );
    }

    wp_attempt_focus();
    if(typeof wpOnload=='function')wpOnload()
</script>
<script type='text/javascript'>
    /* <![CDATA[ */

    /* LearnPress Localized */
    var learn_press_js_localize = {\"confirm_cancel_order\":{\"message\":\"Are you sure you want to cancel order?\",\"title\":\"Cancel Order\"},\"unknown_error\":\"Unknown error!\",\"invalid_field\":\"Invalid field!\"};

    /* LearnPress Params */
    var LP_Settings = {\"ajax\":\"http:\\/\\/bright.wpbranch.com\\/wp-admin\\/admin-ajax.php\",\"plugin_url\":\"http:\\/\\/bright.wpbranch.com\\/wp-content\\/plugins\\/learnpress\\/\",\"siteurl\":\"http:\\/\\/bright.wpbranch.com\",\"current_url\":\"http:\\/\\/bright.wpbranch.com\\/login\\/\",\"localize\":{\"button_ok\":\"Ok\",\"button_cancel\":\"Cancel\",\"button_yes\":\"Yes\",\"button_no\":\"No\"}};
    /* ]]> */
</script>

</body>

<!-- Mirrored from bright.wpbranch.com/login/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 01 Feb 2018 08:28:51 GMT -->
</html>
<!-- Dynamic page generated in 0.387 seconds. -->
<!-- Cached page generated by WP-Super-Cache on 2018-02-01 08:12:37 -->

<!-- super cache -->
";
        
        $__internal_56dc937e222b8eb0b92611356688e64fb6483235cdccb01bb4b5416cca176699->leave($__internal_56dc937e222b8eb0b92611356688e64fb6483235cdccb01bb4b5416cca176699_prof);

        
        $__internal_3109e5c8194ed624f7f471485d78f9d21bda6ab6fac1aaeee96607b1a8ddb431->leave($__internal_3109e5c8194ed624f7f471485d78f9d21bda6ab6fac1aaeee96607b1a8ddb431_prof);

    }

    // line 407
    public function block_body($context, array $blocks = array())
    {
        $__internal_653785f174c2b00c4df71c7b66224ff32039a938345a484ffb9a4a7fab2906e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_653785f174c2b00c4df71c7b66224ff32039a938345a484ffb9a4a7fab2906e2->enter($__internal_653785f174c2b00c4df71c7b66224ff32039a938345a484ffb9a4a7fab2906e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_58258ce721d0582a59f4d7e32b25c4cd82b7e701f9c18bae2b73701b0a0fc968 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58258ce721d0582a59f4d7e32b25c4cd82b7e701f9c18bae2b73701b0a0fc968->enter($__internal_58258ce721d0582a59f4d7e32b25c4cd82b7e701f9c18bae2b73701b0a0fc968_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 408
        echo "                    ";
        
        $__internal_58258ce721d0582a59f4d7e32b25c4cd82b7e701f9c18bae2b73701b0a0fc968->leave($__internal_58258ce721d0582a59f4d7e32b25c4cd82b7e701f9c18bae2b73701b0a0fc968_prof);

        
        $__internal_653785f174c2b00c4df71c7b66224ff32039a938345a484ffb9a4a7fab2906e2->leave($__internal_653785f174c2b00c4df71c7b66224ff32039a938345a484ffb9a4a7fab2906e2_prof);

    }

    public function getTemplateName()
    {
        return "login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1007 => 408,  998 => 407,  953 => 730,  949 => 729,  945 => 728,  941 => 727,  937 => 726,  928 => 720,  924 => 719,  920 => 718,  916 => 717,  912 => 716,  908 => 715,  904 => 714,  900 => 713,  896 => 712,  892 => 711,  888 => 710,  884 => 709,  880 => 708,  876 => 707,  872 => 706,  868 => 705,  864 => 704,  792 => 635,  781 => 627,  770 => 619,  759 => 611,  748 => 603,  737 => 595,  714 => 575,  693 => 557,  672 => 539,  540 => 409,  538 => 407,  351 => 225,  324 => 201,  320 => 200,  316 => 199,  312 => 198,  307 => 196,  303 => 195,  299 => 194,  292 => 190,  288 => 189,  284 => 188,  278 => 185,  274 => 184,  270 => 183,  266 => 182,  262 => 181,  130 => 52,  126 => 51,  122 => 50,  118 => 49,  114 => 48,  110 => 47,  106 => 46,  102 => 45,  98 => 44,  94 => 43,  90 => 42,  86 => 41,  82 => 40,  78 => 39,  74 => 38,  70 => 37,  66 => 36,  62 => 35,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en-US\">

<!-- Mirrored from bright.wpbranch.com/login/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 01 Feb 2018 08:28:47 GMT -->
<!-- Added by HTTrack --><meta http-equiv=\"content-type\" content=\"text/html;charset=UTF-8\" /><!-- /Added by HTTrack -->
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link rel=\"profile\" href=\"http://gmpg.org/xfn/11\">
    <link rel=\"pingback\" href=\"../xmlrpc.php\">

    <title>Log In &#8211; Bright</title>
    <meta name='robots' content='noindex,follow' />
    <link rel='dns-prefetch' href='http://fonts.googleapis.com/' />
    <link rel='dns-prefetch' href='http://s.w.org/' />
    <link rel=\"alternate\" type=\"text/calendar\" title=\"Bright &raquo; iCal Feed\" href=\"../events/indexedf3.html?ical=1\" />
    <script type=\"text/javascript\">
        window._wpemojiSettings = {\"baseUrl\":\"https:\\/\\/s.w.org\\/images\\/core\\/emoji\\/2.3\\/72x72\\/\",\"ext\":\".png\",\"svgUrl\":\"https:\\/\\/s.w.org\\/images\\/core\\/emoji\\/2.3\\/svg\\/\",\"svgExt\":\".svg\",\"source\":{\"concatemoji\":\"http:\\/\\/bright.wpbranch.com\\/wp-includes\\/js\\/wp-emoji-release.min.js?ver=4.9.2\"}};
        !function(a,b,c){function d(a,b){var c=String.fromCharCode;l.clearRect(0,0,k.width,k.height),l.fillText(c.apply(this,a),0,0);var d=k.toDataURL();l.clearRect(0,0,k.width,k.height),l.fillText(c.apply(this,b),0,0);var e=k.toDataURL();return d===e}function e(a){var b;if(!l||!l.fillText)return!1;switch(l.textBaseline=\"top\",l.font=\"600 32px Arial\",a){case\"flag\":return!(b=d([55356,56826,55356,56819],[55356,56826,8203,55356,56819]))&&(b=d([55356,57332,56128,56423,56128,56418,56128,56421,56128,56430,56128,56423,56128,56447],[55356,57332,8203,56128,56423,8203,56128,56418,8203,56128,56421,8203,56128,56430,8203,56128,56423,8203,56128,56447]),!b);case\"emoji\":return b=d([55358,56794,8205,9794,65039],[55358,56794,8203,9794,65039]),!b}return!1}function f(a){var c=b.createElement(\"script\");c.src=a,c.defer=c.type=\"text/javascript\",b.getElementsByTagName(\"head\")[0].appendChild(c)}var g,h,i,j,k=b.createElement(\"canvas\"),l=k.getContext&&k.getContext(\"2d\");for(j=Array(\"flag\",\"emoji\"),c.supports={everything:!0,everythingExceptFlag:!0},i=0;i<j.length;i++)c.supports[j[i]]=e(j[i]),c.supports.everything=c.supports.everything&&c.supports[j[i]],\"flag\"!==j[i]&&(c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&c.supports[j[i]]);c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&!c.supports.flag,c.DOMReady=!1,c.readyCallback=function(){c.DOMReady=!0},c.supports.everything||(h=function(){c.readyCallback()},b.addEventListener?(b.addEventListener(\"DOMContentLoaded\",h,!1),a.addEventListener(\"load\",h,!1)):(a.attachEvent(\"onload\",h),b.attachEvent(\"onreadystatechange\",function(){\"complete\"===b.readyState&&c.readyCallback()})),g=c.source||{},g.concatemoji?f(g.concatemoji):g.wpemoji&&g.twemoji&&(f(g.twemoji),f(g.wpemoji)))}(window,document,window._wpemojiSettings);
    </script>
    <style type=\"text/css\">
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;ar
        height: 1em !important;
            width: 1em !important;
            margin: 0 .07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style>
    <link rel='stylesheet' id='dashicons-css'  href=\"{{ asset('wp-includes/css/dashicons.min20fd.css?ver=4.9.2')}}\" type='text/css' media='all' />
    <link rel='stylesheet' id='theme-my-login-css'  href=\"{{ asset('wp-content/plugins/theme-my-login/theme-my-login9d94.css?ver=6.4.10')}}\" type='text/css' media='all' />
    <link rel='stylesheet' id='education-icon-collection-css'  href=\"{{ asset('wp-content/themes/bright/assets/css/education-icon-collection5152.css?ver=1.0')}}\" type='text/css' media='all' />
    <link rel='stylesheet' id='bbp-default-css'  href=\"{{ asset('wp-content/plugins/bbpress/templates/default/css/bbpress01c4.css?ver=2.5.14-6684')}}\" type='text/css' media='screen' />
    <link rel='stylesheet' id='contact-form-7-css'  href=\"{{ asset('wp-content/plugins/contact-form-7/includes/css/styles20fd.css?ver=4.9.2')}}\" type='text/css' media='all' />
    <link rel='stylesheet' id='searchandfilter-css'  href=\"{{ asset('wp-content/plugins/search-filter/style68b3.css?ver=1')}}\" type='text/css' media='all' />
    <link rel='stylesheet' id='woocommerce-layout-css'  href=\"{{ asset('wp-content/plugins/woocommerce/assets/css/woocommerce-layoutc169.css?ver=3.2.6')}}\" type='text/css' media='all' />
    <link rel='stylesheet' id='woocommerce-smallscreen-css'  href=\"{{ asset('wp-content/plugins/woocommerce/assets/css/woocommerce-smallscreenc169.css?ver=3.2.6')}}\" type='text/css' media='only screen and (max-width: 768px)' />
    <link rel='stylesheet' id='woocommerce-general-css'  href=\"{{ asset('wp-content/plugins/woocommerce/assets/css/woocommercec169.css?ver=3.2.6')}}\" type='text/css' media='all' />
    <link rel='stylesheet' id='course-wishlist-style-css'  href=\"{{ asset('wp-content/plugins/learnpress-wishlist/source/wishlist20fd.css?ver=4.9.2')}}\" type='text/css' media='all' />
    <link rel='stylesheet' id='bright-style-css'  href=\"{{ asset('wp-content/themes/bright/style20fd.css?ver=4.9.2')}}\" type='text/css' media='all' />
    <link rel='stylesheet' id='bootstrap-css'  href=\"{{ asset('wp-content/themes/bright/css/bootstrap.min7433.css?ver=3.3.7')}}\" type='text/css' media='all' />
    <link rel='stylesheet' id='owl-carousel-css'  href=\"{{ asset('wp-content/themes/bright/css/owl.carousel3ba1.css?ver=1.3.3')}}\" type='text/css' media='all' />
    <link rel='stylesheet' id='font-awesoume-css'  href=\"{{ asset('wp-content/themes/bright/assets/css/font-awesome.min4698.css?ver=4.6.3')}}\" type='text/css' media='all' />
    <link rel='stylesheet' id='animate-css'  href=\"{{ asset('wp-content/themes/bright/assets/css/animate4698.css?ver=4.6.3')}}\" type='text/css' media='all' />
    <link rel='stylesheet' id='bright-main-style-css'  href=\"{{ asset('wp-content/themes/bright/css/main.min5152.css?ver=1.0')}}\" type='text/css' media='all' />
    <link rel='stylesheet' id='bright-color-css'  href=\"{{ asset('wp-content/themes/bright/css/color5152.css?ver=1.0')}}\" type='text/css' media='all' />
    <link rel='stylesheet' id='bright-custom-css'  href=\"{{ asset('wp-content/themes/bright/css/custom5152.css?ver=1.0')}}\" type='text/css' media='all' />
    <style id='bright-custom-inline-css' type='text/css'>
        .logo-wrapper img { max-height: 70px; }.navbar.navbar-bright .affix .logo-wrapper .custom-logo-link img { max-width: 121px; }.navbar.navbar-bright .affix .logo-wrapper .custom-logo-link img { max-height: 70px; }
        .logo-wrapper .custom-logo-link {
            margin-top: 0px;
            margin-bottom: 0px;
        }
        @media (min-width: 768px){
            .navbar.navbar-bright .navbar-nav>li>a {
                padding-top: 25px;
                padding-bottom: 25px;
                padding-left: 20px;
                padding-right: 20px;
            }
        }
        h1, h2, h3, h4, h5, h6,
        .teacher.bright-instructor-content-type-grid .teacher-item .teacher-desc a h3,
        .teacher.bright-instructor-content-type-slider .teacher-item .teacher-desc a h3,
        .courses-wrap .course-detail-wrap .course-content h3 a,
        .bright_vc_row-color-white .ep_sign_up_now h2,
        .bright_vc_row-color-white .ep_sign_up_now h4 {
            color: #212121;
        }
        .footer-widgets {
            padding-top: 75px;
            padding-bottom: 75px;
            background: #22272b;
            color: #aaaaaa;
        }
        .footer-widgets .widget-title {
            color: #ffffff;
        }
        .footer-widgets a,
        .footer-widgets .news-grid-item .news-title a,
        .footer-widgets .teacher-item .teacher-desc h3,
        .footer-widgets .courses-wrap .course-detail-wrap .course-content h3 a {
            color: #aaaaaa;
        }
        .site-info {
            padding-top: 15px;
            padding-bottom: 15px;
            background: #1d2023;
            color: #999;
        }
        .site-info a {
            color: #fff;
        }
        .bright-course-slider .bright-course-item figcaption {
            min-height: 170px;
        }
        .navbar.navbar-bright {
            background: #ffffff;
        }
        body.page .navbar.navbar-bright.header-transparent .site-header-wrapper, body.bright-global-page-header-transparent .navbar.navbar-bright .site-header-wrapper {
            background: rgba(0, 0, 0, 0.7)!important;
        }
        .navbar-default .navbar-nav>li>a {
            color: #656565;
        }
        .navbar-default .navbar-nav>li>a:focus, .navbar-default .navbar-nav>li>a:hover, .navbar-bright .bright-main-menu-wrapper .navbar-nav li.current-menu-ancestor>a {
            color: #ff4f57;
        }
        .navbar-bright .bright-main-menu-wrapper .dropdown-menu li>a:hover {
            color: #ffffff;
        }
        .header-transparent.navbar-bright .navbar-nav>li>a, body.bright-global-page-header-transparent .navbar-bright .navbar-nav>li>a, .logo-wrapper .site-title.site-title-transparent a {
            color: #dadada;
        }
        .header-transparent.navbar-bright .navbar-nav>li>a:hover, body.bright-global-page-header-transparent .navbar-bright .navbar-nav>li>a:hover {
            color: #ffffff;
        }
        .navbar-bright .bright-main-menu-wrapper .dropdown-menu {
            background: #ffffff;
        }
        .navbar-bright .bright-main-menu-wrapper .dropdown-menu li>a {
            color: #656565;
        }
        @media (min-width: 768px){
            .navbar-bright .bright-main-menu-wrapper .dropdown-menu {
                min-width: 260px;
            }
        }
        .bright-page-title-area:before {
            background: rgba(0, 0, 0, 0.7);
        }
        .bright-page-title-area {
            padding-top: 69px;
            padding-bottom: 69px;
        }
        #bbpress-forums,
        #bbpress-forums .bbp-forum-info .bbp-forum-content,
        #bbpress-forums p.bbp-topic-meta,
        .ep_sign_up_now,
        .bright_vc_row-color-white .testimonial-item,
        body {
            color: #444444;
            line-height: 25px;
            font-size: 15px;
        }
        body {
            background: #f3f3f3;
        }
        .bright-pre-header {
            background: #ff4f57;
            color: #ffffff;
        }
        .bright-pre-header a {
            color: #ffffff;
        }
    </style>
    <link rel='stylesheet' id='bright-main-fonts-css'  href='https://fonts.googleapis.com/css?family=Roboto%3A300%2C400%2C400i%2C500%2C500i%2C700%2C900%7CMontserrat%3A300%2C400%2C500%2C600%2C700%2C800%2C900&amp;subset' type='text/css' media='all' />
    <link rel='stylesheet' id='bright-woocommerce-main-css'  href='../wp-content/themes/bright/css/woocommerce-main.min5152.css?ver=1.0' type='text/css' media='all' />
    <link rel='stylesheet' id='learn-press-jalerts-css'  href='../wp-content/plugins/learnpress/assets/css/jalert3ea8.css?ver=2.1.9.6' type='text/css' media='all' />
    <link rel='stylesheet' id='learn-press-style-css'  href='../wp-content/plugins/learnpress/assets/css/learnpress3ea8.css?ver=2.1.9.6' type='text/css' media='all' />

    <script type=\"text/template\" id=\"learn-press-template-block-content\">
        <div id=\"learn-press-block-content\" class=\"popup-block-content\">
            <span></span>
        </div>
    </script><script type='text/javascript'>
        /* <![CDATA[ */
        var wc_add_to_cart_params = {\"ajax_url\":\"\\/wp-admin\\/admin-ajax.php\",\"wc_ajax_url\":\"http:\\/\\/bright.wpbranch.com\\/?wc-ajax=%%endpoint%%\",\"i18n_view_cart\":\"View cart\",\"cart_url\":\"http:\\/\\/bright.wpbranch.com\\/cart\\/\",\"is_cart\":\"\",\"cart_redirect_after_add\":\"no\"};
        /* ]]> */
    </script>

    <script type='text/javascript'>
        /* <![CDATA[ */
        var userSettings = {\"url\":\"\\/\",\"uid\":\"0\",\"time\":\"1517472756\",\"secure\":\"\"};/* ]]> */
    </script>
    <script type='text/javascript' src=\"{{ asset('wp-admin/load-scripts40cc.php?c=0&amp;load%5B%5D=jquery-core,jquery-migrate,utils&amp;ver=4.9.2')}}\"></script>
    <script type='text/javascript' src=\"{{ asset('wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.minc169.js?ver=3.2.6')}}\"></script>
    <script type='text/javascript' src=\"{{ asset('wp-content/plugins/learnpress-wishlist/source/wishlist20fd.js?ver=4.9.2')}}\"></script>
    <script type='text/javascript' src=\"{{ asset('wp-content/plugins/js_composer/assets/js/vendors/woocommerce-add-to-cart5243.js?ver=5.4.5')}}\"></script>
    <link rel='https://api.w.org/' href=\"{{ asset('wp-json/index.html')}}\" />
    <meta name=\"generator\" content=\"WordPress 4.9.2\" />
    <meta name=\"generator\" content=\"WooCommerce 3.2.6\" />
    <link rel='shortlink' href=\"{{ asset('index5757.html?p=11')}}\" />
    <link rel=\"alternate\" type=\"application/json+oembed\" href=\"{{ asset('wp-json/oembed/1.0/embedc8dd.json?url=http%3A%2F%2Fbright.wpbranch.com%2Flogin%2F')}}\" />
    <link rel=\"alternate\" type=\"text/xml+oembed\" href=\"{{ asset('wp-json/oembed/1.0/embed4548?url=http%3A%2F%2Fbright.wpbranch.com%2Flogin%2F&amp;format=xml')}}\" />
    <link rel='dns-prefetch' href='http://fonts.googleapis.com/' />
    <link rel='dns-prefetch' href='http://s.w.org/' />
    <meta name='robots' content='noindex,follow' />
    <link rel=\"icon\" href=\"{{ asset('wp-content/uploads/2017/08/cropped-university-graduate-hat-1-32x32.png')}}\" sizes=\"32x32\" />
    <link rel=\"icon\" href=\"{{ asset('wp-content/uploads/2017/08/cropped-university-graduate-hat-1-192x192.png')}}\" sizes=\"192x192\" />
    <link rel=\"apple-touch-icon-precomposed\" href=\"{{ asset('wp-content/uploads/2017/08/cropped-university-graduate-hat-1-180x180.png')}}\" />
    <meta name=\"msapplication-TileImage\" content=\"http://bright.wpbranch.com/wp-content/uploads/2017/08/cropped-university-graduate-hat-1-270x270.png')}}\" />
    <meta name=\"tec-api-version\" content=\"v1\"><meta name=\"tec-api-origin\" content=\"http://bright.wpbranch.com\"><link rel=\"https://theeventscalendar.com/\" href=\"{{ asset('/wp-json/tribe/events/v1/index.html')}}\" />\t<noscript><style>.woocommerce-product-gallery{ opacity: 1 !important; }</style></noscript>
    <!--[if lte IE 9]><link rel=\"stylesheet\" type=\"text/css\" href=\"http://bright.wpbranch.com/wp-content/plugins/js_composer/assets/css/vc_lte_ie9.min.css\" media=\"screen\"><![endif]--><link rel=\"icon\" href=\"{{ asset('/wp-content/uploads/2017/08/cropped-university-graduate-hat-1-32x32.png\" sizes=\"32x32')}}\" />
    <link rel=\"icon\" href=\"{{ asset('wp-content/uploads/2017/08/cropped-university-graduate-hat-1-192x192.png')}}\" sizes=\"192x192\" />
    <link rel=\"apple-touch-icon-precomposed\" href=\"{{ asset('wp-content/uploads/2017/08/cropped-university-graduate-hat-1-180x180.png')}}\" />
    <meta name=\"msapplication-TileImage\" content=\"http://bright.wpbranch.com/wp-content/uploads/2017/08/cropped-university-graduate-hat-1-270x270.png\" />
    <noscript><style type=\"text/css\"> .wpb_animate_when_almost_visible { opacity: 1; }</style></noscript></head>

<body class=\"page-template page-template-page-templates page-template-login-register-page page-template-page-templateslogin-register-page-php page page-id-11 wp-custom-logo tribe-no-js bright-page-layout-grid bright-has-page-title bright-no-page-sidebar bright-page-header-default xt-site-loading wpb-js-composer js-comp-ver-5.4.5 vc_responsive\">
<div id=\"page\" class=\"site\">
    <a class=\"skip-link screen-reader-text\" href=\"#content\">Skip to content</a>


    <header id=\"masthead\" class=\"site-header-type-default site-header navbar navbar-default navbar-bright\">
        <div class=\"bright-pre-header bright-pre-header-mobile-disable\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-sm-5 bright-pre-header-item-left\">

                        <div class=\"pull-left\">
                            <i class=\"fa fa-map-marker\" aria-hidden=\"true\"></i> Sydney NSW 2052, Australia\t\t\t\t                </div>
                    </div>
                    <div class=\"col-sm-7 bright-pre-header-item-right text-right\">
                        <div class=\"quick-contacts pull-right\">

                            <span class=\"bright-top-bar-mobile\"><i class=\"fa fa-phone\"></i> <a href=\"tel:+61 2 9385 1000\">+61 2 9385 1000</a></span>
                            <span class=\"bright-top-bar-email\"><i class=\"fa fa-envelope\"></i><a href=\"../cdn-cgi/l/email-protection.html#84eca2a7b5b4b5bfa2a7b5b4bcbfa1b2e7eba1b0b4a2a7bdbcbfa1b3b6ede3a2a7b5b4b0bff0f1a2a7b5b5b4bfa2a7b5b4b1bfa1b3b2a2a7b5b4b5bff6a1b3b7a1b2bda1b3b0fda2a7b0b2bfa2a7b5b4b5bfa1b2b0a1b3b1\">h&#101;l&#108;&#111;&#64;&#98;&#114;&#105;g&#104;&#116;&#117;ni&#118;&#101;&#114;s&#105;&#116;y&#46;&#101;du</a></span>

                            <span><a href=\"{{ path('fos_user_security_login') }}\"><i class=\"fa fa-user\"></i> Login</a> / <a href=\"{{ path('fos_user_registration_register')}}\">Register</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"site-header-wrapper\" data-spy=\"affix\" data-offset-top=\"50\">
            <div class=\"container\">
                <div class=\"site-header-inner clearfix\">
                    <div class=\"site-branding navbar-header\">
                        <div class=\"logo-wrapper\" itemscope itemtype=\"http://schema.org/Brand\">
                            <a href=\"../index.html\" class=\"custom-logo-link\" rel=\"home\" itemprop=\"url\"><img width=\"300\" height=\"140\" src=\"../wp-content/uploads/2017/08/bright-logo-new.png\" class=\"custom-logo\" alt=\"Bright\" itemprop=\"logo\" /></a>
                        </div>
                    </div><!-- .site-branding -->

                    <div class=\"header-search pull-right hidden-xs\">
                        <a class=\"open-search\">
                            <i class=\"fa fa-search\"></i>
                        </a>
                    </div>
                    <form class=\"full-search\" role=\"search\" method=\"get\" action=\"http://bright.wpbranch.com/\">
                        <div class=\"container\">
                            <div class=\"row\">
                                <input class=\"form-control\" type=\"search\" placeholder=\"Search\" value=\"\" name=\"s\">
                                <a class=\"close-search\">
\t\t\t\t\t                  \t<span class=\"fa fa-times\">
\t\t\t\t\t                  \t</span>
                                </a>
                            </div>
                        </div>
                    </form>

                    <div class=\"bright-main-menu-wrapper\">
                        <div id=\"bright-site-navigation\" class=\"collapse navbar-collapse\"><ul id=\"menu-main-menu\" class=\"nav navbar-nav navbar-right bright-main-menu bright-megamenu bright-menu-has-search bright-menu-no-profile\"><li id=\"menu-item-4527\" class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-has-children menu-item-4527 dropdown\"><a title=\"Home\" href=\"../index.html\" class=\"dropdown-toggle\" aria-haspopup=\"true\">Home <span class=\"fa fa-angle-down\"></span></a>
                                    <ul role=\"menu\" class=\" dropdown-menu\">
                                        <li id=\"menu-item-4148\" class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-4148\"><a title=\"Home 1 (University)\" href=\"../index.html\">Home 1 (University)</a></li>
                                        <li id=\"menu-item-4417\" class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-4417\"><a title=\"Home 2 (LMS)\" href=\"../home-2/index.html\">Home 2 (LMS)</a></li>
                                        <li id=\"menu-item-5107\" class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-5107\"><a title=\"Home 3 (Minimal)\" href=\"../home-3/index.html\">Home 3 (Minimal)</a></li>
                                    </ul>
                                </li>
                                <li id=\"menu-item-4202\" class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-4202 dropdown\"><a title=\"Courses\" href=\"../all-courses/index.html\" class=\"dropdown-toggle\" aria-haspopup=\"true\">Courses <span class=\"fa fa-angle-down\"></span></a>
                                    <ul role=\"menu\" class=\" dropdown-menu\">
                                        <li id=\"menu-item-4206\" class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-4206\"><a title=\"Courses Grid\" href=\"../courses-grid/index.html\">Courses Grid</a></li>
                                        <li id=\"menu-item-4205\" class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-4205\"><a title=\"Courses Slider\" href=\"../courses-slider/index.html\">Courses Slider</a></li>
                                        <li id=\"menu-item-4204\" class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-4204\"><a title=\"Courses List\" href=\"../courses-list/index.html\">Courses List</a></li>
                                        <li id=\"menu-item-4454\" class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-4454\"><a title=\"Course Details\" href=\"../courses/become-a-php-master-and-make-money-fast/index.html\">Course Details</a></li>
                                        <li id=\"menu-item-4569\" class=\"menu-item menu-item-type-taxonomy menu-item-object-course_category menu-item-4569\"><a title=\"Course Category\" href=\"../course-category/bachelors-programs/index.html\">Course Category</a></li>
                                        <li id=\"menu-item-4575\" class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-4575\"><a title=\"Our Teachers\" href=\"../our-teachers/index.html\">Our Teachers</a></li>
                                    </ul>
                                </li>
                                <li id=\"menu-item-4124\" class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-4124 dropdown\"><a title=\"Pages\" href=\"#\" class=\"dropdown-toggle\" aria-haspopup=\"true\">Pages <span class=\"fa fa-angle-down\"></span></a>
                                    <ul role=\"menu\" class=\" dropdown-menu\">
                                        <li id=\"menu-item-4127\" class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-4127 dropdown-submenu\"><a title=\"About\" href=\"../about/index.html\">About</a>
                                            <ul role=\"menu\" class=\" dropdown-menu\">
                                                <li id=\"menu-item-5109\" class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-5109\"><a title=\"About 1\" href=\"../about/index.html\">About 1</a></li>
                                                <li id=\"menu-item-5108\" class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-5108\"><a title=\"About 2\" href=\"../about-2/index.html\">About 2</a></li>
                                            </ul>
                                        </li>
                                        <li id=\"menu-item-4120\" class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-4120\"><a title=\"Our Gallery\" href=\"../our-gallery/index.html\">Our Gallery</a></li>
                                        <li id=\"menu-item-5111\" class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-5111\"><a title=\"Album\" href=\"../album/index.html\">Album</a></li>
                                        <li id=\"menu-item-5110\" class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-5110\"><a title=\"Notice\" href=\"../notice/index.html\">Notice</a></li>
                                        <li id=\"menu-item-4137\" class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-4137\"><a title=\"FAQ\" href=\"../faq/index.html\">FAQ</a></li>
                                        <li id=\"menu-item-4873\" class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-4873 dropdown-submenu\"><a title=\"bbPress Forums\" href=\"../forums/index.html\">bbPress Forums</a>
                                            <ul role=\"menu\" class=\" dropdown-menu\">
                                                <li id=\"menu-item-4874\" class=\"menu-item menu-item-type-post_type menu-item-object-forum menu-item-4874\"><a title=\"Single Forum\" href=\"../forums/forum/test-forum-forum-with-one-topic-with-loads-of-replies-for-reply-pagination/index.html\">Single Forum</a></li>
                                                <li id=\"menu-item-4875\" class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-4875\"><a title=\"Single Topic\" href=\"../forums/topic/test-topic-with-loads-of-replies/index.html\">Single Topic</a></li>
                                            </ul>
                                        </li>
                                        <li id=\"menu-item-4138\" class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-4138\"><a title=\"404\" href=\"../404.html\">404</a></li>
                                    </ul>
                                </li>
                                <li id=\"menu-item-4159\" class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-4159 dropdown\"><a title=\"Events\" href=\"../events/index.html\" class=\"dropdown-toggle\" aria-haspopup=\"true\">Events <span class=\"fa fa-angle-down\"></span></a>
                                    <ul role=\"menu\" class=\" dropdown-menu\">
                                        <li id=\"menu-item-4157\" class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-4157\"><a title=\"Events Grid\" href=\"../events-grid/index.html\">Events Grid</a></li>
                                        <li id=\"menu-item-4158\" class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-4158\"><a title=\"Events Slider\" href=\"../events-slider/index.html\">Events Slider</a></li>
                                    </ul>
                                </li>
                                <li id=\"menu-item-4867\" class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-4867 dropdown\"><a title=\"Shop\" href=\"../shop/index.html\" class=\"dropdown-toggle\" aria-haspopup=\"true\">Shop <span class=\"fa fa-angle-down\"></span></a>
                                    <ul role=\"menu\" class=\" dropdown-menu\">
                                        <li id=\"menu-item-4868\" class=\"menu-item menu-item-type-post_type menu-item-object-product menu-item-4868\"><a title=\"Single Product\" href=\"../product/patient-ninja/index.html\">Single Product</a></li>
                                        <li id=\"menu-item-4869\" class=\"menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-4869\"><a title=\"Product Category\" href=\"../product-category/clothing/index.html\">Product Category</a></li>
                                        <li id=\"menu-item-4872\" class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-4872\"><a title=\"Account\" href=\"../my-account/index.html\">Account</a></li>
                                    </ul>
                                </li>
                                <li id=\"menu-item-4149\" class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-4149 dropdown\"><a title=\"Blog\" href=\"../blog/index.html\" class=\"dropdown-toggle\" aria-haspopup=\"true\">Blog <span class=\"fa fa-angle-down\"></span></a>
                                    <ul role=\"menu\" class=\" dropdown-menu\">
                                        <li id=\"menu-item-4568\" class=\"menu-item menu-item-type-post_type menu-item-object-post menu-item-4568\"><a title=\"Blog Single\" href=\"../how-to-improve-your-communication-skill/index.html\">Blog Single</a></li>
                                        <li id=\"menu-item-4566\" class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-4566\"><a title=\"Blog Author\" href=\"../author/zabid/index.html\">Blog Author</a></li>
                                        <li id=\"menu-item-4567\" class=\"menu-item menu-item-type-taxonomy menu-item-object-category menu-item-4567\"><a title=\"Blog Category\" href=\"../category/programming/index.html\">Blog Category</a></li>
                                    </ul>
                                </li>
                                <li id=\"menu-item-4141\" class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-4141\"><a title=\"Contact\" href=\"../contact/index.html\">Contact</a></li>
                            </ul></div>\t\t\t\t\t\t</div>


                    <div class=\"bright-mobile-menu-wrapper\">
                        <ul id=\"primary-menu\" class=\"bright-mobile-menu\"><li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-has-children menu-item-4527\"><a href=\"../index.html\">Home</a>
                                <ul class=\"sub-menu\">
                                    <li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-4148\"><a href=\"../index.html\">Home 1 (University)</a></li>
                                    <li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-4417\"><a href=\"../home-2/index.html\">Home 2 (LMS)</a></li>
                                    <li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-5107\"><a href=\"../home-3/index.html\">Home 3 (Minimal)</a></li>
                                </ul>
                            </li>
                            <li class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-4202\"><a href=\"../all-courses/index.html\">Courses</a>
                                <ul class=\"sub-menu\">
                                    <li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-4206\"><a href=\"../courses-grid/index.html\">Courses Grid</a></li>
                                    <li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-4205\"><a href=\"../courses-slider/index.html\">Courses Slider</a></li>
                                    <li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-4204\"><a href=\"../courses-list/index.html\">Courses List</a></li>
                                    <li class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-4454\"><a href=\"../courses/become-a-php-master-and-make-money-fast/index.html\">Course Details</a></li>
                                    <li class=\"menu-item menu-item-type-taxonomy menu-item-object-course_category menu-item-4569\"><a href=\"../course-category/bachelors-programs/index.html\">Course Category</a></li>
                                    <li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-4575\"><a href=\"../our-teachers/index.html\">Our Teachers</a></li>
                                </ul>
                            </li>
                            <li class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-4124\"><a href=\"#\">Pages</a>
                                <ul class=\"sub-menu\">
                                    <li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-4127\"><a href=\"../about/index.html\">About</a>
                                        <ul class=\"sub-menu\">
                                            <li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-5109\"><a href=\"../about/index.html\">About 1</a></li>
                                            <li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-5108\"><a href=\"../about-2/index.html\">About 2</a></li>
                                        </ul>
                                    </li>
                                    <li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-4120\"><a href=\"../our-gallery/index.html\">Our Gallery</a></li>
                                    <li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-5111\"><a href=\"../album/index.html\">Album</a></li>
                                    <li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-5110\"><a href=\"../notice/index.html\">Notice</a></li>
                                    <li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-4137\"><a href=\"../faq/index.html\">FAQ</a></li>
                                    <li class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-4873\"><a href=\"../forums/index.html\">bbPress Forums</a>
                                        <ul class=\"sub-menu\">
                                            <li class=\"menu-item menu-item-type-post_type menu-item-object-forum menu-item-4874\"><a href=\"../forums/forum/test-forum-forum-with-one-topic-with-loads-of-replies-for-reply-pagination/index.html\">Single Forum</a></li>
                                            <li class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-4875\"><a href=\"../forums/topic/test-topic-with-loads-of-replies/index.html\">Single Topic</a></li>
                                        </ul>
                                    </li>
                                    <li class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-4138\"><a href=\"../404.html\">404</a></li>
                                </ul>
                            </li>
                            <li class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-4159\"><a href=\"../events/index.html\">Events</a>
                                <ul class=\"sub-menu\">
                                    <li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-4157\"><a href=\"../events-grid/index.html\">Events Grid</a></li>
                                    <li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-4158\"><a href=\"../events-slider/index.html\">Events Slider</a></li>
                                </ul>
                            </li>
                            <li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-4867\"><a href=\"../shop/index.html\">Shop</a>
                                <ul class=\"sub-menu\">
                                    <li class=\"menu-item menu-item-type-post_type menu-item-object-product menu-item-4868\"><a href=\"../product/patient-ninja/index.html\">Single Product</a></li>
                                    <li class=\"menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-4869\"><a href=\"../product-category/clothing/index.html\">Product Category</a></li>
                                    <li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-4872\"><a href=\"../my-account/index.html\">Account</a></li>
                                </ul>
                            </li>
                            <li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-4149\"><a href=\"../blog/index.html\">Blog</a>
                                <ul class=\"sub-menu\">
                                    <li class=\"menu-item menu-item-type-post_type menu-item-object-post menu-item-4568\"><a href=\"../how-to-improve-your-communication-skill/index.html\">Blog Single</a></li>
                                    <li class=\"menu-item menu-item-type-custom menu-item-object-custom menu-item-4566\"><a href=\"../author/zabid/index.html\">Blog Author</a></li>
                                    <li class=\"menu-item menu-item-type-taxonomy menu-item-object-category menu-item-4567\"><a href=\"../category/programming/index.html\">Blog Category</a></li>
                                </ul>
                            </li>
                            <li class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-4141\"><a href=\"../contact/index.html\">Contact</a></li>
                        </ul>\t\t\t\t\t\t</div>



                </div>
            </div>
        </div>
    </header><!-- #masthead -->

    <div class=\"bright-page-title-area\">
        <div class=\"bright-page-title\">
            <div class=\"container\">
                <h1 class=\"entry-title\">Log In</h1>
            </div>
        </div>
        <div class=\"bright-breadcrumb-wrapper\">
            <div class=\"container\">
                <nav class=\"breadcrumb-trail breadcrumbs\"><div class=\"bright-breadcrumb\"><ul class=\"trail-items\"><li class=\"trail-item trail-begin\"><a href=\"../index.html\" rel=\"home\"><span>Home</span></a></li><li class=\"trail-item trail-end\"><span>Log In</span></li></ul></div></nav>\t\t\t\t\t\t\t</div>
        </div>
    </div>

    <div id=\"content\" class=\"site-content container\">
        <div class=\"bright-main-content-inner\">

            <div id=\"primary\" class=\"content-area col-md-6 col-md-offset-3\">
                <main id=\"main\" class=\"site-main\">
                    <article id=\"post-11\" class=\"post-11 page type-page status-publish hentry\">
                    {% block body %}
                    {% endblock %}


</article>
                </main><!-- #main -->
            </div><!-- #primary -->

        </div>
    </div><!-- #content -->

    <footer id=\"colophon\" class=\"site-footer\">
        <div class=\"footer-widgets\">
            <div class=\"container\">
                <div id=\"footer-wrapper\">
                    <div class=\"row\">
                        <div id=\"text-2\" class=\"col-md-3 col-sm-6 col-xs-12 widget widget_text\"><h4 class=\"widget-title footer-widget-title\">Contact Info</h4>\t\t\t<div class=\"textwidget\"><p>A powerhouse of cutting-edge education, research &amp; teaching in The World</p>
                                <ul class=\"address\">
                                    <li><i class=\"fa fa-home\"></i> Sydney NSW 2052, Australia</li>
                                    <li><i class=\"fa fa-phone\"></i> +61 2 9385 1000</li>
                                    <li><i class=\"fa fa-envelope\"></i> <a href=\"../cdn-cgi/l/email-protection.html\" class=\"__cf_email__\" data-cfemail=\"d0b8b5bcbcbf90b2a2b9b7b8a4a5beb9a6b5a2a3b9a4a9feb5b4a5\">[email&#160;protected]</a></li>
                                </ul>
                            </div>
                        </div><div id=\"bright_blog_post_list_widget-3\" class=\"col-md-3 col-sm-6 col-xs-12 widget widget_bright_blog_post_list_widget\"><h4 class=\"widget-title footer-widget-title\">Latest News</h4>
                            <div class=\"bright-post-list slider-nav-true\" data-autoplay=\"true\" data-items=\"2\" data-desktopsmall=\"2\" data-tablet=\"2\" data-mobile=\"1\" data-navigation=\"true\" data-pagination=\"false\" data-direction=\"false\">
                                <div class=\" post-2756 post type-post status-publish format-standard has-post-thumbnail hentry category-online-education category-uncategorized tag-online-courses tag-study\">

                                    <div class=\"news-grid-item\">
                                        <div class=\"news-grid-small-img\">
                                            <div class=\"row\">
                                                <div class=\"col-xs-4\">
                                                    <a href=\"../how-to-study-online-courses-effectively/index.html\">
                                                        <img width=\"300\" height=\"300\" src=\"../wp-content/uploads/2017/07/study-300x300.jpg\" class=\"attachment-bright-course-thumb-small size-bright-course-thumb-small wp-post-image\" alt=\"How to Study Online Courses Effectively\" srcset=\"http://bright.wpbranch.com/wp-content/uploads/2017/07/study-300x300.jpg 300w, http://bright.wpbranch.com/wp-content/uploads/2017/07/study-150x150.jpg 150w, http://bright.wpbranch.com/wp-content/uploads/2017/07/study-180x180.jpg 180w, http://bright.wpbranch.com/wp-content/uploads/2017/07/study-600x600.jpg 600w, http://bright.wpbranch.com/wp-content/uploads/2017/07/study-480x480.jpg 480w\" sizes=\"(max-width: 300px) 100vw, 300px\" />\t\t\t\t\t\t\t\t\t</a>
                                                </div>
                                                <div class=\"col-xs-8\">
                                                    <div class=\"news-content\">
                                                        <h3 class=\"news-title\"><a href=\"../how-to-study-online-courses-effectively/index.html\">How to Study Online Courses Effectively</a></h3>
                                                        <div class=\"meta\">
                                                            <span class=\"meta-part\"><i class=\"fa fa-calendar-o\"></i> November 15, 2016</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\" post-1932 post type-post status-publish format-standard has-post-thumbnail hentry category-uncategorized category-university tag-online-courses tag-study\">

                                    <div class=\"news-grid-item\">
                                        <div class=\"news-grid-small-img\">
                                            <div class=\"row\">
                                                <div class=\"col-xs-4\">
                                                    <a href=\"../how-to-learn-a-foreign-language-in-3-steps/index.html\">
                                                        <img width=\"300\" height=\"300\" src=\"../wp-content/uploads/2017/07/student-2052868_1280-300x300.jpg\" class=\"attachment-bright-course-thumb-small size-bright-course-thumb-small wp-post-image\" alt=\"How to Learn a Foreign Language in 3 Steps\" srcset=\"http://bright.wpbranch.com/wp-content/uploads/2017/07/student-2052868_1280-300x300.jpg 300w, http://bright.wpbranch.com/wp-content/uploads/2017/07/student-2052868_1280-150x150.jpg 150w, http://bright.wpbranch.com/wp-content/uploads/2017/07/student-2052868_1280-180x180.jpg 180w, http://bright.wpbranch.com/wp-content/uploads/2017/07/student-2052868_1280-600x600.jpg 600w, http://bright.wpbranch.com/wp-content/uploads/2017/07/student-2052868_1280-480x480.jpg 480w\" sizes=\"(max-width: 300px) 100vw, 300px\" />\t\t\t\t\t\t\t\t\t</a>
                                                </div>
                                                <div class=\"col-xs-8\">
                                                    <div class=\"news-content\">
                                                        <h3 class=\"news-title\"><a href=\"../how-to-learn-a-foreign-language-in-3-steps/index.html\">How to Learn a Foreign Language in 3 Steps</a></h3>
                                                        <div class=\"meta\">
                                                            <span class=\"meta-part\"><i class=\"fa fa-calendar-o\"></i> January 11, 2017</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><div id=\"bright_course_list_widget-4\" class=\"col-md-3 col-sm-6 col-xs-12 widget widget_bright_course_list_widget\"><h4 class=\"widget-title footer-widget-title\">Course List</h4>\t\t\t\t\t\t<div class=\"bright-course-list slider-nav-true\" data-autoplay=\"true\" data-loop=\"false\" data-items=\"3\" data-desktopsmall=\"3\" data-tablet=\"2\" data-mobile=\"1\" data-navigation=\"true\" data-pagination=\"false\" data-direction=\"false\">
                                <div class=\"bright-course-item  bright-course-price-on bright-course-enroll-btn-on bright-course-students-on bright-course-review-on bright-show-course-meta- post-4464 lp_course type-lp_course status-publish has-post-thumbnail hentry course_category-bachelors-programs course\">

                                    <div class=\"courses-wrap\">

                                        <div class=\"bright-course-details\">
                                            <div class=\"course-detail-wrap\">

                                                <div class=\"course-content\">
                                                    <h3>
                                                        <a href=\"../courses/health-sciences/index.html\">Health Sciences</a>
                                                    </h3>


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"bright-course-item  bright-course-price-on bright-course-enroll-btn-on bright-course-students-on bright-course-review-on bright-show-course-meta- post-1910 lp_course type-lp_course status-publish has-post-thumbnail hentry course_category-backend-programming course_category-web-development course_tag-introduction-to-javascript course\">

                                    <div class=\"courses-wrap\">

                                        <div class=\"bright-course-details\">
                                            <div class=\"course-detail-wrap\">

                                                <div class=\"course-content\">
                                                    <h3>
                                                        <a href=\"../courses/introduction-to-javascript/index.html\">Advance Javascript &#8211; ES6</a>
                                                    </h3>


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"bright-course-item  bright-course-price-on bright-course-enroll-btn-on bright-course-students-on bright-course-review-on bright-show-course-meta- post-1940 lp_course type-lp_course status-publish has-post-thumbnail hentry course_category-apps-development course_tag-introduction-to-javascript course\">

                                    <div class=\"courses-wrap\">

                                        <div class=\"bright-course-details\">
                                            <div class=\"course-detail-wrap\">

                                                <div class=\"course-content\">
                                                    <h3>
                                                        <a href=\"../courses/android-n-app-development-with-java/index.html\">Android App Development</a>
                                                    </h3>


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"bright-course-item  bright-course-price-on bright-course-enroll-btn-on bright-course-students-on bright-course-review-on bright-show-course-meta- post-1996 lp_course type-lp_course status-publish has-post-thumbnail hentry course_category-graphic-design course\">

                                    <div class=\"courses-wrap\">

                                        <div class=\"bright-course-details\">
                                            <div class=\"course-detail-wrap\">

                                                <div class=\"course-content\">
                                                    <h3>
                                                        <a href=\"{{ asset('/courses/advanced-photoshop-skills/index.html')}}\">Photoshop Design Like A PRO</a>
                                                    </h3>


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"bright-course-item  bright-course-price-on bright-course-enroll-btn-on bright-course-students-on bright-course-review-on bright-show-course-meta- post-2007 lp_course type-lp_course status-publish has-post-thumbnail hentry course_category-web-development course_category-wordpress course\">

                                    <div class=\"courses-wrap\">

                                        <div class=\"bright-course-details\">
                                            <div class=\"course-detail-wrap\">

                                                <div class=\"course-content\">
                                                    <h3>
                                                        <a href=\"{{ asset('/courses/wordpress-for-beginners/index.html')}}\">WordPress for Intermediate</a>
                                                    </h3>


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"bright-course-item  bright-course-price-on bright-course-enroll-btn-on bright-course-students-on bright-course-review-on bright-show-course-meta- post-2013 lp_course type-lp_course status-publish has-post-thumbnail hentry course_category-apps-development course\">

                                    <div class=\"courses-wrap\">

                                        <div class=\"bright-course-details\">
                                            <div class=\"course-detail-wrap\">

                                                <div class=\"course-content\">
                                                    <h3>
                                                        <a href=\"{{ asset('/courses/ios-app-development-with-swift/index.html')}}\">iOS App Development with Swift</a>
                                                    </h3>


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><div id=\"bright_theme_gallery_widget-3\" class=\"col-md-3 col-sm-6 col-xs-12 widget widget_bright_theme_gallery_widget\"><h4 class=\"widget-title footer-widget-title\">Image Gallery</h4>
                            <div class=\"bright-portfolio row\">



                                <div class=\"portfolio-list\">

                                    <div class=\"mix col-md-4 col-sm-4 col-xs-4 post-3368 bright_gallery type-bright_gallery status-publish has-post-thumbnail hentry bright_gallery_cat-branding bright_gallery_cat-business\">
                                        <div class=\"portfolio-item\">
                                            <div class=\"portfolio-img\">
                                                <a class=\"lightbox\" href=\"{{ asset('wp-content/uploads/2017/06/img1.jpg')}}\"><img width=\"462\" height=\"380\" src=\"../wp-content/uploads/2017/06/img1.jpg\" class=\"attachment-bright-gallery-thumb size-bright-gallery-thumb wp-post-image\" alt=\"One\" srcset=\"http://bright.wpbranch.com/wp-content/uploads/2017/06/img1.jpg 462w, http://bright.wpbranch.com/wp-content/uploads/2017/06/img1-300x247.jpg 300w\" sizes=\"(max-width: 462px) 100vw, 462px\" /></a>
                                            </div>

                                        </div>
                                    </div>
                                    <div class=\"mix col-md-4 col-sm-4 col-xs-4 post-3370 bright_gallery type-bright_gallery status-publish has-post-thumbnail hentry bright_gallery_cat-blog bright_gallery_cat-branding\">
                                        <div class=\"portfolio-item\">
                                            <div class=\"portfolio-img\">
                                                <a class=\"lightbox\" href=\"{{ asset('wp-content/uploads/2017/06/img2.jpg')}}\"><img width=\"462\" height=\"380\" src=\"../wp-content/uploads/2017/06/img2.jpg\" class=\"attachment-bright-gallery-thumb size-bright-gallery-thumb wp-post-image\" alt=\"Two\" srcset=\"http://bright.wpbranch.com/wp-content/uploads/2017/06/img2.jpg 462w, http://bright.wpbranch.com/wp-content/uploads/2017/06/img2-300x247.jpg 300w\" sizes=\"(max-width: 462px) 100vw, 462px\" /></a>
                                            </div>

                                        </div>
                                    </div>
                                    <div class=\"mix col-md-4 col-sm-4 col-xs-4 post-3371 bright_gallery type-bright_gallery status-publish has-post-thumbnail hentry bright_gallery_cat-business bright_gallery_cat-design\">
                                        <div class=\"portfolio-item\">
                                            <div class=\"portfolio-img\">
                                                <a class=\"lightbox\" href=\"{{ asset('wp-content/uploads/2017/06/img3.jpg')}}\"><img width=\"462\" height=\"380\" src=\"../wp-content/uploads/2017/06/img3.jpg\" class=\"attachment-bright-gallery-thumb size-bright-gallery-thumb wp-post-image\" alt=\"Three\" srcset=\"http://bright.wpbranch.com/wp-content/uploads/2017/06/img3.jpg 462w, http://bright.wpbranch.com/wp-content/uploads/2017/06/img3-300x247.jpg 300w\" sizes=\"(max-width: 462px) 100vw, 462px\" /></a>
                                            </div>

                                        </div>
                                    </div>
                                    <div class=\"mix col-md-4 col-sm-4 col-xs-4 post-3372 bright_gallery type-bright_gallery status-publish has-post-thumbnail hentry bright_gallery_cat-design\">
                                        <div class=\"portfolio-item\">
                                            <div class=\"portfolio-img\">
                                                <a class=\"lightbox\" href=\"{{ asset('wp-content/uploads/2017/06/img4.jpg')}}\"><img width=\"462\" height=\"380\" src=\"../wp-content/uploads/2017/06/img4.jpg\" class=\"attachment-bright-gallery-thumb size-bright-gallery-thumb wp-post-image\" alt=\"Four\" srcset=\"http://bright.wpbranch.com/wp-content/uploads/2017/06/img4.jpg 462w, http://bright.wpbranch.com/wp-content/uploads/2017/06/img4-300x247.jpg 300w\" sizes=\"(max-width: 462px) 100vw, 462px\" /></a>
                                            </div>

                                        </div>
                                    </div>
                                    <div class=\"mix col-md-4 col-sm-4 col-xs-4 post-3373 bright_gallery type-bright_gallery status-publish has-post-thumbnail hentry bright_gallery_cat-blog bright_gallery_cat-design\">
                                        <div class=\"portfolio-item\">
                                            <div class=\"portfolio-img\">
                                                <a class=\"lightbox\" href=\"{{ asset('wp-content/uploads/2017/06/img5.jpg')}}\"><img width=\"462\" height=\"380\" src=\"../wp-content/uploads/2017/06/img5.jpg\" class=\"attachment-bright-gallery-thumb size-bright-gallery-thumb wp-post-image\" alt=\"Five\" srcset=\"http://bright.wpbranch.com/wp-content/uploads/2017/06/img5.jpg 462w, http://bright.wpbranch.com/wp-content/uploads/2017/06/img5-300x247.jpg 300w\" sizes=\"(max-width: 462px) 100vw, 462px\" /></a>
                                            </div>

                                        </div>
                                    </div>
                                    <div class=\"mix col-md-4 col-sm-4 col-xs-4 post-3399 bright_gallery type-bright_gallery status-publish has-post-thumbnail hentry bright_gallery_cat-branding bright_gallery_cat-business\">
                                        <div class=\"portfolio-item\">
                                            <div class=\"portfolio-img\">
                                                <a class=\"lightbox\" href=\"{{ asset('wp-content/uploads/2017/06/img6.jpg')}}\"><img width=\"462\" height=\"380\" src=\"../wp-content/uploads/2017/06/img6.jpg\" class=\"attachment-bright-gallery-thumb size-bright-gallery-thumb wp-post-image\" alt=\"Six\" srcset=\"http://bright.wpbranch.com/wp-content/uploads/2017/06/img6.jpg 462w, http://bright.wpbranch.com/wp-content/uploads/2017/06/img6-300x247.jpg 300w\" sizes=\"(max-width: 462px) 100vw, 462px\" /></a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>\t\t\t\t\t\t</div> <!-- end .row -->
                </div> <!-- end #footer-wrapper -->
            </div> <!-- end .container -->
        </div> <!-- end .footer-widgets -->

        <div class=\"site-info\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-6 col-sm-6 left-side\">
                        <p>© Copyright Bright 2017</p>
                    </div>

                    <div class=\"col-md-6 col-sm-6 text-right\">
                        <div class=\"bottom-social-icons pull-right\">
                            <a href=\"#\" target=\"_blank\"><i class=\"fa fa-twitter\"></i></a><a href=\"#\" target=\"_blank\"><i class=\"fa fa-facebook\"></i></a><a href=\"#\" target=\"_blank\"><i class=\"fa fa-google-plus\"></i></a><a href=\"#\" target=\"_blank\"><i class=\"fa fa-linkedin\"></i></a><a href=\"#\" target=\"_blank\"><i class=\"fa fa-youtube-play\"></i></a>\t\t\t\t\t\t            </div>
                    </div>
                </div>
            </div>
        </div><!-- .site-info -->
    </footer><!-- #colophon -->
</div><!-- #page -->
<script data-cfasync=\"false\" src=\"../cdn-cgi/scripts/d07b1474/cloudflare-static/email-decode.min.js\"></script><script>
    ( function ( body ) {
        'use strict';
        body.className = body.className.replace( /\\btribe-no-js\\b/, 'tribe-js' );
    } )( document.body );
</script>
<a href=\"#\" class=\"back-to-top\">
    <i class=\"fa fa-arrow-up\"></i>
</a>

<div class=\"loader bright-page-loader\">
    <div class=\"preloader2\">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
    </div>
</div>
<script type='text/javascript'> /* <![CDATA[ */var tribe_l10n_datatables = {\"aria\":{\"sort_ascending\":\": activate to sort column ascending\",\"sort_descending\":\": activate to sort column descending\"},\"length_menu\":\"Show _MENU_ entries\",\"empty_table\":\"No data available in table\",\"info\":\"Showing _START_ to _END_ of _TOTAL_ entries\",\"info_empty\":\"Showing 0 to 0 of 0 entries\",\"info_filtered\":\"(filtered from _MAX_ total entries)\",\"zero_records\":\"No matching records found\",\"search\":\"Search:\",\"all_selected_text\":\"All items on this page were selected. \",\"select_all_link\":\"Select all pages\",\"clear_selection\":\"Clear Selection.\",\"pagination\":{\"all\":\"All\",\"next\":\"Next\",\"previous\":\"Previous\"},\"select\":{\"rows\":{\"0\":\"\",\"_\":\": Selected %d rows\",\"1\":\": Selected 1 row\"}},\"datepicker\":{\"dayNames\":[\"Sunday\",\"Monday\",\"Tuesday\",\"Wednesday\",\"Thursday\",\"Friday\",\"Saturday\"],\"dayNamesShort\":[\"Sun\",\"Mon\",\"Tue\",\"Wed\",\"Thu\",\"Fri\",\"Sat\"],\"dayNamesMin\":[\"S\",\"M\",\"T\",\"W\",\"T\",\"F\",\"S\"],\"monthNames\":[\"January\",\"February\",\"March\",\"April\",\"May\",\"June\",\"July\",\"August\",\"September\",\"October\",\"November\",\"December\"],\"monthNamesShort\":[\"January\",\"February\",\"March\",\"April\",\"May\",\"June\",\"July\",\"August\",\"September\",\"October\",\"November\",\"December\"],\"nextText\":\"Next\",\"prevText\":\"Prev\",\"currentText\":\"Today\",\"closeText\":\"Done\"}};/* ]]> */ </script><script type='text/javascript'>
    /* <![CDATA[ */
    var wpcf7 = {\"apiSettings\":{\"root\":\"http:\\/\\/bright.wpbranch.com\\/wp-json\\/contact-form-7\\/v1\",\"namespace\":\"contact-form-7\\/v1\"},\"recaptcha\":{\"messages\":{\"empty\":\"Please verify that you are not a robot.\"}},\"cached\":\"1\"};
    /* ]]> */
</script>
<script type='text/javascript'>
    /* <![CDATA[ */
    var woocommerce_params = {\"ajax_url\":\"\\/wp-admin\\/admin-ajax.php\",\"wc_ajax_url\":\"http:\\/\\/bright.wpbranch.com\\/?wc-ajax=%%endpoint%%\"};
    /* ]]> */
</script>
<script type='text/javascript'>
    /* <![CDATA[ */
    var wc_cart_fragments_params = {\"ajax_url\":\"\\/wp-admin\\/admin-ajax.php\",\"wc_ajax_url\":\"http:\\/\\/bright.wpbranch.com\\/?wc-ajax=%%endpoint%%\",\"fragment_name\":\"wc_fragments_3de78db83a55e8e6cedbbde6b0c8e716\"};
    /* ]]> */
</script>
<script type='text/javascript'>
    /* <![CDATA[ */
    var jalerts_text = {\"okButton\":\"Ok\",\"cancelButton\":\"Cancel\"};
    /* ]]> */
</script>

<script type='text/javascript' src=\"{{ asset('wp-admin/load-scriptsf2de.php?c=0&amp;load%5B%5D=underscore,backbone,wp-embed&amp;ver=4.9.2')}}\"></script>
<script type='text/javascript' src=\"{{ asset('wp-content/plugins/bbpress/templates/default/js/editor01c4.js?ver=2.5.14-6684')}}\"></script>
<script type='text/javascript' src=\"{{ asset('wp-content/plugins/contact-form-7/includes/js/scripts20fd.js?ver=4.9.2')}}\"></script>
<script type='text/javascript' src=\"{{ asset('wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min44fd.js?ver=2.70')}}\"></script>
<script type='text/javascript' src=\"{{ asset('wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min6b25.js?ver=2.1.4')}}\"></script>
<script type='text/javascript' src=\"{{ asset('wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.minc169.js?ver=3.2.6')}}\"></script>
<script type='text/javascript' src=\"{{ asset('wp-content/plugins/woocommerce/assets/js/frontend/cart-fragments.minc169.js?ver=3.2.6')}}\"></script>
<script type='text/javascript' src=\"{{ asset('wp-content/themes/bright/js/bootstrap.min7433.js?ver=3.3.7')}}\"></script>
<script type='text/javascript' src=\"{{ asset('wp-content/themes/bright/js/jquery.slicknav.min4b68.js?ver=1.0.4')}}\"></script>
<script type='text/javascript' src=\"{{ asset('wp-content/themes/bright/js/owl.carousele7f0.js?ver=1.3.1')}}\"></script>
<script type='text/javascript' src=\"{{ asset('wp-content/themes/bright/js/jquery.countdown3601.js?ver=2.2.0')}}\"></script>
<script type='text/javascript' src=\"{{ asset('wp-content/themes/bright/js/jquery.magnific-popup.min4963.js?ver=1.1')}}\"></script>
<script type='text/javascript' src=\"{{ asset('wp-content/themes/bright/js/jquery.matchHeight-min5152.js?ver=1.0')}}\"></script>
<script type='text/javascript' src=\"{{ asset('wp-content/plugins/js_composer/assets/lib/waypoints/waypoints.min5243.js?ver=5.4.5')}}\"></script>
<script type='text/javascript' src=\"{{ asset('wp-content/themes/bright/js/jquery.counterup.min5152.js?ver=1.0')}}\"></script>
<script type='text/javascript' src=\"{{ asset('wp-content/themes/bright/js/jquery.mixitup.minc3e6.js?ver=2.1.11')}}\"></script>
<script type='text/javascript' src=\"{{ asset('wp-content/themes/bright/js/main5152.js?ver=1.0')}}\"></script>
<script type='text/javascript'>
    (function(\$) {
        'use strict';
    })(jQuery);
</script>
<script type='text/javascript' src=\"{{ asset('wp-content/themes/bright/js/skip-link-focus-fix4a7d.js?ver=20151215')}}\"></script>
<script type='text/javascript' src=\"{{ asset('wp-content/plugins/learnpress/assets/js/jquery.alert3ea8.js?ver=2.1.9.6')}}\"></script>
<script type='text/javascript' src=\"{{ asset('wp-content/plugins/learnpress/assets/js/global3ea8.js?ver=2.1.9.6')}}\"></script>
<script type='text/javascript' src=\"{{ asset('wp-content/plugins/learnpress/assets/js/frontend/learnpress3ea8.js?ver=2.1.9.6')}}\"></script>
<script type='text/javascript' src=\"{{ asset('wp-content/plugins/learnpress/assets/js/frontend/become-teacher3ea8.js?ver=2.1.9.6')}}\"></script>
<script type=\"text/javascript\">
    function wp_attempt_focus() {
        setTimeout( function() {
            try {
                d = document.getElementById('user_login');
                d.focus();
                d.select();
            } catch(e){}
        }, 200 );
    }

    wp_attempt_focus();
    if(typeof wpOnload=='function')wpOnload()
</script>
<script type='text/javascript'>
    /* <![CDATA[ */

    /* LearnPress Localized */
    var learn_press_js_localize = {\"confirm_cancel_order\":{\"message\":\"Are you sure you want to cancel order?\",\"title\":\"Cancel Order\"},\"unknown_error\":\"Unknown error!\",\"invalid_field\":\"Invalid field!\"};

    /* LearnPress Params */
    var LP_Settings = {\"ajax\":\"http:\\/\\/bright.wpbranch.com\\/wp-admin\\/admin-ajax.php\",\"plugin_url\":\"http:\\/\\/bright.wpbranch.com\\/wp-content\\/plugins\\/learnpress\\/\",\"siteurl\":\"http:\\/\\/bright.wpbranch.com\",\"current_url\":\"http:\\/\\/bright.wpbranch.com\\/login\\/\",\"localize\":{\"button_ok\":\"Ok\",\"button_cancel\":\"Cancel\",\"button_yes\":\"Yes\",\"button_no\":\"No\"}};
    /* ]]> */
</script>

</body>

<!-- Mirrored from bright.wpbranch.com/login/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 01 Feb 2018 08:28:51 GMT -->
</html>
<!-- Dynamic page generated in 0.387 seconds. -->
<!-- Cached page generated by WP-Super-Cache on 2018-02-01 08:12:37 -->

<!-- super cache -->
", "login.html.twig", "C:\\wamp64\\www\\ProjetPiDev\\app\\Resources\\views\\login.html.twig");
    }
}
