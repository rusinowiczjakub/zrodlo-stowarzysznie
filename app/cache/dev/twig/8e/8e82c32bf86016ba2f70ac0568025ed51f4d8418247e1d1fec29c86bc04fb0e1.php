<?php

/* SonataAdminBundle:CRUD:list__select.html.twig */
class __TwigTemplate_a4fe23e2e2c5e07c89f4ab8c937e70d7afb824181b4464008dd57752073b4d55 extends Twig_Template
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
        return $this->loadTemplate(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 12, $this->getSourceContext()); })()), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list__select.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_57481a8c7bfb9e96f1ab1e347a353dc4bfd3c27995278d66836c1aabf6d9ad99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57481a8c7bfb9e96f1ab1e347a353dc4bfd3c27995278d66836c1aabf6d9ad99->enter($__internal_57481a8c7bfb9e96f1ab1e347a353dc4bfd3c27995278d66836c1aabf6d9ad99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__select.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_57481a8c7bfb9e96f1ab1e347a353dc4bfd3c27995278d66836c1aabf6d9ad99->leave($__internal_57481a8c7bfb9e96f1ab1e347a353dc4bfd3c27995278d66836c1aabf6d9ad99_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_e038cf2dd807d1de74edb6b2e068335ae68db301ba048c515a6860b21da8313e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e038cf2dd807d1de74edb6b2e068335ae68db301ba048c515a6860b21da8313e->enter($__internal_e038cf2dd807d1de74edb6b2e068335ae68db301ba048c515a6860b21da8313e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <a class=\"btn btn-primary\" href=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 15, $this->getSourceContext()); })()), "generateUrl", array(0 => "list"), "method"), "html", null, true);
        echo "\">
        <i class=\"fa fa-check\" aria-hidden=\"true\"></i>
        ";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list_select", array(), "SonataAdminBundle"), "html", null, true);
        echo "
    </a>
";
        
        $__internal_e038cf2dd807d1de74edb6b2e068335ae68db301ba048c515a6860b21da8313e->leave($__internal_e038cf2dd807d1de74edb6b2e068335ae68db301ba048c515a6860b21da8313e_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list__select.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 17,  39 => 15,  33 => 14,  18 => 12,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends admin.getTemplate('base_list_field') %}

{% block field %}
    <a class=\"btn btn-primary\" href=\"{{ admin.generateUrl('list') }}\">
        <i class=\"fa fa-check\" aria-hidden=\"true\"></i>
        {{ 'list_select'|trans({}, 'SonataAdminBundle') }}
    </a>
{% endblock %}
", "SonataAdminBundle:CRUD:list__select.html.twig", "/home/kuba/Workspace/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/list__select.html.twig");
    }
}
