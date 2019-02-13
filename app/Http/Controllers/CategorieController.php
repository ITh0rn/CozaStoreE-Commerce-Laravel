<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use http\Env\Response;
use App\Product as Product;
use DB;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Expr\Array_;
use Session;
use Validator;
use App\categorie;

class CategorieController extends Controller
{
    public function WomanCategories(Request $request)
    {
        if ($request->ajax()) {
            $categorie = DB::table('categories')->get();
            return Response()->json(view('Contents/filtering')->with('categorie', $categorie)->render());
        }
    }

    public function SubCategorie(Request $request)
    {
        if ($request->ajax()) {
            $subcategorie = DB::table('categories')->where('nome_categoria', $request->get('nome'))
            ->join('sub_categories', 'sub_categories.id_category', '=', 'categories.id')
            ->get();
            return Response()->json(["data" => $subcategorie]);
        }
    }
}
