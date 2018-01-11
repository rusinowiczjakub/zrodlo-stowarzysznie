<?php

/* @FMElfinder/Form/elfinder_widget.html.twig */
class __TwigTemplate_5fcf967e09e6745e8f886a3f807c0d842bf265c611835879f922e6f950f34069 extends Twig_Template
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
        // line 1
        $this->displayBlock('elfinder_widget', $context, $blocks);
    }

    public function block_elfinder_widget($context, array $blocks = array())
    {
        // line 2
        echo "    <input type=\"text\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if ( !twig_test_empty(($context["value"] ?? null))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "\" ";
        }
        echo " data-type=\"elfinder-input-field\" />
    ";
        // line 3
        if ((($context["enable"] ?? null) && array_key_exists("instance", $context))) {
            // line 4
            echo "        <script type=\"text/javascript\" charset=\"utf-8\">
            document.addEventListener(\"DOMContentLoaded\", function(event) {
                var input = document.querySelector('[data-type=\"elfinder-input-field\"][id=\"";
            // line 6
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\"]');
                input.addEventListener('click', function (event) {
                    var childWin = window.open(\"";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("elfinder", array("instance" => ($context["instance"] ?? null), "homeFolder" => ($context["homeFolder"] ?? null))), "html", null, true);
            echo "?id=";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\", \"popupWindow\", \"height=450, width=900\");
                })
            });

            function setValue(value, element_id) {
                document.querySelector('[data-type=\"elfinder-input-field\"]' + (element_id ? '[id=\"'+ element_id +'\"]': '')).value = value;
            }
        </script>
    ";
        }
    }

    public function getTemplateName()
    {
        return "@FMElfinder/Form/elfinder_widget.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  48 => 8,  43 => 6,  39 => 4,  37 => 3,  26 => 2,  20 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@FMElfinder/Form/elfinder_widget.html.twig", "/home/kuba/Workspace/vendor/helios-ag/fm-elfinder-bundle/Resources/views/Form/elfinder_widget.html.twig");
    }
}
