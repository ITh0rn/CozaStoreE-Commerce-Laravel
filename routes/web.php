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
Route::post('/addtocart', 'ProductController@addToCart');
Route::get('/listacarrello', 'ProductController@showcart')->name('listacart');
Route::get('/{Utente}/carrello', 'ContainController@Carrello')->name('carrello');
Route::get('/{Prodotto}/dettaglio', [
    'uses' => 'ContainController@DettaglioProdotto',
    'as' => 'dettaglio',
]);
Route::get('/getnumberitemcart', 'ProductController@getnumberCart');
Route::get('/eliminaprodottocarrello', 'ProductController@eliminaprodcart');
Route::get('/chi-siamo', 'ContainController@ChiSiamo')->name('chisiamo');
Route::get('/modificanumitems', 'ProductController@modificanumitems');
Route::get('/chisiamo', 'ContainController@ChiSiamo')->name('chisiamo');
Route::get('/admin')->name('Admin');
Route::get('/contatti', 'ContainController@Contatti')->name('contatti');
Route::get('/shop', 'ProductController@Shop')->name('shop');
Route::get('/contatti', 'ContainController@Contatti')->name('contatti');
Route::get('/ordini', 'UserController@ordini')->name('ordini');
Route::get('/indirizzi', 'UserController@indirizzi')->name('indirizzi');
Route::get('/reso-gratuito', 'ContainController@ResoGratuito')->name('resogratuito');
Route::get('/spedizione', 'ContainController@Spedizione')->name('spedizione');
Route::get('/FAQs', 'ContainController@FAQs')->name('FAQs');
Route::get('/indirizzi', 'UserController@indirizzi')->name('indirizzi');
Route::get('/userinfo', 'UserController@userinfo')->name('userinfo');
Route::get('/blog', 'BlogController@show')->name('blog');
Route::get('/blog-detail', 'BlogController@DettaglioArticoli')->name('dettaglioarticoli');
Route::post('/prova', 'ProductController@prova');
Route::get('/blog-', 'BlogController@DataArticoli')->name('data');
Route::post('/addreview', 'ProductController@addreview')->name('addreview');
Route::get('/opzioni-di-pagamento', 'UserController@opzionidipagamento')->name('opzionidipagamento');
<<<<<<< HEAD
Route::post('/addressadding', 'UserController@addressAdd')->name('addressadd');
Route::get('/removeaddress', 'UserController@removeadd')->name('removeadd');
=======
Route::post('/aggiungicarta', 'UserController@aggiungicarta')->name('aggiungicarta');
Route::post('/addAddress', 'UserController@addAddress')->name('addAddress');
>>>>>>> 7103e5caba75c41887a4e45d5d25fd7dfb3b6fb2

//Pagine che richiedono obbligatoriamente l'accesso come profilo, procedi pagamento ecc
Route::group(['middleware' => 'auth'], function () {
    Route::get('/Profilo', 'ContainController@getprofile')->name('profilo');
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/ajax', function (){
    $comment = DB::table('product_comments')->where('id_prodotto', 1)
        ->join('users', 'users.id', '=', 'product_comments.id_utente')
        ->Paginate(3);
    return view('Contents.comments', compact('comment'));
});

Route::get('/womanfilter', 'CategorieController@WomanCategories');
Route::get('/subcategoria', 'CategorieController@SubCategorie');
Route::get('/subcategoryfilter', 'CategorieController@SubFiltering');



