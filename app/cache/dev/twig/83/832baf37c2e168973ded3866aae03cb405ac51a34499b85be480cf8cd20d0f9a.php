<?php

/* SonataAdminBundle:CRUD:edit_array.html.twig */
class __TwigTemplate_b432dbf0c42a1911d5673138acc8bf8e54828ea519c96ea8a1125cbec79b0b41 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) || array_key_exists("base_template", $context) ? $context["base_template"] : (function () { throw new Twig_Error_Runtime('Variable "base_template" does not exist.', 12, $this->getSourceContext()); })()), "SonataAdminBundle:CRUD:edit_array.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cf59b054b0fb7e33ffff0dc5e3b53526b60706d90d8e3e0cf312d4aa0970ff7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf59b054b0fb7e33ffff0dc5e3b53526b60706d90d8e3e0cf312d4aa0970ff7d->enter($__internal_cf59b054b0fb7e33ffff0dc5e3b53526b60706d90d8e3e0cf312d4aa0970ff7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_array.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cf59b054b0fb7e33ffff0dc5e3b53526b60706d90d8e3e0cf312d4aa0970ff7d->leave($__internal_cf59b054b0fb7e33ffff0dc5e3b53526b60706d90d8e3e0cf312d4aa0970ff7d_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_5cc5b9abf8861e21e2d13f5213393a146e64db67c2ffb172c3d64aa6b1b44276 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cc5b9abf8861e21e2d13f5213393a146e64db67c2ffb172c3d64aa6b1b44276->enter($__internal_5cc5b9abf8861e21e2d13f5213393a146e64db67c2ffb172c3d64aa6b1b44276_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <span class=\"edit\">
        ";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["field_element"]) || array_key_exists("field_element", $context) ? $context["field_element"] : (function () { throw new Twig_Error_Runtime('Variable "field_element" does not exist.', 16, $this->getSourceContext()); })()), 'widget', array("attr" => array("class" => "title")));
        echo "
    </span>
";
        
        $__internal_5cc5b9abf8861e21e2d13f5213393a146e64db67c2ffb172c3d64aa6b1b44276->leave($__internal_5cc5b9abf8861e21e2d13f5213393a146e64db67c2ffb172c3d64aa6b1b44276_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_array.html.twig";
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

{% extends base_template %}

{% block field %}
    <span class=\"edit\">
        {{ form_widget(field_element, {'attr': {'class' : 'title'}}) }}
    </span>
{% endblock %}
", "SonataAdminBundle:CRUD:edit_array.html.twig", "/home/kuba/Workspace/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/edit_array.html.twig");
    }
}
