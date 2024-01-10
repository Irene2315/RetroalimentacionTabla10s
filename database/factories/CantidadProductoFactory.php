<?php

namespace Database\Factories;

use App\Models\CantidadProducto;
use App\Models\Producto;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CantidadProducto>
 */
class CantidadProductoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        
        return [
            'fecha' => $this->faker->unique()->date()
            ,'hora' => $this->faker->time()
            ,'cantidad' => $this->faker->randomNumber()
            ,'idProducto' => Producto::inRandomOrder()->first()->id,
        ];
    }
}
