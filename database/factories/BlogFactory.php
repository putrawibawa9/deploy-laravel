<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog>
 */
class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'judul_blog' => $this->faker->sentence,
            'deskripsi_blog' => $this->faker->paragraph,
            'penulis_blog' => $this->faker->name,
            
        ];
    }
}
