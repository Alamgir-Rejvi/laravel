@extends('layouts.admin')

@section('content')
<div class="container mt-4">
    <div class="card shadow-sm">
        <div class="card-header bg-warning text-dark">
            <h5 class="mb-0">Edit Buyer</h5>
        </div>
        <div class="card-body">
            <form action="{{ route('buyers.update', $buyer->id) }}" method="POST">
                @csrf @method('PUT')
                <div class="row g-3">
                    <div class="col-md-6">
                        <label class="form-label">Buyer Name *</label>
                        <input type="text" name="name" value="{{ $buyer->name }}" class="form-control" required>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Company Name</label>
                        <input type="text" name="company_name" value="{{ $buyer->company_name }}" class="form-control">
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Email</label>
                        <input type="email" name="email" value="{{ $buyer->email }}" class="form-control">
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Phone</label>
                        <input type="text" name="phone" value="{{ $buyer->phone }}" class="form-control">
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Country</label>
                        <input type="text" name="country" value="{{ $buyer->country }}" class="form-control">
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Assign Merchandiser *</label>
                        <select name="merchandiser_id" class="form-select" required>
                            @foreach($merchandisers as $m)
                                <option value="{{ $m->id }}" {{ $buyer->merchandiser_id == $m->id ? 'selected' : '' }}>
                                    {{ $m->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="mt-4 text-end">
                    <button type="submit" class="btn btn-warning px-4">Update</button>
                    <a href="{{ route('buyers.index') }}" class="btn btn-secondary">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
