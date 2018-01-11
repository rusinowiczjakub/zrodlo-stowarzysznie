<?php

/* base.html.twig */
class __TwigTemplate_668c9665f4b7e1a94b71d0080dd624dbbde85b8ed69f05ae4ea4770c745ef342 extends Twig_Template
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
        $__internal_0e682e1d622921e8157babde108adb41d00a21d348429d78fcaf88708f251af4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e682e1d622921e8157babde108adb41d00a21d348429d78fcaf88708f251af4->enter($__internal_0e682e1d622921e8157babde108adb41d00a21d348429d78fcaf88708f251af4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
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
        // line 23
        echo "
    </header>


    ";
        // line 27
        $this->displayBlock('body', $context, $blocks);
        // line 31
        echo "
    <div class=\"spacing\">

    </div>
    <footer>
        <i class=\"fa fa-facebook-square\" aria-hidden=\"true\"></i>
        <i class=\"fa fa-internet-explorer\" aria-hidden=\"true\"></i>
        <i></i>
    </footer>
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
        // line 54
        $this->displayBlock('javascripts', $context, $blocks);
        // line 55
        echo "    </body>
</html>
";
        
        $__internal_0e682e1d622921e8157babde108adb41d00a21d348429d78fcaf88708f251af4->leave($__internal_0e682e1d622921e8157babde108adb41d00a21d348429d78fcaf88708f251af4_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_01c1aa3a7911269dcc436ae0bf68d3a1bfb92c13aab0e394b7bd83a2499702a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01c1aa3a7911269dcc436ae0bf68d3a1bfb92c13aab0e394b7bd83a2499702a3->enter($__internal_01c1aa3a7911269dcc436ae0bf68d3a1bfb92c13aab0e394b7bd83a2499702a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_01c1aa3a7911269dcc436ae0bf68d3a1bfb92c13aab0e394b7bd83a2499702a3->leave($__internal_01c1aa3a7911269dcc436ae0bf68d3a1bfb92c13aab0e394b7bd83a2499702a3_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2cf4f7ea93f0bb41e7f380f5cd33d15d8a5da6a38218b4f47ba5296e141cd373 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cf4f7ea93f0bb41e7f380f5cd33d15d8a5da6a38218b4f47ba5296e141cd373->enter($__internal_2cf4f7ea93f0bb41e7f380f5cd33d15d8a5da6a38218b4f47ba5296e141cd373_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_2cf4f7ea93f0bb41e7f380f5cd33d15d8a5da6a38218b4f47ba5296e141cd373->leave($__internal_2cf4f7ea93f0bb41e7f380f5cd33d15d8a5da6a38218b4f47ba5296e141cd373_prof);

    }

    // line 19
    public function block_header($context, array $blocks = array())
    {
        $__internal_baade6dbd2cce7452d3ab77d929d8c5b5fa3e3bb6337626adfd3512b86690b62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_baade6dbd2cce7452d3ab77d929d8c5b5fa3e3bb6337626adfd3512b86690b62->enter($__internal_baade6dbd2cce7452d3ab77d929d8c5b5fa3e3bb6337626adfd3512b86690b62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 20
        echo "

        ";
        
        $__internal_baade6dbd2cce7452d3ab77d929d8c5b5fa3e3bb6337626adfd3512b86690b62->leave($__internal_baade6dbd2cce7452d3ab77d929d8c5b5fa3e3bb6337626adfd3512b86690b62_prof);

    }

    // line 27
    public function block_body($context, array $blocks = array())
    {
        $__internal_b3dc03ef364dd05685347052d71627f02855d329bf185fddf67956b0a24d028b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3dc03ef364dd05685347052d71627f02855d329bf185fddf67956b0a24d028b->enter($__internal_b3dc03ef364dd05685347052d71627f02855d329bf185fddf67956b0a24d028b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 28
        echo "

    ";
        
        $__internal_b3dc03ef364dd05685347052d71627f02855d329bf185fddf67956b0a24d028b->leave($__internal_b3dc03ef364dd05685347052d71627f02855d329bf185fddf67956b0a24d028b_prof);

    }

    // line 54
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c569163dc039dca42d9308dd8c8708dd6cfcf42e43a337649f1d0041a6bf4783 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c569163dc039dca42d9308dd8c8708dd6cfcf42e43a337649f1d0041a6bf4783->enter($__internal_c569163dc039dca42d9308dd8c8708dd6cfcf42e43a337649f1d0041a6bf4783_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_c569163dc039dca42d9308dd8c8708dd6cfcf42e43a337649f1d0041a6bf4783->leave($__internal_c569163dc039dca42d9308dd8c8708dd6cfcf42e43a337649f1d0041a6bf4783_prof);

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
        return array (  166 => 54,  157 => 28,  151 => 27,  142 => 20,  136 => 19,  125 => 12,  113 => 6,  104 => 55,  102 => 54,  77 => 31,  75 => 27,  69 => 23,  67 => 19,  63 => 17,  61 => 16,  54 => 13,  52 => 12,  47 => 10,  43 => 9,  39 => 8,  34 => 6,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <title>{% block title %}Welcome!{% endblock %}</title>
        <link rel=\"stylesheet\" type=\"text/css\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
        <link rel=\"stylesheet\" href=\"{{ asset('assets/css/base.css') }}\" />
        <link rel=\"stylesheet\" href=\"{{ asset('assets/css/navbar.css') }}\" />
        <link rel=\"stylesheet\" href=\"{{ asset('assets/css/modal.css') }}\" />
        <link href=\"https://fonts.googleapis.com/css?family=Alegreya+Sans\" rel=\"stylesheet\">
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
    {% include 'navbar.html.twig' %}
    <header>
        <div class=\"bg-img\"></div>
        {% block header %}


        {% endblock %}

    </header>


    {% block body %}


    {% endblock %}

    <div class=\"spacing\">

    </div>
    <footer>
        <i class=\"fa fa-facebook-square\" aria-hidden=\"true\"></i>
        <i class=\"fa fa-internet-explorer\" aria-hidden=\"true\"></i>
        <i></i>
    </footer>
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

    {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/home/kuba/Workspace/wordpress/app/Resources/views/base.html.twig");
    }
}
