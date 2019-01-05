<?php

namespace App\Http\Controllers;

use http\Env\Response;
use Illuminate\Http\Request;
use App\Product as Product;
use DB;
use Psy\Util\Json;
use Session;
use App\Cart;

class ProductController extends Controller
{
    public function show(){

        $product = Product::all();
        $prodotti = null;
        return view('Contents/cozahome')->with('product', $product)->with('products', $prodotti);

    }

    public function filter(Request $request){

        if($request->ajax()) {
            $product1 = DB::table('products')->where('gender', $request->get('type'))->get();
            if ($product1){
                return Response()->json(view('Contents/productlist')->with('product', $product1)->render());
            }
            else return response()->json(['errore' => 'errore']);
        }

    }

    public function search(Request $request){
        if($request->ajax()){
            $terms = $request->get('name');
            $productlive = DB::table('products')->where('nome', 'like' , '%' . $terms .'%')->get();
            if ($productlive){
                return view('Contents/productlist')->with('product', $productlive);
            }
            else return response()->json(['errore' => 'errore']);
        }

    }

    public function addtocart(Request $request){

        $prodotto = DB::table('products')->where('id', $request->get('id'))->get();
        $product = $prodotto[0];
        $oldcart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldcart);
        $cart->add($product, $product->id);
        $request->session()->put('cart', $cart);

    }

    public function showcart(Request $request){

        if($request->ajax()) {
            $products = Product::all();
            return view('Contents/cartlist')->with('products', $products);
        }
    }

}
