<?php

/* SonataAdminBundle:CRUD:list_percent.html.twig */
class __TwigTemplate_cd935cda269aa3dd92660474af9695a47a45d20e81852d0bea6017f5c064f263 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 12, $this->getSourceContext()); })()), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_percent.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2d9bfc5b9f36166501115cb137724c1a9086442c45dcf802b9df5fbe06bf7f98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d9bfc5b9f36166501115cb137724c1a9086442c45dcf802b9df5fbe06bf7f98->enter($__internal_2d9bfc5b9f36166501115cb137724c1a9086442c45dcf802b9df5fbe06bf7f98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_percent.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2d9bfc5b9f36166501115cb137724c1a9086442c45dcf802b9df5fbe06bf7f98->leave($__internal_2d9bfc5b9f36166501115cb137724c1a9086442c45dcf802b9df5fbe06bf7f98_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_9d5a1d76f2a5747cd621cae0f243183106b5788c74ccb12d72a0d4b30185f16a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d5a1d76f2a5747cd621cae0f243183106b5788c74ccb12d72a0d4b30185f16a->enter($__internal_9d5a1d76f2a5747cd621cae0f243183106b5788c74ccb12d72a0d4b30185f16a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context["value"] = ((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 15, $this->getSourceContext()); })()) * 100);
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 16, $this->getSourceContext()); })()), "html", null, true);
        echo " %
";
        
        $__internal_9d5a1d76f2a5747cd621cae0f243183106b5788c74ccb12d72a0d4b30185f16a->leave($__internal_9d5a1d76f2a5747cd621cae0f243183106b5788c74ccb12d72a0d4b30185f16a_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_percent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 16,  39 => 15,  33 => 14,  18 => 12,);
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

{% block field %}
    {% set value = value * 100 %}
    {{ value }} %
{% endblock %}
", "SonataAdminBundle:CRUD:list_percent.html.twig", "/home/kuba/Workspace/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/list_percent.html.twig");
    }
}
