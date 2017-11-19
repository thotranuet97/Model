<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Flight;
class FlightController extends Controller
{
  
    public function show(){
    	$flights = Auth::user()->flight()->get();
    	return view('flight.show',compact('flights'));
    }
}
