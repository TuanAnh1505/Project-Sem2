@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Category</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('categorys.update', $category->Id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="Name">Category Name</label>
            <input type="text" class="form-control" id="Name" name="Name" value="{{ $category->Name }}">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
