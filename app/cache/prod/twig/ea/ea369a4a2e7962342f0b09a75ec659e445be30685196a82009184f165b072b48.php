<?php

/* FMElfinderBundle:Elfinder:tinymce.html.twig */
class __TwigTemplate_0cdc4b347a3cbe8b35edd947f84064f6f63f560ed7331a4f1bfe77d44b45459a extends Twig_Template
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
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    ";
        // line 4
        if (($context["includeAssets"] ?? null)) {
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
        if (($context["includeAssets"] ?? null)) {
            // line 10
            echo "    ";
            echo twig_include($this->env, $context, "@FMElfinder/Elfinder/helper/assets_js.html.twig");
            echo "
";
        }
        // line 12
        echo "<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, ($context["tinymce_popup_path"] ?? null), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" charset=\"utf-8\">

    var FileBrowserDialogue = {
        init: function () {},
        mySubmit: function (URL) {

            var win = tinyMCEPopup.getWindowArg('window');

            // pass selected file path to TinyMCE
            win.document.getElementById(tinyMCEPopup.getWindowArg('input')).value = URL;

            // are we an image browser?
            if (typeof(win.ImageDialog) != 'undefined') {
                // update image dimensions
                if (win.ImageDialog.getImageData) {
                    win.ImageDialog.getImageData();
                }
                // update preview if necessary
                if (win.ImageDialog.showPreviewImage) {
                    win.ImageDialog.showPreviewImage(URL);
                }
            }

            // close popup window
            tinyMCEPopup.close();
        }
    };

    tinyMCEPopup.onInit.add(FileBrowserDialogue.init, FileBrowserDialogue);

    \$().ready(function() {

        var f = \$('.elfinder').elfinder({
            url : '";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ef_connect", array("instance" => ($context["instance"] ?? null), "homeFolder" => ($context["homeFolder"] ?? null))), "html", null, true);
        echo "',
            lang : '";
        // line 47
        echo twig_escape_filter($this->env, ($context["locale"] ?? null), "html", null, true);
        echo "',
            onlyMimes: ";
        // line 48
        echo ($context["onlyMimes"] ?? null);
        echo ",
            getfile : {
                onlyURL : true,
                multiple : false,
                folders : false
            },
            getFileCallback : function(url) {
                path = '/' + url.replace(\"";
        // line 55
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "request", array()), "schemeAndHttpHost", array()), "html", null, true);
        echo "/\", \"\");
                FileBrowserDialogue.mySubmit(path);
            }
        }).elfinder('instance');
    });
</script>
<div class=\"elfinder\"></div>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "FMElfinderBundle:Elfinder:tinymce.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 55,  90 => 48,  86 => 47,  82 => 46,  44 => 12,  38 => 10,  36 => 9,  32 => 7,  26 => 5,  24 => 4,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "FMElfinderBundle:Elfinder:tinymce.html.twig", "/home/kuba/Workspace/vendor/helios-ag/fm-elfinder-bundle/Resources/views/Elfinder/tinymce.html.twig");
    }
}
