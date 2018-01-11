<?php

/* :front:reports.html.twig */
class __TwigTemplate_535cee5a786123528311742f2f772ecf993a5dbc82ec1a6f204d71ca4d2a872c extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/about.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/reports.css"), "html", null, true);
        echo "\" />
";
    }

    // line 8
    public function block_header($context, array $blocks = array())
    {
        // line 9
        echo "    <h1>Sprawozdania</h1>
";
    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
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
        return array (  55 => 13,  52 => 12,  47 => 9,  44 => 8,  38 => 5,  33 => 4,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":front:reports.html.twig", "/home/kuba/zrodlo/app/Resources/views/front/reports.html.twig");
    }
}
