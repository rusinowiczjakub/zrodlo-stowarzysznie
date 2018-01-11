<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_d4ca545600767c885e02f3acdac54299fb11d1baf07b8ce66224d9dbf1c2b0bc extends Twig_Template
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
        $__internal_f5efa2c72ee469a2aa84830af52effff249cc4314b03694c3f9a390cdc7a8b8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5efa2c72ee469a2aa84830af52effff249cc4314b03694c3f9a390cdc7a8b8a->enter($__internal_f5efa2c72ee469a2aa84830af52effff249cc4314b03694c3f9a390cdc7a8b8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f5efa2c72ee469a2aa84830af52effff249cc4314b03694c3f9a390cdc7a8b8a->leave($__internal_f5efa2c72ee469a2aa84830af52effff249cc4314b03694c3f9a390cdc7a8b8a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9afe501b01fff201e8498e6ffa37508cbb44df194e4c2e0207fdfd4dd1d2bb43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9afe501b01fff201e8498e6ffa37508cbb44df194e4c2e0207fdfd4dd1d2bb43->enter($__internal_9afe501b01fff201e8498e6ffa37508cbb44df194e4c2e0207fdfd4dd1d2bb43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_9afe501b01fff201e8498e6ffa37508cbb44df194e4c2e0207fdfd4dd1d2bb43->leave($__internal_9afe501b01fff201e8498e6ffa37508cbb44df194e4c2e0207fdfd4dd1d2bb43_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_7488211c420a35ee7201923cda411fedaaa7db26478a59f40335f117efccf533 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7488211c420a35ee7201923cda411fedaaa7db26478a59f40335f117efccf533->enter($__internal_7488211c420a35ee7201923cda411fedaaa7db26478a59f40335f117efccf533_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 8, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_7488211c420a35ee7201923cda411fedaaa7db26478a59f40335f117efccf533->leave($__internal_7488211c420a35ee7201923cda411fedaaa7db26478a59f40335f117efccf533_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_b5746964e799c333d5bda7f7edcab58ad1445428a378e6a251bda3b2262454f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5746964e799c333d5bda7f7edcab58ad1445428a378e6a251bda3b2262454f8->enter($__internal_b5746964e799c333d5bda7f7edcab58ad1445428a378e6a251bda3b2262454f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_b5746964e799c333d5bda7f7edcab58ad1445428a378e6a251bda3b2262454f8->leave($__internal_b5746964e799c333d5bda7f7edcab58ad1445428a378e6a251bda3b2262454f8_prof);

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
