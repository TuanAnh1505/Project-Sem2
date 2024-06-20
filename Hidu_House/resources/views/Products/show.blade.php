@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Product Details</h1>
    <div class="card">
        <div class="card-header">
            {{ $product->ProductName }}
        </div>
        <div class="card-body">
            <h5 class="card-title">Price: ${{ $product->Price }}</h5>
            <p class="card-text">Quantity: {{ $product->Quantity }}</p>
            <p class="card-text">Category ID: {{ $product->CategoryID }}</p>
            <a href="{{ route('products.edit', $product->ProductID) }}" class="btn btn-warning">Edit</a>
            <form action="{{ route('products.destroy', $product->ProductID) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </div>
    </div>
</div>
@endsection
