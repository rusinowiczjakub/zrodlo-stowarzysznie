<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $context = $this->context;
        $request = $this->request;

        // index
        if ('' === rtrim($pathinfo, '/')) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($rawPathinfo.'/', 'index');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\FrontController::indexAction',  '_route' => 'index',);
        }

        if (0 === strpos($pathinfo, '/a')) {
            // about
            if ('/about' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\FrontController::aboutAction',  '_route' => 'about',);
            }

            if (0 === strpos($pathinfo, '/actuals')) {
                // actuals
                if ('/actuals' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\PostController::actualsAction',  '_route' => 'actuals',);
                }

                // actuals_by_year
                if (preg_match('#^/actuals/(?P<year>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'actuals_by_year')), array (  '_controller' => 'AppBundle\\Controller\\PostController::showByYearAction',));
                }

                // single_post
                if (0 === strpos($pathinfo, '/actuals/post') && preg_match('#^/actuals/post/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'single_post')), array (  '_controller' => 'AppBundle\\Controller\\PostController::singlePostAction',));
                }

            }

        }

        // reports
        if (0 === strpos($pathinfo, '/reports') && preg_match('#^/reports(?:/(?P<year>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'reports')), array (  'year' => NULL,  '_controller' => 'AppBundle\\Controller\\ReportController::reportsByDate',));
        }

        if (0 === strpos($pathinfo, '/admin')) {
            // sonata_admin_redirect
            if ('/admin' === rtrim($pathinfo, '/')) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($rawPathinfo.'/', 'sonata_admin_redirect');
                }

                return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',  'route' => 'sonata_admin_dashboard',  'permanent' => 'true',  '_route' => 'sonata_admin_redirect',);
            }

            // sonata_admin_dashboard
            if ('/admin/dashboard' === $pathinfo) {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::dashboardAction',  '_route' => 'sonata_admin_dashboard',);
            }

            if (0 === strpos($pathinfo, '/admin/core')) {
                // sonata_admin_retrieve_form_element
                if ('/admin/core/get-form-field-element' === $pathinfo) {
                    return array (  '_controller' => 'sonata.admin.controller.admin:retrieveFormFieldElementAction',  '_route' => 'sonata_admin_retrieve_form_element',);
                }

                // sonata_admin_append_form_element
                if ('/admin/core/append-form-field-element' === $pathinfo) {
                    return array (  '_controller' => 'sonata.admin.controller.admin:appendFormFieldElementAction',  '_route' => 'sonata_admin_append_form_element',);
                }

                // sonata_admin_short_object_information
                if (0 === strpos($pathinfo, '/admin/core/get-short-object-description') && preg_match('#^/admin/core/get\\-short\\-object\\-description(?:\\.(?P<_format>html|json))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_admin_short_object_information')), array (  '_controller' => 'sonata.admin.controller.admin:getShortObjectDescriptionAction',  '_format' => 'html',));
                }

                // sonata_admin_set_object_field_value
                if ('/admin/core/set-object-field-value' === $pathinfo) {
                    return array (  '_controller' => 'sonata.admin.controller.admin:setObjectFieldValueAction',  '_route' => 'sonata_admin_set_object_field_value',);
                }

            }

            // sonata_admin_search
            if ('/admin/search' === $pathinfo) {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::searchAction',  '_route' => 'sonata_admin_search',);
            }

            // sonata_admin_retrieve_autocomplete_items
            if ('/admin/core/get-autocomplete-items' === $pathinfo) {
                return array (  '_controller' => 'sonata.admin.controller.admin:retrieveAutocompleteItemsAction',  '_route' => 'sonata_admin_retrieve_autocomplete_items',);
            }

            if (0 === strpos($pathinfo, '/admin/app')) {
                if (0 === strpos($pathinfo, '/admin/app/post')) {
                    // admin_app_post_list
                    if ('/admin/app/post/list' === $pathinfo) {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'admin.post',  '_sonata_name' => 'admin_app_post_list',  '_route' => 'admin_app_post_list',);
                    }

                    // admin_app_post_create
                    if ('/admin/app/post/create' === $pathinfo) {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'admin.post',  '_sonata_name' => 'admin_app_post_create',  '_route' => 'admin_app_post_create',);
                    }

                    // admin_app_post_batch
                    if ('/admin/app/post/batch' === $pathinfo) {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'admin.post',  '_sonata_name' => 'admin_app_post_batch',  '_route' => 'admin_app_post_batch',);
                    }

                    // admin_app_post_edit
                    if (preg_match('#^/admin/app/post/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_post_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'admin.post',  '_sonata_name' => 'admin_app_post_edit',));
                    }

                    // admin_app_post_delete
                    if (preg_match('#^/admin/app/post/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_post_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'admin.post',  '_sonata_name' => 'admin_app_post_delete',));
                    }

                    // admin_app_post_show
                    if (preg_match('#^/admin/app/post/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_post_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'admin.post',  '_sonata_name' => 'admin_app_post_show',));
                    }

                    // admin_app_post_export
                    if ('/admin/app/post/export' === $pathinfo) {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'admin.post',  '_sonata_name' => 'admin_app_post_export',  '_route' => 'admin_app_post_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/app/image')) {
                    // admin_app_image_list
                    if ('/admin/app/image/list' === $pathinfo) {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'admin.image',  '_sonata_name' => 'admin_app_image_list',  '_route' => 'admin_app_image_list',);
                    }

                    // admin_app_image_create
                    if ('/admin/app/image/create' === $pathinfo) {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'admin.image',  '_sonata_name' => 'admin_app_image_create',  '_route' => 'admin_app_image_create',);
                    }

                    // admin_app_image_batch
                    if ('/admin/app/image/batch' === $pathinfo) {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'admin.image',  '_sonata_name' => 'admin_app_image_batch',  '_route' => 'admin_app_image_batch',);
                    }

                    // admin_app_image_edit
                    if (preg_match('#^/admin/app/image/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_image_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'admin.image',  '_sonata_name' => 'admin_app_image_edit',));
                    }

                    // admin_app_image_delete
                    if (preg_match('#^/admin/app/image/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_image_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'admin.image',  '_sonata_name' => 'admin_app_image_delete',));
                    }

                    // admin_app_image_show
                    if (preg_match('#^/admin/app/image/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_image_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'admin.image',  '_sonata_name' => 'admin_app_image_show',));
                    }

                    // admin_app_image_export
                    if ('/admin/app/image/export' === $pathinfo) {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'admin.image',  '_sonata_name' => 'admin_app_image_export',  '_route' => 'admin_app_image_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/app/report')) {
                    // admin_app_report_list
                    if ('/admin/app/report/list' === $pathinfo) {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'admin.report',  '_sonata_name' => 'admin_app_report_list',  '_route' => 'admin_app_report_list',);
                    }

                    // admin_app_report_create
                    if ('/admin/app/report/create' === $pathinfo) {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'admin.report',  '_sonata_name' => 'admin_app_report_create',  '_route' => 'admin_app_report_create',);
                    }

                    // admin_app_report_batch
                    if ('/admin/app/report/batch' === $pathinfo) {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'admin.report',  '_sonata_name' => 'admin_app_report_batch',  '_route' => 'admin_app_report_batch',);
                    }

                    // admin_app_report_edit
                    if (preg_match('#^/admin/app/report/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_report_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'admin.report',  '_sonata_name' => 'admin_app_report_edit',));
                    }

                    // admin_app_report_delete
                    if (preg_match('#^/admin/app/report/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_report_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'admin.report',  '_sonata_name' => 'admin_app_report_delete',));
                    }

                    // admin_app_report_show
                    if (preg_match('#^/admin/app/report/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_report_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'admin.report',  '_sonata_name' => 'admin_app_report_show',));
                    }

                    // admin_app_report_export
                    if ('/admin/app/report/export' === $pathinfo) {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'admin.report',  '_sonata_name' => 'admin_app_report_export',  '_route' => 'admin_app_report_export',);
                    }

                }

            }

        }

        if (0 === strpos($pathinfo, '/e')) {
            // ef_connect
            if (0 === strpos($pathinfo, '/efconnect') && preg_match('#^/efconnect(?:/(?P<instance>[^/]++)(?:/(?P<homeFolder>[^/]++))?)?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ef_connect')), array (  '_controller' => 'FM\\ElfinderBundle\\Controller\\ElFinderController::loadAction',  'instance' => 'default',  'homeFolder' => '',));
            }

            // elfinder
            if (0 === strpos($pathinfo, '/elfinder') && preg_match('#^/elfinder(?:/(?P<instance>[^/]++)(?:/(?P<homeFolder>[^/]++))?)?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'elfinder')), array (  '_controller' => 'FM\\ElfinderBundle\\Controller\\ElFinderController::showAction',  'instance' => 'default',  'homeFolder' => '',));
            }

        }

        if (0 === strpos($pathinfo, '/api/multiple-file-upload')) {
            // api_multiple_upload_file
            if ('/api/multiple-file-upload' === $pathinfo) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_api_multiple_upload_file;
                }

                return array (  '_controller' => 'Liplex\\MultipleFileUploadBundle\\Controller\\MultipleFileUploadController::multipleImageUploadAction',  '_route' => 'api_multiple_upload_file',);
            }
            not_api_multiple_upload_file:

            // api_multiple_show_image
            if (0 === strpos($pathinfo, '/api/multiple-file-upload/image') && preg_match('#^/api/multiple\\-file\\-upload/image/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_api_multiple_show_image;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_multiple_show_image')), array (  '_controller' => 'Liplex\\MultipleFileUploadBundle\\Controller\\MultipleFileUploadController::showImageAction',));
            }
            not_api_multiple_show_image:

            // api_multiple_get_file
            if (0 === strpos($pathinfo, '/api/multiple-file-upload/file') && preg_match('#^/api/multiple\\-file\\-upload/file/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_api_multiple_get_file;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_multiple_get_file')), array (  '_controller' => 'Liplex\\MultipleFileUploadBundle\\Controller\\MultipleFileUploadController::getFileAction',));
            }
            not_api_multiple_get_file:

            if (0 === strpos($pathinfo, '/api/multiple-file-upload/media')) {
                // api_multiple_get_filenames
                if (preg_match('#^/api/multiple\\-file\\-upload/media/(?P<ids>[^/]++)/name$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_api_multiple_get_filenames;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_multiple_get_filenames')), array (  '_controller' => 'Liplex\\MultipleFileUploadBundle\\Controller\\MultipleFileUploadController::getFileNamesAction',));
                }
                not_api_multiple_get_filenames:

                // api_multiple_delete_media
                if (preg_match('#^/api/multiple\\-file\\-upload/media/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_api_multiple_delete_media;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_multiple_delete_media')), array (  '_controller' => 'Liplex\\MultipleFileUploadBundle\\Controller\\MultipleFileUploadController::deleteMediaAction',));
                }
                not_api_multiple_delete_media:

            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
