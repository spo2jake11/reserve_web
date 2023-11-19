<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'ReservesController::index');
$routes->get('reserve', 'ReservationController::index');