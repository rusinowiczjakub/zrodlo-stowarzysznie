<?php

/* SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_association_script.html.twig */
class __TwigTemplate_cbea9920fb98f9e5dbc9dad5652676d875f06209a052e52f9c1cab5db0aaf262 extends Twig_Template
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
        $__internal_6e90476f39e723b99091bac2ddad09653921138bb05414882b0856a140908861 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e90476f39e723b99091bac2ddad09653921138bb05414882b0856a140908861->enter($__internal_6e90476f39e723b99091bac2ddad09653921138bb05414882b0856a140908861_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_association_script.html.twig"));

        // line 11
        echo "

";
        // line 18
        echo "
";
        // line 20
        echo "
";
        // line 21
        $context["associationadmin"] = twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 21, $this->getSourceContext()); })()), "field_description", array()), "associationadmin", array());
        // line 22
        echo "
<!-- edit many association -->

<script type=\"text/javascript\">

    ";
        // line 32
        echo "
    var field_dialog_form_list_link_";
        // line 33
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 33, $this->getSourceContext()); })());
        echo " = function(event) {
        initialize_popup_";
        // line 34
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 34, $this->getSourceContext()); })());
        echo "();

        var target = jQuery(this);
        
        if (target.attr('href').length === 0 || target.attr('href') === '#') {
            return;
        }

        event.preventDefault();
        event.stopPropagation();

        Admin.log('[";
        // line 45
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 45, $this->getSourceContext()); })());
        echo "|field_dialog_form_list_link] handle link click in a list');

        var element = jQuery(this).parents('#field_dialog_";
        // line 47
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 47, $this->getSourceContext()); })());
        echo " .sonata-ba-list-field');

        // the user does not click on a row column
        if (element.length == 0) {
            Admin.log('[";
        // line 51
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 51, $this->getSourceContext()); })());
        echo "|field_dialog_form_list_link] the user does not click on a row column, make ajax call to retrieve inner html');
            // make a recursive call (ie: reset the filter)
            jQuery.ajax({
                type: 'GET',
                url: jQuery(this).attr('href'),
                dataType: 'html',
                success: function(html) {
                    Admin.log('[";
        // line 58
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 58, $this->getSourceContext()); })());
        echo "|field_dialog_form_list_link] callback success, attach valid js event');

                    field_dialog_content_";
        // line 60
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 60, $this->getSourceContext()); })());
        echo ".html(html);
                    field_dialog_form_list_handle_action_";
        // line 61
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 61, $this->getSourceContext()); })());
        echo "();

                    Admin.shared_setup(field_dialog_";
        // line 63
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 63, $this->getSourceContext()); })());
        echo ");
                }
            });

            return;
        }

        Admin.log('[";
        // line 70
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 70, $this->getSourceContext()); })());
        echo "|field_dialog_form_list_link] the user select one element, update input and hide the modal');

        jQuery('#";
        // line 72
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 72, $this->getSourceContext()); })());
        echo "').val(element.attr('objectId'));
        jQuery('#";
        // line 73
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 73, $this->getSourceContext()); })());
        echo "').trigger('change');

        field_dialog_";
        // line 75
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 75, $this->getSourceContext()); })());
        echo ".modal('hide');
    };

    // this function handle action on the modal list when inside a selected list
    var field_dialog_form_list_handle_action_";
        // line 79
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 79, $this->getSourceContext()); })());
        echo "  =  function() {
        Admin.log('[";
        // line 80
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 80, $this->getSourceContext()); })());
        echo "|field_dialog_form_list_handle_action] attaching valid js event');

        // capture the submit event to make an ajax call, ie : POST data to the
        // related create admin
        jQuery('a', field_dialog_";
        // line 84
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 84, $this->getSourceContext()); })());
        echo ").on('click', field_dialog_form_list_link_";
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 84, $this->getSourceContext()); })());
        echo ");
        jQuery('form', field_dialog_";
        // line 85
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 85, $this->getSourceContext()); })());
        echo ").on('submit', function(event) {
            event.preventDefault();

            var form = jQuery(this);

            Admin.log('[";
        // line 90
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 90, $this->getSourceContext()); })());
        echo "|field_dialog_form_list_handle_action] catching submit event, sending ajax request');

            jQuery(form).ajaxSubmit({
                type: form.attr('method'),
                url: form.attr('action'),
                dataType: 'html',
                data: {_xml_http_request: true},
                success: function(html) {

                    Admin.log('[";
        // line 99
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 99, $this->getSourceContext()); })());
        echo "|field_dialog_form_list_handle_action] form submit success, restoring event');

                    field_dialog_content_";
        // line 101
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 101, $this->getSourceContext()); })());
        echo ".html(html);
                    field_dialog_form_list_handle_action_";
        // line 102
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 102, $this->getSourceContext()); })());
        echo "();

                    Admin.shared_setup(field_dialog_";
        // line 104
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 104, $this->getSourceContext()); })());
        echo ");
                }
            });
        });
    };

    // handle the list link
    var field_dialog_form_list_";
        // line 111
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 111, $this->getSourceContext()); })());
        echo " = function(event) {

        initialize_popup_";
        // line 113
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 113, $this->getSourceContext()); })());
        echo "();

        event.preventDefault();
        event.stopPropagation();

        Admin.log('[";
        // line 118
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 118, $this->getSourceContext()); })());
        echo "|field_dialog_form_list] open the list modal');

        var a = jQuery(this);

        field_dialog_content_";
        // line 122
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 122, $this->getSourceContext()); })());
        echo ".html('');

        // retrieve the form element from the related admin generator
        jQuery.ajax({
            url: a.attr('href'),
            dataType: 'html',
            success: function(html) {

                Admin.log('[";
        // line 130
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 130, $this->getSourceContext()); })());
        echo "|field_dialog_form_list] retrieving the list content');

                // populate the popup container
                field_dialog_content_";
        // line 133
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 133, $this->getSourceContext()); })());
        echo ".html(html);

                field_dialog_title_";
        // line 135
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 135, $this->getSourceContext()); })());
        echo ".html(\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["associationadmin"]) || array_key_exists("associationadmin", $context) ? $context["associationadmin"] : (function () { throw new Twig_Error_Runtime('Variable "associationadmin" does not exist.', 135, $this->getSourceContext()); })()), "label", array()), array(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["associationadmin"]) || array_key_exists("associationadmin", $context) ? $context["associationadmin"] : (function () { throw new Twig_Error_Runtime('Variable "associationadmin" does not exist.', 135, $this->getSourceContext()); })()), "translationdomain", array()));
        echo "\");

                Admin.shared_setup(field_dialog_";
        // line 137
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 137, $this->getSourceContext()); })());
        echo ");

                field_dialog_form_list_handle_action_";
        // line 139
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 139, $this->getSourceContext()); })());
        echo "();

                // open the dialog in modal mode
                field_dialog_";
        // line 142
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 142, $this->getSourceContext()); })());
        echo ".modal();

                Admin.setup_list_modal(field_dialog_";
        // line 144
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 144, $this->getSourceContext()); })());
        echo ");
            }
        });
    };

    // handle the add link
    var field_dialog_form_add_";
        // line 150
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 150, $this->getSourceContext()); })());
        echo " = function(event) {
        initialize_popup_";
        // line 151
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 151, $this->getSourceContext()); })());
        echo "();

        event.preventDefault();
        event.stopPropagation();

        var a = jQuery(this);

        field_dialog_content_";
        // line 158
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 158, $this->getSourceContext()); })());
        echo ".html('');

        Admin.log('[";
        // line 160
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 160, $this->getSourceContext()); })());
        echo "|field_dialog_form_add] add link action');

        // retrieve the form element from the related admin generator
        jQuery.ajax({
            url: a.attr('href'),
            dataType: 'html',
            success: function(html) {

                Admin.log('[";
        // line 168
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 168, $this->getSourceContext()); })());
        echo "|field_dialog_form_add] ajax success', field_dialog_";
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 168, $this->getSourceContext()); })());
        echo ");

                // populate the popup container
                field_dialog_content_";
        // line 171
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 171, $this->getSourceContext()); })());
        echo ".html(html);
                field_dialog_title_";
        // line 172
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 172, $this->getSourceContext()); })());
        echo ".html(\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["associationadmin"]) || array_key_exists("associationadmin", $context) ? $context["associationadmin"] : (function () { throw new Twig_Error_Runtime('Variable "associationadmin" does not exist.', 172, $this->getSourceContext()); })()), "label", array()), array(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["associationadmin"]) || array_key_exists("associationadmin", $context) ? $context["associationadmin"] : (function () { throw new Twig_Error_Runtime('Variable "associationadmin" does not exist.', 172, $this->getSourceContext()); })()), "translationdomain", array()));
        echo "\");

                Admin.shared_setup(field_dialog_";
        // line 174
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 174, $this->getSourceContext()); })());
        echo ");

                // capture the submit event to make an ajax call, ie : POST data to the
                // related create admin
                jQuery('a', field_dialog_";
        // line 178
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 178, $this->getSourceContext()); })());
        echo ").on('click', field_dialog_form_action_";
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 178, $this->getSourceContext()); })());
        echo ");
                jQuery('form', field_dialog_";
        // line 179
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 179, $this->getSourceContext()); })());
        echo ").on('submit', field_dialog_form_action_";
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 179, $this->getSourceContext()); })());
        echo ");

                // open the dialog in modal mode
                field_dialog_";
        // line 182
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 182, $this->getSourceContext()); })());
        echo ".modal();

                Admin.setup_list_modal(field_dialog_";
        // line 184
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 184, $this->getSourceContext()); })());
        echo ");
            }
        });
    };

    // handle the edit link
    var field_dialog_form_edit_";
        // line 190
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 190, $this->getSourceContext()); })());
        echo " = function(event) {
        initialize_popup_";
        // line 191
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 191, $this->getSourceContext()); })());
        echo "();

        event.preventDefault();
        event.stopPropagation();

        var a = jQuery(this);

        field_dialog_content_";
        // line 198
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 198, $this->getSourceContext()); })());
        echo ".html('');

        Admin.log('[";
        // line 200
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 200, $this->getSourceContext()); })());
        echo "|field_dialog_form_edit] edit link action');

        // retrieve the form element from the related admin generator
        jQuery.ajax({
            url: a.attr('href'),
            dataType: 'html',
            success: function(html) {

                Admin.log('[";
        // line 208
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 208, $this->getSourceContext()); })());
        echo "|field_dialog_form_edit] ajax success', field_dialog_";
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 208, $this->getSourceContext()); })());
        echo ");

                // populate the popup container
                field_dialog_content_";
        // line 211
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 211, $this->getSourceContext()); })());
        echo ".html(html);
                field_dialog_title_";
        // line 212
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 212, $this->getSourceContext()); })());
        echo ".html(\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["associationadmin"]) || array_key_exists("associationadmin", $context) ? $context["associationadmin"] : (function () { throw new Twig_Error_Runtime('Variable "associationadmin" does not exist.', 212, $this->getSourceContext()); })()), "label", array()), array(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["associationadmin"]) || array_key_exists("associationadmin", $context) ? $context["associationadmin"] : (function () { throw new Twig_Error_Runtime('Variable "associationadmin" does not exist.', 212, $this->getSourceContext()); })()), "translationdomain", array()));
        echo "\");

                Admin.shared_setup(field_dialog_";
        // line 214
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 214, $this->getSourceContext()); })());
        echo ");

                // capture the submit event to make an ajax call, ie : POST data to the
                // related create admin
                jQuery('a', field_dialog_";
        // line 218
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 218, $this->getSourceContext()); })());
        echo ").on('click', field_dialog_form_action_";
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 218, $this->getSourceContext()); })());
        echo ");
                jQuery('form', field_dialog_";
        // line 219
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 219, $this->getSourceContext()); })());
        echo ").on('submit', field_dialog_form_action_";
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 219, $this->getSourceContext()); })());
        echo ");

                // open the dialog in modal mode
                field_dialog_";
        // line 222
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 222, $this->getSourceContext()); })());
        echo ".modal();

                Admin.setup_list_modal(field_dialog_";
        // line 224
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 224, $this->getSourceContext()); })());
        echo ");
            }
        });
    };

    // handle the post data
    var field_dialog_form_action_";
        // line 230
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 230, $this->getSourceContext()); })());
        echo " = function(event) {

        var element = jQuery(this);

        // return if the link is an anchor inside the same page
        if (
            this.nodeName === 'A'
            && (
                element.attr('href').length === 0
                || element.attr('href')[0] === '#'
                || element.attr('href').substr(0, 11) === 'javascript:'
            )
        ) {
            Admin.log('[";
        // line 243
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 243, $this->getSourceContext()); })());
        echo "|field_dialog_form_action] element is an anchor or a script, skipping action', this);
            return;
        }

        event.preventDefault();
        event.stopPropagation();

        Admin.log('[";
        // line 250
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 250, $this->getSourceContext()); })());
        echo "|field_dialog_form_action] action catch', this);

        initialize_popup_";
        // line 252
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 252, $this->getSourceContext()); })());
        echo "();

        if (this.nodeName == 'FORM') {
            var url  = element.attr('action');
            var type = element.attr('method');
        } else if (this.nodeName == 'A') {
            var url  = element.attr('href');
            var type = 'GET';
        } else {
            alert('unexpected element : @' + this.nodeName + '@');
            return;
        }

        if (element.hasClass('sonata-ba-action')) {
            Admin.log('[";
        // line 266
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 266, $this->getSourceContext()); })());
        echo "|field_dialog_form_action] reserved action stop catch all events');
            return;
        }

        var data = {
            _xml_http_request: true
        }

        var form = jQuery(this);

        Admin.log('[";
        // line 276
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 276, $this->getSourceContext()); })());
        echo "|field_dialog_form_action] execute ajax call');

        // the ajax post
        jQuery(form).ajaxSubmit({
            url: url,
            type: type,
            data: data,
            success: function(data) {
                Admin.log('[";
        // line 284
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 284, $this->getSourceContext()); })());
        echo "|field_dialog_form_action] ajax success');

                // if the crud action return ok, then the element has been added
                // so the widget container must be refresh with the last option available
                if (typeof data != 'string' && data.result == 'ok') {
                    field_dialog_";
        // line 289
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 289, $this->getSourceContext()); })());
        echo ".modal('hide');

                    ";
        // line 291
        if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 291, $this->getSourceContext()); })()), "edit", array()) == "list")) {
            // line 292
            echo "                        ";
            // line 296
            echo "                        jQuery('#";
            echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 296, $this->getSourceContext()); })());
            echo "').val(data.objectId);
                        jQuery('#";
            // line 297
            echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 297, $this->getSourceContext()); })());
            echo "').change();

                    ";
        } else {
            // line 300
            echo "
                        // reload the form element
                        jQuery('#field_widget_";
            // line 302
            echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 302, $this->getSourceContext()); })());
            echo "').closest('form').ajaxSubmit({
                            url: '";
            // line 303
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sonata_admin_retrieve_form_element", array("elementId" =>             // line 304
(isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 304, $this->getSourceContext()); })()), "subclass" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),             // line 305
(isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 305, $this->getSourceContext()); })()), "admin", array()), "getActiveSubclassCode", array(), "method"), "objectId" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),             // line 306
(isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 306, $this->getSourceContext()); })()), "admin", array()), "root", array()), "id", array(0 => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 306, $this->getSourceContext()); })()), "admin", array()), "root", array()), "subject", array())), "method"), "uniqid" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),             // line 307
(isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 307, $this->getSourceContext()); })()), "admin", array()), "root", array()), "uniqid", array()), "code" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),             // line 308
(isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 308, $this->getSourceContext()); })()), "admin", array()), "root", array()), "code", array())));
            // line 309
            echo "',
                            data: {_xml_http_request: true },
                            dataType: 'html',
                            type: 'POST',
                            success: function(html) {
                                jQuery('#field_container_";
            // line 314
            echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 314, $this->getSourceContext()); })());
            echo "').replaceWith(html);
                                var newElement = jQuery('#";
            // line 315
            echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 315, $this->getSourceContext()); })());
            echo " [value=\"' + data.objectId + '\"]');
                                if (newElement.is(\"input\")) {
                                    newElement.attr('checked', 'checked');
                                } else {
                                    newElement.attr('selected', 'selected');
                                }

                                jQuery('#field_container_";
            // line 322
            echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 322, $this->getSourceContext()); })());
            echo "').trigger('sonata-admin-append-form-element');
                            }
                        });

                    ";
        }
        // line 327
        echo "
                    return;
                }

                // otherwise, display form error
                field_dialog_content_";
        // line 332
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 332, $this->getSourceContext()); })());
        echo ".html(data);

                Admin.shared_setup(field_dialog_";
        // line 334
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 334, $this->getSourceContext()); })());
        echo ");

                // reattach the event
                jQuery('form', field_dialog_";
        // line 337
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 337, $this->getSourceContext()); })());
        echo ").submit(field_dialog_form_action_";
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 337, $this->getSourceContext()); })());
        echo ");
            }
        });

        return false;
    };

    var field_dialog_";
        // line 344
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 344, $this->getSourceContext()); })());
        echo "         = false;
    var field_dialog_content_";
        // line 345
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 345, $this->getSourceContext()); })());
        echo " = false;
    var field_dialog_title_";
        // line 346
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 346, $this->getSourceContext()); })());
        echo "   = false;

    function initialize_popup_";
        // line 348
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 348, $this->getSourceContext()); })());
        echo "() {
        // initialize component
        if (!field_dialog_";
        // line 350
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 350, $this->getSourceContext()); })());
        echo ") {
            field_dialog_";
        // line 351
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 351, $this->getSourceContext()); })());
        echo "         = jQuery(\"#field_dialog_";
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 351, $this->getSourceContext()); })());
        echo "\");
            field_dialog_content_";
        // line 352
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 352, $this->getSourceContext()); })());
        echo " = jQuery(\".modal-body\", \"#field_dialog_";
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 352, $this->getSourceContext()); })());
        echo "\");
            field_dialog_title_";
        // line 353
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 353, $this->getSourceContext()); })());
        echo "   = jQuery(\".modal-title\", \"#field_dialog_";
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 353, $this->getSourceContext()); })());
        echo "\");

            // move the dialog as a child of the root element, nested form breaks html ...
            jQuery(document.body).append(field_dialog_";
        // line 356
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 356, $this->getSourceContext()); })());
        echo ");

            Admin.log('[";
        // line 358
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 358, $this->getSourceContext()); })());
        echo "|field_dialog] move dialog container as a document child');
        }
    }

    ";
        // line 365
        echo "    // this function initialize the popup
    // this can be only done this way has popup can be cascaded
    function start_field_dialog_form_add_";
        // line 367
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 367, $this->getSourceContext()); })());
        echo "(link) {

        // remove the html event
        link.onclick = null;

        initialize_popup_";
        // line 372
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 372, $this->getSourceContext()); })());
        echo "();

        // add the jQuery event to the a element
        jQuery(link)
            .click(field_dialog_form_add_";
        // line 376
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 376, $this->getSourceContext()); })());
        echo ")
            .trigger('click')
        ;

        return false;
    }
    
    ";
        // line 386
        echo "    // this function initializes the popup
    // this can only be done this way as popup can be cascaded
    function start_field_dialog_form_edit_";
        // line 388
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 388, $this->getSourceContext()); })());
        echo "(link) {

        // remove the html event
        link.onclick = null;

        initialize_popup_";
        // line 393
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 393, $this->getSourceContext()); })());
        echo "();

        // add the jQuery event to the a element
        jQuery(link)
            .click(field_dialog_form_edit_";
        // line 397
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 397, $this->getSourceContext()); })());
        echo ")
            .trigger('click')
        ;

        return false;
    }

    if (field_dialog_";
        // line 404
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 404, $this->getSourceContext()); })());
        echo ") {
        Admin.shared_setup(field_dialog_";
        // line 405
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 405, $this->getSourceContext()); })());
        echo ");
    }

    ";
        // line 408
        if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 408, $this->getSourceContext()); })()), "edit", array()) == "list")) {
            // line 409
            echo "        ";
            // line 412
            echo "        // this function initialize the popup
        // this can be only done this way has popup can be cascaded
        function start_field_dialog_form_list_";
            // line 414
            echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 414, $this->getSourceContext()); })());
            echo "(link) {

            link.onclick = null;

            initialize_popup_";
            // line 418
            echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 418, $this->getSourceContext()); })());
            echo "();

            // add the jQuery event to the a element
            jQuery(link)
                .click(field_dialog_form_list_";
            // line 422
            echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 422, $this->getSourceContext()); })());
            echo ")
                .trigger('click')
            ;

            return false;
        }

        function remove_selected_element_";
            // line 429
            echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 429, $this->getSourceContext()); })());
            echo "(link) {

            link.onclick = null;

            jQuery(link)
                .click(field_remove_element_";
            // line 434
            echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 434, $this->getSourceContext()); })());
            echo ")
                .trigger('click')
            ;

            return false;
        }

        function field_remove_element_";
            // line 441
            echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 441, $this->getSourceContext()); })());
            echo "(event) {
            event.preventDefault();

            if (jQuery('#";
            // line 444
            echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 444, $this->getSourceContext()); })());
            echo " option').get(0)) {
                jQuery('#";
            // line 445
            echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 445, $this->getSourceContext()); })());
            echo "').attr('selectedIndex', '-1').children(\"option:selected\").attr(\"selected\", false);
            }

            jQuery('#";
            // line 448
            echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 448, $this->getSourceContext()); })());
            echo "').val('');
            jQuery('#";
            // line 449
            echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 449, $this->getSourceContext()); })());
            echo "').trigger('change');

            return false;
        }
        ";
            // line 456
            echo "
        // update the label
        jQuery('#";
            // line 458
            echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 458, $this->getSourceContext()); })());
            echo "').on('change', function(event) {

            Admin.log('[";
            // line 460
            echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 460, $this->getSourceContext()); })());
            echo "|on:change] update the label');

            jQuery('#field_widget_";
            // line 462
            echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 462, $this->getSourceContext()); })());
            echo "').html(\"<span><img src=\\\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sonataadmin/ajax-loader.gif");
            echo "\\\" style=\\\"vertical-align: middle; margin-right: 10px\\\"/>";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("loading_information", array(), "SonataAdminBundle");
            echo "</span>\");
            jQuery.ajax({
                type: 'GET',
                url: '";
            // line 465
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sonata_admin_short_object_information", array("objectId" => "OBJECT_ID", "uniqid" => twig_get_attribute($this->env, $this->getSourceContext(),             // line 467
(isset($context["associationadmin"]) || array_key_exists("associationadmin", $context) ? $context["associationadmin"] : (function () { throw new Twig_Error_Runtime('Variable "associationadmin" does not exist.', 467, $this->getSourceContext()); })()), "uniqid", array()), "code" => twig_get_attribute($this->env, $this->getSourceContext(),             // line 468
(isset($context["associationadmin"]) || array_key_exists("associationadmin", $context) ? $context["associationadmin"] : (function () { throw new Twig_Error_Runtime('Variable "associationadmin" does not exist.', 468, $this->getSourceContext()); })()), "code", array()), "linkParameters" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),             // line 469
(isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 469, $this->getSourceContext()); })()), "field_description", array()), "options", array()), "link_parameters", array())));
            // line 470
            echo "'.replace('OBJECT_ID', jQuery(this).val()),
                dataType: 'html',
                success: function(html) {
                    jQuery('#field_widget_";
            // line 473
            echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 473, $this->getSourceContext()); })());
            echo "').html(html);
                }
            });

            ";
            // line 477
            if ((isset($context["btn_edit"]) || array_key_exists("btn_edit", $context) ? $context["btn_edit"] : (function () { throw new Twig_Error_Runtime('Variable "btn_edit" does not exist.', 477, $this->getSourceContext()); })())) {
                // line 478
                echo "                var edit_button_url = '";
                echo twig_get_attribute($this->env, $this->getSourceContext(),                 // line 479
(isset($context["associationadmin"]) || array_key_exists("associationadmin", $context) ? $context["associationadmin"] : (function () { throw new Twig_Error_Runtime('Variable "associationadmin" does not exist.', 479, $this->getSourceContext()); })()), "generateUrl", array(0 => "edit", 1 => array("id" => "OBJECT_ID")), "method");
                // line 480
                echo "'.replace('OBJECT_ID', jQuery(this).val());

                jQuery('#field_actions_";
                // line 482
                echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 482, $this->getSourceContext()); })());
                echo " a.btn-warning').attr('href', edit_button_url);
            ";
            }
            // line 484
            echo "        });

    ";
        }
        // line 487
        echo "

</script>
<!-- / edit many association -->

";
        
        $__internal_6e90476f39e723b99091bac2ddad09653921138bb05414882b0856a140908861->leave($__internal_6e90476f39e723b99091bac2ddad09653921138bb05414882b0856a140908861_prof);

    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_association_script.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  866 => 487,  861 => 484,  856 => 482,  852 => 480,  850 => 479,  848 => 478,  846 => 477,  839 => 473,  834 => 470,  832 => 469,  831 => 468,  830 => 467,  829 => 465,  819 => 462,  814 => 460,  809 => 458,  805 => 456,  798 => 449,  794 => 448,  788 => 445,  784 => 444,  778 => 441,  768 => 434,  760 => 429,  750 => 422,  743 => 418,  736 => 414,  732 => 412,  730 => 409,  728 => 408,  722 => 405,  718 => 404,  708 => 397,  701 => 393,  693 => 388,  689 => 386,  679 => 376,  672 => 372,  664 => 367,  660 => 365,  653 => 358,  648 => 356,  640 => 353,  634 => 352,  628 => 351,  624 => 350,  619 => 348,  614 => 346,  610 => 345,  606 => 344,  594 => 337,  588 => 334,  583 => 332,  576 => 327,  568 => 322,  558 => 315,  554 => 314,  547 => 309,  545 => 308,  544 => 307,  543 => 306,  542 => 305,  541 => 304,  540 => 303,  536 => 302,  532 => 300,  526 => 297,  521 => 296,  519 => 292,  517 => 291,  512 => 289,  504 => 284,  493 => 276,  480 => 266,  463 => 252,  458 => 250,  448 => 243,  432 => 230,  423 => 224,  418 => 222,  410 => 219,  404 => 218,  397 => 214,  390 => 212,  386 => 211,  378 => 208,  367 => 200,  362 => 198,  352 => 191,  348 => 190,  339 => 184,  334 => 182,  326 => 179,  320 => 178,  313 => 174,  306 => 172,  302 => 171,  294 => 168,  283 => 160,  278 => 158,  268 => 151,  264 => 150,  255 => 144,  250 => 142,  244 => 139,  239 => 137,  232 => 135,  227 => 133,  221 => 130,  210 => 122,  203 => 118,  195 => 113,  190 => 111,  180 => 104,  175 => 102,  171 => 101,  166 => 99,  154 => 90,  146 => 85,  140 => 84,  133 => 80,  129 => 79,  122 => 75,  117 => 73,  113 => 72,  108 => 70,  98 => 63,  93 => 61,  89 => 60,  84 => 58,  74 => 51,  67 => 47,  62 => 45,  48 => 34,  44 => 33,  41 => 32,  34 => 22,  32 => 21,  29 => 20,  26 => 18,  22 => 11,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}


{#

This code manage the many-to-[one|many] association field popup

#}

{% autoescape false %}

{% set associationadmin = sonata_admin.field_description.associationadmin %}

<!-- edit many association -->

<script type=\"text/javascript\">

    {#
      handle link click in a list :
        - if the parent has an objectId defined then the related input get updated
        - if the parent has NO object then an ajax request is made to refresh the popup
    #}

    var field_dialog_form_list_link_{{ id }} = function(event) {
        initialize_popup_{{ id }}();

        var target = jQuery(this);
        
        if (target.attr('href').length === 0 || target.attr('href') === '#') {
            return;
        }

        event.preventDefault();
        event.stopPropagation();

        Admin.log('[{{ id }}|field_dialog_form_list_link] handle link click in a list');

        var element = jQuery(this).parents('#field_dialog_{{ id }} .sonata-ba-list-field');

        // the user does not click on a row column
        if (element.length == 0) {
            Admin.log('[{{ id }}|field_dialog_form_list_link] the user does not click on a row column, make ajax call to retrieve inner html');
            // make a recursive call (ie: reset the filter)
            jQuery.ajax({
                type: 'GET',
                url: jQuery(this).attr('href'),
                dataType: 'html',
                success: function(html) {
                    Admin.log('[{{ id }}|field_dialog_form_list_link] callback success, attach valid js event');

                    field_dialog_content_{{ id }}.html(html);
                    field_dialog_form_list_handle_action_{{ id }}();

                    Admin.shared_setup(field_dialog_{{ id }});
                }
            });

            return;
        }

        Admin.log('[{{ id }}|field_dialog_form_list_link] the user select one element, update input and hide the modal');

        jQuery('#{{ id }}').val(element.attr('objectId'));
        jQuery('#{{ id }}').trigger('change');

        field_dialog_{{ id }}.modal('hide');
    };

    // this function handle action on the modal list when inside a selected list
    var field_dialog_form_list_handle_action_{{ id }}  =  function() {
        Admin.log('[{{ id }}|field_dialog_form_list_handle_action] attaching valid js event');

        // capture the submit event to make an ajax call, ie : POST data to the
        // related create admin
        jQuery('a', field_dialog_{{ id }}).on('click', field_dialog_form_list_link_{{ id }});
        jQuery('form', field_dialog_{{ id }}).on('submit', function(event) {
            event.preventDefault();

            var form = jQuery(this);

            Admin.log('[{{ id }}|field_dialog_form_list_handle_action] catching submit event, sending ajax request');

            jQuery(form).ajaxSubmit({
                type: form.attr('method'),
                url: form.attr('action'),
                dataType: 'html',
                data: {_xml_http_request: true},
                success: function(html) {

                    Admin.log('[{{ id }}|field_dialog_form_list_handle_action] form submit success, restoring event');

                    field_dialog_content_{{ id }}.html(html);
                    field_dialog_form_list_handle_action_{{ id }}();

                    Admin.shared_setup(field_dialog_{{ id }});
                }
            });
        });
    };

    // handle the list link
    var field_dialog_form_list_{{ id }} = function(event) {

        initialize_popup_{{ id }}();

        event.preventDefault();
        event.stopPropagation();

        Admin.log('[{{ id }}|field_dialog_form_list] open the list modal');

        var a = jQuery(this);

        field_dialog_content_{{ id }}.html('');

        // retrieve the form element from the related admin generator
        jQuery.ajax({
            url: a.attr('href'),
            dataType: 'html',
            success: function(html) {

                Admin.log('[{{ id }}|field_dialog_form_list] retrieving the list content');

                // populate the popup container
                field_dialog_content_{{ id }}.html(html);

                field_dialog_title_{{ id }}.html(\"{{ associationadmin.label|trans({}, associationadmin.translationdomain) }}\");

                Admin.shared_setup(field_dialog_{{ id }});

                field_dialog_form_list_handle_action_{{ id }}();

                // open the dialog in modal mode
                field_dialog_{{ id }}.modal();

                Admin.setup_list_modal(field_dialog_{{ id }});
            }
        });
    };

    // handle the add link
    var field_dialog_form_add_{{ id }} = function(event) {
        initialize_popup_{{ id }}();

        event.preventDefault();
        event.stopPropagation();

        var a = jQuery(this);

        field_dialog_content_{{ id }}.html('');

        Admin.log('[{{ id }}|field_dialog_form_add] add link action');

        // retrieve the form element from the related admin generator
        jQuery.ajax({
            url: a.attr('href'),
            dataType: 'html',
            success: function(html) {

                Admin.log('[{{ id }}|field_dialog_form_add] ajax success', field_dialog_{{ id }});

                // populate the popup container
                field_dialog_content_{{ id }}.html(html);
                field_dialog_title_{{ id }}.html(\"{{ associationadmin.label|trans({}, associationadmin.translationdomain) }}\");

                Admin.shared_setup(field_dialog_{{ id }});

                // capture the submit event to make an ajax call, ie : POST data to the
                // related create admin
                jQuery('a', field_dialog_{{ id }}).on('click', field_dialog_form_action_{{ id }});
                jQuery('form', field_dialog_{{ id }}).on('submit', field_dialog_form_action_{{ id }});

                // open the dialog in modal mode
                field_dialog_{{ id }}.modal();

                Admin.setup_list_modal(field_dialog_{{ id }});
            }
        });
    };

    // handle the edit link
    var field_dialog_form_edit_{{ id }} = function(event) {
        initialize_popup_{{ id }}();

        event.preventDefault();
        event.stopPropagation();

        var a = jQuery(this);

        field_dialog_content_{{ id }}.html('');

        Admin.log('[{{ id }}|field_dialog_form_edit] edit link action');

        // retrieve the form element from the related admin generator
        jQuery.ajax({
            url: a.attr('href'),
            dataType: 'html',
            success: function(html) {

                Admin.log('[{{ id }}|field_dialog_form_edit] ajax success', field_dialog_{{ id }});

                // populate the popup container
                field_dialog_content_{{ id }}.html(html);
                field_dialog_title_{{ id }}.html(\"{{ associationadmin.label|trans({}, associationadmin.translationdomain) }}\");

                Admin.shared_setup(field_dialog_{{ id }});

                // capture the submit event to make an ajax call, ie : POST data to the
                // related create admin
                jQuery('a', field_dialog_{{ id }}).on('click', field_dialog_form_action_{{ id }});
                jQuery('form', field_dialog_{{ id }}).on('submit', field_dialog_form_action_{{ id }});

                // open the dialog in modal mode
                field_dialog_{{ id }}.modal();

                Admin.setup_list_modal(field_dialog_{{ id }});
            }
        });
    };

    // handle the post data
    var field_dialog_form_action_{{ id }} = function(event) {

        var element = jQuery(this);

        // return if the link is an anchor inside the same page
        if (
            this.nodeName === 'A'
            && (
                element.attr('href').length === 0
                || element.attr('href')[0] === '#'
                || element.attr('href').substr(0, 11) === 'javascript:'
            )
        ) {
            Admin.log('[{{ id }}|field_dialog_form_action] element is an anchor or a script, skipping action', this);
            return;
        }

        event.preventDefault();
        event.stopPropagation();

        Admin.log('[{{ id }}|field_dialog_form_action] action catch', this);

        initialize_popup_{{ id }}();

        if (this.nodeName == 'FORM') {
            var url  = element.attr('action');
            var type = element.attr('method');
        } else if (this.nodeName == 'A') {
            var url  = element.attr('href');
            var type = 'GET';
        } else {
            alert('unexpected element : @' + this.nodeName + '@');
            return;
        }

        if (element.hasClass('sonata-ba-action')) {
            Admin.log('[{{ id }}|field_dialog_form_action] reserved action stop catch all events');
            return;
        }

        var data = {
            _xml_http_request: true
        }

        var form = jQuery(this);

        Admin.log('[{{ id }}|field_dialog_form_action] execute ajax call');

        // the ajax post
        jQuery(form).ajaxSubmit({
            url: url,
            type: type,
            data: data,
            success: function(data) {
                Admin.log('[{{ id }}|field_dialog_form_action] ajax success');

                // if the crud action return ok, then the element has been added
                // so the widget container must be refresh with the last option available
                if (typeof data != 'string' && data.result == 'ok') {
                    field_dialog_{{ id }}.modal('hide');

                    {% if sonata_admin.edit == 'list' %}
                        {#
                           in this case we update the hidden input, and call the change event to
                           retrieve the post information
                        #}
                        jQuery('#{{ id }}').val(data.objectId);
                        jQuery('#{{ id }}').change();

                    {% else %}

                        // reload the form element
                        jQuery('#field_widget_{{ id }}').closest('form').ajaxSubmit({
                            url: '{{ path('sonata_admin_retrieve_form_element', {
                                'elementId': id,
                                'subclass':  sonata_admin.admin.getActiveSubclassCode(),
                                'objectId':  sonata_admin.admin.root.id(sonata_admin.admin.root.subject),
                                'uniqid':    sonata_admin.admin.root.uniqid,
                                'code':      sonata_admin.admin.root.code
                            }) }}',
                            data: {_xml_http_request: true },
                            dataType: 'html',
                            type: 'POST',
                            success: function(html) {
                                jQuery('#field_container_{{ id }}').replaceWith(html);
                                var newElement = jQuery('#{{ id }} [value=\"' + data.objectId + '\"]');
                                if (newElement.is(\"input\")) {
                                    newElement.attr('checked', 'checked');
                                } else {
                                    newElement.attr('selected', 'selected');
                                }

                                jQuery('#field_container_{{ id }}').trigger('sonata-admin-append-form-element');
                            }
                        });

                    {% endif %}

                    return;
                }

                // otherwise, display form error
                field_dialog_content_{{ id }}.html(data);

                Admin.shared_setup(field_dialog_{{ id }});

                // reattach the event
                jQuery('form', field_dialog_{{ id }}).submit(field_dialog_form_action_{{ id }});
            }
        });

        return false;
    };

    var field_dialog_{{ id }}         = false;
    var field_dialog_content_{{ id }} = false;
    var field_dialog_title_{{ id }}   = false;

    function initialize_popup_{{ id }}() {
        // initialize component
        if (!field_dialog_{{ id }}) {
            field_dialog_{{ id }}         = jQuery(\"#field_dialog_{{ id }}\");
            field_dialog_content_{{ id }} = jQuery(\".modal-body\", \"#field_dialog_{{ id }}\");
            field_dialog_title_{{ id }}   = jQuery(\".modal-title\", \"#field_dialog_{{ id }}\");

            // move the dialog as a child of the root element, nested form breaks html ...
            jQuery(document.body).append(field_dialog_{{ id }});

            Admin.log('[{{ id }}|field_dialog] move dialog container as a document child');
        }
    }

    {#
        This code is used to defined the \"add\" popup
    #}
    // this function initialize the popup
    // this can be only done this way has popup can be cascaded
    function start_field_dialog_form_add_{{ id }}(link) {

        // remove the html event
        link.onclick = null;

        initialize_popup_{{ id }}();

        // add the jQuery event to the a element
        jQuery(link)
            .click(field_dialog_form_add_{{ id }})
            .trigger('click')
        ;

        return false;
    }
    
    {#
        This code is used to define the \"edit\" popup
    #}
    // this function initializes the popup
    // this can only be done this way as popup can be cascaded
    function start_field_dialog_form_edit_{{ id }}(link) {

        // remove the html event
        link.onclick = null;

        initialize_popup_{{ id }}();

        // add the jQuery event to the a element
        jQuery(link)
            .click(field_dialog_form_edit_{{ id }})
            .trigger('click')
        ;

        return false;
    }

    if (field_dialog_{{ id }}) {
        Admin.shared_setup(field_dialog_{{ id }});
    }

    {% if sonata_admin.edit == 'list' %}
        {#
            This code is used to defined the \"list\" popup
        #}
        // this function initialize the popup
        // this can be only done this way has popup can be cascaded
        function start_field_dialog_form_list_{{ id }}(link) {

            link.onclick = null;

            initialize_popup_{{ id }}();

            // add the jQuery event to the a element
            jQuery(link)
                .click(field_dialog_form_list_{{ id }})
                .trigger('click')
            ;

            return false;
        }

        function remove_selected_element_{{ id }}(link) {

            link.onclick = null;

            jQuery(link)
                .click(field_remove_element_{{ id}})
                .trigger('click')
            ;

            return false;
        }

        function field_remove_element_{{ id }}(event) {
            event.preventDefault();

            if (jQuery('#{{ id }} option').get(0)) {
                jQuery('#{{ id }}').attr('selectedIndex', '-1').children(\"option:selected\").attr(\"selected\", false);
            }

            jQuery('#{{ id }}').val('');
            jQuery('#{{ id }}').trigger('change');

            return false;
        }
        {#
          attach onchange event on the input
        #}

        // update the label
        jQuery('#{{ id }}').on('change', function(event) {

            Admin.log('[{{ id }}|on:change] update the label');

            jQuery('#field_widget_{{ id }}').html(\"<span><img src=\\\"{{ asset('bundles/sonataadmin/ajax-loader.gif') }}\\\" style=\\\"vertical-align: middle; margin-right: 10px\\\"/>{{ 'loading_information'|trans([], 'SonataAdminBundle') }}</span>\");
            jQuery.ajax({
                type: 'GET',
                url: '{{ path('sonata_admin_short_object_information', {
                    'objectId': 'OBJECT_ID',
                    'uniqid': associationadmin.uniqid,
                    'code': associationadmin.code,
                    'linkParameters': sonata_admin.field_description.options.link_parameters
                })}}'.replace('OBJECT_ID', jQuery(this).val()),
                dataType: 'html',
                success: function(html) {
                    jQuery('#field_widget_{{ id }}').html(html);
                }
            });

            {% if btn_edit %}
                var edit_button_url = '{{
                    associationadmin.generateUrl('edit', {'id' : 'OBJECT_ID'})
                }}'.replace('OBJECT_ID', jQuery(this).val());

                jQuery('#field_actions_{{ id }} a.btn-warning').attr('href', edit_button_url);
            {% endif %}
        });

    {% endif %}


</script>
<!-- / edit many association -->

{% endautoescape %}
", "SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_association_script.html.twig", "/home/kuba/Workspace/vendor/sonata-project/doctrine-orm-admin-bundle/src/Resources/views/CRUD/edit_orm_many_association_script.html.twig");
    }
}
