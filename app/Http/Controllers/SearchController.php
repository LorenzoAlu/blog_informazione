<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Request $request)
    {
      
        $filterCategories = $request->input('category_id');
        $search = $request->input('searchWord');

        if ($filterCategories == 0 && $search == null) {
            $articlesfilter = Article::query()->where('title', 'LIKE', "%{$search}%")
                ->orWhere('slug', 'LIKE', "%{$search}%")
                ->orWhere('body', 'LIKE', "%{$search}%")
                ->get();
            $articles=$articlesfilter->filter(function($article){
                return $article->visible == true;
            })->reverse();
                // ->paginate(9)
            return view('articles.index', compact('articles'));
        } elseif ($filterCategories == 0) {
            $articlesfilter = Article::query()->where('title', 'LIKE', "%{$search}%")
                ->orWhere('slug', 'LIKE', "%{$search}%")
                ->orWhere('body', 'LIKE', "%{$search}%")
                ->get();
                // ->paginate(9)
                $articles=$articlesfilter->filter(function($article){
                    return $article->visible == true;
                })->reverse();
            return view('articles.index', compact('articles'));
        } else {
            $articlesFilter = Article::query()->where('title', 'LIKE', "%{$search}%")
                ->orWhere('slug', 'LIKE', "%{$search}%")
                ->orWhere('body', 'LIKE', "%{$search}%")
                ->get();

            $articlesCategory = $articlesFilter->filter(function ($article) use ($filterCategories) {
                return $article->category_id == $filterCategories;
            });
            $articles=$articlesCategory->filter(function($article){
                return $article->visible == true;
            })->reverse();
            // ->paginate(9)
            return view('indexRicerca', compact('articles', 'search', 'request'));
        }
    }
}
