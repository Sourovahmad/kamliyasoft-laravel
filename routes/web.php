<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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


Route::get('/', [HomeController::class,'index'])->name('home');
Route::get('about', [HomeController::class,'about'])->name('about');
Route::get('contact', [HomeController::class,'contact'])->name('contact');
Route::get('services', [HomeController::class,'services'])->name('services');
Route::get('estimate-projet', [HomeController::class,'estimate_index'])->name('estimate-projet');
Route::post('estimate-projet-save', [HomeController::class, 'estimate_projet_save'])->name('estimate-projet-save');


Route::post('newsletter_store', [HomeController::class, 'newsletterStore'])->name('newsletter_store');
Route::post('appRequest', [HomeController::class, 'appRequest'])->name('appRequest');
Route::post('contactRequest', [HomeController::class, 'contactRequest'])->name('contactRequest');



Route::post('contact-save', [HomeController::class, 'contact_save'])->name('contact_save');



Route::get('buy', function ()
{
    return view('product.index');
})->name('buy');




Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});










// email sender for app request
Route::post('app-request-sent', [HomeController::class, 'app_request_sent'])->name('app_request_sent');

