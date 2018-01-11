<?php

/* SonataAdminBundle:CRUD:base_show_compare.html.twig */
class __TwigTemplate_9a325c93193f108de20cb4118f9ad7cf93c7072e92bf3cee7c1eb537949cbd23 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show.html.twig", "SonataAdminBundle:CRUD:base_show_compare.html.twig", 12);
        $this->blocks = array(
            'show_field' => array($this, 'block_show_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f48997dedeaf320f2e0b32f62de43449a0a34fc3d3af92c89ac9d8774ca5db19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f48997dedeaf320f2e0b32f62de43449a0a34fc3d3af92c89ac9d8774ca5db19->enter($__internal_f48997dedeaf320f2e0b32f62de43449a0a34fc3d3af92c89ac9d8774ca5db19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_show_compare.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f48997dedeaf320f2e0b32f62de43449a0a34fc3d3af92c89ac9d8774ca5db19->leave($__internal_f48997dedeaf320f2e0b32f62de43449a0a34fc3d3af92c89ac9d8774ca5db19_prof);

    }

    // line 14
    public function block_show_field($context, array $blocks = array())
    {
        $__internal_4588453acbdc4331b8eb9052a861bd0cbe5cab54d65acef2923b2eb5a5b185a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4588453acbdc4331b8eb9052a861bd0cbe5cab54d65acef2923b2eb5a5b185a9->enter($__internal_4588453acbdc4331b8eb9052a861bd0cbe5cab54d65acef2923b2eb5a5b185a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_field"));

        // line 15
        echo "    <tr class=\"sonata-ba-view-container history-audit-compare\">
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["elements"] ?? null), (isset($context["field_name"]) || array_key_exists("field_name", $context) ? $context["field_name"] : (function () { throw new Twig_Error_Runtime('Variable "field_name" does not exist.', 16, $this->getSourceContext()); })()), array(), "array", true, true)) {
            // line 17
            echo "            ";
            echo $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderViewElementCompare($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["elements"]) || array_key_exists("elements", $context) ? $context["elements"] : (function () { throw new Twig_Error_Runtime('Variable "elements" does not exist.', 17, $this->getSourceContext()); })()), (isset($context["field_name"]) || array_key_exists("field_name", $context) ? $context["field_name"] : (function () { throw new Twig_Error_Runtime('Variable "field_name" does not exist.', 17, $this->getSourceContext()); })()), array(), "array"), (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new Twig_Error_Runtime('Variable "object" does not exist.', 17, $this->getSourceContext()); })()), (isset($context["object_compare"]) || array_key_exists("object_compare", $context) ? $context["object_compare"] : (function () { throw new Twig_Error_Runtime('Variable "object_compare" does not exist.', 17, $this->getSourceContext()); })()));
            echo "
        ";
        }
        // line 19
        echo "    </tr>
";
        
        $__internal_4588453acbdc4331b8eb9052a861bd0cbe5cab54d65acef2923b2eb5a5b185a9->leave($__internal_4588453acbdc4331b8eb9052a861bd0cbe5cab54d65acef2923b2eb5a5b185a9_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_show_compare.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 19,  45 => 17,  43 => 16,  40 => 15,  34 => 14,  11 => 12,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends 'SonataAdminBundle:CRUD:base_show.html.twig' %}

{% block show_field %}
    <tr class=\"sonata-ba-view-container history-audit-compare\">
        {% if elements[field_name] is defined %}
            {{ elements[field_name]|render_view_element_compare(object, object_compare) }}
        {% endif %}
    </tr>
{% endblock %}
", "SonataAdminBundle:CRUD:base_show_compare.html.twig", "/home/kuba/Workspace/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/base_show_compare.html.twig");
    }
}
