<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_814f2d3cb1855a8e2cdd14dd92ca8b7c12d13240e4523c23444eb3220e87e3d5 extends Twig_Template
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
        $__internal_c2d6599a5140a9729ebde1a0daaedd19293d272540b629e470024f230c8edce7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2d6599a5140a9729ebde1a0daaedd19293d272540b629e470024f230c8edce7->enter($__internal_c2d6599a5140a9729ebde1a0daaedd19293d272540b629e470024f230c8edce7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c2d6599a5140a9729ebde1a0daaedd19293d272540b629e470024f230c8edce7->leave($__internal_c2d6599a5140a9729ebde1a0daaedd19293d272540b629e470024f230c8edce7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_48d1d7b56f616b2ad793279d6d829a4f27b0bdb42252227706af2bb25be5159d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48d1d7b56f616b2ad793279d6d829a4f27b0bdb42252227706af2bb25be5159d->enter($__internal_48d1d7b56f616b2ad793279d6d829a4f27b0bdb42252227706af2bb25be5159d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_48d1d7b56f616b2ad793279d6d829a4f27b0bdb42252227706af2bb25be5159d->leave($__internal_48d1d7b56f616b2ad793279d6d829a4f27b0bdb42252227706af2bb25be5159d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b44a7b2a61f6c5dbf85f8376346f2ca5929f1807992207aa11d93c6b6d5817be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b44a7b2a61f6c5dbf85f8376346f2ca5929f1807992207aa11d93c6b6d5817be->enter($__internal_b44a7b2a61f6c5dbf85f8376346f2ca5929f1807992207aa11d93c6b6d5817be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 8, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_b44a7b2a61f6c5dbf85f8376346f2ca5929f1807992207aa11d93c6b6d5817be->leave($__internal_b44a7b2a61f6c5dbf85f8376346f2ca5929f1807992207aa11d93c6b6d5817be_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_c77c9683822fd986cf206fcc14c483e552a621bc116a3488e8e441b50e3f4d2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c77c9683822fd986cf206fcc14c483e552a621bc116a3488e8e441b50e3f4d2f->enter($__internal_c77c9683822fd986cf206fcc14c483e552a621bc116a3488e8e441b50e3f4d2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_c77c9683822fd986cf206fcc14c483e552a621bc116a3488e8e441b50e3f4d2f->leave($__internal_c77c9683822fd986cf206fcc14c483e552a621bc116a3488e8e441b50e3f4d2f_prof);

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
