<?php

/* SonataAdminBundle:CRUD:list_time.html.twig */
class __TwigTemplate_7387ff1e527bfb02e9b10eb4c55269fb1c04fe4cc68cf1e11dd2ca68d4e8aa0f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate(twig_get_attribute($this->env, $this->getSourceContext(), ($context["admin"] ?? null), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_time.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        // line 15
        if (twig_test_empty(($context["value"] ?? null))) {
            // line 16
            echo "&nbsp;";
        } else {
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["value"] ?? null), "H:i:s"), "html", null, true);
        }
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_time.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 18,  32 => 16,  30 => 15,  27 => 14,  18 => 12,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SonataAdminBundle:CRUD:list_time.html.twig", "/home/kuba/Workspace/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/list_time.html.twig");
    }
}
