<?php

namespace App\Http\Controllers;

use App\Models\BurgerOrder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class BurgerOrderController extends Controller
{
    public function index()
    {
        $orders = BurgerOrder::latest()->get();
        return view('admin.orders', compact('orders'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'customer_name' => 'required|string',
            'telephone' => 'required|string',
            'burger_type' => 'required|string',
            'additional_notes' => 'nullable|string',
        ]);

        $burgerOrder = BurgerOrder::create([
            'customer_name' => $request->customer_name,
            'telephone' => $request->telephone,
            'burger_type' => $request->burger_type,
            'additional_notes' => $request->additional_notes,
        ]);

        return View::make('order_confirmation')->with('order', $burgerOrder);
    }
}
