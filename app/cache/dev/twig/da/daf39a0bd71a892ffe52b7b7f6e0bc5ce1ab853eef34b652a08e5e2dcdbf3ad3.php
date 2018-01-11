<?php

/* SonataAdminBundle:CRUD:show_compare.html.twig */
class __TwigTemplate_d979df70f2c7874b43783c07438e1f5b0671e037a304e8eecfe479037c3563b5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_compare.html.twig", "SonataAdminBundle:CRUD:show_compare.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_compare.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_988766bc1a8076ef184d6080b17794353bf03ebfb61d2bf7713dd55c5dca24d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_988766bc1a8076ef184d6080b17794353bf03ebfb61d2bf7713dd55c5dca24d0->enter($__internal_988766bc1a8076ef184d6080b17794353bf03ebfb61d2bf7713dd55c5dca24d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_compare.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_988766bc1a8076ef184d6080b17794353bf03ebfb61d2bf7713dd55c5dca24d0->leave($__internal_988766bc1a8076ef184d6080b17794353bf03ebfb61d2bf7713dd55c5dca24d0_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_compare.html.twig";
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

{% extends 'SonataAdminBundle:CRUD:base_show_compare.html.twig' %}
", "SonataAdminBundle:CRUD:show_compare.html.twig", "/home/kuba/Workspace/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/show_compare.html.twig");
    }
}
