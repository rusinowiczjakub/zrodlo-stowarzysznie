<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_323db48404d66868ae842475ee51b8e51838e13f70f9a60ee526c01cb90537a9 extends Twig_Template
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
        $__internal_5f3ab20b5e74a07d7199b14060e14b6b805ed2e3400e0835f49f8919c004fc04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f3ab20b5e74a07d7199b14060e14b6b805ed2e3400e0835f49f8919c004fc04->enter($__internal_5f3ab20b5e74a07d7199b14060e14b6b805ed2e3400e0835f49f8919c004fc04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_5f3ab20b5e74a07d7199b14060e14b6b805ed2e3400e0835f49f8919c004fc04->leave($__internal_5f3ab20b5e74a07d7199b14060e14b6b805ed2e3400e0835f49f8919c004fc04_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/home/kuba/Workspace/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
