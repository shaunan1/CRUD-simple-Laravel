@extends('layout')

@section('content')
    <div class="container mt-4">
        <h2>Edit Order</h2>
        <form action="{{ route('orders.update', $order->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="product_id">Product:</label>
                <select name="product_id" class="form-control" required>
                    @foreach($products as $product)
                        <option value="{{ $product->id }}" {{ $product->id == $order->product_id ? 'selected' : '' }}>{{ $product->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="customer_id">Customer:</label>
                <select name="customer_id" class="form-control" required>
                    @foreach($customers as $customer)
                        <option value="{{ $customer->id }}" {{ $customer->id == $order->customer_id ? 'selected' : '' }}>{{ $customer->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="quantity">Quantity:</label>
                <input type="number" name="quantity" class="form-control" value="{{ $order->quantity }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
