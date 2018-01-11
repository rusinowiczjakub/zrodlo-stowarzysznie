<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_0a9269adb781d5f3f0a347161768e1c723044529e39e798b29363c66ec8753f9 extends Twig_Template
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
        $__internal_223334835804905a756562014bae5287b97a1b0d310f3da669923c245e5132b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_223334835804905a756562014bae5287b97a1b0d310f3da669923c245e5132b9->enter($__internal_223334835804905a756562014bae5287b97a1b0d310f3da669923c245e5132b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_223334835804905a756562014bae5287b97a1b0d310f3da669923c245e5132b9->leave($__internal_223334835804905a756562014bae5287b97a1b0d310f3da669923c245e5132b9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/home/kuba/Workspace/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
