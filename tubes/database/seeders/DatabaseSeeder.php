<?php

namespace Database\Seeders;

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
        // \App\Models\User::factory(10)->create();
        $this->call(UsersTableSeeder::class);
        $this->call(GenresTableSeeder::class);
        $this->call(MoviesTableSeeder::class);
        $this->call(CelebritiesTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(BlogsTableSeeder::class);
        $this->call(CommentsTableSeeder::class);
        $this->call(CastsTableSeeder::class);
        $this->call(PhotosTableSeeder::class);
        $this->call(VideosTableSeeder::class);
        $this->call(FavoritesTableSeeder::class);
        $this->call(ReviewsTableSeeder::class);
    }
}
