<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory;

class CastsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // kosongkan semua data di dalam tabel 
        \DB::table('casts')->truncate();

        // membangkitkan 10 data dummy di tabel 
        $posts = [];                    // inisialisasi variabel posts untuk menampung data
        $faker = Factory::create();
        
        for($i = 1; $i <= 10; $i++)
        {
            $date = date("Y-m-d H:i:s", strtotime("2021-04-20 10:00:00 + {$i} days"));
            $posts[] = [
                'movie_id'      => rand(1,10),
                'celebrity_id'  => rand(1,10),
                'in_role'      => $faker->firstName(),
                'created_at'    => $date,
                'updated_at'    => $date,
            ];
        }
        \DB::table('casts')->insert($posts); 
    }
}
