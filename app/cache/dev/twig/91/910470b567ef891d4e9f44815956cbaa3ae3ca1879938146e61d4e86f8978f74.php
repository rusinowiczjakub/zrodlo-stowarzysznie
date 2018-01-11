<?php

/* LiplexMultipleFileUploadBundle:Admin/CRUD:show_multiple_image_view.html.twig */
class __TwigTemplate_76f8976f773466435194264b8ff7cbcf906fe126bd03e0860716c641f9584c66 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "LiplexMultipleFileUploadBundle:Admin/CRUD:show_multiple_image_view.html.twig", 1);
        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f455f4a0ebf8d550e1400bc203c0117f87bda45e46605448318d771267eda262 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f455f4a0ebf8d550e1400bc203c0117f87bda45e46605448318d771267eda262->enter($__internal_f455f4a0ebf8d550e1400bc203c0117f87bda45e46605448318d771267eda262_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LiplexMultipleFileUploadBundle:Admin/CRUD:show_multiple_image_view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f455f4a0ebf8d550e1400bc203c0117f87bda45e46605448318d771267eda262->leave($__internal_f455f4a0ebf8d550e1400bc203c0117f87bda45e46605448318d771267eda262_prof);

    }

    // line 3
    public function block_field($context, array $blocks = array())
    {
        $__internal_eaf572b695fc9eb6f65134051a406ff9d9827dcb736dccfda20baff8792f0a3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eaf572b695fc9eb6f65134051a406ff9d9827dcb736dccfda20baff8792f0a3d->enter($__internal_eaf572b695fc9eb6f65134051a406ff9d9827dcb736dccfda20baff8792f0a3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 4
        echo "    <div class=\"multiple-image-view\"
         ng-controller=\"MultipleFileUploadCtrl as ctrl\"
         ng-init=\"ctrl.images = [";
        // line 6
        ob_start();
        // line 7
        echo "         ";
        if (((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "vars", array(), "any", false, true), "single_upload", array(), "any", true, true) && twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 7, $this->getSourceContext()); })()), "vars", array()), "single_upload", array())) || (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["field_description"] ?? null), "options", array(), "any", false, true), "single_upload", array(), "any", true, true) && twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new Twig_Error_Runtime('Variable "field_description" does not exist.', 7, $this->getSourceContext()); })()), "options", array()), "single_upload", array())))) {
            // line 8
            echo "             ";
            if ((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 8, $this->getSourceContext()); })())) {
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 8, $this->getSourceContext()); })()), "id", array()), "html", null, true);
            }
            // line 9
            echo "         ";
        } else {
            // line 10
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 10, $this->getSourceContext()); })()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["image"], "id", array()), "html", null, true);
                if ( !twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "last", array())) {
                    echo ",";
                }
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 11
            echo "         ";
        }
        // line 12
        echo "         ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        echo "];\"
    >
        <div class=\"row\">
            ";
        // line 15
        if ((twig_length_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 15, $this->getSourceContext()); })())) == 0)) {
            echo "-";
        }
        // line 16
        echo "            <div class=\"col-md-2 col-sm-4 col-xs-6\" ng-repeat=\"imageId in ctrl.images\">
                <div class=\"button-container\">
                    <img ng-src=\"/api/multiple-file-upload/image/[[ imageId ]]\" class=\"thumbnail\" />
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_eaf572b695fc9eb6f65134051a406ff9d9827dcb736dccfda20baff8792f0a3d->leave($__internal_eaf572b695fc9eb6f65134051a406ff9d9827dcb736dccfda20baff8792f0a3d_prof);

    }

    public function getTemplateName()
    {
        return "LiplexMultipleFileUploadBundle:Admin/CRUD:show_multiple_image_view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 16,  101 => 15,  94 => 12,  91 => 11,  57 => 10,  54 => 9,  49 => 8,  46 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'SonataAdminBundle:CRUD:base_show_field.html.twig' %}

{% block field%}
    <div class=\"multiple-image-view\"
         ng-controller=\"MultipleFileUploadCtrl as ctrl\"
         ng-init=\"ctrl.images = [{% spaceless %}
         {% if (form.vars.single_upload is defined and form.vars.single_upload) or (field_description.options.single_upload is defined and field_description.options.single_upload) %}
             {% if value %}{{ value.id }}{% endif %}
         {% else %}
            {% for image in value %}{{ image.id }}{% if not loop.last %},{% endif %}{% endfor %}
         {% endif %}
         {% endspaceless %}];\"
    >
        <div class=\"row\">
            {% if value|length == 0 %}-{% endif %}
            <div class=\"col-md-2 col-sm-4 col-xs-6\" ng-repeat=\"imageId in ctrl.images\">
                <div class=\"button-container\">
                    <img ng-src=\"/api/multiple-file-upload/image/[[ imageId ]]\" class=\"thumbnail\" />
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "LiplexMultipleFileUploadBundle:Admin/CRUD:show_multiple_image_view.html.twig", "/home/kuba/Workspace/vendor/liplex/multiple-file-upload-bundle/Liplex/MultipleFileUploadBundle/Resources/views/Admin/CRUD/show_multiple_image_view.html.twig");
    }
}
