<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();

$collection->add('facture_index', new Route(
    '/',
    array('_controller' => 'GarageBundle:Facture:index'),
    array(),
    array(),
    '',
    array(),
    array('GET')
));

$collection->add('facture_show', new Route(
    '/{id}/show',
    array('_controller' => 'GarageBundle:Facture:show'),
    array(),
    array(),
    '',
    array(),
    array('GET')
));

$collection->add('facture_new', new Route(
    '/new',
    array('_controller' => 'GarageBundle:Facture:new'),
    array(),
    array(),
    '',
    array(),
    array('GET', 'POST')
));

$collection->add('facture_edit', new Route(
    '/{id}/edit',
    array('_controller' => 'GarageBundle:Facture:edit'),
    array(),
    array(),
    '',
    array(),
    array('GET', 'POST')
));

$collection->add('facture_delete', new Route(
    '/{id}/delete',
    array('_controller' => 'GarageBundle:Facture:delete'),
    array(),
    array(),
    '',
    array(),
    array('DELETE')
));

return $collection;
