<?php

/* SonataBlockBundle:Block:block_exception.html.twig */
class __TwigTemplate_0397650ee6d46225766dc262d1d56671bb9adf2d44a12d5ce5aee86c5181ef13 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_block"]) || array_key_exists("sonata_block", $context) ? $context["sonata_block"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_block" does not exist.', 12, $this->getSourceContext()); })()), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_exception.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_46462f8e9feac6a370ea8cfa647a61a3c10c2a382f31c0ef67c5bfc4719c72b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46462f8e9feac6a370ea8cfa647a61a3c10c2a382f31c0ef67c5bfc4719c72b5->enter($__internal_46462f8e9feac6a370ea8cfa647a61a3c10c2a382f31c0ef67c5bfc4719c72b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_exception.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_46462f8e9feac6a370ea8cfa647a61a3c10c2a382f31c0ef67c5bfc4719c72b5->leave($__internal_46462f8e9feac6a370ea8cfa647a61a3c10c2a382f31c0ef67c5bfc4719c72b5_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_8c502ae9e5ac0035a8e901c493ab6691f542f68da042f8e5eb987c907466f82c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c502ae9e5ac0035a8e901c493ab6691f542f68da042f8e5eb987c907466f82c->enter($__internal_8c502ae9e5ac0035a8e901c493ab6691f542f68da042f8e5eb987c907466f82c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    <div class=\"cms-block-exception\">
        <h2>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["block"]) || array_key_exists("block", $context) ? $context["block"] : (function () { throw new Twig_Error_Runtime('Variable "block" does not exist.', 16, $this->getSourceContext()); })()), "name", array()), "html", null, true);
        echo "</h2>
        <h3>";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 17, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo "</h3>
    </div>
";
        
        $__internal_8c502ae9e5ac0035a8e901c493ab6691f542f68da042f8e5eb987c907466f82c->leave($__internal_8c502ae9e5ac0035a8e901c493ab6691f542f68da042f8e5eb987c907466f82c_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 17,  42 => 16,  39 => 15,  33 => 14,  18 => 12,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends sonata_block.templates.block_base %}

{% block block %}
    <div class=\"cms-block-exception\">
        <h2>{{ block.name }}</h2>
        <h3>{{ exception.message }}</h3>
    </div>
{% endblock %}
", "SonataBlockBundle:Block:block_exception.html.twig", "/home/kuba/Workspace/vendor/sonata-project/block-bundle/src/Resources/views/Block/block_exception.html.twig");
    }
}
