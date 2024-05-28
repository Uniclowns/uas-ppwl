<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Properti>
 */
class PropertiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'alamat' => fake()->unique()->address(),
            'tipe' => fake()->randomElement(['rumah tunggal', 'apartemen', 'kondominium']),
            'jumlah_kamar' => fake()->numberBetween(1, 5),
            'kamar_mandi' => fake()->numberBetween(1, 5),
            'fasilitas' => fake()->randomElement(['kolam renang', 'garasi', 'taman']),
            'harga' => fake()->numberBetween(1000000, 1000000000000),
            'status' => fake()->randomElement(['Dijual', 'Disewa', 'Sudah Terjual ', 'Sudah Tersewa']),
            'tanggal_listing' => now(),
            'agenId' => fake()->numberBetween(1, 50),
        ];
    }
}
