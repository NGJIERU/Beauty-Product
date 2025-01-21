<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run()
    {
        Category::create([
            'name' => 'Electronics',
            'description' => 'Various electronic devices and gadgets.',
        ]);

        Category::create([
            'name' => 'Furniture',
            'description' => 'Furniture and home decoration items.',
        ]);

        Category::create([
            'name' => 'Clothing',
            'description' => 'Apparel and accessories.',
        ]);
    }
}

