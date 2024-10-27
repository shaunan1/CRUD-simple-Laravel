@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h2>Orders</h2>
        <a href="{{ route('orders.create') }}" class="btn btn-primary mb-2">Add Order</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Product</th>
                    <th>Customer</th>
                    <th>Quantity</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($orders as $order)
                    <tr>
                        <td>{{ $order->id }}</td>
                        <td>{{ $order->product->name }}</td>
                        <td>{{ $order->customer->name }}</td>
                        <td>{{ $order->quantity }}</td>
                        <td>
                            <a href="{{ route('orders.edit', $order->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('orders.destroy', $order->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
