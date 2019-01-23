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

Auth::routes();
Route::get('/', 'ProductController@show')->name('coza');
Route::get('/filter', 'ProductController@filter');
Route::get('/search', 'ProductController@search');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/cart', 'CartItemsController@getUserCart');
Route::get('/addtocart', 'ProductController@addToCart');
Route::get('/listacarrello', 'ProductController@showcart')->name('listacart');
Route::get('/{Utente}/carrello', 'ContainController@Carrello')->name('carrello');
Route::get('/{Prodotto}/dettaglio', 'ContainController@DettaglioProdotto')->name('dettaglio');
Route::get('/getnumberitemcart', 'ProductController@getnumberCart');
Route::get('/eliminaprodottocarrello', 'ProductController@eliminaprodcart');
Route::get('/modificanumitems', 'ProductController@modificanumitems');
Route::get('/chisiamo', 'ContainController@ChiSiamo')->name('chisiamo');
Route::get('/Profilo', 'ContainController@getprofile')->name('profilo');

