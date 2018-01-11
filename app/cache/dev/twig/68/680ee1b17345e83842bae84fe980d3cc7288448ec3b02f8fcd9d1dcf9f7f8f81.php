<?php

/* FMElfinderBundle:Elfinder:ckeditor.html.twig */
class __TwigTemplate_d6c065965bf5e20230ad8426f822fb9dc43dd94c6685a11be6392907cf8c151b extends Twig_Template
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
        $__internal_85a5d43ed5fa9128fa969af42f23e2ca8b918d85f1e858fb1625ebb5bbaf1e60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85a5d43ed5fa9128fa969af42f23e2ca8b918d85f1e858fb1625ebb5bbaf1e60->enter($__internal_85a5d43ed5fa9128fa969af42f23e2ca8b918d85f1e858fb1625ebb5bbaf1e60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FMElfinderBundle:Elfinder:ckeditor.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    ";
        // line 5
        if ((isset($context["includeAssets"]) || array_key_exists("includeAssets", $context) ? $context["includeAssets"] : (function () { throw new Twig_Error_Runtime('Variable "includeAssets" does not exist.', 5, $this->getSourceContext()); })())) {
            // line 6
            echo "        ";
            echo twig_include($this->env, $context, "@FMElfinder/Elfinder/helper/assets_css.html.twig");
            echo "
    ";
        }
        // line 8
        echo "</head>
<body>
";
        // line 10
        if ((isset($context["includeAssets"]) || array_key_exists("includeAssets", $context) ? $context["includeAssets"] : (function () { throw new Twig_Error_Runtime('Variable "includeAssets" does not exist.', 10, $this->getSourceContext()); })())) {
            // line 11
            echo "    ";
            echo twig_include($this->env, $context, "@FMElfinder/Elfinder/helper/assets_js.html.twig");
            echo "
";
        }
        // line 13
        echo "<script type=\"text/javascript\" charset=\"utf-8\">
    function getUrlParam(paramName) {
        var reParam = new RegExp('(?:[\\?&]|&amp;)' + paramName + '=([^&]+)', 'i') ;
        var match = window.location.search.match(reParam) ;

        return (match && match.length > 1) ? match[1] : '' ;
    }
    \$().ready(function() {
        var funcNum = getUrlParam('CKEditorFuncNum');
        var mode = getUrlParam('mode');

        var f = \$('.elfinder').elfinder({
            url : '";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ef_connect", array("instance" => (isset($context["instance"]) || array_key_exists("instance", $context) ? $context["instance"] : (function () { throw new Twig_Error_Runtime('Variable "instance" does not exist.', 25, $this->getSourceContext()); })()), "homeFolder" => (isset($context["homeFolder"]) || array_key_exists("homeFolder", $context) ? $context["homeFolder"] : (function () { throw new Twig_Error_Runtime('Variable "homeFolder" does not exist.', 25, $this->getSourceContext()); })()))), "html", null, true);
        echo "'+'?mode='+mode,
            lang : '";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new Twig_Error_Runtime('Variable "locale" does not exist.', 26, $this->getSourceContext()); })()), "html", null, true);
        echo "',
            onlyMimes: ";
        // line 27
        echo (isset($context["onlyMimes"]) || array_key_exists("onlyMimes", $context) ? $context["onlyMimes"] : (function () { throw new Twig_Error_Runtime('Variable "onlyMimes" does not exist.', 27, $this->getSourceContext()); })());
        echo ",
            getFileCallback : function(file) {
                if (funcNum) {
                    ";
        // line 30
        if ((isset($context["relative_path"]) || array_key_exists("relative_path", $context) ? $context["relative_path"] : (function () { throw new Twig_Error_Runtime('Variable "relative_path" does not exist.', 30, $this->getSourceContext()); })())) {
            // line 31
            echo "                        window.opener.CKEDITOR.tools.callFunction(funcNum, '";
            echo twig_escape_filter($this->env, (isset($context["pathPrefix"]) || array_key_exists("pathPrefix", $context) ? $context["pathPrefix"] : (function () { throw new Twig_Error_Runtime('Variable "pathPrefix" does not exist.', 31, $this->getSourceContext()); })()), "html", null, true);
            echo "'+file.url.replace(\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 31, $this->getSourceContext()); })()), "request", array()), "schemeAndHttpHost", array()), "html", null, true);
            echo "/\", \"\"));
                    ";
        } else {
            // line 33
            echo "                        window.opener.CKEDITOR.tools.callFunction(funcNum, file.url);
                    ";
        }
        // line 35
        echo "                    window.close();
                }
            }
        });

        ";
        // line 40
        if ((isset($context["fullscreen"]) || array_key_exists("fullscreen", $context) ? $context["fullscreen"] : (function () { throw new Twig_Error_Runtime('Variable "fullscreen" does not exist.', 40, $this->getSourceContext()); })())) {
            // line 41
            echo "        \$(window).resize(function(){
            var h = \$(window).height();
            var \$ef = \$('.elfinder');
            if(\$ef.height() != h - 20){
                \$ef.height(h -20).resize();
            }
        });
        ";
        }
        // line 49
        echo "    });
</script>
<div class=\"elfinder\"></div>
</body>
</html>
";
        
        $__internal_85a5d43ed5fa9128fa969af42f23e2ca8b918d85f1e858fb1625ebb5bbaf1e60->leave($__internal_85a5d43ed5fa9128fa969af42f23e2ca8b918d85f1e858fb1625ebb5bbaf1e60_prof);

    }

    public function getTemplateName()
    {
        return "FMElfinderBundle:Elfinder:ckeditor.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 49,  99 => 41,  97 => 40,  90 => 35,  86 => 33,  78 => 31,  76 => 30,  70 => 27,  66 => 26,  62 => 25,  48 => 13,  42 => 11,  40 => 10,  36 => 8,  30 => 6,  28 => 5,  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    {% if includeAssets %}
        {{ include(\"@FMElfinder/Elfinder/helper/assets_css.html.twig\") }}
    {% endif %}
</head>
<body>
{% if includeAssets %}
    {{ include(\"@FMElfinder/Elfinder/helper/assets_js.html.twig\") }}
{% endif %}
<script type=\"text/javascript\" charset=\"utf-8\">
    function getUrlParam(paramName) {
        var reParam = new RegExp('(?:[\\?&]|&amp;)' + paramName + '=([^&]+)', 'i') ;
        var match = window.location.search.match(reParam) ;

        return (match && match.length > 1) ? match[1] : '' ;
    }
    \$().ready(function() {
        var funcNum = getUrlParam('CKEditorFuncNum');
        var mode = getUrlParam('mode');

        var f = \$('.elfinder').elfinder({
            url : '{{path('ef_connect', {'instance': instance, 'homeFolder': homeFolder })}}'+'?mode='+mode,
            lang : '{{locale}}',
            onlyMimes: {{ onlyMimes|raw }},
            getFileCallback : function(file) {
                if (funcNum) {
                    {% if relative_path %}
                        window.opener.CKEDITOR.tools.callFunction(funcNum, '{{ pathPrefix }}'+file.url.replace(\"{{ app.request.schemeAndHttpHost }}/\", \"\"));
                    {% else %}
                        window.opener.CKEDITOR.tools.callFunction(funcNum, file.url);
                    {% endif %}
                    window.close();
                }
            }
        });

        {% if fullscreen %}
        \$(window).resize(function(){
            var h = \$(window).height();
            var \$ef = \$('.elfinder');
            if(\$ef.height() != h - 20){
                \$ef.height(h -20).resize();
            }
        });
        {% endif %}
    });
</script>
<div class=\"elfinder\"></div>
</body>
</html>
", "FMElfinderBundle:Elfinder:ckeditor.html.twig", "/home/kuba/Workspace/vendor/helios-ag/fm-elfinder-bundle/Resources/views/Elfinder/ckeditor.html.twig");
    }
}
