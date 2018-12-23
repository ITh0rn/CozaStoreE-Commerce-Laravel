<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product as Product;

class ProductController extends Controller
{
    public function show(){

        $product = Product::all();
        return view('Contents.home')->with('product', $product);

    }

    public function getFemaleProduct(){
        $product = DB::table('product')->where('gender', 'female')->get();
        return $product;
    }

}
