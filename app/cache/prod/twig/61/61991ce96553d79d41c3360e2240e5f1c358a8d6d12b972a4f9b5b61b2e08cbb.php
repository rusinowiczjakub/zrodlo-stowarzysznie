<?php

/* :front:reports.html.twig */
class __TwigTemplate_e35a3b49d94bf0b9f9aa7fea8bf726c38150a0993723a20215e5b85d6e92e28c extends Twig_Template
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

    public function getSourceContext()
    {
        return new Twig_Source("", ":front:reports.html.twig", "/home/kuba/Workspace/app/Resources/views/front/reports.html.twig");
    }
}
