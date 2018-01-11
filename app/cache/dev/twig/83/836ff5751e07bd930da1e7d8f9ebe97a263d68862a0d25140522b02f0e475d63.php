<?php

/* FMElfinderBundle:Elfinder/helper:_tinymce4.html.twig */
class __TwigTemplate_3ef219314dfa2f4e499fa0ec296a951d7ba3044e9c6ac0509d873d9fdb67fe17 extends Twig_Template
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
        $__internal_c682d1e81f1dd84e56715f09a5d6c9036943bbb405fee143ea232d5b200cd3e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c682d1e81f1dd84e56715f09a5d6c9036943bbb405fee143ea232d5b200cd3e2->enter($__internal_c682d1e81f1dd84e56715f09a5d6c9036943bbb405fee143ea232d5b200cd3e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FMElfinderBundle:Elfinder/helper:_tinymce4.html.twig"));

        // line 1
        echo "<script type=\"text/javascript\">
    function elFinderBrowser (field_name, url, type, win) {
        tinymce.activeEditor.windowManager.open({
            file:\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("elfinder", array("instance" => (isset($context["instance"]) || array_key_exists("instance", $context) ? $context["instance"] : (function () { throw new Twig_Error_Runtime('Variable "instance" does not exist.', 4, $this->getSourceContext()); })()))), "html", null, true);
        echo "\",
            title: \"";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new Twig_Error_Runtime('Variable "title" does not exist.', 5, $this->getSourceContext()); })()), "html", null, true);
        echo "\",
            width: ";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["width"]) || array_key_exists("width", $context) ? $context["width"] : (function () { throw new Twig_Error_Runtime('Variable "width" does not exist.', 6, $this->getSourceContext()); })()), "html", null, true);
        echo ",
            height: ";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["height"]) || array_key_exists("height", $context) ? $context["height"] : (function () { throw new Twig_Error_Runtime('Variable "height" does not exist.', 7, $this->getSourceContext()); })()), "html", null, true);
        echo ",
            resizable: 'yes'
        }, {
            setUrl: function (url) {
                win.document.getElementById(field_name).value = url;
            }
        });
        return false;
    }
</script>
";
        
        $__internal_c682d1e81f1dd84e56715f09a5d6c9036943bbb405fee143ea232d5b200cd3e2->leave($__internal_c682d1e81f1dd84e56715f09a5d6c9036943bbb405fee143ea232d5b200cd3e2_prof);

    }

    public function getTemplateName()
    {
        return "FMElfinderBundle:Elfinder/helper:_tinymce4.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 7,  35 => 6,  31 => 5,  27 => 4,  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<script type=\"text/javascript\">
    function elFinderBrowser (field_name, url, type, win) {
        tinymce.activeEditor.windowManager.open({
            file:\"{{ url('elfinder', {'instance': instance}) }}\",
            title: \"{{ title }}\",
            width: {{ width }},
            height: {{ height }},
            resizable: 'yes'
        }, {
            setUrl: function (url) {
                win.document.getElementById(field_name).value = url;
            }
        });
        return false;
    }
</script>
", "FMElfinderBundle:Elfinder/helper:_tinymce4.html.twig", "/home/kuba/Workspace/vendor/helios-ag/fm-elfinder-bundle/Resources/views/Elfinder/helper/_tinymce4.html.twig");
    }
}
