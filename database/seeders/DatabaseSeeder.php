<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\User;
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
//        Post::truncate();
//        Category::truncate();
//        User::truncate();


       // Post::factory()->create();
        Post::factory()->count(10)->create();

    }
}
