<?php

namespace Database\Seeders;
namespace Database\Factories;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = \Faker\Factory::create(); 
        
        DB::table('users')->insert([
            'first_name' => $faker->firstname(),
            'last_name' => $faker->lastname(),
            'user_name' => $faker->username(),
            'phone_number' => $faker->phoneNumber(),
            'email' => $faker->safeEmail(),
            'password' => Hash::make('password'),
            'rememberToken'=> Str::random(10),
            'created_at' => Str::random(10),
            'updated_at' => Str::random(10),
        ]);
    }
}
