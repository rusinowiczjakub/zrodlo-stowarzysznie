<?php

/* front/reports.html.twig */
class __TwigTemplate_4b5944ee23de90071298ed02ceed1ba09ad75490b958dd26960fa1385e739e2a extends Twig_Template
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
        $__internal_402755c94d9d31afa869cdfd2f597a69bd027b8873bff57f8522664878f5a55b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_402755c94d9d31afa869cdfd2f597a69bd027b8873bff57f8522664878f5a55b->enter($__internal_402755c94d9d31afa869cdfd2f597a69bd027b8873bff57f8522664878f5a55b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "front/reports.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_402755c94d9d31afa869cdfd2f597a69bd027b8873bff57f8522664878f5a55b->leave($__internal_402755c94d9d31afa869cdfd2f597a69bd027b8873bff57f8522664878f5a55b_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_fdf84b4b0e102e9d4e35a2212d5b6a2c1b848fee488c0e0b83643de127b3099f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdf84b4b0e102e9d4e35a2212d5b6a2c1b848fee488c0e0b83643de127b3099f->enter($__internal_fdf84b4b0e102e9d4e35a2212d5b6a2c1b848fee488c0e0b83643de127b3099f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/about.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/reports.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_fdf84b4b0e102e9d4e35a2212d5b6a2c1b848fee488c0e0b83643de127b3099f->leave($__internal_fdf84b4b0e102e9d4e35a2212d5b6a2c1b848fee488c0e0b83643de127b3099f_prof);

    }

    // line 8
    public function block_header($context, array $blocks = array())
    {
        $__internal_f265d804a5d4298e6664615b89f4363e5445f2f4e145caf34f012a7becaccfaf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f265d804a5d4298e6664615b89f4363e5445f2f4e145caf34f012a7becaccfaf->enter($__internal_f265d804a5d4298e6664615b89f4363e5445f2f4e145caf34f012a7becaccfaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 9
        echo "    <h1>Sprawozdania</h1>
";
        
        $__internal_f265d804a5d4298e6664615b89f4363e5445f2f4e145caf34f012a7becaccfaf->leave($__internal_f265d804a5d4298e6664615b89f4363e5445f2f4e145caf34f012a7becaccfaf_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_5c6ddcd1eb1508c7310fc6a2d8ac3a74d31c833d1202cc82c2e040b7b4128a68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c6ddcd1eb1508c7310fc6a2d8ac3a74d31c833d1202cc82c2e040b7b4128a68->enter($__internal_5c6ddcd1eb1508c7310fc6a2d8ac3a74d31c833d1202cc82c2e040b7b4128a68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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

        <!--Modal-->
        <div id=\"contactModal\" class=\"modalDialog\">
            <div>
                <a href=\"#close\" title=\"Close\" class=\"close\">X</a>
                <p>Modal Box</p>
                <p>ul. Iłżecka 31</p>
                <p>27-400 Ostrowiec Świętokrzyski</p>
                <p>Tel: +48 784 510 686</p>
                <h2>KRS: 0000309966</h2>
                <p>REGON: 26026284000000</p>
                <p>NIP: 661-23-22-318</p>
            </div>
        </div>
    </main>
";
        
        $__internal_5c6ddcd1eb1508c7310fc6a2d8ac3a74d31c833d1202cc82c2e040b7b4128a68->leave($__internal_5c6ddcd1eb1508c7310fc6a2d8ac3a74d31c833d1202cc82c2e040b7b4128a68_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
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

        <!--Modal-->
        <div id=\"contactModal\" class=\"modalDialog\">
            <div>
                <a href=\"#close\" title=\"Close\" class=\"close\">X</a>
                <p>Modal Box</p>
                <p>ul. Iłżecka 31</p>
                <p>27-400 Ostrowiec Świętokrzyski</p>
                <p>Tel: +48 784 510 686</p>
                <h2>KRS: 0000309966</h2>
                <p>REGON: 26026284000000</p>
                <p>NIP: 661-23-22-318</p>
            </div>
        </div>
    </main>
{% endblock %}", "front/reports.html.twig", "/home/kuba/zrodlo/app/Resources/views/front/reports.html.twig");
    }
}
