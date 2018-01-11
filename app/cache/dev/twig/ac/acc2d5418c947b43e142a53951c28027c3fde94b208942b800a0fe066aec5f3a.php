<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_1c7aa969dfb5bac49c51584041fa52c164067f45c7afa51ea9f2d9e4db1fcbed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_9f9019cbc7b8096f0e2bfc8fbda9d3997b6abe32a44f15bd2fa8e9370917196d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f9019cbc7b8096f0e2bfc8fbda9d3997b6abe32a44f15bd2fa8e9370917196d->enter($__internal_9f9019cbc7b8096f0e2bfc8fbda9d3997b6abe32a44f15bd2fa8e9370917196d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9f9019cbc7b8096f0e2bfc8fbda9d3997b6abe32a44f15bd2fa8e9370917196d->leave($__internal_9f9019cbc7b8096f0e2bfc8fbda9d3997b6abe32a44f15bd2fa8e9370917196d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_dd41fff42ed20581b562b682cff64c1f5fc127f93e72836560e0b52f7d68d3a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd41fff42ed20581b562b682cff64c1f5fc127f93e72836560e0b52f7d68d3a7->enter($__internal_dd41fff42ed20581b562b682cff64c1f5fc127f93e72836560e0b52f7d68d3a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_dd41fff42ed20581b562b682cff64c1f5fc127f93e72836560e0b52f7d68d3a7->leave($__internal_dd41fff42ed20581b562b682cff64c1f5fc127f93e72836560e0b52f7d68d3a7_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_4f8090e9964d79a736499fb43949004362c842d716f589010ec501cd311c3fda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f8090e9964d79a736499fb43949004362c842d716f589010ec501cd311c3fda->enter($__internal_4f8090e9964d79a736499fb43949004362c842d716f589010ec501cd311c3fda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 8, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_4f8090e9964d79a736499fb43949004362c842d716f589010ec501cd311c3fda->leave($__internal_4f8090e9964d79a736499fb43949004362c842d716f589010ec501cd311c3fda_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_72357d87828f6c12c8d9915ed283db27ff8951ac3eda057627d98ef741c62316 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72357d87828f6c12c8d9915ed283db27ff8951ac3eda057627d98ef741c62316->enter($__internal_72357d87828f6c12c8d9915ed283db27ff8951ac3eda057627d98ef741c62316_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_72357d87828f6c12c8d9915ed283db27ff8951ac3eda057627d98ef741c62316->leave($__internal_72357d87828f6c12c8d9915ed283db27ff8951ac3eda057627d98ef741c62316_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
", "TwigBundle:Exception:exception_full.html.twig", "/home/kuba/Workspace/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
