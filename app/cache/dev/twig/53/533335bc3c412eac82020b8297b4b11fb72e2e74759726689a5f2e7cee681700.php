<?php

/* SonataAdminBundle:CRUD:action.html.twig */
class __TwigTemplate_b5447fa912010b5956d0167ded8e68635ff6a5622d639addb96cebcc77fc221c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'tab_menu' => array($this, 'block_tab_menu'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) || array_key_exists("base_template", $context) ? $context["base_template"] : (function () { throw new Twig_Error_Runtime('Variable "base_template" does not exist.', 12, $this->getSourceContext()); })()), "SonataAdminBundle:CRUD:action.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_be4adead4ae87cebdc437d0ed3e858bba2af954a2fe9371e8a130764119a6bdd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be4adead4ae87cebdc437d0ed3e858bba2af954a2fe9371e8a130764119a6bdd->enter($__internal_be4adead4ae87cebdc437d0ed3e858bba2af954a2fe9371e8a130764119a6bdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_be4adead4ae87cebdc437d0ed3e858bba2af954a2fe9371e8a130764119a6bdd->leave($__internal_be4adead4ae87cebdc437d0ed3e858bba2af954a2fe9371e8a130764119a6bdd_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_1d8363e1a23b7c846285699fbd0c8a19bfd30e620dbab54a78266c30bcc9773b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d8363e1a23b7c846285699fbd0c8a19bfd30e620dbab54a78266c30bcc9773b->enter($__internal_1d8363e1a23b7c846285699fbd0c8a19bfd30e620dbab54a78266c30bcc9773b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:action.html.twig", 15)->display($context);
        
        $__internal_1d8363e1a23b7c846285699fbd0c8a19bfd30e620dbab54a78266c30bcc9773b->leave($__internal_1d8363e1a23b7c846285699fbd0c8a19bfd30e620dbab54a78266c30bcc9773b_prof);

    }

    // line 18
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_cfda27edf884aa0e29136b7a19711092cd9158bd53889781c745087e131851b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfda27edf884aa0e29136b7a19711092cd9158bd53889781c745087e131851b9->enter($__internal_cfda27edf884aa0e29136b7a19711092cd9158bd53889781c745087e131851b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        // line 19
        echo "    ";
        if (array_key_exists("action", $context)) {
            // line 20
            echo "        ";
            echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 20, $this->getSourceContext()); })()), "sidemenu", array(0 => (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new Twig_Error_Runtime('Variable "action" does not exist.', 20, $this->getSourceContext()); })())), "method"), array("currentClass" => "active", "template" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 20, $this->getSourceContext()); })()), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
            echo "
    ";
        }
        
        $__internal_cfda27edf884aa0e29136b7a19711092cd9158bd53889781c745087e131851b9->leave($__internal_cfda27edf884aa0e29136b7a19711092cd9158bd53889781c745087e131851b9_prof);

    }

    // line 24
    public function block_content($context, array $blocks = array())
    {
        $__internal_f1de2f92a764967bb8bb6a9b2ab227124cada79109ee2a2492e6468da1980157 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1de2f92a764967bb8bb6a9b2ab227124cada79109ee2a2492e6468da1980157->enter($__internal_f1de2f92a764967bb8bb6a9b2ab227124cada79109ee2a2492e6468da1980157_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 25
        echo "
    Redefine the content block in your action template

";
        
        $__internal_f1de2f92a764967bb8bb6a9b2ab227124cada79109ee2a2492e6468da1980157->leave($__internal_f1de2f92a764967bb8bb6a9b2ab227124cada79109ee2a2492e6468da1980157_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:action.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 25,  68 => 24,  57 => 20,  54 => 19,  48 => 18,  41 => 15,  35 => 14,  20 => 12,);
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

{% block tab_menu %}
    {% if action is defined %}
        {{ knp_menu_render(admin.sidemenu(action), {'currentClass' : 'active', 'template': sonata_admin.adminPool.getTemplate('tab_menu_template')}, 'twig') }}
    {% endif %}
{% endblock %}

{% block content %}

    Redefine the content block in your action template

{% endblock %}
", "SonataAdminBundle:CRUD:action.html.twig", "/home/kuba/Workspace/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/action.html.twig");
    }
}
