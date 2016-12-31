<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();

$collection->add('interface_index', new Route(
    '/',
    array('_controller' => 'GarageBundle:Interface:index'),
    array(),
    array(),
    '',
    array(),
    array('GET')
));

$collection->add('interface_indexmanager', new Route(
    '/indexmanager',
    array('_controller' => 'GarageBundle:Interface:indexmanager'),
    array(),
    array(),
    '',
    array(),
    array('GET')
));

$collection->add('interface_indexreceptionnist', new Route(
    '/indexreceptionnist',
    array('_controller' => 'GarageBundle:Interface:indexreceptionnist'),
    array(),
    array(),
    '',
    array(),
    array('GET')
));

$collection->add('interface_indexaccountant', new Route(
    '/indexaccountant',
    array('_controller' => 'GarageBundle:Interface:indexaccountant'),
    array(),
    array(),
    '',
    array(),
    array('GET')
));

$collection->add('interface_indexworker', new Route(
    '/indexworker',
    array('_controller' => 'GarageBundle:Interface:indexworker'),
    array(),
    array(),
    '',
    array(),
    array('GET')
));

return $collection;
