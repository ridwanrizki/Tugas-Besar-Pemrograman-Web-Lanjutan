<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory;

class ReviewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // kosongkan semua data di dalam tabel post
        \DB::table('reviews')->truncate();

        // membangkitkan 6 data dummy di tabel posts
        $posts = [];                    // inisialisasi variabel posts untuk menampung data
        $faker = Factory::create();
        
        for($i = 1; $i <= 10; $i++)
        {
            $date = date("Y-m-d H:i:s", strtotime("2021-04-20 10:00:00 + {$i} days"));
            $posts[] = [
                'user_id'       => rand(1,10),
                'movie_id'      => rand(1,10),
                'rating'        => rand(1,9),
                'review'        => $faker->text(rand(50, 80)),
                'created_at'    => $date,
                'updated_at'    => $date,
            ];
        }
        \DB::table('reviews')->insert($posts); 
    }
}
