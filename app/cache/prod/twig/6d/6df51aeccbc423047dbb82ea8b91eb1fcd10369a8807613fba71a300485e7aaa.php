<?php

/* SonataAdminBundle:CRUD:base_edit_form.html.twig */
class __TwigTemplate_6083304372942afce4ebaa81d189fa26ce7265f182d956756f604dfdcd7710ba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form' => array($this, 'block_form'),
            'sonata_form_action_url' => array($this, 'block_sonata_form_action_url'),
            'sonata_form_attributes' => array($this, 'block_sonata_form_attributes'),
            'sonata_pre_fieldsets' => array($this, 'block_sonata_pre_fieldsets'),
            'sonata_tab_content' => array($this, 'block_sonata_tab_content'),
            'sonata_post_fieldsets' => array($this, 'block_sonata_post_fieldsets'),
            'formactions' => array($this, 'block_formactions'),
            'sonata_form_actions' => array($this, 'block_sonata_form_actions'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_254825efe0457c509fcbc44fb7b3d92c92833ea0e8c41ea7dd4e267d509a943c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_254825efe0457c509fcbc44fb7b3d92c92833ea0e8c41ea7dd4e267d509a943c->enter($__internal_254825efe0457c509fcbc44fb7b3d92c92833ea0e8c41ea7dd4e267d509a943c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_edit_form.html.twig"));

        // line 1
        $this->displayBlock('form', $context, $blocks);
        
        $__internal_254825efe0457c509fcbc44fb7b3d92c92833ea0e8c41ea7dd4e267d509a943c->leave($__internal_254825efe0457c509fcbc44fb7b3d92c92833ea0e8c41ea7dd4e267d509a943c_prof);

    }

    public function block_form($context, array $blocks = array())
    {
        $__internal_38c90404f51a86c957dce2e299cb0a20d900738cb5a5201345214f5907626548 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38c90404f51a86c957dce2e299cb0a20d900738cb5a5201345214f5907626548->enter($__internal_38c90404f51a86c957dce2e299cb0a20d900738cb5a5201345214f5907626548_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 2
        echo "    ";
        $context["form_helper"] = $this->loadTemplate("SonataAdminBundle:CRUD:base_edit_form_macro.html.twig", "SonataAdminBundle:CRUD:base_edit_form.html.twig", 2);
        // line 3
        echo "    ";
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.edit.form.top", array("admin" => (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 3, $this->getSourceContext()); })()), "object" => (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new Twig_Error_Runtime('Variable "object" does not exist.', 3, $this->getSourceContext()); })()))));
        echo "

    ";
        // line 6
        echo "    ";
        $context["url"] = (( !(null === ((array_key_exists("objectId", $context)) ? (_twig_default_filter((isset($context["objectId"]) || array_key_exists("objectId", $context) ? $context["objectId"] : (function () { throw new Twig_Error_Runtime('Variable "objectId" does not exist.', 6, $this->getSourceContext()); })()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 6, $this->getSourceContext()); })()), "id", array(0 => (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new Twig_Error_Runtime('Variable "object" does not exist.', 6, $this->getSourceContext()); })())), "method"))) : (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 6, $this->getSourceContext()); })()), "id", array(0 => (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new Twig_Error_Runtime('Variable "object" does not exist.', 6, $this->getSourceContext()); })())), "method"))))) ? ("edit") : ("create"));
        // line 7
        echo "
    ";
        // line 8
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 8, $this->getSourceContext()); })()), "hasRoute", array(0 => (isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new Twig_Error_Runtime('Variable "url" does not exist.', 8, $this->getSourceContext()); })())), "method")) {
            // line 9
            echo "        <div>
            ";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form_not_available", array(), "SonataAdminBundle"), "html", null, true);
            echo "
        </div>
    ";
        } else {
            // line 13
            echo "        <form
              ";
            // line 14
            if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 14, $this->getSourceContext()); })()), "adminPool", array()), "getOption", array(0 => "form_type"), "method") == "horizontal")) {
                echo "class=\"form-horizontal\"";
            }
            // line 15
            echo "              role=\"form\"
              ";
            // line 17
            echo "              action=\"";
            $this->displayBlock('sonata_form_action_url', $context, $blocks);
            echo "\"
              ";
            // line 18
            if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 18, $this->getSourceContext()); })()), "vars", array()), "multipart", array())) {
                echo " enctype=\"multipart/form-data\"";
            }
            // line 19
            echo "              method=\"POST\"
              ";
            // line 20
            if ( !twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 20, $this->getSourceContext()); })()), "adminPool", array()), "getOption", array(0 => "html5_validate"), "method")) {
                echo "novalidate=\"novalidate\"";
            }
            // line 21
            echo "              ";
            $this->displayBlock('sonata_form_attributes', $context, $blocks);
            // line 22
            echo "              >

            ";
            // line 24
            echo twig_include($this->env, $context, "SonataAdminBundle:Helper:render_form_dismissable_errors.html.twig");
            echo "

            ";
            // line 26
            $this->displayBlock('sonata_pre_fieldsets', $context, $blocks);
            // line 29
            echo "
            ";
            // line 30
            $this->displayBlock('sonata_tab_content', $context, $blocks);
            // line 64
            echo "
            ";
            // line 65
            $this->displayBlock('sonata_post_fieldsets', $context, $blocks);
            // line 68
            echo "
            ";
            // line 69
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 69, $this->getSourceContext()); })()), 'rest');
            echo "

            ";
            // line 71
            $this->displayBlock('formactions', $context, $blocks);
            // line 117
            echo "        </form>
    ";
        }
        // line 119
        echo "
    ";
        // line 120
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.edit.form.bottom", array("admin" => (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 120, $this->getSourceContext()); })()), "object" => (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new Twig_Error_Runtime('Variable "object" does not exist.', 120, $this->getSourceContext()); })()))));
        echo "

";
        
        $__internal_38c90404f51a86c957dce2e299cb0a20d900738cb5a5201345214f5907626548->leave($__internal_38c90404f51a86c957dce2e299cb0a20d900738cb5a5201345214f5907626548_prof);

    }

    // line 17
    public function block_sonata_form_action_url($context, array $blocks = array())
    {
        $__internal_d5d2cda778b3f0ccbfba9713c8b2b2b76f9292bb953763cde991888d4e69a2b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5d2cda778b3f0ccbfba9713c8b2b2b76f9292bb953763cde991888d4e69a2b8->enter($__internal_d5d2cda778b3f0ccbfba9713c8b2b2b76f9292bb953763cde991888d4e69a2b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_form_action_url"));

        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 17, $this->getSourceContext()); })()), "generateUrl", array(0 => (isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new Twig_Error_Runtime('Variable "url" does not exist.', 17, $this->getSourceContext()); })()), 1 => array("id" => ((array_key_exists("objectId", $context)) ? (_twig_default_filter((isset($context["objectId"]) || array_key_exists("objectId", $context) ? $context["objectId"] : (function () { throw new Twig_Error_Runtime('Variable "objectId" does not exist.', 17, $this->getSourceContext()); })()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 17, $this->getSourceContext()); })()), "id", array(0 => (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new Twig_Error_Runtime('Variable "object" does not exist.', 17, $this->getSourceContext()); })())), "method"))) : (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 17, $this->getSourceContext()); })()), "id", array(0 => (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new Twig_Error_Runtime('Variable "object" does not exist.', 17, $this->getSourceContext()); })())), "method"))), "uniqid" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 17, $this->getSourceContext()); })()), "uniqid", array()), "subclass" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 17, $this->getSourceContext()); })()), "request", array()), "get", array(0 => "subclass"), "method"))), "method"), "html", null, true);
        
        $__internal_d5d2cda778b3f0ccbfba9713c8b2b2b76f9292bb953763cde991888d4e69a2b8->leave($__internal_d5d2cda778b3f0ccbfba9713c8b2b2b76f9292bb953763cde991888d4e69a2b8_prof);

    }

    // line 21
    public function block_sonata_form_attributes($context, array $blocks = array())
    {
        $__internal_e2573086e59d745d043ce888c995d9918955a8501fb3a8b7aff3eeeb6394e12f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2573086e59d745d043ce888c995d9918955a8501fb3a8b7aff3eeeb6394e12f->enter($__internal_e2573086e59d745d043ce888c995d9918955a8501fb3a8b7aff3eeeb6394e12f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_form_attributes"));

        
        $__internal_e2573086e59d745d043ce888c995d9918955a8501fb3a8b7aff3eeeb6394e12f->leave($__internal_e2573086e59d745d043ce888c995d9918955a8501fb3a8b7aff3eeeb6394e12f_prof);

    }

    // line 26
    public function block_sonata_pre_fieldsets($context, array $blocks = array())
    {
        $__internal_0a4b1cb3368a998cd553d45aa90b49bf1c6964030699ccd8a81be15179d0debd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a4b1cb3368a998cd553d45aa90b49bf1c6964030699ccd8a81be15179d0debd->enter($__internal_0a4b1cb3368a998cd553d45aa90b49bf1c6964030699ccd8a81be15179d0debd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_pre_fieldsets"));

        // line 27
        echo "                <div class=\"row\">
            ";
        
        $__internal_0a4b1cb3368a998cd553d45aa90b49bf1c6964030699ccd8a81be15179d0debd->leave($__internal_0a4b1cb3368a998cd553d45aa90b49bf1c6964030699ccd8a81be15179d0debd_prof);

    }

    // line 30
    public function block_sonata_tab_content($context, array $blocks = array())
    {
        $__internal_e494c22fc26467fee93f0e7e9b0c338c32f4525686c60471be1aef7c58d62e45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e494c22fc26467fee93f0e7e9b0c338c32f4525686c60471be1aef7c58d62e45->enter($__internal_e494c22fc26467fee93f0e7e9b0c338c32f4525686c60471be1aef7c58d62e45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_tab_content"));

        // line 31
        echo "                ";
        $context["has_tab"] = (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 31, $this->getSourceContext()); })()), "formtabs", array())) == 1) && (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_array_keys_filter(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 31, $this->getSourceContext()); })()), "formtabs", array())), 0, array(), "array") != "default")) || (twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 31, $this->getSourceContext()); })()), "formtabs", array())) > 1));
        // line 32
        echo "
                <div class=\"col-md-12\">
                    ";
        // line 34
        if ((isset($context["has_tab"]) || array_key_exists("has_tab", $context) ? $context["has_tab"] : (function () { throw new Twig_Error_Runtime('Variable "has_tab" does not exist.', 34, $this->getSourceContext()); })())) {
            // line 35
            echo "                        <div class=\"nav-tabs-custom\">
                            <ul class=\"nav nav-tabs\" role=\"tablist\">
                                ";
            // line 37
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 37, $this->getSourceContext()); })()), "formtabs", array()));
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
            foreach ($context['_seq'] as $context["name"] => $context["form_tab"]) {
                // line 38
                echo "                                    <li";
                if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index", array()) == 1)) {
                    echo " class=\"active\"";
                }
                echo "><a href=\"#tab_";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 38, $this->getSourceContext()); })()), "uniqid", array()), "html", null, true);
                echo "_";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index", array()), "html", null, true);
                echo "\" data-toggle=\"tab\"><i class=\"fa fa-exclamation-circle has-errors hide\" aria-hidden=\"true\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), $context["form_tab"], "label", array()), array(), ((twig_get_attribute($this->env, $this->getSourceContext(), $context["form_tab"], "translation_domain", array())) ? (twig_get_attribute($this->env, $this->getSourceContext(), $context["form_tab"], "translation_domain", array())) : (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 38, $this->getSourceContext()); })()), "translationDomain", array())))), "html", null, true);
                echo "</a></li>
                                ";
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
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['form_tab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "                            </ul>
                            <div class=\"tab-content\">
                                ";
            // line 42
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 42, $this->getSourceContext()); })()), "formtabs", array()));
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
            foreach ($context['_seq'] as $context["code"] => $context["form_tab"]) {
                // line 43
                echo "                                    <div class=\"tab-pane fade";
                if (twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "first", array())) {
                    echo " in active";
                }
                echo "\" id=\"tab_";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 43, $this->getSourceContext()); })()), "uniqid", array()), "html", null, true);
                echo "_";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index", array()), "html", null, true);
                echo "\">
                                        <div class=\"box-body  container-fluid\">
                                            <div class=\"sonata-ba-collapsed-fields\">
                                                ";
                // line 46
                if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["form_tab"], "description", array()) != false)) {
                    // line 47
                    echo "                                                    <p>
                                                        ";
                    // line 48
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), $context["form_tab"], "description", array()), array(), ((twig_get_attribute($this->env, $this->getSourceContext(), $context["form_tab"], "translation_domain", array())) ? (twig_get_attribute($this->env, $this->getSourceContext(), $context["form_tab"], "translation_domain", array())) : (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 48, $this->getSourceContext()); })()), "translationDomain", array())))), "html", null, true);
                    echo "
                                                    </p>
                                                ";
                }
                // line 51
                echo "
                                                ";
                // line 52
                echo $context["form_helper"]->macro_render_groups((isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 52, $this->getSourceContext()); })()), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 52, $this->getSourceContext()); })()), twig_get_attribute($this->env, $this->getSourceContext(), $context["form_tab"], "groups", array(), "array"), (isset($context["has_tab"]) || array_key_exists("has_tab", $context) ? $context["has_tab"] : (function () { throw new Twig_Error_Runtime('Variable "has_tab" does not exist.', 52, $this->getSourceContext()); })()));
                echo "
                                            </div>
                                        </div>
                                    </div>
                                ";
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
            unset($context['_seq'], $context['_iterated'], $context['code'], $context['form_tab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo "                            </div>
                        </div>
                    ";
        } else {
            // line 60
            echo "                        ";
            echo $context["form_helper"]->macro_render_groups((isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 60, $this->getSourceContext()); })()), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 60, $this->getSourceContext()); })()), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 60, $this->getSourceContext()); })()), "formtabs", array()), "default", array(), "array"), "groups", array()), (isset($context["has_tab"]) || array_key_exists("has_tab", $context) ? $context["has_tab"] : (function () { throw new Twig_Error_Runtime('Variable "has_tab" does not exist.', 60, $this->getSourceContext()); })()));
            echo "
                    ";
        }
        // line 62
        echo "                </div>
            ";
        
        $__internal_e494c22fc26467fee93f0e7e9b0c338c32f4525686c60471be1aef7c58d62e45->leave($__internal_e494c22fc26467fee93f0e7e9b0c338c32f4525686c60471be1aef7c58d62e45_prof);

    }

    // line 65
    public function block_sonata_post_fieldsets($context, array $blocks = array())
    {
        $__internal_33b2450fda753a42472cd7a09d8ec9452cf2ecf31bcb65755e85b5bd8b568636 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33b2450fda753a42472cd7a09d8ec9452cf2ecf31bcb65755e85b5bd8b568636->enter($__internal_33b2450fda753a42472cd7a09d8ec9452cf2ecf31bcb65755e85b5bd8b568636_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_post_fieldsets"));

        // line 66
        echo "                </div>
            ";
        
        $__internal_33b2450fda753a42472cd7a09d8ec9452cf2ecf31bcb65755e85b5bd8b568636->leave($__internal_33b2450fda753a42472cd7a09d8ec9452cf2ecf31bcb65755e85b5bd8b568636_prof);

    }

    // line 71
    public function block_formactions($context, array $blocks = array())
    {
        $__internal_8fed4535a45121eeedfbf9cdedcf8e9778d523deb88f7f30a7dddbdec021dc1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fed4535a45121eeedfbf9cdedcf8e9778d523deb88f7f30a7dddbdec021dc1c->enter($__internal_8fed4535a45121eeedfbf9cdedcf8e9778d523deb88f7f30a7dddbdec021dc1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formactions"));

        // line 72
        echo "                <div class=\"sonata-ba-form-actions well well-small form-actions\">
                ";
        // line 73
        $this->displayBlock('sonata_form_actions', $context, $blocks);
        // line 115
        echo "                </div>
            ";
        
        $__internal_8fed4535a45121eeedfbf9cdedcf8e9778d523deb88f7f30a7dddbdec021dc1c->leave($__internal_8fed4535a45121eeedfbf9cdedcf8e9778d523deb88f7f30a7dddbdec021dc1c_prof);

    }

    // line 73
    public function block_sonata_form_actions($context, array $blocks = array())
    {
        $__internal_f32fcdd2d20bfa7c04ec7cbd164842c4b50b1a2093873436495aff42fdf44772 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f32fcdd2d20bfa7c04ec7cbd164842c4b50b1a2093873436495aff42fdf44772->enter($__internal_f32fcdd2d20bfa7c04ec7cbd164842c4b50b1a2093873436495aff42fdf44772_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_form_actions"));

        // line 74
        echo "                    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 74, $this->getSourceContext()); })()), "request", array()), "isxmlhttprequest", array())) {
            // line 75
            echo "                        ";
            // line 76
            echo "                        ";
            if ( !(null === ((array_key_exists("objectId", $context)) ? (_twig_default_filter((isset($context["objectId"]) || array_key_exists("objectId", $context) ? $context["objectId"] : (function () { throw new Twig_Error_Runtime('Variable "objectId" does not exist.', 76, $this->getSourceContext()); })()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 76, $this->getSourceContext()); })()), "id", array(0 => (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new Twig_Error_Runtime('Variable "object" does not exist.', 76, $this->getSourceContext()); })())), "method"))) : (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 76, $this->getSourceContext()); })()), "id", array(0 => (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new Twig_Error_Runtime('Variable "object" does not exist.', 76, $this->getSourceContext()); })())), "method"))))) {
                // line 77
                echo "                            <button type=\"submit\" class=\"btn btn-success\" name=\"btn_update\"><i class=\"fa fa-save\" aria-hidden=\"true\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_update", array(), "SonataAdminBundle"), "html", null, true);
                echo "</button>
                        ";
            } else {
                // line 79
                echo "                            <button type=\"submit\" class=\"btn btn-success\" name=\"btn_create\"><i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_create", array(), "SonataAdminBundle"), "html", null, true);
                echo "</button>
                        ";
            }
            // line 81
            echo "                    ";
        } else {
            // line 82
            echo "                        ";
            if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 82, $this->getSourceContext()); })()), "supportsPreviewMode", array())) {
                // line 83
                echo "                            <button class=\"btn btn-info persist-preview\" name=\"btn_preview\" type=\"submit\">
                                <i class=\"fa fa-eye\" aria-hidden=\"true\"></i>
                                ";
                // line 85
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_preview", array(), "SonataAdminBundle"), "html", null, true);
                echo "
                            </button>
                        ";
            }
            // line 88
            echo "                        ";
            // line 89
            echo "                        ";
            if ( !(null === ((array_key_exists("objectId", $context)) ? (_twig_default_filter((isset($context["objectId"]) || array_key_exists("objectId", $context) ? $context["objectId"] : (function () { throw new Twig_Error_Runtime('Variable "objectId" does not exist.', 89, $this->getSourceContext()); })()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 89, $this->getSourceContext()); })()), "id", array(0 => (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new Twig_Error_Runtime('Variable "object" does not exist.', 89, $this->getSourceContext()); })())), "method"))) : (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 89, $this->getSourceContext()); })()), "id", array(0 => (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new Twig_Error_Runtime('Variable "object" does not exist.', 89, $this->getSourceContext()); })())), "method"))))) {
                // line 90
                echo "                            <button type=\"submit\" class=\"btn btn-success\" name=\"btn_update_and_edit\"><i class=\"fa fa-save\" aria-hidden=\"true\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_update_and_edit_again", array(), "SonataAdminBundle"), "html", null, true);
                echo "</button>

                            ";
                // line 92
                if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 92, $this->getSourceContext()); })()), "hasRoute", array(0 => "list"), "method") && twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 92, $this->getSourceContext()); })()), "hasAccess", array(0 => "list"), "method"))) {
                    // line 93
                    echo "                                <button type=\"submit\" class=\"btn btn-success\" name=\"btn_update_and_list\"><i class=\"fa fa-save\"></i> <i class=\"fa fa-list\" aria-hidden=\"true\"></i> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_update_and_return_to_list", array(), "SonataAdminBundle"), "html", null, true);
                    echo "</button>
                            ";
                }
                // line 95
                echo "
                            ";
                // line 96
                if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 96, $this->getSourceContext()); })()), "hasRoute", array(0 => "delete"), "method") && twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 96, $this->getSourceContext()); })()), "hasAccess", array(0 => "delete", 1 => (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new Twig_Error_Runtime('Variable "object" does not exist.', 96, $this->getSourceContext()); })())), "method"))) {
                    // line 97
                    echo "                                ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("delete_or", array(), "SonataAdminBundle"), "html", null, true);
                    echo "
                                <a class=\"btn btn-danger\" href=\"";
                    // line 98
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 98, $this->getSourceContext()); })()), "generateObjectUrl", array(0 => "delete", 1 => (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new Twig_Error_Runtime('Variable "object" does not exist.', 98, $this->getSourceContext()); })())), "method"), "html", null, true);
                    echo "\"><i class=\"fa fa-minus-circle\" aria-hidden=\"true\"></i> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("link_delete", array(), "SonataAdminBundle"), "html", null, true);
                    echo "</a>
                            ";
                }
                // line 100
                echo "
                            ";
                // line 101
                if (((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 101, $this->getSourceContext()); })()), "isAclEnabled", array(), "method") && twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 101, $this->getSourceContext()); })()), "hasRoute", array(0 => "acl"), "method")) && twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 101, $this->getSourceContext()); })()), "hasAccess", array(0 => "acl", 1 => (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new Twig_Error_Runtime('Variable "object" does not exist.', 101, $this->getSourceContext()); })())), "method"))) {
                    // line 102
                    echo "                                <a class=\"btn btn-info\" href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 102, $this->getSourceContext()); })()), "generateObjectUrl", array(0 => "acl", 1 => (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new Twig_Error_Runtime('Variable "object" does not exist.', 102, $this->getSourceContext()); })())), "method"), "html", null, true);
                    echo "\"><i class=\"fa fa-users\" aria-hidden=\"true\"></i> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("link_edit_acl", array(), "SonataAdminBundle"), "html", null, true);
                    echo "</a>
                            ";
                }
                // line 104
                echo "                        ";
            } else {
                // line 105
                echo "                            ";
                if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 105, $this->getSourceContext()); })()), "hasroute", array(0 => "edit"), "method") && twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 105, $this->getSourceContext()); })()), "hasAccess", array(0 => "edit"), "method"))) {
                    // line 106
                    echo "                                <button class=\"btn btn-success\" type=\"submit\" name=\"btn_create_and_edit\"><i class=\"fa fa-save\" aria-hidden=\"true\"></i> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_create_and_edit_again", array(), "SonataAdminBundle"), "html", null, true);
                    echo "</button>
                            ";
                }
                // line 108
                echo "                            ";
                if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 108, $this->getSourceContext()); })()), "hasroute", array(0 => "list"), "method") && twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 108, $this->getSourceContext()); })()), "hasAccess", array(0 => "list"), "method"))) {
                    // line 109
                    echo "                                <button type=\"submit\" class=\"btn btn-success\" name=\"btn_create_and_list\"><i class=\"fa fa-save\"></i> <i class=\"fa fa-list\" aria-hidden=\"true\"></i> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_create_and_return_to_list", array(), "SonataAdminBundle"), "html", null, true);
                    echo "</button>
                            ";
                }
                // line 111
                echo "                            <button class=\"btn btn-success\" type=\"submit\" name=\"btn_create_and_create\"><i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_create_and_create_a_new_one", array(), "SonataAdminBundle"), "html", null, true);
                echo "</button>
                        ";
            }
            // line 113
            echo "                    ";
        }
        // line 114
        echo "                ";
        
        $__internal_f32fcdd2d20bfa7c04ec7cbd164842c4b50b1a2093873436495aff42fdf44772->leave($__internal_f32fcdd2d20bfa7c04ec7cbd164842c4b50b1a2093873436495aff42fdf44772_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_edit_form.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  483 => 114,  480 => 113,  474 => 111,  468 => 109,  465 => 108,  459 => 106,  456 => 105,  453 => 104,  445 => 102,  443 => 101,  440 => 100,  433 => 98,  428 => 97,  426 => 96,  423 => 95,  417 => 93,  415 => 92,  409 => 90,  406 => 89,  404 => 88,  398 => 85,  394 => 83,  391 => 82,  388 => 81,  382 => 79,  376 => 77,  373 => 76,  371 => 75,  368 => 74,  362 => 73,  354 => 115,  352 => 73,  349 => 72,  343 => 71,  335 => 66,  329 => 65,  321 => 62,  315 => 60,  310 => 57,  291 => 52,  288 => 51,  282 => 48,  279 => 47,  277 => 46,  264 => 43,  247 => 42,  243 => 40,  218 => 38,  201 => 37,  197 => 35,  195 => 34,  191 => 32,  188 => 31,  182 => 30,  174 => 27,  168 => 26,  157 => 21,  145 => 17,  135 => 120,  132 => 119,  128 => 117,  126 => 71,  121 => 69,  118 => 68,  116 => 65,  113 => 64,  111 => 30,  108 => 29,  106 => 26,  101 => 24,  97 => 22,  94 => 21,  90 => 20,  87 => 19,  83 => 18,  78 => 17,  75 => 15,  71 => 14,  68 => 13,  62 => 10,  59 => 9,  57 => 8,  54 => 7,  51 => 6,  45 => 3,  42 => 2,  30 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block form %}
    {% import \"SonataAdminBundle:CRUD:base_edit_form_macro.html.twig\" as form_helper %}
    {{ sonata_block_render_event('sonata.admin.edit.form.top', { 'admin': admin, 'object': object }) }}

    {# NEXT_MAJOR: remove default filter #}
    {% set url = objectId|default(admin.id(object)) is not null ? 'edit' : 'create' %}

    {% if not admin.hasRoute(url)%}
        <div>
            {{ \"form_not_available\"|trans({}, \"SonataAdminBundle\") }}
        </div>
    {% else %}
        <form
              {% if sonata_admin.adminPool.getOption('form_type') == 'horizontal' %}class=\"form-horizontal\"{% endif %}
              role=\"form\"
              {# NEXT_MAJOR: remove default filter #}
              action=\"{% block sonata_form_action_url %}{{ admin.generateUrl(url, {'id': objectId|default(admin.id(object)), 'uniqid': admin.uniqid, 'subclass': app.request.get('subclass')}) }}{% endblock %}\"
              {% if form.vars.multipart %} enctype=\"multipart/form-data\"{% endif %}
              method=\"POST\"
              {% if not sonata_admin.adminPool.getOption('html5_validate') %}novalidate=\"novalidate\"{% endif %}
              {% block sonata_form_attributes %}{% endblock %}
              >

            {{ include('SonataAdminBundle:Helper:render_form_dismissable_errors.html.twig') }}

            {% block sonata_pre_fieldsets %}
                <div class=\"row\">
            {% endblock %}

            {% block sonata_tab_content %}
                {% set has_tab = ((admin.formtabs|length == 1 and admin.formtabs|keys[0] != 'default') or admin.formtabs|length > 1 ) %}

                <div class=\"col-md-12\">
                    {% if has_tab %}
                        <div class=\"nav-tabs-custom\">
                            <ul class=\"nav nav-tabs\" role=\"tablist\">
                                {% for name, form_tab in admin.formtabs %}
                                    <li{% if loop.index == 1 %} class=\"active\"{% endif %}><a href=\"#tab_{{ admin.uniqid }}_{{ loop.index }}\" data-toggle=\"tab\"><i class=\"fa fa-exclamation-circle has-errors hide\" aria-hidden=\"true\"></i> {{ form_tab.label|trans({}, form_tab.translation_domain ?: admin.translationDomain) }}</a></li>
                                {% endfor %}
                            </ul>
                            <div class=\"tab-content\">
                                {% for code, form_tab in admin.formtabs %}
                                    <div class=\"tab-pane fade{% if loop.first %} in active{% endif %}\" id=\"tab_{{ admin.uniqid }}_{{ loop.index }}\">
                                        <div class=\"box-body  container-fluid\">
                                            <div class=\"sonata-ba-collapsed-fields\">
                                                {% if form_tab.description != false %}
                                                    <p>
                                                        {{ form_tab.description|trans({}, form_tab.translation_domain ?: admin.translationDomain) }}
                                                    </p>
                                                {% endif %}

                                                {{ form_helper.render_groups(admin, form, form_tab['groups'], has_tab) }}
                                            </div>
                                        </div>
                                    </div>
                                {% endfor %}
                            </div>
                        </div>
                    {% else %}
                        {{ form_helper.render_groups(admin, form, admin.formtabs['default'].groups, has_tab) }}
                    {% endif %}
                </div>
            {% endblock %}

            {% block sonata_post_fieldsets %}
                </div>
            {% endblock %}

            {{ form_rest(form) }}

            {% block formactions %}
                <div class=\"sonata-ba-form-actions well well-small form-actions\">
                {% block sonata_form_actions %}
                    {% if app.request.isxmlhttprequest %}
                        {# NEXT_MAJOR: remove default filter #}
                        {% if objectId|default(admin.id(object)) is not null %}
                            <button type=\"submit\" class=\"btn btn-success\" name=\"btn_update\"><i class=\"fa fa-save\" aria-hidden=\"true\"></i> {{ 'btn_update'|trans({}, 'SonataAdminBundle') }}</button>
                        {% else %}
                            <button type=\"submit\" class=\"btn btn-success\" name=\"btn_create\"><i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i> {{ 'btn_create'|trans({}, 'SonataAdminBundle') }}</button>
                        {% endif %}
                    {% else %}
                        {% if admin.supportsPreviewMode %}
                            <button class=\"btn btn-info persist-preview\" name=\"btn_preview\" type=\"submit\">
                                <i class=\"fa fa-eye\" aria-hidden=\"true\"></i>
                                {{ 'btn_preview'|trans({}, 'SonataAdminBundle') }}
                            </button>
                        {% endif %}
                        {# NEXT_MAJOR: remove default filter #}
                        {% if objectId|default(admin.id(object)) is not null %}
                            <button type=\"submit\" class=\"btn btn-success\" name=\"btn_update_and_edit\"><i class=\"fa fa-save\" aria-hidden=\"true\"></i> {{ 'btn_update_and_edit_again'|trans({}, 'SonataAdminBundle') }}</button>

                            {% if admin.hasRoute('list') and admin.hasAccess('list') %}
                                <button type=\"submit\" class=\"btn btn-success\" name=\"btn_update_and_list\"><i class=\"fa fa-save\"></i> <i class=\"fa fa-list\" aria-hidden=\"true\"></i> {{ 'btn_update_and_return_to_list'|trans({}, 'SonataAdminBundle') }}</button>
                            {% endif %}

                            {% if admin.hasRoute('delete') and admin.hasAccess('delete', object) %}
                                {{ 'delete_or'|trans({}, 'SonataAdminBundle') }}
                                <a class=\"btn btn-danger\" href=\"{{ admin.generateObjectUrl('delete', object) }}\"><i class=\"fa fa-minus-circle\" aria-hidden=\"true\"></i> {{ 'link_delete'|trans({}, 'SonataAdminBundle') }}</a>
                            {% endif %}

                            {% if admin.isAclEnabled() and admin.hasRoute('acl') and admin.hasAccess('acl', object) %}
                                <a class=\"btn btn-info\" href=\"{{ admin.generateObjectUrl('acl', object) }}\"><i class=\"fa fa-users\" aria-hidden=\"true\"></i> {{ 'link_edit_acl'|trans({}, 'SonataAdminBundle') }}</a>
                            {% endif %}
                        {% else %}
                            {% if admin.hasroute('edit') and admin.hasAccess('edit') %}
                                <button class=\"btn btn-success\" type=\"submit\" name=\"btn_create_and_edit\"><i class=\"fa fa-save\" aria-hidden=\"true\"></i> {{ 'btn_create_and_edit_again'|trans({}, 'SonataAdminBundle') }}</button>
                            {% endif %}
                            {% if admin.hasroute('list') and admin.hasAccess('list') %}
                                <button type=\"submit\" class=\"btn btn-success\" name=\"btn_create_and_list\"><i class=\"fa fa-save\"></i> <i class=\"fa fa-list\" aria-hidden=\"true\"></i> {{ 'btn_create_and_return_to_list'|trans({}, 'SonataAdminBundle') }}</button>
                            {% endif %}
                            <button class=\"btn btn-success\" type=\"submit\" name=\"btn_create_and_create\"><i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i> {{ 'btn_create_and_create_a_new_one'|trans({}, 'SonataAdminBundle') }}</button>
                        {% endif %}
                    {% endif %}
                {% endblock %}
                </div>
            {% endblock formactions %}
        </form>
    {% endif%}

    {{ sonata_block_render_event('sonata.admin.edit.form.bottom', { 'admin': admin, 'object': object }) }}

{% endblock %}
", "SonataAdminBundle:CRUD:base_edit_form.html.twig", "/home/kuba/Workspace/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/base_edit_form.html.twig");
    }
}
