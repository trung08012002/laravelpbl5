<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class FoodFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model=Food::class;
    public function definition()
    {
        return [
            'type' => $this->faker->name(),
            'first_price' => $this->randomDigit(),
            'last_price' =>  $this->randomDigit(),
            'name' =>  $this->faker->name(),
            'id_shop' => 1,
        ];
    }
}
