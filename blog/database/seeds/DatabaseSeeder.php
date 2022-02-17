<?php

use Illuminate\Database\Seeder;
use App\Post;
use App\Author;
use App\Category;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call([
            // UsersTableSeeder::class,
            PostTableSeeder::class,
            AuthorTableSeeder::class,
            CategoryTableSeeder::class,

        ]);

    }
}
