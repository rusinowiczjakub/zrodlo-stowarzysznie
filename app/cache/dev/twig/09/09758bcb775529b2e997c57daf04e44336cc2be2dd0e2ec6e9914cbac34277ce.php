<?php

/* :front:actuals.html.twig */
class __TwigTemplate_2c816b7062480dc8c697368d0ac038478a6121a1aacab2eb4246f9ea9f3d5d4a extends Twig_Template
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
        $__internal_e98c2e037d6715419ff5b794301c7fca490980792f7885adf2a9550265211e2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e98c2e037d6715419ff5b794301c7fca490980792f7885adf2a9550265211e2c->enter($__internal_e98c2e037d6715419ff5b794301c7fca490980792f7885adf2a9550265211e2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":front:actuals.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e98c2e037d6715419ff5b794301c7fca490980792f7885adf2a9550265211e2c->leave($__internal_e98c2e037d6715419ff5b794301c7fca490980792f7885adf2a9550265211e2c_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4952a9235b75b86a7f54d7a0fc76e72b4c0298d8f99b5241a8d427e4dd4249d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4952a9235b75b86a7f54d7a0fc76e72b4c0298d8f99b5241a8d427e4dd4249d5->enter($__internal_4952a9235b75b86a7f54d7a0fc76e72b4c0298d8f99b5241a8d427e4dd4249d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/about.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/actuals.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_4952a9235b75b86a7f54d7a0fc76e72b4c0298d8f99b5241a8d427e4dd4249d5->leave($__internal_4952a9235b75b86a7f54d7a0fc76e72b4c0298d8f99b5241a8d427e4dd4249d5_prof);

    }

    // line 8
    public function block_header($context, array $blocks = array())
    {
        $__internal_e6209a103d683caa2dea15bb68cfdd25960b991fcf434b9cd5acdc4c04982e49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6209a103d683caa2dea15bb68cfdd25960b991fcf434b9cd5acdc4c04982e49->enter($__internal_e6209a103d683caa2dea15bb68cfdd25960b991fcf434b9cd5acdc4c04982e49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 9
        echo "    <h1>Aktualności ";
        if (array_key_exists("year", $context)) {
            echo " - ";
            echo twig_escape_filter($this->env, (isset($context["year"]) || array_key_exists("year", $context) ? $context["year"] : (function () { throw new Twig_Error_Runtime('Variable "year" does not exist.', 9, $this->getSourceContext()); })()), "html", null, true);
            echo " ";
        }
        echo "</h1>
";
        
        $__internal_e6209a103d683caa2dea15bb68cfdd25960b991fcf434b9cd5acdc4c04982e49->leave($__internal_e6209a103d683caa2dea15bb68cfdd25960b991fcf434b9cd5acdc4c04982e49_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_8d7abac51c26534388dc05e7881349f802d2825a54226147bcffdf0d13fa046e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d7abac51c26534388dc05e7881349f802d2825a54226147bcffdf0d13fa046e->enter($__internal_8d7abac51c26534388dc05e7881349f802d2825a54226147bcffdf0d13fa046e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                echo "                        <h1>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "header", array()), "html", null, true);
                echo "</h1>
                        <hr>
                    <div class=\"post__image\">
                        ";
                // line 22
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "images", array()), 0, 1));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 23
                    echo "                        <img src=";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->getSourceContext(), $context["image"], "name", array()))), "html", null, true);
                    echo ">
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 25
                echo "                    </div>
                    <div class=\"post__content\">
                        ";
                // line 27
                echo strip_tags(twig_slice($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "content", array()), 0, 360));
                echo "...
                        <a href=\"/actuals/post/";
                // line 28
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "id", array()), "html", null, true);
                echo "\"><button class=\"btn btn-yellow\">Czytaj więcej</button></a>
                    </div>
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
                echo "                        <h1>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "header", array()), "html", null, true);
                echo "</h1>
                        <hr>
                    <div class=\"post__image\">
                        ";
                // line 36
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "images", array()), 0, 1));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 37
                    echo "                            <img src=";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->getSourceContext(), $context["image"], "name", array()))), "html", null, true);
                    echo ">
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 39
                echo "                    </div>
                    <div class=\"post__content\">
                        <h1>";
                // line 41
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "header", array()), "html", null, true);
                echo "</h1>
                        <p>";
                // line 42
                echo strip_tags(twig_slice($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "content", array()), 0, 360));
                echo "...</p>
                        <a href=\"/actuals/post/";
                // line 43
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "id", array()), "html", null, true);
                echo "\"><button class=\"btn btn-yellow\">Czytaj więcej</button></a>
                    </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "                ";
        } else {
            // line 47
            echo "                    <h1>Brak postów z tego okresu</h1>
                ";
        }
        // line 49
        echo "            </article>

            <aside class=\"sidebar\">
                <h1>Ostatnie wpisy</h1>
                <ul>
                ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sidePosts"]) || array_key_exists("sidePosts", $context) ? $context["sidePosts"] : (function () { throw new Twig_Error_Runtime('Variable "sidePosts" does not exist.', 54, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 55
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
        // line 57
        echo "                </ul>
                <h1>Aktualności według daty</h1>
                <ul>
                    <li><a href=";
        // line 60
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("actuals_by_year", array("year" => 2017));
        echo ">2017</a></li>
                    <li><a href=";
        // line 61
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("actuals_by_year", array("year" => 2016));
        echo ">2016</a></li>
                    <li><a href=";
        // line 62
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("actuals_by_year", array("year" => 2015));
        echo ">2015</a></li>
                    <li>2014</li>
                </ul>
            </aside>
        </div>
    </main>
";
        
        $__internal_8d7abac51c26534388dc05e7881349f802d2825a54226147bcffdf0d13fa046e->leave($__internal_8d7abac51c26534388dc05e7881349f802d2825a54226147bcffdf0d13fa046e_prof);

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
        return array (  223 => 62,  219 => 61,  215 => 60,  210 => 57,  199 => 55,  195 => 54,  188 => 49,  184 => 47,  181 => 46,  172 => 43,  168 => 42,  164 => 41,  160 => 39,  151 => 37,  147 => 36,  140 => 33,  135 => 32,  132 => 31,  123 => 28,  119 => 27,  115 => 25,  106 => 23,  102 => 22,  95 => 19,  90 => 18,  88 => 17,  82 => 13,  76 => 12,  62 => 9,  56 => 8,  47 => 5,  42 => 4,  36 => 3,  11 => 1,);
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
                        <h1>{{ post.header }}</h1>
                        <hr>
                    <div class=\"post__image\">
                        {% for image in post.images | slice(0, 1) %}
                        <img src={{ asset(\"uploads/\" ~ image.name ) }}>
                            {% endfor %}
                    </div>
                    <div class=\"post__content\">
                        {{ post.content | slice(0, 360) | striptags | raw }}...
                        <a href=\"/actuals/post/{{ post.id }}\"><button class=\"btn btn-yellow\">Czytaj więcej</button></a>
                    </div>
                    {% endfor %}
                {% elseif posts is not empty %}
                    {% for post in posts %}
                        <h1>{{ post.header }}</h1>
                        <hr>
                    <div class=\"post__image\">
                        {% for image in post.images | slice(0, 1) %}
                            <img src={{ asset(\"uploads/\" ~ image.name ) }}>
                        {% endfor %}
                    </div>
                    <div class=\"post__content\">
                        <h1>{{ post.header }}</h1>
                        <p>{{ post.content | slice(0, 360) | striptags | raw }}...</p>
                        <a href=\"/actuals/post/{{ post.id }}\"><button class=\"btn btn-yellow\">Czytaj więcej</button></a>
                    </div>
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
{% endblock %}", ":front:actuals.html.twig", "/home/kuba/Workspace/app/Resources/views/front/actuals.html.twig");
    }
}
