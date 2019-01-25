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
       $blog = DB::table('blogs')->orderBy('id', 'desc')->get();
       $user = DB::table('users')->get();
       $blogs = null;
       $rowsUtente = null;
       $rowUtente = DB::table('blogs')
           ->rightjoin('users', 'blogs.IDusers', '=', 'users.id')
           ->select('users.name')
           ->get();
       return view('Contents/blog', compact('blog','blogs', 'user', 'rowUtente'));
   }
}
