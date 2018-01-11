<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_e02eb0f883bd93cfe8eaf45b5e4ca9ad81d1a814aeda57ba33d2bfe426ba7fa8 extends Twig_Template
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
        $__internal_c73e1524799105446e4def53f36a95f651b3d4c39f14bda041f923ccad0e1c2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c73e1524799105446e4def53f36a95f651b3d4c39f14bda041f923ccad0e1c2d->enter($__internal_c73e1524799105446e4def53f36a95f651b3d4c39f14bda041f923ccad0e1c2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_c73e1524799105446e4def53f36a95f651b3d4c39f14bda041f923ccad0e1c2d->leave($__internal_c73e1524799105446e4def53f36a95f651b3d4c39f14bda041f923ccad0e1c2d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/home/kuba/Workspace/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
