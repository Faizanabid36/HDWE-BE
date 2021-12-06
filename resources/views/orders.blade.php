@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            
            <h3 class="my-4">List of users who have ordered</h3>
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
                        @foreach ($orderdata as $order)
                           
                       
                        <tr>
                            <th scope="row">{{$order->id}}</th>
                            <td>{{$order->reciever_name}}</td>
                            <td>{{$order->delivery_date}}</td>
                            <td>{{$order->delivery_adress}}</td>
                            <td>{{$order->cell}}</td>
                            <td>{{$order->fop}}</td>
                            <td>{{$order->item_description}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>
@endsection
