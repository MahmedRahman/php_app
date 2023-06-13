<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AppFeaturesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('app_features')->insert([
            [
                'icon' => 'icon1',
                'title' => 'Feature 1',
                'description' => 'This is feature 1',
            ],
            [
                'icon' => 'icon2',
                'title' => 'Feature 2',
                'description' => 'This is feature 2',
            ],
            // ... Repeat for the rest of the features
        ]);
    }
}
