<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'ProductController::homePage');
$routes->post('/save', 'ProductController::insertCategory');
$routes->get('/insertCategory', 'ProductController::showInsertCategory');
$routes->get('/CategoryView', 'ProductController::homePage');
$routes->get('/productView/(:any)', 'ProductController::showProduct/$1');

