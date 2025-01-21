<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run()
    {
        Product::create([
            'name' => 'Smartphone',
            'description' => 'Latest model with high-resolution camera.',
            'price' => 899.99,
            'category_id' => 1,  // Assuming Category ID 1 is 'Electronics'
            'seller_id' => 1,  // Assuming User ID 1 is 'John Doe'
        ]);

        Product::create([
            'name' => 'Office Chair',
            'description' => 'Comfortable office chair with ergonomic design.',
            'price' => 150.00,
            'category_id' => 2,  // Assuming Category ID 2 is 'Furniture'
            'seller_id' => 2,  // Assuming User ID 2 is 'Jane Smith'
        ]);

        Product::create([
            'name' => 'Leather Jacket',
            'description' => 'Stylish leather jacket for winter.',
            'price' => 199.99,
            'category_id' => 3,  // Assuming Category ID 3 is 'Clothing'
            'seller_id' => 1,  // Assuming User ID 1 is 'John Doe'
        ]);
    }
}

