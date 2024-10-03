<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(3)->create();
        Post::factory(5)->create();
        // Category::factory(5)->create();

        /* Category::create([
            'name' => 'Front End',
            'slug' => 'front-end'
        ]);

        Category::create([
            'name' => 'Back End',
            'slug' => 'back-end'
        ]); */
    }
}
