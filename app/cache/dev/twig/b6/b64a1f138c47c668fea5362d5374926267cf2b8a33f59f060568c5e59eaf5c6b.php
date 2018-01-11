<?php

/* SonataAdminBundle:CRUD:show_time.html.twig */
class __TwigTemplate_16df496c9b22767950f85eb2ad1fcb97c90e804aee6617bec767f11c8b8a4191 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_time.html.twig", 12);
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
        $__internal_c1e88887748c30ae99d68b47c8a986472ee2eb4a582a17b01c97e534f945bff2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1e88887748c30ae99d68b47c8a986472ee2eb4a582a17b01c97e534f945bff2->enter($__internal_c1e88887748c30ae99d68b47c8a986472ee2eb4a582a17b01c97e534f945bff2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_time.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c1e88887748c30ae99d68b47c8a986472ee2eb4a582a17b01c97e534f945bff2->leave($__internal_c1e88887748c30ae99d68b47c8a986472ee2eb4a582a17b01c97e534f945bff2_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_c06738f16bd2d700995f372f975b89ee5ce337a2c3b48338333c3210f8d9f68d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c06738f16bd2d700995f372f975b89ee5ce337a2c3b48338333c3210f8d9f68d->enter($__internal_c06738f16bd2d700995f372f975b89ee5ce337a2c3b48338333c3210f8d9f68d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        if (twig_test_empty((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 15, $this->getSourceContext()); })()))) {
            // line 16
            echo "&nbsp;";
        } else {
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 18, $this->getSourceContext()); })()), "H:i:s"), "html", null, true);
        }
        
        $__internal_c06738f16bd2d700995f372f975b89ee5ce337a2c3b48338333c3210f8d9f68d->leave($__internal_c06738f16bd2d700995f372f975b89ee5ce337a2c3b48338333c3210f8d9f68d_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_time.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 18,  42 => 16,  40 => 15,  34 => 14,  11 => 12,);
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
    {%- if value is empty -%}
        &nbsp;
    {%- else -%}
        {{ value|date('H:i:s') }}
    {%- endif -%}
{% endblock %}
", "SonataAdminBundle:CRUD:show_time.html.twig", "/home/kuba/Workspace/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/show_time.html.twig");
    }
}
