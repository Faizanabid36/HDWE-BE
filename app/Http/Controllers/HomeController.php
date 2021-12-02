<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RentalRequest;
use App\Models\QuoteRequest;
use App\Models\VisitRequest;
use App\Models\Order;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $RentalCount=RentalRequest::all()->count();
        $OrderCount=Order::all()->count();
        $QuotCount=QuoteRequest::all()->count();
        $VisitRequest=VisitRequest::all()->count();
        return view('home',compact('RentalCount','OrderCount','QuotCount','VisitRequest'));
    }
}
