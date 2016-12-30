<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();

$collection->add('notification_index', new Route(
    '/',
    array('_controller' => 'GarageBundle:Notification:index'),
    array(),
    array(),
    '',
    array(),
    array('GET')
));

$collection->add('notification_show', new Route(
    '/{id}/show',
    array('_controller' => 'GarageBundle:Notification:show'),
    array(),
    array(),
    '',
    array(),
    array('GET')
));

$collection->add('notification_new', new Route(
    '/new',
    array('_controller' => 'GarageBundle:Notification:new'),
    array(),
    array(),
    '',
    array(),
    array('GET', 'POST')
));

$collection->add('notification_edit', new Route(
    '/{id}/edit',
    array('_controller' => 'GarageBundle:Notification:edit'),
    array(),
    array(),
    '',
    array(),
    array('GET', 'POST')
));

$collection->add('notification_delete', new Route(
    '/{id}/delete',
    array('_controller' => 'GarageBundle:Notification:delete'),
    array(),
    array(),
    '',
    array(),
    array('DELETE')
));

return $collection;
