<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_41e9ca741be237ab5f5222498d158691ff37f20093a2ef7e32e5e0b7e992956a extends Twig_Template
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
        $__internal_c838ed8bcd6a3d4524d5cfd044bc4215443db4309f800dc43a312eca7fe9617e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c838ed8bcd6a3d4524d5cfd044bc4215443db4309f800dc43a312eca7fe9617e->enter($__internal_c838ed8bcd6a3d4524d5cfd044bc4215443db4309f800dc43a312eca7fe9617e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_c838ed8bcd6a3d4524d5cfd044bc4215443db4309f800dc43a312eca7fe9617e->leave($__internal_c838ed8bcd6a3d4524d5cfd044bc4215443db4309f800dc43a312eca7fe9617e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/home/kuba/Workspace/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
