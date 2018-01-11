<?php

/* SonataAdminBundle:CRUD:list_time.html.twig */
class __TwigTemplate_d13a6e1d6ce9d455c936ab94665f6fba98215db9debe1426f3890071364d727c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 12, $this->getSourceContext()); })()), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_time.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e71bb9c5f76e52e16b95150c9819cdc92249ae37ea61c550376a5c7bec0743fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e71bb9c5f76e52e16b95150c9819cdc92249ae37ea61c550376a5c7bec0743fd->enter($__internal_e71bb9c5f76e52e16b95150c9819cdc92249ae37ea61c550376a5c7bec0743fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_time.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e71bb9c5f76e52e16b95150c9819cdc92249ae37ea61c550376a5c7bec0743fd->leave($__internal_e71bb9c5f76e52e16b95150c9819cdc92249ae37ea61c550376a5c7bec0743fd_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_84131a9c91d7b4ece42c27b51ad8b6d9948be174f1bd15f6edd4f89a12a956d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84131a9c91d7b4ece42c27b51ad8b6d9948be174f1bd15f6edd4f89a12a956d5->enter($__internal_84131a9c91d7b4ece42c27b51ad8b6d9948be174f1bd15f6edd4f89a12a956d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        if (twig_test_empty((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 15, $this->getSourceContext()); })()))) {
            // line 16
            echo "&nbsp;";
        } else {
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 18, $this->getSourceContext()); })()), "H:i:s"), "html", null, true);
        }
        
        $__internal_84131a9c91d7b4ece42c27b51ad8b6d9948be174f1bd15f6edd4f89a12a956d5->leave($__internal_84131a9c91d7b4ece42c27b51ad8b6d9948be174f1bd15f6edd4f89a12a956d5_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_time.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 18,  41 => 16,  39 => 15,  33 => 14,  18 => 12,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends admin.getTemplate('base_list_field') %}

{% block field %}
    {%- if value is empty -%}
        &nbsp;
    {%- else -%}
        {{ value|date('H:i:s') }}
    {%- endif -%}
{% endblock %}
", "SonataAdminBundle:CRUD:list_time.html.twig", "/home/kuba/Workspace/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/list_time.html.twig");
    }
}
