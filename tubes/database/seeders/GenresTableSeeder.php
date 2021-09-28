<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory;

class GenresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // kosongkan semua data di dalam tabel 
        \DB::table('genres')->truncate();

        // membangkitkan 10 data dummy di tabel
        $posts = [];                    // inisialisasi variabel posts untuk menampung data
        $faker = Factory::create();
        for($i = 1; $i <= 10; $i++)
         {
             $posts[] = [
                 'name'   => $faker->word(),
                 'status' => "active",
             ];
         }
         \DB::table('genres')->insert($posts); 
             

    }
}
