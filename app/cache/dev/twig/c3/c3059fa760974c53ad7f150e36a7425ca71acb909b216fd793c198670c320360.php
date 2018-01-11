<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_dab559deba8a3f4645137f163011d2b0f116e61808f5cf2c8a54c23e72e10c7c extends Twig_Template
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
        $__internal_8af33b5743457451710b0ae7573b276c269fe64f0943872b44a59db4ae514b68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8af33b5743457451710b0ae7573b276c269fe64f0943872b44a59db4ae514b68->enter($__internal_8af33b5743457451710b0ae7573b276c269fe64f0943872b44a59db4ae514b68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_8af33b5743457451710b0ae7573b276c269fe64f0943872b44a59db4ae514b68->leave($__internal_8af33b5743457451710b0ae7573b276c269fe64f0943872b44a59db4ae514b68_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/home/kuba/Workspace/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
