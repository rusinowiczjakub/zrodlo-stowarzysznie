<?php

/* SonataAdminBundle:CRUD:list_string.html.twig */
class __TwigTemplate_57a48ef1f998e6b539e2b1feabd4e3b79b945e0beea00a562ade335001737397 extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 12, $this->getSourceContext()); })()), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_string.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5c9ebc01f1b7480a3811966bc850fc9f1993a28756961841af47b9a2b9493315 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c9ebc01f1b7480a3811966bc850fc9f1993a28756961841af47b9a2b9493315->enter($__internal_5c9ebc01f1b7480a3811966bc850fc9f1993a28756961841af47b9a2b9493315_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_string.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5c9ebc01f1b7480a3811966bc850fc9f1993a28756961841af47b9a2b9493315->leave($__internal_5c9ebc01f1b7480a3811966bc850fc9f1993a28756961841af47b9a2b9493315_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_string.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  9 => 12,);
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
", "SonataAdminBundle:CRUD:list_string.html.twig", "/home/kuba/Workspace/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/list_string.html.twig");
    }
}
