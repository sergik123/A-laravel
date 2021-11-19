<?php

namespace Database\Factories;

use App\Article;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Article::class;

    public function definition()
    {
        return [
            'user_id'=>$this->faker->numberBetween(1,10),
            'title' => $this->faker->name(),
            'text' => $this->faker->paragraph(),
            'published' =>$this->faker->boolean(),
            'remember_token' => Str::random(10),
        ];
    }
}
