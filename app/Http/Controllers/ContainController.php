<?php

namespace App\Http\Controllers;

use App\Specifica_prodotto;
use Illuminate\Http\Request;
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
        return view('Contents/carrello')->with('prodotti', $cart)->with('prezzo', $price);
    }

    public function DettaglioProdotto(Request $request){

            $images = DB::table('specifica_prodottos')->where('id_prodotto', $request->get('idprodotto'))->get();
            $prodotto = DB::table('products')->where('id', $request->get('idprodotto'))->get();
            return view('Contents.dettaglioprodotto')->with('dettaglio', $images)->with('prodotto', $prodotto);

    }
}
