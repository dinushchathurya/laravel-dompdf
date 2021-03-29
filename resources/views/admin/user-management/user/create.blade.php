@extends('layouts.app')

@section('content')

<div class="br-pageheader pd-y-15 pd-l-20">
    <nav class="breadcrumb pd-0 mg-0 tx-12">
     
    </nav>
</div>
<div class="br-pagebody">
    <div class="br-section-wrapper">
        <form method="POST" enctype="multipart/form-data" action="{{ route('invoice.store') }}">
            @csrf
        <div class="form-layout form-layout-1">
            <div class="row mg-b-25">
                <div class="col-lg-4">
                <div class="form-group">
                    <label class="form-control-label">Customer Name: <span class="tx-danger">*</span></label>
                    <input class="form-control" type="text" id="customer_name" class="form-control @error('customer_name') is-invalid @enderror" name="customer_name" required>
                    @error('customer_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <label class="form-control-label">Address <span class="tx-danger">*</span></label>
                        <input class="form-control" type="text" id="address" class="form-control @error('address') is-invalid @enderror" name="address" required>
                        @error('address')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <label class="form-control-label">Date: <span class="tx-danger">*</span></label>
                        <input class="form-control" type="date" id="date" class="form-control @error('date') is-invalid @enderror" name="date"  required >
                        @error('date')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group mg-b-10-force">
                        <label class="form-control-label">Item <span class="tx-danger">*</span></label>
                        <input class="form-control" type="text" name="item" value="" class="form-control @error('item') is-invalid @enderror required placeholder="Enter Address">
                        @error('item')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group mg-b-10-force">
                        <label class="form-control-label">Quantiy <span class="tx-danger">*</span></label>
                        <input class="form-control" type="number" id="quantity" class="form-control @error('quantity') is-invalid @enderror" name="quantity" required>
                        @error('quantity')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                    @enderror
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group mg-b-10-force">
                        <label class="form-control-label">Issued by <span class="tx-danger">*</span></label>
                        <input class="form-control" type="text" id="issued_by" class="form-control @error('issued_by') is-invalid @enderror" name="issued_by" required>
                        @error('issued_by')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="form-layout-footer">
                <button type="submit" class="btn btn-info">Create new user</button>
                <button class="btn btn-secondary">Cancel</button>
            </div>
        </form>
        </div>
    </div>
</div>

@endsection

