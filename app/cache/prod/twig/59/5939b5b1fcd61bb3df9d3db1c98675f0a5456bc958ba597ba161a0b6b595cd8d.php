<?php

/* front/reports.html.twig */
class __TwigTemplate_9f1505d160cc278f1282310769f8d9eaf2c7aef335c1a37f667e3ac9f7b755eb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "front/reports.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0c018aee05f77fcf3cbc35c6269fa768f6bf8bec11768024594c245447fa6930 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c018aee05f77fcf3cbc35c6269fa768f6bf8bec11768024594c245447fa6930->enter($__internal_0c018aee05f77fcf3cbc35c6269fa768f6bf8bec11768024594c245447fa6930_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "front/reports.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0c018aee05f77fcf3cbc35c6269fa768f6bf8bec11768024594c245447fa6930->leave($__internal_0c018aee05f77fcf3cbc35c6269fa768f6bf8bec11768024594c245447fa6930_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d45df028703604bdd3ee9407a3e23a2d0775e8ff91669fbbfdf80fe8a7f3d55a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d45df028703604bdd3ee9407a3e23a2d0775e8ff91669fbbfdf80fe8a7f3d55a->enter($__internal_d45df028703604bdd3ee9407a3e23a2d0775e8ff91669fbbfdf80fe8a7f3d55a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/about.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/reports.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_d45df028703604bdd3ee9407a3e23a2d0775e8ff91669fbbfdf80fe8a7f3d55a->leave($__internal_d45df028703604bdd3ee9407a3e23a2d0775e8ff91669fbbfdf80fe8a7f3d55a_prof);

    }

    // line 8
    public function block_header($context, array $blocks = array())
    {
        $__internal_d9270c631e925031494eefbc284f44539cdb84cd81cde98f905634ea5e0e77ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9270c631e925031494eefbc284f44539cdb84cd81cde98f905634ea5e0e77ef->enter($__internal_d9270c631e925031494eefbc284f44539cdb84cd81cde98f905634ea5e0e77ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 9
        echo "    <h1>Sprawozdania</h1>
";
        
        $__internal_d9270c631e925031494eefbc284f44539cdb84cd81cde98f905634ea5e0e77ef->leave($__internal_d9270c631e925031494eefbc284f44539cdb84cd81cde98f905634ea5e0e77ef_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_202ef83b0c29940abab33c0a66167564dec53141c3e83e0b1e1c04377448add9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_202ef83b0c29940abab33c0a66167564dec53141c3e83e0b1e1c04377448add9->enter($__internal_202ef83b0c29940abab33c0a66167564dec53141c3e83e0b1e1c04377448add9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "    <main>
        <div class=\"route\"><br></div>
        <div class=\"container\">
            <ul class=\"nav__reports-year\">
            ";
        // line 17
        if (array_key_exists("years", $context)) {
            // line 18
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["years"]) || array_key_exists("years", $context) ? $context["years"] : (function () { throw new Twig_Error_Runtime('Variable "years" does not exist.', 18, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["year"]) {
                // line 19
                echo "                        <li class=\"btn btn-yellow\"><a class=\"year\" href=";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reports", array("year" => $context["year"])), "html", null, true);
                echo ">";
                echo twig_escape_filter($this->env, $context["year"], "html", null, true);
                echo "</a></li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['year'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "            ";
        }
        // line 22
        echo "            </ul>

            ";
        // line 24
        if (array_key_exists("reports", $context)) {
            // line 25
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["reports"]) || array_key_exists("reports", $context) ? $context["reports"] : (function () { throw new Twig_Error_Runtime('Variable "reports" does not exist.', 25, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["report"]) {
                // line 26
                echo "                    <div class=\"report\">
                        ";
                // line 27
                if (preg_match("/Sprawozdanie finansowe/ui", twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["report"], "reportCategory", array()), "name", array()))) {
                    // line 28
                    echo "                            <div class=\"report__header\">
                                <h2>Sprawozdanie finansowe</h2>
                                <div>
                                    <h3>Za rok ";
                    // line 31
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["report"], "date", array()), "Y"), "html", null, true);
                    echo " / ";
                    echo twig_escape_filter($this->env, (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["report"], "date", array()), "Y") + 1), "html", null, true);
                    echo "</h3>
                                </div>
                                <button class=\"btn btn-yellow\"><a target=\"_blank\" href=";
                    // line 33
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("assets/additions/" . twig_get_attribute($this->env, $this->getSourceContext(), $context["report"], "name", array()))), "html", null, true);
                    echo ">Otwórz</a></button>
                            </div>
                        ";
                }
                // line 36
                echo "
                        ";
                // line 37
                if (preg_match("/Sprawozdanie merytoryczne/ui", twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["report"], "reportCategory", array()), "name", array()))) {
                    // line 38
                    echo "                            <div class=\"report__header\">
                                <h2>Sprawozdanie merytoryczne</h2>
                                <div>
                                    <h3>Za rok ";
                    // line 41
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["report"], "date", array()), "Y"), "html", null, true);
                    echo " / ";
                    echo twig_escape_filter($this->env, (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["report"], "date", array()), "Y") + 1), "html", null, true);
                    echo "</h3>
                                </div>
                                <button class=\"btn btn-yellow\"><a target=\"_blank\" href=";
                    // line 43
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("assets/additions/" . twig_get_attribute($this->env, $this->getSourceContext(), $context["report"], "name", array()))), "html", null, true);
                    echo ">Otwórz</a></button>
                            </div>
                        ";
                }
                // line 46
                echo "                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['report'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "            ";
        }
        // line 49
        echo "            <article class=\"report\">

            </article>
        </div>
    </main>
";
        
        $__internal_202ef83b0c29940abab33c0a66167564dec53141c3e83e0b1e1c04377448add9->leave($__internal_202ef83b0c29940abab33c0a66167564dec53141c3e83e0b1e1c04377448add9_prof);

    }

    public function getTemplateName()
    {
        return "front/reports.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 49,  167 => 48,  160 => 46,  154 => 43,  147 => 41,  142 => 38,  140 => 37,  137 => 36,  131 => 33,  124 => 31,  119 => 28,  117 => 27,  114 => 26,  109 => 25,  107 => 24,  103 => 22,  100 => 21,  89 => 19,  84 => 18,  82 => 17,  76 => 13,  70 => 12,  62 => 9,  56 => 8,  47 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/about.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/reports.css') }}\" />
{% endblock %}

{% block header %}
    <h1>Sprawozdania</h1>
{% endblock %}

{% block body %}
    <main>
        <div class=\"route\"><br></div>
        <div class=\"container\">
            <ul class=\"nav__reports-year\">
            {% if years is defined %}
                {% for year in years %}
                        <li class=\"btn btn-yellow\"><a class=\"year\" href={{ path(\"reports\", {'year': year}) }}>{{ year }}</a></li>
                {% endfor %}
            {% endif %}
            </ul>

            {% if reports is defined %}
                {% for report in reports %}
                    <div class=\"report\">
                        {% if report.reportCategory.name matches \"/Sprawozdanie finansowe/ui\" %}
                            <div class=\"report__header\">
                                <h2>Sprawozdanie finansowe</h2>
                                <div>
                                    <h3>Za rok {{ report.date | date(\"Y\") }} / {{ report.date | date(\"Y\")+1 }}</h3>
                                </div>
                                <button class=\"btn btn-yellow\"><a target=\"_blank\" href={{ asset(\"assets/additions/\" ~ report.name) }}>Otwórz</a></button>
                            </div>
                        {% endif %}

                        {% if report.reportCategory.name matches \"/Sprawozdanie merytoryczne/ui\" %}
                            <div class=\"report__header\">
                                <h2>Sprawozdanie merytoryczne</h2>
                                <div>
                                    <h3>Za rok {{ report.date | date(\"Y\") }} / {{ report.date | date(\"Y\")+1 }}</h3>
                                </div>
                                <button class=\"btn btn-yellow\"><a target=\"_blank\" href={{ asset(\"assets/additions/\" ~ report.name) }}>Otwórz</a></button>
                            </div>
                        {% endif %}
                    </div>
                {% endfor %}
            {% endif %}
            <article class=\"report\">

            </article>
        </div>
    </main>
{% endblock %}", "front/reports.html.twig", "/home/kuba/Workspace/app/Resources/views/front/reports.html.twig");
    }
}
