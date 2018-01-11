<?php

/* SonataAdminBundle:Form:form_admin_fields.html.twig */
class __TwigTemplate_447e630f2c99bbccae8f08cf5c64200d2e5e1f5edb541b2d1fca7819e3c16146 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_form_errors($context, array $blocks = array())
    {
        // line 15
        if ((twig_length_filter($this->env, ($context["errors"] ?? null)) > 0)) {
            // line 16
            echo "        ";
            if ( !twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "parent", array())) {
                echo "<div class=\"alert alert-danger\">";
            }
            // line 17
            echo "            <ul class=\"list-unstyled\">
                ";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? null));
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
            if ( !twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "parent", array())) {
                echo "</div>";
            }
            // line 23
            echo "    ";
        }
    }

    // line 26
    public function block_sonata_help($context, array $blocks = array())
    {
        // line 27
        ob_start();
        // line 28
        if ((array_key_exists("sonata_help", $context) && ($context["sonata_help"] ?? null))) {
            // line 29
            echo "    <span class=\"help-block sonata-ba-field-widget-help\">";
            echo ($context["sonata_help"] ?? null);
            echo "</span>
";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 34
    public function block_form_widget($context, array $blocks = array())
    {
        // line 35
        $this->displayParentBlock("form_widget", $context, $blocks);
        echo "
    ";
        // line 36
        $this->displayBlock("sonata_help", $context, $blocks);
    }

    // line 39
    public function block_form_widget_simple($context, array $blocks = array())
    {
        // line 40
        echo "    ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? null), "text")) : ("text"));
        // line 41
        echo "    ";
        if ((($context["type"] ?? null) != "file")) {
            // line 42
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => (((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control")));
            // line 43
            echo "    ";
        }
        // line 44
        echo "    ";
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        echo "
";
    }

    // line 47
    public function block_textarea_widget($context, array $blocks = array())
    {
        // line 48
        echo "    ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => (((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control")));
        // line 49
        echo "    ";
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        echo "
";
    }

    // line 52
    public function block_money_widget($context, array $blocks = array())
    {
        // line 53
        if ((($context["money_pattern"] ?? null) == "{{ widget }}")) {
            // line 54
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 56
            echo "        ";
            $context["currencySymbol"] = twig_trim_filter(twig_replace_filter(($context["money_pattern"] ?? null), array("{{ widget }}" => "")));
            // line 57
            echo "        ";
            if (preg_match("/^{{ widget }}/", ($context["money_pattern"] ?? null))) {
                // line 58
                echo "            <div class=\"input-group\">";
                // line 59
                $this->displayBlock("form_widget_simple", $context, $blocks);
                // line 60
                echo "<span class=\"input-group-addon\">";
                echo twig_escape_filter($this->env, ($context["currencySymbol"] ?? null), "html", null, true);
                echo "</span>
            </div>
        ";
            } elseif (preg_match("/{{ widget }}\$/",             // line 62
($context["money_pattern"] ?? null))) {
                // line 63
                echo "            <div class=\"input-group\">
                <span class=\"input-group-addon\">";
                // line 64
                echo twig_escape_filter($this->env, ($context["currencySymbol"] ?? null), "html", null, true);
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
    }

    // line 71
    public function block_percent_widget($context, array $blocks = array())
    {
        // line 72
        echo "    ";
        ob_start();
        // line 73
        echo "        ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? null), "text")) : ("text"));
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
    }

    // line 81
    public function block_checkbox_widget($context, array $blocks = array())
    {
        // line 82
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? null), "")) : (""));
        // line 83
        if (twig_in_filter("checkbox-inline", ($context["parent_label_class"] ?? null))) {
            // line 84
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 86
            echo "<div class=\"checkbox\">";
            // line 87
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 88
            echo "</div>";
        }
    }

    // line 92
    public function block_radio_widget($context, array $blocks = array())
    {
        // line 93
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? null), "")) : (""));
        // line 94
        if (twig_in_filter("radio-inline", ($context["parent_label_class"] ?? null))) {
            // line 95
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 97
            echo "<div class=\"radio\">";
            // line 98
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 99
            echo "</div>";
        }
    }

    // line 104
    public function block_form_label($context, array $blocks = array())
    {
        // line 105
        ob_start();
        // line 106
        echo "    ";
        if (( !(($context["label"] ?? null) === false) && (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["sonata_admin"] ?? null), "options", array()), "form_type", array(), "array") == "horizontal"))) {
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
        $context["label_class"] = (((array_key_exists("label_class", $context)) ? (_twig_default_filter(($context["label_class"] ?? null), "")) : ("")) . " control-label");
        // line 111
        echo "
    ";
        // line 112
        if ( !(($context["label"] ?? null) === false)) {
            // line 113
            echo "        ";
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), array("class" => ((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") . ($context["label_class"] ?? null))));
            // line 114
            echo "
        ";
            // line 115
            if ( !($context["compound"] ?? null)) {
                // line 116
                echo "            ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), array("for" => ($context["id"] ?? null)));
                // line 117
                echo "        ";
            }
            // line 118
            echo "        ";
            if (($context["required"] ?? null)) {
                // line 119
                echo "            ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
                // line 120
                echo "        ";
            }
            // line 121
            echo "
        ";
            // line 122
            if (twig_test_empty(($context["label"] ?? null))) {
                // line 123
                if ((array_key_exists("label_format", $context) &&  !twig_test_empty(($context["label_format"] ?? null)))) {
                    // line 124
                    $context["label"] = twig_replace_filter(($context["label_format"] ?? null), array("%name%" =>                     // line 125
($context["name"] ?? null), "%id%" =>                     // line 126
($context["id"] ?? null)));
                } else {
                    // line 129
                    $context["label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->humanize(($context["name"] ?? null));
                }
            }
            // line 132
            echo "
        <label";
            // line 133
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["label_attr"] ?? null));
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
            if ((($context["translation_domain"] ?? null) === false)) {
                // line 135
                echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
            } elseif ( !twig_get_attribute($this->env, $this->getSourceContext(),             // line 136
($context["sonata_admin"] ?? null), "admin", array())) {
                // line 137
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? null), array(), ($context["translation_domain"] ?? null)), "html", null, true);
            } else {
                // line 139
                echo "                ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? null), array(), ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["sonata_admin"] ?? null), "field_description", array()), "translationDomain", array())) ? (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["sonata_admin"] ?? null), "field_description", array()), "translationDomain", array())) : (twig_get_attribute($this->env, $this->getSourceContext(), ($context["admin"] ?? null), "translationDomain", array())))), "html", null, true);
                echo "
            ";
            }
            // line 141
            echo "        </label>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 146
    public function block_checkbox_label($context, array $blocks = array())
    {
        // line 147
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
    }

    // line 150
    public function block_radio_label($context, array $blocks = array())
    {
        // line 151
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
    }

    // line 154
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        // line 155
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["sonata_admin"] ?? null), "admin", array())) {
            // line 156
            echo "        ";
            $context["translation_domain"] = twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["sonata_admin"] ?? null), "field_description", array()), "translationDomain", array());
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
            if (($context["required"] ?? null)) {
                // line 161
                echo "            ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
                // line 162
                echo "        ";
            }
            // line 163
            echo "        ";
            if (array_key_exists("parent_label_class", $context)) {
                // line 164
                echo "            ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), array("class" => twig_trim_filter(((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") . ($context["parent_label_class"] ?? null)))));
                // line 165
                echo "        ";
            }
            // line 166
            echo "        ";
            if (( !(($context["label"] ?? null) === false) && twig_test_empty(($context["label"] ?? null)))) {
                // line 167
                echo "            ";
                $context["label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->humanize(($context["name"] ?? null));
                // line 168
                echo "        ";
            }
            // line 169
            echo "        <label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["label_attr"] ?? null));
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
            echo ($context["widget"] ?? null);
            // line 171
            if ( !(($context["label"] ?? null) === false)) {
                // line 172
                echo "<span class=\"control-label__text\">
                    ";
                // line 173
                if ((($context["translation_domain"] ?? null) === false)) {
                    // line 174
                    echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
                } else {
                    // line 176
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? null), array(), ($context["translation_domain"] ?? null)), "html", null, true);
                }
                // line 178
                echo "</span>";
            }
            // line 180
            echo "</label>
    ";
        }
    }

    // line 184
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        // line 185
        ob_start();
        // line 186
        echo "    ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => (((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " list-unstyled")));
        // line 187
        echo "    <ul ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
    ";
        // line 188
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 189
            echo "        <li>
            ";
            // line 190
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'widget', array("horizontal" => false, "horizontal_input_wrapper_class" => "", "translation_domain" =>             // line 193
($context["choice_translation_domain"] ?? null)));
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
    }

    // line 201
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        // line 202
        ob_start();
        // line 203
        echo "    ";
        if (((($context["required"] ?? null) && array_key_exists("placeholder", $context)) && (null === ($context["placeholder"] ?? null)))) {
            // line 204
            echo "        ";
            $context["required"] = false;
            // line 205
            echo "    ";
        } elseif ((((((($context["required"] ?? null) && array_key_exists("empty_value", $context)) && array_key_exists("empty_value_in_choices", $context)) && (null === ($context["empty_value"] ?? null))) &&  !($context["empty_value_in_choices"] ?? null)) &&  !($context["multiple"] ?? null))) {
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
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => (((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control")));
        // line 210
        echo "    ";
        if (((array_key_exists("sortable", $context) && ($context["sortable"] ?? null)) && ($context["multiple"] ?? null))) {
            // line 211
            echo "        ";
            $this->displayBlock("sonata_type_choice_multiple_sortable", $context, $blocks);
            echo "
    ";
        } else {
            // line 213
            echo "        <select ";
            $this->displayBlock("widget_attributes", $context, $blocks);
            if (($context["multiple"] ?? null)) {
                echo " multiple=\"multiple\"";
            }
            echo " >
            ";
            // line 214
            if ((array_key_exists("empty_value", $context) &&  !(null === ($context["empty_value"] ?? null)))) {
                // line 215
                echo "                <option value=\"\"";
                if ((($context["required"] ?? null) && twig_test_empty(($context["value"] ?? null)))) {
                    echo " selected=\"selected\"";
                }
                echo ">
                    ";
                // line 216
                if ((($context["empty_value"] ?? null) != "")) {
                    // line 217
                    echo "                        ";
                    if ( !twig_get_attribute($this->env, $this->getSourceContext(), ($context["sonata_admin"] ?? null), "admin", array())) {
                        // line 218
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["empty_value"] ?? null), array(), ($context["translation_domain"] ?? null)), "html", null, true);
                    } else {
                        // line 220
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["empty_value"] ?? null), array(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["sonata_admin"] ?? null), "field_description", array()), "translationDomain", array())), "html", null, true);
                    }
                    // line 222
                    echo "                    ";
                }
                // line 223
                echo "                </option>
            ";
            } elseif ((            // line 224
array_key_exists("placeholder", $context) &&  !(null === ($context["placeholder"] ?? null)))) {
                // line 225
                echo "                <option value=\"\"";
                if ((($context["required"] ?? null) && twig_test_empty(($context["value"] ?? null)))) {
                    echo " selected=\"selected\"";
                }
                echo ">
                    ";
                // line 226
                if ((($context["placeholder"] ?? null) != "")) {
                    // line 227
                    echo "                        ";
                    if ( !twig_get_attribute($this->env, $this->getSourceContext(), ($context["sonata_admin"] ?? null), "admin", array())) {
                        // line 228
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["placeholder"] ?? null), array(), ($context["translation_domain"] ?? null)), "html", null, true);
                    } else {
                        // line 230
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["placeholder"] ?? null), array(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["sonata_admin"] ?? null), "field_description", array()), "translationDomain", array())), "html", null, true);
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
            if ((twig_length_filter($this->env, ($context["preferred_choices"] ?? null)) > 0)) {
                // line 236
                echo "                ";
                $context["options"] = ($context["preferred_choices"] ?? null);
                // line 237
                echo "                ";
                $this->displayBlock("choice_widget_options", $context, $blocks);
                echo "
                ";
                // line 238
                if ((twig_length_filter($this->env, ($context["choices"] ?? null)) > 0)) {
                    // line 239
                    echo "                    <option disabled=\"disabled\">";
                    echo twig_escape_filter($this->env, ($context["separator"] ?? null), "html", null, true);
                    echo "</option>
                ";
                }
                // line 241
                echo "            ";
            }
            // line 242
            echo "            ";
            $context["options"] = ($context["choices"] ?? null);
            // line 243
            echo "            ";
            $this->displayBlock("choice_widget_options", $context, $blocks);
            echo "
        </select>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 249
    public function block_date_widget($context, array $blocks = array())
    {
        // line 250
        ob_start();
        // line 251
        echo "    ";
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 252
            echo "        ";
            $this->displayBlock("form_widget_simple", $context, $blocks);
            echo "
    ";
        } else {
            // line 254
            echo "        ";
            if (( !array_key_exists("row", $context) || (($context["row"] ?? null) == true))) {
                // line 255
                echo "            ";
                $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => (((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " row")));
                // line 256
                echo "        ";
            }
            // line 257
            echo "        ";
            $context["input_wrapper_class"] = ((array_key_exists("input_wrapper_class", $context)) ? (_twig_default_filter(($context["input_wrapper_class"] ?? null), "col-sm-4")) : ("col-sm-4"));
            // line 258
            echo "        <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 259
            echo twig_replace_filter(($context["date_pattern"] ?? null), array("{{ year }}" => (((("<div class=\"" .             // line 260
($context["input_wrapper_class"] ?? null)) . "\">") . $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "year", array()), 'widget')) . "</div>"), "{{ month }}" => (((("<div class=\"" .             // line 261
($context["input_wrapper_class"] ?? null)) . "\">") . $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "month", array()), 'widget')) . "</div>"), "{{ day }}" => (((("<div class=\"" .             // line 262
($context["input_wrapper_class"] ?? null)) . "\">") . $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "day", array()), 'widget')) . "</div>")));
            // line 263
            echo "
        </div>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 269
    public function block_time_widget($context, array $blocks = array())
    {
        // line 270
        ob_start();
        // line 271
        echo "    ";
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 272
            echo "        ";
            $this->displayBlock("form_widget_simple", $context, $blocks);
            echo "
    ";
        } else {
            // line 274
            echo "        ";
            if (( !array_key_exists("row", $context) || (($context["row"] ?? null) == true))) {
                // line 275
                echo "            ";
                $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => (((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " row")));
                // line 276
                echo "        ";
            }
            // line 277
            echo "        ";
            $context["input_wrapper_class"] = ((array_key_exists("input_wrapper_class", $context)) ? (_twig_default_filter(($context["input_wrapper_class"] ?? null), "col-sm-6")) : ("col-sm-6"));
            // line 278
            echo "        <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            <div class=\"";
            // line 279
            echo twig_escape_filter($this->env, ($context["input_wrapper_class"] ?? null), "html", null, true);
            echo "\">
                ";
            // line 280
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "hour", array()), 'widget');
            echo "
            </div>
            ";
            // line 282
            if (($context["with_minutes"] ?? null)) {
                // line 283
                echo "                <div class=\"";
                echo twig_escape_filter($this->env, ($context["input_wrapper_class"] ?? null), "html", null, true);
                echo "\">
                    ";
                // line 284
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "minute", array()), 'widget');
                echo "
                </div>
            ";
            }
            // line 287
            echo "            ";
            if (($context["with_seconds"] ?? null)) {
                // line 288
                echo "                <div class=\"";
                echo twig_escape_filter($this->env, ($context["input_wrapper_class"] ?? null), "html", null, true);
                echo "\">
                    ";
                // line 289
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "second", array()), 'widget');
                echo "
                </div>
            ";
            }
            // line 292
            echo "        </div>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 297
    public function block_datetime_widget($context, array $blocks = array())
    {
        // line 298
        ob_start();
        // line 299
        echo "    ";
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 300
            echo "        ";
            $this->displayBlock("form_widget_simple", $context, $blocks);
            echo "
    ";
        } else {
            // line 302
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => (((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " row")));
            // line 303
            echo "        <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 304
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "date", array()), 'errors');
            echo "
            ";
            // line 305
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "time", array()), 'errors');
            echo "

            ";
            // line 307
            if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "date", array()), "vars", array()), "widget", array()) == "single_text")) {
                // line 308
                echo "                <div class=\"col-sm-2\">
                    ";
                // line 309
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "date", array()), 'widget');
                echo "
                </div>
            ";
            } else {
                // line 312
                echo "                ";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "date", array()), 'widget', array("row" => false, "input_wrapper_class" => "col-sm-2"));
                echo "
            ";
            }
            // line 314
            echo "
            ";
            // line 315
            if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "time", array()), "vars", array()), "widget", array()) == "single_text")) {
                // line 316
                echo "                <div class=\"col-sm-2\">
                    ";
                // line 317
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "time", array()), 'widget');
                echo "
                </div>
            ";
            } else {
                // line 320
                echo "                ";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "time", array()), 'widget', array("row" => false, "input_wrapper_class" => "col-sm-2"));
                echo "
            ";
            }
            // line 322
            echo "        </div>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 327
    public function block_form_row($context, array $blocks = array())
    {
        // line 328
        echo "    ";
        $context["show_label"] = ((array_key_exists("show_label", $context)) ? (_twig_default_filter(($context["show_label"] ?? null), true)) : (true));
        // line 329
        echo "    <div class=\"form-group";
        if ((twig_length_filter($this->env, ($context["errors"] ?? null)) > 0)) {
            echo " has-error";
        }
        echo "\" id=\"sonata-ba-field-container-";
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\">
        ";
        // line 330
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["sonata_admin"] ?? null), "field_description", array(), "any", false, true), "options", array(), "any", true, true)) {
            // line 331
            echo "            ";
            $context["label"] = ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["sonata_admin"] ?? null), "field_description", array(), "any", false, true), "options", array(), "any", false, true), "name", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["sonata_admin"] ?? null), "field_description", array(), "any", false, true), "options", array(), "any", false, true), "name", array()), ($context["label"] ?? null))) : (($context["label"] ?? null)));
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
        if ((($context["label"] ?? null) === false)) {
            // line 337
            echo "            ";
            $context["div_class"] = (($context["div_class"] ?? null) . " sonata-collection-row-without-label");
            // line 338
            echo "        ";
        }
        // line 339
        echo "
        ";
        // line 340
        if ((array_key_exists("sonata_admin", $context) && (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["sonata_admin"] ?? null), "options", array()), "form_type", array(), "array") == "horizontal"))) {
            // line 341
            echo "            ";
            // line 342
            echo "            ";
            if (((($context["label"] ?? null) === false) || twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "vars", array(), "any", false, true), "checked", array(), "any", true, true))) {
                // line 343
                echo "                ";
                if (twig_in_filter("collection", twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "parent", array()), "vars", array()), "block_prefixes", array()))) {
                    // line 344
                    echo "                    ";
                    $context["div_class"] = (($context["div_class"] ?? null) . " col-sm-12");
                    // line 345
                    echo "                ";
                } else {
                    // line 346
                    echo "                    ";
                    $context["div_class"] = (($context["div_class"] ?? null) . " col-sm-9 col-sm-offset-3");
                    // line 347
                    echo "                ";
                }
                // line 348
                echo "            ";
            } else {
                // line 349
                echo "                ";
                $context["div_class"] = (($context["div_class"] ?? null) . " col-sm-9");
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
        if (($context["show_label"] ?? null)) {
            // line 354
            echo "            ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'label', (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter(($context["label"] ?? null), null)) : (null))) ? array() : array("label" => $_label_)));
            echo "
        ";
        }
        // line 356
        echo "
        ";
        // line 357
        if ((array_key_exists("sonata_admin", $context) && ($context["sonata_admin_enabled"] ?? null))) {
            // line 358
            echo "            ";
            $context["div_class"] = ((((($context["div_class"] ?? null) . " sonata-ba-field-") . twig_get_attribute($this->env, $this->getSourceContext(), ($context["sonata_admin"] ?? null), "edit", array())) . "-") . twig_get_attribute($this->env, $this->getSourceContext(), ($context["sonata_admin"] ?? null), "inline", array()));
            // line 359
            echo "        ";
        }
        // line 360
        echo "
        ";
        // line 361
        if ((twig_length_filter($this->env, ($context["errors"] ?? null)) > 0)) {
            // line 362
            echo "            ";
            $context["div_class"] = (($context["div_class"] ?? null) . " sonata-ba-field-error");
            // line 363
            echo "        ";
        }
        // line 364
        echo "
        <div class=\"";
        // line 365
        echo twig_escape_filter($this->env, ($context["div_class"] ?? null), "html", null, true);
        echo "\">
            ";
        // line 366
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'widget', array("horizontal" => false, "horizontal_input_wrapper_class" => ""));
        echo " ";
        // line 367
        echo "
            ";
        // line 368
        if ((twig_length_filter($this->env, ($context["errors"] ?? null)) > 0)) {
            // line 369
            echo "                <div class=\"help-block sonata-ba-field-error-messages\">
                    ";
            // line 370
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors');
            echo "
                </div>
            ";
        }
        // line 373
        echo "
            ";
        // line 374
        if (((array_key_exists("sonata_admin", $context) && ($context["sonata_admin_enabled"] ?? null)) && ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["sonata_admin"] ?? null), "field_description", array(), "any", false, true), "help", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["sonata_admin"] ?? null), "field_description", array(), "any", false, true), "help", array()), false)) : (false)))) {
            // line 375
            echo "                <span class=\"help-block sonata-ba-field-help\">";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["sonata_admin"] ?? null), "field_description", array()), "help", array()), array(), ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["sonata_admin"] ?? null), "field_description", array()), "translationDomain", array())) ? (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["sonata_admin"] ?? null), "field_description", array()), "translationDomain", array())) : (twig_get_attribute($this->env, $this->getSourceContext(), ($context["admin"] ?? null), "translationDomain", array()))));
            echo "</span>
            ";
        }
        // line 377
        echo "        </div>
    </div>
";
    }

    // line 381
    public function block_checkbox_row($context, array $blocks = array())
    {
        // line 382
        $context["show_label"] = false;
        // line 383
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
    }

    // line 386
    public function block_radio_row($context, array $blocks = array())
    {
        // line 387
        $context["show_label"] = false;
        // line 388
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
    }

    // line 391
    public function block_sonata_type_native_collection_widget_row($context, array $blocks = array())
    {
        // line 392
        ob_start();
        // line 393
        echo "    <div class=\"sonata-collection-row\">
        ";
        // line 394
        if (($context["allow_delete"] ?? null)) {
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["child"] ?? null), 'row', array("label" => false));
        echo "
        ";
        // line 404
        if (($context["allow_delete"] ?? null)) {
            // line 405
            echo "                </div>
            </div>
        ";
        }
        // line 408
        echo "    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 412
    public function block_sonata_type_native_collection_widget($context, array $blocks = array())
    {
        // line 413
        ob_start();
        // line 414
        echo "    ";
        if (array_key_exists("prototype", $context)) {
            // line 415
            echo "        ";
            $context["child"] = ($context["prototype"] ?? null);
            // line 416
            echo "        ";
            $context["allow_delete_backup"] = ($context["allow_delete"] ?? null);
            // line 417
            echo "        ";
            $context["allow_delete"] = true;
            // line 418
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("data-prototype" =>             $this->renderBlock("sonata_type_native_collection_widget_row", $context, $blocks), "data-prototype-name" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["prototype"] ?? null), "vars", array()), "name", array()), "class" => ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : (""))));
            // line 419
            echo "        ";
            $context["allow_delete"] = ($context["allow_delete_backup"] ?? null);
            // line 420
            echo "    ";
        }
        // line 421
        echo "    <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
        ";
        // line 422
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        echo "
        ";
        // line 423
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'rest');
        echo "
        ";
        // line 427
        if (($context["allow_add"] ?? null)) {
            // line 428
            echo "            <div><a href=\"#\" class=\"btn btn-link sonata-collection-add\"><i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i></a></div>
        ";
        }
        // line 430
        echo "    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 434
    public function block_sonata_type_immutable_array_widget($context, array $blocks = array())
    {
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        echo "

            ";
        // line 441
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'rest');
        echo "
        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 450
    public function block_sonata_type_immutable_array_widget_row($context, array $blocks = array())
    {
        // line 451
        echo "    ";
        ob_start();
        // line 452
        echo "        <div class=\"form-group";
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["child"] ?? null), "vars", array()), "errors", array())) > 0)) {
            echo " has-error";
        }
        echo "\" id=\"sonata-ba-field-container-";
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, ($context["key"] ?? null), "html", null, true);
        echo "\">

            ";
        // line 454
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["child"] ?? null), 'label');
        echo "

            ";
        // line 456
        $context["div_class"] = "";
        // line 457
        echo "            ";
        if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["sonata_admin"] ?? null), "options", array()), "form_type", array(), "array") == "horizontal")) {
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
        echo twig_escape_filter($this->env, ($context["div_class"] ?? null), "html", null, true);
        echo " sonata-ba-field sonata-ba-field-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["sonata_admin"] ?? null), "edit", array()), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["sonata_admin"] ?? null), "inline", array()), "html", null, true);
        echo " ";
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["child"] ?? null), "vars", array()), "errors", array())) > 0)) {
            echo "sonata-ba-field-error";
        }
        echo "\">
                ";
        // line 462
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["child"] ?? null), 'widget', array("horizontal" => false, "horizontal_input_wrapper_class" => ""));
        echo " ";
        // line 463
        echo "                ";
        $context["sonata_help"] = twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["child"] ?? null), "vars", array()), "sonata_help", array());
        // line 464
        echo "                ";
        $this->displayBlock("sonata_help", $context, $blocks);
        echo "
            </div>

            ";
        // line 467
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["child"] ?? null), "vars", array()), "errors", array())) > 0)) {
            // line 468
            echo "                <div class=\"help-block sonata-ba-field-error-messages\">
                    ";
            // line 469
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["child"] ?? null), 'errors');
            echo "
                </div>
            ";
        }
        // line 472
        echo "        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 476
    public function block_sonata_type_model_autocomplete_widget($context, array $blocks = array())
    {
        // line 477
        echo "    ";
        $this->loadTemplate(($context["template"] ?? null), "SonataAdminBundle:Form:form_admin_fields.html.twig", 477)->display($context);
    }

    // line 480
    public function block_sonata_type_choice_field_mask_widget($context, array $blocks = array())
    {
        // line 481
        echo "    ";
        $this->displayBlock("choice_widget", $context, $blocks);
        echo "
    ";
        // line 483
        echo "    ";
        $context["main_form_name"] = twig_slice($this->env, ($context["id"] ?? null), 0, ((twig_length_filter($this->env, ($context["id"] ?? null)) - twig_length_filter($this->env, ($context["name"] ?? null))) - 1));
        // line 484
        echo "    <script>
        jQuery(document).ready(function() {
            var allFields = ";
        // line 486
        echo json_encode(($context["all_fields"] ?? null));
        echo ";
            var map = ";
        // line 487
        echo json_encode(($context["map"] ?? null));
        echo ";

            var showMaskChoiceEl = jQuery('#";
        // line 489
        echo twig_escape_filter($this->env, ($context["main_form_name"] ?? null), "html", null, true);
        echo "_";
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "');

            showMaskChoiceEl.on('change', function () {
                choice_field_mask_show(jQuery(this).val());
            });

            function choice_field_mask_show(val) {
                var controlGroupIdFunc = function (field) {
                    // Most of fields are named with an underscore
                    var defaultFieldId = '#sonata-ba-field-container-";
        // line 498
        echo twig_escape_filter($this->env, ($context["main_form_name"] ?? null), "html", null, true);
        echo "_' + field;

                    // Some fields may be named with a dash (like keys of immutable array form type)
                    if (jQuery(defaultFieldId).length === 0) {
                        return '#sonata-ba-field-container-";
        // line 502
        echo twig_escape_filter($this->env, ($context["main_form_name"] ?? null), "html", null, true);
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
    }

    // line 524
    public function block_sonata_type_choice_multiple_sortable($context, array $blocks = array())
    {
        // line 525
        echo "    <input type=\"hidden\" name=\"";
        echo twig_escape_filter($this->env, ($context["full_name"] ?? null), "html", null, true);
        echo "\" id=\"";
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, twig_join_filter(($context["value"] ?? null), ","), "html", null, true);
        echo "\" />

    <script>
        jQuery(document).ready(function() {
            Admin.setup_sortable_select2(jQuery('#";
        // line 529
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "'), ";
        echo json_encode(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "vars", array()), "choices", array()));
        echo ");
        });
    </script>
";
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
        return array (  1350 => 529,  1338 => 525,  1335 => 524,  1310 => 502,  1303 => 498,  1289 => 489,  1284 => 487,  1280 => 486,  1276 => 484,  1273 => 483,  1268 => 481,  1265 => 480,  1260 => 477,  1257 => 476,  1251 => 472,  1245 => 469,  1242 => 468,  1240 => 467,  1233 => 464,  1230 => 463,  1227 => 462,  1215 => 461,  1212 => 460,  1209 => 459,  1206 => 458,  1203 => 457,  1201 => 456,  1196 => 454,  1184 => 452,  1181 => 451,  1178 => 450,  1170 => 445,  1167 => 444,  1150 => 442,  1133 => 441,  1128 => 439,  1123 => 437,  1118 => 436,  1115 => 435,  1112 => 434,  1106 => 430,  1102 => 428,  1100 => 427,  1095 => 426,  1078 => 424,  1061 => 423,  1057 => 422,  1052 => 421,  1049 => 420,  1046 => 419,  1043 => 418,  1040 => 417,  1037 => 416,  1034 => 415,  1031 => 414,  1029 => 413,  1026 => 412,  1020 => 408,  1015 => 405,  1013 => 404,  1008 => 403,  998 => 395,  996 => 394,  993 => 393,  991 => 392,  988 => 391,  983 => 388,  981 => 387,  978 => 386,  973 => 383,  971 => 382,  968 => 381,  962 => 377,  956 => 375,  954 => 374,  951 => 373,  945 => 370,  942 => 369,  940 => 368,  937 => 367,  934 => 366,  930 => 365,  927 => 364,  924 => 363,  921 => 362,  919 => 361,  916 => 360,  913 => 359,  910 => 358,  908 => 357,  905 => 356,  899 => 354,  897 => 353,  894 => 352,  891 => 351,  888 => 350,  885 => 349,  882 => 348,  879 => 347,  876 => 346,  873 => 345,  870 => 344,  867 => 343,  864 => 342,  862 => 341,  860 => 340,  857 => 339,  854 => 338,  851 => 337,  849 => 336,  846 => 335,  844 => 334,  841 => 333,  838 => 332,  835 => 331,  833 => 330,  824 => 329,  821 => 328,  818 => 327,  811 => 322,  805 => 320,  799 => 317,  796 => 316,  794 => 315,  791 => 314,  785 => 312,  779 => 309,  776 => 308,  774 => 307,  769 => 305,  765 => 304,  760 => 303,  757 => 302,  751 => 300,  748 => 299,  746 => 298,  743 => 297,  736 => 292,  730 => 289,  725 => 288,  722 => 287,  716 => 284,  711 => 283,  709 => 282,  704 => 280,  700 => 279,  695 => 278,  692 => 277,  689 => 276,  686 => 275,  683 => 274,  677 => 272,  674 => 271,  672 => 270,  669 => 269,  661 => 263,  659 => 262,  658 => 261,  657 => 260,  656 => 259,  651 => 258,  648 => 257,  645 => 256,  642 => 255,  639 => 254,  633 => 252,  630 => 251,  628 => 250,  625 => 249,  615 => 243,  612 => 242,  609 => 241,  603 => 239,  601 => 238,  596 => 237,  593 => 236,  590 => 235,  586 => 233,  583 => 232,  580 => 230,  577 => 228,  574 => 227,  572 => 226,  565 => 225,  563 => 224,  560 => 223,  557 => 222,  554 => 220,  551 => 218,  548 => 217,  546 => 216,  539 => 215,  537 => 214,  529 => 213,  523 => 211,  520 => 210,  518 => 209,  515 => 208,  512 => 207,  509 => 206,  506 => 205,  503 => 204,  500 => 203,  498 => 202,  495 => 201,  489 => 197,  482 => 195,  480 => 194,  478 => 193,  477 => 190,  474 => 189,  470 => 188,  465 => 187,  462 => 186,  460 => 185,  457 => 184,  451 => 180,  448 => 178,  445 => 176,  442 => 174,  440 => 173,  437 => 172,  435 => 171,  433 => 170,  418 => 169,  415 => 168,  412 => 167,  409 => 166,  406 => 165,  403 => 164,  400 => 163,  397 => 162,  394 => 161,  391 => 160,  388 => 159,  386 => 158,  383 => 157,  380 => 156,  377 => 155,  374 => 154,  370 => 151,  367 => 150,  363 => 147,  360 => 146,  353 => 141,  347 => 139,  344 => 137,  342 => 136,  340 => 135,  338 => 134,  323 => 133,  320 => 132,  316 => 129,  313 => 126,  312 => 125,  311 => 124,  309 => 123,  307 => 122,  304 => 121,  301 => 120,  298 => 119,  295 => 118,  292 => 117,  289 => 116,  287 => 115,  284 => 114,  281 => 113,  279 => 112,  276 => 111,  274 => 110,  271 => 109,  268 => 108,  265 => 107,  262 => 106,  260 => 105,  257 => 104,  252 => 99,  250 => 98,  248 => 97,  245 => 95,  243 => 94,  241 => 93,  238 => 92,  233 => 88,  231 => 87,  229 => 86,  226 => 84,  224 => 83,  222 => 82,  219 => 81,  210 => 75,  207 => 74,  204 => 73,  201 => 72,  198 => 71,  193 => 68,  189 => 66,  187 => 65,  184 => 64,  181 => 63,  179 => 62,  173 => 60,  171 => 59,  169 => 58,  166 => 57,  163 => 56,  160 => 54,  158 => 53,  155 => 52,  148 => 49,  145 => 48,  142 => 47,  135 => 44,  132 => 43,  129 => 42,  126 => 41,  123 => 40,  120 => 39,  116 => 36,  112 => 35,  109 => 34,  100 => 29,  98 => 28,  96 => 27,  93 => 26,  88 => 23,  84 => 22,  81 => 21,  72 => 19,  68 => 18,  65 => 17,  60 => 16,  58 => 15,  55 => 14,  11 => 12,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SonataAdminBundle:Form:form_admin_fields.html.twig", "/home/kuba/zrodlo/vendor/sonata-project/admin-bundle/src/Resources/views/Form/form_admin_fields.html.twig");
    }
}
