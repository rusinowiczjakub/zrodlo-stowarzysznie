<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_39039bf8f1d816088e3ddceb3cebdc94d8f13ef57067f854fc49021679fded76 extends Twig_Template
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
        $__internal_59449c5e6de90afca35edf0cc01e5350e464e7c25512526bce42df61e231b481 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59449c5e6de90afca35edf0cc01e5350e464e7c25512526bce42df61e231b481->enter($__internal_59449c5e6de90afca35edf0cc01e5350e464e7c25512526bce42df61e231b481_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_59449c5e6de90afca35edf0cc01e5350e464e7c25512526bce42df61e231b481->leave($__internal_59449c5e6de90afca35edf0cc01e5350e464e7c25512526bce42df61e231b481_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/home/kuba/Workspace/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
