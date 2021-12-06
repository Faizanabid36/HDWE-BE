<?php

namespace App\Http\Controllers;

use App\Models\VisitRequest;
use Illuminate\Http\Request;

class VisitRequestsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $visitdata=VisitRequest::all();
        

        return view('visit_requests',compact('visitdata'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return "from creat";
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
            'visit_date' => 'required',
            'requestor_name' => 'required',
            'adress' => 'required',
            'cell' => 'required',
            'comments' => 'required',
        ]);
        VisitRequest::create($request->all());
        return ['message' => 'visitor requests has been created'];
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\VisitRequest  $VisitRequest
     * @return \Illuminate\Http\Response
     */
    public function show(VisitRequest $VisitRequest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\VisitRequest  $VisitRequest
     * @return \Illuminate\Http\Response
     */
    public function edit(VisitRequest $VisitRequest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\VisitRequest  $VisitRequest
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, VisitRequest $VisitRequest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\VisitRequest  $VisitRequest
     * @return \Illuminate\Http\Response
     */
    public function destroy(VisitRequest $VisitRequest)
    {
        //
    }
}
