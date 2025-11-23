<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CafeteriaController extends Controller
{
    // Homepage for cafeteria
    public function index()
    {
        return view('cafeteria.index');
    }

    // Menu page
    public function menu()
    {
        // Example menu items
        $menuItems = [
            ['name' => 'Chicken Sandwich', 'price' => 3.5],
            ['name' => 'Veggie Burger', 'price' => 2.5],
            ['name' => 'French Fries', 'price' => 1.5],
            ['name' => 'Juice', 'price' => 1.0],
        ];

        return view('cafeteria.menu', compact('menuItems'));
    }

    // Handle order submission
    public function order(Request $request)
    {
        $order = $request->input('items'); // array of selected items
        return back()->with('success', 'Order placed: ' . implode(', ', $order));
    }
}