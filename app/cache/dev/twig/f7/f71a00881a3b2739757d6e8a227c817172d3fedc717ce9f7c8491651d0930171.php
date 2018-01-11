<?php

/* SonataAdminBundle:CRUD:acl.html.twig */
class __TwigTemplate_534b527c72e81b449f6de272d5f86f195c3559128781a8334edd6b96c33558c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_acl.html.twig", "SonataAdminBundle:CRUD:acl.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_acl.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2cac310aa6c018cc3c29ce3793d9c43722d323184a76bcd47b28966f480a05d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cac310aa6c018cc3c29ce3793d9c43722d323184a76bcd47b28966f480a05d6->enter($__internal_2cac310aa6c018cc3c29ce3793d9c43722d323184a76bcd47b28966f480a05d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:acl.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2cac310aa6c018cc3c29ce3793d9c43722d323184a76bcd47b28966f480a05d6->leave($__internal_2cac310aa6c018cc3c29ce3793d9c43722d323184a76bcd47b28966f480a05d6_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:acl.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 12,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends 'SonataAdminBundle:CRUD:base_acl.html.twig' %}
", "SonataAdminBundle:CRUD:acl.html.twig", "/home/kuba/Workspace/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/acl.html.twig");
    }
}
