<?php

/* SonataAdminBundle:CRUD:base_filter_field.html.twig */
class __TwigTemplate_ce84844bf372546f5549e6298f07bd85a7c9e6473eaa39b04b17ae7e0166e828 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'label' => array($this, 'block_label'),
            'field' => array($this, 'block_field'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ce1ff686f6de770bec84c059bec93e49d7ebdc5a73962608c3753ba8464e2ffa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce1ff686f6de770bec84c059bec93e49d7ebdc5a73962608c3753ba8464e2ffa->enter($__internal_ce1ff686f6de770bec84c059bec93e49d7ebdc5a73962608c3753ba8464e2ffa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_filter_field.html.twig"));

        // line 11
        echo "

<div>
    ";
        // line 14
        $this->displayBlock('label', $context, $blocks);
        // line 22
        echo "
    <div class=\"sonata-ba-field";
        // line 23
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["filter_form"]) || array_key_exists("filter_form", $context) ? $context["filter_form"] : (function () { throw new Twig_Error_Runtime('Variable "filter_form" does not exist.', 23, $this->getSourceContext()); })()), "vars", array()), "errors", array())) {
            echo " sonata-ba-field-error";
        }
        echo "\">
        ";
        // line 24
        $this->displayBlock('field', $context, $blocks);
        // line 25
        echo "    </div>
</div>
";
        
        $__internal_ce1ff686f6de770bec84c059bec93e49d7ebdc5a73962608c3753ba8464e2ffa->leave($__internal_ce1ff686f6de770bec84c059bec93e49d7ebdc5a73962608c3753ba8464e2ffa_prof);

    }

    // line 14
    public function block_label($context, array $blocks = array())
    {
        $__internal_a344fd10fa9db5109ed4186101b28ac7c585f4cde772ceb429ca601f1330bcea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a344fd10fa9db5109ed4186101b28ac7c585f4cde772ceb429ca601f1330bcea->enter($__internal_a344fd10fa9db5109ed4186101b28ac7c585f4cde772ceb429ca601f1330bcea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        // line 15
        echo "        ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["filter"] ?? null), "fielddescription", array(), "any", false, true), "options", array(), "any", false, true), "name", array(), "any", true, true)) {
            // line 16
            echo "            ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["filter_form"]) || array_key_exists("filter_form", $context) ? $context["filter_form"] : (function () { throw new Twig_Error_Runtime('Variable "filter_form" does not exist.', 16, $this->getSourceContext()); })()), 'label', (twig_test_empty($_label_ = twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new Twig_Error_Runtime('Variable "filter" does not exist.', 16, $this->getSourceContext()); })()), "fielddescription", array()), "options", array()), "name", array())) ? array() : array("label" => $_label_)));
            echo "
        ";
        } else {
            // line 18
            echo "            ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["filter_form"]) || array_key_exists("filter_form", $context) ? $context["filter_form"] : (function () { throw new Twig_Error_Runtime('Variable "filter_form" does not exist.', 18, $this->getSourceContext()); })()), 'label');
            echo "
        ";
        }
        // line 20
        echo "        <br>
    ";
        
        $__internal_a344fd10fa9db5109ed4186101b28ac7c585f4cde772ceb429ca601f1330bcea->leave($__internal_a344fd10fa9db5109ed4186101b28ac7c585f4cde772ceb429ca601f1330bcea_prof);

    }

    // line 24
    public function block_field($context, array $blocks = array())
    {
        $__internal_b13824a5d98a29e0b502d8f1a2d81015847b065110c6f9f7d14cc8becf5deb0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b13824a5d98a29e0b502d8f1a2d81015847b065110c6f9f7d14cc8becf5deb0c->enter($__internal_b13824a5d98a29e0b502d8f1a2d81015847b065110c6f9f7d14cc8becf5deb0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["filter_form"]) || array_key_exists("filter_form", $context) ? $context["filter_form"] : (function () { throw new Twig_Error_Runtime('Variable "filter_form" does not exist.', 24, $this->getSourceContext()); })()), 'widget');
        
        $__internal_b13824a5d98a29e0b502d8f1a2d81015847b065110c6f9f7d14cc8becf5deb0c->leave($__internal_b13824a5d98a29e0b502d8f1a2d81015847b065110c6f9f7d14cc8becf5deb0c_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_filter_field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 24,  72 => 20,  66 => 18,  60 => 16,  57 => 15,  51 => 14,  42 => 25,  40 => 24,  34 => 23,  31 => 22,  29 => 14,  24 => 11,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}


<div>
    {% block label %}
        {% if filter.fielddescription.options.name is defined %}
            {{ form_label(filter_form, filter.fielddescription.options.name) }}
        {% else %}
            {{ form_label(filter_form) }}
        {% endif %}
        <br>
    {% endblock %}

    <div class=\"sonata-ba-field{% if filter_form.vars.errors %} sonata-ba-field-error{% endif %}\">
        {% block field %}{{ form_widget(filter_form) }}{% endblock %}
    </div>
</div>
", "SonataAdminBundle:CRUD:base_filter_field.html.twig", "/home/kuba/Workspace/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/base_filter_field.html.twig");
    }
}
