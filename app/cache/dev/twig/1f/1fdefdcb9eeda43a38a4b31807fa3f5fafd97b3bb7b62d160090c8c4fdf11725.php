<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_3e2f23b53accfa7b88dad8ed5fce50deb5be8477d92bfdd467b96df624172d9e extends Twig_Template
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
        $__internal_ea2bfd57de3dd4799dacbf0be31c43faca25cd504d21024bb37c2f904dc9e885 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea2bfd57de3dd4799dacbf0be31c43faca25cd504d21024bb37c2f904dc9e885->enter($__internal_ea2bfd57de3dd4799dacbf0be31c43faca25cd504d21024bb37c2f904dc9e885_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_ea2bfd57de3dd4799dacbf0be31c43faca25cd504d21024bb37c2f904dc9e885->leave($__internal_ea2bfd57de3dd4799dacbf0be31c43faca25cd504d21024bb37c2f904dc9e885_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/home/kuba/Workspace/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
