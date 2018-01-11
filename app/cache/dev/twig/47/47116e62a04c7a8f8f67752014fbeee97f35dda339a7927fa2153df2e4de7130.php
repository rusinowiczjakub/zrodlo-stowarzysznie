<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_7439af950f1c611c9c6f1b27a4c4ad139c1f3012f103bae42bcc9c643df07eaa extends Twig_Template
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
        $__internal_b093fe78dd9a8550fc314badf41cc25a1c9a0f7e1a77ff0083b03d1d65cb1b38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b093fe78dd9a8550fc314badf41cc25a1c9a0f7e1a77ff0083b03d1d65cb1b38->enter($__internal_b093fe78dd9a8550fc314badf41cc25a1c9a0f7e1a77ff0083b03d1d65cb1b38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_b093fe78dd9a8550fc314badf41cc25a1c9a0f7e1a77ff0083b03d1d65cb1b38->leave($__internal_b093fe78dd9a8550fc314badf41cc25a1c9a0f7e1a77ff0083b03d1d65cb1b38_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/home/kuba/Workspace/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
