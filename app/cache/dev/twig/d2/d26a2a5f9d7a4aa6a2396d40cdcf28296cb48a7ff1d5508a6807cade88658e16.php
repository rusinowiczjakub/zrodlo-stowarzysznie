<?php

/* SonataAdminBundle:CRUD:edit_text.html.twig */
class __TwigTemplate_eaa55c812ab1ed1fe1b7c566a52e5f591f3b00f582a0755f072ec07b1612eeb7 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) || array_key_exists("base_template", $context) ? $context["base_template"] : (function () { throw new Twig_Error_Runtime('Variable "base_template" does not exist.', 12, $this->getSourceContext()); })()), "SonataAdminBundle:CRUD:edit_text.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_87db084e7d8661fba2483f321bc4ef012fa34c9934246fe0d663b74824535f95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87db084e7d8661fba2483f321bc4ef012fa34c9934246fe0d663b74824535f95->enter($__internal_87db084e7d8661fba2483f321bc4ef012fa34c9934246fe0d663b74824535f95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_text.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_87db084e7d8661fba2483f321bc4ef012fa34c9934246fe0d663b74824535f95->leave($__internal_87db084e7d8661fba2483f321bc4ef012fa34c9934246fe0d663b74824535f95_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_fdd883a340adae09e18c5ce674ea49b8f4e2e97525c66a202c39cab9aa95f712 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdd883a340adae09e18c5ce674ea49b8f4e2e97525c66a202c39cab9aa95f712->enter($__internal_fdd883a340adae09e18c5ce674ea49b8f4e2e97525c66a202c39cab9aa95f712_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["field_element"]) || array_key_exists("field_element", $context) ? $context["field_element"] : (function () { throw new Twig_Error_Runtime('Variable "field_element" does not exist.', 14, $this->getSourceContext()); })()), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_fdd883a340adae09e18c5ce674ea49b8f4e2e97525c66a202c39cab9aa95f712->leave($__internal_fdd883a340adae09e18c5ce674ea49b8f4e2e97525c66a202c39cab9aa95f712_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_text.html.twig";
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
", "SonataAdminBundle:CRUD:edit_text.html.twig", "/home/kuba/Workspace/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/edit_text.html.twig");
    }
}
