<?php

namespace App\Http\Controllers;

use App\Models\QuoteRequest;
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
        $quotedata=QuoteRequest::all();

        return view('quote_requests',compact('quotedata'));
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

        QuoteRequest::create($request->all());
        return ['message' => 'quote has been created'];
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\QuoteRequest  $QuoteRequest
     * @return \Illuminate\Http\Response
     */
    public function show(QuoteRequest $QuoteRequest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\QuoteRequest  $QuoteRequest
     * @return \Illuminate\Http\Response
     */
    public function edit(QuoteRequest $QuoteRequest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\QuoteRequest  $QuoteRequest
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, QuoteRequest $QuoteRequest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\QuoteRequest  $QuoteRequest
     * @return \Illuminate\Http\Response
     */
    public function destroy(QuoteRequest $QuoteRequest)
    {
        //
    }
}
