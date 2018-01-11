<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_dfa1b1a5aae68c3abee5ac827a85b6a2aed090a9d39b218b3da49ad7ad4f84f2 extends Twig_Template
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
        $__internal_e7bb1c1222d249d64a2271aa2a36525ceea889bef92c1bbd8d786893b1142756 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7bb1c1222d249d64a2271aa2a36525ceea889bef92c1bbd8d786893b1142756->enter($__internal_e7bb1c1222d249d64a2271aa2a36525ceea889bef92c1bbd8d786893b1142756_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_e7bb1c1222d249d64a2271aa2a36525ceea889bef92c1bbd8d786893b1142756->leave($__internal_e7bb1c1222d249d64a2271aa2a36525ceea889bef92c1bbd8d786893b1142756_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/home/kuba/Workspace/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
