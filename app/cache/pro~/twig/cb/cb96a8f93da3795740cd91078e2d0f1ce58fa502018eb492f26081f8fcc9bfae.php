<?php

/* front/reports.html.twig */
class __TwigTemplate_99f3b267e53cb406c429d79baa2e0d0bdbbcddcc78c6be2dcbe1cacd9d56aeae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "front/reports.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7345078d218c18cb2109b3aea57f9009f4d9b329e3b1e498c6819f153280ab41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7345078d218c18cb2109b3aea57f9009f4d9b329e3b1e498c6819f153280ab41->enter($__internal_7345078d218c18cb2109b3aea57f9009f4d9b329e3b1e498c6819f153280ab41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "front/reports.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7345078d218c18cb2109b3aea57f9009f4d9b329e3b1e498c6819f153280ab41->leave($__internal_7345078d218c18cb2109b3aea57f9009f4d9b329e3b1e498c6819f153280ab41_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_306a4d4ab48ff34fd33755bb7e51831a10581a46320194bd9546c45dd9c10f5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_306a4d4ab48ff34fd33755bb7e51831a10581a46320194bd9546c45dd9c10f5e->enter($__internal_306a4d4ab48ff34fd33755bb7e51831a10581a46320194bd9546c45dd9c10f5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/about.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/reports.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_306a4d4ab48ff34fd33755bb7e51831a10581a46320194bd9546c45dd9c10f5e->leave($__internal_306a4d4ab48ff34fd33755bb7e51831a10581a46320194bd9546c45dd9c10f5e_prof);

    }

    // line 8
    public function block_header($context, array $blocks = array())
    {
        $__internal_008364ab6c3a30fb01d673f619877b6d2f115c8ff019ce5fd9c72ef7c93b672a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_008364ab6c3a30fb01d673f619877b6d2f115c8ff019ce5fd9c72ef7c93b672a->enter($__internal_008364ab6c3a30fb01d673f619877b6d2f115c8ff019ce5fd9c72ef7c93b672a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 9
        echo "    <h1>Sprawozdania</h1>
";
        
        $__internal_008364ab6c3a30fb01d673f619877b6d2f115c8ff019ce5fd9c72ef7c93b672a->leave($__internal_008364ab6c3a30fb01d673f619877b6d2f115c8ff019ce5fd9c72ef7c93b672a_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_6cb3bc612e8f782292c7b4ddaa889b265d630b993e21cfe34ac1a887ff5ac4e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cb3bc612e8f782292c7b4ddaa889b265d630b993e21cfe34ac1a887ff5ac4e6->enter($__internal_6cb3bc612e8f782292c7b4ddaa889b265d630b993e21cfe34ac1a887ff5ac4e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "    <main>
        <div class=\"route\"><br></div>
        <div class=\"container\">
            <article class=\"report\">
                <div class=\"report__header\">
                    <h1>Rok 2013</h1>
                    <h1>SPRAWOZDANIE FINANSOWE</h1>
                    <h1>STOWARZYSZENIA ”ŹRÓDŁO” W OSTROWCU ŚW.</h1>
                    <h1>ZA ROK OBROTOWY OD 01.01.2013 DO 31.12.2013.</h1>
                    <a href=\"\" target=\"_blank\"><button class=\"btn btn-yellow\">Pokaż</button></a>
                </div>
                <div class=\"report__header\">
                    <h1>Rok 2012</h1>
                    <h1>SPRAWOZDANIE FINANSOWE</h1>
                    <h1>STOWARZYSZENIA ”ŹRÓDŁO” W OSTROWCU ŚW.</h1>
                    <h1>ZA ROK OBROTOWY OD 01.01.2012 DO 31.12.2012.</h1>
                    <a href=\"\" target=\"_blank\"><button class=\"btn btn-yellow\">Pokaż</button></a>
                </div>
            </article>
        </div>
    </main>
";
        
        $__internal_6cb3bc612e8f782292c7b4ddaa889b265d630b993e21cfe34ac1a887ff5ac4e6->leave($__internal_6cb3bc612e8f782292c7b4ddaa889b265d630b993e21cfe34ac1a887ff5ac4e6_prof);

    }

    public function getTemplateName()
    {
        return "front/reports.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 13,  70 => 12,  62 => 9,  56 => 8,  47 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/about.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/reports.css') }}\" />
{% endblock %}

{% block header %}
    <h1>Sprawozdania</h1>
{% endblock %}

{% block body %}
    <main>
        <div class=\"route\"><br></div>
        <div class=\"container\">
            <article class=\"report\">
                <div class=\"report__header\">
                    <h1>Rok 2013</h1>
                    <h1>SPRAWOZDANIE FINANSOWE</h1>
                    <h1>STOWARZYSZENIA ”ŹRÓDŁO” W OSTROWCU ŚW.</h1>
                    <h1>ZA ROK OBROTOWY OD 01.01.2013 DO 31.12.2013.</h1>
                    <a href=\"\" target=\"_blank\"><button class=\"btn btn-yellow\">Pokaż</button></a>
                </div>
                <div class=\"report__header\">
                    <h1>Rok 2012</h1>
                    <h1>SPRAWOZDANIE FINANSOWE</h1>
                    <h1>STOWARZYSZENIA ”ŹRÓDŁO” W OSTROWCU ŚW.</h1>
                    <h1>ZA ROK OBROTOWY OD 01.01.2012 DO 31.12.2012.</h1>
                    <a href=\"\" target=\"_blank\"><button class=\"btn btn-yellow\">Pokaż</button></a>
                </div>
            </article>
        </div>
    </main>
{% endblock %}", "front/reports.html.twig", "/home/kuba/Workspace/app/Resources/views/front/reports.html.twig");
    }
}
