<?php

/* SonataAdminBundle:CRUD:list__batch.html.twig */
class __TwigTemplate_552437d51df9010e912e7ac726880a065d7244fee538d1b724a5eca031b98ad5 extends Twig_Template
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
        return $this->loadTemplate(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 12, $this->getSourceContext()); })()), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list__batch.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8c34af379a6f7a8a7b76c2dfff6dd97448b78ddc6b52fe1c8e0b3ba49251a63a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c34af379a6f7a8a7b76c2dfff6dd97448b78ddc6b52fe1c8e0b3ba49251a63a->enter($__internal_8c34af379a6f7a8a7b76c2dfff6dd97448b78ddc6b52fe1c8e0b3ba49251a63a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__batch.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8c34af379a6f7a8a7b76c2dfff6dd97448b78ddc6b52fe1c8e0b3ba49251a63a->leave($__internal_8c34af379a6f7a8a7b76c2dfff6dd97448b78ddc6b52fe1c8e0b3ba49251a63a_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_588456e81dadac4a94cd04afffb928450bb65e6bfb9fa644458ee0ffc18bc727 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_588456e81dadac4a94cd04afffb928450bb65e6bfb9fa644458ee0ffc18bc727->enter($__internal_588456e81dadac4a94cd04afffb928450bb65e6bfb9fa644458ee0ffc18bc727_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <input type=\"checkbox\" name=\"idx[]\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 15, $this->getSourceContext()); })()), "id", array(0 => (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new Twig_Error_Runtime('Variable "object" does not exist.', 15, $this->getSourceContext()); })())), "method"), "html", null, true);
        echo "\">
";
        
        $__internal_588456e81dadac4a94cd04afffb928450bb65e6bfb9fa644458ee0ffc18bc727->leave($__internal_588456e81dadac4a94cd04afffb928450bb65e6bfb9fa644458ee0ffc18bc727_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list__batch.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 15,  33 => 14,  18 => 12,);
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
    <input type=\"checkbox\" name=\"idx[]\" value=\"{{ admin.id(object) }}\">
{% endblock %}
", "SonataAdminBundle:CRUD:list__batch.html.twig", "/home/kuba/Workspace/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/list__batch.html.twig");
    }
}
