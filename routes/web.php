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
Route::get('pieces', 'controller_pieces@list');

Route::get('stocks','Controller_Stock@display_stock');

Route::get('commandes', 'CommandeController@listCommande');

Route::get('recettes','recipesController@recipes');


//Route::get('/boissons', 'DrinkController@listDrink');
//
//
Route::get('/drinks/orderbyname','BoissonController@ordernames');

Route::get('/drinks/orderbyprice','BoissonController@orderprices');

Route::resource('drinks','BoissonController');

//Route::get('/boissons/details/{id}','BoissonController@show');
//Route::get('/boissons/{id}','BoissonController@show');

//===============================================================
//
//Route::get('/boissons', 'BoissonController@index');
//
//Route::get('/boissons/create','BoissonController@create');
//
//Route::post('/boissons','BoissonController@store');
//
//
//Route::get('/boissons/{id}/edit','BoissonController@edit');
//
//Route::put('/boissons/{id}','BoissonController@update');
//
//Route::delete('/boissons/{id}','BoissonController@destroy');
