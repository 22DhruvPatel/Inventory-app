<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Item;

class ItemSeeder extends Seeder
{
    public function run()
    {
        Item::create(['name' => 'Sony PlayStation 5', 'description' => 'Next-gen gaming console', 'product_code' => 'SNY-PS5', 'price' => 499.99]);
        Item::create(['name' => 'Logitech Mouse', 'description' => 'Wireless ergonomic mouse', 'product_code' => 'LOG-M1', 'price' => 45.50]);
        Item::create(['name' => 'Mechanical Keyboard', 'description' => 'Cherry MX Red switches', 'product_code' => 'KB-MECH', 'price' => 120.00]);
        Item::create(['name' => 'Dell Monitor', 'description' => '27 inch 4K display', 'product_code' => 'DLL-274K', 'price' => 350.25]);
    }
}