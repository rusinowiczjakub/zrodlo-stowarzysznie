<?php

/* navbar.html.twig */
class __TwigTemplate_47919ec2f0df12126602ee16c62c689be17f1b6635e729fd1be1e9ddc6bca0c1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b7eb51adc03b27d3084e486d524579483386de81256eced7ed5df559bac92331 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7eb51adc03b27d3084e486d524579483386de81256eced7ed5df559bac92331->enter($__internal_b7eb51adc03b27d3084e486d524579483386de81256eced7ed5df559bac92331_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "navbar.html.twig"));

        // line 1
        echo "<nav>
    <img class=\"nav-logo\"src=";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/logo.png"), "html", null, true);
        echo " />
    <ul class=\"navbar-main\">
        <li><a href=";
        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index");
        echo ">Strona główna</a></li>
        <li><a href=";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("about");
        echo ">O stowarzyszeniu</a></li>
        <li><a href=";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("actuals");
        echo ">Aktualności</a></li>
        ";
        // line 8
        echo "        <li><a href=";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reports");
        echo ">Sprawozdania</a></li>
        <li><a href=\"#contactModal\">Kontakt</a></li>
    </ul>
</nav>
<nav class=\"navbar-collapse\">
    <i class=\"fa fa-bars\"></i>
    <ul class=\"navbar-hidden\">
        <li><a href=";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index");
        echo ">Strona główna</a></li>
        <li><a href=";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("about");
        echo ">O stowarzyszeniu</a></li>
        <li><a href=";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("actuals");
        echo ">Aktualności</a></li>
        ";
        // line 19
        echo "        <li><a href=";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reports");
        echo ">Sprawozdania</a></li>
        <li><a href=\"#contactModal\">Kontakt</a></li>
    </ul>
</nav>

";
        // line 24
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_b7eb51adc03b27d3084e486d524579483386de81256eced7ed5df559bac92331->leave($__internal_b7eb51adc03b27d3084e486d524579483386de81256eced7ed5df559bac92331_prof);

    }

    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5850501fc40a7b0b692f18aa29dc5b8506c31e3bf800f44ab512eba0d3643f25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5850501fc40a7b0b692f18aa29dc5b8506c31e3bf800f44ab512eba0d3643f25->enter($__internal_5850501fc40a7b0b692f18aa29dc5b8506c31e3bf800f44ab512eba0d3643f25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 25
        echo "    <script src=\"https://code.jquery.com/jquery-3.2.1.js\"
            integrity=\"sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=\"
            crossorigin=\"anonymous\">
    </script>
    <script src=";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/navbarScroll.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/navbarCollapse.js"), "html", null, true);
        echo "></script>
";
        
        $__internal_5850501fc40a7b0b692f18aa29dc5b8506c31e3bf800f44ab512eba0d3643f25->leave($__internal_5850501fc40a7b0b692f18aa29dc5b8506c31e3bf800f44ab512eba0d3643f25_prof);

    }

    public function getTemplateName()
    {
        return "navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 30,  93 => 29,  87 => 25,  75 => 24,  66 => 19,  62 => 17,  58 => 16,  54 => 15,  43 => 8,  39 => 6,  35 => 5,  31 => 4,  26 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<nav>
    <img class=\"nav-logo\"src={{ asset(\"assets/images/logo.png\") }} />
    <ul class=\"navbar-main\">
        <li><a href={{ path('index') }}>Strona główna</a></li>
        <li><a href={{ path('about') }}>O stowarzyszeniu</a></li>
        <li><a href={{ path('actuals') }}>Aktualności</a></li>
        {#<li><a href={{ path('projects') }}>Projekty</a></li>#}
        <li><a href={{ path('reports') }}>Sprawozdania</a></li>
        <li><a href=\"#contactModal\">Kontakt</a></li>
    </ul>
</nav>
<nav class=\"navbar-collapse\">
    <i class=\"fa fa-bars\"></i>
    <ul class=\"navbar-hidden\">
        <li><a href={{ path('index') }}>Strona główna</a></li>
        <li><a href={{ path('about') }}>O stowarzyszeniu</a></li>
        <li><a href={{ path('actuals') }}>Aktualności</a></li>
        {#<li><a href={{ path('projects') }}>Projekty</a></li>#}
        <li><a href={{ path('reports') }}>Sprawozdania</a></li>
        <li><a href=\"#contactModal\">Kontakt</a></li>
    </ul>
</nav>

{% block javascripts %}
    <script src=\"https://code.jquery.com/jquery-3.2.1.js\"
            integrity=\"sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=\"
            crossorigin=\"anonymous\">
    </script>
    <script src={{ asset(\"assets/js/navbarScroll.js\") }}></script>
    <script src={{ asset(\"assets/js/navbarCollapse.js\") }}></script>
{% endblock %}", "navbar.html.twig", "/home/kuba/Workspace/app/Resources/views/navbar.html.twig");
    }
}
