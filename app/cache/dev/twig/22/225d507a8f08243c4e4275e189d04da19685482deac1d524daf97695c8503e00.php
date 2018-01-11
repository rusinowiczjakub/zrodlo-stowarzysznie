<?php

/* knp_menu_base.html.twig */
class __TwigTemplate_ab98a5d6832612e45b68ed5608b034da1d3916552ba7d1e2e32d3ada66bfbe52 extends Twig_Template
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
        $__internal_df6d8ceec0ba79015d301ec98ed2312a260b15555f9ebc672fd1c28537f15e6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df6d8ceec0ba79015d301ec98ed2312a260b15555f9ebc672fd1c28537f15e6d->enter($__internal_df6d8ceec0ba79015d301ec98ed2312a260b15555f9ebc672fd1c28537f15e6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu_base.html.twig"));

        // line 1
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 1, $this->getSourceContext()); })()), "compressed", array())) {
            $this->displayBlock("compressed_root", $context, $blocks);
        } else {
            $this->displayBlock("root", $context, $blocks);
        }
        
        $__internal_df6d8ceec0ba79015d301ec98ed2312a260b15555f9ebc672fd1c28537f15e6d->leave($__internal_df6d8ceec0ba79015d301ec98ed2312a260b15555f9ebc672fd1c28537f15e6d_prof);

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
