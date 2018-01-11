<?php

/* @IvoryCKEditor/Form/ckeditor_javascript.html.php */
class __TwigTemplate_1611946051e7a87b5d2c239e181377acb70262b0e2f5620e6daad64952674642 extends Twig_Template
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
        $__internal_70bb94eccfd563f73e99d99191eee5dcd0fca4e00529cd6c29ad6423c64e3b98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70bb94eccfd563f73e99d99191eee5dcd0fca4e00529cd6c29ad6423c64e3b98->enter($__internal_70bb94eccfd563f73e99d99191eee5dcd0fca4e00529cd6c29ad6423c64e3b98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@IvoryCKEditor/Form/ckeditor_javascript.html.php"));

        // line 1
        echo "<?php if (\$enable && \$async) : ?>
    <?php include __DIR__.'/_ckeditor_javascript.html.php' ?>
<?php endif; ?>
";
        
        $__internal_70bb94eccfd563f73e99d99191eee5dcd0fca4e00529cd6c29ad6423c64e3b98->leave($__internal_70bb94eccfd563f73e99d99191eee5dcd0fca4e00529cd6c29ad6423c64e3b98_prof);

    }

    public function getTemplateName()
    {
        return "@IvoryCKEditor/Form/ckeditor_javascript.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$enable && \$async) : ?>
    <?php include __DIR__.'/_ckeditor_javascript.html.php' ?>
<?php endif; ?>
", "@IvoryCKEditor/Form/ckeditor_javascript.html.php", "/home/kuba/Workspace/vendor/egeloen/ckeditor-bundle/Resources/views/Form/ckeditor_javascript.html.php");
    }
}
