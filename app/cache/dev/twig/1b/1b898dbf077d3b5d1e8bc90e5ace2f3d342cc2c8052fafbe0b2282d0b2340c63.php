<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_c095dbb21bea6e95a762857b85d3b9d4ead698a1f6de6d413bd9a088f35373ff extends Twig_Template
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
        $__internal_96b141aebed952c60cc9ca1d9fd684e39baa56167c5a8d1a53163795c4a96956 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96b141aebed952c60cc9ca1d9fd684e39baa56167c5a8d1a53163795c4a96956->enter($__internal_96b141aebed952c60cc9ca1d9fd684e39baa56167c5a8d1a53163795c4a96956_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })()))));
        // line 3
        echo "*/
";
        
        $__internal_96b141aebed952c60cc9ca1d9fd684e39baa56167c5a8d1a53163795c4a96956->leave($__internal_96b141aebed952c60cc9ca1d9fd684e39baa56167c5a8d1a53163795c4a96956_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "TwigBundle:Exception:exception.css.twig", "/home/kuba/Workspace/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
