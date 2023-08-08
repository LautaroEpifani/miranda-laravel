<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;

class RoomsController extends Controller
{
    public function getRooms(){
        $rooms = Room::all();
      
    
        return view('rooms', [
            'rooms' => $rooms,
        ]);
       }
    
       public function getSingleRoom($id){
        return view('room', ['id' => $id]);
       }
}
