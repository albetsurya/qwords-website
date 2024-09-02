<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Category::factory(5)->create();
        Category::create([
            "name" => "Laravel 11 New Version",
            "slug" => "laravel-11-new-version",
            'color' => 'red',
        ]);
        Category::create([
            "name" => "Master PHP",
            "slug" => "master-php",
            'color' => 'green',

        ]);
        Category::create([
            "name" => "UI / UX Design",
            "slug" => "ui-ux-design",
            'color' => 'blue',

        ]);
        Category::create([
            "name" => "Machine Learning",
            "slug" => "machine-learning",
            'color' => 'yellow',

        ]);
    }
}
