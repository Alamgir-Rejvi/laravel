@extends('layouts.admin')

@section('content')
<div class="container">
    <h2>Edit Merchandiser</h2>

    <form action="{{ route('merchandisers.update', $merchandiser->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Name</label>
            <input type="text" name="name" value="{{ $merchandiser->name }}" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" value="{{ $merchandiser->email }}" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Phone</label>
            <input type="text" name="phone" value="{{ $merchandiser->phone }}" class="form-control">
        </div>
        <div class="mb-3">
            <label>Designation</label>
            <textarea name="designation" class="form-control">{{ $merchandiser->address }}</textarea>
        </div>
        <button class="btn btn-primary">Update Merchandiser</button>
    </form>
</div>
@endsection
