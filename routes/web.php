<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoomsController; 


Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/offers', function () {
    return view('offers');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/rooms', [RoomsController::class, 'getRooms']);

Route::get('/rooms/{id}', [RoomsController::class, 'getSingleRoom']);

