@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2>Create New Gig</h2>

    <form action="{{ route('gigs.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label>Title</label>
            <input type="text" name="title" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Description</label>
            <textarea name="description" class="form-control" rows="4" required></textarea>
        </div>

        <div class="mb-3">
            <label>Category</label>
            <select name="category_id" class="form-control" required>
                <option value="">Select Category</option>
                @foreach($categories as $cat)
                    <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label>Price ($)</label>
            <input type="number" name="price" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Delivery Time (Days)</label>
            <input type="number" name="delivery_time" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-success">Save Gig</button>
    </form>
</div>
@endsection
