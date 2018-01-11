<?php

/* SonataAdminBundle:CRUD:show_currency.html.twig */
class __TwigTemplate_a7917a0505e84bec305946324595b8ed42385e2aba649a2ab1ec4a148868a9f9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_currency.html.twig", 12);
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
        $__internal_e227895172e26ff56d77eaef06aaaa56bb63c51c886c8b52794918e6f2df7785 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e227895172e26ff56d77eaef06aaaa56bb63c51c886c8b52794918e6f2df7785->enter($__internal_e227895172e26ff56d77eaef06aaaa56bb63c51c886c8b52794918e6f2df7785_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_currency.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e227895172e26ff56d77eaef06aaaa56bb63c51c886c8b52794918e6f2df7785->leave($__internal_e227895172e26ff56d77eaef06aaaa56bb63c51c886c8b52794918e6f2df7785_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_d7fcee400cb45e2f582441915debf85b08a7675bdb608bdf9adefe14a1475e02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7fcee400cb45e2f582441915debf85b08a7675bdb608bdf9adefe14a1475e02->enter($__internal_d7fcee400cb45e2f582441915debf85b08a7675bdb608bdf9adefe14a1475e02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        if ( !(null === (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 15, $this->getSourceContext()); })()))) {
            // line 16
            echo "        ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new Twig_Error_Runtime('Variable "field_description" does not exist.', 16, $this->getSourceContext()); })()), "options", array()), "currency", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 16, $this->getSourceContext()); })()), "html", null, true);
            echo "
    ";
        }
        
        $__internal_d7fcee400cb45e2f582441915debf85b08a7675bdb608bdf9adefe14a1475e02->leave($__internal_d7fcee400cb45e2f582441915debf85b08a7675bdb608bdf9adefe14a1475e02_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_currency.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 16,  40 => 15,  34 => 14,  11 => 12,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends 'SonataAdminBundle:CRUD:base_show_field.html.twig' %}

{% block field %}
    {% if value is not null %}
        {{ field_description.options.currency }} {{ value }}
    {% endif %}
{% endblock %}
", "SonataAdminBundle:CRUD:show_currency.html.twig", "/home/kuba/Workspace/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/show_currency.html.twig");
    }
}
