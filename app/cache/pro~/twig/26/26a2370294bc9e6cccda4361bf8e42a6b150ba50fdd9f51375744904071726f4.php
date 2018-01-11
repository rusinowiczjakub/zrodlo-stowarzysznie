<?php

/* SonataBlockBundle:Block:block_base.html.twig */
class __TwigTemplate_5335edb993ebcbfe974bc38e2ce64679142b85d1655fb9869835f20dbbe69057 extends Twig_Template
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
        $__internal_ce5aa5546f684b1f36385c4ddb0962fa3d83f81804b161d4d75dcfdd89ab4bc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce5aa5546f684b1f36385c4ddb0962fa3d83f81804b161d4d75dcfdd89ab4bc8->enter($__internal_ce5aa5546f684b1f36385c4ddb0962fa3d83f81804b161d4d75dcfdd89ab4bc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_base.html.twig"));

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
        
        $__internal_ce5aa5546f684b1f36385c4ddb0962fa3d83f81804b161d4d75dcfdd89ab4bc8->leave($__internal_ce5aa5546f684b1f36385c4ddb0962fa3d83f81804b161d4d75dcfdd89ab4bc8_prof);

    }

    // line 12
    public function block_block($context, array $blocks = array())
    {
        $__internal_ccc404bb408ecde8c812086099fe5604619338e439f034d7bb3378d01ab51fce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ccc404bb408ecde8c812086099fe5604619338e439f034d7bb3378d01ab51fce->enter($__internal_ccc404bb408ecde8c812086099fe5604619338e439f034d7bb3378d01ab51fce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        echo "EMPTY CONTENT";
        
        $__internal_ccc404bb408ecde8c812086099fe5604619338e439f034d7bb3378d01ab51fce->leave($__internal_ccc404bb408ecde8c812086099fe5604619338e439f034d7bb3378d01ab51fce_prof);

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
", "SonataBlockBundle:Block:block_base.html.twig", "/home/kuba/zrodlo/vendor/sonata-project/block-bundle/src/Resources/views/Block/block_base.html.twig");
    }
}
