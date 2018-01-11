<?php

/* FMElfinderBundle:Elfinder/helper:_summernote.html.twig */
class __TwigTemplate_a612a9133ddfdbc4eda5ff555d5f4f4da87270b02291d139fa10ede075096862 extends Twig_Template
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
        $__internal_9a14bf64863121e4c8408b175bb3a069c94f5787d813e24ab90e52b4d32059a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a14bf64863121e4c8408b175bb3a069c94f5787d813e24ab90e52b4d32059a4->enter($__internal_9a14bf64863121e4c8408b175bb3a069c94f5787d813e24ab90e52b4d32059a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FMElfinderBundle:Elfinder/helper:_summernote.html.twig"));

        // line 1
        echo "<script type=\"text/javascript\">
    function elFinderBrowser(){
            window.open(
                \"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("elfinder", array("instance" => (isset($context["instance"]) || array_key_exists("instance", $context) ? $context["instance"] : (function () { throw new Twig_Error_Runtime('Variable "instance" does not exist.', 4, $this->getSourceContext()); })()))), "html", null, true);
        echo "\",
                \"\",
                \"width=";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["width"]) || array_key_exists("width", $context) ? $context["width"] : (function () { throw new Twig_Error_Runtime('Variable "width" does not exist.', 6, $this->getSourceContext()); })()), "html", null, true);
        echo ", height=";
        echo twig_escape_filter($this->env, (isset($context["height"]) || array_key_exists("height", $context) ? $context["height"] : (function () { throw new Twig_Error_Runtime('Variable "height" does not exist.', 6, $this->getSourceContext()); })()), "html", null, true);
        echo ", resizable=yes, scrollbars=no, status=no, toolbar=no\"
            );
            return false;
        }
</script>

";
        
        $__internal_9a14bf64863121e4c8408b175bb3a069c94f5787d813e24ab90e52b4d32059a4->leave($__internal_9a14bf64863121e4c8408b175bb3a069c94f5787d813e24ab90e52b4d32059a4_prof);

    }

    public function getTemplateName()
    {
        return "FMElfinderBundle:Elfinder/helper:_summernote.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 6,  27 => 4,  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<script type=\"text/javascript\">
    function elFinderBrowser(){
            window.open(
                \"{{ url('elfinder', {'instance': instance}) }}\",
                \"\",
                \"width={{ width }}, height={{ height }}, resizable=yes, scrollbars=no, status=no, toolbar=no\"
            );
            return false;
        }
</script>

", "FMElfinderBundle:Elfinder/helper:_summernote.html.twig", "/home/kuba/Workspace/vendor/helios-ag/fm-elfinder-bundle/Resources/views/Elfinder/helper/_summernote.html.twig");
    }
}
