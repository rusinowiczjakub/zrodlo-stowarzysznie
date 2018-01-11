<?php

/* SonataAdminBundle:CRUD:base_edit_form_macro.html.twig */
class __TwigTemplate_b1993e4d06772a39a757837452457c7f6ecd1bab08988228725afa68eb5a62da extends Twig_Template
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
        $__internal_f0916464c7fc204616a3c54b7deabe93af3a5f2612dcb6e1969a653add699bf3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0916464c7fc204616a3c54b7deabe93af3a5f2612dcb6e1969a653add699bf3->enter($__internal_f0916464c7fc204616a3c54b7deabe93af3a5f2612dcb6e1969a653add699bf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_edit_form_macro.html.twig"));

        
        $__internal_f0916464c7fc204616a3c54b7deabe93af3a5f2612dcb6e1969a653add699bf3->leave($__internal_f0916464c7fc204616a3c54b7deabe93af3a5f2612dcb6e1969a653add699bf3_prof);

    }

    // line 1
    public function macro_render_groups($__admin__ = null, $__form__ = null, $__groups__ = null, $__has_tab__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "admin" => $__admin__,
            "form" => $__form__,
            "groups" => $__groups__,
            "has_tab" => $__has_tab__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_a0c85d2c435f1c73f10f0ecdb795cfa8dc3de720a9d6c9bf672ed7638936667c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_a0c85d2c435f1c73f10f0ecdb795cfa8dc3de720a9d6c9bf672ed7638936667c->enter($__internal_a0c85d2c435f1c73f10f0ecdb795cfa8dc3de720a9d6c9bf672ed7638936667c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_groups"));

            // line 2
            echo "    <div class=\"row\">

    ";
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["groups"]) || array_key_exists("groups", $context) ? $context["groups"] : (function () { throw new Twig_Error_Runtime('Variable "groups" does not exist.', 4, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["code"]) {
                if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["admin"] ?? null), "formgroups", array(), "any", false, true), $context["code"], array(), "array", true, true)) {
                    // line 5
                    echo "        ";
                    $context["form_group"] = twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 5, $this->getSourceContext()); })()), "formgroups", array()), $context["code"], array(), "array");
                    // line 6
                    echo "
        <div class=\"";
                    // line 7
                    echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["form_group"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["form_group"] ?? null), "class", array()), "col-md-12")) : ("col-md-12")), "html", null, true);
                    echo "\">
            <div class=\"";
                    // line 8
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form_group"]) || array_key_exists("form_group", $context) ? $context["form_group"] : (function () { throw new Twig_Error_Runtime('Variable "form_group" does not exist.', 8, $this->getSourceContext()); })()), "box_class", array()), "html", null, true);
                    echo "\">
                <div class=\"box-header\">
                    <h4 class=\"box-title\">
                        ";
                    // line 11
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form_group"]) || array_key_exists("form_group", $context) ? $context["form_group"] : (function () { throw new Twig_Error_Runtime('Variable "form_group" does not exist.', 11, $this->getSourceContext()); })()), "label", array()), array(), ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form_group"]) || array_key_exists("form_group", $context) ? $context["form_group"] : (function () { throw new Twig_Error_Runtime('Variable "form_group" does not exist.', 11, $this->getSourceContext()); })()), "translation_domain", array())) ? (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form_group"]) || array_key_exists("form_group", $context) ? $context["form_group"] : (function () { throw new Twig_Error_Runtime('Variable "form_group" does not exist.', 11, $this->getSourceContext()); })()), "translation_domain", array())) : (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 11, $this->getSourceContext()); })()), "translationDomain", array())))), "html", null, true);
                    echo "
                    </h4>
                </div>
                <div class=\"box-body\">
                    <div class=\"sonata-ba-collapsed-fields\">
                        ";
                    // line 16
                    if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form_group"]) || array_key_exists("form_group", $context) ? $context["form_group"] : (function () { throw new Twig_Error_Runtime('Variable "form_group" does not exist.', 16, $this->getSourceContext()); })()), "description", array())) {
                        // line 17
                        echo "                            <p>";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form_group"]) || array_key_exists("form_group", $context) ? $context["form_group"] : (function () { throw new Twig_Error_Runtime('Variable "form_group" does not exist.', 17, $this->getSourceContext()); })()), "description", array()), array(), ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form_group"]) || array_key_exists("form_group", $context) ? $context["form_group"] : (function () { throw new Twig_Error_Runtime('Variable "form_group" does not exist.', 17, $this->getSourceContext()); })()), "translation_domain", array())) ? (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form_group"]) || array_key_exists("form_group", $context) ? $context["form_group"] : (function () { throw new Twig_Error_Runtime('Variable "form_group" does not exist.', 17, $this->getSourceContext()); })()), "translation_domain", array())) : (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 17, $this->getSourceContext()); })()), "translationDomain", array())))), "html", null, true);
                        echo "</p>
                        ";
                    }
                    // line 19
                    echo "
                        ";
                    // line 20
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form_group"]) || array_key_exists("form_group", $context) ? $context["form_group"] : (function () { throw new Twig_Error_Runtime('Variable "form_group" does not exist.', 20, $this->getSourceContext()); })()), "fields", array()));
                    $context['_iterated'] = false;
                    foreach ($context['_seq'] as $context["_key"] => $context["field_name"]) {
                        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), $context["field_name"], array(), "array", true, true)) {
                            // line 21
                            echo "                            ";
                            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 21, $this->getSourceContext()); })()), $context["field_name"], array(), "array"), 'row');
                            echo "
                        ";
                            $context['_iterated'] = true;
                        }
                    }
                    if (!$context['_iterated']) {
                        // line 23
                        echo "                            <em>";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("message_form_group_empty", array(), "SonataAdminBundle"), "html", null, true);
                        echo "</em>
                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_name'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 25
                    echo "                    </div>
                </div>
            </div>
        </div>
    ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['code'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "    </div>
";
            
            $__internal_a0c85d2c435f1c73f10f0ecdb795cfa8dc3de720a9d6c9bf672ed7638936667c->leave($__internal_a0c85d2c435f1c73f10f0ecdb795cfa8dc3de720a9d6c9bf672ed7638936667c_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_edit_form_macro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 30,  113 => 25,  104 => 23,  95 => 21,  89 => 20,  86 => 19,  80 => 17,  78 => 16,  70 => 11,  64 => 8,  60 => 7,  57 => 6,  54 => 5,  49 => 4,  45 => 2,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% macro render_groups(admin, form, groups, has_tab) %}
    <div class=\"row\">

    {% for code in groups if admin.formgroups[code] is defined %}
        {% set form_group = admin.formgroups[code] %}

        <div class=\"{{ form_group.class|default('col-md-12') }}\">
            <div class=\"{{ form_group.box_class }}\">
                <div class=\"box-header\">
                    <h4 class=\"box-title\">
                        {{ form_group.label|trans({}, form_group.translation_domain ?: admin.translationDomain) }}
                    </h4>
                </div>
                <div class=\"box-body\">
                    <div class=\"sonata-ba-collapsed-fields\">
                        {% if form_group.description %}
                            <p>{{ form_group.description|trans({}, form_group.translation_domain ?: admin.translationDomain) }}</p>
                        {% endif %}

                        {% for field_name in form_group.fields if form[field_name] is defined %}
                            {{ form_row(form[field_name])}}
                        {% else %}
                            <em>{{ 'message_form_group_empty'|trans({}, 'SonataAdminBundle') }}</em>
                        {% endfor %}
                    </div>
                </div>
            </div>
        </div>
    {% endfor %}
    </div>
{% endmacro %}
", "SonataAdminBundle:CRUD:base_edit_form_macro.html.twig", "/home/kuba/Workspace/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/base_edit_form_macro.html.twig");
    }
}
