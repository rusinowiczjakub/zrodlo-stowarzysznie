<?php

/* knp_menu_base.html.twig */
class __TwigTemplate_6d5adf28dfdc1689d305b502fa764e2029d84bbd9eec86b21ec5aa64d566d474 extends Twig_Template
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
        $__internal_93d63c9910677e57c615fd02779db92787ff8bd99ac6f87c9e9ab9ee4cc32781 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93d63c9910677e57c615fd02779db92787ff8bd99ac6f87c9e9ab9ee4cc32781->enter($__internal_93d63c9910677e57c615fd02779db92787ff8bd99ac6f87c9e9ab9ee4cc32781_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu_base.html.twig"));

        // line 1
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 1, $this->getSourceContext()); })()), "compressed", array())) {
            $this->displayBlock("compressed_root", $context, $blocks);
        } else {
            $this->displayBlock("root", $context, $blocks);
        }
        
        $__internal_93d63c9910677e57c615fd02779db92787ff8bd99ac6f87c9e9ab9ee4cc32781->leave($__internal_93d63c9910677e57c615fd02779db92787ff8bd99ac6f87c9e9ab9ee4cc32781_prof);

    }

    public function getTemplateName()
    {
        return "knp_menu_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if options.compressed %}{{ block('compressed_root') }}{% else %}{{ block('root') }}{% endif %}
", "knp_menu_base.html.twig", "/home/kuba/Workspace/vendor/knplabs/knp-menu/src/Knp/Menu/Resources/views/knp_menu_base.html.twig");
    }
}
