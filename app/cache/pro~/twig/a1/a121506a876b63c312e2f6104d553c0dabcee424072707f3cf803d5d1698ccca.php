<?php

/* front/actuals.html.twig */
class __TwigTemplate_937e805553c9c5666fbf3e8d20305f11fbdc269254dffeb0ade3b6f3068e81d8 extends Twig_Template
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
        $__internal_07f912ac3c7702b500fdce9947836cb18221353e1cdc6856fc26f324e1d4aca8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07f912ac3c7702b500fdce9947836cb18221353e1cdc6856fc26f324e1d4aca8->enter($__internal_07f912ac3c7702b500fdce9947836cb18221353e1cdc6856fc26f324e1d4aca8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "front/actuals.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_07f912ac3c7702b500fdce9947836cb18221353e1cdc6856fc26f324e1d4aca8->leave($__internal_07f912ac3c7702b500fdce9947836cb18221353e1cdc6856fc26f324e1d4aca8_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8af121c388bbe51710efde6ddedb9537107ce62538ce5d4c5b60bd4f1925dff3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8af121c388bbe51710efde6ddedb9537107ce62538ce5d4c5b60bd4f1925dff3->enter($__internal_8af121c388bbe51710efde6ddedb9537107ce62538ce5d4c5b60bd4f1925dff3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/about.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/actuals.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_8af121c388bbe51710efde6ddedb9537107ce62538ce5d4c5b60bd4f1925dff3->leave($__internal_8af121c388bbe51710efde6ddedb9537107ce62538ce5d4c5b60bd4f1925dff3_prof);

    }

    // line 8
    public function block_header($context, array $blocks = array())
    {
        $__internal_35681157dac1a5a0c665a0b3c3bffac1c6c9383904dae055c86acd0cce928f44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35681157dac1a5a0c665a0b3c3bffac1c6c9383904dae055c86acd0cce928f44->enter($__internal_35681157dac1a5a0c665a0b3c3bffac1c6c9383904dae055c86acd0cce928f44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 9
        echo "    <h1>Aktualności ";
        if (array_key_exists("year", $context)) {
            echo " - ";
            echo twig_escape_filter($this->env, (isset($context["year"]) || array_key_exists("year", $context) ? $context["year"] : (function () { throw new Twig_Error_Runtime('Variable "year" does not exist.', 9, $this->getSourceContext()); })()), "html", null, true);
            echo " ";
        }
        echo "</h1>
";
        
        $__internal_35681157dac1a5a0c665a0b3c3bffac1c6c9383904dae055c86acd0cce928f44->leave($__internal_35681157dac1a5a0c665a0b3c3bffac1c6c9383904dae055c86acd0cce928f44_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_ba1d99662f09f0fe8cb1696790a99ca2ee77d8a7ae2e976d8dad811c187312da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba1d99662f09f0fe8cb1696790a99ca2ee77d8a7ae2e976d8dad811c187312da->enter($__internal_ba1d99662f09f0fe8cb1696790a99ca2ee77d8a7ae2e976d8dad811c187312da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                        <img src=\"assets/images/warsaw_maraton.jpg\">
                    </div>
                    <div class=\"post__content\">
                        <h1>";
                // line 23
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "header", array()), "html", null, true);
                echo "</h1>
                        ";
                // line 24
                echo strip_tags(twig_slice($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "content", array()), 0, 360));
                echo "...
                        <a href=\"/actuals/post/";
                // line 25
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "id", array()), "html", null, true);
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
        } elseif ( !twig_test_empty((isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new Twig_Error_Runtime('Variable "posts" does not exist.', 29, $this->getSourceContext()); })()))) {
            // line 30
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new Twig_Error_Runtime('Variable "posts" does not exist.', 30, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
                // line 31
                echo "                    <div class=\"post__image\">
                        <img src=\"assets/images/warsaw_maraton.jpg\">
                    </div>
                    <div class=\"post__content\">
                        <h1>";
                // line 35
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "header", array()), "html", null, true);
                echo "</h1>
                        <p>";
                // line 36
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
        $context['_seq'] = twig_ensure_traversable((isset($context["sidePosts"]) || array_key_exists("sidePosts", $context) ? $context["sidePosts"] : (function () { throw new Twig_Error_Runtime('Variable "sidePosts" does not exist.', 49, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 50
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
        
        $__internal_ba1d99662f09f0fe8cb1696790a99ca2ee77d8a7ae2e976d8dad811c187312da->leave($__internal_ba1d99662f09f0fe8cb1696790a99ca2ee77d8a7ae2e976d8dad811c187312da_prof);

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
        return array (  190 => 57,  186 => 56,  182 => 55,  177 => 52,  166 => 50,  162 => 49,  155 => 44,  151 => 42,  148 => 41,  137 => 36,  133 => 35,  127 => 31,  122 => 30,  119 => 29,  109 => 25,  105 => 24,  101 => 23,  95 => 19,  90 => 18,  88 => 17,  82 => 13,  76 => 12,  62 => 9,  56 => 8,  47 => 5,  42 => 4,  36 => 3,  11 => 1,);
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
                        <img src=\"assets/images/warsaw_maraton.jpg\">
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
                        <img src=\"assets/images/warsaw_maraton.jpg\">
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
