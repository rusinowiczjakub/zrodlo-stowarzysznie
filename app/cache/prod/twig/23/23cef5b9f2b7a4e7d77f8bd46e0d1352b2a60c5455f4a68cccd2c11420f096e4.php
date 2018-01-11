<?php

/* SonataBlockBundle:Block:block_base.html.twig */
class __TwigTemplate_7c1b56507c111942d9f6484f3b4df97a09ff4534aa60c38e507cf8c9100c9d87 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_549eb3c0d6d542ba8a7ddc93b0c33a6798ff4c8276445e310aa1d9a15707f2b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_549eb3c0d6d542ba8a7ddc93b0c33a6798ff4c8276445e310aa1d9a15707f2b3->enter($__internal_549eb3c0d6d542ba8a7ddc93b0c33a6798ff4c8276445e310aa1d9a15707f2b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_base.html.twig"));

        // line 11
        echo "<div id=\"cms-block-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["block"]) || array_key_exists("block", $context) ? $context["block"] : (function () { throw new Twig_Error_Runtime('Variable "block" does not exist.', 11, $this->getSourceContext()); })()), "id", array()), "html", null, true);
        echo "\" class=\"cms-block cms-block-element\">
    ";
        // line 12
        $this->displayBlock('block', $context, $blocks);
        // line 13
        echo "</div>
";
        
        $__internal_549eb3c0d6d542ba8a7ddc93b0c33a6798ff4c8276445e310aa1d9a15707f2b3->leave($__internal_549eb3c0d6d542ba8a7ddc93b0c33a6798ff4c8276445e310aa1d9a15707f2b3_prof);

    }

    // line 12
    public function block_block($context, array $blocks = array())
    {
        $__internal_9b7259cface1265c83fc90df710d86a3e567b097256c55486b0eb95fd714cd69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b7259cface1265c83fc90df710d86a3e567b097256c55486b0eb95fd714cd69->enter($__internal_9b7259cface1265c83fc90df710d86a3e567b097256c55486b0eb95fd714cd69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        echo "EMPTY CONTENT";
        
        $__internal_9b7259cface1265c83fc90df710d86a3e567b097256c55486b0eb95fd714cd69->leave($__internal_9b7259cface1265c83fc90df710d86a3e567b097256c55486b0eb95fd714cd69_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 12,  30 => 13,  28 => 12,  23 => 11,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}
<div id=\"cms-block-{{ block.id }}\" class=\"cms-block cms-block-element\">
    {% block block %}EMPTY CONTENT{% endblock %}
</div>
", "SonataBlockBundle:Block:block_base.html.twig", "/home/kuba/Workspace/vendor/sonata-project/block-bundle/src/Resources/views/Block/block_base.html.twig");
    }
}
