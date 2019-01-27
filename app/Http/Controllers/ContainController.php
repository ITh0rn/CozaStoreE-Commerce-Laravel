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
        return view('Contents/carrello')->with('prodotti', $cart)->with('prezzo', $price);
    }

    public function DettaglioProdotto(Request $request){

            $images = DB::table('specifica_prodottos')->where('id_prodotto', $request->get('id_prodotto'))->get();
            $prodotto = DB::table('products')->where('id', $request->get('id_prodotto'))->get();
            return view('Contents.dettaglioprodotto')->with('dettaglio', $images)->with('prodotto', $prodotto);

    }

    public function ChiSiamo(){
        return view('Contents/chisiamo');
    }

    public function getprofile(){

        if (!(Auth::user()->hasRole('admin'))){
            return view('Contents/Profile');
        }
        else return redirect('/admin');
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

}
