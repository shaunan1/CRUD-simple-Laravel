<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use App\Models\Customer;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::with(['product', 'customer'])->get();
        return view('orders.index', compact('orders'));
    }

    public function create()
    {
        $products = Product::all();
        $customers = Customer::all();
        return view('orders.create', compact('products', 'customers'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'customer_id' => 'required|exists:customers,id',
            'quantity' => 'required|integer|min:1',
        ]);

        Order::create($request->all());

        return redirect()->route('orders.index')
                         ->with('success', 'Order created successfully.');
    }

    public function show(Order $order)
    {
        return view('orders.show', compact('order'));
    }

    public function edit(Order $order)
    {
        $products = Product::all();
        $customers = Customer::all();
        return view('orders.edit', compact('order', 'products', 'customers'));
    }

    public function update(Request $request, Order $order)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'customer_id' => 'required|exists:customers,id',
            'quantity' => 'required|integer|min:1',
        ]);

        $order->update($request->all());

        return redirect()->route('orders.index')
                         ->with('success', 'Order updated successfully.');
    }

    public function destroy(Order $order)
    {
        $order->delete();

        return redirect()->route('orders.index')
                         ->with('success', 'Order deleted successfully.');
    }
}
