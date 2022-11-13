<?php

use App\Http\Controllers\PostController;
use App\Models\Category;
use App\Models\Post;
use App\Models\Company;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpKernel\Profiler\Profile;

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
    return view('landing', [
        "title" => "Landing",
        "profile" => Company::all()
    ]);
});


Route::get('/transport', function () {
    return view('home', [
        "title" => "Home",
        "profile" => Company::all()
    ]);
});



Route::get('/transport/services', function () {

    return view('services', [
        "title" => "Services",
        "services" => Post::all(),
        "profile" => Company::all()
    ]);
});


Route::get('/transport/about', function () {
    return view('about', [
        "title" => "About",
        "profile" => Company::all()

    ]);
});

Route::get('/transport/contact', function () {
    return view('contact', [
        "title" => "Contact",
        "profile" => Company::all()

    ]);
});

// Multi Post

Route::get('/property', [PostController::class, 'index']);

Route::get('/property/categories', [PostController::class, 'categories']);

// Single Post

Route::get('/property/{post:slug}', [PostController::class, 'show']);

// Single Category

Route::get('/property/categories/{category:slug}', [PostController::class, 'category']);
