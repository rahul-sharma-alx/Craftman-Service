<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Service;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Service::insert([
            [
                'name' => 'Plumbing',
                'slug' => 'plumbing',
                'description' => 'Expert plumbers for all your plumbing needs.',
                'image_url' => 'https://example.com/plumbing.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Electrical',
                'slug' => 'electrical',
                'description' => 'Professional electricians for safe and reliable service.',
                'image_url' => 'https://example.com/electrical.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Carpentry',
                'slug' => 'carpentry',
                'description' => 'Skilled carpenters for custom woodwork and repairs.',
                'image_url' => 'https://example.com/carpentry.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
