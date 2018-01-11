<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_0727f1f78fa26de5443218654855c8b8327f0b61bc0d990f3d985078b24c4c5b extends Twig_Template
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
        $__internal_1a4165eccc9ca4c9d072bada58f0453e6f420854284c49193d9362e13866bf2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a4165eccc9ca4c9d072bada58f0453e6f420854284c49193d9362e13866bf2b->enter($__internal_1a4165eccc9ca4c9d072bada58f0453e6f420854284c49193d9362e13866bf2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_1a4165eccc9ca4c9d072bada58f0453e6f420854284c49193d9362e13866bf2b->leave($__internal_1a4165eccc9ca4c9d072bada58f0453e6f420854284c49193d9362e13866bf2b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/home/kuba/Workspace/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
