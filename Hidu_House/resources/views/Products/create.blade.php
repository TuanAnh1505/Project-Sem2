@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create New Product</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="ProductName">Product Name</label>
            <input type="text" class="form-control" id="ProductName" name="ProductName" value="{{ old('ProductName') }}">
        </div>
        <div class="form-group">
            <label for="Price">Price</label>
            <input type="text" class="form-control" id="Price" name="Price" value="{{ old('Price') }}">
        </div>
        <div class="form-group">
            <label for="Quantity">Quantity</label>
            <input type="text" class="form-control" id="Quantity" name="Quantity" value="{{ old('Quantity') }}">
        </div>
        <div class="form-group">
            <label for="CategoryID">Category ID</label>
            <input type="text" class="form-control" id="CategoryID" name="CategoryID" value="{{ old('CategoryID') }}">
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
</div>
@endsection
