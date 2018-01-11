<?php

/* SonataAdminBundle:CRUD:history_revision_timestamp.html.twig */
class __TwigTemplate_9c70b8f23698626f46c9743989c1e0297fed9007be93a731d4e1af214f257f46 extends Twig_Template
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
        $__internal_e85380056e62e86943385c2df4559b31d3975b9fca6edbb1f8f1a3fb0376123f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e85380056e62e86943385c2df4559b31d3975b9fca6edbb1f8f1a3fb0376123f->enter($__internal_e85380056e62e86943385c2df4559b31d3975b9fca6edbb1f8f1a3fb0376123f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:history_revision_timestamp.html.twig"));

        // line 11
        echo "
";
        // line 12
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["revision"]) || array_key_exists("revision", $context) ? $context["revision"] : (function () { throw new Twig_Error_Runtime('Variable "revision" does not exist.', 12, $this->getSourceContext()); })()), "timestamp", array())), "html", null, true);
        echo "
";
        
        $__internal_e85380056e62e86943385c2df4559b31d3975b9fca6edbb1f8f1a3fb0376123f->leave($__internal_e85380056e62e86943385c2df4559b31d3975b9fca6edbb1f8f1a3fb0376123f_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:history_revision_timestamp.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 12,  22 => 11,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{{ revision.timestamp|date }}
", "SonataAdminBundle:CRUD:history_revision_timestamp.html.twig", "/home/kuba/Workspace/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/history_revision_timestamp.html.twig");
    }
}
