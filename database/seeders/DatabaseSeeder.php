<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'name' => 'Fahri Syabani',
            'email' => 'fahrisyabanipd@gmail.com',
            'password' => bcrypt('12345')
        ]);

        User::create([
            'name' => 'Warman',
            'email' => 'warman@gmail.com',
            'password' => bcrypt('12345')
        ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::create([
            'title' => 'Judul Pertama',
            'slug' => 'judul-pertama',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam possimus perspiciatis sint sequi? Cum, blanditiis numquam iusto porro',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam possimus perspiciatis sint sequi? Cum, blanditiis numquam iusto porro, exercitationem odio quae expedita ipsa, est atque impedit optio? Voluptatum enim minima itaque cupiditate omnis magnam. Vitae, perferendis debitis tempora facilis animi aspernatur. Hic mollitia, cupiditate illo quisquam necessitatibus enim neque labore ducimus molestias consequuntur accusantium vel facere laborum explicabo quidem similique aspernatur blanditiis sunt tempore exercitationem. Autem voluptate excepturi dolorum quasi tempore maxime praesentium neque placeat exercitationem fugit architecto, quia magni aliquid. Nobis corporis maiores architecto tempore quibusdam placeat',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Ke Dua',
            'slug' => 'judul-ke-dua',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam possimus perspiciatis sint sequi? Cum, blanditiis numquam iusto porro',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam possimus perspiciatis sint sequi? Cum, blanditiis numquam iusto porro, exercitationem odio quae expedita ipsa, est atque impedit optio? Voluptatum enim minima itaque cupiditate omnis magnam. Vitae, perferendis debitis tempora facilis animi aspernatur. Hic mollitia, cupiditate illo quisquam necessitatibus enim neque labore ducimus molestias consequuntur accusantium vel facere laborum explicabo quidem similique aspernatur blanditiis sunt tempore exercitationem. Autem voluptate excepturi dolorum quasi tempore maxime praesentium neque placeat exercitationem fugit architecto, quia magni aliquid. Nobis corporis maiores architecto tempore quibusdam placeat',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Ke Tiga',
            'slug' => 'judul-ke-tiga',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam possimus perspiciatis sint sequi? Cum, blanditiis numquam iusto porro',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam possimus perspiciatis sint sequi? Cum, blanditiis numquam iusto porro, exercitationem odio quae expedita ipsa, est atque impedit optio? Voluptatum enim minima itaque cupiditate omnis magnam. Vitae, perferendis debitis tempora facilis animi aspernatur. Hic mollitia, cupiditate illo quisquam necessitatibus enim neque labore ducimus molestias consequuntur accusantium vel facere laborum explicabo quidem similique aspernatur blanditiis sunt tempore exercitationem. Autem voluptate excepturi dolorum quasi tempore maxime praesentium neque placeat exercitationem fugit architecto, quia magni aliquid. Nobis corporis maiores architecto tempore quibusdam placeat',
            'category_id' => 2,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Ke Empat',
            'slug' => 'judul-ke-empat',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam possimus perspiciatis sint sequi? Cum, blanditiis numquam iusto porro',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam possimus perspiciatis sint sequi? Cum, blanditiis numquam iusto porro, exercitationem odio quae expedita ipsa, est atque impedit optio? Voluptatum enim minima itaque cupiditate omnis magnam. Vitae, perferendis debitis tempora facilis animi aspernatur. Hic mollitia, cupiditate illo quisquam necessitatibus enim neque labore ducimus molestias consequuntur accusantium vel facere laborum explicabo quidem similique aspernatur blanditiis sunt tempore exercitationem. Autem voluptate excepturi dolorum quasi tempore maxime praesentium neque placeat exercitationem fugit architecto, quia magni aliquid. Nobis corporis maiores architecto tempore quibusdam placeat',
            'category_id' => 2,
            'user_id' => 2
        ]);
    }
}
