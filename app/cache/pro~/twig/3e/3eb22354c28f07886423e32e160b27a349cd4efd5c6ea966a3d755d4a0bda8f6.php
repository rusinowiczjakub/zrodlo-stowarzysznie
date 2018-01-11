<?php

/* front/actuals.html.twig */
class __TwigTemplate_47d4f91d27586a9a7db4f3d5a6a3994bbc1c5e88d664fa76cae0875bb3d2a47d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "front/actuals.html.twig", 1);
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
        $__internal_395bdd3edd63d814be9a6c4aa38fa2f326c7c9cc4dd443e62186c486107e4b21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_395bdd3edd63d814be9a6c4aa38fa2f326c7c9cc4dd443e62186c486107e4b21->enter($__internal_395bdd3edd63d814be9a6c4aa38fa2f326c7c9cc4dd443e62186c486107e4b21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "front/actuals.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_395bdd3edd63d814be9a6c4aa38fa2f326c7c9cc4dd443e62186c486107e4b21->leave($__internal_395bdd3edd63d814be9a6c4aa38fa2f326c7c9cc4dd443e62186c486107e4b21_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c63839437a5a0cce4582ee81ca427889e0a4ef8c9637f0414e2853b8d65d3db4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c63839437a5a0cce4582ee81ca427889e0a4ef8c9637f0414e2853b8d65d3db4->enter($__internal_c63839437a5a0cce4582ee81ca427889e0a4ef8c9637f0414e2853b8d65d3db4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/about.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/actuals.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_c63839437a5a0cce4582ee81ca427889e0a4ef8c9637f0414e2853b8d65d3db4->leave($__internal_c63839437a5a0cce4582ee81ca427889e0a4ef8c9637f0414e2853b8d65d3db4_prof);

    }

    // line 8
    public function block_header($context, array $blocks = array())
    {
        $__internal_3f473e916927d1d673305a1bb72a19b81578a17d1728603efcdfa674f9cf999f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f473e916927d1d673305a1bb72a19b81578a17d1728603efcdfa674f9cf999f->enter($__internal_3f473e916927d1d673305a1bb72a19b81578a17d1728603efcdfa674f9cf999f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 9
        echo "    <h1>Aktualności ";
        if (array_key_exists("year", $context)) {
            echo " - ";
            echo twig_escape_filter($this->env, (isset($context["year"]) || array_key_exists("year", $context) ? $context["year"] : (function () { throw new Twig_Error_Runtime('Variable "year" does not exist.', 9, $this->getSourceContext()); })()), "html", null, true);
            echo " ";
        }
        echo "</h1>
";
        
        $__internal_3f473e916927d1d673305a1bb72a19b81578a17d1728603efcdfa674f9cf999f->leave($__internal_3f473e916927d1d673305a1bb72a19b81578a17d1728603efcdfa674f9cf999f_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_bb37dae3313f65084d2ffe3331e8d5010d51251faa848668ba4dd6eb70fa8069 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb37dae3313f65084d2ffe3331e8d5010d51251faa848668ba4dd6eb70fa8069->enter($__internal_bb37dae3313f65084d2ffe3331e8d5010d51251faa848668ba4dd6eb70fa8069_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
            $context['_seq'] = twig_ensure_traversable((isset($context["lastPosts"]) || array_key_exists("lastPosts", $context) ? $context["lastPosts"] : (function () { throw new Twig_Error_Runtime('Variable "lastPosts" does not exist.', 18, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
                // line 19
                echo "                    <div class=\"post__image\">
                        ";
                // line 20
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "images", array()), 1));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 21
                    echo "                        ";
                    // line 22
                    echo "                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 23
                echo "                    </div>
                    <div class=\"post__content\">
                        <h1>";
                // line 25
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "header", array()), "html", null, true);
                echo "</h1>
                        ";
                // line 26
                echo strip_tags(twig_slice($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "content", array()), 0, 360));
                echo "...
                        <a href=\"/actuals/post/";
                // line 27
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "id", array()), "html", null, true);
                echo "\"><button class=\"btn btn-yellow\">Czytaj więcej</button></a>
                    </div>
                    <hr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "                ";
        } elseif ( !twig_test_empty((isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new Twig_Error_Runtime('Variable "posts" does not exist.', 31, $this->getSourceContext()); })()))) {
            // line 32
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new Twig_Error_Runtime('Variable "posts" does not exist.', 32, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
                // line 33
                echo "                    <div class=\"post__image\">
                        ";
                // line 34
                echo twig_escape_filter($this->env, twig_var_dump($this->env, $context, $context["post"]), "html", null, true);
                echo "

                        ";
                // line 36
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "images", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 37
                    echo "
                            ";
                    // line 39
                    echo "                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 40
                echo "                    </div>
                    <div class=\"post__content\">
                        <h1>";
                // line 42
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "header", array()), "html", null, true);
                echo "</h1>
                        <p>";
                // line 43
                echo strip_tags(twig_slice($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "content", array()), 0, 360));
                echo "...</p>
                        <a href=\"post.html\"><button class=\"btn btn-yellow\">Czytaj więcej</button></a>
                    </div>
                    <hr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "                ";
        } else {
            // line 49
            echo "                    <h1>Brak postów z tego okresu</h1>
                ";
        }
        // line 51
        echo "            </article>

            <aside class=\"sidebar\">
                <h1>Ostatnie wpisy</h1>
                <ul>
                ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sidePosts"]) || array_key_exists("sidePosts", $context) ? $context["sidePosts"] : (function () { throw new Twig_Error_Runtime('Variable "sidePosts" does not exist.', 56, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 57
            echo "                    <li><a href=\"/actuals/post/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "header", array()), "html", null, true);
            echo "</a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "                </ul>
                <h1>Aktualności według daty</h1>
                <ul>
                    <li><a href=";
        // line 62
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("actuals_by_year", array("year" => 2017));
        echo ">2017</a></li>
                    <li><a href=";
        // line 63
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("actuals_by_year", array("year" => 2016));
        echo ">2016</a></li>
                    <li><a href=";
        // line 64
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("actuals_by_year", array("year" => 2015));
        echo ">2015</a></li>
                    <li>2014</li>
                </ul>
            </aside>
        </div>
    </main>
";
        
        $__internal_bb37dae3313f65084d2ffe3331e8d5010d51251faa848668ba4dd6eb70fa8069->leave($__internal_bb37dae3313f65084d2ffe3331e8d5010d51251faa848668ba4dd6eb70fa8069_prof);

    }

    public function getTemplateName()
    {
        return "front/actuals.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  222 => 64,  218 => 63,  214 => 62,  209 => 59,  198 => 57,  194 => 56,  187 => 51,  183 => 49,  180 => 48,  169 => 43,  165 => 42,  161 => 40,  155 => 39,  152 => 37,  148 => 36,  143 => 34,  140 => 33,  135 => 32,  132 => 31,  122 => 27,  118 => 26,  114 => 25,  110 => 23,  104 => 22,  102 => 21,  98 => 20,  95 => 19,  90 => 18,  88 => 17,  82 => 13,  76 => 12,  62 => 9,  56 => 8,  47 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/about.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/actuals.css') }}\" />
{% endblock %}

{% block header %}
    <h1>Aktualności {% if year is defined %} - {{ year }} {% endif %}</h1>
{% endblock %}

{% block body %}
    <main>
        <div class=\"route\"><br></div>
        <div class=\"container\">
            <article class=\"post\">
                {% if lastPosts is defined %}
                    {% for post in lastPosts %}
                    <div class=\"post__image\">
                        {% for image in post.images | slice(1) %}
                        {#<img src={{ asset('uploads/' . image.name | slice(1)) }}>#}
                            {% endfor %}
                    </div>
                    <div class=\"post__content\">
                        <h1>{{ post.header }}</h1>
                        {{ post.content | slice(0, 360) | striptags | raw }}...
                        <a href=\"/actuals/post/{{ post.id }}\"><button class=\"btn btn-yellow\">Czytaj więcej</button></a>
                    </div>
                    <hr>
                    {% endfor %}
                {% elseif posts is not empty %}
                    {% for post in posts %}
                    <div class=\"post__image\">
                        {{ dump(post) }}

                        {% for image in post.images %}

                            {#<img src={{ asset('uploads/' . image.name | slice(1)) }}>#}
                        {% endfor %}
                    </div>
                    <div class=\"post__content\">
                        <h1>{{ post.header }}</h1>
                        <p>{{ post.content | slice(0, 360) | striptags | raw }}...</p>
                        <a href=\"post.html\"><button class=\"btn btn-yellow\">Czytaj więcej</button></a>
                    </div>
                    <hr>
                    {% endfor %}
                {% else %}
                    <h1>Brak postów z tego okresu</h1>
                {% endif %}
            </article>

            <aside class=\"sidebar\">
                <h1>Ostatnie wpisy</h1>
                <ul>
                {% for post in sidePosts %}
                    <li><a href=\"/actuals/post/{{ post.id }}\">{{ post.header }}</a></li>
                {% endfor %}
                </ul>
                <h1>Aktualności według daty</h1>
                <ul>
                    <li><a href={{ path('actuals_by_year', {'year': 2017}) }}>2017</a></li>
                    <li><a href={{ path('actuals_by_year', {'year': 2016}) }}>2016</a></li>
                    <li><a href={{ path('actuals_by_year', {'year': 2015}) }}>2015</a></li>
                    <li>2014</li>
                </ul>
            </aside>
        </div>
    </main>
{% endblock %}", "front/actuals.html.twig", "/home/kuba/Workspace/app/Resources/views/front/actuals.html.twig");
    }
}
