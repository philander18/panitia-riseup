<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->post('/', 'Home::index');
$routes->get('/home', 'Home::index');
$routes->get('/home/portal', 'Home::portal');
$routes->get('/home/keluar', 'Home::keluar');
$routes->post('/home/keluar', 'Home::keluar');
