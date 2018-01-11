<?php

/* FMElfinderBundle:Elfinder:fm_tinymce.html.twig */
class __TwigTemplate_dc6825206ca49b250d4ef74caf25e0fabfadc722dd5bddc26c9f042ec1605935 extends Twig_Template
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
        $__internal_09e5c3e087364a58e2a3dbed1a92cbb496e96d5f120126610f6320ce71b45612 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09e5c3e087364a58e2a3dbed1a92cbb496e96d5f120126610f6320ce71b45612->enter($__internal_09e5c3e087364a58e2a3dbed1a92cbb496e96d5f120126610f6320ce71b45612_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FMElfinderBundle:Elfinder:fm_tinymce.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
";
        // line 4
        if ((isset($context["includeAssets"]) || array_key_exists("includeAssets", $context) ? $context["includeAssets"] : (function () { throw new Twig_Error_Runtime('Variable "includeAssets" does not exist.', 4, $this->getSourceContext()); })())) {
            // line 5
            echo "    ";
            echo twig_include($this->env, $context, "@FMElfinder/Elfinder:helper/assets_css.html.twig");
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
    var FileBrowserDialogue = {
        mySubmit: function (file, elf) {
            // pass selected file data to TinyMCE
            parent.tinymce.activeEditor.windowManager.getParams().oninsert(file, elf);
            // close popup window
            parent.tinymce.activeEditor.windowManager.close();
        }
    };
    \$(document).ready(function() {
        var elf = \$('.elfinder').elfinder({
            // set your elFinder options here
            url: '";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ef_connect", array("instance" => (isset($context["instance"]) || array_key_exists("instance", $context) ? $context["instance"] : (function () { throw new Twig_Error_Runtime('Variable "instance" does not exist.', 24, $this->getSourceContext()); })()), "homeFolder" => (isset($context["homeFolder"]) || array_key_exists("homeFolder", $context) ? $context["homeFolder"] : (function () { throw new Twig_Error_Runtime('Variable "homeFolder" does not exist.', 24, $this->getSourceContext()); })()))), "html", null, true);
        echo "',  // connector URL
            lang : '";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new Twig_Error_Runtime('Variable "locale" does not exist.', 25, $this->getSourceContext()); })()), "html", null, true);
        echo "',
            onlyMimes: ";
        // line 26
        echo (isset($context["onlyMimes"]) || array_key_exists("onlyMimes", $context) ? $context["onlyMimes"] : (function () { throw new Twig_Error_Runtime('Variable "onlyMimes" does not exist.', 26, $this->getSourceContext()); })());
        echo ",
            getFileCallback: function(file) { // editor callback
                ";
        // line 28
        if ((isset($context["relative_path"]) || array_key_exists("relative_path", $context) ? $context["relative_path"] : (function () { throw new Twig_Error_Runtime('Variable "relative_path" does not exist.', 28, $this->getSourceContext()); })())) {
            // line 29
            echo "                        file.url = '";
            echo twig_escape_filter($this->env, (isset($context["pathPrefix"]) || array_key_exists("pathPrefix", $context) ? $context["pathPrefix"] : (function () { throw new Twig_Error_Runtime('Variable "pathPrefix" does not exist.', 29, $this->getSourceContext()); })()), "html", null, true);
            echo "' + file.url.replace(\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 29, $this->getSourceContext()); })()), "request", array()), "schemeAndHttpHost", array()), "html", null, true);
            echo "/\", \"\");
                        FileBrowserDialogue.mySubmit(file, elf); // pass selected file path to TinyMCE
                ";
        } else {
            // line 32
            echo "                    FileBrowserDialogue.mySubmit(file, elf); // pass selected file path to TinyMCE
                ";
        }
        // line 34
        echo "
            }
        }).elfinder('instance');
    });
</script>
<div class=\"elfinder\"></div>
</body>
</html>
";
        
        $__internal_09e5c3e087364a58e2a3dbed1a92cbb496e96d5f120126610f6320ce71b45612->leave($__internal_09e5c3e087364a58e2a3dbed1a92cbb496e96d5f120126610f6320ce71b45612_prof);

    }

    public function getTemplateName()
    {
        return "FMElfinderBundle:Elfinder:fm_tinymce.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 34,  85 => 32,  76 => 29,  74 => 28,  69 => 26,  65 => 25,  61 => 24,  47 => 12,  41 => 10,  39 => 9,  35 => 7,  29 => 5,  27 => 4,  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
{% if includeAssets %}
    {{ include(\"@FMElfinder/Elfinder:helper/assets_css.html.twig\") }}
{% endif %}
</head>
<body>
{% if includeAssets %}
    {{ include(\"@FMElfinder/Elfinder/helper/assets_js.html.twig\") }}
{% endif %}
<script type=\"text/javascript\" charset=\"utf-8\">
    var FileBrowserDialogue = {
        mySubmit: function (file, elf) {
            // pass selected file data to TinyMCE
            parent.tinymce.activeEditor.windowManager.getParams().oninsert(file, elf);
            // close popup window
            parent.tinymce.activeEditor.windowManager.close();
        }
    };
    \$(document).ready(function() {
        var elf = \$('.elfinder').elfinder({
            // set your elFinder options here
            url: '{{ path('ef_connect', {'instance': instance, 'homeFolder': homeFolder }) }}',  // connector URL
            lang : '{{ locale }}',
            onlyMimes: {{ onlyMimes|raw }},
            getFileCallback: function(file) { // editor callback
                {% if relative_path %}
                        file.url = '{{ pathPrefix }}' + file.url.replace(\"{{ app.request.schemeAndHttpHost }}/\", \"\");
                        FileBrowserDialogue.mySubmit(file, elf); // pass selected file path to TinyMCE
                {% else %}
                    FileBrowserDialogue.mySubmit(file, elf); // pass selected file path to TinyMCE
                {% endif %}

            }
        }).elfinder('instance');
    });
</script>
<div class=\"elfinder\"></div>
</body>
</html>
", "FMElfinderBundle:Elfinder:fm_tinymce.html.twig", "/home/kuba/Workspace/vendor/helios-ag/fm-elfinder-bundle/Resources/views/Elfinder/fm_tinymce.html.twig");
    }
}
