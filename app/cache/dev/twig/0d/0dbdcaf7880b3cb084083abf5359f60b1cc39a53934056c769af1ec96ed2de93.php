<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_a6f131121f850f4e044ec7a11c80e3803f2faaf434c22de81775bef374f471bb extends Twig_Template
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
        $__internal_668485af814b18c6729639fcf0dc0b6367359569e4832aedb6fb632136aab4ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_668485af814b18c6729639fcf0dc0b6367359569e4832aedb6fb632136aab4ea->enter($__internal_668485af814b18c6729639fcf0dc0b6367359569e4832aedb6fb632136aab4ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_668485af814b18c6729639fcf0dc0b6367359569e4832aedb6fb632136aab4ea->leave($__internal_668485af814b18c6729639fcf0dc0b6367359569e4832aedb6fb632136aab4ea_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/home/kuba/Workspace/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
