<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                    if (substr($pathinfo, -1) !== '/') {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', '_profiler_home'));
                    }

                    return $ret;
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        elseif (0 === strpos($pathinfo, '/supertypeexamen')) {
            // supertypeexamen_index
            if ('/supertypeexamen' === $trimmedPathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_supertypeexamen_index;
                }

                $ret = array (  '_controller' => 'FP\\CMSBundle\\Controller\\SupertypeexamenController::indexAction',  '_route' => 'supertypeexamen_index',);
                if (substr($pathinfo, -1) !== '/') {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'supertypeexamen_index'));
                }

                return $ret;
            }
            not_supertypeexamen_index:

            // supertypeexamen_new
            if ('/supertypeexamen/new' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_supertypeexamen_new;
                }

                return array (  '_controller' => 'FP\\CMSBundle\\Controller\\SupertypeexamenController::newAction',  '_route' => 'supertypeexamen_new',);
            }
            not_supertypeexamen_new:

            // supertypeexamen_show
            if (preg_match('#^/supertypeexamen/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_supertypeexamen_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'supertypeexamen_show')), array (  '_controller' => 'FP\\CMSBundle\\Controller\\SupertypeexamenController::showAction',));
            }
            not_supertypeexamen_show:

            // supertypeexamen_edit
            if (preg_match('#^/supertypeexamen/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_supertypeexamen_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'supertypeexamen_edit')), array (  '_controller' => 'FP\\CMSBundle\\Controller\\SupertypeexamenController::editAction',));
            }
            not_supertypeexamen_edit:

            // supertypeexamen_delete
            if (preg_match('#^/supertypeexamen/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ('DELETE' !== $canonicalMethod) {
                    $allow[] = 'DELETE';
                    goto not_supertypeexamen_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'supertypeexamen_delete')), array (  '_controller' => 'FP\\CMSBundle\\Controller\\SupertypeexamenController::deleteAction',));
            }
            not_supertypeexamen_delete:

        }

        elseif (0 === strpos($pathinfo, '/service')) {
            // indexservice
            if ('/service/index' === $pathinfo) {
                return array (  '_controller' => 'FP\\CMSBundle\\Controller\\ServiceController::indexserviceAction',  '_route' => 'indexservice',);
            }

            // ajoutservice
            if ('/service/ajoutservice' === $pathinfo) {
                return array (  '_controller' => 'FP\\CMSBundle\\Controller\\ServiceController::ajoutserviceAction',  '_route' => 'ajoutservice',);
            }

            // editservice
            if (preg_match('#^/service/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'editservice')), array (  '_controller' => 'FP\\CMSBundle\\Controller\\ServiceController::editserviceAction',));
            }

            // deleteservice
            if (0 === strpos($pathinfo, '/service/id') && preg_match('#^/service/id/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'deleteservice')), array (  '_controller' => 'FP\\CMSBundle\\Controller\\ServiceController::deleteserviceAction',));
            }

        }

        elseif (0 === strpos($pathinfo, '/exam')) {
            if (0 === strpos($pathinfo, '/examen')) {
                // examen_lastest
                if ('/examen/lastest' === $pathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_examen_lastest;
                    }

                    return array (  '_controller' => 'FP\\CMSBundle\\Controller\\ExamenController::indexlastestAction',  '_route' => 'examen_lastest',);
                }
                not_examen_lastest:

                // examen_index
                if ('/examen' === $trimmedPathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_examen_index;
                    }

                    $ret = array (  '_controller' => 'FP\\CMSBundle\\Controller\\ExamenController::indexAction',  '_route' => 'examen_index',);
                    if (substr($pathinfo, -1) !== '/') {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'examen_index'));
                    }

                    return $ret;
                }
                not_examen_index:

                if (0 === strpos($pathinfo, '/examen/new')) {
                    // examen_new1
                    if (0 === strpos($pathinfo, '/examen/new/1/consultation=') && preg_match('#^/examen/new/1/consultation\\=(?P<consultationid>[^/]++)/typeexamen\\=(?P<typeexamenid>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_examen_new1;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'examen_new1')), array (  '_controller' => 'FP\\CMSBundle\\Controller\\ExamenController::new1Action',));
                    }
                    not_examen_new1:

                    // examen_new
                    if (0 === strpos($pathinfo, '/examen/new/consultation=') && preg_match('#^/examen/new/consultation\\=(?P<consultationid>[^/]+)&typeexamen\\=(?P<typeexamenid>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_examen_new;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'examen_new')), array (  '_controller' => 'FP\\CMSBundle\\Controller\\ExamenController::newAction',));
                    }
                    not_examen_new:

                    // examen_newest
                    if ('/examen/newest' === $trimmedPathinfo) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_examen_newest;
                        }

                        $ret = array (  '_controller' => 'FP\\CMSBundle\\Controller\\ExamenController::newestAction',  '_route' => 'examen_newest',);
                        if (substr($pathinfo, -1) !== '/') {
                            return array_replace($ret, $this->redirect($rawPathinfo.'/', 'examen_newest'));
                        }

                        return $ret;
                    }
                    not_examen_newest:

                }

                // examen_show
                if (preg_match('#^/examen/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_examen_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'examen_show')), array (  '_controller' => 'FP\\CMSBundle\\Controller\\ExamenController::showAction',));
                }
                not_examen_show:

                // examen_edit
                if (0 === strpos($pathinfo, '/examen/edit') && preg_match('#^/examen/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST', 'PUT'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'PUT'));
                        goto not_examen_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'examen_edit')), array (  '_controller' => 'FP\\CMSBundle\\Controller\\ExamenController::editAction',));
                }
                not_examen_edit:

                // examen_delete
                if (preg_match('#^/examen/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('DELETE' !== $canonicalMethod) {
                        $allow[] = 'DELETE';
                        goto not_examen_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'examen_delete')), array (  '_controller' => 'FP\\CMSBundle\\Controller\\ExamenController::deleteAction',));
                }
                not_examen_delete:

                // gettypeexamen
                if ('/examen/gettypeexamen' === $pathinfo) {
                    return array (  '_controller' => 'FP\\CMSBundle\\Controller\\ExamenController::gettypeexamenAction',  '_route' => 'gettypeexamen',);
                }

                // oneresultexamen
                if (0 === strpos($pathinfo, '/examen/oneresultexam') && preg_match('#^/examen/oneresultexam/(?P<idconsult>[^/]++)/(?P<idresult>[^/]++)/(?P<idte>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oneresultexamen')), array (  '_controller' => 'FP\\CMSBundle\\Controller\\ExamenController::oneResultExamAction',));
                }

                // createexams
                if (0 === strpos($pathinfo, '/examen/createexams') && preg_match('#^/examen/createexams/(?P<numeroconsult>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_createexams;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'createexams')), array (  '_controller' => 'FP\\CMSBundle\\Controller\\ExamenController::createexamensAction',));
                }
                not_createexams:

                // examen_show_all
                if (0 === strpos($pathinfo, '/examen/consultation') && preg_match('#^/examen/consultation/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_examen_show_all;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'examen_show_all')), array (  '_controller' => 'FP\\CMSBundle\\Controller\\ExamenController::showAllAction',));
                }
                not_examen_show_all:

                // examen_approuver
                if (0 === strpos($pathinfo, '/examen/approuver') && preg_match('#^/examen/approuver/(?P<numeroconsult>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('POST' !== $canonicalMethod) {
                        $allow[] = 'POST';
                        goto not_examen_approuver;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'examen_approuver')), array (  '_controller' => 'FP\\CMSBundle\\Controller\\ExamenController::approuverExamAction',));
                }
                not_examen_approuver:

                // examen_desapprouver
                if (0 === strpos($pathinfo, '/examen/desapprouver') && preg_match('#^/examen/desapprouver/(?P<numeroconsult>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('POST' !== $canonicalMethod) {
                        $allow[] = 'POST';
                        goto not_examen_desapprouver;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'examen_desapprouver')), array (  '_controller' => 'FP\\CMSBundle\\Controller\\ExamenController::desapprouverExamAction',));
                }
                not_examen_desapprouver:

            }

            // printexam
            if (preg_match('#^/exam/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'printexam')), array (  '_controller' => 'FP\\CMSBundle\\Controller\\ConsultationController::printexamAction',));
            }

            // printexamwithoutconsult
            if (0 === strpos($pathinfo, '/examwithoutconsul') && preg_match('#^/examwithoutconsul/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'printexamwithoutconsult')), array (  '_controller' => 'FP\\CMSBundle\\Controller\\ConsultationController::printexamwithoutconsultAction',));
            }

        }

        // editpatient
        if (0 === strpos($pathinfo, '/editpatient') && preg_match('#^/editpatient/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'editpatient')), array (  '_controller' => 'FP\\CMSBundle\\Controller\\PatientController::editpatientAction',));
        }

        if (0 === strpos($pathinfo, '/t')) {
            // tag.index
            if ('/tags.json' === $pathinfo) {
                return array (  '_controller' => 'CMSFP\\TagBundle\\Controller\\TagController::indexAction',  '_route' => 'tag.index',);
            }

            // tag.indexexam
            if ('/typeexam.json' === $pathinfo) {
                return array (  '_controller' => 'CMSFP\\TagBundle\\Controller\\TagController::indexexamAction',  '_route' => 'tag.indexexam',);
            }

            if (0 === strpos($pathinfo, '/typeexamen')) {
                // typeexamen_index
                if ('/typeexamen' === $trimmedPathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_typeexamen_index;
                    }

                    $ret = array (  '_controller' => 'CMSFP\\TagBundle\\Controller\\TypeExamenController::indexAction',  '_route' => 'typeexamen_index',);
                    if (substr($pathinfo, -1) !== '/') {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'typeexamen_index'));
                    }

                    return $ret;
                }
                not_typeexamen_index:

                // typeexamen_new
                if ('/typeexamen/new' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_typeexamen_new;
                    }

                    return array (  '_controller' => 'CMSFP\\TagBundle\\Controller\\TypeExamenController::newAction',  '_route' => 'typeexamen_new',);
                }
                not_typeexamen_new:

                // typeexamen_show
                if (preg_match('#^/typeexamen/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_typeexamen_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'typeexamen_show')), array (  '_controller' => 'CMSFP\\TagBundle\\Controller\\TypeExamenController::showAction',));
                }
                not_typeexamen_show:

                // typeexamen_edit
                if (preg_match('#^/typeexamen/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_typeexamen_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'typeexamen_edit')), array (  '_controller' => 'CMSFP\\TagBundle\\Controller\\TypeExamenController::editAction',));
                }
                not_typeexamen_edit:

                // typeexamen_delete
                if (preg_match('#^/typeexamen/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('DELETE' !== $canonicalMethod) {
                        $allow[] = 'DELETE';
                        goto not_typeexamen_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'typeexamen_delete')), array (  '_controller' => 'CMSFP\\TagBundle\\Controller\\TypeExamenController::deleteAction',));
                }
                not_typeexamen_delete:

            }

        }

        elseif (0 === strpos($pathinfo, '/medicament')) {
            // cmx.index
            if ('/medicaments.json' === $pathinfo) {
                return array (  '_controller' => 'CMSFP\\TagBundle\\Controller\\TagController::medicAction',  '_route' => 'cmx.index',);
            }

            // medicament_index
            if ('/medicament' === $trimmedPathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_medicament_index;
                }

                $ret = array (  '_controller' => 'FP\\CMSBundle\\Controller\\MedicamentController::indexAction',  '_route' => 'medicament_index',);
                if (substr($pathinfo, -1) !== '/') {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'medicament_index'));
                }

                return $ret;
            }
            not_medicament_index:

            // medicament_new
            if ('/medicament/new' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_medicament_new;
                }

                return array (  '_controller' => 'FP\\CMSBundle\\Controller\\MedicamentController::newAction',  '_route' => 'medicament_new',);
            }
            not_medicament_new:

            // medicament_show
            if (preg_match('#^/medicament/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_medicament_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'medicament_show')), array (  '_controller' => 'FP\\CMSBundle\\Controller\\MedicamentController::showAction',));
            }
            not_medicament_show:

            // medicament_edit
            if (preg_match('#^/medicament/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_medicament_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'medicament_edit')), array (  '_controller' => 'FP\\CMSBundle\\Controller\\MedicamentController::editAction',));
            }
            not_medicament_edit:

            // deletemedicament
            if (preg_match('#^/medicament/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ('DELETE' !== $canonicalMethod) {
                    $allow[] = 'DELETE';
                    goto not_deletemedicament;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'deletemedicament')), array (  '_controller' => 'FP\\CMSBundle\\Controller\\MedicamentController::deletemedicamentAction',));
            }
            not_deletemedicament:

        }

        elseif (0 === strpos($pathinfo, '/diagnostic')) {
            // diagnostic_index
            if ('/diagnostic' === $trimmedPathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_diagnostic_index;
                }

                $ret = array (  '_controller' => 'FP\\CMSBundle\\Controller\\DiagnosticController::indexAction',  '_route' => 'diagnostic_index',);
                if (substr($pathinfo, -1) !== '/') {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'diagnostic_index'));
                }

                return $ret;
            }
            not_diagnostic_index:

            // diagnostic_new
            if ('/diagnostic/new' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_diagnostic_new;
                }

                return array (  '_controller' => 'FP\\CMSBundle\\Controller\\DiagnosticController::newAction',  '_route' => 'diagnostic_new',);
            }
            not_diagnostic_new:

            // diagnostic_show
            if (preg_match('#^/diagnostic/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_diagnostic_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'diagnostic_show')), array (  '_controller' => 'FP\\CMSBundle\\Controller\\DiagnosticController::showAction',));
            }
            not_diagnostic_show:

            // diagnostic_edit
            if (preg_match('#^/diagnostic/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_diagnostic_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'diagnostic_edit')), array (  '_controller' => 'FP\\CMSBundle\\Controller\\DiagnosticController::editAction',));
            }
            not_diagnostic_edit:

            // diagnostic_delete
            if (preg_match('#^/diagnostic/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ('DELETE' !== $canonicalMethod) {
                    $allow[] = 'DELETE';
                    goto not_diagnostic_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'diagnostic_delete')), array (  '_controller' => 'FP\\CMSBundle\\Controller\\DiagnosticController::deleteAction',));
            }
            not_diagnostic_delete:

        }

        // detailpatient
        if (0 === strpos($pathinfo, '/detailpatient') && preg_match('#^/detailpatient/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'detailpatient')), array (  '_controller' => 'FP\\CMSBundle\\Controller\\PatientController::detailpatientAction',));
        }

        if (0 === strpos($pathinfo, '/antecedent')) {
            // antecedent_index
            if ('/antecedent' === $trimmedPathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_antecedent_index;
                }

                $ret = array (  '_controller' => 'FP\\CMSBundle\\Controller\\AntecedentController::indexAction',  '_route' => 'antecedent_index',);
                if (substr($pathinfo, -1) !== '/') {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'antecedent_index'));
                }

                return $ret;
            }
            not_antecedent_index:

            // antecedent_show
            if (preg_match('#^/antecedent/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_antecedent_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'antecedent_show')), array (  '_controller' => 'FP\\CMSBundle\\Controller\\AntecedentController::showAction',));
            }
            not_antecedent_show:

            // antecedent_edit
            if (0 === strpos($pathinfo, '/antecedent/edit') && preg_match('#^/antecedent/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_antecedent_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'antecedent_edit')), array (  '_controller' => 'FP\\CMSBundle\\Controller\\AntecedentController::editPAction',));
            }
            not_antecedent_edit:

            // antecedent_delete
            if (preg_match('#^/antecedent/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ('DELETE' !== $canonicalMethod) {
                    $allow[] = 'DELETE';
                    goto not_antecedent_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'antecedent_delete')), array (  '_controller' => 'FP\\CMSBundle\\Controller\\AntecedentController::deleteAction',));
            }
            not_antecedent_delete:

        }

        elseif (0 === strpos($pathinfo, '/ordonnance')) {
            // ordonnance_index
            if ('/ordonnance' === $trimmedPathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_ordonnance_index;
                }

                $ret = array (  '_controller' => 'FP\\CMSBundle\\Controller\\OrdonnanceController::indexAction',  '_route' => 'ordonnance_index',);
                if (substr($pathinfo, -1) !== '/') {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'ordonnance_index'));
                }

                return $ret;
            }
            not_ordonnance_index:

            // ordonnance_show
            if (preg_match('#^/ordonnance/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_ordonnance_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ordonnance_show')), array (  '_controller' => 'FP\\CMSBundle\\Controller\\OrdonnanceController::showAction',));
            }
            not_ordonnance_show:

            // ordonnance_new
            if ('/ordonnance/new' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_ordonnance_new;
                }

                return array (  '_controller' => 'FP\\CMSBundle\\Controller\\OrdonnanceController::newAction',  '_route' => 'ordonnance_new',);
            }
            not_ordonnance_new:

            // ordonnance_edit
            if (preg_match('#^/ordonnance/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_ordonnance_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ordonnance_edit')), array (  '_controller' => 'FP\\CMSBundle\\Controller\\OrdonnanceController::editAction',));
            }
            not_ordonnance_edit:

            // ordonnance_delete
            if (preg_match('#^/ordonnance/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ('DELETE' !== $canonicalMethod) {
                    $allow[] = 'DELETE';
                    goto not_ordonnance_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ordonnance_delete')), array (  '_controller' => 'FP\\CMSBundle\\Controller\\OrdonnanceController::deleteAction',));
            }
            not_ordonnance_delete:

        }

        // index
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'FP\\CMSBundle\\Controller\\DefaultController::indextemplateAction',  '_route' => 'index',);
            if (substr($pathinfo, -1) !== '/') {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'index'));
            }

            return $ret;
        }

        if (0 === strpos($pathinfo, '/user')) {
            // indexuser
            if ('/users' === $pathinfo) {
                return array (  '_controller' => 'FP\\CMSBundle\\Controller\\UtilisateurController::indexuserAction',  '_route' => 'indexuser',);
            }

            // ajoutuser
            if ('/user/new' === $pathinfo) {
                return array (  '_controller' => 'FP\\CMSBundle\\Controller\\UtilisateurController::ajoutAction',  '_route' => 'ajoutuser',);
            }

            // edituser
            if (0 === strpos($pathinfo, '/user/edit') && preg_match('#^/user/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'edituser')), array (  '_controller' => 'FP\\CMSBundle\\Controller\\UtilisateurController::editAction',));
            }

        }

        elseif (0 === strpos($pathinfo, '/p')) {
            if (0 === strpos($pathinfo, '/patient')) {
                // indexpatient
                if ('/patient/index' === $pathinfo) {
                    return array (  '_controller' => 'FP\\CMSBundle\\Controller\\PatientController::indexpatientAction',  '_route' => 'indexpatient',);
                }

                // ajoutpatient
                if ('/patient/ajoutpatient' === $pathinfo) {
                    return array (  '_controller' => 'FP\\CMSBundle\\Controller\\PatientController::ajoutpatientAction',  '_route' => 'ajoutpatient',);
                }

                if (0 === strpos($pathinfo, '/patient/consultation')) {
                    if (0 === strpos($pathinfo, '/patient/consultation/new')) {
                        // ajoutconsultation
                        if (preg_match('#^/patient/consultation/new/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ajoutconsultation')), array (  '_controller' => 'FP\\CMSBundle\\Controller\\ConsultationController::ajoutconsultationAction',));
                        }

                        // ajoutconsultationinf
                        if (0 === strpos($pathinfo, '/patient/consultation/new/infirmier') && preg_match('#^/patient/consultation/new/infirmier/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ajoutconsultationinf')), array (  '_controller' => 'FP\\CMSBundle\\Controller\\ConsultationController::ajoutconsultationinfAction',));
                        }

                    }

                    elseif (0 === strpos($pathinfo, '/patient/consultation/edit')) {
                        // editconsultation
                        if (preg_match('#^/patient/consultation/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'editconsultation')), array (  '_controller' => 'FP\\CMSBundle\\Controller\\ConsultationController::editconsultationAction',));
                        }

                        // editconsultationinf
                        if (0 === strpos($pathinfo, '/patient/consultation/edit/infirmier') && preg_match('#^/patient/consultation/edit/infirmier/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'editconsultationinf')), array (  '_controller' => 'FP\\CMSBundle\\Controller\\ConsultationController::editconsultationinfAction',));
                        }

                    }

                    // consultationview
                    if (preg_match('#^/patient/consultation/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'consultationview')), array (  '_controller' => 'FP\\CMSBundle\\Controller\\ConsultationController::consultationviewAction',));
                    }

                }

            }

            // printordonnance
            if (0 === strpos($pathinfo, '/printordonnance') && preg_match('#^/printordonnance/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'printordonnance')), array (  '_controller' => 'FP\\CMSBundle\\Controller\\ConsultationController::printordonnanceAction',));
            }

            if (0 === strpos($pathinfo, '/profile')) {
                // fos_user_profile_show
                if ('/profile' === $trimmedPathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_fos_user_profile_show;
                    }

                    $ret = array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
                    if (substr($pathinfo, -1) !== '/') {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'fos_user_profile_show'));
                    }

                    return $ret;
                }
                not_fos_user_profile_show:

                // fos_user_profile_edit
                if ('/profile/edit' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_fos_user_profile_edit;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
                }
                not_fos_user_profile_edit:

                // fos_user_change_password
                if ('/profile/change-password' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_fos_user_change_password;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
                }
                not_fos_user_change_password:

            }

        }

        elseif (0 === strpos($pathinfo, '/get')) {
            // getterrain
            if (0 === strpos($pathinfo, '/getterrain') && preg_match('#^/getterrain/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'getterrain')), array (  '_controller' => 'FP\\CMSBundle\\Controller\\PatientController::getterrainAction',));
            }

            // getpatient
            if ('/getpatient' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'FP\\CMSBundle\\Controller\\PatientController::getpatientAction',  '_route' => 'getpatient',);
                if (substr($pathinfo, -1) !== '/') {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'getpatient'));
                }

                return $ret;
            }

            // apiconsultation
            if ('/getresultat' === $pathinfo) {
                return array (  '_controller' => 'FP\\CMSBundle\\Controller\\ConsultationController::consultAction',  '_route' => 'apiconsultation',);
            }

        }

        // printRP
        if (0 === strpos($pathinfo, '/rp') && preg_match('#^/rp/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'printRP')), array (  '_controller' => 'FP\\CMSBundle\\Controller\\ConsultationController::printrpAction',));
        }

        if (0 === strpos($pathinfo, '/re')) {
            // printrecuexam
            if (0 === strpos($pathinfo, '/recuexam') && preg_match('#^/recuexam/(?P<numconsult>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'printrecuexam')), array (  '_controller' => 'FP\\CMSBundle\\Controller\\ExamenController::printRecuExamAction',));
            }

            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if ('/register' === $trimmedPathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_fos_user_registration_register;
                    }

                    $ret = array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                    if (substr($pathinfo, -1) !== '/') {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'fos_user_registration_register'));
                    }

                    return $ret;
                }
                not_fos_user_registration_register:

                // fos_user_registration_update
                if (preg_match('#^/register/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_fos_user_registration_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_update')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::updateAction',));
                }
                not_fos_user_registration_update:

                // fos_user_registration_check_email
                if ('/register/check-email' === $pathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_fos_user_registration_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                }
                not_fos_user_registration_check_email:

                if (0 === strpos($pathinfo, '/register/confirm')) {
                    // fos_user_registration_confirm
                    if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_fos_user_registration_confirm;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                    }
                    not_fos_user_registration_confirm:

                    // fos_user_registration_confirmed
                    if ('/register/confirmed' === $pathinfo) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_fos_user_registration_confirmed;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                    }
                    not_fos_user_registration_confirmed:

                }

            }

            elseif (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ('/resetting/request' === $pathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

                // fos_user_resetting_send_email
                if ('/resetting/send-email' === $pathinfo) {
                    if ('POST' !== $canonicalMethod) {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ('/resetting/check-email' === $pathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

            }

        }

        // printbulletinexam
        if (0 === strpos($pathinfo, '/bulletinexam') && preg_match('#^/bulletinexam/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'printbulletinexam')), array (  '_controller' => 'FP\\CMSBundle\\Controller\\ConsultationController::printbulletinexamAction',));
        }

        // homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
            if (substr($pathinfo, -1) !== '/') {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'homepage'));
            }

            return $ret;
        }

        if (0 === strpos($pathinfo, '/login')) {
            // fos_user_security_login
            if ('/login' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_security_login;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
            }
            not_fos_user_security_login:

            // fos_user_security_check
            if ('/login_check' === $pathinfo) {
                if ('POST' !== $canonicalMethod) {
                    $allow[] = 'POST';
                    goto not_fos_user_security_check;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
            }
            not_fos_user_security_check:

        }

        // fos_user_security_logout
        if ('/logout' === $pathinfo) {
            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                $allow = array_merge($allow, array('GET', 'POST'));
                goto not_fos_user_security_logout;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
        }
        not_fos_user_security_logout:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
