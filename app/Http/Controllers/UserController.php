<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
