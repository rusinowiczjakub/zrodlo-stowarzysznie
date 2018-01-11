<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_a1a632ae14dbc4da35d1bed534f3938caa24c9e2654f1a9ad312f30b25c679f7 extends Twig_Template
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
        $__internal_09021ed42dab297e05d10ad99dc64edd07909ca7d73b777ab82d6c1b57d39d69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09021ed42dab297e05d10ad99dc64edd07909ca7d73b777ab82d6c1b57d39d69->enter($__internal_09021ed42dab297e05d10ad99dc64edd07909ca7d73b777ab82d6c1b57d39d69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_09021ed42dab297e05d10ad99dc64edd07909ca7d73b777ab82d6c1b57d39d69->leave($__internal_09021ed42dab297e05d10ad99dc64edd07909ca7d73b777ab82d6c1b57d39d69_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/home/kuba/Workspace/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
