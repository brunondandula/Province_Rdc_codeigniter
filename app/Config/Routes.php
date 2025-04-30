<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');


$routes->get('provinces', 'ProvinceController::index'); 
$routes->get('provinces/create', 'ProvinceController::create'); 
$routes->post('provinces/store', 'ProvinceController::store'); 
$routes->get('provinces/edit/(:num)', 'ProvinceController::edit/$1');
$routes->post('provinces/update/(:num)', 'ProvinceController::update/$1');
$routes->delete('provinces/delete/(:num)', 'ProvinceController::delete/$1');


$routes->get('villes', 'VilleController::index'); 
$routes->get('villes/create', 'VilleController::create'); 
$routes->post('villes/store', 'VilleController::store'); 
$routes->get('villes/edit/(:num)', 'VilleController::edit/$1'); 
$routes->post('villes/update/(:num)', 'VilleController::update/$1');

$routes->get('villes/(:num)', 'VilleController::show/$1'); 
$routes->delete('villes/delete/(:num)', 'VilleController::delete/$1'); 

$routes->get('city/get_info', 'City::get_info');
$routes->get('/city/(:num)', 'Home::show/$1'); 
$routes->get('city/get_details/(:num)', 'City::get_details/$1');