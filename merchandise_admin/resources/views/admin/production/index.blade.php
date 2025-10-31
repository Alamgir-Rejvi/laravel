@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <div class="card mt-4">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h4>All Productions</h4>
            <a href="{{ route('productions.create') }}" class="btn btn-primary btn-sm">Add Production</a>
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
                        <th>Target Qty</th>
                        <th>Completed Qty</th>
                        <th>Progress</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($productions as $key => $production)
                        <tr>
                            <td>{{ $key+1 }}</td>
                            <td>{{ $production->buyer->name ?? '-' }}</td>
                            <td>{{ $production->product->name ?? '-' }}</td>
                            <td>{{ $production->order_no }}</td>
                            <td>{{ $production->production_date }}</td>
                            <td>{{ $production->target_quantity }}</td>
                            <td>{{ $production->completed_quantity }}</td>
                            <td>
                                <div class="progress" style="height: 20px;">
                                    <div class="progress-bar 
                                        @if($production->progress < 50) bg-danger
                                        @elseif($production->progress < 100) bg-warning
                                        @else bg-success
                                        @endif"
                                        role="progressbar"
                                        style="width: {{ $production->progress }}%;">
                                        {{ $production->progress }}%
                                    </div>
                                </div>
                            </td>
                            <td>
                                <span class="badge 
                                    @if($production->status == 'Pending') bg-secondary
                                    @elseif($production->status == 'In Progress') bg-info
                                    @else bg-success
                                    @endif">
                                    {{ $production->status }}
                                </span>
                            </td>
                            <td>
                                <a href="{{ route('productions.edit', $production->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                <form action="{{ route('productions.destroy', $production->id) }}" method="POST" style="display:inline-block;">
                                    @csrf @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Delete this record?')">Delete</button>
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
    $(document).ready(function() {
        $('#productionTable').DataTable();
    });
</script>
@endpush
