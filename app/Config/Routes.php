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
$routes->get('/', 'Home::index');
$routes->get('/index', 'Users::index');
$routes->get('/category', 'Home::category');
$routes->get('/admin', 'Produk::index', ['filter' => 'role:Staff']);
$routes->get('/produk', 'Produk::index', ['filter' => 'role:Staff']);
$routes->post('/tambahProduk', 'Produk::upload', ['filter' => 'role:Staff']);
$routes->post('/updateProduk', 'Produk::update', ['filter' => 'role:Staff']);
$routes->post('/deleteProduk', 'Produk::delete', ['filter' => 'role:Staff']);
$routes->get('/produkItems', 'Produk::produkItems', ['filter' => 'role:Staff, Manager']);
$routes->post('/uploadProdukItems', 'Produk::uploadProdukItems', ['filter' => 'role:Staff']);
$routes->post('/updateProdukItems', 'Produk::updateProdukItems', ['filter' => 'role:Staff']);
$routes->post('/deleteProdukItems', 'Produk::deleteProdukItems', ['filter' => 'role:Staff']);
$routes->post('/acceptProduk', 'Produk::acceptProduk', ['filter' => 'role:Manager']);
$routes->get('/mProdukItems', 'Produk::mProdukItems', ['filter' => 'role:Manager']);

// hero
$routes->get('/hero', 'Hero::index', ['filter' => 'role:Staff, Manager']);
$routes->post('/uploadHero', 'Hero::upload', ['filter' => 'role:Staff']);
$routes->post('/updateHero', 'Hero::update', ['filter' => 'role:Staff']);
$routes->post('/deleteHero', 'Hero::delete', ['filter' => 'role:Staff']);
$routes->post('/acceptHero', 'Hero::acceptHero', ['filter' => 'role:Manager']);

// category
$routes->post('/searchCategory', 'Home::searchCategory');


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