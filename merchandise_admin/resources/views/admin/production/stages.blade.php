@extends('layouts.admin')

@section('content')
<div class="container-fluid mt-4">
    <div class="card shadow-sm">
        <div class="card-header">
            <h4>Production Stages</h4>
        </div>
        <div class="card-body">
            <table id="stageTable" class="table table-bordered table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>#</th>
                        <th>Production ID</th>
                        <th>Stage</th>
                        <th>Start Date</th>
                        <th>End Date</th>
                        <th>Status</th>
                        <th>Remarks</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($stages as $key => $s)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $s->production_id }}</td>
                        <td>{{ $s->stage_name }}</td>
                        <td>{{ $s->start_date }}</td>
                        <td>{{ $s->end_date ?? '-' }}</td>
                        <td>
                            <span class="badge 
                                @if($s->status=='Pending') bg-secondary
                                @elseif($s->status=='In Progress') bg-info
                                @else bg-success @endif">
                                {{ $s->status }}
                            </span>
                        </td>
                        <td>{{ $s->remarks ?? '-' }}</td>
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
    $('#stageTable').DataTable();
});
</script>
@endpush
