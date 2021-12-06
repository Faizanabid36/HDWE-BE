@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h3 class="my-4">List of users who have requested for visit</h3>
            <div class="col-md-12">
                <table class="table table-striped table-bordered table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Requestor Name</th>
                            <th scope="col">Visit Date</th>
                            <th scope="col">Address</th>
                            <th scope="col">Contact</th>
                            <th scope="col">Comment</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($visitdata as $data)
                           
                       
                        <tr>
                            <th scope="row">{{$data->id}}</th>
                            <td>{{$data->requestor_name}}</td>
                            <td>{{$data->visit_date}}</td>
                            <td>{{$data->adress}}</td>
                            <td>{{$data->cell}}</td>
                            <td>{{$data->comments}}</td>
                        </tr>
                        @endforeach
                      
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>
@endsection
