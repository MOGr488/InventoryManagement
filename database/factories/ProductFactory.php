<?php

namespace Database\Factories;


use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->Unique()->word(),
            'tags' => 'Computer, Electronics, Monitor',
            'company' => $this->faker->company(),
            'quantity' => $this->faker->numberBetween(0,150),
            'price' => $this->faker->numberBetween(1,500),
            'description' =>$this->faker->realText($maxNbChars=50),
        ];
    }
}
