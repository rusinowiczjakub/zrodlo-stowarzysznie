<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_2eb3dda264586121e6583ee83c43163376e0f3bb3a1dc2ac8752f398716fa6b5 extends Twig_Template
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
        $__internal_fb8b1ba9c24acf0a270c52ef614912d42d7496be96ca1518ce164be81ed90b41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb8b1ba9c24acf0a270c52ef614912d42d7496be96ca1518ce164be81ed90b41->enter($__internal_fb8b1ba9c24acf0a270c52ef614912d42d7496be96ca1518ce164be81ed90b41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_fb8b1ba9c24acf0a270c52ef614912d42d7496be96ca1518ce164be81ed90b41->leave($__internal_fb8b1ba9c24acf0a270c52ef614912d42d7496be96ca1518ce164be81ed90b41_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/home/kuba/Workspace/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
