<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ProductAttribute;

class ProductAttributeSeeder extends Seeder
{
    public function run()
    {
        ProductAttribute::create([
            'product_id' => 1,  // ID of the 'Smartphone'
            'attribute_name' => 'Color',
            'attribute_value' => 'Red',
        ]);

        ProductAttribute::create([
            'product_id' => 1,  // ID of the 'Smartphone'
            'attribute_name' => 'Size',
            'attribute_value' => 'Medium',
        ]);

        ProductAttribute::create([
            'product_id' => 2,  // ID of the 'Office Chair'
            'attribute_name' => 'Color',
            'attribute_value' => 'Black',
        ]);

        ProductAttribute::create([
            'product_id' => 2,  // ID of the 'Office Chair'
            'attribute_name' => 'Size',
            'attribute_value' => 'Large',
        ]);

        ProductAttribute::create([
            'product_id' => 3,  // ID of the 'Leather Jacket'
            'attribute_name' => 'Color',
            'attribute_value' => 'Brown',
        ]);

        ProductAttribute::create([
            'product_id' => 3,  // ID of the 'Leather Jacket'
            'attribute_name' => 'Material',
            'attribute_value' => 'Leather',
        ]);
    }
}


