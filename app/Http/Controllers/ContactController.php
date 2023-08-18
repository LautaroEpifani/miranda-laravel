<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;

class ContactController extends Controller
{
    public function store(){
        $message = new Message();
        $message -> name = request('fullName');
        $message -> email = request('email');
        $message -> phone = request('phone'); 
        $message -> subject = request('subject'); 
        $message -> comment = request('comment'); 

        $message -> save();

        return redirect('/contact')->with('message', true);

    }
}
