<?php


use App\Mail\ContactMail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;

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

// Auth::routes();

Route::get('/',[HomeController::class, 'index'])->name('home');
Route::get('/articoli/mostratutti',[HomeController::class, 'mostraTutti'])->name('articoli.mostratutti');
Route::post('/contacts/send',[ContactController::class,'send'])->name('contacts.send');
Route::get('/contacts/thankyou',[ContactController::class,'thankyou'])->name('contacts.thankyou');
Route::get('/articoli/{articolo}/show',[HomeController::class, 'show'])->name('articoli.show');
Route::get('/articoli/{categoria}',[HomeController::class, 'mostraCategoria'])->name('articoli.categoria');