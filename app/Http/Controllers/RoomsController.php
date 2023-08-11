<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;

class RoomsController extends Controller
{
    public function index(){
        $rooms = Room::paginate(5);
        return view('rooms', [
            'rooms' => $rooms,
        ]);
    }
    
    public function show($id){
        $room = Room::findOrFail($id);
        return view('room', ['room' => $room]);
    }

    public function indexOffers(){
        $offers = Room::all();
        return view('offers', [
            'offers' => $offers,
        ]);
    }
}
