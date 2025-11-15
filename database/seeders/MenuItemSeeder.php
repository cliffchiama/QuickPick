<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\MenuItems;

class MenuItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
{
    $menuItems = [
        [
            'name' => 'Chicken Burger',
            'description' => 'Grilled chicken with lettuce and tomato',
            'price' => 250.00,
            'available' => true,
        ],
        [
            'name' => 'Beef Samosa',
            'description' => 'Crispy pastry filled with spiced beef',
            'price' => 50.00,
            'available' => true,
        ],
        [
            'name' => 'Chips',
            'description' => 'Golden fried potato chips',
            'price' => 100.00,
            'available' => true,
        ],
        [
            'name' => 'Soda',
            'description' => 'Assorted soft drinks',
            'price' => 80.00,
            'available' => true,
        ],
        [
            'name' => 'Tea',
            'description' => 'Hot milk tea',
            'price' => 30.00,
            'available' => true,
        ],
    ];

    foreach ($menuItems as $item) {
        \App\Models\MenuItems::create($item);
    }
}
}
