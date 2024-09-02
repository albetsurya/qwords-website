<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);



        // Category::create([
        //     'name' => 'Web Development',
        //     'slug' => 'web-development'
        // ]);

        // Post::create([
        //     'title' => 'Web Development Laravel 11',
        //     'author_id' => 1,
        //     'category_id' => 1,
        //     'slug' => 'web-development',
        //     'body' => 'Laravel 11 hadir dengan peningkatan performa signifikan, membuat aplikasi berjalan lebih cepat dan efisien. Optimalisasi pada routing, query database, dan cache management menjadi fokus utama, memungkinkan pengembang membangun aplikasi yang lebih responsif dan hemat sumber daya.',
        // ]);
        $this->call([CategorySeeder::class, UserSeeder::class]);

        Post::factory(100)->recycle([
            Category::all(),
            User::all(),
        ])->create();
    }
}
