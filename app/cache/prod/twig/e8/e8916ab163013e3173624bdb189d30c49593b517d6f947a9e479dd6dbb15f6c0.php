<?php

/* @FMElfinder/Form/elfinder_widget.html.twig */
class __TwigTemplate_6ea9a3be057439e08a6281a7e4d98f0ed11d11bcf9a47532474448f9dd874b0d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'elfinder_widget' => array($this, 'block_elfinder_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2756ba3a601368291c8ce5f162618953a8b785b0e41c7e3cb3e5a524d8b6d7c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2756ba3a601368291c8ce5f162618953a8b785b0e41c7e3cb3e5a524d8b6d7c5->enter($__internal_2756ba3a601368291c8ce5f162618953a8b785b0e41c7e3cb3e5a524d8b6d7c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FMElfinder/Form/elfinder_widget.html.twig"));

        // line 1
        $this->displayBlock('elfinder_widget', $context, $blocks);
        
        $__internal_2756ba3a601368291c8ce5f162618953a8b785b0e41c7e3cb3e5a524d8b6d7c5->leave($__internal_2756ba3a601368291c8ce5f162618953a8b785b0e41c7e3cb3e5a524d8b6d7c5_prof);

    }

    public function block_elfinder_widget($context, array $blocks = array())
    {
        $__internal_67eeba0dfafa7ab8c14d3e47e4cee645450e7868e6d39a6fbe66cf389628b6dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67eeba0dfafa7ab8c14d3e47e4cee645450e7868e6d39a6fbe66cf389628b6dd->enter($__internal_67eeba0dfafa7ab8c14d3e47e4cee645450e7868e6d39a6fbe66cf389628b6dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "elfinder_widget"));

        // line 2
        echo "    <input type=\"text\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if ( !twig_test_empty((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 2, $this->getSourceContext()); })()))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 2, $this->getSourceContext()); })()), "html", null, true);
            echo "\" ";
        }
        echo " data-type=\"elfinder-input-field\" />
    ";
        // line 3
        if (((isset($context["enable"]) || array_key_exists("enable", $context) ? $context["enable"] : (function () { throw new Twig_Error_Runtime('Variable "enable" does not exist.', 3, $this->getSourceContext()); })()) && array_key_exists("instance", $context))) {
            // line 4
            echo "        <script type=\"text/javascript\" charset=\"utf-8\">
            document.addEventListener(\"DOMContentLoaded\", function(event) {
                var input = document.querySelector('[data-type=\"elfinder-input-field\"][id=\"";
            // line 6
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 6, $this->getSourceContext()); })()), "html", null, true);
            echo "\"]');
                input.addEventListener('click', function (event) {
                    var childWin = window.open(\"";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("elfinder", array("instance" => (isset($context["instance"]) || array_key_exists("instance", $context) ? $context["instance"] : (function () { throw new Twig_Error_Runtime('Variable "instance" does not exist.', 8, $this->getSourceContext()); })()), "homeFolder" => (isset($context["homeFolder"]) || array_key_exists("homeFolder", $context) ? $context["homeFolder"] : (function () { throw new Twig_Error_Runtime('Variable "homeFolder" does not exist.', 8, $this->getSourceContext()); })()))), "html", null, true);
            echo "?id=";
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
            echo "\", \"popupWindow\", \"height=450, width=900\");
                })
            });

            function setValue(value, element_id) {
                document.querySelector('[data-type=\"elfinder-input-field\"]' + (element_id ? '[id=\"'+ element_id +'\"]': '')).value = value;
            }
        </script>
    ";
        }
        
        $__internal_67eeba0dfafa7ab8c14d3e47e4cee645450e7868e6d39a6fbe66cf389628b6dd->leave($__internal_67eeba0dfafa7ab8c14d3e47e4cee645450e7868e6d39a6fbe66cf389628b6dd_prof);

    }

    public function getTemplateName()
    {
        return "@FMElfinder/Form/elfinder_widget.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  52 => 6,  48 => 4,  46 => 3,  35 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block elfinder_widget %}
    <input type=\"text\" {{ block('widget_attributes') }} {% if value is not empty %}value=\"{{ value }}\" {% endif %} data-type=\"elfinder-input-field\" />
    {% if enable and instance is defined %}
        <script type=\"text/javascript\" charset=\"utf-8\">
            document.addEventListener(\"DOMContentLoaded\", function(event) {
                var input = document.querySelector('[data-type=\"elfinder-input-field\"][id=\"{{ id }}\"]');
                input.addEventListener('click', function (event) {
                    var childWin = window.open(\"{{path('elfinder', {'instance': instance, 'homeFolder': homeFolder })}}?id={{ id }}\", \"popupWindow\", \"height=450, width=900\");
                })
            });

            function setValue(value, element_id) {
                document.querySelector('[data-type=\"elfinder-input-field\"]' + (element_id ? '[id=\"'+ element_id +'\"]': '')).value = value;
            }
        </script>
    {% endif %}
{% endblock %}
", "@FMElfinder/Form/elfinder_widget.html.twig", "/home/kuba/Workspace/vendor/helios-ag/fm-elfinder-bundle/Resources/views/Form/elfinder_widget.html.twig");
    }
}
