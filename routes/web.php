<?php

use App\Models\Category;
use PhpParser\Node\Stmt\Foreach_;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

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
        "active" => 'home'
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "active" => 'about',
        "name" => "Fahri Syabani",
        "email" => "fahrisyabanipd@gmail.com",
        "image" => "Fahri Syabani.jpeg"
    ]);
});


// Terhubung ke halaman PostController
Route::get('/posts', [PostController::class, 'index']);

// Terhubung ke halaman PostController
// halaman single post
Route::get('posts/{post:slug}', [PostController::class, 'show']);

// Route untuk categories
Route::get('/categories', function () {
    return view('categories', [
        'title' => 'Post Categories',
        'active' => 'categories',
        'categories' => Category::all()
    ]);
});

Route::get('/login', [LoginController::class, 'index']);

Route::get('/register', [RegisterController::class, 'index']);
