<?php

/* SonataAdminBundle:CRUD:show.html.twig */
class __TwigTemplate_8f2e0bbf10c37a11126d984c6e2719e56caa994e788c238abb35707ffa2dd598 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show.html.twig", "SonataAdminBundle:CRUD:show.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e5faa1aa00a4fa5c29f5256f4c90d24b2b76014bd3a53e4f79480ba702fdbc11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5faa1aa00a4fa5c29f5256f4c90d24b2b76014bd3a53e4f79480ba702fdbc11->enter($__internal_e5faa1aa00a4fa5c29f5256f4c90d24b2b76014bd3a53e4f79480ba702fdbc11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e5faa1aa00a4fa5c29f5256f4c90d24b2b76014bd3a53e4f79480ba702fdbc11->leave($__internal_e5faa1aa00a4fa5c29f5256f4c90d24b2b76014bd3a53e4f79480ba702fdbc11_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show.html.twig";
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

{% extends 'SonataAdminBundle:CRUD:base_show.html.twig' %}
", "SonataAdminBundle:CRUD:show.html.twig", "/home/kuba/Workspace/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/show.html.twig");
    }
}
