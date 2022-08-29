<?php

namespace Database\Factories;



use App\Models\order;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = order::class;

    public function definition()
    {
    $faker = \Faker\Factory::create();


        return [
            //
            'users_id'=> $faker->numberBetween(1,5),
            'expring_date' => $faker->dateTimeInInterval($startDate = now(), $interval= '+30 days', $endDate = '+2 years', $timeZone= null ),
            'services_id'=>$faker->numberBetween(1,5),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
