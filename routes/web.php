<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Mail\ContactMail;

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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/contacts/send',[ContactController::class,'send'])->name('contacts.send');
Route::get('/contacts/thankyou',[ContactController::class,'thankyou'])->name('contacts.thankyou');