<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_9b503993bd3e5319c205865f62932f9272dd6559d0fcaadf7f82b4f9cff9db3f extends Twig_Template
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
        $__internal_ca2683fe03b7ae6510247691e1d51f7a949c2a6d942305076175dd7026c28506 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca2683fe03b7ae6510247691e1d51f7a949c2a6d942305076175dd7026c28506->enter($__internal_ca2683fe03b7ae6510247691e1d51f7a949c2a6d942305076175dd7026c28506_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_ca2683fe03b7ae6510247691e1d51f7a949c2a6d942305076175dd7026c28506->leave($__internal_ca2683fe03b7ae6510247691e1d51f7a949c2a6d942305076175dd7026c28506_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/home/kuba/Workspace/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
