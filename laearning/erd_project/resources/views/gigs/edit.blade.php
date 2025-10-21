@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2>Edit Gig</h2>

    <form action="{{ route('gigs.update', $gig->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Title</label>
            <input type="text" name="title" class="form-control" value="{{ $gig->title }}" required>
        </div>

        <div class="mb-3">
            <label>Description</label>
            <textarea name="description" class="form-control" rows="4" required>{{ $gig->description }}</textarea>
        </div>

        <div class="mb-3">
            <label>Category</label>
            <select name="category_id" class="form-control" required>
                @foreach($categories as $cat)
                    <option value="{{ $cat->id }}" {{ $gig->category_id == $cat->id ? 'selected' : '' }}>{{ $cat->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label>Price ($)</label>
            <input type="number" name="price" class="form-control" value="{{ $gig->price }}" required>
        </div>

        <div class="mb-3">
            <label>Delivery Time (Days)</label>
            <input type="number" name="delivery_time" class="form-control" value="{{ $gig->delivery_time }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Update Gig</button>
    </form>
</div>
@endsection
