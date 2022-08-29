<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class PaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
            DB::table('payment')->insert([
                'users_id' => 1,
                'amount' => rand(0,10),
                'description' => Str::random(10),
                'date' => rand(0,31),
                'card_number' => rand(0,100),
                // 'updated'
            ]);
        
    }
}
