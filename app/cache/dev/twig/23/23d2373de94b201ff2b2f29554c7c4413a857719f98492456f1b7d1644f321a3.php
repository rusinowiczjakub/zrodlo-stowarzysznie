<?php

/* SonataAdminBundle:CRUD:list.html.twig */
class __TwigTemplate_65e87c8041eca09db2e38a7c9c66ac458e869a9a4861bf69ab4182fc364f9583 extends Twig_Template
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
        $__internal_d002c107d2c2fbfa524f17ba4e19e8cffcb92c7862a39b1048483eb83ab3321a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d002c107d2c2fbfa524f17ba4e19e8cffcb92c7862a39b1048483eb83ab3321a->enter($__internal_d002c107d2c2fbfa524f17ba4e19e8cffcb92c7862a39b1048483eb83ab3321a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d002c107d2c2fbfa524f17ba4e19e8cffcb92c7862a39b1048483eb83ab3321a->leave($__internal_d002c107d2c2fbfa524f17ba4e19e8cffcb92c7862a39b1048483eb83ab3321a_prof);

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
