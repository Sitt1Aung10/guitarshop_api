<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class OrderController extends Controller
{
    public function index()
    {
        return response()->json(Order::with('guitar')->get());
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'guitar_id' => 'required|integer|exists:allitems,id',
            'quantity' => 'sometimes|integer|min:1',
            'user_name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'address' => 'required|string',
            'notes' => 'nullable|string',
            'voucher_code' => 'string|max:50',
            'total_price' => 'required|numeric|min:0',
        ]);

        $order = Order::create($validated);

        return response()->json([
            'message' => 'Order created successfully',
            'data' => $order->load('guitar'),
        ], 201);
    }
}