<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
	return view('index');
});

Route::get('/lookbook-girl', function () {
	return view('lookbook-girl');
});

Route::get('/lookbook-baby', function () {
	return view('lookbook-baby');
});

Route::get('/listado-productos', function () {
	return view('listado-productos');
});

Route::get('/detalle-producto', function () {
	return view('detalle-producto');
});

Route::get('/cart', function () {
	return view('cart');
});

Route::get('/login', function () {
	return view('login');
});

Route::get('/profile', function () {
	return view('profile');
});

Route::get('/shoppings', function () {
	return view('shoppings');
});

Route::get('/locales', function () {
	return view('locales');
});
