<?php

/* SonataAdminBundle:CRUD/Association:list_many_to_one.html.twig */
class __TwigTemplate_448b5e39ffdcac1579b3fe2a31bdf23b7a1ce4fde6ecb27396a64f32ac5982e5 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute(($context["admin"] ?? null), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD/Association:list_many_to_one.html.twig", 12);
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
        if (($context["value"] ?? null)) {
            // line 16
            echo "        ";
            $context["route_name"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["field_description"] ?? null), "options", array()), "route", array()), "name", array());
            // line 17
            echo "        ";
            if (((( !(($this->getAttribute($this->getAttribute(($context["field_description"] ?? null), "options", array(), "any", false, true), "identifier", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["field_description"] ?? null), "options", array(), "any", false, true), "identifier", array()), false)) : (false)) && $this->getAttribute(            // line 18
($context["field_description"] ?? null), "hasAssociationAdmin", array())) && $this->getAttribute($this->getAttribute(            // line 19
($context["field_description"] ?? null), "associationadmin", array()), "hasRoute", array(0 => ($context["route_name"] ?? null)), "method")) && $this->getAttribute($this->getAttribute(            // line 20
($context["field_description"] ?? null), "associationadmin", array()), "hasAccess", array(0 => ($context["route_name"] ?? null), 1 => ($context["value"] ?? null)), "method"))) {
                // line 22
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["field_description"] ?? null), "associationadmin", array()), "generateObjectUrl", array(0 => ($context["route_name"] ?? null), 1 => ($context["value"] ?? null), 2 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["field_description"] ?? null), "options", array()), "route", array()), "parameters", array())), "method"), "html", null, true);
                echo "\">
                ";
                // line 23
                echo twig_escape_filter($this->env, $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderRelationElement(($context["value"] ?? null), ($context["field_description"] ?? null)), "html", null, true);
                echo "
            </a>
        ";
            } else {
                // line 26
                echo "            ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderRelationElement(($context["value"] ?? null), ($context["field_description"] ?? null)), "html", null, true);
                echo "
        ";
            }
            // line 28
            echo "    ";
        }
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD/Association:list_many_to_one.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 28,  53 => 26,  47 => 23,  42 => 22,  40 => 20,  39 => 19,  38 => 18,  36 => 17,  33 => 16,  30 => 15,  27 => 14,  18 => 12,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SonataAdminBundle:CRUD/Association:list_many_to_one.html.twig", "/home/kuba/zrodlo/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/Association/list_many_to_one.html.twig");
    }
}
