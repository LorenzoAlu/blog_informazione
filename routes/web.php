<?php


use App\Mail\ContactMail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CategoryController;

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



// deprecate 
// Route::get('/articoli/{articolo}/show',[HomeController::class, 'show'])->name('articoli.show');
// Route::get('/articoli/mostratutti',[HomeController::class, 'mostraTutti'])->name('articoli.mostratutti');
// Route::get('/articoli/{categoria}',[HomeController::class, 'mostraCategoria'])->name('articoli.categoria');
