<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_8a93ceacfacd094ff48f81944052db6b60f096a9d5461135fb276faae80c4496 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4c5803955893a7ed3ba9cb6841f52f20a826383c9960a10727d9be80b2810ae7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c5803955893a7ed3ba9cb6841f52f20a826383c9960a10727d9be80b2810ae7->enter($__internal_4c5803955893a7ed3ba9cb6841f52f20a826383c9960a10727d9be80b2810ae7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_4c5803955893a7ed3ba9cb6841f52f20a826383c9960a10727d9be80b2810ae7->leave($__internal_4c5803955893a7ed3ba9cb6841f52f20a826383c9960a10727d9be80b2810ae7_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_1ac83f9a0511e4fba0a41e437eeef154ce6b012207eaaf97c17985f22e2f9687 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ac83f9a0511e4fba0a41e437eeef154ce6b012207eaaf97c17985f22e2f9687->enter($__internal_1ac83f9a0511e4fba0a41e437eeef154ce6b012207eaaf97c17985f22e2f9687_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_1ac83f9a0511e4fba0a41e437eeef154ce6b012207eaaf97c17985f22e2f9687->leave($__internal_1ac83f9a0511e4fba0a41e437eeef154ce6b012207eaaf97c17985f22e2f9687_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/home/kuba/Workspace/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
