<?php

/* SonataBlockBundle:Block:block_base.html.twig */
class __TwigTemplate_c260c54722418766923a59518cb8d4f02bb6f8e9fca55f523585e5de2cffbf81 extends Twig_Template
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
        $__internal_740a23a9c74a64daffa3bd487f1c9832ac3e302bbb602186551d76e1742f2f3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_740a23a9c74a64daffa3bd487f1c9832ac3e302bbb602186551d76e1742f2f3c->enter($__internal_740a23a9c74a64daffa3bd487f1c9832ac3e302bbb602186551d76e1742f2f3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_base.html.twig"));

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
        
        $__internal_740a23a9c74a64daffa3bd487f1c9832ac3e302bbb602186551d76e1742f2f3c->leave($__internal_740a23a9c74a64daffa3bd487f1c9832ac3e302bbb602186551d76e1742f2f3c_prof);

    }

    // line 12
    public function block_block($context, array $blocks = array())
    {
        $__internal_4cd0be9d3a9d4af0c645dd475ef2485039b2a5a5870e1c5d0be56c1e4d86fcdc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cd0be9d3a9d4af0c645dd475ef2485039b2a5a5870e1c5d0be56c1e4d86fcdc->enter($__internal_4cd0be9d3a9d4af0c645dd475ef2485039b2a5a5870e1c5d0be56c1e4d86fcdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        echo "EMPTY CONTENT";
        
        $__internal_4cd0be9d3a9d4af0c645dd475ef2485039b2a5a5870e1c5d0be56c1e4d86fcdc->leave($__internal_4cd0be9d3a9d4af0c645dd475ef2485039b2a5a5870e1c5d0be56c1e4d86fcdc_prof);

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
