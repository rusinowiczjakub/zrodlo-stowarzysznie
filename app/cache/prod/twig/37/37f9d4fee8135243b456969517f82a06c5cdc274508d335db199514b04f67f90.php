<?php

/* LiplexMultipleFileUploadBundle:Admin/CRUD:show_multiple_image_view.html.twig */
class __TwigTemplate_f2e53cf3219c4ce5aef382cf1743fa905c54533bc3decb8c30860385676c4bd1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "LiplexMultipleFileUploadBundle:Admin/CRUD:show_multiple_image_view.html.twig", 1);
        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_field($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"multiple-image-view\"
         ng-controller=\"MultipleFileUploadCtrl as ctrl\"
         ng-init=\"ctrl.images = [";
        // line 6
        ob_start();
        // line 7
        echo "         ";
        if (((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "vars", array(), "any", false, true), "single_upload", array(), "any", true, true) && twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "vars", array()), "single_upload", array())) || (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["field_description"] ?? null), "options", array(), "any", false, true), "single_upload", array(), "any", true, true) && twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["field_description"] ?? null), "options", array()), "single_upload", array())))) {
            // line 8
            echo "             ";
            if (($context["value"] ?? null)) {
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["value"] ?? null), "id", array()), "html", null, true);
            }
            // line 9
            echo "         ";
        } else {
            // line 10
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["value"] ?? null));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["image"], "id", array()), "html", null, true);
                if ( !twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "last", array())) {
                    echo ",";
                }
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 11
            echo "         ";
        }
        // line 12
        echo "         ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        echo "];\"
    >
        <div class=\"row\">
            ";
        // line 15
        if ((twig_length_filter($this->env, ($context["value"] ?? null)) == 0)) {
            echo "-";
        }
        // line 16
        echo "            <div class=\"col-md-2 col-sm-4 col-xs-6\" ng-repeat=\"imageId in ctrl.images\">
                <div class=\"button-container\">
                    <img ng-src=\"/api/multiple-file-upload/image/[[ imageId ]]\" class=\"thumbnail\" />
                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "LiplexMultipleFileUploadBundle:Admin/CRUD:show_multiple_image_view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 16,  92 => 15,  85 => 12,  82 => 11,  48 => 10,  45 => 9,  40 => 8,  37 => 7,  35 => 6,  31 => 4,  28 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "LiplexMultipleFileUploadBundle:Admin/CRUD:show_multiple_image_view.html.twig", "/home/kuba/Workspace/vendor/liplex/multiple-file-upload-bundle/Liplex/MultipleFileUploadBundle/Resources/views/Admin/CRUD/show_multiple_image_view.html.twig");
    }
}
