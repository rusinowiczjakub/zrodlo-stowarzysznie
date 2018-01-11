<?php

/* SonataBlockBundle:Block:block_core_action.html.twig */
class __TwigTemplate_5f128d7ee2bc6d01a5e89ffac3a4cdd7faa627b3f1b0d11fc511fda4fae3ef6e extends Twig_Template
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
        return $this->loadTemplate(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_block"]) || array_key_exists("sonata_block", $context) ? $context["sonata_block"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_block" does not exist.', 12, $this->getSourceContext()); })()), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_core_action.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7f8c7031bdb73340326bbd4630c4280776cb3a7c3a713359d30ea4480d16cf7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f8c7031bdb73340326bbd4630c4280776cb3a7c3a713359d30ea4480d16cf7e->enter($__internal_7f8c7031bdb73340326bbd4630c4280776cb3a7c3a713359d30ea4480d16cf7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7f8c7031bdb73340326bbd4630c4280776cb3a7c3a713359d30ea4480d16cf7e->leave($__internal_7f8c7031bdb73340326bbd4630c4280776cb3a7c3a713359d30ea4480d16cf7e_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_db108bb0e7d6db3a76ee8c6e54375c27aee82be096540055a82d8bea1c9977e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db108bb0e7d6db3a76ee8c6e54375c27aee82be096540055a82d8bea1c9977e3->enter($__internal_db108bb0e7d6db3a76ee8c6e54375c27aee82be096540055a82d8bea1c9977e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo (isset($context["content"]) || array_key_exists("content", $context) ? $context["content"] : (function () { throw new Twig_Error_Runtime('Variable "content" does not exist.', 15, $this->getSourceContext()); })());
        echo "
";
        
        $__internal_db108bb0e7d6db3a76ee8c6e54375c27aee82be096540055a82d8bea1c9977e3->leave($__internal_db108bb0e7d6db3a76ee8c6e54375c27aee82be096540055a82d8bea1c9977e3_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_core_action.html.twig";
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

{% extends sonata_block.templates.block_base %}

{% block block %}
    {{ content|raw }}
{% endblock %}
", "SonataBlockBundle:Block:block_core_action.html.twig", "/home/kuba/Workspace/vendor/sonata-project/block-bundle/src/Resources/views/Block/block_core_action.html.twig");
    }
}
