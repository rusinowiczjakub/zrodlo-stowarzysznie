<?php

/* SonataAdminBundle:Core:search.html.twig */
class __TwigTemplate_708f17c3bdee5d108bdb7979ec45789e5ed1b9bed03ebc42f2f02ffd59579d64 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) || array_key_exists("base_template", $context) ? $context["base_template"] : (function () { throw new Twig_Error_Runtime('Variable "base_template" does not exist.', 12, $this->getSourceContext()); })()), "SonataAdminBundle:Core:search.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c8ffd07f46c9fef1eb25bf590524bcdc9c62981fa22f12d7de56b8cebbe1b083 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8ffd07f46c9fef1eb25bf590524bcdc9c62981fa22f12d7de56b8cebbe1b083->enter($__internal_c8ffd07f46c9fef1eb25bf590524bcdc9c62981fa22f12d7de56b8cebbe1b083_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:search.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c8ffd07f46c9fef1eb25bf590524bcdc9c62981fa22f12d7de56b8cebbe1b083->leave($__internal_c8ffd07f46c9fef1eb25bf590524bcdc9c62981fa22f12d7de56b8cebbe1b083_prof);

    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        $__internal_3f2ee960d6179fc7835d0f872e4bd21d985eb8fd25a89e0602f5f259a5ee5d30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f2ee960d6179fc7835d0f872e4bd21d985eb8fd25a89e0602f5f259a5ee5d30->enter($__internal_3f2ee960d6179fc7835d0f872e4bd21d985eb8fd25a89e0602f5f259a5ee5d30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_search_results", array("%query%" => (isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new Twig_Error_Runtime('Variable "query" does not exist.', 14, $this->getSourceContext()); })())), "SonataAdminBundle"), "html", null, true);
        
        $__internal_3f2ee960d6179fc7835d0f872e4bd21d985eb8fd25a89e0602f5f259a5ee5d30->leave($__internal_3f2ee960d6179fc7835d0f872e4bd21d985eb8fd25a89e0602f5f259a5ee5d30_prof);

    }

    // line 15
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_db58592d761e303e6b26c40354e719bb3c95aaf2cf5463b930cf17aec96cef48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db58592d761e303e6b26c40354e719bb3c95aaf2cf5463b930cf17aec96cef48->enter($__internal_db58592d761e303e6b26c40354e719bb3c95aaf2cf5463b930cf17aec96cef48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        
        $__internal_db58592d761e303e6b26c40354e719bb3c95aaf2cf5463b930cf17aec96cef48->leave($__internal_db58592d761e303e6b26c40354e719bb3c95aaf2cf5463b930cf17aec96cef48_prof);

    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
        $__internal_4ec18d5da9d712bfbd7582ca52c3d73f4f38747bfe0644e95b69d9102dd612a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ec18d5da9d712bfbd7582ca52c3d73f4f38747bfe0644e95b69d9102dd612a0->enter($__internal_4ec18d5da9d712bfbd7582ca52c3d73f4f38747bfe0644e95b69d9102dd612a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 17
        echo "    <h2 class=\"page-header\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_search_results", array("%query%" => (isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new Twig_Error_Runtime('Variable "query" does not exist.', 17, $this->getSourceContext()); })())), "SonataAdminBundle"), "html", null, true);
        echo "</h2>

    ";
        // line 19
        if ((array_key_exists("query", $context) &&  !((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new Twig_Error_Runtime('Variable "query" does not exist.', 19, $this->getSourceContext()); })()) === false))) {
            // line 20
            echo "        ";
            $context["count"] = 0;
            // line 21
            echo "        <div class=\"row\" data-masonry='{ \"itemSelector\": \".search-box-item\" }'>
        ";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["groups"]) || array_key_exists("groups", $context) ? $context["groups"] : (function () { throw new Twig_Error_Runtime('Variable "groups" does not exist.', 22, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 23
                echo "            ";
                $context["display"] = (twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), $context["group"], "roles", array())) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 23, $this->getSourceContext()); })()), "adminPool", array()), "getOption", array(0 => "role_super_admin"), "method")));
                // line 24
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), $context["group"], "roles", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                    if ( !(isset($context["display"]) || array_key_exists("display", $context) ? $context["display"] : (function () { throw new Twig_Error_Runtime('Variable "display" does not exist.', 24, $this->getSourceContext()); })())) {
                        // line 25
                        echo "                ";
                        $context["display"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted($context["role"]);
                        // line 26
                        echo "            ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 27
                echo "
            ";
                // line 28
                if ((isset($context["display"]) || array_key_exists("display", $context) ? $context["display"] : (function () { throw new Twig_Error_Runtime('Variable "display" does not exist.', 28, $this->getSourceContext()); })())) {
                    // line 29
                    echo "                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), $context["group"], "items", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
                        // line 30
                        echo "                    ";
                        $context["count"] = ((isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 30, $this->getSourceContext()); })()) + 1);
                        // line 31
                        echo "                    ";
                        if (((twig_get_attribute($this->env, $this->getSourceContext(), $context["admin"], "hasRoute", array(0 => "create"), "method") && twig_get_attribute($this->env, $this->getSourceContext(), $context["admin"], "hasAccess", array(0 => "create"), "method")) || (twig_get_attribute($this->env, $this->getSourceContext(), $context["admin"], "hasRoute", array(0 => "list"), "method") && twig_get_attribute($this->env, $this->getSourceContext(), $context["admin"], "hasAccess", array(0 => "list"), "method")))) {
                            // line 32
                            echo "                        ";
                            echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array(array("type" => "sonata.admin.block.search_result"), array("query" =>                             // line 35
(isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new Twig_Error_Runtime('Variable "query" does not exist.', 35, $this->getSourceContext()); })()), "admin_code" => twig_get_attribute($this->env, $this->getSourceContext(),                             // line 36
$context["admin"], "code", array()), "page" => 0, "per_page" => 10, "icon" => twig_get_attribute($this->env, $this->getSourceContext(),                             // line 39
$context["group"], "icon", array()))));
                            // line 40
                            echo "
                    ";
                        }
                        // line 42
                        echo "                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 43
                    echo "            ";
                }
                // line 44
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "        </div>
    ";
        }
        // line 47
        echo "
";
        
        $__internal_4ec18d5da9d712bfbd7582ca52c3d73f4f38747bfe0644e95b69d9102dd612a0->leave($__internal_4ec18d5da9d712bfbd7582ca52c3d73f4f38747bfe0644e95b69d9102dd612a0_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Core:search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 47,  142 => 45,  136 => 44,  133 => 43,  127 => 42,  123 => 40,  121 => 39,  120 => 36,  119 => 35,  117 => 32,  114 => 31,  111 => 30,  106 => 29,  104 => 28,  101 => 27,  94 => 26,  91 => 25,  85 => 24,  82 => 23,  78 => 22,  75 => 21,  72 => 20,  70 => 19,  64 => 17,  58 => 16,  47 => 15,  35 => 14,  20 => 12,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends base_template %}

{% block title %}{{ 'title_search_results'|trans({'%query%': query}, 'SonataAdminBundle') }}{% endblock %}
{% block breadcrumb %}{% endblock %}
{% block content %}
    <h2 class=\"page-header\">{{ 'title_search_results'|trans({'%query%': query}, 'SonataAdminBundle') }}</h2>

    {% if query is defined and query is not same as(false) %}
        {% set count = 0 %}
        <div class=\"row\" data-masonry='{ \"itemSelector\": \".search-box-item\" }'>
        {% for group in groups %}
            {% set display = (group.roles is empty or is_granted(sonata_admin.adminPool.getOption('role_super_admin')) ) %}
            {% for role in group.roles if not display %}
                {% set display = is_granted(role) %}
            {% endfor %}

            {% if display %}
                {% for admin in group.items %}
                    {% set count = count + 1 %}
                    {% if admin.hasRoute('create') and admin.hasAccess('create') or admin.hasRoute('list') and admin.hasAccess('list') %}
                        {{ sonata_block_render({
                            'type': 'sonata.admin.block.search_result'
                        }, {
                            'query': query,
                            'admin_code': admin.code,
                            'page': 0,
                            'per_page': 10,
                            'icon': group.icon
                        }) }}
                    {% endif %}
                {% endfor %}
            {% endif %}
        {% endfor %}
        </div>
    {% endif %}

{% endblock %}
", "SonataAdminBundle:Core:search.html.twig", "/home/kuba/Workspace/vendor/sonata-project/admin-bundle/src/Resources/views/Core/search.html.twig");
    }
}
