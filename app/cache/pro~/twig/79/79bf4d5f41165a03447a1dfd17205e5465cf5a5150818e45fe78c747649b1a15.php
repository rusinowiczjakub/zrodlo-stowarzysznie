<?php

/* LiplexMultipleFileUploadBundle:Admin/Form:form_fields.html.twig */
class __TwigTemplate_076e48509440843864f379f841bbf53ce40943935320ad47bcb42e06526a2844 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_multiple_file_upload_widget($context, array $blocks = array())
    {
        // line 3
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["sonata_admin"] ?? null), "admin", array()), "subject", array()), "id", array())) {
            // line 4
            echo "        <div class=\"multiple-file-upload\"
             ng-controller=\"MultipleFileUploadCtrl as ctrl\"
             ng-init=\"ctrl.medias = [";
            // line 6
            ob_start();
            // line 7
            echo "             ";
            if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "vars", array()), "single_upload", array())) {
                // line 8
                echo "                 ";
                if (($context["value"] ?? null)) {
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["value"] ?? null), "id", array()), "html", null, true);
                }
                // line 9
                echo "             ";
            } else {
                // line 10
                echo "                ";
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
            if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "vars", array()), "single_upload", array())) {
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
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "vars", array()), "allowed_extensions_filter", array()), "html", null, true);
            echo "';";
            ob_start();
            // line 14
            echo "             ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            echo "ctrl.allowImages='";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "vars", array()), "allow_images", array()), "html", null, true);
            echo "';";
            ob_start();
            // line 15
            echo "             ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            echo "ctrl.allowFiles='";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "vars", array()), "allow_files", array()), "html", null, true);
            echo "';";
            ob_start();
            // line 16
            echo "             ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            echo "ctrl.entity='";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["sonata_admin"] ?? null), "admin", array()), "classnameLabel", array()), "html", null, true);
            echo "';";
            ob_start();
            // line 17
            echo "             ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            echo "ctrl.id='";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["sonata_admin"] ?? null), "admin", array()), "subject", array()), "id", array()), "html", null, true);
            echo "';";
            ob_start();
            // line 18
            echo "             ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            echo "ctrl.field='";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["sonata_admin"] ?? null), "field_description", array()), "fieldName", array()), "html", null, true);
            echo "';";
            ob_start();
            // line 19
            echo "             ";
            if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "vars", array()), "allow_files", array())) {
                // line 20
                echo "                ctrl.initFileNames();
             ";
            }
            // line 22
            echo "             ";
            if ( !twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "vars", array()), "read_only", array())) {
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
            if ( !twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "vars", array()), "read_only", array())) {
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
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "vars", array()), "allowed_extensions", array()));
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
        return array (  281 => 103,  277 => 101,  272 => 98,  237 => 97,  188 => 51,  183 => 48,  181 => 47,  155 => 25,  151 => 23,  148 => 22,  144 => 20,  141 => 19,  134 => 18,  127 => 17,  120 => 16,  113 => 15,  106 => 14,  99 => 13,  88 => 12,  85 => 11,  51 => 10,  48 => 9,  43 => 8,  40 => 7,  38 => 6,  34 => 4,  31 => 3,  28 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "LiplexMultipleFileUploadBundle:Admin/Form:form_fields.html.twig", "/home/kuba/zrodlo/vendor/liplex/multiple-file-upload-bundle/Liplex/MultipleFileUploadBundle/Resources/views/Admin/Form/form_fields.html.twig");
    }
}
