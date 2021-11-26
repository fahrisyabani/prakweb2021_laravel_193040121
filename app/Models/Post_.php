<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
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

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
