<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();

$collection->add('fiche_index', new Route(
    '/',
    array('_controller' => 'GarageBundle:Fiche:index'),
    array(),
    array(),
    '',
    array(),
    array('GET')
));

$collection->add('fiche_indexreceptionnist', new Route(
    '/indexreceptionnist',
    array('_controller' => 'GarageBundle:Fiche:indexreceptionnist'),
    array(),
    array(),
    '',
    array(),
    array('GET')
));

$collection->add('fiche_indexworker', new Route(
    '/indexworker',
    array('_controller' => 'GarageBundle:Fiche:indexworker'),
    array(),
    array(),
    '',
    array(),
    array('GET')
));

$collection->add('fiche_indexaccountant', new Route(
    '/indexaccountant',
    array('_controller' => 'GarageBundle:Fiche:indexaccountant'),
    array(),
    array(),
    '',
    array(),
    array('GET')
));

$collection->add('fiche_indexmanager', new Route(
    '/indexmanager',
    array('_controller' => 'GarageBundle:Fiche:indexmanager'),
    array(),
    array(),
    '',
    array(),
    array('GET')
));

$collection->add('fiche_show', new Route(
    '/{id}/show',
    array('_controller' => 'GarageBundle:Fiche:show'),
    array(),
    array(),
    '',
    array(),
    array('GET')
));

$collection->add('fiche_new', new Route(
    '/new',
    array('_controller' => 'GarageBundle:Fiche:new'),
    array(),
    array(),
    '',
    array(),
    array('GET', 'POST')
));

$collection->add('fiche_edit', new Route(
    '/{id}/edit',
    array('_controller' => 'GarageBundle:Fiche:edit'),
    array(),
    array(),
    '',
    array(),
    array('GET', 'POST')
));

$collection->add('fiche_delete', new Route(
    '/{id}/delete',
    array('_controller' => 'GarageBundle:Fiche:delete'),
    array(),
    array(),
    '',
    array(),
    array('DELETE')
));

return $collection;
