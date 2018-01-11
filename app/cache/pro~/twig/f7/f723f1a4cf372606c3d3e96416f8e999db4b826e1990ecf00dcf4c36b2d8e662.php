<?php

/* ::navbar.html.twig */
class __TwigTemplate_4e81a08e7d366624e8442fddc1909b87f1cfb822ca52ca41b9e90ba40406fb3e extends Twig_Template
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
    }

    public function block_javascripts($context, array $blocks = array())
    {
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
    }

    public function getTemplateName()
    {
        return "::navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 30,  84 => 29,  78 => 25,  72 => 24,  63 => 19,  59 => 17,  55 => 16,  51 => 15,  40 => 8,  36 => 6,  32 => 5,  28 => 4,  23 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "::navbar.html.twig", "/home/kuba/zrodlo/app/Resources/views/navbar.html.twig");
    }
}
