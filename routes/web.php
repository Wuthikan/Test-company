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

Auth::routes();

Route::resource('product', 'ProductController');


Route::get('/home', 'HomeController@index');
Route::get('/index','HomeController@show' );

Route::get('/calculation','CalculationController@calculation' );
Route::get('/calculation/concrettebox','CalculationController@concrettebox' );
Route::get('/calculation/concrette','CalculationController@concrette' );
