<?php

/* SonataAdminBundle:CRUD:show_email.html.twig */
class __TwigTemplate_8b11a58e3b0e2f0fce04b340c52a625e9283fc5c6f575828c2545fcd1f31113a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_email.html.twig", 1);
        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cb248a60dd01d2827a8b4ace8d8c3d8d15fbd48ca8821eb40ed692492f6263b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb248a60dd01d2827a8b4ace8d8c3d8d15fbd48ca8821eb40ed692492f6263b8->enter($__internal_cb248a60dd01d2827a8b4ace8d8c3d8d15fbd48ca8821eb40ed692492f6263b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cb248a60dd01d2827a8b4ace8d8c3d8d15fbd48ca8821eb40ed692492f6263b8->leave($__internal_cb248a60dd01d2827a8b4ace8d8c3d8d15fbd48ca8821eb40ed692492f6263b8_prof);

    }

    // line 3
    public function block_field($context, array $blocks = array())
    {
        $__internal_2839be995607a1db14557f92cb5e95a92bdfe89415a0fc4c0777982f391c583f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2839be995607a1db14557f92cb5e95a92bdfe89415a0fc4c0777982f391c583f->enter($__internal_2839be995607a1db14557f92cb5e95a92bdfe89415a0fc4c0777982f391c583f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 4
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:_email_link.html.twig", "SonataAdminBundle:CRUD:show_email.html.twig", 4)->display($context);
        
        $__internal_2839be995607a1db14557f92cb5e95a92bdfe89415a0fc4c0777982f391c583f->leave($__internal_2839be995607a1db14557f92cb5e95a92bdfe89415a0fc4c0777982f391c583f_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'SonataAdminBundle:CRUD:base_show_field.html.twig' %}

{% block field %}
    {% include 'SonataAdminBundle:CRUD:_email_link.html.twig' %}
{% endblock %}
", "SonataAdminBundle:CRUD:show_email.html.twig", "/home/kuba/Workspace/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/show_email.html.twig");
    }
}
