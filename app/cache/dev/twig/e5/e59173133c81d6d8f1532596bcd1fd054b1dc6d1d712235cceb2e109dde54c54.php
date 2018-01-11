<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_c0ccde9ce38196c83fa1822ed77594116198122f4bd9b598f3e7ace031ee0501 extends Twig_Template
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
        $__internal_1f650054f26ccaed39d8092325b83584d6a87f774b3bbd34be4858a07b8f412d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f650054f26ccaed39d8092325b83584d6a87f774b3bbd34be4858a07b8f412d->enter($__internal_1f650054f26ccaed39d8092325b83584d6a87f774b3bbd34be4858a07b8f412d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_1f650054f26ccaed39d8092325b83584d6a87f774b3bbd34be4858a07b8f412d->leave($__internal_1f650054f26ccaed39d8092325b83584d6a87f774b3bbd34be4858a07b8f412d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/home/kuba/Workspace/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
