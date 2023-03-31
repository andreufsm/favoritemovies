<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MovieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=> $this->faker->name,
            'description'=>$this->faker->paragraph,
            'duration'=> $this->faker->randomDigit(),
            'is_favorite'=>$this->faker->boolean
        ];
    }
}
