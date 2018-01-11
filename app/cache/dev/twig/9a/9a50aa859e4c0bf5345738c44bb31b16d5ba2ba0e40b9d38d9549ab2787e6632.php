<?php

/* @Framework/Form/range_widget.html.php */
class __TwigTemplate_048dbb7f8e05e9367a8615c791374021071a138f09092984e8b414e5d5eb3015 extends Twig_Template
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
        $__internal_8063e5d93d58dd699bd11b4a68a2d378d50fb202ef259ed7d8a994cef519b9b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8063e5d93d58dd699bd11b4a68a2d378d50fb202ef259ed7d8a994cef519b9b8->enter($__internal_8063e5d93d58dd699bd11b4a68a2d378d50fb202ef259ed7d8a994cef519b9b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
";
        
        $__internal_8063e5d93d58dd699bd11b4a68a2d378d50fb202ef259ed7d8a994cef519b9b8->leave($__internal_8063e5d93d58dd699bd11b4a68a2d378d50fb202ef259ed7d8a994cef519b9b8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/range_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
", "@Framework/Form/range_widget.html.php", "/home/kuba/Workspace/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/range_widget.html.php");
    }
}
