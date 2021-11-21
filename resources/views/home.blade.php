@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-hader">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
            <div class="row">
                    <div class="col-md-6">
                    <div class="card">
                        <h5 class="card-header">Rental Details</h5>
                        <div class="card-body">
                          <h5 class="card-title">Special title treatment</h5>
                          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                          <a href="{{ url('/rentaldetails') }}" class="btn btn-primary">Add details</a>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <h5 class="card-header">Quote detail</h5>
                            <div class="card-body">
                              <h5 class="card-title">Special title treatment</h5>
                              <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                              <a href="{{ url('/quotedetails') }}" class="btn btn-primary">Add details</a>
                            </div>
                          </div>
                        </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                <div class="card">
                    <h5 class="card-header">order details</h5>
                    <div class="card-body">
                      <h5 class="card-title">Special title treatment</h5>
                      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                      <a href="{{ url('/orderdetails') }}" class="btn btn-primary">Add details</a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <h5 class="card-header">Screen visit details</h5>
                        <div class="card-body">
                          <h5 class="card-title">Special title treatment</h5>
                          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                          <a href="{{ url('/screendetails') }}" class="btn btn-primary">Add details</a>
                        </div>
                      </div>
                    </div>
            </div>
        </div>
                
            </div>
        </div>
    </div>
</div>
@endsection
