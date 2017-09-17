<?php

use App\User;
use App\Article;
use App\Author;
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

        factory(User::class, 1)->create();
        factory(Author::class, 10)->create();
        factory(Article::class, 50)->create();
    }
}
