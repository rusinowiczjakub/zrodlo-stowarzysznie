<?php

/* SonataAdminBundle:CRUD/Association:list_one_to_one.html.twig */
class __TwigTemplate_b3b68e3a26126df197cd2c71bd74872c47af50125332bccd41db108f9883da7b extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute(($context["admin"] ?? null), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD/Association:list_one_to_one.html.twig", 12);
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
        $context["route_name"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["field_description"] ?? null), "options", array()), "route", array()), "name", array());
        // line 16
        echo "    ";
        if (((($this->getAttribute(($context["field_description"] ?? null), "hasAssociationAdmin", array()) && $this->getAttribute($this->getAttribute(        // line 17
($context["field_description"] ?? null), "associationadmin", array()), "id", array(0 => ($context["value"] ?? null)), "method")) && $this->getAttribute($this->getAttribute(        // line 18
($context["field_description"] ?? null), "associationadmin", array()), "hasRoute", array(0 => ($context["route_name"] ?? null)), "method")) && $this->getAttribute($this->getAttribute(        // line 19
($context["field_description"] ?? null), "associationadmin", array()), "hasAccess", array(0 => ($context["route_name"] ?? null), 1 => ($context["value"] ?? null)), "method"))) {
            // line 20
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["field_description"] ?? null), "associationadmin", array()), "generateObjectUrl", array(0 => ($context["route_name"] ?? null), 1 => ($context["value"] ?? null), 2 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["field_description"] ?? null), "options", array()), "route", array()), "parameters", array())), "method"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderRelationElement(($context["value"] ?? null), ($context["field_description"] ?? null)), "html", null, true);
            echo "</a>
    ";
        } else {
            // line 22
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderRelationElement(($context["value"] ?? null), ($context["field_description"] ?? null)), "html", null, true);
            echo "
    ";
        }
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD/Association:list_one_to_one.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 22,  39 => 20,  37 => 19,  36 => 18,  35 => 17,  33 => 16,  30 => 15,  27 => 14,  18 => 12,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SonataAdminBundle:CRUD/Association:list_one_to_one.html.twig", "/home/kuba/zrodlo/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/Association/list_one_to_one.html.twig");
    }
}
