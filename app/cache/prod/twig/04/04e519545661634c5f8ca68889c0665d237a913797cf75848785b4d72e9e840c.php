<?php

/* SonataAdminBundle:Form:form_admin_fields.html.twig */
class __TwigTemplate_6bf8eef6bab43a81fc84f11a9683ea468ab1feaa3fe445031164e7d98a0cede0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("form_div_layout.html.twig", "SonataAdminBundle:Form:form_admin_fields.html.twig", 12);
        $this->blocks = array(
            'form_errors' => array($this, 'block_form_errors'),
            'sonata_help' => array($this, 'block_sonata_help'),
            'form_widget' => array($this, 'block_form_widget'),
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
            'textarea_widget' => array($this, 'block_textarea_widget'),
            'money_widget' => array($this, 'block_money_widget'),
            'percent_widget' => array($this, 'block_percent_widget'),
            'checkbox_widget' => array($this, 'block_checkbox_widget'),
            'radio_widget' => array($this, 'block_radio_widget'),
            'form_label' => array($this, 'block_form_label'),
            'checkbox_label' => array($this, 'block_checkbox_label'),
            'radio_label' => array($this, 'block_radio_label'),
            'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
            'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
            'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
            'date_widget' => array($this, 'block_date_widget'),
            'time_widget' => array($this, 'block_time_widget'),
            'datetime_widget' => array($this, 'block_datetime_widget'),
            'form_row' => array($this, 'block_form_row'),
            'checkbox_row' => array($this, 'block_checkbox_row'),
            'radio_row' => array($this, 'block_radio_row'),
            'sonata_type_native_collection_widget_row' => array($this, 'block_sonata_type_native_collection_widget_row'),
            'sonata_type_native_collection_widget' => array($this, 'block_sonata_type_native_collection_widget'),
            'sonata_type_immutable_array_widget' => array($this, 'block_sonata_type_immutable_array_widget'),
            'sonata_type_immutable_array_widget_row' => array($this, 'block_sonata_type_immutable_array_widget_row'),
            'sonata_type_model_autocomplete_widget' => array($this, 'block_sonata_type_model_autocomplete_widget'),
            'sonata_type_choice_field_mask_widget' => array($this, 'block_sonata_type_choice_field_mask_widget'),
            'sonata_type_choice_multiple_sortable' => array($this, 'block_sonata_type_choice_multiple_sortable'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "form_div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7144781731034c70fc486ea84ac54c6f0afcb56933183e0ed140e77469479c57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7144781731034c70fc486ea84ac54c6f0afcb56933183e0ed140e77469479c57->enter($__internal_7144781731034c70fc486ea84ac54c6f0afcb56933183e0ed140e77469479c57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Form:form_admin_fields.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7144781731034c70fc486ea84ac54c6f0afcb56933183e0ed140e77469479c57->leave($__internal_7144781731034c70fc486ea84ac54c6f0afcb56933183e0ed140e77469479c57_prof);

    }

    // line 14
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_67292ce52a3c783cd559ea50eec1d83536a10e395f03b780c5324d241c905ca5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67292ce52a3c783cd559ea50eec1d83536a10e395f03b780c5324d241c905ca5->enter($__internal_67292ce52a3c783cd559ea50eec1d83536a10e395f03b780c5324d241c905ca5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 15
        if ((twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 15, $this->getSourceContext()); })())) > 0)) {
            // line 16
            echo "        ";
            if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 16, $this->getSourceContext()); })()), "parent", array())) {
                echo "<div class=\"alert alert-danger\">";
            }
            // line 17
            echo "            <ul class=\"list-unstyled\">
                ";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 18, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 19
                echo "                    <li><i class=\"fa fa-exclamation-circle\" aria-hidden=\"true\"></i> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["error"], "message", array()), "html", null, true);
                echo "</li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "            </ul>
        ";
            // line 22
            if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 22, $this->getSourceContext()); })()), "parent", array())) {
                echo "</div>";
            }
            // line 23
            echo "    ";
        }
        
        $__internal_67292ce52a3c783cd559ea50eec1d83536a10e395f03b780c5324d241c905ca5->leave($__internal_67292ce52a3c783cd559ea50eec1d83536a10e395f03b780c5324d241c905ca5_prof);

    }

    // line 26
    public function block_sonata_help($context, array $blocks = array())
    {
        $__internal_5d39a03c206d4c302e9071e88823bc89be139ef1db3495e7d68617274859e265 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d39a03c206d4c302e9071e88823bc89be139ef1db3495e7d68617274859e265->enter($__internal_5d39a03c206d4c302e9071e88823bc89be139ef1db3495e7d68617274859e265_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_help"));

        // line 27
        ob_start();
        // line 28
        if ((array_key_exists("sonata_help", $context) && (isset($context["sonata_help"]) || array_key_exists("sonata_help", $context) ? $context["sonata_help"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_help" does not exist.', 28, $this->getSourceContext()); })()))) {
            // line 29
            echo "    <span class=\"help-block sonata-ba-field-widget-help\">";
            echo (isset($context["sonata_help"]) || array_key_exists("sonata_help", $context) ? $context["sonata_help"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_help" does not exist.', 29, $this->getSourceContext()); })());
            echo "</span>
";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_5d39a03c206d4c302e9071e88823bc89be139ef1db3495e7d68617274859e265->leave($__internal_5d39a03c206d4c302e9071e88823bc89be139ef1db3495e7d68617274859e265_prof);

    }

    // line 34
    public function block_form_widget($context, array $blocks = array())
    {
        $__internal_46480892c5318472a9ea7a1162cee49cb9e02d57ad7c281868d6898058c946aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46480892c5318472a9ea7a1162cee49cb9e02d57ad7c281868d6898058c946aa->enter($__internal_46480892c5318472a9ea7a1162cee49cb9e02d57ad7c281868d6898058c946aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget"));

        // line 35
        $this->displayParentBlock("form_widget", $context, $blocks);
        echo "
    ";
        // line 36
        $this->displayBlock("sonata_help", $context, $blocks);
        
        $__internal_46480892c5318472a9ea7a1162cee49cb9e02d57ad7c281868d6898058c946aa->leave($__internal_46480892c5318472a9ea7a1162cee49cb9e02d57ad7c281868d6898058c946aa_prof);

    }

    // line 39
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_3269cae540f8e55da785032e3b808b7080f768c49e16497f0779a9c2d5f491d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3269cae540f8e55da785032e3b808b7080f768c49e16497f0779a9c2d5f491d3->enter($__internal_3269cae540f8e55da785032e3b808b7080f768c49e16497f0779a9c2d5f491d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 40
        echo "    ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 40, $this->getSourceContext()); })()), "text")) : ("text"));
        // line 41
        echo "    ";
        if (((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 41, $this->getSourceContext()); })()) != "file")) {
            // line 42
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 42, $this->getSourceContext()); })()), array("class" => (((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control")));
            // line 43
            echo "    ";
        }
        // line 44
        echo "    ";
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        echo "
";
        
        $__internal_3269cae540f8e55da785032e3b808b7080f768c49e16497f0779a9c2d5f491d3->leave($__internal_3269cae540f8e55da785032e3b808b7080f768c49e16497f0779a9c2d5f491d3_prof);

    }

    // line 47
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_d1c129dd620fc819c4dcdcfb82c290cf846b16e341da49eaa2d780b7aed0974b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1c129dd620fc819c4dcdcfb82c290cf846b16e341da49eaa2d780b7aed0974b->enter($__internal_d1c129dd620fc819c4dcdcfb82c290cf846b16e341da49eaa2d780b7aed0974b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 48
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 48, $this->getSourceContext()); })()), array("class" => (((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control")));
        // line 49
        echo "    ";
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        echo "
";
        
        $__internal_d1c129dd620fc819c4dcdcfb82c290cf846b16e341da49eaa2d780b7aed0974b->leave($__internal_d1c129dd620fc819c4dcdcfb82c290cf846b16e341da49eaa2d780b7aed0974b_prof);

    }

    // line 52
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_9c633d65e479d1ae409119e9a859655251c68a9869567f15b3660b5a84f7474a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c633d65e479d1ae409119e9a859655251c68a9869567f15b3660b5a84f7474a->enter($__internal_9c633d65e479d1ae409119e9a859655251c68a9869567f15b3660b5a84f7474a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 53
        if (((isset($context["money_pattern"]) || array_key_exists("money_pattern", $context) ? $context["money_pattern"] : (function () { throw new Twig_Error_Runtime('Variable "money_pattern" does not exist.', 53, $this->getSourceContext()); })()) == "{{ widget }}")) {
            // line 54
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 56
            echo "        ";
            $context["currencySymbol"] = twig_trim_filter(twig_replace_filter((isset($context["money_pattern"]) || array_key_exists("money_pattern", $context) ? $context["money_pattern"] : (function () { throw new Twig_Error_Runtime('Variable "money_pattern" does not exist.', 56, $this->getSourceContext()); })()), array("{{ widget }}" => "")));
            // line 57
            echo "        ";
            if (preg_match("/^{{ widget }}/", (isset($context["money_pattern"]) || array_key_exists("money_pattern", $context) ? $context["money_pattern"] : (function () { throw new Twig_Error_Runtime('Variable "money_pattern" does not exist.', 57, $this->getSourceContext()); })()))) {
                // line 58
                echo "            <div class=\"input-group\">";
                // line 59
                $this->displayBlock("form_widget_simple", $context, $blocks);
                // line 60
                echo "<span class=\"input-group-addon\">";
                echo twig_escape_filter($this->env, (isset($context["currencySymbol"]) || array_key_exists("currencySymbol", $context) ? $context["currencySymbol"] : (function () { throw new Twig_Error_Runtime('Variable "currencySymbol" does not exist.', 60, $this->getSourceContext()); })()), "html", null, true);
                echo "</span>
            </div>
        ";
            } elseif (preg_match("/{{ widget }}\$/",             // line 62
(isset($context["money_pattern"]) || array_key_exists("money_pattern", $context) ? $context["money_pattern"] : (function () { throw new Twig_Error_Runtime('Variable "money_pattern" does not exist.', 62, $this->getSourceContext()); })()))) {
                // line 63
                echo "            <div class=\"input-group\">
                <span class=\"input-group-addon\">";
                // line 64
                echo twig_escape_filter($this->env, (isset($context["currencySymbol"]) || array_key_exists("currencySymbol", $context) ? $context["currencySymbol"] : (function () { throw new Twig_Error_Runtime('Variable "currencySymbol" does not exist.', 64, $this->getSourceContext()); })()), "html", null, true);
                echo "</span>";
                // line 65
                $this->displayBlock("form_widget_simple", $context, $blocks);
                // line 66
                echo "</div>
        ";
            }
            // line 68
            echo "    ";
        }
        
        $__internal_9c633d65e479d1ae409119e9a859655251c68a9869567f15b3660b5a84f7474a->leave($__internal_9c633d65e479d1ae409119e9a859655251c68a9869567f15b3660b5a84f7474a_prof);

    }

    // line 71
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_55e865c763911cca3b6735a8c1b54d7b3db2da281ef6e4b4e777519174f1a9ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55e865c763911cca3b6735a8c1b54d7b3db2da281ef6e4b4e777519174f1a9ca->enter($__internal_55e865c763911cca3b6735a8c1b54d7b3db2da281ef6e4b4e777519174f1a9ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 72
        echo "    ";
        ob_start();
        // line 73
        echo "        ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 73, $this->getSourceContext()); })()), "text")) : ("text"));
        // line 74
        echo "        <div class=\"input-group\">
            ";
        // line 75
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
            <span class=\"input-group-addon\">%</span>
        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_55e865c763911cca3b6735a8c1b54d7b3db2da281ef6e4b4e777519174f1a9ca->leave($__internal_55e865c763911cca3b6735a8c1b54d7b3db2da281ef6e4b4e777519174f1a9ca_prof);

    }

    // line 81
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_a9889598008864bfcac9809c87b427a464975d58184f2e454ef84a96d91227ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9889598008864bfcac9809c87b427a464975d58184f2e454ef84a96d91227ad->enter($__internal_a9889598008864bfcac9809c87b427a464975d58184f2e454ef84a96d91227ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 82
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 82, $this->getSourceContext()); })()), "")) : (""));
        // line 83
        if (twig_in_filter("checkbox-inline", (isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 83, $this->getSourceContext()); })()))) {
            // line 84
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 84, $this->getSourceContext()); })()), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 86
            echo "<div class=\"checkbox\">";
            // line 87
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 87, $this->getSourceContext()); })()), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 88
            echo "</div>";
        }
        
        $__internal_a9889598008864bfcac9809c87b427a464975d58184f2e454ef84a96d91227ad->leave($__internal_a9889598008864bfcac9809c87b427a464975d58184f2e454ef84a96d91227ad_prof);

    }

    // line 92
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_5254abfcec9478a839d991918784bfc635f25cb9eea8101f0255b18f8a81846f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5254abfcec9478a839d991918784bfc635f25cb9eea8101f0255b18f8a81846f->enter($__internal_5254abfcec9478a839d991918784bfc635f25cb9eea8101f0255b18f8a81846f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 93
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 93, $this->getSourceContext()); })()), "")) : (""));
        // line 94
        if (twig_in_filter("radio-inline", (isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 94, $this->getSourceContext()); })()))) {
            // line 95
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 95, $this->getSourceContext()); })()), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 97
            echo "<div class=\"radio\">";
            // line 98
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 98, $this->getSourceContext()); })()), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 99
            echo "</div>";
        }
        
        $__internal_5254abfcec9478a839d991918784bfc635f25cb9eea8101f0255b18f8a81846f->leave($__internal_5254abfcec9478a839d991918784bfc635f25cb9eea8101f0255b18f8a81846f_prof);

    }

    // line 104
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_4ba9261e289f613f216b63e203ea80e85bc850fe5b74eaf0d81860d0136ea23c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ba9261e289f613f216b63e203ea80e85bc850fe5b74eaf0d81860d0136ea23c->enter($__internal_4ba9261e289f613f216b63e203ea80e85bc850fe5b74eaf0d81860d0136ea23c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 105
        ob_start();
        // line 106
        echo "    ";
        if (( !((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 106, $this->getSourceContext()); })()) === false) && (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 106, $this->getSourceContext()); })()), "options", array()), "form_type", array(), "array") == "horizontal"))) {
            // line 107
            echo "        ";
            $context["label_class"] = "col-sm-3";
            // line 108
            echo "    ";
        }
        // line 109
        echo "
    ";
        // line 110
        $context["label_class"] = (((array_key_exists("label_class", $context)) ? (_twig_default_filter((isset($context["label_class"]) || array_key_exists("label_class", $context) ? $context["label_class"] : (function () { throw new Twig_Error_Runtime('Variable "label_class" does not exist.', 110, $this->getSourceContext()); })()), "")) : ("")) . " control-label");
        // line 111
        echo "
    ";
        // line 112
        if ( !((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 112, $this->getSourceContext()); })()) === false)) {
            // line 113
            echo "        ";
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 113, $this->getSourceContext()); })()), array("class" => ((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") . (isset($context["label_class"]) || array_key_exists("label_class", $context) ? $context["label_class"] : (function () { throw new Twig_Error_Runtime('Variable "label_class" does not exist.', 113, $this->getSourceContext()); })()))));
            // line 114
            echo "
        ";
            // line 115
            if ( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 115, $this->getSourceContext()); })())) {
                // line 116
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 116, $this->getSourceContext()); })()), array("for" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 116, $this->getSourceContext()); })())));
                // line 117
                echo "        ";
            }
            // line 118
            echo "        ";
            if ((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new Twig_Error_Runtime('Variable "required" does not exist.', 118, $this->getSourceContext()); })())) {
                // line 119
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 119, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
                // line 120
                echo "        ";
            }
            // line 121
            echo "
        ";
            // line 122
            if (twig_test_empty((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 122, $this->getSourceContext()); })()))) {
                // line 123
                if ((array_key_exists("label_format", $context) &&  !twig_test_empty((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new Twig_Error_Runtime('Variable "label_format" does not exist.', 123, $this->getSourceContext()); })())))) {
                    // line 124
                    $context["label"] = twig_replace_filter((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new Twig_Error_Runtime('Variable "label_format" does not exist.', 124, $this->getSourceContext()); })()), array("%name%" =>                     // line 125
(isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 125, $this->getSourceContext()); })()), "%id%" =>                     // line 126
(isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 126, $this->getSourceContext()); })())));
                } else {
                    // line 129
                    $context["label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->humanize((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 129, $this->getSourceContext()); })()));
                }
            }
            // line 132
            echo "
        <label";
            // line 133
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 133, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">
            ";
            // line 134
            if (((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 134, $this->getSourceContext()); })()) === false)) {
                // line 135
                echo twig_escape_filter($this->env, (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 135, $this->getSourceContext()); })()), "html", null, true);
            } elseif ( !twig_get_attribute($this->env, $this->getSourceContext(),             // line 136
(isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 136, $this->getSourceContext()); })()), "admin", array())) {
                // line 137
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 137, $this->getSourceContext()); })()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 137, $this->getSourceContext()); })())), "html", null, true);
            } else {
                // line 139
                echo "                ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 139, $this->getSourceContext()); })()), array(), ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 139, $this->getSourceContext()); })()), "field_description", array()), "translationDomain", array())) ? (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 139, $this->getSourceContext()); })()), "field_description", array()), "translationDomain", array())) : (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 139, $this->getSourceContext()); })()), "translationDomain", array())))), "html", null, true);
                echo "
            ";
            }
            // line 141
            echo "        </label>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_4ba9261e289f613f216b63e203ea80e85bc850fe5b74eaf0d81860d0136ea23c->leave($__internal_4ba9261e289f613f216b63e203ea80e85bc850fe5b74eaf0d81860d0136ea23c_prof);

    }

    // line 146
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_aac3dbfedc76058a18a60de47035a8e3c2755424450b0bcb6cd20229754a68f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aac3dbfedc76058a18a60de47035a8e3c2755424450b0bcb6cd20229754a68f6->enter($__internal_aac3dbfedc76058a18a60de47035a8e3c2755424450b0bcb6cd20229754a68f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 147
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_aac3dbfedc76058a18a60de47035a8e3c2755424450b0bcb6cd20229754a68f6->leave($__internal_aac3dbfedc76058a18a60de47035a8e3c2755424450b0bcb6cd20229754a68f6_prof);

    }

    // line 150
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_a4ea4b7368acbb1b6dc3c2ba58332da136eec9b583909025408b674897c96207 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4ea4b7368acbb1b6dc3c2ba58332da136eec9b583909025408b674897c96207->enter($__internal_a4ea4b7368acbb1b6dc3c2ba58332da136eec9b583909025408b674897c96207_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 151
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_a4ea4b7368acbb1b6dc3c2ba58332da136eec9b583909025408b674897c96207->leave($__internal_a4ea4b7368acbb1b6dc3c2ba58332da136eec9b583909025408b674897c96207_prof);

    }

    // line 154
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_d0fbeabe0521dd2d8c05776b4a4e46413a57b6f432e849840bff2dd070f7e6f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0fbeabe0521dd2d8c05776b4a4e46413a57b6f432e849840bff2dd070f7e6f4->enter($__internal_d0fbeabe0521dd2d8c05776b4a4e46413a57b6f432e849840bff2dd070f7e6f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 155
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 155, $this->getSourceContext()); })()), "admin", array())) {
            // line 156
            echo "        ";
            $context["translation_domain"] = twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 156, $this->getSourceContext()); })()), "field_description", array()), "translationDomain", array());
            // line 157
            echo "    ";
        }
        // line 158
        echo "    ";
        // line 159
        echo "    ";
        if (array_key_exists("widget", $context)) {
            // line 160
            echo "        ";
            if ((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new Twig_Error_Runtime('Variable "required" does not exist.', 160, $this->getSourceContext()); })())) {
                // line 161
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 161, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
                // line 162
                echo "        ";
            }
            // line 163
            echo "        ";
            if (array_key_exists("parent_label_class", $context)) {
                // line 164
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 164, $this->getSourceContext()); })()), array("class" => twig_trim_filter(((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") . (isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 164, $this->getSourceContext()); })())))));
                // line 165
                echo "        ";
            }
            // line 166
            echo "        ";
            if (( !((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 166, $this->getSourceContext()); })()) === false) && twig_test_empty((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 166, $this->getSourceContext()); })())))) {
                // line 167
                echo "            ";
                $context["label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->humanize((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 167, $this->getSourceContext()); })()));
                // line 168
                echo "        ";
            }
            // line 169
            echo "        <label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 169, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            // line 170
            echo (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 170, $this->getSourceContext()); })());
            // line 171
            if ( !((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 171, $this->getSourceContext()); })()) === false)) {
                // line 172
                echo "<span class=\"control-label__text\">
                    ";
                // line 173
                if (((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 173, $this->getSourceContext()); })()) === false)) {
                    // line 174
                    echo twig_escape_filter($this->env, (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 174, $this->getSourceContext()); })()), "html", null, true);
                } else {
                    // line 176
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 176, $this->getSourceContext()); })()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 176, $this->getSourceContext()); })())), "html", null, true);
                }
                // line 178
                echo "</span>";
            }
            // line 180
            echo "</label>
    ";
        }
        
        $__internal_d0fbeabe0521dd2d8c05776b4a4e46413a57b6f432e849840bff2dd070f7e6f4->leave($__internal_d0fbeabe0521dd2d8c05776b4a4e46413a57b6f432e849840bff2dd070f7e6f4_prof);

    }

    // line 184
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_dbba2073727e0e1af9dd6235f9820694ae0fa9bd4f0c73a0770f9300607e72ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbba2073727e0e1af9dd6235f9820694ae0fa9bd4f0c73a0770f9300607e72ef->enter($__internal_dbba2073727e0e1af9dd6235f9820694ae0fa9bd4f0c73a0770f9300607e72ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 185
        ob_start();
        // line 186
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 186, $this->getSourceContext()); })()), array("class" => (((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " list-unstyled")));
        // line 187
        echo "    <ul ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
    ";
        // line 188
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 188, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 189
            echo "        <li>
            ";
            // line 190
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'widget', array("horizontal" => false, "horizontal_input_wrapper_class" => "", "translation_domain" =>             // line 193
(isset($context["choice_translation_domain"]) || array_key_exists("choice_translation_domain", $context) ? $context["choice_translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "choice_translation_domain" does not exist.', 193, $this->getSourceContext()); })())));
            // line 194
            echo " ";
            // line 195
            echo "        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 197
        echo "    </ul>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_dbba2073727e0e1af9dd6235f9820694ae0fa9bd4f0c73a0770f9300607e72ef->leave($__internal_dbba2073727e0e1af9dd6235f9820694ae0fa9bd4f0c73a0770f9300607e72ef_prof);

    }

    // line 201
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_438b52ee4331ac40b46e9e248895f93608508c41446c241f1e8e69d326c61c31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_438b52ee4331ac40b46e9e248895f93608508c41446c241f1e8e69d326c61c31->enter($__internal_438b52ee4331ac40b46e9e248895f93608508c41446c241f1e8e69d326c61c31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 202
        ob_start();
        // line 203
        echo "    ";
        if ((((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new Twig_Error_Runtime('Variable "required" does not exist.', 203, $this->getSourceContext()); })()) && array_key_exists("placeholder", $context)) && (null === (isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new Twig_Error_Runtime('Variable "placeholder" does not exist.', 203, $this->getSourceContext()); })())))) {
            // line 204
            echo "        ";
            $context["required"] = false;
            // line 205
            echo "    ";
        } elseif (((((((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new Twig_Error_Runtime('Variable "required" does not exist.', 205, $this->getSourceContext()); })()) && array_key_exists("empty_value", $context)) && array_key_exists("empty_value_in_choices", $context)) && (null === (isset($context["empty_value"]) || array_key_exists("empty_value", $context) ? $context["empty_value"] : (function () { throw new Twig_Error_Runtime('Variable "empty_value" does not exist.', 205, $this->getSourceContext()); })()))) &&  !(isset($context["empty_value_in_choices"]) || array_key_exists("empty_value_in_choices", $context) ? $context["empty_value_in_choices"] : (function () { throw new Twig_Error_Runtime('Variable "empty_value_in_choices" does not exist.', 205, $this->getSourceContext()); })())) &&  !(isset($context["multiple"]) || array_key_exists("multiple", $context) ? $context["multiple"] : (function () { throw new Twig_Error_Runtime('Variable "multiple" does not exist.', 205, $this->getSourceContext()); })()))) {
            // line 206
            echo "        ";
            $context["required"] = false;
            // line 207
            echo "    ";
        }
        // line 208
        echo "
    ";
        // line 209
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 209, $this->getSourceContext()); })()), array("class" => (((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control")));
        // line 210
        echo "    ";
        if (((array_key_exists("sortable", $context) && (isset($context["sortable"]) || array_key_exists("sortable", $context) ? $context["sortable"] : (function () { throw new Twig_Error_Runtime('Variable "sortable" does not exist.', 210, $this->getSourceContext()); })())) && (isset($context["multiple"]) || array_key_exists("multiple", $context) ? $context["multiple"] : (function () { throw new Twig_Error_Runtime('Variable "multiple" does not exist.', 210, $this->getSourceContext()); })()))) {
            // line 211
            echo "        ";
            $this->displayBlock("sonata_type_choice_multiple_sortable", $context, $blocks);
            echo "
    ";
        } else {
            // line 213
            echo "        <select ";
            $this->displayBlock("widget_attributes", $context, $blocks);
            if ((isset($context["multiple"]) || array_key_exists("multiple", $context) ? $context["multiple"] : (function () { throw new Twig_Error_Runtime('Variable "multiple" does not exist.', 213, $this->getSourceContext()); })())) {
                echo " multiple=\"multiple\"";
            }
            echo " >
            ";
            // line 214
            if ((array_key_exists("empty_value", $context) &&  !(null === (isset($context["empty_value"]) || array_key_exists("empty_value", $context) ? $context["empty_value"] : (function () { throw new Twig_Error_Runtime('Variable "empty_value" does not exist.', 214, $this->getSourceContext()); })())))) {
                // line 215
                echo "                <option value=\"\"";
                if (((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new Twig_Error_Runtime('Variable "required" does not exist.', 215, $this->getSourceContext()); })()) && twig_test_empty((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 215, $this->getSourceContext()); })())))) {
                    echo " selected=\"selected\"";
                }
                echo ">
                    ";
                // line 216
                if (((isset($context["empty_value"]) || array_key_exists("empty_value", $context) ? $context["empty_value"] : (function () { throw new Twig_Error_Runtime('Variable "empty_value" does not exist.', 216, $this->getSourceContext()); })()) != "")) {
                    // line 217
                    echo "                        ";
                    if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 217, $this->getSourceContext()); })()), "admin", array())) {
                        // line 218
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["empty_value"]) || array_key_exists("empty_value", $context) ? $context["empty_value"] : (function () { throw new Twig_Error_Runtime('Variable "empty_value" does not exist.', 218, $this->getSourceContext()); })()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 218, $this->getSourceContext()); })())), "html", null, true);
                    } else {
                        // line 220
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["empty_value"]) || array_key_exists("empty_value", $context) ? $context["empty_value"] : (function () { throw new Twig_Error_Runtime('Variable "empty_value" does not exist.', 220, $this->getSourceContext()); })()), array(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 220, $this->getSourceContext()); })()), "field_description", array()), "translationDomain", array())), "html", null, true);
                    }
                    // line 222
                    echo "                    ";
                }
                // line 223
                echo "                </option>
            ";
            } elseif ((            // line 224
array_key_exists("placeholder", $context) &&  !(null === (isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new Twig_Error_Runtime('Variable "placeholder" does not exist.', 224, $this->getSourceContext()); })())))) {
                // line 225
                echo "                <option value=\"\"";
                if (((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new Twig_Error_Runtime('Variable "required" does not exist.', 225, $this->getSourceContext()); })()) && twig_test_empty((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 225, $this->getSourceContext()); })())))) {
                    echo " selected=\"selected\"";
                }
                echo ">
                    ";
                // line 226
                if (((isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new Twig_Error_Runtime('Variable "placeholder" does not exist.', 226, $this->getSourceContext()); })()) != "")) {
                    // line 227
                    echo "                        ";
                    if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 227, $this->getSourceContext()); })()), "admin", array())) {
                        // line 228
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new Twig_Error_Runtime('Variable "placeholder" does not exist.', 228, $this->getSourceContext()); })()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 228, $this->getSourceContext()); })())), "html", null, true);
                    } else {
                        // line 230
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new Twig_Error_Runtime('Variable "placeholder" does not exist.', 230, $this->getSourceContext()); })()), array(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 230, $this->getSourceContext()); })()), "field_description", array()), "translationDomain", array())), "html", null, true);
                    }
                    // line 232
                    echo "                    ";
                }
                // line 233
                echo "                </option>
            ";
            }
            // line 235
            echo "            ";
            if ((twig_length_filter($this->env, (isset($context["preferred_choices"]) || array_key_exists("preferred_choices", $context) ? $context["preferred_choices"] : (function () { throw new Twig_Error_Runtime('Variable "preferred_choices" does not exist.', 235, $this->getSourceContext()); })())) > 0)) {
                // line 236
                echo "                ";
                $context["options"] = (isset($context["preferred_choices"]) || array_key_exists("preferred_choices", $context) ? $context["preferred_choices"] : (function () { throw new Twig_Error_Runtime('Variable "preferred_choices" does not exist.', 236, $this->getSourceContext()); })());
                // line 237
                echo "                ";
                $this->displayBlock("choice_widget_options", $context, $blocks);
                echo "
                ";
                // line 238
                if ((twig_length_filter($this->env, (isset($context["choices"]) || array_key_exists("choices", $context) ? $context["choices"] : (function () { throw new Twig_Error_Runtime('Variable "choices" does not exist.', 238, $this->getSourceContext()); })())) > 0)) {
                    // line 239
                    echo "                    <option disabled=\"disabled\">";
                    echo twig_escape_filter($this->env, (isset($context["separator"]) || array_key_exists("separator", $context) ? $context["separator"] : (function () { throw new Twig_Error_Runtime('Variable "separator" does not exist.', 239, $this->getSourceContext()); })()), "html", null, true);
                    echo "</option>
                ";
                }
                // line 241
                echo "            ";
            }
            // line 242
            echo "            ";
            $context["options"] = (isset($context["choices"]) || array_key_exists("choices", $context) ? $context["choices"] : (function () { throw new Twig_Error_Runtime('Variable "choices" does not exist.', 242, $this->getSourceContext()); })());
            // line 243
            echo "            ";
            $this->displayBlock("choice_widget_options", $context, $blocks);
            echo "
        </select>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_438b52ee4331ac40b46e9e248895f93608508c41446c241f1e8e69d326c61c31->leave($__internal_438b52ee4331ac40b46e9e248895f93608508c41446c241f1e8e69d326c61c31_prof);

    }

    // line 249
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_53b31b3f86e90b063dd6bf3e44757f7bf151074afe62b783c4f821135fc3c5a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53b31b3f86e90b063dd6bf3e44757f7bf151074afe62b783c4f821135fc3c5a5->enter($__internal_53b31b3f86e90b063dd6bf3e44757f7bf151074afe62b783c4f821135fc3c5a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 250
        ob_start();
        // line 251
        echo "    ";
        if (((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 251, $this->getSourceContext()); })()) == "single_text")) {
            // line 252
            echo "        ";
            $this->displayBlock("form_widget_simple", $context, $blocks);
            echo "
    ";
        } else {
            // line 254
            echo "        ";
            if (( !array_key_exists("row", $context) || ((isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new Twig_Error_Runtime('Variable "row" does not exist.', 254, $this->getSourceContext()); })()) == true))) {
                // line 255
                echo "            ";
                $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 255, $this->getSourceContext()); })()), array("class" => (((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " row")));
                // line 256
                echo "        ";
            }
            // line 257
            echo "        ";
            $context["input_wrapper_class"] = ((array_key_exists("input_wrapper_class", $context)) ? (_twig_default_filter((isset($context["input_wrapper_class"]) || array_key_exists("input_wrapper_class", $context) ? $context["input_wrapper_class"] : (function () { throw new Twig_Error_Runtime('Variable "input_wrapper_class" does not exist.', 257, $this->getSourceContext()); })()), "col-sm-4")) : ("col-sm-4"));
            // line 258
            echo "        <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 259
            echo twig_replace_filter((isset($context["date_pattern"]) || array_key_exists("date_pattern", $context) ? $context["date_pattern"] : (function () { throw new Twig_Error_Runtime('Variable "date_pattern" does not exist.', 259, $this->getSourceContext()); })()), array("{{ year }}" => (((("<div class=\"" .             // line 260
(isset($context["input_wrapper_class"]) || array_key_exists("input_wrapper_class", $context) ? $context["input_wrapper_class"] : (function () { throw new Twig_Error_Runtime('Variable "input_wrapper_class" does not exist.', 260, $this->getSourceContext()); })())) . "\">") . $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 260, $this->getSourceContext()); })()), "year", array()), 'widget')) . "</div>"), "{{ month }}" => (((("<div class=\"" .             // line 261
(isset($context["input_wrapper_class"]) || array_key_exists("input_wrapper_class", $context) ? $context["input_wrapper_class"] : (function () { throw new Twig_Error_Runtime('Variable "input_wrapper_class" does not exist.', 261, $this->getSourceContext()); })())) . "\">") . $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 261, $this->getSourceContext()); })()), "month", array()), 'widget')) . "</div>"), "{{ day }}" => (((("<div class=\"" .             // line 262
(isset($context["input_wrapper_class"]) || array_key_exists("input_wrapper_class", $context) ? $context["input_wrapper_class"] : (function () { throw new Twig_Error_Runtime('Variable "input_wrapper_class" does not exist.', 262, $this->getSourceContext()); })())) . "\">") . $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 262, $this->getSourceContext()); })()), "day", array()), 'widget')) . "</div>")));
            // line 263
            echo "
        </div>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_53b31b3f86e90b063dd6bf3e44757f7bf151074afe62b783c4f821135fc3c5a5->leave($__internal_53b31b3f86e90b063dd6bf3e44757f7bf151074afe62b783c4f821135fc3c5a5_prof);

    }

    // line 269
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_b4ae2504ada691b8429fd9893a3fadd6c2478f060e8590842639a4122ca9a26d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4ae2504ada691b8429fd9893a3fadd6c2478f060e8590842639a4122ca9a26d->enter($__internal_b4ae2504ada691b8429fd9893a3fadd6c2478f060e8590842639a4122ca9a26d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 270
        ob_start();
        // line 271
        echo "    ";
        if (((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 271, $this->getSourceContext()); })()) == "single_text")) {
            // line 272
            echo "        ";
            $this->displayBlock("form_widget_simple", $context, $blocks);
            echo "
    ";
        } else {
            // line 274
            echo "        ";
            if (( !array_key_exists("row", $context) || ((isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new Twig_Error_Runtime('Variable "row" does not exist.', 274, $this->getSourceContext()); })()) == true))) {
                // line 275
                echo "            ";
                $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 275, $this->getSourceContext()); })()), array("class" => (((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " row")));
                // line 276
                echo "        ";
            }
            // line 277
            echo "        ";
            $context["input_wrapper_class"] = ((array_key_exists("input_wrapper_class", $context)) ? (_twig_default_filter((isset($context["input_wrapper_class"]) || array_key_exists("input_wrapper_class", $context) ? $context["input_wrapper_class"] : (function () { throw new Twig_Error_Runtime('Variable "input_wrapper_class" does not exist.', 277, $this->getSourceContext()); })()), "col-sm-6")) : ("col-sm-6"));
            // line 278
            echo "        <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            <div class=\"";
            // line 279
            echo twig_escape_filter($this->env, (isset($context["input_wrapper_class"]) || array_key_exists("input_wrapper_class", $context) ? $context["input_wrapper_class"] : (function () { throw new Twig_Error_Runtime('Variable "input_wrapper_class" does not exist.', 279, $this->getSourceContext()); })()), "html", null, true);
            echo "\">
                ";
            // line 280
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 280, $this->getSourceContext()); })()), "hour", array()), 'widget');
            echo "
            </div>
            ";
            // line 282
            if ((isset($context["with_minutes"]) || array_key_exists("with_minutes", $context) ? $context["with_minutes"] : (function () { throw new Twig_Error_Runtime('Variable "with_minutes" does not exist.', 282, $this->getSourceContext()); })())) {
                // line 283
                echo "                <div class=\"";
                echo twig_escape_filter($this->env, (isset($context["input_wrapper_class"]) || array_key_exists("input_wrapper_class", $context) ? $context["input_wrapper_class"] : (function () { throw new Twig_Error_Runtime('Variable "input_wrapper_class" does not exist.', 283, $this->getSourceContext()); })()), "html", null, true);
                echo "\">
                    ";
                // line 284
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 284, $this->getSourceContext()); })()), "minute", array()), 'widget');
                echo "
                </div>
            ";
            }
            // line 287
            echo "            ";
            if ((isset($context["with_seconds"]) || array_key_exists("with_seconds", $context) ? $context["with_seconds"] : (function () { throw new Twig_Error_Runtime('Variable "with_seconds" does not exist.', 287, $this->getSourceContext()); })())) {
                // line 288
                echo "                <div class=\"";
                echo twig_escape_filter($this->env, (isset($context["input_wrapper_class"]) || array_key_exists("input_wrapper_class", $context) ? $context["input_wrapper_class"] : (function () { throw new Twig_Error_Runtime('Variable "input_wrapper_class" does not exist.', 288, $this->getSourceContext()); })()), "html", null, true);
                echo "\">
                    ";
                // line 289
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 289, $this->getSourceContext()); })()), "second", array()), 'widget');
                echo "
                </div>
            ";
            }
            // line 292
            echo "        </div>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_b4ae2504ada691b8429fd9893a3fadd6c2478f060e8590842639a4122ca9a26d->leave($__internal_b4ae2504ada691b8429fd9893a3fadd6c2478f060e8590842639a4122ca9a26d_prof);

    }

    // line 297
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_e71bd88e63b8001ccd4e1ff95e5ba3afcd0463fd043288b6109ec40041e661c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e71bd88e63b8001ccd4e1ff95e5ba3afcd0463fd043288b6109ec40041e661c8->enter($__internal_e71bd88e63b8001ccd4e1ff95e5ba3afcd0463fd043288b6109ec40041e661c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 298
        ob_start();
        // line 299
        echo "    ";
        if (((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 299, $this->getSourceContext()); })()) == "single_text")) {
            // line 300
            echo "        ";
            $this->displayBlock("form_widget_simple", $context, $blocks);
            echo "
    ";
        } else {
            // line 302
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 302, $this->getSourceContext()); })()), array("class" => (((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " row")));
            // line 303
            echo "        <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 304
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 304, $this->getSourceContext()); })()), "date", array()), 'errors');
            echo "
            ";
            // line 305
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 305, $this->getSourceContext()); })()), "time", array()), 'errors');
            echo "

            ";
            // line 307
            if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 307, $this->getSourceContext()); })()), "date", array()), "vars", array()), "widget", array()) == "single_text")) {
                // line 308
                echo "                <div class=\"col-sm-2\">
                    ";
                // line 309
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 309, $this->getSourceContext()); })()), "date", array()), 'widget');
                echo "
                </div>
            ";
            } else {
                // line 312
                echo "                ";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 312, $this->getSourceContext()); })()), "date", array()), 'widget', array("row" => false, "input_wrapper_class" => "col-sm-2"));
                echo "
            ";
            }
            // line 314
            echo "
            ";
            // line 315
            if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 315, $this->getSourceContext()); })()), "time", array()), "vars", array()), "widget", array()) == "single_text")) {
                // line 316
                echo "                <div class=\"col-sm-2\">
                    ";
                // line 317
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 317, $this->getSourceContext()); })()), "time", array()), 'widget');
                echo "
                </div>
            ";
            } else {
                // line 320
                echo "                ";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 320, $this->getSourceContext()); })()), "time", array()), 'widget', array("row" => false, "input_wrapper_class" => "col-sm-2"));
                echo "
            ";
            }
            // line 322
            echo "        </div>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_e71bd88e63b8001ccd4e1ff95e5ba3afcd0463fd043288b6109ec40041e661c8->leave($__internal_e71bd88e63b8001ccd4e1ff95e5ba3afcd0463fd043288b6109ec40041e661c8_prof);

    }

    // line 327
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_da1f0f004fef7697adc19aa759ea898ff37b9814b7b8ff2350ef3b741dd74b66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da1f0f004fef7697adc19aa759ea898ff37b9814b7b8ff2350ef3b741dd74b66->enter($__internal_da1f0f004fef7697adc19aa759ea898ff37b9814b7b8ff2350ef3b741dd74b66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 328
        echo "    ";
        $context["show_label"] = ((array_key_exists("show_label", $context)) ? (_twig_default_filter((isset($context["show_label"]) || array_key_exists("show_label", $context) ? $context["show_label"] : (function () { throw new Twig_Error_Runtime('Variable "show_label" does not exist.', 328, $this->getSourceContext()); })()), true)) : (true));
        // line 329
        echo "    <div class=\"form-group";
        if ((twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 329, $this->getSourceContext()); })())) > 0)) {
            echo " has-error";
        }
        echo "\" id=\"sonata-ba-field-container-";
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 329, $this->getSourceContext()); })()), "html", null, true);
        echo "\">
        ";
        // line 330
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["sonata_admin"] ?? null), "field_description", array(), "any", false, true), "options", array(), "any", true, true)) {
            // line 331
            echo "            ";
            $context["label"] = ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["sonata_admin"] ?? null), "field_description", array(), "any", false, true), "options", array(), "any", false, true), "name", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["sonata_admin"] ?? null), "field_description", array(), "any", false, true), "options", array(), "any", false, true), "name", array()), (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 331, $this->getSourceContext()); })()))) : ((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 331, $this->getSourceContext()); })())));
            // line 332
            echo "        ";
        }
        // line 333
        echo "
        ";
        // line 334
        $context["div_class"] = "sonata-ba-field";
        // line 335
        echo "
        ";
        // line 336
        if (((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 336, $this->getSourceContext()); })()) === false)) {
            // line 337
            echo "            ";
            $context["div_class"] = ((isset($context["div_class"]) || array_key_exists("div_class", $context) ? $context["div_class"] : (function () { throw new Twig_Error_Runtime('Variable "div_class" does not exist.', 337, $this->getSourceContext()); })()) . " sonata-collection-row-without-label");
            // line 338
            echo "        ";
        }
        // line 339
        echo "
        ";
        // line 340
        if ((array_key_exists("sonata_admin", $context) && (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 340, $this->getSourceContext()); })()), "options", array()), "form_type", array(), "array") == "horizontal"))) {
            // line 341
            echo "            ";
            // line 342
            echo "            ";
            if ((((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 342, $this->getSourceContext()); })()) === false) || twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "vars", array(), "any", false, true), "checked", array(), "any", true, true))) {
                // line 343
                echo "                ";
                if (twig_in_filter("collection", twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 343, $this->getSourceContext()); })()), "parent", array()), "vars", array()), "block_prefixes", array()))) {
                    // line 344
                    echo "                    ";
                    $context["div_class"] = ((isset($context["div_class"]) || array_key_exists("div_class", $context) ? $context["div_class"] : (function () { throw new Twig_Error_Runtime('Variable "div_class" does not exist.', 344, $this->getSourceContext()); })()) . " col-sm-12");
                    // line 345
                    echo "                ";
                } else {
                    // line 346
                    echo "                    ";
                    $context["div_class"] = ((isset($context["div_class"]) || array_key_exists("div_class", $context) ? $context["div_class"] : (function () { throw new Twig_Error_Runtime('Variable "div_class" does not exist.', 346, $this->getSourceContext()); })()) . " col-sm-9 col-sm-offset-3");
                    // line 347
                    echo "                ";
                }
                // line 348
                echo "            ";
            } else {
                // line 349
                echo "                ";
                $context["div_class"] = ((isset($context["div_class"]) || array_key_exists("div_class", $context) ? $context["div_class"] : (function () { throw new Twig_Error_Runtime('Variable "div_class" does not exist.', 349, $this->getSourceContext()); })()) . " col-sm-9");
                // line 350
                echo "            ";
            }
            // line 351
            echo "        ";
        }
        // line 352
        echo "
        ";
        // line 353
        if ((isset($context["show_label"]) || array_key_exists("show_label", $context) ? $context["show_label"] : (function () { throw new Twig_Error_Runtime('Variable "show_label" does not exist.', 353, $this->getSourceContext()); })())) {
            // line 354
            echo "            ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 354, $this->getSourceContext()); })()), 'label', (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 354, $this->getSourceContext()); })()), null)) : (null))) ? array() : array("label" => $_label_)));
            echo "
        ";
        }
        // line 356
        echo "
        ";
        // line 357
        if ((array_key_exists("sonata_admin", $context) && (isset($context["sonata_admin_enabled"]) || array_key_exists("sonata_admin_enabled", $context) ? $context["sonata_admin_enabled"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin_enabled" does not exist.', 357, $this->getSourceContext()); })()))) {
            // line 358
            echo "            ";
            $context["div_class"] = (((((isset($context["div_class"]) || array_key_exists("div_class", $context) ? $context["div_class"] : (function () { throw new Twig_Error_Runtime('Variable "div_class" does not exist.', 358, $this->getSourceContext()); })()) . " sonata-ba-field-") . twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 358, $this->getSourceContext()); })()), "edit", array())) . "-") . twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 358, $this->getSourceContext()); })()), "inline", array()));
            // line 359
            echo "        ";
        }
        // line 360
        echo "
        ";
        // line 361
        if ((twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 361, $this->getSourceContext()); })())) > 0)) {
            // line 362
            echo "            ";
            $context["div_class"] = ((isset($context["div_class"]) || array_key_exists("div_class", $context) ? $context["div_class"] : (function () { throw new Twig_Error_Runtime('Variable "div_class" does not exist.', 362, $this->getSourceContext()); })()) . " sonata-ba-field-error");
            // line 363
            echo "        ";
        }
        // line 364
        echo "
        <div class=\"";
        // line 365
        echo twig_escape_filter($this->env, (isset($context["div_class"]) || array_key_exists("div_class", $context) ? $context["div_class"] : (function () { throw new Twig_Error_Runtime('Variable "div_class" does not exist.', 365, $this->getSourceContext()); })()), "html", null, true);
        echo "\">
            ";
        // line 366
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 366, $this->getSourceContext()); })()), 'widget', array("horizontal" => false, "horizontal_input_wrapper_class" => ""));
        echo " ";
        // line 367
        echo "
            ";
        // line 368
        if ((twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 368, $this->getSourceContext()); })())) > 0)) {
            // line 369
            echo "                <div class=\"help-block sonata-ba-field-error-messages\">
                    ";
            // line 370
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 370, $this->getSourceContext()); })()), 'errors');
            echo "
                </div>
            ";
        }
        // line 373
        echo "
            ";
        // line 374
        if (((array_key_exists("sonata_admin", $context) && (isset($context["sonata_admin_enabled"]) || array_key_exists("sonata_admin_enabled", $context) ? $context["sonata_admin_enabled"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin_enabled" does not exist.', 374, $this->getSourceContext()); })())) && ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["sonata_admin"] ?? null), "field_description", array(), "any", false, true), "help", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["sonata_admin"] ?? null), "field_description", array(), "any", false, true), "help", array()), false)) : (false)))) {
            // line 375
            echo "                <span class=\"help-block sonata-ba-field-help\">";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 375, $this->getSourceContext()); })()), "field_description", array()), "help", array()), array(), ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 375, $this->getSourceContext()); })()), "field_description", array()), "translationDomain", array())) ? (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 375, $this->getSourceContext()); })()), "field_description", array()), "translationDomain", array())) : (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 375, $this->getSourceContext()); })()), "translationDomain", array()))));
            echo "</span>
            ";
        }
        // line 377
        echo "        </div>
    </div>
";
        
        $__internal_da1f0f004fef7697adc19aa759ea898ff37b9814b7b8ff2350ef3b741dd74b66->leave($__internal_da1f0f004fef7697adc19aa759ea898ff37b9814b7b8ff2350ef3b741dd74b66_prof);

    }

    // line 381
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_853835f848d2faf6370494fccf239d569f7aff53a258e02b7d9af107ec5a86bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_853835f848d2faf6370494fccf239d569f7aff53a258e02b7d9af107ec5a86bb->enter($__internal_853835f848d2faf6370494fccf239d569f7aff53a258e02b7d9af107ec5a86bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 382
        $context["show_label"] = false;
        // line 383
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_853835f848d2faf6370494fccf239d569f7aff53a258e02b7d9af107ec5a86bb->leave($__internal_853835f848d2faf6370494fccf239d569f7aff53a258e02b7d9af107ec5a86bb_prof);

    }

    // line 386
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_499c508af8509063d7b3bff7eb07858a18f8274009dce8f1061b4393f6677a93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_499c508af8509063d7b3bff7eb07858a18f8274009dce8f1061b4393f6677a93->enter($__internal_499c508af8509063d7b3bff7eb07858a18f8274009dce8f1061b4393f6677a93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 387
        $context["show_label"] = false;
        // line 388
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_499c508af8509063d7b3bff7eb07858a18f8274009dce8f1061b4393f6677a93->leave($__internal_499c508af8509063d7b3bff7eb07858a18f8274009dce8f1061b4393f6677a93_prof);

    }

    // line 391
    public function block_sonata_type_native_collection_widget_row($context, array $blocks = array())
    {
        $__internal_0f771c1e8cafce30d287b4730f0515981aca37ccc79e01493e1d2beea1104988 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f771c1e8cafce30d287b4730f0515981aca37ccc79e01493e1d2beea1104988->enter($__internal_0f771c1e8cafce30d287b4730f0515981aca37ccc79e01493e1d2beea1104988_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_native_collection_widget_row"));

        // line 392
        ob_start();
        // line 393
        echo "    <div class=\"sonata-collection-row\">
        ";
        // line 394
        if ((isset($context["allow_delete"]) || array_key_exists("allow_delete", $context) ? $context["allow_delete"] : (function () { throw new Twig_Error_Runtime('Variable "allow_delete" does not exist.', 394, $this->getSourceContext()); })())) {
            // line 395
            echo "            <div class=\"row\">
                <div class=\"col-xs-1\">
                    <a href=\"#\" class=\"btn btn-link sonata-collection-delete\">
                        <i class=\"fa fa-minus-circle\" aria-hidden=\"true\"></i>
                    </a>
                </div>
                <div class=\"col-xs-11\">
        ";
        }
        // line 403
        echo "            ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["child"]) || array_key_exists("child", $context) ? $context["child"] : (function () { throw new Twig_Error_Runtime('Variable "child" does not exist.', 403, $this->getSourceContext()); })()), 'row', array("label" => false));
        echo "
        ";
        // line 404
        if ((isset($context["allow_delete"]) || array_key_exists("allow_delete", $context) ? $context["allow_delete"] : (function () { throw new Twig_Error_Runtime('Variable "allow_delete" does not exist.', 404, $this->getSourceContext()); })())) {
            // line 405
            echo "                </div>
            </div>
        ";
        }
        // line 408
        echo "    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_0f771c1e8cafce30d287b4730f0515981aca37ccc79e01493e1d2beea1104988->leave($__internal_0f771c1e8cafce30d287b4730f0515981aca37ccc79e01493e1d2beea1104988_prof);

    }

    // line 412
    public function block_sonata_type_native_collection_widget($context, array $blocks = array())
    {
        $__internal_dd028f407f5072e408b0310c04bbc181a929542a5d4909e62b12668589b7d65d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd028f407f5072e408b0310c04bbc181a929542a5d4909e62b12668589b7d65d->enter($__internal_dd028f407f5072e408b0310c04bbc181a929542a5d4909e62b12668589b7d65d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_native_collection_widget"));

        // line 413
        ob_start();
        // line 414
        echo "    ";
        if (array_key_exists("prototype", $context)) {
            // line 415
            echo "        ";
            $context["child"] = (isset($context["prototype"]) || array_key_exists("prototype", $context) ? $context["prototype"] : (function () { throw new Twig_Error_Runtime('Variable "prototype" does not exist.', 415, $this->getSourceContext()); })());
            // line 416
            echo "        ";
            $context["allow_delete_backup"] = (isset($context["allow_delete"]) || array_key_exists("allow_delete", $context) ? $context["allow_delete"] : (function () { throw new Twig_Error_Runtime('Variable "allow_delete" does not exist.', 416, $this->getSourceContext()); })());
            // line 417
            echo "        ";
            $context["allow_delete"] = true;
            // line 418
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 418, $this->getSourceContext()); })()), array("data-prototype" =>             $this->renderBlock("sonata_type_native_collection_widget_row", $context, $blocks), "data-prototype-name" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["prototype"]) || array_key_exists("prototype", $context) ? $context["prototype"] : (function () { throw new Twig_Error_Runtime('Variable "prototype" does not exist.', 418, $this->getSourceContext()); })()), "vars", array()), "name", array()), "class" => ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : (""))));
            // line 419
            echo "        ";
            $context["allow_delete"] = (isset($context["allow_delete_backup"]) || array_key_exists("allow_delete_backup", $context) ? $context["allow_delete_backup"] : (function () { throw new Twig_Error_Runtime('Variable "allow_delete_backup" does not exist.', 419, $this->getSourceContext()); })());
            // line 420
            echo "    ";
        }
        // line 421
        echo "    <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
        ";
        // line 422
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 422, $this->getSourceContext()); })()), 'errors');
        echo "
        ";
        // line 423
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 423, $this->getSourceContext()); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 424
            echo "            ";
            $this->displayBlock("sonata_type_native_collection_widget_row", $context, $blocks);
            echo "
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 426
        echo "        ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 426, $this->getSourceContext()); })()), 'rest');
        echo "
        ";
        // line 427
        if ((isset($context["allow_add"]) || array_key_exists("allow_add", $context) ? $context["allow_add"] : (function () { throw new Twig_Error_Runtime('Variable "allow_add" does not exist.', 427, $this->getSourceContext()); })())) {
            // line 428
            echo "            <div><a href=\"#\" class=\"btn btn-link sonata-collection-add\"><i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i></a></div>
        ";
        }
        // line 430
        echo "    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_dd028f407f5072e408b0310c04bbc181a929542a5d4909e62b12668589b7d65d->leave($__internal_dd028f407f5072e408b0310c04bbc181a929542a5d4909e62b12668589b7d65d_prof);

    }

    // line 434
    public function block_sonata_type_immutable_array_widget($context, array $blocks = array())
    {
        $__internal_517b7d8a99987142dc9bec1eb4222b233e8edb9310fa2271f4b3ecec3fb56a85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_517b7d8a99987142dc9bec1eb4222b233e8edb9310fa2271f4b3ecec3fb56a85->enter($__internal_517b7d8a99987142dc9bec1eb4222b233e8edb9310fa2271f4b3ecec3fb56a85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_immutable_array_widget"));

        // line 435
        echo "    ";
        ob_start();
        // line 436
        echo "        <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
            ";
        // line 437
        $this->displayBlock("sonata_help", $context, $blocks);
        echo "

            ";
        // line 439
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 439, $this->getSourceContext()); })()), 'errors');
        echo "

            ";
        // line 441
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 441, $this->getSourceContext()); })()));
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
        foreach ($context['_seq'] as $context["key"] => $context["child"]) {
            // line 442
            echo "                ";
            $this->displayBlock("sonata_type_immutable_array_widget_row", $context, $blocks);
            echo "
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
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 444
        echo "
            ";
        // line 445
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 445, $this->getSourceContext()); })()), 'rest');
        echo "
        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_517b7d8a99987142dc9bec1eb4222b233e8edb9310fa2271f4b3ecec3fb56a85->leave($__internal_517b7d8a99987142dc9bec1eb4222b233e8edb9310fa2271f4b3ecec3fb56a85_prof);

    }

    // line 450
    public function block_sonata_type_immutable_array_widget_row($context, array $blocks = array())
    {
        $__internal_e22db99e6e4aa4b745356f7e7a0d7e5d29af168af6d41e29f0695e40cb06700c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e22db99e6e4aa4b745356f7e7a0d7e5d29af168af6d41e29f0695e40cb06700c->enter($__internal_e22db99e6e4aa4b745356f7e7a0d7e5d29af168af6d41e29f0695e40cb06700c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_immutable_array_widget_row"));

        // line 451
        echo "    ";
        ob_start();
        // line 452
        echo "        <div class=\"form-group";
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["child"]) || array_key_exists("child", $context) ? $context["child"] : (function () { throw new Twig_Error_Runtime('Variable "child" does not exist.', 452, $this->getSourceContext()); })()), "vars", array()), "errors", array())) > 0)) {
            echo " has-error";
        }
        echo "\" id=\"sonata-ba-field-container-";
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 452, $this->getSourceContext()); })()), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, (isset($context["key"]) || array_key_exists("key", $context) ? $context["key"] : (function () { throw new Twig_Error_Runtime('Variable "key" does not exist.', 452, $this->getSourceContext()); })()), "html", null, true);
        echo "\">

            ";
        // line 454
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["child"]) || array_key_exists("child", $context) ? $context["child"] : (function () { throw new Twig_Error_Runtime('Variable "child" does not exist.', 454, $this->getSourceContext()); })()), 'label');
        echo "

            ";
        // line 456
        $context["div_class"] = "";
        // line 457
        echo "            ";
        if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 457, $this->getSourceContext()); })()), "options", array()), "form_type", array(), "array") == "horizontal")) {
            // line 458
            echo "                ";
            $context["div_class"] = "col-sm-9";
            // line 459
            echo "            ";
        }
        // line 460
        echo "
            <div class=\"";
        // line 461
        echo twig_escape_filter($this->env, (isset($context["div_class"]) || array_key_exists("div_class", $context) ? $context["div_class"] : (function () { throw new Twig_Error_Runtime('Variable "div_class" does not exist.', 461, $this->getSourceContext()); })()), "html", null, true);
        echo " sonata-ba-field sonata-ba-field-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 461, $this->getSourceContext()); })()), "edit", array()), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 461, $this->getSourceContext()); })()), "inline", array()), "html", null, true);
        echo " ";
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["child"]) || array_key_exists("child", $context) ? $context["child"] : (function () { throw new Twig_Error_Runtime('Variable "child" does not exist.', 461, $this->getSourceContext()); })()), "vars", array()), "errors", array())) > 0)) {
            echo "sonata-ba-field-error";
        }
        echo "\">
                ";
        // line 462
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["child"]) || array_key_exists("child", $context) ? $context["child"] : (function () { throw new Twig_Error_Runtime('Variable "child" does not exist.', 462, $this->getSourceContext()); })()), 'widget', array("horizontal" => false, "horizontal_input_wrapper_class" => ""));
        echo " ";
        // line 463
        echo "                ";
        $context["sonata_help"] = twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["child"]) || array_key_exists("child", $context) ? $context["child"] : (function () { throw new Twig_Error_Runtime('Variable "child" does not exist.', 463, $this->getSourceContext()); })()), "vars", array()), "sonata_help", array());
        // line 464
        echo "                ";
        $this->displayBlock("sonata_help", $context, $blocks);
        echo "
            </div>

            ";
        // line 467
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["child"]) || array_key_exists("child", $context) ? $context["child"] : (function () { throw new Twig_Error_Runtime('Variable "child" does not exist.', 467, $this->getSourceContext()); })()), "vars", array()), "errors", array())) > 0)) {
            // line 468
            echo "                <div class=\"help-block sonata-ba-field-error-messages\">
                    ";
            // line 469
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["child"]) || array_key_exists("child", $context) ? $context["child"] : (function () { throw new Twig_Error_Runtime('Variable "child" does not exist.', 469, $this->getSourceContext()); })()), 'errors');
            echo "
                </div>
            ";
        }
        // line 472
        echo "        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_e22db99e6e4aa4b745356f7e7a0d7e5d29af168af6d41e29f0695e40cb06700c->leave($__internal_e22db99e6e4aa4b745356f7e7a0d7e5d29af168af6d41e29f0695e40cb06700c_prof);

    }

    // line 476
    public function block_sonata_type_model_autocomplete_widget($context, array $blocks = array())
    {
        $__internal_5adb39c5421fd6f12b47d90ded2b8dc430fd6483cdd5db91e412b7754c476bac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5adb39c5421fd6f12b47d90ded2b8dc430fd6483cdd5db91e412b7754c476bac->enter($__internal_5adb39c5421fd6f12b47d90ded2b8dc430fd6483cdd5db91e412b7754c476bac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_model_autocomplete_widget"));

        // line 477
        echo "    ";
        $this->loadTemplate((isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new Twig_Error_Runtime('Variable "template" does not exist.', 477, $this->getSourceContext()); })()), "SonataAdminBundle:Form:form_admin_fields.html.twig", 477)->display($context);
        
        $__internal_5adb39c5421fd6f12b47d90ded2b8dc430fd6483cdd5db91e412b7754c476bac->leave($__internal_5adb39c5421fd6f12b47d90ded2b8dc430fd6483cdd5db91e412b7754c476bac_prof);

    }

    // line 480
    public function block_sonata_type_choice_field_mask_widget($context, array $blocks = array())
    {
        $__internal_49594928b83c52c88ea05af726b1b6a26cc41b0e6eef62abf30fb20625f83030 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49594928b83c52c88ea05af726b1b6a26cc41b0e6eef62abf30fb20625f83030->enter($__internal_49594928b83c52c88ea05af726b1b6a26cc41b0e6eef62abf30fb20625f83030_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_choice_field_mask_widget"));

        // line 481
        echo "    ";
        $this->displayBlock("choice_widget", $context, $blocks);
        echo "
    ";
        // line 483
        echo "    ";
        $context["main_form_name"] = twig_slice($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 483, $this->getSourceContext()); })()), 0, ((twig_length_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 483, $this->getSourceContext()); })())) - twig_length_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 483, $this->getSourceContext()); })()))) - 1));
        // line 484
        echo "    <script>
        jQuery(document).ready(function() {
            var allFields = ";
        // line 486
        echo json_encode((isset($context["all_fields"]) || array_key_exists("all_fields", $context) ? $context["all_fields"] : (function () { throw new Twig_Error_Runtime('Variable "all_fields" does not exist.', 486, $this->getSourceContext()); })()));
        echo ";
            var map = ";
        // line 487
        echo json_encode((isset($context["map"]) || array_key_exists("map", $context) ? $context["map"] : (function () { throw new Twig_Error_Runtime('Variable "map" does not exist.', 487, $this->getSourceContext()); })()));
        echo ";

            var showMaskChoiceEl = jQuery('#";
        // line 489
        echo twig_escape_filter($this->env, (isset($context["main_form_name"]) || array_key_exists("main_form_name", $context) ? $context["main_form_name"] : (function () { throw new Twig_Error_Runtime('Variable "main_form_name" does not exist.', 489, $this->getSourceContext()); })()), "html", null, true);
        echo "_";
        echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 489, $this->getSourceContext()); })()), "html", null, true);
        echo "');

            showMaskChoiceEl.on('change', function () {
                choice_field_mask_show(jQuery(this).val());
            });

            function choice_field_mask_show(val) {
                var controlGroupIdFunc = function (field) {
                    // Most of fields are named with an underscore
                    var defaultFieldId = '#sonata-ba-field-container-";
        // line 498
        echo twig_escape_filter($this->env, (isset($context["main_form_name"]) || array_key_exists("main_form_name", $context) ? $context["main_form_name"] : (function () { throw new Twig_Error_Runtime('Variable "main_form_name" does not exist.', 498, $this->getSourceContext()); })()), "html", null, true);
        echo "_' + field;

                    // Some fields may be named with a dash (like keys of immutable array form type)
                    if (jQuery(defaultFieldId).length === 0) {
                        return '#sonata-ba-field-container-";
        // line 502
        echo twig_escape_filter($this->env, (isset($context["main_form_name"]) || array_key_exists("main_form_name", $context) ? $context["main_form_name"] : (function () { throw new Twig_Error_Runtime('Variable "main_form_name" does not exist.', 502, $this->getSourceContext()); })()), "html", null, true);
        echo "-' + field;
                    }

                    return defaultFieldId;
                };

                jQuery.each(allFields, function (i, field) {
                    jQuery(controlGroupIdFunc(field)).hide();
                });

                if (map[val]) {
                    jQuery.each(map[val], function (i, field) {
                        jQuery(controlGroupIdFunc(field)).show();
                    });
                }
            }
            choice_field_mask_show(showMaskChoiceEl.val());
        });

    </script>
";
        
        $__internal_49594928b83c52c88ea05af726b1b6a26cc41b0e6eef62abf30fb20625f83030->leave($__internal_49594928b83c52c88ea05af726b1b6a26cc41b0e6eef62abf30fb20625f83030_prof);

    }

    // line 524
    public function block_sonata_type_choice_multiple_sortable($context, array $blocks = array())
    {
        $__internal_31f4d455faa11497bbb3bb8844c2e5041c7fa6c99ce8f34bf271b9d2c47f7b91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31f4d455faa11497bbb3bb8844c2e5041c7fa6c99ce8f34bf271b9d2c47f7b91->enter($__internal_31f4d455faa11497bbb3bb8844c2e5041c7fa6c99ce8f34bf271b9d2c47f7b91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_choice_multiple_sortable"));

        // line 525
        echo "    <input type=\"hidden\" name=\"";
        echo twig_escape_filter($this->env, (isset($context["full_name"]) || array_key_exists("full_name", $context) ? $context["full_name"] : (function () { throw new Twig_Error_Runtime('Variable "full_name" does not exist.', 525, $this->getSourceContext()); })()), "html", null, true);
        echo "\" id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 525, $this->getSourceContext()); })()), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, twig_join_filter((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 525, $this->getSourceContext()); })()), ","), "html", null, true);
        echo "\" />

    <script>
        jQuery(document).ready(function() {
            Admin.setup_sortable_select2(jQuery('#";
        // line 529
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 529, $this->getSourceContext()); })()), "html", null, true);
        echo "'), ";
        echo json_encode(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 529, $this->getSourceContext()); })()), "vars", array()), "choices", array()));
        echo ");
        });
    </script>
";
        
        $__internal_31f4d455faa11497bbb3bb8844c2e5041c7fa6c99ce8f34bf271b9d2c47f7b91->leave($__internal_31f4d455faa11497bbb3bb8844c2e5041c7fa6c99ce8f34bf271b9d2c47f7b91_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Form:form_admin_fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1521 => 529,  1509 => 525,  1503 => 524,  1475 => 502,  1468 => 498,  1454 => 489,  1449 => 487,  1445 => 486,  1441 => 484,  1438 => 483,  1433 => 481,  1427 => 480,  1419 => 477,  1413 => 476,  1404 => 472,  1398 => 469,  1395 => 468,  1393 => 467,  1386 => 464,  1383 => 463,  1380 => 462,  1368 => 461,  1365 => 460,  1362 => 459,  1359 => 458,  1356 => 457,  1354 => 456,  1349 => 454,  1337 => 452,  1334 => 451,  1328 => 450,  1317 => 445,  1314 => 444,  1297 => 442,  1280 => 441,  1275 => 439,  1270 => 437,  1265 => 436,  1262 => 435,  1256 => 434,  1247 => 430,  1243 => 428,  1241 => 427,  1236 => 426,  1219 => 424,  1202 => 423,  1198 => 422,  1193 => 421,  1190 => 420,  1187 => 419,  1184 => 418,  1181 => 417,  1178 => 416,  1175 => 415,  1172 => 414,  1170 => 413,  1164 => 412,  1155 => 408,  1150 => 405,  1148 => 404,  1143 => 403,  1133 => 395,  1131 => 394,  1128 => 393,  1126 => 392,  1120 => 391,  1112 => 388,  1110 => 387,  1104 => 386,  1096 => 383,  1094 => 382,  1088 => 381,  1079 => 377,  1073 => 375,  1071 => 374,  1068 => 373,  1062 => 370,  1059 => 369,  1057 => 368,  1054 => 367,  1051 => 366,  1047 => 365,  1044 => 364,  1041 => 363,  1038 => 362,  1036 => 361,  1033 => 360,  1030 => 359,  1027 => 358,  1025 => 357,  1022 => 356,  1016 => 354,  1014 => 353,  1011 => 352,  1008 => 351,  1005 => 350,  1002 => 349,  999 => 348,  996 => 347,  993 => 346,  990 => 345,  987 => 344,  984 => 343,  981 => 342,  979 => 341,  977 => 340,  974 => 339,  971 => 338,  968 => 337,  966 => 336,  963 => 335,  961 => 334,  958 => 333,  955 => 332,  952 => 331,  950 => 330,  941 => 329,  938 => 328,  932 => 327,  922 => 322,  916 => 320,  910 => 317,  907 => 316,  905 => 315,  902 => 314,  896 => 312,  890 => 309,  887 => 308,  885 => 307,  880 => 305,  876 => 304,  871 => 303,  868 => 302,  862 => 300,  859 => 299,  857 => 298,  851 => 297,  841 => 292,  835 => 289,  830 => 288,  827 => 287,  821 => 284,  816 => 283,  814 => 282,  809 => 280,  805 => 279,  800 => 278,  797 => 277,  794 => 276,  791 => 275,  788 => 274,  782 => 272,  779 => 271,  777 => 270,  771 => 269,  760 => 263,  758 => 262,  757 => 261,  756 => 260,  755 => 259,  750 => 258,  747 => 257,  744 => 256,  741 => 255,  738 => 254,  732 => 252,  729 => 251,  727 => 250,  721 => 249,  708 => 243,  705 => 242,  702 => 241,  696 => 239,  694 => 238,  689 => 237,  686 => 236,  683 => 235,  679 => 233,  676 => 232,  673 => 230,  670 => 228,  667 => 227,  665 => 226,  658 => 225,  656 => 224,  653 => 223,  650 => 222,  647 => 220,  644 => 218,  641 => 217,  639 => 216,  632 => 215,  630 => 214,  622 => 213,  616 => 211,  613 => 210,  611 => 209,  608 => 208,  605 => 207,  602 => 206,  599 => 205,  596 => 204,  593 => 203,  591 => 202,  585 => 201,  576 => 197,  569 => 195,  567 => 194,  565 => 193,  564 => 190,  561 => 189,  557 => 188,  552 => 187,  549 => 186,  547 => 185,  541 => 184,  532 => 180,  529 => 178,  526 => 176,  523 => 174,  521 => 173,  518 => 172,  516 => 171,  514 => 170,  499 => 169,  496 => 168,  493 => 167,  490 => 166,  487 => 165,  484 => 164,  481 => 163,  478 => 162,  475 => 161,  472 => 160,  469 => 159,  467 => 158,  464 => 157,  461 => 156,  458 => 155,  452 => 154,  445 => 151,  439 => 150,  432 => 147,  426 => 146,  416 => 141,  410 => 139,  407 => 137,  405 => 136,  403 => 135,  401 => 134,  386 => 133,  383 => 132,  379 => 129,  376 => 126,  375 => 125,  374 => 124,  372 => 123,  370 => 122,  367 => 121,  364 => 120,  361 => 119,  358 => 118,  355 => 117,  352 => 116,  350 => 115,  347 => 114,  344 => 113,  342 => 112,  339 => 111,  337 => 110,  334 => 109,  331 => 108,  328 => 107,  325 => 106,  323 => 105,  317 => 104,  309 => 99,  307 => 98,  305 => 97,  302 => 95,  300 => 94,  298 => 93,  292 => 92,  284 => 88,  282 => 87,  280 => 86,  277 => 84,  275 => 83,  273 => 82,  267 => 81,  255 => 75,  252 => 74,  249 => 73,  246 => 72,  240 => 71,  232 => 68,  228 => 66,  226 => 65,  223 => 64,  220 => 63,  218 => 62,  212 => 60,  210 => 59,  208 => 58,  205 => 57,  202 => 56,  199 => 54,  197 => 53,  191 => 52,  181 => 49,  178 => 48,  172 => 47,  162 => 44,  159 => 43,  156 => 42,  153 => 41,  150 => 40,  144 => 39,  137 => 36,  133 => 35,  127 => 34,  115 => 29,  113 => 28,  111 => 27,  105 => 26,  97 => 23,  93 => 22,  90 => 21,  81 => 19,  77 => 18,  74 => 17,  69 => 16,  67 => 15,  61 => 14,  11 => 12,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends 'form_div_layout.html.twig' %}

{% block form_errors -%}
    {% if errors|length > 0 %}
        {% if not form.parent %}<div class=\"alert alert-danger\">{% endif %}
            <ul class=\"list-unstyled\">
                {% for error in errors %}
                    <li><i class=\"fa fa-exclamation-circle\" aria-hidden=\"true\"></i> {{ error.message }}</li>
                {% endfor %}
            </ul>
        {% if not form.parent %}</div>{% endif %}
    {% endif %}
{%- endblock form_errors %}

{% block sonata_help %}
{% spaceless %}
{% if sonata_help is defined and sonata_help %}
    <span class=\"help-block sonata-ba-field-widget-help\">{{ sonata_help|raw }}</span>
{% endif %}
{% endspaceless %}
{% endblock %}

{% block form_widget -%}
    {{ parent() }}
    {{ block('sonata_help') }}
{%- endblock form_widget %}

{% block form_widget_simple %}
    {% set type = type|default('text') %}
    {% if type != 'file' %}
        {% set attr = attr|merge({'class': attr.class|default('') ~ ' form-control'}) %}
    {% endif %}
    {{ parent() }}
{% endblock form_widget_simple %}

{% block textarea_widget %}
    {% set attr = attr|merge({'class': attr.class|default('') ~ ' form-control'}) %}
    {{ parent() }}
{% endblock textarea_widget %}

{% block money_widget -%}
    {% if money_pattern == '{{ widget }}' %}
        {{- block('form_widget_simple') -}}
    {% else %}
        {% set currencySymbol = money_pattern|replace({'{{ widget }}': ''})|trim %}
        {% if money_pattern matches '/^{{ widget }}/' %}
            <div class=\"input-group\">
                {{- block('form_widget_simple') -}}
                <span class=\"input-group-addon\">{{ currencySymbol }}</span>
            </div>
        {% elseif money_pattern matches '/{{ widget }}\$/' %}
            <div class=\"input-group\">
                <span class=\"input-group-addon\">{{ currencySymbol }}</span>
                {{- block('form_widget_simple') -}}
            </div>
        {% endif %}
    {% endif %}
{%- endblock money_widget %}

{% block percent_widget %}
    {% spaceless %}
        {% set type = type|default('text') %}
        <div class=\"input-group\">
            {{ block('form_widget_simple') }}
            <span class=\"input-group-addon\">%</span>
        </div>
    {% endspaceless %}
{% endblock percent_widget %}

{% block checkbox_widget -%}
    {% set parent_label_class = parent_label_class|default('') -%}
    {% if 'checkbox-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"checkbox\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {%- set parent_label_class = parent_label_class|default('') -%}
    {% if 'radio-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"radio\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock radio_widget %}

{# Labels #}
{% block form_label %}
{% spaceless %}
    {% if label is not same as(false) and sonata_admin.options['form_type'] == 'horizontal' %}
        {% set label_class = 'col-sm-3' %}
    {% endif %}

    {% set label_class = label_class|default('') ~ ' control-label' %}

    {% if label is not same as(false) %}
        {% set label_attr = label_attr|merge({'class': label_attr.class|default('') ~ ' ' ~ label_class }) %}

        {% if not compound %}
            {% set label_attr = label_attr|merge({'for': id}) %}
        {% endif %}
        {% if required %}
            {% set label_attr = label_attr|merge({'class': (label_attr.class|default('') ~ ' required')|trim}) %}
        {% endif %}

        {% if label is empty %}
            {%- if label_format is defined and label_format is not empty -%}
                {% set label = label_format|replace({
                    '%name%': name,
                    '%id%': id,
                }) %}
            {%- else -%}
                {% set label = name|humanize %}
            {%- endif -%}
        {% endif %}

        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
            {% if translation_domain is same as(false) %}
                {{- label -}}
            {% elseif not sonata_admin.admin %}
                {{- label|trans({}, translation_domain) -}}
            {% else %}
                {{ label|trans({}, sonata_admin.field_description.translationDomain ?: admin.translationDomain) }}
            {% endif %}
        </label>
    {% endif %}
{% endspaceless %}
{% endblock form_label %}

{% block checkbox_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{% block checkbox_radio_label %}
    {% if sonata_admin.admin %}
        {% set translation_domain = sonata_admin.field_description.translationDomain %}
    {% endif %}
    {# Do not display the label if widget is not defined in order to prevent double label rendering #}
    {% if widget is defined %}
        {% if required %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) %}
        {% endif %}
        {% if parent_label_class is defined %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ parent_label_class)|trim}) %}
        {% endif %}
        {% if label is not same as(false) and label is empty %}
            {% set label = name|humanize %}
        {% endif %}
        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
            {{- widget|raw -}}
            {%- if label is not same as(false) -%}
                <span class=\"control-label__text\">
                    {% if translation_domain is same as(false) %}
                        {{- label -}}
                    {% else %}
                        {{- label|trans({}, translation_domain) -}}
                    {%- endif -%}
                </span>
            {%- endif -%}
        </label>
    {% endif %}
{% endblock checkbox_radio_label %}

{% block choice_widget_expanded %}
{% spaceless %}
    {% set attr = attr|merge({'class': attr.class|default('') ~ ' list-unstyled'}) %}
    <ul {{ block('widget_container_attributes') }}>
    {% for child in form %}
        <li>
            {{ form_widget(child, {
                'horizontal': false,
                'horizontal_input_wrapper_class': '',
                'translation_domain': choice_translation_domain
            }) }} {# 'horizontal' values are needed to avoid MopaBootstrapBundle messing with the DOM #}
        </li>
    {% endfor %}
    </ul>
{% endspaceless %}
{% endblock choice_widget_expanded %}

{% block choice_widget_collapsed %}
{% spaceless %}
    {% if required and placeholder is defined and placeholder is none %}
        {% set required = false %}
    {% elseif required and empty_value is defined and empty_value_in_choices is defined and empty_value is none and not empty_value_in_choices and not multiple %}
        {% set required = false %}
    {% endif %}

    {% set attr = attr|merge({'class': attr.class|default('') ~ ' form-control'}) %}
    {% if (sortable is defined) and sortable and multiple %}
        {{ block('sonata_type_choice_multiple_sortable') }}
    {% else %}
        <select {{ block('widget_attributes') }}{% if multiple %} multiple=\"multiple\"{% endif %} >
            {% if empty_value is defined and empty_value is not none %}
                <option value=\"\"{% if required and value is empty %} selected=\"selected\"{% endif %}>
                    {% if empty_value != '' %}
                        {% if not sonata_admin.admin %}
                            {{- empty_value|trans({}, translation_domain) -}}
                        {% else %}
                            {{- empty_value|trans({}, sonata_admin.field_description.translationDomain) -}}
                        {% endif %}
                    {% endif %}
                </option>
            {% elseif placeholder is defined and placeholder is not none %}
                <option value=\"\"{% if required and value is empty %} selected=\"selected\"{% endif %}>
                    {% if placeholder != '' %}
                        {% if not sonata_admin.admin %}
                            {{- placeholder|trans({}, translation_domain) -}}
                        {% else %}
                            {{- placeholder|trans({}, sonata_admin.field_description.translationDomain) -}}
                        {% endif %}
                    {% endif %}
                </option>
            {% endif %}
            {% if preferred_choices|length > 0 %}
                {% set options = preferred_choices %}
                {{ block('choice_widget_options') }}
                {% if choices|length > 0 %}
                    <option disabled=\"disabled\">{{ separator }}</option>
                {% endif %}
            {% endif %}
            {% set options = choices %}
            {{ block('choice_widget_options') }}
        </select>
    {% endif %}
{% endspaceless %}
{% endblock choice_widget_collapsed %}

{% block date_widget %}
{% spaceless %}
    {% if widget == 'single_text' %}
        {{ block('form_widget_simple') }}
    {% else %}
        {% if row is not defined or row == true %}
            {% set attr = attr|merge({'class': attr.class|default('') ~ ' row' }) %}
        {% endif %}
        {% set input_wrapper_class = input_wrapper_class|default('col-sm-4') %}
        <div {{ block('widget_container_attributes') }}>
            {{ date_pattern|replace({
                '{{ year }}':  '<div class=\"'~ input_wrapper_class ~ '\">' ~ form_widget(form.year) ~ '</div>',
                '{{ month }}': '<div class=\"'~ input_wrapper_class ~ '\">' ~ form_widget(form.month) ~ '</div>',
                '{{ day }}':   '<div class=\"'~ input_wrapper_class ~ '\">' ~ form_widget(form.day) ~ '</div>',
            })|raw }}
        </div>
    {% endif %}
{% endspaceless %}
{% endblock date_widget %}

{% block time_widget %}
{% spaceless %}
    {% if widget == 'single_text' %}
        {{ block('form_widget_simple') }}
    {% else %}
        {% if row is not defined or row == true %}
            {% set attr = attr|merge({'class': attr.class|default('') ~ ' row' }) %}
        {% endif %}
        {% set input_wrapper_class = input_wrapper_class|default('col-sm-6') %}
        <div {{ block('widget_container_attributes') }}>
            <div class=\"{{ input_wrapper_class }}\">
                {{ form_widget(form.hour) }}
            </div>
            {% if with_minutes %}
                <div class=\"{{ input_wrapper_class }}\">
                    {{ form_widget(form.minute) }}
                </div>
            {% endif %}
            {% if with_seconds %}
                <div class=\"{{ input_wrapper_class }}\">
                    {{ form_widget(form.second) }}
                </div>
            {% endif %}
        </div>
    {% endif %}
{% endspaceless %}
{% endblock time_widget %}

{% block datetime_widget %}
{% spaceless %}
    {% if widget == 'single_text' %}
        {{ block('form_widget_simple') }}
    {% else %}
        {% set attr = attr|merge({'class': attr.class|default('') ~ ' row' }) %}
        <div {{ block('widget_container_attributes') }}>
            {{ form_errors(form.date) }}
            {{ form_errors(form.time) }}

            {% if form.date.vars.widget == 'single_text' %}
                <div class=\"col-sm-2\">
                    {{ form_widget(form.date) }}
                </div>
            {% else %}
                {{ form_widget(form.date, {'row': false, 'input_wrapper_class': 'col-sm-2'}) }}
            {% endif %}

            {% if form.time.vars.widget == 'single_text' %}
                <div class=\"col-sm-2\">
                    {{ form_widget(form.time) }}
                </div>
            {% else %}
                {{ form_widget(form.time, {'row': false, 'input_wrapper_class': 'col-sm-2'}) }}
            {% endif %}
        </div>
    {% endif %}
{% endspaceless %}
{% endblock datetime_widget %}

{% block form_row %}
    {% set show_label = show_label|default(true) %}
    <div class=\"form-group{% if errors|length > 0 %} has-error{% endif %}\" id=\"sonata-ba-field-container-{{ id }}\">
        {% if sonata_admin.field_description.options is defined %}
            {% set label = sonata_admin.field_description.options.name|default(label)  %}
        {% endif %}

        {% set div_class = 'sonata-ba-field' %}

        {% if label is same as(false) %}
            {% set div_class = div_class ~ ' sonata-collection-row-without-label' %}
        {% endif %}

        {% if sonata_admin is defined and sonata_admin.options['form_type'] == 'horizontal' %}
            {# Add an offset if no label or is a checkbox/radio #}
            {% if label is same as(false) or form.vars.checked is defined %}
                {% if 'collection' in form.parent.vars.block_prefixes %}
                    {% set div_class = div_class ~ ' col-sm-12' %}
                {% else %}
                    {% set div_class = div_class ~ ' col-sm-9 col-sm-offset-3' %}
                {% endif %}
            {% else %}
                {% set div_class = div_class ~ ' col-sm-9' %}
            {% endif %}
        {% endif %}

        {% if show_label %}
            {{ form_label(form, label|default(null)) }}
        {% endif %}

        {% if sonata_admin is defined and sonata_admin_enabled %}
            {% set div_class = div_class ~ ' sonata-ba-field-' ~ sonata_admin.edit ~ '-' ~ sonata_admin.inline %}
        {% endif %}

        {% if errors|length > 0 %}
            {% set div_class = div_class ~ ' sonata-ba-field-error' %}
        {% endif %}

        <div class=\"{{ div_class }}\">
            {{ form_widget(form, {'horizontal': false, 'horizontal_input_wrapper_class': ''}) }} {# {'horizontal': false, 'horizontal_input_wrapper_class': ''} needed to avoid MopaBootstrapBundle messing with the DOM #}

            {% if errors|length > 0 %}
                <div class=\"help-block sonata-ba-field-error-messages\">
                    {{ form_errors(form) }}
                </div>
            {% endif %}

            {% if sonata_admin is defined and sonata_admin_enabled and sonata_admin.field_description.help|default(false) %}
                <span class=\"help-block sonata-ba-field-help\">{{ sonata_admin.field_description.help|trans({}, sonata_admin.field_description.translationDomain ?: admin.translationDomain)|raw }}</span>
            {% endif %}
        </div>
    </div>
{% endblock form_row %}

{% block checkbox_row -%}
    {% set show_label = false %}
    {{ block('form_row') }}
{%- endblock checkbox_row %}

{% block radio_row -%}
    {% set show_label = false %}
    {{ block('form_row') }}
{%- endblock radio_row %}

{% block sonata_type_native_collection_widget_row %}
{% spaceless %}
    <div class=\"sonata-collection-row\">
        {% if allow_delete %}
            <div class=\"row\">
                <div class=\"col-xs-1\">
                    <a href=\"#\" class=\"btn btn-link sonata-collection-delete\">
                        <i class=\"fa fa-minus-circle\" aria-hidden=\"true\"></i>
                    </a>
                </div>
                <div class=\"col-xs-11\">
        {% endif %}
            {{ form_row(child, { label: false }) }}
        {% if allow_delete %}
                </div>
            </div>
        {% endif %}
    </div>
{% endspaceless %}
{% endblock sonata_type_native_collection_widget_row %}

{% block sonata_type_native_collection_widget %}
{% spaceless %}
    {% if prototype is defined %}
        {% set child = prototype %}
        {% set allow_delete_backup = allow_delete %}
        {% set allow_delete = true %}
        {% set attr = attr|merge({'data-prototype': block('sonata_type_native_collection_widget_row'), 'data-prototype-name': prototype.vars.name, 'class': attr.class|default('') }) %}
        {% set allow_delete = allow_delete_backup %}
    {% endif %}
    <div {{ block('widget_container_attributes') }}>
        {{ form_errors(form) }}
        {% for child in form %}
            {{ block('sonata_type_native_collection_widget_row') }}
        {% endfor %}
        {{ form_rest(form) }}
        {% if allow_add %}
            <div><a href=\"#\" class=\"btn btn-link sonata-collection-add\"><i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i></a></div>
        {% endif %}
    </div>
{% endspaceless %}
{% endblock sonata_type_native_collection_widget %}

{% block sonata_type_immutable_array_widget %}
    {% spaceless %}
        <div {{ block('widget_container_attributes') }}>
            {{ block('sonata_help') }}

            {{ form_errors(form) }}

            {% for key, child in form %}
                {{ block('sonata_type_immutable_array_widget_row') }}
            {% endfor %}

            {{ form_rest(form) }}
        </div>
    {% endspaceless %}
{% endblock sonata_type_immutable_array_widget %}

{% block sonata_type_immutable_array_widget_row %}
    {% spaceless %}
        <div class=\"form-group{% if child.vars.errors|length > 0%} has-error{%endif%}\" id=\"sonata-ba-field-container-{{ id }}-{{ key }}\">

            {{ form_label(child) }}

            {% set div_class = \"\" %}
            {% if sonata_admin.options['form_type'] == 'horizontal' %}
                {% set div_class = 'col-sm-9' %}
            {% endif%}

            <div class=\"{{ div_class }} sonata-ba-field sonata-ba-field-{{ sonata_admin.edit }}-{{ sonata_admin.inline }} {% if child.vars.errors|length > 0 %}sonata-ba-field-error{% endif %}\">
                {{ form_widget(child, {'horizontal': false, 'horizontal_input_wrapper_class': ''}) }} {# {'horizontal': false, 'horizontal_input_wrapper_class': ''} needed to avoid MopaBootstrapBundle messing with the DOM #}
                {% set sonata_help = child.vars.sonata_help %}
                {{ block('sonata_help') }}
            </div>

            {% if child.vars.errors|length > 0 %}
                <div class=\"help-block sonata-ba-field-error-messages\">
                    {{ form_errors(child) }}
                </div>
            {% endif %}
        </div>
    {% endspaceless %}
{% endblock %}

{% block sonata_type_model_autocomplete_widget %}
    {% include template %}
{% endblock sonata_type_model_autocomplete_widget %}

{% block sonata_type_choice_field_mask_widget %}
    {{ block('choice_widget') }}
    {# Taking the form name excluding ending field glue character #}
    {% set main_form_name = id|slice(0, (id|length - name|length)-1) %}
    <script>
        jQuery(document).ready(function() {
            var allFields = {{ all_fields|json_encode|raw }};
            var map = {{ map|json_encode|raw }};

            var showMaskChoiceEl = jQuery('#{{ main_form_name }}_{{ name }}');

            showMaskChoiceEl.on('change', function () {
                choice_field_mask_show(jQuery(this).val());
            });

            function choice_field_mask_show(val) {
                var controlGroupIdFunc = function (field) {
                    // Most of fields are named with an underscore
                    var defaultFieldId = '#sonata-ba-field-container-{{ main_form_name }}_' + field;

                    // Some fields may be named with a dash (like keys of immutable array form type)
                    if (jQuery(defaultFieldId).length === 0) {
                        return '#sonata-ba-field-container-{{ main_form_name }}-' + field;
                    }

                    return defaultFieldId;
                };

                jQuery.each(allFields, function (i, field) {
                    jQuery(controlGroupIdFunc(field)).hide();
                });

                if (map[val]) {
                    jQuery.each(map[val], function (i, field) {
                        jQuery(controlGroupIdFunc(field)).show();
                    });
                }
            }
            choice_field_mask_show(showMaskChoiceEl.val());
        });

    </script>
{% endblock %}

{%  block sonata_type_choice_multiple_sortable %}
    <input type=\"hidden\" name=\"{{ full_name }}\" id=\"{{ id }}\" value=\"{{ value|join(',') }}\" />

    <script>
        jQuery(document).ready(function() {
            Admin.setup_sortable_select2(jQuery('#{{ id }}'), {{ form.vars.choices|json_encode|raw }});
        });
    </script>
{% endblock %}
", "SonataAdminBundle:Form:form_admin_fields.html.twig", "/home/kuba/Workspace/vendor/sonata-project/admin-bundle/src/Resources/views/Form/form_admin_fields.html.twig");
    }
}
