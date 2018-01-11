<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_5bb451d5417ecca455ed81afbd47976837ac4effc469c59dc1caf1d0a73eaf41 extends Twig_Template
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
        $__internal_bf9ba412560d3b0b5e04409a6c9ffc57269d668b47e35d98b1cf2cd4de551f97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf9ba412560d3b0b5e04409a6c9ffc57269d668b47e35d98b1cf2cd4de551f97->enter($__internal_bf9ba412560d3b0b5e04409a6c9ffc57269d668b47e35d98b1cf2cd4de551f97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_bf9ba412560d3b0b5e04409a6c9ffc57269d668b47e35d98b1cf2cd4de551f97->leave($__internal_bf9ba412560d3b0b5e04409a6c9ffc57269d668b47e35d98b1cf2cd4de551f97_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/home/kuba/Workspace/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
