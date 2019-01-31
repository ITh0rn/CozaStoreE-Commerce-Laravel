<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Blog as Blog;
use DB;

class BlogController extends Controller
{
   public function show()
   {
       //$blog = DB::table('blogs')->orderBy('id', 'desc')->get();
       //$user = DB::table('users')->get();
       //$blogs = null;
       $rowUtente = DB::table('users')
           ->join('blogs', 'blogs.IDusers', '=', 'users.id')
           ->get();
       return view('Contents/articoli', compact('rowUtente', 'rowUtente'));
   }

    public function DettaglioArticoli(Request $request){
        $blog = DB::table('blogs')->where('id', $request->get('id_articolo'))->get();
        $user = DB::table('users')->get();
        $blogs = null;
        $rowsUtente = null;
        $rowUtente = DB::table('users')->where('id', $request->get('id_user'))->select('name')->get();
        return view('Contents/dettaglioarticoli', compact('blog','blogs', 'user', 'rowUtente'));


    }
}