<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_c6c1806b32780993390546950d900cdaf3ae586d062d6e7213d58c48130e7982 extends Twig_Template
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
        $__internal_53a04cdaa8a8063c425b54dcb53fb04e9fc6402987e493a491f075e829f6f64b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53a04cdaa8a8063c425b54dcb53fb04e9fc6402987e493a491f075e829f6f64b->enter($__internal_53a04cdaa8a8063c425b54dcb53fb04e9fc6402987e493a491f075e829f6f64b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_53a04cdaa8a8063c425b54dcb53fb04e9fc6402987e493a491f075e829f6f64b->leave($__internal_53a04cdaa8a8063c425b54dcb53fb04e9fc6402987e493a491f075e829f6f64b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "/home/kuba/Workspace/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/repeated_row.html.php");
    }
}
