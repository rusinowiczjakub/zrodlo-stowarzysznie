<?php

/* SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig */
class __TwigTemplate_e76d47a0065c3b4d984da26969d874918dc61b39e4f3507f4035df4b937246b0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:Form:filter_admin_fields.html.twig", "SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Form:filter_admin_fields.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ae154d220fa628b4a2bf7aaccba5c42b2bdbfea88ca0abc1ca540bcff920b26b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae154d220fa628b4a2bf7aaccba5c42b2bdbfea88ca0abc1ca540bcff920b26b->enter($__internal_ae154d220fa628b4a2bf7aaccba5c42b2bdbfea88ca0abc1ca540bcff920b26b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ae154d220fa628b4a2bf7aaccba5c42b2bdbfea88ca0abc1ca540bcff920b26b->leave($__internal_ae154d220fa628b4a2bf7aaccba5c42b2bdbfea88ca0abc1ca540bcff920b26b_prof);

    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig";
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

{% extends 'SonataAdminBundle:Form:filter_admin_fields.html.twig' %}
", "SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig", "/home/kuba/Workspace/vendor/sonata-project/doctrine-orm-admin-bundle/src/Resources/views/Form/filter_admin_fields.html.twig");
    }
}
