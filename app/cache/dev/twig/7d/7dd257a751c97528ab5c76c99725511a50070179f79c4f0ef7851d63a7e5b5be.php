<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_b3265e275a8da74f6dbc5773cc9f6f13abc22fe466e3f75d363ca7f99a3da0cb extends Twig_Template
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
        $__internal_bf163a42efd25594e29cfff9e51661bb790afdb628db5f1059333ce8b3932b43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf163a42efd25594e29cfff9e51661bb790afdb628db5f1059333ce8b3932b43->enter($__internal_bf163a42efd25594e29cfff9e51661bb790afdb628db5f1059333ce8b3932b43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_bf163a42efd25594e29cfff9e51661bb790afdb628db5f1059333ce8b3932b43->leave($__internal_bf163a42efd25594e29cfff9e51661bb790afdb628db5f1059333ce8b3932b43_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/home/kuba/Workspace/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
