@extends('layouts.admin')

@section('content')
<div class="container-fluid mt-4">
    <div class="card shadow-sm">
        <div class="card-header">
            <h4>Production Reports</h4>
        </div>
        <div class="card-body">
            <div class="row mb-3">
                <div class="col-md-3">
                    <div class="card text-center border-success">
                        <div class="card-body">
                            <h5>Total Productions</h5>
                            <h3>{{ $report['total'] }}</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card text-center border-info">
                        <div class="card-body">
                            <h5>In Progress</h5>
                            <h3>{{ $report['in_progress'] }}</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card text-center border-success">
                        <div class="card-body">
                            <h5>Completed</h5>
                            <h3>{{ $report['completed'] }}</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card text-center border-warning">
                        <div class="card-body">
                            <h5>Pending</h5>
                            <h3>{{ $report['pending'] }}</h3>
                        </div>
                    </div>
                </div>
            </div>

            <h5 class="mt-4 mb-3">Buyer-wise Production Summary</h5>
            <table id="reportTable" class="table table-bordered table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>Buyer</th>
                        <th>Total Orders</th>
                        <th>Completed (%)</th>
                        <th>Pending</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($buyerReports as $br)
                    <tr>
                        <td>{{ $br->buyer_name }}</td>
                        <td>{{ $br->total_orders }}</td>
                        <td>{{ $br->completion_rate }}%</td>
                        <td>{{ $br->pending_orders }}</td>
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
    $('#reportTable').DataTable();
});
</script>
@endpush
