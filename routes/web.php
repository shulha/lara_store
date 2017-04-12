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

Route::get('show/{id}',function($id)
{
    $items=App\Items::find($id); // получаем все, что касается товара (название, цена....)
    $parameters=App\Items::parameters($id);//получаем все параметры
    $images=explode(';',$parameters[0]->preview); //ссылки на картинки передаем отдельным массивом
    return view('show',['items'=>$items,'parameters'=>$parameters,'images'=>$images]);
});


//Route::get('/master', function () {
//    return view('layouts.master');
//});
//Route::get('/master/new', function () {
//    return view('new');
//});
//Route::get('/master/products', function () {
//    return view('products');
//});
