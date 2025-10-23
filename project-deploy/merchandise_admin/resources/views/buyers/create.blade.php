@extends('layouts.admin')

@section('content')
<div class="container">
    <h2>Add New Buyer</h2>

    <form action="{{ route('buyers.store') }}" method="POST">
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
            <label>Address</label>
            <textarea name="address" class="form-control"></textarea>
        </div>
        <button class="btn btn-success">Save Buyer</button>
    </form>
</div>
@endsection
