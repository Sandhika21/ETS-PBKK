<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Barang>
 */
class BarangFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {      

        return [
            'nama'=>$this->faker->sentence(mt_rand(1)),
            'harga'=>$this->faker->randomFloat(2, 10000, 1000000),
            'keterangan'=>$this->faker->sentence(mt_rand(3, 7)),
            'kecacatan'=>$this->faker->sentence(mt_rand(3, 7)),
            'jumlah_barang'=>$this->faker->randomFloat(0, 0, 10000),
            'foto'=>'*.png'
        ];
    }
}
