@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h3 class="my-4">List of users who have requested for quotations</h3>
            <div class="col-md-12">
                <table class="table table-striped table-bordered table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Reciever Name</th>
                            <th scope="col">Delivery Date</th>
                            <th scope="col">delivery Address</th>
                            <th scope="col">Contact</th>
                            <th scope="col">Form Of Payment</th>
                            <th scope="col">Descrption</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($quotedata as $data)
                           
                       
                        <tr>
                            <th scope="row">{{$data->id}}</th>
                            <td>{{$data->reciever_name}}</td>
                            <td>{{$data->delivery_date}}</td>
                            <td>{{$data->delivery_adress}}</td>
                            <td>{{$data->cell}}</td>
                            <td>{{$data->payment_type}}</td>
                            <td>{{$data->item_description}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>
@endsection
