<?php

namespace App\Http\Controllers;

use App\Models\Allitem;
use Illuminate\Http\Request;

class AllitemController extends Controller
{
    // GET all items
    public function index()
    {
        return response()->json(Allitem::all());
    }

    // POST create item
    public function store(Request $request)
    {
        $request->validate([
            'brandname' => 'required|string',
            'size' => 'required|string',
            'price' => 'required|numeric',
            'color' => 'required|string',
            'serial_number' => 'required|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $item = new Allitem();

        $item->brandname = $request->brandname;
        $item->size = $request->size;
        $item->price = $request->price;
        $item->color = $request->color;
        $item->serial_number = $request->serial_number;

        // upload image
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('items', 'public');
            $item->image = $path;
        }

        $item->save();

        return response()->json([
            'message' => 'Item created successfully',
            'data' => $item
        ], 201);
    }
}