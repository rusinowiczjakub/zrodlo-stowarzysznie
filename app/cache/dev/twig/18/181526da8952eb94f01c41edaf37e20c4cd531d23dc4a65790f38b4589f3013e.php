<?php

/* SonataAdminBundle:CRUD:edit_file.html.twig */
class __TwigTemplate_66666ac032a2ba0f60f319c0a23daeb39281b4de18598e8f75a89c67806785d4 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) || array_key_exists("base_template", $context) ? $context["base_template"] : (function () { throw new Twig_Error_Runtime('Variable "base_template" does not exist.', 12, $this->getSourceContext()); })()), "SonataAdminBundle:CRUD:edit_file.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4cae5e3c435c3b1989b354a487c1426c0675b8ec0b75021c2276afff66f79994 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cae5e3c435c3b1989b354a487c1426c0675b8ec0b75021c2276afff66f79994->enter($__internal_4cae5e3c435c3b1989b354a487c1426c0675b8ec0b75021c2276afff66f79994_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_file.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4cae5e3c435c3b1989b354a487c1426c0675b8ec0b75021c2276afff66f79994->leave($__internal_4cae5e3c435c3b1989b354a487c1426c0675b8ec0b75021c2276afff66f79994_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_a7cbb17111e8404d515dbbf469d36fa41a77da11534e4a6854c2968ad70b1b3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7cbb17111e8404d515dbbf469d36fa41a77da11534e4a6854c2968ad70b1b3c->enter($__internal_a7cbb17111e8404d515dbbf469d36fa41a77da11534e4a6854c2968ad70b1b3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["field_element"]) || array_key_exists("field_element", $context) ? $context["field_element"] : (function () { throw new Twig_Error_Runtime('Variable "field_element" does not exist.', 14, $this->getSourceContext()); })()), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_a7cbb17111e8404d515dbbf469d36fa41a77da11534e4a6854c2968ad70b1b3c->leave($__internal_a7cbb17111e8404d515dbbf469d36fa41a77da11534e4a6854c2968ad70b1b3c_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_file.html.twig";
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
", "SonataAdminBundle:CRUD:edit_file.html.twig", "/home/kuba/Workspace/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/edit_file.html.twig");
    }
}
