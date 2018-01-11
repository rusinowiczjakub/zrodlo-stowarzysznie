<?php

/* front/actuals.html.twig */
class __TwigTemplate_60aeb8666daef21f7ccac3263856102cae4451fbaa123fbbc40f16f815ae33b3 extends Twig_Template
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
        $__internal_e6aec5600519ae1e75538a285e608f644c89539a981db73a949e38e42aaf5b62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6aec5600519ae1e75538a285e608f644c89539a981db73a949e38e42aaf5b62->enter($__internal_e6aec5600519ae1e75538a285e608f644c89539a981db73a949e38e42aaf5b62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "front/actuals.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e6aec5600519ae1e75538a285e608f644c89539a981db73a949e38e42aaf5b62->leave($__internal_e6aec5600519ae1e75538a285e608f644c89539a981db73a949e38e42aaf5b62_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_bd4147ea68ded57c837b3b01d1cbdbc1705957f77ab6f4373c0b55195a53ae6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd4147ea68ded57c837b3b01d1cbdbc1705957f77ab6f4373c0b55195a53ae6b->enter($__internal_bd4147ea68ded57c837b3b01d1cbdbc1705957f77ab6f4373c0b55195a53ae6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/about.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/actuals.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_bd4147ea68ded57c837b3b01d1cbdbc1705957f77ab6f4373c0b55195a53ae6b->leave($__internal_bd4147ea68ded57c837b3b01d1cbdbc1705957f77ab6f4373c0b55195a53ae6b_prof);

    }

    // line 8
    public function block_header($context, array $blocks = array())
    {
        $__internal_c1b5c02037c2de40de558b83915de847a0b060d8a7d5969811f98585236d8d39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1b5c02037c2de40de558b83915de847a0b060d8a7d5969811f98585236d8d39->enter($__internal_c1b5c02037c2de40de558b83915de847a0b060d8a7d5969811f98585236d8d39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 9
        echo "    <h1>Aktualności ";
        if (array_key_exists("year", $context)) {
            echo " - ";
            echo twig_escape_filter($this->env, ($context["year"] ?? $this->getContext($context, "year")), "html", null, true);
            echo " ";
        }
        echo "</h1>
";
        
        $__internal_c1b5c02037c2de40de558b83915de847a0b060d8a7d5969811f98585236d8d39->leave($__internal_c1b5c02037c2de40de558b83915de847a0b060d8a7d5969811f98585236d8d39_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_4b2dbd3279be2449e62e5b6bd0e00afc099f9cfd23b1004c801dbe69a27fbd23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b2dbd3279be2449e62e5b6bd0e00afc099f9cfd23b1004c801dbe69a27fbd23->enter($__internal_4b2dbd3279be2449e62e5b6bd0e00afc099f9cfd23b1004c801dbe69a27fbd23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
            $context['_seq'] = twig_ensure_traversable(($context["lastPosts"] ?? $this->getContext($context, "lastPosts")));
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
        } elseif ( !twig_test_empty(($context["posts"] ?? $this->getContext($context, "posts")))) {
            // line 30
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? $this->getContext($context, "posts")));
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
        $context['_seq'] = twig_ensure_traversable(($context["sidePosts"] ?? $this->getContext($context, "sidePosts")));
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
        
        $__internal_4b2dbd3279be2449e62e5b6bd0e00afc099f9cfd23b1004c801dbe69a27fbd23->leave($__internal_4b2dbd3279be2449e62e5b6bd0e00afc099f9cfd23b1004c801dbe69a27fbd23_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
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
{% endblock %}", "front/actuals.html.twig", "/home/kuba/zrodlo/app/Resources/views/front/actuals.html.twig");
    }
}
