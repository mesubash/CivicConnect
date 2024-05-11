<?php

namespace Database\Seeders;

use App\Models\Local_level;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Local_levelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Local_level::unguard();
        $stateSqlPath=public_path('assets/local_levels.sql');
        DB::unprepared(file_get_contents($stateSqlPath));
    }
}
