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

Route::get('/', function()
{
    return view('front_office.preparation');
});
Route::get('back_office', function()
{
    return view('back_office.index');
});
//Route::get('pieces', 'CoinController@list');
//Route::get('stocks','StockController@display_stock');
//Route::get('sales', 'SaleController@listCommande');


Route::get('/drinks/orderbyname','DrinkController@ordernames');
Route::get('/drinks/orderbyprice','DrinkController@orderprices');

Route::get('/drinks/details/{{$drink->drink_ID}}','DrinkController@show');
Route::get('/drinks/{{$drink->drink_ID}}','DrinkController@show');

//Route::get('/drinks/create', 'DrinkController@create');
//Route::post('/drinks', 'DrinkController@store');


Route::resource('/drinks','DrinkController');
Route::resource('/recettes','RecipeController');
Route::resource('/sales','SaleController');
Route::resource('/coins','CoinController');
Route::resource('/stocks','StockController');
//===============================================================
// RESOURCE est egal à
//Route::get('/drinks', 'DrinkController@index');
//
//Route::get('/drinks/create','DrinkController@create');
//
//Route::post('/drinks','DrinkController@store');
//
//Route::get('drinks/{id}/edit','DrinkController@edit');
//
//Route::put('/boissons/{id}','DrinkController@update');
//
//Route::delete('/boissons/{id}','DrinkController@destroy');
