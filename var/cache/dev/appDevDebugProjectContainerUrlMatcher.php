<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevDebugProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ($pathinfo === '/_profiler/open') {
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

        if (0 === strpos($pathinfo, '/compte')) {
            // compte_index
            if (rtrim($pathinfo, '/') === '/compte') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_compte_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'compte_index');
                }

                return array (  '_controller' => 'GarageBundle\\Controller\\CompteController::indexAction',  '_route' => 'compte_index',);
            }
            not_compte_index:

            if (0 === strpos($pathinfo, '/compte/index')) {
                // compte_indexmanager
                if ($pathinfo === '/compte/indexmanager') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_compte_indexmanager;
                    }

                    return array (  '_controller' => 'GarageBundle\\Controller\\CompteController::indexmanagerAction',  '_route' => 'compte_indexmanager',);
                }
                not_compte_indexmanager:

                // compte_indexreceptionnist
                if ($pathinfo === '/compte/indexreceptionnist') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_compte_indexreceptionnist;
                    }

                    return array (  '_controller' => 'GarageBundle\\Controller\\CompteController::indexreceptionnistAction',  '_route' => 'compte_indexreceptionnist',);
                }
                not_compte_indexreceptionnist:

            }

            // compte_show
            if (preg_match('#^/compte/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_compte_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'compte_show')), array (  '_controller' => 'GarageBundle\\Controller\\CompteController::showAction',));
            }
            not_compte_show:

            // compte_new
            if ($pathinfo === '/compte/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_compte_new;
                }

                return array (  '_controller' => 'GarageBundle\\Controller\\CompteController::newAction',  '_route' => 'compte_new',);
            }
            not_compte_new:

            // compte_edit
            if (preg_match('#^/compte/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_compte_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'compte_edit')), array (  '_controller' => 'GarageBundle\\Controller\\CompteController::editAction',));
            }
            not_compte_edit:

            // compte_delete
            if (preg_match('#^/compte/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_compte_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'compte_delete')), array (  '_controller' => 'GarageBundle\\Controller\\CompteController::deleteAction',));
            }
            not_compte_delete:

        }

        if (0 === strpos($pathinfo, '/employe')) {
            // employe_index
            if (rtrim($pathinfo, '/') === '/employe') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_employe_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'employe_index');
                }

                return array (  '_controller' => 'GarageBundle\\Controller\\EmployeController::indexAction',  '_route' => 'employe_index',);
            }
            not_employe_index:

            // employe_indexmanager
            if ($pathinfo === '/employe/indexmanager') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_employe_indexmanager;
                }

                return array (  '_controller' => 'GarageBundle\\Controller\\EmployeController::indexmanagerAction',  '_route' => 'employe_indexmanager',);
            }
            not_employe_indexmanager:

            // employe_show
            if (preg_match('#^/employe/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_employe_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'employe_show')), array (  '_controller' => 'GarageBundle\\Controller\\EmployeController::showAction',));
            }
            not_employe_show:

            // employe_new
            if ($pathinfo === '/employe/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_employe_new;
                }

                return array (  '_controller' => 'GarageBundle\\Controller\\EmployeController::newAction',  '_route' => 'employe_new',);
            }
            not_employe_new:

            // employe_edit
            if (preg_match('#^/employe/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_employe_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'employe_edit')), array (  '_controller' => 'GarageBundle\\Controller\\EmployeController::editAction',));
            }
            not_employe_edit:

            // employe_delete
            if (preg_match('#^/employe/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_employe_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'employe_delete')), array (  '_controller' => 'GarageBundle\\Controller\\EmployeController::deleteAction',));
            }
            not_employe_delete:

        }

        if (0 === strpos($pathinfo, '/f')) {
            if (0 === strpos($pathinfo, '/facture')) {
                // facture_index
                if (rtrim($pathinfo, '/') === '/facture') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_facture_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'facture_index');
                    }

                    return array (  '_controller' => 'GarageBundle\\Controller\\FactureController::indexAction',  '_route' => 'facture_index',);
                }
                not_facture_index:

                // facture_show
                if (preg_match('#^/facture/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_facture_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'facture_show')), array (  '_controller' => 'GarageBundle\\Controller\\FactureController::showAction',));
                }
                not_facture_show:

                // facture_new
                if ($pathinfo === '/facture/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_facture_new;
                    }

                    return array (  '_controller' => 'GarageBundle\\Controller\\FactureController::newAction',  '_route' => 'facture_new',);
                }
                not_facture_new:

                // facture_edit
                if (preg_match('#^/facture/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_facture_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'facture_edit')), array (  '_controller' => 'GarageBundle\\Controller\\FactureController::editAction',));
                }
                not_facture_edit:

                // facture_delete
                if (preg_match('#^/facture/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_facture_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'facture_delete')), array (  '_controller' => 'GarageBundle\\Controller\\FactureController::deleteAction',));
                }
                not_facture_delete:

            }

            if (0 === strpos($pathinfo, '/fiche')) {
                // fiche_index
                if (rtrim($pathinfo, '/') === '/fiche') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fiche_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fiche_index');
                    }

                    return array (  '_controller' => 'GarageBundle\\Controller\\FicheController::indexAction',  '_route' => 'fiche_index',);
                }
                not_fiche_index:

                if (0 === strpos($pathinfo, '/fiche/index')) {
                    // fiche_indexreceptionnist
                    if ($pathinfo === '/fiche/indexreceptionnist') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fiche_indexreceptionnist;
                        }

                        return array (  '_controller' => 'GarageBundle\\Controller\\FicheController::indexreceptionnistAction',  '_route' => 'fiche_indexreceptionnist',);
                    }
                    not_fiche_indexreceptionnist:

                    // fiche_indexworker
                    if ($pathinfo === '/fiche/indexworker') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fiche_indexworker;
                        }

                        return array (  '_controller' => 'GarageBundle\\Controller\\FicheController::indexworkerAction',  '_route' => 'fiche_indexworker',);
                    }
                    not_fiche_indexworker:

                    // fiche_indexaccountant
                    if ($pathinfo === '/fiche/indexaccountant') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fiche_indexaccountant;
                        }

                        return array (  '_controller' => 'GarageBundle\\Controller\\FicheController::indexaccountantAction',  '_route' => 'fiche_indexaccountant',);
                    }
                    not_fiche_indexaccountant:

                    // fiche_indexmanager
                    if ($pathinfo === '/fiche/indexmanager') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fiche_indexmanager;
                        }

                        return array (  '_controller' => 'GarageBundle\\Controller\\FicheController::indexmanagerAction',  '_route' => 'fiche_indexmanager',);
                    }
                    not_fiche_indexmanager:

                }

                // fiche_show
                if (preg_match('#^/fiche/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fiche_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fiche_show')), array (  '_controller' => 'GarageBundle\\Controller\\FicheController::showAction',));
                }
                not_fiche_show:

                // fiche_new
                if ($pathinfo === '/fiche/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fiche_new;
                    }

                    return array (  '_controller' => 'GarageBundle\\Controller\\FicheController::newAction',  '_route' => 'fiche_new',);
                }
                not_fiche_new:

                // fiche_edit
                if (preg_match('#^/fiche/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fiche_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fiche_edit')), array (  '_controller' => 'GarageBundle\\Controller\\FicheController::editAction',));
                }
                not_fiche_edit:

                // fiche_delete
                if (preg_match('#^/fiche/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_fiche_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fiche_delete')), array (  '_controller' => 'GarageBundle\\Controller\\FicheController::deleteAction',));
                }
                not_fiche_delete:

            }

            if (0 === strpos($pathinfo, '/fournisseur')) {
                // fournisseur_index
                if (rtrim($pathinfo, '/') === '/fournisseur') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fournisseur_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fournisseur_index');
                    }

                    return array (  '_controller' => 'GarageBundle\\Controller\\FournisseurController::indexAction',  '_route' => 'fournisseur_index',);
                }
                not_fournisseur_index:

                // fournisseur_indexmanager
                if ($pathinfo === '/fournisseur/indexmanager') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fournisseur_indexmanager;
                    }

                    return array (  '_controller' => 'GarageBundle\\Controller\\FournisseurController::indexmanagerAction',  '_route' => 'fournisseur_indexmanager',);
                }
                not_fournisseur_indexmanager:

                // fournisseur_show
                if (preg_match('#^/fournisseur/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fournisseur_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fournisseur_show')), array (  '_controller' => 'GarageBundle\\Controller\\FournisseurController::showAction',));
                }
                not_fournisseur_show:

                // fournisseur_new
                if ($pathinfo === '/fournisseur/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fournisseur_new;
                    }

                    return array (  '_controller' => 'GarageBundle\\Controller\\FournisseurController::newAction',  '_route' => 'fournisseur_new',);
                }
                not_fournisseur_new:

                // fournisseur_edit
                if (preg_match('#^/fournisseur/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fournisseur_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fournisseur_edit')), array (  '_controller' => 'GarageBundle\\Controller\\FournisseurController::editAction',));
                }
                not_fournisseur_edit:

                // fournisseur_delete
                if (preg_match('#^/fournisseur/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_fournisseur_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fournisseur_delete')), array (  '_controller' => 'GarageBundle\\Controller\\FournisseurController::deleteAction',));
                }
                not_fournisseur_delete:

            }

        }

        if (0 === strpos($pathinfo, '/notification')) {
            // notification_index
            if (rtrim($pathinfo, '/') === '/notification') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_notification_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'notification_index');
                }

                return array (  '_controller' => 'GarageBundle\\Controller\\NotificationController::indexAction',  '_route' => 'notification_index',);
            }
            not_notification_index:

            // notification_show
            if (preg_match('#^/notification/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_notification_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'notification_show')), array (  '_controller' => 'GarageBundle\\Controller\\NotificationController::showAction',));
            }
            not_notification_show:

            // notification_new
            if ($pathinfo === '/notification/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_notification_new;
                }

                return array (  '_controller' => 'GarageBundle\\Controller\\NotificationController::newAction',  '_route' => 'notification_new',);
            }
            not_notification_new:

            // notification_edit
            if (preg_match('#^/notification/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_notification_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'notification_edit')), array (  '_controller' => 'GarageBundle\\Controller\\NotificationController::editAction',));
            }
            not_notification_edit:

            // notification_delete
            if (preg_match('#^/notification/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_notification_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'notification_delete')), array (  '_controller' => 'GarageBundle\\Controller\\NotificationController::deleteAction',));
            }
            not_notification_delete:

        }

        if (0 === strpos($pathinfo, '/piece')) {
            // piece_index
            if (rtrim($pathinfo, '/') === '/piece') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_piece_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'piece_index');
                }

                return array (  '_controller' => 'GarageBundle\\Controller\\PieceController::indexAction',  '_route' => 'piece_index',);
            }
            not_piece_index:

            if (0 === strpos($pathinfo, '/piece/index')) {
                // piece_indexmanager
                if ($pathinfo === '/piece/indexmanager') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_piece_indexmanager;
                    }

                    return array (  '_controller' => 'GarageBundle\\Controller\\PieceController::indexmanagerAction',  '_route' => 'piece_indexmanager',);
                }
                not_piece_indexmanager:

                // piece_indexworker
                if ($pathinfo === '/piece/indexworker') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_piece_indexworker;
                    }

                    return array (  '_controller' => 'GarageBundle\\Controller\\PieceController::indexworkerAction',  '_route' => 'piece_indexworker',);
                }
                not_piece_indexworker:

            }

            // piece_show
            if (preg_match('#^/piece/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_piece_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'piece_show')), array (  '_controller' => 'GarageBundle\\Controller\\PieceController::showAction',));
            }
            not_piece_show:

            // piece_new
            if ($pathinfo === '/piece/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_piece_new;
                }

                return array (  '_controller' => 'GarageBundle\\Controller\\PieceController::newAction',  '_route' => 'piece_new',);
            }
            not_piece_new:

            // piece_edit
            if (preg_match('#^/piece/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_piece_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'piece_edit')), array (  '_controller' => 'GarageBundle\\Controller\\PieceController::editAction',));
            }
            not_piece_edit:

            // piece_delete
            if (preg_match('#^/piece/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_piece_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'piece_delete')), array (  '_controller' => 'GarageBundle\\Controller\\PieceController::deleteAction',));
            }
            not_piece_delete:

        }

        if (0 === strpos($pathinfo, '/rapport')) {
            // rapport_index
            if (rtrim($pathinfo, '/') === '/rapport') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_rapport_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'rapport_index');
                }

                return array (  '_controller' => 'GarageBundle\\Controller\\RapportController::indexAction',  '_route' => 'rapport_index',);
            }
            not_rapport_index:

            if (0 === strpos($pathinfo, '/rapport/index')) {
                // rapport_indexmanager
                if ($pathinfo === '/rapport/indexmanager') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_rapport_indexmanager;
                    }

                    return array (  '_controller' => 'GarageBundle\\Controller\\RapportController::indexmanagerAction',  '_route' => 'rapport_indexmanager',);
                }
                not_rapport_indexmanager:

                // rapport_indexaccountant
                if ($pathinfo === '/rapport/indexaccountant') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_rapport_indexaccountant;
                    }

                    return array (  '_controller' => 'GarageBundle\\Controller\\RapportController::indexaccountantAction',  '_route' => 'rapport_indexaccountant',);
                }
                not_rapport_indexaccountant:

            }

            // rapport_show
            if (preg_match('#^/rapport/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_rapport_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'rapport_show')), array (  '_controller' => 'GarageBundle\\Controller\\RapportController::showAction',));
            }
            not_rapport_show:

            // rapport_new
            if ($pathinfo === '/rapport/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_rapport_new;
                }

                return array (  '_controller' => 'GarageBundle\\Controller\\RapportController::newAction',  '_route' => 'rapport_new',);
            }
            not_rapport_new:

            // rapport_edit
            if (preg_match('#^/rapport/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_rapport_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'rapport_edit')), array (  '_controller' => 'GarageBundle\\Controller\\RapportController::editAction',));
            }
            not_rapport_edit:

            // rapport_delete
            if (preg_match('#^/rapport/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_rapport_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'rapport_delete')), array (  '_controller' => 'GarageBundle\\Controller\\RapportController::deleteAction',));
            }
            not_rapport_delete:

        }

        if (0 === strpos($pathinfo, '/stock')) {
            // stock_index
            if (rtrim($pathinfo, '/') === '/stock') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_stock_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'stock_index');
                }

                return array (  '_controller' => 'GarageBundle\\Controller\\StockController::indexAction',  '_route' => 'stock_index',);
            }
            not_stock_index:

            // stock_show
            if (preg_match('#^/stock/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_stock_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'stock_show')), array (  '_controller' => 'GarageBundle\\Controller\\StockController::showAction',));
            }
            not_stock_show:

            // stock_new
            if ($pathinfo === '/stock/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_stock_new;
                }

                return array (  '_controller' => 'GarageBundle\\Controller\\StockController::newAction',  '_route' => 'stock_new',);
            }
            not_stock_new:

            // stock_edit
            if (preg_match('#^/stock/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_stock_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'stock_edit')), array (  '_controller' => 'GarageBundle\\Controller\\StockController::editAction',));
            }
            not_stock_edit:

            // stock_delete
            if (preg_match('#^/stock/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_stock_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'stock_delete')), array (  '_controller' => 'GarageBundle\\Controller\\StockController::deleteAction',));
            }
            not_stock_delete:

        }

        if (0 === strpos($pathinfo, '/utilisateur')) {
            // utilisateur_index
            if (rtrim($pathinfo, '/') === '/utilisateur') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_utilisateur_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'utilisateur_index');
                }

                return array (  '_controller' => 'GarageBundle\\Controller\\UtilisateurController::indexAction',  '_route' => 'utilisateur_index',);
            }
            not_utilisateur_index:

            // utilisateur_indexmanager
            if ($pathinfo === '/utilisateur/indexmanager') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_utilisateur_indexmanager;
                }

                return array (  '_controller' => 'GarageBundle\\Controller\\UtilisateurController::indexmanagerAction',  '_route' => 'utilisateur_indexmanager',);
            }
            not_utilisateur_indexmanager:

            // utilisateur_show
            if (preg_match('#^/utilisateur/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_utilisateur_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'utilisateur_show')), array (  '_controller' => 'GarageBundle\\Controller\\UtilisateurController::showAction',));
            }
            not_utilisateur_show:

            // utilisateur_new
            if ($pathinfo === '/utilisateur/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_utilisateur_new;
                }

                return array (  '_controller' => 'GarageBundle\\Controller\\UtilisateurController::newAction',  '_route' => 'utilisateur_new',);
            }
            not_utilisateur_new:

            // utilisateur_edit
            if (preg_match('#^/utilisateur/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_utilisateur_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'utilisateur_edit')), array (  '_controller' => 'GarageBundle\\Controller\\UtilisateurController::editAction',));
            }
            not_utilisateur_edit:

            // utilisateur_delete
            if (preg_match('#^/utilisateur/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_utilisateur_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'utilisateur_delete')), array (  '_controller' => 'GarageBundle\\Controller\\UtilisateurController::deleteAction',));
            }
            not_utilisateur_delete:

        }

        if (0 === strpos($pathinfo, '/interface')) {
            // interface_index
            if (rtrim($pathinfo, '/') === '/interface') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_interface_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'interface_index');
                }

                return array (  '_controller' => 'GarageBundle\\Controller\\InterfaceController::indexAction',  '_route' => 'interface_index',);
            }
            not_interface_index:

            if (0 === strpos($pathinfo, '/interface/index')) {
                // interface_indexmanager
                if ($pathinfo === '/interface/indexmanager') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_interface_indexmanager;
                    }

                    return array (  '_controller' => 'GarageBundle\\Controller\\InterfaceController::indexmanagerAction',  '_route' => 'interface_indexmanager',);
                }
                not_interface_indexmanager:

                // interface_indexreceptionnist
                if ($pathinfo === '/interface/indexreceptionnist') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_interface_indexreceptionnist;
                    }

                    return array (  '_controller' => 'GarageBundle\\Controller\\InterfaceController::indexreceptionnistAction',  '_route' => 'interface_indexreceptionnist',);
                }
                not_interface_indexreceptionnist:

                // interface_indexaccountant
                if ($pathinfo === '/interface/indexaccountant') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_interface_indexaccountant;
                    }

                    return array (  '_controller' => 'GarageBundle\\Controller\\InterfaceController::indexaccountantAction',  '_route' => 'interface_indexaccountant',);
                }
                not_interface_indexaccountant:

                // interface_indexworker
                if ($pathinfo === '/interface/indexworker') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_interface_indexworker;
                    }

                    return array (  '_controller' => 'GarageBundle\\Controller\\InterfaceController::indexworkerAction',  '_route' => 'interface_indexworker',);
                }
                not_interface_indexworker:

            }

        }

        // garage_homepage
        if ($pathinfo === '/Garage/hello') {
            return array (  '_controller' => 'GarageBundle\\Controller\\DefaultController::indexAction',  '_route' => 'garage_homepage',);
        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
