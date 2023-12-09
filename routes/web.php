<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InquiryController;
use App\Http\Controllers\QuoteController;

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


//admin routes

Route::group(['prefix' => 'admin'], function () {

    Route::get('/team', function () {
        return view('admin.team');
    })->name('admin.team');

    // inquiry
    Route::get('/inquiries', [InquiryController::class, 'index'])->name('admin.inquiries');
    Route::get('/inquiries/{id}', [InquiryController::class, 'show'])->name('admin.inquiries.show');
    Route::delete('/inquiries/delete/{id}', [InquiryController::class,'destroy'])->name('admin.inquiries.destroy');
    //reply
    Route::post('/inquiries/reply/{id}', [InquiryController::class, 'reply'])->name('admin.inquiries.reply');

    Route::get('/quotes', function () {
        return view('admin.quote');
    })->name('admin.quotes');
    Route::get('/messages', function () {
        return view('admin.messages');
    });
    Route::get('/portfolio', function () {
        return view('admin.portfolio');
    })->name('admin.portfolio');

    Route::get('/news', function () {
        return view('admin.news');
    })->name('admin.news');

    Route::get('/news', function () {
        return view('admin.users');
    })->name('admin.users');

    Route::get('/settings', function () {
        return view('admin.settings');
    });
    Route::get('/login', function () {
        return view('admin.login');
    });
    Route::get('/register', function () {
        return view('admin.register');
    });
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    });
});


// Page routes

Route::get('/', function () {
    return view('index');
});
Route::get('/admin', function () {
    return view('admin.home');
})->name('admin.home');

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
Route::get('/contact', [InquiryController::class, 'showForm'])->name('contact.form');
Route::post('/contact', [InquiryController::class, 'submitForm'])->name('contact.submit');

// Request Quote
Route::get('/request-quote', [QuoteController::class, 'showForm'])->name('request-quote.form');
Route::post('/request-quote', [QuoteController::class,'submitForm'])->name('request-quote.submit');
