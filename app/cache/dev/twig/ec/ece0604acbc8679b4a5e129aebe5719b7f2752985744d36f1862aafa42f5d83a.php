<?php

/* SonataCoreBundle:Form:color.html.twig */
class __TwigTemplate_693953d54a83bba4297af8abe0373af179f43a51f9a7f86ec5356db057fbf308 extends Twig_Template
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
        $__internal_500fa36b7ef23b2857cebc97311d78ccaaa91b408fb228a083780c1563ea7253 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_500fa36b7ef23b2857cebc97311d78ccaaa91b408fb228a083780c1563ea7253->enter($__internal_500fa36b7ef23b2857cebc97311d78ccaaa91b408fb228a083780c1563ea7253_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataCoreBundle:Form:color.html.twig"));

        // line 11
        $this->displayBlock('sonata_type_color_widget', $context, $blocks);
        
        $__internal_500fa36b7ef23b2857cebc97311d78ccaaa91b408fb228a083780c1563ea7253->leave($__internal_500fa36b7ef23b2857cebc97311d78ccaaa91b408fb228a083780c1563ea7253_prof);

    }

    public function block_sonata_type_color_widget($context, array $blocks = array())
    {
        $__internal_e62ced420c879cd7e21d491bbd0fd41203188c22744cae02337ebefa514c2341 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e62ced420c879cd7e21d491bbd0fd41203188c22744cae02337ebefa514c2341->enter($__internal_e62ced420c879cd7e21d491bbd0fd41203188c22744cae02337ebefa514c2341_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_color_widget"));

        // line 12
        echo "    ";
        ob_start();
        // line 13
        echo "        <input type=\"color\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if ( !twig_test_empty((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 13, $this->getSourceContext()); })()))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 13, $this->getSourceContext()); })()), "html", null, true);
            echo "\" ";
        }
        echo "/>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_e62ced420c879cd7e21d491bbd0fd41203188c22744cae02337ebefa514c2341->leave($__internal_e62ced420c879cd7e21d491bbd0fd41203188c22744cae02337ebefa514c2341_prof);

    }

    public function getTemplateName()
    {
        return "SonataCoreBundle:Form:color.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  38 => 13,  35 => 12,  23 => 11,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}
{% block sonata_type_color_widget %}
    {% spaceless %}
        <input type=\"color\" {{ block('widget_attributes') }} {% if value is not empty %}value=\"{{ value }}\" {% endif %}/>
    {% endspaceless %}
{% endblock sonata_type_color_widget %}
", "SonataCoreBundle:Form:color.html.twig", "/home/kuba/Workspace/vendor/sonata-project/core-bundle/src/Resources/views/Form/color.html.twig");
    }
}
