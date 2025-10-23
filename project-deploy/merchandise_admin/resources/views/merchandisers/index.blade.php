@extends('layouts.admin')

@section('content')
<div class="container">
    <h2>All Merchandisers</h2>

    <a href="{{ route('merchandisers.create') }}" class="btn btn-primary mb-3">Add Merchandiser</a>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th><th>Name</th><th>Email</th><th>Phone</th><th>Designation</th><th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($merchandisers as $merchandiser)
            <tr>
                <td>{{ $merchandiser->id }}</td>
                <td>{{ $merchandiser->name }}</td>
                <td>{{ $merchandiser->email }}</td>
                <td>{{ $merchandiser->phone }}</td>
                <td>{{ $merchandiser->designation }}</td>
                <td>
                    <a href="{{ route('buyers.edit', $merchandiser->id) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('buyers.destroy', $merchandiser->id) }}" method="POST" class="d-inline">
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
