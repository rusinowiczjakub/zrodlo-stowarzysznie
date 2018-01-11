<?php

/* SonataAdminBundle::empty_layout.html.twig */
class __TwigTemplate_19c0278ab11cb7a9ef7531c2fed80c3d968eed92f084f200e4a3e624735deb3e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'sonata_header' => array($this, 'block_sonata_header'),
            'sonata_left_side' => array($this, 'block_sonata_left_side'),
            'sonata_nav' => array($this, 'block_sonata_nav'),
            'sonata_breadcrumb' => array($this, 'block_sonata_breadcrumb'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'sonata_wrapper' => array($this, 'block_sonata_wrapper'),
            'sonata_page_content' => array($this, 'block_sonata_page_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin_pool"]) || array_key_exists("admin_pool", $context) ? $context["admin_pool"] : (function () { throw new Twig_Error_Runtime('Variable "admin_pool" does not exist.', 12, $this->getSourceContext()); })()), "getTemplate", array(0 => "layout"), "method"), "SonataAdminBundle::empty_layout.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0a414414583edcfb6f7544583212476bd54132d6d0638dcf39b86d7122f9d2f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a414414583edcfb6f7544583212476bd54132d6d0638dcf39b86d7122f9d2f0->enter($__internal_0a414414583edcfb6f7544583212476bd54132d6d0638dcf39b86d7122f9d2f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle::empty_layout.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0a414414583edcfb6f7544583212476bd54132d6d0638dcf39b86d7122f9d2f0->leave($__internal_0a414414583edcfb6f7544583212476bd54132d6d0638dcf39b86d7122f9d2f0_prof);

    }

    // line 14
    public function block_sonata_header($context, array $blocks = array())
    {
        $__internal_881de2d3fb788764fa5a89762b9e199b8a9f6f35312daa6ebbf672c440e9699b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_881de2d3fb788764fa5a89762b9e199b8a9f6f35312daa6ebbf672c440e9699b->enter($__internal_881de2d3fb788764fa5a89762b9e199b8a9f6f35312daa6ebbf672c440e9699b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

        
        $__internal_881de2d3fb788764fa5a89762b9e199b8a9f6f35312daa6ebbf672c440e9699b->leave($__internal_881de2d3fb788764fa5a89762b9e199b8a9f6f35312daa6ebbf672c440e9699b_prof);

    }

    // line 15
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_f995696be200f0a639936d84f7863f3f07d430b9c0317c5c139c69812508e12d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f995696be200f0a639936d84f7863f3f07d430b9c0317c5c139c69812508e12d->enter($__internal_f995696be200f0a639936d84f7863f3f07d430b9c0317c5c139c69812508e12d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        
        $__internal_f995696be200f0a639936d84f7863f3f07d430b9c0317c5c139c69812508e12d->leave($__internal_f995696be200f0a639936d84f7863f3f07d430b9c0317c5c139c69812508e12d_prof);

    }

    // line 16
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_cec998fcaf703abae64a7723d4edb71a5e3c3909e0c8caa4051465e31f33f623 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cec998fcaf703abae64a7723d4edb71a5e3c3909e0c8caa4051465e31f33f623->enter($__internal_cec998fcaf703abae64a7723d4edb71a5e3c3909e0c8caa4051465e31f33f623_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        
        $__internal_cec998fcaf703abae64a7723d4edb71a5e3c3909e0c8caa4051465e31f33f623->leave($__internal_cec998fcaf703abae64a7723d4edb71a5e3c3909e0c8caa4051465e31f33f623_prof);

    }

    // line 17
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
        $__internal_0cf1b68d77e5829c62763796c7fb16920e846dc84bc20a570731c56696651ac5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cf1b68d77e5829c62763796c7fb16920e846dc84bc20a570731c56696651ac5->enter($__internal_0cf1b68d77e5829c62763796c7fb16920e846dc84bc20a570731c56696651ac5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        
        $__internal_0cf1b68d77e5829c62763796c7fb16920e846dc84bc20a570731c56696651ac5->leave($__internal_0cf1b68d77e5829c62763796c7fb16920e846dc84bc20a570731c56696651ac5_prof);

    }

    // line 19
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_71d5c3107139b66238c4ecdf251aab764089561f158dd0f15cc261626efe017b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71d5c3107139b66238c4ecdf251aab764089561f158dd0f15cc261626efe017b->enter($__internal_71d5c3107139b66238c4ecdf251aab764089561f158dd0f15cc261626efe017b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 20
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

    <style>
        .content {
            margin: 0px;
            padding: 0px;
        }
    </style>
";
        
        $__internal_71d5c3107139b66238c4ecdf251aab764089561f158dd0f15cc261626efe017b->leave($__internal_71d5c3107139b66238c4ecdf251aab764089561f158dd0f15cc261626efe017b_prof);

    }

    // line 30
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_f32c9fd82efa3665d6eedb9d4ff9a5cfb74551639379d80585547bcdae926d2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f32c9fd82efa3665d6eedb9d4ff9a5cfb74551639379d80585547bcdae926d2b->enter($__internal_f32c9fd82efa3665d6eedb9d4ff9a5cfb74551639379d80585547bcdae926d2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        // line 31
        echo "    ";
        $this->displayBlock('sonata_page_content', $context, $blocks);
        
        $__internal_f32c9fd82efa3665d6eedb9d4ff9a5cfb74551639379d80585547bcdae926d2b->leave($__internal_f32c9fd82efa3665d6eedb9d4ff9a5cfb74551639379d80585547bcdae926d2b_prof);

    }

    public function block_sonata_page_content($context, array $blocks = array())
    {
        $__internal_692c5040d372215f53f861d53adc3cbc40426a713e7558a0341d8ce920aa8e75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_692c5040d372215f53f861d53adc3cbc40426a713e7558a0341d8ce920aa8e75->enter($__internal_692c5040d372215f53f861d53adc3cbc40426a713e7558a0341d8ce920aa8e75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

        // line 32
        echo "        ";
        $this->displayParentBlock("sonata_page_content", $context, $blocks);
        echo "
    ";
        
        $__internal_692c5040d372215f53f861d53adc3cbc40426a713e7558a0341d8ce920aa8e75->leave($__internal_692c5040d372215f53f861d53adc3cbc40426a713e7558a0341d8ce920aa8e75_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle::empty_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 32,  112 => 31,  106 => 30,  89 => 20,  83 => 19,  72 => 17,  61 => 16,  50 => 15,  39 => 14,  24 => 12,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends admin_pool.getTemplate('layout') %}

{% block sonata_header %}{% endblock %}
{% block sonata_left_side %}{% endblock %}
{% block sonata_nav %}{% endblock %}
{% block sonata_breadcrumb %}{% endblock %}

{% block stylesheets %}
    {{ parent() }}

    <style>
        .content {
            margin: 0px;
            padding: 0px;
        }
    </style>
{% endblock %}

{% block sonata_wrapper %}
    {% block sonata_page_content %}
        {{ parent() }}
    {% endblock %}
{% endblock %}
", "SonataAdminBundle::empty_layout.html.twig", "/home/kuba/Workspace/vendor/sonata-project/admin-bundle/src/Resources/views/empty_layout.html.twig");
    }
}
