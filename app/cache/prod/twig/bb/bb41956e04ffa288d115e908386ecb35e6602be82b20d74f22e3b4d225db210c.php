<?php

/* SonataAdminBundle:CRUD:list_trans.html.twig */
class __TwigTemplate_08ab4ec50e73becab14f9985f1dc8e4dd9b1d104b2bf4cd1c08e114c478b713d extends Twig_Template
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
        return $this->loadTemplate(twig_get_attribute($this->env, $this->getSourceContext(), ($context["admin"] ?? null), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_trans.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        // line 15
        echo "    ";
        $context["translationDomain"] = ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["field_description"] ?? null), "options", array(), "any", false, true), "catalogue", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["field_description"] ?? null), "options", array(), "any", false, true), "catalogue", array()), twig_get_attribute($this->env, $this->getSourceContext(), ($context["admin"] ?? null), "translationDomain", array()))) : (twig_get_attribute($this->env, $this->getSourceContext(), ($context["admin"] ?? null), "translationDomain", array())));
        // line 16
        echo "    ";
        $context["valueFormat"] = ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["field_description"] ?? null), "options", array(), "any", false, true), "format", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["field_description"] ?? null), "options", array(), "any", false, true), "format", array()), "%s")) : ("%s"));
        // line 17
        echo "
    ";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(sprintf(($context["valueFormat"] ?? null), ($context["value"] ?? null)), array(), ($context["translationDomain"] ?? null)), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_trans.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 18,  36 => 17,  33 => 16,  30 => 15,  27 => 14,  18 => 12,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SonataAdminBundle:CRUD:list_trans.html.twig", "/home/kuba/Workspace/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/list_trans.html.twig");
    }
}
