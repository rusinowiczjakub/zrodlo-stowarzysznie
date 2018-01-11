<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_289b2b0839ff7fc6ee896d936d3a0d8c441c76ea916714e05fe06d2f812d96af extends Twig_Template
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
        $__internal_ede876c6a0ebaf14fcf62916f418e32698825371da61bf1081fa23a110fc585f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ede876c6a0ebaf14fcf62916f418e32698825371da61bf1081fa23a110fc585f->enter($__internal_ede876c6a0ebaf14fcf62916f418e32698825371da61bf1081fa23a110fc585f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ede876c6a0ebaf14fcf62916f418e32698825371da61bf1081fa23a110fc585f->leave($__internal_ede876c6a0ebaf14fcf62916f418e32698825371da61bf1081fa23a110fc585f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2038d580f3172ccd2b42ed4b017cd866c235d20e188fd10f1c483c5de3d6ad79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2038d580f3172ccd2b42ed4b017cd866c235d20e188fd10f1c483c5de3d6ad79->enter($__internal_2038d580f3172ccd2b42ed4b017cd866c235d20e188fd10f1c483c5de3d6ad79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_2038d580f3172ccd2b42ed4b017cd866c235d20e188fd10f1c483c5de3d6ad79->leave($__internal_2038d580f3172ccd2b42ed4b017cd866c235d20e188fd10f1c483c5de3d6ad79_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_92d4307fec71ce715032febdacea2bd0707f45c56c96e52fb5a726cbd9f6f11e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92d4307fec71ce715032febdacea2bd0707f45c56c96e52fb5a726cbd9f6f11e->enter($__internal_92d4307fec71ce715032febdacea2bd0707f45c56c96e52fb5a726cbd9f6f11e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_92d4307fec71ce715032febdacea2bd0707f45c56c96e52fb5a726cbd9f6f11e->leave($__internal_92d4307fec71ce715032febdacea2bd0707f45c56c96e52fb5a726cbd9f6f11e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_7bf16e7b29b13d4faee6d0184c2de966f618f25929cbec7ab8c26418a8240d1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bf16e7b29b13d4faee6d0184c2de966f618f25929cbec7ab8c26418a8240d1e->enter($__internal_7bf16e7b29b13d4faee6d0184c2de966f618f25929cbec7ab8c26418a8240d1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_7bf16e7b29b13d4faee6d0184c2de966f618f25929cbec7ab8c26418a8240d1e->leave($__internal_7bf16e7b29b13d4faee6d0184c2de966f618f25929cbec7ab8c26418a8240d1e_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
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
", "@Twig/Exception/exception_full.html.twig", "/home/kuba/zrodlo/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
