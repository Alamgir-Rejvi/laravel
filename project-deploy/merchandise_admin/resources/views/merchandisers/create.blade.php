@extends('layouts.admin')

@section('content')
<div class="container">
    <h2>Add New Merchandiser</h2>

    <form action="{{ route('merchandisers.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Name</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Phone</label>
            <input type="text" name="phone" class="form-control">
        </div>
        <div class="mb-3">
            <label>Designation</label>
            <textarea name="designation" class="form-control"></textarea>
        </div>
        <button class="btn btn-success">Save Merchandiser</button>
    </form>
</div>
@endsection
