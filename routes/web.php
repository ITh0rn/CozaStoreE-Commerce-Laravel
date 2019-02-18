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

use Illuminate\Http\Request;

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
Route::post('/addressadding', 'UserController@addressAdd')->name('addressadd');
Route::get('/removeaddress', 'UserController@removeadd')->name('removeadd');
Route::post('/aggiungicarta', 'UserController@aggiungicarta')->name('aggiungicarta');
Route::post('/addAddress', 'UserController@addAddress')->name('addAddress');
Route::post('/addReviewBlog', 'BlogController@addReviewBlog')->name('addReviewBlog');
Route::get('/removepayment', 'UserController@removepayment')->name('removepayment');
Route::get('/shop-uomo', 'ProductController@shopuomo')->name('shopuomo');
Route::get('/shop-donna', 'ProductController@shopdonna')->name('shopdonna');
Route::get('/shop-accessori', 'ProductController@shopaccessori')->name('shopaccessori');
Route::get('/shop-nuovi-arrivi', 'ProductController@nuoviarriviuomo')->name('nuoviarriviuomo');
Route::get('/shop-giacche-cappotti', 'ProductController@giaccheecappottiuomo')->name('giaccheecappottiuomo');
Route::get('/shop-nuova-stagione', 'ProductController@nuovastagionedonna')->name('nuovastagionedonna');
Route::get('/dettagliordine', 'UserController@dettagliOrdine')->name('dettagliordine');
Route::post('/pagamento', 'ProductController@pagamento')->name('pagamento');
Route::get('/slider', 'ContainController@slider')->name('slider');

//Pagine che richiedono obbligatoriamente l'accesso come profilo, procedi pagamento ecc
Route::group(['middleware' => 'auth'], function () {
    Route::get('/Profilo', 'ContainController@getprofile')->name('profilo');
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/ajax', function (Request $request){
    $comment = DB::table('product_comments')
        ->select('product_comments.*', 'users.name')
        ->join('users', 'users.id', '=', 'product_comments.id_utente')
        ->where('product_comments.id_prodotto', $request->get('idprod'))
        ->Paginate(3);
     return view('Contents.comments', compact('comment'));
});

Route::get('/ajaxblog', function (Request $request){
    $comment = DB::table('comments')
        ->select('comments.*', 'users.name')
        ->join('users', 'users.id', '=', 'comments.IDusers')
        ->where('IDblogs', $request->get('idblog'))
        ->Paginate(3);
    return view('Contents.commenti', compact('comment'));
});

Route::get('/womanfilter', 'CategorieController@WomanCategories');
Route::get('/subcategoria', 'CategorieController@SubCategorie');
Route::get('/subcategoryfilter', 'CategorieController@SubFiltering');



