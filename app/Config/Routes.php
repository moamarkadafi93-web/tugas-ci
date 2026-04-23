<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/artikel', 'Artikel::index');
$routes->get('/artikel/detail/(:num)', 'Artikel::detail/$1');
$routes->get('/artikel/tentang', 'Artikel::tentang');
$routes->get('/artikel/tambah', 'Artikel::tambah');