<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_0f56230ebf0aa6ed8f651af6756a8dd0337b07a6982035be8a0551708eb6bc64 extends Twig_Template
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
        $__internal_4e4ac61c6543d1071e982e76371906702ca0db7f62e7662033b23da9222e066f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e4ac61c6543d1071e982e76371906702ca0db7f62e7662033b23da9222e066f->enter($__internal_4e4ac61c6543d1071e982e76371906702ca0db7f62e7662033b23da9222e066f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_4e4ac61c6543d1071e982e76371906702ca0db7f62e7662033b23da9222e066f->leave($__internal_4e4ac61c6543d1071e982e76371906702ca0db7f62e7662033b23da9222e066f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.rdf.twig", "/home/kuba/Workspace/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
