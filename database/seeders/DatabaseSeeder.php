<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Database\Seeders\UserSeeder;
use App\Models\User;
use Illuminate\Database\Seeders\CategorySeeder;
use App\Models\category;
use Illuminate\Database\Seeders\ServiceSeeder;
use App\Models\service;
use Illuminate\Database\Seeders\AdminSeeder;
use App\Models\admin;
use Illuminate\Database\Seeders\PricingSeeder;
use App\Models\pricing;
use Illuminate\Database\Seeders\OrderSeeder;
use App\Models\order;
use Illuminate\Database\Seeders\PaymentSeeder;
use App\Models\payment;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        // \App\Models\User::factory(10)->create();
        \App\Models\category::factory(5)->create();
        \App\Models\service::factory(5)->create();
        \App\Models\admin::factory(5)->create();
        \App\Models\pricing::factory(10)->create();
        \App\Models\order::factory(10)->create();
        \App\Models\payment::factory(10)->create();







        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
