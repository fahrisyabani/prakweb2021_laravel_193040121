<?php

use App\Http\Controllers\PostController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Models\Post;
use PhpParser\Node\Stmt\Foreach_;

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
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
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
        'categories' => Category::all()
    ]);
});

// 
Route::get('/categories/{category:slug}', function (Category $category) {
    return view('category', [
        'title' => $category->name,
        'posts' => $category->posts,
        'category' => $category->name
    ]);
});
