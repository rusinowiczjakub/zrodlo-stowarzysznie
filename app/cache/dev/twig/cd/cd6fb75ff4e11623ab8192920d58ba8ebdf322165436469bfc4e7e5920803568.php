<?php

/* SonataAdminBundle:CRUD:list_array.html.twig */
class __TwigTemplate_1ba899f416553157b9927b481a3eb64b8590f820840984ecf01c01a770c58b36 extends Twig_Template
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
        // line 13
        return $this->loadTemplate(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 13, $this->getSourceContext()); })()), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_array.html.twig", 13);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8801c41d74263e9591d2ebeda4c8d7a548d5779241106e78eed97271edb51ef9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8801c41d74263e9591d2ebeda4c8d7a548d5779241106e78eed97271edb51ef9->enter($__internal_8801c41d74263e9591d2ebeda4c8d7a548d5779241106e78eed97271edb51ef9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_array.html.twig"));

        // line 11
        $context["list"] = $this->loadTemplate("SonataAdminBundle:CRUD:base_array_macro.html.twig", "SonataAdminBundle:CRUD:list_array.html.twig", 11);
        // line 13
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8801c41d74263e9591d2ebeda4c8d7a548d5779241106e78eed97271edb51ef9->leave($__internal_8801c41d74263e9591d2ebeda4c8d7a548d5779241106e78eed97271edb51ef9_prof);

    }

    // line 15
    public function block_field($context, array $blocks = array())
    {
        $__internal_a832c8b67e6fd5b3fd8bf7d03aac80f01b8a2fd8ac0a01a1c147026a2d24f274 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a832c8b67e6fd5b3fd8bf7d03aac80f01b8a2fd8ac0a01a1c147026a2d24f274->enter($__internal_a832c8b67e6fd5b3fd8bf7d03aac80f01b8a2fd8ac0a01a1c147026a2d24f274_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 16
        echo "    ";
        echo $context["list"]->macro_render_array((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 16, $this->getSourceContext()); })()), ( !twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["field_description"] ?? null), "options", array(), "any", false, true), "inline", array(), "any", true, true) || twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new Twig_Error_Runtime('Variable "field_description" does not exist.', 16, $this->getSourceContext()); })()), "options", array()), "inline", array())));
        echo "
";
        
        $__internal_a832c8b67e6fd5b3fd8bf7d03aac80f01b8a2fd8ac0a01a1c147026a2d24f274->leave($__internal_a832c8b67e6fd5b3fd8bf7d03aac80f01b8a2fd8ac0a01a1c147026a2d24f274_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_array.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 16,  36 => 15,  29 => 13,  27 => 11,  18 => 13,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}
{% import 'SonataAdminBundle:CRUD:base_array_macro.html.twig' as list %}

{% extends admin.getTemplate('base_list_field') %}

{% block field %}
    {{ list.render_array(value, field_description.options.inline is not defined or field_description.options.inline) }}
{% endblock %}
", "SonataAdminBundle:CRUD:list_array.html.twig", "/home/kuba/Workspace/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/list_array.html.twig");
    }
}
