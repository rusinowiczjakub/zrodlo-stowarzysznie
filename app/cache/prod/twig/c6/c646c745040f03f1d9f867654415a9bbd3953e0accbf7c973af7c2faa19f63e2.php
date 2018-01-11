<?php

/* SonataCoreBundle:FlashMessage:render.html.twig */
class __TwigTemplate_68e48a7763b6933e52bc8d404bb6cc9b71e52c8c17fefadb3fad4015d6dbf025 extends Twig_Template
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
        $__internal_575bec1fcc74e53b98ab56094b8b2990e61a231acd918c270be126c8cda9e30a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_575bec1fcc74e53b98ab56094b8b2990e61a231acd918c270be126c8cda9e30a->enter($__internal_575bec1fcc74e53b98ab56094b8b2990e61a231acd918c270be126c8cda9e30a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataCoreBundle:FlashMessage:render.html.twig"));

        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('Sonata\CoreBundle\Twig\Extension\FlashMessageExtension')->getFlashMessagesTypes());
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 12
            echo "    ";
            $context["domain"] = ((array_key_exists("domain", $context)) ? ((isset($context["domain"]) || array_key_exists("domain", $context) ? $context["domain"] : (function () { throw new Twig_Error_Runtime('Variable "domain" does not exist.', 12, $this->getSourceContext()); })())) : (null));
            // line 13
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->env->getExtension('Sonata\CoreBundle\Twig\Extension\FlashMessageExtension')->getFlashMessages($context["type"], (isset($context["domain"]) || array_key_exists("domain", $context) ? $context["domain"] : (function () { throw new Twig_Error_Runtime('Variable "domain" does not exist.', 13, $this->getSourceContext()); })())));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 14
                echo "        <div class=\"alert alert-";
                echo twig_escape_filter($this->env, $this->env->getExtension('Sonata\CoreBundle\Twig\Extension\StatusExtension')->statusClass($context["type"]), "html", null, true);
                echo " alert-dismissable\">
            <button
                type=\"button\"
                class=\"close\"
                data-dismiss=\"alert\"
                aria-hidden=\"true\"
                aria-label=\"";
                // line 20
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("message_close", array(), "SonataCoreBundle"), "html", null, true);
                echo "\"
            >&times;</button>
            ";
                // line 22
                echo $context["message"];
                echo "
        </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_575bec1fcc74e53b98ab56094b8b2990e61a231acd918c270be126c8cda9e30a->leave($__internal_575bec1fcc74e53b98ab56094b8b2990e61a231acd918c270be126c8cda9e30a_prof);

    }

    public function getTemplateName()
    {
        return "SonataCoreBundle:FlashMessage:render.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 22,  44 => 20,  34 => 14,  29 => 13,  26 => 12,  22 => 11,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}
{% for type in sonata_flashmessages_types() %}
    {% set domain = domain is defined ? domain : null %}
    {% for message in sonata_flashmessages_get(type, domain) %}
        <div class=\"alert alert-{{ type|sonata_status_class }} alert-dismissable\">
            <button
                type=\"button\"
                class=\"close\"
                data-dismiss=\"alert\"
                aria-hidden=\"true\"
                aria-label=\"{{ 'message_close'|trans({}, 'SonataCoreBundle') }}\"
            >&times;</button>
            {{ message|raw }}
        </div>
    {% endfor %}
{% endfor %}
", "SonataCoreBundle:FlashMessage:render.html.twig", "/home/kuba/Workspace/vendor/sonata-project/core-bundle/src/Resources/views/FlashMessage/render.html.twig");
    }
}
