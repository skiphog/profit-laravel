<?php

use App\User;
use App\Rubric;
use App\Author;
use App\Article;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');

        User::truncate();
        Article::truncate();
        Author::truncate();
        Rubric::truncate();

        factory(User::class, 1)->create();
        factory(Author::class, 10)->create();
        factory(Rubric::class, 5)->create();
        factory(Article::class, 50)->create();
    }
}
