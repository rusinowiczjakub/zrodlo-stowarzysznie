<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_c3c33471c8bd67b1be6ee13261f25874ca34713215ef99621fc5b2238ffdb610 extends Twig_Template
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
        $__internal_82a2a53d620af04acd82ab7dcab159f2c181d4e40c2a8f8feb6f0a47fd949706 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82a2a53d620af04acd82ab7dcab159f2c181d4e40c2a8f8feb6f0a47fd949706->enter($__internal_82a2a53d620af04acd82ab7dcab159f2c181d4e40c2a8f8feb6f0a47fd949706_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_82a2a53d620af04acd82ab7dcab159f2c181d4e40c2a8f8feb6f0a47fd949706->leave($__internal_82a2a53d620af04acd82ab7dcab159f2c181d4e40c2a8f8feb6f0a47fd949706_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f053359b84099ebdcc716398c96c4aed5543aa688545b6a3345a1ce6b10575ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f053359b84099ebdcc716398c96c4aed5543aa688545b6a3345a1ce6b10575ac->enter($__internal_f053359b84099ebdcc716398c96c4aed5543aa688545b6a3345a1ce6b10575ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_f053359b84099ebdcc716398c96c4aed5543aa688545b6a3345a1ce6b10575ac->leave($__internal_f053359b84099ebdcc716398c96c4aed5543aa688545b6a3345a1ce6b10575ac_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_0a9a6b2e69f0a69239a326b36d3162c8edf19df9b3353423af3fbd683dc3e7bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a9a6b2e69f0a69239a326b36d3162c8edf19df9b3353423af3fbd683dc3e7bf->enter($__internal_0a9a6b2e69f0a69239a326b36d3162c8edf19df9b3353423af3fbd683dc3e7bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 8, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_0a9a6b2e69f0a69239a326b36d3162c8edf19df9b3353423af3fbd683dc3e7bf->leave($__internal_0a9a6b2e69f0a69239a326b36d3162c8edf19df9b3353423af3fbd683dc3e7bf_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_10ce89f571c92318e4d3c3ea444b0e2b7cb5c762d4312ac3bf7f12a8212eacb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10ce89f571c92318e4d3c3ea444b0e2b7cb5c762d4312ac3bf7f12a8212eacb5->enter($__internal_10ce89f571c92318e4d3c3ea444b0e2b7cb5c762d4312ac3bf7f12a8212eacb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_10ce89f571c92318e4d3c3ea444b0e2b7cb5c762d4312ac3bf7f12a8212eacb5->leave($__internal_10ce89f571c92318e4d3c3ea444b0e2b7cb5c762d4312ac3bf7f12a8212eacb5_prof);

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
", "@Twig/Exception/exception_full.html.twig", "/home/kuba/Workspace/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
