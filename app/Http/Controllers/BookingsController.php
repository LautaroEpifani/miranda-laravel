<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

class BookingsController extends Controller
{
    public function store(Request $request){
        $booking = new Booking();

        $booking -> guest = "test";
        $booking -> room_id = 6;
        $booking -> check_in = request('checkIn'); 
        $booking -> check_out = request('checkOut'); 
        $booking -> special_request = "test special";
        $booking -> status = "Check In";
        $booking -> room_number = 7;
        $booking -> color = " ";
        $booking -> bgrColor = " ";

        $booking -> save();

        $routeName = $request->path();

        if(Str::contains($routeName, 'room')) {
            return redirect('/rooms')->with('message', true);
        } else {
            return redirect('/')->with('message', true);
        }
       
    }
}
