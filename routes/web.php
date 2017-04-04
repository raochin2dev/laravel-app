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
    return view('welcome');
});

Route::get('/products', 'ProductsController@index');

// Route::get('/products/add', 'ProductsController@create');

Route::post('/products', 'ProductsController@store');

Auth::routes();

Route::get('/home', 'HomeController@index');
