<?php

/* SonataAdminBundle:CRUD:base_array_macro.html.twig */
class __TwigTemplate_40a2c90f21ca802b8cfff37447f70a5d5e649619a81016c762ecc58067b5be10 extends Twig_Template
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
        $__internal_aa86fd6eb5a0df7d8e2ac328d434ca01c8d950805cb44140b72ff32ef4ff1861 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa86fd6eb5a0df7d8e2ac328d434ca01c8d950805cb44140b72ff32ef4ff1861->enter($__internal_aa86fd6eb5a0df7d8e2ac328d434ca01c8d950805cb44140b72ff32ef4ff1861_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_array_macro.html.twig"));

        
        $__internal_aa86fd6eb5a0df7d8e2ac328d434ca01c8d950805cb44140b72ff32ef4ff1861->leave($__internal_aa86fd6eb5a0df7d8e2ac328d434ca01c8d950805cb44140b72ff32ef4ff1861_prof);

    }

    // line 11
    public function macro_render_array($__value__ = null, $__inline__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "value" => $__value__,
            "inline" => $__inline__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_9818da4528ea873cfed2a2d351865d788d4baefd4fe66ceb15fd1d652334535f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_9818da4528ea873cfed2a2d351865d788d4baefd4fe66ceb15fd1d652334535f->enter($__internal_9818da4528ea873cfed2a2d351865d788d4baefd4fe66ceb15fd1d652334535f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_array"));

            // line 12
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 12, $this->getSourceContext()); })()));
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
            foreach ($context['_seq'] as $context["key"] => $context["val"]) {
                // line 13
                echo "        ";
                if (twig_test_iterable($context["val"])) {
                    // line 14
                    echo "            [";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo " => ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $this->getTemplateName(), "render_array", array(0 => $context["val"], 1 => (isset($context["inline"]) || array_key_exists("inline", $context) ? $context["inline"] : (function () { throw new Twig_Error_Runtime('Variable "inline" does not exist.', 14, $this->getSourceContext()); })())), "method"), "html", null, true);
                    echo "]
        ";
                } else {
                    // line 16
                    echo "            [";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo " => ";
                    echo twig_escape_filter($this->env, $context["val"], "html", null, true);
                    echo "]
        ";
                }
                // line 18
                echo "
        ";
                // line 19
                if (( !twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "last", array()) &&  !(isset($context["inline"]) || array_key_exists("inline", $context) ? $context["inline"] : (function () { throw new Twig_Error_Runtime('Variable "inline" does not exist.', 19, $this->getSourceContext()); })()))) {
                    // line 20
                    echo "            <br>
        ";
                }
                // line 22
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
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['val'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            
            $__internal_9818da4528ea873cfed2a2d351865d788d4baefd4fe66ceb15fd1d652334535f->leave($__internal_9818da4528ea873cfed2a2d351865d788d4baefd4fe66ceb15fd1d652334535f_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_array_macro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 22,  85 => 20,  83 => 19,  80 => 18,  72 => 16,  64 => 14,  61 => 13,  43 => 12,  27 => 11,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}
{% macro render_array(value, inline) %}
    {% for key, val in value %}
        {% if val is iterable %}
            [{{ key }} => {{ _self.render_array(val, inline) }}]
        {%  else %}
            [{{ key }} => {{ val }}]
        {%  endif %}

        {% if not loop.last and not inline %}
            <br>
        {% endif %}
    {% endfor %}
{% endmacro %}
", "SonataAdminBundle:CRUD:base_array_macro.html.twig", "/home/kuba/Workspace/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/base_array_macro.html.twig");
    }
}
