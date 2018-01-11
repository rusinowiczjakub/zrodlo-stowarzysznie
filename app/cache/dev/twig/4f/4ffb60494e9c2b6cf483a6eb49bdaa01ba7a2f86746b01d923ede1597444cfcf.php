<?php

/* SonataAdminBundle:CRUD:show_percent.html.twig */
class __TwigTemplate_6a9809332f23ef4542a915dcd1c0e7d143b81804e181f146bead7b6e826784d7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_percent.html.twig", 12);
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
        $__internal_a7852f37ab8ae03e67f9a6c0721edb2348d13adff98497a6a61df2637eade9c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7852f37ab8ae03e67f9a6c0721edb2348d13adff98497a6a61df2637eade9c2->enter($__internal_a7852f37ab8ae03e67f9a6c0721edb2348d13adff98497a6a61df2637eade9c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_percent.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a7852f37ab8ae03e67f9a6c0721edb2348d13adff98497a6a61df2637eade9c2->leave($__internal_a7852f37ab8ae03e67f9a6c0721edb2348d13adff98497a6a61df2637eade9c2_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_eb9d6a6161534021dda4c86deaba41ff950c1cc567a46c10e98f362083c8c418 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb9d6a6161534021dda4c86deaba41ff950c1cc567a46c10e98f362083c8c418->enter($__internal_eb9d6a6161534021dda4c86deaba41ff950c1cc567a46c10e98f362083c8c418_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context["value"] = ((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 15, $this->getSourceContext()); })()) * 100);
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 16, $this->getSourceContext()); })()), "html", null, true);
        echo " %
";
        
        $__internal_eb9d6a6161534021dda4c86deaba41ff950c1cc567a46c10e98f362083c8c418->leave($__internal_eb9d6a6161534021dda4c86deaba41ff950c1cc567a46c10e98f362083c8c418_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_percent.html.twig";
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
    {% set value = value * 100 %}
    {{ value }} %
{% endblock %}
", "SonataAdminBundle:CRUD:show_percent.html.twig", "/home/kuba/Workspace/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/show_percent.html.twig");
    }
}
