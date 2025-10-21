@extends('layouts.admin')

@section('content')
<div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h4 class="mb-0">All Buyers</h4>
        <a href="{{ route('buyers.create') }}" class="btn btn-primary">+ Add Buyer</a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="card shadow-sm">
        <div class="card-body table-responsive">
            <table class="table table-bordered table-striped align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>#</th>
                        <th>Buyer Name</th>
                        <th>Company</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Country</th>
                        <th>Merchandiser</th>
                        <th width="130">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($buyers as $buyer)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $buyer->name }}</td>
                        <td>{{ $buyer->company_name }}</td>
                        <td>{{ $buyer->email }}</td>
                        <td>{{ $buyer->phone }}</td>
                        <td>{{ $buyer->country }}</td>
                        <td>{{ $buyer->merchandiser->name ?? '-' }}</td>
                        <td>
                            <a href="{{ route('buyers.edit', $buyer->id) }}" class="btn btn-sm btn-warning">Edit</a>
                            <form action="{{ route('buyers.destroy', $buyer->id) }}" method="POST" class="d-inline">
                                @csrf @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger"
                                    onclick="return confirm('Are you sure?')">Del</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
