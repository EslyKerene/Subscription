<?php

namespace Database\Factories;

use App\Models\service;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\service>
 */
class ServiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = service::class;

    public function definition()
    {
        $faker = \Faker\Factory::create();

        return [
            //
            'categories_id' =>$faker->numberBetween(1,5),
            'name' => $faker->text($maxNbChars = 10),
            'description' => $faker->text($maxNbChars = 150),
            'services_image' => $faker->imageUrl(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
