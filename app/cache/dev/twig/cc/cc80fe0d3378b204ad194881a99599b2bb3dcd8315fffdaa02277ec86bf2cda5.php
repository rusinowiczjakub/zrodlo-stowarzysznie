<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_1a53cb38a27fae1be936fb9f9adff9c552ff2097f1bc2fbffbb37c5c4c037628 extends Twig_Template
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
        $__internal_5fa5487308beceb672dc876c3e2fde0df5cdac285957bfd8c4b9a1550df2863f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fa5487308beceb672dc876c3e2fde0df5cdac285957bfd8c4b9a1550df2863f->enter($__internal_5fa5487308beceb672dc876c3e2fde0df5cdac285957bfd8c4b9a1550df2863f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_5fa5487308beceb672dc876c3e2fde0df5cdac285957bfd8c4b9a1550df2863f->leave($__internal_5fa5487308beceb672dc876c3e2fde0df5cdac285957bfd8c4b9a1550df2863f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/home/kuba/Workspace/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
