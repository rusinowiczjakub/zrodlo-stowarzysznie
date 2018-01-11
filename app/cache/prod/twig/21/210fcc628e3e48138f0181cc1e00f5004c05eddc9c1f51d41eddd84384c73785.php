<?php

/* LiplexMultipleFileUploadBundle:Admin/CRUD:show_multiple_file_view.html.twig */
class __TwigTemplate_227daf0e1f3d4e10615930b5d9867302db802748486773778f27e89cac20ed1e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "LiplexMultipleFileUploadBundle:Admin/CRUD:show_multiple_file_view.html.twig", 1);
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
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "vars", array()), "single_upload", array())) {
            // line 5
            echo "        <a target=\"_blank\" href=\"/api/multiple-file-upload/file/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["value"] ?? null), "id", array()), "html", null, true);
            echo "\">
            ";
            // line 6
            if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["field_description"] ?? null), "options", array()), "safe", array())) {
                // line 7
                echo "                ";
                echo ($context["value"] ?? null);
                echo "
            ";
            } else {
                // line 9
                echo "                ";
                echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
                echo "
            ";
            }
            // line 11
            echo "        </a>
    ";
        } else {
            // line 13
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["value"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
                // line 14
                echo "            <a target=\"_blank\" href=\"/api/multiple-file-upload/file/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["file"], "id", array()), "html", null, true);
                echo "\">
                ";
                // line 15
                if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["field_description"] ?? null), "options", array()), "safe", array())) {
                    // line 16
                    echo "                    ";
                    echo $context["file"];
                    echo "
                ";
                } else {
                    // line 18
                    echo "                    ";
                    echo twig_escape_filter($this->env, $context["file"], "html", null, true);
                    echo "
                ";
                }
                // line 20
                echo "            </a>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "    ";
        }
    }

    public function getTemplateName()
    {
        return "LiplexMultipleFileUploadBundle:Admin/CRUD:show_multiple_file_view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 22,  81 => 20,  75 => 18,  69 => 16,  67 => 15,  62 => 14,  57 => 13,  53 => 11,  47 => 9,  41 => 7,  39 => 6,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "LiplexMultipleFileUploadBundle:Admin/CRUD:show_multiple_file_view.html.twig", "/home/kuba/Workspace/vendor/liplex/multiple-file-upload-bundle/Liplex/MultipleFileUploadBundle/Resources/views/Admin/CRUD/show_multiple_file_view.html.twig");
    }
}
