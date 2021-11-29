<?php

namespace App\Http\Controllers;

use App\Models\RentalRequest;
use Illuminate\Http\Request;

class RentalRequestsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('rental_requests');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'date' => 'required',
            'time_period' => 'required',
            'opt_select' => 'required',
            'options' => 'required',
            'tools_description' => 'required',
            'reciever_name' => 'required',
            'delivery_adress' => 'required',
            'cell' => 'required',
            'payment_type' => 'required',


        ]);

        RentalRequest::create($request->all());
        return ['message' => 'rental has been created'];
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RentalRequest  $RentalRequest
     * @return \Illuminate\Http\Response
     */
    public function show(RentalRequest $RentalRequest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RentalRequest  $RentalRequest
     * @return \Illuminate\Http\Response
     */
    public function edit(RentalRequest $RentalRequest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RentalRequest  $RentalRequest
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RentalRequest $RentalRequest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RentalRequest  $RentalRequest
     * @return \Illuminate\Http\Response
     */
    public function destroy(RentalRequest $RentalRequest)
    {
        //
    }
}
