<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

// Auth
$routes->get('/login', 'Auth::login');
$routes->post('/login', 'Auth::doLogin');
$routes->get('/logout', 'Auth::logout');

// Menu
$routes->get('/paket', 'ProdukController::index');
$routes->get('/keranjang', 'TransaksiController::index');
$routes->post('/keranjang/tambah/(:num)', 'TransaksiController::tambah/$1');
$routes->get('/keranjang/hapus/(:num)', 'TransaksiController::hapus/$1');
$routes->post('/keranjang/hapus/(:num)', 'TransaksiController::hapus/$1');
$routes->post('/notifikasi/kirim', 'KonfirmasiPesananController::konfirmasi_wa');

$routes->get('/booking', 'BookingController::index'); // kalau kamu pakai booking
$routes->get('/user', 'UserController::index'); // dashboard admin

// Filtered area (opsional kalau nanti butuh pisahkan role akses halaman tertentu)
$routes->group('admin', ['filter' => 'admin'], function($routes) {
    // Kelola User
    $routes->get('user', 'UserController::index');
    $routes->get('user/create', 'UserController::create');
    $routes->post('user/store', 'UserController::store');
    $routes->get('user/edit/(:num)', 'UserController::edit/$1');
    $routes->post('user/update/(:num)', 'UserController::update/$1');
    $routes->get('user/delete/(:num)', 'UserController::delete/$1');

    // Kelola Paket (CRUD khusus admin)
    $routes->get('paket', 'Admin\PaketController::index');
    $routes->get('paket/create', 'Admin\PaketController::create');
    $routes->post('paket/store', 'Admin\PaketController::store');
    $routes->get('paket/edit/(:num)', 'Admin\PaketController::edit/$1');
    $routes->post('paket/update/(:num)', 'Admin\PaketController::update/$1');
    $routes->get('paket/delete/(:num)', 'Admin\PaketController::delete/$1');
});




$routes->group('guest', ['filter' => 'guest'], function($routes) {
    $routes->get('keranjang', 'TransaksiController::index');
});
