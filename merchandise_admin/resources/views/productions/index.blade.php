@extends('layouts.admin')

@section('content')
<div class="container-fluid mt-4">
    <div class="card shadow-sm">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h4>All Productions</h4>
            <a href="{{ route('productions.create') }}" class="btn btn-primary btn-sm">+ Add Production</a>
        </div>
        <div class="card-body">
            <table id="productionTable" class="table table-bordered table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>#</th>
                        <th>Buyer</th>
                        <th>Product</th>
                        <th>Order No</th>
                        <th>Date</th>
                        <th>Target</th>
                        <th>Completed</th>
                        <th>Progress</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($productions as $key => $p)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $p->buyer->name ?? '-' }}</td>
                            <td>{{ $p->product->name ?? '-' }}</td>
                            <td>{{ $p->order_no }}</td>
                            <td>{{ $p->production_date }}</td>
                            <td>{{ $p->target_quantity }}</td>
                            <td>{{ $p->completed_quantity }}</td>
                            <td>
                                <div class="progress" style="height: 18px;">
                                    <div class="progress-bar 
                                        @if($p->progress < 50) bg-danger 
                                        @elseif($p->progress < 100) bg-warning 
                                        @else bg-success @endif"
                                        style="width: {{ $p->progress }}%">
                                        {{ $p->progress }}%
                                    </div>
                                </div>
                            </td>
                            <td>
                                <span class="badge 
                                    @if($p->status=='Pending') bg-secondary
                                    @elseif($p->status=='In Progress') bg-info
                                    @else bg-success @endif">
                                    {{ $p->status }}
                                </span>
                            </td>
                            <td>
                                <a href="{{ route('productions.edit', $p->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                <form action="{{ route('productions.destroy', $p->id) }}" method="POST" style="display:inline-block;">
                                    @csrf @method('DELETE')
                                    <button type="submit" onclick="return confirm('Delete this record?')" class="btn btn-sm btn-danger">Delete</button>
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

@push('scripts')
<script>
    $(document).ready(() => {
        $('#productionTable').DataTable();
    });
</script>
@endpush
