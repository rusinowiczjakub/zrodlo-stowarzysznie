<?php

/* SonataAdminBundle:CRUD:list.html.twig */
class __TwigTemplate_7f2193198839fcb2d953f5b66fd37dadaf673d6dc76de093564226e6474ae118 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_list.html.twig", "SonataAdminBundle:CRUD:list.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_list.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4a8116ddceadfc7092132a615dd7c67dd8b6482af188efb0d1151cdad207b5cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a8116ddceadfc7092132a615dd7c67dd8b6482af188efb0d1151cdad207b5cd->enter($__internal_4a8116ddceadfc7092132a615dd7c67dd8b6482af188efb0d1151cdad207b5cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4a8116ddceadfc7092132a615dd7c67dd8b6482af188efb0d1151cdad207b5cd->leave($__internal_4a8116ddceadfc7092132a615dd7c67dd8b6482af188efb0d1151cdad207b5cd_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list.html.twig";
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

{% extends 'SonataAdminBundle:CRUD:base_list.html.twig' %}
", "SonataAdminBundle:CRUD:list.html.twig", "/home/kuba/Workspace/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/list.html.twig");
    }
}
