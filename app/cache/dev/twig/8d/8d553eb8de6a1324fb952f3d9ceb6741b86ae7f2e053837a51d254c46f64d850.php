<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_59f075469e5a1bfaadf11b413e549cb8f131a88602f3665b4d75fb9b6948d7ad extends Twig_Template
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
        $__internal_5d658c98e0a048c2da4eeeb23ea649bd880231fb14b12ef08f808aef453f1a55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d658c98e0a048c2da4eeeb23ea649bd880231fb14b12ef08f808aef453f1a55->enter($__internal_5d658c98e0a048c2da4eeeb23ea649bd880231fb14b12ef08f808aef453f1a55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_5d658c98e0a048c2da4eeeb23ea649bd880231fb14b12ef08f808aef453f1a55->leave($__internal_5d658c98e0a048c2da4eeeb23ea649bd880231fb14b12ef08f808aef453f1a55_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/home/kuba/Workspace/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
