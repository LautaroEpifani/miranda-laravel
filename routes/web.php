<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoomsController; 
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});
Route::post('/contact', [ContactController::class, 'create']);

Route::get('/rooms', [RoomsController::class, 'index']);

Route::get('/room/{id}', [RoomsController::class, 'show']);

Route::get('/offers', [RoomsController::class, 'getOffers']);





