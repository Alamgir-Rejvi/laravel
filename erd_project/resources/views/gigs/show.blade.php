@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2>{{ $gig->title }}</h2>
    <p><strong>Category:</strong> {{ $gig->category->name ?? 'N/A' }}</p>
    <p><strong>Description:</strong> {{ $gig->description }}</p>
    <p><strong>Price:</strong> ${{ $gig->price }}</p>
    <p><strong>Delivery Time:</strong> {{ $gig->delivery_time }} days</p>
    <p><strong>Status:</strong> {{ $gig->status }}</p>

    <a href="{{ route('gigs.index') }}" class="btn btn-secondary mt-3">Back to List</a>
</div>
@endsection
