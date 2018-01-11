<?php

/* SonataAdminBundle:Pager:results.html.twig */
class __TwigTemplate_17dc727e129abf7c57f5fd4049332ba19a05917a4da0c027b07a1a2eb78bac23 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:Pager:base_results.html.twig", "SonataAdminBundle:Pager:results.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Pager:base_results.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ff631da89f51ae5002bbfdc92b64531952c148ae6418a239a802c56eed350880 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff631da89f51ae5002bbfdc92b64531952c148ae6418a239a802c56eed350880->enter($__internal_ff631da89f51ae5002bbfdc92b64531952c148ae6418a239a802c56eed350880_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:results.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ff631da89f51ae5002bbfdc92b64531952c148ae6418a239a802c56eed350880->leave($__internal_ff631da89f51ae5002bbfdc92b64531952c148ae6418a239a802c56eed350880_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Pager:results.html.twig";
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

{% extends 'SonataAdminBundle:Pager:base_results.html.twig' %}
", "SonataAdminBundle:Pager:results.html.twig", "/home/kuba/Workspace/vendor/sonata-project/admin-bundle/src/Resources/views/Pager/results.html.twig");
    }
}
