<?php

/* base.html.twig */
class __TwigTemplate_f94a45c17779f37896bd2c9d2781286a4f914b719340ad21a86a4153dc47c3c1 extends Twig_Template
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
        $__internal_6de7caf934d3659517f830598fda14acf28b41ba239336e8f27bf5cc3bfa1c3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6de7caf934d3659517f830598fda14acf28b41ba239336e8f27bf5cc3bfa1c3b->enter($__internal_6de7caf934d3659517f830598fda14acf28b41ba239336e8f27bf5cc3bfa1c3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_6de7caf934d3659517f830598fda14acf28b41ba239336e8f27bf5cc3bfa1c3b->leave($__internal_6de7caf934d3659517f830598fda14acf28b41ba239336e8f27bf5cc3bfa1c3b_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_e46af0c7f517b955d3fe4c22f9e30412901b59a2e800c87d7368e4c007ef4636 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e46af0c7f517b955d3fe4c22f9e30412901b59a2e800c87d7368e4c007ef4636->enter($__internal_e46af0c7f517b955d3fe4c22f9e30412901b59a2e800c87d7368e4c007ef4636_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_e46af0c7f517b955d3fe4c22f9e30412901b59a2e800c87d7368e4c007ef4636->leave($__internal_e46af0c7f517b955d3fe4c22f9e30412901b59a2e800c87d7368e4c007ef4636_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c53891ba2e6e77dcd9111e5f6c511defdfdee766b6d45d71075dd0e7b3ebcc37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c53891ba2e6e77dcd9111e5f6c511defdfdee766b6d45d71075dd0e7b3ebcc37->enter($__internal_c53891ba2e6e77dcd9111e5f6c511defdfdee766b6d45d71075dd0e7b3ebcc37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_c53891ba2e6e77dcd9111e5f6c511defdfdee766b6d45d71075dd0e7b3ebcc37->leave($__internal_c53891ba2e6e77dcd9111e5f6c511defdfdee766b6d45d71075dd0e7b3ebcc37_prof);

    }

    // line 19
    public function block_header($context, array $blocks = array())
    {
        $__internal_aada0fe33ee81d92befd2199032993b609d79e0ef778550240958da3fbf3deed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aada0fe33ee81d92befd2199032993b609d79e0ef778550240958da3fbf3deed->enter($__internal_aada0fe33ee81d92befd2199032993b609d79e0ef778550240958da3fbf3deed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 20
        echo "

        ";
        
        $__internal_aada0fe33ee81d92befd2199032993b609d79e0ef778550240958da3fbf3deed->leave($__internal_aada0fe33ee81d92befd2199032993b609d79e0ef778550240958da3fbf3deed_prof);

    }

    // line 27
    public function block_body($context, array $blocks = array())
    {
        $__internal_c8b0816f96338f601545bd9479b0e732e71b239e0c5092b9587661abce1a9926 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8b0816f96338f601545bd9479b0e732e71b239e0c5092b9587661abce1a9926->enter($__internal_c8b0816f96338f601545bd9479b0e732e71b239e0c5092b9587661abce1a9926_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 28
        echo "

    ";
        
        $__internal_c8b0816f96338f601545bd9479b0e732e71b239e0c5092b9587661abce1a9926->leave($__internal_c8b0816f96338f601545bd9479b0e732e71b239e0c5092b9587661abce1a9926_prof);

    }

    // line 54
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_08bb78ecb256053e3cb43eb84adb7debc376e56ac712ff7bc5a9e6bce0c8dd08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08bb78ecb256053e3cb43eb84adb7debc376e56ac712ff7bc5a9e6bce0c8dd08->enter($__internal_08bb78ecb256053e3cb43eb84adb7debc376e56ac712ff7bc5a9e6bce0c8dd08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_08bb78ecb256053e3cb43eb84adb7debc376e56ac712ff7bc5a9e6bce0c8dd08->leave($__internal_08bb78ecb256053e3cb43eb84adb7debc376e56ac712ff7bc5a9e6bce0c8dd08_prof);

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
", "base.html.twig", "/home/kuba/Workspace/app/Resources/views/base.html.twig");
    }
}
