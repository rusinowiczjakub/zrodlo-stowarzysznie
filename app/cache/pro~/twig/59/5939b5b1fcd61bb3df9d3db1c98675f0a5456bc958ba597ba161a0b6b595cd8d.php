<?php

/* front/reports.html.twig */
class __TwigTemplate_9f1505d160cc278f1282310769f8d9eaf2c7aef335c1a37f667e3ac9f7b755eb extends Twig_Template
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
        $__internal_ffed8a344fd46ba81d62ec6b3c2d475bdbd70d50794e4ebec648467c10a4914e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffed8a344fd46ba81d62ec6b3c2d475bdbd70d50794e4ebec648467c10a4914e->enter($__internal_ffed8a344fd46ba81d62ec6b3c2d475bdbd70d50794e4ebec648467c10a4914e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "front/reports.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ffed8a344fd46ba81d62ec6b3c2d475bdbd70d50794e4ebec648467c10a4914e->leave($__internal_ffed8a344fd46ba81d62ec6b3c2d475bdbd70d50794e4ebec648467c10a4914e_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f4c3f6a06d60dd6f8462772b64953c672ac8081da2783f14261ad0360503b17f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4c3f6a06d60dd6f8462772b64953c672ac8081da2783f14261ad0360503b17f->enter($__internal_f4c3f6a06d60dd6f8462772b64953c672ac8081da2783f14261ad0360503b17f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/about.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/reports.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_f4c3f6a06d60dd6f8462772b64953c672ac8081da2783f14261ad0360503b17f->leave($__internal_f4c3f6a06d60dd6f8462772b64953c672ac8081da2783f14261ad0360503b17f_prof);

    }

    // line 8
    public function block_header($context, array $blocks = array())
    {
        $__internal_4b4a238a4d840a48a21dda83af61f6ba8ee83c0665f1a0a3a109a043a4483d97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b4a238a4d840a48a21dda83af61f6ba8ee83c0665f1a0a3a109a043a4483d97->enter($__internal_4b4a238a4d840a48a21dda83af61f6ba8ee83c0665f1a0a3a109a043a4483d97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 9
        echo "    <h1>Sprawozdania</h1>
";
        
        $__internal_4b4a238a4d840a48a21dda83af61f6ba8ee83c0665f1a0a3a109a043a4483d97->leave($__internal_4b4a238a4d840a48a21dda83af61f6ba8ee83c0665f1a0a3a109a043a4483d97_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_55deceac203d972965e8c69857136dfe10864e1479cc17b653ba3144f1f96024 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55deceac203d972965e8c69857136dfe10864e1479cc17b653ba3144f1f96024->enter($__internal_55deceac203d972965e8c69857136dfe10864e1479cc17b653ba3144f1f96024_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_55deceac203d972965e8c69857136dfe10864e1479cc17b653ba3144f1f96024->leave($__internal_55deceac203d972965e8c69857136dfe10864e1479cc17b653ba3144f1f96024_prof);

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
