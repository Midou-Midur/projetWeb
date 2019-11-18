<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Article;

use Auth;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() // afficher tous les articles
    {
        $articles = DB::table('articles')->orderBy('nb_Sold', 'desc')->get();
        return view('pages.boutique', compact('articles'));
    }

    /**
     * Accède au formulaire d'ajout des articles
     */

    public function voirFormulaire(){
          if(auth()->check() && Auth::user()->role = 'BDE'){
            return view('pages.addArticle');
       }

        else{
            return back()->with('error', 'Vous devez être membre du BDE et connecté pour voir cette page');
        } 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create() // INSERT INTO
    {
        
        $article  = new Article; //instancie un nouvel article

        request()->validate([   //vérification du contenu des inputs, si un seul n'est pas correct l'utilisateur est renvoyé vers le formulaire
            'article_name' => 'required|string|max:255',
            'article_desc' => 'required|string|max:255',
            'article_img' => 'required|string|max:255',
            'article_type' => 'required|string|max:255',
            'article_price' => 'required|numeric|max:10',
        ]);

        $articles = Article::create([
            'article_name' => request('article_name'),
            'article_desc' => request('article_desc'),
            'article_img' => request('article_img'),
            'article_type' => request('article_type'),
            'article_price' => request('article_price'),
            
        ]);

        return back()->with('success', 'L\'article '.request('article_name').' a bien été ajouté');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\articleModel  $articleModel
     * @return \Illuminate\Http\Response
     */
    public function show(articleModel $articleModel)
    {
     //   $articles = DB::table('articles')->get();
     //   return view('pages.articles')->compact('articles')->with('id_articles');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\articleModel  $articleModel
     * @return \Illuminate\Http\Response
     */
    public function edit(articleModel $articleModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\articleModel  $articleModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, articleModel $articleModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\articleModel  $articleModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(articleModel $articleModel)
    {
        $id_articles = 'id_articles';
        DB::table('articles')->delete($id_articles);
    }
}
