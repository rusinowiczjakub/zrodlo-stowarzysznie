<?php

/* SonataAdminBundle:CRUD/Association:edit_one_script.html.twig */
class __TwigTemplate_43048b336e594006a98415931cd97688b8414e77888bc4729b464adccd7fdc61 extends Twig_Template
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
        // line 11
        echo "

";
        // line 18
        echo "
";
        // line 20
        echo "
<!-- edit one association -->

<script type=\"text/javascript\">

    // handle the add link
    var field_add_";
        // line 26
        echo ($context["id"] ?? null);
        echo " = function(event) {

        event.preventDefault();
        event.stopPropagation();

        var form = jQuery(this).closest('form');

        // the ajax post
        jQuery(form).ajaxSubmit({
            url: '";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sonata_admin_append_form_element", (array("code" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 36
($context["sonata_admin"] ?? null), "admin", array()), "root", array()), "code", array()), "elementId" =>         // line 37
($context["id"] ?? null), "objectId" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 38
($context["sonata_admin"] ?? null), "admin", array()), "root", array()), "id", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? null), "admin", array()), "root", array()), "subject", array())), "method"), "uniqid" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 39
($context["sonata_admin"] ?? null), "admin", array()), "root", array()), "uniqid", array()), "subclass" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 40
($context["app"] ?? null), "request", array()), "query", array()), "get", array(0 => "subclass"), "method")) + $this->getAttribute($this->getAttribute(        // line 41
($context["sonata_admin"] ?? null), "field_description", array()), "getOption", array(0 => "link_parameters", 1 => array()), "method")));
        echo "',
            type: \"POST\",
            dataType: 'html',
            data: { _xml_http_request: true },
            success: function(html) {
                if (!html.length) {
                    return;
                }

                var \$newForm = jQuery(html);
                var \$oldForm = jQuery('#field_container_";
        // line 51
        echo ($context["id"] ?? null);
        echo "');

                // Maintain state of file inputs
                \$oldForm.find('input[type=\"file\"]').each(function(){
                    var id = '#'+\$(this).attr('id');
                    \$newForm.find(id).replaceWith(\$(this));
                });

                \$oldForm.replaceWith(\$newForm); // replace the html

                Admin.shared_setup(jQuery('#field_container_";
        // line 61
        echo ($context["id"] ?? null);
        echo "'));

                if(jQuery('input[type=\"file\"]', form).length > 0) {
                    jQuery(form).attr('enctype', 'multipart/form-data');
                    jQuery(form).attr('encoding', 'multipart/form-data');
                }
                jQuery('#sonata-ba-field-container-";
        // line 67
        echo ($context["id"] ?? null);
        echo "').trigger('sonata.add_element');
                jQuery('#field_container_";
        // line 68
        echo ($context["id"] ?? null);
        echo "').trigger('sonata.add_element');
            }
        });

        return false;
    };

    var field_widget_";
        // line 75
        echo ($context["id"] ?? null);
        echo " = false;

    // this function initializes the popup
    // this can be only done this way as popup can be cascaded
    function start_field_retrieve_";
        // line 79
        echo ($context["id"] ?? null);
        echo "(link) {

        link.onclick = null;

        // initialize component
        field_widget_";
        // line 84
        echo ($context["id"] ?? null);
        echo " = jQuery(\"#field_widget_";
        echo ($context["id"] ?? null);
        echo "\");

        // add the jQuery event to the a element
        jQuery(link)
            .click(field_add_";
        // line 88
        echo ($context["id"] ?? null);
        echo ")
            .trigger('click')
        ;

        return false;
    }
</script>

<!-- / edit one association -->

";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD/Association:edit_one_script.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 88,  116 => 84,  108 => 79,  101 => 75,  91 => 68,  87 => 67,  78 => 61,  65 => 51,  52 => 41,  51 => 40,  50 => 39,  49 => 38,  48 => 37,  47 => 36,  46 => 35,  34 => 26,  26 => 20,  23 => 18,  19 => 11,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SonataAdminBundle:CRUD/Association:edit_one_script.html.twig", "/home/kuba/zrodlo/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/Association/edit_one_script.html.twig");
    }
}
