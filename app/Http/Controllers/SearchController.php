<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Request $request)
    {

        $filterCategories=$request->input('category_id');
        $search=$request->input('searchWord');
        // $articlesCategories=Article::all()->filter(function($article) use ($filterCategories) {
        //         return $article->category_id==$filterCategories;
        // });
        $articles = Article::query()->where('title','LIKE',"%{$search}%" )
                                   ->orWhere('slug','LIKE',"%{$search}%" )
                                   ->orWhere('body','LIKE',"%{$search}%" )
                                   ->get();

        $articlesFilter=$articles->filter(function($article) use ($filterCategories) {
            return $article->category_id==$filterCategories;
    });

        return view('indexRicerca',compact('articlesFilter','search','request'));

    }
}
