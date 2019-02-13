<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Nexmo\Response;
use DB;

class UserController extends Controller
{
    public function ordini(Request $request){
        if($request->ajax()){
            return Response()->json(view('Contents/tableordini')->render());
        }
    }

    public function indirizzi(Request $request){
        if($request->ajax()){
            return Response()->json(view('Contents/indirizziUser')->render());
        }
    }

    public function  userinfo(Request $request){
        if($request->ajax()){
            $user = DB::table('users')->where('name', Auth::user()->name)->get();
            return Response()->json(view('Contents/userinfo')->with('user', $user)->render());
        }
    }

    public function opzionidipagamento(Request $request){
        if($request->ajax()){
            return Response()->json(view('Contents/opzionidipagamento')->render());
        }
    }
}
