<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->setDefaultController('Admin');
$routes->setDefaultMethod('login');
$routes->setAutoRoute(true);
// $routes->get('/admin/login', 'Admin::login');


$routes->group('', ['filter' => 'AuthAdmin'], function ($routes) {
    $routes->get('/', 'Home::index');
    $routes->get('/home', 'Home::index');
    $routes->get('/item', 'Item::index');

    $routes->get('/item/add', 'Item::add');
    $routes->get('/item/edit', 'Item::edit');
    $routes->get('/item/edit/(:num)', 'Item::edit/$1');
    $routes->get('/item/delete', 'Item::delete');
    $routes->get('/item/delete/(:num)', 'Item::delete/$1');
    $routes->get('/item/view', 'Item::view');
    $routes->get('/item/view/(:num)', 'Item::view/$1');
    $routes->get('/item/destroy', 'Item::destroy');
    $routes->get('/item/destroy/(:num)', 'Item::destroy/$1');
});
