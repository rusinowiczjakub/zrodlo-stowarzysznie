<?php

/* SonataBlockBundle:Block:block_core_text.html.twig */
class __TwigTemplate_992a54ef56770bc68bfd4e62fc15a174813180b4fdfd8f428a5a7bffd9f0863b extends Twig_Template
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
        return $this->loadTemplate(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_block"]) || array_key_exists("sonata_block", $context) ? $context["sonata_block"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_block" does not exist.', 12, $this->getSourceContext()); })()), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_core_text.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e6600fc8517c27d7cef495b6a405e2882a4c6c04370d386237d5e88c661e359d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6600fc8517c27d7cef495b6a405e2882a4c6c04370d386237d5e88c661e359d->enter($__internal_e6600fc8517c27d7cef495b6a405e2882a4c6c04370d386237d5e88c661e359d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_text.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e6600fc8517c27d7cef495b6a405e2882a4c6c04370d386237d5e88c661e359d->leave($__internal_e6600fc8517c27d7cef495b6a405e2882a4c6c04370d386237d5e88c661e359d_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_626709dce1c48f84753f69aa8e14a8797e985b682817d2a3e3c08bd6799aee4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_626709dce1c48f84753f69aa8e14a8797e985b682817d2a3e3c08bd6799aee4c->enter($__internal_626709dce1c48f84753f69aa8e14a8797e985b682817d2a3e3c08bd6799aee4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["settings"]) || array_key_exists("settings", $context) ? $context["settings"] : (function () { throw new Twig_Error_Runtime('Variable "settings" does not exist.', 15, $this->getSourceContext()); })()), "content", array());
        echo "
";
        
        $__internal_626709dce1c48f84753f69aa8e14a8797e985b682817d2a3e3c08bd6799aee4c->leave($__internal_626709dce1c48f84753f69aa8e14a8797e985b682817d2a3e3c08bd6799aee4c_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_core_text.html.twig";
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
    {{ settings.content|raw }}
{% endblock %}
", "SonataBlockBundle:Block:block_core_text.html.twig", "/home/kuba/Workspace/vendor/sonata-project/block-bundle/src/Resources/views/Block/block_core_text.html.twig");
    }
}
