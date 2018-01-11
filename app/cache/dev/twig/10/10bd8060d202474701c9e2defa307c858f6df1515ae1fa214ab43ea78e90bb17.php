<?php

/* knp_menu_ordered.html.twig */
class __TwigTemplate_015cea11937d294fc24cd2fba879a2037c78b37d949df0e69dbc1b3241a7a36d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("knp_menu.html.twig", "knp_menu_ordered.html.twig", 1);
        $this->blocks = array(
            'list' => array($this, 'block_list'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "knp_menu.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_07c5fee94209ff288881f855276a5e572c0e85afb2b198f0e13b728521779ac7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07c5fee94209ff288881f855276a5e572c0e85afb2b198f0e13b728521779ac7->enter($__internal_07c5fee94209ff288881f855276a5e572c0e85afb2b198f0e13b728521779ac7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu_ordered.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_07c5fee94209ff288881f855276a5e572c0e85afb2b198f0e13b728521779ac7->leave($__internal_07c5fee94209ff288881f855276a5e572c0e85afb2b198f0e13b728521779ac7_prof);

    }

    // line 3
    public function block_list($context, array $blocks = array())
    {
        $__internal_0d5ed42f443f5656d1587d063f8c9066741e16dedbf62cd5cdc135a0bf73bff8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d5ed42f443f5656d1587d063f8c9066741e16dedbf62cd5cdc135a0bf73bff8->enter($__internal_0d5ed42f443f5656d1587d063f8c9066741e16dedbf62cd5cdc135a0bf73bff8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

        // line 4
        $context["macros"] = $this->loadTemplate("knp_menu.html.twig", "knp_menu_ordered.html.twig", 4);
        // line 5
        echo "
";
        // line 6
        if (((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 6, $this->getSourceContext()); })()), "hasChildren", array()) &&  !(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 6, $this->getSourceContext()); })()), "depth", array()) === 0)) && twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 6, $this->getSourceContext()); })()), "displayChildren", array()))) {
            // line 7
            echo "    <ol";
            echo $context["macros"]->macro_attributes((isset($context["listAttributes"]) || array_key_exists("listAttributes", $context) ? $context["listAttributes"] : (function () { throw new Twig_Error_Runtime('Variable "listAttributes" does not exist.', 7, $this->getSourceContext()); })()));
            echo ">
        ";
            // line 8
            $this->displayBlock("children", $context, $blocks);
            echo "
    </ol>
";
        }
        
        $__internal_0d5ed42f443f5656d1587d063f8c9066741e16dedbf62cd5cdc135a0bf73bff8->leave($__internal_0d5ed42f443f5656d1587d063f8c9066741e16dedbf62cd5cdc135a0bf73bff8_prof);

    }

    public function getTemplateName()
    {
        return "knp_menu_ordered.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 8,  47 => 7,  45 => 6,  42 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'knp_menu.html.twig' %}

{% block list %}
{% import 'knp_menu.html.twig' as macros %}

{% if item.hasChildren and options.depth is not same as(0) and item.displayChildren %}
    <ol{{ macros.attributes(listAttributes) }}>
        {{ block('children') }}
    </ol>
{% endif %}
{% endblock %}
", "knp_menu_ordered.html.twig", "/home/kuba/Workspace/vendor/knplabs/knp-menu/src/Knp/Menu/Resources/views/knp_menu_ordered.html.twig");
    }
}
