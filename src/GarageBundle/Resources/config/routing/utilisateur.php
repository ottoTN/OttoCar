<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();

$collection->add('utilisateur_index', new Route(
    '/',
    array('_controller' => 'GarageBundle:Utilisateur:index'),
    array(),
    array(),
    '',
    array(),
    array('GET')
));

$collection->add('utilisateur_indexmanager', new Route(
    '/indexmanager',
    array('_controller' => 'GarageBundle:Utilisateur:indexmanager'),
    array(),
    array(),
    '',
    array(),
    array('GET')
));

$collection->add('utilisateur_show', new Route(
    '/{id}/show',
    array('_controller' => 'GarageBundle:Utilisateur:show'),
    array(),
    array(),
    '',
    array(),
    array('GET')
));

$collection->add('utilisateur_new', new Route(
    '/new',
    array('_controller' => 'GarageBundle:Utilisateur:new'),
    array(),
    array(),
    '',
    array(),
    array('GET', 'POST')
));

$collection->add('utilisateur_edit', new Route(
    '/{id}/edit',
    array('_controller' => 'GarageBundle:Utilisateur:edit'),
    array(),
    array(),
    '',
    array(),
    array('GET', 'POST')
));

$collection->add('utilisateur_delete', new Route(
    '/{id}/delete',
    array('_controller' => 'GarageBundle:Utilisateur:delete'),
    array(),
    array(),
    '',
    array(),
    array('DELETE')
));

return $collection;
