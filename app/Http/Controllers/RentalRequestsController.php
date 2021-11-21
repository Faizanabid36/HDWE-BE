<?php

namespace App\Http\Controllers;

use App\Models\rental_requests;
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
        return view('rentaldetails');
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
        return "from rental post";
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\rental_requests  $rental_requests
     * @return \Illuminate\Http\Response
     */
    public function show(rental_requests $rental_requests)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\rental_requests  $rental_requests
     * @return \Illuminate\Http\Response
     */
    public function edit(rental_requests $rental_requests)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\rental_requests  $rental_requests
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, rental_requests $rental_requests)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\rental_requests  $rental_requests
     * @return \Illuminate\Http\Response
     */
    public function destroy(rental_requests $rental_requests)
    {
        //
    }
}
