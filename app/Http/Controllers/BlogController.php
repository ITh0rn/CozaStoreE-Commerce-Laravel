<?php
namespace App\Http\Controllers;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Blog as Blog;
use DB;
use Validator;

class BlogController extends Controller
{
    public function show()
    {
        $rowUtente = DB::select('select blogs.data_inserimento, blogs.nome, blogs.description, users.name, users.id, blogs.IDusers, blogs.id as ID, blogs.img_dir, 
                                count(comments.id) as num 
                                from blogs 
                                left join comments on comments.IDblogs=blogs.id 
                                left join users on users.id=blogs.IDusers 
                                group by blogs.id
                                order by blogs.id desc');
        $data = DB::select('select count(*) as num, MONTHNAME(data_inserimento) as mese, YEAR(data_inserimento) 
                  as anno from blogs group by mese, anno');
        return view('Contents/articoli', compact('rowUtente', 'data'));
    }
    public function DettaglioArticoli(Request $request){
        $blog = DB::table('blogs')->where('id', $request->get('id_articolo'))->get();
        $user = DB::table('users')->get();
        $blogs = null;
        $rowsUtente = null;
        $rowUtente = DB::table('users')->where('id', $request->get('id_user'))->select('name')->get();
        $comment = DB::table('comments')->where('idblogs', $request->get('id_articolo'))->get();
        //$numComment = DB::select('select count(*) as ')
        $data = DB::select('select count(*) as num, MONTHNAME(data_inserimento) as mese, YEAR(data_inserimento) 
                  as anno from blogs group by mese, anno');
        $comments = null;
        return view('Contents/dettaglioarticoli', compact('blog','blogs', 'user', 'rowUtente', 'comment', 'comments', 'data'));
    }
    public function DataArticoli(Request $request){
        $mese = $request->get('mese');
        $anno = $request->get('anno');
        $timestamp = $anno.'-'.date('m', strtotime($mese)).'%';
        //$blogData = DB::select('select * from blogs where MONTHNAME(data_inserimento)='.'$mese'.', YEAR(data_inserimento)='.'$anno');
        $user = DB::table('users')->get();

        $rowUtente = DB::table('blogs')
            ->select('blogs.data_inserimento', 'blogs.nome', 'blogs.description', 'users.name', 'users.id', 'blogs.IDusers', 'blogs.id as ID', 'blogs.img_dir',
                DB::raw('count(comments.id) as num'))
            ->leftjoin('comments', 'comments.IDblogs', '=', 'blogs.id')
            ->join('users', 'blogs.IDusers', '=', 'users.id')
            ->groupBy('blogs.id')
            ->where(function ($query) use ($timestamp) {
                $query->where('data_inserimento', 'like', $timestamp);
            })->get();
        $data = DB::select('select count(*) as num, MONTHNAME(data_inserimento) as mese, YEAR(data_inserimento) as anno from blogs group by mese, anno');
        return view('Contents/articoli', compact('rowUtente', 'data'));
    }

    public function addReviewBlog(Request $request){

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

        DB::table('comments')->insert(
            ['IDblogs' => $request->get('idarticolo'), 'commento' => $request->get('comment'), 'stelle' =>
                $request->get('voto'), 'IDusers' => Auth::user()->id, 'nome' => Auth::user()->name, 'email' => Auth::user()->email]
        );
    }
}