<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Muhamad Qomarulloh',
            'username' => 'qomarulloh',
            'email' => 'muhammadqomarulloh@gmail.com',
            'password' => bcrypt('12345')
        ]);
        // User::create([
        //     'name' => 'Atikah Kartika',
        //     'email' => 'atikahkartika@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quis quo totam velit!',
        //     'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. A velit eos alias cum cumque facilis facere suscipit beatae animi dolorum corporis earum fugit quidem voluptate minima soluta, iure quo minus sapiente quia ullam eaque? Deleniti voluptatem dolorem quos itaque cupiditate unde ipsam consectetur reprehenderit aperiam iusto. Velit veritatis quasi esse amet provident? Minima minus mollitia fugit voluptatum ipsam eaque illo? Nihil, doloremque eligendi nostrum deserunt earum cum nesciunt laboriosam quisquam fuga quos. Placeat magnam, quos iure culpa fugit eum debitis quas ex officia iusto quia sit iste minima ipsam molestias officiis voluptatem eaque maxime assumenda et provident soluta animi voluptatum?',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul Ke Dua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quis quo totam velit!',
        //     'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. A velit eos alias cum cumque facilis facere suscipit beatae animi dolorum corporis earum fugit quidem voluptate minima soluta, iure quo minus sapiente quia ullam eaque? Deleniti voluptatem dolorem quos itaque cupiditate unde ipsam consectetur reprehenderit aperiam iusto. Velit veritatis quasi esse amet provident? Minima minus mollitia fugit voluptatum ipsam eaque illo? Nihil, doloremque eligendi nostrum deserunt earum cum nesciunt laboriosam quisquam fuga quos. Placeat magnam, quos iure culpa fugit eum debitis quas ex officia iusto quia sit iste minima ipsam molestias officiis voluptatem eaque maxime assumenda et provident soluta animi voluptatum?',
        //     'category_id' => 1,
        //     'user_id' => 2
        // ]);
        // Post::create([
        //     'title' => 'Judul Ke Tiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quis quo totam velit!',
        //     'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. A velit eos alias cum cumque facilis facere suscipit beatae animi dolorum corporis earum fugit quidem voluptate minima soluta, iure quo minus sapiente quia ullam eaque? Deleniti voluptatem dolorem quos itaque cupiditate unde ipsam consectetur reprehenderit aperiam iusto. Velit veritatis quasi esse amet provident? Minima minus mollitia fugit voluptatum ipsam eaque illo? Nihil, doloremque eligendi nostrum deserunt earum cum nesciunt laboriosam quisquam fuga quos. Placeat magnam, quos iure culpa fugit eum debitis quas ex officia iusto quia sit iste minima ipsam molestias officiis voluptatem eaque maxime assumenda et provident soluta animi voluptatum?',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);
    }
}
