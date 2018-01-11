<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_dded661be47bf98fe3095164a63ec3a0f3d5a4441394e431c88272b07d5cb937 extends Twig_Template
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
        $__internal_b54616522087336186286e27e43191895be21570d086cbcf3c19e88d41833a87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b54616522087336186286e27e43191895be21570d086cbcf3c19e88d41833a87->enter($__internal_b54616522087336186286e27e43191895be21570d086cbcf3c19e88d41833a87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_b54616522087336186286e27e43191895be21570d086cbcf3c19e88d41833a87->leave($__internal_b54616522087336186286e27e43191895be21570d086cbcf3c19e88d41833a87_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.atom.twig", "/home/kuba/Workspace/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
