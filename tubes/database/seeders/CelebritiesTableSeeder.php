<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory;

class CelebritiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // kosongkan semua data di dalam tabel 
        \DB::table('celebrities')->truncate();

        // membangkitkan 10 data dummy di tabel 
        $posts = [];                    // inisialisasi variabel posts untuk menampung data
        $faker = Factory::create();
        
        for($i = 1; $i <= 10; $i++)
        {
            $image = "ceb".rand(1,29).".jpg";
            $date = date("Y-m-d H:i:s", strtotime("2021-04-20 10:00:00 + {$i} days"));
            $posts[] = [
                'name'          => $faker->name(),
                'full_name'     => $faker->name(),
                'image'         => $image,
                'excerpt'       => $faker->text(rand(50,100)),
                'biography'     => $faker->sentence(rand(15,30)),
                'birth_date'    => $faker->date($format = 'Y-m-d', $max='now'),
                'death_date'    => $faker->date($format = 'Y-m-d', $max='now'),
                'country'       => $faker->country(),
                'height'        => $faker->buildingNumber(),
                'category'      => "Actor",
                'link_facebook' => $faker->url(),
                'link_twitter'  => $faker->url(),
                'link_instagram'=> $faker->url(),
                'created_at'    => $date,
                'updated_at'    => $date,
            ];
        }
        \DB::table('celebrities')->insert($posts); 
            
    }
}
