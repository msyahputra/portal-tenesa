<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('/news-&-event/', 'NewsAndEvent::index');
$routes->get('/news/(:segment)', 'News::detail/$1');
$routes->get('/tenesa', 'Tenesa::index');
$routes->get('/roster/', 'Roster::index');
$routes->get('/Roster/fetch', 'Roster::fetch');
$routes->get('/roster/(:segment)', 'Roster::detail/$1');
$routes->get('/event/(:segment)', 'Event::detail/$1');
$routes->get('/productknowledge/mukadimah/(:segment)', 'ProductKnowledge::detail_mukadimah/$1');
$routes->get('/productknowledge/telephony/(:segment)', 'ProductKnowledge::detail_telephony/$1');
$routes->get('/productknowledge/indihome/(:segment)', 'ProductKnowledge::detail_indihome/$1');
$routes->get('/productknowledge/wifi-id/(:segment)', 'ProductKnowledge::detail_wifiid/$1');
$routes->get('/productknowledge/datin/(:segment)', 'ProductKnowledge::detail_datin/$1');
$routes->get('/productknowledge/lain/(:segment)', 'ProductKnowledge::detail_lain/$1');
$routes->get('/productknowledge/imes/(:segment)', 'ProductKnowledge::detail_imes/$1');
$routes->get('/productknowledge/interuksi/(:segment)', 'ProductKnowledge::detail_interuksi/$1');
$routes->get('/productknowledge/sop/(:segment)', 'ProductKnowledge::detail_sop/$1');
$routes->get('/productknowledge/standar/(:segment)', 'ProductKnowledge::detail_standar/$1');
$routes->get('/productknowledge/form/(:segment)', 'ProductKnowledge::detail_form/$1');
$routes->get('/productknowledge/fault-handling/Telephony/(:segment)', 'ProductKnowledge::detail_fhandling/$1');
$routes->get('/productknowledge/fault-handling/IndiHome/(:segment)', 'ProductKnowledge::detail_fhandling/$1');
$routes->get('/productknowledge/fault-handling/Datin/(:segment)', 'ProductKnowledge::detail_fhandling/$1');
$routes->get('/productknowledge/fault-handling/IMES/(:segment)', 'ProductKnowledge::detail_fhandling/$1');
$routes->get('/productknowledge/panduan-solusi/Gangguan Telephony/(:segment)', 'ProductKnowledge::detail_fsolusi/$1');
$routes->get('/productknowledge/panduan-solusi/Gangguan Internet/(:segment)', 'ProductKnowledge::detail_fsolusi/$1');
$routes->get('/productknowledge/panduan-solusi/Gangguan IPTV/(:segment)', 'ProductKnowledge::detail_fsolusi/$1');
$routes->get('/productknowledge/panduan-solusi/Gangguan Wifi.ID/(:segment)', 'ProductKnowledge::detail_fsolusi/$1');
$routes->get('/productknowledge/panduan-solusi/Gangguan Datin/(:segment)', 'ProductKnowledge::detail_fsolusi/$1');
$routes->get('/productknowledge/panduan-solusi/Gangguan Imes/(:segment)', 'ProductKnowledge::detail_fsolusi/$1');
$routes->get('/tenesa/perfomansi-tenesa/Juni/(:segment)', 'Tenesa::detail_perfomansi/$1');
$routes->get('/tenesa/perfomansi-tenesa/Juli/(:segment)', 'Tenesa::detail_perfomansi/$1');
$routes->get('/tenesa/perfomansi-tenesa/Agustus/(:segment)', 'Tenesa::detail_perfomansi/$1');
$routes->get('/tenesa/perfomansi-tenesa/September/(:segment)', 'Tenesa::detail_perfomansi/$1');
$routes->get('/tenesa/perfomansi-tenesa/November/(:segment)', 'Tenesa::detail_perfomansi/$1');
$routes->get('/tenesa/(:segment)', 'Tenesa::detail_tenesa/$1');
$routes->get('/tenesa/job/(:segment)', 'Tenesa::detail_tenesa/$1');
$routes->get('/tenesa/mom/(:segment)', 'Tenesa::detail_tenesa/$1');
$routes->get('/productknowledge/handlingdatin/(:segment)', 'ProductKnowledge::detail_handlingdatin/$1');
$routes->get('/supportapp/panduanaplikasi/(:segment)', 'SupportApp::detail_panduanaplikasi/$1');

$routes->get('/dashboard', 'Dashboard\Dashboard::index');
$routes->get('/dashboard/pages/sub-categori', 'Dashboard\SubCategori::index');
$routes->get('/dashboard/pages/sub-product', 'Dashboard\SubProduct::index');
$routes->get('/dashboard/pages/product-categori', 'Dashboard\ProductCategori::index');
$routes->get('/dashboard/pages/home-banner', 'Dashboard\HomeBanner::index');
$routes->get('/dashboard/pages/berita', 'Dashboard\Berita::index');
$routes->get('/dashboard/pages/roster', 'Dashboard\Roster::index');
$routes->get('/dashboard/pages/event', 'Dashboard\Event::index');

$routes->get('/dashboard/user-management/data-user', 'Dashboard\DataUsers::index');

$routes->get('/dashboard/user-online', 'Dashboard\UserOnline::index');
$routes->get('/dashboard/visitor-user', 'Dashboard\VisitorUser::index');

$routes->get('/dashboard/pages/sub-categori/(:segment)', 'Dashboard\Subcategori::detail/$1');
$routes->get('/dashboard/pages/sub-categori/create', 'Dashboard\Subcategori::create');
$routes->get('/dashboard/pages/sub-categori/save', 'Dashboard\Subcategori::save');

$routes->get('/team/semarang', 'Team::semarang');
$routes->get('/team/bandung', 'Team::bandung');
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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
