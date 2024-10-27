<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Supplier;
use App\Models\Customer;
use App\Models\Order;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class DashboardController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $products = Product::with('category')->get();
        $suppliers = Supplier::all();
        $customers = Customer::all();
        $orders = Order::with(['product', 'customer'])->get();

        return view('dashboard.index', compact('categories', 'products', 'suppliers', 'customers', 'orders'));
    }

    public function cetak ()
    {
        $dashboard = Category::with('category', 'suppliers')->get();
        $pdf = Pdf::loadView('dashboard.cetak', compact('products'));
        return $pdf->download('cetak.pdf');
    }
}
