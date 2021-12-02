@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <h5 class="card-header">Rental Details</h5>
                    <div class="card-body">
                        <h4 class="card-title font-weight-bold">{{$RentalCount}}</h4>
                        <h5>Forms Submitted</h5>
                        <a href="{{ route('rental_requests') }}" class="btn btn-primary">View Details</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <h5 class="card-header">Quote detail</h5>
                    <div class="card-body">
                        <h4 class="card-title font-weight-bold">{{$QuotCount}}</h4>
                        <h5>Forms Submitted</h5>
                        <a href="{{ route('quote_requests') }}" class="btn btn-primary">View Details</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-6">
                <div class="card">
                    <h5 class="card-header">Order details</h5>
                    <div class="card-body">
                        <h4 class="card-title font-weight-bold">{{$OrderCount}}</h4>
                        <h5>Forms Submitted</h5>
                        <a href="{{ route('orders') }}" class="btn btn-primary">View Details</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <h5 class="card-header">Visit details</h5>
                    <div class="card-body">
                        <h4 class="card-title font-weight-bold">{{$VisitRequest}}</h4>
                        <h5>Forms Submitted</h5>
                        <a href="{{ route('visit_requests') }}" class="btn btn-primary">View Details</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
