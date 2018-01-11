<?php

/* SonataAdminBundle:CRUD:edit.html.twig */
class __TwigTemplate_135f00aee035d9c639f4077491d5f8081c4f8b4b75c6fe0efb8312c8572e4c13 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_edit.html.twig", "SonataAdminBundle:CRUD:edit.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_edit.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_25853061f27551dece456aca6cea4c4bff2f4fcb5a6dad1fa9def4311f19917c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25853061f27551dece456aca6cea4c4bff2f4fcb5a6dad1fa9def4311f19917c->enter($__internal_25853061f27551dece456aca6cea4c4bff2f4fcb5a6dad1fa9def4311f19917c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_25853061f27551dece456aca6cea4c4bff2f4fcb5a6dad1fa9def4311f19917c->leave($__internal_25853061f27551dece456aca6cea4c4bff2f4fcb5a6dad1fa9def4311f19917c_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit.html.twig";
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

{% extends 'SonataAdminBundle:CRUD:base_edit.html.twig' %}
", "SonataAdminBundle:CRUD:edit.html.twig", "/home/kuba/Workspace/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/edit.html.twig");
    }
}
