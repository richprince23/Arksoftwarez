<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// Page routes

Route::get('/', function () {
    return view('index');
});

Route::get('/about', function(){
    return view('about');
});

Route::get('/pricing', function(){
    return view('pricing');
});

Route::get('/contact', function(){
    return view('contact');
});

Route::get('/request-quote', function(){
    return view('request-quote');
});

Route::get('/contact', function(){
    return view('contact');
});

Route::get('/portfolio', function(){
    return view('portfolio');
});

// controller actions

//conatct/ inquiry
Route::get('/contact', [ContactController::class, 'showForm'])->name('contact.form');
Route::post('/contact', [ContactController::class, 'submitForm'])->name('contact.submit');

