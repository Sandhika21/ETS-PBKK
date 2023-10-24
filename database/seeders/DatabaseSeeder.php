<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Barang;
use App\Models\JenisBarang;
use App\Models\KondisiBarang;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        JenisBarang::factory(10)->has(
            Barang::factory()->count(20)
        )->create();

        KondisiBarang::factory(10)->has(
            Barang::factory()->count(20)
        )->create();
    }
}
