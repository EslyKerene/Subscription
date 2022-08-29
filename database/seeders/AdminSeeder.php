<?php

namespace Database\Seeders;
namespace Database\Factories;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        
        // $faker = \Faker\Factory::create(); 
        
        // DB::table('admin')->insert([
        //     'first_name' => $faker->firstname(),
        //     'last_name' => $faker->lastname(),
        //     'phone_number' => $faker->phoneNumber(),
        //     'email' => $faker->safeEmail(),
        //     'email_verified_at' => $faker->safeEmail(),
        //     'password' => Hash::make('password'),
        //     'created_at' => Str::random(10),
        //     'updated_at' => Str::random(10),
        // ]);
}
}
