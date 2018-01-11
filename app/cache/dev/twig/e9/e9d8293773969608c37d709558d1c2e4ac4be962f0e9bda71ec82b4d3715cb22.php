<?php

/* SonataAdminBundle:CRUD:list_string.html.twig */
class __TwigTemplate_3712582dc44acf43479892554ae832ec797064f17c46bd464ee49c2d8d78fd7f extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 12, $this->getSourceContext()); })()), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_string.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0b3ab2cf6ede3b385446619886e04bb6d4bab10acd560342bed1ab9d66a36677 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b3ab2cf6ede3b385446619886e04bb6d4bab10acd560342bed1ab9d66a36677->enter($__internal_0b3ab2cf6ede3b385446619886e04bb6d4bab10acd560342bed1ab9d66a36677_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_string.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0b3ab2cf6ede3b385446619886e04bb6d4bab10acd560342bed1ab9d66a36677->leave($__internal_0b3ab2cf6ede3b385446619886e04bb6d4bab10acd560342bed1ab9d66a36677_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_string.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  9 => 12,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends admin.getTemplate('base_list_field') %}
", "SonataAdminBundle:CRUD:list_string.html.twig", "/home/kuba/Workspace/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/list_string.html.twig");
    }
}
