<?php

/* SensioDistributionBundle:Configurator:check.html.twig */
class __TwigTemplate_7ea7cdd4d095b7ff72290ddfb4f2ab54357d482b06caa8e57a46653da3db02cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SensioDistributionBundle::Configurator/layout.html.twig", "SensioDistributionBundle:Configurator:check.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_87c6f4b0690ca0264a2240ce8136d853758d48f1e31de903220ad516c091e9d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87c6f4b0690ca0264a2240ce8136d853758d48f1e31de903220ad516c091e9d8->enter($__internal_87c6f4b0690ca0264a2240ce8136d853758d48f1e31de903220ad516c091e9d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle:Configurator:check.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_87c6f4b0690ca0264a2240ce8136d853758d48f1e31de903220ad516c091e9d8->leave($__internal_87c6f4b0690ca0264a2240ce8136d853758d48f1e31de903220ad516c091e9d8_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_e77513dcde25d4d3f1bd87f9ce6d4fa26ed5ed6d6fb25a6d9c571551359fd196 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e77513dcde25d4d3f1bd87f9ce6d4fa26ed5ed6d6fb25a6d9c571551359fd196->enter($__internal_e77513dcde25d4d3f1bd87f9ce6d4fa26ed5ed6d6fb25a6d9c571551359fd196_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    ";
        if (twig_length_filter($this->env, (isset($context["majors"]) || array_key_exists("majors", $context) ? $context["majors"] : (function () { throw new Twig_Error_Runtime('Variable "majors" does not exist.', 4, $this->getSourceContext()); })()))) {
            // line 5
            echo "        <h1>Major Problems that need to be fixed now</h1>
        <p>
            We have detected <strong>";
            // line 7
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["majors"]) || array_key_exists("majors", $context) ? $context["majors"] : (function () { throw new Twig_Error_Runtime('Variable "majors" does not exist.', 7, $this->getSourceContext()); })())), "html", null, true);
            echo "</strong> major problems.
            You <em>must</em> fix them before continuing:
        </p>
        <ol>
            ";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["majors"]) || array_key_exists("majors", $context) ? $context["majors"] : (function () { throw new Twig_Error_Runtime('Variable "majors" does not exist.', 11, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 12
                echo "                <li>";
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "</li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "        </ol>
    ";
        }
        // line 16
        echo "
    ";
        // line 17
        if (twig_length_filter($this->env, (isset($context["minors"]) || array_key_exists("minors", $context) ? $context["minors"] : (function () { throw new Twig_Error_Runtime('Variable "minors" does not exist.', 17, $this->getSourceContext()); })()))) {
            // line 18
            echo "        <h1>Some Recommendations</h1>

        <p>
            ";
            // line 21
            if (twig_length_filter($this->env, (isset($context["majors"]) || array_key_exists("majors", $context) ? $context["majors"] : (function () { throw new Twig_Error_Runtime('Variable "majors" does not exist.', 21, $this->getSourceContext()); })()))) {
                // line 22
                echo "            Additionally, we
            ";
            } else {
                // line 24
                echo "            We
            ";
            }
            // line 26
            echo "            have detected some minor problems that we <em>recommend</em> you to fix to have a better Symfony
            experience:

            <ol>
                ";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["minors"]) || array_key_exists("minors", $context) ? $context["minors"] : (function () { throw new Twig_Error_Runtime('Variable "minors" does not exist.', 30, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 31
                echo "                    <li>";
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "</li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "            </ol>
        </p>

    ";
        }
        // line 37
        echo "
    ";
        // line 38
        if ( !twig_length_filter($this->env, (isset($context["majors"]) || array_key_exists("majors", $context) ? $context["majors"] : (function () { throw new Twig_Error_Runtime('Variable "majors" does not exist.', 38, $this->getSourceContext()); })()))) {
            // line 39
            echo "        <ul class=\"symfony_list\">
            <li><a href=\"";
            // line 40
            echo twig_escape_filter($this->env, (isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new Twig_Error_Runtime('Variable "url" does not exist.', 40, $this->getSourceContext()); })()), "html", null, true);
            echo "\">Configure your Symfony Application online</a></li>
        </ul>
    ";
        }
        
        $__internal_e77513dcde25d4d3f1bd87f9ce6d4fa26ed5ed6d6fb25a6d9c571551359fd196->leave($__internal_e77513dcde25d4d3f1bd87f9ce6d4fa26ed5ed6d6fb25a6d9c571551359fd196_prof);

    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle:Configurator:check.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 40,  121 => 39,  119 => 38,  116 => 37,  110 => 33,  101 => 31,  97 => 30,  91 => 26,  87 => 24,  83 => 22,  81 => 21,  76 => 18,  74 => 17,  71 => 16,  67 => 14,  58 => 12,  54 => 11,  47 => 7,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"SensioDistributionBundle::Configurator/layout.html.twig\" %}

{% block content %}
    {% if majors|length %}
        <h1>Major Problems that need to be fixed now</h1>
        <p>
            We have detected <strong>{{ majors|length }}</strong> major problems.
            You <em>must</em> fix them before continuing:
        </p>
        <ol>
            {% for message in majors %}
                <li>{{ message }}</li>
            {% endfor %}
        </ol>
    {% endif %}

    {% if minors|length %}
        <h1>Some Recommendations</h1>

        <p>
            {% if majors|length %}
            Additionally, we
            {% else %}
            We
            {% endif %}
            have detected some minor problems that we <em>recommend</em> you to fix to have a better Symfony
            experience:

            <ol>
                {% for message in minors %}
                    <li>{{ message }}</li>
                {% endfor %}
            </ol>
        </p>

    {% endif %}

    {% if not majors|length %}
        <ul class=\"symfony_list\">
            <li><a href=\"{{ url }}\">Configure your Symfony Application online</a></li>
        </ul>
    {% endif %}
{% endblock %}
", "SensioDistributionBundle:Configurator:check.html.twig", "/home/kuba/Workspace/vendor/sensio/distribution-bundle/Sensio/Bundle/DistributionBundle/Resources/views/Configurator/check.html.twig");
    }
}
