<?php

/* SonataAdminBundle:Form/Type:sonata_type_model_autocomplete.html.twig */
class __TwigTemplate_4c6434386d8fbb003929ad06ad41752c124a7c46d86848144e92449e9670d355 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'sonata_type_model_autocomplete_ajax_request_parameters' => array($this, 'block_sonata_type_model_autocomplete_ajax_request_parameters'),
            'sonata_type_model_autocomplete_dropdown_item_format' => array($this, 'block_sonata_type_model_autocomplete_dropdown_item_format'),
            'sonata_type_model_autocomplete_selection_format' => array($this, 'block_sonata_type_model_autocomplete_selection_format'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        ob_start();
        // line 12
        echo "
    <input type=\"text\" id=\"";
        // line 13
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "_autocomplete_input\" value=\"\"";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["attr"] ?? null));
        foreach ($context['_seq'] as $context["attribute"] => $context["value"]) {
            echo " ";
            echo twig_escape_filter($this->env, $context["attribute"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "\" ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attribute'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        if ((array_key_exists("read_only", $context) && ($context["read_only"] ?? null))) {
            echo " readonly=\"readonly\"";
        }
        // line 16
        if (($context["disabled"] ?? null)) {
            echo " disabled=\"disabled\"";
        }
        // line 17
        if (($context["required"] ?? null)) {
            echo " required=\"required\"";
        }
        // line 18
        echo "    />

    <select id=\"";
        // line 20
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "_autocomplete_input_v4\" data-sonata-select2=\"false\"";
        // line 21
        if ((array_key_exists("read_only", $context) && ($context["read_only"] ?? null))) {
            echo " readonly=\"readonly\"";
        }
        // line 22
        if (($context["disabled"] ?? null)) {
            echo " disabled=\"disabled\"";
        }
        // line 23
        if (($context["required"] ?? null)) {
            echo " required=\"required\"";
        }
        // line 24
        echo "    >";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["value"] ?? null));
        foreach ($context['_seq'] as $context["idx"] => $context["val"]) {
            if ((($context["idx"] . "") != "_labels")) {
                // line 26
                echo "<option value=\"";
                echo twig_escape_filter($this->env, $context["val"], "html", null, true);
                echo "\" selected>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["value"] ?? null), "_labels", array(), "array"), $context["idx"], array(), "array"), "html", null, true);
                echo "</option>";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['idx'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "</select>

    <div id=\"";
        // line 30
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "_hidden_inputs_wrap\">
        ";
        // line 31
        if (($context["multiple"] ?? null)) {
            // line 32
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["value"] ?? null));
            foreach ($context['_seq'] as $context["idx"] => $context["val"]) {
                if ((($context["idx"] . "") != "_labels")) {
                    // line 33
                    echo "<input type=\"hidden\" name=\"";
                    echo twig_escape_filter($this->env, ($context["full_name"] ?? null), "html", null, true);
                    echo "[]\"";
                    if (($context["disabled"] ?? null)) {
                        echo " disabled=\"disabled\"";
                    }
                    echo " value=\"";
                    echo twig_escape_filter($this->env, $context["val"], "html", null, true);
                    echo "\">";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['idx'], $context['val'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 36
            echo "<input type=\"hidden\" name=\"";
            echo twig_escape_filter($this->env, ($context["full_name"] ?? null), "html", null, true);
            echo "\"";
            if (($context["disabled"] ?? null)) {
                echo " disabled=\"disabled\"";
            }
            echo " value=\"";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["value"] ?? null), 0, array(), "array", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["value"] ?? null), 0, array(), "array"), "")) : ("")), "html", null, true);
            echo "\">
        ";
        }
        // line 38
        echo "</div>

    ";
        // line 40
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["sonata_admin"] ?? null), "field_description", array(), "any", false, true), "associationadmin", array(), "any", true, true)) {
            // line 41
            echo "        <div id=\"field_actions_";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\" class=\"field-actions\">
            ";
            // line 42
            $context["display_btn_add"] = ((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["sonata_admin"] ?? null), "edit", array()) != "admin") && twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["sonata_admin"] ?? null), "field_description", array()), "associationadmin", array()), "hasRoute", array(0 => "create"), "method")) && twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),             // line 43
($context["sonata_admin"] ?? null), "field_description", array()), "associationadmin", array()), "isGranted", array(0 => "CREATE"), "method")) && ($context["btn_add"] ?? null));
            // line 44
            echo "            ";
            if (($context["display_btn_add"] ?? null)) {
                // line 45
                echo "                <a  href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["sonata_admin"] ?? null), "field_description", array()), "associationadmin", array()), "generateUrl", array(0 => "create", 1 => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),                 // line 46
($context["sonata_admin"] ?? null), "field_description", array()), "getOption", array(0 => "link_parameters", 1 => array()), "method")), "method"), "html", null, true);
                // line 47
                echo "\"
                    onclick=\"return start_field_dialog_form_add_";
                // line 48
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo "(this);\"
                    class=\"btn btn-success btn-sm sonata-ba-action\"
                    title=\"";
                // line 50
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["btn_add"] ?? null), array(), ($context["btn_catalogue"] ?? null)), "html", null, true);
                echo "\"
                    >
                    <i class=\"fa fa-plus-circle\"></i>
                    ";
                // line 53
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["btn_add"] ?? null), array(), ($context["btn_catalogue"] ?? null)), "html", null, true);
                echo "
                </a>
            ";
            }
            // line 56
            echo "            ";
            $this->loadTemplate("SonataAdminBundle:CRUD/Association:edit_modal.html.twig", "SonataAdminBundle:Form/Type:sonata_type_model_autocomplete.html.twig", 56)->display($context);
            // line 57
            echo "            ";
            $this->loadTemplate("SonataAdminBundle:CRUD/Association:edit_many_script.html.twig", "SonataAdminBundle:Form/Type:sonata_type_model_autocomplete.html.twig", 57)->display($context);
            // line 58
            echo "        </div>
    ";
        }
        // line 60
        echo "
    <script>
        ";
        // line 63
        echo "        jQuery(function (\$) {
            // Select2 v3 does not used same input as v4.
            // NEXT_MAJOR: Remove this BC layer while upgrading to v4.
            var usedInputRef = window.Select2 ? '#";
        // line 66
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "js", null, true);
        echo "_autocomplete_input' : '#";
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "js", null, true);
        echo "_autocomplete_input_v4';
            var unusedInputRef = window.Select2 ? '#";
        // line 67
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "js", null, true);
        echo "_autocomplete_input_v4' : '#";
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "js", null, true);
        echo "_autocomplete_input';

            \$(unusedInputRef).remove();
            var autocompleteInput = \$(usedInputRef);

            var select2Options = {";
        // line 73
        $context["allowClearPlaceholder"] = ((( !($context["multiple"] ?? null) &&  !($context["required"] ?? null))) ? (" ") : (""));
        // line 74
        echo "placeholder: '";
        echo twig_escape_filter($this->env, ((($context["placeholder"] ?? null)) ? (($context["placeholder"] ?? null)) : (($context["allowClearPlaceholder"] ?? null))), "js", null, true);
        echo "', // allowClear needs placeholder to work properly
                allowClear: ";
        // line 75
        echo ((($context["required"] ?? null)) ? ("false") : ("true"));
        echo ",
                enable: ";
        // line 76
        echo ((($context["disabled"] ?? null)) ? ("false") : ("true"));
        echo ",
                readonly: ";
        // line 77
        echo ((((array_key_exists("read_only", $context) && ($context["read_only"] ?? null)) || (twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "readonly", array(), "any", true, true) && twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "readonly", array())))) ? ("true") : ("false"));
        echo ", ";
        // line 78
        echo "                ";
        echo "    ";
        // line 79
        echo "                minimumInputLength: ";
        echo twig_escape_filter($this->env, ($context["minimum_input_length"] ?? null), "js", null, true);
        echo ",
                multiple: ";
        // line 80
        echo ((($context["multiple"] ?? null)) ? ("true") : ("false"));
        echo ",
                width: function() {
                    // Select2 v3 and v4 BC. If window.Select2 is defined, then the v3 is installed.
                    // NEXT_MAJOR: Remove Select2 v3 support.
                    return Admin.get_select2_width(window.Select2 ? this.element : jQuery(this));
                },
                dropdownAutoWidth: ";
        // line 86
        echo ((($context["dropdown_auto_width"] ?? null)) ? ("true") : ("false"));
        echo ",
                containerCssClass: '";
        // line 87
        echo twig_escape_filter($this->env, (($context["container_css_class"] ?? null) . " form-control"), "js", null, true);
        echo "',
                dropdownCssClass: '";
        // line 88
        echo twig_escape_filter($this->env, ($context["dropdown_css_class"] ?? null), "js", null, true);
        echo "',
                ajax: {
                    url:  '";
        // line 90
        echo twig_escape_filter($this->env, ((($context["url"] ?? null)) ? (($context["url"] ?? null)) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(twig_get_attribute($this->env, $this->getSourceContext(), ($context["route"] ?? null), "name", array()), ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["route"] ?? null), "parameters", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["route"] ?? null), "parameters", array()), array())) : (array()))))), "js", null, true);
        echo "',
                    dataType: 'json',
                    quietMillis: ";
        // line 92
        echo twig_escape_filter($this->env, ($context["quiet_millis"] ?? null), "js", null, true);
        echo ",
                    cache: ";
        // line 93
        echo ((($context["cache"] ?? null)) ? ("true") : ("false"));
        echo ",
                    data: function (term, page) { // page is the one-based page number tracked by Select2
                        // Select2 v4 got a \"params\" unique argument
                        // NEXT_MAJOR: Remove this BC layer.
                        if (typeof page === 'undefined') {
                            page = typeof term.page !== 'undefined' ? term.page : 1;
                            term = term.term;
                        }

                        ";
        // line 102
        $this->displayBlock('sonata_type_model_autocomplete_ajax_request_parameters', $context, $blocks);
        // line 142
        echo "                    },
                },
                escapeMarkup: function (m) { return m; } // we do not want to escape markup since we are displaying html in results
            };

            // Select2 v3/v4 special options.
            // NEXT_MAJOR: Remove this BC layer while upgrading to v4.
            var templateResult = function (item) {
                return ";
        // line 150
        $this->displayBlock('sonata_type_model_autocomplete_dropdown_item_format', $context, $blocks);
        // line 152
        echo "; // format of one dropdown item
            };
            var templateSelection = function (item) {
                // Select2 v4 BC select pre-selection.
                if (typeof item.label === 'undefined') {
                    item.label = item.text;
                }
                return ";
        // line 159
        $this->displayBlock('sonata_type_model_autocomplete_selection_format', $context, $blocks);
        // line 161
        echo "; // format selected item '<b>'+item.label+'</b>';
            };

            if (window.Select2) {
                select2Options.initSelection = function (element, callback) {
                    callback(element.val());
                };
                select2Options.ajax.results = function (data, page) {
                    // notice we return the value of more so Select2 knows if more results can be loaded
                    return {results: data.items, more: data.more};
                };
                select2Options.formatResult = templateResult;
                select2Options.formatSelection = templateSelection;
            } else {
                select2Options.ajax.processResults = function (data, params) {
                    return {
                        results: data.items,
                        pagination: {
                            more: data.more
                        }
                    };
                };
                select2Options.templateResult = templateResult;
                select2Options.templateSelection = templateSelection;
            }
            // END Select2 v3/v4 special options

            autocompleteInput.select2(select2Options);

            // Events structure is different between v3 and v4
            // NEXT_MAJOR: Remove BC layer.
            var boundEvents = window.Select2 ? 'change' : 'select2:select select2:unselect';
            autocompleteInput.on(boundEvents, function(e) {
                if (e.type === 'select2:select') {
                    e.added = e.params.data;
                }
                if (e.type === 'select2:unselect') {
                    e.removed = e.params.data;
                }

                // console.log('change '+JSON.stringify({val:e.val, added:e.added, removed:e.removed}));

                // remove input
                if (undefined !== e.removed && null !== e.removed) {
                    var removedItems = e.removed;

                    ";
        // line 207
        if (($context["multiple"] ?? null)) {
            // line 208
            echo "                        if(!\$.isArray(removedItems)) {
                            removedItems = [removedItems];
                        }

                        var length = removedItems.length;
                        for (var i = 0; i < length; i++) {
                            el = removedItems[i];
                            \$('#";
            // line 215
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "js", null, true);
            echo "_hidden_inputs_wrap input:hidden[value=\"'+el.id+'\"]').remove();
                        }";
        } else {
            // line 218
            echo "\$('#";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "js", null, true);
            echo "_hidden_inputs_wrap input:hidden').val('');";
        }
        // line 220
        echo "                }

                // add new input
                var el = null;
                if (undefined !== e.added) {

                    var addedItems = e.added;

                    ";
        // line 228
        if (($context["multiple"] ?? null)) {
            // line 229
            echo "                        if(!\$.isArray(addedItems)) {
                            addedItems = [addedItems];
                        }

                        var length = addedItems.length;
                        for (var i = 0; i < length; i++) {
                            el = addedItems[i];
                            \$('#";
            // line 236
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "js", null, true);
            echo "_hidden_inputs_wrap').append('<input type=\"hidden\" name=\"";
            echo twig_escape_filter($this->env, ($context["full_name"] ?? null), "js", null, true);
            echo "[]\" value=\"'+el.id+'\" />');
                        }";
        } else {
            // line 239
            echo "\$('#";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "js", null, true);
            echo "_hidden_inputs_wrap input:hidden').val(addedItems.id);";
        }
        // line 241
        echo "                }
            });

            // Initialise the autocomplete
            var data = [];";
        // line 247
        if ( !twig_test_empty(($context["value"] ?? null))) {
            // line 248
            echo "data =";
            if (($context["multiple"] ?? null)) {
                echo "[";
            }
            // line 249
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["value"] ?? null));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            foreach ($context['_seq'] as $context["idx"] => $context["val"]) {
                if ((($context["idx"] . "") != "_labels")) {
                    // line 250
                    if ( !twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "first", array())) {
                        echo ", ";
                    }
                    // line 251
                    echo "{id: '";
                    echo twig_escape_filter($this->env, $context["val"], "js", null, true);
                    echo "', label:'";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["value"] ?? null), "_labels", array(), "array"), $context["idx"], array(), "array"), "js", null, true);
                    echo "'}";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['idx'], $context['val'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 253
            if (($context["multiple"] ?? null)) {
                echo "]";
            }
            echo ";
            ";
        }
        // line 256
        echo "// Select2 v3 data populate.
            // NEXT_MAJOR: Remove while dropping v3 support.
            if (window.Select2 && (undefined==data.length || 0<data.length)) { // Leave placeholder if no data set
                autocompleteInput.select2('data', data);
            }

            // remove unneeded autocomplete text input before form submit
            \$(usedInputRef).closest('form').submit(function()
            {
                \$(usedInputRef).remove();
                return true;
            });
        });
        ";
        // line 270
        echo "    </script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 102
    public function block_sonata_type_model_autocomplete_ajax_request_parameters($context, array $blocks = array())
    {
        // line 103
        echo "                        return {
                                //search term
                                '";
        // line 105
        echo twig_escape_filter($this->env, ($context["req_param_name_search"] ?? null), "js", null, true);
        echo "': term,

                                // page size
                                '";
        // line 108
        echo twig_escape_filter($this->env, ($context["req_param_name_items_per_page"] ?? null), "js", null, true);
        echo "': ";
        echo twig_escape_filter($this->env, ($context["items_per_page"] ?? null), "js", null, true);
        echo ",

                                // page number
                                '";
        // line 111
        echo twig_escape_filter($this->env, ($context["req_param_name_page_number"] ?? null), "js", null, true);
        echo "': page,

                                // admin
                                ";
        // line 114
        if ( !(null === twig_get_attribute($this->env, $this->getSourceContext(), ($context["sonata_admin"] ?? null), "admin", array()))) {
            // line 115
            echo "                                    'uniqid': '";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["sonata_admin"] ?? null), "admin", array()), "uniqid", array()), "js", null, true);
            echo "',
                                    'admin_code': '";
            // line 116
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["sonata_admin"] ?? null), "admin", array()), "code", array()), "js", null, true);
            echo "',
                                ";
        } elseif (        // line 117
($context["admin_code"] ?? null)) {
            // line 118
            echo "                                    'admin_code':  '";
            echo twig_escape_filter($this->env, ($context["admin_code"] ?? null), "js", null, true);
            echo "',
                                ";
        }
        // line 120
        echo "
                                 // subclass
                                ";
        // line 122
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "request", array()), "query", array()), "get", array(0 => "subclass"), "method")) {
            // line 123
            echo "                                    'subclass': '";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "request", array()), "query", array()), "get", array(0 => "subclass"), "method"), "js", null, true);
            echo "',
                                ";
        }
        // line 125
        echo "
                                ";
        // line 126
        if ((($context["context"] ?? null) == "filter")) {
            // line 127
            echo "                                    'field':  '";
            echo twig_escape_filter($this->env, twig_replace_filter(($context["full_name"] ?? null), array("filter[" => "", "][value]" => "", "__" => ".")), "js", null, true);
            echo "',
                                    '_context': 'filter'
                                ";
        } else {
            // line 130
            echo "                                    'field':  '";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "js", null, true);
            echo "'
                                ";
        }
        // line 132
        echo "
                                // other parameters
                                ";
        // line 134
        if ( !twig_test_empty(($context["req_params"] ?? null))) {
            echo ",";
            // line 135
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["req_params"] ?? null));
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
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 136
                echo "'";
                echo twig_escape_filter($this->env, $context["key"], "js", null, true);
                echo "': '";
                echo twig_escape_filter($this->env, $context["value"], "js", null, true);
                echo "'";
                // line 137
                if ( !twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "last", array())) {
                    echo ", ";
                }
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
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 140
        echo "                        };
                        ";
    }

    // line 150
    public function block_sonata_type_model_autocomplete_dropdown_item_format($context, array $blocks = array())
    {
        // line 151
        echo "jQuery('<div class=\"";
        echo twig_escape_filter($this->env, ($context["dropdown_item_css_class"] ?? null), "js", null, true);
        echo "\">').text(item.label).prop('outerHTML')";
    }

    // line 159
    public function block_sonata_type_model_autocomplete_selection_format($context, array $blocks = array())
    {
        // line 160
        echo "jQuery('<div>').text(item.label).prop('innerHTML')";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Form/Type:sonata_type_model_autocomplete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  617 => 160,  614 => 159,  608 => 151,  605 => 150,  600 => 140,  583 => 137,  577 => 136,  560 => 135,  557 => 134,  553 => 132,  547 => 130,  540 => 127,  538 => 126,  535 => 125,  529 => 123,  527 => 122,  523 => 120,  517 => 118,  515 => 117,  511 => 116,  506 => 115,  504 => 114,  498 => 111,  490 => 108,  484 => 105,  480 => 103,  477 => 102,  471 => 270,  456 => 256,  449 => 253,  435 => 251,  431 => 250,  420 => 249,  415 => 248,  413 => 247,  407 => 241,  402 => 239,  395 => 236,  386 => 229,  384 => 228,  374 => 220,  369 => 218,  364 => 215,  355 => 208,  353 => 207,  305 => 161,  303 => 159,  294 => 152,  292 => 150,  282 => 142,  280 => 102,  268 => 93,  264 => 92,  259 => 90,  254 => 88,  250 => 87,  246 => 86,  237 => 80,  232 => 79,  229 => 78,  226 => 77,  222 => 76,  218 => 75,  213 => 74,  211 => 73,  201 => 67,  195 => 66,  190 => 63,  186 => 60,  182 => 58,  179 => 57,  176 => 56,  170 => 53,  164 => 50,  159 => 48,  156 => 47,  154 => 46,  152 => 45,  149 => 44,  147 => 43,  146 => 42,  141 => 41,  139 => 40,  135 => 38,  123 => 36,  107 => 33,  102 => 32,  100 => 31,  96 => 30,  92 => 28,  81 => 26,  76 => 25,  74 => 24,  70 => 23,  66 => 22,  62 => 21,  59 => 20,  55 => 18,  51 => 17,  47 => 16,  43 => 15,  30 => 14,  27 => 13,  24 => 12,  22 => 11,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SonataAdminBundle:Form/Type:sonata_type_model_autocomplete.html.twig", "/home/kuba/Workspace/vendor/sonata-project/admin-bundle/src/Resources/views/Form/Type/sonata_type_model_autocomplete.html.twig");
    }
}
