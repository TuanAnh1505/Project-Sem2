@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create New Category</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('categorys.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="Name">Category Name</label>
            <input type="text" class="form-control" id="Name" name="Name" value="{{ old('Name') }}">
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
</div>
@endsection
