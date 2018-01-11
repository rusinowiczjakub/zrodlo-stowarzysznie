<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_bb734df4d34b9033b52588f924a4c07d9dbe4a4e57c934fa2345103314a08f95 extends Twig_Template
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
        $__internal_b8f2c8d1a39c9be3ca24d3976c0fae112e49f94d46c3c06593a382aaeae15ccb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8f2c8d1a39c9be3ca24d3976c0fae112e49f94d46c3c06593a382aaeae15ccb->enter($__internal_b8f2c8d1a39c9be3ca24d3976c0fae112e49f94d46c3c06593a382aaeae15ccb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_b8f2c8d1a39c9be3ca24d3976c0fae112e49f94d46c3c06593a382aaeae15ccb->leave($__internal_b8f2c8d1a39c9be3ca24d3976c0fae112e49f94d46c3c06593a382aaeae15ccb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/home/kuba/Workspace/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
