<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_9bffb35cdbcd620cc47d40c5befc0c2ae74b0a6736a231b7aa7f3bc67cbfc487 extends Twig_Template
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
        $__internal_02eaa873569578b3a3b3e8cf02adff6fd07132cbbd614a21772290a0f0af8642 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02eaa873569578b3a3b3e8cf02adff6fd07132cbbd614a21772290a0f0af8642->enter($__internal_02eaa873569578b3a3b3e8cf02adff6fd07132cbbd614a21772290a0f0af8642_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_02eaa873569578b3a3b3e8cf02adff6fd07132cbbd614a21772290a0f0af8642->leave($__internal_02eaa873569578b3a3b3e8cf02adff6fd07132cbbd614a21772290a0f0af8642_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/home/kuba/Workspace/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
