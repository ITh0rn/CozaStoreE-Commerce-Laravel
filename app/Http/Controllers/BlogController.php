<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Blog as Blog;
use DB;

class BlogController extends Controller
{
//$blog = DB::table('products')->orderBy('id', 'desc')->take(12)->get();
//$blogs = null;
   public function show()
   {
       $blog = DB::table('blogs')->orderBy('id', 'desc')->get();
       $blogs = null;
       return view('Contents/blog')->with('blog', $blog)->with('blogs', $blogs)->with('user', $user);
   }
}
