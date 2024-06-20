@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Product</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('products.update', $product->ProductID) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="ProductName">Product Name</label>
            <input type="text" class="form-control" id="ProductName" name="ProductName" value="{{ $product->ProductName }}">
        </div>
        <div class="form-group">
            <label for="Price">Price</label>
            <input type="text" class="form-control" id="Price" name="Price" value="{{ $product->Price }}">
        </div>
        <div class="form-group">
            <label for="Quantity">Quantity</label>
            <input type="text" class="form-control" id="Quantity" name="Quantity" value="{{ $product->Quantity }}">
        </div>
        <div class="form-group">
            <label for="CategoryID">Category ID</label>
            <input type="text" class="form-control" id="CategoryID" name="CategoryID" value="{{ $product->CategoryID }}">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
