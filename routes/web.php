<?php

use App\Mail\ContactMail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ReplayCommentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


Route::get('/',[HomeController::class, 'index'])->name('home');
Route::post('/contacts/send',[ContactController::class,'send'])->name('contacts.send');
Route::get('/contacts/thankyou',[ContactController::class,'thankyou'])->name('contacts.thankyou');
Route::get('/users/profile',[HomeController::class,'profile'])->name('users.profile')->middleware('auth');
Route::get('/articles/{article:title}/edit',[ArticleController::class,'edit'])->name('articles.edit');
Route::get('/articles/create', [ArticleController::class,'create'])->name('articles.create')->middleware('auth');
Route::post('/articles/store',[ArticleController::class,'store'])->name('articles.store');
Route::get('/articles/{article}/show',[ArticleController::class, 'show'])->name('articles.show');
Route::get('/articles/index',[ArticleController::class, 'index'])->name('articles.index');
Route::get('/categories/{category}', [CategoryController::class,'index'])->name('categories.index');
Route::delete('/articles/{article}/destroy',[ArticleController::class,'destroy'])->name('articles.destroy');
Route::post('/articles/{article}/update', [ArticleController::class, 'update'])->name('articles.update');
Route::get('/aboutUs', [HomeController::class,'aboutUs'])->name('aboutUs');
Route::any('/indexRicerca', [SearchController::class, 'index'])->name('indexRicerca');
Route::post('/comments/{article}/store', [CommentController::class,'store'])->name('comments.store');
Route::delete('/comments/{comment}/destroy', [CommentController::class,'destroy'])->name('comments.destroy');
Route::post('/comments/{comment}/update', [CommentController::class,'update'])->name('comments.update');
Route::post('/replayComments/{replayComment}/store', [ReplayCommentController::class,'store'])->name('replayComments.store');
Route::post('/articles/{article}/addLiked', [ArticleController::class, 'addLiked'])->name('articles.addLiked');
Route::post('/articles/{article}/lessLiked', [ArticleController::class, 'lessLiked'])->name('articles.lessLiked');

// Route::get('/admin/{user}/showArticles',[AdminController::class, 'showArticles'])->name('admin.showArticles');


Route::middleware([AdminMiddleware::class])->group(function(){
    
    Route::get('/admin/dashboard',[AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/articles/{user}', [AdminController::class, 'articlesForUser'])->name('articles.for.user');
    Route::delete('/users/{user}/destroy', [AdminController::class, 'destroyUser'])->name('user.destroy');
    Route::get('/user/{user}/toggle', [AdminController::class, 'toggleUser'])->name('user.toggle');
    Route::get('/admin/revisionate', [AdminController::class, 'revisionate'])->name('admin.revisionate');
    Route::get('/articles/{article}/approved', [AdminController::class, 'approved'])->name('articles.approved');




});


