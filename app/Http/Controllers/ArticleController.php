<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;

use App\Http\Controllers\Controller;
use App\Article;
use Auth;
use DB;

class ArticleController extends Controller
{
    //obliger l'authentification pour rédiger au site
    public function __construct(){
        $this->middleware('auth');
    }

    //Lister les articles
    public function index(){

        if(Auth::user()->is_admin){
            $listarticle = Article::orderBy('created_at', 'DESC')->get();
        }else{
            $listarticle = Article::where('id_user', Auth::user()->id)
            ->where('approve', '1')
            ->orderBy('created_at', 'DESC')->get();
        }
        
        return view('article.index', ['articles' => $listarticle]);
    }

    //Affiche le formulaire de creation de l'articlel
    public function create(){
        return view('article.create');
    }

    //Enregistrer une article
    public function store(Request $request){
         $articles = new Article();
         $data = request()->validate([
             'title' => 'required|min:4',
             'category' => 'required|min:4',
             'content' => 'required|min:10',
         ]);

         $articles->title = request('title');
         $articles->category = request('category');
         $articles->content = request('content');
         $articles->id_user = Auth::user()->id;

         if($request->hasFile('image')){
             $articles->image = $request->image->store('image');
         }
         

         $articles->save();
         session()->flash('enregistrer', 'L\'article à été bien enregistrer !!!');
         return redirect('articles');
    }

    //Permet de récupérer une article puis de le mettre dans le formulaire
    public function edit($id){
        $articles = Article::findOrfail($id);
        $this->authorize('update', $articles);

        return view('article.edit', ['articles'=> $articles]);
    }

    //Permet de modifier une article
    public function update(Request $request, $id){
        $articles = Article::findOrfail($id);
        $data = request()->validate([
            'title' => 'required|min:4',
            'category' => 'required|min:4',
            'content' => 'required|min:10',
        ]);
        $articles->title = $request->input('title');
        $articles->category = $request->input('category');
        $articles->content = $request->input('content');

        $articles->save();
        session()->flash('editer', 'L\'article à été bien Modifier !!!');
        return redirect('articles');
        
    }

    //Permet de supprimer une article
    public function destroy(Request $request, $id){
        $articles = Article::find($id);
        $articles->delete();

        session()->flash('supprimer', 'L\'article à été bien supprimer !!!');
        return redirect('articles');
        
        
    }

    public function show($id){
        $show = Article::where('id_user', Auth::user()->id)
        ->where('articles.id', $id)
        ->first();

        return view('article.show', ['articles' => $show]);
    }

    public function events(){
        
        return view('article.events');

    }


//Pour approuver les articles par l'admin
    public function approval(Request $request){

        $articles = Article::find($request->articleId);
        $approval = $request->approve;
        if($approval == 'on'){
            $approval=1;
        }else{
            $approval=0;
        }
       
        $articles->approve=$approval;
 
        $articles->save();
        session()->flash('approuver', 'L\'article à été bien Approuver !!!');

        return back();
    }


    //Pour la recherche
    public function search(Request $request){
  
        $search=$request->get('search');
        $searcharticle = Article::orderBy('created_at', 'desc')
        ->where('deleted_at', null)
        ->where('title', 'like', '%'.$search. '%')->get();
      
        return view('article.search',['articles'=>$searcharticle]);
      }
}
