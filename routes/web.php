<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoomsController; 
use App\Http\Controllers\ContactController;
use App\Http\Controllers\BookingsController;
use App\Http\Controllers\OrdersController;

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

Route::get('/orders/{view}', [OrdersController::class, 'index'])->middleware('auth');
Route::post('/orders/{view}', [OrdersController::class, 'store']);




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
