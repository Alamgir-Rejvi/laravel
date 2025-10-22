@extends('layouts.admin')

@section('content')
<div class="container">
    <h2>Edit Buyer</h2>

    <form action="{{ route('buyers.update', $buyer->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Name</label>
            <input type="text" name="name" value="{{ $buyer->name }}" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" value="{{ $buyer->email }}" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Phone</label>
            <input type="text" name="phone" value="{{ $buyer->phone }}" class="form-control">
        </div>
        <div class="mb-3">
            <label>Address</label>
            <textarea name="address" class="form-control">{{ $buyer->address }}</textarea>
        </div>
        <button class="btn btn-primary">Update Buyer</button>
    </form>
</div>
@endsection
