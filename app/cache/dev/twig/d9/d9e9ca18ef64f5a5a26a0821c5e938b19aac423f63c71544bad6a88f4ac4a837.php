<?php

/* SonataAdminBundle:CRUD:base_acl.html.twig */
class __TwigTemplate_005564830cc86cba2f270ab22c63697170401c2b80f0eb9f487441369a12d0c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'form' => array($this, 'block_form'),
            'form_acl_roles' => array($this, 'block_form_acl_roles'),
            'form_acl_users' => array($this, 'block_form_acl_users'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) || array_key_exists("base_template", $context) ? $context["base_template"] : (function () { throw new Twig_Error_Runtime('Variable "base_template" does not exist.', 12, $this->getSourceContext()); })()), "SonataAdminBundle:CRUD:base_acl.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8c94b0f726b5853b41d2477f75d29d17d4dde1690b6c6e331ca676e3a714d3ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c94b0f726b5853b41d2477f75d29d17d4dde1690b6c6e331ca676e3a714d3ab->enter($__internal_8c94b0f726b5853b41d2477f75d29d17d4dde1690b6c6e331ca676e3a714d3ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_acl.html.twig"));

        // line 18
        $context["acl"] = $this->loadTemplate("SonataAdminBundle:CRUD:base_acl_macro.html.twig", "SonataAdminBundle:CRUD:base_acl.html.twig", 18);
        // line 12
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8c94b0f726b5853b41d2477f75d29d17d4dde1690b6c6e331ca676e3a714d3ab->leave($__internal_8c94b0f726b5853b41d2477f75d29d17d4dde1690b6c6e331ca676e3a714d3ab_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_977859942969a4d8e2b6279b850d031cc707265aa8eddbe8afbdab9dc756ebd6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_977859942969a4d8e2b6279b850d031cc707265aa8eddbe8afbdab9dc756ebd6->enter($__internal_977859942969a4d8e2b6279b850d031cc707265aa8eddbe8afbdab9dc756ebd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:base_acl.html.twig", 15)->display($context);
        
        $__internal_977859942969a4d8e2b6279b850d031cc707265aa8eddbe8afbdab9dc756ebd6->leave($__internal_977859942969a4d8e2b6279b850d031cc707265aa8eddbe8afbdab9dc756ebd6_prof);

    }

    // line 20
    public function block_form($context, array $blocks = array())
    {
        $__internal_fdd2bb2d4757f20b1c57bf16129e06742f7abd6df8a078483c8d03dee4eac4ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdd2bb2d4757f20b1c57bf16129e06742f7abd6df8a078483c8d03dee4eac4ae->enter($__internal_fdd2bb2d4757f20b1c57bf16129e06742f7abd6df8a078483c8d03dee4eac4ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 21
        echo "    ";
        $this->displayBlock('form_acl_roles', $context, $blocks);
        // line 24
        echo "    ";
        $this->displayBlock('form_acl_users', $context, $blocks);
        
        $__internal_fdd2bb2d4757f20b1c57bf16129e06742f7abd6df8a078483c8d03dee4eac4ae->leave($__internal_fdd2bb2d4757f20b1c57bf16129e06742f7abd6df8a078483c8d03dee4eac4ae_prof);

    }

    // line 21
    public function block_form_acl_roles($context, array $blocks = array())
    {
        $__internal_27fcdd69fe6ce3acdf88547ba7299576f43bf883953232f445eda1f6bb696019 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27fcdd69fe6ce3acdf88547ba7299576f43bf883953232f445eda1f6bb696019->enter($__internal_27fcdd69fe6ce3acdf88547ba7299576f43bf883953232f445eda1f6bb696019_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_roles"));

        // line 22
        echo "        ";
        echo $context["acl"]->macro_render_form((isset($context["aclRolesForm"]) || array_key_exists("aclRolesForm", $context) ? $context["aclRolesForm"] : (function () { throw new Twig_Error_Runtime('Variable "aclRolesForm" does not exist.', 22, $this->getSourceContext()); })()), (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new Twig_Error_Runtime('Variable "permissions" does not exist.', 22, $this->getSourceContext()); })()), "td_role", (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 22, $this->getSourceContext()); })()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 22, $this->getSourceContext()); })()), "adminPool", array()), (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new Twig_Error_Runtime('Variable "object" does not exist.', 22, $this->getSourceContext()); })()));
        echo "
    ";
        
        $__internal_27fcdd69fe6ce3acdf88547ba7299576f43bf883953232f445eda1f6bb696019->leave($__internal_27fcdd69fe6ce3acdf88547ba7299576f43bf883953232f445eda1f6bb696019_prof);

    }

    // line 24
    public function block_form_acl_users($context, array $blocks = array())
    {
        $__internal_c3fa131f19b6c1ddbe18f7d6bd615966bf31d813c41d813c2878f8356d4915aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3fa131f19b6c1ddbe18f7d6bd615966bf31d813c41d813c2878f8356d4915aa->enter($__internal_c3fa131f19b6c1ddbe18f7d6bd615966bf31d813c41d813c2878f8356d4915aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_users"));

        // line 25
        echo "        ";
        echo $context["acl"]->macro_render_form((isset($context["aclUsersForm"]) || array_key_exists("aclUsersForm", $context) ? $context["aclUsersForm"] : (function () { throw new Twig_Error_Runtime('Variable "aclUsersForm" does not exist.', 25, $this->getSourceContext()); })()), (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new Twig_Error_Runtime('Variable "permissions" does not exist.', 25, $this->getSourceContext()); })()), "td_username", (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 25, $this->getSourceContext()); })()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 25, $this->getSourceContext()); })()), "adminPool", array()), (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new Twig_Error_Runtime('Variable "object" does not exist.', 25, $this->getSourceContext()); })()));
        echo "
    ";
        
        $__internal_c3fa131f19b6c1ddbe18f7d6bd615966bf31d813c41d813c2878f8356d4915aa->leave($__internal_c3fa131f19b6c1ddbe18f7d6bd615966bf31d813c41d813c2878f8356d4915aa_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_acl.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 25,  85 => 24,  75 => 22,  69 => 21,  61 => 24,  58 => 21,  52 => 20,  45 => 15,  39 => 14,  32 => 12,  30 => 18,  21 => 12,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends base_template %}

{%- block actions -%}
    {% include 'SonataAdminBundle:CRUD:action_buttons.html.twig' %}
{%- endblock -%}

{% import 'SonataAdminBundle:CRUD:base_acl_macro.html.twig' as acl %}

{% block form %}
    {% block form_acl_roles %}
        {{ acl.render_form(aclRolesForm, permissions, 'td_role', admin, sonata_admin.adminPool, object) }}
    {% endblock %}
    {% block form_acl_users %}
        {{ acl.render_form(aclUsersForm, permissions, 'td_username', admin, sonata_admin.adminPool, object) }}
    {% endblock %}
{% endblock %}
", "SonataAdminBundle:CRUD:base_acl.html.twig", "/home/kuba/Workspace/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/base_acl.html.twig");
    }
}
