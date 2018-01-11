<?php

/* LiplexMultipleFileUploadBundle:Admin/Form:form_fields.html.twig */
class __TwigTemplate_f83a2c45bb5fcdfa273228cb7f0429823fc5d3c8b77bb038e945105ee6661172 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig", "LiplexMultipleFileUploadBundle:Admin/Form:form_fields.html.twig", 1);
        $this->blocks = array(
            'multiple_file_upload_widget' => array($this, 'block_multiple_file_upload_widget'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c6b8c710f128a0d3de03b1a2141c49f06a67131c290d16edf75feefca842d66c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6b8c710f128a0d3de03b1a2141c49f06a67131c290d16edf75feefca842d66c->enter($__internal_c6b8c710f128a0d3de03b1a2141c49f06a67131c290d16edf75feefca842d66c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LiplexMultipleFileUploadBundle:Admin/Form:form_fields.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c6b8c710f128a0d3de03b1a2141c49f06a67131c290d16edf75feefca842d66c->leave($__internal_c6b8c710f128a0d3de03b1a2141c49f06a67131c290d16edf75feefca842d66c_prof);

    }

    // line 2
    public function block_multiple_file_upload_widget($context, array $blocks = array())
    {
        $__internal_190c17b3a8dd5866d54aeb54b467b3180a69d2679272d0ec681b4c3c4d0f59fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_190c17b3a8dd5866d54aeb54b467b3180a69d2679272d0ec681b4c3c4d0f59fe->enter($__internal_190c17b3a8dd5866d54aeb54b467b3180a69d2679272d0ec681b4c3c4d0f59fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "multiple_file_upload_widget"));

        // line 3
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 3, $this->getSourceContext()); })()), "admin", array()), "subject", array()), "id", array())) {
            // line 4
            echo "        <div class=\"multiple-file-upload\"
             ng-controller=\"MultipleFileUploadCtrl as ctrl\"
             ng-init=\"ctrl.medias = [";
            // line 6
            ob_start();
            // line 7
            echo "             ";
            if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 7, $this->getSourceContext()); })()), "vars", array()), "single_upload", array())) {
                // line 8
                echo "                 ";
                if ((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 8, $this->getSourceContext()); })())) {
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 8, $this->getSourceContext()); })()), "id", array()), "html", null, true);
                }
                // line 9
                echo "             ";
            } else {
                // line 10
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 10, $this->getSourceContext()); })()));
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
                foreach ($context['_seq'] as $context["_key"] => $context["media"]) {
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["media"], "id", array()), "html", null, true);
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['media'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 11
                echo "             ";
            }
            // line 12
            echo "             ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            echo "];ctrl.singleUpload=";
            if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 12, $this->getSourceContext()); })()), "vars", array()), "single_upload", array())) {
                echo "true";
            } else {
                echo "false";
            }
            echo ";";
            ob_start();
            // line 13
            echo "             ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            echo "ctrl.allowedExtensionsFilter='";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 13, $this->getSourceContext()); })()), "vars", array()), "allowed_extensions_filter", array()), "html", null, true);
            echo "';";
            ob_start();
            // line 14
            echo "             ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            echo "ctrl.allowImages='";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 14, $this->getSourceContext()); })()), "vars", array()), "allow_images", array()), "html", null, true);
            echo "';";
            ob_start();
            // line 15
            echo "             ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            echo "ctrl.allowFiles='";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 15, $this->getSourceContext()); })()), "vars", array()), "allow_files", array()), "html", null, true);
            echo "';";
            ob_start();
            // line 16
            echo "             ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            echo "ctrl.entity='";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 16, $this->getSourceContext()); })()), "admin", array()), "classnameLabel", array()), "html", null, true);
            echo "';";
            ob_start();
            // line 17
            echo "             ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            echo "ctrl.id='";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 17, $this->getSourceContext()); })()), "admin", array()), "subject", array()), "id", array()), "html", null, true);
            echo "';";
            ob_start();
            // line 18
            echo "             ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            echo "ctrl.field='";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 18, $this->getSourceContext()); })()), "field_description", array()), "fieldName", array()), "html", null, true);
            echo "';";
            ob_start();
            // line 19
            echo "             ";
            if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->getSourceContext()); })()), "vars", array()), "allow_files", array())) {
                // line 20
                echo "                ctrl.initFileNames();
             ";
            }
            // line 22
            echo "             ";
            if ( !twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 22, $this->getSourceContext()); })()), "vars", array()), "read_only", array())) {
                // line 23
                echo "                ctrl.initUploader();
             ";
            }
            // line 25
            echo "             ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            echo "\"
        >
            <div class=\"row\" ng-if=\"ctrl.allowImages\">
                <div class=\"col-md-2 col-sm-4 col-xs-6\" ng-repeat=\"imageId in ctrl.medias\">
                    <div class=\"button-container\">
                        <img ng-src=\"/api/multiple-file-upload/image/[[ imageId ]]\" class=\"thumbnail\" alt=\"Das Bild konnte nicht geladen werden\" />
                        <button type=\"button\" class=\"btn btn-danger btn-xs\" ng-click=\"ctrl.removeMedia(imageId)\" ng-show=\"!ctrl.singleUpload\">
                            <span class=\"fa fa-trash-o\"></span>
                        </button>
                    </div>
                </div>
            </div>
            <div class=\"files\" ng-if=\"ctrl.allowFiles\">
                <div class=\"file\" ng-repeat=\"fileId in ctrl.medias\">
                    <div class=\"btn-group\" role=\"group\">
                        <a class=\"btn btn-default\" href=\"/api/multiple-file-upload/file/[[ fileId ]]\" target=\"_blank\">[[ ctrl.fileNames[fileId] ]]</a>
                        <button type=\"button\" class=\"btn btn-danger\" ng-click=\"ctrl.removeMedia(fileId)\" ng-show=\"!ctrl.singleUpload\">
                            <span class=\"fa fa-trash-o\"></span>
                        </button>
                    </div>
                </div>
            </div>
            ";
            // line 47
            if ( !twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 47, $this->getSourceContext()); })()), "vars", array()), "read_only", array())) {
                // line 48
                echo "                <div class=\"upload-area\"
                     nv-file-drop=\"\"
                     uploader=\"uploader\"
                     options=\"{url: '";
                // line 51
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("api_multiple_upload_file");
                echo "'}\"
                >
                    <div class=\"well\"
                         nv-file-over=\"\"
                         uploader=\"uploader\"
                    >
                        <span ng-show=\"ctrl.singleUpload && ctrl.allowImages\">Legen Sie das Bild hier ab</span>
                        <span ng-show=\"!ctrl.singleUpload && ctrl.allowImages\">Legen Sie die Bilder hier ab</span>
                        <span ng-show=\"ctrl.singleUpload && ctrl.allowFiles\">Legen Sie die Datei hier ab</span>
                        <span ng-show=\"!ctrl.singleUpload && ctrl.allowFiles\">Legen Sie die Dateien hier ab</span>
                    </div>
                    <div class=\"process\" ng-show=\"uploader.queue.length > 0\">
                        <table class=\"table\">
                            <thead>
                            <tr>
                                <th width=\"80%\">Name</th>
                                <th>Aktionen</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr ng-repeat=\"item in uploader.queue\">
                                <td><strong>[[ item.file.name ]]</strong></td>
                                <td nowrap>
                                    <button type=\"button\" class=\"btn btn-danger btn-xs\" ng-click=\"item.remove();uploader.onAfterRemoveFile()\">
                                        <span class=\"fa fa-trash-o\"></span> Löschen
                                    </button>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <div>
                            <div>
                                Prozess:
                                <div class=\"progress\" style=\"\">
                                    <div class=\"progress-bar\" role=\"progressbar\" ng-style=\"{ 'width': uploader.progress + '%' }\"></div>
                                </div>
                            </div>
                            <button type=\"button\" class=\"btn btn-success btn-s\" ng-click=\"uploader.uploadAll()\" ng-disabled=\"!uploader.getNotUploadedItems().length\">
                                <span class=\"fa fa-upload\"></span> Hochladen
                            </button>
                            <button type=\"button\" class=\"btn btn-warning btn-s\" ng-click=\"uploader.cancelAll()\" ng-disabled=\"!uploader.isUploading\">
                                <span class=\"fa fa-ban\"></span> Abbrechen
                            </button>
                        </div>
                    </div>
                    <span class=\"help-block sonata-ba-field-help\">
                    Erlaubt sind Dateien vom Typ ";
                // line 97
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 97, $this->getSourceContext()); })()), "vars", array()), "allowed_extensions", array()));
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
                foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                    echo "<strong>";
                    echo twig_escape_filter($this->env, $context["extension"], "html", null, true);
                    echo "</strong>";
                    if ( !twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "last", array())) {
                        echo ", ";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 98
                echo "                </span>
                </div>
            ";
            }
            // line 101
            echo "        </div>
    ";
        } else {
            // line 103
            echo "        <div class=\"multiple-file-upload\">
            <div class=\"alert alert-info\">Ein Bild oder eine Datei kann erst hochgeladen werden sobald das Element gespeichert wurde.</div>
        </div>
    ";
        }
        
        $__internal_190c17b3a8dd5866d54aeb54b467b3180a69d2679272d0ec681b4c3c4d0f59fe->leave($__internal_190c17b3a8dd5866d54aeb54b467b3180a69d2679272d0ec681b4c3c4d0f59fe_prof);

    }

    public function getTemplateName()
    {
        return "LiplexMultipleFileUploadBundle:Admin/Form:form_fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  290 => 103,  286 => 101,  281 => 98,  246 => 97,  197 => 51,  192 => 48,  190 => 47,  164 => 25,  160 => 23,  157 => 22,  153 => 20,  150 => 19,  143 => 18,  136 => 17,  129 => 16,  122 => 15,  115 => 14,  108 => 13,  97 => 12,  94 => 11,  60 => 10,  57 => 9,  52 => 8,  49 => 7,  47 => 6,  43 => 4,  40 => 3,  34 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig' %}
{% block multiple_file_upload_widget %}
    {% if sonata_admin.admin.subject.id %}
        <div class=\"multiple-file-upload\"
             ng-controller=\"MultipleFileUploadCtrl as ctrl\"
             ng-init=\"ctrl.medias = [{% spaceless %}
             {% if form.vars.single_upload %}
                 {% if value %}{{ value.id }}{% endif %}
             {% else %}
                {% for media in value %}{{ media.id }}{% if not loop.last %},{% endif %}{% endfor %}
             {% endif %}
             {% endspaceless %}];ctrl.singleUpload={% if form.vars.single_upload %}true{% else %}false{% endif %};{% spaceless %}
             {% endspaceless %}ctrl.allowedExtensionsFilter='{{ form.vars.allowed_extensions_filter }}';{% spaceless %}
             {% endspaceless %}ctrl.allowImages='{{ form.vars.allow_images }}';{% spaceless %}
             {% endspaceless %}ctrl.allowFiles='{{ form.vars.allow_files }}';{% spaceless %}
             {% endspaceless %}ctrl.entity='{{ sonata_admin.admin.classnameLabel }}';{% spaceless %}
             {% endspaceless %}ctrl.id='{{ sonata_admin.admin.subject.id }}';{% spaceless %}
             {% endspaceless %}ctrl.field='{{ sonata_admin.field_description.fieldName }}';{% spaceless %}
             {% if form.vars.allow_files %}
                ctrl.initFileNames();
             {% endif %}
             {% if not form.vars.read_only %}
                ctrl.initUploader();
             {% endif %}
             {% endspaceless %}\"
        >
            <div class=\"row\" ng-if=\"ctrl.allowImages\">
                <div class=\"col-md-2 col-sm-4 col-xs-6\" ng-repeat=\"imageId in ctrl.medias\">
                    <div class=\"button-container\">
                        <img ng-src=\"/api/multiple-file-upload/image/[[ imageId ]]\" class=\"thumbnail\" alt=\"Das Bild konnte nicht geladen werden\" />
                        <button type=\"button\" class=\"btn btn-danger btn-xs\" ng-click=\"ctrl.removeMedia(imageId)\" ng-show=\"!ctrl.singleUpload\">
                            <span class=\"fa fa-trash-o\"></span>
                        </button>
                    </div>
                </div>
            </div>
            <div class=\"files\" ng-if=\"ctrl.allowFiles\">
                <div class=\"file\" ng-repeat=\"fileId in ctrl.medias\">
                    <div class=\"btn-group\" role=\"group\">
                        <a class=\"btn btn-default\" href=\"/api/multiple-file-upload/file/[[ fileId ]]\" target=\"_blank\">[[ ctrl.fileNames[fileId] ]]</a>
                        <button type=\"button\" class=\"btn btn-danger\" ng-click=\"ctrl.removeMedia(fileId)\" ng-show=\"!ctrl.singleUpload\">
                            <span class=\"fa fa-trash-o\"></span>
                        </button>
                    </div>
                </div>
            </div>
            {% if not form.vars.read_only %}
                <div class=\"upload-area\"
                     nv-file-drop=\"\"
                     uploader=\"uploader\"
                     options=\"{url: '{{ path('api_multiple_upload_file') }}'}\"
                >
                    <div class=\"well\"
                         nv-file-over=\"\"
                         uploader=\"uploader\"
                    >
                        <span ng-show=\"ctrl.singleUpload && ctrl.allowImages\">Legen Sie das Bild hier ab</span>
                        <span ng-show=\"!ctrl.singleUpload && ctrl.allowImages\">Legen Sie die Bilder hier ab</span>
                        <span ng-show=\"ctrl.singleUpload && ctrl.allowFiles\">Legen Sie die Datei hier ab</span>
                        <span ng-show=\"!ctrl.singleUpload && ctrl.allowFiles\">Legen Sie die Dateien hier ab</span>
                    </div>
                    <div class=\"process\" ng-show=\"uploader.queue.length > 0\">
                        <table class=\"table\">
                            <thead>
                            <tr>
                                <th width=\"80%\">Name</th>
                                <th>Aktionen</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr ng-repeat=\"item in uploader.queue\">
                                <td><strong>[[ item.file.name ]]</strong></td>
                                <td nowrap>
                                    <button type=\"button\" class=\"btn btn-danger btn-xs\" ng-click=\"item.remove();uploader.onAfterRemoveFile()\">
                                        <span class=\"fa fa-trash-o\"></span> Löschen
                                    </button>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <div>
                            <div>
                                Prozess:
                                <div class=\"progress\" style=\"\">
                                    <div class=\"progress-bar\" role=\"progressbar\" ng-style=\"{ 'width': uploader.progress + '%' }\"></div>
                                </div>
                            </div>
                            <button type=\"button\" class=\"btn btn-success btn-s\" ng-click=\"uploader.uploadAll()\" ng-disabled=\"!uploader.getNotUploadedItems().length\">
                                <span class=\"fa fa-upload\"></span> Hochladen
                            </button>
                            <button type=\"button\" class=\"btn btn-warning btn-s\" ng-click=\"uploader.cancelAll()\" ng-disabled=\"!uploader.isUploading\">
                                <span class=\"fa fa-ban\"></span> Abbrechen
                            </button>
                        </div>
                    </div>
                    <span class=\"help-block sonata-ba-field-help\">
                    Erlaubt sind Dateien vom Typ {% for extension in form.vars.allowed_extensions %}<strong>{{ extension }}</strong>{% if not loop.last %}, {% endif %}{% endfor %}
                </span>
                </div>
            {% endif %}
        </div>
    {% else %}
        <div class=\"multiple-file-upload\">
            <div class=\"alert alert-info\">Ein Bild oder eine Datei kann erst hochgeladen werden sobald das Element gespeichert wurde.</div>
        </div>
    {% endif %}
{% endblock %}
", "LiplexMultipleFileUploadBundle:Admin/Form:form_fields.html.twig", "/home/kuba/Workspace/vendor/liplex/multiple-file-upload-bundle/Liplex/MultipleFileUploadBundle/Resources/views/Admin/Form/form_fields.html.twig");
    }
}
