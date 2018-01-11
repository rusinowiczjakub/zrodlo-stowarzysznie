<?php

/* SonataAdminBundle:Core:user_block.html.twig */
class __TwigTemplate_6cbfa46a9f782fa927e8576ee5dc25ad187c3464844286925675e246c6f79271 extends Twig_Template
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
        $__internal_7c284bfa8c9897aab104d1b29b06c73b35b7d33af769dc0edd4084aa6989bf93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c284bfa8c9897aab104d1b29b06c73b35b7d33af769dc0edd4084aa6989bf93->enter($__internal_7c284bfa8c9897aab104d1b29b06c73b35b7d33af769dc0edd4084aa6989bf93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:user_block.html.twig"));

        // line 1
        $this->displayBlock('user_block', $context, $blocks);
        
        $__internal_7c284bfa8c9897aab104d1b29b06c73b35b7d33af769dc0edd4084aa6989bf93->leave($__internal_7c284bfa8c9897aab104d1b29b06c73b35b7d33af769dc0edd4084aa6989bf93_prof);

    }

    public function block_user_block($context, array $blocks = array())
    {
        $__internal_58010804651090804c684d13b9dcfda8232fbbefa76bacbdbee73f22445bffcb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58010804651090804c684d13b9dcfda8232fbbefa76bacbdbee73f22445bffcb->enter($__internal_58010804651090804c684d13b9dcfda8232fbbefa76bacbdbee73f22445bffcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_block"));

        
        $__internal_58010804651090804c684d13b9dcfda8232fbbefa76bacbdbee73f22445bffcb->leave($__internal_58010804651090804c684d13b9dcfda8232fbbefa76bacbdbee73f22445bffcb_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Core:user_block.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block user_block %}{# Customize this value #}{% endblock %}
", "SonataAdminBundle:Core:user_block.html.twig", "/home/kuba/Workspace/vendor/sonata-project/admin-bundle/src/Resources/views/Core/user_block.html.twig");
    }
}
