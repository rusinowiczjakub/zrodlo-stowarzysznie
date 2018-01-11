<?php

/* bootstrap_3_layout.html.twig */
class __TwigTemplate_62f469ac7063cbb3e4dcd7656748b789f814ed726e09792982c3c0184395fe5b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "bootstrap_3_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'textarea_widget' => array($this, 'block_textarea_widget'),
                'button_widget' => array($this, 'block_button_widget'),
                'money_widget' => array($this, 'block_money_widget'),
                'percent_widget' => array($this, 'block_percent_widget'),
                'datetime_widget' => array($this, 'block_datetime_widget'),
                'date_widget' => array($this, 'block_date_widget'),
                'time_widget' => array($this, 'block_time_widget'),
                'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
                'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
                'checkbox_widget' => array($this, 'block_checkbox_widget'),
                'radio_widget' => array($this, 'block_radio_widget'),
                'form_label' => array($this, 'block_form_label'),
                'choice_label' => array($this, 'block_choice_label'),
                'checkbox_label' => array($this, 'block_checkbox_label'),
                'radio_label' => array($this, 'block_radio_label'),
                'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'choice_row' => array($this, 'block_choice_row'),
                'date_row' => array($this, 'block_date_row'),
                'time_row' => array($this, 'block_time_row'),
                'datetime_row' => array($this, 'block_datetime_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'form_errors' => array($this, 'block_form_errors'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8fb3396dc183cc86c009ad7e9e1ebba6d49ad8113c356451431b23f9be83f68c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fb3396dc183cc86c009ad7e9e1ebba6d49ad8113c356451431b23f9be83f68c->enter($__internal_8fb3396dc183cc86c009ad7e9e1ebba6d49ad8113c356451431b23f9be83f68c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('button_widget', $context, $blocks);
        // line 21
        echo "
";
        // line 22
        $this->displayBlock('money_widget', $context, $blocks);
        // line 39
        echo "
";
        // line 40
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 46
        echo "
";
        // line 47
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 60
        echo "
";
        // line 61
        $this->displayBlock('date_widget', $context, $blocks);
        // line 79
        echo "
";
        // line 80
        $this->displayBlock('time_widget', $context, $blocks);
        // line 94
        echo "
";
        // line 95
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 99
        echo "
";
        // line 100
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 119
        echo "
";
        // line 120
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 130
        echo "
";
        // line 131
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 141
        echo "
";
        // line 143
        echo "
";
        // line 144
        $this->displayBlock('form_label', $context, $blocks);
        // line 148
        echo "
";
        // line 149
        $this->displayBlock('choice_label', $context, $blocks);
        // line 154
        echo "
";
        // line 155
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 160
        echo "
";
        // line 161
        $this->displayBlock('radio_label', $context, $blocks);
        // line 166
        echo "
";
        // line 167
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 191
        echo "
";
        // line 193
        echo "
";
        // line 194
        $this->displayBlock('form_row', $context, $blocks);
        // line 201
        echo "
";
        // line 202
        $this->displayBlock('button_row', $context, $blocks);
        // line 207
        echo "
";
        // line 208
        $this->displayBlock('choice_row', $context, $blocks);
        // line 212
        echo "
";
        // line 213
        $this->displayBlock('date_row', $context, $blocks);
        // line 217
        echo "
";
        // line 218
        $this->displayBlock('time_row', $context, $blocks);
        // line 222
        echo "
";
        // line 223
        $this->displayBlock('datetime_row', $context, $blocks);
        // line 227
        echo "
";
        // line 228
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 234
        echo "
";
        // line 235
        $this->displayBlock('radio_row', $context, $blocks);
        // line 241
        echo "
";
        // line 243
        echo "
";
        // line 244
        $this->displayBlock('form_errors', $context, $blocks);
        
        $__internal_8fb3396dc183cc86c009ad7e9e1ebba6d49ad8113c356451431b23f9be83f68c->leave($__internal_8fb3396dc183cc86c009ad7e9e1ebba6d49ad8113c356451431b23f9be83f68c_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_f21b689f9a00a8f3ddc0544f9d6212dd818e8d905b6adfcb43046a3beb87afda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f21b689f9a00a8f3ddc0544f9d6212dd818e8d905b6adfcb43046a3beb87afda->enter($__internal_f21b689f9a00a8f3ddc0544f9d6212dd818e8d905b6adfcb43046a3beb87afda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 6, $this->getSourceContext()); })()), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 7, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_f21b689f9a00a8f3ddc0544f9d6212dd818e8d905b6adfcb43046a3beb87afda->leave($__internal_f21b689f9a00a8f3ddc0544f9d6212dd818e8d905b6adfcb43046a3beb87afda_prof);

    }

    // line 12
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_353dc0eb0cf730a0a0bca76e3484ca32a89958de836c6f85c188b1b00eafda4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_353dc0eb0cf730a0a0bca76e3484ca32a89958de836c6f85c188b1b00eafda4d->enter($__internal_353dc0eb0cf730a0a0bca76e3484ca32a89958de836c6f85c188b1b00eafda4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 13
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 13, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 14
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_353dc0eb0cf730a0a0bca76e3484ca32a89958de836c6f85c188b1b00eafda4d->leave($__internal_353dc0eb0cf730a0a0bca76e3484ca32a89958de836c6f85c188b1b00eafda4d_prof);

    }

    // line 17
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_eb92bd1a4b7f5f32d7e4bc56ba5b22588eb0ad845a8e0c6206b7b510cffce025 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb92bd1a4b7f5f32d7e4bc56ba5b22588eb0ad845a8e0c6206b7b510cffce025->enter($__internal_eb92bd1a4b7f5f32d7e4bc56ba5b22588eb0ad845a8e0c6206b7b510cffce025_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 18
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 18, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 19
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_eb92bd1a4b7f5f32d7e4bc56ba5b22588eb0ad845a8e0c6206b7b510cffce025->leave($__internal_eb92bd1a4b7f5f32d7e4bc56ba5b22588eb0ad845a8e0c6206b7b510cffce025_prof);

    }

    // line 22
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_0e56128885e1095bc894fd931a938202217abba20487a569e2580941fc283f43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e56128885e1095bc894fd931a938202217abba20487a569e2580941fc283f43->enter($__internal_0e56128885e1095bc894fd931a938202217abba20487a569e2580941fc283f43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 23
        $context["prepend"] =  !(is_string($__internal_da6617c5512411fd05cf09e370f7a8f01bd591968a39dcb3e16b062600bf1a6f = (isset($context["money_pattern"]) || array_key_exists("money_pattern", $context) ? $context["money_pattern"] : (function () { throw new Twig_Error_Runtime('Variable "money_pattern" does not exist.', 23, $this->getSourceContext()); })())) && is_string($__internal_c55c646a7682570bdabbe68c828e99e66b15edb2e3fe0605fed00ae6fd5b1670 = "{{") && ('' === $__internal_c55c646a7682570bdabbe68c828e99e66b15edb2e3fe0605fed00ae6fd5b1670 || 0 === strpos($__internal_da6617c5512411fd05cf09e370f7a8f01bd591968a39dcb3e16b062600bf1a6f, $__internal_c55c646a7682570bdabbe68c828e99e66b15edb2e3fe0605fed00ae6fd5b1670)));
        // line 24
        echo "    ";
        $context["append"] =  !(is_string($__internal_c372b570998b574ac6fcab89b746d9719fa2aa39f5e2481b21fc5d173b3b3c0f = (isset($context["money_pattern"]) || array_key_exists("money_pattern", $context) ? $context["money_pattern"] : (function () { throw new Twig_Error_Runtime('Variable "money_pattern" does not exist.', 24, $this->getSourceContext()); })())) && is_string($__internal_af52dae7c0195595607da55b1df0f02ae4bb7f2e3f23422afc79196b209861ec = "}}") && ('' === $__internal_af52dae7c0195595607da55b1df0f02ae4bb7f2e3f23422afc79196b209861ec || $__internal_af52dae7c0195595607da55b1df0f02ae4bb7f2e3f23422afc79196b209861ec === substr($__internal_c372b570998b574ac6fcab89b746d9719fa2aa39f5e2481b21fc5d173b3b3c0f, -strlen($__internal_af52dae7c0195595607da55b1df0f02ae4bb7f2e3f23422afc79196b209861ec))));
        // line 25
        echo "    ";
        if (((isset($context["prepend"]) || array_key_exists("prepend", $context) ? $context["prepend"] : (function () { throw new Twig_Error_Runtime('Variable "prepend" does not exist.', 25, $this->getSourceContext()); })()) || (isset($context["append"]) || array_key_exists("append", $context) ? $context["append"] : (function () { throw new Twig_Error_Runtime('Variable "append" does not exist.', 25, $this->getSourceContext()); })()))) {
            // line 26
            echo "        <div class=\"input-group\">
            ";
            // line 27
            if ((isset($context["prepend"]) || array_key_exists("prepend", $context) ? $context["prepend"] : (function () { throw new Twig_Error_Runtime('Variable "prepend" does not exist.', 27, $this->getSourceContext()); })())) {
                // line 28
                echo "                <span class=\"input-group-addon\">";
                echo twig_escape_filter($this->env, twig_replace_filter((isset($context["money_pattern"]) || array_key_exists("money_pattern", $context) ? $context["money_pattern"] : (function () { throw new Twig_Error_Runtime('Variable "money_pattern" does not exist.', 28, $this->getSourceContext()); })()), array("{{ widget }}" => "")), "html", null, true);
                echo "</span>
            ";
            }
            // line 30
            $this->displayBlock("form_widget_simple", $context, $blocks);
            // line 31
            if ((isset($context["append"]) || array_key_exists("append", $context) ? $context["append"] : (function () { throw new Twig_Error_Runtime('Variable "append" does not exist.', 31, $this->getSourceContext()); })())) {
                // line 32
                echo "                <span class=\"input-group-addon\">";
                echo twig_escape_filter($this->env, twig_replace_filter((isset($context["money_pattern"]) || array_key_exists("money_pattern", $context) ? $context["money_pattern"] : (function () { throw new Twig_Error_Runtime('Variable "money_pattern" does not exist.', 32, $this->getSourceContext()); })()), array("{{ widget }}" => "")), "html", null, true);
                echo "</span>
            ";
            }
            // line 34
            echo "        </div>
    ";
        } else {
            // line 36
            $this->displayBlock("form_widget_simple", $context, $blocks);
        }
        
        $__internal_0e56128885e1095bc894fd931a938202217abba20487a569e2580941fc283f43->leave($__internal_0e56128885e1095bc894fd931a938202217abba20487a569e2580941fc283f43_prof);

    }

    // line 40
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_7b5aa056bba428e4a6b6a85dce10f27114ba7926aa8a1161055e5156b86ccdce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b5aa056bba428e4a6b6a85dce10f27114ba7926aa8a1161055e5156b86ccdce->enter($__internal_7b5aa056bba428e4a6b6a85dce10f27114ba7926aa8a1161055e5156b86ccdce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 41
        echo "<div class=\"input-group\">";
        // line 42
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 43
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_7b5aa056bba428e4a6b6a85dce10f27114ba7926aa8a1161055e5156b86ccdce->leave($__internal_7b5aa056bba428e4a6b6a85dce10f27114ba7926aa8a1161055e5156b86ccdce_prof);

    }

    // line 47
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_d2a7b1e6fba4733c6ebfa651225c4a80eb960307680e255aeabcf6cb8983050d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2a7b1e6fba4733c6ebfa651225c4a80eb960307680e255aeabcf6cb8983050d->enter($__internal_d2a7b1e6fba4733c6ebfa651225c4a80eb960307680e255aeabcf6cb8983050d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 48
        if (((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 48, $this->getSourceContext()); })()) == "single_text")) {
            // line 49
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 51
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 51, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 52
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 53
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 53, $this->getSourceContext()); })()), "date", array()), 'errors');
            // line 54
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 54, $this->getSourceContext()); })()), "time", array()), 'errors');
            // line 55
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 55, $this->getSourceContext()); })()), "date", array()), 'widget', array("datetime" => true));
            // line 56
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 56, $this->getSourceContext()); })()), "time", array()), 'widget', array("datetime" => true));
            // line 57
            echo "</div>";
        }
        
        $__internal_d2a7b1e6fba4733c6ebfa651225c4a80eb960307680e255aeabcf6cb8983050d->leave($__internal_d2a7b1e6fba4733c6ebfa651225c4a80eb960307680e255aeabcf6cb8983050d_prof);

    }

    // line 61
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_42866159375a927cc647af409aab03cc3d249d3150f6e2ebc99f58b93dd24099 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42866159375a927cc647af409aab03cc3d249d3150f6e2ebc99f58b93dd24099->enter($__internal_42866159375a927cc647af409aab03cc3d249d3150f6e2ebc99f58b93dd24099_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 62
        if (((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 62, $this->getSourceContext()); })()) == "single_text")) {
            // line 63
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 65
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 65, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 66
            if (( !array_key_exists("datetime", $context) ||  !(isset($context["datetime"]) || array_key_exists("datetime", $context) ? $context["datetime"] : (function () { throw new Twig_Error_Runtime('Variable "datetime" does not exist.', 66, $this->getSourceContext()); })()))) {
                // line 67
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 69
            echo twig_replace_filter((isset($context["date_pattern"]) || array_key_exists("date_pattern", $context) ? $context["date_pattern"] : (function () { throw new Twig_Error_Runtime('Variable "date_pattern" does not exist.', 69, $this->getSourceContext()); })()), array("{{ year }}" =>             // line 70
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 70, $this->getSourceContext()); })()), "year", array()), 'widget'), "{{ month }}" =>             // line 71
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 71, $this->getSourceContext()); })()), "month", array()), 'widget'), "{{ day }}" =>             // line 72
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 72, $this->getSourceContext()); })()), "day", array()), 'widget')));
            // line 74
            if (( !array_key_exists("datetime", $context) ||  !(isset($context["datetime"]) || array_key_exists("datetime", $context) ? $context["datetime"] : (function () { throw new Twig_Error_Runtime('Variable "datetime" does not exist.', 74, $this->getSourceContext()); })()))) {
                // line 75
                echo "</div>";
            }
        }
        
        $__internal_42866159375a927cc647af409aab03cc3d249d3150f6e2ebc99f58b93dd24099->leave($__internal_42866159375a927cc647af409aab03cc3d249d3150f6e2ebc99f58b93dd24099_prof);

    }

    // line 80
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_088fe379005da1e936158d811e443d983b029b8d9843efaa16760e77ca0a52da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_088fe379005da1e936158d811e443d983b029b8d9843efaa16760e77ca0a52da->enter($__internal_088fe379005da1e936158d811e443d983b029b8d9843efaa16760e77ca0a52da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 81
        if (((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 81, $this->getSourceContext()); })()) == "single_text")) {
            // line 82
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 84
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 84, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 85
            if (( !array_key_exists("datetime", $context) || (false == (isset($context["datetime"]) || array_key_exists("datetime", $context) ? $context["datetime"] : (function () { throw new Twig_Error_Runtime('Variable "datetime" does not exist.', 85, $this->getSourceContext()); })())))) {
                // line 86
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 88
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 88, $this->getSourceContext()); })()), "hour", array()), 'widget');
            if ((isset($context["with_minutes"]) || array_key_exists("with_minutes", $context) ? $context["with_minutes"] : (function () { throw new Twig_Error_Runtime('Variable "with_minutes" does not exist.', 88, $this->getSourceContext()); })())) {
                echo ":";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 88, $this->getSourceContext()); })()), "minute", array()), 'widget');
            }
            if ((isset($context["with_seconds"]) || array_key_exists("with_seconds", $context) ? $context["with_seconds"] : (function () { throw new Twig_Error_Runtime('Variable "with_seconds" does not exist.', 88, $this->getSourceContext()); })())) {
                echo ":";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 88, $this->getSourceContext()); })()), "second", array()), 'widget');
            }
            // line 89
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == (isset($context["datetime"]) || array_key_exists("datetime", $context) ? $context["datetime"] : (function () { throw new Twig_Error_Runtime('Variable "datetime" does not exist.', 89, $this->getSourceContext()); })())))) {
                // line 90
                echo "</div>";
            }
        }
        
        $__internal_088fe379005da1e936158d811e443d983b029b8d9843efaa16760e77ca0a52da->leave($__internal_088fe379005da1e936158d811e443d983b029b8d9843efaa16760e77ca0a52da_prof);

    }

    // line 95
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_57985dbe02963026a45dba96fc3e507f382a4794f7a7d89e65895e710a7bc814 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57985dbe02963026a45dba96fc3e507f382a4794f7a7d89e65895e710a7bc814->enter($__internal_57985dbe02963026a45dba96fc3e507f382a4794f7a7d89e65895e710a7bc814_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 96
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 96, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 97
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_57985dbe02963026a45dba96fc3e507f382a4794f7a7d89e65895e710a7bc814->leave($__internal_57985dbe02963026a45dba96fc3e507f382a4794f7a7d89e65895e710a7bc814_prof);

    }

    // line 100
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_6a959fce5a58e7e9d42f78e00527a13621b8dd1f79bfbe21320215a13b548dda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a959fce5a58e7e9d42f78e00527a13621b8dd1f79bfbe21320215a13b548dda->enter($__internal_6a959fce5a58e7e9d42f78e00527a13621b8dd1f79bfbe21320215a13b548dda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 101
        if (twig_in_filter("-inline", ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")))) {
            // line 102
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 102, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 103
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => ((twig_get_attribute($this->env, $this->getSourceContext(),                 // line 104
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 105
(isset($context["choice_translation_domain"]) || array_key_exists("choice_translation_domain", $context) ? $context["choice_translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "choice_translation_domain" does not exist.', 105, $this->getSourceContext()); })())));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 109
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 110
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 110, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 111
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => ((twig_get_attribute($this->env, $this->getSourceContext(),                 // line 112
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 113
(isset($context["choice_translation_domain"]) || array_key_exists("choice_translation_domain", $context) ? $context["choice_translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "choice_translation_domain" does not exist.', 113, $this->getSourceContext()); })())));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 116
            echo "</div>";
        }
        
        $__internal_6a959fce5a58e7e9d42f78e00527a13621b8dd1f79bfbe21320215a13b548dda->leave($__internal_6a959fce5a58e7e9d42f78e00527a13621b8dd1f79bfbe21320215a13b548dda_prof);

    }

    // line 120
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_ea7aa9f4c15142a9d4ea7ec4dd29b351748105ad2d71d3138d2189a04a22fed3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea7aa9f4c15142a9d4ea7ec4dd29b351748105ad2d71d3138d2189a04a22fed3->enter($__internal_ea7aa9f4c15142a9d4ea7ec4dd29b351748105ad2d71d3138d2189a04a22fed3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 121
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 121, $this->getSourceContext()); })()), ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : (((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 122
        if (twig_in_filter("checkbox-inline", (isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 122, $this->getSourceContext()); })()))) {
            // line 123
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 123, $this->getSourceContext()); })()), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 125
            echo "<div class=\"checkbox\">";
            // line 126
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 126, $this->getSourceContext()); })()), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 127
            echo "</div>";
        }
        
        $__internal_ea7aa9f4c15142a9d4ea7ec4dd29b351748105ad2d71d3138d2189a04a22fed3->leave($__internal_ea7aa9f4c15142a9d4ea7ec4dd29b351748105ad2d71d3138d2189a04a22fed3_prof);

    }

    // line 131
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_4c38baf16485685e33f38d325c5e7c92c52b3c984e2d196383db30b4a24b2390 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c38baf16485685e33f38d325c5e7c92c52b3c984e2d196383db30b4a24b2390->enter($__internal_4c38baf16485685e33f38d325c5e7c92c52b3c984e2d196383db30b4a24b2390_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 132
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 132, $this->getSourceContext()); })()), ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : (((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 133
        if (twig_in_filter("radio-inline", (isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 133, $this->getSourceContext()); })()))) {
            // line 134
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 134, $this->getSourceContext()); })()), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 136
            echo "<div class=\"radio\">";
            // line 137
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 137, $this->getSourceContext()); })()), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 138
            echo "</div>";
        }
        
        $__internal_4c38baf16485685e33f38d325c5e7c92c52b3c984e2d196383db30b4a24b2390->leave($__internal_4c38baf16485685e33f38d325c5e7c92c52b3c984e2d196383db30b4a24b2390_prof);

    }

    // line 144
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_5cff938d899654e5316e28046fa9b05639cdec4ebb87449e563122919e58adeb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cff938d899654e5316e28046fa9b05639cdec4ebb87449e563122919e58adeb->enter($__internal_5cff938d899654e5316e28046fa9b05639cdec4ebb87449e563122919e58adeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 145
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 145, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 146
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_5cff938d899654e5316e28046fa9b05639cdec4ebb87449e563122919e58adeb->leave($__internal_5cff938d899654e5316e28046fa9b05639cdec4ebb87449e563122919e58adeb_prof);

    }

    // line 149
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_e3a70e473c3c26c9a7d6942f0a8ab20e59847c47aad6be3f2dd97fecf81aa20b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3a70e473c3c26c9a7d6942f0a8ab20e59847c47aad6be3f2dd97fecf81aa20b->enter($__internal_e3a70e473c3c26c9a7d6942f0a8ab20e59847c47aad6be3f2dd97fecf81aa20b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 151
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 151, $this->getSourceContext()); })()), array("class" => twig_trim_filter(twig_replace_filter(((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 152
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_e3a70e473c3c26c9a7d6942f0a8ab20e59847c47aad6be3f2dd97fecf81aa20b->leave($__internal_e3a70e473c3c26c9a7d6942f0a8ab20e59847c47aad6be3f2dd97fecf81aa20b_prof);

    }

    // line 155
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_cc760af469bd167992469eab33170e2b770abacf2362415da184b5e5a372ef0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc760af469bd167992469eab33170e2b770abacf2362415da184b5e5a372ef0b->enter($__internal_cc760af469bd167992469eab33170e2b770abacf2362415da184b5e5a372ef0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 156
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 156, $this->getSourceContext()); })()), array("for" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 156, $this->getSourceContext()); })())));
        // line 158
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_cc760af469bd167992469eab33170e2b770abacf2362415da184b5e5a372ef0b->leave($__internal_cc760af469bd167992469eab33170e2b770abacf2362415da184b5e5a372ef0b_prof);

    }

    // line 161
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_ff809ecff8cf7302b4dbdd60d095d493d7ce5bdfc8be39ab5f14c5762921b0d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff809ecff8cf7302b4dbdd60d095d493d7ce5bdfc8be39ab5f14c5762921b0d8->enter($__internal_ff809ecff8cf7302b4dbdd60d095d493d7ce5bdfc8be39ab5f14c5762921b0d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 162
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 162, $this->getSourceContext()); })()), array("for" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 162, $this->getSourceContext()); })())));
        // line 164
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_ff809ecff8cf7302b4dbdd60d095d493d7ce5bdfc8be39ab5f14c5762921b0d8->leave($__internal_ff809ecff8cf7302b4dbdd60d095d493d7ce5bdfc8be39ab5f14c5762921b0d8_prof);

    }

    // line 167
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_889a36f4465adca06540a1e44a50b7013e53758e6ffd903bc1744095b5e40327 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_889a36f4465adca06540a1e44a50b7013e53758e6ffd903bc1744095b5e40327->enter($__internal_889a36f4465adca06540a1e44a50b7013e53758e6ffd903bc1744095b5e40327_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 168
        echo "    ";
        // line 169
        echo "    ";
        if (array_key_exists("widget", $context)) {
            // line 170
            echo "        ";
            if ((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new Twig_Error_Runtime('Variable "required" does not exist.', 170, $this->getSourceContext()); })())) {
                // line 171
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 171, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
                // line 172
                echo "        ";
            }
            // line 173
            echo "        ";
            if (array_key_exists("parent_label_class", $context)) {
                // line 174
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 174, $this->getSourceContext()); })()), array("class" => twig_trim_filter(((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") . (isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 174, $this->getSourceContext()); })())))));
                // line 175
                echo "        ";
            }
            // line 176
            echo "        ";
            if (( !((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 176, $this->getSourceContext()); })()) === false) && twig_test_empty((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 176, $this->getSourceContext()); })())))) {
                // line 177
                if ( !twig_test_empty((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new Twig_Error_Runtime('Variable "label_format" does not exist.', 177, $this->getSourceContext()); })()))) {
                    // line 178
                    $context["label"] = twig_replace_filter((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new Twig_Error_Runtime('Variable "label_format" does not exist.', 178, $this->getSourceContext()); })()), array("%name%" =>                     // line 179
(isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 179, $this->getSourceContext()); })()), "%id%" =>                     // line 180
(isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 180, $this->getSourceContext()); })())));
                } else {
                    // line 183
                    $context["label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->humanize((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 183, $this->getSourceContext()); })()));
                }
            }
            // line 186
            echo "        <label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 186, $this->getSourceContext()); })()));
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
            // line 187
            echo (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 187, $this->getSourceContext()); })());
            echo " ";
            echo twig_escape_filter($this->env, (( !((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 187, $this->getSourceContext()); })()) === false)) ? (((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 187, $this->getSourceContext()); })()) === false)) ? ((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 187, $this->getSourceContext()); })())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 187, $this->getSourceContext()); })()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 187, $this->getSourceContext()); })()))))) : ("")), "html", null, true);
            // line 188
            echo "</label>
    ";
        }
        
        $__internal_889a36f4465adca06540a1e44a50b7013e53758e6ffd903bc1744095b5e40327->leave($__internal_889a36f4465adca06540a1e44a50b7013e53758e6ffd903bc1744095b5e40327_prof);

    }

    // line 194
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_fd49e3cb2ee3c4187e83dad8c840a5450a39eb65f06d0a2ebe9d2b58149fc49f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd49e3cb2ee3c4187e83dad8c840a5450a39eb65f06d0a2ebe9d2b58149fc49f->enter($__internal_fd49e3cb2ee3c4187e83dad8c840a5450a39eb65f06d0a2ebe9d2b58149fc49f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 195
        echo "<div class=\"form-group";
        if ((( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 195, $this->getSourceContext()); })()) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) || array_key_exists("force_error", $context) ? $context["force_error"] : (function () { throw new Twig_Error_Runtime('Variable "force_error" does not exist.', 195, $this->getSourceContext()); })()), false)) : (false))) &&  !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 195, $this->getSourceContext()); })()))) {
            echo " has-error";
        }
        echo "\">";
        // line 196
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 196, $this->getSourceContext()); })()), 'label');
        // line 197
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 197, $this->getSourceContext()); })()), 'widget');
        // line 198
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 198, $this->getSourceContext()); })()), 'errors');
        // line 199
        echo "</div>";
        
        $__internal_fd49e3cb2ee3c4187e83dad8c840a5450a39eb65f06d0a2ebe9d2b58149fc49f->leave($__internal_fd49e3cb2ee3c4187e83dad8c840a5450a39eb65f06d0a2ebe9d2b58149fc49f_prof);

    }

    // line 202
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_55a90d37523227b149b399532c12d7602d6a5adc1374c8bff1ff04eefd3494f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55a90d37523227b149b399532c12d7602d6a5adc1374c8bff1ff04eefd3494f1->enter($__internal_55a90d37523227b149b399532c12d7602d6a5adc1374c8bff1ff04eefd3494f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 203
        echo "<div class=\"form-group\">";
        // line 204
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 204, $this->getSourceContext()); })()), 'widget');
        // line 205
        echo "</div>";
        
        $__internal_55a90d37523227b149b399532c12d7602d6a5adc1374c8bff1ff04eefd3494f1->leave($__internal_55a90d37523227b149b399532c12d7602d6a5adc1374c8bff1ff04eefd3494f1_prof);

    }

    // line 208
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_8cf77a9844866542a623dc35e34b85e36d200b4b357b1e69ac47f4a0faa0c124 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cf77a9844866542a623dc35e34b85e36d200b4b357b1e69ac47f4a0faa0c124->enter($__internal_8cf77a9844866542a623dc35e34b85e36d200b4b357b1e69ac47f4a0faa0c124_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 209
        $context["force_error"] = true;
        // line 210
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_8cf77a9844866542a623dc35e34b85e36d200b4b357b1e69ac47f4a0faa0c124->leave($__internal_8cf77a9844866542a623dc35e34b85e36d200b4b357b1e69ac47f4a0faa0c124_prof);

    }

    // line 213
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_fa0f1ebb04c9df2ee05707542f64b84bbbebf6a1405a23b6d49e183ac5977d3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa0f1ebb04c9df2ee05707542f64b84bbbebf6a1405a23b6d49e183ac5977d3f->enter($__internal_fa0f1ebb04c9df2ee05707542f64b84bbbebf6a1405a23b6d49e183ac5977d3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 214
        $context["force_error"] = true;
        // line 215
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_fa0f1ebb04c9df2ee05707542f64b84bbbebf6a1405a23b6d49e183ac5977d3f->leave($__internal_fa0f1ebb04c9df2ee05707542f64b84bbbebf6a1405a23b6d49e183ac5977d3f_prof);

    }

    // line 218
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_751e032bd60644b1aca3bc6b543042d870ad2dbc1f2793540f789f7f8be02005 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_751e032bd60644b1aca3bc6b543042d870ad2dbc1f2793540f789f7f8be02005->enter($__internal_751e032bd60644b1aca3bc6b543042d870ad2dbc1f2793540f789f7f8be02005_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 219
        $context["force_error"] = true;
        // line 220
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_751e032bd60644b1aca3bc6b543042d870ad2dbc1f2793540f789f7f8be02005->leave($__internal_751e032bd60644b1aca3bc6b543042d870ad2dbc1f2793540f789f7f8be02005_prof);

    }

    // line 223
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_1f58847832c97ef6d7c527f54baaec94d84c4932adf3c8d30e147177130f4bc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f58847832c97ef6d7c527f54baaec94d84c4932adf3c8d30e147177130f4bc8->enter($__internal_1f58847832c97ef6d7c527f54baaec94d84c4932adf3c8d30e147177130f4bc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 224
        $context["force_error"] = true;
        // line 225
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_1f58847832c97ef6d7c527f54baaec94d84c4932adf3c8d30e147177130f4bc8->leave($__internal_1f58847832c97ef6d7c527f54baaec94d84c4932adf3c8d30e147177130f4bc8_prof);

    }

    // line 228
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_84f0ddc3956e04d3db1541df61c0bf474048409a0ff68468cc2f5691c5f64523 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84f0ddc3956e04d3db1541df61c0bf474048409a0ff68468cc2f5691c5f64523->enter($__internal_84f0ddc3956e04d3db1541df61c0bf474048409a0ff68468cc2f5691c5f64523_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 229
        echo "<div class=\"form-group";
        if ( !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 229, $this->getSourceContext()); })())) {
            echo " has-error";
        }
        echo "\">";
        // line 230
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 230, $this->getSourceContext()); })()), 'widget');
        // line 231
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 231, $this->getSourceContext()); })()), 'errors');
        // line 232
        echo "</div>";
        
        $__internal_84f0ddc3956e04d3db1541df61c0bf474048409a0ff68468cc2f5691c5f64523->leave($__internal_84f0ddc3956e04d3db1541df61c0bf474048409a0ff68468cc2f5691c5f64523_prof);

    }

    // line 235
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_5f314d4b2a11cbca6a2b5711456f4e106bf1c241561f61287578b74824b21832 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f314d4b2a11cbca6a2b5711456f4e106bf1c241561f61287578b74824b21832->enter($__internal_5f314d4b2a11cbca6a2b5711456f4e106bf1c241561f61287578b74824b21832_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 236
        echo "<div class=\"form-group";
        if ( !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 236, $this->getSourceContext()); })())) {
            echo " has-error";
        }
        echo "\">";
        // line 237
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 237, $this->getSourceContext()); })()), 'widget');
        // line 238
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 238, $this->getSourceContext()); })()), 'errors');
        // line 239
        echo "</div>";
        
        $__internal_5f314d4b2a11cbca6a2b5711456f4e106bf1c241561f61287578b74824b21832->leave($__internal_5f314d4b2a11cbca6a2b5711456f4e106bf1c241561f61287578b74824b21832_prof);

    }

    // line 244
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_c06eab37d4b58ff4837ebca316fd98ebcfd0d3fb394ec3e08ffb6fc8bf26b21a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c06eab37d4b58ff4837ebca316fd98ebcfd0d3fb394ec3e08ffb6fc8bf26b21a->enter($__internal_c06eab37d4b58ff4837ebca316fd98ebcfd0d3fb394ec3e08ffb6fc8bf26b21a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 245
        if ((twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 245, $this->getSourceContext()); })())) > 0)) {
            // line 246
            if ( !$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->isRootForm((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 246, $this->getSourceContext()); })()))) {
                echo "<span class=\"help-block\">";
            } else {
                echo "<div class=\"alert alert-danger\">";
            }
            // line 247
            echo "    <ul class=\"list-unstyled\">";
            // line 248
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 248, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 249
                echo "<li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 251
            echo "</ul>
    ";
            // line 252
            if ( !$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->isRootForm((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 252, $this->getSourceContext()); })()))) {
                echo "</span>";
            } else {
                echo "</div>";
            }
        }
        
        $__internal_c06eab37d4b58ff4837ebca316fd98ebcfd0d3fb394ec3e08ffb6fc8bf26b21a->leave($__internal_c06eab37d4b58ff4837ebca316fd98ebcfd0d3fb394ec3e08ffb6fc8bf26b21a_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  851 => 252,  848 => 251,  840 => 249,  836 => 248,  834 => 247,  828 => 246,  826 => 245,  820 => 244,  813 => 239,  811 => 238,  809 => 237,  803 => 236,  797 => 235,  790 => 232,  788 => 231,  786 => 230,  780 => 229,  774 => 228,  767 => 225,  765 => 224,  759 => 223,  752 => 220,  750 => 219,  744 => 218,  737 => 215,  735 => 214,  729 => 213,  722 => 210,  720 => 209,  714 => 208,  707 => 205,  705 => 204,  703 => 203,  697 => 202,  690 => 199,  688 => 198,  686 => 197,  684 => 196,  678 => 195,  672 => 194,  663 => 188,  659 => 187,  644 => 186,  640 => 183,  637 => 180,  636 => 179,  635 => 178,  633 => 177,  630 => 176,  627 => 175,  624 => 174,  621 => 173,  618 => 172,  615 => 171,  612 => 170,  609 => 169,  607 => 168,  601 => 167,  594 => 164,  592 => 162,  586 => 161,  579 => 158,  577 => 156,  571 => 155,  564 => 152,  562 => 151,  556 => 149,  549 => 146,  547 => 145,  541 => 144,  533 => 138,  531 => 137,  529 => 136,  526 => 134,  524 => 133,  522 => 132,  516 => 131,  508 => 127,  506 => 126,  504 => 125,  501 => 123,  499 => 122,  497 => 121,  491 => 120,  483 => 116,  477 => 113,  476 => 112,  475 => 111,  471 => 110,  467 => 109,  460 => 105,  459 => 104,  458 => 103,  454 => 102,  452 => 101,  446 => 100,  439 => 97,  437 => 96,  431 => 95,  422 => 90,  419 => 89,  409 => 88,  404 => 86,  402 => 85,  400 => 84,  397 => 82,  395 => 81,  389 => 80,  380 => 75,  378 => 74,  376 => 72,  375 => 71,  374 => 70,  373 => 69,  368 => 67,  366 => 66,  364 => 65,  361 => 63,  359 => 62,  353 => 61,  345 => 57,  343 => 56,  341 => 55,  339 => 54,  337 => 53,  333 => 52,  331 => 51,  328 => 49,  326 => 48,  320 => 47,  312 => 43,  310 => 42,  308 => 41,  302 => 40,  294 => 36,  290 => 34,  284 => 32,  282 => 31,  280 => 30,  274 => 28,  272 => 27,  269 => 26,  266 => 25,  263 => 24,  261 => 23,  255 => 22,  248 => 19,  246 => 18,  240 => 17,  233 => 14,  231 => 13,  225 => 12,  218 => 9,  215 => 7,  213 => 6,  207 => 5,  200 => 244,  197 => 243,  194 => 241,  192 => 235,  189 => 234,  187 => 228,  184 => 227,  182 => 223,  179 => 222,  177 => 218,  174 => 217,  172 => 213,  169 => 212,  167 => 208,  164 => 207,  162 => 202,  159 => 201,  157 => 194,  154 => 193,  151 => 191,  149 => 167,  146 => 166,  144 => 161,  141 => 160,  139 => 155,  136 => 154,  134 => 149,  131 => 148,  129 => 144,  126 => 143,  123 => 141,  121 => 131,  118 => 130,  116 => 120,  113 => 119,  111 => 100,  108 => 99,  106 => 95,  103 => 94,  101 => 80,  98 => 79,  96 => 61,  93 => 60,  91 => 47,  88 => 46,  86 => 40,  83 => 39,  81 => 22,  78 => 21,  76 => 17,  73 => 16,  71 => 12,  68 => 11,  66 => 5,  63 => 4,  60 => 2,  14 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"form_div_layout.html.twig\" %}

{# Widgets #}

{% block form_widget_simple -%}
    {% if type is not defined or type not in ['file', 'hidden'] %}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) -%}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{% block textarea_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock textarea_widget %}

{% block button_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('btn-default') ~ ' btn')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block money_widget -%}
    {% set prepend = not (money_pattern starts with '{{') %}
    {% set append = not (money_pattern ends with '}}') %}
    {% if prepend or append %}
        <div class=\"input-group\">
            {% if prepend %}
                <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
            {% endif %}
            {{- block('form_widget_simple') -}}
            {% if append %}
                <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
            {% endif %}
        </div>
    {% else %}
        {{- block('form_widget_simple') -}}
    {% endif %}
{%- endblock money_widget %}

{% block percent_widget -%}
    <div class=\"input-group\">
        {{- block('form_widget_simple') -}}
        <span class=\"input-group-addon\">%</span>
    </div>
{%- endblock percent_widget %}

{% block datetime_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form.date) -}}
            {{- form_errors(form.time) -}}
            {{- form_widget(form.date, { datetime: true } ) -}}
            {{- form_widget(form.time, { datetime: true } ) -}}
        </div>
    {%- endif %}
{%- endblock datetime_widget %}

{% block date_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or not datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif %}
            {{- date_pattern|replace({
                '{{ year }}': form_widget(form.year),
                '{{ month }}': form_widget(form.month),
                '{{ day }}': form_widget(form.day),
            })|raw -}}
        {% if datetime is not defined or not datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock date_widget %}

{% block time_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or false == datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif -%}
        {{- form_widget(form.hour) }}{% if with_minutes %}:{{ form_widget(form.minute) }}{% endif %}{% if with_seconds %}:{{ form_widget(form.second) }}{% endif %}
        {% if datetime is not defined or false == datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock time_widget %}

{% block choice_widget_collapsed -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block choice_widget_expanded -%}
    {% if '-inline' in label_attr.class|default('') -%}
        {%- for child in form %}
            {{- form_widget(child, {
                parent_label_class: label_attr.class|default(''),
                translation_domain: choice_translation_domain,
            }) -}}
        {% endfor -%}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {%- for child in form %}
                {{- form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                    translation_domain: choice_translation_domain,
                }) -}}
            {% endfor -%}
        </div>
    {%- endif %}
{%- endblock choice_widget_expanded %}

{% block checkbox_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'checkbox-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"checkbox\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'radio-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"radio\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock radio_widget %}

{# Labels #}

{% block form_label -%}
    {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' control-label')|trim}) -%}
    {{- parent() -}}
{%- endblock form_label %}

{% block choice_label -%}
    {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}
    {%- set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) -%}
    {{- block('form_label') -}}
{% endblock %}

{% block checkbox_label -%}
    {%- set label_attr = label_attr|merge({'for': id}) -%}

    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {%- set label_attr = label_attr|merge({'for': id}) -%}

    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{% block checkbox_radio_label %}
    {# Do not display the label if widget is not defined in order to prevent double label rendering #}
    {% if widget is defined %}
        {% if required %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) %}
        {% endif %}
        {% if parent_label_class is defined %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ parent_label_class)|trim}) %}
        {% endif %}
        {% if label is not same as(false) and label is empty %}
            {%- if label_format is not empty -%}
                {% set label = label_format|replace({
                    '%name%': name,
                    '%id%': id,
                }) %}
            {%- else -%}
                {% set label = name|humanize %}
            {%- endif -%}
        {% endif %}
        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
            {{- widget|raw }} {{ label is not same as(false) ? (translation_domain is same as(false) ? label : label|trans({}, translation_domain)) -}}
        </label>
    {% endif %}
{% endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock form_row %}

{% block button_row -%}
    <div class=\"form-group\">
        {{- form_widget(form) -}}
    </div>
{%- endblock button_row %}

{% block choice_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock choice_row %}

{% block date_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock date_row %}

{% block time_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock time_row %}

{% block datetime_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock datetime_row %}

{% block checkbox_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock checkbox_row %}

{% block radio_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock radio_row %}

{# Errors #}

{% block form_errors -%}
    {% if errors|length > 0 -%}
    {% if form is not rootform %}<span class=\"help-block\">{% else %}<div class=\"alert alert-danger\">{% endif %}
    <ul class=\"list-unstyled\">
        {%- for error in errors -%}
            <li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> {{ error.message }}</li>
        {%- endfor -%}
    </ul>
    {% if form is not rootform %}</span>{% else %}</div>{% endif %}
    {%- endif %}
{%- endblock form_errors %}
", "bootstrap_3_layout.html.twig", "/home/kuba/Workspace/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/bootstrap_3_layout.html.twig");
    }
}
