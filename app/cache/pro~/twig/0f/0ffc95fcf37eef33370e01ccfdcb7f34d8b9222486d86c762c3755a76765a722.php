<?php

/* base.html.twig */
class __TwigTemplate_5faff55f1f1782753777f23b6c89b3bbeea3c7b80a23649266c03e9b9c892e25 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"stylesheet\" type=\"text/css\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
        <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/base.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/navbar.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/modal.css"), "html", null, true);
        echo "\" />
        <link href=\"https://fonts.googleapis.com/css?family=Alegreya+Sans\" rel=\"stylesheet\">
        ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/logo.png"), "html", null, true);
        echo "\" />
    </head>
    <body>
    ";
        // line 16
        $this->loadTemplate("navbar.html.twig", "base.html.twig", 16)->display($context);
        // line 17
        echo "    <header>
        <div class=\"bg-img\"></div>
        ";
        // line 19
        $this->displayBlock('header', $context, $blocks);
        // line 21
        echo "    </header>


    ";
        // line 24
        $this->displayBlock('body', $context, $blocks);
        // line 28
        echo "
    <div class=\"spacing\">

    </div>
    <footer>
        <h2>Odwiedź nas na facebooku i stronie internetowej</h2>
        <a href=\"https://www.facebook.com/Stowarzyszenie-Źródło-160272364071646/\"><i class=\"fa fa-facebook-square\" aria-hidden=\"true\"></i></a>
        <a href=\"https://zssostrowiec.edupage.org/\"><i class=\"fa fa-internet-explorer\" aria-hidden=\"true\"></i></a>
        <i></i>
    <!--Modal-->
    <div id=\"contactModal\" class=\"modalDialog\">
        <div>
            <a href=\"#close\" title=\"Close\" class=\"close\">X</a>
            <h1>KONTAKT</h1>
            <p>ul. Iłżecka 31</p>
            <p>27-400 Ostrowiec Świętokrzyski</p>
            <p>Tel: +48 784 510 686</p>
            <h2>KRS: 0000309966</h2>
            <p>REGON: 26026284000000</p>
            <p>NIP: 661-23-22-318</p>
        </div>
    </div>

    ";
        // line 51
        $this->displayBlock('javascripts', $context, $blocks);
        // line 52
        echo "    </body>
</html>
";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "\"Źródło\" - Stowarzyszenie na rzecz wychowanków Zespołu Szół Specjalnych";
    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 19
    public function block_header($context, array $blocks = array())
    {
        // line 20
        echo "        ";
    }

    // line 24
    public function block_body($context, array $blocks = array())
    {
        // line 25
        echo "

    ";
    }

    // line 51
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 51,  127 => 25,  124 => 24,  120 => 20,  117 => 19,  112 => 12,  106 => 6,  100 => 52,  98 => 51,  73 => 28,  71 => 24,  66 => 21,  64 => 19,  60 => 17,  58 => 16,  51 => 13,  49 => 12,  44 => 10,  40 => 9,  36 => 8,  31 => 6,  24 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "base.html.twig", "/home/kuba/Workspace/app/Resources/views/base.html.twig");
    }
}
