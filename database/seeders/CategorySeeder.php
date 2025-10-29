<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Level 1

        Category::create([
            'name' => 'Incident',
            'parent_id' => null
        ]);

        Category::create([
            'name' => 'General Request',
            'parent_id' => null
        ]);

        // Level 2

        Category::create([
            'name' => 'Hardware',
            'parent_id' => 1
        ]);

        Category::create([
            'name' => 'Software',
            'parent_id' => 1
        ]);

        Category::create([
            'name' => 'Network',
            'parent_id' => 1
        ]);

        // Level 3

        Category::create([
            'name' => 'Server',
            'parent_id' => 2
        ]);

        Category::create([
            'name' => 'Printer',
            'parent_id' => 2
        ]);

        Category::create([
            'name' => 'Router',
            'parent_id' => 2
        ]);

        Category::create([
            'name' => 'Switch',
            'parent_id' => 3
        ]);
    }
}
