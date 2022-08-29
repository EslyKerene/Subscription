<?php

namespace Database\Factories;

use App\Models\payment;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\payment>
 */
class PaymentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = payment::class;

    public function definition()
    {
        return [
            //
            'users_id' => $this->faker->numberBetween(1,5),
            'pricing_id'=>$this->faker->numberBetween(1,5),
            'card_number'=>$this->faker->creditCardNumber(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
