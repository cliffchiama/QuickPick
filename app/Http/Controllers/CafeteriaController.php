<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CafeteriaController extends Controller
{
    // Show main cafeteria page
    public function index()
    {
        return view('cafeteria.index'); // create this view next
    }

    // Show cafeteria menu
    public function menu()
    {
        return view('cafeteria.menu'); // create this view next
    }

    // Handle orders
    public function order(Request $request)
    {
        // For now, just return the request data
        return response()->json($request->all());
    }
}
