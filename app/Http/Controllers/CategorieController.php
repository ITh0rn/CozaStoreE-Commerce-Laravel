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
            $categorie = DB::table('products')
                ->select('categories.nome_categoria')
                ->join('sub_categories', 'sub_categories.id', '=', 'products.id_subcategoria')
                ->join('categories', 'categories.id', '=', 'sub_categories.id_category')
                ->where('products.gender', $request->get('gender'))
                ->groupBy('categories.nome_categoria')
                ->get();
            return Response()->json(view('Contents/filtering')->with('categorie', $categorie)->render());
        }
    }

    public function SubCategorie(Request $request)
    {
        if ($request->ajax()) {
            $subcategorie = DB::table('products')
                ->select('sub_categories.nome_sub')
                ->join('sub_categories', 'sub_categories.id', '=', 'products.id_subcategoria')
                ->join('categories', 'categories.id', '=', 'sub_categories.id_category')
                ->where('products.gender', $request->get('gender'))
                ->where('nome_categoria', $request->get('nome'))
                ->groupBy('sub_categories.nome_sub')
                ->get();
            return Response()->json(["data" => $subcategorie]);
        }
    }

    public function SubFiltering(Request $request)
    {
        if ($request->ajax()) {
            $filtered = DB::table('sub_categories')
                ->join('products', 'products.id_subcategoria', '=', 'sub_categories.id')
                ->where('nome_sub', $request->get('subcat'))
                ->where('gender', $request->get('gender'))
                ->get();
            return Response()->json(view('Contents/productlist')->with('product', $filtered)->render());
        }
    }

}
