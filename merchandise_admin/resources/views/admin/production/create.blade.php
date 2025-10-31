@extends('layouts.admin')

@section('content')
<div class="container-fluid mt-4">
    <div class="card shadow-sm">
        <div class="card-header">
            <h4>Add New Production</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('productions.store') }}" method="POST">
                @csrf
                <div class="row g-3">
                    <div class="col-md-4">
                        <label>Buyer</label>
                        <select name="buyer_id" class="form-select" required>
                            <option value="">Select Buyer</option>
                            @foreach($buyers as $buyer)
                                <option value="{{ $buyer->id }}">{{ $buyer->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label>Product</label>
                        <select name="product_id" class="form-select" required>
                            <option value="">Select Product</option>
                            @foreach($products as $product)
                                <option value="{{ $product->id }}">{{ $product->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label>Order No</label>
                        <input type="text" name="order_no" class="form-control" placeholder="Enter Order No" required>
                    </div>
                    <div class="col-md-4">
                        <label>Production Date</label>
                        <input type="date" name="production_date" class="form-control" required>
                    </div>
                    <div class="col-md-4">
                        <label>Target Quantity</label>
                        <input type="number" name="target_quantity" class="form-control" required>
                    </div>
                    <div class="col-md-4">
                        <label>Remarks</label>
                        <input type="text" name="remarks" class="form-control" placeholder="Remarks (optional)">
                    </div>
                </div>
                <div class="mt-4 text-end">
                    <button type="submit" class="btn btn-success">Save Production</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
