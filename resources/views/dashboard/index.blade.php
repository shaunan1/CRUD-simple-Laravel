@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2>Dashboard</h2>

    <!-- Categories Table -->
    <div class="table-responsive mt-4">
        <h3>Categories</h3>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                    <tr>
                        <td>{{ $category->id }}</td>
                        <td>{{ $category->name }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Products Table -->
    <div class="table-responsive mt-4">
        <h3>Products</h3>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Category</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->category->name }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Suppliers Table -->
    <div class="table-responsive mt-4">
        <h3>Suppliers</h3>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($suppliers as $supplier)
                    <tr>
                        <td>{{ $supplier->id }}</td>
                        <td>{{ $supplier->name }}</td>
                        <td>{{ $supplier->email }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Customers Table -->
    <div class="table-responsive mt-4">
        <h3>Customers</h3>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($customers as $customer)
                    <tr>
                        <td>{{ $customer->id }}</td>
                        <td>{{ $customer->name }}</td>
                        <td>{{ $customer->email }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Orders Table -->
    <div class="table-responsive mt-4">
        <h3>Orders</h3>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Product</th>
                    <th>Customer</th>
                    <th>Quantity</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($orders as $order)
                    <tr>
                        <td>{{ $order->id }}</td>
                        <td>{{ $order->product->name }}</td>
                        <td>{{ $order->customer->name }}</td>
                        <td>{{ $order->quantity }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
