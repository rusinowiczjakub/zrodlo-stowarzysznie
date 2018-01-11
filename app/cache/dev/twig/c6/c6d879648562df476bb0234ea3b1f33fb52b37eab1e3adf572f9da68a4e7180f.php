<?php

/* SonataAdminBundle:CRUD:history.html.twig */
class __TwigTemplate_b7d72072693581f1fafc0b7a3c9bf1996ec49ee99971a0a5c28e2f5d941d4810 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_history.html.twig", "SonataAdminBundle:CRUD:history.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_history.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7be68b3a9745fc755efded66b3b995c194fae72a565d972b5001f69cf36c9446 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7be68b3a9745fc755efded66b3b995c194fae72a565d972b5001f69cf36c9446->enter($__internal_7be68b3a9745fc755efded66b3b995c194fae72a565d972b5001f69cf36c9446_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:history.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7be68b3a9745fc755efded66b3b995c194fae72a565d972b5001f69cf36c9446->leave($__internal_7be68b3a9745fc755efded66b3b995c194fae72a565d972b5001f69cf36c9446_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:history.html.twig";
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

{% extends 'SonataAdminBundle:CRUD:base_history.html.twig' %}
", "SonataAdminBundle:CRUD:history.html.twig", "/home/kuba/Workspace/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/history.html.twig");
    }
}
