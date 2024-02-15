<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comic>
 */
class ComicFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => fake() -> word(5),
            'author' => fake() -> name(),
            'genre' => fake() -> word(),
            'description' => fake() -> paragraph(2),
            'price' => fake() -> randomFloat(2, 10, 100),
        ];
    }
}
