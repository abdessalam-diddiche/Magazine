<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use Auth;
use DB;

class ApiController extends Controller
{
    public function list(){
        $article = Article::all();
        return response()->json($article);
    }
    
    public function create(){
        $article = new Article;

        $article->title = request('title');
        $article->category = request('category');
        $article->content = request('content');
        $article->id_user = request('id_user');

        $article->image = request('image');

        $article->save();
        return response()->json($article);
    }

    public function detail($id){
        $article = Article::findOrfail($id);
        return response()->json($article);
    }

    public function update($id){
        $article = Article::findOrfail($id);
        $article->title = request('t');

        $article->save();
        return response()->json($article);
    }

    public function delete($id){
        $article = Article::findOrfail($id);

        $article->delete();
        return response()->json($article);
    }
}

     