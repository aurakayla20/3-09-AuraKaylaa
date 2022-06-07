<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Auth;

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

//Route::get('/', function () {
   // return view('welcome');
//});

Route::get('/', function() {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function() {
    return view('about', [
        "title" => "About",
        "nama" => "Aura Kayla Chantika Prasasti",
        "email" => "3103120039@student.smktelkom-pwt.sch.id",
        "gambar" => "Aura.jpeg"
    ]);
});

Route::get('/gallery', function() {
    return view('gallery', [
        "title" => "Gallery"
    ]);
});

Route::get('/delete_contact/{id}', ContactController::class . '@destroy');
Route::get('/edit_contact/{id}', ContactController::class . '@edit');
Route::post('/update_contact', ContactController::class . '@update');


Route::resource('/contact', ContactController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

