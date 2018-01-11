<?php

/* FMElfinderBundle:Elfinder/helper:assets_js.html.twig */
class __TwigTemplate_c7b18d53a6b9c7bceab7cf69eb2d4e7aa1793ed25d628a4708f9a5ce51528cf9 extends Twig_Template
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
        $__internal_1e6c6755697ea3c5de198acefaf0e1283b860f35779b3c0a114150d154324f15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e6c6755697ea3c5de198acefaf0e1283b860f35779b3c0a114150d154324f15->enter($__internal_1e6c6755697ea3c5de198acefaf0e1283b860f35779b3c0a114150d154324f15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FMElfinderBundle:Elfinder/helper:assets_js.html.twig"));

        // line 1
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(((isset($context["prefix"]) || array_key_exists("prefix", $context) ? $context["prefix"] : (function () { throw new Twig_Error_Runtime('Variable "prefix" does not exist.', 1, $this->getSourceContext()); })()) . "/jquery/jquery.js")), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(((isset($context["prefix"]) || array_key_exists("prefix", $context) ? $context["prefix"] : (function () { throw new Twig_Error_Runtime('Variable "prefix" does not exist.', 2, $this->getSourceContext()); })()) . "/jquery-ui/jquery-ui.min.js")), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(((isset($context["prefix"]) || array_key_exists("prefix", $context) ? $context["prefix"] : (function () { throw new Twig_Error_Runtime('Variable "prefix" does not exist.', 3, $this->getSourceContext()); })()) . "/elfinder/dist/js/elfinder.min.js")), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(((((isset($context["prefix"]) || array_key_exists("prefix", $context) ? $context["prefix"] : (function () { throw new Twig_Error_Runtime('Variable "prefix" does not exist.', 4, $this->getSourceContext()); })()) . "/elfinder/dist/js/i18n/elfinder.") . (isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new Twig_Error_Runtime('Variable "locale" does not exist.', 4, $this->getSourceContext()); })())) . ".js")), "html", null, true);
        echo "\"></script>
";
        
        $__internal_1e6c6755697ea3c5de198acefaf0e1283b860f35779b3c0a114150d154324f15->leave($__internal_1e6c6755697ea3c5de198acefaf0e1283b860f35779b3c0a114150d154324f15_prof);

    }

    public function getTemplateName()
    {
        return "FMElfinderBundle:Elfinder/helper:assets_js.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 4,  31 => 3,  27 => 2,  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<script src=\"{{ asset(\"#{prefix}/jquery/jquery.js\") }}\"></script>
<script src=\"{{ asset(\"#{prefix}/jquery-ui/jquery-ui.min.js\") }}\"></script>
<script src=\"{{ asset(\"#{prefix}/elfinder/dist/js/elfinder.min.js\") }}\"></script>
<script src=\"{{ asset(\"#{prefix}/elfinder/dist/js/i18n/elfinder.#{locale}.js\") }}\"></script>
", "FMElfinderBundle:Elfinder/helper:assets_js.html.twig", "/home/kuba/Workspace/vendor/helios-ag/fm-elfinder-bundle/Resources/views/Elfinder/helper/assets_js.html.twig");
    }
}
