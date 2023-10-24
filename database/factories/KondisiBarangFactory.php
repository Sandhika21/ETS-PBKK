<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\KondisiBarang>
 */
class KondisiBarangFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $Kondisi = ["Baik", "Layak", "Rusak"];
        return [
            'kondisi'=>$this->faker->randomElement($Kondisi)
        ];
    }
}
