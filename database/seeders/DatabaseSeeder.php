<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\Local_levelSeeder;
use Database\Seeders\DistrictSeeder;
use Database\Seeders\ProvinceSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            Local_levelSeeder::class,
            DistrictSeeder::class,
            ProvinceSeeder::class
            ]);
    }
}
