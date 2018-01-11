<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_d71d653aab5e08dd68ad531a4c348e7c37cdd5b8dfadc59b75228e19447de7ac extends Twig_Template
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
        $__internal_3933869f59e9d9f296d4388d5a763f516d6aea6c690091dcb0b3a1ff4c6fd22b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3933869f59e9d9f296d4388d5a763f516d6aea6c690091dcb0b3a1ff4c6fd22b->enter($__internal_3933869f59e9d9f296d4388d5a763f516d6aea6c690091dcb0b3a1ff4c6fd22b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_3933869f59e9d9f296d4388d5a763f516d6aea6c690091dcb0b3a1ff4c6fd22b->leave($__internal_3933869f59e9d9f296d4388d5a763f516d6aea6c690091dcb0b3a1ff4c6fd22b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/home/kuba/Workspace/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
