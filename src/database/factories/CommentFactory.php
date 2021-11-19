<?php

namespace Database\Factories;

use App\Comment;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Comment::class;

    public function definition()
    {
        return [
            'user_id'=>$this->faker->numberBetween(1,10),
            'article_id'=>$this->faker->numberBetween(1,3),
            'comment' => $this->faker->paragraph(),
            'published' =>$this->faker->boolean(),
            'remember_token' => Str::random(10),
        ];
    }
}
