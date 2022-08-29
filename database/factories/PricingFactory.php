<?php

namespace Database\Factories;

use App\Models\pricing;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\pricing>
 */
class PricingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = pricing::class;

    public function definition()
    {
        return [
            //
            'services_id' => $this->faker->numberBetween(1,5),
            'validity' => $this->faker->randomElement([
                "1 Month",
                "3 Months",
                "6 Months",
                "12 Months"
            ]),
            'amount' => $this-> faker->numberBetween(200,1000),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
