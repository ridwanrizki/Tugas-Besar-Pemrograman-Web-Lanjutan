<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // kosongkan semua data di dalam tabel 
        \DB::table('comments')->truncate();

        // membangkitkan 10 data dummy di tabel 
        $posts = [];                    // inisialisasi variabel posts untuk menampung data
        $faker = Factory::create();
        for($i = 1; $i <= 10; $i++)
         {
            $date = date("Y-m-d H:i:s", strtotime("2021-04-20 10:00:00 + {$i} days"));
            $posts[] = [
                'blog_id'     => rand(1,10),
                'user_id'     => rand(1,10),
                'comment'     => $faker->text($maxNbChars=200),
                'status'      => $faker->text($maxNbChars=35),
                'created_at'  => $date,
                'updated_at'  => $date,

             ];
         }
         \DB::table('comments')->insert($posts); 
    }
}
