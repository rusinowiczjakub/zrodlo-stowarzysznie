<?php

/* SonataAdminBundle:CRUD:show_array.html.twig */
class __TwigTemplate_447849ec97c5fe9ac9c9d58a6ade90888f6518178c4651d3e1123a4b7f5d2d58 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 13
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_array.html.twig", 13);
        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1ea21e8cf21b6940aceb5dfbc6b31659c59fcfad0f64fafd18b69a6be05bbc4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ea21e8cf21b6940aceb5dfbc6b31659c59fcfad0f64fafd18b69a6be05bbc4b->enter($__internal_1ea21e8cf21b6940aceb5dfbc6b31659c59fcfad0f64fafd18b69a6be05bbc4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_array.html.twig"));

        // line 11
        $context["show"] = $this->loadTemplate("SonataAdminBundle:CRUD:base_array_macro.html.twig", "SonataAdminBundle:CRUD:show_array.html.twig", 11);
        // line 13
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1ea21e8cf21b6940aceb5dfbc6b31659c59fcfad0f64fafd18b69a6be05bbc4b->leave($__internal_1ea21e8cf21b6940aceb5dfbc6b31659c59fcfad0f64fafd18b69a6be05bbc4b_prof);

    }

    // line 15
    public function block_field($context, array $blocks = array())
    {
        $__internal_348d94890c7ba958382daac0d441ab9bf9e5db789a7aaafb36174e85b8468c8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_348d94890c7ba958382daac0d441ab9bf9e5db789a7aaafb36174e85b8468c8b->enter($__internal_348d94890c7ba958382daac0d441ab9bf9e5db789a7aaafb36174e85b8468c8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 16
        echo "    ";
        echo $context["show"]->macro_render_array((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 16, $this->getSourceContext()); })()), ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["field_description"] ?? null), "options", array(), "any", false, true), "inline", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["field_description"] ?? null), "options", array(), "any", false, true), "inline", array()), false)) : (false)));
        echo "
";
        
        $__internal_348d94890c7ba958382daac0d441ab9bf9e5db789a7aaafb36174e85b8468c8b->leave($__internal_348d94890c7ba958382daac0d441ab9bf9e5db789a7aaafb36174e85b8468c8b_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_array.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 16,  37 => 15,  30 => 13,  28 => 11,  11 => 13,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}
{% import 'SonataAdminBundle:CRUD:base_array_macro.html.twig' as show %}

{% extends 'SonataAdminBundle:CRUD:base_show_field.html.twig' %}

{% block field%}
    {{ show.render_array(value, field_description.options.inline|default(false)) }}
{% endblock %}
", "SonataAdminBundle:CRUD:show_array.html.twig", "/home/kuba/Workspace/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/show_array.html.twig");
    }
}
