<?php

/* :front:actuals.html.twig */
class __TwigTemplate_de33165d419d3739beb24b8d479962c2395a64d13f581b8d950f9ec4ade0e28f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":front:actuals.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/actuals.css"), "html", null, true);
        echo "\" />
";
    }

    // line 8
    public function block_header($context, array $blocks = array())
    {
        // line 9
        echo "    <h1>Aktualności ";
        if (array_key_exists("year", $context)) {
            echo " - ";
            echo twig_escape_filter($this->env, ($context["year"] ?? null), "html", null, true);
            echo " ";
        }
        echo "</h1>
";
    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        // line 13
        echo "    <main>
        <div class=\"route\"><br></div>
        <div class=\"container\">
            <article class=\"post\">
                ";
        // line 17
        if (array_key_exists("lastPosts", $context)) {
            // line 18
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["lastPosts"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
                // line 19
                echo "                    <div class=\"post__image\">
                        <img src=\"assets/images/warsaw_maraton.jpg\">
                    </div>
                    <div class=\"post__content\">
                        <h1>";
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "header", array()), "html", null, true);
                echo "</h1>
                        ";
                // line 24
                echo strip_tags(twig_slice($this->env, $this->getAttribute($context["post"], "content", array()), 0, 360));
                echo "...
                        <a href=\"/actuals/post/";
                // line 25
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "id", array()), "html", null, true);
                echo "\"><button class=\"btn btn-yellow\">Czytaj więcej</button></a>
                    </div>
                    <hr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "                ";
        } elseif ( !twig_test_empty(($context["posts"] ?? null))) {
            // line 30
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
                // line 31
                echo "                    <div class=\"post__image\">
                        <img src=\"assets/images/warsaw_maraton.jpg\">
                    </div>
                    <div class=\"post__content\">
                        <h1>";
                // line 35
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "header", array()), "html", null, true);
                echo "</h1>
                        <p>";
                // line 36
                echo strip_tags(twig_slice($this->env, $this->getAttribute($context["post"], "content", array()), 0, 360));
                echo "...</p>
                        <a href=\"post.html\"><button class=\"btn btn-yellow\">Czytaj więcej</button></a>
                    </div>
                    <hr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "                ";
        } else {
            // line 42
            echo "                    <h1>Brak postów z tego okresu</h1>
                ";
        }
        // line 44
        echo "            </article>

            <aside class=\"sidebar\">
                <h1>Ostatnie wpisy</h1>
                <ul>
                ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["sidePosts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 50
            echo "                    <li><a href=\"/actuals/post/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "header", array()), "html", null, true);
            echo "</a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "                </ul>
                <h1>Aktualności według daty</h1>
                <ul>
                    <li><a href=";
        // line 55
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("actuals_by_year", array("year" => 2017));
        echo ">2017</a></li>
                    <li><a href=";
        // line 56
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("actuals_by_year", array("year" => 2016));
        echo ">2016</a></li>
                    <li><a href=";
        // line 57
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("actuals_by_year", array("year" => 2015));
        echo ">2015</a></li>
                    <li>2014</li>
                </ul>
            </aside>
        </div>
    </main>
";
    }

    public function getTemplateName()
    {
        return ":front:actuals.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 57,  165 => 56,  161 => 55,  156 => 52,  145 => 50,  141 => 49,  134 => 44,  130 => 42,  127 => 41,  116 => 36,  112 => 35,  106 => 31,  101 => 30,  98 => 29,  88 => 25,  84 => 24,  80 => 23,  74 => 19,  69 => 18,  67 => 17,  61 => 13,  58 => 12,  47 => 9,  44 => 8,  38 => 5,  33 => 4,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":front:actuals.html.twig", "/home/kuba/zrodlo/app/Resources/views/front/actuals.html.twig");
    }
}
