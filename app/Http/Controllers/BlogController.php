<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Blog as Blog;
use DB;

class BlogController extends Controller
{
   public function show()
   {
       $rowUtente = DB::table('users')
           ->join('blogs', 'blogs.IDusers', '=', 'users.id')
           ->orderBy('blogs.id', 'DESC')
           ->get();
       $data = DB::select('select count(*) as num, MONTHNAME(data_inserimento) as mese, YEAR(data_inserimento) as anno from blogs group by mese, anno');
       return view('Contents/articoli', compact('rowUtente', 'rowUtente', 'data'));
   }

    public function DettaglioArticoli(Request $request){
        $blog = DB::table('blogs')->where('id', $request->get('id_articolo'))->get();
        $user = DB::table('users')->get();
        $blogs = null;
        $rowsUtente = null;
        $rowUtente = DB::table('users')->where('id', $request->get('id_user'))->select('name')->get();
        $comment = DB::table('comments')->where('idblogs', $request->get('id_articolo'))->get();
        $comments = null;
        return view('Contents/dettaglioarticoli', compact('blog','blogs', 'user', 'rowUtente', 'comment', 'comments'));


    }
    /*
    public function DataArticolo(Request $request){
        $blog = DB::table('blogs')->where('id', $request->get('id_articolo'))->get();
        $user = DB::table('users')->get();
        $blogs = null;
        $rowsUtente = null;
        $rowUtente = DB::table('users')->where('id', $request->get('id_user'))->select('name')->get();
        $comment = DB::table('comments')->where('idblogs', $request->get('id_articolo'))->get();
        $comments = null;
        return view('Contents/dettaglioarticoli', compact('blog','blogs', 'user', 'rowUtente', 'comment', 'comments'));


    }
    */
}
