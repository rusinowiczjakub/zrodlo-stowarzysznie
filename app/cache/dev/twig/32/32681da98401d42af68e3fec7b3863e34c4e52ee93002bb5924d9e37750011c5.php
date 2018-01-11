<?php

/* SonataAdminBundle:CRUD:list__batch.html.twig */
class __TwigTemplate_3bd098e5a15bfbdb9a6e59d2c3eec5f7979afd1d57457fa2ad556fc3c0470b0a extends Twig_Template
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
        $__internal_ac51edba621d9d1a65d09547269d2f0442e1231f3c3c0df3c7f12e1f410431a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac51edba621d9d1a65d09547269d2f0442e1231f3c3c0df3c7f12e1f410431a5->enter($__internal_ac51edba621d9d1a65d09547269d2f0442e1231f3c3c0df3c7f12e1f410431a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__batch.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ac51edba621d9d1a65d09547269d2f0442e1231f3c3c0df3c7f12e1f410431a5->leave($__internal_ac51edba621d9d1a65d09547269d2f0442e1231f3c3c0df3c7f12e1f410431a5_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_4c254cb10578df8453a492df7eb7666ca0d40fbef5c66c924afdc208a6c19a91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c254cb10578df8453a492df7eb7666ca0d40fbef5c66c924afdc208a6c19a91->enter($__internal_4c254cb10578df8453a492df7eb7666ca0d40fbef5c66c924afdc208a6c19a91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <input type=\"checkbox\" name=\"idx[]\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 15, $this->getSourceContext()); })()), "id", array(0 => (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new Twig_Error_Runtime('Variable "object" does not exist.', 15, $this->getSourceContext()); })())), "method"), "html", null, true);
        echo "\">
";
        
        $__internal_4c254cb10578df8453a492df7eb7666ca0d40fbef5c66c924afdc208a6c19a91->leave($__internal_4c254cb10578df8453a492df7eb7666ca0d40fbef5c66c924afdc208a6c19a91_prof);

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
