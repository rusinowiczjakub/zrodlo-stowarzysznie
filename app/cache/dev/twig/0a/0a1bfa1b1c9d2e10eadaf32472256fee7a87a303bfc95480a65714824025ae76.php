<?php

/* SonataAdminBundle:CRUD:list_trans.html.twig */
class __TwigTemplate_27a15b98b649ce02d8b9891f7f0c81e8c68871d57fa7ea94b18c7c4d6914514a extends Twig_Template
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
        return $this->loadTemplate(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 12, $this->getSourceContext()); })()), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_trans.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0561e74338edd6b0f3b865654d9c636b1a10a0ad8daa2ffb9568562c22489ae6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0561e74338edd6b0f3b865654d9c636b1a10a0ad8daa2ffb9568562c22489ae6->enter($__internal_0561e74338edd6b0f3b865654d9c636b1a10a0ad8daa2ffb9568562c22489ae6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_trans.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0561e74338edd6b0f3b865654d9c636b1a10a0ad8daa2ffb9568562c22489ae6->leave($__internal_0561e74338edd6b0f3b865654d9c636b1a10a0ad8daa2ffb9568562c22489ae6_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_5c64f6ea66d3986f8bb19ca1496a55e76f777aef4c5ae7a503411eb84879b9fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c64f6ea66d3986f8bb19ca1496a55e76f777aef4c5ae7a503411eb84879b9fb->enter($__internal_5c64f6ea66d3986f8bb19ca1496a55e76f777aef4c5ae7a503411eb84879b9fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context["translationDomain"] = ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["field_description"] ?? null), "options", array(), "any", false, true), "catalogue", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["field_description"] ?? null), "options", array(), "any", false, true), "catalogue", array()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 15, $this->getSourceContext()); })()), "translationDomain", array()))) : (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 15, $this->getSourceContext()); })()), "translationDomain", array())));
        // line 16
        echo "    ";
        $context["valueFormat"] = ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["field_description"] ?? null), "options", array(), "any", false, true), "format", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["field_description"] ?? null), "options", array(), "any", false, true), "format", array()), "%s")) : ("%s"));
        // line 17
        echo "
    ";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(sprintf((isset($context["valueFormat"]) || array_key_exists("valueFormat", $context) ? $context["valueFormat"] : (function () { throw new Twig_Error_Runtime('Variable "valueFormat" does not exist.', 18, $this->getSourceContext()); })()), (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 18, $this->getSourceContext()); })())), array(), (isset($context["translationDomain"]) || array_key_exists("translationDomain", $context) ? $context["translationDomain"] : (function () { throw new Twig_Error_Runtime('Variable "translationDomain" does not exist.', 18, $this->getSourceContext()); })())), "html", null, true);
        echo "
";
        
        $__internal_5c64f6ea66d3986f8bb19ca1496a55e76f777aef4c5ae7a503411eb84879b9fb->leave($__internal_5c64f6ea66d3986f8bb19ca1496a55e76f777aef4c5ae7a503411eb84879b9fb_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_trans.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 18,  45 => 17,  42 => 16,  39 => 15,  33 => 14,  18 => 12,);
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

{% block field%}
    {% set translationDomain = field_description.options.catalogue|default(admin.translationDomain) %}
    {% set valueFormat = field_description.options.format|default('%s') %}

    {{valueFormat|format(value)|trans({}, translationDomain)}}
{% endblock %}
", "SonataAdminBundle:CRUD:list_trans.html.twig", "/home/kuba/Workspace/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/list_trans.html.twig");
    }
}
