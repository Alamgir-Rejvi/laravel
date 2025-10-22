@extends('layouts.admin')

@section('content')
<div class="container">
    <h2>All Buyers</h2>

    <a href="{{ route('buyers.create') }}" class="btn btn-primary mb-3">Add Buyer</a>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th><th>Name</th><th>Email</th><th>Phone</th><th>Address</th><th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($buyers as $buyer)
            <tr>
                <td>{{ $buyer->id }}</td>
                <td>{{ $buyer->name }}</td>
                <td>{{ $buyer->email }}</td>
                <td>{{ $buyer->phone }}</td>
                <td>{{ $buyer->address }}</td>
                <td>
                    <a href="{{ route('buyers.edit', $buyer->id) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('buyers.destroy', $buyer->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button onclick="return confirm('Are you sure?')" class="btn btn-sm btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
