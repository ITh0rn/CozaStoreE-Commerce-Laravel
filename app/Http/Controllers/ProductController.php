<?php

namespace App\Http\Controllers;

use App\Product;
use http\Env\Response;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Expr\Array_;
use Session;
use Validator;

class ProductController extends Controller{

    public function index(){
        return $product = Product::all();
    }

    //Utente è schedato in base alle sue interazioni con i prodotti, se l'utente è registrato ed è interagito con il sistema, allora vengono
    //suggeriti nella home prodotti di categoria simile

    public function show(){

        if(Auth::check()){
            $categorie = DB::table('products')
                ->select('categories.nome_categoria', DB::raw('count(*) as total'), 'categories.id')
                ->join('interazionis', 'interazionis.id_prodotto', '=', 'products.id')
                ->join('sub_categories', 'sub_categories.id', '=', 'products.id_subcategoria')
                ->join('categories', 'categories.id', '=', 'sub_categories.id_category')
                ->groupBy('categories.nome_categoria')
                ->where('interazionis.id_utente', '=', Auth::user()->id)
                ->orderBy('total', 'dec')
                ->get();

            if(!$categorie->isEmpty()) {

            $query = DB::table('products')
                ->select('products.*')
                ->join('sub_categories', 'sub_categories.id', '=', 'products.id_subcategoria')
                ->join('categories', 'categories.id', '=', 'sub_categories.id_category')
                ->where('categories.nome_categoria', '=', array_first($categorie)->nome_categoria)
                ->limit(8)
                ->get();

            $count = 0;

            foreach ($categorie as $categoria){
                $count++;
            }

                for($i = 1; $i < $count; $i++) {
                    $categorie1 = DB::table('products')
                        ->select('products.*')
                        ->join('sub_categories', 'sub_categories.id', '=', 'products.id_subcategoria')
                        ->join('categories', 'categories.id', '=', 'sub_categories.id_category')
                        ->where('categories.nome_categoria', '=', $categorie[$i]->nome_categoria)
                        ->limit(4)
                        ->get();
                    $query = $query->merge($categorie1);
                }

            } else {
                $query2 = DB::table('products')
                    ->select('products.*')
                    ->orderBy('created_at','dec')
                    ->take(8)
                    ->get();
                return view('layout/cozahome')->with('product', $query2);
            }
            $query = $query->take(8);
            return view('layout/cozahome')->with('product', $query);
        }
        else{

            $query2 = DB::table('products')
                ->select('products.*')
                ->orderBy('created_at','dec')
                ->take(8)
                ->get();
            return view('layout/cozahome')->with('product', $query2);
        }

    }

    public function Shop(){

        $product = DB::table('products')->get();
        return view('Contents/shop')->with('product', $product);
    }

    public function shopuomo(){

        $product = DB::table('products')
            ->select('products.*')
            ->where('gender', '=', 'uomo')
            ->get();
        return view('Contents/shop')->with('product', $product);
    }

    public function nuoviarriviuomo(){

        $product = DB::table('products')
            ->select('products.*')
            ->where('gender', '=', 'uomo')
            ->orderBy('created_at', 'dec')
            ->get();
        return view('Contents/shop')->with('product', $product);
    }


    public function giaccheecappottiuomo(){

        $product = DB::table('products')
            ->select('products.*')
            ->join('sub_categories', 'sub_categories.id', '=', 'products.id_subcategoria')
            ->join('categories', 'categories.id', '=', 'sub_categories.id_category')
            ->where('categories.nome_categoria', '=','giubbino')
            ->where('products.gender', '=', 'uomo')
            ->get();
        $prodotti = null;
        return view('Contents/shop')->with('product', $product);
    }
    public function shopdonna(){

        $product = DB::table('products')
            ->where('gender', '=', 'donna')
            ->get();
        return view('Contents/shop')->with('product', $product);
    }

    public function nuovastagionedonna(){

        $product = DB::table('products')
            ->where('gender', '=', 'donna')
            ->orderBy('created_at','dec')
            ->get();
        return view('Contents/shop')->with('product', $product);
    }

    public function shopaccessori(){

        $product = DB::table('products')
            ->select('products.*')
            ->join('sub_categories', 'sub_categories.id', '=', 'id_subcategoria')
            ->join('categories', 'categories.id', '=', 'id_category')
            ->where('categories.nome_categoria', 'accessori')
            ->get();
        return view('Contents/shop')->with('product', $product);
    }

    public function filter(Request $request){

        if($request->ajax()) {
            $value = $request->get('type');
            if($value == "all"){
                 $product1 = Product::all();
            }
            else {
                $product1 = DB::table('products')->where('gender', $request->get('type'))->get();

            }
            return Response()->json(view('Contents/productlist')->with('product', $product1)->render());
            }
        }


    public function search(Request $request){
        if($request->ajax()){
            $terms = $request->get('name');
            $productlive = DB::table('products')->where('nome', 'like' , '%' . $terms .'%')->get();
            if ($productlive){
                return Response()->json(view('Contents/productlist')->with('product', $productlive)->render());
            }
            else return response()->json(['errore' => 'errore']);
        }

    }

    public function addToCart(Request $request){

        $validator = Validator::make($request->all(), [
            'taglia' => 'required|string|not_in:Seleziona Taglia',
            'colore' => 'required|string|not_in:Seleziona Colore',
            'quantità' => 'required|integer|not_in:0'
        ]);


        if ($validator->fails()) {
            return response()->json(['error'=>$validator->errors()->all()]);
        }

        if(Auth::check()){
            DB::table('interazionis')->insert(
                ['id_prodotto' => $request->get('id'), 'id_utente' => Auth::user()->id]
            );
        }

        $cart = Session::get('cart');
        if($request->ajax()) {
            if ($cart) {
                if ($this->ExistMultidimensional($cart, $request->get('id'))) {
                    $cart[$request->get('id')]['qty'] += $request->get('quantità');
                    Session::put('cart', $cart);
                    Session::flash('success', 'Elemento aggiornato correttamente');

                } else {

                    $productcart = DB::table('products')->where('id', $request->get('id'))->get();
                    $cart[$productcart[0]->id] = array(
                        "id" => $productcart[0]->id,
                        "nome_prodotto" => $productcart[0]->nome,
                        "immagine_path" => $productcart[0]->img_dir,
                        "prezzo" => $productcart[0]->price,
                        "qty" => $request->get('quantità'),
                        "img" => $request->get('img')
                    );

                    Session::put('cart', $cart);
                    Session::flash('success', 'Elemento inserito correttamente');

                }
            } else {
                $productcart1 = DB::table('products')->where('id', $request->get('id'))->get();
                $cart1 = array();
                $cart1[$productcart1[0]->id] = array(
                    "id" => $productcart1[0]->id,
                    "nome_prodotto" => $productcart1[0]->nome,
                    "immagine_path" => $productcart1[0]->img_dir,
                    "prezzo" => $productcart1[0]->price,
                    "qty" => $request->get('quantità'),
                    "img" => $request->get('img')
                );

                Session::put('cart', $cart1);
                Session::flash('success', 'Elemento inserito correttamente');

            }
        }

    }

    public function showcart(Request $request){

        if($request->ajax()) {
            $products = Session::get('cart');
            $price = 0;
            foreach ($products as $prodotti){
                $price += $prodotti["prezzo"] * $prodotti['qty'];
                Session::put('price', $price);
            }
            return view('Contents/cartlist')->with('products', $products)->with('prezzo', $price);
        }
    }

    public function ExistMultidimensional($cart, $id){
        foreach($cart as $item){
            if ($item['id'] == $id){
                return true;
            }
        }
        return false;
    }

    public function getnumberCart(Request $request){
        if($request->ajax()) {
            $cart = Session::get('cart');
            $count = 0;
            if ($cart) {
                foreach ($cart as $prodotto) {
                    $count += 1;
                }
            }
            return Response()->json(['count' => $count]);
        }
    }

    public function eliminaprodcart(Request $request){
        if ($request->ajax()){
            $cart = Session::get('cart');
            unset($cart[$request->get('id')]);
            $price = 0;
            foreach ($cart as $prodotto){
                $price += $prodotto['qty'] * $prodotto['prezzo'];
            }
            Session::put('price', $price);
            Session::put('cart', $cart);
            return Response()->json(["msg" => ["Eliminato"]]);
        }
    }

    public function modificanumitems(Request $request){
        if($request->ajax()){
            $cart = Session::get('cart');
            $cart[$request->get('id')]['qty'] = $request->get('num');
            Session::put('cart', $cart);
            $prezzo = 0;
            foreach ($cart = Session::get('cart') as $prodotto){
                $prezzo += $prodotto['qty'] * $prodotto['prezzo'];
            }
            Session::put('price', $prezzo);
            Response()->json(["data" => "funziona"]);
        }
    }

    public function addreview(Request $request){

        $messsages = array(
            'comment.required'=>'Campo commento vuoto, inserisci un commento',
            'comment.max'=>'Puoi inserire al massimo 100 caratteri',
            'comment.min'=>'Inserisci almeno 10 caratteri',
            'voto.min'=>'Inserisci almeno una stella di voto',
        );

        $rules = array(
            'comment' => 'required|max: 100|min: 10',
            'voto' => 'required|integer|min:1',
        );

        $validator = Validator::make($request->all(), $rules, $messsages);

        if(!Auth::check())
        $validator->after(function($validator) {
            $validator->errors()->add('Auth', 'Devi essere loggato per commentare');
        });

        if ($validator->fails()) {
            return response()->json(['error'=>$validator->errors()->all()]);
        }

        DB::table('product_comments')->insert(
            ['id_prodotto' => $request->get('idprod'), 'commento' => $request->get('comment'), 'voto' =>
            $request->get('voto'), 'id_utente' => Auth::user()->id]
        );

        //Iterazione, commentando il prodotto, vuol dire che si ha avuto interesse
        if(Auth::check()){
            DB::table('interazionis')->insert(
                ['id_prodotto' => $request->get('idprod'), 'id_utente' => Auth::user()->id]
            );
        }

    }

    public function pagamento(Request $request){

        $messsages = array(
            'indirizzo.not_in'=>'Inserisci un indirizzo di spedizione',
            'pagamento.not_in'=>'Inserisci un metodo di pagamento',
        );

        $rules = array(
            'indirizzo' => 'required|string|not_in:Seleziona Indirizzo',
            'pagamento' => 'required|string|not_in:Seleziona Pagamento',
        );

        $validator = Validator::make($request->all(), $rules, $messsages);

        if(!(Auth::check())) {
            $validator->after(function ($validator) {
                $validator->errors()->add('Auth', 'Effettua l\'accesso al sistema');
            });
        }

        if(!(Session::get('cart'))){
            $validator->after(function ($validator) {
                $validator->errors()->add('Prod', 'Carrello vuoto, non puoi procedere con l\'ordine');
            });
        }

        if ($validator->fails()) {
            return response()->json(['error'=>$validator->errors()->all()]);
        }


        $cart = Session::get('cart');
        $totale = 0;
        if($cart) {
            foreach ($cart as $prodotto) {
                $totale += $prodotto["qty"] * $prodotto["prezzo"];
            }
            $date = date('Y-m-d H:i:s');

            //Creo ordine nel DB
            DB::table('orders')->insert(
                ['totale' => $totale, 'created_at' => $date, 'IDusers' =>
                    Auth::user()->id, 'address' => $request->get('indirizzo')]);

            $last_order = DB::table('orders')
                ->select('orders.ID')
                ->where('IDUsers', Auth::user()->id)
                ->orderBy('orders.created_at', 'dec')
                ->limit(1)
                ->get();

            $id = $last_order[0]->ID;

            foreach ($cart as $prodotto) {
                DB::table('boughtproducts')->insert(
                    ['img_dir' => $prodotto["img"], 'nome' => $prodotto["nome_prodotto"], 'price' =>
                        $prodotto["prezzo"] * $prodotto["qty"], 'IDorders' => $id, 'quantita' => $prodotto["qty"]]);
            }

            session()->forget('cart');
        }
    }

}
