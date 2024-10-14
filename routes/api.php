<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ApiController;
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/reception',[ApiController::class , 'index'])->name('accueil');
Route::post('/storer',[ApiController::class , 'store'])->name('store.name');
Route::get('/details/{id}',[ApiController::class , 'detail'])->name('detail.user');