<?php

/* front/single_post.html.twig */
class __TwigTemplate_d9ac9c121ff89440b4c7a076a20d4586a78a16b27610c478b3ea5d41502e3d25 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "front/single_post.html.twig", 1);
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
        $__internal_686e9511a9fc9ff0b9a19092da20d2d46fd11da596cbd6f6ed23a91fbfee9a72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_686e9511a9fc9ff0b9a19092da20d2d46fd11da596cbd6f6ed23a91fbfee9a72->enter($__internal_686e9511a9fc9ff0b9a19092da20d2d46fd11da596cbd6f6ed23a91fbfee9a72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "front/single_post.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_686e9511a9fc9ff0b9a19092da20d2d46fd11da596cbd6f6ed23a91fbfee9a72->leave($__internal_686e9511a9fc9ff0b9a19092da20d2d46fd11da596cbd6f6ed23a91fbfee9a72_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c0174f2bb2e68ee2aea6a429ad4cb8f334dd126d75da90f2ba24729ee0c60d08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0174f2bb2e68ee2aea6a429ad4cb8f334dd126d75da90f2ba24729ee0c60d08->enter($__internal_c0174f2bb2e68ee2aea6a429ad4cb8f334dd126d75da90f2ba24729ee0c60d08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_c0174f2bb2e68ee2aea6a429ad4cb8f334dd126d75da90f2ba24729ee0c60d08->leave($__internal_c0174f2bb2e68ee2aea6a429ad4cb8f334dd126d75da90f2ba24729ee0c60d08_prof);

    }

    // line 10
    public function block_header($context, array $blocks = array())
    {
        $__internal_9eebc9becdaea67df8097af198c297583295e4d75f0fcafdff7435acedc67313 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9eebc9becdaea67df8097af198c297583295e4d75f0fcafdff7435acedc67313->enter($__internal_9eebc9becdaea67df8097af198c297583295e4d75f0fcafdff7435acedc67313_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 11
        echo "    <h1>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new Twig_Error_Runtime('Variable "post" does not exist.', 11, $this->getSourceContext()); })()), "header", array()), "html", null, true);
        echo "</h1>
";
        
        $__internal_9eebc9becdaea67df8097af198c297583295e4d75f0fcafdff7435acedc67313->leave($__internal_9eebc9becdaea67df8097af198c297583295e4d75f0fcafdff7435acedc67313_prof);

    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        $__internal_a3051cbf2667809dd0a70e3a1e299ad7cd907c6b38357563da7670627d17e61c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3051cbf2667809dd0a70e3a1e299ad7cd907c6b38357563da7670627d17e61c->enter($__internal_a3051cbf2667809dd0a70e3a1e299ad7cd907c6b38357563da7670627d17e61c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 15
        echo "    <main>
        <div class=\"route\"><br></div>
        <div class=\"container\">
            <div class=\"single__content\">
                ";
        // line 20
        echo "                    <div>";
        echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new Twig_Error_Runtime('Variable "post" does not exist.', 20, $this->getSourceContext()); })()), "content", array());
        echo "</div>
                ";
        // line 22
        echo "                <p>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new Twig_Error_Runtime('Variable "post" does not exist.', 22, $this->getSourceContext()); })()), "sign", array()), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new Twig_Error_Runtime('Variable "post" does not exist.', 31, $this->getSourceContext()); })()), "images", array()));
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
        
        $__internal_a3051cbf2667809dd0a70e3a1e299ad7cd907c6b38357563da7670627d17e61c->leave($__internal_a3051cbf2667809dd0a70e3a1e299ad7cd907c6b38357563da7670627d17e61c_prof);

    }

    // line 48
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3b7511d2dbad40cc11f72143178842ee73406b36b7a4d479ae8280e0e9b17925 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b7511d2dbad40cc11f72143178842ee73406b36b7a4d479ae8280e0e9b17925->enter($__internal_3b7511d2dbad40cc11f72143178842ee73406b36b7a4d479ae8280e0e9b17925_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 49
        echo "    <script src=";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/lightbox-plus-jquery.min.js"), "html", null, true);
        echo "></script>
";
        
        $__internal_3b7511d2dbad40cc11f72143178842ee73406b36b7a4d479ae8280e0e9b17925->leave($__internal_3b7511d2dbad40cc11f72143178842ee73406b36b7a4d479ae8280e0e9b17925_prof);

    }

    public function getTemplateName()
    {
        return "front/single_post.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 49,  153 => 48,  142 => 42,  140 => 41,  138 => 40,  136 => 39,  134 => 38,  132 => 37,  130 => 36,  128 => 35,  126 => 34,  115 => 32,  111 => 31,  98 => 22,  93 => 20,  87 => 15,  81 => 14,  71 => 11,  65 => 10,  56 => 7,  52 => 6,  48 => 5,  43 => 4,  37 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/about.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/actuals.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/post.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/lightbox.min.css') }}\" />
{% endblock %}

{% block header %}
    <h1>{{ post.header }}</h1>
{% endblock %}

{% block body %}
    <main>
        <div class=\"route\"><br></div>
        <div class=\"container\">
            <div class=\"single__content\">
                {% autoescape false %}
                    <div>{{ post.content }}</div>
                {% endautoescape %}
                <p>{{ post.sign }}</p>
            </div>
        </div>
        <div class=\"gallery\">
            <div class=\"gallery__header\">
                <h2>Galeria</h2>
                <hr>
            </div>
            <div class=\"gallery__images\">
                {% for image in post.images %}
                    <a href={{ asset(\"uploads/\" ~ image.name) }} data-lightbox=\"mygallery\"><img src={{ asset(\"uploads/\" ~ image.name) }}></a>
                {% endfor %}
                {#<a href={{ asset(\"uploads/\") }} data-lightbox=\"mygallery\"><img src={{ asset(\"uploads/\") }}></a>#}
                {#<a href={{ asset(\"assets/images/Obrazki/pexels-photo-226616.jpeg\") }} data-lightbox=\"mygallery\"><img src={{ asset(\"assets/images/Obrazki/pexels-photo-226616.jpeg\") }}></a>#}
                {#<a href={{ asset(\"assets/images/Obrazki/pexels-photo-226616.jpeg\") }} data-lightbox=\"mygallery\"><img src={{ asset(\"assets/images/Obrazki/pexels-photo-226616.jpeg\") }}></a>#}
                {#<a href={{ asset(\"assets/images/Obrazki/pexels-photo-226616.jpeg\") }} data-lightbox=\"mygallery\"><img src={{ asset(\"assets/images/Obrazki/pexels-photo-226616.jpeg\") }}></a>#}
                {#<a href={{ asset(\"assets/images/Obrazki/pexels-photo-226616.jpeg\") }} data-lightbox=\"mygallery\"><img src={{ asset(\"assets/images/Obrazki/pexels-photo-226616.jpeg\") }}></a>#}
                {#<a href={{ asset(\"assets/images/Obrazki/pexels-photo-226616.jpeg\") }} data-lightbox=\"mygallery\"><img src={{ asset(\"assets/images/Obrazki/pexels-photo-226616.jpeg\") }}></a>#}
                {#<a href={{ asset(\"assets/images/Obrazki/pexels-photo-226616.jpeg\") }} data-lightbox=\"mygallery\"><img src={{ asset(\"assets/images/Obrazki/pexels-photo-226616.jpeg\") }}></a>#}
                {#<a href={{ asset(\"assets/images/Obrazki/pexels-photo-226616.jpeg\") }} data-lightbox=\"mygallery\"><img src={{ asset(\"assets/images/Obrazki/pexels-photo-226616.jpeg\") }}></a>#}
            </div>
        </div>

    </main>
{% endblock %}

{% block javascripts %}
    <script src={{ asset(\"assets/js/lightbox-plus-jquery.min.js\") }}></script>
{% endblock %}", "front/single_post.html.twig", "/home/kuba/Workspace/app/Resources/views/front/single_post.html.twig");
    }
}
