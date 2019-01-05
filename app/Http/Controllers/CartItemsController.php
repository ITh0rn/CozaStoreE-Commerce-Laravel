<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartItemsController extends Controller
{

    public function getUserCart(Request $request){
        if ($request){
            if (Auth::check()){
                return Response()->json(['error' => 'Chiamata riuscita']);
            }
            else return Response()->json(['error' => 'errore']);
        }
    }
}
