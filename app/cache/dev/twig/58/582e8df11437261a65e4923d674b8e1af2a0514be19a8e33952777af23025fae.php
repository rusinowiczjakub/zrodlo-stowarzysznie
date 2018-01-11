<?php

/* SonataAdminBundle:CRUD:edit_string.html.twig */
class __TwigTemplate_73721b4eccc752c82bc0a3d83d476371493e93aed4e5898b3d3e6d9ab15fe6f2 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) || array_key_exists("base_template", $context) ? $context["base_template"] : (function () { throw new Twig_Error_Runtime('Variable "base_template" does not exist.', 12, $this->getSourceContext()); })()), "SonataAdminBundle:CRUD:edit_string.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9d205e1e159c1261f3661976f6404cc09ded41564f4ebcb92da965fa0b90ae8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d205e1e159c1261f3661976f6404cc09ded41564f4ebcb92da965fa0b90ae8c->enter($__internal_9d205e1e159c1261f3661976f6404cc09ded41564f4ebcb92da965fa0b90ae8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_string.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9d205e1e159c1261f3661976f6404cc09ded41564f4ebcb92da965fa0b90ae8c->leave($__internal_9d205e1e159c1261f3661976f6404cc09ded41564f4ebcb92da965fa0b90ae8c_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_7a6ad5fe64f7293079432782d6ac65afe4f1df92991a9f4c1b18119b738e5a64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a6ad5fe64f7293079432782d6ac65afe4f1df92991a9f4c1b18119b738e5a64->enter($__internal_7a6ad5fe64f7293079432782d6ac65afe4f1df92991a9f4c1b18119b738e5a64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["field_element"]) || array_key_exists("field_element", $context) ? $context["field_element"] : (function () { throw new Twig_Error_Runtime('Variable "field_element" does not exist.', 14, $this->getSourceContext()); })()), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_7a6ad5fe64f7293079432782d6ac65afe4f1df92991a9f4c1b18119b738e5a64->leave($__internal_7a6ad5fe64f7293079432782d6ac65afe4f1df92991a9f4c1b18119b738e5a64_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_string.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 14,  18 => 12,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends base_template %}

{% block field %}{{ form_widget(field_element, {'attr': {'class' : 'title'}}) }}{% endblock %}
", "SonataAdminBundle:CRUD:edit_string.html.twig", "/home/kuba/Workspace/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/edit_string.html.twig");
    }
}
