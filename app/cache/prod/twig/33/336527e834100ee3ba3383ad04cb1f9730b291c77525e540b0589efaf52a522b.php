<?php

/* SonataAdminBundle:Block:block_stats.html.twig */
class __TwigTemplate_c4460ffae0c5e3d2826d1cff21c8845778f4cfca341f142de700109612a603a6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["sonata_block"] ?? null), "templates", array()), "block_base", array()), "SonataAdminBundle:Block:block_stats.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 14
        $context["translation_domain"] = (((twig_get_attribute($this->env, $this->getSourceContext(), ($context["settings"] ?? null), "translation_domain", array(), "any", true, true) &&  !(null === twig_get_attribute($this->env, $this->getSourceContext(), ($context["settings"] ?? null), "translation_domain", array())))) ? (twig_get_attribute($this->env, $this->getSourceContext(), ($context["settings"] ?? null), "translation_domain", array())) : (twig_get_attribute($this->env, $this->getSourceContext(), ($context["admin"] ?? null), "translationDomain", array())));
        // line 12
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 16
    public function block_block($context, array $blocks = array())
    {
        // line 17
        echo "    <!-- small box -->
    <div class=\"small-box ";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["settings"] ?? null), "color", array()), "html", null, true);
        echo "\">
        <div class=\"inner\">
            <h3>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["pager"] ?? null), "count", array(), "method"), "html", null, true);
        echo "</h3>
            <p>
                ";
        // line 22
        if (($context["translation_domain"] ?? null)) {
            // line 23
            echo "                    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), ($context["settings"] ?? null), "text", array()), array(), ($context["translation_domain"] ?? null)), "html", null, true);
            echo "
                ";
        } else {
            // line 25
            echo "                    ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["settings"] ?? null), "text", array()), "html", null, true);
            echo "
                ";
        }
        // line 27
        echo "            </p>
        </div>
        <div class=\"icon\">
            <i class=\"fa ";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["settings"] ?? null), "icon", array()), "html", null, true);
        echo "\"></i>
        </div>
        <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["admin"] ?? null), "generateUrl", array(0 => "list", 1 => array("filter" => twig_get_attribute($this->env, $this->getSourceContext(), ($context["settings"] ?? null), "filters", array()))), "method"), "html", null, true);
        echo "\" class=\"small-box-footer\">
            ";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("stats_view_more", array(), "SonataAdminBundle"), "html", null, true);
        echo " <i class=\"fa fa-arrow-circle-right\" aria-hidden=\"true\"></i>
        </a>
    </div>
";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Block:block_stats.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 33,  70 => 32,  65 => 30,  60 => 27,  54 => 25,  48 => 23,  46 => 22,  41 => 20,  36 => 18,  33 => 17,  30 => 16,  26 => 12,  24 => 14,  18 => 12,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SonataAdminBundle:Block:block_stats.html.twig", "/home/kuba/Workspace/vendor/sonata-project/admin-bundle/src/Resources/views/Block/block_stats.html.twig");
    }
}
