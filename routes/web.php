<?php

use Illuminate\Support\Facades\Route;
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


Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Fahri Syabani",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Deserunt, omnis officia. Doloremque delectus repellendus pariatur autem necessitatibus molestias? Ex provident ipsam mollitia aperiam autem excepturi quo quaerat dolorum beatae quibusdam? Maiores ab facilis reprehenderit neque molestias magnam cum incidunt autem nihil qui atque ipsa nam quam impedit quo ullam ex in doloremque, aperiam magni aspernatur excepturi enim laborum? Maiores dignissimos similique tempora, minus quasi nam in nostrum error voluptates dolores explicabo ullam. Totam itaque explicabo similique maxime delectus fugiat nam."
        ],

        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Warman",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Deserunt, omnis officia. Doloremque delectus repellendus pariatur autem necessitatibus molestias? Ex provident ipsam mollitia aperiam autem excepturi quo quaerat dolorum beatae quibusdam? Maiores ab facilis reprehenderit neque molestias magnam cum incidunt autem nihil qui atque ipsa nam quam impedit quo ullam ex in doloremque, aperiam magni aspernatur excepturi enim laborum? Maiores dignissimos similique tempora, minus quasi nam in nostrum error voluptates dolores explicabo ullam. Totam itaque explicabo similique maxime delectus fugiat nam, dolor sit amet consectetur adipisicing elit. Deserunt, omnis officia."
        ],

    ];

    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});

// halaman single post
Route::get('posts/{slug}', function ($slug) {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Fahri Syabani",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Deserunt, omnis officia. Doloremque delectus repellendus pariatur autem necessitatibus molestias? Ex provident ipsam mollitia aperiam autem excepturi quo quaerat dolorum beatae quibusdam? Maiores ab facilis reprehenderit neque molestias magnam cum incidunt autem nihil qui atque ipsa nam quam impedit quo ullam ex in doloremque, aperiam magni aspernatur excepturi enim laborum? Maiores dignissimos similique tempora, minus quasi nam in nostrum error voluptates dolores explicabo ullam. Totam itaque explicabo similique maxime delectus fugiat nam."
        ],

        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Warman",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Deserunt, omnis officia. Doloremque delectus repellendus pariatur autem necessitatibus molestias? Ex provident ipsam mollitia aperiam autem excepturi quo quaerat dolorum beatae quibusdam? Maiores ab facilis reprehenderit neque molestias magnam cum incidunt autem nihil qui atque ipsa nam quam impedit quo ullam ex in doloremque, aperiam magni aspernatur excepturi enim laborum? Maiores dignissimos similique tempora, minus quasi nam in nostrum error voluptates dolores explicabo ullam. Totam itaque explicabo similique maxime delectus fugiat nam, dolor sit amet consectetur adipisicing elit. Deserunt, omnis officia."
        ],

    ];

    $new_post = [];
    foreach ($blog_posts as $post) {
        if ($post["slug"] === $slug) {
            $new_post = $post;
        }
    }

    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});
