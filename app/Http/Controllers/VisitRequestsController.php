<?php

namespace App\Http\Controllers;

use App\Models\visit_requests;
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
        
        return view('screendetails');
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
        return "from visitor post";
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\visit_requests  $visit_requests
     * @return \Illuminate\Http\Response
     */
    public function show(visit_requests $visit_requests)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\visit_requests  $visit_requests
     * @return \Illuminate\Http\Response
     */
    public function edit(visit_requests $visit_requests)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\visit_requests  $visit_requests
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, visit_requests $visit_requests)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\visit_requests  $visit_requests
     * @return \Illuminate\Http\Response
     */
    public function destroy(visit_requests $visit_requests)
    {
        //
    }
}
