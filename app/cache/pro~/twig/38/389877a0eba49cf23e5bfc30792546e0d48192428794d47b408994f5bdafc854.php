<?php

/* base.html.twig */
class __TwigTemplate_4bfaaa4d50cb04b18992ffa952744c92f369314420f88276672c197e4c2d92a6 extends Twig_Template
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
        $__internal_164ebd7a963074f08da78d7310e881ebc01ab98990302323f2c09099c6d6617d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_164ebd7a963074f08da78d7310e881ebc01ab98990302323f2c09099c6d6617d->enter($__internal_164ebd7a963074f08da78d7310e881ebc01ab98990302323f2c09099c6d6617d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_164ebd7a963074f08da78d7310e881ebc01ab98990302323f2c09099c6d6617d->leave($__internal_164ebd7a963074f08da78d7310e881ebc01ab98990302323f2c09099c6d6617d_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_d729fc091efbe9999ce45bd8f04cdb19e0fcd06e5bc499b395a5049e166ec117 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d729fc091efbe9999ce45bd8f04cdb19e0fcd06e5bc499b395a5049e166ec117->enter($__internal_d729fc091efbe9999ce45bd8f04cdb19e0fcd06e5bc499b395a5049e166ec117_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_d729fc091efbe9999ce45bd8f04cdb19e0fcd06e5bc499b395a5049e166ec117->leave($__internal_d729fc091efbe9999ce45bd8f04cdb19e0fcd06e5bc499b395a5049e166ec117_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9a9cf29ae286c58e980e1719e42ca208712c6633343dd953bfe8face15ff2a19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a9cf29ae286c58e980e1719e42ca208712c6633343dd953bfe8face15ff2a19->enter($__internal_9a9cf29ae286c58e980e1719e42ca208712c6633343dd953bfe8face15ff2a19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_9a9cf29ae286c58e980e1719e42ca208712c6633343dd953bfe8face15ff2a19->leave($__internal_9a9cf29ae286c58e980e1719e42ca208712c6633343dd953bfe8face15ff2a19_prof);

    }

    // line 19
    public function block_header($context, array $blocks = array())
    {
        $__internal_9a2053a5c8edd18cadc4d4fba4d47f12fd2b7e6d25c4cc11bb1573844a994268 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a2053a5c8edd18cadc4d4fba4d47f12fd2b7e6d25c4cc11bb1573844a994268->enter($__internal_9a2053a5c8edd18cadc4d4fba4d47f12fd2b7e6d25c4cc11bb1573844a994268_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 20
        echo "

        ";
        
        $__internal_9a2053a5c8edd18cadc4d4fba4d47f12fd2b7e6d25c4cc11bb1573844a994268->leave($__internal_9a2053a5c8edd18cadc4d4fba4d47f12fd2b7e6d25c4cc11bb1573844a994268_prof);

    }

    // line 27
    public function block_body($context, array $blocks = array())
    {
        $__internal_159d9202cbfbed67d3cac19976f4cc7bedec233141b9293cf7a305f2e5c99614 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_159d9202cbfbed67d3cac19976f4cc7bedec233141b9293cf7a305f2e5c99614->enter($__internal_159d9202cbfbed67d3cac19976f4cc7bedec233141b9293cf7a305f2e5c99614_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 28
        echo "

    ";
        
        $__internal_159d9202cbfbed67d3cac19976f4cc7bedec233141b9293cf7a305f2e5c99614->leave($__internal_159d9202cbfbed67d3cac19976f4cc7bedec233141b9293cf7a305f2e5c99614_prof);

    }

    // line 54
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c263f9f761c5c1400a0b676b509c084a6e911ef77554dd23e000089134f63c3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c263f9f761c5c1400a0b676b509c084a6e911ef77554dd23e000089134f63c3d->enter($__internal_c263f9f761c5c1400a0b676b509c084a6e911ef77554dd23e000089134f63c3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_c263f9f761c5c1400a0b676b509c084a6e911ef77554dd23e000089134f63c3d->leave($__internal_c263f9f761c5c1400a0b676b509c084a6e911ef77554dd23e000089134f63c3d_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
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
", "base.html.twig", "/home/kuba/zrodlo/app/Resources/views/base.html.twig");
    }
}
