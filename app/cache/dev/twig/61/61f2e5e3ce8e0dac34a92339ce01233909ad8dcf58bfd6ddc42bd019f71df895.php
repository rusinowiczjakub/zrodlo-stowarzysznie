<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_d80f7e0ec58e5a70935fa55e81e944c062721bd3f59800a8f12508d6e2abb118 extends Twig_Template
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
        $__internal_4ed0c6cbf63863ec7bcc86ebb480fb137aed49a2a59c1b6362bb08d24d61ba77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ed0c6cbf63863ec7bcc86ebb480fb137aed49a2a59c1b6362bb08d24d61ba77->enter($__internal_4ed0c6cbf63863ec7bcc86ebb480fb137aed49a2a59c1b6362bb08d24d61ba77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()))));
        
        $__internal_4ed0c6cbf63863ec7bcc86ebb480fb137aed49a2a59c1b6362bb08d24d61ba77->leave($__internal_4ed0c6cbf63863ec7bcc86ebb480fb137aed49a2a59c1b6362bb08d24d61ba77_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
", "TwigBundle:Exception:exception.atom.twig", "/home/kuba/Workspace/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
