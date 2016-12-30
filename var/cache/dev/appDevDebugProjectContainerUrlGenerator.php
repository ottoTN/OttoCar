<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appDevDebugProjectContainerUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        '_wdt' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:toolbarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_wdt',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:homeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search_bar' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchBarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search_bar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_info' => array (  0 =>   array (    0 => 'about',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:infoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'about',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler/info',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_phpinfo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/phpinfo',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search_results' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchResultsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/search/results',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_open_file' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:openAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/open',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_router' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.router:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/router',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_exception' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_exception_css' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:cssAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception.css',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_twig_error_test' => array (  0 =>   array (    0 => 'code',    1 => '_format',  ),  1 =>   array (    '_controller' => 'twig.controller.preview_error:previewErrorPageAction',    '_format' => 'html',  ),  2 =>   array (    'code' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => '[^/]++',      3 => '_format',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'code',    ),    2 =>     array (      0 => 'text',      1 => '/_error',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'compte_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GarageBundle\\Controller\\CompteController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/compte/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'compte_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'GarageBundle\\Controller\\CompteController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/compte',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'compte_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GarageBundle\\Controller\\CompteController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/compte/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'compte_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'GarageBundle\\Controller\\CompteController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/compte',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'compte_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'GarageBundle\\Controller\\CompteController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/compte',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'employe_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GarageBundle\\Controller\\EmployeController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/employe/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'employe_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'GarageBundle\\Controller\\EmployeController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/employe',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'employe_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GarageBundle\\Controller\\EmployeController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/employe/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'employe_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'GarageBundle\\Controller\\EmployeController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/employe',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'employe_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'GarageBundle\\Controller\\EmployeController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/employe',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'facture_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GarageBundle\\Controller\\FactureController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/facture/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'facture_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'GarageBundle\\Controller\\FactureController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/facture',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'facture_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GarageBundle\\Controller\\FactureController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/facture/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'facture_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'GarageBundle\\Controller\\FactureController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/facture',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'facture_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'GarageBundle\\Controller\\FactureController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/facture',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fiche_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GarageBundle\\Controller\\FicheController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/fiche/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fiche_indexreceptionnist' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GarageBundle\\Controller\\FicheController::indexreceptionnistAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/fiche/indexreceptionnist',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fiche_indexworker' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GarageBundle\\Controller\\FicheController::indexworkerAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/fiche/indexworker',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fiche_indexaccountant' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GarageBundle\\Controller\\FicheController::indexaccountantAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/fiche/indexaccountant',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fiche_indexmanager' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GarageBundle\\Controller\\FicheController::indexmanagerAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/fiche/indexmanager',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fiche_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'GarageBundle\\Controller\\FicheController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/fiche',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fiche_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GarageBundle\\Controller\\FicheController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/fiche/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fiche_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'GarageBundle\\Controller\\FicheController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/fiche',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fiche_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'GarageBundle\\Controller\\FicheController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/fiche',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fournisseur_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GarageBundle\\Controller\\FournisseurController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/fournisseur/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fournisseur_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'GarageBundle\\Controller\\FournisseurController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/fournisseur',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fournisseur_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GarageBundle\\Controller\\FournisseurController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/fournisseur/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fournisseur_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'GarageBundle\\Controller\\FournisseurController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/fournisseur',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fournisseur_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'GarageBundle\\Controller\\FournisseurController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/fournisseur',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'notification_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GarageBundle\\Controller\\NotificationController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/notification/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'notification_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'GarageBundle\\Controller\\NotificationController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/notification',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'notification_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GarageBundle\\Controller\\NotificationController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/notification/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'notification_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'GarageBundle\\Controller\\NotificationController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/notification',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'notification_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'GarageBundle\\Controller\\NotificationController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/notification',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'piece_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GarageBundle\\Controller\\PieceController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/piece/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'piece_indexmanager' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GarageBundle\\Controller\\PieceController::indexmanagerAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/piece/indexmanager',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'piece_indexworker' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GarageBundle\\Controller\\PieceController::indexworkerAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/piece/indexworker',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'piece_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'GarageBundle\\Controller\\PieceController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/piece',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'piece_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GarageBundle\\Controller\\PieceController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/piece/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'piece_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'GarageBundle\\Controller\\PieceController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/piece',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'piece_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'GarageBundle\\Controller\\PieceController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/piece',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'rapport_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GarageBundle\\Controller\\RapportController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/rapport/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'rapport_indexmanager' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GarageBundle\\Controller\\RapportController::indexmanagerAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/rapport/indexmanager',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'rapport_indexaccountant' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GarageBundle\\Controller\\RapportController::indexaccountantAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/rapport/indexaccountant',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'rapport_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'GarageBundle\\Controller\\RapportController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/rapport',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'rapport_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GarageBundle\\Controller\\RapportController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/rapport/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'rapport_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'GarageBundle\\Controller\\RapportController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/rapport',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'rapport_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'GarageBundle\\Controller\\RapportController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/rapport',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'stock_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GarageBundle\\Controller\\StockController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/stock/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'stock_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'GarageBundle\\Controller\\StockController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/stock',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'stock_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GarageBundle\\Controller\\StockController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/stock/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'stock_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'GarageBundle\\Controller\\StockController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/stock',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'stock_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'GarageBundle\\Controller\\StockController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/stock',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'utilisateur_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GarageBundle\\Controller\\UtilisateurController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/utilisateur/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'utilisateur_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'GarageBundle\\Controller\\UtilisateurController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/utilisateur',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'utilisateur_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GarageBundle\\Controller\\UtilisateurController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/utilisateur/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'utilisateur_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'GarageBundle\\Controller\\UtilisateurController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/utilisateur',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'utilisateur_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'GarageBundle\\Controller\\UtilisateurController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/utilisateur',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'garage_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GarageBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Garage/hello',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}