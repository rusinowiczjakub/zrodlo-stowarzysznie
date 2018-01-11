<?php

/* SonataAdminBundle:Pager:results.html.twig */
class __TwigTemplate_dcb7af7124923107f8d913ac126609a868f4536103b5846e50882182cb51b41f extends Twig_Template
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
        $__internal_fe32c0097dd74eda42ffc6e7d9210daf777abc7ccac8d73941aba3985b7a2a6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe32c0097dd74eda42ffc6e7d9210daf777abc7ccac8d73941aba3985b7a2a6b->enter($__internal_fe32c0097dd74eda42ffc6e7d9210daf777abc7ccac8d73941aba3985b7a2a6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:results.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fe32c0097dd74eda42ffc6e7d9210daf777abc7ccac8d73941aba3985b7a2a6b->leave($__internal_fe32c0097dd74eda42ffc6e7d9210daf777abc7ccac8d73941aba3985b7a2a6b_prof);

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
