<?php

/* SonataAdminBundle:Block:block_stats.html.twig */
class __TwigTemplate_2a7f81c00d7d58e512c5a51f256fc4c811b493756bd6e7f4b323edfbf4dd7a43 extends Twig_Template
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
        return $this->loadTemplate(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_block"]) || array_key_exists("sonata_block", $context) ? $context["sonata_block"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_block" does not exist.', 12, $this->getSourceContext()); })()), "templates", array()), "block_base", array()), "SonataAdminBundle:Block:block_stats.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6afc7bf8c598f9fdfd36ddd884ef9e1da1a039e4970d3260fee342e008d4edc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6afc7bf8c598f9fdfd36ddd884ef9e1da1a039e4970d3260fee342e008d4edc8->enter($__internal_6afc7bf8c598f9fdfd36ddd884ef9e1da1a039e4970d3260fee342e008d4edc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Block:block_stats.html.twig"));

        // line 14
        $context["translation_domain"] = (((twig_get_attribute($this->env, $this->getSourceContext(), ($context["settings"] ?? null), "translation_domain", array(), "any", true, true) &&  !(null === twig_get_attribute($this->env, $this->getSourceContext(), ($context["settings"] ?? null), "translation_domain", array())))) ? (twig_get_attribute($this->env, $this->getSourceContext(), ($context["settings"] ?? null), "translation_domain", array())) : (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 14, $this->getSourceContext()); })()), "translationDomain", array())));
        // line 12
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6afc7bf8c598f9fdfd36ddd884ef9e1da1a039e4970d3260fee342e008d4edc8->leave($__internal_6afc7bf8c598f9fdfd36ddd884ef9e1da1a039e4970d3260fee342e008d4edc8_prof);

    }

    // line 16
    public function block_block($context, array $blocks = array())
    {
        $__internal_15a1cee6d5042b3f980d325dda4692a0de39be2cf0d7c7bb2cf30c18550aae37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15a1cee6d5042b3f980d325dda4692a0de39be2cf0d7c7bb2cf30c18550aae37->enter($__internal_15a1cee6d5042b3f980d325dda4692a0de39be2cf0d7c7bb2cf30c18550aae37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 17
        echo "    <!-- small box -->
    <div class=\"small-box ";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["settings"]) || array_key_exists("settings", $context) ? $context["settings"] : (function () { throw new Twig_Error_Runtime('Variable "settings" does not exist.', 18, $this->getSourceContext()); })()), "color", array()), "html", null, true);
        echo "\">
        <div class=\"inner\">
            <h3>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["pager"]) || array_key_exists("pager", $context) ? $context["pager"] : (function () { throw new Twig_Error_Runtime('Variable "pager" does not exist.', 20, $this->getSourceContext()); })()), "count", array(), "method"), "html", null, true);
        echo "</h3>
            <p>
                ";
        // line 22
        if ((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 22, $this->getSourceContext()); })())) {
            // line 23
            echo "                    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["settings"]) || array_key_exists("settings", $context) ? $context["settings"] : (function () { throw new Twig_Error_Runtime('Variable "settings" does not exist.', 23, $this->getSourceContext()); })()), "text", array()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 23, $this->getSourceContext()); })())), "html", null, true);
            echo "
                ";
        } else {
            // line 25
            echo "                    ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["settings"]) || array_key_exists("settings", $context) ? $context["settings"] : (function () { throw new Twig_Error_Runtime('Variable "settings" does not exist.', 25, $this->getSourceContext()); })()), "text", array()), "html", null, true);
            echo "
                ";
        }
        // line 27
        echo "            </p>
        </div>
        <div class=\"icon\">
            <i class=\"fa ";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["settings"]) || array_key_exists("settings", $context) ? $context["settings"] : (function () { throw new Twig_Error_Runtime('Variable "settings" does not exist.', 30, $this->getSourceContext()); })()), "icon", array()), "html", null, true);
        echo "\"></i>
        </div>
        <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 32, $this->getSourceContext()); })()), "generateUrl", array(0 => "list", 1 => array("filter" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["settings"]) || array_key_exists("settings", $context) ? $context["settings"] : (function () { throw new Twig_Error_Runtime('Variable "settings" does not exist.', 32, $this->getSourceContext()); })()), "filters", array()))), "method"), "html", null, true);
        echo "\" class=\"small-box-footer\">
            ";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("stats_view_more", array(), "SonataAdminBundle"), "html", null, true);
        echo " <i class=\"fa fa-arrow-circle-right\" aria-hidden=\"true\"></i>
        </a>
    </div>
";
        
        $__internal_15a1cee6d5042b3f980d325dda4692a0de39be2cf0d7c7bb2cf30c18550aae37->leave($__internal_15a1cee6d5042b3f980d325dda4692a0de39be2cf0d7c7bb2cf30c18550aae37_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Block:block_stats.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 33,  79 => 32,  74 => 30,  69 => 27,  63 => 25,  57 => 23,  55 => 22,  50 => 20,  45 => 18,  42 => 17,  36 => 16,  29 => 12,  27 => 14,  18 => 12,);
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

{% set translation_domain = settings.translation_domain ?? admin.translationDomain %}

{% block block %}
    <!-- small box -->
    <div class=\"small-box {{ settings.color }}\">
        <div class=\"inner\">
            <h3>{{ pager.count() }}</h3>
            <p>
                {% if translation_domain %}
                    {{ settings.text|trans({}, translation_domain) }}
                {% else %}
                    {{ settings.text }}
                {% endif %}
            </p>
        </div>
        <div class=\"icon\">
            <i class=\"fa {{ settings.icon }}\"></i>
        </div>
        <a href=\"{{ admin.generateUrl('list', {filter: settings.filters}) }}\" class=\"small-box-footer\">
            {{ 'stats_view_more'|trans({}, 'SonataAdminBundle') }} <i class=\"fa fa-arrow-circle-right\" aria-hidden=\"true\"></i>
        </a>
    </div>
{% endblock %}
", "SonataAdminBundle:Block:block_stats.html.twig", "/home/kuba/Workspace/vendor/sonata-project/admin-bundle/src/Resources/views/Block/block_stats.html.twig");
    }
}