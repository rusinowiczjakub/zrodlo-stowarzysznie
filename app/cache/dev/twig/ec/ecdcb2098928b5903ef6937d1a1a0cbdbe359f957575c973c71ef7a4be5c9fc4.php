<?php

/* FMElfinderBundle:Elfinder:elfinder_type.html.twig */
class __TwigTemplate_1e06c0266f4a0ba7ad32d27999d646d3d95726728db56451a53536b5801550d6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ba7704f9a9c8b17d20f86ddf2c1159a278b634d32b3001bfd70e07aa066d3079 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba7704f9a9c8b17d20f86ddf2c1159a278b634d32b3001bfd70e07aa066d3079->enter($__internal_ba7704f9a9c8b17d20f86ddf2c1159a278b634d32b3001bfd70e07aa066d3079_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FMElfinderBundle:Elfinder:elfinder_type.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    ";
        // line 4
        if ((isset($context["includeAssets"]) || array_key_exists("includeAssets", $context) ? $context["includeAssets"] : (function () { throw new Twig_Error_Runtime('Variable "includeAssets" does not exist.', 4, $this->getSourceContext()); })())) {
            // line 5
            echo "        ";
            echo twig_include($this->env, $context, "@FMElfinder/Elfinder/helper/assets_css.html.twig");
            echo "
    ";
        }
        // line 7
        echo "</head>
<body>
";
        // line 9
        if ((isset($context["includeAssets"]) || array_key_exists("includeAssets", $context) ? $context["includeAssets"] : (function () { throw new Twig_Error_Runtime('Variable "includeAssets" does not exist.', 9, $this->getSourceContext()); })())) {
            // line 10
            echo "    ";
            echo twig_include($this->env, $context, "@FMElfinder/Elfinder/helper/assets_js.html.twig");
            echo "
";
        }
        // line 12
        echo "<script type=\"text/javascript\" charset=\"utf-8\">
    \$().ready(function() {
        var \$f = \$('.elfinder').elfinder({
            url : '";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ef_connect", array("instance" => (isset($context["instance"]) || array_key_exists("instance", $context) ? $context["instance"] : (function () { throw new Twig_Error_Runtime('Variable "instance" does not exist.', 15, $this->getSourceContext()); })()), "homeFolder" => (isset($context["homeFolder"]) || array_key_exists("homeFolder", $context) ? $context["homeFolder"] : (function () { throw new Twig_Error_Runtime('Variable "homeFolder" does not exist.', 15, $this->getSourceContext()); })()))), "html", null, true);
        echo "',
            lang : '";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new Twig_Error_Runtime('Variable "locale" does not exist.', 16, $this->getSourceContext()); })()), "html", null, true);
        echo "',
            onlyMimes: ";
        // line 17
        echo (isset($context["onlyMimes"]) || array_key_exists("onlyMimes", $context) ? $context["onlyMimes"] : (function () { throw new Twig_Error_Runtime('Variable "onlyMimes" does not exist.', 17, $this->getSourceContext()); })());
        echo ",
            getFileCallback: function(file) {
                ";
        // line 19
        if ((isset($context["relative_path"]) || array_key_exists("relative_path", $context) ? $context["relative_path"] : (function () { throw new Twig_Error_Runtime('Variable "relative_path" does not exist.', 19, $this->getSourceContext()); })())) {
            // line 20
            echo "                    window.opener.setValue('";
            echo twig_escape_filter($this->env, (isset($context["pathPrefix"]) || array_key_exists("pathPrefix", $context) ? $context["pathPrefix"] : (function () { throw new Twig_Error_Runtime('Variable "pathPrefix" does not exist.', 20, $this->getSourceContext()); })()), "html", null, true);
            echo "'+file.url.replace(\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 20, $this->getSourceContext()); })()), "request", array()), "schemeAndHttpHost", array()), "html", null, true);
            echo "/\", \"\"), \"";
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 20, $this->getSourceContext()); })()), "html", null, true);
            echo "\");
                ";
        } else {
            // line 22
            echo "                    window.opener.setValue(file.url, \"";
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 22, $this->getSourceContext()); })()), "html", null, true);
            echo "\");
                ";
        }
        // line 24
        echo "                window.close();
            }
        });


    ";
        // line 29
        if ((isset($context["fullscreen"]) || array_key_exists("fullscreen", $context) ? $context["fullscreen"] : (function () { throw new Twig_Error_Runtime('Variable "fullscreen" does not exist.', 29, $this->getSourceContext()); })())) {
            // line 30
            echo "    var \$window = \$(window);
    \$window.resize(function(){
        var \$win_height = \$window.height();
        if( \$f.height() != \$win_height ){
            \$f.height(\$win_height).resize();
        }
    });
    ";
        }
        // line 38
        echo "    });
</script>
<div class=\"elfinder\"></div>
</body>
</html>
";
        
        $__internal_ba7704f9a9c8b17d20f86ddf2c1159a278b634d32b3001bfd70e07aa066d3079->leave($__internal_ba7704f9a9c8b17d20f86ddf2c1159a278b634d32b3001bfd70e07aa066d3079_prof);

    }

    public function getTemplateName()
    {
        return "FMElfinderBundle:Elfinder:elfinder_type.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 38,  92 => 30,  90 => 29,  83 => 24,  77 => 22,  67 => 20,  65 => 19,  60 => 17,  56 => 16,  52 => 15,  47 => 12,  41 => 10,  39 => 9,  35 => 7,  29 => 5,  27 => 4,  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
    {% if includeAssets %}
        {{ include(\"@FMElfinder/Elfinder/helper/assets_css.html.twig\") }}
    {% endif %}
</head>
<body>
{% if includeAssets %}
    {{ include(\"@FMElfinder/Elfinder/helper/assets_js.html.twig\") }}
{% endif %}
<script type=\"text/javascript\" charset=\"utf-8\">
    \$().ready(function() {
        var \$f = \$('.elfinder').elfinder({
            url : '{{path('ef_connect', { 'instance': instance, 'homeFolder': homeFolder } )}}',
            lang : '{{locale}}',
            onlyMimes: {{ onlyMimes|raw }},
            getFileCallback: function(file) {
                {% if relative_path %}
                    window.opener.setValue('{{ pathPrefix }}'+file.url.replace(\"{{ app.request.schemeAndHttpHost }}/\", \"\"), \"{{ id }}\");
                {% else %}
                    window.opener.setValue(file.url, \"{{ id }}\");
                {% endif %}
                window.close();
            }
        });


    {% if fullscreen %}
    var \$window = \$(window);
    \$window.resize(function(){
        var \$win_height = \$window.height();
        if( \$f.height() != \$win_height ){
            \$f.height(\$win_height).resize();
        }
    });
    {% endif %}
    });
</script>
<div class=\"elfinder\"></div>
</body>
</html>
", "FMElfinderBundle:Elfinder:elfinder_type.html.twig", "/home/kuba/Workspace/vendor/helios-ag/fm-elfinder-bundle/Resources/views/Elfinder/elfinder_type.html.twig");
    }
}
