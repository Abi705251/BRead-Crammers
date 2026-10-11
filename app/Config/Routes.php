<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Home::index');

$routes->get('Regestrationform', 'Regestrationform::index');
$routes->get('Regestrationform/index', 'Regestrationform::index');
$routes->post('Regestrationform/save', 'Regestrationform::save');
$routes->get('Regestrationform/save', 'Regestrationform::save');
