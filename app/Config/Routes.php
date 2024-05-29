<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Dashboard');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(true);
$routes->set404Override();
$routes->setAutoRoute(true);
$routes->get('/', 'Dashboard::index');
$routes->resource('PelangganAPI');

$routes->get('data-pelanggan', 'Pelanggan::index');
$routes->get('pelanggan/create', 'Pelanggan::create'); 
$routes->post('pelanggan/store', 'Pelanggan::store'); 
$routes->post('pelanggan/edit/(:num)', 'Pelanggan::edit/$1');
$routes->post('pelanggan/update/(:num)', 'Pelanggan::update/$1');
$routes->get('pelanggan/delete/(:num)', 'Pelanggan::delete/$1');

$routes->get('data-bus', 'Bus::index');
$routes->get('bus/create', 'Bus::create'); 
$routes->post('bus/store', 'Bus::store'); 
$routes->post('bus/edit/(:num)', 'Bus::edit/$1');
$routes->post('bus/update/(:num)', 'Bus::update/$1');
$routes->get('bus/delete/(:num)', 'Bus::delete/$1');

$routes->get('/login', 'LoginController::index');
$routes->get('/logout', 'LoginController::logout');
$routes->post('/login', 'LoginController::doLogin');

$routes->get('/register', 'Register::index');
$routes->post('/register/auth', 'Register::auth');

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
