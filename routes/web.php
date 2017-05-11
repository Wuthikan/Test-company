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
    return view('auth/login');
});

Route::get('/Homestock', function () {
    return view('stock/Homestock');
});

Auth::routes();

Route::resource('product', 'ProductController');

Route::resource('basket', 'BasketController');
Route::get('/request/delete/{id}', [
  'uses' => 'BasketController@deleteRequest',
  'as' => 'request.delete',
  ]);
Route::get('/basket/add/{id}', [
    'uses' => 'BasketController@addBasket',
    'as' => 'basket.add',
    'middleware' => ['auth'],
    ]);

Route::resource('stock', 'StockController');
Route::get('/stock/edit/{id}', [
  'uses' => 'StockController@Stockupdate',
  'as' => 'stock.edit',
  ]);


Route::resource('invoice', 'InvoiceController');

Route::get('/home', 'HomeController@index');
Route::get('/index','HomeController@show' );

Route::get('/calculation','CalculationController@calculation' );
Route::get('/calculation/concrettebox','CalculationController@concrettebox' );
Route::get('/calculation/concrette','CalculationController@concrette' );
