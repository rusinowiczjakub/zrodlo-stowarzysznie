<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_ecad8e358a33ad948f81ca764b0ca84444256751366551b6b0ae202b87512a43 extends Twig_Template
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
        $__internal_e012c89dba622465db61386d1e395500eb1eb7b91807ba7e8ef40ecd535ae54d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e012c89dba622465db61386d1e395500eb1eb7b91807ba7e8ef40ecd535ae54d->enter($__internal_e012c89dba622465db61386d1e395500eb1eb7b91807ba7e8ef40ecd535ae54d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()))));
        
        $__internal_e012c89dba622465db61386d1e395500eb1eb7b91807ba7e8ef40ecd535ae54d->leave($__internal_e012c89dba622465db61386d1e395500eb1eb7b91807ba7e8ef40ecd535ae54d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "TwigBundle:Exception:exception.rdf.twig", "/home/kuba/Workspace/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
