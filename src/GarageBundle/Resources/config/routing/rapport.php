<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();

$collection->add('rapport_index', new Route(
    '/',
    array('_controller' => 'GarageBundle:Rapport:index'),
    array(),
    array(),
    '',
    array(),
    array('GET')
));

$collection->add('rapport_indexmanager', new Route(
    '/indexmanager',
    array('_controller' => 'GarageBundle:Rapport:indexmanager'),
    array(),
    array(),
    '',
    array(),
    array('GET')
));

$collection->add('rapport_indexaccountant', new Route(
    '/indexaccountant',
    array('_controller' => 'GarageBundle:Rapport:indexaccountant'),
    array(),
    array(),
    '',
    array(),
    array('GET')
));

$collection->add('rapport_show', new Route(
    '/{id}/show',
    array('_controller' => 'GarageBundle:Rapport:show'),
    array(),
    array(),
    '',
    array(),
    array('GET')
));

$collection->add('rapport_new', new Route(
    '/new',
    array('_controller' => 'GarageBundle:Rapport:new'),
    array(),
    array(),
    '',
    array(),
    array('GET', 'POST')
));

$collection->add('rapport_edit', new Route(
    '/{id}/edit',
    array('_controller' => 'GarageBundle:Rapport:edit'),
    array(),
    array(),
    '',
    array(),
    array('GET', 'POST')
));

$collection->add('rapport_delete', new Route(
    '/{id}/delete',
    array('_controller' => 'GarageBundle:Rapport:delete'),
    array(),
    array(),
    '',
    array(),
    array('DELETE')
));

return $collection;
