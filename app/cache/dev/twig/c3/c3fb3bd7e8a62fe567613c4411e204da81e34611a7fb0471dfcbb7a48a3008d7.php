<?php

/* SonataAdminBundle:CRUD:show_boolean.html.twig */
class __TwigTemplate_f18186ceb21825cb1fab879b26354d0709e2b21ffeccb9f8b77893f25f3aee1c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_boolean.html.twig", 12);
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
        $__internal_d55e84befe8bac6c2790c13cbc2865df8da24ae32f8b2a9cf523b27551b6c274 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d55e84befe8bac6c2790c13cbc2865df8da24ae32f8b2a9cf523b27551b6c274->enter($__internal_d55e84befe8bac6c2790c13cbc2865df8da24ae32f8b2a9cf523b27551b6c274_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_boolean.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d55e84befe8bac6c2790c13cbc2865df8da24ae32f8b2a9cf523b27551b6c274->leave($__internal_d55e84befe8bac6c2790c13cbc2865df8da24ae32f8b2a9cf523b27551b6c274_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_978ec5a6a090268e6e759153530631ce0b3e7efe4a1f87d0f23bd2015476afe8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_978ec5a6a090268e6e759153530631ce0b3e7efe4a1f87d0f23bd2015476afe8->enter($__internal_978ec5a6a090268e6e759153530631ce0b3e7efe4a1f87d0f23bd2015476afe8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        $this->loadTemplate("SonataAdminBundle:CRUD:display_boolean.html.twig", "SonataAdminBundle:CRUD:show_boolean.html.twig", 15)->display($context);
        
        $__internal_978ec5a6a090268e6e759153530631ce0b3e7efe4a1f87d0f23bd2015476afe8->leave($__internal_978ec5a6a090268e6e759153530631ce0b3e7efe4a1f87d0f23bd2015476afe8_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_boolean.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 15,  34 => 14,  11 => 12,);
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
    {%- include 'SonataAdminBundle:CRUD:display_boolean.html.twig' -%}
{% endblock %}
", "SonataAdminBundle:CRUD:show_boolean.html.twig", "/home/kuba/Workspace/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/show_boolean.html.twig");
    }
}
