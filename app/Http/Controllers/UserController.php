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
            $ordini = DB::table('orders')
                ->join('addresses', 'orders.IDaddresses', '=', 'addresses.id')
                ->where('orders.IDusers', '=', Auth::user()->id)
                ->get();
            return Response()->json(view('Contents/tableordini')->with('ordini', $ordini)->render());
        }
    }

    public function indirizzi(Request $request){
        if($request->ajax()){
            $indirizzi = DB::table('addresses')->where('addresses.IDusers', '=', Auth::user()->id)->get();
            return Response()->json(view('Contents/indirizziUser')->with('indirizzi', $indirizzi)->render());
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

    public function addAddress(Request $request){
        DB::table('addresses')->insert(
            [   'citta' => $request->get('city'),
                'provincia' => $request->get('province'),
                'cap' => $request->get('cap'),
                'via' => $request->get('address'),
                'civico' => $request->get('civic'),
                $request->get('voto'), 'IDusers' => Auth::user()->id]
        );
    }
}
