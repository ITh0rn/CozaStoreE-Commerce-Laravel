<?php

namespace App\Http\Controllers;

use http\Env\Response;
use Illuminate\Http\Request;
use App\Product as Product;
use DB;
use Session;

class ProductController extends Controller{

    public function index(){
        return $product = Product::all();
    }


    public function show(){

        $product = DB::table('products')->orderBy('id', 'desc')->take(12)->get();
        $prodotti = null;
        return view('layout/cozahome')->with('product', $product)->with('products', $prodotti);

    }

    /*
    public static function showall(){

        $product = Product::all();
        $prodotti = null;
        return view('Contents/shop')->with('product', $product)->with('products', $prodotti);

    }
    */
    public function Shop(){

        $product = DB::table('products')->get();
        $prodotti = null;
        return view('Contents/shop')->with('product', $product)->with('products', $prodotti);
    }

    public function filter(Request $request){

        if($request->ajax()) {
            $value = $request->get('type');
            if($value == "all"){
                 $product1 = Product::all();
            }
            else {
                $product1 = DB::table('products')->where('gender', $request->get('type'))->get();

            }
            return Response()->json(view('Contents/productlist')->with('product', $product1)->render());
            }
        }


    public function search(Request $request){
        if($request->ajax()){
            $terms = $request->get('name');
            $productlive = DB::table('products')->where('nome', 'like' , '%' . $terms .'%')->get();
            if ($productlive){
                return Response()->json(view('Contents/productlist')->with('product', $productlive)->render());
            }
            else return response()->json(['errore' => 'errore']);
        }

    }

    public function addToCart(Request $request){

        $cart = Session::get('cart');
        if($request->ajax()) {
            if ($cart) {
                if ($this->ExistMultidimensional($cart, $request->get('id'))) {
                    $cart[$request->get('id')]['qty'] += $request->get('num');
                    Session::put('cart', $cart);
                    Session::flash('success', 'Elemento aggiornato correttamente');

                } else {

                    $productcart = DB::table('products')->where('id', $request->get('id'))->get();
                    $cart[$productcart[0]->id] = array(
                        "id" => $productcart[0]->id,
                        "nome_prodotto" => $productcart[0]->nome,
                        "immagine_path" => $productcart[0]->img_dir,
                        "prezzo" => $productcart[0]->price,
                        "qty" => $request->get('num'),
                    );

                    Session::put('cart', $cart);
                    Session::flash('success', 'Elemento inserito correttamente');

                }
            } else {
                $productcart1 = DB::table('products')->where('id', $request->get('id'))->get();
                $cart1 = array();
                $cart1[$productcart1[0]->id] = array(
                    "id" => $productcart1[0]->id,
                    "nome_prodotto" => $productcart1[0]->nome,
                    "immagine_path" => $productcart1[0]->img_dir,
                    "prezzo" => $productcart1[0]->price,
                    "qty" => $request->get('num'),
                );

                Session::put('cart', $cart1);
                Session::flash('success', 'Elemento inserito correttamente');

            }
        }
    }

    public function showcart(Request $request){

        if($request->ajax()) {
            $products = Session::get('cart');
            $price = 0;
            foreach ($products as $prodotti){
                $price += $prodotti["prezzo"] * $prodotti['qty'];
                Session::put('price', $price);
            }
            return view('Contents/cartlist')->with('products', $products)->with('prezzo', $price);
        }
    }

    public function ExistMultidimensional($cart, $id){
        foreach($cart as $item){
            if ($item['id'] == $id){
                return true;
            }
        }
        return false;
    }

    public function getnumberCart(Request $request){
        $cart = Session::get('cart');
        $count = 0;
        if($cart){
            foreach($cart as $prodotto){
                $count += 1;
            }
        }
        return Response()->json(['count' => $count]);
    }

    public function eliminaprodcart(Request $request){
        if ($request->ajax()){
            $cart = Session::get('cart');
            unset($cart[$request->get('id')]);
            $price = 0;
            foreach ($cart as $prodotto){
                $price += $prodotto['qty'] * $prodotto['prezzo'];
            }
            Session::put('price', $price);
            Session::put('cart', $cart);
            return Response()->json(["msg" => ["Eliminato"]]);
        }
    }

    public function modificanumitems(Request $request){
        if($request->ajax()){
            $cart = Session::get('cart');
            $cart[$request->get('id')]['qty'] = $request->get('num');
            Session::put('cart', $cart);
            $prezzo = 0;
            foreach ($cart = Session::get('cart') as $prodotto){
                $prezzo += $prodotto['qty'] * $prodotto['prezzo'];
            }
            Session::put('price', $prezzo);
            Response()->json(["data" => "funziona"]);
        }
    }


}
