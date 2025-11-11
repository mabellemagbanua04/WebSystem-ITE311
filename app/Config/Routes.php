<?php

namespace Config;

use CodeIgniter\Router\RouteCollection;
use Config\Services;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// Default route
$routes->get('/', 'Home::index');

// Pages
$routes->get('about', 'Home::about');
$routes->get('contact', 'Home::contact');

// Users CRUD
$routes->get('users', 'Users::index');
$routes->get('users/create', 'Users::create');
$routes->post('users/store', 'Users::store');
$routes->get('users/edit/(:num)', 'Users::edit/$1');
$routes->post('users/update/(:num)', 'Users::update/$1');
$routes->get('users/delete/(:num)', 'Users::delete/$1');

// Students CRUD
$routes->get('students', 'Students::index');
$routes->get('students/create', 'Students::create');
$routes->post('students/store', 'Students::store');
$routes->get('students/edit/(:num)', 'Students::edit/$1');
$routes->post('students/update/(:num)', 'Students::update/$1');
$routes->get('students/delete/(:num)', 'Students::delete/$1');

// Announcements CRUD
$routes->get('announcements', 'Announcements::index');
$routes->get('announcements/create', 'Announcements::create');
$routes->post('announcements/store', 'Announcements::store');
$routes->get('announcements/edit/(:num)', 'Announcements::edit/$1');
$routes->post('announcements/update/(:num)', 'Announcements::update/$1');
$routes->get('announcements/delete/(:num)', 'Announcements::delete/$1');

/**
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 */
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}
