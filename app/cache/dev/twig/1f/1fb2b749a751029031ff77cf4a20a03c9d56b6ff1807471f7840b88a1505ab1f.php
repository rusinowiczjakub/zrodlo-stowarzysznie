<?php

/* FMElfinderBundle:Elfinder/helper:assets_css.html.twig */
class __TwigTemplate_5a188b65970d9aa1cc044b9d936ab6def70b9ff6ea2016fabbde2c29a1ef108d extends Twig_Template
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
        $__internal_f968ad9b790519677342346fed2c95b76c8da156691486755efbea62bcf82a13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f968ad9b790519677342346fed2c95b76c8da156691486755efbea62bcf82a13->enter($__internal_f968ad9b790519677342346fed2c95b76c8da156691486755efbea62bcf82a13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FMElfinderBundle:Elfinder/helper:assets_css.html.twig"));

        // line 1
        echo "<link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(((((isset($context["prefix"]) || array_key_exists("prefix", $context) ? $context["prefix"] : (function () { throw new Twig_Error_Runtime('Variable "prefix" does not exist.', 1, $this->getSourceContext()); })()) . "/jquery-ui/themes/") . (isset($context["theme"]) || array_key_exists("theme", $context) ? $context["theme"] : (function () { throw new Twig_Error_Runtime('Variable "theme" does not exist.', 1, $this->getSourceContext()); })())) . "/jquery-ui.min.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
<link href=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(((isset($context["prefix"]) || array_key_exists("prefix", $context) ? $context["prefix"] : (function () { throw new Twig_Error_Runtime('Variable "prefix" does not exist.', 2, $this->getSourceContext()); })()) . "/elfinder/dist/css/elfinder.min.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
<link href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(((isset($context["prefix"]) || array_key_exists("prefix", $context) ? $context["prefix"] : (function () { throw new Twig_Error_Runtime('Variable "prefix" does not exist.', 3, $this->getSourceContext()); })()) . "/elfinder/dist/css/theme.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">

";
        
        $__internal_f968ad9b790519677342346fed2c95b76c8da156691486755efbea62bcf82a13->leave($__internal_f968ad9b790519677342346fed2c95b76c8da156691486755efbea62bcf82a13_prof);

    }

    public function getTemplateName()
    {
        return "FMElfinderBundle:Elfinder/helper:assets_css.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  27 => 2,  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<link href=\"{{ asset(\"#{prefix}/jquery-ui/themes/#{theme}/jquery-ui.min.css\") }}\" rel=\"stylesheet\" type=\"text/css\">
<link href=\"{{ asset(\"#{prefix}/elfinder/dist/css/elfinder.min.css\") }}\" rel=\"stylesheet\" type=\"text/css\">
<link href=\"{{ asset(\"#{prefix}/elfinder/dist/css/theme.css\") }}\" rel=\"stylesheet\" type=\"text/css\">

", "FMElfinderBundle:Elfinder/helper:assets_css.html.twig", "/home/kuba/Workspace/vendor/helios-ag/fm-elfinder-bundle/Resources/views/Elfinder/helper/assets_css.html.twig");
    }
}
