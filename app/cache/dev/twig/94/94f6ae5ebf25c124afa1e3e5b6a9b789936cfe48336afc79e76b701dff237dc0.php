<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_3dab10c1fe8a9631548758dd4bc880b71ea21f6e064a113e1053175d894cb87c extends Twig_Template
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
        $__internal_af14c7db03e5556094ce5dadb320398bca7ef6c00b8df1631d33153a1d203162 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af14c7db03e5556094ce5dadb320398bca7ef6c00b8df1631d33153a1d203162->enter($__internal_af14c7db03e5556094ce5dadb320398bca7ef6c00b8df1631d33153a1d203162_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_af14c7db03e5556094ce5dadb320398bca7ef6c00b8df1631d33153a1d203162->leave($__internal_af14c7db03e5556094ce5dadb320398bca7ef6c00b8df1631d33153a1d203162_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/home/kuba/Workspace/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
