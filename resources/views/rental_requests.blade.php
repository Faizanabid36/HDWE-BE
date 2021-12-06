@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
           
            <h3 class="my-4">List of users who have requested for rentals</h3>
            <div class="col-md-12">
                <table class="table table-striped table-bordered table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Date</th>
                            <th scope="col">Reciever Name </th>
                            <th scope="col">Time Period</th>
                            <th scope="col">Option</th>
                            <th scope="col">Selected Option</th>
                            <th scope="col">Tool Description</th>
                            
                            <th scope="col">Address</th>
                            <th scope="col">Contact</th>
                            <th scope="col">payment Type</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($RentalData as $item)
                            
                       
                        <tr>
                        <th scope="row">{{$item->id}}</th>
                            <td>{{$item->date}}</td>
                            <td>{{$item->reciever_name}}</td>
                            <td>{{$item->time_period}}</td>
                            <td>{{$item->opt_select}}</td>
                            <td>{{$item->options}}</td>
                            <td>{{$item->tools_description}}</td>
                            
                            <td>{{$item->delivery_adress}}</td>
                            <td>{{$item->cell}}</td>
                            <td>{{$item->payment_type}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>
@endsection
