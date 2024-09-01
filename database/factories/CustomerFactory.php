<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $countries = [
            ['regex' => '237 [2368]\d{7,8}'],
            ['regex' => '251 [1-59]\d{8}'],
            ['regex' => '212 [5-9]\d{8}'],
            ['regex' => '258 [28]\d{7,8}'],
            ['regex' => '256 \d{9}']
        ];

        // Randomly select a country
        $country = $this->faker->randomElement($countries);

        // Generate a valid number based on the regex pattern
        $number = $this->faker->regexify($country['regex']);

        return [
            'name' => fake()->name(),
            'phone' => $number
        ];
    }
}
