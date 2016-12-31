<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();

$collection->add('employe_index', new Route(
    '/',
    array('_controller' => 'GarageBundle:Employe:index'),
    array(),
    array(),
    '',
    array(),
    array('GET')
));

$collection->add('employe_indexmanager', new Route(
    '/indexmanager',
    array('_controller' => 'GarageBundle:Employe:indexmanager'),
    array(),
    array(),
    '',
    array(),
    array('GET')
));

$collection->add('employe_show', new Route(
    '/{id}/show',
    array('_controller' => 'GarageBundle:Employe:show'),
    array(),
    array(),
    '',
    array(),
    array('GET')
));

$collection->add('employe_new', new Route(
    '/new',
    array('_controller' => 'GarageBundle:Employe:new'),
    array(),
    array(),
    '',
    array(),
    array('GET', 'POST')
));

$collection->add('employe_edit', new Route(
    '/{id}/edit',
    array('_controller' => 'GarageBundle:Employe:edit'),
    array(),
    array(),
    '',
    array(),
    array('GET', 'POST')
));

$collection->add('employe_delete', new Route(
    '/{id}/delete',
    array('_controller' => 'GarageBundle:Employe:delete'),
    array(),
    array(),
    '',
    array(),
    array('DELETE')
));

return $collection;
