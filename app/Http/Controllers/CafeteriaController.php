<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CafeteriaController extends Controller
{
    public function menu()
    {
        $menuItems = [
            ['name' => 'Burger', 'price' => 350, 'image' => 'burger.jpg'],
            ['name' => 'Chicken', 'price' => 200, 'image' => 'chicken.jpg'],
            ['name' => 'Bhajia', 'price' => 150, 'image' => 'bhajia.jpg'],
            ['name' => 'Fresh Juice', 'price' => 100, 'image' => 'juice.jpg'],
            ['name' => 'Samosa', 'price' => 50, 'image' => 'samosa.jpg'],
            ['name' => 'Masala Fries', 'price' => 120, 'image' => 'fries.jpg'],
            ['name' => 'Fried Rice', 'price' => 250, 'image' => 'fried_rice.jpg'],
        ];

        return view('Cafeteria.menu', compact('menuItems'));
    }

    public function order(Request $request)
    {
        $items = json_decode($request->items, true);
        return back()->with('success', 'Order placed successfully!');
    }
}
