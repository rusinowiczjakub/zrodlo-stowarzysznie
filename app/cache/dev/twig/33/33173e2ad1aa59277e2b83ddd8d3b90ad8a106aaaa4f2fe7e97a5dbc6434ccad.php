<?php

/* SonataAdminBundle:Core:create_button.html.twig */
class __TwigTemplate_ca346de1aa41d606aa0651397c7d3f20b3b443e24a1f6fde8882aed2ddbe49bc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 15
        $this->parent = $this->loadTemplate("SonataAdminBundle:Button:create_button.html.twig", "SonataAdminBundle:Core:create_button.html.twig", 15);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Button:create_button.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f19ae843f5b59d8cecaaf3c1c8753e296a23c6b873869be3299950b3b8f9f0c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f19ae843f5b59d8cecaaf3c1c8753e296a23c6b873869be3299950b3b8f9f0c5->enter($__internal_f19ae843f5b59d8cecaaf3c1c8753e296a23c6b873869be3299950b3b8f9f0c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:create_button.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f19ae843f5b59d8cecaaf3c1c8753e296a23c6b873869be3299950b3b8f9f0c5->leave($__internal_f19ae843f5b59d8cecaaf3c1c8753e296a23c6b873869be3299950b3b8f9f0c5_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Core:create_button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 15,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{# DEPRECATED #}
{# This file is kept here for backward compatibility - Rather use SonataAdminBundle:Button:create_button.html.twig #}

{% extends 'SonataAdminBundle:Button:create_button.html.twig' %}
", "SonataAdminBundle:Core:create_button.html.twig", "/home/kuba/Workspace/vendor/sonata-project/admin-bundle/src/Resources/views/Core/create_button.html.twig");
    }
}
