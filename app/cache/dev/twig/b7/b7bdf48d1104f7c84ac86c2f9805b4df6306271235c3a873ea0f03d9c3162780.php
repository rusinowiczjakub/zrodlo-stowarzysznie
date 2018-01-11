<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_42c83becbcd7822b5f3098ea42b328fd180d193cb18bcd729a431324404fa858 extends Twig_Template
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
        $__internal_94208707d2577c1566ccb91760557d2e0be216e2d9c0d32b814114d8024057ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94208707d2577c1566ccb91760557d2e0be216e2d9c0d32b814114d8024057ad->enter($__internal_94208707d2577c1566ccb91760557d2e0be216e2d9c0d32b814114d8024057ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_94208707d2577c1566ccb91760557d2e0be216e2d9c0d32b814114d8024057ad->leave($__internal_94208707d2577c1566ccb91760557d2e0be216e2d9c0d32b814114d8024057ad_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/home/kuba/Workspace/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
