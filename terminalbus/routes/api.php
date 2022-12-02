<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TravelController;
use App\Http\Controllers\BusController;
use App\Http\Controllers\DepartureController;
use App\Http\Controllers\ArrivalController;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



Route::controller(TravelController::class)->group(function (){
    Route::get('/travel', 'index');
    Route::post('/travel', 'store');
    Route::get('/travel/{id}', 'show');
    Route::put('/travel/{id}', 'update');
    Route::delete('/travel/{id}', 'destroy');
});
Route::controller(BusController::class)->group(function (){
    Route::get('/bus', 'index');
    Route::post('/bus', 'store');
    Route::get('/bus/{id}', 'show');
    Route::put('/bus/{id}', 'update');
    Route::delete('/bus/{id}', 'destroy');
});

Route::controller(DepartureController::class)->group(function (){
    Route::get('/departure', 'index');
    Route::post('/departure', 'store');
    Route::get('/departure/{id}', 'show');
    Route::put('/departure/{id}', 'update');
    Route::delete('/departure/{id}', 'destroy');
});
Route::controller(ArrivalController::class)->group(function (){
    Route::get('/arrival', 'index');
    Route::post('/arrival', 'store');
    Route::get('/arrival/{id}', 'show');
    Route::put('/arrival/{id}', 'update');
    Route::delete('/arrival/{id}', 'destroy');
});;