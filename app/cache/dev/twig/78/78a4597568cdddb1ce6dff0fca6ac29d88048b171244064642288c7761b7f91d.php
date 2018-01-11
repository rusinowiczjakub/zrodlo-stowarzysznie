<?php

/* SonataAdminBundle:Pager:links.html.twig */
class __TwigTemplate_a8183c9a3620dc2d985a3c75427d9a5f50e94269ad8c6ab188820efbcc0022c6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:Pager:base_links.html.twig", "SonataAdminBundle:Pager:links.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Pager:base_links.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0b9b4cf39e1460d25223b9346357df45598cca9b6fff2a3d7e75c8fd741dd778 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b9b4cf39e1460d25223b9346357df45598cca9b6fff2a3d7e75c8fd741dd778->enter($__internal_0b9b4cf39e1460d25223b9346357df45598cca9b6fff2a3d7e75c8fd741dd778_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:links.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0b9b4cf39e1460d25223b9346357df45598cca9b6fff2a3d7e75c8fd741dd778->leave($__internal_0b9b4cf39e1460d25223b9346357df45598cca9b6fff2a3d7e75c8fd741dd778_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Pager:links.html.twig";
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

{% extends 'SonataAdminBundle:Pager:base_links.html.twig' %}
", "SonataAdminBundle:Pager:links.html.twig", "/home/kuba/Workspace/vendor/sonata-project/admin-bundle/src/Resources/views/Pager/links.html.twig");
    }
}
