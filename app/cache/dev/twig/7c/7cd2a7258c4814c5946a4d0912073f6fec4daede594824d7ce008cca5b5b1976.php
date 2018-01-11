<?php

/* SonataAdminBundle:CRUD:edit_integer.html.twig */
class __TwigTemplate_a938b25d7f6c492ef19f1e167d385246420ab54bb04f6a76647b616a52933c5d extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) || array_key_exists("base_template", $context) ? $context["base_template"] : (function () { throw new Twig_Error_Runtime('Variable "base_template" does not exist.', 12, $this->getSourceContext()); })()), "SonataAdminBundle:CRUD:edit_integer.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_47697cc74cedd9f3d472123d6ce3dd0cdbc53dbdfd92a7387222d1d66cb2ff99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47697cc74cedd9f3d472123d6ce3dd0cdbc53dbdfd92a7387222d1d66cb2ff99->enter($__internal_47697cc74cedd9f3d472123d6ce3dd0cdbc53dbdfd92a7387222d1d66cb2ff99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_integer.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_47697cc74cedd9f3d472123d6ce3dd0cdbc53dbdfd92a7387222d1d66cb2ff99->leave($__internal_47697cc74cedd9f3d472123d6ce3dd0cdbc53dbdfd92a7387222d1d66cb2ff99_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_5650d70868aae59dd40dbf349abd0ec0de968ccc9e153b2d178d498e56b7749c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5650d70868aae59dd40dbf349abd0ec0de968ccc9e153b2d178d498e56b7749c->enter($__internal_5650d70868aae59dd40dbf349abd0ec0de968ccc9e153b2d178d498e56b7749c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["field_element"]) || array_key_exists("field_element", $context) ? $context["field_element"] : (function () { throw new Twig_Error_Runtime('Variable "field_element" does not exist.', 14, $this->getSourceContext()); })()), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_5650d70868aae59dd40dbf349abd0ec0de968ccc9e153b2d178d498e56b7749c->leave($__internal_5650d70868aae59dd40dbf349abd0ec0de968ccc9e153b2d178d498e56b7749c_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_integer.html.twig";
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
", "SonataAdminBundle:CRUD:edit_integer.html.twig", "/home/kuba/Workspace/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/edit_integer.html.twig");
    }
}
