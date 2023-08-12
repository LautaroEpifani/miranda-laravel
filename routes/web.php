<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoomsController; 
use App\Http\Controllers\ContactController;
use App\Http\Controllers\BookingsController;

Route::get('/', function () {
    return view('index');
});

Route::post('/', [BookingsController::class, 'store']);

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});
Route::post('/contact', [ContactController::class, 'store']);

Route::get('/rooms', [RoomsController::class, 'index']);

Route::get('/room/{id}', [RoomsController::class, 'show']);

Route::post('/room/{id}', [BookingsController::class, 'store']);

Route::get('/offers', [RoomsController::class, 'indexOffers']);





