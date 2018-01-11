<?php

/* SonataAdminBundle:CRUD:base_edit.html.twig */
class __TwigTemplate_ca216ec536343e8b549cad4869a65d3110274c9dbff1f473a718e9b68ad41c0c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $_trait_0 = $this->loadTemplate("SonataAdminBundle:CRUD:base_edit_form.html.twig", "SonataAdminBundle:CRUD:base_edit.html.twig", 33);
        // line 33
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."SonataAdminBundle:CRUD:base_edit_form.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        if (!isset($_trait_0_blocks["form"])) {
            throw new Twig_Error_Runtime(sprintf('Block "form" is not defined in trait "SonataAdminBundle:CRUD:base_edit_form.html.twig".'));
        }

        $_trait_0_blocks["parentForm"] = $_trait_0_blocks["form"]; unset($_trait_0_blocks["form"]);

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'title' => array($this, 'block_title'),
                'navbar_title' => array($this, 'block_navbar_title'),
                'actions' => array($this, 'block_actions'),
                'tab_menu' => array($this, 'block_tab_menu'),
                'form' => array($this, 'block_form'),
            )
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) || array_key_exists("base_template", $context) ? $context["base_template"] : (function () { throw new Twig_Error_Runtime('Variable "base_template" does not exist.', 12, $this->getSourceContext()); })()), "SonataAdminBundle:CRUD:base_edit.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_89257807e3044cd8ae0d1f88b4ac097f21007faa13b7ab26c032ab600d7fa162 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89257807e3044cd8ae0d1f88b4ac097f21007faa13b7ab26c032ab600d7fa162->enter($__internal_89257807e3044cd8ae0d1f88b4ac097f21007faa13b7ab26c032ab600d7fa162_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_edit.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_89257807e3044cd8ae0d1f88b4ac097f21007faa13b7ab26c032ab600d7fa162->leave($__internal_89257807e3044cd8ae0d1f88b4ac097f21007faa13b7ab26c032ab600d7fa162_prof);

    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        $__internal_0b46f41a10c7370a81f0881f1237fbdc1e6f0486883b4b00a82eab2574123365 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b46f41a10c7370a81f0881f1237fbdc1e6f0486883b4b00a82eab2574123365->enter($__internal_0b46f41a10c7370a81f0881f1237fbdc1e6f0486883b4b00a82eab2574123365_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 15
        echo "    ";
        // line 16
        echo "    ";
        if ( !(null === ((array_key_exists("objectId", $context)) ? (_twig_default_filter((isset($context["objectId"]) || array_key_exists("objectId", $context) ? $context["objectId"] : (function () { throw new Twig_Error_Runtime('Variable "objectId" does not exist.', 16, $this->getSourceContext()); })()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 16, $this->getSourceContext()); })()), "id", array(0 => (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new Twig_Error_Runtime('Variable "object" does not exist.', 16, $this->getSourceContext()); })())), "method"))) : (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 16, $this->getSourceContext()); })()), "id", array(0 => (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new Twig_Error_Runtime('Variable "object" does not exist.', 16, $this->getSourceContext()); })())), "method"))))) {
            // line 17
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_edit", array("%name%" => twig_truncate_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 17, $this->getSourceContext()); })()), "toString", array(0 => (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new Twig_Error_Runtime('Variable "object" does not exist.', 17, $this->getSourceContext()); })())), "method"), 15)), "SonataAdminBundle"), "html", null, true);
            echo "
    ";
        } else {
            // line 19
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_create", array(), "SonataAdminBundle"), "html", null, true);
            echo "
    ";
        }
        
        $__internal_0b46f41a10c7370a81f0881f1237fbdc1e6f0486883b4b00a82eab2574123365->leave($__internal_0b46f41a10c7370a81f0881f1237fbdc1e6f0486883b4b00a82eab2574123365_prof);

    }

    // line 23
    public function block_navbar_title($context, array $blocks = array())
    {
        $__internal_fbcbe92c680962755d207923cc810eb387da76f7ee7668900a21001dc7810b1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbcbe92c680962755d207923cc810eb387da76f7ee7668900a21001dc7810b1e->enter($__internal_fbcbe92c680962755d207923cc810eb387da76f7ee7668900a21001dc7810b1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar_title"));

        // line 24
        echo "    ";
        $this->displayBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_fbcbe92c680962755d207923cc810eb387da76f7ee7668900a21001dc7810b1e->leave($__internal_fbcbe92c680962755d207923cc810eb387da76f7ee7668900a21001dc7810b1e_prof);

    }

    // line 27
    public function block_actions($context, array $blocks = array())
    {
        $__internal_275f0de33f06fb317b934c7f2593e7889ae4c40f2272068b98f584341345334e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_275f0de33f06fb317b934c7f2593e7889ae4c40f2272068b98f584341345334e->enter($__internal_275f0de33f06fb317b934c7f2593e7889ae4c40f2272068b98f584341345334e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 28
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:base_edit.html.twig", 28)->display($context);
        
        $__internal_275f0de33f06fb317b934c7f2593e7889ae4c40f2272068b98f584341345334e->leave($__internal_275f0de33f06fb317b934c7f2593e7889ae4c40f2272068b98f584341345334e_prof);

    }

    // line 31
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_274e7ffa9dcc08b9772f2fc2ec83cf4e8a6d85db5521411799637dda560f0011 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_274e7ffa9dcc08b9772f2fc2ec83cf4e8a6d85db5521411799637dda560f0011->enter($__internal_274e7ffa9dcc08b9772f2fc2ec83cf4e8a6d85db5521411799637dda560f0011_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 31, $this->getSourceContext()); })()), "sidemenu", array(0 => (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new Twig_Error_Runtime('Variable "action" does not exist.', 31, $this->getSourceContext()); })())), "method"), array("currentClass" => "active", "template" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 31, $this->getSourceContext()); })()), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
        
        $__internal_274e7ffa9dcc08b9772f2fc2ec83cf4e8a6d85db5521411799637dda560f0011->leave($__internal_274e7ffa9dcc08b9772f2fc2ec83cf4e8a6d85db5521411799637dda560f0011_prof);

    }

    // line 35
    public function block_form($context, array $blocks = array())
    {
        $__internal_aa586ed258083355ab68d5ed784267a1bb3ef0a5c37a2790111e6fe6276bc47b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa586ed258083355ab68d5ed784267a1bb3ef0a5c37a2790111e6fe6276bc47b->enter($__internal_aa586ed258083355ab68d5ed784267a1bb3ef0a5c37a2790111e6fe6276bc47b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 36
        echo "    ";
        $this->displayBlock("parentForm", $context, $blocks);
        echo "
";
        
        $__internal_aa586ed258083355ab68d5ed784267a1bb3ef0a5c37a2790111e6fe6276bc47b->leave($__internal_aa586ed258083355ab68d5ed784267a1bb3ef0a5c37a2790111e6fe6276bc47b_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 36,  124 => 35,  112 => 31,  105 => 28,  99 => 27,  89 => 24,  83 => 23,  72 => 19,  66 => 17,  63 => 16,  61 => 15,  55 => 14,  40 => 12,  12 => 33,);
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

{% block title %}
    {# NEXT_MAJOR: remove default filter #}
    {% if objectId|default(admin.id(object)) is not null %}
        {{ \"title_edit\"|trans({'%name%': admin.toString(object)|truncate(15) }, 'SonataAdminBundle') }}
    {% else %}
        {{ \"title_create\"|trans({}, 'SonataAdminBundle') }}
    {% endif %}
{% endblock %}

{% block navbar_title %}
    {{ block('title') }}
{% endblock %}

{%- block actions -%}
    {% include 'SonataAdminBundle:CRUD:action_buttons.html.twig' %}
{%- endblock -%}

{% block tab_menu %}{{ knp_menu_render(admin.sidemenu(action), {'currentClass' : 'active', 'template': sonata_admin.adminPool.getTemplate('tab_menu_template')}, 'twig') }}{% endblock %}

{% use 'SonataAdminBundle:CRUD:base_edit_form.html.twig' with form as parentForm %}

{% block form %}
    {{ block('parentForm') }}
{% endblock %}
", "SonataAdminBundle:CRUD:base_edit.html.twig", "/home/kuba/Workspace/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/base_edit.html.twig");
    }
}
