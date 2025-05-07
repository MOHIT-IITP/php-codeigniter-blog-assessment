<?php

namespace Config;

$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

$routes->get('/', 'HomeController::index');
$routes->get('post/(:num)', 'HomeController::show/$1');


// Blog Post Management Routes
$routes->group('admin', function($routes) {
    $routes->get('blog-posts', 'Admin\BlogPostController::index');
    $routes->get('blog-posts/create', 'Admin\BlogPostController::create');
    $routes->post('blog-posts/store', 'Admin\BlogPostController::store');
    $routes->get('blog-posts/edit/(:num)', 'Admin\BlogPostController::edit/$1');
    $routes->post('blog-posts/update/(:num)', 'Admin\BlogPostController::update/$1');
    $routes->post('blog-posts/delete/(:num)', 'Admin\BlogPostController::delete/$1');
});

if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
