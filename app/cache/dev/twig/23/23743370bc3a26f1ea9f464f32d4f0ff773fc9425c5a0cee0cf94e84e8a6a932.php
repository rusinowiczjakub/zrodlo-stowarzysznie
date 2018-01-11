<?php

/* :front:reports.html.twig */
class __TwigTemplate_a03f623e9e01f78894f9b596bf509f3ecef0538f45c1c96a9e5dccec70e399aa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":front:reports.html.twig", 1);
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
        $__internal_ba1cdce179924a583e09a39018968020f04ec0d075218cb894810fd998892e10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba1cdce179924a583e09a39018968020f04ec0d075218cb894810fd998892e10->enter($__internal_ba1cdce179924a583e09a39018968020f04ec0d075218cb894810fd998892e10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":front:reports.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ba1cdce179924a583e09a39018968020f04ec0d075218cb894810fd998892e10->leave($__internal_ba1cdce179924a583e09a39018968020f04ec0d075218cb894810fd998892e10_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7211f3ea6a6db2cbf3ed6c0dd43c0bc22f9be70f024bbf9b959e61ac1bb1aba5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7211f3ea6a6db2cbf3ed6c0dd43c0bc22f9be70f024bbf9b959e61ac1bb1aba5->enter($__internal_7211f3ea6a6db2cbf3ed6c0dd43c0bc22f9be70f024bbf9b959e61ac1bb1aba5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/about.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/reports.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_7211f3ea6a6db2cbf3ed6c0dd43c0bc22f9be70f024bbf9b959e61ac1bb1aba5->leave($__internal_7211f3ea6a6db2cbf3ed6c0dd43c0bc22f9be70f024bbf9b959e61ac1bb1aba5_prof);

    }

    // line 8
    public function block_header($context, array $blocks = array())
    {
        $__internal_79bc7488611900c1407488ad125f88d493bc1d29de71367aa09d5fad6906dacf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79bc7488611900c1407488ad125f88d493bc1d29de71367aa09d5fad6906dacf->enter($__internal_79bc7488611900c1407488ad125f88d493bc1d29de71367aa09d5fad6906dacf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 9
        echo "    <h1>Sprawozdania</h1>
";
        
        $__internal_79bc7488611900c1407488ad125f88d493bc1d29de71367aa09d5fad6906dacf->leave($__internal_79bc7488611900c1407488ad125f88d493bc1d29de71367aa09d5fad6906dacf_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_d2c4b9a82bb6ece966020f1a7a831e785c7ae687d3345f4fa78298b5eb9f0c3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2c4b9a82bb6ece966020f1a7a831e785c7ae687d3345f4fa78298b5eb9f0c3d->enter($__internal_d2c4b9a82bb6ece966020f1a7a831e785c7ae687d3345f4fa78298b5eb9f0c3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_d2c4b9a82bb6ece966020f1a7a831e785c7ae687d3345f4fa78298b5eb9f0c3d->leave($__internal_d2c4b9a82bb6ece966020f1a7a831e785c7ae687d3345f4fa78298b5eb9f0c3d_prof);

    }

    public function getTemplateName()
    {
        return ":front:reports.html.twig";
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
{% endblock %}", ":front:reports.html.twig", "/home/kuba/Workspace/app/Resources/views/front/reports.html.twig");
    }
}
