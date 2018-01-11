<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_bc509a9f2cc2b10bb7d51f77397fc90290e69a5b68f2015b3088f5e91f2f5ca3 extends Twig_Template
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
        $__internal_770b78b7285e9337c0e9d181b1272d73bb8c3335d9aece10ae39fcbaf1f7be9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_770b78b7285e9337c0e9d181b1272d73bb8c3335d9aece10ae39fcbaf1f7be9c->enter($__internal_770b78b7285e9337c0e9d181b1272d73bb8c3335d9aece10ae39fcbaf1f7be9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_770b78b7285e9337c0e9d181b1272d73bb8c3335d9aece10ae39fcbaf1f7be9c->leave($__internal_770b78b7285e9337c0e9d181b1272d73bb8c3335d9aece10ae39fcbaf1f7be9c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/home/kuba/Workspace/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
