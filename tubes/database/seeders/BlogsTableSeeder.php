<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory;

class BlogsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // kosongkan semua data di dalam tabel 
        \DB::table('blogs')->truncate();

        // membangkitkan 10 data dummy di tabel 
        $posts = [];                    // inisialisasi variabel posts untuk menampung data
        $faker = Factory::create();
        
        for($i = 1; $i <= 10; $i++)
        {
            $image = "film".rand(1,8).".jpg";
            $date = date("Y-m-d H:i:s", strtotime("2021-04-20 10:00:00 + {$i} days"));
            $posts[] = [
                'category_id'   => rand(1,10),
                'title'         => $faker->sentence(rand(2,5)),
                'slug'          => $faker->slug(),
                'excerpt'       => $faker->text(rand(50, 80)),
                'body'          => $faker->paragraph(rand(2, 4), true),
                'image'         => $image,
                'status'        => "published",
                'created_at'    => $date,
                'updated_at'    => $date,
            ];
        }
        \DB::table('blogs')->insert($posts); 
            
    }
}
