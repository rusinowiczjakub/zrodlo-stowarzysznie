<?php

/* SonataAdminBundle:CRUD:edit_boolean.html.twig */
class __TwigTemplate_b936d97e5e5367c8196c9a61c1d8b7d5a9b6a5aba2bdfa7ae843baec6060d316 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'field' => array($this, 'block_field'),
            'label' => array($this, 'block_label'),
            'errors' => array($this, 'block_errors'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4394aadb89f44b740638742b87467ebdcc27704030335f1e85f0b0868e63e04f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4394aadb89f44b740638742b87467ebdcc27704030335f1e85f0b0868e63e04f->enter($__internal_4394aadb89f44b740638742b87467ebdcc27704030335f1e85f0b0868e63e04f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_boolean.html.twig"));

        // line 11
        echo "
<div>
    <div class=\"sonata-ba-field ";
        // line 13
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field_element"]) || array_key_exists("field_element", $context) ? $context["field_element"] : (function () { throw new Twig_Error_Runtime('Variable "field_element" does not exist.', 13, $this->getSourceContext()); })()), "vars", array()), "errors", array())) > 0)) {
            echo "sonata-ba-field-error";
        }
        echo "\">
        ";
        // line 14
        $this->displayBlock('field', $context, $blocks);
        // line 15
        echo "        ";
        $this->displayBlock('label', $context, $blocks);
        // line 23
        echo "
        <div class=\"sonata-ba-field-error-messages\">
            ";
        // line 25
        $this->displayBlock('errors', $context, $blocks);
        // line 26
        echo "        </div>

    </div>
</div>
";
        
        $__internal_4394aadb89f44b740638742b87467ebdcc27704030335f1e85f0b0868e63e04f->leave($__internal_4394aadb89f44b740638742b87467ebdcc27704030335f1e85f0b0868e63e04f_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_e2b50c16f99cb4b4d71cb06c2dfe639b8fba172e1b5bfc8cfcdb87781a99f3fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2b50c16f99cb4b4d71cb06c2dfe639b8fba172e1b5bfc8cfcdb87781a99f3fb->enter($__internal_e2b50c16f99cb4b4d71cb06c2dfe639b8fba172e1b5bfc8cfcdb87781a99f3fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["field_element"]) || array_key_exists("field_element", $context) ? $context["field_element"] : (function () { throw new Twig_Error_Runtime('Variable "field_element" does not exist.', 14, $this->getSourceContext()); })()), 'widget');
        
        $__internal_e2b50c16f99cb4b4d71cb06c2dfe639b8fba172e1b5bfc8cfcdb87781a99f3fb->leave($__internal_e2b50c16f99cb4b4d71cb06c2dfe639b8fba172e1b5bfc8cfcdb87781a99f3fb_prof);

    }

    // line 15
    public function block_label($context, array $blocks = array())
    {
        $__internal_06e300258dd86ed72baa524b066b8e9bc97414a31f1981c6212ead7d912242a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06e300258dd86ed72baa524b066b8e9bc97414a31f1981c6212ead7d912242a3->enter($__internal_06e300258dd86ed72baa524b066b8e9bc97414a31f1981c6212ead7d912242a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        // line 16
        echo "            ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["field_description"] ?? null), "options", array(), "any", false, true), "name", array(), "any", true, true)) {
            // line 17
            echo "                ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["field_element"]) || array_key_exists("field_element", $context) ? $context["field_element"] : (function () { throw new Twig_Error_Runtime('Variable "field_element" does not exist.', 17, $this->getSourceContext()); })()), 'label', (twig_test_empty($_label_ = twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new Twig_Error_Runtime('Variable "field_description" does not exist.', 17, $this->getSourceContext()); })()), "options", array()), "name", array())) ? array() : array("label" => $_label_)));
            echo "
            ";
        } else {
            // line 19
            echo "                ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["field_element"]) || array_key_exists("field_element", $context) ? $context["field_element"] : (function () { throw new Twig_Error_Runtime('Variable "field_element" does not exist.', 19, $this->getSourceContext()); })()), 'label');
            echo "
            ";
        }
        // line 21
        echo "            <br>
        ";
        
        $__internal_06e300258dd86ed72baa524b066b8e9bc97414a31f1981c6212ead7d912242a3->leave($__internal_06e300258dd86ed72baa524b066b8e9bc97414a31f1981c6212ead7d912242a3_prof);

    }

    // line 25
    public function block_errors($context, array $blocks = array())
    {
        $__internal_5edff0671ef7ae2de16b31a16320cb568fac2976fa63a7ce09b1b3f3a0a58f57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5edff0671ef7ae2de16b31a16320cb568fac2976fa63a7ce09b1b3f3a0a58f57->enter($__internal_5edff0671ef7ae2de16b31a16320cb568fac2976fa63a7ce09b1b3f3a0a58f57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "errors"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["field_element"]) || array_key_exists("field_element", $context) ? $context["field_element"] : (function () { throw new Twig_Error_Runtime('Variable "field_element" does not exist.', 25, $this->getSourceContext()); })()), 'errors');
        
        $__internal_5edff0671ef7ae2de16b31a16320cb568fac2976fa63a7ce09b1b3f3a0a58f57->leave($__internal_5edff0671ef7ae2de16b31a16320cb568fac2976fa63a7ce09b1b3f3a0a58f57_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_boolean.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 25,  90 => 21,  84 => 19,  78 => 17,  75 => 16,  69 => 15,  57 => 14,  46 => 26,  44 => 25,  40 => 23,  37 => 15,  35 => 14,  29 => 13,  25 => 11,);
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
    <div class=\"sonata-ba-field {% if field_element.vars.errors|length > 0 %}sonata-ba-field-error{% endif %}\">
        {% block field %}{{ form_widget(field_element) }}{% endblock %}
        {% block label %}
            {% if field_description.options.name is defined %}
                {{ form_label(field_element, field_description.options.name) }}
            {% else %}
                {{ form_label(field_element) }}
            {% endif %}
            <br>
        {% endblock %}

        <div class=\"sonata-ba-field-error-messages\">
            {% block errors %}{{ form_errors(field_element) }}{% endblock %}
        </div>

    </div>
</div>
", "SonataAdminBundle:CRUD:edit_boolean.html.twig", "/home/kuba/Workspace/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/edit_boolean.html.twig");
    }
}
