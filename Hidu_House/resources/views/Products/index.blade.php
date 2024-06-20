@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Products</h1>
        <a href="{{ route('products.create') }}" class="btn btn-primary">Add New Product</a>
        <table class="table mt-4">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Category ID</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td>{{ $product->ProductName }}</td>
                        <td>{{ $product->Price }}</td>
                        <td>{{ $product->Quantity }}</td>
                        <td>{{ $product->CategoryID }}</td>
                        <td>
                            <a href="{{ route('products.edit', $product->ProductID) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('products.destroy', $product->ProductID) }}" method="POST" style="display:inline;">
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
