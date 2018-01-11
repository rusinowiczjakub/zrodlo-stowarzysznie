<?php

/* SonataAdminBundle::standard_layout.html.twig */
class __TwigTemplate_1ef22c3ca26d5a712cb7775027c88f9d56159e0afd10fc50913da31202789435 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'html_attributes' => array($this, 'block_html_attributes'),
            'meta_tags' => array($this, 'block_meta_tags'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'sonata_javascript_config' => array($this, 'block_sonata_javascript_config'),
            'sonata_javascript_pool' => array($this, 'block_sonata_javascript_pool'),
            'sonata_head_title' => array($this, 'block_sonata_head_title'),
            'body_attributes' => array($this, 'block_body_attributes'),
            'sonata_header' => array($this, 'block_sonata_header'),
            'sonata_header_noscript_warning' => array($this, 'block_sonata_header_noscript_warning'),
            'logo' => array($this, 'block_logo'),
            'sonata_nav' => array($this, 'block_sonata_nav'),
            'sonata_breadcrumb' => array($this, 'block_sonata_breadcrumb'),
            'sonata_top_nav_menu' => array($this, 'block_sonata_top_nav_menu'),
            'sonata_top_nav_menu_add_block' => array($this, 'block_sonata_top_nav_menu_add_block'),
            'sonata_top_nav_menu_user_block' => array($this, 'block_sonata_top_nav_menu_user_block'),
            'sonata_wrapper' => array($this, 'block_sonata_wrapper'),
            'sonata_left_side' => array($this, 'block_sonata_left_side'),
            'sonata_side_nav' => array($this, 'block_sonata_side_nav'),
            'sonata_sidebar_search' => array($this, 'block_sonata_sidebar_search'),
            'side_bar_before_nav' => array($this, 'block_side_bar_before_nav'),
            'side_bar_nav' => array($this, 'block_side_bar_nav'),
            'side_bar_after_nav' => array($this, 'block_side_bar_after_nav'),
            'side_bar_after_nav_content' => array($this, 'block_side_bar_after_nav_content'),
            'sonata_page_content' => array($this, 'block_sonata_page_content'),
            'sonata_page_content_header' => array($this, 'block_sonata_page_content_header'),
            'sonata_page_content_nav' => array($this, 'block_sonata_page_content_nav'),
            'tab_menu_navbar_header' => array($this, 'block_tab_menu_navbar_header'),
            'sonata_admin_content_actions_wrappers' => array($this, 'block_sonata_admin_content_actions_wrappers'),
            'sonata_admin_content' => array($this, 'block_sonata_admin_content'),
            'notice' => array($this, 'block_notice'),
            'bootlint' => array($this, 'block_bootlint'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 12
        $context["_preview"] = ((        $this->hasBlock("preview", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("preview", $context, $blocks))) : (null));
        // line 13
        $context["_form"] = ((        $this->hasBlock("form", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("form", $context, $blocks))) : (null));
        // line 14
        $context["_show"] = ((        $this->hasBlock("show", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("show", $context, $blocks))) : (null));
        // line 15
        $context["_list_table"] = ((        $this->hasBlock("list_table", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("list_table", $context, $blocks))) : (null));
        // line 16
        $context["_list_filters"] = ((        $this->hasBlock("list_filters", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("list_filters", $context, $blocks))) : (null));
        // line 17
        $context["_tab_menu"] = ((        $this->hasBlock("tab_menu", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("tab_menu", $context, $blocks))) : (null));
        // line 18
        $context["_content"] = ((        $this->hasBlock("content", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("content", $context, $blocks))) : (null));
        // line 19
        $context["_title"] = ((        $this->hasBlock("title", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("title", $context, $blocks))) : (null));
        // line 20
        $context["_breadcrumb"] = ((        $this->hasBlock("breadcrumb", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("breadcrumb", $context, $blocks))) : (null));
        // line 21
        $context["_actions"] = ((        $this->hasBlock("actions", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("actions", $context, $blocks))) : (null));
        // line 22
        $context["_navbar_title"] = ((        $this->hasBlock("navbar_title", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("navbar_title", $context, $blocks))) : (null));
        // line 23
        $context["_list_filters_actions"] = ((        $this->hasBlock("list_filters_actions", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("list_filters_actions", $context, $blocks))) : (null));
        // line 25
        echo "<!DOCTYPE html>
<html ";
        // line 26
        $this->displayBlock('html_attributes', $context, $blocks);
        echo ">
    <head>
        ";
        // line 28
        $this->displayBlock('meta_tags', $context, $blocks);
        // line 33
        echo "
        ";
        // line 34
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 39
        echo "
        ";
        // line 40
        $this->displayBlock('javascripts', $context, $blocks);
        // line 88
        echo "
        <title>
        ";
        // line 90
        $this->displayBlock('sonata_head_title', $context, $blocks);
        // line 116
        echo "        </title>
    </head>
    <body
            ";
        // line 119
        $this->displayBlock('body_attributes', $context, $blocks);
        // line 125
        echo ">

    <div class=\"wrapper\">

        ";
        // line 129
        $this->displayBlock('sonata_header', $context, $blocks);
        // line 228
        echo "
        ";
        // line 229
        $this->displayBlock('sonata_wrapper', $context, $blocks);
        // line 366
        echo "    </div>

    ";
        // line 368
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["sonata_admin"] ?? null), "adminPool", array()), "getOption", array(0 => "use_bootlint"), "method")) {
            // line 369
            echo "        ";
            $this->displayBlock('bootlint', $context, $blocks);
            // line 375
            echo "    ";
        }
        // line 376
        echo "
    </body>
</html>
";
    }

    // line 26
    public function block_html_attributes($context, array $blocks = array())
    {
        echo "class=\"no-js\"";
    }

    // line 28
    public function block_meta_tags($context, array $blocks = array())
    {
        // line 29
        echo "            <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
            <meta charset=\"UTF-8\">
            <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        ";
    }

    // line 34
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 35
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["sonata_admin"] ?? null), "adminPool", array()), "getOption", array(0 => "stylesheets", 1 => array()), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["stylesheet"]) {
            // line 36
            echo "                <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($context["stylesheet"]), "html", null, true);
            echo "\">
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stylesheet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "        ";
    }

    // line 40
    public function block_javascripts($context, array $blocks = array())
    {
        // line 41
        echo "            ";
        $this->displayBlock('sonata_javascript_config', $context, $blocks);
        // line 61
        echo "
            ";
        // line 62
        $this->displayBlock('sonata_javascript_pool', $context, $blocks);
        // line 67
        echo "
            ";
        // line 68
        $context["locale"] = twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "request", array()), "locale", array());
        // line 69
        echo "            ";
        // line 70
        echo "            ";
        if ((twig_slice($this->env, ($context["locale"] ?? null), 0, 2) != "en")) {
            // line 71
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/sonatacore/vendor/moment/locale/" . twig_replace_filter(twig_lower_filter($this->env,             // line 73
($context["locale"] ?? null)), array("_" => "-"))) . ".js")), "html", null, true);
            // line 75
            echo "\"></script>
            ";
        }
        // line 77
        echo "
            ";
        // line 79
        echo "            ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["sonata_admin"] ?? null), "adminPool", array()), "getOption", array(0 => "use_select2"), "method")) {
            // line 80
            echo "                ";
            if ((($context["locale"] ?? null) == "pt")) {
                $context["locale"] = "pt_PT";
            }
            // line 81
            echo "
                ";
            // line 83
            echo "                ";
            if ((twig_slice($this->env, ($context["locale"] ?? null), 0, 2) != "en")) {
                // line 84
                echo "                    <script src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/sonatacore/vendor/select2/select2_locale_" . twig_replace_filter(($context["locale"] ?? null), array("_" => "-"))) . ".js")), "html", null, true);
                echo "\"></script>
                ";
            }
            // line 86
            echo "            ";
        }
        // line 87
        echo "        ";
    }

    // line 41
    public function block_sonata_javascript_config($context, array $blocks = array())
    {
        // line 42
        echo "                <script>
                    window.SONATA_CONFIG = {
                        CONFIRM_EXIT: ";
        // line 44
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["sonata_admin"] ?? null), "adminPool", array()), "getOption", array(0 => "confirm_exit"), "method")) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
                        USE_SELECT2: ";
        // line 45
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["sonata_admin"] ?? null), "adminPool", array()), "getOption", array(0 => "use_select2"), "method")) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
                        USE_ICHECK: ";
        // line 46
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["sonata_admin"] ?? null), "adminPool", array()), "getOption", array(0 => "use_icheck"), "method")) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
                        USE_STICKYFORMS: ";
        // line 47
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["sonata_admin"] ?? null), "adminPool", array()), "getOption", array(0 => "use_stickyforms"), "method")) {
            echo "true";
        } else {
            echo "false";
        }
        // line 48
        echo "                    };
                    window.SONATA_TRANSLATIONS = {
                        CONFIRM_EXIT: '";
        // line 50
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("confirm_exit", array(), "SonataAdminBundle"), "js"), "html", null, true);
        echo "'
                    };

                    // http://getbootstrap.com/getting-started/#support-ie10-width
                    if (navigator.userAgent.match(/IEMobile\\/10\\.0/)) {
                        var msViewportStyle = document.createElement('style');
                        msViewportStyle.appendChild(document.createTextNode('@-ms-viewport{width:auto!important}'));
                        document.querySelector('head').appendChild(msViewportStyle);
                    }
                </script>
            ";
    }

    // line 62
    public function block_sonata_javascript_pool($context, array $blocks = array())
    {
        // line 63
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["sonata_admin"] ?? null), "adminPool", array()), "getOption", array(0 => "javascripts", 1 => array()), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["javascript"]) {
            // line 64
            echo "                    <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($context["javascript"]), "html", null, true);
            echo "\"></script>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['javascript'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "            ";
    }

    // line 90
    public function block_sonata_head_title($context, array $blocks = array())
    {
        // line 91
        echo "            ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Admin", array(), "SonataAdminBundle"), "html", null, true);
        echo "

            ";
        // line 93
        if ( !twig_test_empty(($context["_title"] ?? null))) {
            // line 94
            echo "                ";
            echo strip_tags(($context["_title"] ?? null));
            echo "
            ";
        } else {
            // line 96
            echo "                ";
            if (array_key_exists("action", $context)) {
                // line 97
                echo "                    -
                    ";
                // line 98
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["breadcrumbs_builder"] ?? null), "breadcrumbs", array(0 => ($context["admin"] ?? null), 1 => ($context["action"] ?? null)), "method"));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
                    // line 99
                    echo "                        ";
                    if ( !twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "first", array())) {
                        // line 100
                        echo "                            ";
                        if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index", array()) != 2)) {
                            // line 101
                            echo "                                &gt;
                            ";
                        }
                        // line 104
                        $context["translation_domain"] = twig_get_attribute($this->env, $this->getSourceContext(), $context["menu"], "extra", array(0 => "translation_domain", 1 => "messages"), "method");
                        // line 105
                        $context["label"] = twig_get_attribute($this->env, $this->getSourceContext(), $context["menu"], "label", array());
                        // line 106
                        if ( !(($context["translation_domain"] ?? null) === false)) {
                            // line 107
                            $context["label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? null), twig_get_attribute($this->env, $this->getSourceContext(), $context["menu"], "extra", array(0 => "translation_params", 1 => array()), "method"), ($context["translation_domain"] ?? null));
                        }
                        // line 110
                        echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
                        echo "
                        ";
                    }
                    // line 112
                    echo "                    ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 113
                echo "                ";
            }
            // line 114
            echo "            ";
        }
        // line 115
        echo "        ";
    }

    // line 119
    public function block_body_attributes($context, array $blocks = array())
    {
        // line 120
        echo "class=\"sonata-bc skin-black fixed
                ";
        // line 121
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "request", array()), "cookies", array()), "get", array(0 => "sonata_sidebar_hide"), "method")) {
            // line 122
            echo "sidebar-collapse";
        }
        // line 123
        echo "\"";
    }

    // line 129
    public function block_sonata_header($context, array $blocks = array())
    {
        // line 130
        echo "            <header class=\"main-header\">
                ";
        // line 131
        $this->displayBlock('sonata_header_noscript_warning', $context, $blocks);
        // line 138
        echo "                ";
        $this->displayBlock('logo', $context, $blocks);
        // line 150
        echo "                ";
        $this->displayBlock('sonata_nav', $context, $blocks);
        // line 226
        echo "            </header>
        ";
    }

    // line 131
    public function block_sonata_header_noscript_warning($context, array $blocks = array())
    {
        // line 132
        echo "                    <noscript>
                        <div class=\"noscript-warning\">
                            ";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("noscript_warning", array(), "SonataAdminBundle"), "html", null, true);
        echo "
                        </div>
                    </noscript>
                ";
    }

    // line 138
    public function block_logo($context, array $blocks = array())
    {
        // line 139
        echo "                    ";
        ob_start();
        // line 140
        echo "                        <a class=\"logo\" href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sonata_admin_dashboard");
        echo "\">
                            ";
        // line 141
        if ((("single_image" == twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["sonata_admin"] ?? null), "adminPool", array()), "getOption", array(0 => "title_mode"), "method")) || ("both" == twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["sonata_admin"] ?? null), "adminPool", array()), "getOption", array(0 => "title_mode"), "method")))) {
            // line 142
            echo "                                <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["sonata_admin"] ?? null), "adminPool", array()), "titlelogo", array())), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["sonata_admin"] ?? null), "adminPool", array()), "title", array()), "html", null, true);
            echo "\">
                            ";
        }
        // line 144
        echo "                            ";
        if ((("single_text" == twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["sonata_admin"] ?? null), "adminPool", array()), "getOption", array(0 => "title_mode"), "method")) || ("both" == twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["sonata_admin"] ?? null), "adminPool", array()), "getOption", array(0 => "title_mode"), "method")))) {
            // line 145
            echo "                                <span>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["sonata_admin"] ?? null), "adminPool", array()), "title", array()), "html", null, true);
            echo "</span>
                            ";
        }
        // line 147
        echo "                        </a>
                    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 149
        echo "                ";
    }

    // line 150
    public function block_sonata_nav($context, array $blocks = array())
    {
        // line 151
        echo "                    <nav class=\"navbar navbar-static-top\" role=\"navigation\">
                        <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                            <span class=\"sr-only\">Toggle navigation</span>
                        </a>

                        <div class=\"navbar-left\">
                            ";
        // line 157
        $this->displayBlock('sonata_breadcrumb', $context, $blocks);
        // line 196
        echo "                        </div>

                        ";
        // line 198
        $this->displayBlock('sonata_top_nav_menu', $context, $blocks);
        // line 224
        echo "                    </nav>
                ";
    }

    // line 157
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
        // line 158
        echo "                                <div class=\"hidden-xs\">
                                    ";
        // line 159
        if (( !twig_test_empty(($context["_breadcrumb"] ?? null)) || array_key_exists("action", $context))) {
            // line 160
            echo "                                        <ol class=\"nav navbar-top-links breadcrumb\">
                                            ";
            // line 161
            if (twig_test_empty(($context["_breadcrumb"] ?? null))) {
                // line 162
                echo "                                                ";
                if (array_key_exists("action", $context)) {
                    // line 163
                    echo "                                                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["breadcrumbs_builder"] ?? null), "breadcrumbs", array(0 => ($context["admin"] ?? null), 1 => ($context["action"] ?? null)), "method"));
                    $context['loop'] = array(
                      'parent' => $context['_parent'],
                      'index0' => 0,
                      'index'  => 1,
                      'first'  => true,
                    );
                    if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                        $length = count($context['_seq']);
                        $context['loop']['revindex0'] = $length - 1;
                        $context['loop']['revindex'] = $length;
                        $context['loop']['length'] = $length;
                        $context['loop']['last'] = 1 === $length;
                    }
                    foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
                        // line 164
                        $context["translation_domain"] = twig_get_attribute($this->env, $this->getSourceContext(), $context["menu"], "extra", array(0 => "translation_domain", 1 => "messages"), "method");
                        // line 165
                        $context["label"] = twig_get_attribute($this->env, $this->getSourceContext(), $context["menu"], "label", array());
                        // line 166
                        if ( !(($context["translation_domain"] ?? null) === false)) {
                            // line 167
                            $context["label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? null), twig_get_attribute($this->env, $this->getSourceContext(), $context["menu"], "extra", array(0 => "translation_params", 1 => array()), "method"), ($context["translation_domain"] ?? null));
                        }
                        // line 170
                        if ( !twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "last", array())) {
                            // line 171
                            echo "                                                            <li>
                                                                ";
                            // line 172
                            if ( !twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), $context["menu"], "uri", array()))) {
                                // line 173
                                echo "                                                                    <a href=\"";
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["menu"], "uri", array()), "html", null, true);
                                echo "\">
                                                                        ";
                                // line 174
                                if (twig_get_attribute($this->env, $this->getSourceContext(), $context["menu"], "extra", array(0 => "safe_label", 1 => true), "method")) {
                                    // line 175
                                    echo ($context["label"] ?? null);
                                } else {
                                    // line 177
                                    echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
                                }
                                // line 179
                                echo "                                                                    </a>
                                                                ";
                            } else {
                                // line 181
                                echo "                                                                    <span>";
                                echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
                                echo "</span>
                                                                ";
                            }
                            // line 183
                            echo "                                                            </li>
                                                        ";
                        } else {
                            // line 185
                            echo "                                                            <li class=\"active\"><span>";
                            echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
                            echo "</span></li>
                                                        ";
                        }
                        // line 187
                        echo "                                                    ";
                        ++$context['loop']['index0'];
                        ++$context['loop']['index'];
                        $context['loop']['first'] = false;
                        if (isset($context['loop']['length'])) {
                            --$context['loop']['revindex0'];
                            --$context['loop']['revindex'];
                            $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 188
                    echo "                                                ";
                }
                // line 189
                echo "                                            ";
            } else {
                // line 190
                echo "                                                ";
                echo ($context["_breadcrumb"] ?? null);
                echo "
                                            ";
            }
            // line 192
            echo "                                        </ol>
                                    ";
        }
        // line 194
        echo "                                </div>
                            ";
    }

    // line 198
    public function block_sonata_top_nav_menu($context, array $blocks = array())
    {
        // line 199
        echo "                            ";
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "user", array()) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["sonata_admin"] ?? null), "adminPool", array()), "getOption", array(0 => "role_admin"), "method")))) {
            // line 200
            echo "                                <div class=\"navbar-custom-menu\">
                                    <ul class=\"nav navbar-nav\">
                                        ";
            // line 202
            $this->displayBlock('sonata_top_nav_menu_add_block', $context, $blocks);
            // line 210
            echo "                                        ";
            $this->displayBlock('sonata_top_nav_menu_user_block', $context, $blocks);
            // line 220
            echo "                                    </ul>
                                </div>
                            ";
        }
        // line 223
        echo "                        ";
    }

    // line 202
    public function block_sonata_top_nav_menu_add_block($context, array $blocks = array())
    {
        // line 203
        echo "                                            <li class=\"dropdown\">
                                                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                                    <i class=\"fa fa-plus-square fa-fw\" aria-hidden=\"true\"></i> <i class=\"fa fa-caret-down\" aria-hidden=\"true\"></i>
                                                </a>
                                                ";
        // line 207
        $this->loadTemplate(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["sonata_admin"] ?? null), "adminPool", array()), "getTemplate", array(0 => "add_block"), "method"), "SonataAdminBundle::standard_layout.html.twig", 207)->display($context);
        // line 208
        echo "                                            </li>
                                        ";
    }

    // line 210
    public function block_sonata_top_nav_menu_user_block($context, array $blocks = array())
    {
        // line 211
        echo "                                            <li class=\"dropdown user-menu\">
                                                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                                    <i class=\"fa fa-user fa-fw\" aria-hidden=\"true\"></i> <i class=\"fa fa-caret-down\" aria-hidden=\"true\"></i>
                                                </a>
                                                <ul class=\"dropdown-menu dropdown-user\">
                                                    ";
        // line 216
        $this->loadTemplate(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["sonata_admin"] ?? null), "adminPool", array()), "getTemplate", array(0 => "user_block"), "method"), "SonataAdminBundle::standard_layout.html.twig", 216)->display($context);
        // line 217
        echo "                                                </ul>
                                            </li>
                                        ";
    }

    // line 229
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        // line 230
        echo "            ";
        $this->displayBlock('sonata_left_side', $context, $blocks);
        // line 262
        echo "
            <div class=\"content-wrapper\">
                ";
        // line 264
        $this->displayBlock('sonata_page_content', $context, $blocks);
        // line 364
        echo "            </div>
        ";
    }

    // line 230
    public function block_sonata_left_side($context, array $blocks = array())
    {
        // line 231
        echo "                <aside class=\"main-sidebar\">
                    <section class=\"sidebar\">
                        ";
        // line 233
        $this->displayBlock('sonata_side_nav', $context, $blocks);
        // line 259
        echo "                    </section>
                </aside>
            ";
    }

    // line 233
    public function block_sonata_side_nav($context, array $blocks = array())
    {
        // line 234
        echo "                            ";
        $this->displayBlock('sonata_sidebar_search', $context, $blocks);
        // line 246
        echo "
                            ";
        // line 247
        $this->displayBlock('side_bar_before_nav', $context, $blocks);
        // line 248
        echo "                            ";
        $this->displayBlock('side_bar_nav', $context, $blocks);
        // line 251
        echo "                            ";
        $this->displayBlock('side_bar_after_nav', $context, $blocks);
        // line 258
        echo "                        ";
    }

    // line 234
    public function block_sonata_sidebar_search($context, array $blocks = array())
    {
        // line 235
        echo "                                <form action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sonata_admin_search");
        echo "\" method=\"GET\" class=\"sidebar-form\" role=\"search\">
                                    <div class=\"input-group custom-search-form\">
                                        <input type=\"text\" name=\"q\" value=\"";
        // line 237
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "request", array()), "get", array(0 => "q"), "method"), "html", null, true);
        echo "\" class=\"form-control\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("search_placeholder", array(), "SonataAdminBundle"), "html", null, true);
        echo "\">
                                        <span class=\"input-group-btn\">
                                            <button class=\"btn btn-flat\" type=\"submit\">
                                                <i class=\"fa fa-search\" aria-hidden=\"true\"></i>
                                            </button>
                                        </span>
                                    </div>
                                </form>
                            ";
    }

    // line 247
    public function block_side_bar_before_nav($context, array $blocks = array())
    {
        echo " ";
    }

    // line 248
    public function block_side_bar_nav($context, array $blocks = array())
    {
        // line 249
        echo "                                ";
        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render("sonata_admin_sidebar", array("template" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["sonata_admin"] ?? null), "adminPool", array()), "getTemplate", array(0 => "knp_menu_template"), "method")));
        echo "
                            ";
    }

    // line 251
    public function block_side_bar_after_nav($context, array $blocks = array())
    {
        // line 252
        echo "                                <p class=\"text-center small\" style=\"border-top: 1px solid #444444; padding-top: 10px\">
                                    ";
        // line 253
        $this->displayBlock('side_bar_after_nav_content', $context, $blocks);
        // line 256
        echo "                                </p>
                            ";
    }

    // line 253
    public function block_side_bar_after_nav_content($context, array $blocks = array())
    {
        // line 254
        echo "                                        <a href=\"https://sonata-project.org\" rel=\"noreferrer\" target=\"_blank\">sonata project</a>
                                    ";
    }

    // line 264
    public function block_sonata_page_content($context, array $blocks = array())
    {
        // line 265
        echo "                    <section class=\"content-header\">

                        ";
        // line 267
        $this->displayBlock('sonata_page_content_header', $context, $blocks);
        // line 325
        echo "                    </section>

                    <section class=\"content\">
                        ";
        // line 328
        $this->displayBlock('sonata_admin_content', $context, $blocks);
        // line 362
        echo "                    </section>
                ";
    }

    // line 267
    public function block_sonata_page_content_header($context, array $blocks = array())
    {
        // line 268
        echo "                            ";
        $this->displayBlock('sonata_page_content_nav', $context, $blocks);
        // line 324
        echo "                        ";
    }

    // line 268
    public function block_sonata_page_content_nav($context, array $blocks = array())
    {
        // line 269
        echo "                                ";
        if (((( !twig_test_empty(($context["_navbar_title"] ?? null)) ||  !twig_test_empty(        // line 270
($context["_tab_menu"] ?? null))) ||  !twig_test_empty(        // line 271
($context["_actions"] ?? null))) ||  !twig_test_empty(        // line 272
($context["_list_filters_actions"] ?? null)))) {
            // line 274
            echo "                                    <nav class=\"navbar navbar-default\" role=\"navigation\">
                                        <div class=\"container-fluid\">
                                            ";
            // line 276
            $this->displayBlock('tab_menu_navbar_header', $context, $blocks);
            // line 283
            echo "
                                            <div class=\"navbar-collapse\">
                                                ";
            // line 285
            if ( !twig_test_empty(($context["_tab_menu"] ?? null))) {
                // line 286
                echo "                                                    <div class=\"navbar-left\">
                                                        ";
                // line 287
                echo ($context["_tab_menu"] ?? null);
                echo "
                                                    </div>
                                                ";
            }
            // line 290
            echo "
                                                ";
            // line 291
            if ((((array_key_exists("admin", $context) && array_key_exists("action", $context)) && (($context["action"] ?? null) == "list")) && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["admin"] ?? null), "listModes", array())) > 1))) {
                // line 292
                echo "                                                    <div class=\"nav navbar-right btn-group\">
                                                        ";
                // line 293
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["admin"] ?? null), "listModes", array()));
                foreach ($context['_seq'] as $context["mode"] => $context["settings"]) {
                    // line 294
                    echo "                                                            <a href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["admin"] ?? null), "generateUrl", array(0 => "list", 1 => twig_array_merge(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "request", array()), "query", array()), "all", array()), array("_list_mode" => $context["mode"]))), "method"), "html", null, true);
                    echo "\" class=\"btn btn-default navbar-btn btn-sm";
                    if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["admin"] ?? null), "getListMode", array(), "method") == $context["mode"])) {
                        echo " active";
                    }
                    echo "\"><i class=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["settings"], "class", array()), "html", null, true);
                    echo "\"></i></a>
                                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['mode'], $context['settings'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 296
                echo "                                                    </div>
                                                ";
            }
            // line 298
            echo "
                                                ";
            // line 299
            $this->displayBlock('sonata_admin_content_actions_wrappers', $context, $blocks);
            // line 315
            echo "
                                                ";
            // line 316
            if ( !twig_test_empty(($context["_list_filters_actions"] ?? null))) {
                // line 317
                echo "                                                    ";
                echo ($context["_list_filters_actions"] ?? null);
                echo "
                                                ";
            }
            // line 319
            echo "                                            </div>
                                        </div>
                                    </nav>
                                ";
        }
        // line 323
        echo "                            ";
    }

    // line 276
    public function block_tab_menu_navbar_header($context, array $blocks = array())
    {
        // line 277
        echo "                                                ";
        if ( !twig_test_empty(($context["_navbar_title"] ?? null))) {
            // line 278
            echo "                                                    <div class=\"navbar-header\">
                                                        <a class=\"navbar-brand\" href=\"#\">";
            // line 279
            echo ($context["_navbar_title"] ?? null);
            echo "</a>
                                                    </div>
                                                ";
        }
        // line 282
        echo "                                            ";
    }

    // line 299
    public function block_sonata_admin_content_actions_wrappers($context, array $blocks = array())
    {
        // line 300
        echo "                                                    ";
        if ( !twig_test_empty(twig_trim_filter(twig_replace_filter(($context["_actions"] ?? null), array("<li>" => "", "</li>" => ""))))) {
            // line 301
            echo "                                                        <ul class=\"nav navbar-nav navbar-right\">
                                                        ";
            // line 302
            if ((twig_length_filter($this->env, twig_split_filter($this->env, ($context["_actions"] ?? null), "</a>")) > 2)) {
                // line 303
                echo "                                                            <li class=\"dropdown sonata-actions\">
                                                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
                // line 304
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("link_actions", array(), "SonataAdminBundle"), "html", null, true);
                echo " <b class=\"caret\"></b></a>
                                                                <ul class=\"dropdown-menu\" role=\"menu\">
                                                                    ";
                // line 306
                echo ($context["_actions"] ?? null);
                echo "
                                                                </ul>
                                                            </li>
                                                        ";
            } else {
                // line 310
                echo "                                                            ";
                echo ($context["_actions"] ?? null);
                echo "
                                                        ";
            }
            // line 312
            echo "                                                        </ul>
                                                    ";
        }
        // line 314
        echo "                                                ";
    }

    // line 328
    public function block_sonata_admin_content($context, array $blocks = array())
    {
        // line 329
        echo "
                            ";
        // line 330
        $this->displayBlock('notice', $context, $blocks);
        // line 333
        echo "
                            ";
        // line 334
        if ( !twig_test_empty(($context["_preview"] ?? null))) {
            // line 335
            echo "                                <div class=\"sonata-ba-preview\">";
            echo ($context["_preview"] ?? null);
            echo "</div>
                            ";
        }
        // line 337
        echo "
                            ";
        // line 338
        if ( !twig_test_empty(($context["_content"] ?? null))) {
            // line 339
            echo "                                <div class=\"sonata-ba-content\">";
            echo ($context["_content"] ?? null);
            echo "</div>
                            ";
        }
        // line 341
        echo "
                            ";
        // line 342
        if ( !twig_test_empty(($context["_show"] ?? null))) {
            // line 343
            echo "                                <div class=\"sonata-ba-show\">";
            echo ($context["_show"] ?? null);
            echo "</div>
                            ";
        }
        // line 345
        echo "
                            ";
        // line 346
        if ( !twig_test_empty(($context["_form"] ?? null))) {
            // line 347
            echo "                                <div class=\"sonata-ba-form\">";
            echo ($context["_form"] ?? null);
            echo "</div>
                            ";
        }
        // line 349
        echo "
                            ";
        // line 350
        if ( !twig_test_empty(($context["_list_filters"] ?? null))) {
            // line 351
            echo "                                <div class=\"row\">
                                    ";
            // line 352
            echo ($context["_list_filters"] ?? null);
            echo "
                                </div>
                            ";
        }
        // line 355
        echo "
                            ";
        // line 356
        if ( !twig_test_empty(($context["_list_table"] ?? null))) {
            // line 357
            echo "                                <div class=\"row\">
                                    ";
            // line 358
            echo ($context["_list_table"] ?? null);
            echo "
                                </div>
                            ";
        }
        // line 361
        echo "                        ";
    }

    // line 330
    public function block_notice($context, array $blocks = array())
    {
        // line 331
        echo "                                ";
        $this->loadTemplate("SonataCoreBundle:FlashMessage:render.html.twig", "SonataAdminBundle::standard_layout.html.twig", 331)->display($context);
        // line 332
        echo "                            ";
    }

    // line 369
    public function block_bootlint($context, array $blocks = array())
    {
        // line 370
        echo "            ";
        // line 371
        echo "            <script type=\"text/javascript\">
                javascript:(function(){var s=document.createElement(\"script\");s.onload=function(){bootlint.showLintReportForCurrentDocument([], {hasProblems: false, problemFree: false});};s.src=\"https://maxcdn.bootstrapcdn.com/bootlint/latest/bootlint.min.js\";document.body.appendChild(s)})();
            </script>
        ";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle::standard_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1078 => 371,  1076 => 370,  1073 => 369,  1069 => 332,  1066 => 331,  1063 => 330,  1059 => 361,  1053 => 358,  1050 => 357,  1048 => 356,  1045 => 355,  1039 => 352,  1036 => 351,  1034 => 350,  1031 => 349,  1025 => 347,  1023 => 346,  1020 => 345,  1014 => 343,  1012 => 342,  1009 => 341,  1003 => 339,  1001 => 338,  998 => 337,  992 => 335,  990 => 334,  987 => 333,  985 => 330,  982 => 329,  979 => 328,  975 => 314,  971 => 312,  965 => 310,  958 => 306,  953 => 304,  950 => 303,  948 => 302,  945 => 301,  942 => 300,  939 => 299,  935 => 282,  929 => 279,  926 => 278,  923 => 277,  920 => 276,  916 => 323,  910 => 319,  904 => 317,  902 => 316,  899 => 315,  897 => 299,  894 => 298,  890 => 296,  875 => 294,  871 => 293,  868 => 292,  866 => 291,  863 => 290,  857 => 287,  854 => 286,  852 => 285,  848 => 283,  846 => 276,  842 => 274,  840 => 272,  839 => 271,  838 => 270,  836 => 269,  833 => 268,  829 => 324,  826 => 268,  823 => 267,  818 => 362,  816 => 328,  811 => 325,  809 => 267,  805 => 265,  802 => 264,  797 => 254,  794 => 253,  789 => 256,  787 => 253,  784 => 252,  781 => 251,  774 => 249,  771 => 248,  765 => 247,  750 => 237,  744 => 235,  741 => 234,  737 => 258,  734 => 251,  731 => 248,  729 => 247,  726 => 246,  723 => 234,  720 => 233,  714 => 259,  712 => 233,  708 => 231,  705 => 230,  700 => 364,  698 => 264,  694 => 262,  691 => 230,  688 => 229,  682 => 217,  680 => 216,  673 => 211,  670 => 210,  665 => 208,  663 => 207,  657 => 203,  654 => 202,  650 => 223,  645 => 220,  642 => 210,  640 => 202,  636 => 200,  633 => 199,  630 => 198,  625 => 194,  621 => 192,  615 => 190,  612 => 189,  609 => 188,  595 => 187,  589 => 185,  585 => 183,  579 => 181,  575 => 179,  572 => 177,  569 => 175,  567 => 174,  562 => 173,  560 => 172,  557 => 171,  555 => 170,  552 => 167,  550 => 166,  548 => 165,  546 => 164,  528 => 163,  525 => 162,  523 => 161,  520 => 160,  518 => 159,  515 => 158,  512 => 157,  507 => 224,  505 => 198,  501 => 196,  499 => 157,  491 => 151,  488 => 150,  484 => 149,  480 => 147,  474 => 145,  471 => 144,  463 => 142,  461 => 141,  456 => 140,  453 => 139,  450 => 138,  442 => 134,  438 => 132,  435 => 131,  430 => 226,  427 => 150,  424 => 138,  422 => 131,  419 => 130,  416 => 129,  412 => 123,  409 => 122,  407 => 121,  404 => 120,  401 => 119,  397 => 115,  394 => 114,  391 => 113,  377 => 112,  372 => 110,  369 => 107,  367 => 106,  365 => 105,  363 => 104,  359 => 101,  356 => 100,  353 => 99,  336 => 98,  333 => 97,  330 => 96,  324 => 94,  322 => 93,  316 => 91,  313 => 90,  309 => 66,  300 => 64,  295 => 63,  292 => 62,  277 => 50,  273 => 48,  267 => 47,  259 => 46,  251 => 45,  243 => 44,  239 => 42,  236 => 41,  232 => 87,  229 => 86,  223 => 84,  220 => 83,  217 => 81,  212 => 80,  209 => 79,  206 => 77,  202 => 75,  200 => 73,  198 => 71,  195 => 70,  193 => 69,  191 => 68,  188 => 67,  186 => 62,  183 => 61,  180 => 41,  177 => 40,  173 => 38,  164 => 36,  159 => 35,  156 => 34,  149 => 29,  146 => 28,  140 => 26,  133 => 376,  130 => 375,  127 => 369,  125 => 368,  121 => 366,  119 => 229,  116 => 228,  114 => 129,  108 => 125,  106 => 119,  101 => 116,  99 => 90,  95 => 88,  93 => 40,  90 => 39,  88 => 34,  85 => 33,  83 => 28,  78 => 26,  75 => 25,  73 => 23,  71 => 22,  69 => 21,  67 => 20,  65 => 19,  63 => 18,  61 => 17,  59 => 16,  57 => 15,  55 => 14,  53 => 13,  51 => 12,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SonataAdminBundle::standard_layout.html.twig", "/home/kuba/Workspace/vendor/sonata-project/admin-bundle/src/Resources/views/standard_layout.html.twig");
    }
}
