<?php

/* SonataBlockBundle:Block:block_container.html.twig */
class __TwigTemplate_7c9aae798defdd0c6814f9c178783977b9b711714fc6ea18a4eba74af44fa3ad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block_class' => array($this, 'block_block_class'),
            'block_role' => array($this, 'block_block_role'),
            'block' => array($this, 'block_block'),
            'block_child_render' => array($this, 'block_block_child_render'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_block"]) || array_key_exists("sonata_block", $context) ? $context["sonata_block"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_block" does not exist.', 12, $this->getSourceContext()); })()), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_container.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2c3773cd1f34144491ca5ec0da08037f652c012d19177db05d92527b46255ef0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c3773cd1f34144491ca5ec0da08037f652c012d19177db05d92527b46255ef0->enter($__internal_2c3773cd1f34144491ca5ec0da08037f652c012d19177db05d92527b46255ef0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_container.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2c3773cd1f34144491ca5ec0da08037f652c012d19177db05d92527b46255ef0->leave($__internal_2c3773cd1f34144491ca5ec0da08037f652c012d19177db05d92527b46255ef0_prof);

    }

    // line 15
    public function block_block_class($context, array $blocks = array())
    {
        $__internal_5e8f6fe4b1d52a95ae4294e7c2fd4930f63072072cb3c72c2e20a574fa5c64ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e8f6fe4b1d52a95ae4294e7c2fd4930f63072072cb3c72c2e20a574fa5c64ca->enter($__internal_5e8f6fe4b1d52a95ae4294e7c2fd4930f63072072cb3c72c2e20a574fa5c64ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_class"));

        echo " cms-container";
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["block"]) || array_key_exists("block", $context) ? $context["block"] : (function () { throw new Twig_Error_Runtime('Variable "block" does not exist.', 15, $this->getSourceContext()); })()), "hasParent", array(), "method")) {
            echo " cms-container-root";
        }
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["settings"]) || array_key_exists("settings", $context) ? $context["settings"] : (function () { throw new Twig_Error_Runtime('Variable "settings" does not exist.', 15, $this->getSourceContext()); })()), "class", array())) {
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["settings"]) || array_key_exists("settings", $context) ? $context["settings"] : (function () { throw new Twig_Error_Runtime('Variable "settings" does not exist.', 15, $this->getSourceContext()); })()), "class", array()), "html", null, true);
        }
        
        $__internal_5e8f6fe4b1d52a95ae4294e7c2fd4930f63072072cb3c72c2e20a574fa5c64ca->leave($__internal_5e8f6fe4b1d52a95ae4294e7c2fd4930f63072072cb3c72c2e20a574fa5c64ca_prof);

    }

    // line 18
    public function block_block_role($context, array $blocks = array())
    {
        $__internal_1218bfa9009f876bb610a172145c9dddfc5b50d971ffe1d726935ceca0632206 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1218bfa9009f876bb610a172145c9dddfc5b50d971ffe1d726935ceca0632206->enter($__internal_1218bfa9009f876bb610a172145c9dddfc5b50d971ffe1d726935ceca0632206_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_role"));

        echo "container";
        
        $__internal_1218bfa9009f876bb610a172145c9dddfc5b50d971ffe1d726935ceca0632206->leave($__internal_1218bfa9009f876bb610a172145c9dddfc5b50d971ffe1d726935ceca0632206_prof);

    }

    // line 21
    public function block_block($context, array $blocks = array())
    {
        $__internal_ce5e4a19766026bafb44c96a2d92aae2f0cb1978fdb7885f5c8e5cc2aa1f16a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce5e4a19766026bafb44c96a2d92aae2f0cb1978fdb7885f5c8e5cc2aa1f16a7->enter($__internal_ce5e4a19766026bafb44c96a2d92aae2f0cb1978fdb7885f5c8e5cc2aa1f16a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 22
        echo "    ";
        if ((isset($context["decorator"]) || array_key_exists("decorator", $context) ? $context["decorator"] : (function () { throw new Twig_Error_Runtime('Variable "decorator" does not exist.', 22, $this->getSourceContext()); })())) {
            echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["decorator"]) || array_key_exists("decorator", $context) ? $context["decorator"] : (function () { throw new Twig_Error_Runtime('Variable "decorator" does not exist.', 22, $this->getSourceContext()); })()), "pre", array());
        }
        // line 23
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["block"]) || array_key_exists("block", $context) ? $context["block"] : (function () { throw new Twig_Error_Runtime('Variable "block" does not exist.', 23, $this->getSourceContext()); })()), "children", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 24
            echo "        ";
            $this->displayBlock('block_child_render', $context, $blocks);
            // line 27
            echo "    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "    ";
        if ((isset($context["decorator"]) || array_key_exists("decorator", $context) ? $context["decorator"] : (function () { throw new Twig_Error_Runtime('Variable "decorator" does not exist.', 28, $this->getSourceContext()); })())) {
            echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["decorator"]) || array_key_exists("decorator", $context) ? $context["decorator"] : (function () { throw new Twig_Error_Runtime('Variable "decorator" does not exist.', 28, $this->getSourceContext()); })()), "post", array());
        }
        
        $__internal_ce5e4a19766026bafb44c96a2d92aae2f0cb1978fdb7885f5c8e5cc2aa1f16a7->leave($__internal_ce5e4a19766026bafb44c96a2d92aae2f0cb1978fdb7885f5c8e5cc2aa1f16a7_prof);

    }

    // line 24
    public function block_block_child_render($context, array $blocks = array())
    {
        $__internal_80c8c0a427e4b5643e45e31e940fc3732cd6ab4bb0d72511ab48b02ee41b4424 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80c8c0a427e4b5643e45e31e940fc3732cd6ab4bb0d72511ab48b02ee41b4424->enter($__internal_80c8c0a427e4b5643e45e31e940fc3732cd6ab4bb0d72511ab48b02ee41b4424_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_child_render"));

        // line 25
        echo "            ";
        echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array((isset($context["child"]) || array_key_exists("child", $context) ? $context["child"] : (function () { throw new Twig_Error_Runtime('Variable "child" does not exist.', 25, $this->getSourceContext()); })())));
        echo "
        ";
        
        $__internal_80c8c0a427e4b5643e45e31e940fc3732cd6ab4bb0d72511ab48b02ee41b4424->leave($__internal_80c8c0a427e4b5643e45e31e940fc3732cd6ab4bb0d72511ab48b02ee41b4424_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_container.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 25,  123 => 24,  113 => 28,  99 => 27,  96 => 24,  78 => 23,  73 => 22,  67 => 21,  55 => 18,  36 => 15,  21 => 12,);
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

{# block classes are prepended with a container class #}
{% block block_class %} cms-container{% if not block.hasParent() %} cms-container-root{%endif%}{% if settings.class %} {{ settings.class }}{% endif %}{% endblock %}

{# identify a block role used by the page editor #}
{% block block_role %}container{% endblock %}

{# render container block #}
{% block block %}
    {% if decorator %}{{ decorator.pre|raw }}{% endif %}
    {% for child in block.children %}
        {% block block_child_render %}
            {{ sonata_block_render(child) }}
        {% endblock %}
    {% endfor %}
    {% if decorator %}{{ decorator.post|raw }}{% endif %}
{% endblock %}
", "SonataBlockBundle:Block:block_container.html.twig", "/home/kuba/Workspace/vendor/sonata-project/block-bundle/src/Resources/views/Block/block_container.html.twig");
    }
}
