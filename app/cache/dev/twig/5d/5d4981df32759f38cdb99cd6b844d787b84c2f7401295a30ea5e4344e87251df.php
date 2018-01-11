<?php

/* LiplexMultipleFileUploadBundle:Admin/CRUD:show_multiple_file_view.html.twig */
class __TwigTemplate_09fb36901f2ceb2b050f109f798b151888e6d0ddd225600ee92d2f7e87db90dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "LiplexMultipleFileUploadBundle:Admin/CRUD:show_multiple_file_view.html.twig", 1);
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
        $__internal_fbd3bd1f92eaedcf730e10a7c6c9e8fa6a049cc295040a06028f0a47b41eae95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbd3bd1f92eaedcf730e10a7c6c9e8fa6a049cc295040a06028f0a47b41eae95->enter($__internal_fbd3bd1f92eaedcf730e10a7c6c9e8fa6a049cc295040a06028f0a47b41eae95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LiplexMultipleFileUploadBundle:Admin/CRUD:show_multiple_file_view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fbd3bd1f92eaedcf730e10a7c6c9e8fa6a049cc295040a06028f0a47b41eae95->leave($__internal_fbd3bd1f92eaedcf730e10a7c6c9e8fa6a049cc295040a06028f0a47b41eae95_prof);

    }

    // line 3
    public function block_field($context, array $blocks = array())
    {
        $__internal_6a942f40e46e2b80c6c8b02000590b76396b79256261d9b4d7959895c5b38bc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a942f40e46e2b80c6c8b02000590b76396b79256261d9b4d7959895c5b38bc6->enter($__internal_6a942f40e46e2b80c6c8b02000590b76396b79256261d9b4d7959895c5b38bc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 4, $this->getSourceContext()); })()), "vars", array()), "single_upload", array())) {
            // line 5
            echo "        <a target=\"_blank\" href=\"/api/multiple-file-upload/file/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 5, $this->getSourceContext()); })()), "id", array()), "html", null, true);
            echo "\">
            ";
            // line 6
            if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new Twig_Error_Runtime('Variable "field_description" does not exist.', 6, $this->getSourceContext()); })()), "options", array()), "safe", array())) {
                // line 7
                echo "                ";
                echo (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 7, $this->getSourceContext()); })());
                echo "
            ";
            } else {
                // line 9
                echo "                ";
                echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 9, $this->getSourceContext()); })()), "html", null, true);
                echo "
            ";
            }
            // line 11
            echo "        </a>
    ";
        } else {
            // line 13
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 13, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
                // line 14
                echo "            <a target=\"_blank\" href=\"/api/multiple-file-upload/file/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["file"], "id", array()), "html", null, true);
                echo "\">
                ";
                // line 15
                if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new Twig_Error_Runtime('Variable "field_description" does not exist.', 15, $this->getSourceContext()); })()), "options", array()), "safe", array())) {
                    // line 16
                    echo "                    ";
                    echo $context["file"];
                    echo "
                ";
                } else {
                    // line 18
                    echo "                    ";
                    echo twig_escape_filter($this->env, $context["file"], "html", null, true);
                    echo "
                ";
                }
                // line 20
                echo "            </a>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "    ";
        }
        
        $__internal_6a942f40e46e2b80c6c8b02000590b76396b79256261d9b4d7959895c5b38bc6->leave($__internal_6a942f40e46e2b80c6c8b02000590b76396b79256261d9b4d7959895c5b38bc6_prof);

    }

    public function getTemplateName()
    {
        return "LiplexMultipleFileUploadBundle:Admin/CRUD:show_multiple_file_view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 22,  90 => 20,  84 => 18,  78 => 16,  76 => 15,  71 => 14,  66 => 13,  62 => 11,  56 => 9,  50 => 7,  48 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'SonataAdminBundle:CRUD:base_show_field.html.twig' %}

{% block field %}
    {% if form.vars.single_upload %}
        <a target=\"_blank\" href=\"/api/multiple-file-upload/file/{{ value.id }}\">
            {% if field_description.options.safe %}
                {{ value|raw }}
            {% else %}
                {{ value }}
            {% endif %}
        </a>
    {% else %}
        {% for file in value %}
            <a target=\"_blank\" href=\"/api/multiple-file-upload/file/{{ file.id }}\">
                {% if field_description.options.safe %}
                    {{ file|raw }}
                {% else %}
                    {{ file }}
                {% endif %}
            </a>
        {% endfor %}
    {% endif %}
{% endblock %}
", "LiplexMultipleFileUploadBundle:Admin/CRUD:show_multiple_file_view.html.twig", "/home/kuba/Workspace/vendor/liplex/multiple-file-upload-bundle/Liplex/MultipleFileUploadBundle/Resources/views/Admin/CRUD/show_multiple_file_view.html.twig");
    }
}
