<?php

/* SonataBlockBundle:Block:block_exception_debug.html.twig */
class __TwigTemplate_dff853a5e273fefab441702eb8abce6d70d6df395d9d0bc3f5aff1b63cc7a835 extends Twig_Template
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
        return $this->loadTemplate(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_block"]) || array_key_exists("sonata_block", $context) ? $context["sonata_block"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_block" does not exist.', 12, $this->getSourceContext()); })()), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_exception_debug.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_92b3aeb20e8216ee98746c249ae9f7380ef3ffc21c8999d8c4f4bbf91c52dc83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92b3aeb20e8216ee98746c249ae9f7380ef3ffc21c8999d8c4f4bbf91c52dc83->enter($__internal_92b3aeb20e8216ee98746c249ae9f7380ef3ffc21c8999d8c4f4bbf91c52dc83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_exception_debug.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_92b3aeb20e8216ee98746c249ae9f7380ef3ffc21c8999d8c4f4bbf91c52dc83->leave($__internal_92b3aeb20e8216ee98746c249ae9f7380ef3ffc21c8999d8c4f4bbf91c52dc83_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_00fb4a36a6eb983379d8ff78420184a125139f01908828f4b18c1f0f5610734b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00fb4a36a6eb983379d8ff78420184a125139f01908828f4b18c1f0f5610734b->enter($__internal_00fb4a36a6eb983379d8ff78420184a125139f01908828f4b18c1f0f5610734b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    <div class=\"cms-block-exception\" ";
        if ((isset($context["forceStyle"]) || array_key_exists("forceStyle", $context) ? $context["forceStyle"] : (function () { throw new Twig_Error_Runtime('Variable "forceStyle" does not exist.', 15, $this->getSourceContext()); })())) {
            echo "style=\"overflow-y: scroll; min-width: 300px; max-height: 300px;\"";
        }
        echo ">

        ";
        // line 18
        echo "        ";
        if ((isset($context["forceStyle"]) || array_key_exists("forceStyle", $context) ? $context["forceStyle"] : (function () { throw new Twig_Error_Runtime('Variable "forceStyle" does not exist.', 18, $this->getSourceContext()); })())) {
            // line 19
            echo "            <link href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception_layout.css"), "html", null, true);
            echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
            <link href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css"), "html", null, true);
            echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
        ";
        }
        // line 22
        echo "        ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "SonataBlockBundle:Block:block_exception_debug.html.twig", 22)->display($context);
        // line 23
        echo "    </div>
";
        
        $__internal_00fb4a36a6eb983379d8ff78420184a125139f01908828f4b18c1f0f5610734b->leave($__internal_00fb4a36a6eb983379d8ff78420184a125139f01908828f4b18c1f0f5610734b_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_exception_debug.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 23,  60 => 22,  55 => 20,  50 => 19,  47 => 18,  39 => 15,  33 => 14,  18 => 12,);
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
    <div class=\"cms-block-exception\" {% if forceStyle %}style=\"overflow-y: scroll; min-width: 300px; max-height: 300px;\"{% endif %}>

        {# this is dirty but the alternative would require a new block-optimized exception css #}
        {% if forceStyle %}
            <link href=\"{{ asset('bundles/framework/css/exception_layout.css') }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
            <link href=\"{{ asset('bundles/framework/css/exception.css') }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
        {% endif %}
        {% include 'TwigBundle:Exception:exception.html.twig' %}
    </div>
{% endblock %}
", "SonataBlockBundle:Block:block_exception_debug.html.twig", "/home/kuba/Workspace/vendor/sonata-project/block-bundle/src/Resources/views/Block/block_exception_debug.html.twig");
    }
}
