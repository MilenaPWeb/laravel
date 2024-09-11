<?php

namespace Database\Factories;

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
            "Nombre" => fake()->word(),
            "Categoria" => fake()->text(),
            "Precio" => fake()->numberBetween(25000,78000),
            "Stock" => fake()->numberBetween(0,100),
            "Descripción" => fake()->text(),
        ];
    }
}
