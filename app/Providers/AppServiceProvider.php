<?php

namespace App\Providers;

use App\Models\Tag;
use App\Models\Category;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        if(Schema::hasTable('categories')&&Schema::hasTable('tags')){
            $categories=Category::all();
            $tags=Tag::all();
            // View::share('categories',$categories);
            // View::share('tags',$tags);
            View::share(compact('categories','tags'));
        }

        Paginator::useBootstrap();


    }
}
