<?php

/* SonataAdminBundle:Core:user_block.html.twig */
class __TwigTemplate_b0782e8b6c74dbfa843f63c9149c19a5feacca469ccbcac5f3e563136d796e91 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'user_block' => array($this, 'block_user_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('user_block', $context, $blocks);
    }

    public function block_user_block($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Core:user_block.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  20 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SonataAdminBundle:Core:user_block.html.twig", "/home/kuba/Workspace/vendor/sonata-project/admin-bundle/src/Resources/views/Core/user_block.html.twig");
    }
}
