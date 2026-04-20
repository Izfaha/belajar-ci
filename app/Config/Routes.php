<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\ProdukController;
use App\Controllers\TransaksiController;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

// using array callable syntax

// produk route 
$routes->get('/produk', [ProdukController::class, 'index']);

// keranjang route
$routes->get('/keranjang', [TransaksiController::class, 'index']);

$routes->get('login', 'AuthController::login');
$routes->post('login', 'AuthController::login');
$routes->get('logout', 'AuthController::logout');