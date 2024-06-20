@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Category Details</h1>
    <div class="card">
        <div class="card-header">
            {{ $category->Name }}
        </div>
        <div class="card-body">
            <a href="{{ route('categorys.edit', $category->Id) }}" class="btn btn-warning">Edit</a>
            <form action="{{ route('categorys.destroy', $category->Id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </div>
    </div>
</div>
@endsection
