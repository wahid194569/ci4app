<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

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
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

// Controller default
$routes->get('/', 'Pages::index');
$routes->get('/', 'Home::index');

// Controller Pages
$routes->get('/pages', 'Pages::index');
$routes->get('/pages/index', 'Pages::index');
$routes->get('/pages/index.php', 'Pages::index');
$routes->get('/pages/about', 'Pages::about');
$routes->get('/pages/about.php', 'Pages::about');
$routes->get('/pages/contact', 'Pages::contact');
$routes->get('/pages/contact.php', 'Pages::contact');
// $routes->get('/', 'Home::coba');

// CI akan membuat jalur ketika ada akses yang metode requestnya get yang bealamat 'routes' atau berslash '/', arahkan ke controller home method index
// Home nyambung atau berasosiasi dengan Folder Controller file Home
$routes->get('/home', 'Home::index'); // http://localhost:8080/home
$routes->get('/home/index', 'Home::index'); // http://localhost:8080/home/index
// $routes->get('/home', 'Home::coba'); patah karena script 43
// $routes->get('/home/coba', 'Home::coba'); // http://localhost:8080/home/coba

// // Controller Coba
// $routes->get('/coba', 'Coba::index'); // http://localhost:8080/coba
// $routes->get('/coba/index', 'Coba::index'); // http://localhost:8080/coba/index
// $routes->get('/coba/about', 'Coba::about'); // http://localhost:8080/coba/about
// $routes->get('/coba/about/(:any)', 'Coba::about/$1'); // Result = Ini controller Coba method $nama, ini berumur $umur
// $routes->get('/coba/about/(:any)/(:any)', 'Coba::about/$1/$2'); // perlu melihat dokumentasi dari CodeIgniter 4.2.11
// $routes->get('/coba/me', 'Coba::me'); // http://localhost:8080/coba/me
// $routes->get('/coba/you', 'Coba::you'); // http://localhost:8080/coba/you
// $routes->get('/coba/(:any)', 'Coba::index/$1');

// $routes->get('/users', 'Admin\Users::index');


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
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
