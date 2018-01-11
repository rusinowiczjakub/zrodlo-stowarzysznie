<?php

/* base.html.twig */
class __TwigTemplate_c8f2f74b618bc671871083474e82b6340fff3e6ef44e9543c223972f83b0b3a8 extends Twig_Template
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
        $__internal_e28cf01d8e88919f4dc6161ff68ca21f83357ec07ba705ed36b92d8eaeb55845 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e28cf01d8e88919f4dc6161ff68ca21f83357ec07ba705ed36b92d8eaeb55845->enter($__internal_e28cf01d8e88919f4dc6161ff68ca21f83357ec07ba705ed36b92d8eaeb55845_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_e28cf01d8e88919f4dc6161ff68ca21f83357ec07ba705ed36b92d8eaeb55845->leave($__internal_e28cf01d8e88919f4dc6161ff68ca21f83357ec07ba705ed36b92d8eaeb55845_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_a7178223c0880b6151c425dc4a93b1cf6f812ab3f8a977c9dc02437cf8a1808c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7178223c0880b6151c425dc4a93b1cf6f812ab3f8a977c9dc02437cf8a1808c->enter($__internal_a7178223c0880b6151c425dc4a93b1cf6f812ab3f8a977c9dc02437cf8a1808c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "\"Źródło\" - Stowarzyszenie na rzecz wychowanków Zespołu Szół Specjalnych";
        
        $__internal_a7178223c0880b6151c425dc4a93b1cf6f812ab3f8a977c9dc02437cf8a1808c->leave($__internal_a7178223c0880b6151c425dc4a93b1cf6f812ab3f8a977c9dc02437cf8a1808c_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_785424ccd9eec0205c8b53d2bc660a48085984aeb987ac37c508804a4e08c88d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_785424ccd9eec0205c8b53d2bc660a48085984aeb987ac37c508804a4e08c88d->enter($__internal_785424ccd9eec0205c8b53d2bc660a48085984aeb987ac37c508804a4e08c88d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_785424ccd9eec0205c8b53d2bc660a48085984aeb987ac37c508804a4e08c88d->leave($__internal_785424ccd9eec0205c8b53d2bc660a48085984aeb987ac37c508804a4e08c88d_prof);

    }

    // line 19
    public function block_header($context, array $blocks = array())
    {
        $__internal_335882f9f02b057a848685f431f88739f10a9b924409d499f9b5583efa50e339 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_335882f9f02b057a848685f431f88739f10a9b924409d499f9b5583efa50e339->enter($__internal_335882f9f02b057a848685f431f88739f10a9b924409d499f9b5583efa50e339_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 20
        echo "        ";
        
        $__internal_335882f9f02b057a848685f431f88739f10a9b924409d499f9b5583efa50e339->leave($__internal_335882f9f02b057a848685f431f88739f10a9b924409d499f9b5583efa50e339_prof);

    }

    // line 24
    public function block_body($context, array $blocks = array())
    {
        $__internal_592c77df015f8d8e9ebb2e7942578958cf797a1d11ae98ab18e6e3046e780bfa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_592c77df015f8d8e9ebb2e7942578958cf797a1d11ae98ab18e6e3046e780bfa->enter($__internal_592c77df015f8d8e9ebb2e7942578958cf797a1d11ae98ab18e6e3046e780bfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 25
        echo "

    ";
        
        $__internal_592c77df015f8d8e9ebb2e7942578958cf797a1d11ae98ab18e6e3046e780bfa->leave($__internal_592c77df015f8d8e9ebb2e7942578958cf797a1d11ae98ab18e6e3046e780bfa_prof);

    }

    // line 51
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_37a157f82a0fbc404c9d71d28725a5ebe479f1232ab82dbd89ecfee9d9109b50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37a157f82a0fbc404c9d71d28725a5ebe479f1232ab82dbd89ecfee9d9109b50->enter($__internal_37a157f82a0fbc404c9d71d28725a5ebe479f1232ab82dbd89ecfee9d9109b50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_37a157f82a0fbc404c9d71d28725a5ebe479f1232ab82dbd89ecfee9d9109b50->leave($__internal_37a157f82a0fbc404c9d71d28725a5ebe479f1232ab82dbd89ecfee9d9109b50_prof);

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
        return array (  163 => 51,  154 => 25,  148 => 24,  141 => 20,  135 => 19,  124 => 12,  112 => 6,  103 => 52,  101 => 51,  76 => 28,  74 => 24,  69 => 21,  67 => 19,  63 => 17,  61 => 16,  54 => 13,  52 => 12,  47 => 10,  43 => 9,  39 => 8,  34 => 6,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <title>{% block title %}\"Źródło\" - Stowarzyszenie na rzecz wychowanków Zespołu Szół Specjalnych{% endblock %}</title>
        <link rel=\"stylesheet\" type=\"text/css\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
        <link rel=\"stylesheet\" href=\"{{ asset('assets/css/base.css') }}\" />
        <link rel=\"stylesheet\" href=\"{{ asset('assets/css/navbar.css') }}\" />
        <link rel=\"stylesheet\" href=\"{{ asset('assets/css/modal.css') }}\" />
        <link href=\"https://fonts.googleapis.com/css?family=Alegreya+Sans\" rel=\"stylesheet\">
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('assets/images/logo.png') }}\" />
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

    {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/home/kuba/Workspace/app/Resources/views/base.html.twig");
    }
}
