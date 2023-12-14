<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InquiryController;
use App\Http\Controllers\QuoteController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TeamController;
use App\Models\Team;
use Illuminate\Support\Facades\Auth;

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
Auth::routes(['register' => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//admin routes

Route::middleware('auth')->prefix('admin')->group( function () {
    Route::get('/', [DashboardController::class, 'index'])->name('admin.home');
    // Team
    Route::get('/team',[TeamController::class, 'index'])->name('admin.team');
    Route::post('/team',[TeamController::class, 'store'])->name('team.store');
    Route::delete('/team/{id}',[TeamController::class, 'destroy'])->name('team.destroy');

    // inquiry
    Route::get('/inquiries', [InquiryController::class, 'index'])->name('admin.inquiries');
    Route::get('/inquiries/{id}', [InquiryController::class, 'show'])->name('admin.inquiries.show');
    Route::delete('/inquiries/delete/{id}', [InquiryController::class,'destroy'])->name('admin.inquiries.destroy');
    //reply
    Route::post('/inquiries/reply/{id}', [InquiryController::class, 'reply'])->name('admin.inquiries.reply');


    // quotes/ request
    Route::get('/quotes', [QuoteController::class, 'index'])->name('admin.quotes');
    Route::get('/view-quotes/{id}', [QuoteController::class, 'viewQuote'])->name('admin.view-quote');

    Route::get('/messages', function () {
        return view('admin.messages');
    });

    // Portfolio
    Route::get('/portfolios', [PortfolioController::class, 'index'])->name('admin.portfolio');
    Route::post('/portfolios', [PortfolioController::class, 'store'])->name('portfolio.store');
    Route::delete('/portfolios/{id}', [PortfolioController::class, 'destroy'])->name('portfolio.destroy');

    // posts
    Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
    Route::post('/posts', [PostController::class, 'store'])->name('posts.store');

    Route::delete('/posts/{id}', [PostController::class, 'destroy'])->name('posts.delete');
    Route::get('/news', [PostController::class, 'index'])->name('admin.news');

    Route::get('/users', function () {
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
// Route::get('/admin', function () {
//     return view('admin.home');
// })->name('admin.home');

Route::get('/about', function(){
    $team = Team::all();
    return view('about', compact('team'));
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

Route::get('/portfolio', [PortfolioController::class, 'list'])->name('portfolio.list');

// controller actions


//conatct/ inquiry
Route::get('/contact', [InquiryController::class, 'showForm'])->name('contact.form');
Route::post('/contact', [InquiryController::class, 'submitForm'])->name('contact.submit');

// Request Quote
Route::get('/request-quote', [QuoteController::class, 'showForm'])->name('request-quote.form');
Route::post('/request-quote', [QuoteController::class,'submitForm'])->name('request-quote.submit');

//  Posts
Route::get('/blog', [PostController::class, 'listPosts'])->name('posts.list');
Route::get('/posts/{id}', [PostController::class, 'show'])->name('posts.show');

