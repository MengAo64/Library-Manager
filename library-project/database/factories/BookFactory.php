<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $status = ["Dipinjam", "Tidak Dipinjam"];

        return [
            
            'title' => fake()->title(),
            'author' => fake()->name(),
            'publisher' => fake()->name(),
            'publication_date' => fake()->date(),
            'status' => $status[fake()->numberBetween(0 , (count($status) - 1))]
        ];
    }
}
