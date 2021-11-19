<?php

namespace Database\Seeders;

use App\Article;
use App\Comment;
use App\User;
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
        User::factory()
            ->count(10)
            ->create();
        Article::factory()
            ->count(3)
            ->create();
        Comment::factory()
            ->count(5)
            ->create();
        // \App\Models\User::factory(10)->create();
    }
}
