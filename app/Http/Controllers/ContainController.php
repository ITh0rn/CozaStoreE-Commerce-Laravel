<?php

namespace App\Http\Controllers;

use App\Specifica_prodotto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Nexmo\Response;
use Session;
use DB;

class ContainController extends Controller
{
    public function home(){
        $data = [];
        return view('Contents.productlist', $data);
    }

    public function Carrello(){
        $cart = Session::get('cart');
        $price = Session::get('price');
        $indirizzi = null;
        $payments = null;
        if(Auth::check()) {
            $indirizzi = DB::table('addresses')->where('IDusers', Auth::user()->id)->get();
            $payments = DB::table('payments')->where('IDusers', Auth::user()->id)->get();
        }
        return view('Contents/carrello')
            ->with('prodotti', $cart)
            ->with('prezzo', $price)
            ->with('indirizzi', $indirizzi)
            ->with('payments', $payments);
    }

    public function DettaglioProdotto(Request $request){

            $images = DB::table('specifica_prodottos')->where('id_prodotto', $request->get('id_prodotto'))->get();

            $prodotto = DB::table('products')
            ->select('products.*', 'categories.nome_categoria', 'sub_categories.nome_sub')
            ->where('products.id', $request->get('id_prodotto'))
            ->join('sub_categories', 'sub_categories.id', '=', 'products.id_subcategoria')
            ->join('categories', 'categories.id', '=', 'sub_categories.id_category')
            ->get();

            $taglie = DB::table('taglie_prodottis')->where('product_id', $request->get('id_prodotto'))
                ->join('taglies', 'taglies.id', '=', 'taglie_prodottis.taglie_id')
                ->select('taglia')
                ->get();

            $productcart = DB::table('products')->where('id', $request->get('id_prodotto'))->select('id')->get();
            $comment = DB::table('product_comments')->where('id_prodotto', $request->get('id_prodotto'))
                ->join('users', 'users.id', '=', 'product_comments.id_utente')
                ->Paginate(3);

            $simili = DB::table('products')
                ->where('products.id', '!=', $request->get('id_prodotto'))
                ->where('products.id_subcategoria', '=', $request->get('id_subcat'))
                ->where('products.gender','LIKE', $request->get('gender'))
                ->orderBy('created_at','dec')
                ->limit(4)
                ->get();

        if(Auth::check()){
            DB::table('interazionis')->insert(
                ['id_prodotto' => $request->get('id_prodotto'), 'id_utente' => Auth::user()->id]
            );
        }
            return view('Contents.dettaglioprodotto', compact('images', 'prodotto', 'productcart', 'taglie', 'comment', 'simili'));

    }

    public function ChiSiamo(){
        return view('Contents/chisiamo');
    }

    public function getprofile(){

        if (Auth::user()->hasRole('admin')){
            return redirect('/admin');
        }

        if (Auth::user()->hasRole('Gestore Prodotti')){
            return menu('gestore');
        }

        if(Auth::user()->hasRole('Gestore Sito')){
            return menu('sito');
        }

        return view('Contents/Profile');
    }

    public function Contatti(){
        return view('Contents/contatti');
    }

    public function ResoGratuito(){
        return view('Contents/resogratuito');
    }

    public function Spedizione(){
        return view('Contents/spedizione');
    }

    public function FAQs(){
        return view('Contents/FAQs');
    }

    /*
    public function slider(){
        $slider = DB::table('sliders')->select('sliders.*')->get();
        return view('Contents/slider')->with('slider', $slider);
    }
    */
}
