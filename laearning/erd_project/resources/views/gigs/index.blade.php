@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2>All Gigs</h2>
    <a href="{{ route('gigs.create') }}" class="btn btn-primary mb-3">Create New Gig</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Category</th>
                <th>Price</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($gigs as $gig)
            <tr>
                <td>{{ $gig->id }}</td>
                <td>{{ $gig->title }}</td>
                <td>{{ $gig->category->name ?? 'N/A' }}</td>
                <td>${{ $gig->price }}</td>
                <td>{{ $gig->status }}</td>
                <td>
                    <a href="{{ route('gigs.show', $gig->id) }}" class="btn btn-info btn-sm">View</a>
                    <a href="{{ route('gigs.edit', $gig->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('gigs.destroy', $gig->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm" onclick="return confirm('Delete this gig?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    {{ $gigs->links() }}
</div>
@endsection
