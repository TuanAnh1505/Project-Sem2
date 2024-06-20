@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Categories</h1>
    <a href="{{ route('categorys.create') }}" class="btn btn-primary">Add New Category</a>
    @if (session('success'))
        <div class="alert alert-success mt-2">
            {{ session('success') }}
        </div>
    @endif
    <table class="table mt-4">
        <thead>
            <tr>
                <th>Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categorys as $category)
                <tr>
                    <td>{{ $category->Name }}</td>
                    <td>
                        <a href="{{ route('categorys.show', $category->Id) }}" class="btn btn-info">View</a>
                        <a href="{{ route('categorys.edit', $category->Id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('categorys.destroy', $category->Id) }}" method="POST" style="display:inline;">
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
