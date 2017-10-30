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
Route::resource('buku','BukuController');
Route::get('buku/delete/{id}', 'BukuController@destroy');

Route::resource('distributor','DistributorController');
Route::get('distributor/delete/{id}', 'DistributorController@destroy');

Route::resource('pasok','PasokController');
Route::get('pasok/delete/{id}', 'PasokController@destroy');

Route::resource('penjualan','PenjualanController');
Route::get('penjualan/delete/{id}', 'PenjualanController@destroy');

Auth::routes();

Route::get('/home', 'HomeController@index');
