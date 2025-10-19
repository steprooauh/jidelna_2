<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/jidelnicek', 'Home::jidelnicek');
$routes->get('/onas', 'Home::onas');
$routes->get('/nastym', 'Home::nastym');
$routes->get('/clanky', 'Home::clanky');
$routes->get('/prihlaseni', 'Home::prihlaseni');