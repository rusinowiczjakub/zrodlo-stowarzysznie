<?php

/* SonataCoreBundle:Form:datepicker.html.twig */
class __TwigTemplate_3ee6b7eb9911aa301814214273695b1bcf5c90afe19bf82a2f41afac6a11415a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'sonata_type_date_picker_widget_html' => array($this, 'block_sonata_type_date_picker_widget_html'),
            'sonata_type_date_picker_widget' => array($this, 'block_sonata_type_date_picker_widget'),
            'sonata_type_datetime_picker_widget_html' => array($this, 'block_sonata_type_datetime_picker_widget_html'),
            'sonata_type_datetime_picker_widget' => array($this, 'block_sonata_type_datetime_picker_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        $this->displayBlock('sonata_type_date_picker_widget_html', $context, $blocks);
        // line 22
        echo "
";
        // line 23
        $this->displayBlock('sonata_type_date_picker_widget', $context, $blocks);
        // line 39
        echo "
";
        // line 40
        $this->displayBlock('sonata_type_datetime_picker_widget_html', $context, $blocks);
        // line 53
        echo "
";
        // line 54
        $this->displayBlock('sonata_type_datetime_picker_widget', $context, $blocks);
    }

    // line 11
    public function block_sonata_type_date_picker_widget_html($context, array $blocks = array())
    {
        // line 12
        echo "    ";
        if (($context["datepicker_use_button"] ?? null)) {
            // line 13
            echo "        <div class='input-group date' id='dp_";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "'>
    ";
        }
        // line 15
        echo "    ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("data-date-format" => ($context["moment_format"] ?? null)));
        // line 16
        echo "    ";
        $this->displayBlock("date_widget", $context, $blocks);
        echo "
    ";
        // line 17
        if (($context["datepicker_use_button"] ?? null)) {
            // line 18
            echo "            <span class=\"input-group-addon\"><span class=\"fa fa-calendar\"></span></span>
        </div>
    ";
        }
    }

    // line 23
    public function block_sonata_type_date_picker_widget($context, array $blocks = array())
    {
        // line 24
        echo "    ";
        ob_start();
        // line 25
        echo "        ";
        if (($context["wrap_fields_with_addons"] ?? null)) {
            // line 26
            echo "            <div class=\"input-group\">
                ";
            // line 27
            $this->displayBlock("sonata_type_date_picker_widget_html", $context, $blocks);
            echo "
            </div>
        ";
        } else {
            // line 30
            echo "            ";
            $this->displayBlock("sonata_type_date_picker_widget_html", $context, $blocks);
            echo "
        ";
        }
        // line 32
        echo "        <script type=\"text/javascript\">
            jQuery(function (\$) {
                \$('#";
        // line 34
        echo ((($context["datepicker_use_button"] ?? null)) ? ("dp_") : (""));
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "').datetimepicker(";
        echo twig_jsonencode_filter(($context["dp_options"] ?? null));
        echo ");
            });
        </script>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 40
    public function block_sonata_type_datetime_picker_widget_html($context, array $blocks = array())
    {
        // line 41
        echo "    ";
        if (($context["datepicker_use_button"] ?? null)) {
            // line 42
            echo "        <div class='input-group date ";
            if ( !$this->getAttribute(($context["dp_options"] ?? null), "pickDate", array(), "array")) {
                echo "timepicker";
            }
            echo "' id='dtp_";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "'>
    ";
        }
        // line 44
        echo "    ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("data-date-format" => ($context["moment_format"] ?? null)));
        // line 45
        echo "    ";
        $this->displayBlock("datetime_widget", $context, $blocks);
        echo "
    ";
        // line 46
        if (($context["datepicker_use_button"] ?? null)) {
            // line 47
            echo "            <span class=\"input-group-addon\">
                <span class=\"fa ";
            // line 48
            if ($this->getAttribute(($context["dp_options"] ?? null), "pickDate", array(), "array")) {
                echo "fa-calendar";
            } else {
                echo "fa-clock";
            }
            echo "\"></span>
            </span>
        </div>
    ";
        }
    }

    // line 54
    public function block_sonata_type_datetime_picker_widget($context, array $blocks = array())
    {
        // line 55
        echo "    ";
        ob_start();
        // line 56
        echo "        ";
        if (($context["wrap_fields_with_addons"] ?? null)) {
            // line 57
            echo "            <div class=\"input-group\">
                ";
            // line 58
            $this->displayBlock("sonata_type_datetime_picker_widget_html", $context, $blocks);
            echo "
            </div>
        ";
        } else {
            // line 61
            echo "            ";
            $this->displayBlock("sonata_type_datetime_picker_widget_html", $context, $blocks);
            echo "
        ";
        }
        // line 63
        echo "        <script type=\"text/javascript\">
            jQuery(function (\$) {
                \$('#";
        // line 65
        echo ((($context["datepicker_use_button"] ?? null)) ? ("dtp_") : (""));
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "').datetimepicker(";
        echo twig_jsonencode_filter(($context["dp_options"] ?? null));
        echo ");
            });
        </script>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "SonataCoreBundle:Form:datepicker.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  181 => 65,  177 => 63,  171 => 61,  165 => 58,  162 => 57,  159 => 56,  156 => 55,  153 => 54,  140 => 48,  137 => 47,  135 => 46,  130 => 45,  127 => 44,  117 => 42,  114 => 41,  111 => 40,  99 => 34,  95 => 32,  89 => 30,  83 => 27,  80 => 26,  77 => 25,  74 => 24,  71 => 23,  64 => 18,  62 => 17,  57 => 16,  54 => 15,  48 => 13,  45 => 12,  42 => 11,  38 => 54,  35 => 53,  33 => 40,  30 => 39,  28 => 23,  25 => 22,  23 => 11,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SonataCoreBundle:Form:datepicker.html.twig", "/home/kuba/zrodlo/vendor/sonata-project/core-bundle/src/Resources/views/Form/datepicker.html.twig");
    }
}
