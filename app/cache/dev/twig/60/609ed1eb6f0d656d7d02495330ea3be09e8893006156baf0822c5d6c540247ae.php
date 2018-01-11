<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_3080670469d761b776ea5318966066838b9de07685a73d0ae1a7a63328cb2223 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_f1fe469fc83feda5b79acb42fe7179230f99b92634413ae24b0cd03a5913b29b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1fe469fc83feda5b79acb42fe7179230f99b92634413ae24b0cd03a5913b29b->enter($__internal_f1fe469fc83feda5b79acb42fe7179230f99b92634413ae24b0cd03a5913b29b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f1fe469fc83feda5b79acb42fe7179230f99b92634413ae24b0cd03a5913b29b->leave($__internal_f1fe469fc83feda5b79acb42fe7179230f99b92634413ae24b0cd03a5913b29b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_fab5de85c0ac9988c5b523e0acd56afc4f6c86ed79f61c722f8712d0d5313257 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fab5de85c0ac9988c5b523e0acd56afc4f6c86ed79f61c722f8712d0d5313257->enter($__internal_fab5de85c0ac9988c5b523e0acd56afc4f6c86ed79f61c722f8712d0d5313257_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_fab5de85c0ac9988c5b523e0acd56afc4f6c86ed79f61c722f8712d0d5313257->leave($__internal_fab5de85c0ac9988c5b523e0acd56afc4f6c86ed79f61c722f8712d0d5313257_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_06619d75f8c0b08ef0ca67f2c0f8f5ef447649eee9b4f3cf6f248894d2bf7c93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06619d75f8c0b08ef0ca67f2c0f8f5ef447649eee9b4f3cf6f248894d2bf7c93->enter($__internal_06619d75f8c0b08ef0ca67f2c0f8f5ef447649eee9b4f3cf6f248894d2bf7c93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_06619d75f8c0b08ef0ca67f2c0f8f5ef447649eee9b4f3cf6f248894d2bf7c93->leave($__internal_06619d75f8c0b08ef0ca67f2c0f8f5ef447649eee9b4f3cf6f248894d2bf7c93_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/home/kuba/Workspace/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
