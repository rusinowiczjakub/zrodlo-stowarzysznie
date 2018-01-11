<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_63ca0895b2bc8536cf3041a87cf9a012c67d64da6689ca456f6e39c4adf5038f extends Twig_Template
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
        $__internal_4d0f832ab172031dcfc35d875a8ff8446bbe452a6f0e50415ca1d25a461e6b15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d0f832ab172031dcfc35d875a8ff8446bbe452a6f0e50415ca1d25a461e6b15->enter($__internal_4d0f832ab172031dcfc35d875a8ff8446bbe452a6f0e50415ca1d25a461e6b15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_4d0f832ab172031dcfc35d875a8ff8446bbe452a6f0e50415ca1d25a461e6b15->leave($__internal_4d0f832ab172031dcfc35d875a8ff8446bbe452a6f0e50415ca1d25a461e6b15_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/home/kuba/Workspace/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
