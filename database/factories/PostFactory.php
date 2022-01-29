<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Category;
use App\Models\User;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(),
            'body' => $this->faker->paragraph(5),
            'user_id' => User::factory(),
            'image_path' => $this->faker->image('public/images',500,400, null, false),



            'category_id' => Category::factory()
        ];
    }
}


//$post->title = $request->title;
//$post->body = $request->body;
//$post->user_id = auth()->user()->id;
//$post->category_id = $request->category;
