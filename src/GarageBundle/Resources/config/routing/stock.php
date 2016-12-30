<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();

$collection->add('stock_index', new Route(
    '/',
    array('_controller' => 'GarageBundle:Stock:index'),
    array(),
    array(),
    '',
    array(),
    array('GET')
));

$collection->add('stock_show', new Route(
    '/{id}/show',
    array('_controller' => 'GarageBundle:Stock:show'),
    array(),
    array(),
    '',
    array(),
    array('GET')
));

$collection->add('stock_new', new Route(
    '/new',
    array('_controller' => 'GarageBundle:Stock:new'),
    array(),
    array(),
    '',
    array(),
    array('GET', 'POST')
));

$collection->add('stock_edit', new Route(
    '/{id}/edit',
    array('_controller' => 'GarageBundle:Stock:edit'),
    array(),
    array(),
    '',
    array(),
    array('GET', 'POST')
));

$collection->add('stock_delete', new Route(
    '/{id}/delete',
    array('_controller' => 'GarageBundle:Stock:delete'),
    array(),
    array(),
    '',
    array(),
    array('DELETE')
));

return $collection;
