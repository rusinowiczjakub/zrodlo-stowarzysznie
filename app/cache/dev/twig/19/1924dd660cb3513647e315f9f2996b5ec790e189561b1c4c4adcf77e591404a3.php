<?php

/* SonataAdminBundle::ajax_layout.html.twig */
class __TwigTemplate_30df60f477cccd5a546b0b888f47208a80a6703e25c6675698aae19d08c5dad5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'preview' => array($this, 'block_preview'),
            'form' => array($this, 'block_form'),
            'list' => array($this, 'block_list'),
            'show' => array($this, 'block_show'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8fac9b1432790400c97d0cc36e6c33b134a9175507eb3802b46acc492caf542c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fac9b1432790400c97d0cc36e6c33b134a9175507eb3802b46acc492caf542c->enter($__internal_8fac9b1432790400c97d0cc36e6c33b134a9175507eb3802b46acc492caf542c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle::ajax_layout.html.twig"));

        // line 11
        echo "
";
        // line 12
        $this->displayBlock('content', $context, $blocks);
        
        $__internal_8fac9b1432790400c97d0cc36e6c33b134a9175507eb3802b46acc492caf542c->leave($__internal_8fac9b1432790400c97d0cc36e6c33b134a9175507eb3802b46acc492caf542c_prof);

    }

    public function block_content($context, array $blocks = array())
    {
        $__internal_5f23278bb2faaddf55957412454e9d169255f496fb7a5d4e29b8a3808e00d903 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f23278bb2faaddf55957412454e9d169255f496fb7a5d4e29b8a3808e00d903->enter($__internal_5f23278bb2faaddf55957412454e9d169255f496fb7a5d4e29b8a3808e00d903_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 13
        echo "    ";
        $context["_list_table"] = ((        $this->hasBlock("list_table", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("list_table", $context, $blocks))) : (null));
        // line 14
        echo "    ";
        $context["_list_filters"] = ((        $this->hasBlock("list_filters", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("list_filters", $context, $blocks))) : (null));
        // line 15
        echo "    ";
        $context["_list_filters_actions"] = ((        $this->hasBlock("list_filters_actions", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("list_filters_actions", $context, $blocks))) : (null));
        // line 16
        echo "
    ";
        // line 17
        $this->displayBlock('preview', $context, $blocks);
        // line 18
        echo "    ";
        $this->displayBlock('form', $context, $blocks);
        // line 19
        echo "    ";
        $this->displayBlock('list', $context, $blocks);
        // line 20
        echo "    ";
        $this->displayBlock('show', $context, $blocks);
        // line 21
        echo "
    ";
        // line 22
        if (( !twig_test_empty((isset($context["_list_table"]) || array_key_exists("_list_table", $context) ? $context["_list_table"] : (function () { throw new Twig_Error_Runtime('Variable "_list_table" does not exist.', 22, $this->getSourceContext()); })())) ||  !twig_test_empty((isset($context["_list_filters"]) || array_key_exists("_list_filters", $context) ? $context["_list_filters"] : (function () { throw new Twig_Error_Runtime('Variable "_list_filters" does not exist.', 22, $this->getSourceContext()); })())))) {
            // line 23
            echo "    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"navbar navbar-default sonata-list-table\">
                <div class=\"container-fluid\">
                    <div class=\"navbar-collapse\">
                        ";
            // line 28
            if ((((array_key_exists("admin", $context) && array_key_exists("action", $context)) && ((isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new Twig_Error_Runtime('Variable "action" does not exist.', 28, $this->getSourceContext()); })()) == "list")) && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 28, $this->getSourceContext()); })()), "listModes", array())) > 1))) {
                // line 29
                echo "                            <div class=\"nav navbar-right btn-group\">
                                ";
                // line 30
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 30, $this->getSourceContext()); })()), "listModes", array()));
                foreach ($context['_seq'] as $context["mode"] => $context["settings"]) {
                    // line 31
                    echo "                                    <a href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 31, $this->getSourceContext()); })()), "generateUrl", array(0 => "list", 1 => twig_array_merge(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 31, $this->getSourceContext()); })()), "request", array()), "query", array()), "all", array()), array("_list_mode" => $context["mode"]))), "method"), "html", null, true);
                    echo "\" class=\"btn btn-default navbar-btn btn-sm";
                    if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 31, $this->getSourceContext()); })()), "getListMode", array(), "method") == $context["mode"])) {
                        echo " active";
                    }
                    echo "\"><i class=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["settings"], "class", array()), "html", null, true);
                    echo "\"></i></a>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['mode'], $context['settings'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 33
                echo "                            </div>
                        ";
            }
            // line 35
            echo "
                        ";
            // line 36
            if ( !twig_test_empty((isset($context["_list_filters_actions"]) || array_key_exists("_list_filters_actions", $context) ? $context["_list_filters_actions"] : (function () { throw new Twig_Error_Runtime('Variable "_list_filters_actions" does not exist.', 36, $this->getSourceContext()); })()))) {
                // line 37
                echo "                            ";
                echo (isset($context["_list_filters_actions"]) || array_key_exists("_list_filters_actions", $context) ? $context["_list_filters_actions"] : (function () { throw new Twig_Error_Runtime('Variable "_list_filters_actions" does not exist.', 37, $this->getSourceContext()); })());
                echo "
                        ";
            }
            // line 39
            echo "                    </div>
                </div>
            </div>
        </div>

        ";
            // line 44
            if (twig_trim_filter((isset($context["_list_filters"]) || array_key_exists("_list_filters", $context) ? $context["_list_filters"] : (function () { throw new Twig_Error_Runtime('Variable "_list_filters" does not exist.', 44, $this->getSourceContext()); })()))) {
                // line 45
                echo "            <div class=\"row\">
                ";
                // line 46
                echo (isset($context["_list_filters"]) || array_key_exists("_list_filters", $context) ? $context["_list_filters"] : (function () { throw new Twig_Error_Runtime('Variable "_list_filters" does not exist.', 46, $this->getSourceContext()); })());
                echo "
            </div>
        ";
            }
            // line 49
            echo "
        <div class=\"row\">
            ";
            // line 51
            echo (isset($context["_list_table"]) || array_key_exists("_list_table", $context) ? $context["_list_table"] : (function () { throw new Twig_Error_Runtime('Variable "_list_table" does not exist.', 51, $this->getSourceContext()); })());
            echo "
        </div>
    </div>
    ";
        }
        
        $__internal_5f23278bb2faaddf55957412454e9d169255f496fb7a5d4e29b8a3808e00d903->leave($__internal_5f23278bb2faaddf55957412454e9d169255f496fb7a5d4e29b8a3808e00d903_prof);

    }

    // line 17
    public function block_preview($context, array $blocks = array())
    {
        $__internal_edb6f1bd82a9f217aa85a1fd1a3a3370a73507a94daac7dd365c5ce48132a451 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edb6f1bd82a9f217aa85a1fd1a3a3370a73507a94daac7dd365c5ce48132a451->enter($__internal_edb6f1bd82a9f217aa85a1fd1a3a3370a73507a94daac7dd365c5ce48132a451_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "preview"));

        
        $__internal_edb6f1bd82a9f217aa85a1fd1a3a3370a73507a94daac7dd365c5ce48132a451->leave($__internal_edb6f1bd82a9f217aa85a1fd1a3a3370a73507a94daac7dd365c5ce48132a451_prof);

    }

    // line 18
    public function block_form($context, array $blocks = array())
    {
        $__internal_6af4b68924ed774b9ecae76f5b7c5a218482c6e761a673b4ae08577953d5ec98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6af4b68924ed774b9ecae76f5b7c5a218482c6e761a673b4ae08577953d5ec98->enter($__internal_6af4b68924ed774b9ecae76f5b7c5a218482c6e761a673b4ae08577953d5ec98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        
        $__internal_6af4b68924ed774b9ecae76f5b7c5a218482c6e761a673b4ae08577953d5ec98->leave($__internal_6af4b68924ed774b9ecae76f5b7c5a218482c6e761a673b4ae08577953d5ec98_prof);

    }

    // line 19
    public function block_list($context, array $blocks = array())
    {
        $__internal_3d63d9e64fc5e41b34d57a6b47e50cf07091600da55746181d5790f9ce30e25f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d63d9e64fc5e41b34d57a6b47e50cf07091600da55746181d5790f9ce30e25f->enter($__internal_3d63d9e64fc5e41b34d57a6b47e50cf07091600da55746181d5790f9ce30e25f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

        
        $__internal_3d63d9e64fc5e41b34d57a6b47e50cf07091600da55746181d5790f9ce30e25f->leave($__internal_3d63d9e64fc5e41b34d57a6b47e50cf07091600da55746181d5790f9ce30e25f_prof);

    }

    // line 20
    public function block_show($context, array $blocks = array())
    {
        $__internal_885a4de9b723aff024e90a4ec294effe4046f0c2cafbcdfe967a9f11d1299591 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_885a4de9b723aff024e90a4ec294effe4046f0c2cafbcdfe967a9f11d1299591->enter($__internal_885a4de9b723aff024e90a4ec294effe4046f0c2cafbcdfe967a9f11d1299591_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show"));

        
        $__internal_885a4de9b723aff024e90a4ec294effe4046f0c2cafbcdfe967a9f11d1299591->leave($__internal_885a4de9b723aff024e90a4ec294effe4046f0c2cafbcdfe967a9f11d1299591_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle::ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  183 => 20,  172 => 19,  161 => 18,  150 => 17,  138 => 51,  134 => 49,  128 => 46,  125 => 45,  123 => 44,  116 => 39,  110 => 37,  108 => 36,  105 => 35,  101 => 33,  86 => 31,  82 => 30,  79 => 29,  77 => 28,  70 => 23,  68 => 22,  65 => 21,  62 => 20,  59 => 19,  56 => 18,  54 => 17,  51 => 16,  48 => 15,  45 => 14,  42 => 13,  30 => 12,  27 => 11,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% block content %}
    {% set _list_table = block('list_table') is defined ? block('list_table')|trim : null %}
    {% set _list_filters = block('list_filters') is defined ? block('list_filters')|trim : null %}
    {% set _list_filters_actions = block('list_filters_actions') is defined ? block('list_filters_actions')|trim : null %}

    {% block preview %}{% endblock %}
    {% block form %}{% endblock %}
    {% block list %}{% endblock %}
    {% block show %}{% endblock %}

    {% if _list_table is not empty or _list_filters is not empty %}
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"navbar navbar-default sonata-list-table\">
                <div class=\"container-fluid\">
                    <div class=\"navbar-collapse\">
                        {% if admin is defined and action is defined and action == 'list' and admin.listModes|length > 1 %}
                            <div class=\"nav navbar-right btn-group\">
                                {% for mode, settings in admin.listModes %}
                                    <a href=\"{{ admin.generateUrl('list', app.request.query.all|merge({_list_mode: mode})) }}\" class=\"btn btn-default navbar-btn btn-sm{% if admin.getListMode() == mode %} active{% endif %}\"><i class=\"{{ settings.class }}\"></i></a>
                                {% endfor %}
                            </div>
                        {% endif %}

                        {% if _list_filters_actions is not empty %}
                            {{ _list_filters_actions|raw }}
                        {% endif %}
                    </div>
                </div>
            </div>
        </div>

        {% if _list_filters|trim %}
            <div class=\"row\">
                {{ _list_filters|raw }}
            </div>
        {% endif %}

        <div class=\"row\">
            {{ _list_table|raw }}
        </div>
    </div>
    {% endif %}
{% endblock %}
", "SonataAdminBundle::ajax_layout.html.twig", "/home/kuba/Workspace/vendor/sonata-project/admin-bundle/src/Resources/views/ajax_layout.html.twig");
    }
}
