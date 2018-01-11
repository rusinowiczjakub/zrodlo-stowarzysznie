<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_0dcff91a4904d5fca9264316b19b4565495a67faa538e941495a7789cc0882d5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_89926e06a041b664c86aac990b26928917cd2fb708beb0ab35c87c9bb625a338 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89926e06a041b664c86aac990b26928917cd2fb708beb0ab35c87c9bb625a338->enter($__internal_89926e06a041b664c86aac990b26928917cd2fb708beb0ab35c87c9bb625a338_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_89926e06a041b664c86aac990b26928917cd2fb708beb0ab35c87c9bb625a338->leave($__internal_89926e06a041b664c86aac990b26928917cd2fb708beb0ab35c87c9bb625a338_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c6a172288eb1de4f4793cfae2dffad423e01161f78919c6947d3f86913775b87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6a172288eb1de4f4793cfae2dffad423e01161f78919c6947d3f86913775b87->enter($__internal_c6a172288eb1de4f4793cfae2dffad423e01161f78919c6947d3f86913775b87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c6a172288eb1de4f4793cfae2dffad423e01161f78919c6947d3f86913775b87->leave($__internal_c6a172288eb1de4f4793cfae2dffad423e01161f78919c6947d3f86913775b87_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_392d4a3fae5aa9fded22f54d73758efbd71fc4a0c0af8983b7bf494407c0700d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_392d4a3fae5aa9fded22f54d73758efbd71fc4a0c0af8983b7bf494407c0700d->enter($__internal_392d4a3fae5aa9fded22f54d73758efbd71fc4a0c0af8983b7bf494407c0700d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_392d4a3fae5aa9fded22f54d73758efbd71fc4a0c0af8983b7bf494407c0700d->leave($__internal_392d4a3fae5aa9fded22f54d73758efbd71fc4a0c0af8983b7bf494407c0700d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_91693eec29296c6ea9430abaf94ae33f31f2e852874a407efb59350649830a12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91693eec29296c6ea9430abaf94ae33f31f2e852874a407efb59350649830a12->enter($__internal_91693eec29296c6ea9430abaf94ae33f31f2e852874a407efb59350649830a12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_91693eec29296c6ea9430abaf94ae33f31f2e852874a407efb59350649830a12->leave($__internal_91693eec29296c6ea9430abaf94ae33f31f2e852874a407efb59350649830a12_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "/home/kuba/Workspace/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
