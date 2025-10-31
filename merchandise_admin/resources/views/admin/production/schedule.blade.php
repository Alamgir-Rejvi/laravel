@extends('layouts.admin')

@section('content')
<div class="container-fluid mt-4">
    <div class="card shadow-sm">
        <div class="card-header">
            <h4>Production Schedule</h4>
        </div>
        <div class="card-body">
            <table id="scheduleTable" class="table table-bordered table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>#</th>
                        <th>Buyer</th>
                        <th>Product</th>
                        <th>Order No</th>
                        <th>Production Date</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($schedules as $key => $s)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $s->buyer->name ?? '-' }}</td>
                        <td>{{ $s->product->name ?? '-' }}</td>
                        <td>{{ $s->order_no }}</td>
                        <td>{{ $s->production_date }}</td>
                        <td>
                            <span class="badge 
                                @if($s->status=='Pending') bg-secondary
                                @elseif($s->status=='In Progress') bg-info
                                @else bg-success @endif">
                                {{ $s->status }}
                            </span>
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
    $('#scheduleTable').DataTable();
});
</script>
@endpush
