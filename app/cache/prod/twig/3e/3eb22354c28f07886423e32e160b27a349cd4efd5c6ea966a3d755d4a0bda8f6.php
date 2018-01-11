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
        $__internal_451af8d6260537dd6942a25cd78be52b9cb1978a84554093566c9d4cb687c639 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_451af8d6260537dd6942a25cd78be52b9cb1978a84554093566c9d4cb687c639->enter($__internal_451af8d6260537dd6942a25cd78be52b9cb1978a84554093566c9d4cb687c639_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "front/actuals.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_451af8d6260537dd6942a25cd78be52b9cb1978a84554093566c9d4cb687c639->leave($__internal_451af8d6260537dd6942a25cd78be52b9cb1978a84554093566c9d4cb687c639_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7d2c4cfdb2f8b22f3ee80c7ece0574a67a4237ad378bc4d6c969de057fbddc77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d2c4cfdb2f8b22f3ee80c7ece0574a67a4237ad378bc4d6c969de057fbddc77->enter($__internal_7d2c4cfdb2f8b22f3ee80c7ece0574a67a4237ad378bc4d6c969de057fbddc77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/about.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/actuals.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_7d2c4cfdb2f8b22f3ee80c7ece0574a67a4237ad378bc4d6c969de057fbddc77->leave($__internal_7d2c4cfdb2f8b22f3ee80c7ece0574a67a4237ad378bc4d6c969de057fbddc77_prof);

    }

    // line 8
    public function block_header($context, array $blocks = array())
    {
        $__internal_f7501f48a4591e0f1d9fc2d631e5476c1f5543c2fc0a3d7d58c1a6dc91d1a6e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7501f48a4591e0f1d9fc2d631e5476c1f5543c2fc0a3d7d58c1a6dc91d1a6e3->enter($__internal_f7501f48a4591e0f1d9fc2d631e5476c1f5543c2fc0a3d7d58c1a6dc91d1a6e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 9
        echo "    <h1>Aktualności ";
        if (array_key_exists("year", $context)) {
            echo " - ";
            echo twig_escape_filter($this->env, (isset($context["year"]) || array_key_exists("year", $context) ? $context["year"] : (function () { throw new Twig_Error_Runtime('Variable "year" does not exist.', 9, $this->getSourceContext()); })()), "html", null, true);
            echo " ";
        }
        echo "</h1>
";
        
        $__internal_f7501f48a4591e0f1d9fc2d631e5476c1f5543c2fc0a3d7d58c1a6dc91d1a6e3->leave($__internal_f7501f48a4591e0f1d9fc2d631e5476c1f5543c2fc0a3d7d58c1a6dc91d1a6e3_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_c87a177d9de428296a8b6c1096a82f4725bd28f59466c2650faf94095d62c282 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c87a177d9de428296a8b6c1096a82f4725bd28f59466c2650faf94095d62c282->enter($__internal_c87a177d9de428296a8b6c1096a82f4725bd28f59466c2650faf94095d62c282_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                    <div class=\"post__image\">
                        ";
                // line 21
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "images", array()), 0, 1));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 22
                    echo "                        <img src=";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->getSourceContext(), $context["image"], "name", array()))), "html", null, true);
                    echo ">
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 24
                echo "                    </div>
                    <div class=\"post__content\">
                        ";
                // line 26
                echo strip_tags(twig_slice($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "content", array()), 0, 360));
                echo "...
                    </div>
                        <a href=\"/actuals/post/";
                // line 28
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "id", array()), "html", null, true);
                echo "\"><button class=\"btn btn-yellow\">Czytaj więcej</button></a>

                        <hr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "                ";
        } elseif ( !twig_test_empty((isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new Twig_Error_Runtime('Variable "posts" does not exist.', 32, $this->getSourceContext()); })()))) {
            // line 33
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new Twig_Error_Runtime('Variable "posts" does not exist.', 33, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
                // line 34
                echo "                        <h1>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "header", array()), "html", null, true);
                echo "</h1>
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

                        <p>";
                // line 42
                echo strip_tags(twig_slice($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "content", array()), 0, 360));
                echo "...</p>
                    </div>
                        <a href=\"/actuals/post/";
                // line 44
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "id", array()), "html", null, true);
                echo "\"><button class=\"btn btn-yellow\">Czytaj więcej</button></a>
                    <hr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            echo "                ";
        } else {
            // line 48
            echo "                    <h1>Brak postów z tego okresu</h1>
                ";
        }
        // line 50
        echo "            </article>

            <aside class=\"sidebar\">
                <h1>Ostatnie wpisy</h1>
                <ul>
                ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["sidePosts"]) || array_key_exists("sidePosts", $context) ? $context["sidePosts"] : (function () { throw new Twig_Error_Runtime('Variable "sidePosts" does not exist.', 55, $this->getSourceContext()); })()), 0, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 56
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
        // line 58
        echo "                </ul>
                <h1>Aktualności według daty</h1>
                <ul>
                    <li><a href=";
        // line 61
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("actuals_by_year", array("year" => 2017));
        echo ">2017</a></li>
                    <li><a href=";
        // line 62
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("actuals_by_year", array("year" => 2016));
        echo ">2016</a></li>
                    <li><a href=";
        // line 63
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("actuals_by_year", array("year" => 2015));
        echo ">2015</a></li>
                    <li>2014</li>
                </ul>
            </aside>
        </div>
    </main>
";
        
        $__internal_c87a177d9de428296a8b6c1096a82f4725bd28f59466c2650faf94095d62c282->leave($__internal_c87a177d9de428296a8b6c1096a82f4725bd28f59466c2650faf94095d62c282_prof);

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
        return array (  221 => 63,  217 => 62,  213 => 61,  208 => 58,  197 => 56,  193 => 55,  186 => 50,  182 => 48,  179 => 47,  170 => 44,  165 => 42,  160 => 39,  151 => 37,  147 => 36,  141 => 34,  136 => 33,  133 => 32,  123 => 28,  118 => 26,  114 => 24,  105 => 22,  101 => 21,  95 => 19,  90 => 18,  88 => 17,  82 => 13,  76 => 12,  62 => 9,  56 => 8,  47 => 5,  42 => 4,  36 => 3,  11 => 1,);
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
                    <div class=\"post__image\">
                        {% for image in post.images | slice(0, 1) %}
                        <img src={{ asset(\"uploads/\" ~ image.name ) }}>
                            {% endfor %}
                    </div>
                    <div class=\"post__content\">
                        {{ post.content | slice(0, 360) | striptags | raw }}...
                    </div>
                        <a href=\"/actuals/post/{{ post.id }}\"><button class=\"btn btn-yellow\">Czytaj więcej</button></a>

                        <hr>
                    {% endfor %}
                {% elseif posts is not empty %}
                    {% for post in posts %}
                        <h1>{{ post.header }}</h1>
                    <div class=\"post__image\">
                        {% for image in post.images | slice(0, 1) %}
                            <img src={{ asset(\"uploads/\" ~ image.name ) }}>
                        {% endfor %}
                    </div>
                    <div class=\"post__content\">

                        <p>{{ post.content | slice(0, 360) | striptags | raw }}...</p>
                    </div>
                        <a href=\"/actuals/post/{{ post.id }}\"><button class=\"btn btn-yellow\">Czytaj więcej</button></a>
                    <hr>
                    {% endfor %}
                {% else %}
                    <h1>Brak postów z tego okresu</h1>
                {% endif %}
            </article>

            <aside class=\"sidebar\">
                <h1>Ostatnie wpisy</h1>
                <ul>
                {% for post in sidePosts | slice(0, 5) %}
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
