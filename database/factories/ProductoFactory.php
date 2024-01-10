<?php

namespace Database\Factories;

use App\Models\Producto;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Producto>
 */
class ProductoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        
        return [
            'nombre' => $this->faker->unique()->randomElement(['Calabaza','Manzana','Melon','Sandia','Limon','Melocoton'])
            ,'descripcion' => $this->faker->sentence()
            ,'cantidad' => $this->faker->randomNumber()
        ];
    }
}