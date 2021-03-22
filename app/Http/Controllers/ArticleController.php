<?php

namespace App\Http\Controllers;

use App\Models\article;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Mockery\Undefined;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
            $articles=Article::orderby('id','desc')->get();
            return view('articles.index',compact('articles'));
        

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=Category::All();
        return view('articles.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $article=Article::create([
           'title'=>$request->input('title'),
           'slug'=>$request->input('slug'),
           'body'=>$request->input('body'),
           'category_id'=>$request->input('category_id'),
           'user_id'=>Auth::id(),
           'img'=>$request->file('img')->store('public'),
       ]);

       return redirect(route('articles.create'))->with('message',"il tuo articolo $article->title è stato inserito");

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(article $article)
    {
        // $filtro = $articoli->filter(function ($articolo) use ($titolo) {
        //     return $articolo['titolo'] == $titolo;
        //   })->first();
      
        //   $correlati = $articoli->filter(function ($articolo) use ($filtro) {
        //     return $articolo['categoria'] == $filtro['categoria'];
        //   });
      
        //   $correlatiMenoFirst= $correlati->filter(function($articolo) use ($filtro){
        //     return $articolo !== $filtro;
        //   });
            
      
        //   return view('articoli.show', compact('filtro', 'correlatiMenoFirst'));

        $correlati=Article::orderby('id','desc')->get();
        $related=$correlati->filter(function($correlato) use ($article){
            return $correlato->category_id==$article->category_id;
        });
        $relatedLessFirst=$related->filter(function($relate) use ($article){
            return $relate != $article;
        });
        return view('articles.show', compact('article','relatedLessFirst'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(article $article)
    {
        $categories=Category::all();
        return view('articles.edit',compact('article','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, article $article)
    {
        $article->update($request->all());
        
        return redirect(route('users.profile'))->with('message',"il tuo Articolo $article->title è stato modificato");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(article $article)
    {
       $article->delete();
       return redirect()->back()->with('message',"L'articolo $article->title è stato cancellato!");
    }
}
