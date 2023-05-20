<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Predio>
 */
class PredioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [

            'codigo_predio'=>$this->faker->languageCode,
            'nombre_predio'=> $this->faker->name,
            'direccion'=>$this->faker->address,

        ];


    }
}
