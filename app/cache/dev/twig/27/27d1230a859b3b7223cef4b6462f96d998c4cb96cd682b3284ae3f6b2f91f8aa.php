<?php

/* FMElfinderBundle:Form:elfinder_widget.html.twig */
class __TwigTemplate_4992708f915f69047ee3ab75ee6fe50a259042b8f65ae31b23cfc1320de02c34 extends Twig_Template
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
        $__internal_1a726097db2224abd824727f2855d94620141caacff37bfc821da0bdd4663d12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a726097db2224abd824727f2855d94620141caacff37bfc821da0bdd4663d12->enter($__internal_1a726097db2224abd824727f2855d94620141caacff37bfc821da0bdd4663d12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FMElfinderBundle:Form:elfinder_widget.html.twig"));

        // line 1
        $this->displayBlock('elfinder_widget', $context, $blocks);
        
        $__internal_1a726097db2224abd824727f2855d94620141caacff37bfc821da0bdd4663d12->leave($__internal_1a726097db2224abd824727f2855d94620141caacff37bfc821da0bdd4663d12_prof);

    }

    public function block_elfinder_widget($context, array $blocks = array())
    {
        $__internal_db493ad8fde7afbb2c42df1475bc50330a141c445fe2947a5f78e6049d24f58d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db493ad8fde7afbb2c42df1475bc50330a141c445fe2947a5f78e6049d24f58d->enter($__internal_db493ad8fde7afbb2c42df1475bc50330a141c445fe2947a5f78e6049d24f58d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "elfinder_widget"));

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
        
        $__internal_db493ad8fde7afbb2c42df1475bc50330a141c445fe2947a5f78e6049d24f58d->leave($__internal_db493ad8fde7afbb2c42df1475bc50330a141c445fe2947a5f78e6049d24f58d_prof);

    }

    public function getTemplateName()
    {
        return "FMElfinderBundle:Form:elfinder_widget.html.twig";
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
", "FMElfinderBundle:Form:elfinder_widget.html.twig", "/home/kuba/Workspace/vendor/helios-ag/fm-elfinder-bundle/Resources/views/Form/elfinder_widget.html.twig");
    }
}
