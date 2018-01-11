<?php

/* SonataAdminBundle::standard_layout.html.twig */
class __TwigTemplate_9404be1a42b2ba1a0aa33a93ff1955613feb9ea443705b21c8b547ede2ccf544 extends Twig_Template
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
        $__internal_c96df03e35c9d4fe6a5a61e1ae661fa42e0de66619c30eaf958877a1d9e27eb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c96df03e35c9d4fe6a5a61e1ae661fa42e0de66619c30eaf958877a1d9e27eb0->enter($__internal_c96df03e35c9d4fe6a5a61e1ae661fa42e0de66619c30eaf958877a1d9e27eb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle::standard_layout.html.twig"));

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
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 368, $this->getSourceContext()); })()), "adminPool", array()), "getOption", array(0 => "use_bootlint"), "method")) {
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
        
        $__internal_c96df03e35c9d4fe6a5a61e1ae661fa42e0de66619c30eaf958877a1d9e27eb0->leave($__internal_c96df03e35c9d4fe6a5a61e1ae661fa42e0de66619c30eaf958877a1d9e27eb0_prof);

    }

    // line 26
    public function block_html_attributes($context, array $blocks = array())
    {
        $__internal_e4ea8d53afa218c12b7af742c5e199ea2b83fa604d3a6dc800622549ecdf2b67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4ea8d53afa218c12b7af742c5e199ea2b83fa604d3a6dc800622549ecdf2b67->enter($__internal_e4ea8d53afa218c12b7af742c5e199ea2b83fa604d3a6dc800622549ecdf2b67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "html_attributes"));

        echo "class=\"no-js\"";
        
        $__internal_e4ea8d53afa218c12b7af742c5e199ea2b83fa604d3a6dc800622549ecdf2b67->leave($__internal_e4ea8d53afa218c12b7af742c5e199ea2b83fa604d3a6dc800622549ecdf2b67_prof);

    }

    // line 28
    public function block_meta_tags($context, array $blocks = array())
    {
        $__internal_35654ca74bacd6ad7154aecc828ed4043b79340de9e16835699a9b1da6914e2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35654ca74bacd6ad7154aecc828ed4043b79340de9e16835699a9b1da6914e2e->enter($__internal_35654ca74bacd6ad7154aecc828ed4043b79340de9e16835699a9b1da6914e2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta_tags"));

        // line 29
        echo "            <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
            <meta charset=\"UTF-8\">
            <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        ";
        
        $__internal_35654ca74bacd6ad7154aecc828ed4043b79340de9e16835699a9b1da6914e2e->leave($__internal_35654ca74bacd6ad7154aecc828ed4043b79340de9e16835699a9b1da6914e2e_prof);

    }

    // line 34
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_dd7f9e867b5e8b486e2ef76eca0c96e9817dda29ea24ba81eed6699f63e71c44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd7f9e867b5e8b486e2ef76eca0c96e9817dda29ea24ba81eed6699f63e71c44->enter($__internal_dd7f9e867b5e8b486e2ef76eca0c96e9817dda29ea24ba81eed6699f63e71c44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 35
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 35, $this->getSourceContext()); })()), "adminPool", array()), "getOption", array(0 => "stylesheets", 1 => array()), "method"));
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
        
        $__internal_dd7f9e867b5e8b486e2ef76eca0c96e9817dda29ea24ba81eed6699f63e71c44->leave($__internal_dd7f9e867b5e8b486e2ef76eca0c96e9817dda29ea24ba81eed6699f63e71c44_prof);

    }

    // line 40
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1b7fee98383044ed67100d2a7fec04a3843ced3ac34ea3e1d21fc548a4960fa2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b7fee98383044ed67100d2a7fec04a3843ced3ac34ea3e1d21fc548a4960fa2->enter($__internal_1b7fee98383044ed67100d2a7fec04a3843ced3ac34ea3e1d21fc548a4960fa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        $context["locale"] = twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 68, $this->getSourceContext()); })()), "request", array()), "locale", array());
        // line 69
        echo "            ";
        // line 70
        echo "            ";
        if ((twig_slice($this->env, (isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new Twig_Error_Runtime('Variable "locale" does not exist.', 70, $this->getSourceContext()); })()), 0, 2) != "en")) {
            // line 71
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/sonatacore/vendor/moment/locale/" . twig_replace_filter(twig_lower_filter($this->env,             // line 73
(isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new Twig_Error_Runtime('Variable "locale" does not exist.', 73, $this->getSourceContext()); })())), array("_" => "-"))) . ".js")), "html", null, true);
            // line 75
            echo "\"></script>
            ";
        }
        // line 77
        echo "
            ";
        // line 79
        echo "            ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 79, $this->getSourceContext()); })()), "adminPool", array()), "getOption", array(0 => "use_select2"), "method")) {
            // line 80
            echo "                ";
            if (((isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new Twig_Error_Runtime('Variable "locale" does not exist.', 80, $this->getSourceContext()); })()) == "pt")) {
                $context["locale"] = "pt_PT";
            }
            // line 81
            echo "
                ";
            // line 83
            echo "                ";
            if ((twig_slice($this->env, (isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new Twig_Error_Runtime('Variable "locale" does not exist.', 83, $this->getSourceContext()); })()), 0, 2) != "en")) {
                // line 84
                echo "                    <script src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/sonatacore/vendor/select2/select2_locale_" . twig_replace_filter((isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new Twig_Error_Runtime('Variable "locale" does not exist.', 84, $this->getSourceContext()); })()), array("_" => "-"))) . ".js")), "html", null, true);
                echo "\"></script>
                ";
            }
            // line 86
            echo "            ";
        }
        // line 87
        echo "        ";
        
        $__internal_1b7fee98383044ed67100d2a7fec04a3843ced3ac34ea3e1d21fc548a4960fa2->leave($__internal_1b7fee98383044ed67100d2a7fec04a3843ced3ac34ea3e1d21fc548a4960fa2_prof);

    }

    // line 41
    public function block_sonata_javascript_config($context, array $blocks = array())
    {
        $__internal_5e1e9f42867187716a1bb3668ba417db06e220c9738e126410143174f3241b04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e1e9f42867187716a1bb3668ba417db06e220c9738e126410143174f3241b04->enter($__internal_5e1e9f42867187716a1bb3668ba417db06e220c9738e126410143174f3241b04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_javascript_config"));

        // line 42
        echo "                <script>
                    window.SONATA_CONFIG = {
                        CONFIRM_EXIT: ";
        // line 44
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 44, $this->getSourceContext()); })()), "adminPool", array()), "getOption", array(0 => "confirm_exit"), "method")) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
                        USE_SELECT2: ";
        // line 45
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 45, $this->getSourceContext()); })()), "adminPool", array()), "getOption", array(0 => "use_select2"), "method")) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
                        USE_ICHECK: ";
        // line 46
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 46, $this->getSourceContext()); })()), "adminPool", array()), "getOption", array(0 => "use_icheck"), "method")) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
                        USE_STICKYFORMS: ";
        // line 47
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 47, $this->getSourceContext()); })()), "adminPool", array()), "getOption", array(0 => "use_stickyforms"), "method")) {
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
        
        $__internal_5e1e9f42867187716a1bb3668ba417db06e220c9738e126410143174f3241b04->leave($__internal_5e1e9f42867187716a1bb3668ba417db06e220c9738e126410143174f3241b04_prof);

    }

    // line 62
    public function block_sonata_javascript_pool($context, array $blocks = array())
    {
        $__internal_102dbd604b480c929cf64fa115fb5f4eed6f1c2ae0d9ac13c81a60853204f6ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_102dbd604b480c929cf64fa115fb5f4eed6f1c2ae0d9ac13c81a60853204f6ce->enter($__internal_102dbd604b480c929cf64fa115fb5f4eed6f1c2ae0d9ac13c81a60853204f6ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_javascript_pool"));

        // line 63
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 63, $this->getSourceContext()); })()), "adminPool", array()), "getOption", array(0 => "javascripts", 1 => array()), "method"));
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
        
        $__internal_102dbd604b480c929cf64fa115fb5f4eed6f1c2ae0d9ac13c81a60853204f6ce->leave($__internal_102dbd604b480c929cf64fa115fb5f4eed6f1c2ae0d9ac13c81a60853204f6ce_prof);

    }

    // line 90
    public function block_sonata_head_title($context, array $blocks = array())
    {
        $__internal_ee4f04dc19c87677abc88690bdfb8b28c9cedb2e11a34f11f353e1b75b9fe7e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee4f04dc19c87677abc88690bdfb8b28c9cedb2e11a34f11f353e1b75b9fe7e2->enter($__internal_ee4f04dc19c87677abc88690bdfb8b28c9cedb2e11a34f11f353e1b75b9fe7e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_head_title"));

        // line 91
        echo "            ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Admin", array(), "SonataAdminBundle"), "html", null, true);
        echo "

            ";
        // line 93
        if ( !twig_test_empty((isset($context["_title"]) || array_key_exists("_title", $context) ? $context["_title"] : (function () { throw new Twig_Error_Runtime('Variable "_title" does not exist.', 93, $this->getSourceContext()); })()))) {
            // line 94
            echo "                ";
            echo strip_tags((isset($context["_title"]) || array_key_exists("_title", $context) ? $context["_title"] : (function () { throw new Twig_Error_Runtime('Variable "_title" does not exist.', 94, $this->getSourceContext()); })()));
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
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["breadcrumbs_builder"]) || array_key_exists("breadcrumbs_builder", $context) ? $context["breadcrumbs_builder"] : (function () { throw new Twig_Error_Runtime('Variable "breadcrumbs_builder" does not exist.', 98, $this->getSourceContext()); })()), "breadcrumbs", array(0 => (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 98, $this->getSourceContext()); })()), 1 => (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new Twig_Error_Runtime('Variable "action" does not exist.', 98, $this->getSourceContext()); })())), "method"));
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
                        if ( !((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 106, $this->getSourceContext()); })()) === false)) {
                            // line 107
                            $context["label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 107, $this->getSourceContext()); })()), twig_get_attribute($this->env, $this->getSourceContext(), $context["menu"], "extra", array(0 => "translation_params", 1 => array()), "method"), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 107, $this->getSourceContext()); })()));
                        }
                        // line 110
                        echo twig_escape_filter($this->env, (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 110, $this->getSourceContext()); })()), "html", null, true);
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
        
        $__internal_ee4f04dc19c87677abc88690bdfb8b28c9cedb2e11a34f11f353e1b75b9fe7e2->leave($__internal_ee4f04dc19c87677abc88690bdfb8b28c9cedb2e11a34f11f353e1b75b9fe7e2_prof);

    }

    // line 119
    public function block_body_attributes($context, array $blocks = array())
    {
        $__internal_7d5ae223ef2e25e726fdfcb226cb6d432c3848e6d3cc39d2400dcfaf2bec8def = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d5ae223ef2e25e726fdfcb226cb6d432c3848e6d3cc39d2400dcfaf2bec8def->enter($__internal_7d5ae223ef2e25e726fdfcb226cb6d432c3848e6d3cc39d2400dcfaf2bec8def_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_attributes"));

        // line 120
        echo "class=\"sonata-bc skin-black fixed
                ";
        // line 121
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 121, $this->getSourceContext()); })()), "request", array()), "cookies", array()), "get", array(0 => "sonata_sidebar_hide"), "method")) {
            // line 122
            echo "sidebar-collapse";
        }
        // line 123
        echo "\"";
        
        $__internal_7d5ae223ef2e25e726fdfcb226cb6d432c3848e6d3cc39d2400dcfaf2bec8def->leave($__internal_7d5ae223ef2e25e726fdfcb226cb6d432c3848e6d3cc39d2400dcfaf2bec8def_prof);

    }

    // line 129
    public function block_sonata_header($context, array $blocks = array())
    {
        $__internal_9fbe0038bec25fee56d448075943b2145456aaa7cc60ed7c3f6ad90466990cb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fbe0038bec25fee56d448075943b2145456aaa7cc60ed7c3f6ad90466990cb8->enter($__internal_9fbe0038bec25fee56d448075943b2145456aaa7cc60ed7c3f6ad90466990cb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

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
        
        $__internal_9fbe0038bec25fee56d448075943b2145456aaa7cc60ed7c3f6ad90466990cb8->leave($__internal_9fbe0038bec25fee56d448075943b2145456aaa7cc60ed7c3f6ad90466990cb8_prof);

    }

    // line 131
    public function block_sonata_header_noscript_warning($context, array $blocks = array())
    {
        $__internal_136532927e7aead34bb02db10b14e9f94659345418bf97a7ff9b7410647e7567 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_136532927e7aead34bb02db10b14e9f94659345418bf97a7ff9b7410647e7567->enter($__internal_136532927e7aead34bb02db10b14e9f94659345418bf97a7ff9b7410647e7567_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header_noscript_warning"));

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
        
        $__internal_136532927e7aead34bb02db10b14e9f94659345418bf97a7ff9b7410647e7567->leave($__internal_136532927e7aead34bb02db10b14e9f94659345418bf97a7ff9b7410647e7567_prof);

    }

    // line 138
    public function block_logo($context, array $blocks = array())
    {
        $__internal_5df26384e715f2b00574e9062cf6351ad73c0155f017d641850fed5e55c690bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5df26384e715f2b00574e9062cf6351ad73c0155f017d641850fed5e55c690bb->enter($__internal_5df26384e715f2b00574e9062cf6351ad73c0155f017d641850fed5e55c690bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logo"));

        // line 139
        echo "                    ";
        ob_start();
        // line 140
        echo "                        <a class=\"logo\" href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sonata_admin_dashboard");
        echo "\">
                            ";
        // line 141
        if ((("single_image" == twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 141, $this->getSourceContext()); })()), "adminPool", array()), "getOption", array(0 => "title_mode"), "method")) || ("both" == twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 141, $this->getSourceContext()); })()), "adminPool", array()), "getOption", array(0 => "title_mode"), "method")))) {
            // line 142
            echo "                                <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 142, $this->getSourceContext()); })()), "adminPool", array()), "titlelogo", array())), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 142, $this->getSourceContext()); })()), "adminPool", array()), "title", array()), "html", null, true);
            echo "\">
                            ";
        }
        // line 144
        echo "                            ";
        if ((("single_text" == twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 144, $this->getSourceContext()); })()), "adminPool", array()), "getOption", array(0 => "title_mode"), "method")) || ("both" == twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 144, $this->getSourceContext()); })()), "adminPool", array()), "getOption", array(0 => "title_mode"), "method")))) {
            // line 145
            echo "                                <span>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 145, $this->getSourceContext()); })()), "adminPool", array()), "title", array()), "html", null, true);
            echo "</span>
                            ";
        }
        // line 147
        echo "                        </a>
                    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 149
        echo "                ";
        
        $__internal_5df26384e715f2b00574e9062cf6351ad73c0155f017d641850fed5e55c690bb->leave($__internal_5df26384e715f2b00574e9062cf6351ad73c0155f017d641850fed5e55c690bb_prof);

    }

    // line 150
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_49c8172b005ee939b529f0332f8b039b6577d646bfceef30198f0ebc2ef3caef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49c8172b005ee939b529f0332f8b039b6577d646bfceef30198f0ebc2ef3caef->enter($__internal_49c8172b005ee939b529f0332f8b039b6577d646bfceef30198f0ebc2ef3caef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

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
        
        $__internal_49c8172b005ee939b529f0332f8b039b6577d646bfceef30198f0ebc2ef3caef->leave($__internal_49c8172b005ee939b529f0332f8b039b6577d646bfceef30198f0ebc2ef3caef_prof);

    }

    // line 157
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
        $__internal_af848c81e5398b32f1eff02cb2c497f1b08c565db60541af5654b94c6ec0d4e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af848c81e5398b32f1eff02cb2c497f1b08c565db60541af5654b94c6ec0d4e4->enter($__internal_af848c81e5398b32f1eff02cb2c497f1b08c565db60541af5654b94c6ec0d4e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        // line 158
        echo "                                <div class=\"hidden-xs\">
                                    ";
        // line 159
        if (( !twig_test_empty((isset($context["_breadcrumb"]) || array_key_exists("_breadcrumb", $context) ? $context["_breadcrumb"] : (function () { throw new Twig_Error_Runtime('Variable "_breadcrumb" does not exist.', 159, $this->getSourceContext()); })())) || array_key_exists("action", $context))) {
            // line 160
            echo "                                        <ol class=\"nav navbar-top-links breadcrumb\">
                                            ";
            // line 161
            if (twig_test_empty((isset($context["_breadcrumb"]) || array_key_exists("_breadcrumb", $context) ? $context["_breadcrumb"] : (function () { throw new Twig_Error_Runtime('Variable "_breadcrumb" does not exist.', 161, $this->getSourceContext()); })()))) {
                // line 162
                echo "                                                ";
                if (array_key_exists("action", $context)) {
                    // line 163
                    echo "                                                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["breadcrumbs_builder"]) || array_key_exists("breadcrumbs_builder", $context) ? $context["breadcrumbs_builder"] : (function () { throw new Twig_Error_Runtime('Variable "breadcrumbs_builder" does not exist.', 163, $this->getSourceContext()); })()), "breadcrumbs", array(0 => (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 163, $this->getSourceContext()); })()), 1 => (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new Twig_Error_Runtime('Variable "action" does not exist.', 163, $this->getSourceContext()); })())), "method"));
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
                        if ( !((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 166, $this->getSourceContext()); })()) === false)) {
                            // line 167
                            $context["label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 167, $this->getSourceContext()); })()), twig_get_attribute($this->env, $this->getSourceContext(), $context["menu"], "extra", array(0 => "translation_params", 1 => array()), "method"), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 167, $this->getSourceContext()); })()));
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
                                    echo (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 175, $this->getSourceContext()); })());
                                } else {
                                    // line 177
                                    echo twig_escape_filter($this->env, (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 177, $this->getSourceContext()); })()), "html", null, true);
                                }
                                // line 179
                                echo "                                                                    </a>
                                                                ";
                            } else {
                                // line 181
                                echo "                                                                    <span>";
                                echo twig_escape_filter($this->env, (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 181, $this->getSourceContext()); })()), "html", null, true);
                                echo "</span>
                                                                ";
                            }
                            // line 183
                            echo "                                                            </li>
                                                        ";
                        } else {
                            // line 185
                            echo "                                                            <li class=\"active\"><span>";
                            echo twig_escape_filter($this->env, (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 185, $this->getSourceContext()); })()), "html", null, true);
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
                echo (isset($context["_breadcrumb"]) || array_key_exists("_breadcrumb", $context) ? $context["_breadcrumb"] : (function () { throw new Twig_Error_Runtime('Variable "_breadcrumb" does not exist.', 190, $this->getSourceContext()); })());
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
        
        $__internal_af848c81e5398b32f1eff02cb2c497f1b08c565db60541af5654b94c6ec0d4e4->leave($__internal_af848c81e5398b32f1eff02cb2c497f1b08c565db60541af5654b94c6ec0d4e4_prof);

    }

    // line 198
    public function block_sonata_top_nav_menu($context, array $blocks = array())
    {
        $__internal_84ceaa0d9529271793346fbaceb05a365266e9d1f4aa17920b8cb6f6bc1b6667 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84ceaa0d9529271793346fbaceb05a365266e9d1f4aa17920b8cb6f6bc1b6667->enter($__internal_84ceaa0d9529271793346fbaceb05a365266e9d1f4aa17920b8cb6f6bc1b6667_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_top_nav_menu"));

        // line 199
        echo "                            ";
        if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 199, $this->getSourceContext()); })()), "user", array()) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 199, $this->getSourceContext()); })()), "adminPool", array()), "getOption", array(0 => "role_admin"), "method")))) {
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
        
        $__internal_84ceaa0d9529271793346fbaceb05a365266e9d1f4aa17920b8cb6f6bc1b6667->leave($__internal_84ceaa0d9529271793346fbaceb05a365266e9d1f4aa17920b8cb6f6bc1b6667_prof);

    }

    // line 202
    public function block_sonata_top_nav_menu_add_block($context, array $blocks = array())
    {
        $__internal_9bf8dead984df0529d019b6bece91292e3fd6ae2b53124a0dd45fe323e6597d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bf8dead984df0529d019b6bece91292e3fd6ae2b53124a0dd45fe323e6597d7->enter($__internal_9bf8dead984df0529d019b6bece91292e3fd6ae2b53124a0dd45fe323e6597d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_top_nav_menu_add_block"));

        // line 203
        echo "                                            <li class=\"dropdown\">
                                                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                                    <i class=\"fa fa-plus-square fa-fw\" aria-hidden=\"true\"></i> <i class=\"fa fa-caret-down\" aria-hidden=\"true\"></i>
                                                </a>
                                                ";
        // line 207
        $this->loadTemplate(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 207, $this->getSourceContext()); })()), "adminPool", array()), "getTemplate", array(0 => "add_block"), "method"), "SonataAdminBundle::standard_layout.html.twig", 207)->display($context);
        // line 208
        echo "                                            </li>
                                        ";
        
        $__internal_9bf8dead984df0529d019b6bece91292e3fd6ae2b53124a0dd45fe323e6597d7->leave($__internal_9bf8dead984df0529d019b6bece91292e3fd6ae2b53124a0dd45fe323e6597d7_prof);

    }

    // line 210
    public function block_sonata_top_nav_menu_user_block($context, array $blocks = array())
    {
        $__internal_de83300513d51a2d32d3b94f7b5b78c88e09b9e227afb702f27e0abe993e1315 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de83300513d51a2d32d3b94f7b5b78c88e09b9e227afb702f27e0abe993e1315->enter($__internal_de83300513d51a2d32d3b94f7b5b78c88e09b9e227afb702f27e0abe993e1315_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_top_nav_menu_user_block"));

        // line 211
        echo "                                            <li class=\"dropdown user-menu\">
                                                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                                    <i class=\"fa fa-user fa-fw\" aria-hidden=\"true\"></i> <i class=\"fa fa-caret-down\" aria-hidden=\"true\"></i>
                                                </a>
                                                <ul class=\"dropdown-menu dropdown-user\">
                                                    ";
        // line 216
        $this->loadTemplate(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 216, $this->getSourceContext()); })()), "adminPool", array()), "getTemplate", array(0 => "user_block"), "method"), "SonataAdminBundle::standard_layout.html.twig", 216)->display($context);
        // line 217
        echo "                                                </ul>
                                            </li>
                                        ";
        
        $__internal_de83300513d51a2d32d3b94f7b5b78c88e09b9e227afb702f27e0abe993e1315->leave($__internal_de83300513d51a2d32d3b94f7b5b78c88e09b9e227afb702f27e0abe993e1315_prof);

    }

    // line 229
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_66d351b60d978ea250a4cb290c3de21d4c20d3bd5f320c813951002fd06cf303 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66d351b60d978ea250a4cb290c3de21d4c20d3bd5f320c813951002fd06cf303->enter($__internal_66d351b60d978ea250a4cb290c3de21d4c20d3bd5f320c813951002fd06cf303_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

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
        
        $__internal_66d351b60d978ea250a4cb290c3de21d4c20d3bd5f320c813951002fd06cf303->leave($__internal_66d351b60d978ea250a4cb290c3de21d4c20d3bd5f320c813951002fd06cf303_prof);

    }

    // line 230
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_9248bced5b31ba419455fc39adcefa719ada6f19c79ab2bc6a794d730fcb51fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9248bced5b31ba419455fc39adcefa719ada6f19c79ab2bc6a794d730fcb51fb->enter($__internal_9248bced5b31ba419455fc39adcefa719ada6f19c79ab2bc6a794d730fcb51fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

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
        
        $__internal_9248bced5b31ba419455fc39adcefa719ada6f19c79ab2bc6a794d730fcb51fb->leave($__internal_9248bced5b31ba419455fc39adcefa719ada6f19c79ab2bc6a794d730fcb51fb_prof);

    }

    // line 233
    public function block_sonata_side_nav($context, array $blocks = array())
    {
        $__internal_ae94e3f87df2df08f33fea28a4b60222bbc4634c1511bf127d9f857c424d6274 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae94e3f87df2df08f33fea28a4b60222bbc4634c1511bf127d9f857c424d6274->enter($__internal_ae94e3f87df2df08f33fea28a4b60222bbc4634c1511bf127d9f857c424d6274_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_side_nav"));

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
        
        $__internal_ae94e3f87df2df08f33fea28a4b60222bbc4634c1511bf127d9f857c424d6274->leave($__internal_ae94e3f87df2df08f33fea28a4b60222bbc4634c1511bf127d9f857c424d6274_prof);

    }

    // line 234
    public function block_sonata_sidebar_search($context, array $blocks = array())
    {
        $__internal_a8136b5f590fba325cdc556566534f013917aa23fe05b17d21c00b11cdd66880 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8136b5f590fba325cdc556566534f013917aa23fe05b17d21c00b11cdd66880->enter($__internal_a8136b5f590fba325cdc556566534f013917aa23fe05b17d21c00b11cdd66880_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_sidebar_search"));

        // line 235
        echo "                                <form action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sonata_admin_search");
        echo "\" method=\"GET\" class=\"sidebar-form\" role=\"search\">
                                    <div class=\"input-group custom-search-form\">
                                        <input type=\"text\" name=\"q\" value=\"";
        // line 237
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 237, $this->getSourceContext()); })()), "request", array()), "get", array(0 => "q"), "method"), "html", null, true);
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
        
        $__internal_a8136b5f590fba325cdc556566534f013917aa23fe05b17d21c00b11cdd66880->leave($__internal_a8136b5f590fba325cdc556566534f013917aa23fe05b17d21c00b11cdd66880_prof);

    }

    // line 247
    public function block_side_bar_before_nav($context, array $blocks = array())
    {
        $__internal_083e8ace450d2f178c04135b032a9aae0b05fe5cdaceaa78e41c998c1e53111f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_083e8ace450d2f178c04135b032a9aae0b05fe5cdaceaa78e41c998c1e53111f->enter($__internal_083e8ace450d2f178c04135b032a9aae0b05fe5cdaceaa78e41c998c1e53111f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_before_nav"));

        echo " ";
        
        $__internal_083e8ace450d2f178c04135b032a9aae0b05fe5cdaceaa78e41c998c1e53111f->leave($__internal_083e8ace450d2f178c04135b032a9aae0b05fe5cdaceaa78e41c998c1e53111f_prof);

    }

    // line 248
    public function block_side_bar_nav($context, array $blocks = array())
    {
        $__internal_53a72aba429b4049f02b1dbc9e59422a5b5b05eb60d22c3c0fb68f872b5a3144 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53a72aba429b4049f02b1dbc9e59422a5b5b05eb60d22c3c0fb68f872b5a3144->enter($__internal_53a72aba429b4049f02b1dbc9e59422a5b5b05eb60d22c3c0fb68f872b5a3144_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_nav"));

        // line 249
        echo "                                ";
        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render("sonata_admin_sidebar", array("template" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 249, $this->getSourceContext()); })()), "adminPool", array()), "getTemplate", array(0 => "knp_menu_template"), "method")));
        echo "
                            ";
        
        $__internal_53a72aba429b4049f02b1dbc9e59422a5b5b05eb60d22c3c0fb68f872b5a3144->leave($__internal_53a72aba429b4049f02b1dbc9e59422a5b5b05eb60d22c3c0fb68f872b5a3144_prof);

    }

    // line 251
    public function block_side_bar_after_nav($context, array $blocks = array())
    {
        $__internal_33b9678f4b28c6f9c2b1c1a80a68a9be3bda004f1a180a642e0ed67e50b69aff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33b9678f4b28c6f9c2b1c1a80a68a9be3bda004f1a180a642e0ed67e50b69aff->enter($__internal_33b9678f4b28c6f9c2b1c1a80a68a9be3bda004f1a180a642e0ed67e50b69aff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_after_nav"));

        // line 252
        echo "                                <p class=\"text-center small\" style=\"border-top: 1px solid #444444; padding-top: 10px\">
                                    ";
        // line 253
        $this->displayBlock('side_bar_after_nav_content', $context, $blocks);
        // line 256
        echo "                                </p>
                            ";
        
        $__internal_33b9678f4b28c6f9c2b1c1a80a68a9be3bda004f1a180a642e0ed67e50b69aff->leave($__internal_33b9678f4b28c6f9c2b1c1a80a68a9be3bda004f1a180a642e0ed67e50b69aff_prof);

    }

    // line 253
    public function block_side_bar_after_nav_content($context, array $blocks = array())
    {
        $__internal_18fb66a7dbcc71108443558da67c58ed89b2c0f24ba4385206296370c16db962 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18fb66a7dbcc71108443558da67c58ed89b2c0f24ba4385206296370c16db962->enter($__internal_18fb66a7dbcc71108443558da67c58ed89b2c0f24ba4385206296370c16db962_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_after_nav_content"));

        // line 254
        echo "                                        <a href=\"https://sonata-project.org\" rel=\"noreferrer\" target=\"_blank\">sonata project</a>
                                    ";
        
        $__internal_18fb66a7dbcc71108443558da67c58ed89b2c0f24ba4385206296370c16db962->leave($__internal_18fb66a7dbcc71108443558da67c58ed89b2c0f24ba4385206296370c16db962_prof);

    }

    // line 264
    public function block_sonata_page_content($context, array $blocks = array())
    {
        $__internal_e5afb4eb9ba50af913074aa1c8c72f031565219c5113d435a4f4a651a0d24fc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5afb4eb9ba50af913074aa1c8c72f031565219c5113d435a4f4a651a0d24fc5->enter($__internal_e5afb4eb9ba50af913074aa1c8c72f031565219c5113d435a4f4a651a0d24fc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

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
        
        $__internal_e5afb4eb9ba50af913074aa1c8c72f031565219c5113d435a4f4a651a0d24fc5->leave($__internal_e5afb4eb9ba50af913074aa1c8c72f031565219c5113d435a4f4a651a0d24fc5_prof);

    }

    // line 267
    public function block_sonata_page_content_header($context, array $blocks = array())
    {
        $__internal_ef49019072c3077a428a002e4bed9a02167588c0a0709c2381e0ba35bdb0e085 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef49019072c3077a428a002e4bed9a02167588c0a0709c2381e0ba35bdb0e085->enter($__internal_ef49019072c3077a428a002e4bed9a02167588c0a0709c2381e0ba35bdb0e085_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content_header"));

        // line 268
        echo "                            ";
        $this->displayBlock('sonata_page_content_nav', $context, $blocks);
        // line 324
        echo "                        ";
        
        $__internal_ef49019072c3077a428a002e4bed9a02167588c0a0709c2381e0ba35bdb0e085->leave($__internal_ef49019072c3077a428a002e4bed9a02167588c0a0709c2381e0ba35bdb0e085_prof);

    }

    // line 268
    public function block_sonata_page_content_nav($context, array $blocks = array())
    {
        $__internal_4a870cd98cd6b2a7a0b6e310d88b0fa24ed40ce38419a286f57fbbdd8160da56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a870cd98cd6b2a7a0b6e310d88b0fa24ed40ce38419a286f57fbbdd8160da56->enter($__internal_4a870cd98cd6b2a7a0b6e310d88b0fa24ed40ce38419a286f57fbbdd8160da56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content_nav"));

        // line 269
        echo "                                ";
        if (((( !twig_test_empty((isset($context["_navbar_title"]) || array_key_exists("_navbar_title", $context) ? $context["_navbar_title"] : (function () { throw new Twig_Error_Runtime('Variable "_navbar_title" does not exist.', 269, $this->getSourceContext()); })())) ||  !twig_test_empty(        // line 270
(isset($context["_tab_menu"]) || array_key_exists("_tab_menu", $context) ? $context["_tab_menu"] : (function () { throw new Twig_Error_Runtime('Variable "_tab_menu" does not exist.', 270, $this->getSourceContext()); })()))) ||  !twig_test_empty(        // line 271
(isset($context["_actions"]) || array_key_exists("_actions", $context) ? $context["_actions"] : (function () { throw new Twig_Error_Runtime('Variable "_actions" does not exist.', 271, $this->getSourceContext()); })()))) ||  !twig_test_empty(        // line 272
(isset($context["_list_filters_actions"]) || array_key_exists("_list_filters_actions", $context) ? $context["_list_filters_actions"] : (function () { throw new Twig_Error_Runtime('Variable "_list_filters_actions" does not exist.', 272, $this->getSourceContext()); })())))) {
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
            if ( !twig_test_empty((isset($context["_tab_menu"]) || array_key_exists("_tab_menu", $context) ? $context["_tab_menu"] : (function () { throw new Twig_Error_Runtime('Variable "_tab_menu" does not exist.', 285, $this->getSourceContext()); })()))) {
                // line 286
                echo "                                                    <div class=\"navbar-left\">
                                                        ";
                // line 287
                echo (isset($context["_tab_menu"]) || array_key_exists("_tab_menu", $context) ? $context["_tab_menu"] : (function () { throw new Twig_Error_Runtime('Variable "_tab_menu" does not exist.', 287, $this->getSourceContext()); })());
                echo "
                                                    </div>
                                                ";
            }
            // line 290
            echo "
                                                ";
            // line 291
            if ((((array_key_exists("admin", $context) && array_key_exists("action", $context)) && ((isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new Twig_Error_Runtime('Variable "action" does not exist.', 291, $this->getSourceContext()); })()) == "list")) && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 291, $this->getSourceContext()); })()), "listModes", array())) > 1))) {
                // line 292
                echo "                                                    <div class=\"nav navbar-right btn-group\">
                                                        ";
                // line 293
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 293, $this->getSourceContext()); })()), "listModes", array()));
                foreach ($context['_seq'] as $context["mode"] => $context["settings"]) {
                    // line 294
                    echo "                                                            <a href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 294, $this->getSourceContext()); })()), "generateUrl", array(0 => "list", 1 => twig_array_merge(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 294, $this->getSourceContext()); })()), "request", array()), "query", array()), "all", array()), array("_list_mode" => $context["mode"]))), "method"), "html", null, true);
                    echo "\" class=\"btn btn-default navbar-btn btn-sm";
                    if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 294, $this->getSourceContext()); })()), "getListMode", array(), "method") == $context["mode"])) {
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
            if ( !twig_test_empty((isset($context["_list_filters_actions"]) || array_key_exists("_list_filters_actions", $context) ? $context["_list_filters_actions"] : (function () { throw new Twig_Error_Runtime('Variable "_list_filters_actions" does not exist.', 316, $this->getSourceContext()); })()))) {
                // line 317
                echo "                                                    ";
                echo (isset($context["_list_filters_actions"]) || array_key_exists("_list_filters_actions", $context) ? $context["_list_filters_actions"] : (function () { throw new Twig_Error_Runtime('Variable "_list_filters_actions" does not exist.', 317, $this->getSourceContext()); })());
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
        
        $__internal_4a870cd98cd6b2a7a0b6e310d88b0fa24ed40ce38419a286f57fbbdd8160da56->leave($__internal_4a870cd98cd6b2a7a0b6e310d88b0fa24ed40ce38419a286f57fbbdd8160da56_prof);

    }

    // line 276
    public function block_tab_menu_navbar_header($context, array $blocks = array())
    {
        $__internal_94cbef4114a96c59fc8beb6262a0d05a1ce07ee72297e5fdaab5916f8e176aac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94cbef4114a96c59fc8beb6262a0d05a1ce07ee72297e5fdaab5916f8e176aac->enter($__internal_94cbef4114a96c59fc8beb6262a0d05a1ce07ee72297e5fdaab5916f8e176aac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu_navbar_header"));

        // line 277
        echo "                                                ";
        if ( !twig_test_empty((isset($context["_navbar_title"]) || array_key_exists("_navbar_title", $context) ? $context["_navbar_title"] : (function () { throw new Twig_Error_Runtime('Variable "_navbar_title" does not exist.', 277, $this->getSourceContext()); })()))) {
            // line 278
            echo "                                                    <div class=\"navbar-header\">
                                                        <a class=\"navbar-brand\" href=\"#\">";
            // line 279
            echo (isset($context["_navbar_title"]) || array_key_exists("_navbar_title", $context) ? $context["_navbar_title"] : (function () { throw new Twig_Error_Runtime('Variable "_navbar_title" does not exist.', 279, $this->getSourceContext()); })());
            echo "</a>
                                                    </div>
                                                ";
        }
        // line 282
        echo "                                            ";
        
        $__internal_94cbef4114a96c59fc8beb6262a0d05a1ce07ee72297e5fdaab5916f8e176aac->leave($__internal_94cbef4114a96c59fc8beb6262a0d05a1ce07ee72297e5fdaab5916f8e176aac_prof);

    }

    // line 299
    public function block_sonata_admin_content_actions_wrappers($context, array $blocks = array())
    {
        $__internal_444b19d1fc1874742d93e6961f9f6f26f957dae5629e029adc96d4661435f8d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_444b19d1fc1874742d93e6961f9f6f26f957dae5629e029adc96d4661435f8d8->enter($__internal_444b19d1fc1874742d93e6961f9f6f26f957dae5629e029adc96d4661435f8d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_content_actions_wrappers"));

        // line 300
        echo "                                                    ";
        if ( !twig_test_empty(twig_trim_filter(twig_replace_filter((isset($context["_actions"]) || array_key_exists("_actions", $context) ? $context["_actions"] : (function () { throw new Twig_Error_Runtime('Variable "_actions" does not exist.', 300, $this->getSourceContext()); })()), array("<li>" => "", "</li>" => ""))))) {
            // line 301
            echo "                                                        <ul class=\"nav navbar-nav navbar-right\">
                                                        ";
            // line 302
            if ((twig_length_filter($this->env, twig_split_filter($this->env, (isset($context["_actions"]) || array_key_exists("_actions", $context) ? $context["_actions"] : (function () { throw new Twig_Error_Runtime('Variable "_actions" does not exist.', 302, $this->getSourceContext()); })()), "</a>")) > 2)) {
                // line 303
                echo "                                                            <li class=\"dropdown sonata-actions\">
                                                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
                // line 304
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("link_actions", array(), "SonataAdminBundle"), "html", null, true);
                echo " <b class=\"caret\"></b></a>
                                                                <ul class=\"dropdown-menu\" role=\"menu\">
                                                                    ";
                // line 306
                echo (isset($context["_actions"]) || array_key_exists("_actions", $context) ? $context["_actions"] : (function () { throw new Twig_Error_Runtime('Variable "_actions" does not exist.', 306, $this->getSourceContext()); })());
                echo "
                                                                </ul>
                                                            </li>
                                                        ";
            } else {
                // line 310
                echo "                                                            ";
                echo (isset($context["_actions"]) || array_key_exists("_actions", $context) ? $context["_actions"] : (function () { throw new Twig_Error_Runtime('Variable "_actions" does not exist.', 310, $this->getSourceContext()); })());
                echo "
                                                        ";
            }
            // line 312
            echo "                                                        </ul>
                                                    ";
        }
        // line 314
        echo "                                                ";
        
        $__internal_444b19d1fc1874742d93e6961f9f6f26f957dae5629e029adc96d4661435f8d8->leave($__internal_444b19d1fc1874742d93e6961f9f6f26f957dae5629e029adc96d4661435f8d8_prof);

    }

    // line 328
    public function block_sonata_admin_content($context, array $blocks = array())
    {
        $__internal_fe5e5621b5280622fa4134eeeea9417e317389c4e6d4adec5c64d16569d658d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe5e5621b5280622fa4134eeeea9417e317389c4e6d4adec5c64d16569d658d4->enter($__internal_fe5e5621b5280622fa4134eeeea9417e317389c4e6d4adec5c64d16569d658d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_content"));

        // line 329
        echo "
                            ";
        // line 330
        $this->displayBlock('notice', $context, $blocks);
        // line 333
        echo "
                            ";
        // line 334
        if ( !twig_test_empty((isset($context["_preview"]) || array_key_exists("_preview", $context) ? $context["_preview"] : (function () { throw new Twig_Error_Runtime('Variable "_preview" does not exist.', 334, $this->getSourceContext()); })()))) {
            // line 335
            echo "                                <div class=\"sonata-ba-preview\">";
            echo (isset($context["_preview"]) || array_key_exists("_preview", $context) ? $context["_preview"] : (function () { throw new Twig_Error_Runtime('Variable "_preview" does not exist.', 335, $this->getSourceContext()); })());
            echo "</div>
                            ";
        }
        // line 337
        echo "
                            ";
        // line 338
        if ( !twig_test_empty((isset($context["_content"]) || array_key_exists("_content", $context) ? $context["_content"] : (function () { throw new Twig_Error_Runtime('Variable "_content" does not exist.', 338, $this->getSourceContext()); })()))) {
            // line 339
            echo "                                <div class=\"sonata-ba-content\">";
            echo (isset($context["_content"]) || array_key_exists("_content", $context) ? $context["_content"] : (function () { throw new Twig_Error_Runtime('Variable "_content" does not exist.', 339, $this->getSourceContext()); })());
            echo "</div>
                            ";
        }
        // line 341
        echo "
                            ";
        // line 342
        if ( !twig_test_empty((isset($context["_show"]) || array_key_exists("_show", $context) ? $context["_show"] : (function () { throw new Twig_Error_Runtime('Variable "_show" does not exist.', 342, $this->getSourceContext()); })()))) {
            // line 343
            echo "                                <div class=\"sonata-ba-show\">";
            echo (isset($context["_show"]) || array_key_exists("_show", $context) ? $context["_show"] : (function () { throw new Twig_Error_Runtime('Variable "_show" does not exist.', 343, $this->getSourceContext()); })());
            echo "</div>
                            ";
        }
        // line 345
        echo "
                            ";
        // line 346
        if ( !twig_test_empty((isset($context["_form"]) || array_key_exists("_form", $context) ? $context["_form"] : (function () { throw new Twig_Error_Runtime('Variable "_form" does not exist.', 346, $this->getSourceContext()); })()))) {
            // line 347
            echo "                                <div class=\"sonata-ba-form\">";
            echo (isset($context["_form"]) || array_key_exists("_form", $context) ? $context["_form"] : (function () { throw new Twig_Error_Runtime('Variable "_form" does not exist.', 347, $this->getSourceContext()); })());
            echo "</div>
                            ";
        }
        // line 349
        echo "
                            ";
        // line 350
        if ( !twig_test_empty((isset($context["_list_filters"]) || array_key_exists("_list_filters", $context) ? $context["_list_filters"] : (function () { throw new Twig_Error_Runtime('Variable "_list_filters" does not exist.', 350, $this->getSourceContext()); })()))) {
            // line 351
            echo "                                <div class=\"row\">
                                    ";
            // line 352
            echo (isset($context["_list_filters"]) || array_key_exists("_list_filters", $context) ? $context["_list_filters"] : (function () { throw new Twig_Error_Runtime('Variable "_list_filters" does not exist.', 352, $this->getSourceContext()); })());
            echo "
                                </div>
                            ";
        }
        // line 355
        echo "
                            ";
        // line 356
        if ( !twig_test_empty((isset($context["_list_table"]) || array_key_exists("_list_table", $context) ? $context["_list_table"] : (function () { throw new Twig_Error_Runtime('Variable "_list_table" does not exist.', 356, $this->getSourceContext()); })()))) {
            // line 357
            echo "                                <div class=\"row\">
                                    ";
            // line 358
            echo (isset($context["_list_table"]) || array_key_exists("_list_table", $context) ? $context["_list_table"] : (function () { throw new Twig_Error_Runtime('Variable "_list_table" does not exist.', 358, $this->getSourceContext()); })());
            echo "
                                </div>
                            ";
        }
        // line 361
        echo "                        ";
        
        $__internal_fe5e5621b5280622fa4134eeeea9417e317389c4e6d4adec5c64d16569d658d4->leave($__internal_fe5e5621b5280622fa4134eeeea9417e317389c4e6d4adec5c64d16569d658d4_prof);

    }

    // line 330
    public function block_notice($context, array $blocks = array())
    {
        $__internal_3d4f1fb0c57dc9600520f312234f2e0e1a9a27f0df88bc1041344590c6a28e57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d4f1fb0c57dc9600520f312234f2e0e1a9a27f0df88bc1041344590c6a28e57->enter($__internal_3d4f1fb0c57dc9600520f312234f2e0e1a9a27f0df88bc1041344590c6a28e57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "notice"));

        // line 331
        echo "                                ";
        $this->loadTemplate("SonataCoreBundle:FlashMessage:render.html.twig", "SonataAdminBundle::standard_layout.html.twig", 331)->display($context);
        // line 332
        echo "                            ";
        
        $__internal_3d4f1fb0c57dc9600520f312234f2e0e1a9a27f0df88bc1041344590c6a28e57->leave($__internal_3d4f1fb0c57dc9600520f312234f2e0e1a9a27f0df88bc1041344590c6a28e57_prof);

    }

    // line 369
    public function block_bootlint($context, array $blocks = array())
    {
        $__internal_b5e357515c34f4185dacd32644f68cd4e8028193729430e967782662babd5e33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5e357515c34f4185dacd32644f68cd4e8028193729430e967782662babd5e33->enter($__internal_b5e357515c34f4185dacd32644f68cd4e8028193729430e967782662babd5e33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bootlint"));

        // line 370
        echo "            ";
        // line 371
        echo "            <script type=\"text/javascript\">
                javascript:(function(){var s=document.createElement(\"script\");s.onload=function(){bootlint.showLintReportForCurrentDocument([], {hasProblems: false, problemFree: false});};s.src=\"https://maxcdn.bootstrapcdn.com/bootlint/latest/bootlint.min.js\";document.body.appendChild(s)})();
            </script>
        ";
        
        $__internal_b5e357515c34f4185dacd32644f68cd4e8028193729430e967782662babd5e33->leave($__internal_b5e357515c34f4185dacd32644f68cd4e8028193729430e967782662babd5e33_prof);

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
        return array (  1273 => 371,  1271 => 370,  1265 => 369,  1258 => 332,  1255 => 331,  1249 => 330,  1242 => 361,  1236 => 358,  1233 => 357,  1231 => 356,  1228 => 355,  1222 => 352,  1219 => 351,  1217 => 350,  1214 => 349,  1208 => 347,  1206 => 346,  1203 => 345,  1197 => 343,  1195 => 342,  1192 => 341,  1186 => 339,  1184 => 338,  1181 => 337,  1175 => 335,  1173 => 334,  1170 => 333,  1168 => 330,  1165 => 329,  1159 => 328,  1152 => 314,  1148 => 312,  1142 => 310,  1135 => 306,  1130 => 304,  1127 => 303,  1125 => 302,  1122 => 301,  1119 => 300,  1113 => 299,  1106 => 282,  1100 => 279,  1097 => 278,  1094 => 277,  1088 => 276,  1081 => 323,  1075 => 319,  1069 => 317,  1067 => 316,  1064 => 315,  1062 => 299,  1059 => 298,  1055 => 296,  1040 => 294,  1036 => 293,  1033 => 292,  1031 => 291,  1028 => 290,  1022 => 287,  1019 => 286,  1017 => 285,  1013 => 283,  1011 => 276,  1007 => 274,  1005 => 272,  1004 => 271,  1003 => 270,  1001 => 269,  995 => 268,  988 => 324,  985 => 268,  979 => 267,  971 => 362,  969 => 328,  964 => 325,  962 => 267,  958 => 265,  952 => 264,  944 => 254,  938 => 253,  930 => 256,  928 => 253,  925 => 252,  919 => 251,  909 => 249,  903 => 248,  891 => 247,  873 => 237,  867 => 235,  861 => 234,  854 => 258,  851 => 251,  848 => 248,  846 => 247,  843 => 246,  840 => 234,  834 => 233,  825 => 259,  823 => 233,  819 => 231,  813 => 230,  805 => 364,  803 => 264,  799 => 262,  796 => 230,  790 => 229,  781 => 217,  779 => 216,  772 => 211,  766 => 210,  758 => 208,  756 => 207,  750 => 203,  744 => 202,  737 => 223,  732 => 220,  729 => 210,  727 => 202,  723 => 200,  720 => 199,  714 => 198,  706 => 194,  702 => 192,  696 => 190,  693 => 189,  690 => 188,  676 => 187,  670 => 185,  666 => 183,  660 => 181,  656 => 179,  653 => 177,  650 => 175,  648 => 174,  643 => 173,  641 => 172,  638 => 171,  636 => 170,  633 => 167,  631 => 166,  629 => 165,  627 => 164,  609 => 163,  606 => 162,  604 => 161,  601 => 160,  599 => 159,  596 => 158,  590 => 157,  582 => 224,  580 => 198,  576 => 196,  574 => 157,  566 => 151,  560 => 150,  553 => 149,  549 => 147,  543 => 145,  540 => 144,  532 => 142,  530 => 141,  525 => 140,  522 => 139,  516 => 138,  505 => 134,  501 => 132,  495 => 131,  487 => 226,  484 => 150,  481 => 138,  479 => 131,  476 => 130,  470 => 129,  463 => 123,  460 => 122,  458 => 121,  455 => 120,  449 => 119,  442 => 115,  439 => 114,  436 => 113,  422 => 112,  417 => 110,  414 => 107,  412 => 106,  410 => 105,  408 => 104,  404 => 101,  401 => 100,  398 => 99,  381 => 98,  378 => 97,  375 => 96,  369 => 94,  367 => 93,  361 => 91,  355 => 90,  348 => 66,  339 => 64,  334 => 63,  328 => 62,  310 => 50,  306 => 48,  300 => 47,  292 => 46,  284 => 45,  276 => 44,  272 => 42,  266 => 41,  259 => 87,  256 => 86,  250 => 84,  247 => 83,  244 => 81,  239 => 80,  236 => 79,  233 => 77,  229 => 75,  227 => 73,  225 => 71,  222 => 70,  220 => 69,  218 => 68,  215 => 67,  213 => 62,  210 => 61,  207 => 41,  201 => 40,  194 => 38,  185 => 36,  180 => 35,  174 => 34,  164 => 29,  158 => 28,  146 => 26,  136 => 376,  133 => 375,  130 => 369,  128 => 368,  124 => 366,  122 => 229,  119 => 228,  117 => 129,  111 => 125,  109 => 119,  104 => 116,  102 => 90,  98 => 88,  96 => 40,  93 => 39,  91 => 34,  88 => 33,  86 => 28,  81 => 26,  78 => 25,  76 => 23,  74 => 22,  72 => 21,  70 => 20,  68 => 19,  66 => 18,  64 => 17,  62 => 16,  60 => 15,  58 => 14,  56 => 13,  54 => 12,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{%- set _preview = block('preview') is defined ? block('preview')|trim : null %}
{% set _form = block('form') is defined ? block('form')|trim : null %}
{% set _show = block('show') is defined ? block('show')|trim : null %}
{% set _list_table = block('list_table') is defined ? block('list_table')|trim : null %}
{% set _list_filters = block('list_filters') is defined ? block('list_filters')|trim : null %}
{% set _tab_menu = block('tab_menu') is defined ? block('tab_menu')|trim : null %}
{% set _content = block('content') is defined ? block('content')|trim : null %}
{% set _title = block('title') is defined ? block('title')|trim : null %}
{% set _breadcrumb = block('breadcrumb') is defined ? block('breadcrumb')|trim : null %}
{% set _actions = block('actions') is defined ? block('actions')|trim : null %}
{% set _navbar_title = block('navbar_title') is defined ? block('navbar_title')|trim : null %}
{% set _list_filters_actions = block('list_filters_actions') is defined ? block('list_filters_actions')|trim : null -%}

<!DOCTYPE html>
<html {% block html_attributes %}class=\"no-js\"{% endblock %}>
    <head>
        {% block meta_tags %}
            <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
            <meta charset=\"UTF-8\">
            <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        {% endblock %}

        {% block stylesheets %}
            {% for stylesheet in sonata_admin.adminPool.getOption('stylesheets', []) %}
                <link rel=\"stylesheet\" href=\"{{ asset(stylesheet) }}\">
            {% endfor %}
        {% endblock %}

        {% block javascripts %}
            {% block sonata_javascript_config %}
                <script>
                    window.SONATA_CONFIG = {
                        CONFIRM_EXIT: {% if sonata_admin.adminPool.getOption('confirm_exit') %}true{% else %}false{% endif %},
                        USE_SELECT2: {% if sonata_admin.adminPool.getOption('use_select2') %}true{% else %}false{% endif %},
                        USE_ICHECK: {% if sonata_admin.adminPool.getOption('use_icheck') %}true{% else %}false{% endif %},
                        USE_STICKYFORMS: {% if sonata_admin.adminPool.getOption('use_stickyforms') %}true{% else %}false{% endif %}
                    };
                    window.SONATA_TRANSLATIONS = {
                        CONFIRM_EXIT: '{{ 'confirm_exit'|trans({}, 'SonataAdminBundle')|escape('js') }}'
                    };

                    // http://getbootstrap.com/getting-started/#support-ie10-width
                    if (navigator.userAgent.match(/IEMobile\\/10\\.0/)) {
                        var msViewportStyle = document.createElement('style');
                        msViewportStyle.appendChild(document.createTextNode('@-ms-viewport{width:auto!important}'));
                        document.querySelector('head').appendChild(msViewportStyle);
                    }
                </script>
            {% endblock %}

            {% block sonata_javascript_pool %}
                {% for javascript in sonata_admin.adminPool.getOption('javascripts', []) %}
                    <script src=\"{{ asset(javascript) }}\"></script>
                {% endfor %}
            {% endblock %}

            {% set locale = app.request.locale %}
            {# localize moment #}
            {% if locale[:2] != 'en' %}
                <script src=\"{{ asset(
                    'bundles/sonatacore/vendor/moment/locale/' ~
                    locale|lower|replace({'_':'-'}) ~
                    '.js'
                ) }}\"></script>
            {% endif %}

            {# localize select2 #}
            {% if sonata_admin.adminPool.getOption('use_select2') %}
                {% if locale == 'pt' %}{% set locale = 'pt_PT' %}{% endif %}

                {# omit default EN locale #}
                {% if locale[:2] != 'en' %}
                    <script src=\"{{ asset('bundles/sonatacore/vendor/select2/select2_locale_' ~ locale|replace({'_':'-'}) ~ '.js') }}\"></script>
                {% endif %}
            {% endif %}
        {% endblock %}

        <title>
        {% block sonata_head_title %}
            {{ 'Admin'|trans({}, 'SonataAdminBundle') }}

            {% if _title is not empty %}
                {{ _title|striptags|raw }}
            {% else %}
                {% if action is defined %}
                    -
                    {% for menu in breadcrumbs_builder.breadcrumbs(admin, action) %}
                        {% if not loop.first %}
                            {% if loop.index != 2 %}
                                &gt;
                            {% endif %}

                            {%- set translation_domain = menu.extra('translation_domain', 'messages') -%}
                            {%- set label = menu.label -%}
                            {%- if translation_domain is not same as(false) -%}
                                {%- set label = label|trans(menu.extra('translation_params', {}), translation_domain) -%}
                            {%- endif -%}

                            {{ label }}
                        {% endif %}
                    {% endfor %}
                {% endif %}
            {% endif %}
        {% endblock %}
        </title>
    </head>
    <body
            {% block body_attributes -%}
                class=\"sonata-bc skin-black fixed
                {% if app.request.cookies.get('sonata_sidebar_hide') -%}
                    sidebar-collapse
                {%- endif -%}\"
            {%- endblock -%}
    >

    <div class=\"wrapper\">

        {% block sonata_header %}
            <header class=\"main-header\">
                {% block sonata_header_noscript_warning %}
                    <noscript>
                        <div class=\"noscript-warning\">
                            {{ 'noscript_warning'|trans({}, 'SonataAdminBundle') }}
                        </div>
                    </noscript>
                {% endblock %}
                {% block logo %}
                    {% spaceless %}
                        <a class=\"logo\" href=\"{{ path('sonata_admin_dashboard') }}\">
                            {% if 'single_image' == sonata_admin.adminPool.getOption('title_mode') or 'both' == sonata_admin.adminPool.getOption('title_mode') %}
                                <img src=\"{{ asset(sonata_admin.adminPool.titlelogo) }}\" alt=\"{{ sonata_admin.adminPool.title }}\">
                            {% endif %}
                            {% if 'single_text' == sonata_admin.adminPool.getOption('title_mode') or 'both' == sonata_admin.adminPool.getOption('title_mode') %}
                                <span>{{ sonata_admin.adminPool.title }}</span>
                            {% endif %}
                        </a>
                    {% endspaceless %}
                {% endblock %}
                {% block sonata_nav %}
                    <nav class=\"navbar navbar-static-top\" role=\"navigation\">
                        <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                            <span class=\"sr-only\">Toggle navigation</span>
                        </a>

                        <div class=\"navbar-left\">
                            {% block sonata_breadcrumb %}
                                <div class=\"hidden-xs\">
                                    {% if _breadcrumb is not empty or action is defined %}
                                        <ol class=\"nav navbar-top-links breadcrumb\">
                                            {% if _breadcrumb is empty %}
                                                {% if action is defined %}
                                                    {% for menu in breadcrumbs_builder.breadcrumbs(admin, action) %}
                                                        {%- set translation_domain = menu.extra('translation_domain', 'messages') -%}
                                                        {%- set label = menu.label -%}
                                                        {%- if translation_domain is not same as(false) -%}
                                                            {%- set label = label|trans(menu.extra('translation_params', {}), translation_domain) -%}
                                                        {%- endif -%}

                                                        {% if not loop.last %}
                                                            <li>
                                                                {% if menu.uri is not empty %}
                                                                    <a href=\"{{ menu.uri }}\">
                                                                        {% if menu.extra('safe_label', true) %}
                                                                            {{- label|raw -}}
                                                                        {% else %}
                                                                            {{- label -}}
                                                                        {% endif %}
                                                                    </a>
                                                                {% else %}
                                                                    <span>{{ label }}</span>
                                                                {% endif %}
                                                            </li>
                                                        {% else %}
                                                            <li class=\"active\"><span>{{ label }}</span></li>
                                                        {% endif %}
                                                    {% endfor %}
                                                {% endif %}
                                            {% else %}
                                                {{ _breadcrumb|raw }}
                                            {% endif %}
                                        </ol>
                                    {% endif %}
                                </div>
                            {% endblock sonata_breadcrumb %}
                        </div>

                        {% block sonata_top_nav_menu %}
                            {% if app.user and is_granted(sonata_admin.adminPool.getOption('role_admin')) %}
                                <div class=\"navbar-custom-menu\">
                                    <ul class=\"nav navbar-nav\">
                                        {% block sonata_top_nav_menu_add_block %}
                                            <li class=\"dropdown\">
                                                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                                    <i class=\"fa fa-plus-square fa-fw\" aria-hidden=\"true\"></i> <i class=\"fa fa-caret-down\" aria-hidden=\"true\"></i>
                                                </a>
                                                {% include sonata_admin.adminPool.getTemplate('add_block') %}
                                            </li>
                                        {% endblock %}
                                        {% block sonata_top_nav_menu_user_block %}
                                            <li class=\"dropdown user-menu\">
                                                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                                    <i class=\"fa fa-user fa-fw\" aria-hidden=\"true\"></i> <i class=\"fa fa-caret-down\" aria-hidden=\"true\"></i>
                                                </a>
                                                <ul class=\"dropdown-menu dropdown-user\">
                                                    {% include sonata_admin.adminPool.getTemplate('user_block') %}
                                                </ul>
                                            </li>
                                        {% endblock %}
                                    </ul>
                                </div>
                            {% endif %}
                        {% endblock %}
                    </nav>
                {% endblock sonata_nav %}
            </header>
        {% endblock sonata_header %}

        {% block sonata_wrapper %}
            {% block sonata_left_side %}
                <aside class=\"main-sidebar\">
                    <section class=\"sidebar\">
                        {% block sonata_side_nav %}
                            {% block sonata_sidebar_search %}
                                <form action=\"{{ path('sonata_admin_search') }}\" method=\"GET\" class=\"sidebar-form\" role=\"search\">
                                    <div class=\"input-group custom-search-form\">
                                        <input type=\"text\" name=\"q\" value=\"{{ app.request.get('q') }}\" class=\"form-control\" placeholder=\"{{ 'search_placeholder'|trans({}, 'SonataAdminBundle') }}\">
                                        <span class=\"input-group-btn\">
                                            <button class=\"btn btn-flat\" type=\"submit\">
                                                <i class=\"fa fa-search\" aria-hidden=\"true\"></i>
                                            </button>
                                        </span>
                                    </div>
                                </form>
                            {% endblock sonata_sidebar_search %}

                            {% block side_bar_before_nav %} {% endblock %}
                            {% block side_bar_nav %}
                                {{ knp_menu_render('sonata_admin_sidebar', {template: sonata_admin.adminPool.getTemplate('knp_menu_template')}) }}
                            {% endblock side_bar_nav %}
                            {% block side_bar_after_nav %}
                                <p class=\"text-center small\" style=\"border-top: 1px solid #444444; padding-top: 10px\">
                                    {% block side_bar_after_nav_content %}
                                        <a href=\"https://sonata-project.org\" rel=\"noreferrer\" target=\"_blank\">sonata project</a>
                                    {% endblock %}
                                </p>
                            {% endblock %}
                        {% endblock sonata_side_nav %}
                    </section>
                </aside>
            {% endblock sonata_left_side %}

            <div class=\"content-wrapper\">
                {% block sonata_page_content %}
                    <section class=\"content-header\">

                        {% block sonata_page_content_header %}
                            {% block sonata_page_content_nav %}
                                {% if _navbar_title is not empty
                                  or _tab_menu is not empty
                                  or _actions is not empty
                                  or _list_filters_actions is not empty
                                 %}
                                    <nav class=\"navbar navbar-default\" role=\"navigation\">
                                        <div class=\"container-fluid\">
                                            {% block tab_menu_navbar_header %}
                                                {% if _navbar_title is not empty %}
                                                    <div class=\"navbar-header\">
                                                        <a class=\"navbar-brand\" href=\"#\">{{ _navbar_title|raw }}</a>
                                                    </div>
                                                {% endif %}
                                            {% endblock %}

                                            <div class=\"navbar-collapse\">
                                                {% if _tab_menu is not empty %}
                                                    <div class=\"navbar-left\">
                                                        {{ _tab_menu|raw }}
                                                    </div>
                                                {% endif %}

                                                {% if admin is defined and action is defined and action == 'list' and admin.listModes|length > 1 %}
                                                    <div class=\"nav navbar-right btn-group\">
                                                        {% for mode, settings in admin.listModes %}
                                                            <a href=\"{{ admin.generateUrl('list', app.request.query.all|merge({_list_mode: mode})) }}\" class=\"btn btn-default navbar-btn btn-sm{% if admin.getListMode() == mode %} active{% endif %}\"><i class=\"{{ settings.class }}\"></i></a>
                                                        {% endfor %}
                                                    </div>
                                                {% endif %}

                                                {% block sonata_admin_content_actions_wrappers %}
                                                    {% if _actions|replace({ '<li>': '', '</li>': '' })|trim is not empty %}
                                                        <ul class=\"nav navbar-nav navbar-right\">
                                                        {% if _actions|split('</a>')|length > 2 %}
                                                            <li class=\"dropdown sonata-actions\">
                                                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">{{ 'link_actions'|trans({}, 'SonataAdminBundle') }} <b class=\"caret\"></b></a>
                                                                <ul class=\"dropdown-menu\" role=\"menu\">
                                                                    {{ _actions|raw }}
                                                                </ul>
                                                            </li>
                                                        {% else %}
                                                            {{ _actions|raw }}
                                                        {% endif %}
                                                        </ul>
                                                    {% endif %}
                                                {% endblock sonata_admin_content_actions_wrappers %}

                                                {% if _list_filters_actions is not empty %}
                                                    {{ _list_filters_actions|raw }}
                                                {% endif %}
                                            </div>
                                        </div>
                                    </nav>
                                {% endif %}
                            {% endblock sonata_page_content_nav %}
                        {% endblock sonata_page_content_header %}
                    </section>

                    <section class=\"content\">
                        {% block sonata_admin_content %}

                            {% block notice %}
                                {% include 'SonataCoreBundle:FlashMessage:render.html.twig' %}
                            {% endblock notice %}

                            {% if _preview is not empty %}
                                <div class=\"sonata-ba-preview\">{{ _preview|raw }}</div>
                            {% endif %}

                            {% if _content is not empty %}
                                <div class=\"sonata-ba-content\">{{ _content|raw }}</div>
                            {% endif %}

                            {% if _show is not empty %}
                                <div class=\"sonata-ba-show\">{{ _show|raw }}</div>
                            {% endif %}

                            {% if _form is not empty %}
                                <div class=\"sonata-ba-form\">{{ _form|raw }}</div>
                            {% endif %}

                            {% if _list_filters is not empty %}
                                <div class=\"row\">
                                    {{ _list_filters|raw }}
                                </div>
                            {% endif %}

                            {% if _list_table is not empty %}
                                <div class=\"row\">
                                    {{ _list_table|raw }}
                                </div>
                            {% endif %}
                        {% endblock sonata_admin_content %}
                    </section>
                {% endblock sonata_page_content %}
            </div>
        {% endblock sonata_wrapper %}
    </div>

    {% if sonata_admin.adminPool.getOption('use_bootlint') %}
        {% block bootlint %}
            {# Bootlint - https://github.com/twbs/bootlint#in-the-browser #}
            <script type=\"text/javascript\">
                javascript:(function(){var s=document.createElement(\"script\");s.onload=function(){bootlint.showLintReportForCurrentDocument([], {hasProblems: false, problemFree: false});};s.src=\"https://maxcdn.bootstrapcdn.com/bootlint/latest/bootlint.min.js\";document.body.appendChild(s)})();
            </script>
        {% endblock %}
    {% endif %}

    </body>
</html>
", "SonataAdminBundle::standard_layout.html.twig", "/home/kuba/Workspace/vendor/sonata-project/admin-bundle/src/Resources/views/standard_layout.html.twig");
    }
}
