<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContainController extends Controller
{
    public function home(){
        $data = [];
        return view('Contents/home', $data);
    }
}
