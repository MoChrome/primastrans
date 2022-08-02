<?php

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
    return view('home', [
        "title" => "Home",
        "profile" => Company::all()
    ]);
});



Route::get('/services', function () {

    return view('services', [
        "title" => "Services",
        "services" => Post::all(),
        "profile" => Company::all()
    ]);
});


Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "profile" => Company::all()

    ]);
});

// single services

Route::get('services/{slug}', function ($slug) {

    return view('post', [
        "title" => "Single Post",
        "post" => Post::find($slug)
    ]);
});
