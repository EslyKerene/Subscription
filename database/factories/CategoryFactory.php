<?php

namespace Database\Factories;

use App\Models\category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;



/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = category::class;

    public function definition()
    {
    $faker = \Faker\Factory::create();

        return [
            //
            'name' => $faker->text($maxNbChars = 10),
            'description' => $faker->text($maxNbChars = 150),
            'cat_image' => $faker->imageUrl(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
