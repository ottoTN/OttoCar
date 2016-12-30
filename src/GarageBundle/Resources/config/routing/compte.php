<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();

$collection->add('compte_index', new Route(
    '/',
    array('_controller' => 'GarageBundle:Compte:index'),
    array(),
    array(),
    '',
    array(),
    array('GET')
));

$collection->add('compte_show', new Route(
    '/{id}/show',
    array('_controller' => 'GarageBundle:Compte:show'),
    array(),
    array(),
    '',
    array(),
    array('GET')
));

$collection->add('compte_new', new Route(
    '/new',
    array('_controller' => 'GarageBundle:Compte:new'),
    array(),
    array(),
    '',
    array(),
    array('GET', 'POST')
));

$collection->add('compte_edit', new Route(
    '/{id}/edit',
    array('_controller' => 'GarageBundle:Compte:edit'),
    array(),
    array(),
    '',
    array(),
    array('GET', 'POST')
));

$collection->add('compte_delete', new Route(
    '/{id}/delete',
    array('_controller' => 'GarageBundle:Compte:delete'),
    array(),
    array(),
    '',
    array(),
    array('DELETE')
));

return $collection;
