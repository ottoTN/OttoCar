<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();

$collection->add('piece_index', new Route(
    '/',
    array('_controller' => 'GarageBundle:Piece:index'),
    array(),
    array(),
    '',
    array(),
    array('GET')
));

$collection->add('piece_indexmanager', new Route(
    '/indexmanager',
    array('_controller' => 'GarageBundle:Piece:indexmanager'),
    array(),
    array(),
    '',
    array(),
    array('GET')
));

$collection->add('piece_indexworker', new Route(
    '/indexworker',
    array('_controller' => 'GarageBundle:Piece:indexworker'),
    array(),
    array(),
    '',
    array(),
    array('GET')
));

$collection->add('piece_show', new Route(
    '/{id}/show',
    array('_controller' => 'GarageBundle:Piece:show'),
    array(),
    array(),
    '',
    array(),
    array('GET')
));

$collection->add('piece_new', new Route(
    '/new',
    array('_controller' => 'GarageBundle:Piece:new'),
    array(),
    array(),
    '',
    array(),
    array('GET', 'POST')
));

$collection->add('piece_edit', new Route(
    '/{id}/edit',
    array('_controller' => 'GarageBundle:Piece:edit'),
    array(),
    array(),
    '',
    array(),
    array('GET', 'POST')
));

$collection->add('piece_delete', new Route(
    '/{id}/delete',
    array('_controller' => 'GarageBundle:Piece:delete'),
    array(),
    array(),
    '',
    array(),
    array('DELETE')
));

return $collection;
