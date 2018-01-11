<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_fc70e8fb88a2fcd729b7796b0fcf0017cb172784f3a0300cd4ded1d917636689 extends Twig_Template
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
        $__internal_358df24e83810b3a7ae0744c8ea3e9b84a903cf59cc6b3a32e8faaae74ef9f28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_358df24e83810b3a7ae0744c8ea3e9b84a903cf59cc6b3a32e8faaae74ef9f28->enter($__internal_358df24e83810b3a7ae0744c8ea3e9b84a903cf59cc6b3a32e8faaae74ef9f28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_358df24e83810b3a7ae0744c8ea3e9b84a903cf59cc6b3a32e8faaae74ef9f28->leave($__internal_358df24e83810b3a7ae0744c8ea3e9b84a903cf59cc6b3a32e8faaae74ef9f28_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/home/kuba/Workspace/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
