<?php

/* SonataCoreBundle:Form:color.html.twig */
class __TwigTemplate_ffc969f1825daa84171233dddb1bffed2c8f03b56cb1ed83d9837c8d54058292 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'sonata_type_color_widget' => array($this, 'block_sonata_type_color_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        $this->displayBlock('sonata_type_color_widget', $context, $blocks);
    }

    public function block_sonata_type_color_widget($context, array $blocks = array())
    {
        // line 12
        echo "    ";
        ob_start();
        // line 13
        echo "        <input type=\"color\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if ( !twig_test_empty(($context["value"] ?? null))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "\" ";
        }
        echo "/>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "SonataCoreBundle:Form:color.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  29 => 13,  26 => 12,  20 => 11,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SonataCoreBundle:Form:color.html.twig", "/home/kuba/Workspace/vendor/sonata-project/core-bundle/src/Resources/views/Form/color.html.twig");
    }
}
