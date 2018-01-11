<?php

/* :front:single_post.html.twig */
class __TwigTemplate_f05d7c6b29aaecd5e408e10dda0accb976d2064ac6089a979078aa167ac85815 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":front:single_post.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/actuals.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/post.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/lightbox.min.css"), "html", null, true);
        echo "\" />
";
    }

    // line 10
    public function block_header($context, array $blocks = array())
    {
        // line 11
        echo "    <h1>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["post"] ?? null), "header", array()), "html", null, true);
        echo "</h1>
";
    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        // line 15
        echo "    <main>
        <div class=\"route\"><br></div>
        <div class=\"container\">
            <div class=\"single__content\">
                ";
        // line 20
        echo "                    <div>";
        echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["post"] ?? null), "content", array());
        echo "</div>
                ";
        // line 22
        echo "                <p>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["post"] ?? null), "sign", array()), "html", null, true);
        echo "</p>
            </div>
        </div>
        <div class=\"gallery\">
            <div class=\"gallery__header\">
                <h2>Galeria</h2>
                <hr>
            </div>
            <div class=\"gallery__images\">
                ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["post"] ?? null), "images", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 32
            echo "                    <a href=";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->getSourceContext(), $context["image"], "name", array()))), "html", null, true);
            echo " data-lightbox=\"mygallery\"><img src=";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->getSourceContext(), $context["image"], "name", array()))), "html", null, true);
            echo "></a>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "                ";
        // line 35
        echo "                ";
        // line 36
        echo "                ";
        // line 37
        echo "                ";
        // line 38
        echo "                ";
        // line 39
        echo "                ";
        // line 40
        echo "                ";
        // line 41
        echo "                ";
        // line 42
        echo "            </div>
        </div>

    </main>
";
    }

    // line 48
    public function block_javascripts($context, array $blocks = array())
    {
        // line 49
        echo "    <script src=";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/lightbox-plus-jquery.min.js"), "html", null, true);
        echo "></script>
";
    }

    public function getTemplateName()
    {
        return ":front:single_post.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 49,  129 => 48,  121 => 42,  119 => 41,  117 => 40,  115 => 39,  113 => 38,  111 => 37,  109 => 36,  107 => 35,  105 => 34,  94 => 32,  90 => 31,  77 => 22,  72 => 20,  66 => 15,  63 => 14,  56 => 11,  53 => 10,  47 => 7,  43 => 6,  39 => 5,  34 => 4,  31 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":front:single_post.html.twig", "/home/kuba/Workspace/app/Resources/views/front/single_post.html.twig");
    }
}
