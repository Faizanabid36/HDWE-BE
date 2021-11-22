<?php

namespace App\Http\Controllers;

use App\Models\quotes_requests;
use Illuminate\Http\Request;

class QuotesRequestsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('quotedetails');
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
            'delivery_date' => 'required',
            'reciever_name' => 'required',
            'delivery_adress' => 'required',
            'cell' => 'required',
            'payment_type' => 'required',
            'item_description' => 'required',
            
        ]);
        
        quotes_requests::create($request->all());
        return ['message' => 'quote has been created'];
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\quotes_requests  $quotes_requests
     * @return \Illuminate\Http\Response
     */
    public function show(quotes_requests $quotes_requests)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\quotes_requests  $quotes_requests
     * @return \Illuminate\Http\Response
     */
    public function edit(quotes_requests $quotes_requests)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\quotes_requests  $quotes_requests
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, quotes_requests $quotes_requests)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\quotes_requests  $quotes_requests
     * @return \Illuminate\Http\Response
     */
    public function destroy(quotes_requests $quotes_requests)
    {
        //
    }
}
