<?php

/* SonataCoreBundle:Form:datepicker.html.twig */
class __TwigTemplate_2cfe66422a64c04a957c4e9abb51c04b46da82616802bc38792389f23ffa5241 extends Twig_Template
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
        $__internal_8b00bdd04ceeda4734b127bffe6bba2f0d86b3efcad10e4d1a525bf3a944d8e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b00bdd04ceeda4734b127bffe6bba2f0d86b3efcad10e4d1a525bf3a944d8e0->enter($__internal_8b00bdd04ceeda4734b127bffe6bba2f0d86b3efcad10e4d1a525bf3a944d8e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataCoreBundle:Form:datepicker.html.twig"));

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
        
        $__internal_8b00bdd04ceeda4734b127bffe6bba2f0d86b3efcad10e4d1a525bf3a944d8e0->leave($__internal_8b00bdd04ceeda4734b127bffe6bba2f0d86b3efcad10e4d1a525bf3a944d8e0_prof);

    }

    // line 11
    public function block_sonata_type_date_picker_widget_html($context, array $blocks = array())
    {
        $__internal_4de7c438e07275ba6ee8af4106d0cfad840a85650a170db5f2c2da26328a0607 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4de7c438e07275ba6ee8af4106d0cfad840a85650a170db5f2c2da26328a0607->enter($__internal_4de7c438e07275ba6ee8af4106d0cfad840a85650a170db5f2c2da26328a0607_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_date_picker_widget_html"));

        // line 12
        echo "    ";
        if ((isset($context["datepicker_use_button"]) || array_key_exists("datepicker_use_button", $context) ? $context["datepicker_use_button"] : (function () { throw new Twig_Error_Runtime('Variable "datepicker_use_button" does not exist.', 12, $this->getSourceContext()); })())) {
            // line 13
            echo "        <div class='input-group date' id='dp_";
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 13, $this->getSourceContext()); })()), "html", null, true);
            echo "'>
    ";
        }
        // line 15
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 15, $this->getSourceContext()); })()), array("data-date-format" => (isset($context["moment_format"]) || array_key_exists("moment_format", $context) ? $context["moment_format"] : (function () { throw new Twig_Error_Runtime('Variable "moment_format" does not exist.', 15, $this->getSourceContext()); })())));
        // line 16
        echo "    ";
        $this->displayBlock("date_widget", $context, $blocks);
        echo "
    ";
        // line 17
        if ((isset($context["datepicker_use_button"]) || array_key_exists("datepicker_use_button", $context) ? $context["datepicker_use_button"] : (function () { throw new Twig_Error_Runtime('Variable "datepicker_use_button" does not exist.', 17, $this->getSourceContext()); })())) {
            // line 18
            echo "            <span class=\"input-group-addon\"><span class=\"fa fa-calendar\"></span></span>
        </div>
    ";
        }
        
        $__internal_4de7c438e07275ba6ee8af4106d0cfad840a85650a170db5f2c2da26328a0607->leave($__internal_4de7c438e07275ba6ee8af4106d0cfad840a85650a170db5f2c2da26328a0607_prof);

    }

    // line 23
    public function block_sonata_type_date_picker_widget($context, array $blocks = array())
    {
        $__internal_bb42fd25527c37929af2eeb54244496d1cb76a6b0c122d2a442109fd9f98b5c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb42fd25527c37929af2eeb54244496d1cb76a6b0c122d2a442109fd9f98b5c3->enter($__internal_bb42fd25527c37929af2eeb54244496d1cb76a6b0c122d2a442109fd9f98b5c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_date_picker_widget"));

        // line 24
        echo "    ";
        ob_start();
        // line 25
        echo "        ";
        if ((isset($context["wrap_fields_with_addons"]) || array_key_exists("wrap_fields_with_addons", $context) ? $context["wrap_fields_with_addons"] : (function () { throw new Twig_Error_Runtime('Variable "wrap_fields_with_addons" does not exist.', 25, $this->getSourceContext()); })())) {
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
        echo (((isset($context["datepicker_use_button"]) || array_key_exists("datepicker_use_button", $context) ? $context["datepicker_use_button"] : (function () { throw new Twig_Error_Runtime('Variable "datepicker_use_button" does not exist.', 34, $this->getSourceContext()); })())) ? ("dp_") : (""));
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 34, $this->getSourceContext()); })()), "html", null, true);
        echo "').datetimepicker(";
        echo json_encode((isset($context["dp_options"]) || array_key_exists("dp_options", $context) ? $context["dp_options"] : (function () { throw new Twig_Error_Runtime('Variable "dp_options" does not exist.', 34, $this->getSourceContext()); })()));
        echo ");
            });
        </script>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_bb42fd25527c37929af2eeb54244496d1cb76a6b0c122d2a442109fd9f98b5c3->leave($__internal_bb42fd25527c37929af2eeb54244496d1cb76a6b0c122d2a442109fd9f98b5c3_prof);

    }

    // line 40
    public function block_sonata_type_datetime_picker_widget_html($context, array $blocks = array())
    {
        $__internal_7e09f7196c3451176a480d019c662b40716ea48a7f4f3ac803f256654b972dac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e09f7196c3451176a480d019c662b40716ea48a7f4f3ac803f256654b972dac->enter($__internal_7e09f7196c3451176a480d019c662b40716ea48a7f4f3ac803f256654b972dac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_datetime_picker_widget_html"));

        // line 41
        echo "    ";
        if ((isset($context["datepicker_use_button"]) || array_key_exists("datepicker_use_button", $context) ? $context["datepicker_use_button"] : (function () { throw new Twig_Error_Runtime('Variable "datepicker_use_button" does not exist.', 41, $this->getSourceContext()); })())) {
            // line 42
            echo "        <div class='input-group date ";
            if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["dp_options"]) || array_key_exists("dp_options", $context) ? $context["dp_options"] : (function () { throw new Twig_Error_Runtime('Variable "dp_options" does not exist.', 42, $this->getSourceContext()); })()), "pickDate", array(), "array")) {
                echo "timepicker";
            }
            echo "' id='dtp_";
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 42, $this->getSourceContext()); })()), "html", null, true);
            echo "'>
    ";
        }
        // line 44
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 44, $this->getSourceContext()); })()), array("data-date-format" => (isset($context["moment_format"]) || array_key_exists("moment_format", $context) ? $context["moment_format"] : (function () { throw new Twig_Error_Runtime('Variable "moment_format" does not exist.', 44, $this->getSourceContext()); })())));
        // line 45
        echo "    ";
        $this->displayBlock("datetime_widget", $context, $blocks);
        echo "
    ";
        // line 46
        if ((isset($context["datepicker_use_button"]) || array_key_exists("datepicker_use_button", $context) ? $context["datepicker_use_button"] : (function () { throw new Twig_Error_Runtime('Variable "datepicker_use_button" does not exist.', 46, $this->getSourceContext()); })())) {
            // line 47
            echo "            <span class=\"input-group-addon\">
                <span class=\"fa ";
            // line 48
            if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["dp_options"]) || array_key_exists("dp_options", $context) ? $context["dp_options"] : (function () { throw new Twig_Error_Runtime('Variable "dp_options" does not exist.', 48, $this->getSourceContext()); })()), "pickDate", array(), "array")) {
                echo "fa-calendar";
            } else {
                echo "fa-clock";
            }
            echo "\"></span>
            </span>
        </div>
    ";
        }
        
        $__internal_7e09f7196c3451176a480d019c662b40716ea48a7f4f3ac803f256654b972dac->leave($__internal_7e09f7196c3451176a480d019c662b40716ea48a7f4f3ac803f256654b972dac_prof);

    }

    // line 54
    public function block_sonata_type_datetime_picker_widget($context, array $blocks = array())
    {
        $__internal_5ef697ac9d36372cd830086e86ef3789d771805c6722a9914600b39c5850f9ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ef697ac9d36372cd830086e86ef3789d771805c6722a9914600b39c5850f9ed->enter($__internal_5ef697ac9d36372cd830086e86ef3789d771805c6722a9914600b39c5850f9ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_datetime_picker_widget"));

        // line 55
        echo "    ";
        ob_start();
        // line 56
        echo "        ";
        if ((isset($context["wrap_fields_with_addons"]) || array_key_exists("wrap_fields_with_addons", $context) ? $context["wrap_fields_with_addons"] : (function () { throw new Twig_Error_Runtime('Variable "wrap_fields_with_addons" does not exist.', 56, $this->getSourceContext()); })())) {
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
        echo (((isset($context["datepicker_use_button"]) || array_key_exists("datepicker_use_button", $context) ? $context["datepicker_use_button"] : (function () { throw new Twig_Error_Runtime('Variable "datepicker_use_button" does not exist.', 65, $this->getSourceContext()); })())) ? ("dtp_") : (""));
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 65, $this->getSourceContext()); })()), "html", null, true);
        echo "').datetimepicker(";
        echo json_encode((isset($context["dp_options"]) || array_key_exists("dp_options", $context) ? $context["dp_options"] : (function () { throw new Twig_Error_Runtime('Variable "dp_options" does not exist.', 65, $this->getSourceContext()); })()));
        echo ");
            });
        </script>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_5ef697ac9d36372cd830086e86ef3789d771805c6722a9914600b39c5850f9ed->leave($__internal_5ef697ac9d36372cd830086e86ef3789d771805c6722a9914600b39c5850f9ed_prof);

    }

    public function getTemplateName()
    {
        return "SonataCoreBundle:Form:datepicker.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  208 => 65,  204 => 63,  198 => 61,  192 => 58,  189 => 57,  186 => 56,  183 => 55,  177 => 54,  161 => 48,  158 => 47,  156 => 46,  151 => 45,  148 => 44,  138 => 42,  135 => 41,  129 => 40,  114 => 34,  110 => 32,  104 => 30,  98 => 27,  95 => 26,  92 => 25,  89 => 24,  83 => 23,  73 => 18,  71 => 17,  66 => 16,  63 => 15,  57 => 13,  54 => 12,  48 => 11,  41 => 54,  38 => 53,  36 => 40,  33 => 39,  31 => 23,  28 => 22,  26 => 11,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}
{% block sonata_type_date_picker_widget_html %}
    {% if datepicker_use_button %}
        <div class='input-group date' id='dp_{{ id }}'>
    {% endif %}
    {% set attr = attr|merge({'data-date-format': moment_format}) %}
    {{ block('date_widget') }}
    {% if datepicker_use_button %}
            <span class=\"input-group-addon\"><span class=\"fa fa-calendar\"></span></span>
        </div>
    {% endif %}
{% endblock sonata_type_date_picker_widget_html %}

{% block sonata_type_date_picker_widget %}
    {% spaceless %}
        {% if wrap_fields_with_addons %}
            <div class=\"input-group\">
                {{ block('sonata_type_date_picker_widget_html') }}
            </div>
        {% else %}
            {{ block('sonata_type_date_picker_widget_html') }}
        {% endif %}
        <script type=\"text/javascript\">
            jQuery(function (\$) {
                \$('#{{ datepicker_use_button ? 'dp_' : '' }}{{ id }}').datetimepicker({{ dp_options|json_encode|raw }});
            });
        </script>
    {% endspaceless %}
{% endblock sonata_type_date_picker_widget %}

{% block sonata_type_datetime_picker_widget_html %}
    {% if datepicker_use_button %}
        <div class='input-group date {% if not dp_options['pickDate'] %}timepicker{% endif %}' id='dtp_{{ id }}'>
    {% endif %}
    {% set attr = attr|merge({'data-date-format': moment_format}) %}
    {{ block('datetime_widget') }}
    {% if datepicker_use_button %}
            <span class=\"input-group-addon\">
                <span class=\"fa {% if dp_options['pickDate'] %}fa-calendar{% else %}fa-clock{% endif %}\"></span>
            </span>
        </div>
    {% endif %}
{% endblock sonata_type_datetime_picker_widget_html %}

{% block sonata_type_datetime_picker_widget %}
    {% spaceless %}
        {% if wrap_fields_with_addons %}
            <div class=\"input-group\">
                {{ block('sonata_type_datetime_picker_widget_html') }}
            </div>
        {% else %}
            {{ block('sonata_type_datetime_picker_widget_html') }}
        {% endif %}
        <script type=\"text/javascript\">
            jQuery(function (\$) {
                \$('#{{ datepicker_use_button ? 'dtp_' : '' }}{{ id }}').datetimepicker({{ dp_options|json_encode|raw }});
            });
        </script>
    {% endspaceless %}
{% endblock sonata_type_datetime_picker_widget %}
", "SonataCoreBundle:Form:datepicker.html.twig", "/home/kuba/Workspace/vendor/sonata-project/core-bundle/src/Resources/views/Form/datepicker.html.twig");
    }
}
