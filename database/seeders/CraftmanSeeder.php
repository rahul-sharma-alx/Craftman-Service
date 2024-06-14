<?php

namespace Database\Seeders;
use App\Models\Craftman;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CraftmanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        // Create 50 Craftman records
        Craftman::factory()->count(20)->create();
    }
}
