<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //kosongkan semua data di tabel
        \DB::statement('SET FOREIGN_KEY_CHECKS=0');
        User::truncate();

        //membuat akun admin
        $admin = User::create([
            'name'      => 'Admin',
            'username'  => 'admin',
            'country'   => 'Indonesia',
            'state'     => 'Sumatera Utara',
            'email'     => 'admin@filmrecenzo.com',
            'password'  => bcrypt('rahasia'),
        ]);

        $admin->assignRole('admin');

        // membangkitkan 10 data dummy di tabel 
        
        $faker = Factory::create();

        for($i = 1; $i <= 10; $i++)
        {
            $date = date("Y-m-d H:i:s", strtotime("2021-04-20 10:00:00 + {$i} days"));
            $user = User::create([                    
                'name'      => $faker->name(),
                'username'  => $faker->userName(5, 15),
                'country'   => $faker->country(),
                'state'     => $faker->state(),
                'email'     => $faker->email(),
                'password'  => bcrypt('rahasia'),
                'status'    => "active",
                //'role'      => "user",
            ]);

            $user->assignRole('user');
        }
            
    }
}
