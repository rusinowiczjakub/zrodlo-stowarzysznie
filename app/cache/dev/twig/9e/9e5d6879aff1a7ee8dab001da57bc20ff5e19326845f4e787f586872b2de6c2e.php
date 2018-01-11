<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_42b6bf96ad25dab628cd6e4b24216a9894bdc138ac036d3fb27a18ae184387ad extends Twig_Template
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
        $__internal_b2c3559aef35ba3c0da8b21a4a89e104db93f0ac8b1223f4ccefd61fae7985e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2c3559aef35ba3c0da8b21a4a89e104db93f0ac8b1223f4ccefd61fae7985e2->enter($__internal_b2c3559aef35ba3c0da8b21a4a89e104db93f0ac8b1223f4ccefd61fae7985e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_b2c3559aef35ba3c0da8b21a4a89e104db93f0ac8b1223f4ccefd61fae7985e2->leave($__internal_b2c3559aef35ba3c0da8b21a4a89e104db93f0ac8b1223f4ccefd61fae7985e2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/home/kuba/Workspace/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
