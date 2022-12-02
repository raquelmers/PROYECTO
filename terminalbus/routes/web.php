<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TravelController;
use App\Http\Controllers\BusController;
use App\Http\Controllers\DepartureController;
use App\Http\Controllers\ArrivalController;
use App\Http\Controllers\PassengerController;
use App\Http\Controllers\TicketController;

Route::get('/', function () {
    return view('welcome');
});
//MAIN VIEW INDEX
Route::get('travel', function () {
    return view('layouts.main');
});
Route::get('http://localhost:8000/api/travel', function(){ return App\Models\Travel::with('bus')->get(); });
// crud bus/departure/arrival/passengers
Route::get('bus', function () {
    return view('layouts.manageBus');
});
Route::get('departure', function () {
    return view('layouts.manageDeparture');
});
Route::get('arrival', function () {
    return view('layouts.manageArrival');
});


//AVAILABLE TRAVELS
Route::resource('travel',TravelController::class);
Route::resource('bus',BusController::class);
Route::resource('departure',DepartureController::class);
Route::resource('arrival',ArrivalController::class);

//CREATE TRAVELS
//Route::post('createTravel', 'App\Http\Controllers\TravelController@store');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});