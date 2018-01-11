<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_fc9440a3125eca8be161fd50180ceb553df9e5f54eabd020511b1a14c647c203 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_83d73e6955e31372ce85c8a4185b67b70e7a5115d8812841520b348dd6f26a85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83d73e6955e31372ce85c8a4185b67b70e7a5115d8812841520b348dd6f26a85->enter($__internal_83d73e6955e31372ce85c8a4185b67b70e7a5115d8812841520b348dd6f26a85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_83d73e6955e31372ce85c8a4185b67b70e7a5115d8812841520b348dd6f26a85->leave($__internal_83d73e6955e31372ce85c8a4185b67b70e7a5115d8812841520b348dd6f26a85_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2cb7fed8259f463810fef4e91af1d1ee938c75bb8e384a0c0d26cc2f07cf04f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cb7fed8259f463810fef4e91af1d1ee938c75bb8e384a0c0d26cc2f07cf04f7->enter($__internal_2cb7fed8259f463810fef4e91af1d1ee938c75bb8e384a0c0d26cc2f07cf04f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_2cb7fed8259f463810fef4e91af1d1ee938c75bb8e384a0c0d26cc2f07cf04f7->leave($__internal_2cb7fed8259f463810fef4e91af1d1ee938c75bb8e384a0c0d26cc2f07cf04f7_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_145f1a0887cdd4e23cfc172d81b90f65c32056e92a379fd831325ebdf81378f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_145f1a0887cdd4e23cfc172d81b90f65c32056e92a379fd831325ebdf81378f1->enter($__internal_145f1a0887cdd4e23cfc172d81b90f65c32056e92a379fd831325ebdf81378f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 8, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_145f1a0887cdd4e23cfc172d81b90f65c32056e92a379fd831325ebdf81378f1->leave($__internal_145f1a0887cdd4e23cfc172d81b90f65c32056e92a379fd831325ebdf81378f1_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_3fccea5307efb617232db8979b76a7b73a8257f2e6eda924948a8531d8840903 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fccea5307efb617232db8979b76a7b73a8257f2e6eda924948a8531d8840903->enter($__internal_3fccea5307efb617232db8979b76a7b73a8257f2e6eda924948a8531d8840903_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_3fccea5307efb617232db8979b76a7b73a8257f2e6eda924948a8531d8840903->leave($__internal_3fccea5307efb617232db8979b76a7b73a8257f2e6eda924948a8531d8840903_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/home/kuba/Workspace/wordpress/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
