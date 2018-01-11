<?php

/* SensioDistributionBundle::Configurator/layout.html.twig */
class __TwigTemplate_5b9ebb8b2ee1c592585f22e37eb5e71fac556eb1960f41000402f08fcb6fa9b6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "SensioDistributionBundle::Configurator/layout.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d263c55da12cbd6272352913f9c2ee9a0d96751deee7154f5fbf3906cc567cf1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d263c55da12cbd6272352913f9c2ee9a0d96751deee7154f5fbf3906cc567cf1->enter($__internal_d263c55da12cbd6272352913f9c2ee9a0d96751deee7154f5fbf3906cc567cf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d263c55da12cbd6272352913f9c2ee9a0d96751deee7154f5fbf3906cc567cf1->leave($__internal_d263c55da12cbd6272352913f9c2ee9a0d96751deee7154f5fbf3906cc567cf1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_afd4da23a32b540a74d61f273266c7aa2883f1502c525428bce2d873b73f5e9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afd4da23a32b540a74d61f273266c7aa2883f1502c525428bce2d873b73f5e9f->enter($__internal_afd4da23a32b540a74d61f273266c7aa2883f1502c525428bce2d873b73f5e9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_afd4da23a32b540a74d61f273266c7aa2883f1502c525428bce2d873b73f5e9f->leave($__internal_afd4da23a32b540a74d61f273266c7aa2883f1502c525428bce2d873b73f5e9f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_7acc22b1d05bedc630470aa26f47052537f67790a77fd6ec0e8ac30e5f02c511 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7acc22b1d05bedc630470aa26f47052537f67790a77fd6ec0e8ac30e5f02c511->enter($__internal_7acc22b1d05bedc630470aa26f47052537f67790a77fd6ec0e8ac30e5f02c511_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_7acc22b1d05bedc630470aa26f47052537f67790a77fd6ec0e8ac30e5f02c511->leave($__internal_7acc22b1d05bedc630470aa26f47052537f67790a77fd6ec0e8ac30e5f02c511_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_a5772af60e591e234b5a85830b0fefb77956dd4a89cdaf6f281e82957ebd0ef1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5772af60e591e234b5a85830b0fefb77956dd4a89cdaf6f281e82957ebd0ef1->enter($__internal_a5772af60e591e234b5a85830b0fefb77956dd4a89cdaf6f281e82957ebd0ef1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    <div class=\"block\">
        ";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        // line 12
        echo "    </div>
    <div class=\"version\">Symfony Standard Edition v.";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["version"]) || array_key_exists("version", $context) ? $context["version"] : (function () { throw new Twig_Error_Runtime('Variable "version" does not exist.', 13, $this->getSourceContext()); })()), "html", null, true);
        echo "</div>
";
        
        $__internal_a5772af60e591e234b5a85830b0fefb77956dd4a89cdaf6f281e82957ebd0ef1->leave($__internal_a5772af60e591e234b5a85830b0fefb77956dd4a89cdaf6f281e82957ebd0ef1_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_513c837945a7aad26e00cba508683abd1e6efbabeaa30623b79f66bf5bc08001 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_513c837945a7aad26e00cba508683abd1e6efbabeaa30623b79f66bf5bc08001->enter($__internal_513c837945a7aad26e00cba508683abd1e6efbabeaa30623b79f66bf5bc08001_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_513c837945a7aad26e00cba508683abd1e6efbabeaa30623b79f66bf5bc08001->leave($__internal_513c837945a7aad26e00cba508683abd1e6efbabeaa30623b79f66bf5bc08001_prof);

    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 11,  79 => 13,  76 => 12,  74 => 11,  71 => 10,  65 => 9,  53 => 7,  43 => 4,  37 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"TwigBundle::layout.html.twig\" %}

{% block head %}
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/sensiodistribution/webconfigurator/css/configurator.css') }}\" />
{% endblock %}

{% block title 'Web Configurator Bundle' %}

{% block body %}
    <div class=\"block\">
        {% block content %}{% endblock %}
    </div>
    <div class=\"version\">Symfony Standard Edition v.{{ version }}</div>
{% endblock %}
", "SensioDistributionBundle::Configurator/layout.html.twig", "/home/kuba/Workspace/vendor/sensio/distribution-bundle/Sensio/Bundle/DistributionBundle/Resources/views/Configurator/layout.html.twig");
    }
}
