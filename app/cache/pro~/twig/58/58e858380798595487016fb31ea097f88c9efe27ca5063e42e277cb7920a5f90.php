<?php

/* FMElfinderBundle:Elfinder/helper:assets_js.html.twig */
class __TwigTemplate_b9dcc89bd161ca744679155a118f570d62fb61e843d667d1ff00c46d0bd0ba8d extends Twig_Template
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
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((($context["prefix"] ?? null) . "/jquery/jquery.js")), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((($context["prefix"] ?? null) . "/jquery-ui/jquery-ui.min.js")), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((($context["prefix"] ?? null) . "/elfinder/dist/js/elfinder.min.js")), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((((($context["prefix"] ?? null) . "/elfinder/dist/js/i18n/elfinder.") . ($context["locale"] ?? null)) . ".js")), "html", null, true);
        echo "\"></script>
";
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
        return array (  32 => 4,  28 => 3,  24 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "FMElfinderBundle:Elfinder/helper:assets_js.html.twig", "/home/kuba/zrodlo/vendor/helios-ag/fm-elfinder-bundle/Resources/views/Elfinder/helper/assets_js.html.twig");
    }
}