<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    // GET /api/orders
    public function index()
    {
        return Order::latest()->get();
    }

    // POST /api/orders
    public function store(Request $request)
    {
        $validated = $request->validate([
            'table_number' => 'required|string',
            'items' => 'required|array',
            'items.*.name' => 'required|string',
            'items.*.price' => 'required|numeric',
            'items.*.quantity' => 'required|integer|min:1',
        ]);

        // Hitung total dengan quantity
        $total = collect($validated['items'])->reduce(function ($sum, $item) {
            return $sum + ($item['price'] * $item['quantity']);
        }, 0);

        $order = Order::create([
            'table_number' => $validated['table_number'],
            'items' => $validated['items'],
            'total' => $total,
            'paid' => false,
        ]);

        return response()->json($order, 201);
    }

    // GET /api/orders/{id}
    public function show($id)
    {
        return Order::findOrFail($id);
    }

    // PUT /api/orders/{id}
    public function update(Request $request, $id)
    {
        $order = Order::findOrFail($id);
        $order->update(['paid' => true]);

        return response()->json(['message' => 'Pesanan telah dibayar']);
    }

    // DELETE /api/orders/{id}
    public function destroy($id)
    {
        $order = Order::findOrFail($id);
        $order->delete();

        return response()->json(['message' => 'Pesanan berhasil dihapus']);
    }
}