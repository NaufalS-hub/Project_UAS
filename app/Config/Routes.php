<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/paket', 'PaketController::index');
$routes->get('/keranjang', 'TransaksiController::index');