<?php

/* SonataAdminBundle:CRUD:list_email.html.twig */
class __TwigTemplate_f7b77f2b270d7c142a4e77e624e05222fd14ab75219c4ede7cd9debb3b971afb extends Twig_Template
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
        return $this->loadTemplate(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 12, $this->getSourceContext()); })()), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_email.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_39dbb23c7de649f220af95aa6bfe56042f5e006997d5bb5143e32aeb3d07e38e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39dbb23c7de649f220af95aa6bfe56042f5e006997d5bb5143e32aeb3d07e38e->enter($__internal_39dbb23c7de649f220af95aa6bfe56042f5e006997d5bb5143e32aeb3d07e38e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_email.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_39dbb23c7de649f220af95aa6bfe56042f5e006997d5bb5143e32aeb3d07e38e->leave($__internal_39dbb23c7de649f220af95aa6bfe56042f5e006997d5bb5143e32aeb3d07e38e_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_73f3019b005805496574b392544affc9d94c043887d02273aa689ad568c12107 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73f3019b005805496574b392544affc9d94c043887d02273aa689ad568c12107->enter($__internal_73f3019b005805496574b392544affc9d94c043887d02273aa689ad568c12107_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:_email_link.html.twig", "SonataAdminBundle:CRUD:list_email.html.twig", 15)->display($context);
        
        $__internal_73f3019b005805496574b392544affc9d94c043887d02273aa689ad568c12107->leave($__internal_73f3019b005805496574b392544affc9d94c043887d02273aa689ad568c12107_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 15,  33 => 14,  18 => 12,);
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
    {% include 'SonataAdminBundle:CRUD:_email_link.html.twig' %}
{% endblock %}
", "SonataAdminBundle:CRUD:list_email.html.twig", "/home/kuba/Workspace/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/list_email.html.twig");
    }
}
