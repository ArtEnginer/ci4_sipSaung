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
$routes->group('', ['namespace' => 'App\Controllers'], function ($routes) {
    $routes->get('pendaftaran', 'Home::pendaftaran', ['as' => 'pendaftaran']);
});

$routes->group('', ['namespace' => 'App\Controllers\Panel'], function ($routes) {
    $routes->get('panel', 'Dashboard::index', ['as' => 'panel']);
    $routes->get('jeniskelas', 'JenisKelas::index', ['as' => 'jenis-kelas']);
    $routes->get('jeniskelas/add', 'JenisKelas::add', ['as' => 'jenis-kelas-add']);
    $routes->get('jeniskelas/edit/(:num)', 'JenisKelas::edit/$1', ['as' => 'jenis-kelas-edit']);
    $routes->get('jeniskelas/delete/(:num)', 'JenisKelas::delete/$1', ['as' => 'jenis-kelas-delete']);

    // pendaftar
    $routes->get('pendaftar', 'Pendaftar::index', ['as' => 'pendaftar']);
    $routes->get('pendaftar/add', 'Pendaftar::add', ['as' => 'pendaftar-add']);
    $routes->get('pendaftar/edit/(:num)', 'Pendaftar::edit/$1', ['as' => 'pendaftar-edit']);
    $routes->get('pendaftar/detail/(:num)', 'Pendaftar::detail/$1', ['as' => 'pendaftar-detail']);
    $routes->get('pendaftar/delete/(:num)', 'Pendaftar::delete/$1', ['as' => 'pendaftar-delete']);
    $routes->get('pendaftar/pending/(:num)', 'Pendaftar::pending/$1', ['as' => 'pendaftar-pending']);
    $routes->get('pendaftar/konfirm/(:num)', 'Pendaftar::konfirm/$1', ['as' => 'pendaftar-konfirm']);
    $routes->get('pendaftar/tolak/(:num)', 'Pendaftar::tolak/$1', ['as' => 'pendaftar-tolak']);

    // siswa
    $routes->get('siswa', 'Siswa::index', ['as' => 'siswa']);

    // Pengaturan
    $routes->get('pengaturan', 'Pengaturan::index', ['as' => 'pengaturan']);
    $routes->get('alamat/add', 'Pengaturan::alamatAdd', ['as' => 'alamat-add']);
    $routes->get('alamat/edit/(:num)', 'Pengaturan::alamatEdit/$1', ['as' => 'alamat-edit']);
    $routes->get('alamat/delete/(:num)', 'Pengaturan::alamatDelete/$1', ['as' => 'alamat-delete']);
    $routes->get('contact/add', 'Pengaturan::contactAdd', ['as' => 'contact-add']);
    $routes->get('contact/edit/(:num)', 'Pengaturan::contactEdit/$1', ['as' => 'contact-edit']);
    $routes->get('contact/delete/(:num)', 'Pengaturan::contactDelete/$1', ['as' => 'contact-delete']);
    $routes->get('sosmed/add', 'Pengaturan::sosmedAdd', ['as' => 'sosmed-add']);
    $routes->get('sosmed/edit/(:num)', 'Pengaturan::sosmedEdit/$1', ['as' => 'sosmed-edit']);
    $routes->get('sosmed/delete/(:num)', 'Pengaturan::sosmedDelete/$1', ['as' => 'sosmed-delete']);
    

});

$routes->group('', ['namespace' => 'App\Controllers\Api'], function ($routes) {
    $routes->post('pendaftaran', 'Home::pendaftaran', ['as' => 'pendaftaran']);
    $routes->post('jeniskelas/add', 'JenisKelas::add', ['as' => 'jenis-kelas-add']);
    $routes->post('jeniskelas/edit/(:num)', 'JenisKelas::edit/$1', ['as' => 'jenis-kelas-edit']);
    $routes->post('pengaturan/judul/edit', 'Pengaturan::judulEdit', ['as' => 'pengaturan-judul-edit']);
    $routes->post('pengaturan/deskripsi/edit', 'Pengaturan::deskripsiEdit', ['as' => 'pengaturan-deskripsi-edit']);
    $routes->post('alamat/add', 'Pengaturan::alamatAdd', ['as' => 'pengaturan-alamat-add']);
    $routes->post('alamat/edit/(:num)', 'Pengaturan::alamatEdit/$1', ['as' => 'pengaturan-alamat-edit']);
    $routes->post('contact/add', 'Pengaturan::contactAdd', ['as' => 'pengaturan-contact-add']);
    $routes->post('contact/edit/(:num)', 'Pengaturan::contactEdit/$1', ['as' => 'pengaturan-contact-edit']);
    $routes->post('sosmed/add', 'Pengaturan::sosmedAdd', ['as' => 'pengaturan-sosmed-add']);
    $routes->post('sosmed/edit/(:num)', 'Pengaturan::sosmedEdit/$1', ['as' => 'pengaturan-sosmed-edit']);

});
service('auth')->routes($routes);
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
