<?php

/* base.html.twig */
class __TwigTemplate_ab76670924fd9c37fca8763e5631d474ee37be291345f247ecd55351d0ada667 extends Twig_Template
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
        $__internal_3b3ee13f3bb92d81139100d625cf2ed52e6a152a540fb49f33a942e8b5e865cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b3ee13f3bb92d81139100d625cf2ed52e6a152a540fb49f33a942e8b5e865cc->enter($__internal_3b3ee13f3bb92d81139100d625cf2ed52e6a152a540fb49f33a942e8b5e865cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_3b3ee13f3bb92d81139100d625cf2ed52e6a152a540fb49f33a942e8b5e865cc->leave($__internal_3b3ee13f3bb92d81139100d625cf2ed52e6a152a540fb49f33a942e8b5e865cc_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_e22dc3b8d221e6610e5973f4b20a7c830f5dc5f304bfb129819949547d086243 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e22dc3b8d221e6610e5973f4b20a7c830f5dc5f304bfb129819949547d086243->enter($__internal_e22dc3b8d221e6610e5973f4b20a7c830f5dc5f304bfb129819949547d086243_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "\"Źródło\" - Stowarzyszenie na rzecz wychowanków Zespołu Szół Specjalnych";
        
        $__internal_e22dc3b8d221e6610e5973f4b20a7c830f5dc5f304bfb129819949547d086243->leave($__internal_e22dc3b8d221e6610e5973f4b20a7c830f5dc5f304bfb129819949547d086243_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_948a40cd384278351431ff0aae370a6fb5a99db02a31d3a7e7f072d1ebe45a5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_948a40cd384278351431ff0aae370a6fb5a99db02a31d3a7e7f072d1ebe45a5c->enter($__internal_948a40cd384278351431ff0aae370a6fb5a99db02a31d3a7e7f072d1ebe45a5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_948a40cd384278351431ff0aae370a6fb5a99db02a31d3a7e7f072d1ebe45a5c->leave($__internal_948a40cd384278351431ff0aae370a6fb5a99db02a31d3a7e7f072d1ebe45a5c_prof);

    }

    // line 19
    public function block_header($context, array $blocks = array())
    {
        $__internal_0aa8ea5b387bd08f7ef14fa44625360f10a4808d8a5e1d832d69669315abfc62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0aa8ea5b387bd08f7ef14fa44625360f10a4808d8a5e1d832d69669315abfc62->enter($__internal_0aa8ea5b387bd08f7ef14fa44625360f10a4808d8a5e1d832d69669315abfc62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 20
        echo "        ";
        
        $__internal_0aa8ea5b387bd08f7ef14fa44625360f10a4808d8a5e1d832d69669315abfc62->leave($__internal_0aa8ea5b387bd08f7ef14fa44625360f10a4808d8a5e1d832d69669315abfc62_prof);

    }

    // line 24
    public function block_body($context, array $blocks = array())
    {
        $__internal_7301f6fce6b07767e44a543cf95f5544ca1acbbc2e40ebce983fbb4d0cffcf5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7301f6fce6b07767e44a543cf95f5544ca1acbbc2e40ebce983fbb4d0cffcf5d->enter($__internal_7301f6fce6b07767e44a543cf95f5544ca1acbbc2e40ebce983fbb4d0cffcf5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 25
        echo "

    ";
        
        $__internal_7301f6fce6b07767e44a543cf95f5544ca1acbbc2e40ebce983fbb4d0cffcf5d->leave($__internal_7301f6fce6b07767e44a543cf95f5544ca1acbbc2e40ebce983fbb4d0cffcf5d_prof);

    }

    // line 51
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6e7a9882c446eb2191bc9afd75fc4e337f8058a973b3ef015f09d1ce409b43a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e7a9882c446eb2191bc9afd75fc4e337f8058a973b3ef015f09d1ce409b43a4->enter($__internal_6e7a9882c446eb2191bc9afd75fc4e337f8058a973b3ef015f09d1ce409b43a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6e7a9882c446eb2191bc9afd75fc4e337f8058a973b3ef015f09d1ce409b43a4->leave($__internal_6e7a9882c446eb2191bc9afd75fc4e337f8058a973b3ef015f09d1ce409b43a4_prof);

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
