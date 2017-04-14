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

Auth::routes();

Route::get('/home', 'HomeController@index');


Route::get('additem','ItemsController@add');
Route::post('additem','ItemsController@save');

Route::post('get_parameters','ParametersController@get');
Route::post('save_parameters','ParametersController@save');

Route::get('show/{id}', 'ItemsController@show');

Route::get('edit/{id}','ItemsController@edit');

Route::post('del_image','ItemsController@del_image');

Route::post('edit/{id}','ItemsController@update');



//Route::get('/master', function () {
//    return view('layouts.master');
//});
//Route::get('/master/new', function () {
//    return view('new');
//});
//Route::get('/master/products', function () {
//    return view('products');
//});
