<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class MinumanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama_minuman' => $this->faker->words(2, true),  // Menghasilkan nama minuman acak (2 kata)
            'deskripsi' => $this->faker->sentence(),         // Menghasilkan deskripsi singkat
            'stok' => $this->faker->numberBetween(1, 100),   // Menghasilkan stok acak antara 1 sampai 100
            'harga' => $this->faker->randomFloat(2, 1000, 10000),  // Menghasilkan harga acak antara 1000 sampai 10000, dengan 2 desimal

        ];
    }
}
