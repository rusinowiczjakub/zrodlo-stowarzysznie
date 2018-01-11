<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_81210f762ed8a0ad21772658a41210cda7b097f56965b98153f196ed10522e3b extends Twig_Template
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
        $__internal_dfeb6c24a1efdd1ab6ee48a29aba4a5e543378d714c3865e52502b4895283fc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfeb6c24a1efdd1ab6ee48a29aba4a5e543378d714c3865e52502b4895283fc3->enter($__internal_dfeb6c24a1efdd1ab6ee48a29aba4a5e543378d714c3865e52502b4895283fc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_dfeb6c24a1efdd1ab6ee48a29aba4a5e543378d714c3865e52502b4895283fc3->leave($__internal_dfeb6c24a1efdd1ab6ee48a29aba4a5e543378d714c3865e52502b4895283fc3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "/home/kuba/Workspace/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
