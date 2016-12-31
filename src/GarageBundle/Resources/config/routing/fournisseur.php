<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();

$collection->add('fournisseur_index', new Route(
    '/',
    array('_controller' => 'GarageBundle:Fournisseur:index'),
    array(),
    array(),
    '',
    array(),
    array('GET')
));

$collection->add('fournisseur_indexmanager', new Route(
    '/indexmanager',
    array('_controller' => 'GarageBundle:Fournisseur:indexmanager'),
    array(),
    array(),
    '',
    array(),
    array('GET')
));

$collection->add('fournisseur_show', new Route(
    '/{id}/show',
    array('_controller' => 'GarageBundle:Fournisseur:show'),
    array(),
    array(),
    '',
    array(),
    array('GET')
));

$collection->add('fournisseur_new', new Route(
    '/new',
    array('_controller' => 'GarageBundle:Fournisseur:new'),
    array(),
    array(),
    '',
    array(),
    array('GET', 'POST')
));

$collection->add('fournisseur_edit', new Route(
    '/{id}/edit',
    array('_controller' => 'GarageBundle:Fournisseur:edit'),
    array(),
    array(),
    '',
    array(),
    array('GET', 'POST')
));

$collection->add('fournisseur_delete', new Route(
    '/{id}/delete',
    array('_controller' => 'GarageBundle:Fournisseur:delete'),
    array(),
    array(),
    '',
    array(),
    array('DELETE')
));

return $collection;
